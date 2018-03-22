-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 11:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`ID`, `user`, `pass`, `fname`, `lname`, `email`) VALUES
(1, 'Admin', '123', 'Jatsada', 'Jongrat', 'Jatsada.jr@gmail.com'),
(2, 'Admin2', '456', 'John', 'Smith', 'aaaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `roomID` int(50) NOT NULL,
  `roompic` varchar(200) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `roomleft` int(10) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`roomID`, `roompic`, `roomtype`, `price`, `roomleft`, `detail`) VALUES
(1, 'deluxeroom.jpg', 'Studio room', 3200, 1, 'The st.Trope Hotel luxury bedrooms have 2 Queen beds with Vi-Spring mattresses, Sicilian marble bathrooms  and separate power showers.  Our Family rooms can sleep up to 4 adults and some rooms '),
(2, 'room2.jpg', 'Studio room', 4800, 3, 'The st.Trope Hotel luxury bedrooms have 2 Queen beds with Vi-Spring mattresses, Sicilian marble bathrooms  and separate power showers.  Our Family rooms can sleep up to 4 adults and some rooms '),
(3, 'room3.jpg', 'Family room', 5200, 2, 'The st.Trope Hotel luxury bedrooms have 2 Queen beds with Vi-Spring mattresses, Sicilian marble bathrooms  and separate power showers.  Our Family rooms can sleep up to 4 adults and some rooms '),
(6, 'family.jpg', 'Exclusive Family room', 7600, 1, 'The st.Trope Hotel luxury bedrooms have 2 Queen beds with Vi-Spring mattresses, Sicilian marble bathrooms  and separate power showers.  Our Family rooms can sleep up to 4 adults and some rooms ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`roomID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `roomID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
