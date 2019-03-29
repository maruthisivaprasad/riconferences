-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 01:56 PM
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `concatid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`concatid`, `name`, `email`, `subject`, `message`, `created_date`) VALUES
(1, 'sadfas', 'vkmsiva@gmail.com', 'sadfas', 'sadfas', '2018-11-14 09:31:33'),
(2, 'Manideep', 'manideepami@gmail.com', 'Testing ', '', '2018-11-16 10:04:22'),
(3, 'TylerCog', 'felanmalan@jobero.se', 'Behold is  an interestingoffers for you.', '', '2018-12-01 10:08:38'),
(4, 'Diana Williams', 'DianaWilliams01D@yahoo.com', 'Question about your website', '', '2018-12-03 05:31:30'),
(5, 'test', 'test@gmail.com', 'About Speakers', '', '2018-12-03 17:51:56'),
(6, 'test', 'test@gmail.com', 'About conferences', '', '2018-12-03 17:56:56'),
(7, 'test', 'test@ggg.com', 'About conferences', 'sadfsaf', '2018-12-03 18:00:17'),
(8, 'GeraldBouff', 'sara.duncan.j@gmail.com', 'Discounts', ' Hy there,  God-fearing hearsay ! a in goodjolly-boat \r\n Upstanding click \r\n \r\n \r\nhttp://bit.ly/2Pu2ILS', '2018-12-11 22:37:47'),
(9, 'Josephmeego', 'viktor.adolfsson@djurbergs.se', 'Others', ' Hi an supremeoffers \r\n Are you in?  \r\n \r\n \r\nhttp://bit.ly/2UBawPY', '2018-12-15 12:14:04'),
(10, 'Maruthi Siva Prasad', 'vkmsivaprasad@gmail.com', 'About Speakers', 'test', '2018-12-18 11:39:16'),
(11, 'test maruthi', 'vkmsivaprasad@gmail.com', 'About Speakers', 'test', '2018-12-18 11:44:42'),
(12, 'test', 'test@gmail.com', 'dsafas', 'asdfas', '2018-12-19 12:37:17'),
(13, 'sadf', 'test@gmail.com', 'sadfas', 'asdfas', '2018-12-19 12:37:47'),
(14, 'asdfas', 'test@gmail.com', 'sadfas', 'asdfas', '2018-12-19 12:38:38'),
(15, 'asdf', 'test@gmail.com', 'asdf', 'asdfsa', '2018-12-19 12:40:35'),
(16, 'asdfas f', 'test@gmail.com', 'sadfasf', 'sadfas', '2018-12-19 12:41:20'),
(17, 'asdf', 'test@gmail.com', 'sadfdsa', 'asfdasf', '2018-12-19 12:42:44'),
(18, 'asfdsaf', 'test@gmail.com', 'asdf', 'asdfasf', '2018-12-19 12:43:14'),
(19, 'sadf', 'test@gmail.com', 'sdfasf', 'asdfas', '2018-12-19 12:44:18'),
(20, 'asfdsa', 'test@gmail.com', 'safd', 'asdfsadf', '2018-12-19 12:45:14'),
(21, 'sadfas', 'test@gmail.com', 'asdf', 'asdfasf', '2018-12-19 12:45:52'),
(22, 'asdfsa', 'test@gmail.com', 'asdf', 'asdfas', '2018-12-19 12:46:27'),
(23, 'asdfas', 'test@ghmail.com', 'asdf', 'sadf', '2018-12-19 12:46:51'),
(24, 'asdfsa', 'test@gmail.com', 'sadf', 'asdf', '2018-12-19 12:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `enddate` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `thumb_image` varchar(255) NOT NULL,
  `brochure` varchar(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `slider_images` text NOT NULL,
  `description` text NOT NULL,
  `key_topics` longtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `speaker_early_academic` int(11) NOT NULL,
  `speaker_early_business` int(11) NOT NULL,
  `speaker_regular_academic` int(11) NOT NULL,
  `speaker_regular_business` int(11) NOT NULL,
  `speaker_onspot_academic` int(11) NOT NULL,
  `speaker_onspot_business` int(11) NOT NULL,
  `student_early_academic` int(11) NOT NULL,
  `student_early_business` int(11) NOT NULL,
  `student_regular_academic` int(11) NOT NULL,
  `student_regular_business` int(11) NOT NULL,
  `student_onspot_academic` int(11) NOT NULL,
  `student_onspot_business` int(11) NOT NULL,
  `delegate_early_academic` int(11) NOT NULL,
  `delegate_early_business` int(11) NOT NULL,
  `delegate_regular_academic` int(11) NOT NULL,
  `delegate_regular_business` int(11) NOT NULL,
  `delegate_onspot_academic` int(11) NOT NULL,
  `delegate_onspot_business` int(11) NOT NULL,
  `early_date` date NOT NULL,
  `regular_date` date NOT NULL,
  `onsport_date` date NOT NULL,
  `speaker_accommodation` int(11) NOT NULL,
  `student_accommodation` int(11) NOT NULL,
  `delegate_accommodation` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `hotel_phone` varchar(255) NOT NULL,
  `hotel_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `title`, `slug`, `date`, `enddate`, `location`, `theme`, `thumb_image`, `brochure`, `background_image`, `slider_images`, `description`, `key_topics`, `created_date`, `speaker_early_academic`, `speaker_early_business`, `speaker_regular_academic`, `speaker_regular_business`, `speaker_onspot_academic`, `speaker_onspot_business`, `student_early_academic`, `student_early_business`, `student_regular_academic`, `student_regular_business`, `student_onspot_academic`, `student_onspot_business`, `delegate_early_academic`, `delegate_early_business`, `delegate_regular_academic`, `delegate_regular_business`, `delegate_onspot_academic`, `delegate_onspot_business`, `early_date`, `regular_date`, `onsport_date`, `speaker_accommodation`, `student_accommodation`, `delegate_accommodation`, `hotel_name`, `hotel_address`, `hotel_phone`, `hotel_images`) VALUES
