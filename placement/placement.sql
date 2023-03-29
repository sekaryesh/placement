-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 11:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `mail`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin@123'),
('admin2', 'yesh@gmail.com', 'yesh@123');

-- --------------------------------------------------------

--
-- Table structure for table `app_campus`
--

CREATE TABLE `app_campus` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `reg_no` varchar(1000) NOT NULL,
  `dob` date NOT NULL,
  `batch` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `cgpa` text NOT NULL,
  `sa` varchar(1000) NOT NULL,
  `arr` varchar(1000) NOT NULL,
  `passout` int(250) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `state` varchar(1000) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_campus`
--

INSERT INTO `app_campus` (`cid`, `c_name`, `name`, `reg_no`, `dob`, `batch`, `department`, `gender`, `cgpa`, `sa`, `arr`, `passout`, `phone`, `address`, `state`, `mail`, `status`) VALUES
(0, 'wipro', 'jkglgk', 'ifuydy', '2013-03-06', 'jyjduidy', 'jhfjfj', 'hjckfjj', 'hjvj', 'ffk', 'yufiuf', 6464, '64643643', ',nvjkdkh', 'vjjdhkj', 'jhdrwt@', 'Processing'),
(0, 'wipro', ' Mohamed Sirajudeen', '20ucs542', '2023-03-20', '', 'BCA', 'male', '67', 'no', 'arrear', 20222, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Kerela', 'sva19102@gmail.com', 'Selected'),
(0, 'wipro', ' Mohamed Sirajudeen', '20ucs542', '2023-03-20', '', 'BCA', 'male', '67', 'no', 'arrear', 20222, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Kerela', 'sva19102@gmail.com', 'Selected'),
(1, 'wipro', ' Mohamed Sirajudeen', '20ucs555', '2003-12-20', '2023', 'MBA', 'male', '67', 'yes', 'arrear', 2021, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'askjblasd@mail.com', 'Selected'),
(8, 'wipro', ' Ajay', '20ucs558', '2002-12-12', '2023', 'BCA', 'male', '77', 'yes', 'arrear', 2021, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Kerela', 'sva19102@gmail.com', 'Processing'),
(1, 'wipro', ' ', '20UCS542', '2023-03-04', '', 'Computer Science', 'Male', '', 'yes', 'arrear', 2020, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sdtagTaw@mail.com', 'Selected'),
(1, 'wipro', ' Yeshua', '20UCS542', '2023-03-04', '', 'Computer Science', 'Male', '', 'yes', 'arrear', 2020, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sdtagTaw@mail.com', 'Selected'),
(1, 'wipro', ' Yeshua', '20UCS542', '2023-03-04', '', 'Computer Science', 'Male', '', 'yes', 'arrear', 2020, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sdtagTaw@mail.com', 'Selected'),
(1, 'wipro', ' Yeshua', '20UCS542', '2023-03-04', '', 'Computer Science', 'Male', '', 'yes', 'arrear', 2020, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sdtagTaw@mail.com', 'Selected'),
(1, 'wipro', ' Yeshua', '20UCS542', '2023-03-04', '', 'Computer Science', 'Male', '', 'yes', 'arrear', 2020, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sdtagTaw@mail.com', 'Selected'),
(14, 'wipro', ' Ajay ', '20ucs567', '2003-02-19', '2023', 'B.Tech', 'male', '77', 'no', 'arrear', 2023, '2147483647', 'etsetaWEt', 'Other', 'ajay@mail.com', 'Selected'),
(2, '', ' Riyas', '20UCS550', '2002-12-20', '2022', 'BCA', 'male', '74', 'yes', 'arrear', 2023, '2147483647', 'etsetaWEt', 'Other', 'ajay@mail.com', 'Selected'),
(2, '', ' Ajay ', '20ucs567', '2003-02-19', '2023', 'B.Tech', 'male', '88', 'no', 'arrear', 2020, '2147483647', 'etsetaWEt', 'Tamilnadu', 'ajay@mail.com', 'Processing'),
(15, '', ' Riyas', '20UCS550', '2002-12-20', '2023', 'BCA', 'male', '52', 'yes', 'arrear', 2026, '2147483647', 'etsetaWEt', 'Other', 'ajay@mail.com', 'Selected'),
(15, '', ' Riyas', '20UCS550', '2002-12-20', '2023', 'BCA', 'male', '66', 'no', 'arrear', 2029, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sva19102@gmail.com', 'Selected'),
(15, '', ' Yeshua', '20ucs542', '2023-03-04', '2020', 'Computer Science', 'Male', '76', 'yes', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sva19102@gmail.com', 'Selected'),
(15, '', ' Yeshua', '20ucs542', '2023-03-04', '2020', 'Computer Science', 'Male', '76', 'yes', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sva19102@gmail.com', 'Selected'),
(15, '', ' Yeshua', '20ucs542', '2023-03-04', '2020', 'Computer Science', 'Male', '76', 'yes', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sva19102@gmail.com', 'Selected'),
(16, '', ' Kevin', '20UCS501', '2002-01-18', '2020', 'BCA', 'male', '62', 'yes', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'Kwin@mail.com', 'Selected'),
(14, '', ' Kevin', '20UCS501', '2002-01-18', '2023', 'BCA', 'male', '66', 'no', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'Kwin@mail.com', 'Processing'),
(16, '', ' Yeshua', '20ucs542', '2023-03-04', '2023', 'Computer Science', 'Male', '77', 'no', 'arrear', 2021, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Kerela', 'sva19102@gmail.com', 'Selected'),
(16, '', ' Yeshua', '20ucs542', '2023-03-04', '2023', 'Computer Science', 'Male', '77', 'no', 'arrear', 2021, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Kerela', 'sva19102@gmail.com', 'Selected'),
(15, '', ' Yeshua', '20UCS542', '2023-03-04', '2020', 'Computer Science', 'Male', '67', 'no', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'yeshua@mail.com', 'Selected'),
(15, '', ' Yeshua', '20UCS542', '2023-03-04', '2020', 'Computer Science', 'Male', '67', 'no', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'yeshua@mail.com', 'Selected'),
(15, 'Infosys', ' Yeshua', '20UCS542', '2023-03-04', '2020', 'Computer Science', 'Male', '67', 'no', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'yeshua@mail.com', 'Selected'),
(16, 'HCL', ' 20UCS702', 'Santhosh ', '2003-01-21', '2020', 'BBA', 'male', '88', 'no', 'arrear', 2023, '2147483647', 'ajkgfigauf', 'Tamilnadu', 'sandy@gmai.com', 'Selected'),
(15, 'Infosys', ' Ilham Nafia', '20UCS503', '2002-10-15', '2020', 'BCA', 'female', '89', 'no', 'arrear', 2023, '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'nafia@gmail.com', 'Selected'),
(15, 'Infosys', ' Yeshua', '20ucs542', '2023-03-04', '2023', 'Computer Science', 'Male', '88', 'yes', 'arrear', 2026, '98765434', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sva19102@gmail.com', 'Selected'),
(17, 'TCS', ' Yeshua', '20ucs542', '2023-03-04', '2020', 'Computer Science', 'Male', '76', 'yes', 'arrear', 2023, '+918825650', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', '20ucs542@mail.sjctni.edu', 'Selected'),
(17, 'TCS', ' Vignesh', '20UCS553', '2002-09-09', '2020', 'Course', 'male', '87', 'no', 'arrear', 2023, '9797153844', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'vignesh@gmail.com', 'Selected');

-- --------------------------------------------------------

--
-- Table structure for table `campus_drive`
--

CREATE TABLE `campus_drive` (
  `cid` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `venue` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `branch` varchar(1000) NOT NULL,
  `eligiblity` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus_drive`
