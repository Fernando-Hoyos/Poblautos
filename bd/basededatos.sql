-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 07:02:03
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
-- Base de datos: `basededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `ID_auto` int(11) NOT NULL,
  `Marca` varchar(15) NOT NULL,
  `Precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`ID_auto`, `Marca`, `Precio`) VALUES
(1, 'Audi', 152593881),
(2, 'Tesla', 252050305),
(3, 'Porsche', 150073410),
(4, 'Audi', 120815773),
(5, 'Audi', 289491639),
(6, 'Mini', 176505618),
(7, 'Land Rover', 144430299),
(8, 'Opel', 243429838),
(9, 'Opel', 202925545),
(10, 'Toyota', 178762125),
(11, 'Land Rover', 211354922),
(12, 'Porsche', 228021018),
(13, 'Jeep', 138149066),
(14, 'Ferrari', 150291479),
(15, 'Mercedes-Benz', 297439903),
(16, 'Opel', 221289965),
(17, 'Lexus', 210760984),
(18, 'Mercedes-Benz', 105866236),
(19, 'Jeep', 152630936),
(20, 'Audi', 247171117),
(21, 'Mini', 221890860),
(22, 'BMW', 99449745),
(23, 'Toyota', 123959727),
(24, 'Mini', 138373215),
(25, 'Porsche', 208733335),
(26, 'Lexus', 126542055),
(27, 'Toyota', 210680885),
(28, 'Volvo', 174806325),
(29, 'Mercedes-Benz', 263321805),
(30, 'Ferrari', 216966102),
(31, 'Volvo', 164930408),
(32, 'Toyota', 159050911),
(33, 'Chevrolet', 172482747),
(34, 'Audi', 252190252),
(35, 'Porsche', 274748685),
(36, 'Tesla', 92278329),
(37, 'Audi', 226455736),
(38, 'Land Rover', 235822372),
(39, 'Ferrari', 109424838),
(40, 'Porsche', 162874293),
(41, 'Porsche', 185903245),
(42, 'Mercedes-Benz', 262496120),
(43, 'BMW', 204404355),
(44, 'Ferrari', 272630171),
(45, 'Toyota', 174027588),
(46, 'Toyota', 157401551),
(47, 'Mercedes-Benz', 216749471),
(48, 'Audi', 299762099),
(49, 'Porsche', 188153597),
(50, 'Chevrolet', 236374321);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_cliente` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_cliente`, `Nombre`, `Apellido`) VALUES
(1, 'Juan', 'González'),
(2, 'Ana', 'Martínez'),
(3, 'Carmen', 'García'),
(4, 'María', 'Pérez'),
(5, 'José', 'Ramírez'),
(6, 'Pedro', 'Rodríguez'),
(7, 'Sofía', 'García'),
(8, 'Pedro', 'Rodríguez'),
(9, 'María', 'Rodríguez'),
(10, 'Carmen', 'González'),
(11, 'Luis', 'López'),
(12, 'Carmen', 'Martínez'),
(13, 'José', 'Martínez'),
(14, 'José', 'López'),
(15, 'Juan', 'González'),
(16, 'Carmen', 'Rodríguez'),
(17, 'Carlos', 'Flores'),
(18, 'Luis', 'Martínez'),
(19, 'Carmen', 'Ramírez'),
(20, 'María', 'González'),
(21, 'Sofía', 'González'),
(22, 'Juan', 'Ramírez'),
(23, 'Luis', 'Ramírez'),
(24, 'Luis', 'Sánchez'),
(25, 'Luis', 'Pérez'),
(26, 'Sofía', 'Martínez'),
(27, 'Luis', 'Pérez'),
(28, 'María', 'Torres'),
(29, 'José', 'González'),
(30, 'Sofía', 'González'),
(31, 'Luis', 'Ramírez'),
(32, 'Luis', 'Flores'),
(33, 'Sofía', 'Martínez'),
(34, 'Carlos', 'Rodríguez'),
(35, 'Luis', 'Martínez'),
(36, 'Ana', 'Pérez'),
(37, 'María', 'González'),
(38, 'Ana', 'Sánchez'),
(39, 'Carmen', 'Flores'),
(40, 'Luis', 'García'),
(41, 'María', 'Flores'),
(42, 'José', 'López'),
(43, 'Juan', 'Flores'),
(44, 'Sofía', 'Pérez'),
(45, 'Ana', 'González'),
(46, 'Carlos', 'Pérez'),
(47, 'Luis', 'Ramírez'),
(48, 'Sofía', 'Rodríguez'),
(49, 'Carlos', 'García'),
(50, 'José', 'Flores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `ID_sucursal` int(11) NOT NULL,
  `Ciudad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`ID_sucursal`, `Ciudad`) VALUES
(1, 'Bogotá\r'),
(2, 'Cali\r'),
(3, 'Medellín');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_user` int(11) NOT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_user`, `usuario`, `pass`) VALUES
(1, 'admin', 1234),
(2, 'Usuario_1', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_venta` int(11) NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `ID_auto` int(11) NOT NULL,
  `ID_sucursal` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_venta`, `ID_cliente`, `ID_auto`, `ID_sucursal`, `Fecha`) VALUES
(10000, 1, 1, 1, '2024-01-10'),
(10001, 2, 2, 3, '2024-02-21'),
(10002, 3, 3, 3, '2024-03-13'),
(10003, 4, 4, 1, '2024-04-15'),
(10004, 5, 5, 2, '2024-05-28'),
(10005, 6, 6, 3, '2024-06-16'),
(10006, 7, 7, 1, '2024-07-22'),
(10007, 8, 8, 2, '2024-08-10'),
(10008, 9, 9, 3, '2024-09-24'),
(10009, 10, 10, 1, '2024-10-19'),
(10010, 11, 11, 2, '2024-11-12'),
(10011, 12, 12, 3, '2024-01-14'),
(10012, 13, 13, 1, '2024-02-06'),
(10013, 14, 14, 2, '2024-03-22'),
(10014, 15, 15, 3, '2024-04-11'),
(10015, 16, 16, 1, '2024-05-17'),
(10016, 17, 17, 2, '2024-06-19'),
(10017, 18, 18, 3, '2024-07-25'),
(10018, 19, 19, 1, '2024-08-16'),
(10019, 20, 20, 2, '2024-09-09'),
(10020, 21, 21, 3, '2024-10-02'),
(10021, 22, 22, 1, '2024-11-03'),
(10022, 23, 23, 3, '2024-01-07'),
(10023, 24, 24, 3, '2024-02-17'),
(10024, 25, 25, 1, '2024-03-28'),
(10025, 26, 26, 2, '2024-04-14'),
(10026, 27, 27, 3, '2024-05-12'),
(10027, 28, 28, 3, '2024-06-24'),
(10028, 29, 29, 2, '2024-07-11'),
(10029, 30, 30, 3, '2024-08-21'),
(10030, 31, 31, 1, '2024-09-17'),
(10031, 32, 32, 1, '2024-10-15'),
(10032, 33, 33, 3, '2024-11-05'),
(10033, 34, 34, 3, '2024-01-18'),
(10034, 35, 35, 2, '2024-02-12'),
(10035, 36, 36, 3, '2024-03-08'),
(10036, 37, 37, 1, '2024-04-27'),
(10037, 38, 38, 2, '2024-05-06'),
(10038, 39, 39, 3, '2024-06-28'),
(10039, 40, 40, 1, '2024-07-04'),
(10040, 41, 41, 2, '2024-08-26'),
(10041, 42, 42, 3, '2024-09-01'),
(10042, 43, 43, 1, '2024-10-24'),
(10043, 44, 44, 2, '2024-11-09'),
(10044, 45, 45, 3, '2024-01-05'),
(10045, 46, 46, 1, '2024-02-25'),
(10046, 47, 47, 2, '2024-03-16'),
(10047, 48, 48, 3, '2024-04-02'),
(10048, 49, 49, 1, '2024-05-20'),
(10049, 50, 50, 2, '2024-06-18'),
(10050, 1, 2, 3, '2024-07-09'),
(10051, 2, 3, 1, '2024-08-05'),
(10052, 3, 4, 2, '2024-09-13'),
(10053, 4, 5, 3, '2024-10-06'),
(10054, 5, 6, 3, '2024-11-08'),
(10055, 6, 7, 2, '2024-01-22'),
(10056, 7, 8, 3, '2024-02-19'),
(10057, 8, 9, 1, '2024-03-26'),
(10058, 9, 10, 3, '2024-04-04'),
(10059, 10, 11, 3, '2024-05-23'),
(10060, 11, 12, 1, '2024-06-08'),
(10061, 12, 13, 2, '2024-07-18'),
(10062, 13, 14, 3, '2024-08-29'),
(10063, 14, 15, 3, '2024-09-22'),
(10064, 15, 16, 1, '2024-10-30'),
(10065, 16, 17, 3, '2024-11-06'),
(10066, 17, 18, 1, '2024-01-12'),
(10067, 18, 19, 2, '2024-02-02'),
(10068, 19, 20, 3, '2024-03-29'),
(10069, 20, 21, 1, '2024-04-21'),
(10070, 21, 22, 2, '2024-05-10'),
(10071, 22, 23, 3, '2024-06-06'),
(10072, 23, 24, 1, '2024-07-26'),
(10073, 24, 25, 3, '2024-08-25'),
(10074, 25, 26, 3, '2024-09-05'),
(10075, 26, 27, 1, '2024-10-07'),
(10076, 27, 28, 2, '2024-11-11'),
(10077, 28, 29, 3, '2024-01-24'),
(10078, 29, 30, 1, '2024-02-11'),
(10079, 30, 31, 2, '2024-03-25'),
(10080, 31, 32, 3, '2024-04-10'),
(10081, 32, 33, 1, '2024-05-03'),
(10082, 33, 34, 2, '2024-06-12'),
(10083, 34, 35, 3, '2024-07-14'),
(10084, 35, 36, 1, '2024-08-01'),
(10085, 36, 37, 2, '2024-09-27'),
(10086, 37, 38, 3, '2024-10-13'),
(10087, 38, 39, 1, '2024-11-04'),
(10088, 39, 40, 2, '2024-01-15'),
(10089, 40, 41, 3, '2024-02-23'),
(10090, 41, 42, 1, '2024-03-17'),
(10091, 42, 43, 3, '2024-04-20'),
(10092, 43, 44, 3, '2024-05-08'),
(10093, 44, 45, 1, '2024-06-23'),
(10094, 45, 46, 2, '2024-07-21'),
(10095, 46, 47, 3, '2024-08-19'),
(10096, 47, 48, 1, '2024-09-18'),
(10097, 48, 49, 2, '2024-10-08'),
(10098, 49, 50, 3, '2024-11-07'),
(10099, 50, 1, 1, '2024-01-08'),
(10100, 1, 2, 2, '2024-02-14'),
(10101, 2, 3, 3, '2024-03-03'),
(10102, 3, 4, 1, '2024-04-16'),
(10103, 4, 5, 2, '2024-05-11'),
(10104, 5, 6, 3, '2024-06-09'),
(10105, 6, 7, 3, '2024-07-28'),
(10106, 7, 8, 2, '2024-08-04'),
(10107, 8, 9, 3, '2024-09-14'),
(10108, 9, 10, 1, '2024-10-18'),
(10109, 10, 11, 2, '2024-11-01'),
(10110, 11, 12, 3, '2024-01-17'),
(10111, 12, 13, 1, '2024-02-09'),
(10112, 13, 14, 2, '2024-03-01'),
(10113, 14, 15, 3, '2024-04-13'),
(10114, 15, 16, 1, '2024-05-04'),
(10115, 16, 17, 2, '2024-06-11'),
(10116, 17, 18, 3, '2024-07-03'),
(10117, 18, 19, 1, '2024-08-06'),
(10118, 19, 20, 2, '2024-09-29'),
(10119, 20, 21, 3, '2024-10-12'),
(10120, 21, 22, 3, '2024-11-10'),
(10121, 22, 23, 3, '2024-01-27'),
(10122, 23, 24, 3, '2024-02-10'),
(10123, 24, 25, 1, '2024-03-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`ID_auto`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_cliente`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`ID_sucursal`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_user`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_venta`),
  ADD KEY `ID_cliente` (`ID_cliente`),
  ADD KEY `ID_auto` (`ID_auto`),
  ADD KEY `ID_sucursal` (`ID_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `ID_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `ID_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10124;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `clientes` (`ID_cliente`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`ID_auto`) REFERENCES `autos` (`ID_auto`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`ID_sucursal`) REFERENCES `sucursales` (`ID_sucursal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
