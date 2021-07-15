-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 03:51 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_theatre`
--

CREATE TABLE `add_theatre` (
  `Theatre_id` int(11) NOT NULL,
  `Theatre_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_theatre`
--

INSERT INTO `add_theatre` (`Theatre_id`, `Theatre_name`) VALUES
(3, 'Atlaps'),
(1, 'Balaji'),
(2, 'Raja'),
(4, 'Ravi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password1` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(3) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `gender`, `password1`, `name`, `age`, `blood`, `mobile`, `address`) VALUES
(1, 'Ravi', '9b575eacfec8ee3aa90fa96367bd1838', 'msmnr29@gmail.com', 'Male', '9b575eacfec8ee3aa90fa96367bd1838', 'Ravikumar M', 20, 'Ab+', '8248128077', 'no,146,Naveenagarden,kosapalayam,puducherry-13.');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `details` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `id` int(5) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `feed_back` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feed_back`) VALUES
(2, 'Ravi', 'msmnr29@gmail.com', 'Best Experience i ever had\r\nThank you....'),
(3, 'balaji', 'ravi29.7.1999@gmail.com', 'Such a wonderfull site for ticket booking\r\n'),
(4, 'Raja', 'raja@gmail.com', 'You have to improve something more attractive'),
(5, 'Mani', 'nnetha4@gmail.com', 'Finally i have found a perfect site for movie booking.'),
(6, 'Nethaji', 'nethaji29@gmail.com', 'Finally i have found a perfect site for movie booking.'),
(7, 'Manisha', 'manisha@gmail.com', 'that was suck man...');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `date` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `movie_name` varchar(250) NOT NULL,
  `qty` int(3) NOT NULL,
  `seat_group` varchar(250) NOT NULL,
  `Theatre_name` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`date`, `email`, `fullname`, `id`, `mobile`, `movie_name`, `qty`, `seat_group`, `Theatre_name`, `time`) VALUES
('2021-05-23', 'msmnr29@gmail.com', 'Ravikumar', 1, '8248128077', 'Avengers', 4, 'Box ', 'Raja', '12.30 PM'),
('2021-05-24', 'nethaji29@gmail.com', 'Raja', 2, '9626876141', 'Teddy', 3, 'Balcony', 'Balaji', '03.30 PM'),
('2021-05-26', 'nethaji29@gmail.com', 'Nethaji', 3, '8681087922', 'Avengers', 2, 'Box ', 'Raja', '12.30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `movie_booking`
--

CREATE TABLE `movie_booking` (
  `booking_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `duration` varchar(250) NOT NULL,
  `end_date` date NOT NULL,
  `movie_name` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_booking`
--

INSERT INTO `movie_booking` (`booking_id`, `description`, `duration`, `end_date`, `movie_name`, `start_date`, `image`) VALUES
(21, 'Marvel Presents', '03:00', '2021-06-30', 'Avengers', '2021-06-10', 'avengers1.jpg'),
(22, 'public selection', '02:40', '2021-06-05', 'Karnan', '2021-06-23', 'karnan1.jpg'),
(24, 'Block buster flim', '02:30', '2021-06-24', 'Master', '2021-06-13', 'master1.jpg'),
(26, 'Action is waiting for you...', '02:58', '2021-06-30', 'War', '2021-06-15', 'war.jpg'),
(27, 'Surya in action...', '03:00', '2021-07-11', 'Sooraraipotru', '2021-06-30', 'sooraraipotru.jpg'),
(28, 'Love Story', '02:58', '2021-06-15', 'Dia', '2021-06-06', 'dia.jpg'),
(29, 'Cricked based movie...', '02:50', '2021-06-30', 'Jersey', '2021-06-20', 'jersey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review_page`
--

