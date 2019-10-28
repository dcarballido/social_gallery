-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 28-10-2019 a las 11:26:30
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `social_gallery_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_gallery`
--

CREATE TABLE `t_gallery` (
  `photo_id` int(11) NOT NULL,
  `id_usuario_photo` int(11) DEFAULT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `photo_date` date NOT NULL,
  `photo_size` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `photo_type` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_gallery`
--

INSERT INTO `t_gallery` (`photo_id`, `id_usuario_photo`, `photo_name`, `photo_path`, `photo_date`, `photo_size`, `photo_type`) VALUES
(17, 2, ' melon  ', ' uploads/kisspng-juice-honeydew-melon-cantaloupe-flavor-melon-5ab4a1db01bdb5.1837707015217873550071.png ', '2019-10-07', '1061974', 'image/png'),
(18, 2, ' sandia  ', ' uploads/sandia-en-trozos.jpg ', '2019-10-07', '42454', 'image/jpeg'),
(19, 1, ' piña  ', ' uploads/Unknown-1.jpeg ', '2019-10-07', '7369', 'image/jpeg'),
(20, 2, ' aguacate  ', ' uploads/Unknown-2.jpeg ', '2019-10-07', '5015', 'image/jpeg'),
(21, 1, ' mango  ', ' uploads/Unknown.jpeg ', '2019-10-07', '5696', 'image/jpeg'),
(22, 1, ' prueba  ', ' uploads/Captura de pantalla 2019-09-30 a las 8.36.30.png ', '2019-10-28', '193635', 'image/png'),
(23, 2, ' limaa  ', ' uploads/Lima.jpg ', '2019-10-28', '153299', 'image/jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `name_usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password_usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `name_usuario`, `password_usuario`) VALUES
(1, 'diego', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'danny', 'd93591bdf7860e1e4ee2fca799911215');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_gallery`
--
ALTER TABLE `t_gallery`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `fk_id_usuario_photo` (`id_usuario_photo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_gallery`
--
ALTER TABLE `t_gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_gallery`
--
ALTER TABLE `t_gallery`
  ADD CONSTRAINT `fk_id_usuario_photo` FOREIGN KEY (`id_usuario_photo`) REFERENCES `usuarios` (`id_usuario`);
