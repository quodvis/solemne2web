CREATE DATABASE docker; 
USE docker;

CREATE TABLE Cliente(
	phone BIGINT NOT NULL,
	pass VARCHAR(50) NOT NULL,
	PRIMARY KEY(phone)
);

CREATE TABLE Producto(
	id BIGINT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	precio INT NOT NULL DEFAULT 0,
	cantidad INT NOT NULL DEFAULT 0,
	PRIMARY KEY(id)
);

CREATE TABLE Venta(
	fecha BIGINT NOT NULL,
	idProducto BIGINT NOT NULL,
	idCliente BIGINT NOT NULL,	
	FOREIGN KEY(idProducto) REFERENCES Producto(id),
	FOREIGN KEY(idCliente) REFERENCES Cliente(phone),
	PRIMARY KEY(fecha)
);
