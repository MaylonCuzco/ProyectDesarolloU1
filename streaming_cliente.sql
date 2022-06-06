-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 15:59:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo6_playbbem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `streaming.cliente`
--

CREATE TABLE `streaming.cliente` (
  `idcliente` int(11) NOT NULL,
  `nombrecliente` varchar(80) DEFAULT NULL,
  `apellidocliente` varchar(80) DEFAULT NULL,
  `generocliente` char(1) DEFAULT NULL,
  `cedulacliente` varchar(10) DEFAULT NULL,
  `telefonocliente` varchar(10) DEFAULT NULL,
  `direccioncliente` varchar(200) DEFAULT NULL,
  `correo_ecliente` varchar(100) DEFAULT NULL,
  `nombreusuario` varchar(80) DEFAULT NULL,
  `clavecliente` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `streaming.cliente`
--
ALTER TABLE `streaming.cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `streaming.cliente`
--
ALTER TABLE `streaming.cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
