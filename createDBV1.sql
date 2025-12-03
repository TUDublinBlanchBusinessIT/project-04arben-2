
CREATE DATABASE IF NOT EXISTS cinema_db;
USE cinema_db;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
);


INSERT INTO users (username, password)
VALUES ('testuser', 'testpass');
