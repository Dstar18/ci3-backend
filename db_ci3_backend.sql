-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2023 at 12:18 PM
-- Server version: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci3_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `idrole` int(12) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`idrole`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `iduser` int(12) NOT NULL,
  `role_id` int(12) NOT NULL COMMENT 'fk_role',
  `nip` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `session_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`iduser`, `role_id`, `nip`, `email`, `firstname`, `lastname`, `password`, `created_at`, `update_at`, `session_at`) VALUES
(1, 1, 12345678, 'dedi@mail.com', 'dedi', 'codes', 'dedi12345', '2023-04-27 16:06:24', '2023-04-27 16:06:24', '2023-04-27 16:06:24'),
(3, 2, 11111111, 'boy2@mail.com', 'boy2', 'rw2', '0769f2098b79875c85a888bd18f6bd08', '2023-05-03 09:33:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 33333333, 'boy3@mail.com', 'boy3', 'rw3', '253244d70f47ddd2a35f845ee79a7920', '2023-05-03 09:36:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 12345678, 'boy5@mail.com', 'boy5', 'rw5', 'boy33333', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 12345678, 'boy5@mail.com', 'boy5', 'rw5', 'boy33333', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, 12345678, 'boy6@mail.com', 'boy6', 'rw5', 'boy33333', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 12345678, 'boy6@mail.com', 'boy6', 'rw5', 'boy33333', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 12345678, 'boy7@mail.com', 'boy7', 'rw5', 'boy33333', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 18181818, 'boy8@mail.com', 'boykun', 'kuya8', 'ef909efd65202dd45367d56981f12d80', '0000-00-00 00:00:00', '2023-05-03 11:27:52', '0000-00-00 00:00:00'),
(12, 1, 12121212, 'bintang@mail.com', 'bintang18', 'RW', '4d7f5c5b3492ad90421bdc7ce6101cf9', '2023-05-03 10:44:12', '2023-05-03 11:29:07', '0000-00-00 00:00:00'),
(13, 1, 99999999, 'bintang@mail.com', 'bintang', 'rw', '1d0c1f8d2fec766925cef5ed72aa6135', '2023-05-03 11:05:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `fk_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `idrole` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `iduser` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`idrole`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
