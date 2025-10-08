-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2025 at 01:10 AM
-- Server version: 10.6.22-MariaDB-cll-lve
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowsmartlifesciences`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact_1` varchar(11) NOT NULL,
  `contact_2` varchar(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1-Active,2-Inactive,3-OTHERS',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` enum('1','2','3') NOT NULL,
  `type` enum('1','2','3') NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `description`, `status`, `type`, `image`, `created_at`, `created_by`) VALUES
(8, 'Welcome to our digital marketing agency.', 'the Right design for a digital marketing', '1', '1', '/assets/images/banners/1692097033main-slider-1-1.jpg', '0000-00-00 00:00:00', 0),
(9, 'Welcome to our digital marketing agency', 'the Right design for a digital marketing', '1', '1', '/assets/images/banners/1692097055main-slider-1-2.jpg', '0000-00-00 00:00:00', 0),
(10, 'Welcome to our digital marketing\n                                                agency', 'the Right design for a digital marketing', '1', '1', '/assets/images/banners/1692097075main-slider-1-3.jpg', '2023-08-15 12:57:55', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` enum('1','2','3') NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `status`, `image`, `created_at`, `created_by`) VALUES
(1, 'Ensuring Rubber Product Safety', 'In this informative blog post, we dive deep into Flow smart Inc\'s unwavering commitment to safety and quality in rubber product manufacturing. Discover how we meticulously adhere to FDA compliance standards, ensuring that our products meet the highest safety and regulatory requirements. We\'ll explore our rigorous processes, quality control measures, and the peace of mind that comes with choosing Flow smart Inc for your rubber product needs', '1', '/assets/images/blog/16939310376360f539f5eacc006b725f63-aolity-mdingbao-silicone-hose-tube-35m.jpg', '2023-09-05 18:23:57', 2),
(2, 'Rubber Selection Demystified', 'Choosing the right rubber material for your specific application can be a daunting task. In this comprehensive guide, we simplify the process for you. Our experts at Flow smart Inc will break down the unique properties and advantages of various rubber materials, such as silicone, viton, EPDM, and more. Whether you\'re in the pharmaceutical, medical, or chemical industry, this blog will empower you to make informed decisions and select the perfect material to meet your needs.', '1', '/assets/images/blog/16939310706360f539f5eacc006b725f63-aolity-mdingbao-silicone-hose-tube-35m.jpg', '2023-09-05 18:24:30', 2),
(3, 'Rubber Revolution', 'The rubber industry is constantly evolving, with new materials, manufacturing techniques, and applications emerging regularly. At Flow smart Inc, we pride ourselves on staying at the forefront of these innovations. In this exciting blog post, we\'ll take you on a journey through the latest trends and breakthroughs in rubber technology. Learn how Flow smart Inc leads the way with innovative solutions that benefit industries such as petrochemicals, pharmaceuticals, and more. Discover why choosing Flow smart Inc means choosing cutting-edge excellence.', '1', '/assets/images/blog/16939311086360f539f5eacc006b725f63-aolity-mdingbao-silicone-hose-tube-35m.jpg', '2023-09-05 18:25:08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `services_ids` int(11) DEFAULT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1-Active,2-Inactive,3-Delete',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `services_ids`, `status`, `created_at`) VALUES
(1, 'xfsdfs', 'fsdfsd@gmail.com', '8787876545', 'sdsfsd', 'fcdfv', 0, '1', '2023-09-05 19:24:03'),
(2, 'dfsdf', 'hgjgj@gmail.com', '6787678765', 'dvxcvx', 'xcvxcv', 0, '1', '2023-09-05 19:34:56'),
(3, 'dfsdf', 'hgjgj@gmail.com', '6787678765', 'dvxcvx', 'xcvxcv', 0, '1', '2023-09-05 19:34:59'),
(4, 'Paloma Brock', 'gybegykuhi@mailinator.com', '7799348370', 'Unde corporis volupt', 'Rerum voluptas moles', 0, '1', '2025-10-07 12:03:21'),
(5, 'Paloma Brock', 'gybegykuhi@mailinator.com', '7799348370', 'Unde corporis volupt', 'Rerum voluptas moles', 0, '1', '2025-10-07 12:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1-Static,2-Dynamic',
  `page_id` int(11) DEFAULT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1-Active,2-InActive,3-Other',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `type`, `page_id`, `question`, `answer`, `status`, `created_at`, `created_by`) VALUES
(1, 1, 0, 'test', 'sdfsdfs', '1', '2023-08-28 16:23:42', 2),
(2, 1, 0, 'What makes a digital marketing company the best choice for my business?', 'The best digital marketing company stands out by offering a combination of expertise, experience, and a proven track record of delivering successful results to clients. Look for a company that understands your industry, has a skilled team, and utilizes the latest marketing strategies to drive growth.', '1', '2023-08-28 16:28:30', 2),
(3, 1, 0, 'How can a digital marketing company help my business?', 'A digital marketing company can help your business in several ways, including enhancing your online presence, reaching your target audience more effectively, increasing website traffic, generating leads, and improving overall brand visibility and awareness.', '1', '2023-08-28 16:29:34', 2),
(4, 1, 0, 'Will the digital marketing company tailor its strategies to suit my business\'s specific needs?', 'Yes, a reputable digital marketing company will take the time to understand your business, industry, and target audience. They will develop customized strategies that align with your specific goals and ensure the best possible results.', '1', '2023-08-28 16:30:06', 2),
(5, 1, 0, 'What services does a top digital marketing company typically offer?', 'A leading digital marketing company typically offers a wide range of services, including search engine optimization (SEO), pay-per-click (PPC) advertising, social media marketing, content marketing, email marketing, web design, and analytics to measure campaign performance.', '1', '2023-08-28 16:30:39', 2),
(6, 1, 0, 'How do I measure the success of a digital marketing company for my business?', 'The success of a digital marketing company can be measured through key performance indicators (KPIs) such as increased website traffic, higher conversion rates, improved search engine rankings, growth in social media engagement, and a positive return on investment (ROI). A reliable company will provide regular reports to track and analyze these metrics.', '1', '2023-08-28 16:31:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1-Active,2-Inactive,3-Other',
  `type` enum('1','2','3','4') NOT NULL COMMENT '1-Gallery,2-client logos, 3-tools images ,4-Training Certificates',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `about` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `characteristics` text NOT NULL,
  `applications` text NOT NULL,
  `certifications` text NOT NULL,
  `key_features` text NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1-active,2-inactive,3-delete',
  `attributes` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `about`, `description`, `image`, `characteristics`, `applications`, `certifications`, `key_features`, `status`, `attributes`, `created_at`, `created_by`) VALUES
(1, 1, 'FloSil platinum cured silicone transparent tube', '', ' Platinum Cured Silicone Tubing designed for peristaltic pump and fluid transfer in Pharmaceutical and Biotech applications. transparent silicone tubing known for its ultra smooth bore to prevent any particle entrapment. It is especially designed to comply with requirements of critical Food and Pharmaceutical standards of regulatory markets. ', '', '<p>Excellent transparency with no odor and taste.&nbsp;Extractable study available upon request&nbsp;Excellent Biocompatibility due to inertness to tissues and cells.&nbsp;Sterilizable by using different techniques like Autoclaving, Ethylene Oxide, Gamma Radiation.&nbsp;Available with FDA compliant color coding for ease of identification.&nbsp;Custom dimension, hardness &amp; length size available&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:13:25', 2),
(2, 1, 'FloSil Peroxide Cured Silicone Transparent Tube', '', 'Peroxide Grade silicone Tubing is designed for General, non critical applications. translucent silicone tubing having good flexibility and resiliency. It is suitable for peristaltic pump applications for non critical fluid transfer.', '', '<p>• Manufactured By using Quality Peroxide Grade Silicone Rubber&nbsp;• Manufactured &amp; Packaged in dust free Environment&nbsp;• Odorless and Tasteless • Good flexibility and flex crack resistance&nbsp;• Conforming FDA 21. CFR. 177.2600 • Sterilizable by Autoclaving, ETO, and Gamma rays.&nbsp;• Available with FDA compliant color coding for ease of identification</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:13:48', 2),
(3, 1, 'FloSil Platinum Cured Silicone Transparent Braided Hose', '', 'Platinum cured Silicone hose reinforced with Polyester braiding. It has excellent flexibility for pressurized fluid transfer application in pharmaceutical and Biotech Industries. We are catering these products to all pharma and biotech companies in India and Overseas. hose is manufactured under stringent quality parameters to have greater flexibility and minimum bend radius.', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:14:14', 2),
(4, 1, 'FloSil platinum cured silicone Hose Reinforced with Polyester Braiding and SS 316L Helical Wire ', '', 'Platinum cured Silicone hose reinforced with SS 316L Helical wire and polyester braiding having better flexibility with high pressure resistance. It is having high burst pressure rating along with high vacuum resistance compare to RekVac. The product is suitable in pressurized fluid transfer application.', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:14:46', 2),
(5, 1, 'FloSil platinum cured silicone Hose Reinforced with Polyester Braiding and SS 316L Helical Wire ', '', 'Platinum cured Silicone hose reinforced with SS 316L Helical wire and polyester braiding having better flexibility with high pressure resistance. RekTor is having high burst pressure rating along with high vacuum resistance compare to RekVac. The product is suitable in pressurized fluid transfer application.', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:14:57', 2),
(6, 1, 'FloSil Platinum Cured Silicone Hose Reinforced with Polyester Braiding and SS 316L Helical Wire', '', 'RekWrap is Platinum cured Silicone hose reinforced with SS 316L Helical wire and 2-3 layers of polyester fabric wrapping. RekWrap is having multiple layers of high quality polyester fabric to enhance burst Pressure rating. The product is suitable for high pressurized Steam transfer application in pharmaceutical and biotech. ', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2023-09-09 17:56:48', 2),
(7, 1, 'FloTef PTFE Lined with SS 304 Braiding, Covered with Platinum Cured Silicone', '', 'PTFE tubing covered with SS 304 braid reinforcement having outer layer of Platinum grade silicone. having capacity to withstand high pressure along with greater chemical resistance. The product is having ultra smooth bore which enhances superior flow properties & least adhesion to particulate. The outer layer of Silicone cover acts as insulation to high temperature and keeps outer surfaces dust free. ', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:15:31', 2),
(8, 1, 'O- Rings - (Silicone/Viton/Epdm/Neoprene/Nitrile)', '', 'It offers it\'s wide range of O-rings from 1.0 mm ID to 900 mm ID from its 5000 single piece moulds. Flow Smart’s O-Rings are manufactured on ahydraulic press with tightly controlled temperature, Pressure and time which ensures accurate dimensions, glossy finish& invisible flash line, properly post cured and absolutely defect free articles. These O-rings are also manufactured as per the dimensional tolerance specified by the customers and available from Nitrile, Neoprene, Silicone, EPDM, Hapalon, NBR, Viton & Butyl Rubber or in any other rubber as per customer\'s specification. We also manufacture Viton O-Rings from 1mm ID - 5000 mm ID or in any sizes through step moulding process which gives joint less O-Rings of dimensionally accurate & excellent workmanship and finish.', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:11:23', 2),
(9, 1, 'Diaphragms Silicone, Viton, EPDM, Nitrile', '', 'Medical-grade, platinum-cured Silicone is widely accepted in pharmaceutical and biotech applications and is often used throughout the plant. Like all of our diaphragm materials, our Silicone diaphragms meet USP Class VI and FDA 21 CFR 177.2600 standards', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:11:14', 2),
(10, 1, 'Sensor TC/Validation Port TC Gasket', '', 'Validation And Sensor TC Gaskets are used for connecting two pipes in food & drug plant. Tri-Clover Gasket is available in Food Grade Silicon, Food Grade Viton®, Food Grade EPDM, etc.It can be supply as per sizes upon reques', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 11:11:06', 2),
(11, 1, ' Sanitary Gaskets', '', ' hygienic gasket seals (also known as Tri-clamp® and Tri-clover® seals) are designed to meet the needs of pipe couplings in food, beverage and pharmaceutical process lines.  Engineered to deliver optimal chemical resistance to satisfy the requirements of aseptic conditions, CIP (clean-in-place) and SIP (sterilization-in-place) processes; seals provide excellent long-term sealing performance, therefore extending planned maintenance intervals and minimizing downtime. seals are manufactured to several clamp size standards conforming to current GMP (Good Manufacturing Practice) and supplied with full manufacturing batch traceability and certificates of conformity on request.', '', '<p>&nbsp;</p>', '<p>\r\n• Pharmaceutical Processing&nbsp;<br><br>\r\n• Powder &amp; fluid transfer&nbsp;<br><br>\r\n• High Vacuum applications&nbsp;<br><br>\r\n• Food Processing&nbsp;<br><br>\r\n• Load cell application&nbsp;<br><br>\r\n• Bulk transfer&nbsp;<br><br>\r\n• Biotechnology&nbsp;<br><br>\r\n</p>\r\n', '<p>\r\n•Conforms to US FDA 21 CFR 177.2600 Food grade Standard&nbsp;<br><br>\r\n• Conforms to USP Class VI&nbsp;<br><br>\r\n• Conforms to ISO 10993-1 ROHS certified, free of restricted heavy metals&nbsp;<br><br>\r\n• Free of Phthalate/ Bisphenol/ Volatile Plasticizer&nbsp;<br><br>\r\n• Animal Origin Certification (free of animal derived material) USFDA&nbsp;<br><br>\r\n• Validation package available upon request&nbsp;<br><br>\r\n</p>', '<p>• High burst pressure resistancecompare &nbsp;<br><br>• Designed for high vacuumratingapplications &nbsp;<br><br>• Having Antistatic properties todissipate static electrical chargemakes it suitable for highlyvolatile flammable fluid transfer&nbsp;<br><br>• Imparts no taste and odor&nbsp;<br><br>• Lot traceable &nbsp;<br><br>• Temp Range :- -80 °C TO210°C&nbsp;<br><br>• Available with SS316 L Tri-cloveren&nbsp;<br><br>• Sterilizable by Autoclave,Ethyleneoxide gas &amp; gamma Radiation</p>', '1', NULL, '2024-09-12 14:31:34', 2),
(12, 1, 'FloPac 2D/3D Single-use Bag For Biopharmaceuticals', '', '<p>2D/3D biocontainer single-use systems comprised of biocontainers and tubing assemblies designed for applications where biocontainers must be both reliable and flexible.</p>', '', '<ul><li><strong>European Directive 85/572/EEC</strong> for food-contact plastic materials</li><li><strong>Japanese Pharmacopoeia</strong> (Section 61, Part 1)</li><li><strong>European Pharmacopoeia</strong> (Section 3.1.5)</li><li><strong>USP 661</strong> (Physicochemical tests for plastics)</li><li><strong>ISO 10993</strong> (Biological compatibility)</li><li><strong>USP 87</strong> (Cytotoxicity)</li><li>Biological reactivity <i>in vivo</i> for <strong>Class VI – 50°C Plastics</strong></li><li>The <strong>materials of construction</strong> of the biocontainers meet the following standards and regulations:</li><li><strong>Biocontainers</strong> are produced in a <strong>controlled environment</strong> (Class 10,000, Grade C).</li><li><strong>Trolleys, trays, and biocontainers</strong> are manufactured under a <strong>Quality Management System</strong> certified to <strong>ISO 9001</strong>.</li><li><strong>Biocontainers</strong> are 100% leak tested.</li></ul>', '<ul><li>Sampling</li><li>Filling set</li><li>Bulk product storage prior to filling</li><li>Intermediate product storage</li><li>Fraction pooling</li><li>Chromatography fraction collection</li><li>Buffer preparation and storage</li><li>Product harvesting</li><li>Cell culture media preparation and storage</li></ul>', '<ul><li><strong>European Directive 85/572/EEC</strong> for food-contact plastic materials</li><li><strong>Japanese Pharmacopoeia</strong> (Section 61, Part 1)</li><li><strong>European Pharmacopoeia</strong> (Section 3.1.5)</li><li><strong>USP 661</strong> (Physicochemical tests for plastics)</li><li><strong>ISO 10993</strong> (Biological compatibility)</li><li><strong>USP 87</strong> (Cytotoxicity)</li><li>Biological reactivity <i>in vivo</i> for <strong>Class VI – 50°C Plastics</strong></li><li>The <strong>materials of construction</strong> of the biocontainers meet the following standards and regulations:</li><li><strong>Biocontainers</strong> are produced in a <strong>controlled environment</strong> (Class 10,000, Grade C).</li><li><strong>Trolleys, trays, and biocontainers</strong> are manufactured under a <strong>Quality Management System</strong> certified to <strong>ISO 9001</strong>.</li><li><strong>Biocontainers</strong> are 100% leak tested.</li></ul>', '<ul><li>Highly transparent biocontainers for easy visual inspection of solutions</li><li>Possibility for the end user to input product batch information</li><li>Part number and batch number visible on the biocontainers</li><li>Improved labelling for optimum traceability</li><li><strong>Traceability &amp; Inspection</strong></li><li>Ports designed to allow tubing attachments with cable ties or BarbLock fittings</li><li>Potential to insert a probe through a ½ in. port</li><li>Choice of ¼ in. to ½ in. outlet and inlet connections, with an option for a ¼ in. port for all sizes</li><li>Sized to allow filling at nominal volume, even in applications where freezing is required</li><li>Shape enables very efficient drainage of the fluid</li><li><strong>Design &amp; Usability</strong></li><li>Excellent barrier properties</li><li>No animal-derived ingredients</li><li>Very low levels of extractables and leachables</li><li>Compatible with a wide range of chemicals</li><li>High clarity and flexibility</li><li>Inert low-density polyethylene fluid contact layer</li><li><strong>Material &amp; Compatibility</strong></li></ul>', '1', NULL, '2025-10-07 09:43:42', 2),
(13, 1, 'FloPac Manifold', '', '<p>Flow Smart Bag Manifold Assemblies are meticulously engineered, high-quality fluid management systems designed to deliver pre-assembled, customizable solutions for aseptic processing across biopharmaceutical, biotechnology, and laboratory applications. These advanced assemblies are crafted to ensure the contamination-free, efficient, and secure transfer, storage, and filling of critical fluids—such as cell culture media, buffers, biologics, and other sensitive bioprocessing solutions—while optimizing operational workflows, enhancing productivity, and maintaining stringent regulatory compliance.</p>', '', '<ul><li><strong>European Directive 85/572/EEC</strong> for food-contact plastic materials</li><li><strong>Japanese Pharmacopoeia</strong> (Section 61, Part 1)</li><li><strong>European Pharmacopoeia</strong> (Section 3.1.5)</li><li><strong>USP 661</strong> (Physicochemical tests for plastics)</li><li><strong>ISO 10993</strong> (Biological compatibility)</li><li><strong>USP 87</strong> (Cytotoxicity)</li><li>Biological reactivity <i>in vivo</i> for <strong>Class VI – 50°C Plastics</strong></li><li>The <strong>materials of construction</strong> of the biocontainers meet the following standards and regulations:</li><li><strong>Biocontainers</strong> are produced in a <strong>controlled environment</strong> (Class 10,000, Grade C).</li><li><strong>Trolleys, trays, and biocontainers</strong> are manufactured under a <strong>Quality Management System</strong> certified to <strong>ISO 9001</strong>.</li><li><strong>Biocontainers</strong> are 100% leak tested.</li></ul>', '<ul>\n    <li>\n      <strong>Biopharmaceutical Manufacturing</strong> – Aseptic filling and transfer of drug substances, vaccines, and monoclonal antibodies.\n    </li>\n    <li>\n      <strong>Cell &amp; Gene Therapy</strong> – Safe handling of cryopreserved cells, viral vectors, and patient-specific therapies.\n    </li>\n    <li>\n      <strong>Media &amp; Buffer Preparation</strong> – Sterile preparation and distribution of critical process fluids.\n    </li>\n    <li>\n      <strong>Sampling &amp; Aliquoting</strong> – Secure collection and storage of process samples for quality control.\n    </li>\n  </ul>', '<ul><li><strong>European Directive 85/572/EEC</strong> for food-contact plastic materials</li><li><strong>Japanese Pharmacopoeia</strong> (Section 61, Part 1)</li><li><strong>European Pharmacopoeia</strong> (Section 3.1.5)</li><li><strong>USP 661</strong> (Physicochemical tests for plastics)</li><li><strong>ISO 10993</strong> (Biological compatibility)</li><li><strong>USP 87</strong> (Cytotoxicity)</li><li>Biological reactivity <i>in vivo</i> for <strong>Class VI – 50°C Plastics</strong></li><li>The <strong>materials of construction</strong> of the biocontainers meet the following standards and regulations:</li><li><strong>Biocontainers</strong> are produced in a <strong>controlled environment</strong> (Class 10,000, Grade C).</li><li><strong>Trolleys, trays, and biocontainers</strong> are manufactured under a <strong>Quality Management System</strong> certified to <strong>ISO 9001</strong>.</li><li><strong>Biocontainers</strong> are 100% leak tested.</li></ul>', '<ul>\n    <li>\n      <strong>High-Quality Materials:</strong> Made from biocompatible, medical-grade polymers like EVA, ULDPE, or multilayer films, ensuring durability, chemical inertness, and optimal gas exchange for cell viability.\n    </li>\n    <li>\n      <strong>Pre-Assembled Design:</strong> Delivered fully assembled to eliminate manual setup, reducing contamination risk and saving time in aseptic processing.\n    </li>\n    <li>\n      <strong>Closed-System Architecture:</strong> Ensures contamination-free fluid transfer, enhancing product integrity and operator safety.\n    </li>\n    <li>\n      <strong>Sterile and Ready-to-Use:</strong> Gamma-irradiated or similarly sterilized, meeting cGMP and aseptic processing standards.\n    </li>\n    <li>\n      <strong>Versatile Port Options:</strong> Includes multi-port designs with needle-free sampling ports, aseptic connectors (e.g., Luer locks), and SCD weldable tubing for seamless integration.\n    </li>\n    <li>\n      <strong>Wide Volume Range:</strong> Available from small-scale (e.g., 10 mL) to large-scale (e.g., 50 L or more) capacities, accommodating lab research to industrial production.\n    </li>\n  </ul>', '1', NULL, '2025-10-07 09:43:42', 2),
(14, 1, 'FloPac Filling Bags', '', '<p>Filling Bags offer flexible, space-saving alternatives to traditional stainless steel tanks. Manufactured with ultra-pure processes, they’re customizable to fit different equipment and processes. Our expert support team ensures seamless integration, saving you time and costs.</p>\n<p>Inverted Trapezoidal Bag Body Design</p>\n\n  <ul>\n    <li>\n      <strong>Design Feature:</strong> Maximizes the reduction of pharmaceutical liquid waste.\n    </li>\n  </ul>\n\n  <h3>Filling Tubing</h3>\n  <ul>\n    <li>\n      <strong>Components:</strong> Includes tubing for liquid input before the pump, pump tubing, and liquid output after the pump.\n    </li>\n    <li>\n      <strong>Pump Tubing:</strong> Critical segment squeezed inside the filling pump (peristaltic pump), influencing filling precision.\n    </li>\n    <li>\n      <strong>Structure:</strong> Each filling pump typically has two roller channels with 4–8 rollers each.\n    </li>\n    <li>\n      <strong>Convergence:</strong> Two tubing sections converge into a single channel.\n    </li>\n  </ul>\n', '', '<ul><li><strong>European Directive 85/572/EEC</strong> for food-contact plastic materials</li><li><strong>Japanese Pharmacopoeia</strong> (Section 61, Part 1)</li><li><strong>European Pharmacopoeia</strong> (Section 3.1.5)</li><li><strong>USP 661</strong> (Physicochemical tests for plastics)</li><li><strong>ISO 10993</strong> (Biological compatibility)</li><li><strong>USP 87</strong> (Cytotoxicity)</li><li>Biological reactivity <i>in vivo</i> for <strong>Class VI – 50°C Plastics</strong></li><li>The <strong>materials of construction</strong> of the biocontainers meet the following standards and regulations:</li><li><strong>Biocontainers</strong> are produced in a <strong>controlled environment</strong> (Class 10,000, Grade C).</li><li><strong>Trolleys, trays, and biocontainers</strong> are manufactured under a <strong>Quality Management System</strong> certified to <strong>ISO 9001</strong>.</li><li><strong>Biocontainers</strong> are 100% leak tested.</li></ul>', '<ul>\n    <li>\n      <strong>Biopharmaceutical Manufacturing</strong> – Aseptic filling and transfer of drug substances, vaccines, and monoclonal antibodies.\n    </li>\n    <li>\n      <strong>Cell &amp; Gene Therapy</strong> – Safe handling of cryopreserved cells, viral vectors, and patient-specific therapies.\n    </li>\n    <li>\n      <strong>Media &amp; Buffer Preparation</strong> – Sterile preparation and distribution of critical process fluids.\n    </li>\n    <li>\n      <strong>Sampling &amp; Aliquoting</strong> – Secure collection and storage of process samples for quality control.\n    </li>\n  </ul>', '<ul><li><strong>European Directive 85/572/EEC</strong> for food-contact plastic materials</li><li><strong>Japanese Pharmacopoeia</strong> (Section 61, Part 1)</li><li><strong>European Pharmacopoeia</strong> (Section 3.1.5)</li><li><strong>USP 661</strong> (Physicochemical tests for plastics)</li><li><strong>ISO 10993</strong> (Biological compatibility)</li><li><strong>USP 87</strong> (Cytotoxicity)</li><li>Biological reactivity <i>in vivo</i> for <strong>Class VI – 50°C Plastics</strong></li><li>The <strong>materials of construction</strong> of the biocontainers meet the following standards and regulations:</li><li><strong>Biocontainers</strong> are produced in a <strong>controlled environment</strong> (Class 10,000, Grade C).</li><li><strong>Trolleys, trays, and biocontainers</strong> are manufactured under a <strong>Quality Management System</strong> certified to <strong>ISO 9001</strong>.</li><li><strong>Biocontainers</strong> are 100% leak tested.</li></ul>', ' <ul>\n    <li>\n      The film material has good physical strength, chemical compatibility, and biocompatibility.\n    </li>\n    <li>\n      The high transparency of the film material is conducive to the judgment of auxiliary craft.\n    </li>\n    <li>\n      Gamma ray sterilization irradiation ensures sterility.\n    </li>\n    <li>\n      Customization of various sizes, suitable for various processes.\n    </li>\n  </ul>', '1', NULL, '2025-10-07 09:43:42', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `image`, `created_at`, `created_by`) VALUES
(10, 7, '/assets/images/product/1693330168P7.png', '0000-00-00 00:00:00', 0),
(29, 8, '/assets/images/product/1726127948o_rings.jpg', '0000-00-00 00:00:00', 0),
(31, 10, '/assets/images/product/1726131989sensor.jpg', '0000-00-00 00:00:00', 0),
(32, 11, '/assets/images/product/1726132201Gaskets.jpg', '0000-00-00 00:00:00', 0),
(34, 12, '/assets/images/product/1759830984image (4).png', '0000-00-00 00:00:00', 0),
(36, 13, '/assets/images/product/1759833878Sampling-Manifold-Assembly-5X100mL-01-1024x683.jpg', '0000-00-00 00:00:00', 0),
(38, 14, '/assets/images/product/1759834513unnamed.jpg', '0000-00-00 00:00:00', 0),
(39, 1, '/assets/images/product/1759837715image (5).png', '0000-00-00 00:00:00', 0),
(40, 2, '/assets/images/product/1759837808image (6).png', '0000-00-00 00:00:00', 0),
(41, 3, '/assets/images/product/1759837872image (7).png', '0000-00-00 00:00:00', 0),
(42, 4, '/assets/images/product/1759837951image (8).png', '0000-00-00 00:00:00', 0),
(43, 5, '/assets/images/product/1759838024image (9).png', '0000-00-00 00:00:00', 0),
(44, 6, '/assets/images/product/1759838132image (10).png', '0000-00-00 00:00:00', 0),
(45, 9, '/assets/images/product/1759897982diaphrams.png', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `gmail` varchar(300) NOT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `pinterest` varchar(300) DEFAULT NULL,
  `whatsapp` varchar(300) DEFAULT NULL,
  `quora` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `type` enum('1','2') NOT NULL COMMENT '1-customer,2-student',
  `name` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `gender` enum('1','2') NOT NULL COMMENT '1-male,2-female',
  `status` enum('1','2','3') NOT NULL COMMENT '1-Active,2-inactive,3-others',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `type`, `name`, `description`, `gender`, `status`, `created_at`, `created_by`) VALUES
(1, '1', 'Prakesh', 'Flow smart Inc has been our trusted supplier for silicone and rubber products for years. Their commitment to quality, quick delivery, and competitive pricing is unmatched. We rely on their silicone hoses and gaskets for our pharmaceutical production, and they have consistently met our stringent requirements. Their customer service is exceptional, making them our go-to source for rubber products', '1', '1', '2023-09-02 17:24:15', 2),
(2, '1', 'Rajesh', 'We have worked with Flow smart Inc on numerous projects, and their expertise in manufacturing rubber products is evident in every interaction. Their ability to develop custom solutions for our unique applications, especially the high-pressure hoses, has been invaluable to our business. The quality of their products meets the strictest industry standards, and we appreciate their dedication to excellence.', '1', '1', '2023-09-02 17:24:43', 2),
(3, '1', 'Pramela', 'As a petrochemical industry leader, we demand the highest quality rubber components for our operations. Flow smart Inc has consistently delivered top-notch silicone and viton rubber products that have stood up to the most challenging conditions. Their attention to detail and adherence to regulatory standards, such as FDA compliance, have made them a trusted partner. We look forward to continuing our successful collaboration', '2', '1', '2023-09-02 17:25:17', 2),
(4, '1', 'Reshma', 'Flow smart Inc is a reliable partner that consistently exceeds our expectations. Their wide range of rubber products, including silicone hoses and gaskets, has been integral to our manufacturing processes. What truly sets them apart is their responsiveness and flexibility. They\'ve accommodated our urgent needs and delivered quality products on time, helping us maintain smooth operations. We highly recommend Flow smart Inc for their exceptional products and service.', '2', '1', '2023-09-02 17:25:51', 2),
(5, '1', 'Chaitanya', 'We have been sourcing rubber components from Flow smart Inc for years, and they have become an indispensable part of our supply chain. Their dedication to quality assurance is evident in the durability and performance of their rubber products. Whether it\'s viton gaskets or silicone tubes, we trust Flow smart Inc to provide the best. Their competitive pricing has also allowed us to remain cost-effective without compromising on quality.', '1', '1', '2023-09-02 17:26:19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_type` enum('1','2','3') DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `full_name`, `image`, `user_type`, `status`, `mobile_number`, `created_at`, `updated_at`) VALUES
(1, 'testuser1', 'testuser1@example.com', '$2y$10$XBEYDdZPFeHFKsTasXqD5eY.AYK6EIXPyH9ha3BMvf9IMOPaIk8DW', 'Test User 1', NULL, '1', '1', '1234567890', '2023-07-31 12:10:02', '2023-07-31 12:10:02'),
(2, 'testuser2', 'testuser2@example.com', '$2y$10$YdH9p51ha.UyJMMaoRl/S.VMKiYsm8XO9tNLUz4rlg2A9M2pLHqtm', 'Test User 2', NULL, '2', '1', '9876543210', '2023-07-31 12:10:02', '2023-07-31 12:10:02'),
(3, 'admin', 'admin@example.com', '$2y$10$aSnmisv1caw3sTfKjn6WH.rH.AgH4QuwncJ4SmuSlMZeEtrMLg7k6', NULL, NULL, '1', '1', NULL, '2023-07-31 12:39:55', '2023-07-31 13:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
