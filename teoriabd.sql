
create database Teorias_de_fanes;
use Teorias_de_fanes;
-- creación de la tabla de registros
create table nombre_tabla(
    -- creación de las columnas
    identificador INT PRIMARY KEY AUTO_INCREMENT,
    columna_usuario VARCHAR (255) NOT NULL,
    columna_password VARCHAR (255) NOT NULL
)Engine InnoDB default charset=latin1;

CREATE TABLE foro (

ID int(7) NOT NULL,

autor varchar(30) NOT NULL,

titulo varchar(40) COLLATE utf8_unicode_ci NOT NULL,

mensaje text COLLATE utf8_unicode_ci NOT NULL,

fecha date NOT NULL,

respuestas int(11) NOT NULL,

identificador int(7) NOT NULL DEFAULT '0',

ult_respuesta date DEFAULT NULL,

primary key (ID)

)ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


create table foro_nombre_tabla(
identificador int not null,
ID int(7) not null,
foreign key (identificador) references nombre_tabla(identificador),
foreign key (ID) references foro(ID)
);
