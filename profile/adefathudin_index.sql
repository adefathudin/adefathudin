-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2020 at 01:20 AM
-- Server version: 10.1.43-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adefathudin_index`
--

-- --------------------------------------------------------

--
-- Table structure for table `const`
--

CREATE TABLE `const` (
  `rkey` varchar(10) NOT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `isi` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `const`
--

INSERT INTO `const` (`rkey`, `deskripsi`, `isi`) VALUES
('about', 'About Me', '<div style=\"text-align: center;\">\n<b>Greetings!</b></div>\n<br />\n<table cellpadding=\"0\" cellspacing=\"0\" class=\"tr-caption-container\" style=\"float: left; margin-right: 1em; text-align: left;\"><tbody>\n<tr><td style=\"text-align: center;\"><a href=\"https://1.bp.blogspot.com/-O0CND6Ve3Wg/W_a0nYtHIrI/AAAAAAAANE4/1g0Ei51b8rsGSTQd5L1w-cpPBk7jLR50QCLcBGAs/s1600/ade-fathudin.jpeg\" imageanchor=\"1\" style=\"clear: left; margin-bottom: 1em; margin-left: auto; margin-right: auto;\"><img alt=\"Ade Fathudin\" border=\"0\" data-original-height=\"580\" data-original-width=\"580\" height=\"120\" src=\"https://1.bp.blogspot.com/-O0CND6Ve3Wg/W_a0nYtHIrI/AAAAAAAANE4/1g0Ei51b8rsGSTQd5L1w-cpPBk7jLR50QCLcBGAs/s200/ade-fathudin.jpeg\" title=\"Ade Fathudin\" width=\"120\" /></a></td></tr>\n<tr><td class=\"tr-caption\" style=\"text-align: center;\">Ade Fathudin</td></tr>\n</tbody></table>\nHi.. My name is Ade Fathudin.<br />\nI\'m a Web, Desktop and Android Development. I know, i have\'nt become an expert in this field. But i keep learning and not give up until whenever.<br />\n<br />\nI\'m also a blogger, and i write <a href=\"https://www.saloome.org/\" target=\"_blank\">blog posts</a> fairly regularly\n\nI was born and raised in Indonesia. <a href=\"http://en.wikipedia.org/wiki/Indonesian_language\" target=\"_blank\">Indonesian</a> (<i>Bahasa Indonesia</i>) is my mother tongue. Dan saat ini saya sebagai freelancher dan juga bekerja sebagai IT Support di salah satu perusahaan retail ternama di Indonesia.'),
('cont', 'Contact Me', 'E-Mail               : adefathudin76@gmail.com<br />\nTelegram        : <a href=\"https://t.me/adefathudin\" rel=\"noopener\" target=\"_blank\">Chat with Telegram</a>'),
('home', 'Isi Halaman Awal', 'Selamat Datang di Website Offical Ade Fathudin'),
('proj', 'My Projects', 'Under Contruction'),
('wcid', 'What Can I Do', 'Sangat tertarik dengan\n<br />\n<ul>\n<li>PHP</li>\n<li>MySQL</li>\n<li>Python</li>\n<li>Linux</li>\n<li>Java</li>\n</ul>\nSaya juga sangat tertarik dengan dunia open source lainnya. ');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` varchar(30) NOT NULL,
  `nama` varchar(33) DEFAULT NULL,
  `mail` varchar(33) NOT NULL,
  `subject` varchar(33) DEFAULT NULL,
  `isi_pesan` varchar(140) NOT NULL,
  `ip` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `isi`) VALUES
(1, 'Online Shop', '<ul>\n<li><a href=\"http://onlineshop.project.saloome.org/\" rel=\"nofollow\" target=\"_blank\">Online Shop</a></li>\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `akses` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `akses`) VALUES
('1', 'admin', '202CB962AC59075B964B07152D234B70', NULL),
('2', 'adef', '7c74f8ecfbfde5ad2d2ba4b5e517082e', NULL),
('3', 'munir', '4a3e00961a08879c34f91ca0070ea2f5', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `const`
--
ALTER TABLE `const`
  ADD PRIMARY KEY (`rkey`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
