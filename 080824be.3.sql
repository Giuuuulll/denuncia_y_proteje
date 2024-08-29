create database if not exists proyecto1;
use proyecto1;

create table usuario(
    id int primary key auto_increment,
    nombre varchar(250)
    mail varchar(250)0
    contraseña text);



create table articulos(
    id int primary key auto_increment, 
    nombre varchar (250),
    fecha date, 
    contenido text,
    foto text
    autor int 
    foreign key(autor) references usuario(id)
);

insert into usuario(nombre, mail, contraseña ) values 
("giulianna", "giulia.penayo09@gmail.com", "123456");

insert into articulos (nombre, fecha, contenido, foto , autor ) values 
("desde la base de datos" , "2024-08-08", "lorem", "https://i.scdn.co/image/ab67616d0000b2730f
402901459bc27fc1c12aab",1);
