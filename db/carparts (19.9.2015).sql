-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 10:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carparts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_date` int(10) NOT NULL,
  `update_date` int(10) NOT NULL,
  `is_block` tinyint(4) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `password`, `create_date`, `update_date`, `is_block`, `type`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 121212, 121212, 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(10) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_logo` varchar(150) NOT NULL,
  `create_date` int(15) NOT NULL,
  `update_date` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_logo`, `create_date`, `update_date`) VALUES
(1, 'BMW', 'uploads/BrandLogos/BMW.png', 1432240944, 1432240944);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(10) NOT NULL,
  `key` varchar(150) NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `key`, `content`) VALUES
(1, 'about_company', 'Lorem ipsum dolor sit amet, ex eos percipit sensibus, tota scribentur at cum. An feugait epicurei delectus duo, vocent admodum ut pro, pro integre perpetua id. Duo at aperiri euripidis scripserit, numquam adipisci reprimique sit eu. Ei exerci tamquam posidonium est.\n\nAt iudico torquatos cum. Vel at cibo meliore, dicat eleifend mediocrem duo ut, case sale ubique ne pro. Et duo civibus scriptorem efficiantur. Ne per soluta euripidis. Qui et option persius utroque, est ad dignissim urbanitas.\n\nEu esse everti vix. Vis imperdiet definiebas eu, verear noluisse scaevola sit cu, ei pri minim complectitur. Tale copiosae id pro, cu iisque dissentiunt per, in eos simul rationibus. Vim officiis dissentias cotidieque te. Id nulla omnesque qui, ullum dicam mollis an vis.\n\nMei cu dicam maiorum nostrum, novum placerat vituperata ea mel, iudico discere usu at. Nec ne nulla intellegebat, adhuc mundi ea vim. Semper consetetur vix te, quodsi suscipiantur est eu, rebum saperet ea eos. Per te elit omnium deterruisset. Nulla nonumes constituto in duo. Sea choro saperet te. Eu eos magna phaedrum.\n\nEt fabulas maiorum sadipscing has, vide delenit sed eu. Id quem vivendo vis. Cu his corpora referrentur liberavisse, eu pri tation legere praesent. Prima oporteat mnesarchum pro ne. Ea pri putant liberavisse, eos sapientem gubergren deseruisse ex, ut ius brute iudico. Albucius singulis similique at quo, erat tantas nostrum vis ea, sed erat dicat complectitur ne.\n\nVidit falli nihil no vix. Usu no omnis mandamus, sea no falli doming propriae, ex audire admodum luptatum est. Dico inani nemore ne nam. Eu est iudico corpora facilisi, at utinam fastidii vis, adipisci instructior in his. Tamquam blandit percipitur eam et. Ea usu scripserit referrentur, ad novum libris duo.\n\nTation putent dissentias ut quo. Summo perpetua similique ei cum, eum soleat dissentiunt et. Duo ex ponderum apeirian definitionem, suas utroque praesent est ex, est ut purto ignota. Ad sea appetere partiendo, et nam aperiam disputationi mediocritatem. An aliquam facilisi perpetua vix. Voluptua definitiones in nec.\n\nQuo no cibo aliquid probatus, id nostro recteque gubergren duo, nibh definitionem ad mea. Etiam consul sit ne. Est sint hinc corpora ut, ut nominati partiendo eum, ne pro sint putent evertitur. Eos aeque antiopam ei, ex ius tacimates mediocrem dignissim. In mutat quaeque nam, vim te electram intellegat adversarium, ad pro timeam nominati.\n\nDuo democritum persequeris at. Aliquid posidonium interesset cu sit. Labitur virtute inermis usu an, his scaevola tractatos te. Populo conceptam no has. Ut nec fugit soleat tempor, ex nonumy integre mei. Argumentum definitiones eu mea, nam ut dolores inciderint, soluta oblique eam id.\n\nQui at unum veniam propriae. At qui noster integre utroque. Hinc veri corpora ad vix. Audiam iriure instructior id has.'),
(2, 'why_us', 'Lorem ipsum dolor sit amet, ex eos percipit sensibus, tota scribentur at cum. An feugait epicurei delectus duo, vocent admodum ut pro, pro integre perpetua id. Duo at aperiri euripidis scripserit, numquam adipisci reprimique sit eu. Ei exerci tamquam posidonium est.\r\n\r\nAt iudico torquatos cum. Vel at cibo meliore, dicat eleifend mediocrem duo ut, case sale ubique ne pro. Et duo civibus scriptorem efficiantur. Ne per soluta euripidis. Qui et option persius utroque, est ad dignissim urbanitas.\r\n\r\nEu esse everti vix. Vis imperdiet definiebas eu, verear noluisse scaevola sit cu, ei pri minim complectitur. Tale copiosae id pro, cu iisque dissentiunt per, in eos simul rationibus. Vim officiis dissentias cotidieque te. Id nulla omnesque qui, ullum dicam mollis an vis.');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(10) NOT NULL,
  `department_name` varchar(20) NOT NULL,
  `department_description` text NOT NULL,
  `department_image` varchar(100) NOT NULL,
  `model_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `engine_id` int(10) NOT NULL,
  `create_date` int(11) NOT NULL,
  `update_date` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_description`, `department_image`, `model_id`, `brand_id`, `engine_id`, `create_date`, `update_date`) VALUES
(3, 'Belt 123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar vestibulum rutrum. Aliquam era', 'uploads/DeptImages/Belt123.png', 0, 0, 0, 1432391564, 1432391864);

-- --------------------------------------------------------

--
-- Table structure for table `engine`
--

CREATE TABLE IF NOT EXISTS `engine` (
  `engine_id` int(10) NOT NULL,
  `engine_name` varchar(100) NOT NULL,
  `engine_description` text NOT NULL,
  `engine_power` varchar(100) NOT NULL,
  `model_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engine`
--

INSERT INTO `engine` (`engine_id`, `engine_name`, `engine_description`, `engine_power`, `model_id`) VALUES
(1, '50000cc', 'asxaaaaac', 'cdsacasca', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_location` varchar(100) NOT NULL,
  `event_time` int(15) NOT NULL,
  `even_description` text NOT NULL,
  `create_date` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_location`, `event_time`, `even_description`, `create_date`) VALUES
(2, 'Mausum events', 'Nikunja-2,Dhaka', 1435125994, 'even_description', 1432984922),
(3, 'Mausum', 'Dhaka', 1443231802, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1432984937),
(4, 'Test event 1', 'Dhaka', 1443577210, 'A young widow, Noriko, lives with her senile father-in-law, Shukichi, on a farm. He believes his favorite cow, long gone, is still alive. Noriko pretends to be the cow and lets him milk her - a satisfying arrangement for them both', 1433026413);

-- --------------------------------------------------------

--
-- Table structure for table `event_images`
--

CREATE TABLE IF NOT EXISTS `event_images` (
  `img_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `img_location` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_images`
--

INSERT INTO `event_images` (`img_id`, `event_id`, `img_location`) VALUES
(2, 3, 'uploads/evenntImages/Mausum_1.jpg'),
(6, 2, 'uploads/evenntImages/Mausumevents_1_33.jpg'),
(8, 4, 'uploads/evenntImages/jklkjlkjl_1_25.jpg'),
(10, 4, 'uploads/evenntImages/Testevent1_1_95.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(10) NOT NULL,
  `model_name` varchar(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `create_date` int(10) NOT NULL,
  `update_date` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `model_name`, `brand_id`, `create_date`, `update_date`) VALUES
(1, '420 1956', 1, 1432240959, 1432240959);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL,
  `product_code` varchar(15) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_dept_id` int(10) NOT NULL,
  `product_price` double NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `product_images` longtext NOT NULL COMMENT 'json_encode location',
  `product_meta_descriptions` longtext NOT NULL COMMENT 'key:value pair json encoded',
  `is_active` tinyint(4) NOT NULL,
  `is_front_page` tinyint(4) NOT NULL,
  `is_special` tinyint(4) NOT NULL,
  `is_price_visible` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_code`, `product_name`, `product_dept_id`, `product_price`, `create_date`, `update_date`, `product_images`, `product_meta_descriptions`, `is_active`, `is_front_page`, `is_special`, `is_price_visible`) VALUES
(1, 'P-72ec54d35f', ' Disc Brake Piston', 3, 550, '2015-09-07 15:21:19', '0000-00-00 00:00:00', '["DqBzOnEjbT.gif","qxigLEVFuX.jpg"]', '[{"key":"Weight","value":"25"},{"key":"Height","value":"123"},{"key":"Bolt.Pattern","value":"123"},{"key":"Inner Diameter","value":"Inner"},{"key":"Test meta","value":"23"},{"key":"Test","value":"12"}]', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_description_keys`
--

