-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2021 a las 01:01:17
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jgandica_recbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_fact` int(11) NOT NULL,
  `id_emp` int(10) NOT NULL,
  `id_modopago` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `total_pagar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_fact`, `id_emp`, `id_modopago`, `id_cliente`, `fecha_pago`, `total_pagar`) VALUES
(1, 9, 1, 8, '0000-00-00 00:00:00', 0),
(2, 9, 1, 8, '0000-00-00 00:00:00', 100),
(3, 9, 2, 13, '0000-00-00 00:00:00', 100),
(4, 9, 2, 13, '0000-00-00 00:00:00', 100),
(5, 9, 2, 13, '0000-00-00 00:00:00', 100),
(7, 9, 1, 13, '0000-00-00 00:00:00', 100),
(8, 9, 1, 13, '0000-00-00 00:00:00', 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_fact`),
  ADD KEY `fk_factura_modopago1_idx` (`id_modopago`),
  ADD KEY `fk_factura_empleado1_idx` (`id_emp`),
  ADD KEY `fk_factura_cilente1_idx` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_fact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_factura_cilente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_factura_empleado1` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_factura_modopago1` FOREIGN KEY (`id_modopago`) REFERENCES `modopago` (`id_modopago`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
