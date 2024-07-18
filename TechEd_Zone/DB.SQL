


-- Database cantion code for php

 $con = mysqli_connect("localhost","root","","LoginSystem");

DATABASE name : " LoginSystem "

-- insert qury for Mysql database use


CREATE DATABASE IF NOT EXISTS YourDatabaseName;

USE YourDatabaseName;

CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_S char (70) NOT NULL,
    branch char (50) NOT NULL,
    year_S int (10) NOT NULL,
    inst VARCHAR (100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password_S VARCHAR(255) NOT NULL,
    create_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
