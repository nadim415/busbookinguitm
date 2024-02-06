-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql207.infinityfree.com
-- Generation Time: Feb 06, 2024 at 03:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35922759_busbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `passenger_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `destination` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `passenger_name`, `telephone`, `email`, `destination`, `bus_name`) VALUES
(12, 'AHMAD NADIM NAJMI BIN FAIZAL', '0166748164', 'naddyshushi@gmail.com', 'Temerloh', 'Mey Express'),
(13, 'Aiman', '012456874', 'aimana12@gmail.com', 'Temerloh', 'Mey Express'),
(14, 'Muhd Ismail', '0134578812', 'ismail11@gmail.com', 'Kuala Lumpur', 'Nadim Express'),
(15, 'Firdaus Sayidi', '0126589922', 'firdaus14@gmail.com', 'Johor Bharu', 'Musafir'),
(16, 'Najmi Faizal', '0166748164', 'najmiboek@gmail.com', 'Alor Setar', 'Mutiara Express'),
(18, 'Ahmad Haziq', '0123654789', 'ahaziq@gmail.com', 'Temerloh', 'Mey Express'),
(48, 'Ahmad Nadim', '0166748164', 'naddyshushi@gmail.com', 'Kuantan', 'Mey Express');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `Bus_Name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Tel` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `Bus_Name`, `Tel`) VALUES
(2, 'Nadim Express', '0167894563'),
(3, 'Mutiara Express', '019 8787656'),
(4, 'Mey Express', '0172923017'),
(5, 'Meytiara Express', '01129246897'),
(6, 'Transasional', '01161009684'),
(7, 'Musafir', '01161009684'),
(8, 'Kasimbaba Express', '0134597862'),
(9, 'Ali Adik Beradik Express', '0134889955'),
(10, 'King Express', '0197788462'),
(11, 'Express Anjung', '0169874521');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `level` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `total_amount` float NOT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` float DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `zip_code` int(11) NOT NULL,
  `card_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `card_number` varchar(16) CHARACTER SET utf8mb4 NOT NULL,
  `exp_month` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `exp_year` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `name`, `email`, `address`, `city`, `state`, `zip_code`, `card_name`, `card_number`, `exp_month`, `exp_year`, `cvv`) VALUES
(5, 42, 'AHMAD NADIM NAJMI', 'naddyshushi@gmail.com', '819,LORONG MELOR 3/6,AMBANGAN HEIGHT', 'SUNGAI PETANISUNGAI PETANI', 'Kedah', 8000, 'AHMAD NADIM NAJMI', '1222333344447890', '1', '2028', 159),
(6, 42, 'aimana', 'aiman12@gmail.com', '71, lorong merican, taman anggun', 'temerloh', 'Pahang', 84520, 'Aiman Bin Ashari', '1154239902441154', '9', '2029', 159),
(7, 50, 'mael', 'ismail11@gmail.com', '92, Vue rsidence, Jalan pahang', 'Kuala Lumpur', 'Selangor', 2456, 'Muhd Ismail', '1122540126663578', '7', '2024', 125),
(8, 60, 'firdaus1', 'firdaus14@gmail.com', '41, Jalan 3/6 Melor, Taman seri Indah', 'Johor bahru', 'Johor', 2544, 'Firdaus Saiyidi', '1145998756332254', '5', '2026', 127),
(9, 45, 'najmi15', 'najmiboek@gmail.com', '810, Jalan Aman 8, Taman Anak Bukit', 'Alor setar', 'kedah ', 8666, 'Najmi Faizal', '7855955241007894', '5', '2029', 172),
(11, 42, 'haziq', 'ahaziq@gmail.com', '1, Jalan 8, Kampuang Kuala', 'temerloh', 'Pahang', 2544, 'Ahmad Haziq', '122355678890123', '4', '2026', 126),
(13, 42, 'AHMAD NADIM NAJMI', 'naddyshushi@gmail.com', '819,LORONG MELOR 3/6,AMBANGAN HEIGHT', 'SUNGAI PETANISUNGAI PETANI', 'Kedah', 8000, 'Ahmad Nadim', '1235664477885124', '2', '2026', 124);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `via_city` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `destination` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `bus_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time(6) NOT NULL,
  `cost` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `via_city`, `destination`, `bus_name`, `departure_date`, `departure_time`, `cost`) VALUES