(14, 'World Congress on Dental Health ', 'dental-health', 'Nov 20-21,2019', '2019-11-21', 'Rome, Italy', 'Exploring the Possibilities in shaping the future of Dental and Oral Health', 'thumb/4wzjmsou.jpg', 'brochure/f5aftwgr.pdf', 'background/3zspubsb.jpg', 'slider/lb17uf1d.jpg,slider/k2z2akdh.jpg', '&lt;p&gt;&lt;strong&gt;&amp;nbsp;Welcome&amp;hellip;!!!&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;RiConferences&lt;/strong&gt;&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;World Congress on Dental Health during&amp;nbsp;December Nov 20-21,2019 at Rome, Italy&amp;nbsp;&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;World Congress on Dental Health will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;World Congress on Dental Health is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;YOUNG RESEARCHERS OPPORTUNITY:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;CONFERENCE OBJECTIVES:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in Dental Health research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify research and practice-based innovations in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Dental Health research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To debate gaps and priorities for sustainable development in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Dental Health research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To discuss and debate the challenges and opportunities in the new era of optimizing Dental Health research reforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify opportunities for evidence-based practice in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Dental Health research and development.&lt;/p&gt;\r\n', '&lt;div class=&quot;conference-subjects padding-lg&quot;&gt;\r\n         &lt;h4 class=&quot;text-center padding-sm bg-success-gradient mb-5 mt-5&quot;&gt;Keytopics&lt;/h4&gt;\r\n         &lt;div class=&quot;row col-md-12&quot;&gt;\r\n            &lt;div class=&quot;col-md-4&quot;&gt;\r\n               &lt;ul class=&quot;list-group keytopics_main&quot;&gt;&lt;a href=&quot;submit-abstract.html&quot; class=&quot;text-dark&quot;&gt;\r\n                  &lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Cosmetic Dentistry  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Education  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Craniofacial Surgery  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Periodontology  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Orthodontics  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Endodontics &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Paediatric Dentistry  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Oral Pathology  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Implants &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Material Sciences  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Holistic Dentistry  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Nursing and Public Health Dentistry  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Forensic Odontology &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Geriodontics  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Marketing  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Marketing Trends &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Marketing Strategies &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dentistry &lt;/li&gt;&lt;/a&gt;\r\n               &lt;/ul&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;col-md-4&quot;&gt;\r\n               &lt;ul class=&quot;list-group keytopics_main&quot;&gt;\r\n                 &lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt; Nano Dentistry  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Digital Dentistry &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Endodontic  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Pediatric Dentistry &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Prosthodontics  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Restorative Dentistry &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Pain, Complications and Treatments &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Oral and Maxillofacial Surgery &amp; Innovations  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Surgeries and Innovations  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Sleep Medicine &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Oral Microbiology and Pathology &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Products and Marketing &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Tools and Treatment Techniques &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  3D Imaging and Digital Dentistry  &lt;/li&gt;\r\n               &lt;/ul&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;col-md-4&quot;&gt;\r\n               &lt;ul class=&quot;list-group keytopics_main&quot;&gt;\r\n                  \r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Oral and Maxillofacial Pathology  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Stem Cell  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Obstructive Sleep Apnea Syndrome (OSA)  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  The Future of Dentistry: Benefits of 3D Dentistry and CBCT Machines &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Oral and Maxillofacial surgery  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Oral and maxillofacial radiology  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Oral Cancer &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Public Health Dentistry &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Traumatology &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  How to Create an Awesome Dental Marketing Plan? &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Nanotechnology Inspires Next-generation Dental Materials  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dentistry &ndash; New Technologies  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Dental Abnormalities  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Forensic Dentistry  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Periodontics  &lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;  Restrorative Dentistry  &lt;/li&gt;\r\n               &lt;/ul&gt;\r\n            &lt;/div&gt;\r\n          &lt;/div&gt;\r\n         &lt;/div&gt;', '2018-11-15 07:12:30', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '2018-12-20', '2018-12-20', '2018-12-20', 0, 0, 0, '', '', '', ''),
(15, 'Materials Science and Engineering Conference', 'materials-science', 'Oct 21-22, 2019', '2019-10-22', 'Dubai, UAE', 'Materials Technology and Manufacturing Innovations', 'thumb/cd98c832.jpg', 'brochure/4mrp1qqn.pdf', 'background/bxl1ykcw.jpg', 'slider/lzgzdqwr.jpg,slider/8y8ffizf.jpg', '&lt;p&gt;&amp;nbsp;&lt;strong&gt;Welcome&amp;hellip;!!!&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;RiConferences&lt;/strong&gt;&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;&lt;strong&gt;Materials Science and Engineering Conference&amp;nbsp;&lt;/strong&gt;&amp;nbsp;during&amp;nbsp;&lt;strong&gt;Oct 21-22, 2019 Dubai, UAE&lt;/strong&gt;&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;Materials Science and Engineering Conference will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;Materials Science and Engineering Conference is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;YOUNG RESEARCHERS OPPORTUNITY:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;CONFERENCE OBJECTIVES:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in Materials Science and Engineering research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify research and practice-based innovations in optimizing Materials Science and Engineering research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To debate gaps and priorities for sustainable development in optimizing Materials Science and Engineering research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To discuss and debate the challenges and opportunities in the new era of optimizing Materials Science and Engineering research reforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify opportunities for evidence-based practice in optimizing Materials Science and Engineering research and development.&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;strong&gt;&amp;nbsp; &amp;nbsp; CALL FOR SUBMISSIONS&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Science &amp;amp; Engineering&lt;/a&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biomaterials and Medical Devices&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nanotechnology in Materials Science&lt;/a&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials for Energy Applications&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Batteries and Energy Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mining, Metallurgy and Materials Scienc&lt;/a&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Emerging technologies in materials science&lt;/a&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Ceramics and Composite Materials&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Emerging Smart Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Physics and Chemistry of Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Metals, Mining, Metallurgy and Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mechanics, Characterization Techniques and Equipments &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Graphene and 2D Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Entrepreneurs Investment Meet &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Material Science and Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Advanced Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nano Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nano Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Metals and Metallurgy &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Bio Materials and Medical Devices &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Chemistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Smart Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Magnetic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Green Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Surface Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biosensors and Bio Electronic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Electronic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Optical Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Carbon Nano Structures and Graphene &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Energy Harvesting Materials&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Science &amp;amp; Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nanotechnology in Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Batteries and Energy Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mining, Metallurgy and Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Emerging technologies in materials science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biomaterials and Tissue Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Structural Materials and Characterization &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Polymer Science and Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mechanics and Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Chemistry and Physics &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Computational Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Engineer Training and Career &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Science and Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nanomaterials and Nanotechnology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biomaterials and Medical Devices &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials for Energy Applications &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Ceramics and Composite Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Electronic, Optical and Magnetic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Emerging Smart Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Physics and Chemistry of Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Metals, Mining, Metallurgy and Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mechanics, Characterization Techniques and Equipments &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Graphene and 2D Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Entrepreneurs Investment Meet &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Material Science and Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Advanced Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nano Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nano Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Metals and Metallurgy &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Bio Materials and Medical Devices &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Chemistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Smart Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Magnetic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Green Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Surface Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biosensors and Bio Electronic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Electronic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Optical Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Carbon Nano Structures and Graphene &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Energy Harvesting Materials&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-15 07:15:03', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', ''),
(16, 'World Congress on Oil and Gas ', 'oil-gas', 'Oct 23-24,2019', '2019-10-24', 'Dubai, UAE', 'A Global Hub in Exchanging the Advanced Technologies in Petroleum', 'thumb/giksd0av.jpg', 'brochure/43pp7txx.pdf', 'background/pcmz8b9n.jpg', 'slider/rposgdf8.jpg', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Welcome&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;RiConferences&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;World Congress on Oil and Gas &amp;nbsp;during&amp;nbsp;December 06-07, 2019&amp;nbsp;at Dubai, UAE&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;World Congress on Oil and Gas will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;World Congress on Oil and Gas is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;YOUNG RESEARCHERS OPPORTUNITY:&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;CONFERENCE OBJECTIVES:&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in Oil and Gas research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify research and practice-based innovations in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Oil and Gas research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To debate gaps and priorities for sustainable development in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Oil and Gas research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To discuss and debate the challenges and opportunities in the new era of optimizing Oil and Gas research reforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify opportunities for evidence-based practice in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Oil and Gas research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;strong&gt;CALL FOR SUBMISSIONS&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Biofuels and Fossil Fuels &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Oil Refining Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Geophysical and Remote Sensing Techniques &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;New Technology in Upstream &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Midstream Oil and Gas Sector Trends &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Impact of Artificial Intelligence &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;The Digital Tranformation Initiative &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Advancement in Alternate Fuels &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Investigation Techniques &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Environmental Issues &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Risk factors Faced by the Oil and Gas Companies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Inventory Management Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Automation and IOT &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Advanced Oil and Gas Technologies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Global Oil and Gas &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Oil Formation &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Upstream Process and Midstream Process &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Petroleum Science and Petroleum Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Crude oil Excavation &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Biofuels and Biodiesels &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Petroleum Geology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Offshore technologies and Offshore Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Pipeline and Storage &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Oil Exploration and Consumption &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Advanced Nanomaterials in oil and Gas Industries &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Corporate social responsibilities in oil and gas industries &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;General Issues in Oil and Gas Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;The Economic Effects of Oil and Gas Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Emerging technology on Market and strategies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Regulations and Ethics &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-15 07:20:56', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', ''),
(18, 'World Congress on Nursing and Healthcare ', 'nursing-healthcare', 'Oct 21-22,2019', '2019-10-22', 'Dubai, UAE', 'Current challenges and innovations in Nursing research', 'thumb/4l75w8cp.jpg', 'brochure/jlmbj202.pdf', 'background/lkpreh5q.jpg', 'slider/aps9hi70.jpg,slider/61acy1r7.jpg', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Welcome&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;RiConferences&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;World Congress on Nursing and Healthcare &amp;nbsp;during&amp;nbsp;December 06-07, 2019&amp;nbsp;at Dubai, UAE&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;World Congress on Nursing and Healthcare will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;World Congress on Nursing and Healthcare is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;YOUNG RESEARCHERS OPPORTUNITY:&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;CONFERENCE OBJECTIVES:&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in Nursing and Healthcare research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify research and practice-based innovations in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Nursing and Healthcare research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To debate gaps and priorities for sustainable development in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Nursing and Healthcare research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To discuss and debate the challenges and opportunities in the new era of optimizing Nursing and Healthcare research reforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify opportunities for evidence-based practice in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Nursing and Healthcare research and development.&lt;/p&gt;\r\n', '&lt;table&gt;\r\n	&lt;thead&gt;\r\n		&lt;tr&gt;\r\n			&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/thead&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;\r\n			&lt;td&gt;Mark&lt;/td&gt;\r\n			&lt;td&gt;Otto&lt;/td&gt;\r\n			&lt;td&gt;@mdo&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;\r\n			&lt;td&gt;Jacob&lt;/td&gt;\r\n			&lt;td&gt;Thornton&lt;/td&gt;\r\n			&lt;td&gt;@fat&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;\r\n			&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;\r\n			&lt;td&gt;@twitter&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n', '2018-11-16 17:59:16', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', ''),
(19, 'World Cardiology and Cardiologist Meeting', 'world-cardiology', 'Nov 20-21,2019', '2018-11-20', 'Rome, Italy', 'Novel Insights in Cardiology and Healthcare', 'thumb/jwz0vadk.jpg', 'brochure/j2035hgp.pdf', 'background/9fcx26ac.jpg', 'slider/k6932znn.jpg', '&lt;p&gt;&lt;strong&gt;Welcome&amp;hellip;!!!&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;RiConferences&lt;/strong&gt;&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;&lt;strong&gt;World Cardiology and Cardiologist Meeting&lt;/strong&gt; &amp;nbsp;during&amp;nbsp;&lt;strong&gt;Nov 20-21,2019 Rome, Italy&lt;/strong&gt;&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;World Cardiology and Cardiologist Meeting will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;World Cardiology and Cardiologist Meeting is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;YOUNG RESEARCHERS OPPORTUNITY&lt;/strong&gt;:&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;CONFERENCE OBJECTIVES:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in Cardiology and Cardiologist research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify research and practice-based innovations in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Heart Disease research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To debate gaps and priorities for sustainable development in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;Heart Disease research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To discuss and debate the challenges and opportunities in the new era of optimizing Heart Disease research reforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify opportunities for evidence-based practice in optimizing Heart Disease research and development.&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;strong&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; CALL FOR SUBMISSIONS&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiovascular Disease and Nutrition &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Heart Diseases &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac surgery &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Interventional Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Pediatric Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiovascular Pharmacology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Coronary Heart Diseases &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac Regeneration &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Molecular Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac remodeling or Ventricular remodeling &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Vascular Biology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Myocardial Infarction &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Hypertension &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Clinical Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac Rhythm Abnormalities &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiomyopathies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac Diagnostic Test &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Case reports on Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiometabolic Health- Diabetes, Obesity &amp;amp; Metabolism &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac Toxicity &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Heart and Cardiovascular Diseases &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Lipid and Metabolic Syndromes &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Interventional Cardiology and Heart Surgery &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardio-Oncology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Occupational Heart Disease &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiogeriatrics &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Sports and Exercise Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac Diagnosis, Imaging And Medical Tests &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Hypertension and Healthcare &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Clinical Trials in Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Veterinary Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Advances in Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Personalized Medicine-The Future &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiology Ethics And Case Reports &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Heart Diseases and Failure &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Diabetes, Obesity &amp;amp; Stroke &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiovascular Disease &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Women&amp;rsquo;s Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Heart Regeneration &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiac Pharmacology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Angiography &amp;amp; Intervention &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiologists &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Cardiology - Future Medicine &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Heart Devices &amp;amp; Heart Diagnosis &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Nuclear Cardiology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;Genetic Cardiology &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-16 18:05:23', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', '');
INSERT INTO `events` (`eventid`, `title`, `slug`, `date`, `enddate`, `location`, `theme`, `thumb_image`, `brochure`, `background_image`, `slider_images`, `description`, `key_topics`, `created_date`, `speaker_early_academic`, `speaker_early_business`, `speaker_regular_academic`, `speaker_regular_business`, `speaker_onspot_academic`, `speaker_onspot_business`, `student_early_academic`, `student_early_business`, `student_regular_academic`, `student_regular_business`, `student_onspot_academic`, `student_onspot_business`, `delegate_early_academic`, `delegate_early_business`, `delegate_regular_academic`, `delegate_regular_business`, `delegate_onspot_academic`, `delegate_onspot_business`, `early_date`, `regular_date`, `onsport_date`, `speaker_accommodation`, `student_accommodation`, `delegate_accommodation`, `hotel_name`, `hotel_address`, `hotel_phone`, `hotel_images`) VALUES
(20, 'WorldÂ Congress on Climate Change & Global Warming ', 'global-warming', 'Oct 23-24,2019', '2019-10-18', 'Dubai, UAE  ', 'Analyzing New Horizons and Sustainable Technologies for Challenging Climate Change and Global Warming ', 'thumb/b5nqfmw5.jpg', '', 'background/lhal5ruf.jpg', 'slider/hi4vdgx4.jpg', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Welcome&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;RiConferences&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;World Congress on Climate Change &amp;amp; Global Warming&amp;nbsp;&amp;nbsp;during&amp;nbsp;December 06-07, 2019&amp;nbsp;at Dubai, UAE&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;Climate Change &amp;amp; Global Warming&amp;nbsp;will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;World&amp;nbsp;Congress&amp;nbsp;Climate Change &amp;amp; Global Warming&amp;nbsp;is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;YOUNG RESEARCHERS OPPORTUNITY:&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;CONFERENCE OBJECTIVES:&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in Climate Change &amp;amp; Global Warming research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify research and practice-based innovations in optimizing Climate Change &amp;amp; Global Warming research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To debate gaps and priorities for sustainable development in optimizing Climate Change &amp;amp; Global Warming research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To discuss and debate the challenges and opportunities in the new era of optimizing Climate Change &amp;amp; Global Warming research reforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify opportunities for evidence-based practice in optimizing Climate Change &amp;amp; Global Warming research and development.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n&lt;/ul&gt;\r\n', '&lt;p&gt;&lt;strong&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;CALL FOR SUBMISSIONS&lt;/strong&gt;&lt;/p&gt;\r\n', '2018-11-20 17:39:21', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', ''),
(21, 'Glimpses of world Biotechnology ', 'glimpses', ' Nov 18-19,2019', '2019-11-19', ' Rome, Italy', 'DISCOVERING THE RECENT UPRISINGS IN THE FIELD OF BIOTECHNOLOGY', 'thumb/kpfmw6zr.jpg', '', 'background/1h7s9fk5.jpg', 'slider/esq7qteu.jpg,slider/61eheel0.jpg', '&lt;p&gt;Welcome&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;RiConferences&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;Glimpses of World Biotechnology during&amp;nbsp;Nov 18-19,2019 Rome, Italy&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;Glimpses of World Biotechnology&amp;nbsp;will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;Glimpses of World Biotechnology&amp;nbsp;is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for the development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at the upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;YOUNG RESEARCHERS OPPORTUNITY:&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;CONFERENCE OBJECTIVES:&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in &amp;nbsp;Biotechnology&amp;nbsp;research and development.&lt;br /&gt;\r\nTo identify research and practice-based innovations in optimizing &amp;nbsp;Biotechnology research and development.&lt;br /&gt;\r\nTo debate gaps and priorities for sustainable development in optimizing &amp;nbsp;Biotechnology research and development.&lt;br /&gt;\r\nTo discuss and debate the challenges and opportunities in the new era of optimizing&amp;nbsp;&amp;nbsp;Biotechnology&amp;nbsp;research reforms.&lt;br /&gt;\r\nTo identify opportunities for evidence-based practice in optimizing &amp;nbsp;Biotechnology research and development.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n&lt;/ul&gt;\r\n', '&lt;h3&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;strong&gt;CALL FOR SUBMISSIONS&lt;/strong&gt;&lt;/h3&gt;\r\n', '2018-11-20 17:43:18', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', ''),
(22, 'World Congress on Food and Nutrition', 'food-nutrition', 'Nov 18-19,2019', '2019-11-19', 'Rome, Italy', 'Discovering the New Advances on Food and Nutrition for New Generation', 'thumb/5hc0z0y9.jpg', '', 'background/c6j2j3r3.jpg', 'slider/hpx0400g.jpg,slider/d3euqacd.jpg', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Welcome&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;RiConferences&amp;nbsp;invites all the participants from all over the world to attend&amp;nbsp;World Congress on Food and Nutrition during&amp;nbsp;December 06-07, 2019&amp;nbsp;at Dubai, UAE&amp;nbsp;which includes Keynote presentations, Oral talks, Poster presentations, and Exhibitions.&lt;/p&gt;\r\n\r\n&lt;p&gt;World Congress on Food and Nutrition will also provide the excellent opportunity to meet experts, exchange information, and strengthen the collaboration among Directors, Researchers, Associate Professors, and Scholars from both academia and industry.&lt;/p&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;World Congress on Food and Nutrition is anticipating participants from 40 and more countries across the globe and the two-day conference will provoke Plenary sessions, Keynote speeches, Poster, and Oral Presentations. This program provides two days of robust discussions on recent advancements and new strategies for development of new materials for global requirements.&lt;/p&gt;\r\n\r\n&lt;p&gt;Our pleasure to meet you at upcoming event&amp;hellip;!!!&lt;/p&gt;\r\n\r\n&lt;p&gt;YOUNG RESEARCHERS OPPORTUNITY:&lt;/p&gt;\r\n\r\n&lt;p&gt;We make sure to support and motivate &amp;#39;Young Researchers&amp;#39; by:&lt;/p&gt;\r\n\r\n&lt;p&gt;Establishing their academic and professional relationships.&lt;/p&gt;\r\n\r\n&lt;p&gt;Improving their morale and confidence by presenting research on an international platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Interacting with expertise in their respective departments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Clearing your inhibitions of adjusting to the foreign environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Providing a holistic experience of academic tourism.&lt;/p&gt;\r\n\r\n&lt;p&gt;CONFERENCE OBJECTIVES:&lt;/p&gt;\r\n\r\n&lt;p&gt;To facilitate opportunities for networking, collaboration, and exchange of ideas with internationally renowned leaders in &amp;nbsp;Food and Nutrition&amp;nbsp; research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify research and practice-based innovations in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;Food and Nutrition research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To debate gaps and priorities for sustainable development in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;Food and Nutrition research and development.&lt;/p&gt;\r\n\r\n&lt;p&gt;To discuss and debate the challenges and opportunities in the new era of optimizing &amp;nbsp;Food and Nutrition research reforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;To identify opportunities for evidence-based practice in optimizing&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;Food and Nutrition research and development.&lt;/p&gt;\r\n', '&lt;p&gt;&lt;strong&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; CALL FOR SUBMISSIONS&lt;/strong&gt;&lt;/p&gt;\r\n', '2018-11-20 17:47:45', 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, 99, 199, 299, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `key_committe`
--

CREATE TABLE `key_committe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `orderid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `eventid` int(11) DEFAULT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizing_committe`
--

CREATE TABLE `organizing_committe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
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
-- Table structure for table `submit_conferance`
--

CREATE TABLE `submit_conferance` (
  `id` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `user_presentation` varchar(100) NOT NULL,
  `uploadfile` varchar(255) NOT NULL,
  `user_address1` text NOT NULL,
  `user_address2` text NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_zip` varchar(255) NOT NULL,
  `aggrement` tinyint(1) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit_conferance`
--

INSERT INTO `submit_conferance` (`id`, `eventid`, `user_name`, `user_email`, `contact_number`, `user_presentation`, `uploadfile`, `user_address1`, `user_address2`, `user_city`, `user_state`, `user_country`, `user_zip`, `aggrement`, `created_date`) VALUES
(2, 15, 'test', 'test@gmail.com', '23232321', 'Oral', '', 'asfdsa', 'asdfsa', 'safd', 'asdf', '', 'asfdasf', 0, '2018-11-15 10:15:52'),
(3, 15, 'sadfsaf', 'test@gmail.com', '2343242', 'Poster', 'conferance/guboidzq.jpg', 'asdfsaf', 'asdfsa', 'sadf', 'asfd', 'asdf', '234324', 0, '2018-11-15 10:16:35'),
(4, 15, 'asdfsaf', 'test@gmail.com', '3423424', 'Oral', 'conferance/aobf8im3.jpg', 'asfsadf', 'asfdas', 'asdf', 'asdf', 'asdf', 'asfd', 0, '2018-11-15 10:18:36'),
(5, 15, 'test', 'test@gmail.com', '1231231231', 'Oral', '', '', '', '', '', '', '', 0, '2018-11-15 14:32:45'),
(6, 15, 'test', 'test@gmail.com', '1231231231', 'Oral', 'conferance/5u9pyu6p.css', 'asdfasdf', 'hitechcity', 'Hyderabad', 'asdfffffffffffffffffffff', 'India', '586001', 0, '2018-11-15 14:33:27'),
(7, 14, 'Manideep', 'manideep@gmail.com', '1231231231', 'Oral', 'conferance/tv4l0jku.jpg', 'Hyderbad', 'secundarab', 'charminar', 'telangana', 'india', '500051', 0, '2018-11-16 09:42:25'),
(8, 14, 'test', 'test@gmail.com', '8978161602', 'Oral', '', '', '', 'HYDERABAD', 'TELANGANA', 'India', '', 0, '2018-11-16 17:37:22'),
(9, 14, 'test', 'test@gmail.com', '8978161602', 'Oral', '', '', '', 'HYDERABAD', 'TELANGANA', 'India', '', 0, '2018-11-16 17:38:18'),
(10, 14, 'vwrgtehfegrwgggggrgrwg', 'fwrgteht@gmil.com', '9700024979', 'Oral', 'conferance/dr6g1izq.docx', '', '', 'hyderabad', 'fax', 'india', '50055', 0, '2018-11-18 04:43:52');

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`concatid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `key_committe`
--
ALTER TABLE `key_committe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizing_committe`
--
ALTER TABLE `organizing_committe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `submit_conferance`
--
ALTER TABLE `submit_conferance`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `concatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `key_committe`
--
ALTER TABLE `key_committe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organizing_committe`
--
ALTER TABLE `organizing_committe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submit_conferance`
--
ALTER TABLE `submit_conferance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
