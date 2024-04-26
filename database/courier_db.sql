-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 07:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `weight` double NOT NULL,
  `invice_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `freight` double NOT NULL,
  `mode` varchar(20) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_boy_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`cid`, `cons_no`, `ship_name`, `phone`, `s_add`, `rev_name`, `r_phone`, `r_add`, `type`, `weight`, `invice_no`, `qty`, `book_mode`, `freight`, `mode`, `pick_date`, `pick_time`, `status`, `comments`, `book_date`, `delivery_boy_name`) VALUES
(1, 'M22P7KHM', 'ABC ZZ', '020 12345', 's sd sdsd', 'XYZ K', '020 12345', 'sd sd s', 'Parcel', 20, '252525', 12, 'TBB', 240, 'Road', '29/01/2020', '12', 'Completed', 'ds ds d', '2020-01-29', ''),
(2, 'QIWWGIQP', 'SSA SS', '020 12345', 'shani peth', 'ABC S', '020 12345', 'asdas das d', 'Documents', 20, '252525', 12, 'TBB', 240, 'Train', '29/01/2020', '4', 'Delivered', 'Plz deliver it', '2020-01-29', ''),
(3, 'Q906F73L', 'WWW DD', '1234567890', 'metha nagar, VS R', 'sunil p', '1234567890', 'balliram peth', 'Documents', 12, '239098', 12, 'ToPay', 200, 'Air', '26/01/2013', '4', 'In Transit', 'Thanks', '2020-01-29', ''),
(4, '2THBV8UM', 'RG K', '1234567890', 'xzyz', 'AR K', '1234567890', 'ABC', 'Parcel', 2, '23788', 4, 'Paid', 90, 'Road', '20/01/2020', '12', 'Delivered', 'Plz transit', '2020-01-30', ''),
(5, 'FSM22G58', 'Pok', '9876756478', 'Nagpur', 'Kop', '8979753468', 'Pune', 'Documents', 1, '12312', 1, 'Paid', 1, 'Air', '02/12/2020', '1', 'In Transit', 'At Nagpur office', '0000-00-00', '2020-12-15 23:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_officers`
--

CREATE TABLE `tbl_courier_officers` (
  `cid` int(10) NOT NULL,
  `officer_name` varchar(40) NOT NULL,
  `off_pwd` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(12) NOT NULL,
  `office` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_officers`
--

INSERT INTO `tbl_courier_officers` (`cid`, `officer_name`, `off_pwd`, `address`, `email`, `ph_no`, `office`, `reg_date`) VALUES
(1, 'kapil', 'kapil', 'rk nagar , hyderabad', 'abc@gmail.com', '1234567890', 'Fast Courier - Jalgaon', '2020-01-30 09:25:21'),
(2, 'S Sk.', 'ashraf', '11, bhaguday nagar', 'ashraf@gmail.com', '1234567890', 'Fast Courier - Aurangabad', '2020-01-30 09:40:42'),
(3, 'sunil', 'sunil', '390, sani peth', 'sunil@gmail.com', '1234567890', 'Fast Courier - Pune', '2020-01-30 17:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_track`
--

CREATE TABLE `tbl_courier_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_track`
--

INSERT INTO `tbl_courier_track` (`id`, `cid`, `cons_no`, `current_city`, `status`, `comments`, `bk_time`) VALUES
(1, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Delayed', 'Delay due to rain', '2020-01-30 10:23:04'),
(3, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Delayed', 'Delayed due to rain', '2020-01-30 10:26:43'),
(4, 4, '2THBV8UM', 'Fast Courier - Aurangabad', 'Delayed', 'Due to rain', '2020-01-30 17:44:52'),
(5, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Completed', 'Completed', '2020-01-30 17:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery_boy`
--

CREATE TABLE `tbl_delivery_boy` (
  `cid` int(10) NOT NULL,
  `delivery_boy_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `ph_no` varchar(12) CHARACTER SET latin1 NOT NULL,
  `office` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_delivery_boy`
--

INSERT INTO `tbl_delivery_boy` (`cid`, `delivery_boy_name`, `ph_no`, `office`) VALUES
(1, 'Raja', '8765423478', 'Fast Courier - Jalgaon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE `tbl_offices` (
  `id` int(10) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`id`, `off_name`, `address`, `city`, `ph_no`, `office_time`, `contact_person`) VALUES
(1, 'Fast Courier - Jalgaon', '290, shani peth, jalgaon', 'Jalgaon', '0257-25125', '10.00 am - 9.00 pm', 'Shammi Kapur'),
(2, 'Fast Courier - Aurangabad', '20/12, sector 12, bhavani peth', 'Aurangabad', '0245-858521', '10.00 am - 9.00 pm', 'Amol Patil'),
(3, 'Fast Courier - Pune', '230, Fashion Street', 'pune', '020-25125', '10.00 am - 9.00 pm', 'Atul Nigade');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_delivery_boy`
--
ALTER TABLE `tbl_delivery_boy`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_delivery_boy`
--
ALTER TABLE `tbl_delivery_boy`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
