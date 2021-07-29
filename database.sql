create database pokedexvanderbekenmatias;

use pokedexvanderbekenmatias;

create table formulauno
 (id varchar(10) primary key, 
 constructor varchar(40),
 año year,
 descripcion varchar (2000),
 archivo varchar(40));
 
 create table usuario(
 email char(20) primary key,
 contraseña char(40),
 nombre char(20),
 apellido char(20));

select * FROM formulauno;

select * from usuario;



