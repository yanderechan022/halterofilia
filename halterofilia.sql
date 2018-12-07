-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 23:54:39
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `halterofilia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías`
--

CREATE TABLE `categorías` (
  `id` int(40) NOT NULL,
  `categorías 1 jovenes` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `categorías 2 junior` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `categorías 3 senior` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `categorías 4 master` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `categorías`
--

INSERT INTO `categorías` (`id`, `categorías 1 jovenes`, `categorías 2 junior`, `categorías 3 senior`, `categorías 4 master`) VALUES
(1, '13 a 17 años', '15 a 20 años', '+15 años', '+35 años');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `id` int(40) NOT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `departamento` varchar(12) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `modalidad` varchar(40) DEFAULT NULL,
  `tipo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`id`, `lugar`, `departamento`, `fecha`, `hora`, `modalidad`, `tipo`) VALUES
(1, 'Chia', 'Cundinamarca', '2018-08-18', '07:00:00', 'Arranque - Envion', 'Abierta'),
(2, 'Madrid', 'Cundinamarca', '2018-08-10', '07:00:00', 'Arranque - Envion', 'Intercolegiado'),
(3, 'La vega', 'Cundinamarca', '2018-09-01', '07:00:00', 'Arranque - Envion', 'Abierta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronogroma`
--

CREATE TABLE `cronogroma` (
  `id` int(11) NOT NULL,
  `nombre de competenecia` varchar(60) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `mes` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisionfemenina`
--

CREATE TABLE `divisionfemenina` (
  `id` int(11) NOT NULL,
  `division_48kg` int(11) NOT NULL,
  `division_53kg` int(11) NOT NULL,
  `division_58kg` int(11) NOT NULL,
  `division_63kg` int(11) NOT NULL,
  `division_69kg` int(11) NOT NULL,
  `division_75kg` int(11) NOT NULL,
  `division_90kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `división`
--

CREATE TABLE `división` (
  `id` int(11) NOT NULL,
  `División_M 56 Kg` int(11) DEFAULT NULL,
  `División_M 62 Kg` int(11) DEFAULT NULL,
  `División_M 69 Kg` int(11) DEFAULT NULL,
  `División_M 77 Kg` int(11) DEFAULT NULL,
  `División_M 85 Kg` int(11) DEFAULT NULL,
  `División_M 94 Kg` int(11) DEFAULT NULL,
  `División_M 105 Kg` int(11) DEFAULT NULL,
  `División_M >105 Kg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juzgamiento`
--

CREATE TABLE `juzgamiento` (
  `ID_Juzgamiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `marca peso levantado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id` int(20) NOT NULL,
  `envion` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `arranque` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id`, `envion`, `arranque`, `id_user`) VALUES
(1, '78', '87', 1032421333),
(2, '65', '23', 53827364),
(3, '105', '89', 1024736542),
(4, '45', '12', 1033726749),
(5, '55', '55', 55166828),
(6, '21', '15', 2147483647),
(7, '52', '84', 55342732),
(8, '32', '46', 43527637);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `id` int(11) DEFAULT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `intentos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(10) NOT NULL,
  `nombre_rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(111, 'admin'),
(222, 'juez interno'),
(333, 'juez cronometro'),
(444, 'deportista'),
(555, 'entrenador'),
(666, 'fisioterapeuta'),
(777, 'nutricionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempos`
--

CREATE TABLE `tiempos` (
  `id` int(11) NOT NULL,
  `tiempo extra` time DEFAULT NULL,
  `tiempo de competencia` time DEFAULT NULL,
  `tiempo de levantamiento` time DEFAULT NULL,
  `tiempo de ejecución de movimiento` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `fechanacimiento` date NOT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `pesokg` int(20) DEFAULT NULL,
  `categoria` varchar(5) DEFAULT NULL,
  `division` varchar(9) DEFAULT NULL,
  `eps` varchar(20) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `mail` varchar(25) DEFAULT NULL,
  `curriculum` varchar(292) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `fechanacimiento`, `apellido`, `genero`, `pesokg`, `categoria`, `division`, `eps`, `telefono`, `direccion`, `municipio`, `mail`, `curriculum`, `pass`, `id_rol`) VALUES
(43527637, 'YEIMY', '0000-00-00', 'PADILLA', 'FEMENINO', 75, '', '', 'SURA', 9234523, 'CLL 22 N 23 52', 'FUNZA', 'ypadilla@hotmail.com', '', '', 8),
(53827364, 'DIEGO', '0000-00-00', 'QUINTERO', 'MASCULINO', 76, '', '', 'FAMISANAR', 3576598, 'CLL 32 N 23 46', 'MADRID', 'dquintero@hotmail.com', '', '', 2),
(55166828, 'JAVIER', '0000-00-00', 'SOLANO', 'MASCULINO', 83, '', '', 'CAFAM', 1735344, 'CLL 28 N 23 49', 'faca', 'javi.sola@yahoo.es', '', '', 5),
(55342732, 'JEISON', '0000-00-00', 'PAREDES', 'MASCULINO', 72, '', '', 'CAFAM', 8476425, 'CLL 25 N 23 51', 'FUNZA', 'jparedes@gmail.com', '', '', 7),
(1024736542, 'SANDRA', '0000-00-00', 'JOYA', 'FEMENINO', 70, '', '', 'CRUZ BLANCA', 4873271, 'CLL 31 N 23 47', 'MOSQUERA', 'sjoya@gmail.com', '', '', 3),
(1032421333, 'ALBA', '0000-00-00', 'SOTO', 'FEMENINO', 65, '', '', 'SANITAS', 4877654, 'CLL 33 N 23 45', 'FUNZA', 'alba.soto@gmail.com', '', '', 1),
(1033726749, 'JUAN CARLOS', '0000-00-00', 'MORALES', 'MASCULINO', 80, '', '', 'SANITAS', 9183745, 'CLL 30 N 23 48', 'FACA', 'jcmorales@gmail.com', '', '', 4),
(2147483647, 'HENRY', '0000-00-00', 'GUERRERO', 'MASCULINO', 79, '', '', 'SURA', 8234134, 'CLL 27 N 23 50', 'MOSQUERA', 'henryguerre465@hotmail.co', '', '', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorías`
--
ALTER TABLE `categorías`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cronogroma`
--
ALTER TABLE `cronogroma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `divisionfemenina`
--
ALTER TABLE `divisionfemenina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `división`
--
ALTER TABLE `división`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tiempos`
--
ALTER TABLE `tiempos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorías`
--
ALTER TABLE `categorías`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiempos`
--
ALTER TABLE `tiempos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD CONSTRAINT `modalidad_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
