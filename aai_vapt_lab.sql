/* ==========================================
   AAI VAPT DEMO LAB DATABASE
   LOCALHOST ONLY – EDUCATIONAL PURPOSE
   ========================================== */

DROP DATABASE IF EXISTS aai_demo;
CREATE DATABASE aai_demo;
USE aai_demo;

/* ----------------------------
   USERS (Auth Bypass Demo)
   ---------------------------- */
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    role VARCHAR(20)
);

INSERT INTO users (username, password, role) VALUES
('ramesh', 'ramesh123', 'employee'),
('suresh', 'welcome', 'employee'),
('anil', 'password', 'employee'),
('kavita', 'kavita@123', 'employee'),
('priya', 'priya123', 'employee'),
('admin', 'admin', 'admin');

/* ----------------------------
   FLIGHTS (SQL Injection – READ)
   ---------------------------- */
CREATE TABLE flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    flight_no VARCHAR(20),
    source VARCHAR(50),
    destination VARCHAR(50),
    status VARCHAR(20)
);

INSERT INTO flights (flight_no, source, destination, status) VALUES
('AI101','Delhi','Mumbai','On Time'),
('AI202','Hyderabad','Chennai','Delayed'),
('AI303','Bengaluru','Kolkata','On Time'),
('AI404','Mumbai','Delhi','Cancelled'),
('AI505','Chennai','Trivandrum','On Time');

/* ----------------------------
   FEEDBACK (XSS Demo)
   ---------------------------- */
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT
);

/* ----------------------------
   SYSTEM STATUS
   (SQL Injection – DATA MANIPULATION)
   ---------------------------- */
CREATE TABLE system_status (
    id INT PRIMARY KEY,
    runway_status VARCHAR(30),
    terminal_load VARCHAR(30),
    system_mode VARCHAR(30)
);

INSERT INTO system_status VALUES
(1, 'Operational', 'Normal', 'NORMAL');
