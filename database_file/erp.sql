-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2020 at 12:58 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

DROP TABLE IF EXISTS `accountant`;
CREATE TABLE IF NOT EXISTS `accountant` (
  `accountant_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`accountant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`accountant_id`, `name`, `date_of_birth`, `place_of_birth`, `id_card`, `gender`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `city`, `email`, `password`, `address`, `state`, `qualification`, `nationality`, `biography`, `file_name`, `phone`, `mobile_no`, `facebook`, `twitter`, `google_plus`, `linkedin`) VALUES
(14, 'Accountant Name', 1577210400, 'Lagos', 'International passport', 'Male', 'English', 'Single', 'Christianity', 'B+', 'City', 'account@account.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'This is the address of the accountant', 'Lagos', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', 'invoice.docx', '+2348161662924', '+2348161662924', 'facebook', 'twitter', 'googleplus', 'linkedin');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `phone`, `address`, `password`, `status`) VALUES
(1, 'Administrator', 'admin@admin.com', '09016101298', 'Udemy Address', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(2, 'Administrator', 'admin@admin.com', '23', 'Address here', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_code` varchar(200) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `diagnose` longtext NOT NULL,
  `date_created` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `appointment_code`, `patient_id`, `department_id`, `doctor_id`, `schedule_id`, `diagnose`, `date_created`, `status`) VALUES
(2, 'RCM7OPRPNX', 5, 1, 15, 4, '&lt;p&gt;Fever and Flu&lt;/p&gt;', 1583776800, 1);

-- --------------------------------------------------------

--
-- Table structure for table `assign_bed`
--

DROP TABLE IF EXISTS `assign_bed`;
CREATE TABLE IF NOT EXISTS `assign_bed` (
  `assign_bed_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `assign_date` int(11) NOT NULL,
  `discharge_date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`assign_bed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_bed`
--

INSERT INTO `assign_bed` (`assign_bed_id`, `patient_id`, `bed_id`, `department_id`, `assign_date`, `discharge_date`, `status`, `description`) VALUES
(2, 5, 2, 1, 1583776800, 1584640800, 1, 'Description information goes here');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
CREATE TABLE IF NOT EXISTS `bed` (
  `bed_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bed_size` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bed_price` int(11) NOT NULL,
  `bed_ward_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`bed_id`, `name`, `bed_size`, `bed_price`, `bed_ward_id`, `department_id`, `status`, `description`) VALUES
(2, 'Emergency Bed.', '4 Inches', 1500, 3, 3, 1, 'Emergency Bed.');

-- --------------------------------------------------------

--
-- Table structure for table `bed_ward`
--

DROP TABLE IF EXISTS `bed_ward`;
CREATE TABLE IF NOT EXISTS `bed_ward` (
  `bed_ward_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`bed_ward_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed_ward`
--

INSERT INTO `bed_ward` (`bed_ward_id`, `name`, `description`, `department_id`) VALUES
(3, 'Ward Two', 'Ward Two', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

DROP TABLE IF EXISTS `blood`;
CREATE TABLE IF NOT EXISTS `blood` (
  `blood_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`blood_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_id`, `name`, `quantity`, `status`) VALUES
(1, 'AA', 20, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('bg2a37v204vsf2obg4kb0prqt9dnibe1', '127.0.0.1', 1587815823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538373831353832333b),
('jcnf8jn4e7tchaf9sgk8bddkuicdf0tp', '127.0.0.1', 1587508048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538373530383034383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('v8d2oj9u7ikmhj1n1mqf20fef0f0sh43', '127.0.0.1', 1587508049, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538373530383034393b);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `name`, `description`) VALUES
(1, 'Hepathology', 'This is the department for the Hepatic patient'),
(3, 'Histology', 'This is for histology department');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `name`, `date_of_birth`, `place_of_birth`, `id_card`, `gender`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `city`, `email`, `password`, `address`, `state`, `qualification`, `nationality`, `biography`, `file_name`, `phone`, `mobile_no`, `department_id`, `facebook`, `twitter`, `google_plus`, `linkedin`) VALUES
(14, 'Brown Doctor', 1577210400, 'Lagos', 'International passport', 'Male', 'English', 'Single', 'Christianity', 'B+', 'City', 'doctor@doctor.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'This is the doctor address', 'Lagos', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', 'invoice.docx', '+2348161662924', '+2348161662924', 1, 'facebook', 'twitter', 'googleplus', 'linkedin'),
(15, 'Dr. Morris Whyte', 1583690400, 'Japan', 'International passport', 'Female', 'English', 'Single', 'Chritianity', 'B+', 'North Toronto', 'doc@doc.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Address', 'Toronto', 'PhD', 'Canadian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '', '09066021052', '+2348161662924', 1, 'facebook', 'twitter', 'googleplus', 'linkedin');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_donation` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `name`, `sex`, `age`, `email`, `phone`, `address`, `blood_group`, `last_donation`) VALUES
(1, 'Udemy Donor.', 'Female', '22', 'donor@donor.com', '+912345667', 'Address.', 'O+', '2020-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

DROP TABLE IF EXISTS `expense_category`;
CREATE TABLE IF NOT EXISTS `expense_category` (
  `expense_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`expense_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`expense_category_id`, `name`) VALUES
(1, 'Bed Purchase'),
(3, 'Drug Purchase');

-- --------------------------------------------------------

--
-- Table structure for table `general_message`
--

DROP TABLE IF EXISTS `general_message`;
CREATE TABLE IF NOT EXISTS `general_message` (
  `general_message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`general_message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `invoice_entries` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `due_date` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `vat_percentage` int(11) NOT NULL,
  `discount` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_number`, `title`, `department_id`, `patient_id`, `invoice_entries`, `date_created`, `due_date`, `status`, `vat_percentage`, `discount`) VALUES
(1, 'DTD998USNE', 'Patient Payment', 1, 5, '[{\"title\":\"Drugs\",\"amount\":\"100\"},{\"title\":\"Food\",\"amount\":\"200\"},{\"title\":\"Bed Usage\",\"amount\":\"6000\"}]', '1586541600', '1586714400', 1, 2, '5');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorist`
--

DROP TABLE IF EXISTS `laboratorist`;
CREATE TABLE IF NOT EXISTS `laboratorist` (
  `laboratorist_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`laboratorist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratorist`
--

INSERT INTO `laboratorist` (`laboratorist_id`, `name`, `date_of_birth`, `place_of_birth`, `id_card`, `gender`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `city`, `email`, `password`, `address`, `state`, `qualification`, `nationality`, `biography`, `file_name`, `phone`, `mobile_no`, `facebook`, `twitter`, `google_plus`, `linkedin`) VALUES
(14, 'Laboratorist Name', 1577210400, 'Lagos', 'International passport', 'Male', 'English', 'Single', 'Christianity', 'B+', 'City', 'laboratorist@laboratorist.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'This is the address', 'Lagos', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', 'invoice.docx', '+2348161662924', '+2348161662924', 'facebook', 'twitter', 'googleplus', 'linkedin');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `phrase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci,
  `arabic` longtext COLLATE utf8_unicode_ci,
  `french` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`phrase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `arabic`, `french`) VALUES
(1, 'dashboard', NULL, 'يشسالاخشقي', NULL),
(2, 'Manage Department', NULL, 'ةشىشلث يثحشقفةثىف', NULL),
(3, 'Human Resources', NULL, 'أعةشى ٌثسخعقؤثس', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_list`
--

DROP TABLE IF EXISTS `language_list`;
CREATE TABLE IF NOT EXISTS `language_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_list`
--

INSERT INTO `language_list` (`id`, `name`) VALUES
(1, 'english'),
(2, 'arabic'),
(3, 'french');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `med_category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_added` int(11) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `name`, `med_category_id`, `price`, `quantity`, `company`, `status`, `description`, `date_added`) VALUES
(2, 'Lumathem', 1, 500, 1000, 'Udemy Sheg', 1, 'For treating malaria', 1586800800);

-- --------------------------------------------------------

--
-- Table structure for table `med_category`
--

DROP TABLE IF EXISTS `med_category`;
CREATE TABLE IF NOT EXISTS `med_category` (
  `med_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`med_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_category`
--

INSERT INTO `med_category` (`med_category_id`, `name`, `description`) VALUES
(1, 'Malaria Drug', 'Malaria Drug'),
(2, 'Pain Killer', 'Pain Killer');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

DROP TABLE IF EXISTS `noticeboard`;
CREATE TABLE IF NOT EXISTS `noticeboard` (
  `noticeboard_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`noticeboard_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`noticeboard_id`, `title`, `start_date`, `end_date`, `description`, `location`) VALUES
(1, 'Annual Meeting', 1586714400, 1586973600, 'There is going to be General Annual Meeting next week', 'Ontario');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

DROP TABLE IF EXISTS `nurse`;
CREATE TABLE IF NOT EXISTS `nurse` (
  `nurse_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nurse_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `name`, `date_of_birth`, `place_of_birth`, `id_card`, `gender`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `city`, `email`, `password`, `address`, `state`, `qualification`, `nationality`, `biography`, `file_name`, `phone`, `mobile_no`, `department_id`, `facebook`, `twitter`, `google_plus`, `linkedin`) VALUES
(14, 'nurse Name', 1577210400, 'Lagos', 'International passport', 'Male', 'English', 'Single', 'Christianity', 'B+', 'City', 'nurse@nurse.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'This is the address', 'Lagos', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', 'invoice.docx', '+2348161662924', '+2348161662924', 1, 'facebook', 'twitter', 'googleplus', 'linkedin');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `idcard` longtext COLLATE utf8_unicode_ci NOT NULL,
  `issue_at` longtext COLLATE utf8_unicode_ci NOT NULL,
  `issue_on` longtext COLLATE utf8_unicode_ci NOT NULL,
  `occupation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` longtext COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `place_of_birth` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date_of_last_admission` longtext COLLATE utf8_unicode_ci NOT NULL,
  `diagnose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `discharge_condition` longtext COLLATE utf8_unicode_ci NOT NULL,
  `account_opening_timestamp` int(11) NOT NULL,
  `file_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `pid`, `name`, `email`, `idcard`, `issue_at`, `issue_on`, `occupation`, `mother_tongue`, `marital_status`, `religion`, `password`, `address`, `city`, `state`, `nationality`, `phone`, `mobile_no`, `sex`, `birth_date`, `age`, `place_of_birth`, `blood_group`, `date_of_last_admission`, `diagnose`, `department_id`, `discharge_condition`, `account_opening_timestamp`, `file_name`) VALUES
(5, 'RKB3QHHY91', 'Udemy Patient', 'patient@patient.com', 'National', 'lagost', '2011-08-19', 'Software Developer', 'English', 'Married', 'Islam', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'This is the address', 'City', 'State', 'Canadian', '+912345667', '+2348161662924', 'Male', '2020-02-09', 22, 'Lagos', 'A+', '2011-08-19', 'diagnose', 1, '&lt;p&gt;Discharge condition&lt;/p&gt;', 0, 'invoice.docx');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `invoice_id`, `title`, `payment_type`, `expense_category_id`, `payment_method`, `amount`, `description`, `timestamp`) VALUES
(3, 0, 'Nurse Uniform Purchase', 'expense', 1, 1, 1000, 'Nurse Uniform Purchase<br>', 1586368800),
(4, 1, 'Bed Purchase', 'income', 1, 2, 5000, 'Bed Purchase<br>', 1586368800),
(5, 0, 'Purchase of utilities', 'expense', 3, 2, 1000, 'Purchase of utilities<br>', 1586196000);

-- --------------------------------------------------------

--
-- Table structure for table `phamarcist`
--

DROP TABLE IF EXISTS `phamarcist`;
CREATE TABLE IF NOT EXISTS `phamarcist` (
  `phamarcist_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`phamarcist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phamarcist`
--

INSERT INTO `phamarcist` (`phamarcist_id`, `name`, `date_of_birth`, `place_of_birth`, `id_card`, `gender`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `city`, `email`, `password`, `address`, `state`, `qualification`, `nationality`, `biography`, `file_name`, `phone`, `mobile_no`, `facebook`, `twitter`, `google_plus`, `linkedin`) VALUES
(14, 'Phamarcist Name', 1577210400, 'Lagos', 'International passport', 'Male', 'English', 'Single', 'Christianity', 'B+', 'City', 'phamarcist@phamarcist.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'This is the address', 'Lagos', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', 'invoice.docx', '+2348161662924', '+2348161662924', 'facebook', 'twitter', 'googleplus', 'linkedinn');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `prescription_id` int(11) NOT NULL AUTO_INCREMENT,
  `prescription_code` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `weight` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_pressure` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `height` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prescription_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `visiting_fee` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `case_history` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prescription_entries` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`prescription_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `prescription_code`, `name`, `department_id`, `doctor_id`, `patient_id`, `weight`, `blood_pressure`, `height`, `prescription_type`, `visiting_fee`, `case_history`, `prescription_entries`, `date_created`) VALUES
(11, '06TJ7NL4R0', 'Hey Prescribe', 1, 14, 5, '30', '90', '6', '1', '1000', '<p>Hey case history</p>', '[{\"diagnose\":\"Malaria\",\"medicine_name\":\"Paracetamol\",\"medicine_type\":\"Pain Relieve\",\"usage_prescription\":\"1-1-1\",\"usage_days\":\"5\"}]', 1586714400);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

DROP TABLE IF EXISTS `receptionist`;
CREATE TABLE IF NOT EXISTS `receptionist` (
  `receptionist_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`receptionist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptionist_id`, `name`, `date_of_birth`, `place_of_birth`, `id_card`, `gender`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `city`, `email`, `password`, `address`, `state`, `qualification`, `nationality`, `biography`, `file_name`, `phone`, `mobile_no`, `facebook`, `twitter`, `google_plus`, `linkedin`) VALUES
(14, 'Receptionist Name', 1577210400, 'Lagos', 'International passport', 'Male', 'English', 'Single', 'Christianity', 'B+', 'City', 'receptionist@receptionist.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'This is the address', 'Lagos', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', 'invoice.docx', '+2348161662924', '+2348161662924', 'facebook', 'twitter', 'googleplus', 'linkedin');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Hospital Management System'),
(2, 'system_title', 'Hospital Management System'),
(3, 'address', '546787, Kertz shopping complext, Silicon Valley, United State of America, New York city.'),
(4, 'phone', '+1564783934'),
(6, 'currency', 'USD'),
(7, 'system_email', 'optimumproblemsolver@gmail.com'),
(11, 'language', 'english'),
(12, 'text_align', 'left-to-right'),
(16, 'skin_colour', 'purple'),
(21, 'session', '2019-2020'),
(22, 'footer', 'Developed by Optimum Linkup Computers. All Right Reserved'),
(116, 'paypal_email', 'clone@paypalemail.com'),
(117, 'abb', 'DEVINEHMS');

-- --------------------------------------------------------

--
-- Table structure for table `shedule`
--

DROP TABLE IF EXISTS `shedule`;
CREATE TABLE IF NOT EXISTS `shedule` (
  `shedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `avail_day` varbinary(100) NOT NULL,
  `start_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `per_patient_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(100) NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`shedule_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shedule`
--

INSERT INTO `shedule` (`shedule_id`, `doctor_id`, `avail_day`, `start_time`, `end_time`, `per_patient_time`, `department_id`, `status`) VALUES
(3, 14, 0x31353837343932303030, '02:30', '04:30', '00:05', 1, '1'),
(4, 15, 0x31353833363930343030, '03:30', '05:00', '00:10', 1, '1'),
(5, 14, 0x31353836373134343030, '12:30', '02:30', '00:10', 1, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
