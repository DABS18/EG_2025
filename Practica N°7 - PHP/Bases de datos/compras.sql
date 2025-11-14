CREATE DATABASE Compras;
USE Compras;
CREATE TABLE catalogo (
  id INT AUTO_INCREMENT PRIMARY KEY,
  producto VARCHAR(100),
  precio DECIMAL(9,2)
);
INSERT INTO catalogo (producto, precio)
VALUES ('Mouse', 2500), ('Teclado', 3000), ('Monitor', 15000);
