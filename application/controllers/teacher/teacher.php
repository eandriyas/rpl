<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/base/base.php';
class teacher extends base {
	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('teacher', 'is_logged_in')){
			redirect('/pub');
		}

	}
	public function index()
	{
		$log = $this->session->userdata('teacher', 'id_guru');
		$data['teacher'] = $this->m_guru->get_data_by_id($log['id_guru']);
		$data['thumb'] = $this->m_guru->view_image_id($data['teacher']['id_image']);
		$data['jumlah'] = $this->m_guru->jumlah_kelas_by_id($log['id_guru']);
		$this->display_teacher('teacher/dashboard', $data);
	}
	public function profile(){
		$log = $this->session->userdata('teacher', 'id_guru');
		$data['kelas'] = $this->m_guru->get_kelas();
		$data['teacher'] = $this->m_guru->get_data_by_id($log['id_guru']);
		$data['thumb'] = $this->m_guru->view_image_id($data['teacher']['id_image']);
		$data['jumlah'] = $this->m_guru->jumlah_kelas_by_id($log['id_guru']);
		$this->display_teacher('teacher/profile', $data);
	}
	public function update_profile(){
		$log = $this->session->userdata('teacher', 'id_guru');
		$id_guru = $log['id_guru'];
		 $nama_lengkap = $this->input->post('nama_lengkap');
		 $ttl = $this->input->post('ttl');
		 $jenis_kelamin = $this->input->post('jenis_kelamin');
		 $email = $this->input->post('email');
		 $password = $this->input->post('password');
		 $no_phone = $this->input->post('no_phone');
		 $alamat = $this->input->post('alamat');
		 $deskripsi = $this->input->post('deskripsi');
		 $bidang_mapel = $this->input->post('bidang');
		 $pendidikan_terakhir = $this->input->post('pendidikan');
		 $data_guru = array($nama_lengkap, $email, $password, $ttl, $jenis_kelamin, $bidang_mapel, $pendidikan_terakhir, $no_phone, $alamat, $deskripsi, $id_guru);
		 $update = $this->m_guru->update_data($data_guru);

		 if($update==TRUE){
			if (!file_exists('file/teacher/'.$id_guru)) {
   				 mkdir('file/teacher/'.$id_guru, 0777, true);
			}
			/*//memanggil sebuah library CI yaitu upload
			$this->load->library('upload');
				//konfigurasi letak file akan ditematkan ketika upload
			$config['upload_path'] = 'file/teacher/'.$id_guru;
				//konfigurasi file apa saja yang bisa diupload
			$config['allowed_types'] = 'gif|jpg|png';
				//jika ada file dengan nama yang sama maka langsung direplace
			$config['overwrite'] = true;
				//memasukkan konfigurasi ke fungsi initialize untuk dicek kebenarannya
			$this->upload->initialize($config);
				//memanggil fungsi do_upload yang akan meng-upload file gambar_besar
			$this->upload->do_upload('gambar');
				//jika upload gagal makal menampilkan error
			echo $this->upload->display_errors();*/
			redirect('teacher/teacher/profile');


		} else { 
				//jika gagal melalukan penambahan baik kedatabase maupun upload maka menampilkan gagal disimpan
			echo "gagal disimpan"; 
		}
	}
	public function message(){

		$log = $this->session->userdata('teacher', 'id_guru');
		$data['teacher'] = $this->m_guru->get_data_by_id($log['id_guru']);
		$data['thumb'] = $this->m_guru->view_image_id($data['teacher']['id_image']);
		$data['jumlah'] = $this->m_guru->jumlah_kelas_by_id($log['id_guru']);
		$this->display_teacher('teacher/message', $data);
	}
	public function kelas(){
		$log = $this->session->userdata('teacher', 'id_guru');
		$data['teacher'] = $this->m_guru->get_data_by_id($log['id_guru']);
		$data['thumb'] = $this->m_guru->view_image_id($data['teacher']['id_image']);
		$data['kelas'] = $this->m_guru->get_kelas();
		$data['mapel'] = $this->m_guru->get_kelas_by_id($log['id_guru']);
		$data['jumlah'] = $this->m_guru->jumlah_kelas_by_id($log['id_guru']);
		$this->display_teacher('teacher/class-guru', $data);

	}
	public function create_class(){
		$id_guru = $this->input->post('id_guru');
		$name = $this->input->post('name');
		$kelas = $this->input->post('kelas');
		$description = $this->input->post('description');
		$style = $this->input->post('style');
		$input = array($name, $description, $id_guru, $kelas, $style);
		
		if($this->m_guru->create_class($input)==true){
			redirect('teacher/teacher/kelas');
		}


	}

	public function inclass_guru($id){
		$log = $this->session->userdata('teacher', 'id_guru');
		$data['teacher'] = $this->m_guru->get_data_by_id($log['id_guru']);
		$data['thumb'] = $this->m_guru->view_image_id($data['teacher']['id_image']);
		$data['jumlah'] = $this->m_guru->jumlah_kelas_by_id($log['id_guru']);
		$data['isi_kelas'] = $this->m_guru->view_kelas($id);
		$data['view_list_materi'] = $this->m_guru->view_list_materi($id);
		$this->display_teacher('teacher/inclass-guru', $data);
	}
	public function upload_file(){
		$log = $this->session->userdata('teacher', 'id_guru');
		$id_guru = $log['id_guru'];
		$title_materi = $this->input->post('judul_materi');
		$tanggal = date("Y-m-d");
		$description = $this->input->post('deskripsi_materi');
		$id_mapel = $this->input->post('id_mapel');
		$title = $this->input->post('file_name');
		$title = $_FILES['file_name'];
		$lower= strtolower($title['name']);
		$title_name= str_replace(" ", "_", $lower);
		$object = array($title_materi, $tanggal, $description, $id_mapel, $title_name);
		$input = $this->m_guru->input_file($object);
		if($input==true){
			if (!file_exists('file/teacher/'.$id_guru.'/materi')) {
   				 mkdir('file/teacher/'.$id_guru.'/materi', 0777, true);
			}
			//memanggil sebuah library CI yaitu upload
			$this->load->library('upload');
				//konfigurasi letak file akan ditematkan ketika upload
			$config['upload_path'] = 'file/teacher/'.$id_guru.'/materi/';
				//konfigurasi file apa saja yang bisa diupload
			$config['allowed_types'] = 'doc|docx|pdf|odt|ppt';
				//jika ada file dengan nama yang sama maka langsung direplace
			$config['overwrite'] = true;
				//rubah nama file
			$config['file_name'] = $lower;
				//memasukkan konfigurasi ke fungsi initialize untuk dicek kebenarannya
			$this->upload->initialize($config);
				//memanggil fungsi do_upload yang akan meng-upload file gambar_besar
			$this->upload->do_upload('file_name');
				//jika upload gagal makal menampilkan error
			echo $this->upload->display_errors();
			redirect('teacher/teacher/kelas');
		}
	}
	public function image_upload(){
		$log = $this->session->userdata('teacher', 'id_guru');
		$id_teacher = $log['id_guru'];

		$imagePath = "file/teacher/".$id_teacher."/";
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
		$log = $this->session->userdata('teacher', 'id_guru');
		$id_teacher = $log['id_guru'];
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
		$output_filename = "file/teacher/".$id_teacher."/thumb".rand();
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
		$this->m_guru->insert_gambar($b);

		$response = array(
			"status" => 'success',
			"url" => $output_filename.$type,
			"image_url" => base_url()

			);
		print json_encode($response);

	// print json_encode($response);
	}
	public function update_foto(){
		$a = $this->input->post('id_guru');

		$id = $this->m_guru->select_id_image();
		print_r($id);
		$upfoto = array($id['id_image'], $a);
		if($this->m_guru->update_foto_profil($upfoto)==true){
			redirect('teacher/teacher/profile');
		} else{
			echo "gagal";
		}
	}

	public function sess_destroy(){
		$this->session->unset_userdata('teacher');
		$this->session->sess_destroy();
		redirect('/pub');
	}
	public function delete_file($id_file){
		echo $id_file;
		$log = $this->session->userdata('teacher', 'id_guru');
		$id_guru = $log['id_guru'];
		$file = $this->m_guru->view_file_by_id($id_file);
		$path_file = 'file/teacher/'.$id_guru.'/materi/'.$file['file_name'];
		unlink($path_file);
		$rm_db = $this->m_guru->rm_file($id_file);
		header("location:javascript://history.go(-1)");

	}

}