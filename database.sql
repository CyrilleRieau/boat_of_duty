DROP DATABASE IF EXISTS `boats_db`;

CREATE DATABASE `boats_db`;

USE `boats_db`;

CREATE TABLE `boats` (
    `id`        INT AUTO_INCREMENT PRIMARY KEY,
    `type`      VARCHAR(64) NOT NULL,
    'size'      INT NOT NULL, 
    'position'  INT NOT NULL
);

CREATE TABLE `grid` (
    `id`     INT AUTO_INCREMENT PRIMARY KEY,
    
    );

ALTER TABLE `boats` ADD `grid_id` INT NOT NULL;
ALTER TABLE `boats` ADD FOREIGN KEY (`grid_id`) REFERENCES `grid`(`id`);