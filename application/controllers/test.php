<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class test extends CI_Controller {
	
	public function index()
	{
		$this->load->view('test_view');
	}
	public function input_contact(){
		print_r($_POST);
		$this->load->view('hasil');
	}
	public function test_2(){
		$this->load->view('test_2');
	}
	public function username_taken()
	{
//$this->load->model('Login');
		$username = trim($_POST['username']);
		echo "gak";
//    if ($this->Login->login_check($username))
//      echo "exists";
//   else
// echo "not exists";
	}
}
/* End of file test.php */
/* Location: ./application/controllers/test.php */