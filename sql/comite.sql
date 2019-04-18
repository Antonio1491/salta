-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 20:40:18
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
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE IF NOT EXISTS `comite` (
  `id_comite` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id_credencial` int(5) NOT NULL,
  `temaEvaluar` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_comite`),
  KEY `id_credencial` (`id_credencial`),
  KEY `temaEvaluar` (`temaEvaluar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comite`
--
ALTER TABLE `comite`
  ADD CONSTRAINT `comite_ibfk_1` FOREIGN KEY (`id_credencial`) REFERENCES `credenciales` (`id_credenciales`),
  ADD CONSTRAINT `comite_ibfk_2` FOREIGN KEY (`temaEvaluar`) REFERENCES `temas` (`id_tema`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
