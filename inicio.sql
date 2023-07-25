-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2023 a las 01:38:25
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id` int(11) NOT NULL,
  `fincidencia` text NOT NULL,
  `hincidencia` text NOT NULL,
  `fsolucion` text NOT NULL,
  `hsolucion` text NOT NULL,
  `duracion` text NOT NULL,
  `afectacion` text NOT NULL,
  `ambiente` text NOT NULL,
  `servicio` text NOT NULL,
  `elementoafectado` text NOT NULL,
  `tipoafectacion` text NOT NULL,
  `descripcion` text NOT NULL,
  `estatusalerta` text NOT NULL,
  `ticket` text NOT NULL,
  `usuario` text NOT NULL,
  `reporte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `fincidencia`, `hincidencia`, `fsolucion`, `hsolucion`, `duracion`, `afectacion`, `ambiente`, `servicio`, `elementoafectado`, `tipoafectacion`, `descripcion`, `estatusalerta`, `ticket`, `usuario`, `reporte`) VALUES
(7, '2023-07-06', 'dfg', '2023-07-13', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `apellido`, `correo`) VALUES
(3, 'manuel', '123456', 'manuel', 'perez', 'manuelperez.0000@gmail.com'),
(4, 'admin', 'admin', 'manuel', 'perez', 'manuelperez.0000@gmail.com'),
(5, 'admin', '123456', 'manuel', 'perez', 'manuelperez.0000@gmail.com'),
(6, '', '', '', '', ''),
(7, 'manuel', '123456', 'manuel', 'perez', 'manuelperez.0000@gmail.com'),
(8, 'fgh', 'fgh', 'fgh', 'fgh', 'fgh@gail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
