-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 08:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `mobile`, `email`, `address`, `age`, `dob`, `gender`, `status`) VALUES
('A-1', 'Fatema Tasnim', '01776664442', 'fatema@mail.com', 'Dhaka', '50', '1988-04-08', 'Female', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bl_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pay_status` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bl_id`, `status`, `pay_status`, `amount`, `c_id`, `b_id`) VALUES
('Bl-2417343', 'inactive', 'unpaid', '5000', 'C-9601085', 'B-2702920'),
('Bl-7575482', 'active', 'paid', '8000', 'C-9601085', 'B-715415'),
('Bl-8773508', 'active', 'unpaid', '1600', 'C-9601085', 'B-2799282');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` varchar(50) NOT NULL,
  `pht_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `pht_id`, `status`, `c_id`) VALUES
('B-2702920', 'T-8677112', 'inactive', 'C-9601085'),
('B-2799282', 'P-1951708', 'active', 'C-9601085'),
('B-715415', 'H-9230126', 'active', 'C-9601085');

-- --------------------------------------------------------

--
-- Table structure for table `book_tracking`
--

CREATE TABLE `book_tracking` (
  `bt_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `active_status` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tracking`
--

INSERT INTO `book_tracking` (`bt_id`, `status`, `active_status`, `b_id`, `c_id`) VALUES
('Bt-7935912', 'active', 'requested', 'B-2702920', 'C-9601085');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `passport_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `dob`, `age`, `mobile`, `address`, `passport_id`, `status`, `gender`, `email`, `image`) VALUES
('C-1', 'MD. Mustak Un Nobi', '1990-04-22', '29', '01752222666', 'Dhaka', '67548790451', 'active', 'Male', 'mustak@mail.com', '../../storage/user_image/C-1.jpg'),
('C-9601085', 'Tom Hanks', '1993-02-25', '27', '07775544675', 'London Uk', '76543987012', 'active', 'male', 'tom@mail.com', '../../storage/user_image/C-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `e_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `salary` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `a_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_id`, `name`, `dob`, `salary`, `address`, `gender`, `email`, `mobile`, `status`, `a_id`) VALUES
('E-1', 'Toufique Elahi', '2020-04-12', '20000', 'Dhaka', 'Male', 'toufique@mail.com', '01444555666', 'active', 'A-1');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `count` int(50) NOT NULL,
  `e_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `name`, `status`, `ref`, `price`, `room_no`, `details`, `location`, `count`, `e_id`) VALUES
('H-4593945', 'Radison', 'active', 'rad123', '2500', '70', 'Four Star Hotel Luxury Bed Rooms', 'Chittagong', 0, 'E-1'),
('H-9230126', 'Sonar Gaon', 'active', 'sonar123', '2000', '70', 'Five Star Hotel with all facilities', 'Dhaka', 1, 'E-1'),
('H-9870741', 'Continental ', 'active', 'cont123', '3000', '70', 'Three Star Hotel Luxury Bed Rooms', 'Khulna', 0, 'E-1');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `is_id` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `c_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`is_id`, `comment`, `c_id`) VALUES
('I-9855168', 'Next month please create a Sajek Tour', 'C-9601085');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `type`, `ans`, `status`) VALUES
('A-1', 'A-1', 'admin', 'tom', 'active'),
('C-1', 'C-1', 'user', 'teddy', 'active'),
('C-9601085', '123', 'user', 'dog', 'active'),
('E-1', 'E-1', 'employee', 'jerry', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `p_id` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `old_price` varchar(50) DEFAULT NULL,
  `features` varchar(50) NOT NULL,
  `travel_date` date NOT NULL,
  `offer` varchar(50) DEFAULT NULL,
  `a_id` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`p_id`, `p_name`, `type`, `location`, `image`, `price`, `old_price`, `features`, `travel_date`, `offer`, `a_id`, `status`) VALUES
