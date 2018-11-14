-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 05:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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
(1, 'sdsa', 'asdfs@gmail.com', 'asdas', 'dsfsaf', '2018-11-14 00:21:16');

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

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `title`, `date`, `enddate`, `location`, `theme`, `brochure`, `background_image`, `slider_images`, `description`, `key_topics`, `created_date`) VALUES
(13, 'Annual Dental And Oral Health', 'August 28-29, 2019', '0000-00-00', 'Dubai, UAE', 'Tomorrows Dentistry Today', '', 'background/2ggqero2.jpg', 'slider/3a70bkfw.jpg,slider/4sxuvlgq.jpg,slider/lxsf6dcs.jpg', '<h3>About Conference</h3>\r\n\r\n<p>Dental Congress 2019 will be a great platform for exchanging new ideas and research. This gathering will provide networking sessions for Scientists, Dental Professionals, Dental Nurses, Professors, Business Assistants, Students, and individuals from all dental groups. It also helps continuing education opportunities and quality information shared by Keynote Speakers, Symposia, hands-on workshops and exhibition.</p>\r\n\r\n<p>Dental Science and Disorders manages the oral prosperity and is as often as possible unnoticed in every single age of our life. Mouth is a window to the prosperity of our body. It can allude to nutritious insufficiencies or general contaminated. Despite whether you are 60 or 6, your oral wellbeing is fundamental. People visit expert exactly when they are in torment anyway it is critical to finish their standard checkup in order to keep up a decent grin and oral tidiness. This second International Conference on Dental and Oral Health incorporates International participants, Workshops, Lectures and Symposiums, refreshment break and Grand Lunch on. Most nations offer Dental instruction courses that can be pertinent to general</p>\r\n', '<ul>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Cosmetic Dentistry</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Education</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Craniofacial Surgery</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Periodontology</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Orthodontics</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Endodontics </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Paediatric Dentistry</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Oral Pathology</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Implants </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Material Sciences</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Holistic Dentistry</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Nursing and Public Health Dentistry</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Forensic Odontology </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Geriodontics</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Marketing</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Marketing Trends </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Marketing Strategies </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dentistry </a></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Nano Dentistry</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Digital Dentistry</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Endodontic</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Pediatric Dentistry </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Prosthodontics</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Restorative Dentistry </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Pain, Complications and Treatments </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Oral and Maxillofacial Surgery &amp; Innovations</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Surgeries and Innovations</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Sleep Medicine </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Oral Microbiology and Pathology</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Products and Marketing </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Tools and Treatment Techniques </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">3D Imaging and Digital Dentistry</a></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Oral and Maxillofacial Pathology</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Stem Cell</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Obstructive Sleep Apnea Syndrome (OSA)</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">The Future of Dentistry: Benefits of 3D Dentistry and CBCT Machines </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Oral and Maxillofacial surgery</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Oral and maxillofacial radiology</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Oral Cancer </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Public Health Dentistry </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Traumatology </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">How to Create an Awesome Dental Marketing Plan? </a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Nanotechnology Inspires Next-generation Dental Materials</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dentistry &ndash; New Technologies</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Dental Abnormalities</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Forensic Dentistry</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Periodontics</a></li>\r\n	<li><a href=\"/submit-abstract-dental-conference\">Restrorative Dentistry</a></li>\r\n</ul>\r\n', '2018-11-14 15:15:36'),
(14, 'Annual Dental And Oral Health', 'August 28-29, 2019', '2018-11-14', 'Dubai, UAE', 'Tomorrows Dentistry Today', 'brochure/4g8p4r3e.pdf', 'background/gyh5fqns.jpg', 'slider/rlalzx1m.jpg,slider/ayr8l6gf.jpg,slider/n9a4drxk.jpg', '&lt;h3&gt;About Conference&lt;/h3&gt;\r\n\r\n&lt;p&gt;Dental Congress 2019 will be a great platform for exchanging new ideas and research. This gathering will provide networking sessions for Scientists, Dental Professionals, Dental Nurses, Professors, Business Assistants, Students, and individuals from all dental groups. It also helps continuing education opportunities and quality information shared by Keynote Speakers, Symposia, hands-on workshops and exhibition.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dental Science and Disorders manages the oral prosperity and is as often as possible unnoticed in every single age of our life. Mouth is a window to the prosperity of our body. It can allude to nutritious insufficiencies or general contaminated. Despite whether you are 60 or 6, your oral wellbeing is fundamental. People visit expert exactly when they are in torment anyway it is critical to finish their standard checkup in order to keep up a decent grin and oral tidiness. This second International Conference on Dental and Oral Health incorporates International participants, Workshops, Lectures and Symposiums, refreshment break and Grand Lunch on. Most nations offer Dental instruction courses that can be pertinent to general&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Cosmetic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Education&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Craniofacial Surgery&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Periodontology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Orthodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Endodontics &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Paediatric Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Implants &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Material Sciences&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Holistic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Nursing and Public Health Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Forensic Odontology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Geriodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing Trends &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing Strategies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dentistry &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Nano Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Digital Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Endodontic&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Pediatric Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Prosthodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Restorative Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Pain, Complications and Treatments &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial Surgery &amp;amp; Innovations&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Surgeries and Innovations&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Sleep Medicine &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Microbiology and Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Products and Marketing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Tools and Treatment Techniques &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;3D Imaging and Digital Dentistry&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Stem Cell&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Obstructive Sleep Apnea Syndrome (OSA)&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;The Future of Dentistry: Benefits of 3D Dentistry and CBCT Machines &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial surgery&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and maxillofacial radiology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Cancer &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Public Health Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Traumatology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;How to Create an Awesome Dental Marketing Plan? &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Nanotechnology Inspires Next-generation Dental Materials&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dentistry &amp;ndash; New Technologies&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Abnormalities&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Forensic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Periodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Restrorative Dentistry&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-14 15:18:27'),
(15, 'Annual Dental And Oral Health', 'August 28-29, 2019', '2018-11-14', 'Dubai, UAE', 'Tomorrows Dentistry Today', 'brochure/dhtwsbp7.pdf', 'background/htly651z.jpg', 'slider/lm2edrf0.jpg,slider/2schx4gh.jpg,slider/fbu4qrja.jpg', '&lt;h3&gt;About Conference&lt;/h3&gt;\r\n\r\n&lt;p&gt;Dental Congress 2019 will be a great platform for exchanging new ideas and research. This gathering will provide networking sessions for Scientists, Dental Professionals, Dental Nurses, Professors, Business Assistants, Students, and individuals from all dental groups. It also helps continuing education opportunities and quality information shared by Keynote Speakers, Symposia, hands-on workshops and exhibition.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dental Science and Disorders manages the oral prosperity and is as often as possible unnoticed in every single age of our life. Mouth is a window to the prosperity of our body. It can allude to nutritious insufficiencies or general contaminated. Despite whether you are 60 or 6, your oral wellbeing is fundamental. People visit expert exactly when they are in torment anyway it is critical to finish their standard checkup in order to keep up a decent grin and oral tidiness. This second International Conference on Dental and Oral Health incorporates International participants, Workshops, Lectures and Symposiums, refreshment break and Grand Lunch on. Most nations offer Dental instruction courses that can be pertinent to general&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Cosmetic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Education&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Craniofacial Surgery&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Periodontology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Orthodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Endodontics &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Paediatric Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Implants &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Material Sciences&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Holistic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Nursing and Public Health Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Forensic Odontology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Geriodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing Trends &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing Strategies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dentistry &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Nano Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Digital Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Endodontic&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Pediatric Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Prosthodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Restorative Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Pain, Complications and Treatments &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial Surgery &amp;amp; Innovations&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Surgeries and Innovations&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Sleep Medicine &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Microbiology and Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Products and Marketing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Tools and Treatment Techniques &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;3D Imaging and Digital Dentistry&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Stem Cell&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Obstructive Sleep Apnea Syndrome (OSA)&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;The Future of Dentistry: Benefits of 3D Dentistry and CBCT Machines &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial surgery&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and maxillofacial radiology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Cancer &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Public Health Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Traumatology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;How to Create an Awesome Dental Marketing Plan? &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Nanotechnology Inspires Next-generation Dental Materials&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dentistry &amp;ndash; New Technologies&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Abnormalities&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Forensic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Periodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Restrorative Dentistry&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-14 15:20:04');

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `concatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