CREATE TABLE `review_page` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `rating` int(5) NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_page`
--

INSERT INTO `review_page` (`id`, `name`, `email`, `rating`, `reason`) VALUES
(2, 'Nethaji', 'nethaji29@gmail.com', 4, 'For Example.....!!!'),
(3, 'Mani', 'mani@gmail.com', 4, 'Just like it.'),
(4, 'Manoj', 'mano@gmail.com', 5, 'good to use...'),
(5, 'Ravi', 'msmnr29@gmail.com', 5, 'I am really enjoying this user Interface and i really liked it.'),
(6, 'Ravi', 'msmnr29@gmail.com', 5, 'I am really enjoying this user Interface and i really liked it.'),
(7, 'Sara', 'sara@gmail.com', 3, 'I have already seen app like this.\r\n'),
(8, 'Deve', 'deva99@gmail.com', 4, 'Just Testing.....');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `movie_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_path`, `movie_name`) VALUES
(1, 'images/pubg profile.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `theatre_setting`
--

CREATE TABLE `theatre_setting` (
  `Theatre_id` int(3) NOT NULL,
  `Theatre_name` varchar(250) NOT NULL,
  `seat_group` varchar(250) NOT NULL,
  `total_seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatre_setting`
--

INSERT INTO `theatre_setting` (`Theatre_id`, `Theatre_name`, `seat_group`, `total_seats`) VALUES
(1, 'Balaji', 'Balcony', 30),
(2, 'Raja', 'Box ', 25),
(4, 'Balaji', 'First class', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `dateofbirth` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `id` int(3) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `password1` int(11) NOT NULL,
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`dateofbirth`, `email`, `fullname`, `gender`, `id`, `mobile`, `password`, `password1`, `username`) VALUES
('1999-07-29', 'msmnr29@gmail.com', 'Ravikumar', 'Male', 1, '8248128077', '123456789rk', 123456789, 'Ravi');

-- --------------------------------------------------------

--
-- Table structure for table `user_booking`
--

CREATE TABLE `user_booking` (
  `date` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `seat_group` varchar(250) NOT NULL,
  `Theatre_name` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `ts_id` int(11) DEFAULT NULL,
  `movie_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_booking`
--

INSERT INTO `user_booking` (`date`, `email`, `fullname`, `id`, `mobile`, `qty`, `seat_group`, `Theatre_name`, `time`, `ts_id`, `movie_name`) VALUES
('2021-05-26', 'nethaji29@gmail.com', 'Nethaji', 2, '8681087922', 2, 'Box ', 'Raja', '12.30 PM', NULL, 'Avengers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_theatre`
--
ALTER TABLE `add_theatre`
  ADD PRIMARY KEY (`Theatre_id`),
  ADD UNIQUE KEY `Theatre_name` (`Theatre_name`),
  ADD UNIQUE KEY `Theatre_name_2` (`Theatre_name`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_booking`
--
ALTER TABLE `movie_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `movie_name` (`movie_name`);

--
-- Indexes for table `review_page`
--
ALTER TABLE `review_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theatre_setting`
--
ALTER TABLE `theatre_setting`
  ADD PRIMARY KEY (`Theatre_id`),
  ADD KEY `Theatre_name` (`Theatre_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_booking`
--
ALTER TABLE `user_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_name` (`movie_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_theatre`
--
ALTER TABLE `add_theatre`
  MODIFY `Theatre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie_booking`
--
ALTER TABLE `movie_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `review_page`
--
ALTER TABLE `review_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theatre_setting`
--
ALTER TABLE `theatre_setting`
  MODIFY `Theatre_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_booking`
--
ALTER TABLE `user_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `theatre_setting`
--
ALTER TABLE `theatre_setting`
  ADD CONSTRAINT `theatre_setting_ibfk_1` FOREIGN KEY (`Theatre_name`) REFERENCES `add_theatre` (`Theatre_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_booking`
--
ALTER TABLE `user_booking`
  ADD CONSTRAINT `user_booking_ibfk_1` FOREIGN KEY (`movie_name`) REFERENCES `movie_booking` (`movie_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