(2, 'Machang Station', 'Machang', 'Mutiara Express', '2024-02-09', '17:34:00.000000', '35'),
(3, 'Tbs (Terminal bersepadu Selatan)', 'Kuala Lumpur', 'Nadim Express', '2024-02-11', '13:30:00.000000', '50'),
(4, 'Gurun Terminal bus', 'Gurun, Kedah', 'Sani Express', '2024-02-04', '22:15:00.000000', '45'),
(6, 'Terminal Kuantan Central', 'Kuantan', 'Mey Express', '2024-03-07', '16:00:00.000000', '37'),
(7, 'Temerloh', 'Temerloh', 'Mey Express', '2024-03-09', '18:30:00.000000', '42'),
(8, 'Shah Alam', 'Shah Alam', 'Meytiara Express', '2024-03-10', '02:01:00.000000', '50'),
(10, 'Terminal 1 Seremban', 'Seremban', 'Transasional', '2024-02-02', '11:30:00.000000', '50'),
(11, 'Tun Aminah terminal', 'Johor Bharu', 'Musafir', '2024-02-05', '21:45:00.000000', '60'),
(12, 'Gurun Terminal Bus', 'Gurun, Kedah', 'Sani Express', '2024-02-04', '22:15:00.000000', '60'),
(13, 'Terminal Bas Ekspres Ukir Square', 'Sungai Petani', 'Mutiara Express', '2024-02-09', '23:59:00.000000', '40'),
(14, 'Terminal Bas Ekspres Ukir Square', 'Sungai Petani', 'Nadim Express', '2024-02-09', '23:45:00.000000', '45'),
(15, 'Terminal Bas Ekspres Ukir Square', 'Sungai Petani', 'Mey Express ', '2024-02-09', '23:30:00.000000', '39'),
(16, 'Terminal Bas Shahab Perdana', 'Alor Setar', 'Mutiara Express', '2024-03-09', '22:50:00.000000', '45'),
(17, 'Terminal Bas Shahab Perdana', 'Alor Setar', 'Nadim Express', '2024-03-09', '22:30:00.000000', '46'),
(21, 'Terminal Bus 1', 'Kota Bahru', 'Mutiara Express', '2024-02-06', '23:56:00.000000', '42'),
(25, 'Terminal Bus 1', 'Machang', 'Mutiara Express', '2024-05-05', '23:59:00.000000', '42');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) DEFAULT NULL,
  `id_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `name` text CHARACTER SET utf8mb4 NOT NULL,
  `contact` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `address` text CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_ef_list`
--

CREATE TABLE `student_ef_list` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `ef_no` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `course_id` int(11) NOT NULL,
  `total_fee` float NOT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Last_Name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `First_Name`, `Last_Name`, `username`, `email`, `password`) VALUES
(2, 732724487058213273, 'MUHAMAD ISMAIL', 'BIN AZMAN', 'ISMAIL', 'ismailazman0505@gmail.com', 'ISMAIL01'),
(4, 4195408202417, 'AHMAD', 'NAJMI', 'nadim', 'naddyshushi@gmail.com', 'nadim'),
(5, 7855419885626, 'amir', 'karim', 'amir', 'amir1@gmail.com', 'amir'),
(6, 44, 'Abu', 'Noah', 'abunoah', 'Noah12@gmail.com', '1234'),
(7, 25055, 'Nurul', 'Zaidah', 'nzaidah', 'nurulzaidah145', '1234'),
(8, 121195967, 'Aiman', 'Ashari', 'aimana', 'aiman12@gmail.com', '1234'),
(9, 817279555117765165, 'Muhd', 'Ismail', 'mael', 'ismail11@gmail.com', '1234'),
(10, 45688407, 'Firdaus', 'Sayidi', 'firdaus1', 'firdaus14@gmail.com', '159'),
(11, 47440223934915472, 'Najmi', 'Faizal', 'najmi15', 'najmiboek@gmail.com', '41504'),
(12, 3282709642512737596, 'kamal', 'adli', 'kamal', 'kamaladli@gmail.com', 'kamal'),
(13, 6734989539830, 'Albert', 'Din', 'Albert', 'albert@gmail.com', 'Albert12345'),
(14, 6410413365, 'Ahmad ', 'Haziq', 'haziq', 'ahaziq@gmail.com', 'haziq159'),
(15, 106351511, 'nadim', 'najmi', 'nadimnajmi1', 'naddyshushi@gmail.com', 'nadim123'),
(16, 698950649378868739, 'Ahmad', 'Nadim', 'ahmad1', 'naddyshushi@gmail.com', '123');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
