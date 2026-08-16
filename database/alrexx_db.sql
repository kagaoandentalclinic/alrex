-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2026 at 04:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alrexx_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `id` int(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `schedule` date NOT NULL,
  `category_id` int(30) NOT NULL,
  `service_ids` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `date_sched` date NOT NULL DEFAULT (CURRENT_DATE),
  `delete_flag` tinyint(4) NOT NULL,
  `clientid` varchar(100) NOT NULL,
  `requestor` varchar(100) NOT NULL,
  `medical` varchar(100) NOT NULL,
  `time` time NOT NULL DEFAULT (CURRENT_TIME),
  `license` varchar(100) NOT NULL,
  `stud_permit` varchar(100) NOT NULL,
  `mt` varchar(100) NOT NULL,
  `at` varchar(100) NOT NULL,
  `application` varchar(100) NOT NULL,
  `dl` varchar(100) NOT NULL,
  `payment` tinyint(4) NOT NULL,
  `instructor_id` varchar(100) NOT NULL,
  `instructor_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_list`
--

INSERT INTO `appointment_list` (`id`, `code`, `schedule`, `category_id`, `service_ids`, `status`, `date_created`, `date_updated`, `date_sched`, `delete_flag`, `clientid`, `requestor`, `medical`, `time`, `license`, `stud_permit`, `mt`, `at`, `application`, `dl`, `payment`, `instructor_id`, `instructor_name`) VALUES
(1, 'ALREX-2023110001', '2023-11-08', 2, '7', 3, '2023-11-07 14:41:58', '2024-05-12 14:31:10', '2023-11-07', 0, '11', 'Mikaela  Tano ', '', '08:00:00', 'N/A', 'N/A', 'N/A', 'N/A', 'NEW STUDENT PERMIT', 'N/A', 1, '4', ''),
(3, 'ALREX-2024030001', '2024-03-19', 2, '7', 3, '2024-03-14 17:43:31', '2024-03-22 08:03:20', '2024-03-14', 0, '15', 'John Kurt Yadao Ibe ', '', '08:00:00', 'N/A', 'F123456789', 'N/A', 'AT', 'NONPROFFESSIONAL', 'A', 1, '6', ''),
(6, 'ALREX-2026030001', '2026-03-10', 2, '1', 3, '2026-03-08 22:32:11', '2026-03-08 22:36:58', '2026-03-08', 0, '19', 'Arasong  Masong ', '', '08:00:00', '', '', 'N/A', 'N/A', 'NewStudentPermit', '', 1, '4', ''),
(7, 'ALREX-2026030002', '2026-03-16', 2, '1', 3, '2026-03-11 20:32:15', '2026-03-11 21:24:03', '2026-03-11', 0, '20', 'Theron B Brown ', '', '08:00:00', '', '', 'N/A', 'N/A', 'NewStudentPermit', '', 1, '1', ''),
(8, 'ALREX-2026030003', '2026-03-17', 2, '1', 3, '2026-03-11 21:24:54', '2026-03-11 21:25:37', '2026-03-11', 0, '19', 'Arasong  Masong ', '', '08:00:00', 'NO12345', '12345', 'N/A', 'N/A', 'NewStudentPermit', '', 1, '6', ''),
(9, 'ALREX-2026030004', '2026-03-23', 2, '1', 3, '2026-03-15 10:55:33', '2026-03-15 11:02:38', '2026-03-15', 0, '19', 'Arasong  Masong ', '', '08:00:00', '', '', 'N/A', 'N/A', 'NewStudentPermit', '', 1, '7', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Active, 1 = Delete',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'Old', 0, '2022-01-04 10:31:11', NULL),
(2, 'New', 0, '2022-01-04 10:31:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `healthcare`
--

CREATE TABLE `healthcare` (
  `id` int(11) NOT NULL,
  `refnum` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL DEFAULT 0,
  `Student_name` varchar(150) DEFAULT '',
  `instructorid` int(11) DEFAULT 0,
  `remarks` text DEFAULT NULL,
  `practical_grade` decimal(5,2) DEFAULT 0.00,
  `theoretical_grade` decimal(5,2) DEFAULT 0.00,
  `final_grade` decimal(5,2) DEFAULT 0.00,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `id` int(30) NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `clientid` tinyint(10) NOT NULL,
  `code` varchar(100) NOT NULL,
  `read` tinyint(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `status`, `date_created`, `clientid`, `code`, `read`) VALUES
(1, 1, '2023-11-07 14:43:46', 11, 'ALREX-2023110001', 1),
(2, 3, '2023-11-07 14:46:04', 11, 'ALREX-2023110001', 1),
(3, 2, '2023-11-09 11:57:57', 10, 'ALREX-2023110002', 1),
(4, 2, '2023-11-09 11:58:07', 10, 'ALREX-2023110002', 1),
(5, 1, '2024-03-14 18:27:02', 15, 'ALREX-2024030001', 1),
(6, 2, '2024-03-22 07:54:06', 14, 'ALREX-2024030002', 1),
(7, 3, '2024-03-22 08:03:20', 15, 'ALREX-2024030001', 1),
(8, 1, '2026-03-08 22:32:32', 19, 'ALREX-2026030001', 0),
(9, 4, '2026-03-08 22:32:41', 19, 'ALREX-2026030001', 0),
(10, 3, '2026-03-08 22:36:58', 19, 'ALREX-2026030001', 0),
(11, 1, '2026-03-11 20:32:49', 20, 'ALREX-2026030002', 0),
(12, 3, '2026-03-11 20:33:00', 20, 'ALREX-2026030002', 0),
(13, 3, '2026-03-11 20:49:11', 20, 'ALREX-2026030002', 0),
(14, 3, '2026-03-11 20:50:28', 20, 'ALREX-2026030002', 0),
(15, 3, '2026-03-11 20:50:35', 20, 'ALREX-2026030002', 0),
(16, 3, '2026-03-11 20:51:18', 20, 'ALREX-2026030002', 0),
(17, 3, '2026-03-11 20:59:44', 20, 'ALREX-2026030002', 0),
(18, 3, '2026-03-11 21:24:03', 20, 'ALREX-2026030002', 0),
(19, 1, '2026-03-11 21:25:20', 19, 'ALREX-2026030003', 0),
(20, 4, '2026-03-11 21:25:32', 19, 'ALREX-2026030003', 0),
(21, 3, '2026-03-11 21:25:37', 19, 'ALREX-2026030003', 0),
(22, 1, '2026-03-15 11:02:12', 19, 'ALREX-2026030004', 0),
(23, 4, '2026-03-15 11:02:35', 19, 'ALREX-2026030004', 0),
(24, 3, '2026-03-15 11:02:38', 19, 'ALREX-2026030004', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_settings`
--

CREATE TABLE `schedule_settings` (
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_settings`
--

INSERT INTO `schedule_settings` (`meta_field`, `meta_value`, `date_create`) VALUES
('day_schedule', 'Monday,Tuesday,Wednesday,Thursday,Friday', '2023-06-29 11:11:47'),
('morning_schedule', '08:00,12:00', '2023-06-29 11:11:47'),
('afternoon_schedule', '13:00,17:00', '2023-06-29 11:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE `service_list` (
  `id` int(30) NOT NULL,
  `category_ids` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `fee` float NOT NULL DEFAULT 0,
  `delete_flag` tinyint(4) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`id`, `category_ids`, `name`, `description`, `fee`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, '1,2,5', 'Practical Driving Courses', '<div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"><div style=\"text-align: left;\"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 255);\"><i>Attendance and completion of a Practical Driving Course (PDC) is a requirement for anyone applying for new driver’s licenses,&nbsp;</i></font><i style=\"color: rgb(0, 0, 0); font-size: 1rem;\">or those who already have one but want to add a restriction code. Practical Driving Course (PDC) certificates to prove that you have completed</i><i style=\"color: rgb(0, 0, 0); font-size: 1rem;\">&nbsp;the required practical instruction given by LTO or any LTO-accredited driving schools.</i></div></div>', 0, 0, '2023-05-31 22:16:34', '2024-04-15 06:26:27'),
(2, '1,2,5', 'Special Tutorial Lesson', '<div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"><div style=\"\"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 255);\">The TDC or Theoretical Driving Course,&nbsp;</font><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">is required for new drivers and applicants who seek to have a driver’s license for the first time.</span><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">&nbsp;will be given a certificate after completing the 15-hour TDC lecture,&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">which is one of the requirements for obtaining a Student-Driver’s Permit.</span></div></div>', 6500, 0, '2023-05-31 22:29:56', '2024-04-15 06:26:32'),
(3, '1,2,5', 'Theoretical Driving Course', '<div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"><div style=\"\"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 255);\">The TDC or Theoretical Driving Course,</font><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\"> is required for new drivers and applicants who seek to have a driver’s license for the first time.</span><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\"> They will be given a certificate after completing the 15-hour TDC lecture, which is one of the requirements for obtaining a Student-Driver’s Permit.</span></div></div>', 1000, 0, '2023-05-31 22:28:46', '2024-04-15 06:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `refnum` varchar(100) NOT NULL,
  `instructorid` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `Student_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `userid`, `refnum`, `instructorid`, `date_created`, `Student_name`) VALUES
(1, '11', 'ALREX-2023110001', '4', '2023-11-07 14:44:27', 'Mikaela  Tano '),
(2, '15', 'ALREX-2024030001', '6', '2024-03-14 18:27:54', 'John Kurt Yadao Ibe '),
(3, '19', 'ALREX-2026030001', '4', '2026-03-08 22:32:41', 'Arasong  Masong '),
(4, '19', 'ALREX-2026030003', '6', '2026-03-11 21:25:32', 'Arasong  Masong '),
(5, '19', 'ALREX-2026030004', '7', '2026-03-15 11:02:35', 'Arasong  Masong ');

-- --------------------------------------------------------

--
-- Table structure for table `student_remarks`
--

CREATE TABLE `student_remarks` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `refnum` varchar(100) NOT NULL,
  `instructorid` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `Student_name` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `written_score` int(11) DEFAULT NULL,
  `written_result` varchar(100) NOT NULL DEFAULT '',
  `practical_result` varchar(100) NOT NULL DEFAULT '',
  `overall_status` varchar(100) NOT NULL DEFAULT '',
  `session_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_remarks`
--

INSERT INTO `student_remarks` (`id`, `userid`, `refnum`, `instructorid`, `date_created`, `Student_name`, `remarks`, `written_score`, `written_result`, `practical_result`, `overall_status`, `session_date`) VALUES
(1, '11', 'ALREX-2023110001', '4', '2023-11-07 14:46:43', 'Mikaela  Tano ', 'Passed', NULL, '', '', '', NULL),
(2, '15', 'ALREX-2024030001', '6', '2024-03-22 08:03:41', 'John Kurt Yadao Ibe ', 'Passed', NULL, '', '', '', NULL),
(3, '19', 'ALREX-2026030001', '4', '2026-03-08 22:35:38', 'Arasong  Masong ', 'Passed', 95, 'PASSED', 'PASSED', 'COMPLETED', '2026-03-10'),
(4, '20', 'ALREX-2026030002', '4', '2026-03-11 20:33:25', 'Theron B Brown ', 'PASSED', 85, 'PASSED', 'PASSED', 'COMPLETED', '2026-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'ALREX DRIVING SCHOOL  ONLINE BOOKING SYSTEM'),
(6, 'short_name', 'ALREX'),
(11, 'logo', 'uploads/ALREXLOGO.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1641262651.png'),
(15, 'content', 'Array'),
(16, 'email', 'alrex.sanildefonso@gmail.com'),
(17, 'contact', '0917-306-3735'),
(18, 'from_time', '11:00'),
(19, 'to_time', '21:30'),
(20, 'address', 'Brgy. Poblacion East, San Ildefonso, Ilocos Sur'),
(23, 'max_appointment', '15'),
(24, 'time_schedule', '8:00 AM - 5:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `requestor` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `userid` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `usertype`, `service`, `img`, `requestor`, `code`, `date_created`, `userid`, `status`) VALUES
(1, '2', 'Practical Driving Courses', 'upload/1699339350.png', 'Mikaela  Tano ', 'ALREX-2023110001', '2023-11-07 14:42:30', '1', 0),
(2, '2', 'Practical Driving Courses', 'upload/1710409528.png', 'John Kurt Yadao Ibe ', 'ALREX-2024030001', '2024-03-14 17:45:28', '3', 0),
(3, '2', 'Practical Driving Courses', 'upload/1773542815.jpg', 'Arasong  Masong ', 'ALREX-2026030001', '2026-03-15 10:46:55', '19', 0),
(4, '2', 'Practical Driving Courses', 'upload/1773543592.jpg', 'Arasong  Masong ', 'ALREX-2026030004', '2026-03-15 10:59:52', '19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `sufix` varchar(50) DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `dob` date DEFAULT (CURRENT_DATE),
  `sex` varchar(100) NOT NULL,
  `number` varchar(110) NOT NULL,
  `idnumber` varchar(18) NOT NULL,
  `age` int(11) NOT NULL,
  `civil` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `studentpermit` varchar(100) NOT NULL,
  `license` varchar(100) NOT NULL,
  `verifycode` varchar(100) NOT NULL,
  `reset_code` varchar(6) DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `sufix`, `username`, `password`, `avatar`, `last_login`, `type`, `status`, `date_added`, `date_updated`, `dob`, `sex`, `number`, `idnumber`, `age`, `civil`, `address`, `zip`, `email`, `studentpermit`, `license`, `verifycode`) VALUES
(1, 'Alrex', '', 'Admin', NULL, 'Admin', '$2y$10$Wy0oQq7/3Ol6Ch90yO7h.OxY9LnbUvddV5uPWo0oHikDLedyCOJMC', NULL, NULL, 1, 1, '2023-11-06 23:54:21', '2026-03-15 10:45:20', '2000-01-10', '', '', '', 24, '', '', '', '', '', '', ''),
(2, 'Sean', 'Yagin', 'Yadao', NULL, 'seanyagin3003@gmail.com', '3fab8b0071504634dc121d72df523834', '', '0000-00-00 00:00:00', 4, 1, '2023-11-07 07:08:22', '2023-11-07 07:09:18', '2001-03-30', 'Male', '09193943115', '', 22, 'Single', 'Dadalaquiten Norte, SInait, Ilocos Sur', '2733', '', '', '', '883181'),
(3, 'Jerome', 'Abinoja', 'Quitoras', NULL, 'emorejq15@gmail.com', 'e1cc795c8fe846b026e4eac58cd48185', '', '0000-00-00 00:00:00', 4, 1, '2023-11-07 10:58:00', '2023-11-07 10:58:50', '2005-05-01', 'Male', '09193346464', '', 18, 'Single', 'San Pedro, Vigan City, Ilocos Sur', '2700', '', '', '', '900012'),
(4, 'John', 'Ibe', 'Basuel', NULL, 'johnbasuel2@gmail.com', '6e0b7076126a29d5dfcbd54835387b7b', '', '0000-00-00 00:00:00', 2, 1, '2023-11-07 11:09:57', '2023-11-07 11:12:31', '1995-02-28', 'Male', '09193956898', '', 28, 'Single', 'Sta. Cruz, Badoc, Ilocos Norte', '2904', '', '', '', '409699'),
(5, 'Angel Mae', 'Divina', 'Salvador', NULL, 'angeld11@gmail.com', 'ab1dbd386662b62477b62087a389256a', '', '0000-00-00 00:00:00', 2, 1, '2023-11-07 11:14:53', '2023-11-07 11:15:45', '2000-11-11', 'Female', '09365054151', '', 22, 'Single', 'Magsaysay, SInait, Ilocos Sur', '2733', '', '', '', '251726'),
(6, 'Kurt', 'Igarta', 'Yagyagan', NULL, 'kurt03@gmail.com', '758cbcc41efee9907005390746604d33', '', '0000-00-00 00:00:00', 2, 1, '2023-11-07 11:19:39', '2023-11-07 11:20:05', '1980-03-24', 'Male', '09193495556', '', 43, 'Single', 'Tapao, Sinait, Ilocos SUr', '2733', '', '', '', '228337'),
(7, 'Allysa', 'Agustin', 'Rapada', NULL, 'allysa24@gmail.com', '60f87d467650b942160f5f146bbfe5a0', '', '0000-00-00 00:00:00', 2, 1, '2023-11-07 11:21:56', '2023-11-07 11:25:54', '1990-01-24', 'Female', '09954656266', '', 33, 'Married', 'San Vicente, Vigan City, Ilocos Sur', '2700', '', '', '', '683207'),
(8, 'Marie', 'Vita', 'Dela Cruz', NULL, 'mariedc@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00 00:00:00', 2, 1, '2023-11-07 11:21:56', '2023-11-07 11:28:35', '1995-01-24', 'Female', '09954656266', '', 28, 'Married', 'San Vicente, Vigan City, Ilocos Sur', '2700', '', '', '', '349607'),
(9, 'Alexander', 'Nina', 'Vita', NULL, 'alexvita04@gmail.com', 'b75bd008d5fecb1f50cf026532e8ae67', '', '0000-00-00 00:00:00', 4, 1, '2023-11-07 13:17:45', '2023-11-07 13:18:33', '2000-04-12', 'Male', '09193956445', '', 23, 'Single', 'Banuar, San Juan, Ilocos Sur', '2731', '', '', '', '662777'),
(10, 'Christian', 'Yagin ', 'Yadao', NULL, 'christian05@gmail.com', '6e8d1b79c6b7bd254f01708316bfe43a', '', '0000-00-00 00:00:00', 4, 1, '2023-11-07 13:29:09', '2023-11-07 13:30:41', '1998-02-05', 'Male', '09193354454', '', 25, 'Single', 'Dadalaquiten Norte, Sinait, Ilocos Sur', '2733', '', '', '', '416580'),
(11, 'Mikaela', 'Aspiras', 'Tano', NULL, 'mikaela@gmail.com', 'e471a891c22fb1b5b722f57bed71de32', '', '0000-00-00 00:00:00', 4, 1, '2023-11-07 13:33:53', '2023-11-07 13:35:07', '2001-08-15', 'Female', '09192959249', '', 22, 'Single', 'Lagatit, Santo Domingo, Ilocos Sur', '2729', '', '', '', '875763'),
(12, 'Shaine Ash', 'Raza', 'Villoria', NULL, 'sheyn@gmail.com', '00f7225b7be554fea9883fe99fd628df', '', '0000-00-00 00:00:00', 4, 0, '2023-11-07 13:37:32', '0000-00-00 00:00:00', '2000-01-10', 'Female', '09194653435', '', 23, 'Single', 'Cabaruan, Magsingal, Ilocos Sur', '2730', '', '', '', '894768'),
(13, 'Dodie', 'Ibarra', 'Yasana', NULL, 'dodie05@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00 00:00:00', 4, 1, '2023-12-08 14:56:19', '2023-12-08 14:57:06', '2003-05-12', 'Male', '09195659554', '', 20, 'Single', 'Barikir, Sinait, Ilocos Sur', '2733', '', '', '', '464750'),
(14, 'Rye Cedric', 'Basuel', 'Ibe', NULL, 'ryecedric@gmail.com', 'fa35c346399e7c7cc7f4651084fb9edc', '', '0000-00-00 00:00:00', 4, 1, '2024-03-14 15:25:43', '2024-03-14 15:28:23', '2000-12-31', 'Male', '09089555128', '', 23, 'Single', 'Dadalaquiten Sur, Sinait, Ilocos Sur', '2733', '', '', '', '929746'),
(15, 'John Kurt', 'Yadao', 'Ibe', NULL, 'johnkurt@gmail.com', 'af8a9fc1b969834297d43952a79c1b85', '', '0000-00-00 00:00:00', 4, 1, '2024-03-14 15:43:56', '2024-03-14 15:46:56', '1995-01-06', 'Male', '09193958448', '', 29, 'Single', 'Baclig, Cabugao, Ilocos Sur ', '2732', '', '', '', '303081'),
(16, 'Xen Zeus', 'Basuel', 'Yapit', NULL, 'xenzeus556@gmail.com', 'adbd63b129b28bf0c3ed1765a3578c71', '', '0000-00-00 00:00:00', 4, 1, '2024-03-19 16:52:57', '2024-03-19 16:53:56', '2001-12-05', 'Male', '09194431315', '', 22, 'Single', 'Dadalaquiten Norte, Sinait, Ilocos Sur', '2733', '', '', '', '800342'),
(17, 'Lerin', 'Yadao', 'Ibe', NULL, 'lerinibe@gmail.com', 'e6b87e00d1244e6fb589b90269d2b9cd', '', '0000-00-00 00:00:00', 4, 1, '2024-04-12 10:14:15', '2024-04-12 10:16:59', '2007-05-28', 'Male', '09193484231', '', 16, 'Single', 'Pug-os, cabugao, ilocos sur', '2732', '', '', '', '505139'),
(18, 'Jhon Lloyd', 'Basuel', 'Ibarra', NULL, 'john03@gmail.com', 'b4b8d63fd30c074d352fc9c1dfd54df6', '', '0000-00-00 00:00:00', 4, 1, '2024-04-15 09:19:38', '2024-04-15 09:20:24', '2000-03-25', 'Male', '09193841230', '', 24, 'Single', ', sinait, ilocos sur', '2733', '', '', '', '183265'),
(19, 'Arasong', '', 'Masong', NULL, 'arasongmasong@gmail.com', '$2y$10$yl1aAFVfshxHf4Zx6MBa4.vpRYGfuA4qw/fqHiWYMx3xizRxZIR8W', '', '0000-00-00 00:00:00', 4, 1, '2026-03-08 22:29:44', '2026-03-15 10:46:11', '2003-03-21', 'Male', '0999999999', '', 22, 'Single', 'Aluling, Cervantes, Ilocos Sur', '2718', '', '', '', '910390'),
(20, 'theron', 'b', 'brown', '', 'theronbrown177@gmail.com', '44c7ba312a22b0b4441a0808582d609e', '', '0000-00-00 00:00:00', 4, 1, '2026-03-11 20:31:02', '2026-03-11 20:48:01', '2001-07-27', 'Male', '096325623512', '', 24, 'Single', 'Lanipao, Narvacan, Ilocos Sur', '2704', '', '12345', '', '355860');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthcare`
--
ALTER TABLE `healthcare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_remarks`
--
ALTER TABLE `student_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_list`
--
ALTER TABLE `appointment_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `healthcare`
--
ALTER TABLE `healthcare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_remarks`
--
ALTER TABLE `student_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD CONSTRAINT `appointment_list_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
