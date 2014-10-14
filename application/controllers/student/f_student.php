<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/base/base.php';
class f_student extends base {
	public function __construct(){
		parent:: __construct();
		$this->load->library('form_validation');
	}
/*
*************************************
**= ini fungsi untuk register student
*************************************
*/
	public function register_student(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', "Password", 'required|trim');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$key = md5(uniqid());
			$input_tb = array($email, $password, $key);
			if($this->m_student->insert_temp($input_tb)==TRUE){
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
				    <p>please <a href='".site_url()."/student/f_student/key/$key'>Click here</a> to confirm your account </p>
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
			sleep(2);
		} else {
			redirect($this->display());
		}
	}
/*
	*************************************
	**= fungsi untuk konfirm pendaftaran siswa
	*************************************
*/
	public function key($key){
		if($this->m_student->is_key_valid($key)){
			if($newemail = $this->m_student->add_to_student($key)){
				$a = $this->m_student->get_by_email($newemail);
				$newdata = array(
                   'email'     => $newemail,
                   'id_student' => $a['id_student'],
                   'logged_in' => TRUE
               );
			$this->session->set_userdata('student', $newdata);
			}
			redirect('student/student');
		}
	}



/*
******************************
*************= fungsi untuk login student
******************************
*/
			public function login()	{
		
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', "Password", 'required|trim');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$param = array($email, $password);
			$login_valid = $this->m_student->can_login($param);
			if($login_valid!=null){
				$newdata = array(
                   'email'     => $email,
                   'id_student' => $login_valid['id_student'],
                   'logged_in' => TRUE
               		);
				$this->session->set_userdata('student', $newdata);
				redirect('student/student');

				return true;
			} else {
				//$this->load->view('hasil');
				echo "email/password salah";
				return false;
			}
			
		}return false;
	}
}