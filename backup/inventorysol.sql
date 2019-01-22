-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 04:04 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorysol`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `branch_contact` varchar(50) NOT NULL,
  `skin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_address`, `branch_contact`, `skin`) VALUES
(6, 'Sols Agrivet Supply', 'Bongabong Oriental Mindoro', '09', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'bayer'),
(2, 'concepcion');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_first` varchar(50) NOT NULL,
  `cust_last` varchar(30) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_contact` varchar(30) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `cust_pic` varchar(300) NOT NULL,
  `bday` date NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `house_status` varchar(30) NOT NULL,
  `years` varchar(20) NOT NULL,
  `rent` varchar(10) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_no` varchar(30) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_year` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `spouse` varchar(30) NOT NULL,
  `spouse_no` varchar(30) NOT NULL,
  `spouse_emp` varchar(50) NOT NULL,
  `spouse_details` varchar(100) NOT NULL,
  `spouse_income` decimal(10,2) NOT NULL,
  `comaker` varchar(30) NOT NULL,
  `comaker_details` varchar(100) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `credit_status` varchar(10) NOT NULL,
  `ci_remarks` varchar(1000) NOT NULL,
  `ci_name` varchar(50) NOT NULL,
  `ci_date` date NOT NULL,
  `payslip` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `cert` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_first`, `cust_last`, `cust_address`, `cust_contact`, `balance`, `cust_pic`, `bday`, `nickname`, `house_status`, `years`, `rent`, `emp_name`, `emp_no`, `emp_address`, `emp_year`, `occupation`, `salary`, `spouse`, `spouse_no`, `spouse_emp`, `spouse_details`, `spouse_income`, `comaker`, `comaker_details`, `branch_id`, `credit_status`, `ci_remarks`, `ci_name`, `ci_date`, `payslip`, `valid_id`, `cert`, `cedula`, `income`) VALUES
