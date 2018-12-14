-- Drops the register if it exists currently --
DROP DATABASE IF EXISTS forma_registro;
-- Creates the "forma_registro" database --
CREATE DATABASE forma_registro;

USE forma_registro;

-- Created the table "User" 
CREATE TABLE user  (

  id int AUTO_INCREMENT,
  
  nombre varchar(30) NOT NULL,
  apellidoPaterno varchar(30) NOT NULL,
  correo varchar(150) NOT NULL,
  password varchar(50) NOT NULL,
  dirección varchar(100) NOT NULL,
  dirección2 varchar(50) NOT NULL,
  ciudad varchar(50) NOT NULL,
  estado varchar(50) NOT NULL,
  codigo INT,
  teléfono bigint,
  
 

  PRIMARY KEY(id)
);
 
 INSERT INTO user (nombre, apellidoPaterno, dirección, direcciónDos, ciudad, estado, codigo, teléfono) 
VALUE ("Alejandra", "Gonzales", "Cantu" , "109 comitan", "planta alta", "monterrey", "NL", 67517, 8123779898);

SELECT id, nombre, apellidoPaterno, apellidoMaterno, address, addressTwo, city, state, zip
FROM user;

 DESC user;

SELECT * FROM user;