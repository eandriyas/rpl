<?php

class m_guru extends CI_Model{
//fungsi untuk masuk ke table temporari\
	//fungsi untuk daftar guru
	function insert_temp($param=""){
		$sql = "INSERT INTO `temp_teacher`(`email`,`password`,`key`) VALUES(?,?,?);";
		return $this->db->query($sql, $param);

}
//fungsi untuk select teacher berdasar key daftar
	function is_key_valid($key){
		$sql = "SELECT * FROM temp_teacher";
		$query = $this->db->query($sql, $key);
		if ($query->num_rows()>0) {
			$q_r = $query->row_array();
			$query->free_result();
			return $q_r;
		}
	}
//fungsi untuk menambahkan ke table teacher
function add_to_teacher($key){
	$this->db->where('key', $key);
	$temp_teacher = $this->db->get('temp_teacher');

	if($temp_teacher){
		$row = $temp_teacher->row();
		$data = array(
				'email'=>$row->email,
				'password'=>$row->password
				);
		$did_add_teacher = $this->db->insert('teacher', $data);
		if($did_add_teacher){
			$this->db->where('key', $key);
			$this->db->delete('temp_teacher');
			return $data['email'];
		} return false;
	}
}
//fungsi untuk daftar guru
	function register_teacher($param=""){
		$sql = "INSERT INTO teacher (email, password) VALUES (?,?);";
		return $this->db->query($sql, $param);

}
//fungsi untuk cek login dari guru
function can_login($param=""){
	$sql = "SELECT id_guru, email, password FROM teacher where email = ? AND password = ?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil semua data guru
function get_all_data(){
	$sql = "SELECT *FROM teacher";
	$query = $this->db->query($sql);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil data guru berdasarkan id
function get_by_email($param=""){
	$sql = "SELECT * FROM teacher where email= ?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else return array();

}
//fungsi untuk mengambil data guru berdasarkan id
function get_data_by_id($param=""){
	$sql = "SELECT * FROM teacher where id_guru= ?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else return array();

}
//fungsi untuk update data dari guru
function update_data($param=""){
	$sql = "UPDATE teacher SET nama_lengkap =?, email=?, password=?, ttl=?, jenis_kelamin=?, id_kelas=?, pendidikan_terakhir=?, no_phone=?, alamat=?, deskripsi=? WHERE id_guru=?";
	$query = $this->db->query($sql, $param);
	if($query==true){
		return true;
	} else {
		return false;
	}
}

//fungsi untuk membuat tugas oleh guru

//fungsi untuk mengambil data persiswa berdasar id
function view_image_id($prm){
	$sql = "SELECT * FROM teacher INNER JOIN img_thumb_teacher
			ON teacher.`id_image`=img_thumb_teacher.`id_image`
			WHERE teacher.`id_image`=?";
	$query = $this->db->query($sql, $prm);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil data dari kelas
function get_kelas(){
	$sql = "SELECT * from kelas";
	$query = $this->db->query($sql);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil data dari kelas
function get_kelas_by_id($param=""){
	$sql = "SELECT * FROM mata_pelajaran WHERE id_guru=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
function jumlah_kelas_by_id($param=""){
	$sql = "SELECT COUNT(id_mata_pelajaran) AS 'jumlah' FROM mata_pelajaran WHERE id_guru=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk update gambar profile
//update gambar
function insert_gambar($pr){
	$sql = "INSERT INTO img_thumb_teacher (image_asli, image_thumb) VALUES (?,?)";
		return $this->db->query($sql, $pr);
}
//fungsi untuk mengambil id gambar
function select_id_image(){
	$sql = "SELECT id_image FROM img_thumb_teacher ORDER BY id_image DESC LIMIT 0,1";
	$query = $this->db->query($sql);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk update data image teacher
function update_foto_profil($param=""){
	$sql = "UPDATE teacher SET id_image=? WHERE id_guru=? ";
	$query = $this->db->query($sql, $param);
	if($query==true){
		return true;
	} else return false;
}
//fungsi untuk membuat mata pelajaran oleh guru
function create_class($param=""){
	$sql = "INSERT INTO mata_pelajaran (nama_mapel, deskripsi_mapel, id_guru, id_kelas, style) VALUES (?,?,?,?,?)";
	return $this->db->query($sql, $param);
}
//fungsi untuk mengambil data dari mata pelajaran berdasar idnya
function view_kelas($param=""){
	$sql = "SELECT * FROM mata_pelajaran WHERE id_mata_pelajaran=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil dari file materi berdasar id mata pelajaran
function view_list_materi($param=""){
	$sql = "SELECT file_materi.`id_fm`,file_materi.`title`,file_materi.`file_name`, file_materi.`date_upload`, file_materi.`description`, teacher.`id_guru`, teacher.`nama_lengkap`, mata_pelajaran.`id_mata_pelajaran` FROM file_materi 
			INNER JOIN mata_pelajaran
			ON mata_pelajaran.`id_mata_pelajaran`=file_materi.`id_mata_pelajaran`
			INNER JOIN teacher
			ON mata_pelajaran.`id_guru`=teacher.`id_guru`
			WHERE mata_pelajaran.`id_mata_pelajaran`=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}

//fungsi untuk mengupload materi di kelas
function input_file($param){
	$sql = "INSERT INTO file_materi (title, date_upload, description, id_mata_pelajaran, file_name) VALUES (?, ?, ?, ?, ?)";
	return $this->db->query($sql, $param);
}
//fungsi untuk mengambil data dari file
function view_file_by_id($param=""){
	$sql = "SELECT * FROM file_materi WHERE id_fm=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk hapus data dari file
function rm_file($param=""){
	$sql = "DELETE FROM `rpl_db`.`file_materi` WHERE `id_fm` = ?";
	$query = $this->db->query($sql, $param);
}

}