-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2022 a las 22:41:42
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
-- Base de datos: `sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `comentarios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `descripcion`, `comentarios`) VALUES
(1, 'Iniciado', NULL),
(2, 'Pendiente', NULL),
(3, 'En Curso', NULL),
(4, 'Terminado', NULL),
(5, 'En Revicion', NULL),
(6, 'Aceptado', NULL),
(7, 'Rechazado', NULL),
(8, 'Cerrado', NULL),
(10, 'xzfgsdh', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `imagen`) VALUES
(1, 'Tranporte', '1656696295_foto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `webpeti`
--

CREATE TABLE `webpeti` (
  `id` int(11) NOT NULL,
  `Nombre_Projects` varchar(500) NOT NULL,
  `Objetivo` varchar(500) NOT NULL,
  `Proceso` varchar(500) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Fecha_Limite` datetime NOT NULL,
  `Estado` varchar(500) NOT NULL,
  `Archivo` varchar(1000) NOT NULL,
  `Imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `webpeti`
--

INSERT INTO `webpeti` (`id`, `Nombre_Projects`, `Objetivo`, `Proceso`, `Fecha_Creacion`, `Fecha_Limite`, `Estado`, `Archivo`, `Imagen`) VALUES
(170, 'Tranporte y Duracion', 'aujiñyoip', 'Tecnologicot', '2022-07-14 10:10:00', '2022-07-14 10:10:00', '6', '', ''),
(171, 'Servicios y Ventas', 'stdrjkljhlyjhf', 'Tecnologico', '2022-07-14 10:12:00', '2022-07-14 10:12:00', '3', '', ''),
(172, 'desierto', 'wsdfgasdfasdf', 'aafasdfasdf', '2022-07-14 10:15:00', '2022-07-14 10:15:00', '5', 'Confirmación_Inscripcion_EK202240017541.pdf', 'foto.jpg'),
(173, 'checklist', 'dasdfasdfasdfa', 'Cerrado', '2022-07-14 10:19:00', '2022-07-14 10:19:00', '5', '', ''),
(174, 'Tranporte Masivo', 'sdfgh', 'Abierto', '2022-07-14 11:22:00', '2022-07-14 11:22:00', '5', '', ''),
(175, 'wsdfvb sdf', 'dcvlc ñ', 'dfffffffffff', '2022-07-14 11:24:00', '2022-07-14 11:24:00', '3', '', ''),
(176, 'xdgsf', 'dfsyuj', 'guh6yu', '2022-07-14 11:25:00', '2022-07-14 11:25:00', '4', '', ''),
(177, 'otro', 'ethy', 'uyiuouipo', '2022-07-14 11:26:00', '2022-07-14 11:26:00', '3', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `webpeti`
--
ALTER TABLE `webpeti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `webpeti`
--
ALTER TABLE `webpeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
