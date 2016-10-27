-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2016 at 04:57 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 5.6.26-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chiromocu`
--
CREATE DATABASE `chiromocu`;
-- --------------------------------------------------------
USE `chiromocu`;
--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `synopsis` varchar(5000) DEFAULT NULL,
  `article` longtext,
  `year` varchar(60) NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `title`, `synopsis`, `article`, `year`, `status`) VALUES
(1, 'Mary Wanjeri', 'Yes I DO', 'Before they call, i will answer and while they are still speaking to me about their needs i will hear.\r\nThis is exactly why i love the lord. Just look at how much he\'s loved us. God begins to show us our love way from the times of Abraham to Joseph, to Moses, to.....', 'Isaiah 65:24 - Before they call, i will answer and while they are still speaking to me about their needs i will hear.\r\nThis is exactly why i love the lord. Just look at how much he\'s loved us. God begins to show us our love way from the times of Abraham to Joseph, to Moses, to Gideon, David and through Jesus Christ, his only begotten son who died for us, when we were still sinners (John 3:16). I love the lord because remains faithful even when i get unfaithful. I love him because his mercy is new for us every morning. He is just the most powerful. I can imagine how one prides and adores their earthly father once they know their dad is the most powerful or influential man in the society. I love my God because his love never fails. It endures forever.\r\nWhat more the bible commands me in Deuteronomy 6:5 & mark 12:30 that; You should love the lord your God with all your heart, all your soul and all your might. This is the first commandment.\r\nHe is the only love that satisfies me. Let us run into his loving arms, because we are safe and secure in his love.\r\nLet us thus come together brethren and share in his unending love. Where love exists, there is peace, understanding, cohesion and growth.\r\nI love the lord. Do you? ', '2nd year', 1),
(2, 'jijo', 'The white throne', 'As i stand there before the throne, i will see grief in my saviors eyes, yeah, grief though he loves me.he will show me how he wanted me to be rich..yet i will be standing there poor, stripped of all but his grace... ', NULL, '4th year', 1),
(3, 'Jijo', '...I wish i believed', 'I thought it was a trance in a moment, but the reality was crampling on me. all i could see everywhere was either a crushed vehicle or clothes. How could everyone dissapper in the thin air? i turned on to my smartphone, and though my hands were shaking in unbelief, i could see the 13... notifications  ', NULL, '4th year', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL COMMENT '1 for Friday, 2 for Sunday and 3 for Special',
  `date` date NOT NULL,
  `date_to` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `speaker` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `date`, `date_to`, `name`, `speaker`, `venue`, `time`) VALUES
(32, 1, '2015-02-20', '0000-00-00', 'Holy Spirit', 'Simon Kande', 'MH1', '8-10:30 pm'),
(33, 1, '2015-02-27', '0000-00-00', 'Righteousness', 'Meshack Nyatome', 'MH1', '8-10:30 pm'),
(34, 1, '2015-03-06', '0000-00-00', 'It is possible', '(CADASI committee)', 'MH1', '8-10:30pm'),
(35, 1, '2015-03-13', '0000-00-00', 'Altars', 'JOSHAT KITHUMBU', 'MH1', '8-10:30pm'),
(36, 1, '2015-03-20', '0000-00-00', 'Elders night', 'Elders', 'MH1', '8-10:30pm'),
(37, 1, '2015-03-27', '0000-00-00', 'Bereans night', 'BS $ training', 'MH1', '8-10:30pm'),
(38, 1, '2015-04-03', '0000-00-00', 'TRUE VINE', 'Pst Ken Kimiywe', 'MH1', '8-10:30pm'),
(39, 1, '2015-04-10', '0000-00-00', 'SEASONS', 'Ruth Mwanza', 'MH1', '8-10:30pm'),
(40, 1, '2015-04-17', '0000-00-00', 'ANNOINTING', 'Hogla Wanjohi', 'MH1', '8-10:30pm'),
(41, 1, '2015-04-24', '0000-00-00', 'Movie night', 'All', 'MH1', '8-10:30pm'),
(42, 2, '2015-02-22', '0000-00-00', 'Cultural Sunday', 'Evangelistic Teams', 'MH1', '8-11am'),
(43, 2, '2015-03-01', '0000-00-00', 'Fellowship', 'Ezekiel Baraza', 'MH1', '8-11am'),
(44, 2, '2015-03-08', '0000-00-00', 'MOI Sunday(identity of a man with Christ)', 'Justus Owaka', 'MH1', '8-11am'),
(45, 2, '2015-03-15', '0000-00-00', 'Forgiveness', 'Pst. Isaac', 'MH1', '8-11am'),
(46, 2, '2015-03-22', '0000-00-00', 'COMMITMENT', 'Simiyu Machani', 'MH1', '8-11am'),
(47, 2, '2015-03-29', '0000-00-00', 'Queens Sunday(The woman the well the water)', 'Dr. Ada Adoyo ', 'MH1', '8-11am'),
(48, 2, '2015-04-05', '0000-00-00', 'Associate Sunday(crucible of suffering)', 'ASAP', 'MH1', '8-11am'),
(49, 2, '2015-04-12', '0000-00-00', 'Escatology', 'Rev. Richard Mayabi', 'MH1', '8-11am'),
(50, 2, '2015-04-19', '0000-00-00', 'We call it home', 'All', 'MH1', '8-11am'),
(51, 3, '2015-02-25', '2015-03-01', 'Mini mission ', NULL, NULL, NULL),
(52, 3, '2015-02-16', '2015-02-20', 'Evangelism week', NULL, NULL, NULL),
(53, 3, '2015-03-23', '2015-03-29', 'Queens week', NULL, NULL, NULL),
(54, 3, '2015-03-28', '2015-03-28', 'Queens Saturday', NULL, NULL, NULL),
(55, 3, '2015-03-02', '2015-03-08', 'MOI week', NULL, NULL, NULL),
(56, 3, '2015-04-05', '2015-04-05', 'Baptism', NULL, NULL, NULL),
(57, 3, '2015-02-21', '2015-02-21', 'Union retreat', NULL, NULL, NULL),
(58, 3, '2015-03-07', '2015-03-07', 'Union sports day', NULL, NULL, NULL),
(59, 3, '2015-02-28', '2015-02-28', 'JCC Project', NULL, NULL, NULL),
(60, 2, '2015-06-28', '2015-06-28', 'Worship service', 'Arise Africa and Mr T', 'MH1', '8:30 am'),
(61, 3, '2015-06-28', '2015-06-28', 'Worship service', 'Arise Africa and Mr T', 'MH1', '8:30 am'),
(62, 1, '2015-07-03', '2015-07-03', 'Talents night', 'Pastor Dan', 'MH1', '8pm - 11pm'),
(63, 3, '2016-10-22', '2016-10-20', 'Union retreat', 'All members', 'Ngong hills', '8am-4pm');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` int(15) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `position` int(15) DEFAULT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `name`, `description`, `position`, `path`) VALUES
(1, 'Eric musembi', 'Chairperson', 1, 'leaders/chair.jpg'),
(2, 'Reginah Wagatu', '1st Vice chairperson(Mum)', 2, 'leaders/mum.jpg'),
(3, 'Gabriel Mwanzia', '2nd Vice chairperson', 3, 'leaders/auncle.jpg'),
(4, 'William Mutegi', 'Secretary', 4, 'leaders/sec.jpg'),
(5, 'Dency Obiero', 'Treasurer', 5, 'leaders/tres.jpg'),
(6, 'Naomi Mumbe', 'Vice secretary', 6, 'leaders/vicsec.jpg'),
(7, 'Jennifer Wangari', 'Worship Coordinator', 7, 'leaders/wor.jpg'),
(8, 'Elijah Okiya', 'Mission Coordinator', 8, 'leaders/miss.jpg'),
(9, 'Dennis Mureithi', 'Evangelism Coordinator', 9, 'leaders/eva.jpg'),
(10, 'Moses Mwangi', 'Discipleship Coordinator', 10, 'leaders/disc.jpg'),
(11, 'Caleb Otieno', 'Literature and Theatre Coordinator', 11, 'leaders/lit.jpg'),
(12, 'Joseph Njoroge', 'Prayer Coodinator', 12, 'leaders/pray.jpg'),
(13, 'Anthony Koech', 'ASAP Coordinator', 13, 'leaders/asap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `reg_no` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `hall` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_no`, `email`, `course`, `reg_no`, `gender`, `hall`) VALUES
(12, 'Francis chege', 'Kamau', '0702771424', 'fchege22@gmail.com', 'B.Tech', 'i39/2141/2012', 'Male', 'Chiromo'),
(13, 'Julius', 'Otieno', '0717105914', 'otienojuli@gmail.com', 'B.Sc', 'I20/2014/2014', 'Male', '2 '),
(14, 'Julius', 'Otieno', '0717105914', 'otienojuli@gmail.com', 'B.Sc', 'I20/2014/2014', 'Male', '2 '),
(15, 'Julius', 'Otieno', '0717105914', 'otienojuli@gmail.com', 'B.Sc', 'I20/2014/2014', 'Male', '2 '),
(16, 'Mutegi', 'William', '0706367677', 'mutegiwilliam30@gmail.com', 'BA.(Urban and Regional Planning)', ' ', 'Male', 'Hall 8'),
(17, 'Mutegi', 'William', '0706367677', 'mutegiwilliam30@gmail.com', 'BA.(Urban and Regional Planning)', ' School Of Built Built Environment', 'Male', 'Hall 8'),
(18, 'Mutegi', 'William', '0706367677', 'mutegiwilliam30@gmail.com', 'BA.(Urban and Regional Planning)', ' School Of Built Built Environment', 'Male', 'Hall 8'),
(19, 'Mutegi', 'William', '0706367677', 'mutegiwilliam30@gmail.com', 'BA.(Urban and Regional Planning)', ' School Of Built Built Environment', 'Male', 'Hall 8'),
(20, 'Tanin', 'Joseph', '0719537387', 'josekiroket@gmail.com', 'Bsc Biology', 'i11/1344/2013', 'Male', 'Chiromo hostels'),
(21, 'George ', 'Maina', '0786175455', 'georgemaina22@gmail.com', 'Bsc  Computer science', 'p15/1472/2013', 'Male', 'Chiromo hostels'),
(22, 'George', 'Maina', '0786175455', 'georgemaina@gmail.com', NULL, 'p15/1472/2013', NULL, 'hall 24'),
(23, 'George', 'Maina', '0786175455', 'georgemaina@gmail.com', NULL, 'p15/1472/2013', NULL, 'hall 24'),
(24, 'mimi', 'fgsd', '12345', 'gmaish@gmail.com', NULL, 'p15/1472/2013', NULL, 'jhsdd'),
(25, 'fdfs', 'asdfdf', '0786175455', 'gmaish@gmail.com', NULL, 'p15/1472/2013', NULL, 'hall 24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
