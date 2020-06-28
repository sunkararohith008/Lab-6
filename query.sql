CREATE DATABASE COMP1006_SUMMER2020; 
USE COMP1006_SUMMER2020; 
CREATE TABLE `persons` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar (100) NOT NULL,
  `email` varchar (100) NOT NULL,
  PRIMARY KEY (user_id)
); 