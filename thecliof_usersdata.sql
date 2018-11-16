-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2018 at 06:06 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 5.6.30

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
(2, 'Manideep', 'manideepami@gmail.com', 'Testing ', '', '2018-11-16 10:04:22');

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
  `thumb_image` varchar(255) NOT NULL,
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

INSERT INTO `events` (`eventid`, `title`, `date`, `enddate`, `location`, `theme`, `thumb_image`, `brochure`, `background_image`, `slider_images`, `description`, `key_topics`, `created_date`) VALUES
(14, 'Annual Dental And Oral Health', 'August 28-29, 2019', '2018-11-15', 'Dubai, UAE', 'Tomorrows Dentistry Today', 'thumb/fc605u3j.jpg', 'brochure/f5aftwgr.pdf', 'background/p0sbhoue.jpg', 'slider/lng3ayxn.jpg,slider/mhys2jjz.jpg', '&lt;h3&gt;About Conference&lt;/h3&gt;\r\n\r\n&lt;p&gt;Dental Congress 2019 will be a great platform for exchanging new ideas and research. This gathering will provide networking sessions for Scientists, Dental Professionals, Dental Nurses, Professors, Business Assistants, Students, and individuals from all dental groups. It also helps continuing education opportunities and quality information shared by Keynote Speakers, Symposia, hands-on workshops and exhibition.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dental Science and Disorders manages the oral prosperity and is as often as possible unnoticed in every single age of our life. Mouth is a window to the prosperity of our body. It can allude to nutritious insufficiencies or general contaminated. Despite whether you are 60 or 6, your oral wellbeing is fundamental. People visit expert exactly when they are in torment anyway it is critical to finish their standard checkup in order to keep up a decent grin and oral tidiness. This second International Conference on Dental and Oral Health incorporates International participants, Workshops, Lectures and Symposiums, refreshment break and Grand Lunch on. Most nations offer Dental instruction courses that can be pertinent to general&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Cosmetic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Education&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Craniofacial Surgery&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Periodontology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Orthodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Endodontics &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Paediatric Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Implants &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Material Sciences&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Holistic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Nursing and Public Health Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Forensic Odontology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Geriodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing Trends &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Marketing Strategies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dentistry &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Nano Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Digital Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Endodontic&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Pediatric Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Prosthodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Restorative Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Pain, Complications and Treatments &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial Surgery &amp;amp; Innovations&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Surgeries and Innovations&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Sleep Medicine &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Microbiology and Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Products and Marketing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Tools and Treatment Techniques &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;3D Imaging and Digital Dentistry&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial Pathology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Stem Cell&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Obstructive Sleep Apnea Syndrome (OSA)&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;The Future of Dentistry: Benefits of 3D Dentistry and CBCT Machines &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and Maxillofacial surgery&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral and maxillofacial radiology&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Oral Cancer &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Public Health Dentistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Traumatology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;How to Create an Awesome Dental Marketing Plan? &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Nanotechnology Inspires Next-generation Dental Materials&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dentistry &amp;ndash; New Technologies&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Dental Abnormalities&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Forensic Dentistry&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Periodontics&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-dental-conference&quot;&gt;Restrorative Dentistry&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-15 07:12:30'),
(15, 'Materials Technology And Manufacturing Innovations', 'October 23 ,24 2019', '2018-11-15', 'Dubai, UAE', 'Materials Technology and Manufacturing Innovations', 'thumb/dkwp82ft.jpg', 'brochure/4mrp1qqn.pdf', 'background/l8dz3iju.jpg', 'slider/rokyey51.jpg,slider/gh0bbjyn.jpg', '&lt;h3&gt;About Conference&lt;/h3&gt;\r\n\r\n&lt;p&gt;Energy and Environment are the global challenges to up-thrust for a promising generation. Latest innovations and research outburst over the last few years offered novel materials to challenge the global demands on energy efficiency and clean environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Experts need to address on recent technologies and innovations as 3D printing Technology, Graphene materials, fuel cells, green building concepts, clean technologies, biofuels, energy conservation &amp;amp; storage, biomaterials-bioplastics to cope with wasteful energy policies, overuse of resources and global climate change.&lt;/p&gt;\r\n\r\n&lt;p&gt;Materials Science wing of Ri Conferences engendered with the orientation to unscramble the energy solutions and clean environment for a sustainable generation by infusing novel materials in the day to day life. Join our council to manifest interpretations and surpass stumbling blocks.&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Science &amp;amp; Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nanotechnology in Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Batteries and Energy Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mining, Metallurgy and Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Emerging technologies in materials science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biomaterials and Tissue Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Structural Materials and Characterization &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Polymer Science and Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mechanics and Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Chemistry and Physics &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Computational Materials Science &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Engineer Training and Career &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Science and Engineering &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nanomaterials and Nanotechnology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biomaterials and Medical Devices &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials for Energy Applications &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Ceramics and Composite Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Electronic, Optical and Magnetic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Emerging Smart Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Physics and Chemistry of Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Metals, Mining, Metallurgy and Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Mechanics, Characterization Techniques and Equipments &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Graphene and 2D Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Entrepreneurs Investment Meet &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Material Science and Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Advanced Materials &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nano Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Nano Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Metals and Metallurgy &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Bio Materials and Medical Devices &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Materials Chemistry &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Smart Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Magnetic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Green Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Surface Engineering &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Biosensors and Bio Electronic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Electronic Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Optical Materials &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Carbon Nano Structures and Graphene &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-materials-technology-conference&quot;&gt;Energy Harvesting Materials &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-15 07:15:03'),
(16, 'Oil, Gas & Petroleum Refinery', 'October 23 ,24 2019', '2018-11-15', 'Dubai, UAE', 'Greater adoption of low sulphur, higher octane fuels and plans for petrochemical expansion', 'thumb/24htmjk8.jpg', 'brochure/43pp7txx.pdf', 'background/bh9zb9zo.jpg', 'slider/ayu5qdj2.jpg', '&lt;h3&gt;About Conference&lt;/h3&gt;\r\n\r\n&lt;p&gt;Oil and gas are important fossil fuels that together make petroleum formed from the decomposition and pressurization of algae, plankton and other organisms. As Fossil fuels contain high percentages of carbon and include petroleum, coal, and natural gas. The analysis and production of fossil fuels is a crucial topic as ever, driven by increasing energy demands and guided by emerging technology. Exploration continues for new sources of oil and natural gas, as well as unconventional sources such as oil shale and tar sands.&lt;/p&gt;\r\n\r\n&lt;p&gt;Energy industry experts require fundamental knowledge of topics such as liquefied natural gas (LNG), EOR, pipeline engineering, reservoir Engineering, and deep water exploration, transmission and processing and moreover accurate, up-to-date modeling, data, and analysis.&lt;/p&gt;\r\n\r\n&lt;p&gt;This Meeting includes the study of various categories on exploration and appraisal, drilling and completions, reservoir management, Manufacturing and facilities, transporting and marketing human resources, HSSE, new technologies and innovations and to share best practices and information regarding advances in progressing technology for upstream, midstream, and downstream organizations. Ongoing developments in Non Destructive Testing (NDT) address issues regarding safety, equipment reliability and environmental protection.&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Biofuels and Fossil Fuels &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Oil Refining Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Geophysical and Remote Sensing Techniques &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;New Technology in Upstream &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Midstream Oil and Gas Sector Trends &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Impact of Artificial Intelligence &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;The Digital Tranformation Initiative &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Advancement in Alternate Fuels &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Investigation Techniques &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Environmental Issues &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Risk factors Faced by the Oil and Gas Companies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Inventory Management Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Automation and IOT &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Advanced Oil and Gas Technologies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Global Oil and Gas &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Oil Formation &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Upstream Process and Midstream Process &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Petroleum Science and Petroleum Technology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Crude oil Excavation &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Biofuels and Biodiesels &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Petroleum Geology &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Offshore technologies and Offshore Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Pipeline and Storage &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Oil Exploration and Consumption &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Advanced Nanomaterials in oil and Gas Industries &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Corporate social responsibilities in oil and gas industries &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;General Issues in Oil and Gas Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;The Economic Effects of Oil and Gas Operations &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Emerging technology on Market and strategies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;/submit-abstract-petroleum-refinery-conference&quot;&gt;Regulations and Ethics &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-15 07:20:56'),
(18, 'Advanced Nursing And Nursing Practice', 'October 23,24 2019', '2018-11-15', 'Dubai, UAE', 'Advanced Concepts and Frameworks for Nursing and Healthcare', 'thumb/ljps1nfv.jpg', 'brochure/qluoal98.pdf', 'background/4jbde4c6.jpg', 'slider/9ynphl8i.jpg,slider/h8om5oig.jpg', '&lt;h3&gt;About Conference&lt;/h3&gt;\r\n\r\n&lt;p&gt;Welcome to the official website of &amp;ldquo;World Congress onAdvanced Nursing and Nursing Practice&amp;rdquo; to be held during August 28-29,2019 at Dubhai, UAE, focusing on the theme &amp;ldquo;Advanced Concepts and Frameworks for Nursing and Healthcare&amp;rdquo;. This gathering will offer you special prospects to network with Academic and Clinical Nurse Specialists, Registered Nurses, Clinical Nursing Researchers, Healthcare Doctors and Physicians, Medical Research Departments, Faculty of Health Sciences, C-level executive, Faculty of Healthcare, Deans, Professors and PhD Students from Medical Universities. It is a global platform to discuss and learn about Fostering and Latest Innovations in Nursing and Healthcare.&lt;/p&gt;\r\n\r\n&lt;p&gt;It is an opportunity to share your best practice initiative, ideas, research project or provide continuing education as it relates current issues and meet the experts in the respective fields. Nursing is a noble profession serving society from decades. One of the most important roles of the nurse is to be a patient advocate to secure the interests of patients when the patients themselves can&amp;#39;t due to ailment or deficient wellbeing information. Nurses are patient educators, responsible for explaining procedures and treatments. Nurses are &amp;#39;the most trusted healthcare professionals&amp;rsquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;The United Arab Emirates (UAE) government aspires to build a world class health system to improve the quality of healthcare and the health outcomes for its population. To achieve this it has implemented extensive health system reforms in the past 10 years. The nature, extent and success of these reforms has not recently been comprehensively reviewed. In this paper we review the progress and outcomes of health systems reform in the UAE.&lt;/p&gt;\r\n\r\n&lt;p&gt;There are around 75 Nursing Works in UAE serving the needs of health care. We can find 29% of General and Surgical Hospitals, 15% of Doctors&amp;rsquo; Offices, 13% of Nursing Care Facilities, 10% of Outpatient Facilities and 8% of Home Health Services. In the part of HCP-Gender &amp;amp; Nationality in UAE, we can see that there are around 83% of Female and 16 % of Male Expatriate of Nurses, 62 % of Male and 27% of Female Expatriate of Physicians,7 % of Female and 4 % of Male National of Physicians, 57 % of Male and 34 % of Female Expatriate of Dentists, 7% of Female and 2 % of Male National of Dentists, 52 % of Female and 41% of Male Expatriate of AHPs and 6% Female and 1 % of Male National of AHPs.&lt;/p&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Education &amp;amp; Nursing Management &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Clinical Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Surgical Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Emergency Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Practice &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Midwifery &amp;amp; Women health Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Advanced Nursing Practice &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Pediatric Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Disaster Nursing &amp;amp; Travel Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Oncology Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Primary Care &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Cardiovascular Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Psychiatric and Mental Health Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Informatics &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Dental Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Public Health &amp;amp; Community Health Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Wound Care Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Operating Room Nurse &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Gerontology Nurse &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Rehabilitation &amp;amp; Management &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Education &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Types of Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Information &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Healthcare and Nursing Management &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Mental Health Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Geriatric Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Law &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Examinations and Certifications &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Disaster Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Cancer and Tumor Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Risk Factors in Nursing and Healthcare Professionals &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Programs and Courses &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Teaching Strategies &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Women Health Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Midwifery Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nurse Practitioner Updates &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;International Nursing Education &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Travel Nurse &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nurse Practitioners Perspectives &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Critical Care and Emergency Nursing &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Veterinary Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nutrition and Health &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Primary Care and Rural Health &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Adult Health Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Critical Care Nursing &amp;amp; Emergency Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Cancer Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Cardiac Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Environmental Health Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Health Care &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Legal Nursing &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Medicine &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Education and Research &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Nursing Types &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Public Health &lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;submit-abstract-nursing-conference&quot;&gt;Pregnancy &amp;amp; Midwifery &lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '2018-11-16 17:59:16'),
(19, 'World Heart Congress', 'October 23,24 2019', '2018-11-16', 'Dubai, UAE', 'Novel Insights in Cardiology and Healthcare', 'thumb/63jdweqr.jpg', 'brochure/j2035hgp.pdf', 'background/ihoui04g.jpg', 'slider/jzl4wchc.jpg,slider/eztlcb5p.jpg', '&lt;h3&gt;\r\n                         About Conference\r\n                       &lt;/h3&gt;\r\n                       &lt;p&gt;\r\n                         Heart 2019 summit will provide the opportunity for a comprehensive overview of the latest research, methodology, and developments in cardiovascular medicine, primarily in the areas of Cardiology, coronary artery disease, heart failure, cardiac arrhythmias and cardiac surgery, Pediatric Cardiology, Obesity, Stroke, Cardiomyopathy, and Hypertension.\r\n                       &lt;/p&gt;\r\n                       &lt;p&gt;\r\n                         We believe this Congress would fascinate you more than we expect. Many distinguished cardiologists and scientists have been welcomed and honor to join the faculty participating in this Congress. Papers will be presented in the form of plenary sessions, symposia, and posters, and will include superb scientific material originating from numerous laboratories around the globe, assuring that the meeting will be a major scientific event.\r\n                       &lt;/p&gt;\r\n                       &lt;p&gt;\r\n                         Many Scientific sessions ranging from the Elementary aspects and ranging to the very new advancements and trends established therein. We will discuss new and innovative diagnostic methods, prevention and treatment of heart disease, and prognostic algorithms. Integrated into the program will be an update on the latest major clinical trials. We hope that you will participate in this Congress and submit for presentation your most recent scientific work in the rapidly evolving field of cardiovascular disease.\r\n                       &lt;/p&gt;\r\n                       &lt;p&gt;\r\n                         We believe your interaction with the world-renowned doctors, scientists, academicians, delegates, critics and speaker and will stimulate Brainstorming ideas and in turn help the mankind. We look forward to meeting you in Dubai, UAE at the World Heart Congress 2019 during the month of August 2019.\r\n                       &lt;/p&gt;', '&lt;div class=&quot;row col-md-12&quot;&gt;\r\n            &lt;div class=&quot;col-md-4&quot;&gt;\r\n               &lt;ul class=&quot;list-group keytopics_main&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference&quot; class=&quot;text-dark&quot;&gt;\r\n                  &lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiovascular Disease and Nutrition  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Heart Diseases  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac Nursing &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac surgery &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Interventional Cardiology &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Pediatric Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiovascular Pharmacology &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Coronary Heart Diseases &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac Regeneration  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Molecular Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac remodeling or Ventricular remodeling  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Vascular Biology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Myocardial Infarction &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Hypertension  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Clinical Cardiology &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac Rhythm Abnormalities  &lt;/a&gt;&lt;/li&gt;&lt;/a&gt;\r\n               &lt;/ul&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;col-md-4&quot;&gt;\r\n               &lt;ul class=&quot;list-group keytopics_main&quot;&gt;\r\n                  &lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiomyopathies  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac Diagnostic Test &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Case reports on Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiometabolic Health- Diabetes, Obesity &amp; Metabolism  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac Toxicity  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Heart and Cardiovascular Diseases &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Lipid and Metabolic Syndromes &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Interventional Cardiology and Heart Surgery &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardio-Oncology &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Occupational Heart Disease  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiogeriatrics  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Sports and Exercise Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac Diagnosis, Imaging And Medical Tests  &lt;/a&gt;&lt;/li&gt;\r\n               &lt;/ul&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;col-md-4&quot;&gt;\r\n               &lt;ul class=&quot;list-group keytopics_main&quot;&gt;\r\n                  &lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Hypertension and Healthcare &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Clinical Trials in Cardiology &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Veterinary Cardiology &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Advances in Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Personalized Medicine-The Future  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiology Ethics And Case Reports  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Heart Diseases and Failure  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Diabetes, Obesity &amp; Stroke  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiovascular Disease  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Women&rsquo;s Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Heart Regeneration  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiac Pharmacology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Angiography &amp; Intervention  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiologists &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Cardiology - Future Medicine  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Heart Devices &amp; Heart Diagnosis &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Nuclear Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;list-group-item fa fa-angle-right&quot;&gt;&lt;a href=&quot;/submit-abstract-cardiology-conference.php&quot;&gt;  Genetic Cardiology  &lt;/a&gt;&lt;/li&gt;\r\n               &lt;/ul&gt;\r\n            &lt;/div&gt;\r\n          &lt;/div&gt;', '2018-11-16 18:05:23');

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
(9, 14, 'test', 'test@gmail.com', '8978161602', 'Oral', '', '', '', 'HYDERABAD', 'TELANGANA', 'India', '', 0, '2018-11-16 17:38:18');

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
  MODIFY `concatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submit_conferance`
--
ALTER TABLE `submit_conferance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
