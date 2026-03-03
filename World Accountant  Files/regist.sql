create database Regist;
show databases;
use Regist;
CREATE TABLE Tickets (
  id INT PRIMARY KEY AUTO_INCREMENT,
  fecha DATE,
  total DECIMAL(10, 2),
  metodo_pago VARCHAR(50)
);