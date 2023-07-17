SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `albumstore1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `albumstore1`;

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `releasedate` int(11) NOT NULL,
  `information` varchar(255) NOT NULL,
  `artistid` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artistid` (`artistid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO `album` (`id`, `version`, `price`, `releasedate`, `information`, `artistid`, `cover`, `created_date`, `modified_date`) VALUES
(4, 'Position', 10000, 2020, 'CD & SIGN', 1, 'Position.png', '2020-12-16 20:00:42', '2020-12-21 10:33:36'),
(5, 'Rare', 50000, 2020, 'CD, Photobook & SIGN', 2, 'Selena_Gomez_-_Rare.png', '2020-12-21 10:35:20', '2020-12-21 10:35:20'),
(6, 'Changes', 30000, 2020, 'CD & SIGN', 12, 'changes.jpg', '2020-12-21 10:38:39', '2020-12-21 10:41:22'),
(7, 'JACKBOYS', 40000, 2019, 'CD only', 4, 'travis scoot.jpg', '2020-12-21 10:43:58', '2020-12-21 10:43:58'),
(8, 'Folklore', 30000, 2020, 'CD & SIGN', 5, 'Taylor_Swift_-_Folklore.png', '2020-12-21 10:47:31', '2020-12-21 10:49:26'),
(9, 'CRY', 10000, 2019, 'CD & SIGN', 8, '503e4fd2d665a.preview-300.jpg', '2020-12-21 10:52:43', '2020-12-21 10:52:43'),
(10, 'Dark Lane Demo Tapes', 10000, 2020, 'CD only', 3, '220px-Drake_-_Dark_Lane_Demo_Tapes.png', '2020-12-21 10:55:39', '2020-12-21 10:55:39'),
(11, 'Chromatica', 30000, 2020, 'CD, Photobook & SIGN', 9, 'ESHpjpxU0AAcNIx.jpg', '2020-12-21 10:58:22', '2020-12-21 10:58:22'),
(12, 'KIKI', 20000, 2020, 'CD & SIGN', 7, 'kiana-ledes-debut-album-kiki-has-arrived-ft-ari-lennox-6lack-and-lucky-daye-1.jpg', '2020-12-21 11:01:25', '2020-12-21 11:01:25'),
(13, 'Merry Christmas', 40000, 1994, 'CD ONLY', 10, 'Merry_Christmas_Mariah_Carey.png', '2020-12-21 11:04:01', '2020-12-21 11:04:01'),
(14, 'After School', 30000, 2020, 'CD & SIGN', 11, 'index.jpg', '2020-12-21 11:05:34', '2020-12-21 11:05:34'),
(15, 'Legendary', 30000, 2019, 'CD & SIGN', 6, 'Tyga_-_Legendary.png', '2020-12-21 11:07:40', '2020-12-21 11:07:40'),
(16, 'Thank u, next', 300000, 2019, 'Vinyl & Photobook', 1, 'GUEST_2f152c11-30bb-4c94-83a3-4fce85cc2f38.jpg', '2020-12-21 11:10:02', '2020-12-21 11:10:02'),
(17, 'Sweetener', 20000, 2018, 'CD & Photobook', 1, '61zN9VJGynL._SL1200_.jpg', '2020-12-21 11:11:30', '2020-12-21 11:11:30'),
(18, 'Revival', 30000, 2015, 'CD & Sign', 2, 'selena gomaz.jpg', '2020-12-21 11:13:32', '2020-12-21 11:13:32'),
(19, 'Me', 30900, 2019, 'CD & SIGN', 5, 'Taylor_Swift_-_Me!.png', '2020-12-21 11:14:56', '2020-12-21 11:14:56'),
(20, 'Reputation', 400000, 2018, 'CD & Sign', 5, '220px-Taylor_Swift_-_Reputation.png', '2020-12-21 11:16:50', '2020-12-23 22:23:00'),
(22, 'Fearless ', 30000, 2006, 'CD Only', 5, 'Taylor swift.png', '2020-12-23 22:38:25', '2020-12-23 22:38:25');

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `artist` (`id`, `name`, `created_date`, `modified_date`) VALUES
(1, 'Ariana Grande', '2020-12-05 20:44:13', '2020-12-05 20:44:13'),
(2, 'Selena Gomez', '2020-12-05 20:44:13', '2020-12-05 20:44:13'),
(3, 'Drake', '2020-12-05 21:12:50', '2020-12-05 21:12:50'),
(4, 'Travis Scott', '2020-12-05 21:32:46', '2020-12-05 21:32:46'),
(5, 'Taylor Swift', '2020-12-05 21:33:08', '2020-12-05 21:33:08'),
(6, 'Tyga', '2020-12-05 21:33:26', '2020-12-05 21:33:26'),
(7, 'Kiana Lede', '2020-12-05 21:34:06', '2020-12-05 21:34:06'),
(8, 'Cigarettes After Sex', '2020-12-05 21:34:47', '2020-12-05 21:34:47'),
(9, 'Lady Gaga', '2020-12-05 21:35:14', '2020-12-05 21:35:14'),
(10, 'Mariah Carey', '2020-12-05 21:35:33', '2020-12-05 21:35:33'),
(11, 'Melanie Martinez', '2020-12-05 21:36:31', '2020-12-05 21:36:31'),
(12, 'Justin Bieber', '2020-12-21 10:32:12', '2020-12-21 10:32:12'),
(14, 'BigBang', '2020-12-23 23:20:11', '2020-12-23 23:20:11');

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `contact` (`contact_id`, `user_name`, `user_email`, `subject`, `content`) VALUES
(1, 'joseph', 'joseph@gmail.com', 'will not arrive ', 'product is not arrive in home'),
(2, 'Mg Mg', 'mgmg@gmail.com', 'abcccc', 'abggjkkhfgshajajajja'),
(3, '', '', '', '');

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `orders` (`id`, `name`, `email`, `phoneno`, `address`, `status`, `created_date`, `modified_date`) VALUES
(1, '', '', '', '', 0, '2020-12-22 12:45:11', '2020-12-22 12:45:11'),
(2, '', '', '', '', 0, '2020-12-22 12:46:34', '2020-12-22 12:46:34'),
(3, 'joseph', 'joseph@gmail.com', '09768261346', 'yangon', 0, '2020-12-22 12:47:16', '2020-12-22 12:47:16'),
(4, 'Joseph', 'joseph@gmail.com', '9693076522', 'yangon', 1, '2020-12-22 12:49:13', '2020-12-22 19:44:57'),
(5, '', '', '', '', 0, '2020-12-22 14:34:29', '2020-12-22 14:34:29'),
(6, 'Mg Myo', 'mgmyo@gamil.com', '09693076522', 'Yangon', 0, '2020-12-23 01:18:24', '2020-12-23 01:18:24');

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `album_id` (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `order_items` (`id`, `album_id`, `order_id`, `qty`) VALUES
(1, 4, 4, 1),
(2, 5, 4, 1),
(3, 6, 4, 1),
(4, 5, 5, 1),
(5, 7, 5, 1),
(6, 4, 6, 1),
(7, 5, 6, 1),
(8, 6, 6, 1),
(9, 7, 6, 1);

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `gender`, `city`) VALUES
(1, 'Mg Mg', '$2y$10$Hye.dmcsj8G.HG9q3nhua.ldM6yvA9.T2Ssjs6S1DAHlNPh0zppOa', 'mgmg@gmail.com', '9693076522', 'M', 'Kalay'),
(2, 'aye aye', '$2y$10$b1y/N7H9e6f3wZXI8WUOae1h8c6fHrrL.G5I8bODNwqFDch8LodUe', 'ayeaye@gmail.com', '945858484848', 'F', 'Yangon');


ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`artistid`) REFERENCES `artist` (`id`);

ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
