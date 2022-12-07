-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 04:15:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liceo_aprender`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudiente`
--

CREATE TABLE `acudiente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `num_documento` int(32) DEFAULT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_estudiante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acudiente`
--

INSERT INTO `acudiente` (`id`, `nombre`, `apellidos`, `num_documento`, `direccion`, `telefono`, `id_estudiante`) VALUES
(8, ' WILLIAM EFRAIN', 'ABELLA HERRERA', 76307332, 'Cra 58 #58-54 ', 2147483647, 7),
(9, 'PEREGRINO', 'ACOSTA', 10516932, 'CRA 35 #56-49', 2147483647, 8),
(10, ' GUEFRY LEIDER', 'ARAGON ', 76323459, 'CRA 25 #58-15', 2147483647, 9),
(11, ' NORA ELENA', 'AGUDELO DE LOPEZ', 42870562, 'CRA 96 #56-45', 2147483647, 10),
(12, ' NOE', ' ALBAN LOPEZ', 10537683, 'CRA 65 #45-10', 301676685, 11),
(13, 'CARLOS ALBERTO', 'ALEGRIA VELASQUEZ', 76317155, 'CRA 54 #54-65', 2147483647, 12),
(14, ' MARIA CECILIA', ' ALVAREZ VEJARANO', 41733718, 'CRA 59 #35-45', 2147483647, 13),
(15, ' MARY LUZ', ' ALZATE CAMAYO', 3453877, 'CRA 65 #54-45', 2147483647, 14),
(16, ' LUZ AMPARO', 'ANDRADE DE VALENCIA', 34528262, 'CRA 47 #57a-56', 2147483647, 15),
(17, 'ESPERANZA', 'ANDRADE REINOSO', 34540977, 'CRA 54 #55-45', 2147483647, 16),
(18, ' MILTON', 'ARANGO QUINTANA', 79390100, 'CRA 15 #54-45', 301458575, 17),
(19, ' VICTOR ANDRES', 'ARCOS ARCOS ', 4773058, 'CRA 36 #45-69', 2147483647, 18),
(20, 'YOLANDA DEL CARMEN', ' ARCOS LEGARDA', 34542749, 'CRA 89 # 78-05', 314658789, 19),
(21, 'HUGO LEON', 'ARENAS LOZANO', 14877481, 'CALLE 45 # 85-65', 320654978, 20),
(22, 'LUZ ANGELICA', 'ARIAS SARAY', 34551673, 'TRANS 1 #507', 350652147, 21),
(23, 'JOSE ORLANDO', 'ARTEAGA FLOREZ', 10544662, 'CALLE 6 #50-3', 2147483647, 22),
(24, 'ANTONIO JOSE EV', 'ASTAIZA SALAZAR', 10521362, 'CARRERA 56 #21-30', 2147483647, 23),
(25, 'MARIA DEL PILAR', 'ASTUDILLO FERNANDEZ', 66923034, 'CARRERA 5# 6-30', 2147483647, 24),
(26, 'FABIO ALDEMAR', ' ASTUDILLO MUNOZ', 10542190, 'CARRERA 25# 70-85', 2147483647, 25),
(27, ' FERNANDO ENRIQUE', 'ASTUDILLO SALAZAR ', 10535084, 'CARRERA 02# 3-25', 2147483647, 26),
(28, 'GLORIA INES', 'AVILA GONZALEZ ', 34544560, 'CARRERA 36#45-30', 2147483647, 27),
(29, 'JORGE ENRIQUE', 'AYALA CALDAS', 10529900, 'CALLE 05#23-5', 2147483647, 28),
(30, 'SUAREZ LUIS', 'BARRETO', 263364, 'CALLE8#56-4', 2147483647, 29),
(31, ' BEATRIZ EUGENIA', 'BASTIDAS SANCHEZ', 34551703, 'CALLE 25#35-2', 314753698, 30),
(32, 'HUGO ANDRES', 'BELALCAZAR CERON', 76324843, 'CALLE # 23 - 154', 316547892, 31),
(33, 'JOSE TORIBIO', 'BELTRAN VIDAL', 10533149, 'CARRERA27#32-4', 2147483647, 32),
(34, ' SANDRA MARIA', ' FERNANDEZ CORAL', 34562187, 'CRA 52 #54-65', 2147483647, 33),
(35, 'GILBERTO', ' FERNANDEZ LOPEZ', 10522441, 'CRA 21 #32a-58', 2147483647, 34),
(36, 'NICOLAS', 'FERNANDEZ SANDOVAL', 10523416, 'CRA 59 #45a-65', 2147483647, 35),
(37, 'MARIA FERNANDA', 'FIGUEROA GOMEZ', 34555659, 'CRA 18 #65-45', 2147483647, 36),
(38, 'EIDER EDUARDO', ' FLOREZ QUINTERO', 76308663, 'CRA 14 #45-15', 2147483647, 37),
(39, 'SAULO MARINO', ' FULI MACA', 76323372, 'CRA 16 #17a-25', 2147483647, 38),
(40, 'GLADYS BEATRIZ', 'GALINDO MANTILLA', 51579468, 'CRA 54 #71-25', 2147483647, 39),
(41, 'JOSE ANTONIO', ' GALLO CORREDOR', 7218789, 'CRA 41 #45-65', 2147483647, 40),
(42, 'RUTH ISABEL', 'GAMEZ FARIAS', 34554680, 'CRA 65 #45-25', 2147483647, 41),
(43, 'WILLIAM DE JESUS', 'GARCIA', 10548117, 'CRA 58 #45-25', 2147483647, 42),
(44, 'GLORIA ESPERANZA', 'GARCIA MARTINEZ', 34320529, 'CRA 25 #45-68', 2147483647, 43),
(45, 'MIRYAM ELENA', ' GARCIA ZUNIGA', 34534976, 'CRA 52 #58-56', 2147483647, 44),
(46, 'JHON ALEXANDER', 'GIRALDO CHAVARRIAGA', 94432606, 'CRA 58 #58-47', 2147483647, 45),
(47, 'ACOSTA LINO', 'GOMEZ', 76303571, 'CRA 45 #45-47', 2147483647, 46),
(48, 'RIGOBERTO', 'GOMEZ COBO', 76238105, 'CRA 54 #47-58', 2147483647, 47),
(49, 'LORENA PATRICIA', 'GOMEZ VICTORIA', 34563309, 'CRA 45 #54-48', 2147483647, 48),
(50, 'FABIOLA EUGENIA', 'GONZALEZ CUELLAR', 34531970, 'CRA 47 #45-74', 2147483647, 49),
(51, ' ESPERANZA', 'GONZALEZ DE CAMPO', 34538117, 'CRA 57#45-65', 2147483647, 50),
(52, 'FREDDY CLAVER', ' LOPEZ BAHOS', 76311533, 'CRA 54 #45-15', 2147483647, 51),
(53, 'DIANA MARIBEL', 'LOPEZ CORTES', 34547717, 'CRA 54 #45-46', 2147483647, 52),
(54, 'ANA MILENA', 'LOPEZ DE VELASCO', 34547458, 'CRA 54 #48-15', 2147483647, 53),
(55, 'MARITZA', ' LOPEZ GOMEZ', 48600362, 'CRA 35 #45-25', 2147483647, 54),
(56, 'FREDY JAVIER', 'LOPEZ MOLINA', 76318982, 'CRA 14 #45-26', 2147483647, 55),
(57, 'JOSE GIOVANNY', 'LOPEZ', 76305514, 'CRA 48 #45-36', 2147483647, 56),
(58, 'MARIO JOSE', ' LOPEZ PUERTO', 10528527, 'CRA 47 #57-25', 2147483647, 57),
(59, 'JUAN PABLO', 'PAZ CONCHA', 10547536, 'CRA 22 #45-25', 2147483647, 58),
(60, ' JOSE RICARDO', ' PAZ MUNOZ', 10529703, 'CRA 56 #45-25', 2147483647, 59),
(61, ' ELISA BARBARA', ' PEDROSO ALFONSO', 272681, 'CRA 26 #54-45', 2147483647, 60),
(62, 'LUIS ANTONIO', 'PENA MERA', 10524683, 'CRA 35 #99-62', 2147483647, 61),
(63, 'DARIO', 'PERAFAN AGREDO', 10522670, 'CRA 24 #25-35', 2147483647, 62),
(64, 'BIBIANA', 'PERAFAN SANCHEZ', 34568372, 'CRA 15 #45-16', 2147483647, 63),
(65, 'MEYDEE EUGENIA', 'PEREZ DORADO', 34528225, 'CALLE 45 #15-25', 2147483647, 64),
(66, 'MERA ROSANA', ' PEREZ', 34548200, 'CALLE 35 #25-15', 2147483647, 65),
(67, 'JOSE FERNANDO', 'PEREZ RESTREPO', 76316009, 'CALLE 45 #23-12', 2147483647, 66),
(68, 'JULIO CESAR', 'PIAMBA ANAYA', 76313505, 'CALLE 12 #25-35', 2147483647, 67),
(69, 'BEATRIZ ELISA', 'PIAMBA RUIZ', 34565754, 'CALLE 25 #12-23', 2147483647, 68),
(70, ' ALBEIRO', 'POLANCO OSORIO', 16347249, 'CRA 35 #45-25', 2147483647, 69),
(71, ' DEYSI FABIOLA', 'TRUJILLO', 25422600, 'CRA 12 #14-25', 2147483647, 70),
(72, 'LUIS ARMANDO', 'QUENGUAN IMBACHI', 76326458, 'CALLE 25 #45-23', 2147483647, 71),
(73, ' HERMES ARNALDO', 'QUIJANO PAZ', 76316564, 'CRA 25 #35-26', 2147483647, 72),
(74, 'JORGE ELIECER', 'QUINTERO ESQUIVEL', 14978724, 'CRA 15 #15-36', 2147483647, 73),
(75, 'SONIA LILIANA', ' QUIRA GUEVARA', 34532750, 'CRA 22 #35-24', 2147483647, 74),
(76, ' ZORAIDA', 'RAMIREZ GUTIERREZ', 41936740, 'CRA 36 #25-56', 2147483647, 75),
(77, ' DORIS SOCORRO', 'RAMIREZ RENGIFO', 34552278, 'CRA 25 #35-56', 2147483647, 76),
(78, ' ALFONSO ENRIQUE', 'RAMIREZ SANABRIA', 94310837, 'CRA 21 #10-12', 2147483647, 77),
(79, ' GLORIA AMPARO', 'RAMIREZ ZULUAGA', 34542984, 'CRA 17 #25-15', 2147483647, 78),
(80, 'CARLOS', 'REBOLLEDO RODRIGUEZ', 10531415, 'CRA 25 #56-45', 2147483647, 79),
(81, 'EDWIN', 'RENGIFO CANIZALES', 16626410, 'CRA 25 #.5-25', 2147483647, 80),
(82, 'GRACIELA', ' REYES MENDEZ', 34536646, 'CRA 10 #45-25', 2147483647, 81),
(83, 'OSCAR HUMBERTO', 'RIOS', 6558397, 'CRA 14 #52-65', 2147483647, 82),
(84, 'NELSON', 'RIVAS', 10537188, 'CALLE 54 #45-65', 2147483647, 83),
(85, 'ALBA STELLA', 'RIVERA DE BUSTAMANTE', 34538964, 'CALLE 12 # 45-48', 2147483647, 84),
(86, 'ISABEL CRISTINA', 'RIVERA LOZADA', 66767305, 'CRA 11 #25-26', 2147483647, 85),
(87, 'JESUS EDUARDO', 'RIVERA MAUNA', 10546248, 'CALLE 25 #54-65', 2147483647, 86),
(88, ' SANDRA MILENA', 'ROA MARTINEZ', 63516527, 'CRA 24 #45-35', 2147483647, 87),
(89, 'ORLANDO', ' RODRIGUEZ BUITRAGO', 10528196, 'CALLE 45 #26-54', 2147483647, 88),
(90, 'ELENA', 'RODRIGUEZ MENDEZ', 25280521, 'CALLE 45 #52-41', 2147483647, 89),
(91, 'MARIA CLARA', 'RODRIGUEZ', 34541655, 'CALLE 13 #45-65', 2147483647, 90),
(92, 'TULIO ENRIQUE', 'ROJAS CURIEUX', 19250404, 'CALLE 22 #45-54', 2147483647, 91),
(94, 'GEORGINA CECILI', ' ROSERO ALARCON', 34530183, 'CRA 45 #25-35', 2147483647, 93),
(95, 'FABIO ARTURO', 'RUIZ BETANCOURTH', 10532034, 'CRA 45 #69-45', 2147483647, 94),
(96, 'PIEDAD', 'RUIZ ECHEVERRY', 31900022, 'CALLE 16 #45-45', 2147483647, 95),
(97, 'JOSE DEL CARMEN', 'RUIZ OBANDO', 76308759, 'CRA 23 #45-65', 2147483647, 96),
(98, 'CLAUDIA NAYIBE', 'SALAMANCA RAGUA', 51772636, 'CRA 45 #45-65', 2147483647, 97),
(99, 'JORGE ENRIQUE', 'SALAZAR FERRO', 19205663, 'CRA 25 #45-65', 2147483647, 98),
(100, ' HECTOR ALEJANDRO', ' SANCHEZ', 12191935, 'CRA 14 #12-65', 2147483647, 99),
(101, 'SONIA ADELAIDA', 'SANCHEZ LOPEZ', 34536659, 'CRA 12 #64-15', 2147483647, 100),
(102, 'LORENCITA', 'SILVA MOSQUER', 34475086, 'CRA 35 #55-65', 2147483647, 101),
(103, 'JAIME JOSE', 'SOLARTE GUZMAN', 10546378, 'CALLE 54 #25-65', 2147483647, 102),
(104, 'ROSA ELIZABETH', 'TABARES TRUJILLO', 29345220, 'CALLE 25 #59-54', 2147483647, 103),
(105, ' JOSE IGNACIO', 'TELLEZ RODRIGUEZ', 19199600, 'CALLE 14 #45-65', 2147483647, 104),
(106, 'JAIME', 'TOBAR MUNOZ', 10526952, 'CRA 45 #75-65', 2147483647, 105),
(107, ' CLARA INES', ' TOBAR TENJO ', 34562227, 'CALLE 56 #35-45 ', 2147483647, 106),
(108, 'ALEJANDRO', 'TOLEDO TOBAR', 76321704, 'CRA 45 #65-25', 2147483647, 107),
(109, 'CLARA IMELDA', 'TORRES ARTUNDUAGA', 26492312, 'CRA 41a #41-65', 2147483647, 108),
(110, 'MIRYAM', 'TORRES LONDONO', 29881316, 'CALLE 69 #45-55', 2147483647, 109),
(111, 'GERARDO ANDRES', 'TORRES RODRIGUEZ', 10539083, 'CRA 11 #25-45', 2147483647, 110),
(112, 'LUZ MARINA', 'TULCAN NUPAN', 27142494, 'CALLE 25 #54-98', 2147483647, 111),
(113, 'NUBIA', 'URREA HOYOS', 34544841, 'CALLE 12 #14-16', 2147483647, 112),
(114, 'JULIO CESAR', 'USUMA GUASPA', 5259115, 'CRA 74 #99-36', 2147483647, 113),
(115, 'RUBBY AMANDA', 'VALDEZ DE MUNOZ', 34527012, 'CRA 31 #45-25', 2147483647, 114),
(116, 'FRANCISCO JAVIER', 'VALENCIA CASTILLO', 76319847, 'CRA 52 #54-64', 2147483647, 115),
(117, 'JAVIER RODOLFO', 'VALENCIA FIGUEROA', 10548665, 'CRA 59 #45a-64', 2147483647, 116),
(118, ' HENRY JOSE', 'VALLEJO VARGAS', 10539942, 'CRA 52 #54-67', 2147483647, 117),
(119, 'GILDARDO', 'VANEGAS MUNOZ', 16699515, 'CRA 45 #45-14', 2147483647, 118),
(120, 'LUIS REINEL', 'VASQUEZ ARTEAGA', 93366281, 'CRA 18 #65-44', 2147483647, 119),
(121, ' AURA MARIA', 'VASQUEZ MERA', 48661503, 'CRA 45 #45-49', 2147483647, 120),
(122, ' HUGO ALBERTO', 'VASQUEZ SANDOVAL', 10527740, 'CRA 52 #54-69', 2147483647, 121),
(123, 'DIEGO ALFONSO', 'VELASCO CARDENAS ', 10529567, 'CRA 21 #32a-51', 2147483647, 122),
(124, 'MARIA ARGENIS', ' VELASCO SANCHEZ', 34542310, 'CRA 52 #54-63', 2147483647, 123),
(125, 'ELSA BETTY', 'VELASCO VALENCIA', 34556513, 'CRA 14 #45-47', 2147483647, 124),
(127, ' JESUS REINEL', 'VELASCO ZAMBRANO', 10535036, 'CRA 52 #54-62', 2147483647, 126),
(128, 'PATRICIA EUGENI', 'VELEZ VARELA ', 29993756, 'CRA 52 #54-66', 2147483647, 127),
(129, 'MARY STELLA', 'VIDAL DE DIAZ', 25681811, 'CRA 21 #32a-59', 2147483647, 128),
(130, 'JAIME LEON', 'VILLEGAS ARIAS', 16366388, 'CRA 52 #54-61', 2147483647, 129),
(131, ' HEVERT', 'VIVAS', 16711797, 'CRA 21 #32a-57', 2147483647, 130),
(132, 'MARTHA ISABEL', 'VIVAS CHACON', 34544390, 'CRA 52 #54-67', 2147483647, 131),
(133, 'VICTOR HUGO', 'VIVAS RAMOS', 10526184, 'CRA 89 #45-54', 2147483647, 132),
(134, 'CLAUDIA GIOVANN', 'VIVEROS TOBAR', 25274823, 'CRA 87 #45-65', 2147483647, 133),
(135, 'JOHN GERARDO', 'YANZA BRAVO', 76322524, 'CRA 10 #25-65', 2147483647, 134),
(136, ' NAPOLEON', 'ZAMBRANO ALFONSO', 16342484, 'CRA 33 #41-95', 2147483647, 135),
(137, 'LEONIDAS', 'ZAMBRANO', 14965889, 'CRA 46 #45-46', 2147483647, 136),
(138, 'CESAR AUGUSTO', ' ZAPATA MONJE', 76304423, 'CRA 45 #59-45', 2147483647, 137),
(139, 'DOKIA MARYSOL', 'ZUNIGA MOSQUERA', 34543027, 'CRA 23 #78-45', 2147483647, 138),
(140, ' RENE', 'ZUNIGA RENGIFO', 13804898, 'CRA 56 #45-45', 2147483647, 139),
(141, ' LILIANA', 'ZUNIGA SOLARTE', 34526987, 'CALLE 15 #45-65', 2147483647, 140),
(143, 'CARLOS ALBERTO', 'COBO LOZADA', 76318697, 'CRA 56 #45-56', 2147483647, 142),
(144, 'YENNI ANGELICA', 'CONDE CARDONA', 34571854, 'CRA 13 #15-45', 2147483647, 143),
(145, 'MIGUEL HUGO', 'CORCHUELO MORA', 19427110, 'CALLE 17 #14-52', 2147483647, 144),
(146, 'JORGE WASGINGTON', 'CORONEL GARCIA', 19371844, 'CRA 49 #45-15', 2147483647, 145),
(147, 'MARTHA LUCIA', 'CORTEZ BONILLA', 34552524, 'CALLE 18 #45-45', 2147483647, 146),
(148, 'HUGO ALDEMAR', 'COSME VARGAS', 10524320, 'CRA 59 #45a-69', 2147483647, 147),
(149, 'CARMEN OFELIA', 'DAZA CORDOBA', 34528743, 'CALLE 13 #45-69', 2147483647, 148),
(150, 'YAZMIN', 'DELGADILLO COLLAZOS', 25274109, 'CALLE 59 #25-15', 31254555, 149),
(151, 'JULIO CESAR', 'DIAGO FRANCO', 10529992, 'CRA 52 #54-69', 301256985, 150),
(152, 'RUBY ADIELA', 'DIAGO GARCIA', 34537751, 'CRA 35 #45-28', 30165847, 151),
(153, 'ROSALBA', 'DIAZ CASTRO', 34538613, 'CRA 52 #54-68', 301254856, 152),
(154, ' ALVARO HUMBERTO', 'DIAZ PUENTES', 19490554, 'CRA 52 #54-68', 302658452, 153),
(155, 'FRANCISCO EDUAR', 'ENRIQUEZ BELECAZAR', 12988795, 'CRA 21 #32a-52', 2147483647, 154),
(156, 'HUGO HERNAN', 'ERAZO GOMEZ', 10544499, 'CRA 52 #54-64', 320154854, 155),
(157, 'REINALDO', 'ERAZO RODRIGUEZ', 10533770, 'CALLE 74 #45-65', 2147483647, 156),
(158, 'AMANDA BEATRIZ', 'ESCOBAR CANENCIO', 34527449, 'CRA 85 #45-35', 302659582, 157),
(159, 'AUGUSTO', 'ESCOBAR SOLIS', 10530249, 'CALLE 19 #12-56', 302152635, 158),
(160, 'PAULO MAURICIO', 'ESPINOSA ECHEVERRY', 10285360, 'CALLE 47 #45-25', 302569854, 159),
(161, 'LILIA MARLENE', 'ESTRADA DE JIMENEZ', 34525663, 'CALLE 45 #78-15', 302659584, 160),
(162, 'ROBERTH ALFREDO', 'EUSCATEGUI PACHON', 10547293, 'CALLE 14#45-25', 2147483647, 161),
(163, 'ALEXANDER', ' FAJARDO SARRIA', 76316972, 'CRA 52 #54-63', 2147483647, 162),
(168, 'EDGAR HERNANDO', 'LOPEZ NORENA', 16251235, 'CRA 52 #54-65', 302658452, 167);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id` int(11) NOT NULL,
  `pago_id` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `mes` varchar(25) DEFAULT NULL,
  `desayuno` int(32) NOT NULL,
  `media_manana` int(32) NOT NULL,
  `media_tarde` int(32) NOT NULL,
  `almuerzo` int(32) NOT NULL,
  `transporte` int(32) NOT NULL,
  `derecho_grado` int(32) NOT NULL,
  `matricula` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `num_documento` int(32) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(15) NOT NULL,
  `jornada` varchar(25) NOT NULL,
  `grado` varchar(25) NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellidos`, `num_documento`, `fecha_nacimiento`, `genero`, `jornada`, `grado`, `estado`) VALUES
