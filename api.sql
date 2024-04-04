-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS `api`;

-- Use the database
USE `api`;

-- Table structure for table `People`
CREATE TABLE IF NOT EXISTS `People` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


