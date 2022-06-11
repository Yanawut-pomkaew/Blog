-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 11, 2022 at 04:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Yanawut', '52346170progress');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` blob NOT NULL,
  `content` longtext NOT NULL,
  `tag` enum('programming','lifestyle') NOT NULL DEFAULT 'programming',
  `t` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `title`, `photo`, `content`, `tag`, `t`) VALUES
(2, 'sdgfmyhg,jhf', 0x616d65726963616e5f70797363686f5f6578706c61696e65642d7363616c65642d65313632323732313932333134312e6a7067, 'eshryfgu.huyjthrgehrsjtkyrjtrhstyrktulkyrjtyrwyktulyktyjrthrsg', 'programming', '2022-06-02 23:52:01'),
(3, 'yjujhkj.l/khjghg', 0x676979752e6a7067, 'j,hjoipo[\r\np\'iuyutiureysetyuridtoyf;uyi\'oupi\'o;uilyukyjtdhrjtky.g/hl.hgf\r\n\r\n\'ihu;\'johlidtfygu\r\nyghlfygu\'hi\r\ncgkl;gufckgvhguih\r\naeghreksfl,gsed\r\ngadslblsf,kvgkp;sbl,\';fx\r\nakdbosfkmlplg\'sf\r\namdlbmsl[fmblmadlsbmlswrhjhews\r\nelhbmsr[lmbl[sr,;gsbf', 'lifestyle', '2022-06-04 20:12:42'),
(5, 'etrytkuyiluktyrtere', 0x706f6f682e6a7067, 'srhtjykulyi;ou\';ilukyfjtsrgesdasfdghfjgfkhlgjh.,ghfjgdhfsgdasfgdzhfjxgckhjg.b,hgjhfsgeadgehfdgjhjg', 'programming', '2022-06-05 10:09:18'),
(6, 'rshtueir7toyluktjrhetwrteyrlt', 0x676979752e6a7067, 'tyrltukyrjtue5i6kryjtdhrsgweretrylu;ygl.,dkflh,kmgjdnhddjgf', 'programming', '2022-06-05 10:09:35'),
(7, 'djfykttjdr', 0x616d65726963616e5f70797363686f5f6578706c61696e65642d7363616c65642d65313632323732313932333134312e6a7067, 'aeyrswtekyrfmhgdjhruetiryotlukghfjdhshfdgmhv', 'programming', '2022-06-05 10:09:44'),
(8, 'yfjgdhdtjyrkmjhtduikyrtu', 0x676979752e6a7067, 'dsrtjerkytluiru5euir7oi6uteyrsetyurtkyl,hfmgndfbsdhfjdmnbdavgehrwsjtejtrywrjtf,ujg', 'lifestyle', '2022-06-05 10:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
