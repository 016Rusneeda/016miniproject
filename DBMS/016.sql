-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27 ม.ค. 2023 เมื่อ 08:08 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20142785_miniproject016`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `c_no` int(11) NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `S_LastName` varchar(100) NOT NULL,
  `S_Address` varchar(100) NOT NULL,
  `S_SunjectName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tbl_customers`
--

INSERT INTO `tbl_customers` (`c_no`, `S_Name`, `S_LastName`, `S_Address`, `S_SunjectName`) VALUES
(2, 'Sittisak', 'Sakda', 'BKK', 'iu'),
(3, 'Ketsara', 'Kidmak', 'BKK', 'jk');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id_employee` int(11) NOT NULL,
  `name_employee` varchar(100) NOT NULL,
  `lastname_employee` varchar(100) NOT NULL,
  `tel_employee` int(50) NOT NULL,
  `address_employee` varchar(100) NOT NULL,
  `salary_employee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `type_product` varchar(50) NOT NULL,
  `price_product` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_sale`
--

CREATE TABLE `tbl_sale` (
  `id_sale` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `vat` double NOT NULL,
  `date_sale` date NOT NULL DEFAULT current_timestamp(),
  `totolprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_type_product`
--

CREATE TABLE `tbl_type_product` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  ADD PRIMARY KEY (`id_sale`);

--
-- Indexes for table `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `c_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