CREATE TABLE IF NOT EXISTS `product_description_keys` (
  `key_id` int(11) NOT NULL,
  `key_word` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_description_keys`
--

INSERT INTO `product_description_keys` (`key_id`, `key_word`) VALUES
(1, 'Height'),
(2, 'Weight'),
(3, 'Test meta'),
(4, 'Test'),
(6, 'Bolt.Pattern'),
(7, 'Inner Diameter');

-- --------------------------------------------------------

--
-- Table structure for table `sub_department`
--

CREATE TABLE IF NOT EXISTS `sub_department` (
  `sub_departmet_id` int(10) NOT NULL,
  `department_id` int(10) NOT NULL,
  `sub_department_name` varchar(20) NOT NULL,
  `patent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_brand_id` int(10) NOT NULL,
  `vehicle_model_id` int(10) NOT NULL,
  `vehicle_engine_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicle_name`, `vehicle_brand_id`, `vehicle_model_id`, `vehicle_engine_id`) VALUES
(1, 'Test 1', 1, 1, 1),
(2, 'Test 2', 1, 1, 1),
(3, 'Test 3', 1, 1, 1),
(4, 'Test 4', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_product`
--

CREATE TABLE IF NOT EXISTS `vehicle_product` (
  `vp_id` int(25) NOT NULL,
  `vp_product_id` int(10) NOT NULL,
  `vp_vehicle_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_product`
--

INSERT INTO `vehicle_product` (`vp_id`, `vp_product_id`, `vp_vehicle_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(13, 2, 3),
(14, 5, 1),
(6, 3, 2),
(7, 3, 4),
(8, 4, 2),
(9, 4, 4),
(10, 5, 2),
(11, 5, 4),
(12, 2, 1),
(15, 5, 3),
(16, 5, 4),
(17, 1, 1),
(18, 1, 3),
(19, 2, 1),
(20, 2, 3),
(21, 3, 1),
(22, 3, 3),
(23, 4, 1),
(24, 4, 4),
(25, 5, 2),
(26, 5, 4),
(27, 1, 1),
(28, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `engine`
--
ALTER TABLE `engine`
  ADD PRIMARY KEY (`engine_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_images`
--
ALTER TABLE `event_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_description_keys`
--
ALTER TABLE `product_description_keys`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `sub_department`
--
ALTER TABLE `sub_department`
  ADD PRIMARY KEY (`sub_departmet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vehicle_product`
--
ALTER TABLE `vehicle_product`
  ADD PRIMARY KEY (`vp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `engine`
--
ALTER TABLE `engine`
  MODIFY `engine_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event_images`
--
ALTER TABLE `event_images`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `model_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_description_keys`
--
ALTER TABLE `product_description_keys`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_department`
--
ALTER TABLE `sub_department`
  MODIFY `sub_departmet_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vehicle_product`
--
ALTER TABLE `vehicle_product`
  MODIFY `vp_id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
