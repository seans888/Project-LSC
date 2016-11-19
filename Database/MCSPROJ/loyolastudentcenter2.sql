-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 12:37 PM
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
  `age` int(11) NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `date` date NOT NULL
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
(1, 'Review Class 1', 'Description Review Class 1'),
(2, 'Review Class 2', 'Description Review Class 2');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `duration_of_hours` int(3) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
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
  `selected_school` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review_class_id` int(11) NOT NULL,
  `transaction_type` enum('Reserve','Enroll') COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Pending','Reserved','Enrolled','Done','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `schedule_id` int(11) NOT NULL
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `lastname`, `firstname`, `middlename`, `age`, `gender`, `contact_number`, `home_address`, `school`, `guardian_name`, `relation`, `guardian_contact_number`, `guardian_email_address`, `learned_lsc`) VALUES
(2, 'fghaboc', 'I-E1HHATPMHhdhHZwCoTVtXshyXt1TNU', '$2y$13$h1Z2SmxEySyKnMTaJya1W.I31MlL/0wkmXNU3nkAaViHPepy2kRu6', NULL, 'fghaboc@gmail.com', 10, 1479388553, 1479551710, 'Haboc', 'Florence Gail', '-', 19, 'Female', '09179398586', 'North Signal Village, Taguig City', 'Asia Pacific College, Makati City', 'Aira Carpio', 'Other', '091887349583', 'aacarpio@email.com', 'school'),
(3, '', '', '', NULL, '', 10, 1479430987, 1479430987, '', '', '-', 0, 'Male', NULL, '', '', '', 'Parent', '', NULL, 'friends'),
(4, 'username', '5VqIzqkJKjrqIKDzDpl5DqOoZarTB0GU', '$2y$13$gYrfjCh1odgpA2ZIODYWou.Lv8./FdfJ/DqmeCZoZO.3FmD2K./jO', NULL, 'email@gmail.com', 10, 1479485782, 1479485782, 'lastname', 'firstname', 'middlename', 21, 'Female', '09176547839', 'North Signal Village, Taguig City', 'PDMHS, Taguig City', 'guardian name', 'Other', '09179398586', 'guradianemailadress', 'LSC signage/poster'),
(7, 'uname', '', '', NULL, 'email@email.com', 10, 1479534217, 1479534217, 'lname', 'fname', 'mname', 20, 'Male', '0987654321', 'haddress', 'school', 'gname', 'Grandparent', '098762345', 'gea@gmail.com', 'LSC signage/poster'),
(8, 'ShawnMendres', 'tGInswnrCNw13iDW4qsx7onsmMyK-s-3', '$2y$13$c0wX.QPlOjXEUdPOQ9J9aeBp5o1UN.PeWmcnL6oJZ5zl/k7l8J6DG', NULL, 'smendres@hotmail.com', 10, 1479537340, 1479537340, 'Mendres', 'Shawn', '-', 18, 'Male', '0987654321', 'Toronto, Canada', 'Toronto Academy', '-', 'Other', '0987654321', 'guardian@email.com', 'LSC signage/poster');

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
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_schedule1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_review_class_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_review_class_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
