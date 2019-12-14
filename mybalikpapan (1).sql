-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 04:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybalikpapan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalender_event`
--

CREATE TABLE `kalender_event` (
  `kalender_event_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `title_event` varchar(100) NOT NULL,
  `ket_event` varchar(200) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalender_event`
--

INSERT INTO `kalender_event` (`kalender_event_id`, `date`, `title_event`, `ket_event`, `day`, `month`, `year`) VALUES
(2, '2017-01-31 10:00:00', 'Lomba mewarnai tembok cina', 'lomba ini diadakan di tembok cina KM 15 Balikpapan', 0, 0, 0),
(3, '2017-01-31 14:00:00', 'Seminar Fengshui', '', 0, 0, 0),
(4, '2017-01-15 21:30:00', 'Lomba balap karung', 'Lomba ini diadakan di lapangan merdeka, peserta maksimal 50 orang', 0, 0, 0),
(5, '2017-02-06 13:00:00', 'Launching Perdana DG', 'Event ini diadakan di BSCC', 0, 0, 0),
(6, '2017-02-10 00:00:00', 'Ulang Tahun Balikpapan', 'Acara Ulang Tahun Balikpapan ini diadakan di BSCC', 10, 2, 2017),
(7, '2017-02-06 21:30:00', 'Lomba balap karung', 'Lomba ini diadakan di lapangan merdeka, peserta maksimal 50 orang', 0, 0, 0),
(8, '2017-02-02 13:00:00', 'Seminar Gratis', 'Event ini diadakan di rumah masing - masing', 0, 0, 0),
(10, '2017-02-14 20:00:00', 'Valentine''s Day by Rossi', 'Event ini di sponsori oleh minyak mentah cap edehh...', 0, 0, 0),
(14, '2017-02-06 09:00:00', 'Soft Launching Aplikasi Digital Government', 'Acara peresmian ini dilaksanakan di balai sudirman', 0, 0, 0),
(15, '2017-02-08 14:45:00', 'Makan besar', 'acara ini diadakan di pemkot balikpapan', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL,
  `roles_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roles_id`, `roles_name`) VALUES
(1, 'Admin'),
(2, 'User Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `turis_hotel`
--

CREATE TABLE `turis_hotel` (
  `id` int(11) NOT NULL,
  `nama_hotel` varchar(50) NOT NULL,
  `alamat_hotel` text NOT NULL,
  `telp_hotel` int(11) NOT NULL,
  `map_hotel` varchar(300) NOT NULL,
  `gambar_hotel` varchar(100) NOT NULL,
  `bintang_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turis_hotel`
--

INSERT INTO `turis_hotel` (`id`, `nama_hotel`, `alamat_hotel`, `telp_hotel`, `map_hotel`, `gambar_hotel`, `bintang_hotel`) VALUES
(1, 'Grand Jatra Hotel', 'jalan jendral sudirman nomor 47', 7213888, 'https://goo.gl/maps/tSnm7aQeGcU2', 'http://2.bp.blogspot.com/-0YLKGAg_EEs/Uo4KMzh7RwI/AAAAAAAALvc/SQQQaGLbUrw/s1600/Grand+Jatra+Hotel+Ba', 5),
(2, 'Hotel Aston', 'Jl. Jend Sudirman No. 7 Grand Sudirman, Klandasan Ilir ', 721272, 'https://pix16.agoda.net/hotelImages/298/298115/298115_14071208470020245785.jpg?s=1100x825', 'https://pix16.agoda.net/hotelImages/173/173630/173630_15072214460032783020.jpg?s=1100x825', 4),
(3, 'hotel platinum', 'Jl. Soekarno Hatta KM 5 No. 7 ', 3001818, 'https://goo.gl/maps/tSnm7aQeGcU2', 'http://cdn2.tstatic.net/kaltim/foto/bank/images/hotel-platinum_20151002_102542.jpg', 4),
(4, 'Hotel Grand Senyiur', 'Gunung Pasir', 676767, 'https://goo.gl/maps/Tzdjxmfm3uz', 'https://exp.cdn-hotels.com/hotels/12000000/11550000/11543700/11543625/11543625_1_z.jpg', 5),
(5, 'Hotel Tjakra', 'Samping Bandara', 76575765, 'https://goo.gl/maps/V2rajuU16sn', 'http://img.bisnis.com/thumb/posts/2016/01/13/509085/grand-tjokro.jpg?w=600&h=400', 3),
(6, 'Hotel Djang Djaya', 'deket polda', 566778, '', '', 3),
(7, 'Hotel Hotelan', 'Alamat Hotel', 647326457, '', 'https://www.google.co.id/imgres?imgurl=http%3A%2F%2Fwww.thefloridahotelorlando.com%2Fvar%2Ffloridaho', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '$2y$10$fClnfs/X1mwoNJa/v6n.DOEI70zNCyAU6FAhVDS14oLRoYEUX4BGS',
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `remember_token`, `created`, `disabled`) VALUES
(1, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL),
(5, 'Siswanya', 'siswa@mail.com', 'bcd724d15cde8c47650fda962968f102', NULL, NULL, NULL),
(6, 'kurikulum', 'kurikulum@mail.com', '4e7f2477836fa0c289105740fee0ebb1', NULL, NULL, NULL),
(7, 'Pak Guru', 'guru@mail.com', '77e69c137812518e359196bb2f5e9bb9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `roles_id`) VALUES
(1, 1, 1),
(3, 5, 3),
(4, 6, 4),
(5, 7, 2),
(6, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kalender_event`
--
ALTER TABLE `kalender_event`
  ADD PRIMARY KEY (`kalender_event_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD UNIQUE KEY `roles_id` (`roles_id`);

--
-- Indexes for table `turis_hotel`
--
ALTER TABLE `turis_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`user_email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kalender_event`
--
ALTER TABLE `kalender_event`
  MODIFY `kalender_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turis_hotel`
--
ALTER TABLE `turis_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
