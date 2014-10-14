-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2014 at 07:48 
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

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('14b2bd573bbced2ce05a3269ebd7457b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.132 Safari/537.36', 1400351365, 'a:2:{s:9:"user_data";s:0:"";s:7:"teacher";a:3:{s:5:"email";s:15:"andri@gmail.com";s:7:"id_guru";s:1:"1";s:9:"logged_in";b:1;}}'),
('210d11b889768526b525ad20397ce8bc', '192.168.1.195', 'Mozilla/5.0 (Linux; U; Android 4.2.2; en-us; CROSS A22 Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 M', 1402224346, ''),
('35d8660772c9a409c18619af8e6e33aa', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1400663612, 'a:2:{s:9:"user_data";s:0:"";s:7:"student";a:3:{s:5:"email";s:19:"andrihost@gmail.com";s:10:"id_student";s:2:"27";s:9:"logged_in";b:1;}}'),
('3d1d945227103200508f819a3b90ec51', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1400948680, ''),
('47c815b2a304c829b79cd14d1567925b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1400657754, 'a:3:{s:9:"user_data";s:0:"";s:7:"teacher";a:3:{s:5:"email";s:19:"eandriyas@gmail.com";s:7:"id_guru";s:1:"6";s:9:"logged_in";b:1;}s:7:"student";a:3:{s:5:"email";s:19:"andrihost@gmail.com";s:10:"id_student";s:2:"27";s:9:"logged_in";b:1;}}'),
('49781f8199a08fd1c300fd4a26ab1b31', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1401078891, ''),
('5eae192f6c443489511c55ee243aa669', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 1412574248, 'a:2:{s:9:"user_data";s:0:"";s:7:"student";a:3:{s:5:"email";s:19:"andrihost@gmail.com";s:10:"id_student";s:2:"27";s:9:"logged_in";b:1;}}'),
('63d960fcc045c2ef4cfc23136195ba36', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36', 1401202131, ''),
('7b1e069e95daac4059beb9dcae8dc6dd', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1405941000, 'a:2:{s:9:"user_data";s:0:"";s:7:"teacher";a:3:{s:5:"email";s:19:"eandriyas@gmail.com";s:7:"id_guru";s:1:"6";s:9:"logged_in";b:1;}}'),
('b91ec2442a2eba776838496d595877dc', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36', 1402407618, 'a:2:{s:9:"user_data";s:0:"";s:7:"student";a:3:{s:5:"email";s:19:"andrihost@gmail.com";s:10:"id_student";s:2:"27";s:9:"logged_in";b:1;}}'),
('cb7063042515ddcbca1d7cc831e42a92', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.132 Safari/537.36', 1400332843, 'a:2:{s:7:"student";a:3:{s:5:"email";s:15:"admin@gmail.com";s:10:"id_student";s:2:"19";s:9:"logged_in";b:1;}s:7:"teacher";a:3:{s:5:"email";s:18:"andriyas@gmail.com";s:7:"id_guru";s:1:"3";s:9:"logged_in";b:1;}}'),
('fb6a19af565354f4ee622148d06eb722', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1400390215, '');

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

--
-- Dumping data for table `file_materi`
--

INSERT INTO `file_materi` (`id_fm`, `title`, `date_upload`, `description`, `id_mata_pelajaran`, `file_name`) VALUES
(1, 'fisika 1', '2014-05-21', 'materi fisika 1', 7, 'ana_dua_a.doc'),
(2, 'matematika', '2014-05-21', '', 7, 'ana.doc');

-- --------------------------------------------------------

--
-- Table structure for table `img_thumb`
--

CREATE TABLE IF NOT EXISTS `img_thumb` (
`id_img` int(11) NOT NULL,
  `image_asli` varchar(100) DEFAULT NULL,
  `image_thumb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `img_thumb`
--

INSERT INTO `img_thumb` (`id_img`, `image_asli`, `image_thumb`) VALUES
(6, 'a', 'b'),
(18, 'http://localhost/ci/RPL/ci_rpl/file/student/19/firefox-29.png', 'file/student/19/thumb243357781.png'),
(19, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-22-220738.jpg', 'file/student/19/thumb703283700.jpeg'),
(20, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-29-124415.jpg', 'file/student/19/thumb70122843.jpeg'),
(21, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-05-13-223232.jpg', 'file/student/19/thumb1492373290.jpeg'),
(22, 'http://localhost/ci/RPL/ci_rpl/file/avatar3.png', 'file/avatar3.png'),
(23, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-22-220702.jpg', 'file/student/19/thumb2078692854.jpeg'),
(24, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-22-220535.jpg', 'file/student/19/thumb820351186.jpeg'),
(25, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-22-220640.jpg', 'file/student/19/thumb147918194.jpeg'),
(26, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-29-124415.jpg', 'file/student/19/thumb1085998061.jpeg'),
(27, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-22-221227.jpg', 'file/student/19/thumb617124276.jpeg'),
(28, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-05-13-223232.jpg', 'file/student/19/thumb819701534.jpeg'),
(29, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-22-220738.jpg', 'file/student/19/thumb1136323858.jpeg'),
(30, 'http://localhost/ci/RPL/ci_rpl/file/student/19/qwer.png', 'file/student/19/thumb356225610.png'),
(31, 'http://localhost/ci/RPL/ci_rpl/file/student/19/2014-04-22-220535.jpg', 'file/student/19/thumb958128247.jpeg'),
(32, 'http://localhost/ci/RPL/ci_rpl/file/student/25/2014-04-25-101952.jpg', 'file/student/25/thumb734375193.jpeg'),
(33, 'http://localhost/ci/RPL/ci_rpl/file/student/26/2014-04-25-101952.jpg', 'file/student/26/thumb1713888358.jpeg'),
(34, 'http://localhost/ci/RPL/ci_rpl/file/student/27/avatar3.png', 'file/student/27/thumb1169287815.png');

-- --------------------------------------------------------

--
-- Table structure for table `img_thumb_teacher`
--

CREATE TABLE IF NOT EXISTS `img_thumb_teacher` (
`id_image` int(11) NOT NULL,
  `image_asli` varchar(100) DEFAULT NULL,
  `image_thumb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `img_thumb_teacher`
--

INSERT INTO `img_thumb_teacher` (`id_image`, `image_asli`, `image_thumb`) VALUES
(1, 'http://localhost/ci/RPL/ci_rpl/file/avatar3.png', 'file/avatar3.png'),
(7, 'http://localhost/ci/RPL/ci_rpl/file/teacher/3/2014-04-29-124415.jpg', 'file/teacher/3/thumb1898283121.jpeg'),
(8, 'http://localhost/ci/RPL/ci_rpl/file/teacher/1/2014-04-22-220535.jpg', 'file/teacher/1/thumb1598006707.jpeg'),
(9, 'http://localhost/ci/RPL/ci_rpl/file/teacher/5/2014-04-22-220535.jpg', 'file/teacher/5/thumb120504545.jpeg'),
(10, 'http://localhost/ci/RPL/ci_rpl/file/teacher/3/2014-04-22-220535.jpg', 'file/teacher/3/thumb395167516.jpeg'),
(11, 'http://localhost/ci/RPL/ci_rpl/file/teacher/6/avatar04.png', 'file/teacher/6/thumb1595898321.png'),
(12, 'http://localhost/ci/RPL/ci_rpl/file/teacher/6/fossil-workshop.jpg', 'file/teacher/6/thumb738616769.jpeg');

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

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `deskripsi`) VALUES
(1, 'IPA', 'mata pelajaran ipa sma secara umum,,,'),
(2, 'IPS', 'mata pelajaran ips'),
(3, 'MTK', 'mata pelajaran matematika,');

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

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `nama_mapel`, `deskripsi_mapel`, `id_guru`, `id_kelas`, `style`) VALUES
(7, 'fisika 1', '', 6, 1, 'bg-maroon'),
(8, 'Matematika', 'matematika diskrit', 6, 3, 'bg-green');

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

--
-- Dumping data for table `siswa_mapel`
--

INSERT INTO `siswa_mapel` (`id_siswa_mapel`, `id_mata_pelajaran`, `id_student`) VALUES
(12, 7, 27),
(13, 8, 27);

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `nama_lengkap`, `email`, `password`, `ttl`, `jenis_kelamin`, `kelas`, `no_phone`, `alamat`, `deskripsi`, `id_image`) VALUES
(27, 'andrihost', 'andrihost@gmail.com', '12345678', '0000-00-00', 'female', '1', '085271443804', '', '', 34);

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

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id_guru`, `nama_lengkap`, `email`, `password`, `ttl`, `jenis_kelamin`, `gambar`, `id_kelas`, `pendidikan_terakhir`, `no_phone`, `alamat`, `deskripsi`, `id_image`) VALUES
(6, 'eandriyas efendi', 'eandriyas@gmail.com', '12345678', '1901-01-02', 'male', NULL, 1, '1', '085271443804', '', '', 12);

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
-- Dumping data for table `temp_teacher`
--

INSERT INTO `temp_teacher` (`idtemp_teacher`, `email`, `password`, `key`) VALUES
(1, 'indra@gmail.com', 'indraadmin', 'a94c846947c140ed71bd46847a0173ef');

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
