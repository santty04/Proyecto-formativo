-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 21:05:45
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
(33, 'JOSE TORIBIO', 'BELTRAN VIDAL', 10533149, 'CARRERA27#32-4', 2147483647, 32);

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
(32, 'GLORIA MERCEDES', 'BELALCAZAR FERNANDEZ', 25277918, '2021-03-21', 'femenino', 'completa', 'parvulos', 'activo');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
