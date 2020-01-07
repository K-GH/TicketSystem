-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 04:15 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'K-GH', '123');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(5) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_name`, `password`) VALUES
(1, 'ghonaim', '123');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Project_id` int(5) NOT NULL,
  `Project_name` varchar(30) NOT NULL,
  `details` varchar(200) NOT NULL,
  `user_id` int(5) NOT NULL,
  `confirm` varchar(10) NOT NULL DEFAULT 'not yet ',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Project_id`, `Project_name`, `details`, `user_id`, `confirm`, `date`) VALUES
(7, 'anghamy', 'fdljbhtklr;m ;Knlkfn grlknlk gnvkwn g;kgn;kgf mlkngf ;', 5, 'Yes', '2017-09-28 22:12:22'),
(8, 'Rest', 'asdsladlsadkdsjdsjadhjhdsajndsanjsdandsaksdkdskadnksankndsakndskadnsandksadnksdakdsakndnsanddksakdsakdkdsakndsknadknsksakdnksakdndanskdsakdsakkdaskdkd', 6, 'Yes', '2017-09-28 22:12:22'),
(11, 'car agent', ',mb jnewflj nel kfnlknwef.m ,n kn lkwefn ln elfnlwengojnjl', 8, 'Yes', '2017-09-29 13:36:06'),
(12, 'school system', 'lhgenjlr kn lngjlr nlkn klnkl nlengj nklrg sjd jgbkjbjl jl bljbgljv l', 7, 'Yes', '2017-09-29 16:15:24'),
(13, 'photo store', 'joeb khbgjknjl dbihe lmnf jbih njkb fkksd kh ksdij', 9, 'Yes', '2017-09-29 18:02:31'),
(14, 'bus system', 'ipewoiheofihofoen le nljenw ljn ljnlk gnewlknjlewnlj', 1, 'Yes', '2017-09-29 19:35:53'),
(15, 'mechanical issue', 'the car has stoppedu hjsadaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 10, 'Yes', '2017-09-30 15:49:47'),
(16, 'testtttttttt', 'testtttttttttttttttttttttttttttttttttttt', 12, 'not yet ', '2019-02-13 11:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `replay`
--

CREATE TABLE `replay` (
  `id` int(5) NOT NULL,
  `Project_id` int(5) NOT NULL,
  `total_time` varchar(10) NOT NULL,
  `price` varchar(9) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `appro_reg` varchar(10) NOT NULL DEFAULT 'not yet ',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replay`
--

INSERT INTO `replay` (`id`, `Project_id`, `total_time`, `price`, `emp_id`, `appro_reg`, `date`) VALUES
(1, 7, '10 days', '5000 LE', 1, 'Approve', '2017-09-29 01:50:04'),
(2, 8, '12 days', '7000 LE', 1, 'not yet', '2017-09-29 02:20:26'),
(7, 11, '2 month', '20000', 1, 'not yet', '2017-09-29 13:37:57'),
(8, 12, '45 days', '25000 LE', 1, 'not yet', '2017-09-29 16:16:07'),
(9, 13, '17 days', '6000 LE', 1, 'Reject', '2017-09-29 18:03:29'),
(10, 14, '21 days', '8000 LE', 1, 'Reject', '2017-09-29 19:37:24'),
(11, 15, '22 days', '9000 LE', 1, 'Approve', '2017-09-30 15:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Email`, `Password`) VALUES
(1, 'pop', 'k@yahoo.com', '123'),
(2, 'khaled', 'g@yahoo.com', '123'),
(3, 'hisham', 'hi@gmail.com', '1234'),
(4, 'omar', 'o@gmail.com', '123'),
(5, 'ahmed', 'a@gmail.com', '123'),
(6, 'omarpopss', 'omar@h.com', '1233'),
(7, 'anas.alyamany', 'ans_alyamany@yahoo.com', '1235712357'),
(8, 'belal', 'belal@gmail.com', '123'),
(9, 'sarah', 'sarah@yahoo.com', '123'),
(10, 'hisham1', 'hishamsherif@hotmail.com', '1234'),
(11, 'omar1', 'gf@yahoo.com', '123'),
(13, 'test55', 'test@12.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `replay`
--
ALTER TABLE `replay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Project_id` (`Project_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Project_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `replay`
--
ALTER TABLE `replay`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
