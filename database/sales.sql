-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 02:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(50) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `comaddress` varchar(50) NOT NULL,
  `com_num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `com_name`, `comaddress`, `com_num`) VALUES
(6, 'Asian paints', 'Asian paints Ltd,Kochi', 2147483647),
(7, 'Indigo paints', 'Indigo paints ltd,kochi', 2147483647),
(8, 'Nature Light', 'Nature Light Paints LTD TVM', 2147483647),
(9, 'Aero Brushes', 'Aero Brush Manufactures, Kolkota', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `entry1`
--

CREATE TABLE `entry1` (
  `id` int(50) NOT NULL,
  `number` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(200) NOT NULL,
  `uprice` int(200) NOT NULL,
  `tamount` int(200) NOT NULL,
  `company` varchar(100) NOT NULL,
  `dateadded` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `utype` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`, `utype`) VALUES
(1, 'admin', 'admin', 0),
(19, 'sams', '12345', 1),
(20, 'abhi', '12345', 1),
(25, 'zaik', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purc_entry`
--

CREATE TABLE `purc_entry` (
  `id` int(20) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `p_date` date NOT NULL,
  `purc_itemno` int(50) NOT NULL,
  `purc_name` varchar(200) NOT NULL,
  `purc_qty` int(100) NOT NULL,
  `purc_rate` int(100) NOT NULL,
  `purc_total` int(200) NOT NULL,
  `st_id` int(20) NOT NULL,
  `purc_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purc_entry`
--

INSERT INTO `purc_entry` (`id`, `c_name`, `p_date`, `purc_itemno`, `purc_name`, `purc_qty`, `purc_rate`, `purc_total`, `st_id`, `purc_status`) VALUES
(78, 'Asian paints', '2021-05-22', 100, 'Asian Interior (white) 25kg', 50, 700, 35000, 4, 'ok'),
(79, 'Asian paints', '2021-05-22', 101, 'Asian Interior 1kg', 25, 120, 3000, 4, 'ok'),
(80, 'Asian paints', '2021-05-22', 102, 'Asian Exterior 25kg', 50, 650, 32500, 4, 'ok'),
(81, 'Asian paints', '2021-05-22', 103, 'Asian Exterior 1 Kg ', 20, 110, 2200, 4, 'ok'),
(82, 'Indigo paints', '2021-05-22', 104, 'Indigo Brown 5 Kg', 15, 350, 5250, 4, 'ok'),
(83, 'Aero Brushes', '2021-05-22', 105, 'Aero Brush 4 Inches', 100, 25, 2500, 4, 'ok'),
(84, 'Indigo paints', '2021-05-29', 104, 'Indigo Brown 5 Kg', 20, 350, 7000, 4, 'ok'),
(85, 'Asian paints', '2021-06-14', 101, 'Asian Interior 1kg', 3, 100, 300, 4, 'ok'),
(86, 'Indigo paints', '2021-06-14', 104, 'Indigo Brown 5 Kg', 12, 700, 8400, 4, 'ok'),
(87, 'Asian paints', '2021-06-15', 101, 'Asian Interior 1kg', 12, 220, 2640, 9, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `salesbill`
--

CREATE TABLE `salesbill` (
  `id` int(50) NOT NULL,
  `itemno` int(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `itemqty` int(100) NOT NULL,
  `item_unit_rate` int(200) NOT NULL,
  `item_discount` int(100) NOT NULL,
  `item_total` int(100) NOT NULL,
  `sid` int(50) NOT NULL,
  `billno` int(200) NOT NULL,
  `billdate` date NOT NULL,
  `custname` varchar(100) NOT NULL,
  `custno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesbill`
--

INSERT INTO `salesbill` (`id`, `itemno`, `itemname`, `itemqty`, `item_unit_rate`, `item_discount`, `item_total`, `sid`, `billno`, `billdate`, `custname`, `custno`) VALUES
(48, 101, 'Asian Interior 1kg', 1, 225, 5, 220, 4, 1, '2021-05-22', 'rakesh', '9072746355'),
(49, 101, 'Asian Interior 1kg', 1, 230, 5, 225, 4, 2, '2021-05-29', 'abu', '9074746872'),
(50, 103, 'Asian Exterior 1 Kg ', 1, 180, 0, 180, 4, 2, '2021-05-29', 'abu', '9074746872'),
(51, 102, 'Asian Exterior 25kg', 1, 850, 20, 830, 4, 3, '2021-06-04', 'anil', '7034656652'),
(52, 102, 'Asian Exterior 25kg', 2, 850, 20, 1680, 4, 4, '2021-06-09', 'Arun', '9072746543'),
(53, 103, 'Asian Exterior 1 Kg ', 1, 180, 0, 180, 4, 5, '2021-06-14', 'avinash', '9072756899'),
(54, 102, 'Asian Exterior 25kg', 1, 850, 20, 830, 9, 6, '2021-06-15', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_entry`
--

CREATE TABLE `sales_entry` (
  `id` int(100) NOT NULL,
  `item_no` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `unit_rate` int(200) NOT NULL,
  `unit_prate` int(100) NOT NULL,
  `disc2` int(100) NOT NULL,
  `trate` int(200) NOT NULL,
  `item_profit` int(200) NOT NULL,
  `saledate` date NOT NULL,
  `staffid` int(20) NOT NULL,
  `salesentryno` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_entry`
--

INSERT INTO `sales_entry` (`id`, `item_no`, `item_name`, `quantity`, `unit_rate`, `unit_prate`, `disc2`, `trate`, `item_profit`, `saledate`, `staffid`, `salesentryno`) VALUES
(69, 105, 'Aero Brush 4 Inches', 3, 55, 25, 5, 160, 85, '2021-05-22', 4, 100100),
(70, 102, 'Asian Exterior 25kg', 1, 850, 650, 20, 830, 180, '2021-05-22', 4, 100100),
(71, 101, 'Asian Interior 1kg', 1, 225, 120, 5, 220, 100, '2021-05-22', 4, 100100),
(72, 101, 'Asian Interior 1kg', 2, 230, 120, 5, 455, 215, '2021-05-22', 4, 100100),
(73, 100, 'Asian Interior (white) 25kg', 1, 900, 700, 20, 880, 180, '2021-05-29', 4, 100101),
(74, 101, 'Asian Interior 1kg', 1, 230, 120, 5, 225, 105, '2021-05-29', 4, 100101),
(75, 104, 'Indigo Brown 5 Kg', 2, 520, 350, 20, 1040, 340, '2021-05-29', 4, 100101),
(76, 101, 'Asian Interior 1kg', 1, 230, 120, 5, 225, 105, '2021-05-29', 4, 100101),
(77, 103, 'Asian Exterior 1 Kg ', 1, 180, 110, 0, 180, 70, '2021-05-29', 4, 100101),
(78, 102, 'Asian Exterior 25kg', 1, 850, 650, 20, 830, 180, '2021-06-04', 4, 100102),
(79, 102, 'Asian Exterior 25kg', 2, 850, 650, 20, 1680, 380, '2021-06-09', 4, 100103),
(80, 102, 'Asian Exterior 25kg', 0, 850, 650, 20, 0, -20, '2021-06-12', 4, 100104),
(81, 102, 'Asian Exterior 25kg', 1, 850, 650, 20, 830, 180, '2021-06-14', 4, 100105),
(82, 102, 'Asian Exterior 25kg', 2, 850, 650, 20, 1680, 380, '2021-06-14', 4, 100105),
(83, 103, 'Asian Exterior 1 Kg ', 1, 180, 110, 0, 180, 70, '2021-06-14', 4, 100105),
(84, 102, 'Asian Exterior 25kg', 5, 850, 650, 20, 4230, 980, '2021-06-14', 4, 100105),
(85, 102, 'Asian Exterior 25kg', 1, 850, 650, 20, 830, 180, '2021-06-15', 9, 100106),
(86, 101, 'Asian Interior 1kg', 1, 300, 220, 0, 300, 80, '2021-06-16', 19, 100107),
(87, 101, 'Asian Interior 1kg', 2, 300, 220, 0, 600, 160, '2021-06-16', 19, 100107);

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `id` int(100) NOT NULL,
  `it_no` int(100) NOT NULL,
  `it_name` varchar(200) NOT NULL,
  `qtyy` int(100) NOT NULL,
  `ratee` int(200) NOT NULL,
  `selldatee` date NOT NULL,
  `totalamnt` int(200) NOT NULL,
  `staffidd` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_return`
--

INSERT INTO `sales_return` (`id`, `it_no`, `it_name`, `qtyy`, `ratee`, `selldatee`, `totalamnt`, `staffidd`) VALUES
(15, 104, 'Indigo Brown 5 Kg', 2, 520, '2021-05-29', 1020, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staff_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `name`, `contact`, `email`, `address`, `password`, `staff_id`) VALUES
(18, 'sams', '7032333654', 'sam@gmail.com', 'sams house', '12345', 19),
(19, 'abhi', '7032333644', 'abhi@gmail.com', 'abhi house', '12345', 20);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(50) NOT NULL,
  `st_item_no` int(100) NOT NULL,
  `st_item_name` varchar(200) NOT NULL,
  `st_qty` int(200) NOT NULL,
  `purchase_rate` int(200) NOT NULL,
  `sell_rate` int(200) NOT NULL,
  `discount` int(200) NOT NULL,
  `com_namee` varchar(200) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `st_item_no`, `st_item_name`, `st_qty`, `purchase_rate`, `sell_rate`, `discount`, `com_namee`, `added_date`) VALUES
(21, 101, 'Asian Interior 1kg', 32, 220, 300, 0, 'Asian paints', '2021-05-22'),
(22, 102, 'Asian Exterior 25kg', 37, 650, 850, 20, 'Asian paints', '2021-05-22'),
(23, 103, 'Asian Exterior 1 Kg ', 18, 110, 180, 0, 'Asian paints', '2021-05-22'),
(24, 104, 'Indigo Brown 5 Kg', 32, 700, 800, 0, 'Indigo paints', '2021-05-22'),
(25, 105, 'Aero Brush 4 Inches', 97, 25, 55, 5, 'Aero Brushes', '2021-05-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry1`
--
ALTER TABLE `entry1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purc_entry`
--
ALTER TABLE `purc_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesbill`
--
ALTER TABLE `salesbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_entry`
--
ALTER TABLE `sales_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_return`
--
ALTER TABLE `sales_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `entry1`
--
ALTER TABLE `entry1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `purc_entry`
--
ALTER TABLE `purc_entry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `salesbill`
--
ALTER TABLE `salesbill`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `sales_entry`
--
ALTER TABLE `sales_entry`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `sales_return`
--
ALTER TABLE `sales_return`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
