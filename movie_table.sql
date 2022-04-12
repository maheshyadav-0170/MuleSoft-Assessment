-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 05:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_table`
--

CREATE TABLE `movie_table` (
  `Movie_name` varchar(30) NOT NULL,
  `Lead_Actor` varchar(30) NOT NULL,
  `Actress` varchar(30) NOT NULL,
  `Release_Year` varchar(30) NOT NULL,
  `Director_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_table`
--

INSERT INTO `movie_table` (`Movie_name`, `Lead_Actor`, `Actress`, `Release_Year`, `Director_Name`) VALUES
('Bahubali - The conclusion', 'Prabhas', 'Anushka', '2019', 'S S Rajamouli'),
('RRR', 'Jr NTR & Ram Charan', 'Olivia Moris', '2022', 'SS Rajamouli'),
('KGF - 2', 'Yash', 'Shrinidhi Shetty', '2022', 'Prashanth Neel'),
('Rangastalam', 'Ram Charan', 'Samantha', '2019', 'Sukumar'),
('Beast', 'Vijay', 'Pooja Hegde', '2020', 'Trivikram'),
('Maharshi', 'Mahesh Babu', 'Pooja Hegde', '2020', 'Vamshi Paidipally'),
('Maharshi', 'Mahesh Babu', 'Pooja Hegde', '2020', 'Vamshi Paidipally');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
