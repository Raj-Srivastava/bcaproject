-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 14, 2021 at 03:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------
--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `ffirst` varchar(20) NOT NULL,
  `flast` varchar(20) NOT NULL,
  `femail` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `fphone` int(15) NOT NULL,
  `fdesti` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `ffirst`, `flast`, `femail`, `city`, `fphone`, `fdesti`) VALUES
(1, 'Raj', 'Singh', 'rajsingh24@gmail.com', 'Allahabad', 6386002445, 'Varanasi'),
(2, 'kiran', 'Naik', 'kirannaik1@gmail.com', 'Pune', 8458689560, 'Ayodhya'),
(7, 'Raj', 'Singh', 'rajsingh24@gmail.com', 'Allahabad', 6386002445, 'Varanasi'),
(8, 'Hitesh', 'HT', 'hitesh45jk@gmail.com', 'Bangalore', 4586965611, 'Varanasi'),
(9, 'Raj', 'Singh', 'rajsingh24@gmail.com', 'Allahabad', 6386002445, 'Varanasi'),
(10, 'Raj', 'Singh', 'rajsingh24@gmail.com', 'Allahabad', 6386002445, 'Varanasi Gate'),
(11, 'Raj', 'Singh', 'rajsingh24@gmail.com', 'Allahabad', 6386002445, 'Ayodhya');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(10) NOT NULL,
  `phone` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`,`lname`, `password`, `email`, `city`, `phone`) VALUES
(51, 'Raj', 'Singh', 'Rsi12345', 'rajsingh24@gmail.com', 'Allahabad', 6386002445),
(54, 'Aditya','Maurya', 'Adi12389', 'adityag45@gmail.com', 'Manglore', 8574968283),
(73, 'Gajanan','Yadav', 'GAjju700', 'gajabhat@gmail.com', 'Varanasi', 7984768581),
(74, 'Kiran', 'Naik','Punekn12' ,'kirannaik1@gmail.com', 'Pune', 8458689560);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedbk` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedbk`) VALUES
(1, 'joy', 'joy123@gmail.com', 'good website'),
(2, 'amar', 'amar56@gmail.com', 'nice website'),
(3, 'adam', 'adamgray@gmail.com', 'your website looks good and nice user interface');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `pname` varchar(30) NOT NULL,
  `pdescription` varchar(10000) NOT NULL,
  `pi_main` varchar(1000) NOT NULL,
  `pi1` varchar(1000) NOT NULL,
  `pi2` varchar(1000) NOT NULL,
  `pi3` varchar(1000) NOT NULL,
  `package` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`pname`, `pdescription`, `pi_main`, `pi1`, `pi2`, `pi3`, `package`) VALUES
('Varanasi', 'A City in Uttar Pradesh Situated along the holy River Ganges, Varanasi enjoys a picturesque setting. The name of the town was formerly Kashi,Varanasi is probably one of the most ancient living cities in India. From time immemorial it has been a great religious center for Hindus and one of their most sacred places of pilgrimage, being visited by millions of people every year.The places worth visiting in the city of Varanasi are several. The ghats (stepped banks) that dot the riverside, and the hundreds of temples that form part of the old city of Varanasi. The city has a reputation of weaving, creating handlooms, handicrafts, etc. The weaver’s community is interesting to explore as you can witness the beautiful creation in front of your eyes. Or, even better you can purchase some of the finest masterpieces to take back home. A visit to Sarnath is also a must of a visit to Varanasi. 13 km from the city, it is a Buddhist site where Lord Buddha delivered his sermons and till date there are stupas that are marked with his teachings. The Ganga aarti is the most mesmerizing experience in Varanasi. The daily ritual of worship of the River Goddess is held at dawn and dusk that truly connects you with the divine. The aarti ceremony at dusk is truly spectacular. The taste of the local food, boat ride on the Ganges in the early morning, walking tour of the city make fond memories of a holiday in Varanasi.', 'images//destination//vns.jpg', 'images//destination//vns1.jpg', 'images//destination//vns2.jpg', 'images//destination//vns3.jpg', 9000),
('Ayodhya', 'Ayodhya is a city situated on the banks of holy river Saryu in the Indian state of Uttar Pradesh.Ayodhya, also known as Saketa, is an ancient city of India, the birthplace of Rama and setting of the great epic Ramayana.There are several things you are going to do i.e. Visit Guptar Ghat and the Ram Janki Mandir , Afterward, enjoy a boat ride in the Saryu River, Return to the Ghat and enjoy a tea in kulladh with light pakodas.visit the Faizabad city market.', 'images/destination/ayodhya.jpg', 'images/destination/ayodhya1.jpg', 'images/destination/ayodhya2.jpg', 'images/destination/ayodhya3.jpg', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `date_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`, `date_time`) VALUES
('admin', 'ad123', '2022-01-24 07:10:24am'),
('admin', 'ad123', '2022-01-25 05:54:18am'),
('admin', 'ad123', '2022-01-25 06:07:10am'),
('admin', 'ad123', '2022-01-25 06:09:19am'),
('admin', 'ad123', '2022-01-27 01:30:47pm'),
('admin', 'ad123', '2022-01-29 09:23:58am'),
('Gajanan', 'GAjju700', '2022-01-30 06:13:16pm'),
('Raj', 'Raju123', '2022-06-08 04:11:53pm'),
('admin', 'ad123', '2022-08-01 03:24:26pm'),
('admin', 'ad123', '2022-08-06 04:41:06pm');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `pid` int(10) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pcity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`pid`, `pname`, `pcity`) VALUES
(1, 'Varanasi', 'Varanasi'),
(2, 'Ayodhya', 'Ayodhya');

-- --------------------------------------------------------
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `travel_agent`
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
