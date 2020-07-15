create database almacen;

use almacen;

create table user(
	id int not null auto_increment primary key,
	fullname varchar(500) not null,
	username varchar(100) not null unique,
	email varchar(255) not null unique,
	password varchar(255) not null,
	type_acc varchar(20) not null,
	created_at datetime not null
);

create table productos(
	id_producto int not null auto_increment primary key,
	producto varchar(100) not null,
	marca varchar(100) not null unique,
	cantidad varchar(10) not null unique,
	precio varchar(10) not null,
	comentario varchar(255) not null,
    	fecha_registro datetime not null
);

create table movimientos(
	id_movimiento int not null auto_increment primary key,
	tipo_movimiento varchar(50) not null,
	fecha_movimiento datetime not null,
	cantidad_movimiento varchar(10) not null,
	comentario_movimiento varchar(50) not null,
	id_userfk int not null,
	id_prodfk int not null,
	FOREIGN KEY (id_userfk) REFERENCES user(id),
	FOREIGN KEY (id_prodfk) REFERENCES productos(id_producto)
);



