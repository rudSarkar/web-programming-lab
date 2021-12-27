CREATE DATABASE IF NOT EXISTS `web_lab_project`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `blood_group` varchar(255) NOT NULL,
    `donation_date` varchar(255) NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

