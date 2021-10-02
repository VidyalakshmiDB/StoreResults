-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 12:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_my_results`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem1`
--

CREATE TABLE `result_cse_sem1` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub11_in` int(3) NOT NULL,
  `sub11_ex` int(3) NOT NULL,
  `sub11_total` int(3) NOT NULL,
  `sub12_in` int(3) NOT NULL,
  `sub12_ex` int(3) NOT NULL,
  `sub12_total` int(3) NOT NULL,
  `sub13_in` int(3) NOT NULL,
  `sub13_ex` int(3) NOT NULL,
  `sub13_total` int(3) NOT NULL,
  `sub14_in` int(3) NOT NULL,
  `sub14_ex` int(3) NOT NULL,
  `sub14_total` int(3) NOT NULL,
  `sub15_in` int(3) NOT NULL,
  `sub15_ex` int(3) NOT NULL,
  `sub15_total` int(3) NOT NULL,
  `sub16_in` int(3) NOT NULL,
  `sub16_ex` int(3) NOT NULL,
  `sub16_total` int(3) NOT NULL,
  `sub17_in` int(3) NOT NULL,
  `sub17_ex` int(3) NOT NULL,
  `sub17_total` int(3) NOT NULL,
  `sub18_in` int(3) NOT NULL,
  `sub18_ex` int(3) NOT NULL,
  `sub18_total` int(3) NOT NULL,
  `sem1_total` int(3) NOT NULL,
  `sem1_sgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_cse_sem1`
--

INSERT INTO `result_cse_sem1` (`u_usn`, `sub11_in`, `sub11_ex`, `sub11_total`, `sub12_in`, `sub12_ex`, `sub12_total`, `sub13_in`, `sub13_ex`, `sub13_total`, `sub14_in`, `sub14_ex`, `sub14_total`, `sub15_in`, `sub15_ex`, `sub15_total`, `sub16_in`, `sub16_ex`, `sub16_total`, `sub17_in`, `sub17_ex`, `sub17_total`, `sub18_in`, `sub18_ex`, `sub18_total`, `sem1_total`, `sem1_sgpa`) VALUES
('1VI18CS045', 34, 56, 90, 30, 50, 80, 35, 35, 70, 40, 40, 80, 32, 46, 78, 40, 40, 80, 34, 54, 88, 38, 58, 96, 662, 7.8),
('1VI18CS077', 34, 45, 79, 33, 50, 83, 23, 35, 58, 35, 56, 91, 34, 45, 79, 33, 40, 73, 34, 54, 88, 40, 50, 90, 641, 8.35),
('1VI18CS120', 30, 40, 70, 35, 35, 70, 40, 50, 90, 35, 35, 70, 34, 36, 70, 40, 44, 84, 40, 50, 90, 40, 58, 98, 642, 8.55);

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem2`
--

CREATE TABLE `result_cse_sem2` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub21_in` int(3) NOT NULL,
  `sub21_ex` int(3) NOT NULL,
  `sub21_total` int(3) NOT NULL,
  `sub22_in` int(3) NOT NULL,
  `sub22_ex` int(3) NOT NULL,
  `sub22_total` int(3) NOT NULL,
  `sub23_in` int(3) NOT NULL,
  `sub23_ex` int(3) NOT NULL,
  `sub23_total` int(3) NOT NULL,
  `sub24_in` int(3) NOT NULL,
  `sub24_ex` int(3) NOT NULL,
  `sub24_total` int(3) NOT NULL,
  `sub25_in` int(3) NOT NULL,
  `sub25_ex` int(3) NOT NULL,
  `sub25_total` int(3) NOT NULL,
  `sub26_in` int(3) NOT NULL,
  `sub26_ex` int(3) NOT NULL,
  `sub26_total` int(3) NOT NULL,
  `sub27_in` int(3) NOT NULL,
  `sub27_ex` int(3) NOT NULL,
  `sub27_total` int(3) NOT NULL,
  `sub28_in` int(3) NOT NULL,
  `sub28_ex` int(3) NOT NULL,
  `sub28_total` int(3) NOT NULL,
  `sem2_total` int(3) NOT NULL,
  `sem2_sgpa` float NOT NULL,
  `sem2_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_cse_sem2`
--

INSERT INTO `result_cse_sem2` (`u_usn`, `sub21_in`, `sub21_ex`, `sub21_total`, `sub22_in`, `sub22_ex`, `sub22_total`, `sub23_in`, `sub23_ex`, `sub23_total`, `sub24_in`, `sub24_ex`, `sub24_total`, `sub25_in`, `sub25_ex`, `sub25_total`, `sub26_in`, `sub26_ex`, `sub26_total`, `sub27_in`, `sub27_ex`, `sub27_total`, `sub28_in`, `sub28_ex`, `sub28_total`, `sem2_total`, `sem2_sgpa`, `sem2_cgpa`) VALUES
('1VI18CS077', 38, 32, 70, 39, 41, 80, 38, 31, 69, 40, 29, 69, 39, 39, 78, 37, 37, 74, 39, 54, 93, 39, 59, 98, 631, 8.1, 8.22);

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem3`
--

