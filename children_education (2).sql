-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 08:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `children_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user_name`, `password`, `email`) VALUES
(1, 'Children', 'admin', 'admin', 'children@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `arbletter`
--

CREATE TABLE `arbletter` (
  `songID` int(225) NOT NULL,
  `songName` text NOT NULL,
  `songCat` varchar(255) NOT NULL,
  `songArtist` varchar(255) NOT NULL,
  `songUploader` varchar(255) NOT NULL,
  `songCover` text NOT NULL,
  `songFile` text NOT NULL,
  `songSize` int(225) NOT NULL,
  `songDate` datetime NOT NULL,
  `songViews` int(225) NOT NULL,
  `songLike` int(225) NOT NULL,
  `songDislike` int(225) NOT NULL,
  `songDownloads` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arbletter`
--

INSERT INTO `arbletter` (`songID`, `songName`, `songCat`, `songArtist`, `songUploader`, `songCover`, `songFile`, `songSize`, `songDate`, `songViews`, `songLike`, `songDislike`, `songDownloads`) VALUES
(18, 'ي', '', '', '', 'realsoundz_com_60618_??.aac_??.jpg', 'realsoundz_com_60618_??.aac', 462, '2022-07-18 20:09:33', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `dongID` int(225) NOT NULL,
  `songName` text NOT NULL,
  `songCat` varchar(255) NOT NULL,
  `songArtist` varchar(255) NOT NULL,
  `songUploader` varchar(255) NOT NULL,
  `songCover` text NOT NULL,
  `songFile` text NOT NULL,
  `songSize` int(225) NOT NULL,
  `songDate` datetime NOT NULL,
  `songViews` int(225) NOT NULL,
  `songLike` int(225) NOT NULL,
  `songDislike` int(225) NOT NULL,
  `songDownloads` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`dongID`, `songName`, `songCat`, `songArtist`, `songUploader`, `songCover`, `songFile`, `songSize`, `songDate`, `songViews`, `songLike`, `songDislike`, `songDownloads`) VALUES
(3, 'Green', '', '', '', 'realsoundz_com_73424_green.mp3_gree.jpg', 'realsoundz_com_73424_green.mp3', 189, '2022-07-18 15:36:45', 0, 0, 0, 0),
(4, 'Orange', '', '', '', 'realsoundz_com_71572_orange.mp3_oran.jpg', 'realsoundz_com_71572_orange.mp3', 175, '2022-07-18 15:37:11', 1, 0, 0, 0),
(5, 'Pink', '', '', '', 'realsoundz_com_20760_pink.mp3_pu.jpg', 'realsoundz_com_20760_pink.mp3', 173, '2022-07-18 15:37:55', 0, 0, 0, 0),
(6, 'Purple', '', '', '', 'realsoundz_com_44925_pur.mp3_pu.jpg', 'realsoundz_com_44925_pur.mp3', 170, '2022-07-18 15:43:08', 0, 0, 0, 0),
(7, 'Red', '', '', '', 'realsoundz_com_31469_red.mp3_re.jpg', 'realsoundz_com_31469_red.mp3', 169, '2022-07-18 15:43:32', 0, 0, 0, 0),
(8, 'White', '', '', '', 'realsoundz_com_24119_white.mp3_whit.jpg', 'realsoundz_com_24119_white.mp3', 180, '2022-07-18 15:44:01', 0, 0, 0, 0),
(9, 'Yellow', '', '', '', 'realsoundz_com_63901_yellow.mp3_yell.jpg', 'realsoundz_com_63901_yellow.mp3', 172, '2022-07-18 15:44:31', 1, 0, 0, 0),
(10, 'Black', '', '', '', 'realsoundz_com_83112_black.mp3_blac.jpg', 'realsoundz_com_83112_black.mp3', 173, '2022-07-18 15:45:59', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(10) NOT NULL,
  `content_name` varchar(100) NOT NULL,
  `content_type` varchar(100) NOT NULL,
  `shape_type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sound_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `guardian_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `name`, `username`, `password`, `guardian_email`) VALUES
(8, 'zool', 'zooal', '123', 'z@gma'),
(9, 'رحاب', 'rahb', '1234', 'rahb@gmail.com'),
(21, 'ِِِAhmed', 'ahmed', '123', 'ahmed@gmail.com'),
(22, 'twix', 'twixzool', 'twix7', 'twix@gmail.com'),
(24, 'محمد', 'moh', '1234', 'moh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `songID` int(225) NOT NULL,
  `songName` text NOT NULL,
  `songCat` varchar(255) NOT NULL,
  `songArtist` varchar(255) NOT NULL,
  `songUploader` varchar(255) NOT NULL,
  `songCover` text NOT NULL,
  `songFile` text NOT NULL,
  `songSize` int(225) NOT NULL,
  `songDate` datetime NOT NULL,
  `songViews` int(225) NOT NULL,
  `songLike` int(225) NOT NULL,
  `songDislike` int(225) NOT NULL,
  `songDownloads` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`songID`, `songName`, `songCat`, `songArtist`, `songUploader`, `songCover`, `songFile`, `songSize`, `songDate`, `songViews`, `songLike`, `songDislike`, `songDownloads`) VALUES
(1, '20', '', '', '', 'realsoundz_com_37519_20.mp3_20.jpg', 'realsoundz_com_37519_20.mp3', 180, '2022-07-18 19:36:37', 0, 0, 0, 0),
(2, '19', '', '', '', 'realsoundz_com_9722_19.mp3_19.jpg', 'realsoundz_com_9722_19.mp3', 202, '2022-07-18 19:37:09', 0, 0, 0, 0),
(3, '18', '', '', '', 'realsoundz_com_26144_eighteen.mp3_18.jpg', 'realsoundz_com_26144_eighteen.mp3', 192, '2022-07-18 19:40:09', 0, 0, 0, 0),
(4, '17', '', '', '', 'realsoundz_com_44690_17.mp3_17.jpg', 'realsoundz_com_44690_17.mp3', 209, '2022-07-18 19:40:30', 0, 0, 0, 0),
(5, '16', '', '', '', 'realsoundz_com_21161_16.mp3_16.jpg', 'realsoundz_com_21161_16.mp3', 182, '2022-07-18 19:40:54', 0, 0, 0, 0),
(6, '15', '', '', '', 'realsoundz_com_94447_15.mp3_15.jpg', 'realsoundz_com_94447_15.mp3', 200, '2022-07-18 19:41:22', 0, 0, 0, 0),
(7, '14', '', '', '', 'realsoundz_com_39901_14.mp3_14.jpg', 'realsoundz_com_39901_14.mp3', 176, '2022-07-18 19:41:40', 0, 0, 0, 0),
(8, '13', '', '', '', 'realsoundz_com_19770_13.mp3_13.jpg', 'realsoundz_com_19770_13.mp3', 167, '2022-07-18 19:41:57', 0, 0, 0, 0),
(9, '12', '', '', '', 'realsoundz_com_38125_12.mp3_12.jpg', 'realsoundz_com_38125_12.mp3', 193, '2022-07-18 19:42:13', 0, 0, 0, 0),
(10, '11', '', '', '', 'realsoundz_com_85924_11.mp3_11.jpg', 'realsoundz_com_85924_11.mp3', 187, '2022-07-18 19:42:32', 0, 0, 0, 0),
(11, '10', '', '', '', 'realsoundz_com_22077_10.mp3_10.jpg', 'realsoundz_com_22077_10.mp3', 190, '2022-07-18 19:42:49', 0, 0, 0, 0),
(12, '9', '', '', '', 'realsoundz_com_80081_9.mp3_9.jpg', 'realsoundz_com_80081_9.mp3', 177, '2022-07-18 19:43:07', 0, 0, 0, 0),
(13, '8', '', '', '', 'realsoundz_com_2129_8.mp3_8.jpg', 'realsoundz_com_2129_8.mp3', 184, '2022-07-18 19:43:25', 0, 0, 0, 0),
(14, '7', '', '', '', 'realsoundz_com_80836_7.mp3_7.jpg', 'realsoundz_com_80836_7.mp3', 188, '2022-07-18 19:43:44', 0, 0, 0, 0),
(15, '6', '', '', '', 'realsoundz_com_75089_6.mp3_6.jpg', 'realsoundz_com_75089_6.mp3', 178, '2022-07-18 19:45:02', 0, 0, 0, 0),
(16, '5', '', '', '', 'realsoundz_com_26243_5.mp3_5.jpg', 'realsoundz_com_26243_5.mp3', 181, '2022-07-18 19:45:24', 0, 0, 0, 0),
(17, '4', '', '', '', 'realsoundz_com_41922_4.mp3_4.jpg', 'realsoundz_com_41922_4.mp3', 178, '2022-07-18 19:45:44', 0, 0, 0, 0),
(18, '3', '', '', '', 'realsoundz_com_16625_3.mp3_3.jpg', 'realsoundz_com_16625_3.mp3', 200, '2022-07-18 19:46:02', 0, 0, 0, 0),
(19, '2', '', '', '', 'realsoundz_com_86350_2.mp3_2.jpg', 'realsoundz_com_86350_2.mp3', 162, '2022-07-18 19:46:20', 0, 0, 0, 0),
(20, '1', '', '', '', 'realsoundz_com_42323_1.mp3_1.jpg', 'realsoundz_com_42323_1.mp3', 170, '2022-07-18 19:46:35', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shapes`
--

CREATE TABLE `shapes` (
  `songID` int(225) NOT NULL,
  `songName` text NOT NULL,
  `songCat` varchar(255) NOT NULL,
  `songArtist` varchar(255) NOT NULL,
  `songUploader` varchar(255) NOT NULL,
  `songCover` text NOT NULL,
  `songFile` text NOT NULL,
  `songSize` int(225) NOT NULL,
  `songDate` datetime NOT NULL,
  `songViews` int(225) NOT NULL,
  `songLike` int(225) NOT NULL,
  `songDislike` int(225) NOT NULL,
  `songDownloads` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shapes`
--

INSERT INTO `shapes` (`songID`, `songName`, `songCat`, `songArtist`, `songUploader`, `songCover`, `songFile`, `songSize`, `songDate`, `songViews`, `songLike`, `songDislike`, `songDownloads`) VALUES
(2, 'مثلث', '', '', '', 'realsoundz_com_24704_????????.aac_????????.jpg', 'realsoundz_com_24704_????????.aac', 381, '2022-07-18 19:26:22', 0, 0, 0, 0),
(3, 'مربع', '', '', '', 'realsoundz_com_95756_????????.aac_????????.jpg', 'realsoundz_com_95756_????????.aac', 315, '2022-07-18 19:26:46', 0, 0, 0, 0),
(4, 'مستطيل', '', '', '', 'realsoundz_com_3496_????????????.aac_????????????.jpg', 'realsoundz_com_3496_????????????.aac', 371, '2022-07-18 19:27:06', 0, 0, 0, 0),
(5, 'نجمة', '', '', '', 'realsoundz_com_69627_????????.aac_????????.jpg', 'realsoundz_com_69627_????????.aac', 368, '2022-07-18 19:27:23', 0, 0, 0, 0),
(6, 'دائرة', '', '', '', 'realsoundz_com_297743_??????????.aac_??????????.jpg', 'realsoundz_com_297743_??????????.aac', 317, '2022-07-18 19:33:51', 0, 0, 0, 0),
(7, 'مثلث', '', '', '', 'realsoundz_com_619938_????????.aac_cone.png', 'realsoundz_com_619938_????????.aac', 381, '2022-07-18 19:34:26', 0, 0, 0, 0),
(8, 'ييي', '', '', '', 'realsoundz_com_227136_????????.aac_cubic.png', 'realsoundz_com_227136_????????.aac', 368, '2022-07-18 19:34:55', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_songs`
--

CREATE TABLE `tbl_songs` (
  `songID` int(225) NOT NULL,
  `songName` text NOT NULL,
  `songCat` varchar(255) NOT NULL,
  `songArtist` varchar(255) NOT NULL,
  `songUploader` varchar(255) NOT NULL,
  `songCover` text NOT NULL,
  `songFile` text NOT NULL,
  `songSize` int(225) NOT NULL,
  `songDate` datetime NOT NULL,
  `songViews` int(225) NOT NULL,
  `songLike` int(225) NOT NULL,
  `songDislikes` int(225) NOT NULL,
  `songDownloads` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_songs`
--

INSERT INTO `tbl_songs` (`songID`, `songName`, `songCat`, `songArtist`, `songUploader`, `songCover`, `songFile`, `songSize`, `songDate`, `songViews`, `songLike`, `songDislikes`, `songDownloads`) VALUES
(9, 'Z', '', '', '', 'realsoundz_com_7173_z.mp3_z.jpg', 'realsoundz_com_7173_z.mp3', 241, '2022-07-18 19:05:52', 0, 0, 0, 0),
(10, 'Y', '', '', '', 'realsoundz_com_94626_y.mp3_y.jpg', 'realsoundz_com_94626_y.mp3', 236, '2022-07-18 19:06:19', 0, 0, 0, 0),
(11, 'X', '', '', '', 'realsoundz_com_30203_x.mp3_x.jpg', 'realsoundz_com_30203_x.mp3', 250, '2022-07-18 19:06:52', 0, 0, 0, 0),
(12, 'W', '', '', '', 'realsoundz_com_22889_w.mp3_w.jpg', 'realsoundz_com_22889_w.mp3', 244, '2022-07-18 19:07:13', 0, 0, 0, 0),
(13, 'V', '', '', '', 'realsoundz_com_18450_v.mp3_v.jpg', 'realsoundz_com_18450_v.mp3', 230, '2022-07-18 19:07:42', 0, 0, 0, 0),
(14, 'U', '', '', '', 'realsoundz_com_23223_u.mp3_u.jpg', 'realsoundz_com_23223_u.mp3', 237, '2022-07-18 19:08:26', 0, 0, 0, 0),
(15, 'T', '', '', '', 'realsoundz_com_9436_t.mp3_t.jpg', 'realsoundz_com_9436_t.mp3', 231, '2022-07-18 19:08:46', 0, 0, 0, 0),
(16, 'S', '', '', '', 'realsoundz_com_30437_s.mp3_s.jpg', 'realsoundz_com_30437_s.mp3', 240, '2022-07-18 19:09:02', 0, 0, 0, 0),
(17, 'R', '', '', '', 'realsoundz_com_36957_r.mp3_r.jpg', 'realsoundz_com_36957_r.mp3', 227, '2022-07-18 19:09:28', 0, 0, 0, 0),
(18, 'Q', '', '', '', 'realsoundz_com_38174_q.mp3_q.jpg', 'realsoundz_com_38174_q.mp3', 250, '2022-07-18 19:09:58', 0, 0, 0, 0),
(19, 'P', '', '', '', 'realsoundz_com_17147_p.mp3_p.jpg', 'realsoundz_com_17147_p.mp3', 198, '2022-07-18 19:10:17', 0, 0, 0, 0),
(20, 'O', '', '', '', 'realsoundz_com_66820_o.mp3_o.jpg', 'realsoundz_com_66820_o.mp3', 216, '2022-07-18 19:11:07', 0, 0, 0, 0),
(21, 'N', '', '', '', 'realsoundz_com_7638_n.mp3_n.jpg', 'realsoundz_com_7638_n.mp3', 220, '2022-07-18 19:11:26', 0, 0, 0, 0),
(22, 'M', '', '', '', 'realsoundz_com_4571_m.mp3_m.jpg', 'realsoundz_com_4571_m.mp3', 218, '2022-07-18 19:11:45', 0, 0, 0, 0),
(23, 'L', '', '', '', 'realsoundz_com_50728_l.mp3_l.jpg', 'realsoundz_com_50728_l.mp3', 246, '2022-07-18 19:12:28', 0, 0, 0, 0),
(24, 'K', '', '', '', 'realsoundz_com_94988_k.mp3_k.jpg', 'realsoundz_com_94988_k.mp3', 220, '2022-07-18 19:12:49', 0, 0, 0, 0),
(25, 'J', '', '', '', 'realsoundz_com_40682_j.mp3_j.jpg', 'realsoundz_com_40682_j.mp3', 222, '2022-07-18 19:13:19', 0, 0, 0, 0),
(26, 'I', '', '', '', 'realsoundz_com_36340_i.mp3_i.jpg', 'realsoundz_com_36340_i.mp3', 213, '2022-07-18 19:13:39', 0, 0, 0, 0),
(27, 'H', '', '', '', 'realsoundz_com_59385_h.mp3_h.jpg', 'realsoundz_com_59385_h.mp3', 297, '2022-07-18 19:14:03', 0, 0, 0, 0),
(28, 'G', '', '', '', 'realsoundz_com_72700_g.mp3_g.jpg', 'realsoundz_com_72700_g.mp3', 238, '2022-07-18 19:14:23', 0, 0, 0, 0),
(29, 'F', '', '', '', 'realsoundz_com_89406_f.mp3_f.jpg', 'realsoundz_com_89406_f.mp3', 202, '2022-07-18 19:14:42', 0, 0, 0, 0),
(30, 'E', '', '', '', 'realsoundz_com_59012_e.mp3_e.jpg', 'realsoundz_com_59012_e.mp3', 216, '2022-07-18 19:14:58', 0, 0, 0, 0),
(31, 'D', '', '', '', 'realsoundz_com_31151_d.mp3_d.jpg', 'realsoundz_com_31151_d.mp3', 212, '2022-07-18 19:15:14', 0, 0, 0, 0),
(32, 'C', '', '', '', 'realsoundz_com_73548_c.mp3_c.jpg', 'realsoundz_com_73548_c.mp3', 66, '2022-07-18 19:15:46', 0, 0, 0, 0),
(33, 'B', '', '', '', 'realsoundz_com_79184_b.mp3_b.jpg', 'realsoundz_com_79184_b.mp3', 178, '2022-07-18 19:16:09', 0, 0, 0, 0),
(34, 'A', '', '', '', 'realsoundz_com_30997_a.mp3_a.jpg', 'realsoundz_com_30997_a.mp3', 220, '2022-07-18 19:16:30', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(10) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'الحروف الانجليزية'),
(2, 'الحروف العربية'),
(3, 'الالوان'),
(4, 'الاشكال'),
(5, 'الارقام الرياضية');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arbletter`
--
ALTER TABLE `arbletter`
  ADD PRIMARY KEY (`songID`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`dongID`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`songID`);

--
-- Indexes for table `shapes`
--
ALTER TABLE `shapes`
  ADD PRIMARY KEY (`songID`);

--
-- Indexes for table `tbl_songs`
--
ALTER TABLE `tbl_songs`
  ADD PRIMARY KEY (`songID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arbletter`
--
ALTER TABLE `arbletter`
  MODIFY `songID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `dongID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `songID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shapes`
--
ALTER TABLE `shapes`
  MODIFY `songID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_songs`
--
ALTER TABLE `tbl_songs`
  MODIFY `songID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
