-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2017 a las 21:36:37
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` varchar(30) NOT NULL,
  `facebook_id` varchar(20) NOT NULL,
  `facebook_name` varchar(80) NOT NULL,
  `restaurant_id` varchar(20) NOT NULL,
  `facebook_email` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `quality` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `facebook_id`, `facebook_name`, `restaurant_id`, `facebook_email`, `description`, `quality`, `date`) VALUES
('102146161230269382423524', '10214616123026938', 'Aldo Ariel', '2423524', 'black_alastor_666@ho', 'This is the last guardian', 4, '2017-10-14'),
('10214616123026938789789', '10214616123026938', 'Aldo Ariel', '789789', 'black_alastor_666@ho', 'ghfhfg', 2, '2017-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurants`
--

CREATE TABLE `restaurants` (
  `id` varchar(16) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(800) DEFAULT NULL,
  `adress` varchar(250) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `category` varchar(30) NOT NULL,
  `quality` int(11) NOT NULL DEFAULT '0',
  `image1` varchar(280) DEFAULT NULL,
  `image2` varchar(280) DEFAULT NULL,
  `image3` varchar(280) DEFAULT NULL,
  `image4` varchar(280) DEFAULT NULL,
  `workingHours` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `description`, `adress`, `phone`, `category`, `quality`, `image1`, `image2`, `image3`, `image4`, `workingHours`) VALUES
('123456789', 'Restaurant2', 'Restaurant2', 'Restaurant2', '123165', 'pub', 4, '123456789-images1.jpg', '123456789-images2.jpg', '123456789-images3.jpg', '123456789-images4.jpg', '8:15 am a 12:15 pm y 2:30 a 18:30 pm'),
('2311', 'chancharancha', 'This is a restaurant test', 'botellas', '72414837', 'pub', 4, '2311-image1.jpg', '2311-image2.jpg', '2311-image3.jpg', '2311-image4.jpg', '8:15 am a 12:15 pm y 24:30 a 18:30 pm'),
('2423523', 'restaurant6', 'restaurant6', 'restaurant6', '1213546', 'pub', 4, '2423523-image1.jpg', '2423523-image2.jpg', '2423523-image3.jpg', '2423523-image4.jpg', '8:15 am a 12:15 pm y 2:30 a 18:30 pm'),
('2423524', 'restaurant7', 'restaurant7', 'restaurant7', '45646879', 'pub', 4, '2423524-image1.jpg', '2423524-image2.jpg', '2423524-image3.jpg', '2423524-image4.jpg', '8:15 am a 12:15 pm y 2:30 a 18:30 pm'),
('789756', 'restaurant8', 'restaurant8', 'restaurant8', '87946', 'pub', 4, '789756-image1.jpg', '789756-image2.jpg', '789756-image3.jpg', '789756-image4.jpg', '8:15 am a 12:15 pm y 2:30 a 18:30 pm'),
('789757', 'restaurant9', 'restaurant9', 'restaurant9', '465465465', 'pub', 4, '789757-image1.jpg', '789757-image2.jpg', '789757-image3.jpg', '789757-image4.jpg', '8:15 am a 12:15 pm y 2:30 a 18:30 pm'),
('789789', 'pub1', 'pub1', 'pub1', '123165', 'restaurant', 4, '789789-image1.jpg', '789789-image2.jpg', '789789-image3.jpg', '789789-image4.jpg', '8:15 am a 12:15 pm y 2:30 a 18:30 pm'),
('987654321', 'Restaurant3', 'Restaurant3', 'Restaurant3', '132465', 'pub', 4, '987654321-image1.jpg', '987654321-image2.jpg', '987654321-image3.jpg', '987654321-image4.jpg', '8:15 am a 12:15 pm y 2:30 a 18:30 pm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