('P-1951708', 'Sean And Hill Tour', 'Holiday', 'Jaflong', '../../storage/package_image/pacJaflong.jpg', '1600', '1800', 'Seven Days Long tour Breakfast Launch', '2020-05-25', 'on', 'A-1', 'active'),
('P-492729', 'Sea Beach Tour', 'Holiday', 'Cox Bazar', '../../storage/package_image/pacCox.jpg', '1200', '1400', 'Seven Days Long tour with Guide Launch', '2020-05-25', 'on', 'A-1', 'active'),
('P-6119376', 'River Side Tour', 'Holiday', 'Sundorbon', '../../storage/package_image/pacShundor.jpg', '1400', '1400', 'Five Days River Side with Guide Transport ', '2020-05-25', 'off', 'A-1', 'active'),
('P-8939163', 'Hill Track Tour', 'Holiday', 'Chittagong', '../../storage/package_image/pacRangamati.jpg', '1600', '1600', 'Three Days Hilly side including all ', '2020-05-25', 'off', 'A-1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `py_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `bl_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`py_id`, `status`, `amount`, `c_id`, `b_id`, `bl_id`) VALUES
('Py-5408647', 'active', '8000', 'C-9601085', 'B-715415', 'Bl-7575482');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `comment`, `status`, `c_id`, `b_id`) VALUES
('R-9340022', 'The last Hilchori Tour was great !', 'active', 'C-9601085', 'B-2799282');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `t_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `from_date` date DEFAULT NULL,
  `no_days` varchar(50) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `seat_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`t_id`, `status`, `b_id`, `price`, `from_date`, `no_days`, `travel_date`, `seat_no`) VALUES
('T-3252330', 'active', 'B-715415', '8000', '2020-05-25', '4', '0000-00-00', 'Five Star Hotel with all facilities');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `tr_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `traveldate` date NOT NULL,
  `location_f` varchar(50) NOT NULL,
  `location_t` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `seat_no` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `count` int(50) NOT NULL,
  `e_id` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`tr_id`, `name`, `type`, `traveldate`, `location_f`, `location_t`, `ref`, `seat_no`, `price`, `details`, `count`, `e_id`, `status`) VALUES
('T-3444327', 'Sakura', 'Bus', '2020-05-25', 'Dhaka', 'Khulna', 'saku123', '50', '1200', 'Deluxe AC with TV and Food', 0, 'E-1', 'active'),
('T-6537044', 'Green Line', 'Bus', '2020-05-25', 'Dhaka', 'Cox Bazar', 'green123', '50', '1800', 'Super Deluxe AC with TV and Food', 0, 'E-1', 'active'),
('T-8677112', 'Star Line', 'Bus', '2020-05-25', 'Dhaka', 'Chittagong', 'star123', '50', '1000', 'Deluxe AC with TV ', 5, 'E-1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `w_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_info`
--

INSERT INTO `web_info` (`w_id`, `name`, `details`, `image`) VALUES
('W-1706782', 'Hilton', 'Six Star Hotel in Dhaka', '../../storage/web_info_image/c2.png'),
('W-4131457', 'Saint Martin', 'Adventure Sea Side and Romantic Place', '../../storage/web_info_image/pacSaint.jpg'),
('W-7646525', 'Chittagong Sea Port', 'Adventure and Sea Side', '../../storage/web_info_image/pacChittaSeaPort.jpg'),
('W-7886695', 'Sajek', 'Very Nice Place for Adventure', '../../storage/web_info_image/pacSajek.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `customer_bill` (`c_id`),
  ADD KEY `booking_bill` (`b_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `customer_booking` (`c_id`);

--
-- Indexes for table `book_tracking`
--
ALTER TABLE `book_tracking`
  ADD PRIMARY KEY (`bt_id`),
  ADD KEY `booking_tracking` (`b_id`),
  ADD KEY `customer_tracking` (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `admin_manager` (`a_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `emp_hotel` (`e_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`is_id`),
  ADD KEY `customer_issue` (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `admin_pack` (`a_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`py_id`),
  ADD KEY `customer_payment` (`c_id`),
  ADD KEY `booking_payment` (`b_id`),
  ADD KEY `bill_payment` (`bl_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `booking_review` (`b_id`),
  ADD KEY `customer_review` (`c_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `booking_ticket` (`b_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `emp_transport` (`e_id`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`w_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `book_tracking`
--
ALTER TABLE `book_tracking`
  ADD CONSTRAINT `book_tracking_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `book_tracking_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`);

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `emp` (`e_id`);

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `issue_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`bl_id`) REFERENCES `bill` (`bl_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `emp` (`e_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
