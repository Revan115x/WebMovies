-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2025 a las 13:14:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(21, 'Iris arriaga', 'iris@gmail.com', 'Tais', 'tais'),
(22, 'Genesis', 'Genesis@gmail.com', 'gene', 'gene'),
(23, 'Antonio Juan', 'juancho@gmail.com', 'Juancho', 'juancho'),
(24, 'carlos', 'carlos@gmail.com', 'carlos', 'carlos'),
(25, 'SADASD', 'FELIPE@GMAIL.COM', 'carlos', 'FDSFDSF'),
(26, 'SADASD', 'FELIPFE@GMAIL.COM', 'carlos', 'FDSFDSF'),
(27, 'sdas', 'sddsd@gmail.com', 'sda', 'sadas'),
(30, 'kjsakdsj', 'kjasjd@gmail.com', 'djkalsjd', 'kjdsalksjd'),
(31, 'asd', 'asdasd@gmail.com', 'sdf', 'sdf'),
(32, 'carrlistos', 'carlitos@gamil.com', 'carlosss', 'carlos'),
(33, 'Kevin', 'Kevin@gmail.com', 'kevin', 'gtasa2025'),
(34, 'kevin', 'kevins@gmail.com', 'kevins', 'Gtasa2025g');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
