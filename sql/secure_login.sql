-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Lip 2015, 19:46
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secure_login`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `userid` int(11) DEFAULT NULL,
  `fileid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `filesize` bigint(20) NOT NULL,
  `filetype` text NOT NULL,
  `filepath` text NOT NULL,
  PRIMARY KEY (`fileid`),
  KEY `fileid` (`fileid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `files`
--

INSERT INTO `files` (`userid`, `fileid`, `filename`, `filesize`, `filetype`, `filepath`) VALUES
(0, 2, '$_FILES[''file''][''name'']', 0, '$_FILES[''file''][''type'']', '$serveradress$user/$_FILES[''file''][''name'']'),
(0, 3, '_dl__fili_second_model_by_croco322-d8shrtb.zip', 3490391, 'application/x-zip-compressed', 'http://192.168.1.137/dl/upload/SuperStarPL/_dl__fili_second_model_by_croco322-d8shrtb.zip'),
(0, 4, 'Aroma1997s-Dimensional-World-1.7.10-1.1.0.1.jar', 86550, 'application/octet-stream', 'http://192.168.1.137/dl/upload/SuperStarPL/Aroma1997s-Dimensional-World-1.7.10-1.1.0.1.jar'),
(0, 5, 'diagnostic.exe', 3268488, 'application/x-msdownload', 'http://192.168.1.137/dl/upload/SuperStarPL/diagnostic.exe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(2, 'SuperStarPL', 'sup@10g.pl', '4d064b8d6d9171a71b3611be1a690106c1e5a1ec41feb5946d97e50047c008cbd406200d49c7e2e46ee3f59888731fdeec30fee1a47eb0463f6832362b29cdf4', '92b0deb290f89a8c6cd27d53b18c5bf88dc9b80e1026c69a9e4a7517358575730537cb800c0d265706a7f620254f8a7d9b8c1128a8bdc029892e4217e71dcc56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
