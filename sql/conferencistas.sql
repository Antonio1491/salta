-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 20:40:43
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
-- Estructura de tabla para la tabla `conferencistas`
--

CREATE TABLE IF NOT EXISTS `conferencistas` (
  `id_conferencista` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_ing` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `empresa_ing` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `biografia` text COLLATE utf8_spanish_ci NOT NULL,
  `biografia_ing` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `autoriza1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `autoriza2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `evento_social` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_conferencia` int(5) NOT NULL,
  `id_credenciales` int(5) NOT NULL,
  PRIMARY KEY (`id_conferencista`),
  KEY `id_conferencia` (`id_conferencia`,`id_credenciales`),
  KEY `id_credenciales` (`id_credenciales`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `conferencistas`
--

INSERT INTO `conferencistas` (`id_conferencista`, `nombre`, `apellidos`, `cargo`, `cargo_ing`, `empresa`, `empresa_ing`, `biografia`, `biografia_ing`, `pais`, `ciudad`, `foto`, `autoriza1`, `autoriza2`, `evento_social`, `id_conferencia`, `id_credenciales`) VALUES
(4, 'toño', 'gg', 'd', 's', 's', 's', 'ADAdf', 'aFaf', 'fsadf', 'sdfsdaf', 'ejercicio.png', NULL, NULL, NULL, 8, 5),
(5, 'q', 'ewqeq', 'qwe', 'qwe', 'wqe', 'qwe', 'wqeqwe', 'wqewqe', 'qwe', 'we', 'Luis_Romahn.jpg', NULL, NULL, NULL, 8, 6);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conferencistas`
--
ALTER TABLE `conferencistas`
  ADD CONSTRAINT `conferencistas_ibfk_1` FOREIGN KEY (`id_credenciales`) REFERENCES `credenciales` (`id_credenciales`),
  ADD CONSTRAINT `conferencistas_ibfk_2` FOREIGN KEY (`id_conferencia`) REFERENCES `conferencias` (`id_conferencia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
