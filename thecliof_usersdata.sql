-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 12:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecliof_usersdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `concats`
--

CREATE TABLE `concats` (
  `concatid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `enddate` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `brochure` varchar(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `slider_images` text NOT NULL,
  `description` text NOT NULL,
  `key_topics` longtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `paymentid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `department` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `disable` tinyint(4) NOT NULL DEFAULT '1',
  `user_view` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role_id`, `department`, `status`, `disable`, `user_view`, `created_date`, `modify_date`, `created_by`) VALUES
(1, 'admin', '', 'admin@admin.com', 'Abc@123', 1, NULL, 1, 1, 0, '0000-00-00 00:00:00', '2018-11-11 23:38:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `contact_number` int(15) NOT NULL,
  `conference` varchar(100) NOT NULL,
  `user_filename` varchar(400) NOT NULL,
  `user_address1` varchar(200) NOT NULL,
  `user_address2` varchar(200) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_country` varchar(250) NOT NULL,
  `user_zip` int(10) NOT NULL,
  `user_presentation` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`id`, `user_name`, `user_email`, `contact_number`, `conference`, `user_filename`, `user_address1`, `user_address2`, `user_city`, `user_state`, `user_country`, `user_zip`, `user_presentation`) VALUES
(6, 'M', 'ma@gmail.com', 0, '', 'Format_Rent Agreement.doc', 'Narayana GUDA', 'Gachibowli', 'Hytech city', 'Hyderabad', '', 500073, ''),
(5, 'Mallavarapu Prudhvi', 'mallavarapuprudhvi@gmail.com', 0, '', 'Document 3.rtf', 'Harijanawada', 'Gandigunta', 'Vuyyuru', 'Hyderabad', '', 521165, ''),
(4, 'Mallavarapu Prudhvi', 'mallavarapuprudhvi@gmail.com', 0, '', 'Document 3.rtf', 'Harijanawada', 'Gandigunta', 'Vuyyuru', 'Hyderabad', '', 521165, ''),
(7, 'M', 'king@gmail.com', 0, 'Dental', 'NEW RENTAL AGREEMENT.pdf', 'kabdfkjvk', 'ladnflk', 'amfldkglk', 'Hyderabad', '', 524656, ''),
(8, 'Budda Seshu', 'buddaseshu@gmail.com', 0, 'Dental', 'decla.jpg', 'No address', 'ALGL', 'LADFKG', 'Hyderabad', '', 466, ''),
(9, 'Budda Seshu', 'buddaseshu@gmail.com', 0, 'Dental', 'decla.jpg', 'No address', 'ALGL', 'LADFKG', 'Hyderabad', '', 466, ''),
(10, 'BUDDA SEHSU BABU', 'buddaseshu@gmail.com', 0, 'Dental', 'NEW RENTAL AGREEMENT.pdf', 'Gandigunta', 'KAKGJ', 'Vuyyuru', 'Hyderabad', '', 521165, ''),
(11, 'BUDDA SEHSU BABU', 'buddaseshu@gmail.com', 0, 'Dental', 'NEW RENTAL AGREEMENT.pdf', 'Gandigunta', 'KAKGJ', 'Vuyyuru', 'Hyderabad', '', 521165, ''),
(12, 'Mallavarapu Prudhvi', 'buddaseshu@gmail.com', 0, 'Dental', 'NEW RENTAL AGREEMENT.pdf', 'Gandigunta', 'Vuyyuru', 'Bza', 'Hyderabad', '', 521165, ''),
(13, 'Mallavarapu Prudhvi', 'buddaseshu@gmail.com', 0, 'Dental', 'NEW RENTAL AGREEMENT.pdf', 'Gandigunta', 'Vuyyuru', 'Bza', 'Hyderabad', '', 521165, ''),
(14, 'test', 'manideepami@gmail.com', 0, 'Dental', 'CTETConfirmationPage2018.pdf', 'sadf', 'asdf', 'sdf', 'Hyderabad', '', 0, ''),
(15, 'tes', 'manideep@gmail.com', 0, 'Dental', 'CTETConfirmationPage2018.pdf', 'asdf', 'asdf', 'asdf', 'Hyderabad', '', 0, ''),
(16, 'test', 'manideepami@gmail.com', 0, 'Dental', 'CTETConfirmationPage2018.pdf', '123123', '23123', '23', 'Hyderabad', '', 123, ''),
(17, 'PROF. MUSHTAQUE AHMED PATHAN', 'ma.pathan12@yahoo.com', 0, 'Climate Change', 'CLIMATE CHANGE PAPER.docx', 'CENTER FOR PURE & APPLIED GEOLOGY', 'UNIVERSITY OF SINDH, JAMSHORO, SINDH, PAKISTAN', 'JAMSHORO', 'Hyderabad', '', 76080, ''),
(18, 'PROF. MUSHTAQUE AHMED PATHAN', 'ma.pathan12@yahoo.com', 0, 'Climate Change', 'CLIMATE CHANGE PAPER.docx', 'CENTER FOR PURE & APPLIED GEOLOGY', 'UNIVERSITY OF SINDH, JAMSHORO, SINDH, PAKISTAN', 'JAMSHORO', 'Hyderabad', '', 76080, ''),
(19, 'Kindu Temesgen Abebe ', 'temesgen1980@gmail.com', 0, 'Climate Change', 'Abstract.pdf', 'woldia', 'Bahir dar', 'woldia', 'Choose...', '', 400, ''),
(20, 'shiva', 'shiva@gmail.com', 0, 'Oil, Gas & Petroleum Refinery Conference', 'MUSHTAQUE AHMED PATHAN.docx', 'SFQEGRWGWGWH', 'CAVVDWVWVWV', 'VGEHTHJJJ', 'Hyderabad', '', 500055, ''),
(21, 'shiva', 'shiva@gmail.com', 0, 'Oil, Gas & Petroleum Refinery Conference', 'MUSHTAQUE AHMED PATHAN.docx', 'SFQEGRWGWGWH', '5-27-155', 'NEAR COLANY', 'Hyderabad', '', 500055, ''),
(22, 'budda seshu', 'buddaseshU@gmail.com', 0, 'Cardiology', 'Latest resume.pdf', 'Vuyyru', 'Hyderabad', 'Hyderabad', 'ANdhra Pradesh', '', 521165, ''),
(23, 'Budda Seshu', 'buddaseshu@gmail.com', 5665656, 'Cardiology', 'Recruitment Process for Probationary Officers_ Management Trainees in Participating Organisations.pdf', 'ahegkjlklk', 'alkdjgkllkg', 'llkdfjgkljg', 'lakjgrl', '', 4466, 'Poster'),
(24, 'Budda Seshu', 'buddaseshu@gmail.com', 5665656, 'Cardiology', 'Recruitment Process for Probationary Officers_ Management Trainees in Participating Organisations.pdf', 'ahegkjlklk', 'alkdjgkllkg', 'llkdfjgkljg', 'lakjgrl', '', 4466, 'Poster'),
(25, 'Budda Seshu', 'buddaseshu@gmail.com', 5665656, 'Cardiology', 'Recruitment Process for Probationary Officers_ Management Trainees in Participating Organisations.pdf', 'ahegkjlklk', 'alkdjgkllkg', 'llkdfjgkljg', 'lakjgrl', '', 4466, 'Poster'),
(26, 'Budda Seshu', 'buddaseshu@gmail.com', 5665656, 'Cardiology', 'Recruitment Process for Probationary Officers_ Management Trainees in Participating Organisations.pdf', 'ahegkjlklk', 'alkdjgkllkg', 'llkdfjgkljg', 'lakjgrl', '', 4466, 'Poster'),
(27, 'Budda Seshu', 'buddaseshu@gmail.com', 5665656, 'Cardiology', 'Recruitment Process for Probationary Officers_ Management Trainees in Participating Organisations.pdf', 'ahegkjlklk', 'alkdjgkllkg', 'llkdfjgkljg', 'lakjgrl', '', 4466, 'Poster'),
(28, 'seshu', 'buddaseshu@gmail.com', 2147483647, 'Cardiology', 'Latest resume.pdf', 'asdasd', 'asdsd', 'asdsd', 'asdasd', '', 521165, 'Oral'),
(29, 'Seshu', 'buddaseshu@gmail.com', 2147483647, 'Cardiology', 'c.pdf', 'sadads', 'dasads', 'adsads', 'adsds', '', 777, 'Oral'),
(30, 'fhrxh', 'chinma@gmail.com', 2147483647, 'Nursing', '1.docx', 'SFQEGRWGWGWH', 'sdGhjyjr', 'tkk', 'yktyktk', '', 500055, 'Oral'),
(31, 'g', 'chinma@gmail.com', 2147483647, 'Oil refinery', '1.docx', 'SFQEGRWGWGWH', '', 'tkk', 'yktyktk', '', 500055, 'Poster'),
(32, '', '', 0, 'Health care', '1.docx', '', '', '', '', '', 0, 'Choose...'),
(33, '', '', 0, 'Climate change', '1.docx', '', '', '', '', '', 0, 'Choose...'),
(34, 'seshu', 'buddaseshu@gmail.com', 2147483647, 'Dental', 'Show Correspondence.pdf', '', 'sa', 'sad', '', '', 787878, 'Oral'),
(35, 'seshu', 'buddaseshu@gmail.com', 2147483647, 'Dental', 'Show Correspondence.pdf', '', 'sa', 'sad', '', '', 787878, 'Oral'),
(36, 'seshu', 'buddaseshu0325@gmail.com', 2147483647, 'Dental', 'Show Correspondence.pdf', 'Addreess1', 'Addreess22', 'Hyderabad', '', '', 521165, 'Oral'),
(37, 'seshu', 'buddaseshu0325@gmail.com', 812558816, 'Dental', 'New DOC Document.doc', 'dsdas', 'dsad', 'Hyderabad', '', '', 521165, 'Oral'),
(38, '', '', 0, 'Climate change', 'download.jpg', '', '', '', '', '', 0, 'Choose...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concats`
--
ALTER TABLE `concats`
  ADD PRIMARY KEY (`concatid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concats`
--
ALTER TABLE `concats`
  MODIFY `concatid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
