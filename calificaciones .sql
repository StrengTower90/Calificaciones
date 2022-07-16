
CREATE DATABASE IF NOT EXISTS calificaciones;

USE calificaciones;

CREATE TABLE registro(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Nombres TEXT, 
Apellidos TEXT,
Iparcial FLOAT,
IIparcial FLOAT,
IIIparcial FLOAT,
NotaFinal FLOAT);