-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 02:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `ay`
--

CREATE TABLE `ay` (
  `AY_ID` int(11) NOT NULL,
  `ACADYR` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CLASS_ID` int(11) NOT NULL,
  `CLASS_CODE` varchar(30) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  `SYID` int(11) NOT NULL,
  `AY` varchar(11) NOT NULL,
  `DAY` varchar(20) NOT NULL,
  `C_TIME` varchar(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `ROOM` varchar(30) NOT NULL DEFAULT 'NONE',
  `SECTION` varchar(30) NOT NULL DEFAULT 'NONE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CLASS_ID`, `CLASS_CODE`, `SUBJ_ID`, `INST_ID`, `SYID`, `AY`, `DAY`, `C_TIME`, `IDNO`, `ROOM`, `SECTION`) VALUES
(18, 'CC 101', 483, 8, 0, '2019-2020', 'MWF', '7:30-8:30', 0, '401', 'E2019'),
(19, 'CC 102', 484, 8, 0, '2019-2020', 'NONE', 'NONE', 0, 'NONE', 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_LEVEL` int(11) NOT NULL DEFAULT '1',
  `COURSE_MAJOR` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_DESC` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_LEVEL`, `COURSE_MAJOR`, `COURSE_DESC`, `DEPT_ID`) VALUES
(57, '1st Year - 1st Semester', 0, '', '1st Year - 1st Semester', 9),
(58, '2nd Year - 1st Semester', 0, '', '2nd Year - 1st Semester', 9),
(59, '3rd Year - 1st Semester', 0, '', '3rd Year - 1st Semester', 9),
(60, '4th Year - 1st Semester', 0, '', '4th Year - 1st Semester', 9),
(61, '2nd Year - 2nd Semester', 0, '', '2nd Year - 2nd Semester', 9),
(62, '1st Year - 2nd Semester', 0, '', '1st Year - 2nd Semester', 9),
(63, '3rd Year - 2nd Semester', 0, '', '3rd Year - 2nd Semester', 9),
(64, '4th Year - 2nd Semester', 0, '', '4th Year - 2nd Semester', 9);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `DEPARTMENT_DESC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPT_ID`, `DEPARTMENT_NAME`, `DEPARTMENT_DESC`) VALUES
(3, 'CICT', 'College of Communication and Information Technology'),
(4, 'CBM', 'College of Business Mangament'),
(5, 'CCJ', 'College of Criminal Justice'),
(6, 'CET', 'College of Engineering and Technology'),
(7, 'CHTM', 'College of Hospitality and Tourism Mangement'),
(8, 'CAS', 'College of Arts and Science'),
(9, 'CED', 'College of Education');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  `SYID` int(30) NOT NULL,
  `FIRST` longtext NOT NULL,
  `SECOND` varchar(11) NOT NULL,
  `THIRD` int(11) NOT NULL,
  `FOURTH` int(11) NOT NULL,
  `AVE` varchar(100) NOT NULL,
  `DAY` varchar(30) NOT NULL,
  `G_TIME` time NOT NULL,
  `ROOM` varchar(30) NOT NULL,
  `REMARKS` text NOT NULL,
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GRADE_ID`, `IDNO`, `SUBJ_ID`, `INST_ID`, `SYID`, `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `DAY`, `G_TIME`, `ROOM`, `REMARKS`, `COMMENT`) VALUES
(49, 1900679, 482, 0, 13, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(50, 1900742, 482, 0, 15, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(51, 1900742, 483, 8, 19, '1.75', '1.00', 0, 0, '1.00', 'NONE', '00:00:00', '', 'Passed', ''),
(52, 1900742, 484, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(53, 1900742, 485, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(54, 1900742, 486, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(55, 1900742, 487, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(56, 1900742, 488, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(57, 1900742, 489, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(58, 1900742, 490, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(59, 1900742, 491, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(60, 1900742, 500, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(61, 1900742, 492, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(62, 1900742, 493, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(63, 1900742, 494, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(64, 1900742, 495, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(65, 1900742, 496, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(66, 1900742, 497, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(67, 1900742, 498, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(68, 1900742, 499, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(69, 1900742, 501, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(70, 1900742, 502, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(71, 1900742, 503, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(72, 1900742, 504, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(73, 1900742, 505, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(74, 1900742, 506, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(75, 1900742, 507, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(76, 1900742, 508, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(77, 1900742, 509, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(78, 1900742, 510, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(79, 1900742, 511, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(80, 1900742, 512, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(81, 1900742, 513, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(82, 1900742, 514, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(83, 1900742, 515, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(84, 1900742, 516, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(85, 1900742, 517, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(86, 1900742, 518, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', '');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `INST_ID` int(30) NOT NULL,
  `INST_FULLNAME` varchar(255) NOT NULL,
  `INST_ADDRESS` varchar(255) NOT NULL,
  `INST_SEX` varchar(20) NOT NULL DEFAULT 'Male',
  `INST_STATUS` varchar(20) NOT NULL DEFAULT 'Single',
  `SPECIALIZATION` text NOT NULL,
  `INST_EMAIL` varchar(255) NOT NULL,
  `EMPLOYMENT_STATUS` varchar(40) NOT NULL DEFAULT 'Probationary'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`INST_ID`, `INST_FULLNAME`, `INST_ADDRESS`, `INST_SEX`, `INST_STATUS`, `SPECIALIZATION`, `INST_EMAIL`, `EMPLOYMENT_STATUS`) VALUES
(8, 'Sarah', '120P MLQ', 'M', 'Single', 'IT', 'sarahroselimsison@gmail.com', 'Full time');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `YR_ID` int(11) NOT NULL,
  `LEVEL` varchar(30) NOT NULL,
  `LEVEL_DESCRIPTION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `MAJOR_ID` int(11) NOT NULL,
  `MAJOR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `PHOTO_ID` int(11) NOT NULL,
  `FILENAME` text NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  `SIZE` int(30) NOT NULL,
  `CAPTION` varchar(255) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `PRIMARY` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ROOM_ID` int(11) NOT NULL,
  `ROOM_NAME` varchar(30) NOT NULL,
  `ROOM_DESC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ROOM_ID`, `ROOM_NAME`, `ROOM_DESC`) VALUES
