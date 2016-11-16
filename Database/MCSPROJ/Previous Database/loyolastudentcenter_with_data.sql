-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2016 at 09:35 AM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_address` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `review_class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='bridge entity';

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`review_class_id`, `student_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `sender_name`, `sender_email`, `subject`, `content`) VALUES
(1, 'Jana Gardon', 'jgardon@email.com', 'Enrollment', 'Process for Enrollment'),
(2, 'Renzo Tadeo', 'renzo@gmail.com', 'Reservation', 'Reservation of Review Class');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `student_id` int(11) NOT NULL,
  `review_class_id` int(11) NOT NULL,
  `deposit_slip` varchar(250) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`student_id`, `review_class_id`, `deposit_slip`, `date`) VALUES
(1, 1, 'sample image', '2016-10-27 07:24:49'),
(2, 2, 'image 2', '2016-10-27 07:24:49');

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
(1, 'Comprehensive College Entrance Exam', 'intensive review of\r\nmath\r\ngeneral science and physics\r\nbiology\r\nchemistry\r\nEnglish\r\nFilipino\r\nsimulated exams\r\ntest-taking strategies\r\nrefresher sessions before the actual university admission exams\r\n\r\n\r\nThis review also helps prepare students for their Grade 10 to Grade 12 academic subjects.', NULL, NULL),
(2, 'Highschool Entrance Test', 'intensive review of math, science, and English\r\npractice tests\r\nsimulated exams\r\ntest-taking strategies\r\nrefresher sessions before the actual high school entrance exams', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `review_class_id` int(11) NOT NULL,
  `duration_of_hours` int(3) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `room` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `review_class_id`, `duration_of_hours`, `start_time`, `end_time`, `location`, `room`) VALUES
(1, 1, 100, '01:00:00', '03:00:00', 'Ateneo De Manila', '816A'),
(2, 2, 75, '03:00:00', '05:00:00', 'Loyola Student Center', 'Room A');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) DEFAULT '-',
  `age` int(2) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `contact_number` varchar(12) DEFAULT NULL,
  `email_address` varchar(150) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `school` varchar(200) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `relation` enum('Parent','Grandparent','Sibling','Aunt/Uncle','Other') NOT NULL,
  `guardian_contact_number` varchar(12) NOT NULL,
  `guardian_email_address` varchar(150) DEFAULT NULL,
  `selected_school` varchar(100) DEFAULT NULL,
  `learned_lsc` enum('friends','relatives','newspaper ads','LSC signage/poster','school','others') NOT NULL,
  `review_class_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `transaction_type` enum('Reserve','Enroll') NOT NULL,
  `date_of_registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Pending','Reserved','Enrolled','Done','Cancelled') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `lastname`, `firstname`, `middlename`, `age`, `gender`, `contact_number`, `email_address`, `home_address`, `school`, `guardian_name`, `relation`, `guardian_contact_number`, `guardian_email_address`, `selected_school`, `learned_lsc`, `review_class_id`, `schedule_id`, `transaction_type`, `date_of_registration`, `status`) VALUES
(1, 'Cruz', 'Martin', 'Lorenzo', 19, 'Male', '09179471364', 'mcruz@email.com', 'Block 20 Lot 17 Twin Pioneer Street, Makati City', 'University of the Philippines', 'Maica Cruz', 'Parent', '09876654321', NULL, 'Asia Pacific College', 'LSC signage/poster', 1, 1, 'Reserve', '2016-10-27 07:16:23', 'Pending'),
(2, 'Balcena', 'Gail', 'Anunciacion', 19, 'Female', '09987654567', 'siscode@email.com', 'Astra Bicutan, Paranaque City', 'Asia Pacific College', 'Maica Belchez', 'Parent', '09994876540', 'mlbelchez@email.com', 'University of the Philippines', 'friends', 2, 2, 'Enroll', '2016-10-27 07:24:03', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`,`student_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `password_UNIQUE` (`password`),
  ADD UNIQUE KEY `email_address_UNIQUE` (`email_address`),
  ADD KEY `fk_account_student1_idx` (`student_id`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`review_class_id`,`student_id`),
  ADD KEY `fk_student_has_review_class_review_class1_idx` (`review_class_id`),
  ADD KEY `fk_student_has_review_class_student1_idx` (`student_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`student_id`,`review_class_id`),
  ADD KEY `fk_review_class_has_student_student1_idx` (`student_id`),
  ADD KEY `fk_review_class_has_student_review_class1_idx` (`review_class_id`);

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
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`review_class_id`,`schedule_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_student_schedule1_idx` (`schedule_id`),
  ADD KEY `fk_student_review_class1_idx` (`review_class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `review_class`
--
ALTER TABLE `review_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_account_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `class_list`
--
ALTER TABLE `class_list`
  ADD CONSTRAINT `fk_student_has_review_class_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_has_review_class_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_review_class_has_student_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_review_class_has_student_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schedule_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_review_class1` FOREIGN KEY (`review_class_id`) REFERENCES `review_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_schedule1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
