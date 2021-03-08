-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 06:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `physics focus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `classxii_ass`
--

CREATE TABLE `classxii_ass` (
  `id` int(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classxi_ass`
--

CREATE TABLE `classxi_ass` (
  `id` int(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inquery`
--

CREATE TABLE `inquery` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parents` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `news` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `date`) VALUES
(1, 'Welcome To Physics Focus.Get All Your Study Needs Here.Download Our Study Materials For Getting Better Marks.', '2020-10-07 17:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subs`
--

CREATE TABLE `newsletter_subs` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `performer`
--

CREATE TABLE `performer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performer`
--

INSERT INTO `performer` (`id`, `name`, `class`, `marks`, `image`, `date`) VALUES
(2, 'Best Performer', 'unknown', '', 'upload/performers/user-icon-human-person-sign-vector-10206693.jpg', '2020-10-08 15:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `study_classxi`
--

CREATE TABLE `study_classxi` (
  `id` int(255) NOT NULL,
  `material` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `study_classxii`
--

CREATE TABLE `study_classxii` (
  `id` int(255) NOT NULL,
  `material` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topper`
--

CREATE TABLE `topper` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topper`
--

INSERT INTO `topper` (`id`, `name`, `class`, `marks`, `image`, `date`) VALUES
(3, 'Topper', 'unknown', '', 'upload/toppers/user-icon-human-person-sign-vector-10206693.jpg', '2020-10-08 14:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_counter`
--

CREATE TABLE `visitor_counter` (
  `id` int(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor_counter`
--

INSERT INTO `visitor_counter` (`id`, `ip_address`, `date`) VALUES
(133, '::1', '2020-10-08 16:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_showcase1`
--

CREATE TABLE `youtube_showcase1` (
  `id` int(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtube_showcase1`
--

INSERT INTO `youtube_showcase1` (`id`, `link`, `date`) VALUES
(1, 'https://www.youtube.com/embed/-zHJJzPdlvk', '2020-10-08 08:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_showcase2`
--

CREATE TABLE `youtube_showcase2` (
  `id` int(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtube_showcase2`
--

INSERT INTO `youtube_showcase2` (`id`, `link`, `date`) VALUES
(2, 'https://www.youtube.com/embed/zT8TFEaJixQ', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `youtube_showcase3`
--

CREATE TABLE `youtube_showcase3` (
  `id` int(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtube_showcase3`
--

INSERT INTO `youtube_showcase3` (`id`, `link`, `date`) VALUES
(1, 'https://www.youtube.com/embed/YecrG9NOBIo', '2020-10-08 08:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classxii_ass`
--
ALTER TABLE `classxii_ass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classxi_ass`
--
ALTER TABLE `classxi_ass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquery`
--
ALTER TABLE `inquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subs`
--
ALTER TABLE `newsletter_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performer`
--
ALTER TABLE `performer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_classxi`
--
ALTER TABLE `study_classxi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_classxii`
--
ALTER TABLE `study_classxii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topper`
--
ALTER TABLE `topper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_showcase1`
--
ALTER TABLE `youtube_showcase1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_showcase2`
--
ALTER TABLE `youtube_showcase2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_showcase3`
--
ALTER TABLE `youtube_showcase3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `classxii_ass`
--
ALTER TABLE `classxii_ass`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classxi_ass`
--
ALTER TABLE `classxi_ass`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquery`
--
ALTER TABLE `inquery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter_subs`
--
ALTER TABLE `newsletter_subs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `performer`
--
ALTER TABLE `performer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `study_classxi`
--
ALTER TABLE `study_classxi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `study_classxii`
--
ALTER TABLE `study_classxii`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topper`
--
ALTER TABLE `topper`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `youtube_showcase1`
--
ALTER TABLE `youtube_showcase1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `youtube_showcase2`
--
ALTER TABLE `youtube_showcase2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `youtube_showcase3`
--
ALTER TABLE `youtube_showcase3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