(7, 'Brayan Camilo', 'Rojas Gomez', 1002592770, '2022-06-04', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(8, ' FAUSTO JOSE', 'ACOSTA', 10547808, '2022-02-06', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(9, 'MARIA AMPARO', 'ACOSTA ARAGON', 34532270, '2022-03-05', 'femenino', 'mañana', 'sala-cuna', 'activo'),
(10, 'XIMENA LUCIA', 'AGREDO TORRES ', 76305729, '2022-03-14', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(11, 'JUAN CARLOS', ' AGUIRRE GARCIA', 75076432, '2022-01-10', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(12, 'DIEGO ALONSO', ' ALEGRIA FERNANDEZ', 76288230, '2022-03-09', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(13, 'LUIS EVELIO', 'ALVAREZ JARAMILLO', 10536636, '2022-03-24', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(14, ' LUIS GERARDO', 'ALVEAR ORTEGA', 4613691, '2022-04-13', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(15, 'CARLOS ALBERTO', 'ANAYA HIDALGO', 10539634, '2022-02-05', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(16, 'GERARDO MESIAS', 'ANDRADE', 2899818, '2022-03-18', 'masculino', 'mañana', 'sala-cuna', 'activo'),
(17, ' IRMA PIEDAD', 'ARANGO GAVIRIA', 43040911, '2021-06-09', 'femenino', 'mañana', 'caminadores', 'activo'),
(18, 'LUCIA INES', ' ARCINIEGAS MOLINA', 31223228, '2021-04-15', 'femenino', 'mañana', 'caminadores', 'activo'),
(19, 'ELENA', 'ARCOS DE CHILITO', 25559177, '2021-07-22', 'femenino', 'mañana', 'caminadores', 'activo'),
(20, ' MA MARGOTH', 'ARENAS ESCOBAR', 34530532, '2021-03-20', 'femenino', 'mañana', 'caminadores', 'activo'),
(21, ' MARTHA EUGENIA', 'AREVALO SANDOVAL', 25611425, '2021-09-06', 'femenino', 'mañana', 'caminadores', 'activo'),
(22, ' MAGNOLIA', ' ARISTIZABAL', 31266482, '2020-12-30', 'femenino', 'mañana', 'caminadores', 'activo'),
(23, 'ELIZABET', ' ASTAIZA PERAFAN', 34562400, '2021-08-30', 'femenino', 'mañana', 'caminadores', 'activo'),
(24, 'HORACIO', 'ASTUDILLO', 10517940, '2021-02-08', 'masculino', 'mañana', 'caminadores', 'activo'),
(25, 'EDGAR OSWALDO', 'ASTUDILLO MOSQUERA', 76307516, '2021-06-16', 'femenino', 'mañana', 'caminadores', 'activo'),
(26, ' MARIA YENSI', 'ASTUDILLO PEREZ', 34562778, '2021-06-25', 'femenino', 'mañana', 'caminadores', 'activo'),
(27, ' CUERVO SILVIO', 'AVENDANO', 3014070, '2021-03-18', 'masculino', 'completa', 'parvulos', 'activo'),
(28, 'CARLOS HUGO', 'AYALA', 10529631, '2021-01-23', 'masculino', 'completa', 'parvulos', 'activo'),
(29, 'JESUS ALBERTO', 'BARRAGAN RAMIREZ', 10527966, '2021-06-24', 'masculino', 'completa', 'parvulos', 'activo'),
(30, ' HENRY GIOVANNI', 'BASTIDAS ESCOBAR', 76306105, '2021-05-06', 'masculino', 'completa', 'parvulos', 'activo'),
(31, 'CLARA EUGENIA', 'BECERRA CORTES', 34558659, '2021-06-05', 'masculino', 'completa', 'parvulos', 'activo'),
(32, 'GLORIA MERCEDES', 'BELALCAZAR FERNANDEZ', 25277918, '2021-03-21', 'femenino', 'completa', 'parvulos', 'activo'),
(33, 'MARINO', 'FERNANDEZ', 76314121, '2021-06-19', 'masculino', 'completa', 'parvulos', 'activo'),
(34, ' LIZARDO', 'FERNANDEZ GOMEZ', 10531923, '2021-07-05', 'masculino', 'completa', 'parvulos', 'activo'),
(35, 'JAVIER', 'FERNANDEZ MERA', 10541069, '2021-07-21', 'masculino', 'completa', 'parvulos', 'activo'),
(36, 'ADELINA', 'FIERRO DE RIVERA', 40757341, '2021-06-24', 'femenino', 'completa', 'parvulos', 'activo'),
(37, 'JERSEY', ' FLOREZ PEREZ', 76313275, '2021-11-24', 'femenino', 'completa', 'parvulos', 'activo'),
(38, ' EDUAR', 'FULI FRANCISCO', 76320042, '2020-03-26', 'masculino', 'completa', 'prejardin', 'activo'),
(39, 'MARY LUZ', 'GAHONA LASSO', 34555766, '2020-07-21', 'femenino', 'completa', 'prejardin', 'activo'),
(40, 'CARLOS', 'BARRERA', 19343842, '2020-11-18', 'masculino', 'completa', 'prejardin', 'activo'),
(41, 'FERNANDO ALBERT', 'GALVIS JIMENEZ', 10520075, '2020-06-18', 'masculino', 'completa', 'prejardin', 'activo'),
(42, 'ENRIQUE', 'GARCES ZAMUDIO', 8273666, '2020-10-15', 'masculino', 'completa', 'prejardin', 'activo'),
(43, ' YOLANDA', 'GARCIA DE SANCHEZ', 34535976, '2020-11-26', 'femenino', 'completa', 'prejardin', 'activo'),
(44, 'MILLER ANTONIO', 'GARCIA ZUNIGA ', 10538660, '2020-07-16', 'masculino', 'completa', 'prejardin', 'activo'),
(45, ' CARLOS ALBERTO', 'GAVIRIA LOPEZ', 76310264, '2020-04-15', 'masculino', 'completa', 'prejardin', 'activo'),
(46, 'SAUL ENRIQUE', 'GOMEZ', 10527068, '2020-07-22', 'masculino', 'completa', 'prejardin', 'activo'),
(47, 'CLARA ELISA', 'GOMEZ BOLANOS', 34558518, '2020-11-25', 'femenino', 'completa', 'prejardin', 'activo'),
(48, 'NELSON EDUARDO', 'GOMEZ HERNANDEZ', 10533819, '2018-06-20', 'masculino', 'completa', 'transicion', 'activo'),
(49, ' CARLOS ALBERTO', 'GONZALEZ CALLEJAS', 16627531, '2018-06-05', 'masculino', 'completa', 'transicion', 'activo'),
(50, 'CARMEN TULIA', ' GONZALEZ', 31304917, '2018-11-17', 'femenino', 'completa', 'transicion', 'activo'),
(51, 'RODRIGO', ' LOPEZ AGREDO', 19184142, '2018-06-19', 'masculino', 'completa', 'transicion', 'activo'),
(52, 'JANETH', 'LOPEZ CALDERON', 31913268, '2018-10-25', 'femenino', 'completa', 'transicion', 'activo'),
(53, 'JAIME DARIO', 'LOPEZ CORTEZ', 10536397, '2018-11-09', 'masculino', 'completa', 'transicion', 'activo'),
(54, 'MILTON JAVIER', 'LOPEZ GARCIA', 76307943, '2018-05-15', 'masculino', 'completa', 'transicion', 'activo'),
(55, 'MARGARITA MARIA', ' LOPEZ MANZANO', 52007791, '2018-07-19', 'femenino', 'completa', 'transicion', 'activo'),
(56, 'EDGAR HERNANDO', 'LOPEZ NORENA', 16251235, '2018-11-21', 'masculino', 'completa', 'transicion', 'activo'),
(57, 'MARGARITA', 'LOPEZ PABON', 34532839, '2018-06-30', 'femenino', 'completa', 'transicion', 'activo'),
(58, ' LADY CRISTINA', 'PAZ BURBANO', 34545299, '2016-07-21', 'femenino', 'completa', 'primero', 'activo'),
(59, 'GERSON DARIO', 'PAZ GOMEZ', 10531834, '2016-06-11', 'masculino', 'completa', 'primero', 'activo'),
(60, ' GISELA MABEL', 'PAZ PERAFAN ', 34546261, '2016-06-21', 'femenino', 'completa', 'primero', 'activo'),
(61, 'ENRIQUE', 'PENA', 19300241, '2016-12-13', 'masculino', 'completa', 'primero', 'activo'),
(62, 'MARIA EFIGENIA', 'PENAGOS DAGUA', 34595998, '2016-06-15', 'femenino', 'completa', 'primero', 'activo'),
(63, 'BEATRIZ EUGENIA', 'PERAFAN NATES', 34546429, '2016-06-23', 'femenino', 'completa', 'primero', 'activo'),
(64, 'JESUS ALIRIO', 'PEREZ DAZA', 4627913, '2016-10-14', 'masculino', 'completa', 'primero', 'activo'),
(65, 'EDIER HUMBERTO', 'PEREZ', 16687546, '2016-02-16', 'masculino', 'completa', 'primero', 'activo'),
(66, 'EDUARDO JOSE', 'PEREZ MUNOZ', 10544794, '2016-06-22', 'masculino', 'completa', 'primero', 'activo'),
(67, ' LILIANA MARIA', 'PEREZ TENORIO', 34545170, '2016-11-19', 'femenino', 'completa', 'primero', 'activo'),
(68, 'GRACIELA', ' PIAMBA DE BOLANOS ', 25700256, '2015-06-19', 'femenino', 'completa', 'segundo', 'activo'),
(69, ' LUIS FERNANDO', 'POLANCO FLOREZ', 10527282, '2015-10-16', 'masculino', 'completa', 'segundo', 'activo'),
(70, 'LUZ MARIELA', 'PORTILLA ESCOBAR', 34534313, '2015-04-11', 'femenino', 'completa', 'segundo', 'activo'),
(71, 'CONSUELO SUSANA', 'PUERTA LOPEZ', 34555774, '2015-06-23', 'femenino', 'completa', 'segundo', 'activo'),
(72, 'LUIS ARMANDO', 'QUENGUAN IMBACHI', 76326458, '2015-06-17', 'masculino', 'completa', 'segundo', 'activo'),
(73, 'ARIEL ANTONIO', 'QUINONEZ SEMANATE', 4626622, '2015-02-17', 'masculino', 'completa', 'segundo', 'activo'),
(74, 'CARLOS', ' QUINTIN LONDONO', 7557418, '2015-08-20', 'masculino', 'completa', 'segundo', 'activo'),
(75, 'MARGARITA EUGENIA', ' RAMIREZ ALEGRIA', 34539124, '2015-02-18', 'femenino', 'completa', 'segundo', 'activo'),
(76, 'CARMEN ROSA', 'RAMIREZ ORDONEZ', 34529491, '2015-08-13', 'femenino', 'completa', 'segundo', 'activo'),
(77, 'JOSE MARIA', 'RAMIREZ RESTREPO', 4612551, '2015-09-09', 'masculino', 'completa', 'segundo', 'activo'),
(78, 'GABRIELA', 'RAMIREZ ZULUAGA', 34532933, '2015-11-18', 'femenino', 'completa', 'tercero', 'activo'),
(79, 'GERMAN JOSE', 'RAMOS MERA', 76322101, '2014-06-17', 'masculino', 'completa', 'tercero', 'activo'),
(80, 'VICTOR HUGO', 'RENDON', 10544098, '2014-06-18', 'masculino', 'completa', 'tercero', 'activo'),
(81, 'ALVARO RENE', 'RESTREPO GARCES', 87246557, '2014-06-10', 'masculino', 'completa', 'tercero', 'activo'),
(82, 'CARLOS ALBERTO', 'RINCON LOPEZ', 16351950, '2014-05-13', 'masculino', 'completa', 'tercero', 'activo'),
(83, 'LUZ AIDEE', 'RIVAS', 34525989, '2014-04-24', 'femenino', 'completa', 'tercero', 'activo'),
(84, 'ELIZETE', 'RIVERA', 34568577, '2014-06-27', 'femenino', 'completa', 'tercero', 'activo'),
(85, 'GERARDO ANTONIO', 'RIVERA LOPEZ', 10528863, '2014-11-21', 'masculino', 'completa', 'tercero', 'activo'),
(86, 'WAYNER', 'RIVERA MARQUEZ', 16611388, '2014-04-24', 'masculino', 'completa', 'tercero', 'activo'),
(87, 'YULIETD PIEDAD', 'RIVERA MORCILLO', 34559928, '2014-02-04', 'femenino', 'completa', 'tercero', 'activo'),
(88, ' XIMENA', ' RODRIGUEZ ANDRADE', 34550789, '2013-11-19', 'femenino', 'completa', 'cuarto', 'activo'),
(89, 'VICTOR HUGO', 'RODRIGUEZ LOPEZ', 76306528, '2014-07-17', 'masculino', 'completa', 'cuarto', 'activo'),
(90, 'JORGE ENRIQUE', 'RODRIGUEZ PAEZ', 3180213, '2014-07-08', 'masculino', 'completa', 'cuarto', 'activo'),
(91, ' GLORIA ESPERANZA', 'ROJAS ALVARADO', 34551642, '2014-06-25', 'femenino', 'completa', 'cuarto', 'activo'),
(93, ' LUZ MARINA', 'ROJAS REY', 39610473, '2014-06-19', 'femenino', 'completa', 'cuarto', 'activo'),
(94, ' NOIRA MILENA', 'RUALES CERTUCHE', 34537521, '2014-12-11', 'femenino', 'completa', 'cuarto', 'activo'),
(95, ' IVAN ALBERTO', 'RUIZ CAMAYO', 76311865, '2014-06-17', 'masculino', 'completa', 'cuarto', 'activo'),
(96, 'JUAN PABLO', 'RUIZ GUEVARA', 10295252, '2014-06-19', 'masculino', 'completa', 'cuarto', 'activo'),
(97, 'DIEGO FERNANDO', 'RUIZ SOLARTE', 76331824, '2014-06-25', 'masculino', 'completa', 'cuarto', 'activo'),
(98, 'MARIA ASTRID', 'SALAZAR BENACHI', 34556577, '2014-10-21', 'femenino', 'completa', 'cuarto', 'activo'),
(99, 'DAIRO ALY', 'SANCHEZ', 76276223, '2013-06-15', 'masculino', 'completa', 'quinto', 'activo'),
(100, 'EUNICE', 'SANCHEZ DE RAMIREZ', 34533642, '2014-10-07', 'masculino', 'completa', 'quinto', 'activo'),
(101, 'CARLOS HERNAN', 'SIERRA TORRES', 76318112, '2014-11-05', 'masculino', 'completa', 'quinto', 'activo'),
(102, 'MARIA OTILIA', 'SOLARTE DAGUA', 25280778, '2013-06-18', 'femenino', 'completa', 'quinto', 'activo'),
(103, 'ALEXIS ADOLFO', 'SOLARTE SANDOVAL', 76321132, '2013-10-28', 'masculino', 'completa', 'quinto', 'activo'),
(104, 'GERMAN ANTONIO', 'TEJADA PUENTES', 16665788, '2013-06-20', 'masculino', 'completa', 'quinto', 'activo'),
(105, ' FRANCISCO JAVIER', 'TERAN CUARAN', 5350220, '2013-03-14', 'masculino', 'completa', 'quinto', 'activo'),
(106, 'JAIME', 'TOBAR MUNOZ', 10526952, '2013-06-11', 'masculino', 'completa', 'quinto', 'activo'),
(107, ' TERESA', ' TOLEDO GOMEZ', 34543873, '2014-04-18', 'femenino', 'completa', 'quinto', 'activo'),
(108, 'GERARDO ANTONIO', 'TORO RIVERA', 10549877, '2013-11-14', 'masculino', 'completa', 'quinto', 'activo'),
(109, 'DIEGO IGNACIO', 'TORRES CARDENAS', 12980545, '2012-06-20', 'masculino', 'completa', 'sexto', 'activo'),
(110, 'LIZZETH MARCELL', 'TORRES QUINTERO', 25276265, '2013-06-25', 'femenino', 'completa', 'sexto', 'activo'),
(111, 'VLADIMIR', 'TRUJILLO ARIAS', 76320040, '2013-07-18', 'masculino', 'completa', 'sexto', 'activo'),
(112, 'FLORDELIS', 'URREA', 34554676, '2013-06-04', 'femenino', 'completa', 'sexto', 'activo'),
(113, ' LUIS CARLOS', 'USUGA MARTINEZ', 4964115, '2013-06-11', 'masculino', 'completa', 'sexto', 'activo'),
(114, ' OLGA ADRIANA', 'VALDES CANENCIO', 34539672, '2013-04-18', 'femenino', 'completa', 'sexto', 'activo'),
(115, 'MARIO ARMANDO', ' VALENCIA CARDONA', 10285254, '2013-06-09', 'masculino', 'completa', 'sexto', 'activo'),
(116, ' CARLOS ALBERTO', 'VALENCIA CERON', 76313761, '2013-06-20', 'masculino', 'completa', 'sexto', 'activo'),
(117, 'JULIANA', 'VALLECILLA DE ORDONEZ', 34533437, '2013-07-25', 'femenino', 'completa', 'sexto', 'activo'),
(118, 'JOSE ADOLFO', 'VALLLEJO VARGAS', 10539878, '2013-08-21', 'masculino', 'completa', 'sexto', 'activo'),
(119, ' RUBIEL', 'VARGAS CANAS', 91497137, '2013-07-24', 'masculino', 'completa', 'sexto', 'activo'),
(120, 'JAIRO ALFONSO', 'VASQUEZ LOPEZ', 19585955, '2012-02-06', 'masculino', 'completa', 'septimo', 'activo'),
(121, ' SANDRA LORENA', 'VASQUEZ MOSCOPAN', 25279984, '2012-06-12', 'femenino', 'completa', 'septimo', 'activo'),
(122, 'JULIAN', 'VELASCO', 10531342, '2013-07-18', 'masculino', 'completa', 'septimo', 'activo'),
(123, 'JAIME ANDRES', 'VELASCO MUNOZ', 76312414, '2012-12-21', 'masculino', 'completa', 'septimo', 'activo'),
(124, 'GABRIEL', 'VELASCO SANDOVAL ', 76211401, '2012-10-24', 'masculino', 'completa', 'septimo', 'activo'),
(126, ' NESTOR', 'VELASCO VELASCO', 10544063, '2012-11-21', 'masculino', 'completa', 'septimo', 'activo'),
(127, 'EDGAR DE JESUS', 'VELASQUEZ RIVERA', 17633388, '2012-07-12', 'masculino', 'completa', 'septimo', 'activo'),
(128, ' HEBER ORLANDO', 'VERGARA VERGARA', 10528106, '2012-06-14', 'masculino', 'completa', 'septimo', 'activo'),
(129, 'TULIA DEICY', 'VIDAL LOPEZ', 34532362, '2012-11-14', 'femenino', 'completa', 'septimo', 'activo'),
(130, 'SANDRA MILENA', 'VILLOTA ENRIQUEZ', 59824341, '2012-06-14', 'femenino', 'completa', 'septimo', 'activo'),
(131, 'OSCAR ANDRES', 'VIVAS ALBAN', 10548134, '2012-10-19', 'masculino', 'completa', 'octavo', 'activo'),
(132, 'GUIOVANNI', 'VIVAS PAZ', 10541561, '2012-06-13', 'masculino', 'completa', 'octavo', 'activo'),
(133, 'RICARDO ANTONIO', 'VIVEROS BENAVIDES', 10531337, '2012-08-24', 'masculino', 'completa', 'octavo', 'activo'),
(134, 'JUAN JOSE', 'VOLVERAS PENCUE', 4687205, '2012-09-05', 'masculino', 'completa', 'octavo', 'activo'),
(135, 'FAUSTO', 'YMBACHI LOPEZ', 10536947, '2012-03-15', 'masculino', 'completa', 'octavo', 'activo'),
(136, 'LIX ADRIANA', 'ZAMBRANO MORALE', 34571582, '2012-06-12', 'femenino', 'completa', 'octavo', 'activo'),
(137, ' HILLDIER', 'ZAMORA GONZALEZ', 19077747, '2012-09-19', 'masculino', 'completa', 'octavo', 'activo'),
(138, 'JOSE OMAR', 'ZUÑIGA CARMONA', 16858001, '2012-02-08', 'masculino', 'completa', 'octavo', 'activo'),
(139, ' ANGELA EUIGENIA', 'ZUÑIGA PINO', 25274094, '2012-02-21', 'femenino', 'completa', 'octavo', 'activo'),
(140, 'ANGEL HERNAN', 'ZUNIGA SOLARTE', 10524679, '2012-09-18', 'masculino', 'completa', 'octavo', 'activo'),
(142, 'PAULO CESAR', 'COBO LOZADA', 91154963, '2012-11-21', 'masculino', 'completa', 'noveno', 'activo'),
(143, 'MARIA AMPARO', 'COMETA LOPEZ', 34545367, '2011-06-09', 'femenino', 'completa', 'noveno', 'activo'),
(144, 'LUIS JAIME', 'CONSTAIN SALAZAR', 10529443, '2011-06-21', 'masculino', 'completa', 'noveno', 'activo'),
(145, 'OLGA', 'CORDOBA DE GOMEZ', 31868353, '2011-06-14', 'femenino', 'completa', 'noveno', 'activo'),
(146, 'RAUL HERNANDO', 'CORTES LANDAZURY', 16776407, '2011-12-21', 'masculino', 'completa', 'noveno', 'activo'),
(147, 'GALO ALBERTO', 'COSME VARGAS', 10523223, '2011-07-21', 'masculino', 'completa', 'noveno', 'activo'),
(148, 'GUILLERMO ADOLF', 'CUELLAR MEJIA', 14996114, '2011-10-15', 'masculino', 'completa', 'noveno', 'activo'),
(149, 'GLORIA ESPERANZA', 'DAZA TIMANA', 34541388, '2011-11-22', 'femenino', 'completa', 'noveno', 'activo'),
(150, ' FERNANDO', 'DELGADO VELASCO', 10524963, '2011-04-22', 'masculino', 'completa', 'noveno', 'activo'),
(151, 'LUZ MARINA', ' DIAGO GARCIA', 34527753, '2011-03-17', 'femenino', 'completa', 'noveno', 'activo'),
(152, 'ALICE MARINA', 'DIAZ BETANCOURT', 34549144, '2010-10-13', 'femenino', 'completa', 'decimo', 'activo'),
(153, 'MILTON FABIAN', ' DIAZ MOSQUERA', 76321456, '2010-02-11', 'masculino', 'completa', 'decimo', 'activo'),
(154, ' MAURO ALBERTO', ' EGAS REALPE', 12991300, '2010-06-15', 'masculino', 'completa', 'decimo', 'activo'),
(155, ' AURA CECILIA', 'ERAZO DORADO', 34525834, '2010-07-09', 'femenino', 'completa', 'decimo', 'activo'),
(156, 'JOSE ESTEBAN', 'ERAZO RIVERA', 7516892, '2010-11-24', 'masculino', 'completa', 'decimo', 'activo'),
(157, 'LUIS JAIME', 'ESCOBAR', 10528498, '2010-07-20', 'masculino', 'completa', 'decimo', 'activo'),
(158, 'ANA MILENA', 'ESCOBAR COBO', 34541039, '2010-12-17', 'femenino', 'completa', 'decimo', 'activo'),
(159, 'STELLA', 'ESCOBAR SOLIS', 34532899, '2010-10-14', 'femenino', 'completa', 'decimo', 'activo'),
(160, ' MIRTHA GILMA', 'ESPINOSA URBANO', 27450864, '2010-07-09', 'femenino', 'completa', 'decimo', 'activo'),
(161, 'GLORIA ESPERANZA', 'ESTRADA MARTINEZ ', 34529138, '2010-10-22', 'femenino', 'completa', 'decimo', 'activo'),
(162, 'JAIME', ' FAJARDO OLIVEROS', 17633683, '2009-06-16', 'masculino', 'completa', 'once', 'activo'),
(167, 'WILSON GENTIL', 'LOPEZ MUNOZ', 76311937, '2009-06-15', 'masculino', 'completa', 'once', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `factura_id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `mes` varchar(32) NOT NULL,
  `pension` int(11) NOT NULL,
  `num_recibo_manual` int(11) NOT NULL,
  `pdf` varchar(32) NOT NULL DEFAULT '',
  `observaciones` varchar(100) NOT NULL,
  `estudiantes_id` int(11) DEFAULT NULL,
  `id_tipo_pago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id` int(11) NOT NULL,
  `detalles_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `photo` varchar(64) NOT NULL DEFAULT 'public/images/trainer.png',
  `password` varchar(64) NOT NULL DEFAULT '827ccb0eea8a706c4c34a16891f84e7b',
  `role` varchar(16) NOT NULL DEFAULT 'Trainer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `photo`, `password`, `role`) VALUES
(1, 'Walter Castrillon', 'admin@admin.com', 'public/images/1666975202.', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(7, 'Fernando Gaviria', 'fernando.g@gmail.com', 'public/images/1667574388.', '827ccb0eea8a706c4c34a16891f84e7b', 'Rector');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acudiente`
--
ALTER TABLE `acudiente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_documento` (`num_documento`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pago_id` (`pago_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_documento` (`num_documento`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`factura_id`),
  ADD KEY `estudiantes_id` (`estudiantes_id`),
  ADD KEY `id_tipo_pago` (`id_tipo_pago`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalles_id` (`detalles_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acudiente`
--
ALTER TABLE `acudiente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `factura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acudiente`
--
ALTER TABLE `acudiente`
  ADD CONSTRAINT `acudiente_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`);

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`pago_id`) REFERENCES `pagos` (`factura_id`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`estudiantes_id`) REFERENCES `estudiantes` (`id`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipo_pago` (`id`);

--
-- Filtros para la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD CONSTRAINT `tipo_pago_ibfk_1` FOREIGN KEY (`detalles_id`) REFERENCES `pagos` (`factura_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
