-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 19:46:11
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admcontactos`
--

CREATE TABLE `admcontactos` (
  `contac_id` int(11) NOT NULL,
  `contac_nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `contac_apellido` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `contac_puesto_trabajo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contact_pais_procedencia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contact_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admcontactos`
--

INSERT INTO `admcontactos` (`contac_id`, `contac_nombre`, `contac_apellido`, `contac_puesto_trabajo`, `contact_pais_procedencia`, `contact_estado`) VALUES
(1, 'Jonathan Edenilson ', 'Bolaños Bolaños', 'Gerente', 'El Salvador', 1),
(6, 'Juan Jose', 'Valladares Portillo', 'Programador', 'México', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admcontactos`
--
ALTER TABLE `admcontactos`
  ADD PRIMARY KEY (`contac_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admcontactos`
--
ALTER TABLE `admcontactos`
  MODIFY `contac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