(1, '', 'walk in', '', '', '0.00', 'default.gif', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '', 6, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(2, 'mark', 'Blando', 'bb1', '000', '1300.00', 'default.gif', '0000-00-00', '', 'owned', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '', 6, 'Approved', '', '', '0000-00-00', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE `drawing` (
  `drawing_id` int(11) NOT NULL,
  `dra_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(13,2) NOT NULL,
  `date` datetime NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`drawing_id`, `dra_name`, `qty`, `amount`, `date`, `branch_id`) VALUES
(1, 'Gas', 1, '200.00', '2019-01-19 10:06:41', 6);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `exp_id` int(10) NOT NULL,
  `exp_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expensesinput`
--

CREATE TABLE `expensesinput` (
  `expensesinput_id` int(11) NOT NULL,
  `exp_name` varchar(255) NOT NULL,
  `qty` int(6) NOT NULL,
  `amount` decimal(13,2) NOT NULL,
  `date` datetime NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expensesinput`
--

INSERT INTO `expensesinput` (`expensesinput_id`, `exp_name`, `qty`, `amount`, `date`, `branch_id`) VALUES
(1, 'bir', 1, '500.00', '2019-01-19 10:07:30', 6);

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(1, 10, 'added 100 of banana', '2019-01-22 22:03:19'),
(2, 10, 'added 100 of apple', '2019-01-22 22:03:26'),
(3, 10, 'has logged out the system at ', '2019-01-22 22:04:38'),
(4, 10, 'has logged in the system at ', '2019-01-22 22:15:39'),
(5, 10, 'added 100 of grapes', '2019-01-22 22:16:45'),
(6, 10, 'added 100 of grapes', '2019-01-22 22:17:20'),
(7, 10, 'has logged out the system at ', '2019-01-22 22:29:24'),
(8, 10, 'has logged in the system at ', '2019-01-22 22:39:15'),
(9, 10, 'added 100 of apple', '2019-01-22 22:59:31'),
(10, 10, 'added 100 of apple', '2019-01-22 22:59:38'),
(11, 10, 'added 100 of apple', '2019-01-22 23:01:03'),
(12, 10, 'added 100 of apple', '2019-01-22 23:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `payment_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `payment_for` date NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `remaining` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rebate` decimal(10,2) NOT NULL,
  `or_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `cust_id`, `sales_id`, `payment`, `payment_date`, `user_id`, `branch_id`, `payment_for`, `due`, `interest`, `remaining`, `status`, `rebate`, `or_no`) VALUES
(1, 2, 1, '13000.00', '2019-01-22 22:01:37', 10, 6, '2019-01-22', '13000.00', '0.00', '0.00', 'paid', '0.00', 1),
(2, 2, 2, '1300.00', '2019-01-22 22:02:02', 10, 6, '2019-01-22', '1300.00', '0.00', '0.00', 'paid', '0.00', 1),
(3, 2, 3, '141700.00', '2019-01-22 22:02:45', 10, 6, '2019-01-22', '141700.00', '0.00', '0.00', 'paid', '0.00', 1),
(4, 2, 4, '13000.00', '2019-01-22 22:16:02', 10, 6, '2019-01-22', '13000.00', '0.00', '0.00', 'paid', '0.00', 1),
(5, 2, 5, '247000.00', '2019-01-22 22:16:20', 10, 6, '2019-01-22', '247000.00', '0.00', '0.00', 'paid', '0.00', 1),
(6, 2, 6, '1300.00', '2019-01-22 22:39:26', 10, 6, '2019-01-22', '1300.00', '0.00', '0.00', 'paid', '0.00', 1),
(7, 2, 7, '1300.00', '2019-01-22 22:39:39', 10, 6, '2019-01-22', '1300.00', '0.00', '0.00', 'paid', '0.00', 1),
(8, 2, 8, '1300.00', '2019-01-22 22:45:02', 10, 6, '2019-01-22', '1300.00', '0.00', '0.00', 'paid', '0.00', 1),
(9, 2, 9, '0.00', '0000-00-00 00:00:00', 10, 6, '2019-02-22', '13000.00', '0.00', '13000.00', '', '0.00', 1),
(10, 2, 10, '0.00', '0000-00-00 00:00:00', 10, 6, '2019-02-22', '1300.00', '0.00', '1300.00', '', '0.00', 1),
(11, 2, 11, '0.00', '0000-00-00 00:00:00', 10, 6, '2019-02-22', '1500.00', '0.00', '1500.00', '', '0.00', 1),
(12, 2, 12, '0.00', '0000-00-00 00:00:00', 10, 6, '2019-02-22', '1300.00', '0.00', '1300.00', '', '0.00', 1),
(13, 2, 13, '139500.00', '2019-01-22 22:58:41', 10, 6, '2019-01-22', '139500.00', '0.00', '0.00', 'paid', '0.00', 1),
(14, 2, 14, '300000.00', '2019-01-22 23:00:35', 10, 6, '2019-01-22', '300000.00', '0.00', '0.00', 'paid', '0.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_pic` varchar(300) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `reorder` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `base_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_desc`, `prod_price`, `prod_pic`, `cat_id`, `prod_qty`, `branch_id`, `reorder`, `supplier_id`, `serial`, `base_price`) VALUES
(1, 'banana', 'fruit', '0.00', '', 1, 100, 6, 10, 1, '1', '1000.00'),
(2, 'apple', 'afafa', '0.00', '', 2, 200, 6, 10, 2, '1', '1250.00'),
(3, 'grapes', 'sdgsdg', '0.00', '', 1, 200, 6, 10, 1, '1', '1250.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_request`
--

CREATE TABLE `purchase_request` (
  `pr_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `purchase_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_tendered` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `amount_due` decimal(10,2) NOT NULL,
  `cash_change` decimal(10,2) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `modeofpayment` varchar(15) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `cust_id`, `user_id`, `cash_tendered`, `discount`, `amount_due`, `cash_change`, `date_added`, `modeofpayment`, `branch_id`, `total`, `status`) VALUES
(1, 2, 10, '13000.00', '0.00', '13000.00', '0.00', '2019-01-22 22:01:37', 'cash', 6, '13000.00', ''),
(2, 2, 10, '1300.00', '0.00', '1300.00', '0.00', '2019-01-22 22:02:02', 'cash', 6, '1300.00', ''),
(3, 2, 10, '141700.00', '0.00', '141700.00', '0.00', '2019-01-22 22:02:45', 'cash', 6, '141700.00', ''),
(4, 2, 10, '13000.00', '0.00', '13000.00', '0.00', '2019-01-22 22:16:02', 'cash', 6, '13000.00', ''),
(5, 2, 10, '247000.00', '0.00', '247000.00', '0.00', '2019-01-22 22:16:20', 'cash', 6, '247000.00', ''),
(6, 2, 10, '1300.00', '0.00', '1300.00', '0.00', '2019-01-22 22:39:26', 'cash', 6, '1300.00', ''),
(7, 2, 10, '1300.00', '0.00', '1300.00', '0.00', '2019-01-22 22:39:39', 'cash', 6, '1300.00', ''),
(8, 2, 10, '1300.00', '0.00', '1300.00', '0.00', '2019-01-22 22:45:02', 'cash', 6, '1300.00', ''),
(9, 2, 10, NULL, NULL, '0.00', NULL, '2019-01-22 22:45:19', 'credit', 6, '13.00', 'notpaid'),
(10, 2, 10, NULL, NULL, '0.00', NULL, '2019-01-22 22:49:32', 'credit', 6, '1.00', 'notpaid'),
(11, 2, 10, NULL, NULL, '0.00', NULL, '2019-01-22 22:50:14', 'credit', 6, '1.00', 'notpaid'),
(12, 2, 10, NULL, NULL, '0.00', NULL, '2019-01-22 22:52:43', 'credit', 6, '1.00', 'notpaid'),
(13, 2, 10, '139500.00', '0.00', '139500.00', '0.00', '2019-01-22 22:58:41', 'cash', 6, '139500.00', ''),
(14, 2, 10, '300000.00', '0.00', '300000.00', '0.00', '2019-01-22 23:00:35', 'cash', 6, '300000.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_details_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `profit` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_details_id`, `sales_id`, `prod_id`, `price`, `qty`, `profit`) VALUES
(1, 1, 1, '1300.00', 10, 1750.00),
(2, 2, 1, '1300.00', 1, 175.00),
(3, 3, 1, '1300.00', 109, 19075.00),
(4, 4, 3, '1300.00', 10, 750.00),
(5, 5, 3, '1300.00', 190, 14250.00),
(6, 6, 2, '1300.00', 1, 100.00),
(7, 7, 2, '1300.00', 1, 100.00),
(8, 8, 2, '1300.00', 1, 100.00),
(9, 9, 2, '13000.00', 1, 0.00),
(10, 10, 2, '1300.00', 1, 0.00),
(11, 11, 2, '1500.00', 1, 0.00),
(12, 12, 2, '1300.00', 1, 0.00),
(13, 13, 2, '1500.00', 93, 27900.00),
(14, 14, 2, '1500.00', 200, 50000.00);

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `stockin_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(6) NOT NULL,
  `date` datetime NOT NULL,
  `branch_id` int(11) NOT NULL,
  `base_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`stockin_id`, `prod_id`, `qty`, `date`, `branch_id`, `base_price`) VALUES
(1, 1, 100, '2019-01-22 22:03:19', 6, '1000.00'),
(2, 2, 100, '2019-01-22 22:03:26', 6, '1200.00'),
(3, 3, 100, '2019-01-22 22:16:45', 6, '1000.00'),
(4, 3, 100, '2019-01-22 22:17:20', 6, '1500.00'),
(5, 2, 100, '2019-01-22 22:59:31', 6, '1000.00'),
(6, 2, 100, '2019-01-22 22:59:38', 6, '1500.00'),
(7, 2, 100, '2019-01-22 23:01:03', 6, '1000.00'),
(8, 2, 100, '2019-01-22 23:01:09', 6, '1500.00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` varchar(300) NOT NULL,
  `supplier_contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contact`) VALUES
(1, 'Pableona', 'sfsfs', '000'),
(2, 'mikee', 'fsfs', '222');

-- --------------------------------------------------------

--
-- Table structure for table `temp_trans`
--

CREATE TABLE `temp_trans` (
  `temp_trans_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `payable_for` varchar(10) NOT NULL,
  `term` varchar(11) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `payment_start` date NOT NULL,
  `down` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `sales_id`, `payable_for`, `term`, `due`, `payment_start`, `down`, `due_date`, `interest`, `status`) VALUES
(5, 8, '3', 'Non-Subsidy', '13000.00', '2019-01-19', '0.00', '2019-04-19', '0.00', 'paid'),
(6, 11, '1', 'Non-Subsidy', '13000.00', '2019-01-21', '0.00', '2019-02-21', '0.00', ''),
(7, 15, '1', 'Non-Subsidy', '1000.00', '2019-01-21', '0.00', '2019-02-21', '0.00', ''),
(8, 17, '1', 'Non-Subsidy', '1300.00', '2019-01-22', '0.00', '2019-02-22', '0.00', ''),
(9, 19, '1', 'Non-Subsidy', '1300.00', '2019-01-22', '0.00', '2019-02-22', '0.00', ''),
(10, 9, '1', 'Non-Subsidy', '13000.00', '2019-01-22', '0.00', '2019-02-22', '0.00', ''),
(11, 10, '1', 'Non-Subsidy', '1300.00', '2019-01-22', '0.00', '2019-02-22', '0.00', ''),
(12, 11, '1', 'Non-Subsidy', '1500.00', '2019-01-22', '0.00', '2019-02-22', '0.00', ''),
(13, 12, '1', 'Non-Subsidy', '1300.00', '2019-01-22', '0.00', '2019-02-22', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `status`, `branch_id`) VALUES
(6, 'administrator', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Giu Matthew', 'active', 0),
(8, 'admin', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Mark', 'active', 5),
(9, 'admin', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Michael', 'active', 1),
(10, 'admin', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Encoder', 'active', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`drawing_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`exp_id`,`exp_name`) USING BTREE;

--
-- Indexes for table `expensesinput`
--
ALTER TABLE `expensesinput`
  ADD PRIMARY KEY (`expensesinput_id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `purchase_request`
--
ALTER TABLE `purchase_request`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_details_id`);

--
-- Indexes for table `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`stockin_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `temp_trans`
--
ALTER TABLE `temp_trans`
  ADD PRIMARY KEY (`temp_trans_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `drawing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expensesinput`
--
ALTER TABLE `expensesinput`
  MODIFY `expensesinput_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_request`
--
ALTER TABLE `purchase_request`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `stockin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_trans`
--
ALTER TABLE `temp_trans`
  MODIFY `temp_trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
