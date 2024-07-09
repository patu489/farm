CREATE DATABASE IF NOT EXISTS poultry_farm;
USE poultry_farm;

CREATE TABLE IF NOT EXISTS inventory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chickenCount INT,
    feedStock INT,
    medicationStock INT
);

CREATE TABLE IF NOT EXISTS production (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATETIME,
    eggCount INT,
    meatProduced INT
);

CREATE TABLE IF NOT EXISTS sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customerName VARCHAR(255),
    quantity INT,
    totalPrice DECIMAL(10, 2),
    date DATETIME
);
