-- Create the database
CREATE DATABASE systemforit5;

-- Switch to the new database
USE systemforit5;

-- Create the users table
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Add an admin user with the password "admin"
INSERT INTO `users` (`username`, `password`) VALUES ('admin', 'admin');

-- Create the foodstalls table
CREATE TABLE `foodstalls` (
  `StallID` INT(11) NOT NULL AUTO_INCREMENT,
  `StallName` VARCHAR(255) DEFAULT NULL,
  `ProductsSold` VARCHAR(255) DEFAULT NULL,
  `Quantity` INT(9999) DEFAULT NULL,
  PRIMARY KEY (`StallID`)
);

-- Create the now_showing table
CREATE TABLE `now_showing` (
  `ShowID` INT(11) NOT NULL AUTO_INCREMENT,
  `ShowName` VARCHAR(255) DEFAULT NULL,
  `SeatAvailable` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`ShowID`)
);

-- Create the restroom table
CREATE TABLE `restroom` (
  `RestroomID` INT(11) NOT NULL AUTO_INCREMENT,
  `Gender` VARCHAR(255) DEFAULT NULL,
  `Toilet` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`RestroomID`)
);

-- Create the staffinfo table
CREATE TABLE `staffinfo` (
  `StaffID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) DEFAULT NULL,
  `ContactNumber` VARCHAR(255) DEFAULT NULL,
  `Email` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`StaffID`)
);