(5, '401', '4th Floor'),
(6, '402', '4th Floor'),
(7, '403', '4th Floor'),
(8, '404', '4th Floor'),
(9, '405', '4th Floor'),
(10, '406', '4th Floor'),
(11, '407', '4th Floor'),
(12, '408', '4th Floor'),
(13, '409', '4th Floor'),
(14, '410', '4th Floor'),
(15, '411', '4th Floor'),
(16, '412', '4th Floor'),
(17, '413', '4th Floor'),
(18, '414', '4th Floor'),
(19, '415', '4th Floor'),
(20, '416', '4th Floor'),
(21, '417', '4th Floor'),
(22, '418', '4th Floor'),
(23, '419', '4th Floor'),
(24, '420', '4th Floor');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyr`
--

CREATE TABLE `schoolyr` (
  `SYID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `IDNO` int(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL DEFAULT 'ENROLLED',
  `DATE_RESERVED` datetime NOT NULL,
  `DATE_ENROLLED` datetime NOT NULL,
  `STATUS` varchar(30) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyr`
--

INSERT INTO `schoolyr` (`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`) VALUES
(13, '2019-2020', 'First', 57, 1900679, 'ENROLLED', '2022-11-15 15:12:07', '0000-00-00 00:00:00', 'New'),
(19, '2019-2020', 'First', 57, 1900742, 'ENROLLED', '2022-11-15 16:17:40', '0000-00-00 00:00:00', 'Regular'),
(20, '2019-2020', 'First', 62, 1900742, 'ENROLLED', '2022-11-15 16:43:39', '0000-00-00 00:00:00', 'Regular'),
(22, '2020-2021', 'First', 58, 1900742, 'ENROLLED', '2022-11-15 16:45:07', '0000-00-00 00:00:00', 'Regular'),
(31, '2020-2021', 'First', 61, 1900742, 'ENROLLED', '2022-11-15 16:47:58', '0000-00-00 00:00:00', 'Regular'),
(32, '2021-2022', 'First', 59, 1900742, 'ENROLLED', '2022-11-15 16:48:05', '0000-00-00 00:00:00', 'Regular'),
(33, '2021-2022', 'First', 63, 1900742, 'ENROLLED', '2022-11-15 16:48:13', '0000-00-00 00:00:00', 'Regular'),
(34, '2022-2023', 'First', 60, 1900742, 'ENROLLED', '2022-11-15 16:48:25', '0000-00-00 00:00:00', 'Regular'),
(35, '2022-2023', 'First', 64, 1900742, 'ENROLLED', '2022-11-15 16:48:35', '0000-00-00 00:00:00', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `SEM_ID` int(11) NOT NULL,
  `SEM` varchar(15) NOT NULL DEFAULT 'First'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`) VALUES
