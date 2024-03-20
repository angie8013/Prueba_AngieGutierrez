-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 17:31:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_h` int(11) NOT NULL,
  `id_pac` int(11) NOT NULL,
  `id_med` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `enf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_h`, `id_pac`, `id_med`, `fecha`, `enf`) VALUES
(1, 1007428013, 1009000123, '2024-03-20 09:43:00', 'DOLOR DE CABEZA'),
(2, 1007428982, 1009000123, '2024-03-20 10:46:00', 'HUESO ROTO'),
(3, 1001234567, 1993834814, '2024-03-20 10:50:00', 'DOLOR INTENSO REPENTINO'),
(16, 3333333, 1009000123, '2024-03-20 11:10:00', 'HUESOS ROTOS'),
(17, 83383838, 1009000123, '2024-03-20 11:14:00', 'LESIÓN GRAVE ACCIDENTE'),
(18, 858558585, 1009000123, '2024-03-20 11:15:00', 'FIEBRE ALTA PERSISTENTE'),
(19, 3938847, 1993834814, '2024-03-20 11:16:00', 'PARÁLISIS SÚBITA INEXPLICABLE'),
(20, 9847436, 1009000123, '2024-03-20 11:16:00', 'HEMORRAGIA INCONTROLABLE URGENTE'),
(21, 94848746, 1993834814, '2024-03-20 11:17:00', 'INTOXICACIÓN ALIMENTARIA SEVERA'),
(22, 94847376, 1009000123, '2024-03-20 11:17:00', 'CONVULSIONES SIN CONTROL'),
(23, 74658585, 1993834814, '2024-03-20 11:18:00', 'DIFICULTAD RESPIRATORIA GRAVE'),
(24, 874744747, 1009000123, '2024-03-20 11:18:00', 'PÉRDIDA REPENTINA VISIÓN'),
(25, 83746588, 1009000123, '2024-03-20 11:18:00', 'FIEBRE ALTA PERSISTENTE'),
(26, 9766863, 1009000123, '2024-03-20 11:19:00', 'FIEBRE ALTA PERSISTENTE'),
(27, 73533424, 1009000123, '2024-03-20 11:19:00', 'DOLOR TORÁCICO AGUDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_med` int(11) NOT NULL,
  `nom_m` varchar(40) NOT NULL,
  `apel_m` varchar(40) NOT NULL,
  `tel_m` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_med`, `nom_m`, `apel_m`, `tel_m`) VALUES
(1009000123, 'alvaro', 'garcia', '378847564'),
(1993834814, 'esteban', 'quito', '3184758375');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `apel` varchar(40) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `edad` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nom`, `apel`, `tel`, `edad`) VALUES
(3333333, 'Juan ', 'López', '3290023912', '33'),
(3938847, 'Paula', 'Gómez', '47474464', '22'),
(9766863, 'Diego', 'Pérez', '373774848', '11'),
(9847436, 'Javier', 'Ramírez', '844747336', '33'),
(73533424, 'Marta', 'Gómez', '848575757', '56'),
(74658585, 'Paula', 'Moreno', '57737374', '57'),
(83383838, 'María ', 'García', '9229828392', '49'),
(83746588, 'Marta ', 'Díaz', '82764447', '44'),
(94847376, 'Alejandro', 'Ruiz', '7674747', '12'),
(94848746, 'Natalia', 'Torres', '7443636', '56'),
(858558585, 'Diego', 'Moreno', '746464646', '33'),
(874744747, 'Alejandro', 'Ruiz', '33737774', '37'),
(1007428013, 'angie', 'gutierrez', '3187738647', '23'),
(1007428982, 'fredy', 'gonzales', '328746576', '56'),
(2147483647, 'lorena', 'daza', '3209684738', '12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_h`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_med`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
