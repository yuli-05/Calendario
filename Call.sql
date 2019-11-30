DROP DATABASE IF EXISTS sistema;
create database sistema;

use sistema;

drop table if exists eventos;
create table eventos(
id INT(11) unsigned NOT NULL auto_increment,
title VARCHAR(255) NOT NULL,
descripcion TEXT NULL,
color VARCHAR(255) NULL,
textColor VARCHAR(255) NULL,
start DATETIME NULL,
end DATETIME NULL,
PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;
 
 INSERT INTO eventos(title,descripcion,color,textColor,start,end) VALUES
('Evento 1','Recoleccion de basura','#ff0f00','#ffffff','2019-11-05 10:30:00','2019-11-06 13:30:00');

 