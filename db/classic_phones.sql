-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2023 at 12:32 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classic_phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone_details`
--

DROP TABLE IF EXISTS `phone_details`;
CREATE TABLE IF NOT EXISTS `phone_details` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_price` tinyint UNSIGNED NOT NULL,
  `phone_image_path` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_model_year` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_rating` tinyint UNSIGNED NOT NULL DEFAULT '3',
  `phone_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stock` enum('in stock','out of stock') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'in stock',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone_details`
--

INSERT INTO `phone_details` (`id`, `phone_name`, `phone_price`, `phone_image_path`, `phone_model_year`, `phone_rating`, `phone_description`, `stock`) VALUES
(2, 'Nokia 5310', 199, 'nokia-5310-used/5310-1', '2007', 4, 'The Nokia 5310 is an XpressMusic mobile phone, introduced by Nokia on 29 August 2007 and released in the fourth quarter of 2007. It is less than a centimeter thick and is available with blue, red, purple, pink, orange, silver or black trim, the main body also being available in grey, black or white. It features many music specific features as well as a 2.0-megapixel camera. At 9.9 mm thick and It is one of the lightest phones Nokia has ever produced at 71 g.', 'in stock'),
(3, 'Nokia 3310', 149, 'nokia-3310-used/3310-1', '2000', 3, 'The Nokia 3310 is a discontinued GSM mobile phone announced on 1 September 2000, and released in the fourth quarter of the year, replacing the popular Nokia 3210. It sold very well, being one of the most successful phones, with 126 million units sold worldwide, and being one of Nokia\'s most iconic[citation needed] devices. The phone is still widely acclaimed and has gained a cult status due to its reputation for durability.', 'in stock'),
(4, 'Nokia n95', 255, 'nokia-n95-used/n95-1', '2007', 4, 'The Nokia N95 is a smartphone produced by Nokia as part of their Nseries line of portable devices. Announced in September 2006, it was released to the market in March 2007. The N95 ran S60 3rd Edition, on Symbian OS v9.2. It has a two-way sliding mechanism, which can be used to access either media playback buttons or a numeric keypad. It was first released in silver and later on in black, with limited edition quantities in gold and purple. The launch price of the N95 was around US$730.', 'in stock'),
(5, 'Nokia 6630', 199, 'nokia-6630-used/6630-1', '2004', 3, 'The Nokia 6630 is a 3G smartphone announced by Nokia on 14 June 2004 and released in November. It runs on Symbian OS 8.0a (Series 60 2nd Edition FP2). Codenamed Charlie during development, it is an evolution of the 6600 and 6620 smartphones, supporting tri-band GSM (run on lower operating systems).\r\n\r\nThe Nokia 6630 is the first phone ever that allows truly global roaming; previously GSM phones have had near-global coverage except in Japan where 2G phone standards were different. The 6630 automatically uses the W-CDMA network in Japan. Nokia 6650 and 7600 were also able to function in Japan, but they did not support GSM 1900, often needed in the United States and Canada (the Nokia 6651 has the GSM 1900).\r\n\r\nNokia says the Nokia 6630 is the first dual-mode, tri-band handset designed to work on 3G (WCDMA), EDGE and 2G networks in Europe, Asia and the Americas.', 'out of stock'),
(6, 'Nokia e71', 255, 'nokia-e71-used/e71-1', '2008', 5, 'The Nokia E71 is a smartphone introduced in 8th May 2008 from the Eseries range with a QWERTY keyboard targeting business users worldwide. It runs on Symbian OS v9.2, with a Series 60 3rd Edition, second generation Feature Pack 1. The Nokia E71 succeeded the Nokia E61/61i models, building on the base design and form factor but enhancing on the feature set.\r\n\r\nThe Nokia E71 was well received and highly popular, often considered to be one of Nokia\'s finest devices. It was superseded by the Nokia E72 in 2009.', 'in stock'),
(7, 'Nokia 6300', 249, 'nokia-6300-used/6300-1', '2006', 4, 'The Nokia 6300 is a mobile telephone handset produced by Nokia. It was announced on 28 November 2006 and released in January 2007.\r\nThe Nokia 6300 is a mid-ranger combining a classic candybar design with a durable stainless steel and slim (11.7 mm thick) body. It runs on Series 40. The 6300 was a hit and became one of the top-selling Nokia models on the market during its time.', 'in stock'),
(8, 'Nokia 8800', 255, 'nokia-8800-used/8800-1', '2005', 4, 'The Nokia 8800  is a luxury mobile phone produced by Nokia, based on the Nokia Series 40 operating system. The 8800 features a stainless-steel housing with a scratch-resistant screen and has a weight of 134 grams. According to Nokia, the 8800\'s \"sophisticated slide mechanism uses premium ball bearings crafted by the makers of bearings used in high performance cars\".', 'in stock'),
(9, 'Nokia c3', 199, 'nokia-c3-new/c3-1', '2010', 3, 'The Nokia C3-00 is a QWERTY keypad feature phone with the Nokia Series 40 mobile operating system, released under the Cseries line of phones by Nokia. It features a full 4-line keyboard, like the earlier Nokia 6800 series. It was advertised as an entry-level messaging and social networking phone.', 'in stock'),
(10, 'Nokia 6230i', 149, 'nokia-6230i-new/6230i-1', '2004', 3, 'The Nokia 6230i is a mobile phone based on the Nokia Series 40 platform. It was announced on 28 October 2003 and released in February 2004.\r\n\r\nThe 6230i is business-styled but it does feature a VGA resolution digital camera, video camera, a music player and expandable memory.', 'out of stock');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` tinyint UNSIGNED DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_phoneid` (`phone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_id_phoneid` FOREIGN KEY (`phone_id`) REFERENCES `phone_details` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