CREATE TABLE `result_cse_sem3` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub31_in` int(3) NOT NULL,
  `sub31_ex` int(3) NOT NULL,
  `sub31_total` int(3) NOT NULL,
  `sub32_in` int(3) NOT NULL,
  `sub32_ex` int(3) NOT NULL,
  `sub32_total` int(3) NOT NULL,
  `sub33_in` int(3) NOT NULL,
  `sub33_ex` int(3) NOT NULL,
  `sub33_total` int(3) NOT NULL,
  `sub34_in` int(3) NOT NULL,
  `sub34_ex` int(3) NOT NULL,
  `sub34_total` int(3) NOT NULL,
  `sub35_in` int(3) NOT NULL,
  `sub35_ex` int(3) NOT NULL,
  `sub35_total` int(3) NOT NULL,
  `sub36_in` int(3) NOT NULL,
  `sub36_ex` int(3) NOT NULL,
  `sub36_total` int(3) NOT NULL,
  `sub37_in` int(3) NOT NULL,
  `sub37_ex` int(3) NOT NULL,
  `sub37_total` int(3) NOT NULL,
  `sub38_in` int(3) NOT NULL,
  `sub38_ex` int(3) NOT NULL,
  `sub38_total` int(3) NOT NULL,
  `sub39_in` int(3) NOT NULL,
  `sub39_ex` int(3) NOT NULL,
  `sub39_total` int(3) NOT NULL,
  `sem3_total` int(3) NOT NULL,
  `sem3_sgpa` float NOT NULL,
  `sem3_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_cse_sem3`
--

INSERT INTO `result_cse_sem3` (`u_usn`, `sub31_in`, `sub31_ex`, `sub31_total`, `sub32_in`, `sub32_ex`, `sub32_total`, `sub33_in`, `sub33_ex`, `sub33_total`, `sub34_in`, `sub34_ex`, `sub34_total`, `sub35_in`, `sub35_ex`, `sub35_total`, `sub36_in`, `sub36_ex`, `sub36_total`, `sub37_in`, `sub37_ex`, `sub37_total`, `sub38_in`, `sub38_ex`, `sub38_total`, `sub39_in`, `sub39_ex`, `sub39_total`, `sem3_total`, `sem3_sgpa`, `sem3_cgpa`) VALUES
('1VI18CS0120', 30, 50, 80, 30, 59, 89, 35, 55, 90, 35, 55, 90, 34, 45, 79, 35, 40, 75, 40, 60, 100, 40, 58, 98, 0, 0, 0, 799, 9.20833, 3.06944),
('1VI18CS077', 35, 55, 90, 34, 34, 68, 34, 45, 79, 33, 52, 85, 34, 21, 55, 34, 35, 69, 35, 56, 91, 98, 0, 98, 98, 0, 98, 635, 7.83333, 8.09);

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem4`
--

