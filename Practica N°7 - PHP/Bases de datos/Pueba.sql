CREATE DATABASE prueba;
USE prueba;
CREATE TABLE buscador (
  id INT AUTO_INCREMENT PRIMARY KEY,
  canciones VARCHAR(100)
);
INSERT INTO buscador (canciones) VALUES ('Imagine'),('Yesterday'),('Let it be');