--

INSERT INTO `campus_drive` (`cid`, `name`, `address`, `mail`, `contact`, `venue`, `date`, `branch`, `eligiblity`, `details`) VALUES
(14, 'wipro', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'wipro@mail.com', '+918825650124', 'bhc', '2002-01-12', 'Tamil', '  \r\n                    tsyratykchyfcl', '  \r\n                utdsyrastua4ttrx    '),
(15, 'Infosys', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'infoysy@mail.com', '+918825650124', 'Sjc', '2023-03-29', 'Chennai', '  \r\n                    apjfpjdf', '  \r\n                    sdjfsld'),
(16, 'HCL', '  \r\n                NO 10, Horizon COmplex,Anna Nagar,Chennai', 'HCL@yahoo.com', '04684351438', 'JAMAL', '2023-04-01', 'Chennai', '  \r\n                    ryae5ywesw', '  \r\n                    aryeazyrg'),
(17, 'TCS', '  NO 10 TECH PARK , ANNA NAGAR, CHENNAI\r\n                ', 'TCS@gmail.com', '8523654712', 'Sjc', '2023-04-01', 'Chennai,Trichy,Coimbatore', '  \r\n           * Candidate must have above 6 cgpa in last updated sem\r\n           * Not More than 1 History of Arrears\r\n           * Good Communication Skill\r\n           * Technical Skills\r\n           * Good knowledge in php and java ', '  \r\n                  Job Profile : Jr Software Developer  \r\n                  Salary upto 2.5 L per annum\r\n                  12000 stipend for 6 months Training Period\r\n                   Must Clear the Backlog before joining');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(1000) NOT NULL,
  `reg_no` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `aadhar` varchar(1000) NOT NULL,
  `father_name` varchar(1000) NOT NULL,
  `religion` varchar(1000) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'Not Selected'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `reg_no`, `department`, `dob`, `gender`, `aadhar`, `father_name`, `religion`, `phone`, `address`, `state`, `email`, `cid`, `status`) VALUES
