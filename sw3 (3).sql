-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2015 a las 08:56:17
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sw3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abogado`
--

CREATE TABLE IF NOT EXISTS `abogado` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `abogado`
--

INSERT INTO `abogado` (`id`, `nombre`, `apellido`, `correo`, `celular`, `contrasena`) VALUES
(1, 'jose norbey', 'ocampo', 'jose', '310', '1235'),
(2, 'sara catalina', 'osorio', 'a', '45454', '123'),
(3, 'Juan Bernardo ', 'Cardona', 'juanb@hotmail.com', '310848484', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `correo`, `celular`, `direccion`) VALUES
(2, 'Carlos ', 'Armando Zapata', 'carlos@hotmail.com', '109494538', 'Calle 21 a 27 a 15 B/ La Clarita'),
(3, 'Cristian Daniel', 'Ocampo Herrera ', 'cristaian@gmail.com', '95016845', 'Calle 25 N # 15 - 20'),
(4, 'NINGUNO', 'NINGUNO', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proceso_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
`id` int(11) NOT NULL,
  `abogado_id` int(11) DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noticia` varchar(2500) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `abogado_id`, `titulo`, `noticia`, `fecha`) VALUES
(1, 1, 'Predial para el año vigente', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo pulvinar urna elementum malesuada. Duis non enim nec nisl viverra posuere vel nec risus. Aliquam eu luctus leo, quis viverra felis. Nam non consequat justo. Fusce feugiat odio sed dui interdum ornare. Maecenas ultricies id justo sed hendrerit. Donec molestie justo non erat dictum, ac suscipit felis euismod.', '2015-11-19'),
(2, 2, 'Nuevos Gobernantes del Quindio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo pulvinar urna elementum malesuada. Duis non enim nec nisl viverra posuere vel nec risus. Aliquam eu luctus leo, quis viverra felis. Nam non consequat justo. Fusce feugiat odio sed dui interdum ornare. Maecenas ultricies id justo sed hendrerit. Donec molestie justo non erat dictum, ac suscipit felis euismod.', '2015-11-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesojudicial`
--

CREATE TABLE IF NOT EXISTS `procesojudicial` (
`id` int(11) NOT NULL,
  `abogado_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `descripcion` varchar(750) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigoConsulta` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fechaIn` date NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `prioridad` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `procesojudicial`
--

INSERT INTO `procesojudicial` (`id`, `abogado_id`, `cliente_id`, `descripcion`, `estado`, `codigoConsulta`, `fechaIn`, `fechaVencimiento`, `prioridad`, `titulo`) VALUES
(2, 1, 2, 'Proceso en el cual se acusa al señor Carlos de concierto para delinquir', 'En Proceso', '1', '2010-01-14', '2011-09-15', 1, 'Proceso judicial del señor Carlos'),
(3, 1, 3, 'Proceso por demanda de alimentos para el señor el cual esta...', 'Activo', '2', '2015-11-06', '2015-11-19', 5, 'DEmanda de Alimentos'),
(5, 2, 3, 'demanda contra las irregularidades que se presentaron el los dictamenes..', 'Activo', '123', '2015-03-01', '2016-01-01', 10, 'DEmanda contra la alcaldia de armenia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abogado`
--
ALTER TABLE `abogado`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_3440AC64640D1D53` (`proceso_id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_FE9D660A17713E5A` (`titulo`), ADD KEY `IDX_FE9D660ABDBF9863` (`abogado_id`);

--
-- Indices de la tabla `procesojudicial`
--
ALTER TABLE `procesojudicial`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_CC1ECD348202F009` (`codigoConsulta`), ADD UNIQUE KEY `UNIQ_CC1ECD3417713E5A` (`titulo`), ADD KEY `IDX_CC1ECD34BDBF9863` (`abogado_id`), ADD KEY `IDX_CC1ECD34DE734E51` (`cliente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abogado`
--
ALTER TABLE `abogado`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `procesojudicial`
--
ALTER TABLE `procesojudicial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
ADD CONSTRAINT `FK_3440AC64640D1D53` FOREIGN KEY (`proceso_id`) REFERENCES `procesojudicial` (`id`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
ADD CONSTRAINT `FK_FE9D660ABDBF9863` FOREIGN KEY (`abogado_id`) REFERENCES `abogado` (`id`);

--
-- Filtros para la tabla `procesojudicial`
--
ALTER TABLE `procesojudicial`
ADD CONSTRAINT `FK_CC1ECD34BDBF9863` FOREIGN KEY (`abogado_id`) REFERENCES `abogado` (`id`),
ADD CONSTRAINT `FK_CC1ECD34DE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
