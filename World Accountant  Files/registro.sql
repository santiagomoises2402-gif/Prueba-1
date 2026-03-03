create database Regist;
show databases;
use Regist;
create table usuarios(Id int(2) auto_increment primary key, Nombre varchar (50),Apellido varchar(50),Telefono int (15),Correo varchar (50), Edad int(3), Nacimiento varchar (50));
show tables;
select*from usuarios;