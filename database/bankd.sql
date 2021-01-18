-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 08:04 PM
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
-- Database: `bankd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `current_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `current_balance`) VALUES
(1, 'Aakash Verma', 'aakash@gmail.com', 97000),
(2, 'Ajay verma', 'ajay@gmail.com', 5979),
(3, 'Anmol verma', 'anmol@gmail.com', 10865),
(4, 'aayaush Jain', 'aayushjain@gmail.com', 2456),
(5, 'Anishka sharma', 'anishkasharma@gmail.com', 8395),
(6, 'jay Sharma', 'jaysharma@gmail.com', 5769),
(7, 'Abhay Verma', 'abhayerma@gmail.com', 8345),
(8, 'Kashish Kumari', 'kashish@gmail.com', 5526),
(9, 'Sonam', 'Sonam@gmail.com', 1456),
(10, 'Saurav ', 'Sauravsharma@gmail.com', 1578);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transfer_date` text NOT NULL,
  `from_acc` int(11) NOT NULL,
  `from_acc_name` text NOT NULL,
  `to_acc` int(11) NOT NULL,
  `transfer_amt` int(11) NOT NULL,
  `transfer_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`transfer_date`, `from_acc`, `from_acc_name`, `to_acc`, `transfer_amt`, `transfer_msg`) VALUES
('04-11-2020 15:02:21 pm', 8, 'Saloni Kaithwas', 2, 1000, 'your fees'),
('05-11-2020 06:08:45 am', 5, 'Anushka Porwal', 2, 1000, 'your payment'),
('02-01-2021 19:08:49 pm', 1, 'Aaradhya Gupta', 7, 100, 'vcd'),
('02-01-2021 20:37:19 pm', 1, 'Aaradhya Gupta', 4, 2, ''),
('02-01-2021 20:37:33 pm', 1, 'Aaradhya Gupta', 4, 2, ''),
('03-01-2021 19:31:02 pm', 1, 'Aakash Verma', 1, 10, 'cp'),
('04-01-2021 20:03:07 pm', 1, 'Aakash Verma', 5, 500, 'paid'),
('04-01-2021 20:18:04 pm', 1, 'Aakash Verma', 3, 1000, 'wifi'),
('18-01-2021 19:38:54 pm', 1, 'Aakash Verma', 2, 500, 'paid'),
('18-01-2021 19:50:20 pm', 1, 'Aakash Verma', 6, 500, 'paid'),
('18-01-2021 20:00:25 pm', 1, 'Aakash Verma', 7, 500, 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
