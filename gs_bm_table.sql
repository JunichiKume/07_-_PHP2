-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db_2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bookcategory` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bookurl` text COLLATE utf8_unicode_ci NOT NULL,
  `finishdate` datetime NOT NULL,
  `bookcomment` text COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookname`, `author`, `bookcategory`, `bookurl`, `finishdate`, `bookcomment`, `rating`, `indate`) VALUES
(4, '坂の上の雲', '司馬遼太郎', '歴史・地理', 'https', '2019-05-27 00:00:00', '最高傑作', '★★★★★', '2019-05-27 23:35:51'),
(5, '竜馬が行く', '司馬遼太郎', '歴史・地理', 'https', '2019-05-28 00:00:00', '日本の礎', '★★★★★', '2019-05-28 00:36:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
