CREATE DATABASE IF NOT EXISTS solemne2;
USE solemne2;

CREATE TABLE usuarios (
email varchar(20) NOT NULL,
password varchar(20) NOT NULL,
PRIMARY KEY (email)
);

CREATE TABLE productos (
PK int NOT NULL auto_increment,
nombre VARCHAR(20) NOT NULL,
precio int NOT NULL,
PRIMARY KEY (PK)
);
