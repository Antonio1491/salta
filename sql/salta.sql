-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 20:39:12
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
CREATE DATABASE IF NOT EXISTS `salta` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `salta`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id_administrador` int(5) NOT NULL AUTO_INCREMENT,
  `id_credenciales` int(5) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_administrador`),
  KEY `id_credenciales` (`id_credenciales`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `id_credenciales`, `nombre`) VALUES
(1, 1, 'Antonio G.');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencias`
--

CREATE TABLE IF NOT EXISTS `conferencias` (
  `id_conferencia` int(5) NOT NULL AUTO_INCREMENT,
  `conferencia` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `conferencia_ing` varchar(400) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_tema` int(5) NOT NULL,
  `id_tipo` int(5) DEFAULT '1',
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_ing` text COLLATE utf8_spanish_ci,
  `justificacion` text COLLATE utf8_spanish_ci NOT NULL,
  `objetivo1` text COLLATE utf8_spanish_ci NOT NULL,
  `objetivo2` text COLLATE utf8_spanish_ci NOT NULL,
  `objetivo3` text COLLATE utf8_spanish_ci NOT NULL,
  `modalidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `inicio` time DEFAULT NULL,
  `fin` time DEFAULT NULL,
  `salon` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_conferencia`),
  KEY `id_tema` (`id_tema`),
  KEY `id_tipo` (`id_tipo`),
  KEY `salon` (`salon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `conferencias`
--

