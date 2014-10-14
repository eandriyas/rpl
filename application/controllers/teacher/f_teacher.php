<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/base/base.php';
class f_teacher extends base {
	public function __construct(){
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('m_guru');
	}
	public function register_teacher(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[teacher.email]');
		$this->form_validation->set_rules('password', "Password", 'required|trim');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$key = md5(uniqid());
			$insert_tb = array('email'=>$email, 'password'=>$password, 'key'=>$key);
			if($this->m_guru->insert_temp($insert_tb)==TRUE){
				$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'efendiandriyas@gmail.com', // change it to yours
				'smtp_pass' => 'list2325', // change it to yours
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE
				);
				$message = "
				<html>
				<body>
				    <h1>Thank you for signing up!</h1>
				    <p>please <a href='".site_url()."/teacher/f_teacher/key/$key'>Click here</a> to confirm your account </p>
				</body>
				</html>
				";
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from('efendiandriyas@gmail.com'); // change it to yours
				$this->email->to($email);// change it to yours
				$this->email->subject('Confirm your account');
				$this->email->message($message);
				if($this->email->send())
				{
				// echo 'Email sent.';
				}
				else
				{
				show_error($this->email->print_debugger());
				}
			}
			// $this->m_guru->register_teacher($param);
			sleep(2);
		} else {
			redirect($this->display());
		}
	}
	public function key($key){
		if($this->m_guru->is_key_valid($key)){
			if($newemail = $this->m_guru->add_to_teacher($key)){
				$a = $this->m_guru->get_by_email($newemail);
				$newdata = array(
					'email'=> $newemail,
					'id_guru' => $a['id_guru'],
					'logged_in' => TRUE
					);
			$this->session->set_userdata('teacher', $newdata);
			}
			redirect('teacher/teacher');
		}
	}
		public function login()	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', "Password", 'required|trim');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$param = array($email, $password);
			$login_t_valid = $this->m_guru->can_login($param);
			if($login_t_valid!=null){
				$new = array(
					'email'     => $email,
					'id_guru' => $login_t_valid['id_guru'],
					'logged_in' => TRUE
					);
				$this->session->set_userdata('teacher', $new);
				redirect('teacher/teacher');
				return true;
			}{
				echo "email/password salah";
				return false;
			}
		}
	}
}