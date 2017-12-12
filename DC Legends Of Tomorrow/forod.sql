
create database dc;
use dc;


CREATE TABLE  foro (
`ID` int(7) unsigned NOT NULL,
  `autor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `respuestas` int(11) NOT NULL DEFAULT '0',
  `identificador` int(7) NOT NULL DEFAULT '0',
  `ult_respuesta` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `foro` (`ID`, `autor`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`) VALUES
(1, 'Jorge', 'Salan', 'Este es mi alias', '2017-06-15', 2, 0, '2001-06-15'),
(2, 'Alexi', 'Lahio', 'Bodom Beach Terror', '2017-06-15', 0, 0, '2001-06-15'),
(4, 'Alberto', 'Vivaldi', 'Solo de violines', '2009-06-15', 0, 1, '2001-06-15'),
(5, 'Julius', 'Gibert', 'Bart esta bien', '2017-06-15', 1, 1, '2001-06-15'),
(6, 'dr nick', 'bart', 'bart esta bien pero arrastra multiples rallauras y sintomas de estrepitosas craneales, por dios esa mujer se ha tragado un bebe', '2001-06-15', 0, 5, '2001-06-15');


ALTER TABLE `foro`
 ADD PRIMARY KEY (`ID`);

ALTER TABLE `foro`
MODIFY `ID` int(7) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
