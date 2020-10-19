-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2020 at 04:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `level_id` int(11) NOT NULL,
  `level_nama` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `sidebar_1` char(1) DEFAULT 'N',
  `sidebar_2` char(1) DEFAULT 'N',
  `sidebar_3` char(1) DEFAULT 'N',
  `sidebar_4` char(1) DEFAULT 'N',
  `sidebar_5` char(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`level_id`, `level_nama`, `created_at`, `updated_at`, `created_by`, `updated_by`, `sidebar_1`, `sidebar_2`, `sidebar_3`, `sidebar_4`, `sidebar_5`) VALUES
(1, 'admin', '2020-10-18 22:58:52', '2020-10-18 22:58:52', '-', '', 'Y', 'Y', 'Y', 'Y', 'Y'),
(2, 'user', '2020-10-18 22:58:52', '2020-10-18 22:58:52', '-', '', 'Y', 'N', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(20) NOT NULL,
  `user_username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_jk` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_birth_date` date NOT NULL,
  `user_create` datetime NOT NULL,
  `user_last_login` datetime NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_username`, `user_nama`, `user_email`, `user_pass`, `user_jk`, `user_phone`, `user_alamat`, `user_foto`, `user_birth_date`, `user_create`, `user_last_login`, `user_level`) VALUES
(1, 'admin', 'administrator', 'admin@mdf.com', '21232f297a57a5a743894a0e4a801fc3', 'Laki-laki', '081287392684', 'Jl Tanah Tinggi 4, gg.E RT.09/07', 'https://ptmiu.com/king_rosetail_indonesia/assets/images/20202407012954.png', '1996-12-15', '2020-10-18 22:30:07', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
