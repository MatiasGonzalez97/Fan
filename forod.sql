-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2015 a las 12:05:38
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `whiteroom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE IF NOT EXISTS `foro` (
`ID` int(7) unsigned NOT NULL,
  `autor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `respuestas` int(11) NOT NULL DEFAULT '0',
  `identificador` int(7) NOT NULL DEFAULT '0',
  `ult_respuesta` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `autor`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`) VALUES
(1, 'Jorge', 'Salan', 'Este es mi alias', '2001-06-15', 2, 0, '2001-06-15'),
(2, 'Alexi', 'Lahio', 'Bodom Beach Terror', '2001-06-15', 0, 0, '2001-06-15'),
(4, 'Alberto', 'Vivaldi', 'Solo de violines', '2001-06-15', 0, 1, '2001-06-15'),
(5, 'Julius', 'Gibert', 'Bart esta bien', '2001-06-15', 1, 1, '2001-06-15'),
(6, 'dr nick', 'bart', 'bart esta bien pero arrastra multiples rallauras y sintomas de estrepitosas craneales, por dios esa mujer se ha tragado un bebe', '2001-06-15', 0, 5, '2001-06-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
MODIFY `ID` int(7) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
