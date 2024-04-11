-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 03:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taste9jafoodblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminchef`
--

CREATE TABLE `adminchef` (
  `chef_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `recipe_name` varchar(25) NOT NULL,
  `ingredients` varchar(1500) NOT NULL,
  `directions` varchar(1500) NOT NULL,
  `group_recipe_img` varchar(25) NOT NULL,
  `individual_recipe_img` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bloguser`
--

CREATE TABLE `bloguser` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloguser`
--

INSERT INTO `bloguser` (`first_name`, `last_name`, `email`, `password`) VALUES
('Aniekan', 'Brown', 'aniekanbrown@uniyo.edu.ng', 'Test@1234'),
('Bright', 'Ohakam', 'leenivana@gmail.com', 'Test@1234'),
('bright', 'Ohakam', 'ohakambright@gmail.com', 'Test@1234');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category` varchar(25) NOT NULL,
  `recipe_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location` varchar(20) NOT NULL,
  `recipe_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_name` varchar(25) NOT NULL,
  `chef_name` varchar(100) NOT NULL,
  `category` varchar(25) NOT NULL,
  `ingredients` varchar(1500) NOT NULL,
  `directions` varchar(1500) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminchef`
--
ALTER TABLE `adminchef`
  ADD PRIMARY KEY (`chef_name`),
  ADD KEY `fk_recipe_name_recipes` (`recipe_name`),
  ADD KEY `fk_location_locations` (`location`),
  ADD KEY `idx_category` (`category`);

--
-- Indexes for table `bloguser`
--
ALTER TABLE `bloguser`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category`),
  ADD KEY `fk_recipe_name_categories_recipes` (`recipe_name`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location`),
  ADD KEY `fk_recipe_name_location_recipes` (`recipe_name`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_name`),
  ADD KEY `fk_chef_name_adminchef` (`chef_name`) USING BTREE,
  ADD KEY `idx_ingredients` (`ingredients`(768)),
  ADD KEY `idx_directions` (`directions`(768));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminchef`
--
ALTER TABLE `adminchef`
  ADD CONSTRAINT `fk_category_categories` FOREIGN KEY (`category`) REFERENCES `categories` (`category`),
  ADD CONSTRAINT `fk_location_locations` FOREIGN KEY (`location`) REFERENCES `locations` (`location`),
  ADD CONSTRAINT `fk_recipe_name_recipes` FOREIGN KEY (`recipe_name`) REFERENCES `recipes` (`recipe_name`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_recipe_name_categories_recipes` FOREIGN KEY (`recipe_name`) REFERENCES `recipes` (`recipe_name`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `fk_recipe_name_location_recipes` FOREIGN KEY (`recipe_name`) REFERENCES `recipes` (`recipe_name`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `fk_chef_name_chefadmin` FOREIGN KEY (`chef_name`) REFERENCES `chefadmin` (`chef_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
