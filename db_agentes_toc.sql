-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2014 a las 18:54:20
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_agentes_toc`
--
CREATE DATABASE IF NOT EXISTS `db_agentes_toc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_agentes_toc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at_users`
--

CREATE TABLE IF NOT EXISTS `at_users` (
  `atu_id` int(10) NOT NULL AUTO_INCREMENT,
  `atu_nombre` varchar(50) DEFAULT NULL,
  `atu_apellidos` varchar(100) DEFAULT NULL,
  `atu_correo` varchar(100) DEFAULT NULL,
  `atu_clave` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`atu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `at_users`
--

INSERT INTO `at_users` (`atu_id`, `atu_nombre`, `atu_apellidos`, `atu_correo`, `atu_clave`) VALUES
(18, 'Diana', 'Zacarías Hernández', 'zahedi_1109@yahoo.com.mx', '827ccb0eea');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
