-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2022 a las 21:08:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `health_up`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_C` int(11) NOT NULL,
  `ID_P` int(11) NOT NULL,
  `ID_F` int(11) NOT NULL,
  `ID_S` int(11) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `ID_EN` int(11) NOT NULL,
  `ID_P` int(11) NOT NULL,
  `Id_encuesta` int(11) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `Id_encuesta` int(11) NOT NULL,
  `ID_P` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Estado` tinyint(4) NOT NULL,
  `Fecha_inicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `Fecha_final` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisica`
--

CREATE TABLE `fisica` (
  `ID_F` int(11) NOT NULL,
  `Rutinas` varchar(100) NOT NULL,
  `Videos` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `Id_opcion` int(11) NOT NULL,
  `Id_pregunta` int(11) NOT NULL,
  `Valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_P` int(11) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Tipo_usuario` varchar(50) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID_P`, `Nombres`, `Apellidos`, `Tipo_usuario`, `Genero`, `Fecha_nacimiento`, `Correo`, `Contraseña`) VALUES
(4, 'Andres Yesid', 'Rodriguez Jimenez', 'admin', 'Masculino', '2004-07-27', 'ayrodriguez035@misena.edu.co', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Eduard Alejandro', 'Paredes Daza', 'Usuario', 'Femenino', '2004-02-12', 'eduard@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Dilsa Yaneth', 'Rodriguez Jimenez', 'Usuario', 'Femenino', '1980-11-06', 'yaneth680@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Juan Pablo', 'Ramirez', 'Usuario', 'Masculino', '2000-07-11', 'gokuelduro123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `Id_pregunta` int(11) NOT NULL,
  `Id_encuesta` int(11) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `Id_resultado` int(11) NOT NULL,
  `Id_opcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socioemocional`
--

CREATE TABLE `socioemocional` (
  `ID_S` int(11) NOT NULL,
  `Videos` varchar(100) NOT NULL,
  `Audios` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_C`),
  ADD UNIQUE KEY `ID_P` (`ID_P`),
  ADD UNIQUE KEY `ID_F` (`ID_F`),
  ADD UNIQUE KEY `ID_S` (`ID_S`),
  ADD UNIQUE KEY `ID_P_2` (`ID_P`),
  ADD UNIQUE KEY `ID_F_2` (`ID_F`),
  ADD UNIQUE KEY `ID_S_2` (`ID_S`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`ID_EN`),
  ADD UNIQUE KEY `Id_encuesta` (`Id_encuesta`),
  ADD KEY `encuesta-persona` (`ID_P`);

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`Id_encuesta`),
  ADD UNIQUE KEY `ID_P` (`ID_P`);

--
-- Indices de la tabla `fisica`
--
ALTER TABLE `fisica`
  ADD PRIMARY KEY (`ID_F`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`Id_opcion`),
  ADD UNIQUE KEY `Id_pregunta` (`Id_pregunta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_P`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`Id_pregunta`),
  ADD UNIQUE KEY `Id_encuesta` (`Id_encuesta`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`Id_resultado`),
  ADD UNIQUE KEY `Id_opcion` (`Id_opcion`);

--
-- Indices de la tabla `socioemocional`
--
ALTER TABLE `socioemocional`
  ADD PRIMARY KEY (`ID_S`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_C` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `ID_EN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `Id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fisica`
--
ALTER TABLE `fisica`
  MODIFY `ID_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `Id_opcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `ID_P` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `Id_pregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `Id_resultado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `socioemocional`
--
ALTER TABLE `socioemocional`
  MODIFY `ID_S` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria-socioemocional` FOREIGN KEY (`ID_S`) REFERENCES `socioemocional` (`ID_S`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorias-fisicas` FOREIGN KEY (`ID_F`) REFERENCES `fisica` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorias-personas` FOREIGN KEY (`ID_P`) REFERENCES `persona` (`ID_P`);

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `encuesta-persona` FOREIGN KEY (`ID_P`) REFERENCES `persona` (`ID_P`),
  ADD CONSTRAINT `encuesta_ibfk_1` FOREIGN KEY (`Id_encuesta`) REFERENCES `encuestas` (`Id_encuesta`);

--
-- Filtros para la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD CONSTRAINT `encuestas_ibfk_1` FOREIGN KEY (`ID_P`) REFERENCES `persona` (`ID_P`);

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`Id_pregunta`) REFERENCES `preguntas` (`Id_pregunta`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`Id_encuesta`) REFERENCES `encuestas` (`Id_encuesta`);

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`Id_opcion`) REFERENCES `opciones` (`Id_opcion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
