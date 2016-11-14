-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 05:31 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

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
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `review_class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review_class`
--

CREATE TABLE `review_class` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(400) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_class`
--

INSERT INTO `review_class` (`id`, `name`, `description`, `start_date`, `end_date`) VALUES
(1, 'Review Class 1', 'Description 1', '2016-11-16', '2017-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `review_class_id` int(11) NOT NULL,
  `batch` varchar(45) NOT NULL,
  `duration_of_hours` int(3) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `location` varchar(150) NOT NULL,
  `room` varchar(150) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `review_class_id`, `batch`, `duration_of_hours`, `start_time`, `end_time`, `location`, `room`, `start_date`, `end_date`, `days`) VALUES
(1, 1, '', 16, '12:30:00', '04:30:00', 'Katipunan', 'rm. 404', '0000-00-00', '0000-00-00', '100'),
(2, 1, 'Batch 1', 90, '12:40:00', '04:30:00', 'Katipunan', 'rm. 404', '0000-00-00', '0000-00-00', '100');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_type` enum('Reserve','Enroll') NOT NULL DEFAULT 'Reserve',
  `user_id` int(11) NOT NULL,
  `review_class_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `payment_slip` varchar(250) DEFAULT NULL,
  `status` enum('Pending','Reserved','Enrolled','Done','Cancelled') DEFAULT 'Pending',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_type`, `user_id`, `review_class_id`, `schedule_id`, `payment_slip`, `status`, `date`) VALUES
('Reserve', 1, 1, 1, '', 'Pending', '2016-11-12 17:30:15'),
('Reserve', 1, 1, 2, '', 'Enrolled', '2016-11-12 17:31:19');

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
  `age` int(2) NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `relation` enum('Parent','Grandparent','Sibling','Other') COLLATE utf8_unicode_ci NOT NULL,
  `guardian_contact_number` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_email_address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `selected_school` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `learned_lsc` enum('friends','relatives','newspaper ads','LSC signage/poster','school','others') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `lastname`, `firstname`, `middlename`, `age`, `gender`, `contact_number`, `home_address`, `school`, `guardian_name`, `relation`, `guardian_contact_number`, `guardian_email_address`, `selected_school`, `learned_lsc`) VALUES
(1, 'qwerty2', '-Jrqj6-1EfQ94urWqSNz3EQPfaC5zNMk', '$2y$13$ehHSRXDPRyttFPHIS31wnOUwv9fjDlC2RYj5JaXw1ayjfWGaC4mUi', NULL, 'qwerty2@gmail.com', 10, 1478962971, 1478962971, '', '', '-', 0, 'Male', NULL, '', '', '', 'Parent', '', NULL, NULL, 'friends'),
(2, 'fghaboc', '6X0x2OfCKaUJ6RFKRnv-8PnkLRmiksmA', '$2y$13$SjaMXYutPIBUsqo.lfIjJ.gBnieGusUH2kfvc4ASC7b/lse8qcV3W', NULL, 'fghaboc@gmail.com', 10, 1478966082, 1478966082, 'haboc', 'gail', 'gumogda', 18, 'Female', '09179398586', 'taguig city', 'Asia Pacific College', 'Rosa Haboc', '', '091234567891', 'rosahaboc@yahoo.com', 'Asia Pacific College', ''),
(3, 'gailh', 'rZH0pFe7pXR_FZGWzWyf_IyYYQyPjIAN', '$2y$13$hn4Co6pSZ8yNb.ilnvmNNuwj/8ezau0YzCob3jk8sXy35zpcTxWM.', NULL, 'fgail@gmail.com', 10, 1478970234, 1478970234, 'gailh', 'gailh', '-', 18, 'Female', '09176547839', 'Taguig City', 'PDMHS, Taguig City', 'fgail', 'Sibling', '09876543526', 'fghaboc@gmail.com', 'Asia Pacific College, Makati City', 'LSC signage/poster'),
(4, 'qwertyu', '3xbeFIQax-ufBxRbYjyX5sSG6pYIbRoT', '$2y$13$J2NuXfnS82r1m9mTmXsOeefpu/WL4x/4pjUamrq1jirEQRKTl4IQe', NULL, 'qwertyu@gmail.com', 10, 1478972988, 1478972988, '', '', '-', 0, 'Male', NULL, '', '', '', 'Parent', '', NULL, NULL, 'friends'),
(5, '', '', '', NULL, '', 10, 1478973122, 1478973122, '', '', '-', 0, 'Male', NULL, '', '', '', 'Parent', '', NULL, NULL, 'friends');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`review_class_id`,`user_id`),
  ADD KEY `fk_review_class_has_user_user1_idx` (`user_id`),
  ADD KEY `fk_review_class_has_user_review_class1_idx` (`review_class_id`);

--
-- Indexes for table `review_class`
--
ALTER TABLE `review_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`,`review_class_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_schedule_review_class1_idx` (`review_class_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`user_id`,`review_class_id`,`schedule_id`),
  ADD KEY `fk_review_class_has_user_user2_idx` (`user_id`),
  ADD KEY `fk_review_class_has_user_review_class2_idx` (`review_class_id`),
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
-- AUTO_INCREMENT for table `review_class`
--
ALTER TABLE `review_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schedule_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_review_class_has_user_review_class2` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_review_class_has_user_user2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaction_schedule1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
