-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 11:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashierinvoice`
--

CREATE TABLE `cashierinvoice` (
  `id` int(11) NOT NULL,
  `subTotal` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `netTotal` varchar(20) NOT NULL,
  `dateTime` date NOT NULL DEFAULT current_timestamp(),
  `CashAmt` varchar(20) NOT NULL,
  `ChangeAmt` varchar(20) NOT NULL,
  `waiter_id` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashierinvoice`
--

INSERT INTO `cashierinvoice` (`id`, `subTotal`, `discount`, `netTotal`, `dateTime`, `CashAmt`, `ChangeAmt`, `waiter_id`, `paid`) VALUES
(1, '11000', '100', '10900', '2020-10-21', '12000', '1000', 1, 0),
(2, '0', '0', '0', '2020-10-21', '', '', 0, 0),
(3, '0', '0', '0', '2020-10-21', '', '', 0, 0),
(4, '450', '20', '430', '2020-10-21', '', '', 0, 0),
(6, '550', '12', '538', '2020-10-21', '550', '12', 2, 1),
(7, '1000', '1', '999', '2020-10-21', '1000', '1', 1, 1),
(8, '0', '0', '0', '2020-10-21', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cashierinvoiceitem`
--

CREATE TABLE `cashierinvoiceitem` (
  `id` int(11) NOT NULL,
  `invoiceID` int(11) NOT NULL,
  `ItemID` varchar(10) NOT NULL,
  `ItemQuantity` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashierinvoiceitem`
--

INSERT INTO `cashierinvoiceitem` (`id`, `invoiceID`, `ItemID`, `ItemQuantity`, `Price`, `Total`) VALUES
(18, 1, '1', '20', '', '9000'),
(19, 1, '2', '20', '', '2000'),
(20, 4, '1', '1', '', '450'),
(21, 5, '1', '2', '', '900'),
(22, 5, '2', '3', '', '300'),
(23, 6, '1', '1', '', '450'),
(24, 6, '2', '1', '', '100'),
(25, 7, '1', '2', '', '900'),
(26, 7, '2', '1', '', '100');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `name`, `email`, `address`, `mobile`, `password`) VALUES
(5, 'Kasun', 'kasunthilina1000@gmail.com', '66-D/5,Maragahahena,Kuda Uduwa', 2274526, '$2y$10$v9NOx7GmfCHKWi903dk2Me8C91CjxNbpoAcN56zile8aGHRpA.WH.'),
(6, 'randu', 'randu@gmail.com', '66-D/5,Maragahahena,Kuda Uduwa', 8676732, '$2y$10$FFEkgSPt704sYRI9SK.NY.f9mbDarzozncSEawPjzmyqTM2xf9ysC');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `EmpId` varchar(20) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `NICNumber` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `acctype` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `EmpId`, `FirstName`, `LastName`, `UserName`, `NICNumber`, `Address`, `PhoneNumber`, `Password`, `acctype`) VALUES
(1, 'E001', 'Muneeb', 'Khan', 'muneeb', '960580800V', 'Panadura', '0770828319', 'muneeb123', 2),
(2, 'E001', 'ahad', 'jamal', 'ahad', '123432134', 'chunain', '1232143212', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` int(11) NOT NULL,
  `BillYear` varchar(45) DEFAULT NULL,
  `BillMonth` varchar(45) DEFAULT NULL,
  `BillType` varchar(45) DEFAULT NULL,
  `TotalUnits` int(11) DEFAULT NULL,
  `TotalAmount` float DEFAULT NULL,
  `Paid` varchar(10) DEFAULT NULL,
  `PaidDate` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenditurereport`
--

CREATE TABLE `expenditurereport` (
  `ReportId` varchar(100) NOT NULL,
  `Year` varchar(45) DEFAULT NULL,
  `Month` varchar(45) DEFAULT NULL,
  `TotalExpenses` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `reportid` varchar(20) NOT NULL,
  `supplireid` varchar(20) NOT NULL,
  `medName` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockitem`
--

CREATE TABLE `stockitem` (
  `id` int(11) NOT NULL,
  `ItemID` varchar(45) DEFAULT NULL,
  `ItemName` varchar(45) DEFAULT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `ItemQuantity` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockitem`
--

INSERT INTO `stockitem` (`id`, `ItemID`, `ItemName`, `Description`, `Category`, `Price`, `ItemQuantity`) VALUES
(52, '1', 'pizza', 'M', 'FD', 450, 74),
(53, '2', 'Burger', 'Zinger', 'FD', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stocksales`
--

CREATE TABLE `stocksales` (
  `id` int(11) NOT NULL,
  `ItemID` varchar(45) DEFAULT NULL,
  `ItemQuantity` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocksupplyorder`
--

CREATE TABLE `stocksupplyorder` (
  `id` int(11) NOT NULL,
  `ItemID` varchar(45) DEFAULT NULL,
  `ItemQuantity` int(11) DEFAULT NULL,
  `ret_qty` int(10) NOT NULL,
  `ret_price` int(20) NOT NULL,
  `ret_date` date DEFAULT NULL,
  `pur_date` date DEFAULT NULL,
  `pur_price` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocksupplyorder`
--

INSERT INTO `stocksupplyorder` (`id`, `ItemID`, `ItemQuantity`, `ret_qty`, `ret_price`, `ret_date`, `pur_date`, `pur_price`) VALUES
(8, '1', 100, 0, 0, '0000-00-00', '2020-10-21', '30000'),
(9, '2', 25, 0, 0, '0000-00-00', '2020-10-21', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `supplierdetails`
--

CREATE TABLE `supplierdetails` (
  `id` int(11) NOT NULL,
  `supplierid` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wages`
--

CREATE TABLE `wages` (
  `id` int(11) NOT NULL,
  `w_id` int(11) NOT NULL,
  `wages` varchar(20) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wages`
--

INSERT INTO `wages` (`id`, `w_id`, `wages`, `datetime`) VALUES
(5, 2, '1000', '2020-10-22'),
(6, 2, '300', '2020-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `id` int(11) NOT NULL,
  `w_id` int(11) DEFAULT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_cnic` varchar(20) NOT NULL,
  `w_phone` varchar(20) NOT NULL,
  `w_address` varchar(50) NOT NULL,
  `dtype` int(30) NOT NULL DEFAULT 1,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`id`, `w_id`, `w_name`, `w_cnic`, `w_phone`, `w_address`, `dtype`, `datetime`) VALUES
(7, 1, 'abc', '83929', '90299', 'hjdhjda', 1, '2020-10-21'),
(11, 2, 'ali', '838', '839', 'jf', 1, '2020-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashierinvoice`
--
ALTER TABLE `cashierinvoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashierinvoiceitem`
--
ALTER TABLE `cashierinvoiceitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditurereport`
--
ALTER TABLE `expenditurereport`
  ADD PRIMARY KEY (`ReportId`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockitem`
--
ALTER TABLE `stockitem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ItemId_UNIQUE` (`ItemID`);

--
-- Indexes for table `stocksales`
--
ALTER TABLE `stocksales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ItemId_UNIQUE` (`ItemID`);

--
-- Indexes for table `stocksupplyorder`
--
ALTER TABLE `stocksupplyorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierdetails`
--
ALTER TABLE `supplierdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wages`
--
ALTER TABLE `wages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `w_cnic` (`w_cnic`,`w_phone`),
  ADD UNIQUE KEY `w_id` (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashierinvoice`
--
ALTER TABLE `cashierinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cashierinvoiceitem`
--
ALTER TABLE `cashierinvoiceitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stockitem`
--
ALTER TABLE `stockitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `stocksales`
--
ALTER TABLE `stocksales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocksupplyorder`
--
ALTER TABLE `stocksupplyorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplierdetails`
--
ALTER TABLE `supplierdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wages`
--
ALTER TABLE `wages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `waiter`
--
ALTER TABLE `waiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
