CREATE DATABASE bmi_calculator;

USE bmi_calculator;

CREATE TABLE bmi_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    weight FLOAT,
    height FLOAT,
    bmi FLOAT,
    interpretation VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
