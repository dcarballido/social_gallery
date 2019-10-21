-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 07-10-2019 a las 14:45:07
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
  `photo_name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `photo_date` date NOT NULL,
  `photo_size` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `photo_type` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `t_gallery`
--

INSERT INTO `t_gallery` (`photo_id`, `photo_name`, `photo_path`, `photo_date`, `photo_size`, `photo_type`) VALUES
(17, ' melon  ', ' uploads/kisspng-juice-honeydew-melon-cantaloupe-flavor-melon-5ab4a1db01bdb5.1837707015217873550071.png ', '2019-10-07', '1061974', 'image/png'),
(18, ' sandia  ', ' uploads/sandia-en-trozos.jpg ', '2019-10-07', '42454', 'image/jpeg'),
(19, ' piña  ', ' uploads/Unknown-1.jpeg ', '2019-10-07', '7369', 'image/jpeg'),
(20, ' aguacate  ', ' uploads/Unknown-2.jpeg ', '2019-10-07', '5015', 'image/jpeg'),
(21, ' mango  ', ' uploads/Unknown.jpeg ', '2019-10-07', '5696', 'image/jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_gallery`
--
ALTER TABLE `t_gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_gallery`
--
ALTER TABLE `t_gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
