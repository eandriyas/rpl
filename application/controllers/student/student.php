<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/base/base.php';
class student extends base {
	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('student', 'is_logged_in')){
			redirect('/pub');
		}

	}
	public function index()
	{
		$log = $this->session->userdata('student', 'id_student');
		$data['student']= $this->m_student->get_data_by_id($log['id_student']);
		$data['thumb'] = $this->m_student->view_image_id($data['student']['id_image']);
		$this->display_student('student/dashboard', $data);
	}
	public function profile()
	{
		$log = $this->session->userdata('student', 'id_student');
		$id_student = $log['id_student'];
		$data['student']= $this->m_student->get_data_by_id($log['id_student']);
		$data['thumb'] = $this->m_student->view_image_id($data['student']['id_image']);
			// echo $thumb['image_thumb'];

			// print_r($thumb);
		// $this->load->view('student/profile');
		$this->display_student('student/profile', $data);
	}
	public function update_profile(){
		$log = $this->session->userdata('student', 'id_student');
		$id_student = $log['id_student'];
		print_r($_POST);
		print_r($log);

		$nama_lengkap = $this->input->post('nama_lengkap' );
		$ttl = $this->input->post('ttl');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$no_phone = $this->input->post('no_phone');
		$kelas = $this->input->post('kelas');
		$alamat = $this->input->post('alamat');
		$deskripsi = $this->input->post('deskripsi');
		// $gambar = $this->input->post('gambar');
		/*$gambar = $_FILES['gambar'];
		$gambar_name=  str_replace(" ", "_", $gambar['name']);
		*/
		$data_update = array($nama_lengkap, $email, $password, $ttl, $jenis_kelamin, $kelas, $no_phone, $alamat, $deskripsi, $id_student);
		$data = $this->m_student->update_data($data_update);

		if($data==TRUE){
			if (!file_exists('file/student/'.$id_student)) {
				mkdir('file/student/'.$id_student, 0777, true);
			}
			/*//memanggil sebuah library CI yaitu upload
			$this->load->library('upload');
				//konfigurasi letak file akan ditematkan ketika upload
			$config['upload_path'] = 'file/student/'.$id_student;
				//konfigurasi file apa saja yang bisa diupload
			$config['allowed_types'] = 'gif|jpg|png';
				//jika ada file dengan nama yang sama maka langsung direplace
			$config['overwrite'] = true;
				//memasukkan konfigurasi ke fungsi initialize untuk dicek kebenarannya
			$this->upload->initialize($config);
				//memanggil fungsi do_upload yang akan meng-upload file gambar_besar
			$this->upload->do_upload('gambar');
				//jika upload gagal makal menampilkan error
			echo $this->upload->display_errors();
			*/
			redirect('student/student/profile');
		} else {
				//jika gagal melalukan penambahan baik kedatabase maupun upload maka menampilkan gagal disimpan
			echo "gagal disimpan";
		}

	}
	public function message(){
		$log = $this->session->userdata('student', 'id_student');
		$data['student']= $this->m_student->get_data_by_id($log['id_student']);
		$data['thumb'] = $this->m_student->view_image_id($data['student']['id_image']);
		// $this->load->view('student/message');
		$this->display_student('student/message', $data);
	}
	public function assignment(){
		// $this->load->view('student/assignment');
		$log = $this->session->userdata('student', 'id_student');
		$data['student']= $this->m_student->get_data_by_id($log['id_student']);
		$data['thumb'] = $this->m_student->view_image_id($data['student']['id_image']);
		$this->display_student('student/assignment', $data);
	}
	public function class_student(){
		// $this->load->view('student/class');
		$log = $this->session->userdata('student', 'id_student');
		$data['student']= $this->m_student->get_data_by_id($log['id_student']);
		$data['thumb'] = $this->m_student->view_image_id($data['student']['id_image']);
		$data['kelas'] = $this->m_student->get_kelas();
		$data['kelasmu'] = $this->m_student->get_kelas_by_id($log['id_student']);
		$this->display_student('student/class', $data);
	}
	public function join_class($id_mapel){
		$log = $this->session->userdata('student', 'id_student');
		$join_data = array($id_mapel, $log['id_student']);
		$join = $this->m_student->join_kelas($join_data);
		redirect('student/student/class_student');

	}
	public function in_class_student($id_mapel){
		// $this->load->view('student/inclass');
		$log = $this->session->userdata('student', 'id_student');
		$data['student']= $this->m_student->get_data_by_id($log['id_student']);
		$data['thumb'] = $this->m_student->view_image_id($data['student']['id_image']);
		$data['materi'] = $this->m_student->materi_kelas($id_mapel);
		$data['teacher'] = $this->m_student->get_teacher_class($id_mapel);
		$data['study'] = $this->m_student->get_teacher_study($data['teacher']['id_kelas']);
		$data['t_image'] = $this->m_student->get_teacher_image($data['teacher']['id_image']);
		$data['l_student'] = $this->m_student->get_student_class($id_mapel);
		$this->display_student('student/inclass', $data);
	}
	public function dash(){
		$log = $this->session->userdata('student', 'id_student');
		$data['student']= $this->m_student->get_data_by_id($log['id_student']);
		$data['thumb'] = $this->m_student->view_image_id($data['student']['id_image']);
		// $this->load->view('student/dashboard', $data);
		$this->display_student('student/dashboard', $data);
	}
	public function image_crop(){
		$log = $this->session->userdata('student', 'id_student');
		$id_student = $log['id_student'];
		$imagePath = "file/student/".$id_student."/";
		$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
		$lower=  str_replace(" ", "-", $_FILES["img"]["name"]);
				//merubah nama file menjadi lowercase
		$asdf = strtolower($lower);
		$temp = explode(".", $asdf);
		$extension = end($temp);
		if ( in_array($extension, $allowedExts))
		{
			if ($_FILES["img"]["error"] > 0)
			{
				$response = array(
					"status" => 'error',
					"message" => 'ERROR Return Code: '. $_FILES["img"]["error"],
					);
				echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
			}
			else
			{

				$filename = $_FILES["img"]["tmp_name"];

				list($width, $height) = getimagesize( $filename );
				move_uploaded_file($filename,  $imagePath . $asdf);
				$response = array(
					"status" => 'success',
					"url" => base_url().$imagePath.$asdf,
					"width" => $width,
					"height" => $height
					);

			}
		}
		else
		{
			$response = array(
				"status" => 'error',
				"message" => 'something went wrong',
				);
		}

		print json_encode($response);

	}
	public function img_crop_file(){
		$log = $this->session->userdata('student', 'id_student');
		$id_student = $log['id_student'];
		$imgUrl = $_POST['imgUrl'];
		$imgInitW = $_POST['imgInitW'];
		$imgInitH = $_POST['imgInitH'];
		$imgW = $_POST['imgW'];
		$imgH = $_POST['imgH'];
		$imgY1 = $_POST['imgY1'];
		$imgX1 = $_POST['imgX1'];
		$cropW = $_POST['cropW'];
		$cropH = $_POST['cropH'];
		$jpeg_quality = 100;
		$output_filename = "file/student/".$id_student."/thumb".rand();
		$what = getimagesize($imgUrl);
		switch(strtolower($what['mime']))
		{
			case 'image/png':
			$img_r = imagecreatefrompng($imgUrl);
			$source_image = imagecreatefrompng($imgUrl);
			$type = '.png';
			break;
			case 'image/jpeg':
			$img_r = imagecreatefromjpeg($imgUrl);
			$source_image = imagecreatefromjpeg($imgUrl);
			$type = '.jpeg';
			break;
			case 'image/gif':
			$img_r = imagecreatefromgif($imgUrl);
			$source_image = imagecreatefromgif($imgUrl);
			$type = '.gif';
			break;
			default: die('image type not supported');
		}

		$resizedImage = imagecreatetruecolor($imgW, $imgH);
		imagecopyresampled($resizedImage, $source_image, 0, 0, 0, 0, $imgW,
			$imgH, $imgInitW, $imgInitH);


		$dest_image = imagecreatetruecolor($cropW, $cropH);
		imagecopyresampled($dest_image, $resizedImage, 0, 0, $imgX1, $imgY1, $cropW,
			$cropH, $cropW, $cropH);
		imagejpeg($dest_image, $output_filename.$type, $jpeg_quality);

		$b = array($imgUrl, $output_filename.$type);
		$this->m_student->insert_gambar($b);

		$response = array(
			"status" => 'success',
			"url" => $output_filename.$type,
			"image_url" => base_url()

			);
		print json_encode($response);

	// print json_encode($response);
	}
	public function update_foto(){
		$a = $this->input->post('id_student');
		$id = $this->m_student->select_id_image();
		$upfoto = array($id['id_img'], $a);
		if($this->m_student->update_foto_profil($upfoto)==true){
			redirect('student/student/profile');
		} else{
			echo "gagal";
		}

	}
	public function sess_destroy(){
		$this->session->unset_userdata('student');
		$this->session->sess_destroy();
		redirect('/pub');
	}
}