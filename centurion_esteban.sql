-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2024 a las 23:50:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centurion_esteban`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 0,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `password`, `id_perfil`, `estado`, `fecha_modificacion`) VALUES
(5, 'Esteban Agustin', 'Centurion', 'esteban.cent@gmail.com', '$2y$10$iZGfCODuQZOI325UQUIh7Ofbq8PIgafpUTaD0gNU7/V2XlyjGvUma', 1, 1, '2024-08-12'),
(6, 'Francisco Julian', 'Cerullo', 'fran_ceru@gmail.com', '$2y$10$53MH1FYtw5sz7F2dARNk3euc.28ttdoPsT93/G7Wazf3IgCNzqv02', 2, 1, '2024-08-12'),
(7, 'Liz Daiana', 'Cent', 'liz_daiana@yahoo.com', '$2y$10$/C97q37i8X0UosyORYN.L.Um0Q2G0un22dHWeLo9bXhANLBOFbN3u', 2, 1, '2024-07-21'),
(8, 'Daniel Adolfo', 'Dominguez', 'dani_puma@gmail.com', '$2y$10$JJoXO6.RsaGQVd0Gom3L9uStdRjWj2u/UtBvUMyyIcCt0VOFmfbOO', 2, 1, '2024-07-21'),
(9, 'Agustin', 'Cent', 'talentos_2024@gmail.com', '$2y$10$NpDJp6g68JQXgQOoG.VPieyHUD6riMRjJqZpGVSdnK/Bdn1.7XVWm', 1, 1, NULL),
(10, 'Gonzalo', 'Fernandez', 'gonza98@gmail.com', '$2y$10$akWTLJbaZZpQRYt1tEaTQuz.Zv0n08W7A1Ytpe0GsMbSu3PAQv6fC', 2, 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
