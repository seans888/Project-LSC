-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 02:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyolastudentcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci DEFAULT '-',
  `contact_number` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `lastname`, `firstname`, `middlename`, `contact_number`) VALUES
(1, 'aacarpio', 'OnZZMwbxTMvoEMOGTPMkG3p79JB1kNij', '$2y$13$cbi4k/aj96OMS1Vg7Xij2eyBWOTyyK9per.z1mEK2nhcAdVGMDuMK', NULL, 'aacarpio@student.apc.edu.ph', 10, 1479956872, 1479956872, 'Carpio', 'Aira Joyce', NULL, '09179471364');

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `review_class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transaction_user_id` int(11) NOT NULL,
  `transaction_review_class_id` int(11) NOT NULL,
  `transaction_schedule_id` int(11) NOT NULL,
  `payment_slip` varchar(250) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review_class`
--

CREATE TABLE `review_class` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_class`
--

INSERT INTO `review_class` (`id`, `name`, `description`) VALUES
(1, 'Highschool Entrance Examination Review', 'everage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.\r\n\r\nBring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.\r\n\r\nCapitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.'),
(2, 'College Entrance Examination Review', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet ligula porttitor, tincidunt felis vel, blandit lectus. Vestibulum turpis libero, vestibulum et volutpat at, gravida a nunc. Integer rutrum nunc sed eleifend accumsan. Nunc ut placerat nunc. Ut vitae libero et justo vestibulum vulputate ut vitae felis. Integer ex lacus, pretium et nisi non, mattis bibendum purus. Nulla neque massa, maximus sit amet ex non, varius tempus orci. Aenean vulputate, lorem quis tempor scelerisque, turpis purus faucibus ante, nec scelerisque odio enim in sapien.\r\n\r\nPhasellus non erat eget nulla aliquam aliquet. Sed a nulla eget leo tristique feugiat sit amet vel mi. Praesent sagittis mi eget neque lacinia vehicula cursus et velit. Praesent pharetra pharetra elementum. Duis non ligula nisl. In tincidunt scelerisque suscipit. Vivamus sed mattis eros. Pellentesque in mi sit amet urna mollis ultrices. Nulla et turpis ut nulla varius congue at a magna. Sed gravida vitae turpis nec luctus. Curabitur faucibus felis ut ultricies interdum. Fusce fringilla volutpat ultricies. Maecenas felis ipsum, sollicitudin vulputate ullamcorper a, accumsan in lectus. Fusce et finibus dui. ');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `review_class_id` int(11) NOT NULL,
  `duration_of_hours` int(3) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `days` varchar(250) NOT NULL,
  `location` varchar(150) NOT NULL,
  `room` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `user_id` int(11) NOT NULL,
  `review_class_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `transaction_type` enum('Reserve','Enroll') COLLATE utf8_unicode_ci NOT NULL,
  `selected_school` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('Pending','Reserved','Enrolled','Done','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci DEFAULT '-',
  `age` int(11) NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `relation` enum('Parent','Grandparent','Sibling','Other') COLLATE utf8_unicode_ci NOT NULL,
  `guardian_contact_number` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_email_address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `learned_lsc` enum('friends','relatives','newspaper ads','LSC signage/poster','school','others') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`review_class_id`,`user_id`),
  ADD KEY `fk_review_class_has_user_user1_idx` (`user_id`),
  ADD KEY `fk_review_class_has_user_review_class1_idx` (`review_class_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_payment_transaction1_idx` (`transaction_user_id`,`transaction_review_class_id`,`transaction_schedule_id`);

--
-- Indexes for table `review_class`
--
ALTER TABLE `review_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_schedule_review_class1_idx` (`review_class_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`user_id`,`review_class_id`,`schedule_id`),
  ADD KEY `fk_user_has_review_class_review_class1_idx` (`review_class_id`),
  ADD KEY `fk_user_has_review_class_user_idx` (`user_id`),
  ADD KEY `fk_transaction_schedule1_idx` (`schedule_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review_class`
--
ALTER TABLE `review_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_list`
--
ALTER TABLE `class_list`
  ADD CONSTRAINT `fk_review_class_has_user_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_review_class_has_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_transaction1` FOREIGN KEY (`transaction_user_id`,`transaction_review_class_id`,`transaction_schedule_id`) REFERENCES `transaction` (`user_id`, `review_class_id`, `schedule_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schedule_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_schedule1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_review_class_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_review_class_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
