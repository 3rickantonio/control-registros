-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2017 a las 15:36:29
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conquistando`
--
CREATE DATABASE IF NOT EXISTS `conquistando` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `conquistando`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conquistado`
--

CREATE TABLE `conquistado` (
  `id` int(11) NOT NULL,
  `nombres` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `apodo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` int(8) NOT NULL,
  `telf_movil` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `telf_local` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `red_social` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `ocupacion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` enum('Normal','Nuevo Creyente') COLLATE utf8_spanish2_ci NOT NULL,
  `vivecon` int(11) NOT NULL,
  `asiste_a_iglesia` enum('NO','SI') COLLATE utf8_spanish2_ci NOT NULL,
  `idname` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='ESTA TABLA SON LOS CMAPOS DE LAS PERSONAS ENTREVISTADAS/CONQUISTADAS';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conquistador`
--

CREATE TABLE `conquistador` (
  `id` int(4) NOT NULL,
  `nombres` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '@gmail.com',
  `telefono` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `direccion` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `idname` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `iduser` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `valido` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `name`, `password`, `email`, `valido`) VALUES
(1, 'Erick Suarez', '766eb82f3e42066615f2719f256e0b1dca6ee88c', 'ericksuarez', 1),
(2, 'Carmen Arias', '7fea8eda846cfd24ba628d256da799db09e05718', 'carmenlambra@hotmail.com', 1),
(3, 'Mirian Rodriguez', 'a8543cb6b5696f9b2fecb228f54635741f2ba929', 'tropicmirian@hotmail.com', 1),
(4, 'Diana Rodriguez', '0023c6b9927350e3609f008ec78815329cfdf288', 'dianacarolina', 1),
(5, 'Teresa', '2bbd6defafc3f4582de3afddca514697c5f50faf', 'teresa', 1),
(6, 'felipe', '8a3077c375061de36088914960bfce21f2d11356', 'felcas999@gmail.com', 0),
(7, 'Luis Gimenez', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'superluizao10@gmail.com', 0),
(8, 'Reynaldo ', '0c0855948d659782311230cedefb9aab90a1c7d7', 'rpuentecontreras@gmail.com', 0),
(9, 'Reynaldo', '0c0855948d659782311230cedefb9aab90a1c7d7', 'rpuentecontreras@gmail.com', 0),
(10, 'Reynaldo', '0c0855948d659782311230cedefb9aab90a1c7d7', 'rpuentecontreras@gmail.com', 0),
(11, 'Reynaldo', '0c0855948d659782311230cedefb9aab90a1c7d7', 'rpuentecontreras@gmail.com', 0),
(12, 'Reynaldo', '0c0855948d659782311230cedefb9aab90a1c7d7', 'rpuentecontreras@gmail.com', 0),
(13, 'Reynaldo puente', '0c0855948d659782311230cedefb9aab90a1c7d7', 'rpuentecontreras@gmail.com', 0),
(14, 'reynaldo', '0c0855948d659782311230cedefb9aab90a1c7d7', 'rpuentecontreras@gmail.com', 0),
(15, 'Johnny Leon', '881066f0f661603f75983ad00ac25eaa092d4a15', 'johnnyleong12@hotmail.com', 0),
(16, 'Johnny Leon', '14a95afa67581c4a36597f1958574909a0bb79be', 'johnnyleong12@hotmail.com', 0),
(17, 'Ana Cristina Duran', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'anacrisdur@hotmail.com', 0),
(18, 'GREGORIOCORDONES', '0a52eace399d059d696a9d67cebd7e1764d172f7', 'MIRIANERA2016@HOTMAIL.COM', 0),
(19, 'flor arelis', 'e8d96f8e3ca6ed70da34c4f17c8a455068244e43', 'farelis23@gmail.com', 0),
(20, 'gregorio', 'f56fe68c0a0ae4ee32e66f54df90db08ad4334eb', 'misionera2016@gmail.com', 0),
(21, 'gregorio cordones', 'f56fe68c0a0ae4ee32e66f54df90db08ad4334eb', 'misionera2016@gmail.com', 0),
(22, 'zuley', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'zulemend@gmail.com', 0),
(23, 'zuley mendoza', 'db8c66a90e2f0b9b4a5f1a4e99a6bedb3f43d5c3', 'zulemend@gmail.com', 0),
(24, 'zuley', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'zulemend@gmail.com', 0),
(25, 'Diana Mora', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'dianayexelin@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conquistado`
--
ALTER TABLE `conquistado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `conquistador`
--
ALTER TABLE `conquistador`
  ADD PRIMARY KEY (`correo`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conquistado`
--
ALTER TABLE `conquistado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `conquistador`
--
ALTER TABLE `conquistador`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
