-- CREACIÓN DE LA BASE DE DATOS
CREATE DATABASE gestor_jj;
USE gestor_jj;

-- CREACIÓN DE LA TABLA USUARIOS
CREATE TABLE `gestor_jj`.`usuarios` ( 
	`id_usuario` INT NOT NULL AUTO_INCREMENT , 
	`nombreUser` VARCHAR(20) NOT NULL , 
	`apellidoUser` VARCHAR(20) NOT NULL , 
	`correoUser` VARCHAR(80) NOT NULL , 
	`id_cargoUser` INT NOT NULL , 
	`username` VARCHAR(30) NOT NULL , 
	`password` VARCHAR(255) NOT NULL , 
	`pregunta1` VARCHAR(80) NOT NULL , 
	`respuesta1` VARCHAR(80) NOT NULL , 
	`pregunta2` VARCHAR(80) NOT NULL , 
	`respuesta2` VARCHAR(80) NOT NULL , 
	`pregunta3` VARCHAR(80) NOT NULL , 
	`respuesta3` VARCHAR(80) NOT NULL , 
	`fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`username`), UNIQUE (`id_usuario`)) ENGINE = InnoDB;

-- CREACIÓN DE LA TABLA CARGOS
CREATE TABLE `gestor_jj`.`cargos` ( 
	`id_cargo` INT NOT NULL AUTO_INCREMENT , 
	`nombreCargo` VARCHAR(30) NOT NULL , 
	`asignado` TINYINT NOT NULL , 
	`fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id_cargo`), UNIQUE (`nombreCargo`)) ENGINE = InnoDB;

-- INSERCIÓN DE LOS TRES CARGOS PRINCIPALES EN LA TABLA CARGOS, POR DEFECTO
INSERT INTO `cargos`(`id_cargo`, `nombreCargo`, `asignado`, `fecha`) VALUES 
	(NULL,"Director",0,NULL), 
	(NULL,"Sub-director Administrativo",0,NULL), 
	(NULL,"Sub-director Académico",0,NULL);

-- CREACIÓN DE LA REALACIÓN ENTRE LA TABLA CARGOS Y USUARIOS
ALTER TABLE `usuarios` 
	ADD CONSTRAINT `usuariosCargos` 
	FOREIGN KEY (`id_cargoUser`) 
	REFERENCES `cargos`(`id_cargo`) 
	ON DELETE CASCADE 
	ON UPDATE CASCADE;

-- CREACIÓN DE LA TABLA LITERAL
CREATE TABLE `gestor_jj`.`literal` ( 
	`id_literal` INT NOT NULL AUTO_INCREMENT , 
	`letraLiteral` VARCHAR(5) NOT NULL , 
	`descripcionLiteral` VARCHAR(255) NOT NULL , 
	`fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id_literal`), UNIQUE (`letraLiteral`)) ENGINE = InnoDB;

-- CREACIÓN DE LA TABLA CÓDIGOS
CREATE TABLE `gestor_jj`.`codigos` ( 
	`id_codigo` INT NOT NULL AUTO_INCREMENT , 
	`codigo` VARCHAR(255) NOT NULL , 
	`fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id_codigo`), UNIQUE (`codigo`)) ENGINE = InnoDB;
