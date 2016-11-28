-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2016 a las 15:02:36
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica`
--
CREATE DATABASE IF NOT EXISTS `practica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `practica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4a`
--

CREATE TABLE `4a` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `4a`
--

INSERT INTO `4a` (`id`, `nombre`, `password`, `rol`) VALUES
(1, 'Emmanuel', 'qwertyui', 'admin'),
(2, 'Enano', 'qazwsx', 'usuario'),
(19, 'cvv', 'cccx', 'fbx'),
(18, 'julian', 'musedert', 'admin'),
(17, 'Enano', 'dfvdfergv', 'administrador'),
(16, 'Enano', 'qazwsx', 'administrador'),
(15, 'Enano', 'qazwsx', 'admin'),
(20, 'emmanuel', 'lopez', 'adm'),
(21, 'lola', 'tas', 'administrador'),
(22, 'Emo', 'qwe', 'Hola'),
(23, 'Juan', 'Qwe', 'As'),
(24, 'lola', 'taa', 'tupu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `4a`
--
ALTER TABLE `4a`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `4a`
--
ALTER TABLE `4a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;--
-- Base de datos: `proyecto`
--
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conversacion`
--

CREATE TABLE `conversacion` (
  `id` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conversacion`
--

INSERT INTO `conversacion` (`id`, `nombre`, `mensaje`) VALUES
(75, 'v:', 'u\n'),
(76, 'daniel1', 'eit\n'),
(77, 'emmanuel:v', 'hola'),
(78, 'Dad', 'Eit'),
(79, 'octavio', 'Hola!\n'),
(80, 'Dad', 'Profe'),
(81, 'emmanuel:v', ':)\n'),
(82, 'daniel1', '0oi\n'),
(83, 'emmanuel:v', 'k'),
(84, 'emmanuel:v', 'k'),
(85, 'emmanuel:v', 'j'),
(86, 'emmanuel:v', 'j'),
(87, 'emmanuel:v', 'k'),
(88, 'Dad', 'J'),
(89, 'octavio', 'sjd'),
(90, 'octavio', 'ghghgf'),
(91, 'Dad', 'Hdhs'),
(92, 'Dad', 'Hdhshh'),
(93, 'emmanuel:v', 'hola'),
(94, 'octavio', 'ihho+\n'),
(95, 'octavio', 'ihho+\n'),
(96, 'octavio', 'ihho+\n'),
(97, 'octavio', 'ihho+\n'),
(98, 'octavio', 'ihho+\n'),
(99, 'octavio', 'ihho+\n'),
(100, 'octavio', 'ihho+\n'),
(101, 'octavio', 'ihho+\n'),
(102, 'octavio', ''),
(103, 'octavio', ''),
(104, 'octavio', 'oioioi'),
(105, 'lola', 'que onda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `email`) VALUES
(22, 'carlos', '12345', 'ivan_carlos_16_16@hotmail.com'),
(23, 'ivan', '12345', 'carlos_ivan_loera@hotmail.com'),
(24, 'ivan2', '123', 'ivan_carlos_16_16@hotmail.com'),
(25, '', '', ''),
(26, 'carlos3', '123', 'ivan_carlos_16_16@hotmail.com'),
(27, 'Emmanuel', 'moc', 'hola@gmail.com'),
(28, 'hola', '123', '12345'),
(29, 'Javier ', 'lolazo', 'lolazo13067@hotmail.com'),
(30, 'lola', '123', 'hola'),
(31, 'carlos4', '123', 'ivan_carlos_16_16@hotmail.com'),
(32, 'Javier1', 'lolazo', 'lolazo13067@hotmail.com'),
(33, 'carlos5', '123', 'ivan_carlos_16_16@hotmail.com'),
(34, 'chuchin', '123', 'adios'),
(35, 'we', '1', 'fpollo_17@hotmail,com'),
(36, 'Elbean', '12345', 'JOSEEDUARDO12008@HOTMAIL.COM'),
(37, ':v', '123', 'a@d.com'),
(38, 'daniel', 'dallas', 'daniel.@gmail.com'),
(39, 'dxjhisd', 'qwe', 'i@fhf'),
(40, 'Pedosamsrgos', 'qwe', 'isadorafavela@hotmail.com'),
(41, 'Hola:v', 'qwe', 'stunt.glez@gmail.com'),
(42, 'V:', '123', 'wey'),
(43, 'daniel1', 'dallas', 'daniel@gmail.com'),
(44, 'emmanuel:v', '12345678', 'as@as.com'),
(45, 'Dad', 'dallas', 'dad@gmail.com'),
(46, 'octavio', 'octavio', 'octavio@hotmail.com'),
(47, 'lolaso', 'taa', 'xcvdv'),
(48, 'tupu', 'hola', 'qwer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conversacion`
--
ALTER TABLE `conversacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conversacion`
--
ALTER TABLE `conversacion`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
