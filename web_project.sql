CREATE DATABASE IF NOT EXISTS `web_lab_project`;

USE web_lab_project;

CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`blood_group` varchar(255) NOT NULL,
	`last_donation_date` varchar(255) NULL,
	`district_name` varchar(255) NULL,
	PRIMARY KEY (`id`)
);