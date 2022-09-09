-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2022 a las 16:08:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

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
-- Estructura de tabla para la tabla `brechast_i`
--

CREATE TABLE `brechast_i` (
  `idbrechasTI` int(11) NOT NULL,
  `nombre_rupturas` varchar(200) NOT NULL,
  `ruptura` varchar(200) NOT NULL,
  `estrategia1` varchar(200) NOT NULL,
  `estrategia2` varchar(200) NOT NULL,
  `estrategia3` varchar(200) NOT NULL,
  `estrategia4` varchar(200) NOT NULL,
  `estrategia5` varchar(200) NOT NULL,
  `comentarios` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `ideal_situation`
--

CREATE TABLE `ideal_situation` (
  `id_Ideal_situation` int(11) NOT NULL,
  `indicator` varchar(200) NOT NULL,
  `value_target` varchar(200) NOT NULL,
  `value_initial` varchar(200) NOT NULL,
  `initial_value_date` varchar(200) NOT NULL,
  `target_value_date` varchar(200) NOT NULL,
  `descript` varchar(500) NOT NULL,
  `observation` varchar(500) NOT NULL,
  `comentarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mission_vision`
--

CREATE TABLE `mission_vision` (
  `idMission_vision` int(11) NOT NULL,
  `nombren_Mission_vision` varchar(200) NOT NULL,
  `description_Mission_vision` varchar(500) NOT NULL,
  `comentarios` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objectives`
--

CREATE TABLE `objectives` (
  `idobjectives` int(11) NOT NULL,
  `nombre_objectives` varchar(200) NOT NULL,
  `description_objectives` varchar(200) NOT NULL,
  `description_objectives2` varchar(200) NOT NULL,
  `description_objectives3` varchar(200) NOT NULL,
  `description_objectives4` varchar(200) NOT NULL,
  `description_objectives5` varchar(200) NOT NULL,
  `description_objectives6` varchar(200) NOT NULL,
  `description_objectives7` varchar(200) NOT NULL,
  `description_objectives8` varchar(200) NOT NULL,
  `description_objectives9` varchar(200) NOT NULL,
  `description_objectives10` varchar(200) NOT NULL,
  `comentarios` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `idestado` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `comentarios` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regulatory_framework`
--

CREATE TABLE `regulatory_framework` (
  `idframework` int(11) NOT NULL,
  `norma_ley` varchar(200) NOT NULL,
  `resumen` varchar(500) NOT NULL,
  `link` varchar(200) NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `comentarios` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `strategic_context`
--

CREATE TABLE `strategic_context` (
  `idstrategic_context` int(11) NOT NULL,
  `nombre_context` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `No1` varchar(200) NOT NULL,
  `No2` varchar(200) NOT NULL,
  `No3` varchar(200) NOT NULL,
  `No4` varchar(200) NOT NULL,
  `No5` varchar(200) NOT NULL,
  `No6` varchar(200) NOT NULL,
  `No7` varchar(200) NOT NULL,
  `No8` varchar(200) NOT NULL,
  `No9` varchar(200) NOT NULL,
  `No10` varchar(200) NOT NULL,
  `No11` varchar(200) NOT NULL,
  `No12` varchar(200) NOT NULL,
  `No13` varchar(200) NOT NULL,
  `No14` varchar(200) NOT NULL,
  `No15` varchar(200) NOT NULL,
  `comentarios` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indices de la tabla `brechast_i`
--
ALTER TABLE `brechast_i`
  ADD PRIMARY KEY (`idbrechasTI`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `ideal_situation`
--
ALTER TABLE `ideal_situation`
  ADD PRIMARY KEY (`id_Ideal_situation`);

--
-- Indices de la tabla `mission_vision`
--
ALTER TABLE `mission_vision`
  ADD PRIMARY KEY (`idMission_vision`);

--
-- Indices de la tabla `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`idobjectives`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `regulatory_framework`
--
ALTER TABLE `regulatory_framework`
  ADD PRIMARY KEY (`idframework`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `strategic_context`
--
ALTER TABLE `strategic_context`
  ADD PRIMARY KEY (`idstrategic_context`);

--
-- Indices de la tabla `webpeti`
--
ALTER TABLE `webpeti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brechast_i`
--
ALTER TABLE `brechast_i`
  MODIFY `idbrechasTI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ideal_situation`
--
ALTER TABLE `ideal_situation`
  MODIFY `id_Ideal_situation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mission_vision`
--
ALTER TABLE `mission_vision`
  MODIFY `idMission_vision` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objectives`
--
ALTER TABLE `objectives`
  MODIFY `idobjectives` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `regulatory_framework`
--
ALTER TABLE `regulatory_framework`
  MODIFY `idframework` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `strategic_context`
--
ALTER TABLE `strategic_context`
  MODIFY `idstrategic_context` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `webpeti`
--
ALTER TABLE `webpeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
