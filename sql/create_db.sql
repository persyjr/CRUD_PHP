CREATE DATABASE IF NOT EXISTS crud_php;
USE crud_php;

CREATE TABLE IF NOT EXISTS personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    telefono VARCHAR(20),
    ciudad VARCHAR(50),
    profesion VARCHAR(50),
    edad INT
);
