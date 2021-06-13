-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2021 a las 04:26:09
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `veterinaria`
--

CREATE TABLE `veterinaria` (
  `Id` varchar(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Dueño` varchar(50) NOT NULL,
  `Raza` varchar(20) NOT NULL,
  `Peso` decimal(10,0) NOT NULL,
  `Tamaño` varchar(10) NOT NULL,
  `Ruta` varchar(100) NOT NULL,
  `Enfermedad` varchar(100) NOT NULL,
  `Tratamiento` varchar(100) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `veterinaria`
--

INSERT INTO `veterinaria` (`Id`, `Nombre`, `Dueño`, `Raza`, `Peso`, `Tamaño`, `Ruta`, `Enfermedad`, `Tratamiento`, `Fecha`) VALUES
('7AoQ016Añ7', 'ffffff', 'jfjfjfjf', 'ffffff', '23', 'MEDIANO', '????\0JFIF\0\0?\0?\0\0??\0C\0\n\n\n\n\r\r#%$\"\"!&+7/&)4)!\"0A149;>>>%.DIC<H7=>;??\0C\n\r', 'dfcfcvcvcv', 'vvvgfsdbebd', '2021-05-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `veterinaria`
--
ALTER TABLE `veterinaria`
  ADD PRIMARY KEY (`Id`,`Nombre`,`Dueño`,`Raza`,`Peso`,`Tamaño`,`Ruta`,`Enfermedad`,`Tratamiento`,`Fecha`),
  ADD UNIQUE KEY `Nombre` (`Nombre`,`Dueño`,`Raza`,`Peso`,`Tamaño`,`Ruta`,`Enfermedad`,`Tratamiento`,`Fecha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
