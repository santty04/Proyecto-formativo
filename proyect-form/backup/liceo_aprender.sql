-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 05:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liceo_aprender`
--

-- --------------------------------------------------------

--
-- Table structure for table `acudiente`
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
-- Dumping data for table `acudiente`
--

INSERT INTO `acudiente` (`id`, `nombre`, `apellidos`, `num_documento`, `direccion`, `telefono`, `id_estudiante`) VALUES
(1, 'Bryan', 'Castrillones', 465, '1236587', 645689, 1),
(2, 'kjds', 'odi', NULL, '456', 46, 2),
(3, 'Pepe', 'Perez', NULL, 'Calle', 2147483647, 3);

-- --------------------------------------------------------

--
-- Table structure for table `detalles`
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

--
-- Dumping data for table `detalles`
--

INSERT INTO `detalles` (`id`, `pago_id`, `valor`, `mes`, `desayuno`, `media_manana`, `media_tarde`, `almuerzo`, `transporte`, `derecho_grado`, `matricula`) VALUES
(1, 3, NULL, NULL, 100, 100, 100, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
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
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellidos`, `num_documento`, `fecha_nacimiento`, `genero`, `jornada`, `grado`, `estado`) VALUES
(1, 'Franciso', 'Castrillon', 465, '2022-11-02', 'masculino', 'tarde', 'once', 'activo'),
(2, 'Brajan', 'sanches', NULL, '2022-11-28', 'masculino', 'completa', 'tercero', 'activo'),
(3, 'Cristian', 'Perez', NULL, '2005-11-22', 'masculino', 'mañana', 'once', 'inactivo');

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
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

--
-- Dumping data for table `pagos`
--

INSERT INTO `pagos` (`factura_id`, `fecha`, `mes`, `pension`, `num_recibo_manual`, `pdf`, `observaciones`, `estudiantes_id`, `id_tipo_pago`) VALUES
(1, '2022-11-27', 'enero', 100, 1, '', '', 2, NULL),
(2, '2022-11-28', 'enero', 100, 2, '', '', 2, NULL),
(3, '2022-11-29', 'enero', 100, 2, '', '', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id` int(11) NOT NULL,
  `detalles_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `photo`, `password`, `role`) VALUES
(1, 'Walter Castrillon', 'admin@admin.com', 'public/images/1666975202.', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(7, 'Fernando Gaviria', 'fernando.g@gmail.com', 'public/images/1667574388.', '827ccb0eea8a706c4c34a16891f84e7b', 'Rector');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acudiente`
--
ALTER TABLE `acudiente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_documento` (`num_documento`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indexes for table `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pago_id` (`pago_id`);

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_documento` (`num_documento`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`factura_id`),
  ADD KEY `estudiantes_id` (`estudiantes_id`),
  ADD KEY `id_tipo_pago` (`id_tipo_pago`);

--
-- Indexes for table `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalles_id` (`detalles_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acudiente`
--
ALTER TABLE `acudiente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pagos`
--
ALTER TABLE `pagos`
  MODIFY `factura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acudiente`
--
ALTER TABLE `acudiente`
  ADD CONSTRAINT `acudiente_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`);

--
-- Constraints for table `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`pago_id`) REFERENCES `pagos` (`factura_id`);

--
-- Constraints for table `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`estudiantes_id`) REFERENCES `estudiantes` (`id`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipo_pago` (`id`);

--
-- Constraints for table `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD CONSTRAINT `tipo_pago_ibfk_1` FOREIGN KEY (`detalles_id`) REFERENCES `pagos` (`factura_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
