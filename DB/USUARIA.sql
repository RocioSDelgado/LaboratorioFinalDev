-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2023 a las 20:06:22
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
-- Base de datos: `CursoSQL`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIA`
--

CREATE TABLE `USUARIA` (
  `ID` int(110) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `apellido2` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `USUARIA`
--

INSERT INTO `USUARIA` (`ID`, `nombre`, `apellido`, `apellido2`, `email`, `login`, `password`) VALUES
(1, 'Rocio', 'Delgado', 'Crespo', 'rociodel@gmail.com', 'Spellman5b', '123545l'),
(2, 'Adrian', 'Cazalla', 'Torres', 'adritorres@gmail.com', 'adri1994', 'adri13'),
(3, 'Laura', 'Jauregui', 'Cabello', 'Laura23@gmail.com', 'Laura1989', 'Laura23C'),
(4, 'Carmen', 'Martinez', 'Vara', 'Carmen33@gmail.com', 'CarmenMartinez', 'Carmen33M'),
(5, 'Felix', 'Moreno', 'Hermosilla', 'Felix13@gmail.com', 'Felix13', 'Felix31'),
(6, 'Jennifer', 'Huh', 'Cruz', 'JenniferHuh@gmail.com', 'JenHuh', 'Jennifer'),
(7, 'Sakura', 'Garcia', 'Perez', 'Sakura98@gmail.com', 'SakuraGape', 'Kura1998'),
(8, 'Marina', 'Exposito', 'Fuentes', 'MarinaFuentes@gmail.com', 'Marina2001', 'Marina14'),
(9, 'Maria', 'Manoban', 'Lopez', 'MJManoban@gmail.com', 'MJManoban', 'MJ1995'),
(10, 'Harry', 'Potter', 'Perez', 'Harrypotter@gmail.com', 'HarryPotter34', 'harrypps');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `USUARIA`
--
ALTER TABLE `USUARIA`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `USUARIA`
--
ALTER TABLE `USUARIA`
  MODIFY `ID` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
