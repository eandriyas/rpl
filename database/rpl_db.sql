-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2014 at 05:20 
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id_file` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `tgl_upload` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `file_materi`
--

CREATE TABLE IF NOT EXISTS `file_materi` (
`id_fm` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date_upload` date DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `id_mata_pelajaran` int(11) DEFAULT NULL,
  `file_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `img_thumb`
--

CREATE TABLE IF NOT EXISTS `img_thumb` (
`id_img` int(11) NOT NULL,
  `image_asli` varchar(100) DEFAULT NULL,
  `image_thumb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `img_thumb_teacher`
--

CREATE TABLE IF NOT EXISTS `img_thumb_teacher` (
`id_image` int(11) NOT NULL,
  `image_asli` varchar(100) DEFAULT NULL,
  `image_thumb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_angkatan`
--

CREATE TABLE IF NOT EXISTS `kelas_angkatan` (
  `id_kelas_angkatan` int(11) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `id_student` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='		';

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL,
  `isi_komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `latihan_online`
--

CREATE TABLE IF NOT EXISTS `latihan_online` (
  `id_latihan_online` int(11) NOT NULL,
  `nama_tugas` varchar(255) DEFAULT NULL,
  `soal` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `e` varchar(255) DEFAULT NULL,
  `jawaban` varchar(2) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_mata_pelajaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
`id_mata_pelajaran` int(11) NOT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL,
  `deskripsi_mapel` text,
  `id_guru` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `style` varchar(100) DEFAULT 'bg-maroon'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `respon_tugas`
--

CREATE TABLE IF NOT EXISTS `respon_tugas` (
`id_respon_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(255) DEFAULT NULL,
  `jawaban_siswa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_mapel`
--

CREATE TABLE IF NOT EXISTS `siswa_mapel` (
`id_siswa_mapel` int(11) NOT NULL,
  `id_mata_pelajaran` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id_status` int(11) NOT NULL,
  `isi_status` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id_student` int(11) NOT NULL,
  `nama_lengkap` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `kelas` varchar(45) DEFAULT NULL,
  `no_phone` varchar(45) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `id_image` int(11) DEFAULT '20'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`id_guru` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `ttl` date DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT '1',
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `no_phone` varchar(12) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `id_image` int(11) DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_siswa`
--

CREATE TABLE IF NOT EXISTS `temp_siswa` (
`idtemp_siswa` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_teacher`
--

CREATE TABLE IF NOT EXISTS `temp_teacher` (
`idtemp_teacher` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `file_materi`
--
ALTER TABLE `file_materi`
 ADD PRIMARY KEY (`id_fm`), ADD KEY `file_materi_ibfk_1` (`id_mata_pelajaran`);

--
-- Indexes for table `img_thumb`
--
ALTER TABLE `img_thumb`
 ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `img_thumb_teacher`
--
ALTER TABLE `img_thumb_teacher`
 ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_angkatan`
--
ALTER TABLE `kelas_angkatan`
 ADD PRIMARY KEY (`id_kelas_angkatan`), ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `latihan_online`
--
ALTER TABLE `latihan_online`
 ADD PRIMARY KEY (`id_latihan_online`), ADD KEY `id_mata_pelajaran` (`id_mata_pelajaran`), ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
 ADD PRIMARY KEY (`id_mata_pelajaran`), ADD KEY `mata_pelajaran_ibfk_1` (`id_kelas`), ADD KEY `mata_pelajaran_ibfk_2` (`id_guru`);

--
-- Indexes for table `respon_tugas`
--
ALTER TABLE `respon_tugas`
 ADD PRIMARY KEY (`id_respon_tugas`);

--
-- Indexes for table `siswa_mapel`
--
ALTER TABLE `siswa_mapel`
 ADD PRIMARY KEY (`id_siswa_mapel`), ADD KEY `siswa_mapel_ibfk_1` (`id_mata_pelajaran`), ADD KEY `siswa_mapel_ibfk_2` (`id_student`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id_student`), ADD UNIQUE KEY `email_UNIQUE` (`email`), ADD KEY `id_image` (`id_image`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`id_guru`), ADD KEY `id_kelas` (`id_kelas`), ADD KEY `id_image` (`id_image`);

--
-- Indexes for table `temp_siswa`
--
ALTER TABLE `temp_siswa`
 ADD PRIMARY KEY (`idtemp_siswa`);

--
-- Indexes for table `temp_teacher`
--
ALTER TABLE `temp_teacher`
 ADD PRIMARY KEY (`idtemp_teacher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_materi`
--
ALTER TABLE `file_materi`
MODIFY `id_fm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `img_thumb`
--
ALTER TABLE `img_thumb`
MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `img_thumb_teacher`
--
ALTER TABLE `img_thumb_teacher`
MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `respon_tugas`
--
ALTER TABLE `respon_tugas`
MODIFY `id_respon_tugas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa_mapel`
--
ALTER TABLE `siswa_mapel`
MODIFY `id_siswa_mapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `temp_siswa`
--
ALTER TABLE `temp_siswa`
MODIFY `idtemp_siswa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temp_teacher`
--
ALTER TABLE `temp_teacher`
MODIFY `idtemp_teacher` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_materi`
--
ALTER TABLE `file_materi`
ADD CONSTRAINT `file_materi_ibfk_1` FOREIGN KEY (`id_mata_pelajaran`) REFERENCES `mata_pelajaran` (`id_mata_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
ADD CONSTRAINT `mata_pelajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `mata_pelajaran_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `teacher` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa_mapel`
--
ALTER TABLE `siswa_mapel`
ADD CONSTRAINT `siswa_mapel_ibfk_1` FOREIGN KEY (`id_mata_pelajaran`) REFERENCES `mata_pelajaran` (`id_mata_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `siswa_mapel_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `img_thumb` (`id_img`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`id_image`) REFERENCES `img_thumb_teacher` (`id_image`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
