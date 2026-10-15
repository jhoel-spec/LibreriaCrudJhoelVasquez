-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2026 a las 02:55:01
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
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `editorial` varchar(60) NOT NULL,
  `fotoportada` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `titulo`, `genero`, `autor`, `editorial`, `fotoportada`) VALUES
(1, 'El Quijote', 'Novela', 'Miguel de Cervantes', 'Editorial Espasa', 'quijote.jpg'),
(2, 'Cien Años de Soledad', 'Realismo Mágico', 'Gabriel García Márquez', 'Editorial Sudamericana', 'cien_anos.jpg'),
(3, 'La Odisea', 'Épica', 'Homero', 'Editorial Gredos', 'odisea.jpg'),
(4, 'Harry Potter y la Piedra Filosofal', 'Fantasía', 'J.K. Rowling', 'Salamandra', 'hp1.jpg'),
(5, 'El Principito', 'Fábula', 'Antoine de Saint-Exupéry', 'Editorial Reynal & Hitchcock', 'principito.jpg'),
(6, '1984', 'Distopía', 'George Orwell', 'Secker & Warburg', '1984.jpg'),
(7, 'Don Juan Tenorio', 'Teatro', 'José Zorrilla', 'Editorial Castalia', 'donjuan.jpg'),
(8, 'Rayuela', 'Novela', 'Julio Cortázar', 'Editorial Sudamericana', 'rayuela.jpg'),
(9, 'La Divina Comedia', 'Épica', 'Dante Alighieri', 'Editorial Alianza', 'divina_comedia.jpg'),
(10, 'Crimen y Castigo', 'Novela', 'Fiódor Dostoyevski', 'Editorial Aguilar', 'crimen_castigo.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