(483, 'CC 101', 'Introduction to Computing (HTML/CSS)', 3, '', 57, '2017-2018', 'First'),
(484, 'CC 102', 'Fundamentals of Programming (JAVA)', 3, '', 57, '2019-2020', 'First'),
(485, 'DS 101', 'Discrete Structures 1', 3, '', 57, '2019-2020', 'First'),
(486, 'AL 101', 'Algorithms and Complexity', 3, '', 57, '2019-2020', 'First'),
(487, 'GE 1', 'Understanding the Self', 3, '', 57, '2019-2020', 'First'),
(488, 'GE 2', 'Readings in Philippine History', 3, '', 57, '2019-2020', 'First'),
(489, 'GE 10', 'Pagbasa at Pagsulat sa Iba''t Ibang Disiplina', 3, '', 57, '2019-2020', 'First'),
(490, 'PE 1', 'Physical Education 1', 2, '', 57, '2017-2018', 'First'),
(491, 'NSTP 1', 'CWTS/ROTC 1', 2, '', 57, '2017-2018', 'First'),
(492, 'CC 103', 'Intermediate Programming (Adv. Java)', 3, '', 62, '2017-2018', 'First'),
(493, 'CC 104', 'Data Structure and Algorithm', 3, '', 62, '2017-2018', 'First'),
(494, 'CC 105', 'Information Management (DB/SQL)', 3, '', 62, '2017-2018', 'First'),
(495, 'DS 102', 'Discrete Structures 2', 3, '', 62, '2017-2018', 'First'),
(496, 'GE 3', 'The Contemporary World', 3, '', 62, '2017-2018', 'First'),
(497, 'GE 4', 'Mathematics in the Modern World', 3, '', 62, '2017-2018', 'First'),
(498, 'PE 2', 'Physical Education 2', 3, '', 62, '2017-2018', 'First'),
(499, 'GE 11', 'Panitikang Filipino', 3, '', 62, '2017-2018', 'First'),
(500, 'NSTP 2', 'CWTS/ROTC 2', 2, '', 62, '2017-2018', 'First'),
(501, 'CC 106', 'Application Development and Emerging Technologies', 3, '', 58, '2019-2020', 'First'),
(502, 'SDF 104', 'Object Oriented Programming 1 (VB.net)', 3, '', 58, '2019-2020', 'First'),
(503, 'AL 102', 'Automata Theory and Formal Languages', 3, '', 58, '2019-2020', 'First'),
(504, 'NC 101', 'Networks and Communication', 3, '', 58, '2019-2020', 'First'),
(505, 'GE 5', 'Purposive Communication', 3, '', 58, '2019-2020', 'First'),
(506, 'GE 6', 'Art Appreciation', 3, '', 58, '2019-2020', 'First'),
(507, 'GEE 22', 'Philippine Indigenous Communities', 3, '', 58, '2019-2020', 'First'),
(508, 'IT 100', 'Internet and Advanced Office Productivity', 3, '', 58, '2019-2020', 'First'),
(509, 'PE 3', 'Physical Education 3', 2, '', 58, '2019-2020', 'First'),
(510, 'AR 101', 'Architecture and Organization', 3, '', 61, '2017-2018', 'First'),
(511, 'OS 101', 'Operational System', 3, '', 61, '2019-2020', 'First'),
(512, 'PL 101', 'Programing Languages', 3, '', 61, '2019-2020', 'First'),
(513, 'HCI 101', 'Human Computer Interaction', 3, '', 61, '2019-2020', 'First'),
(514, 'AL 103', 'Logic Design', 3, '', 61, '2019-2020', 'First'),
(515, 'GE 7', 'Science, Technology and Society', 3, '', 61, '2019-2020', 'First'),
(516, 'GE 8', 'Ethics', 3, '', 61, '2019-2020', 'First'),
(517, 'GEE 32', 'Philippine Popular Culture', 3, '', 61, '2019-2020', 'First'),
(518, 'PE 4', 'Physical Education 4', 3, '', 61, '2019-2020', 'First'),
(519, 'IAS 101', 'Information Assurance and Security', 3, '', 59, '2019-2020', 'First'),
(520, 'SE 101', 'Software Engineering 1', 3, '', 59, '2019-2020', 'First'),
(521, 'SP 101', 'Social Issues and Professional Practice', 3, '', 59, '2019-2020', 'First'),
(522, 'ELEC 1', 'Computational Science', 3, '', 59, '2019-2020', 'First'),
(523, 'CC 107', 'Mobile Programming', 3, '', 59, '2019-2020', 'First'),
(524, 'DS 103', 'Statistics with SPSS', 3, '', 59, '2019-2020', 'First'),
(525, 'GE 9', 'Rizal''s Life and Works', 3, '', 59, '2017-2018', 'First'),
(526, 'IT 101', 'Micro Controller Programming', 3, '', 59, '2019-2020', 'First'),
(527, 'GEE 13', 'Human Reproduction', 3, '', 59, '2019-2020', 'First'),
(528, 'ELEC 2', 'Intelligent System', 3, '', 63, '2019-2020', 'First'),
(529, 'SE 102', 'Software Engineering 2', 3, '', 63, '2019-2020', 'First'),
(530, 'THS 101', 'CS Thesis Writing 1', 3, '', 63, '2019-2020', 'First'),
(531, 'ELEC 3', 'Parallel and Distributed Computing', 3, '', 63, '2019-2020', 'First'),
(532, 'CC 108', 'Content Management System', 3, '', 63, '2019-2020', 'First'),
(533, 'OS 102', 'Open Source Operating System', 3, '', 63, '2019-2020', 'First'),
(534, 'IT 102', 'Social Media and Presentation', 3, '', 63, '2019-2020', 'First'),
(535, 'THS 102', 'CS Thesis Writing 2', 6, '', 60, '2019-2020', 'First'),
(536, 'ELEC 4', 'Graphics and Visual Computing', 3, '', 60, '2019-2020', 'First'),
(537, 'ELEC 5', 'System Fundamentals', 3, '', 60, '2019-2020', 'First'),
(538, 'SDF 105', 'Object Oriented Programming 2 (C#)', 3, '', 60, '2019-2020', 'First'),
(539, 'HCI 102', 'Technopreneurship/ E-Commerce', 6, '', 60, '2019-2020', 'First'),
(540, 'PRC 101', 'PRACTICUM (OJT)', 3, '', 64, '2019-2020', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequirements`
--

CREATE TABLE `tblrequirements` (
  `REQ_ID` int(30) NOT NULL,
  `NSO` varchar(5) NOT NULL DEFAULT 'no',
  `BAPTISMAL` varchar(5) NOT NULL DEFAULT 'no',
  `ENTRANCE_TEST_RESULT` varchar(5) NOT NULL DEFAULT 'no',
  `MARRIAGE_CONTRACT` varchar(5) NOT NULL DEFAULT 'no',
  `CERTIFICATE_OF_TRANSFER` varchar(5) NOT NULL DEFAULT 'no',
  `IDNO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrequirements`
--

INSERT INTO `tblrequirements` (`REQ_ID`, `NSO`, `BAPTISMAL`, `ENTRANCE_TEST_RESULT`, `MARRIAGE_CONTRACT`, `CERTIFICATE_OF_TRANSFER`, `IDNO`) VALUES
(1, 'No', 'No', 'No', 'No', 'No', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL,
  `FATHER` varchar(255) NOT NULL,
  `FATHER_OCCU` varchar(255) NOT NULL,
  `MOTHER` varchar(255) NOT NULL,
  `MOTHER_OCCU` varchar(255) NOT NULL,
  `BOARDING` varchar(5) NOT NULL DEFAULT 'no',
  `WITH_FAMILY` varchar(5) NOT NULL DEFAULT 'yes',
  `GUARDIAN` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL,
  `OTHER_PERSON_SUPPORT` varchar(255) NOT NULL,
  `ADDRESS` text NOT NULL,
  `IDNO` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `FATHER`, `FATHER_OCCU`, `MOTHER`, `MOTHER_OCCU`, `BOARDING`, `WITH_FAMILY`, `GUARDIAN`, `GUARDIAN_ADDRESS`, `OTHER_PERSON_SUPPORT`, `ADDRESS`, `IDNO`) VALUES
(48, 'BENIGNO B. CORTEZ', 'FARMER', 'TERESITA P. CORTEZ', 'HOUSE WIFE', 'Yes', 'No', 'BENIGNO B. CORTEZ', 'TABUGON,kABANKALAN CITY', 'NONE', 'NONE', 20001550),
(60, 'Abraham I. Sison', 'Retired', 'Rosita Lim', 'House Wife', '', '', 'Abraham I. Sison', '120P MLQ St. New Lower Bicutan, Taguig City', 'Rosita Lim', '120P MLQ St. New Lower Bicutan, Taguig City', 1900742),
(61, '', '', '', '', '', '', '', '', '', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` varchar(20) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `MNAME` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `BPLACE` text NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `AGE` int(30) NOT NULL,
  `NATIONALITY` varchar(40) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `HOME_ADD` text NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`) VALUES
(57, '1900742', 'Sarah Rose', 'Sison', 'Lim', 'F', '2001-01-20', 'Manila', 'Single', 21, 'Filipino', 'The Church of Jesus Christ of Latter Day Saints', '09761131191', '120P MLQ St. New Lower Bicutan, Taguig City', 'sarahroselimsison@gmail.com'),
(58, '1900679', 'Mary Jane', 'Bayod', 'Buhatin', 'F', '0000-00-00', '', 'Single', 21, '', '', '', '', 'bayodmaryjane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(12, 'TCU Admin', 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'Administrator'),
(13, 'Sarah', 'sarahroselimsison@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Teacher'),
(14, 'hhk', 'hhj', '3da541559918a808c2402bba5012f6c60b27661c', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ay`
--
ALTER TABLE `ay`
  ADD PRIMARY KEY (`AY_ID`),
  ADD UNIQUE KEY `acadyr` (`ACADYR`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`GRADE_ID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`INST_ID`),
  ADD UNIQUE KEY `INST_EMAIL` (`INST_EMAIL`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`YR_ID`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`MAJOR_ID`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`PHOTO_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOM_ID`);

--
-- Indexes for table `schoolyr`
--
ALTER TABLE `schoolyr`
  ADD PRIMARY KEY (`SYID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`SEM_ID`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  ADD PRIMARY KEY (`STUDSUBJ_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJ_ID`);

--
-- Indexes for table `tblrequirements`
--
ALTER TABLE `tblrequirements`
  ADD PRIMARY KEY (`REQ_ID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD PRIMARY KEY (`DETAIL_ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ay`
--
ALTER TABLE `ay`
  MODIFY `AY_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `INST_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `YR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `MAJOR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `PHOTO_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ROOM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `schoolyr`
--
ALTER TABLE `schoolyr`
  MODIFY `SYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `SEM_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  MODIFY `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541;
--
-- AUTO_INCREMENT for table `tblrequirements`
--
ALTER TABLE `tblrequirements`
  MODIFY `REQ_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
