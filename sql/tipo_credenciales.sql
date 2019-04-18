-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 20:41:41
-- Versión del servidor: 5.5.32
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `salta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_credenciales`
--

CREATE TABLE IF NOT EXISTS `tipo_credenciales` (
  `id_tipo` int(2) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_credenciales`
--

INSERT INTO `tipo_credenciales` (`id_tipo`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Conferencista'),
(3, 'Comité');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
