CREATE DATABASE db_contact;
USE db_contact;

DROP TABLE CONTACT;
CREATE TABLE IF NOT EXISTS CONTACT (
    name varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    subject varchar(225) NOT NULL,
    message text
);

SELECT * FROM CONTACT;

create database webdev;
use webdev;