CREATE TABLE `result_cse_sem4` (
  `id` int(11) NOT NULL,
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub41_in` int(3) NOT NULL,
  `sub41_ex` int(3) NOT NULL,
  `sub41_total` int(3) NOT NULL,
  `sub42_in` int(3) NOT NULL,
  `sub42_ex` int(3) NOT NULL,
  `sub42_total` int(3) NOT NULL,
  `sub43_in` int(3) NOT NULL,
  `sub43_ex` int(3) NOT NULL,
  `sub43_total` int(3) NOT NULL,
  `sub44_in` int(3) NOT NULL,
  `sub44_ex` int(3) NOT NULL,
  `sub44_total` int(3) NOT NULL,
  `sub45_in` int(3) NOT NULL,
  `sub45_ex` int(3) NOT NULL,
  `sub45_total` int(3) NOT NULL,
  `sub46_in` int(3) NOT NULL,
  `sub46_ex` int(3) NOT NULL,
  `sub46_total` int(3) NOT NULL,
  `sub47_in` int(3) NOT NULL,
  `sub47_ex` int(3) NOT NULL,
  `sub47_total` int(3) NOT NULL,
  `sub48_in` int(3) NOT NULL,
  `sub48_ex` int(3) NOT NULL,
  `sub48_total` int(3) NOT NULL,
  `sub49_in` int(3) NOT NULL,
  `sub49_ex` int(3) NOT NULL,
  `sub49_total` int(3) NOT NULL,
  `sem4_total` int(3) NOT NULL,
  `sem4_sgpa` float NOT NULL,
  `sem4_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_cse_sem4`
--

INSERT INTO `result_cse_sem4` (`id`, `u_usn`, `sub41_in`, `sub41_ex`, `sub41_total`, `sub42_in`, `sub42_ex`, `sub42_total`, `sub43_in`, `sub43_ex`, `sub43_total`, `sub44_in`, `sub44_ex`, `sub44_total`, `sub45_in`, `sub45_ex`, `sub45_total`, `sub46_in`, `sub46_ex`, `sub46_total`, `sub47_in`, `sub47_ex`, `sub47_total`, `sub48_in`, `sub48_ex`, `sub48_total`, `sub49_in`, `sub49_ex`, `sub49_total`, `sem4_total`, `sem4_sgpa`, `sem4_cgpa`) VALUES
(0, '1VI18CS077', 35, 55, 90, 35, 45, 80, 35, 35, 70, 35, 45, 80, 35, 55, 90, 35, 45, 80, 35, 55, 90, 35, 45, 80, 98, 0, 98, 758, 9.25, 8.38);

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem5`
--

CREATE TABLE `result_cse_sem5` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub51_in` int(3) NOT NULL,
  `sub51_ex` int(3) NOT NULL,
  `sub51_total` int(3) NOT NULL,
  `sub52_in` int(3) NOT NULL,
  `sub52_ex` int(3) NOT NULL,
  `sub52_total` int(3) NOT NULL,
  `sub53_in` int(3) NOT NULL,
  `sub53_ex` int(3) NOT NULL,
  `sub53_total` int(3) NOT NULL,
  `sub54_in` int(3) NOT NULL,
  `sub54_ex` int(3) NOT NULL,
  `sub54_total` int(3) NOT NULL,
  `sub55_in` int(3) NOT NULL,
  `sub55_ex` int(3) NOT NULL,
  `sub55_total` int(3) NOT NULL,
  `sub56_in` int(3) NOT NULL,
  `sub56_ex` int(3) NOT NULL,
  `sub56_total` int(3) NOT NULL,
  `sub57_in` int(3) NOT NULL,
  `sub57_ex` int(3) NOT NULL,
  `sub57_total` int(3) NOT NULL,
  `sub58_in` int(3) NOT NULL,
  `sub58_ex` int(3) NOT NULL,
  `sub58_total` int(3) NOT NULL,
  `sub59_in` int(3) NOT NULL,
  `sub59_ex` int(3) NOT NULL,
  `sub59_total` int(3) NOT NULL,
  `sem5_total` int(3) NOT NULL,
  `sem5_sgpa` float NOT NULL,
  `sem5_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_cse_sem5`
--

INSERT INTO `result_cse_sem5` (`u_usn`, `sub51_in`, `sub51_ex`, `sub51_total`, `sub52_in`, `sub52_ex`, `sub52_total`, `sub53_in`, `sub53_ex`, `sub53_total`, `sub54_in`, `sub54_ex`, `sub54_total`, `sub55_in`, `sub55_ex`, `sub55_total`, `sub56_in`, `sub56_ex`, `sub56_total`, `sub57_in`, `sub57_ex`, `sub57_total`, `sub58_in`, `sub58_ex`, `sub58_total`, `sub59_in`, `sub59_ex`, `sub59_total`, `sem5_total`, `sem5_sgpa`, `sem5_cgpa`) VALUES
('1VI18CS077', 38, 43, 81, 38, 43, 81, 38, 43, 81, 38, 43, 81, 38, 43, 81, 38, 43, 81, 38, 43, 81, 40, 60, 100, 98, 0, 98, 756, 9.08, 8.73);

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem6`
--

CREATE TABLE `result_cse_sem6` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub61_in` int(3) NOT NULL,
  `sub61_ex` int(3) NOT NULL,
  `sub61_total` int(3) NOT NULL,
  `sub62_in` int(3) NOT NULL,
  `sub62_ex` int(3) NOT NULL,
  `sub62_total` int(3) NOT NULL,
  `sub63_in` int(3) NOT NULL,
  `sub63_ex` int(3) NOT NULL,
  `sub63_total` int(3) NOT NULL,
  `sub64_in` int(3) NOT NULL,
  `sub64_ex` int(3) NOT NULL,
  `sub64_total` int(3) NOT NULL,
  `sub65_in` int(3) NOT NULL,
  `sub65_ex` int(3) NOT NULL,
  `sub65_total` int(3) NOT NULL,
  `sub66_in` int(3) NOT NULL,
  `sub66_ex` int(3) NOT NULL,
  `sub66_total` int(3) NOT NULL,
  `sub67_in` int(3) NOT NULL,
  `sub67_ex` int(3) NOT NULL,
  `sub67_total` int(3) NOT NULL,
  `sub68_in` int(3) NOT NULL,
  `sub68_ex` int(3) NOT NULL,
  `sub68_total` int(3) NOT NULL,
  `sem6_total` int(3) NOT NULL,
  `sem6_sgpa` float NOT NULL,
  `sem6_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_cse_sem6`
--

INSERT INTO `result_cse_sem6` (`u_usn`, `sub61_in`, `sub61_ex`, `sub61_total`, `sub62_in`, `sub62_ex`, `sub62_total`, `sub63_in`, `sub63_ex`, `sub63_total`, `sub64_in`, `sub64_ex`, `sub64_total`, `sub65_in`, `sub65_ex`, `sub65_total`, `sub66_in`, `sub66_ex`, `sub66_total`, `sub67_in`, `sub67_ex`, `sub67_total`, `sub68_in`, `sub68_ex`, `sub68_total`, `sem6_total`, `sem6_sgpa`, `sem6_cgpa`) VALUES
('1VI18CS077', 40, 60, 100, 30, 40, 70, 32, 34, 66, 40, 34, 74, 40, 40, 80, 40, 50, 90, 37, 41, 78, 32, 60, 92, 650, 8.625, 1.4375);

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem7`
--

CREATE TABLE `result_cse_sem7` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub71_in` int(3) NOT NULL,
  `sub71_ex` int(3) NOT NULL,
  `sub71_total` int(3) NOT NULL,
  `sub72_in` int(3) NOT NULL,
  `sub72_ex` int(3) NOT NULL,
  `sub72_total` int(3) NOT NULL,
  `sub73_in` int(3) NOT NULL,
  `sub73_ex` int(3) NOT NULL,
  `sub73_total` int(3) NOT NULL,
  `sub74_in` int(3) NOT NULL,
  `sub74_ex` int(3) NOT NULL,
  `sub74_total` int(3) NOT NULL,
  `sub75_in` int(3) NOT NULL,
  `sub75_ex` int(3) NOT NULL,
  `sub75_total` int(3) NOT NULL,
  `sub76_in` int(3) NOT NULL,
  `sub76_ex` int(3) NOT NULL,
  `sub76_total` int(3) NOT NULL,
  `sub77_in` int(3) NOT NULL,
  `sub77_ex` int(3) NOT NULL,
  `sub77_total` int(3) NOT NULL,
  `sub78_in` int(3) NOT NULL,
  `sub78_ex` int(3) NOT NULL,
  `sub78_total` int(3) NOT NULL,
  `sem7_total` int(3) NOT NULL,
  `sem7_sgpa` float NOT NULL,
  `sem7_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_cse_sem8`
--

CREATE TABLE `result_cse_sem8` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub81_in` int(3) NOT NULL,
  `sub81_ex` int(3) NOT NULL,
  `sub81_total` int(3) NOT NULL,
  `sub82_in` int(3) NOT NULL,
  `sub82_ex` int(3) NOT NULL,
  `sub82_total` int(3) NOT NULL,
  `sub83_in` int(3) NOT NULL,
  `sub83_ex` int(3) NOT NULL,
  `sub83_total` int(3) NOT NULL,
  `sub84_in` int(3) NOT NULL,
  `sub84_ex` int(3) NOT NULL,
  `sub84_total` int(3) NOT NULL,
  `sub85_in` int(3) NOT NULL,
  `sub85_ex` int(3) NOT NULL,
  `sub85_total` int(3) NOT NULL,
  `sem8_total` int(3) NOT NULL,
  `sem8_sgpa` float NOT NULL,
  `sem8_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem1`
--

CREATE TABLE `result_ise_sem1` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub11_in` int(3) NOT NULL,
  `sub11_ex` int(3) NOT NULL,
  `sub11_total` int(3) NOT NULL,
  `sub12_in` int(3) NOT NULL,
  `sub12_ex` int(3) NOT NULL,
  `sub12_total` int(3) NOT NULL,
  `sub13_in` int(3) NOT NULL,
  `sub13_ex` int(3) NOT NULL,
  `sub13_total` int(3) NOT NULL,
  `sub14_in` int(3) NOT NULL,
  `sub14_ex` int(3) NOT NULL,
  `sub14_total` int(3) NOT NULL,
  `sub15_in` int(3) NOT NULL,
  `sub15_ex` int(3) NOT NULL,
  `sub15_total` int(3) NOT NULL,
  `sub16_in` int(3) NOT NULL,
  `sub16_ex` int(3) NOT NULL,
  `sub16_total` int(3) NOT NULL,
  `sub17_in` int(3) NOT NULL,
  `sub17_ex` int(3) NOT NULL,
  `sub17_total` int(3) NOT NULL,
  `sub18_in` int(3) NOT NULL,
  `sub18_ex` int(3) NOT NULL,
  `sub18_total` int(3) NOT NULL,
  `sem1_total` int(3) NOT NULL,
  `sem1_sgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem1`
--

INSERT INTO `result_ise_sem1` (`u_usn`, `sub11_in`, `sub11_ex`, `sub11_total`, `sub12_in`, `sub12_ex`, `sub12_total`, `sub13_in`, `sub13_ex`, `sub13_total`, `sub14_in`, `sub14_ex`, `sub14_total`, `sub15_in`, `sub15_ex`, `sub15_total`, `sub16_in`, `sub16_ex`, `sub16_total`, `sub17_in`, `sub17_ex`, `sub17_total`, `sub18_in`, `sub18_ex`, `sub18_total`, `sem1_total`, `sem1_sgpa`) VALUES
('1VI18IS078', 40, 40, 80, 35, 40, 85, 35, 50, 85, 40, 35, 75, 40, 55, 95, 39, 60, 99, 38, 50, 88, 39, 59, 98, 705, 9.1);

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem2`
--

CREATE TABLE `result_ise_sem2` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub21_in` int(3) NOT NULL,
  `sub21_ex` int(3) NOT NULL,
  `sub21_total` int(3) NOT NULL,
  `sub22_in` int(3) NOT NULL,
  `sub22_ex` int(3) NOT NULL,
  `sub22_total` int(3) NOT NULL,
  `sub23_in` int(3) NOT NULL,
  `sub23_ex` int(3) NOT NULL,
  `sub23_total` int(3) NOT NULL,
  `sub24_in` int(3) NOT NULL,
  `sub24_ex` int(3) NOT NULL,
  `sub24_total` int(3) NOT NULL,
  `sub25_in` int(3) NOT NULL,
  `sub25_ex` int(3) NOT NULL,
  `sub25_total` int(3) NOT NULL,
  `sub26_in` int(3) NOT NULL,
  `sub26_ex` int(3) NOT NULL,
  `sub26_total` int(3) NOT NULL,
  `sub27_in` int(3) NOT NULL,
  `sub27_ex` int(3) NOT NULL,
  `sub27_total` int(3) NOT NULL,
  `sub28_in` int(3) NOT NULL,
  `sub28_ex` int(3) NOT NULL,
  `sub28_total` int(3) NOT NULL,
  `sem2_total` int(3) NOT NULL,
  `sem2_sgpa` float NOT NULL,
  `sem2_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem2`
--

INSERT INTO `result_ise_sem2` (`u_usn`, `sub21_in`, `sub21_ex`, `sub21_total`, `sub22_in`, `sub22_ex`, `sub22_total`, `sub23_in`, `sub23_ex`, `sub23_total`, `sub24_in`, `sub24_ex`, `sub24_total`, `sub25_in`, `sub25_ex`, `sub25_total`, `sub26_in`, `sub26_ex`, `sub26_total`, `sub27_in`, `sub27_ex`, `sub27_total`, `sub28_in`, `sub28_ex`, `sub28_total`, `sem2_total`, `sem2_sgpa`, `sem2_cgpa`) VALUES
('1VI18IS078', 40, 50, 90, 40, 50, 90, 34, 34, 68, 40, 43, 83, 34, 36, 70, 35, 55, 90, 35, 50, 85, 40, 40, 80, 656, 9, 136.85);

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem3`
--

CREATE TABLE `result_ise_sem3` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub31_in` int(3) NOT NULL,
  `sub31_ex` int(3) NOT NULL,
  `sub31_total` int(3) NOT NULL,
  `sub32_in` int(3) NOT NULL,
  `sub32_ex` int(3) NOT NULL,
  `sub32_total` int(3) NOT NULL,
  `sub33_in` int(3) NOT NULL,
  `sub33_ex` int(3) NOT NULL,
  `sub33_total` int(3) NOT NULL,
  `sub34_in` int(3) NOT NULL,
  `sub34_ex` int(3) NOT NULL,
  `sub34_total` int(3) NOT NULL,
  `sub35_in` int(3) NOT NULL,
  `sub35_ex` int(3) NOT NULL,
  `sub35_total` int(3) NOT NULL,
  `sub36_in` int(3) NOT NULL,
  `sub36_ex` int(3) NOT NULL,
  `sub36_total` int(3) NOT NULL,
  `sub37_in` int(3) NOT NULL,
  `sub37_ex` int(3) NOT NULL,
  `sub37_total` int(3) NOT NULL,
  `sub38_in` int(3) NOT NULL,
  `sub38_ex` int(3) NOT NULL,
  `sub38_total` int(3) NOT NULL,
  `sub39_in` int(3) NOT NULL,
  `sub39_ex` int(3) NOT NULL,
  `sub39_total` int(3) NOT NULL,
  `sem3_total` int(3) NOT NULL,
  `sem3_sgpa` float NOT NULL,
  `sem3_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem3`
--

INSERT INTO `result_ise_sem3` (`u_usn`, `sub31_in`, `sub31_ex`, `sub31_total`, `sub32_in`, `sub32_ex`, `sub32_total`, `sub33_in`, `sub33_ex`, `sub33_total`, `sub34_in`, `sub34_ex`, `sub34_total`, `sub35_in`, `sub35_ex`, `sub35_total`, `sub36_in`, `sub36_ex`, `sub36_total`, `sub37_in`, `sub37_ex`, `sub37_total`, `sub38_in`, `sub38_ex`, `sub38_total`, `sub39_in`, `sub39_ex`, `sub39_total`, `sem3_total`, `sem3_sgpa`, `sem3_cgpa`) VALUES
('1VI18IS078', 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 540, 6, 8.03333);

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem4`
--

CREATE TABLE `result_ise_sem4` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub41_in` int(3) NOT NULL,
  `sub41_ex` int(3) NOT NULL,
  `sub41_total` int(3) NOT NULL,
  `sub42_in` int(3) NOT NULL,
  `sub42_ex` int(3) NOT NULL,
  `sub42_total` int(3) NOT NULL,
  `sub43_in` int(3) NOT NULL,
  `sub43_ex` int(3) NOT NULL,
  `sub43_total` int(3) NOT NULL,
  `sub44_in` int(3) NOT NULL,
  `sub44_ex` int(3) NOT NULL,
  `sub44_total` int(3) NOT NULL,
  `sub45_in` int(3) NOT NULL,
  `sub45_ex` int(3) NOT NULL,
  `sub45_total` int(3) NOT NULL,
  `sub46_in` int(3) NOT NULL,
  `sub46_ex` int(3) NOT NULL,
  `sub46_total` int(3) NOT NULL,
  `sub47_in` int(3) NOT NULL,
  `sub47_ex` int(3) NOT NULL,
  `sub47_total` int(3) NOT NULL,
  `sub48_in` int(3) NOT NULL,
  `sub48_ex` int(3) NOT NULL,
  `sub48_total` int(3) NOT NULL,
  `sub49_in` int(3) NOT NULL,
  `sub49_ex` int(3) NOT NULL,
  `sub49_total` int(3) NOT NULL,
  `sem4_total` int(3) NOT NULL,
  `sem4_sgpa` float NOT NULL,
  `sem4_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem4`
--

INSERT INTO `result_ise_sem4` (`u_usn`, `sub41_in`, `sub41_ex`, `sub41_total`, `sub42_in`, `sub42_ex`, `sub42_total`, `sub43_in`, `sub43_ex`, `sub43_total`, `sub44_in`, `sub44_ex`, `sub44_total`, `sub45_in`, `sub45_ex`, `sub45_total`, `sub46_in`, `sub46_ex`, `sub46_total`, `sub47_in`, `sub47_ex`, `sub47_total`, `sub48_in`, `sub48_ex`, `sub48_total`, `sub49_in`, `sub49_ex`, `sub49_total`, `sem4_total`, `sem4_sgpa`, `sem4_cgpa`) VALUES
('1VI18IS078', 30, 40, 70, 30, 40, 70, 30, 40, 70, 30, 40, 70, 30, 40, 70, 30, 40, 70, 30, 40, 70, 30, 40, 70, 98, 0, 98, 630, 8, 6.525);

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem5`
--

CREATE TABLE `result_ise_sem5` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub51_in` int(3) NOT NULL,
  `sub51_ex` int(3) NOT NULL,
  `sub51_total` int(3) NOT NULL,
  `sub52_in` int(3) NOT NULL,
  `sub52_ex` int(3) NOT NULL,
  `sub52_total` int(3) NOT NULL,
  `sub53_in` int(3) NOT NULL,
  `sub53_ex` int(3) NOT NULL,
  `sub53_total` int(3) NOT NULL,
  `sub54_in` int(3) NOT NULL,
  `sub54_ex` int(3) NOT NULL,
  `sub54_total` int(3) NOT NULL,
  `sub55_in` int(3) NOT NULL,
  `sub55_ex` int(3) NOT NULL,
  `sub55_total` int(3) NOT NULL,
  `sub56_in` int(3) NOT NULL,
  `sub56_ex` int(3) NOT NULL,
  `sub56_total` int(3) NOT NULL,
  `sub57_in` int(3) NOT NULL,
  `sub57_ex` int(3) NOT NULL,
  `sub57_total` int(3) NOT NULL,
  `sub58_in` int(3) NOT NULL,
  `sub58_ex` int(3) NOT NULL,
  `sub58_total` int(3) NOT NULL,
  `sub59_in` int(3) NOT NULL,
  `sub59_ex` int(3) NOT NULL,
  `sub59_total` int(3) NOT NULL,
  `sem5_total` int(3) NOT NULL,
  `sem5_sgpa` float NOT NULL,
  `sem5_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem5`
--

INSERT INTO `result_ise_sem5` (`u_usn`, `sub51_in`, `sub51_ex`, `sub51_total`, `sub52_in`, `sub52_ex`, `sub52_total`, `sub53_in`, `sub53_ex`, `sub53_total`, `sub54_in`, `sub54_ex`, `sub54_total`, `sub55_in`, `sub55_ex`, `sub55_total`, `sub56_in`, `sub56_ex`, `sub56_total`, `sub57_in`, `sub57_ex`, `sub57_total`, `sub58_in`, `sub58_ex`, `sub58_total`, `sub59_in`, `sub59_ex`, `sub59_total`, `sem5_total`, `sem5_sgpa`, `sem5_cgpa`) VALUES
('1VI18IS078', 30, 30, 60, 30, 30, 30, 34, 40, 73, 30, 40, 70, 30, 40, 70, 30, 40, 70, 30, 60, 90, 35, 45, 80, 98, 0, 98, 641, 5.52, 5.924);

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem6`
--

CREATE TABLE `result_ise_sem6` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub61_in` int(3) NOT NULL,
  `sub61_ex` int(3) NOT NULL,
  `sub61_total` int(3) NOT NULL,
  `sub62_in` int(3) NOT NULL,
  `sub62_ex` int(3) NOT NULL,
  `sub62_total` int(3) NOT NULL,
  `sub63_in` int(3) NOT NULL,
  `sub63_ex` int(3) NOT NULL,
  `sub63_total` int(3) NOT NULL,
  `sub64_in` int(3) NOT NULL,
  `sub64_ex` int(3) NOT NULL,
  `sub64_total` int(3) NOT NULL,
  `sub65_in` int(3) NOT NULL,
  `sub65_ex` int(3) NOT NULL,
  `sub65_total` int(3) NOT NULL,
  `sub66_in` int(3) NOT NULL,
  `sub66_ex` int(3) NOT NULL,
  `sub66_total` int(3) NOT NULL,
  `sub67_in` int(3) NOT NULL,
  `sub67_ex` int(3) NOT NULL,
  `sub67_total` int(3) NOT NULL,
  `sub68_in` int(3) NOT NULL,
  `sub68_ex` int(3) NOT NULL,
  `sub68_total` int(3) NOT NULL,
  `sem6_total` int(3) NOT NULL,
  `sem6_sgpa` float NOT NULL,
  `sem6_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem6`
--

INSERT INTO `result_ise_sem6` (`u_usn`, `sub61_in`, `sub61_ex`, `sub61_total`, `sub62_in`, `sub62_ex`, `sub62_total`, `sub63_in`, `sub63_ex`, `sub63_total`, `sub64_in`, `sub64_ex`, `sub64_total`, `sub65_in`, `sub65_ex`, `sub65_total`, `sub66_in`, `sub66_ex`, `sub66_total`, `sub67_in`, `sub67_ex`, `sub67_total`, `sub68_in`, `sub68_ex`, `sub68_total`, `sem6_total`, `sem6_sgpa`, `sem6_cgpa`) VALUES
('1VI18IS078', 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 480, 6, 7.27);

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem7`
--

CREATE TABLE `result_ise_sem7` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub71_in` int(3) NOT NULL,
  `sub71_ex` int(3) NOT NULL,
  `sub71_total` int(3) NOT NULL,
  `sub72_in` int(3) NOT NULL,
  `sub72_ex` int(3) NOT NULL,
  `sub72_total` int(3) NOT NULL,
  `sub73_in` int(3) NOT NULL,
  `sub73_ex` int(3) NOT NULL,
  `sub73_total` int(3) NOT NULL,
  `sub74_in` int(3) NOT NULL,
  `sub74_ex` int(3) NOT NULL,
  `sub74_total` int(3) NOT NULL,
  `sub75_in` int(3) NOT NULL,
  `sub75_ex` int(3) NOT NULL,
  `sub75_total` int(3) NOT NULL,
  `sub76_in` int(3) NOT NULL,
  `sub76_ex` int(3) NOT NULL,
  `sub76_total` int(3) NOT NULL,
  `sub77_in` int(3) NOT NULL,
  `sub77_ex` int(3) NOT NULL,
  `sub77_total` int(3) NOT NULL,
  `sub78_in` int(3) NOT NULL,
  `sub78_ex` int(3) NOT NULL,
  `sub78_total` int(3) NOT NULL,
  `sem7_total` int(3) NOT NULL,
  `sem7_sgpa` float NOT NULL,
  `sem7_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem7`
--

INSERT INTO `result_ise_sem7` (`u_usn`, `sub71_in`, `sub71_ex`, `sub71_total`, `sub72_in`, `sub72_ex`, `sub72_total`, `sub73_in`, `sub73_ex`, `sub73_total`, `sub74_in`, `sub74_ex`, `sub74_total`, `sub75_in`, `sub75_ex`, `sub75_total`, `sub76_in`, `sub76_ex`, `sub76_total`, `sub77_in`, `sub77_ex`, `sub77_total`, `sub78_in`, `sub78_ex`, `sub78_total`, `sem7_total`, `sem7_sgpa`, `sem7_cgpa`) VALUES
('1VI18IS078', 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 30, 30, 60, 480, 6, 7.08857);

-- --------------------------------------------------------

--
-- Table structure for table `result_ise_sem8`
--

CREATE TABLE `result_ise_sem8` (
  `u_usn` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub81_in` int(3) NOT NULL,
  `sub81_ex` int(3) NOT NULL,
  `sub81_total` int(3) NOT NULL,
  `sub82_in` int(3) NOT NULL,
  `sub82_ex` int(3) NOT NULL,
  `sub82_total` int(3) NOT NULL,
  `sub83_in` int(3) NOT NULL,
  `sub83_ex` int(3) NOT NULL,
  `sub83_total` int(3) NOT NULL,
  `sub84_in` int(3) NOT NULL,
  `sub84_ex` int(3) NOT NULL,
  `sub84_total` int(3) NOT NULL,
  `sub85_in` int(3) NOT NULL,
  `sub85_ex` int(3) NOT NULL,
  `sub85_total` int(3) NOT NULL,
  `sem8_total` int(3) NOT NULL,
  `sem8_sgpa` float NOT NULL,
  `sem8_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_ise_sem8`
--

INSERT INTO `result_ise_sem8` (`u_usn`, `sub81_in`, `sub81_ex`, `sub81_total`, `sub82_in`, `sub82_ex`, `sub82_total`, `sub83_in`, `sub83_ex`, `sub83_total`, `sub84_in`, `sub84_ex`, `sub84_total`, `sub85_in`, `sub85_ex`, `sub85_total`, `sem8_total`, `sem8_sgpa`, `sem8_cgpa`) VALUES
('1VI18IS078', 40, 60, 100, 30, 40, 70, 35, 55, 90, 37, 55, 92, 80, 0, 80, 432, 9.4, 7.3775);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_usn` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_user_role` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_usn`, `u_password`, `u_user_role`) VALUES
(1, 'Srilekha M', '1VI18CS106', 'SRIII', 'cse'),
(2, 'Vidya', '1VI18CS120', 'vidya', 'cse'),
(3, 'KUSUMA', '1VI18IS078', 'KUSUMA', 'ise'),
(4, 'Uma P S', '1VI18CS078', 'umaps', 'ise'),
(5, 'Ram', '1VI18IS012', 'ram', 'ise'),
(6, 'ABHI', '1VI18IS102', 'abhi', 'ise'),
(7, 'Siri', '1VI18CS101', '1234s', 'cse'),
(8, 'Teju', '1VI18CS077', 'TEJU', 'cse'),
(9, 'Hema', '1VI18CS045', 'hema', 'cse'),
(10, 'Veena', '1VI18CS045', 'veena', 'cse'),
(11, 'Akshay M', '1VI18CS004', 'akshay', 'cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result_cse_sem1`
--
ALTER TABLE `result_cse_sem1`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_cse_sem2`
--
ALTER TABLE `result_cse_sem2`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_cse_sem3`
--
ALTER TABLE `result_cse_sem3`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_cse_sem4`
--
ALTER TABLE `result_cse_sem4`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_cse_sem5`
--
ALTER TABLE `result_cse_sem5`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_cse_sem6`
--
ALTER TABLE `result_cse_sem6`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_cse_sem7`
--
ALTER TABLE `result_cse_sem7`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_cse_sem8`
--
ALTER TABLE `result_cse_sem8`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem1`
--
ALTER TABLE `result_ise_sem1`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem2`
--
ALTER TABLE `result_ise_sem2`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem3`
--
ALTER TABLE `result_ise_sem3`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem4`
--
ALTER TABLE `result_ise_sem4`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem5`
--
ALTER TABLE `result_ise_sem5`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem6`
--
ALTER TABLE `result_ise_sem6`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem7`
--
ALTER TABLE `result_ise_sem7`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `result_ise_sem8`
--
ALTER TABLE `result_ise_sem8`
  ADD PRIMARY KEY (`u_usn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
