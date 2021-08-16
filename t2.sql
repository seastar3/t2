-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 8 月 15 日 10:05
-- サーバのバージョン： 5.7.28-0ubuntu0.18.04.4
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `t2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_time`
--

CREATE TABLE `tbl_time` (
  `id` int(10) UNSIGNED NOT NULL,
  `tk` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `tbl_time`
--

INSERT INTO `tbl_time` (`id`, `tk`) VALUES
(0, '2021-08-15 09:49:54');

-- --------------------------------------------------------

--
-- テーブルの構造 `ten`
--

CREATE TABLE `ten` (
  `team` char(10) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `ten`
--

INSERT INTO `ten` (`team`, `score`) VALUES
('aka', 100),
('ao', 20),
('ki', 300);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tbl_time`
--
ALTER TABLE `tbl_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- テーブルのインデックス `ten`
--
ALTER TABLE `ten`
  ADD PRIMARY KEY (`team`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