INSERT INTO `conferencias` (`id_conferencia`, `conferencia`, `conferencia_ing`, `id_tema`, `id_tipo`, `descripcion`, `descripcion_ing`, `justificacion`, `objetivo1`, `objetivo2`, `objetivo3`, `modalidad`, `status`, `fecha`, `inicio`, `fin`, `salon`) VALUES
(5, 'PAISAJES MODIFICADOS-Tesis de Grado en Arquitectura', NULL, 5, NULL, 'INTRODUCCIÓN: \r\nConstantemente suceden cambios que exigen cierta adaptación,sin embargo estas oportunidades para replantear la realidad, nunca fueron tantas, ni de un impacto tan global.Somos testigos del cierre de un ciclo, afrontamos un escenario de crisis ecológica, económica y social. \r\n¿Cual es la arquitectura que estas nuevas condiciones demandan?\r\nEn este punto lo que queda es la acción, ser consciente del fenómeno ya no es suficiente.\r\nSi una RESERVA NATURAL es oportunidad de cambio, lo que viene es evolución,innovación es pro de arquitectura más sostenible, flexibles, diversas e integradoras.\r\nPAISAJES MODIFICADOS es un ensayo ambiental que se desarrolla en el ámbito ínter-disciplinar de la ecología, el paisaje, el urbanismo y la arquitectura.La renovación de infraestructuras energéticas, así como la nueva gestión de materia y energía,vinculado con otros programas, proponiendo una nueva definición de la naturaleza.', NULL, 'Contexto-Impacto: Ciudad de Córdoba.\r\nLugar trabajado: Reserva Urbana San Martín-Córdoba.\r\n.\r\n.\r\nEl crecimiento inmensurable de la ciudad fue apropiándose de los bosques nativos de la geografía local, encontrándose en la actualidad en un conflicto territorial degradable dándole un impacto negativo a la ciudad.\r\nLa propuesta parte en recuperar el pulmón verde de la ciudad a traves de  la consolidacíon de los bordes de la misma para aportar una identidad , contemplando espacio publico exterior e interior para la participación cumunitaria de los ciudadanos.\r\nReducir el impacto negativo natural es nuestra primer estrategia para mejorar la calidad de vida actual aportando una serie de equipamientos ecológicos sustentables.\r\nEQUIPAMIENTOS PROPUESTOS:\r\nCentro de interpretación de la naturaleza\r\nBotánico generador de bosque nativo.\r\nEstablo de equino terapia para la ciudad.\r\nmiradores en distintos puntos de la reserva.\r\nRecuperación del borde del río con miradores externos\r\n (by pass urbanos).\r\n', 'RECUPERACIÓN DE UNA RESERVA NATURAL EN ESTADO CRÍTICO EN EL CENTRO DE UNA CIUDAD MUY URBANIZADA.', 'BRINDAR ESPACIOS PÚBLICOS A LA CIUDAD EN CONTACTO DIRECTO CON LA NATURALEZA NATIVA.', 'GENERAR INCLUSIÓN Y  PARTICIPACIÓN DE LA CIUDAD', 'Mesa Panel', NULL, NULL, NULL, NULL, NULL),
(6, 'INICIATIVA CHACHAPOYAS CIUDAD JARDÍN', NULL, 4, NULL, 'Es una propuesta de movilización social que busca convertir a la ciudad de Chachapoyas en una ciudad jardín; Chachapoyas es una ciudad de traza colonial republicana que fue fundada un 05 de septiembre de 1538, es la sexta ciudad de fundación española más antigua del Perú.  La propuesta promueve la participación ciudadana a través de concursos y realización de eventos culturales y ambientales  a partir del aprovechamiento de su estructura urbana tradicional (casas y casonas con patios, balcones y huertos), características culturales de su población - las mujeres chachapoyanas son amantes de los jardines y huertos, oportunidad del turismo por la continua y ascendente visitación turística que recibe la ciudad por ser centro de soporte del circuito turístico Chachapoyas-Kuélap y al mismo tiempo se está contribuyendo al embellecimiento de la ciudad, mejorando la calidad ambiental de la misma y generando nuevas oportunidades económicas a través del cluster de la floricultura. ', NULL, 'La ciudad San Juan de la Frontera de los Chachapoyas, hoy conocida como ciudad de Chachapoyas, fue fundada el año de 1535, por el español Don Alonso de Alvarado, lo que la convierte en la sexta ciudad de fundación española más antigua del Perú. La ciudad a la fecha conserva las características de su traza arquitectónica colonial, con casas y casonas de fachadas blancas y techos de tejas en su mayoría, además de exhibir hermosos balconcitos que le dan una identidad arquitectónica muy peculiar y atractiva. En la ciudad existen más de  mil  balcones de madera como parte de la arquitectura de sus edificaciones, lo que le ha valido la denominación de Ciudad de los balcones. Además otro elemento arquitectónico típico de las casas y casonas chachapoyanas lo constituyen los patios, tras patios, zaguanes y huertos, todos ellos de regular amplitud y en donde las antiguas damas chachapoyanas dedicaban su tiempo al cultivo de hermosas plantas ornamentales y útiles plantas aromáticas y medicinales, prácticas que tienen continuidad en la actualidad.   Con el pasar de los años y el crecimiento de la ciudad debido a múltiples factores entre los que destacan el establecimiento de la universidad, crecimiento turístico y empresarial relacionado a este rubro como al productivo, vienen produciendo cambios bruscos en los patrones arquitectónicos de la ciudad, así como una tendencia al hacinamiento y descuido en cuanto al ornato y cuidado de áreas verdes de uso público, que además día a día se reducen y se expande la urbanización sin dejar espacio para las áreas verdes y los espacios existentes están totalmente descuidados y abandonados; esto mismo se nota en las estructuras internas de muchas instituciones públicas y privadas y la pérdida continua de los espacios para áreas verdes en las casas y casona para dar paso a construcciones con fines de arrendamiento y alquiler.\r\n\r\nEl descuido evidente y está dando paso a una cultura de vandalismo y desatención por cuidar el buen aspecto de la ciudad. Por lo expuesto desde el año 2008, Fundación Eco Verde lanzó la iniciativa de realización de un concurso de Patios y Jardines con muy buena acogida por parte de la población local, lo mismo se hizo el año 2009 hasta la actualidad, contando siempre con un creciente número de participantes, hecho que a dado paso a una positiva transformación de la ciudad que día a día se va embelleciendo y aumentando su área verde a través de los jardines aéreos en los balcones y el mejoramiento progresivo de las áreas verdes particulares (viviendas), así como de las reducidas áreas verdes de uso público. \r\nPor lo expuesto la iniciativa CHACHAPOYAS CIUDAD JARDÍN es una propuesta para el desarrollo armónico de la ciudad que pone en valor los activos bioculturales del territorio, estimulando y fomentando identidad para el cuidado ambiental de la ciudad, en armonía con sus aspectos culturales e históricos y teniendo a la floricultura como una actividad que puede movilizar dinámicas participativas en los ciudadanos para promover, cuidar y valorar los aspectos del ambiente urbano con énfasis en sus áreas verdes y ampliación y cuidado de las mismas en espacios característicos de la arquitectónica colonial-repúblicana de sus casas (patios, jardines, zaguanes, balcones, parques, jardines de templos y otras áreas de uso público y/o privado). Además considerando la afición innata de las mujeres chachapoyanas por ell cuidado y colección de flores, resulta sumamente importante dar una mayor visibilidad a la actividad de la floricultura por su importante contribución al cuidado del medio ambiente y embellecimiento de la ciudad, como actividad económica para la generación de ingresos para la población, a través de la producción de flores y reciclaje de materia orgánica (residuos sólidos orgánicos) para la producción de compost y humus, y por su contribución a mejorar la calidad de vida (bienestar) de la población y visitantes y por ende también al desarrollo turístico local. Esta iniciativa año a año va captando una mayor cantidad de adeptos tanto del nivel público como privado, bajo la consigna de lograr que el año 2021, Chachapoyas sea reconocida como la ciudad más hermosa del Nor Oriente peruano ostentando el título de CHACHAPOYAS CIUDAD JARDÍN, como sinónimo de una ciudad bella, ambientalmente saludable, turística y que contribuye a la mitigación de los efectos del cambio climático mediante la conservación de sus áreas verdes tanto públicas como privadas, así como con el mantenimiento de sus blancas fachadas que dan mayor frescura al ambiente urbano; y por lo tanto una ciudad turística visualmente hermosa.\r\nLa positiva transformación de la ciudad a través de la Iniciativa CHACHAPOYAS CIUDAD JARDÍN y sus concursos de Patios, Jardines y Balcones de Ensueño Chachapoyas te quiero verde, es evidente y se  empieza a proliferar la modalidad de balcones floridos como estrategia de ampliación de las áreas verdes de la ciudad y mejor presentación del ambiente urbano.  \r\n', 'Posicionar a la ciudad de Chachapoyas como una Ciudad Jardín, con ciudadanos respetuosos de su medio ambiente, cultura y arquitectura urbana tradicional', 'Contribuir al mejoramiento y cuidado del medio ambiente de la ciudad de Chachapoyas a través de la participación vecinal e institucional en el cuidado de las áreas verdes.', 'Promover la economía local a través de la promoción de la floricultura y actividades complementarias de este rubro.', 'Individual', NULL, NULL, NULL, NULL, NULL),
(7, 'Apropiación del espacio público recreativo para el bienestar urbano.', NULL, 2, NULL, 'Reflexionar acerca de las formas de apropiación y el sentido que los habitantes pueden asignar a los espacios públicos que frecuentan, supone analizar los procesos de producción de dichos espacios. Respecto de la producción espacial resulta interesante indagar sobre los procesos proyectuales y de diseño en relación a las demandas y expectativas de los futuros usuarios de esos lugares. Reivindicar la interpretación de demandas y expectativas nos acerca a pensar, por un lado, en las condiciones de bienestar que los habitantes anhelan, y por otro en las características y cualidades que el espacio recreativo debiera ofrecer.  \r\nLa propia reflexión sugiere a priori que existe una brecha entre las formas de producción de espacios públicos y la posterior apropiación de los habitantes. El presente estudio se propone indagar sobre las acciones que originan la brecha y formular alternativas para minimizarla en pos de aumentar las posibilidades de apropiación y sentido de los habitantes con sus parques urbanos. ', NULL, 'El acelerado crecimiento urbano deriva en consecuencias heterogéneas y complejas que atañen a todos los sectores sociales y requieren de atención multidisciplinar. El bienestar individual y colectivo en la vida urbana actual, se presenta como una categoría transversal y esencial a ser observada. Se relaciona con el acceso a las libertades y las oportunidades de las personas para alcanzar sus logros y forjar su propio destino.\r\nLos espacios públicos, en tanto lugares de producción y reproducción de relaciones sociales, donde se da la vida comunitaria y el intercambio entre los habitantes; tienen el potencial de ser el escenario donde dichas libertades y oportunidades pueden ser alcanzadas. \r\nLa investigación que se está llevando a cabo pretende indagar sobre tres conjeturas principales. En primer lugar, se comprende que el bienestar tiene una relación directa con el sentido de apropiación de los ciudadanos en tanto se enlaza con la satisfacción de sus expectativas y demandas. En segundo lugar, se asume que existe una brecha entre los procesos de producción de espacios públicos y el sentido de apropiación. Por último, se supone que la incorporación del conocimiento común en los procesos de producción puede mejorar la calidad de los espacios públicos mientras se fortalece el sentido de apropiación.\r\nEn la ciudad de Rosario, la incorporación, renovación y mejoramiento de los espacios públicos y recreativos ha sido uno de los principales ejes de su transformación urbana. Sin embargo, pareciera ser que dicha transformación a través de Espacios Públicos Proyectados (EPP), no siempre conlleva a la apropiación por parte de los habitantes. Al mismo tiempo emergen iniciativas de movimientos independientes resultando Espacios Públicos No-Proyectados (EPNP) en el entorno construido. Se sospecha que éstos últimos generan un mayor sentido de apropiación ya que responden a iniciativas propias de los ciudadanos. \r\nLos espacios públicos representan oportunidades de recreación para las familias en la ciudad, especialmente para aquellas que viven en pequeñas unidades de vivienda. Constituyen la compensación necesaria que la vida urbana debe ofrecer a la población dentro de las cualidades de las nuevas ciudades. Estos espacios, por encima de lugares de esparcimiento, contribuyen positivamente a la preservación del medio ambiente, a la promoción de estándares de salud, al desarrollo de ciudades más seguras y el aumento del compromiso cívico. Además, favorecen la accesibilidad ofreciendo oportunidades al alcance de toda la sociedad. Se destacan entre ellas, el desarrollo económico dando posibilidades de empleo colectivo, el emplazamiento de funciones educativas no formales y las actividades culturales. Dichas relaciones resultan significativas de ser investigadas y debatidas ya que el espacio público es el escenario ideal para expandir las capacidades humanas y lograr un cambio en las condiciones de bienestar a través del diseño urbano. Analizar los procesos de producción de los espacios recreativos y la relación con los habitantes (los usuarios de dichos espacios) demanda, en tanto, una reflexión sobre los ejes temáticos propuestos en el Congreso Parques Sudamérica.\r\n', 'Identificar dinámicas y formas de apropiación de los espacios públicos recreativos.', 'Debatir sobre la incidencia del diseño y los procesos proyectuales de los espacios recreativos en la apropiación de los habitantes. ', 'Analizar procesos proyectuales participativos que tengan una implicancia en las formas de apropiación de los habitantes con el parque.   ', 'Mesa Panel', NULL, NULL, NULL, NULL, NULL),
(8, 'sin Asignar', NULL, 1, 1, 'daasdfsadf', 'AFaf', '', '', '', '', '', 'aceptada', NULL, NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE IF NOT EXISTS `salones` (
  `id_salon` int(5) NOT NULL AUTO_INCREMENT,
  `salon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `id_tema` int(5) NOT NULL AUTO_INCREMENT,
  `tema` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_ing` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `descripcion_ing` text COLLATE utf8_spanish_ci,
  `icono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id_tema`, `tema`, `nombre_ing`, `descripcion`, `descripcion_ing`, `icono`) VALUES
(1, 'Sin Asignar', 'Unassigned', NULL, NULL, ''),
(2, 'Diseño y Planeación', 'Planning and Design', '¿Cuál es la importancia de los principios y procesos de diseño para parques? En el Congreso Parques podrás encontrar temas específicos como: áreas infantiles, juegos de agua, parques de mascotas, entre otros. Así como información sobre procesos intelectuales y creativos para que el diseño y planeación de estos espacios sean un éxito. ', 'What is the importance of design principles and planning processes for parks? In Congreso Parques you can find specific topics such as: playground areas, splash pads, dog Parks and many more, as well as information about intellectual and creative processes so that the design and planning of these spaces are a success. ', 'diseno.png'),
(3, 'Economía y Usos del Espacio Público', 'Economy and Uses of Public Space', 'Además de ser espacios para la recreación, los parques impulsan la economía y generan empleos. Se presentarán modelos exitosos de administración, fomento económico y procuración de fondos mostrando la gran variedad de formas en las que un parque puede ser sostenible. ', 'In addition to being spaces for recreation, parks boost the economy and create jobs. Successful models of administration, economic promotion and fundraising will be presented showing the great variety of ways in which a park can be sustainable. ', 'economia.png'),
(4, 'La Ciudad', 'The City', 'La construcción de nuestras ciudades a través del espacio público para hacerlas más habitable, darles a nuestros ciudadanos una mejor calidad de vida y hacerlas más humanas es indispensable. ', 'Cities are composed of elements that make them unique: pedestrian areas, recreational bicycle, open space and resilience are some issues that are related to urban park.', 'ciudad.png'),
(5, 'Salud y Medio Ambiente', 'Health and Environment ', '¿Sabías que los parques traen infinidad de beneficios a la salud? Además de invitarnos a la activación física, son un lugar en donde nos encontramos de cara con la naturaleza. Las áreas verdes disminuyen los índices de depresión, ansiedad y estrés laboral; limpian el aire, mejoran las circulaciones del viento y regulan los patrones de lluvias. ', 'Did you know that parks bring many health benefits? Besides inviting us to physical activity, they are a place where we find ourselves face to face with nature. Green areas reduce the rates of depression, anxiety and work stress; they clean the air, improve the circulation of the wind and regulate rainfall patterns. ', 'salud.png'),
(6, 'Función Pública y Participación Ciudadana', 'Public Service and Citizen Participation', 'Los parques necesitan servidores públicos comprometidos con el espacio público, con las mejores prácticas para su implementación y sostenimiento en conjunto con la ciudadanía. En esta temática se presentarán modelos para fomentar la participación ciudadana y estructuras que mejoren el servicio público enfocado a los parques.', 'Urban parks need public officials committed with the best practices and sustainable processes alongside with the community. In this core area models to promote citizen participation and structures that improve the public service focused on urban parks will be presented.', 'funcion_publica.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_conferencia`
--

CREATE TABLE IF NOT EXISTS `tipo_conferencia` (
  `id_tipo` int(5) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_conferencia`
--

INSERT INTO `tipo_conferencia` (`id_tipo`, `tipo`) VALUES
(1, 'Sin Asignar'),
(2, 'Magistral'),
(3, 'Sesión Educativa'),
(4, 'Sesión Comercial'),
(5, 'Sesión Rápida');

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

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_credenciales`) REFERENCES `credenciales` (`id_credenciales`);

--
-- Filtros para la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD CONSTRAINT `aspirante_ibfk_1` FOREIGN KEY (`id_conferencia`) REFERENCES `conferencias` (`id_conferencia`);

--
-- Filtros para la tabla `comite`
--
ALTER TABLE `comite`
  ADD CONSTRAINT `comite_ibfk_1` FOREIGN KEY (`id_credencial`) REFERENCES `credenciales` (`id_credenciales`),
  ADD CONSTRAINT `comite_ibfk_2` FOREIGN KEY (`temaEvaluar`) REFERENCES `temas` (`id_tema`);

--
-- Filtros para la tabla `conferencias`
--
ALTER TABLE `conferencias`
  ADD CONSTRAINT `conferencias_ibfk_1` FOREIGN KEY (`id_tema`) REFERENCES `temas` (`id_tema`),
  ADD CONSTRAINT `conferencias_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_conferencia` (`id_tipo`),
  ADD CONSTRAINT `conferencias_ibfk_3` FOREIGN KEY (`salon`) REFERENCES `salones` (`id_salon`);

--
-- Filtros para la tabla `conferencistas`
--
ALTER TABLE `conferencistas`
  ADD CONSTRAINT `conferencistas_ibfk_1` FOREIGN KEY (`id_credenciales`) REFERENCES `credenciales` (`id_credenciales`),
  ADD CONSTRAINT `conferencistas_ibfk_2` FOREIGN KEY (`id_conferencia`) REFERENCES `conferencias` (`id_conferencia`);

--
-- Filtros para la tabla `credenciales`
--
ALTER TABLE `credenciales`
  ADD CONSTRAINT `credenciales_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_credenciales` (`id_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
