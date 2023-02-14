SET FOREIGN_KEY_CHECKS=0;

CREATE TABLE empleados (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(200) NOT NULL,
    email VARCHAR(220) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    id_area INT NOT NULL
);

CREATE TABLE departamentos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    id_jefe INT NOT NULL
 );

CREATE TABLE areas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    id_encargado INT NOT NULL,
    id_departamento INT NOT NULL
 );

SET FOREIGN_KEY_CHECKS=1;
