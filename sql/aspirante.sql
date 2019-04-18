-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 20:40:03
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
-- Estructura de tabla para la tabla `aspirante`
--

CREATE TABLE IF NOT EXISTS `aspirante` (
  `id_aspirante` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `emailAsistente` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `biografia` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `id_conferencia` int(5) NOT NULL,
  PRIMARY KEY (`id_aspirante`),
  KEY `id_coferencia` (`id_conferencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `aspirante`
--

INSERT INTO `aspirante` (`id_aspirante`, `nombre`, `apellidos`, `email`, `emailAsistente`, `telefono`, `cargo`, `empresa`, `pais`, `ciudad`, `biografia`, `foto`, `id_conferencia`) VALUES
(2, 'Emanuel José', 'Martin', 'emma.91@hotmail.es', '', '3512720397', 'Arquitecto', 'UNC-Facultad de Arquitectura y Urbanismo', 'Argentina', 'Córdoba', 'Arquitecto recibido año 2018.\r\nAyudante alumno en Arquitectura nivel 3 y 5. \r\nAyudante en cursillo de nivelacion arquitectura.\r\nColaborador asistente empresas constructoras en Córdoba.\r\nReconocimientos en varios premios académicos.\r\nFundador de @_tallerarquitectura_\r\n (laboratorio de investigación territorial sustentable)\r\n"Soñador de un mejor futuro aportando mi grano de voluntad en áreas humanas"\r\n\r\n', 'Emanuel Martin.jpg', 5),
(3, 'Natalia Belén ', 'Pacheco', 'natalia.pacheco.np.np@gmail.com [undefinnatalia.pacheco.np.np@gmail.com', '', '3564303316', 'Arquitecta', 'UNC-Facultad de Arquitectura y Urbanismo', 'Argentina', 'Santa Fé', '', 'natalia pacheco.jpg', 5),
(4, 'ELIZABETH NATIVIDAD ', 'TERÁN REÁTEGUI ', 'ecoteranr@gmail.com', '', '961071186', 'Presidente', 'Fundación ECO VERDE', 'PERÚ', 'CHACHAPOYAS', 'Bióloga, Mg.Sc. en Ecoturismo con experiencia laboral en el sector público, privado, cooperación internacional y docencia universitaria.  Especialista en Desarrollo Territorial Rural con Identidad Biocultural, medio ambiente, turismo sostenible-ecoturismo y conservación. \r\nArticulista sobre los temas de mi especialidad en medios de comunicación escritos de nivel local, regional, nacional e internacional, ponente y con reconocimientos por el trabajo realizado en el nivel local y nacional. ', 'Elita Terán -Alcaldesa.jpg', 6),
(5, 'Daiana', 'Zamler', 'daianazamler@gmail.com', '', '+54 9 11 6883 3488', 'Docente-Investigadora-Becaria', 'UAI-CONICET', 'Argentina', 'Rosario', 'Becaria del Consejo Nacional de Investigaciones Científicas y Técnicas (CONICET) y la Universidad Abierta Interamericana (UAI) en Argentina. Doctoranda de la Facultad de Arquitectura, Planeamiento y Diseño (FAPyD) de la Universidad Nacional de Rosario (UNR). Directora de proyecto de investigación “Espacios públicos recreativos de Rosario: diferencias entre centro y periferia” radicado en el Centro de Altos Estudios de Arquitectura y Urbanismo (CAEAU) de la UAI. Docente de Planeamiento Territorial y Urbano II en la Facultad de Arquitectura de la UAI. Publicaciones sobre espacios públicos, apropiación y vida recreativa en las ciudades contemporáneas.', 'Foto DZ.jpeg', 7),
(6, 'Daiana', 'Azzurro', 'dai_azzurro@hotmail.com', '', '+54 9 3464 628405', 'Colaboradora-Estudiante', 'UAI-Municipalidad de Casilda', 'Argentina', 'Casilda', 'Estudiante de Arquitectura en instancias de Trabajo Final de Carrera de la Universidad Abierta Interamericana (UAI). Colaboradora en Proyecto de Investigación “Espacios públicos recreativos de Rosario: diferencias entre centro y periferia” radicado en el Centro de Altos Estudios de Arquitectura y Urbanismo (CAEAU) de la UAI. Asistente en la Secretaría de Planeamiento Urbano, Vivienda y Producción de la Municipalidad de Casilda, Provincia de Santa Fé.\r\nParticipación en seminarios y conferencias como el Seminario Internacional de Accesibilidad y Patrimonio (CAPSF, Rosario, 2018).', 'FOTO DAZ.jpg', 7);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD CONSTRAINT `aspirante_ibfk_1` FOREIGN KEY (`id_conferencia`) REFERENCES `conferencias` (`id_conferencia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
