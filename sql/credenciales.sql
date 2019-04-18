-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 20:40:56
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
-- Estructura de tabla para la tabla `credenciales`
--

CREATE TABLE IF NOT EXISTS `credenciales` (
  `id_credenciales` int(5) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id_credenciales`),
  KEY `tipo` (`tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `credenciales`
--

INSERT INTO `credenciales` (`id_credenciales`, `usuario`, `password`, `tipo`) VALUES
(1, 'admin', 'admin', 1),
(2, 'us', 'us', 2),
(3, 'ejemplo@ejemplo.com', '123', 2),
(4, 'ejemplo@ejemplo.com', '123', 2),
(5, 'ejemploAnto@ejemplo.com', '1111', 2),
(6, 'admin@dsad.com', 'wqe', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `credenciales`
--
ALTER TABLE `credenciales`
  ADD CONSTRAINT `credenciales_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_credenciales` (`id_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
