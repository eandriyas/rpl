<?php if(!defined('BASEPATH')) exit('No direct script access allow');
//membuat fungsi utama base
class base extends CI_Controller{
	//membuat fungsi contruct yang bisa diakses disemua fungsi
	public function __construct(){
		parent::__construct();
		$this->load->model('m_student');
		$this->load->model('m_guru');

	}
	//membuat fungsi display untuk menampilkan tampilan standar
	public function display(){
		//memanggil view
		$this->load->view('base/base_view');
	}
	public function display_student($viewnya="", $data=""){
		$data['template_student'] = $viewnya;
		$this->load->view('base/base_student', $data);
	}
	public function display_teacher($view_t="", $data=""){
		$data['template_teacher'] = $view_t;
		$this->load->view('base/base_teacher', $data);
	}
}