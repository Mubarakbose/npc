-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 09:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npc`
--

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MiddleName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LGA` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Occupation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Age`, `Address`, `LGA`, `State`, `Occupation`) VALUES
(1, 'Sanusi', 'Hamman ', 'Seyo', 'Male', 25, 'TSU', 'Jalingo', 'Taraba', 'Business '),
(2, 'Abdulrauf', 'Ibrahim', 'Dantsoho', 'Male', 25, 'Baraya', 'Jalingo', 'Taraba', 'Student'),
(3, 'Babayo', 'Lawan', 'Abdullahi', 'Male', 23, 'Wuse 2', 'ABJ', 'FCT', 'Engineer'),
(4, 'Umar ', 'Ahmed', 'Accama', 'Male', 35, 'UnionBay', 'Potiskum', 'Yobe', 'Civil Servant'),
(5, 'Usman', 'Bappa', 'Bayero', 'Male', 26, 'Sabo-layi', 'Nafada', 'Gombe', 'Student'),
(6, 'Ibrahim', 'Tukur', 'Muhammad', 'Male', 38, 'Yedang', 'Jalingo', 'Taraba', 'Student'),
(7, 'Mubarak', 'Muhammad', 'Albarka', 'Male', 23, 'Magatakarda Valley', 'Sokoto', 'Sokoto', 'Engineer'),
(8, 'Maria', 'Wane', 'Volli', 'Female', 5, 'Wuro Sembe', 'Jalingo', 'Taraba', 'Student'),
(9, 'Mardi', 'Umbo', 'bose', 'Female', 4, 'GRA', 'Kano', 'Kano', 'Student'),
(10, 'Mutari', 'D', 'Mallum', 'Male', 23, 'Mallum', 'Kano', 'Kano', 'Student'),
(11, 'musa', 'umar', 'harun', 'Male', 25, 'Jabi', 'ABC', 'FCT', 'Teacher'),
(12, 'zimmermann', 'matt', 'berger', 'Male', 43, 'Gumi Str', 'Abaji', 'FCT', 'Judiciary'),
(13, 'Debbie', 'Danmanya', 'J', 'Female', 15, 'Dan Kande Str', 'Toro', 'Bauchi', 'Student'),
(14, 'Esther', 'Jagiri', 'Jalo', 'Female', 30, 'Baga road', 'Maiduguri ', 'Borno', 'Civil Servant'),
(15, 'Raliya', 'Isa ', 'Potiskum', 'Female', 25, 'Kano Str.', 'Damaturu', 'Yobe', 'Politician'),
(16, 'Zainabu', 'Danladi', 'Lawan', 'Female', 23, 'Giwa Road 12', 'Dutse', 'Jigawa', 'Sweeper'),
(17, 'Hadiza', 'Ahmad', 'Jada', 'Female', 38, 'Jimeta Road', 'Yola', 'Adamawa', 'Politician'),
(18, 'Markus', 'Jonah', 'Mailafiya', 'Male', 25, 'Abuja street', 'Keffi', 'Nasarawa', 'Business '),
(19, 'Alikko ', 'Muhammad', 'Idris', 'Male', 26, 'Benins Street', 'Okene', 'Kogi', 'Military'),
(20, 'Sani ', 'Obafemi', 'J', 'Male', 29, 'Kebbi Str', 'Ikeja', 'Lagos', 'Lecturer'),
(21, 'Iheanach', 'Amadi', 'Nnamdi', 'Male', 30, 'Aba market 28', 'Aba', 'Abia', 'Business ');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(11) NOT NULL COMMENT 'Primary Key ID',
  `Name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name of Staff',
  `Username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Login ID',
  `Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `Name`, `Username`, `Password`) VALUES
(1, 'Sanusi', 'Staff', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key ID', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
