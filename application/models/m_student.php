<?php
class m_student extends CI_Model{
// fungsi untuk masuk ke table temporari
function insert_temp($param=""){
		$sql = "INSERT INTO `temp_siswa`(`email`,`password`,`key`) VALUES(?,?,?);";
		return $this->db->query($sql, $param);

}
// fungsi untuk select student berdasar key daftar
function is_key_valid($key){
	$sql = "SELECT * FROM temp_siswa";
	$query = $this->db->query($sql, $key);
	if ($query->num_rows()>0) {
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}
}
// fungsi untuk menambahkan siswa yang sudah confirmasi
function add_to_student($key){
	$this->db->where('key', $key);
	$temp_siswa = $this->db->get('temp_siswa');

	if($temp_siswa){
		$row = $temp_siswa->row();
		$data = array(
				'email'=>$row->email,
				'password'=>$row->password
				);
		$did_add_siswa = $this->db->insert('student', $data);
		if($did_add_siswa){
			$this->db->where('key', $key);
			$this->db->delete('temp_siswa');
			return $data['email'];
		} return false;
	}
}
//fungsi untuk daftar student
function register_student($param=""){
		$sql = "INSERT INTO student (email, password) VALUES (?,?);";
		return $this->db->query($sql, $param);
}
//fungsi untuk cek login
function can_login($param=""){
	$sql = "SELECT id_student, email, password FROM student where email = ? AND password = ?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil semua data siswa
function get_all_data(){
	$sql = "SELECT * FROM student";
	$query = $this->db->query($sql);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else {
		return array();
	}
}
//fungsi untuk mengambil data persiswa berdasar id
function get_data_by_id($param=""){
	$sql = "SELECT * FROM student WHERE id_student=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil data persiswa berdasar email
function get_by_email($param=""){
	$sql = "SELECT * FROM student WHERE email=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk mengambil id gambar
function select_id_image(){
	$sql = "SELECT id_img FROM img_thumb ORDER BY id_img DESC LIMIT 0,1";
	$query = $this->db->query($sql);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk update data image siswa
function update_foto_profil($param=""){
	$sql = "UPDATE student SET id_image=? WHERE id_student=? ";
	$query = $this->db->query($sql, $param);
	if($query==true){
		return true;
	} else return false;
}
//fungsi untuk update data siswa berdasar id
function update_data($param=""){
	$sql = "UPDATE student SET nama_lengkap = ?, email =?, password=?, ttl=?, jenis_kelamin=?, kelas=?, no_phone=?, alamat=?, deskripsi=? WHERE id_student=? ";
	$query = $this->db->query($sql, $param);
	if($query==true){
		return true;
	} else return false;
}
//update gambar
function insert_gambar($pr){
	$sql = "INSERT INTO img_thumb (image_asli, image_thumb) VALUES (?,?)";
		return $this->db->query($sql, $pr);
}

//fungsi untuk mengambil data persiswa berdasar id
function view_image_id($prm){
	$sql = "SELECT img_thumb.`image_thumb` FROM student INNER JOIN img_thumb ON student.`id_image`=img_thumb.`id_img` WHERE student.`id_image`=?";
	$query = $this->db->query($sql, $prm);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk melihat kelas yang tersedia
function get_kelas(){
	$sql = "SELECT * from mata_pelajaran";
	$query = $this->db->query($sql);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk join kelas
function join_kelas($pr){
	$sql = "INSERT INTO siswa_mapel (id_mata_pelajaran, id_student) VALUES (?,?)";
		return $this->db->query($sql, $pr);
}
//fungsi untuk melihat kelas berdasarkan id student
function get_kelas_by_id($param=""){
	$sql = "SELECT * FROM siswa_mapel
			INNER JOIN mata_pelajaran
			ON siswa_mapel.`id_mata_pelajaran`=mata_pelajaran.`id_mata_pelajaran`
			WHERE siswa_mapel.`id_student`=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk melihat kelas berdasarkan id student
function materi_kelas($param=""){
	$sql = "SELECT	* FROM file_materi
			INNER JOIN mata_pelajaran
			ON file_materi.`id_mata_pelajaran`=mata_pelajaran.`id_mata_pelajaran`
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
//fungsi untuk melihat guru kelas berdasarkan id student
function get_teacher_class($param=""){
	$sql = "SELECT teacher.`nama_lengkap`, teacher.`id_kelas`, teacher.`id_image` FROM mata_pelajaran
			INNER JOIN teacher
			ON mata_pelajaran.`id_guru`=teacher.`id_guru`
			WHERE mata_pelajaran.`id_mata_pelajaran`=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk melihat guru kelas berdasarkan id student
function get_teacher_study($param=""){
	$sql = "SELECT kelas.`nama_kelas` FROM kelas
			INNER JOIN teacher
			ON teacher.`id_kelas`=kelas.`id_kelas`
			WHERE teacher.`id_kelas`=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk melihat guru kelas berdasarkan id student
function get_teacher_image($param=""){
	$sql = "SELECT img_thumb_teacher.`image_thumb` FROM teacher
			INNER JOIN img_thumb_teacher
			ON teacher.`id_image`=img_thumb_teacher.`id_image`
			WHERE teacher.`id_image`=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->row_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}
//fungsi untuk melihat guru kelas berdasarkan id student
function get_student_class($param=""){
	$sql = "SELECT student.`nama_lengkap`, student.`email`, student.`no_phone` FROM mata_pelajaran
			INNER JOIN siswa_mapel
			ON mata_pelajaran.`id_mata_pelajaran`=siswa_mapel.`id_mata_pelajaran`
			INNER JOIN student
			ON student.`id_student`=siswa_mapel.`id_student`
			WHERE siswa_mapel.`id_mata_pelajaran`=?";
	$query = $this->db->query($sql, $param);
	if($query->num_rows()>0){
		$q_r = $query->result_array();
		$query->free_result();
		return $q_r;
	}else{
		return array();
	}
}

}