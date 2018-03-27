-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 11:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocates`
--

CREATE TABLE `advocates` (
  `id` int(11) NOT NULL,
  `advocate_name` varchar(100) NOT NULL,
  `chamber_name` varchar(100) NOT NULL,
  `bar_name` varchar(100) NOT NULL,
  `mem_no` int(11) NOT NULL,
  `chamber_address` varchar(100) NOT NULL,
  `residential_address` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocates`
--

INSERT INTO `advocates` (`id`, `advocate_name`, `chamber_name`, `bar_name`, `mem_no`, `chamber_address`, `residential_address`, `phone_no`, `email`, `pass`) VALUES
(12, '', '', '', 0, '', '', '', 'abc@gmail.com', '123'),
(13, '', '', '', 0, '', '', '', 'a@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `c_id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `tin` varchar(100) NOT NULL,
  `name_org` varchar(100) NOT NULL,
  `name_per` varchar(100) NOT NULL,
  `add_off` varchar(100) NOT NULL,
  `add_pre` varchar(100) NOT NULL,
  `add_per` varchar(100) NOT NULL,
  `cont_name` varchar(100) NOT NULL,
  `cont_no` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `name_fat` varchar(100) NOT NULL,
  `name_mot` varchar(100) NOT NULL,
  `name_fia` varchar(100) NOT NULL,
  `occ` varchar(100) NOT NULL,
  `son` int(11) NOT NULL,
  `dau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `ad_id`, `tin`, `name_org`, `name_per`, `add_off`, `add_pre`, `add_per`, `cont_name`, `cont_no`, `nid`, `birth_date`, `name_fat`, `name_mot`, `name_fia`, `occ`, `son`, `dau`) VALUES
(13, 12, '5487', 'Qrt Company', 'Siay Ahmed', '12/c', '', '', '', '+8801731242527', '4587512544425454', '2018-03-27', '', '', 'xyz', '', 0, 0),
(14, 12, '457', 'Monirruzaman', 'Mr M Ahmed', '4-A/ 13-2', '', 'dhanmondi, Dhaka', 'Siay Ahmed', '+880125458525', '4758851254', '2018-03-27', '', '', '', '', 0, 0),
(15, 12, '764', 'lslsl', 'lssll', 'lsls', '', '', '', '+880', '8477383', '2018-03-27', '', '', '', '', 0, 0),
(16, 13, '1111111', 'aaaaaa', 'aaaaaa', '', '', '', '', '+880', 'aaaaa', '2018-03-27', '', '', '', '', 0, 0),
(17, 13, '1245', 'aaaaa', 'aaaa', '', '', '', '', '+880', 'aaaaa', '2018-03-27', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `t_id` int(11) NOT NULL,
  `tin` int(11) NOT NULL,
  `circle` varchar(100) NOT NULL,
  `tax_zone` varchar(100) NOT NULL,
  `ass_year` varchar(100) NOT NULL,
  `net_wealth` double NOT NULL,
  `income` double NOT NULL,
  `tax_paid` double NOT NULL,
  `rec_date` date NOT NULL,
  `serial` int(11) NOT NULL,
  `return_nat` varchar(100) NOT NULL,
  `sub_last_date` date NOT NULL,
  `next_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`t_id`, `tin`, `circle`, `tax_zone`, `ass_year`, `net_wealth`, `income`, `tax_paid`, `rec_date`, `serial`, `return_nat`, `sub_last_date`, `next_date`) VALUES
(26, 5487, '', '', '2018-19', 0, 0, 54252, '2018-03-27', 0, 'Self', '0000-00-00', '0000-00-00'),
(27, 764, '', '', '2018-19', 0, 0, 12547, '2018-03-27', 0, 'Self', '0000-00-00', '0000-00-00'),
(28, 1245, '', '', '2018-19', 0, 0, 12548, '2018-03-27', 0, 'Self', '0000-00-00', '0000-00-00'),
(29, 1111111, '', '', '2018-19', 0, 0, 1454, '2018-03-27', 1254, 'Self', '0000-00-00', '0000-00-00'),
(30, 457, '', 'slsl', '2018-19', 0, 0, 541255, '2018-03-27', 0, 'Self', '0000-00-00', '0000-00-00'),
(31, 764, '', 'lslas', '2019-20', 0, 0, 125456536, '2018-03-27', 125, 'Self', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocates`
--
ALTER TABLE `advocates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocates`
--
ALTER TABLE `advocates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