('Yeshua', '20UCS542', 'Computer Science', '2023-03-04', 'Male', '985785784534', 'Sekar', 'Aethist', '98765434', '.....sdffffffffffcvxxxxxx', 'Tamil Nadu', 'yeshua@gmail.com', 1, 'SELECTED'),
('', '52935953', 'BCA', '2002-01-19', 'male', '4667434843', '', 'religion', '48444833', '  \r\n           etsetaWEt     ', '', '', 0, 'Not Selected'),
('Yeshua S', '52935953', 'BCA', '2002-01-19', 'male', '4667434843', '', 'religion', '48444833', '  \r\n           etsetaWEt     ', '', '', 0, 'Not Selected'),
('Yeshua S', '52935953', 'BCA', '2002-01-19', 'male', '4667434843', '', 'religion', '48444833', '  \r\n           etsetaWEt     ', '', '', 0, 'Not Selected'),
('Yeshua S', '52935953', 'BCA', '2002-01-19', 'male', '4667434843', '', 'religion', '48444833', '  \r\n           etsetaWEt     ', '', '', 0, 'Not Selected'),
('Yeshua S', '52935953', 'BCA', '2002-01-19', 'male', '4667434843', '', 'religion', '48444833', '  \r\n           etsetaWEt     ', '', '', 0, 'Not Selected'),
('Yeshua S', '52935953', 'BCA', '2002-01-19', 'male', '4667434843', '', 'religion', '48444833', '  \r\n           etsetaWEt     ', '', '', 0, 'Not Selected'),
('yeshua', 'adf;a', 'BCA', '2002-01-19', 'male', '572727', 'kgkasgouga', 'religion', '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sva19102@gmail.com', 0, 'Not Selected'),
('yeshua', 'adf;a', 'BCA', '2002-01-19', 'male', '572727', 'kgkasgouga', 'religion', '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sva19102@gmail.com', 0, 'Not Selected'),
('Ajay ', '20ucs567', 'B.Tech', '2003-02-19', 'male', '4752626', 'kovilpichati', 'religion', '2147483647', 'etsetaWEt', 'Other', 'ajay@mail.com', 0, 'Not Selected'),
('Riyas', '20UCS550', 'BCA', '2002-12-20', 'male', '51648656446', 'kovilpichati', 'religion', '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'sdtagTaw@mail.com', 0, 'Not Selected'),
('Kevin', '20UCS501', 'BCA', '2002-01-18', 'male', '1687676463', 'ajay', 'religion', '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'Kwin@mail.com', 0, 'Not Selected'),
('20UCS702', 'Santhosh ', 'BBA', '2003-01-21', 'male', '5468796446', 'csdkhgks', 'religion', '2147483647', '  \r\n               ajkgfigauf ', 'Tamilnadu', 'sandy@gmai.com', 0, 'Not Selected'),
('Ilham Nafia', '20UCS503', 'BCA', '2002-10-15', 'female', '546768446', 'Dil', 'religion', '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'nafia@gmail.com', 0, 'Not Selected'),
('Periyannan K', '20UCS560', 'BCA', '2003-02-20', 'male', '70131', '', 'religion', '0', '  \r\n                ', 'state', '', NULL, 'Not Selected'),
('Periyannan K', '20UCS560', 'BCA', '2003-02-20', 'male', '70131816846846', 'karunanithi', 'religion', '2147483647', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'perusu@gmail.com', NULL, 'Not Selected'),
('Bennet', '20UCS504', 'BCA', '2003-03-15', 'male', '88464834684', 'Aloysious', 'religion', '2147483647', '  jksgdoygasf\r\n                ', 'Tamilnadu', 'bennet@gmail.com', NULL, 'Not Selected'),
('Yeshwant', '20ubc541', 'BCA', '1996-10-25', 'male', '2020', 'Sekar', 'religion', '2147483647', '  \r\n                180,XAvie', 'Tamilnadu', 'paulyesh@gmail.com', NULL, 'Not Selected'),
('Vignesh', '20UCS553', '', '2002-09-09', 'male', '134567890098', 'Boopathi', 'religion', '9791761372', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'vignesh@gmail.com', 0, 'Not Selected'),
('Vignesh', '20UCS553', 'Course', '2002-09-09', 'male', '134567890098', 'Boopathi', 'religion', '9791761372', '60/47, Kothuvapalli North Street\r\nKulasekaranpattinam', 'Tamilnadu', 'vignesh@gmail.com', 0, 'Not Selected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus_drive`
--
ALTER TABLE `campus_drive`
  ADD UNIQUE KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus_drive`
--
ALTER TABLE `campus_drive`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
