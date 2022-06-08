CREATE DATABASE Grupo6_playBBEM;
USE Grupo6_playBBEM;

CREATE TABLE `cliente`(
    idcliente INT (11) PRIMARY KEY AUTO_INCREMENT,
    nombrecliente VARCHAR(80),
    apellidocliente VARCHAR(80),
    generocliente CHAR(1),
    cedulacliente VARCHAR(10),
    telefonocliente VARCHAR(10),
    direccioncliente VARCHAR(200),
    correo_ecliente VARCHAR(100),
    nombreusuario VARCHAR(80),
    clavecliente VARCHAR(80),
    imagenusuario BLOB

);
CREATE TABLE `factura`(
    idfact INT(11) PRIMARY KEY AUTO_INCREMENT,
    fechafact DATE,
    ivafact NUMERIC(2,2),
    subtotalfact NUMERIC(5,2),
    totalfact NUMERIC(5,2),
    idcliente INT(11),
    FOREIGN KEY(idcliente) REFERENCES 
                    `cliente`(idcliente)
);
CREATE TABLE `pelicula`(
    idpel INT(11) PRIMARY KEY AUTO_INCREMENT,
    titulopel VARCHAR(50),
    preciopel NUMERIC(2,2)

);

CREATE TABLE `detallefactura`(

    idfact INT(11),
    idpel INT(11),

    FOREIGN KEY(idfact) REFERENCES 
                `factura`(idfact),
    FOREIGN KEY(idpel) REFERENCES 
                `pelicula`(idpel)

);



CREATE TABLE `tipopago`(
    idtp INT(11) PRIMARY KEY AUTO_INCREMENT,
    numtarjtp VARCHAR(10),
    idfact INT(11), 
    FOREIGN KEY(idfact) REFERENCES 
            `factura`(idfact)
);


CREATE TABLE `administrador`(
    idadmin INT(11) PRIMARY KEY AUTO_INCREMENT,
    admin_usuario VARCHAR(10),
    contrasena_admin VARCHAR(20)
);
