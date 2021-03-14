-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2021 a las 04:03:27
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(15) NOT NULL,
  `cod_candidato` int(30) NOT NULL,
  `nombre` text NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `puesto` text NOT NULL,
  `postulacion` text NOT NULL,
  `votes` int(4) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `cod_candidato`, `nombre`, `cedula`, `puesto`, `postulacion`, `votes`, `userPic`) VALUES
(62, 1121, 'Voto Blanco', '-', '-', '-', 5, 'blanco.png'),
(69, 45563, 'Diomedes Rodriguez', '9-554-3233', 'Colaborador', 'Junta de Ahorro y Credito', 0, 'bas.png'),
(70, 9909, 'Romulo Garivaldi', '9-087-675', 'Asociado', 'Presidente de Junta', 0, ''),
(71, 8876, 'Juan Luis Peña', '9-666-443', 'Colaborador', 'Junta de Ahorro y Credito', 0, 'user2.png'),
(72, 5542, 'Carlos Cruz', '9-765-2211', 'Asociado', 'Junta de Vigilancia', 0, 'user2.png'),
(73, 2147483647, 'Jose Luis Almanza', '9-876-9985', 'Asociado', 'Presidente de Junta', 1, 'Captura.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id_encuesta` int(10) NOT NULL,
  `codigoEncuesta` int(10) NOT NULL,
  `titulo` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id_encuesta`, `codigoEncuesta`, `titulo`, `fecha`) VALUES
(169, 1, 'Elecciones Generales', '2021-03-09'),
(171, 2, 'Primera encuesta', '2021-03-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idPreg` int(11) NOT NULL,
  `codigoPregunta` int(15) NOT NULL,
  `textoPregunta` text NOT NULL,
  `idenc` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idPreg`, `codigoPregunta`, `textoPregunta`, `idenc`) VALUES
(153, 1, 'Presidente', 169),
(154, 2, 'Vicepresidente', 169),
(155, 3, 'Alcalde', 169),
(158, 4, 'Eres mayor de edad?', 171),
(159, 5, 'Haz escrito cartas?', 171);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_res` int(11) NOT NULL,
  `texto` text NOT NULL,
  `votoEnc` int(11) NOT NULL,
  `idencPreg` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id_res`, `texto`, `votoEnc`, `idencPreg`) VALUES
(180, 'Juan P.', 0, 153),
(181, 'Diomedes O.', 1, 153),
(182, 'Patricio M.', 0, 153),
(183, 'Carlos A.', 0, 154),
(184, 'Leonardo R.', 1, 154),
(185, 'Celso P.', 0, 154),
(186, 'Cristian I.', 0, 155),
(187, 'Sancho S.', 0, 155),
(188, 'Marcela P.', 1, 155),
(193, 'Si', 0, 158),
(194, 'No', 0, 158),
(195, 'Si', 0, 159),
(196, 'No', 0, 159);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(15) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(12, 'Administrador'),
(13, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cedula_usuario` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `passadmin` varchar(15) NOT NULL,
  `rol` int(15) NOT NULL,
  `voto` int(5) NOT NULL,
  `votoEncuesta` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `nombre`, `cedula_usuario`, `password`, `correo`, `passadmin`, `rol`, `voto`, `votoEncuesta`) VALUES
(47, 'Carlos C.', '9-754-6543', '', '1898@juan-xxiii.com', 'Carlos1898', 12, 0, 0),
(50, 'Alexis Peña', '9-764-9864', 'Alexis0567', '0567@juan-xxiii.com', '', 13, 0, 0),
(51, 'Alex Rodriguez', '9-876-6542', 'Alex0989', '0989@juan-xxiii.com', '', 13, 0, 0),
(52, 'Eva Marciaga', '6-765-4432', 'Eva9876', '9876@juan-xxiii.com', '', 13, 0, 0),
(53, 'Diomar Mojica', '9-763-5432', 'Diomar342', '342@juan-xxiii.com', '', 13, 0, 1),
(54, 'Jose Mendoza', '9-654-6543', 'Luis3321', '3321@juan-xxiii.com', '', 13, 0, 0),
(57, 'Juan Almanza', '8-987-543', 'Juan0564', '0564@juan-xxiii.com', '', 13, 0, 0),
(59, 'Diocelina Sclopis', '9-765-321', 'Diocelina2312', '2312@juan-xxiii.com', '', 13, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id_encuesta`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idPreg`),
  ADD KEY `idenc` (`idenc`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `idenc` (`idencPreg`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id_encuesta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPreg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`idenc`) REFERENCES `encuestas` (`id_encuesta`) ON DELETE CASCADE;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`idencPreg`) REFERENCES `preguntas` (`idPreg`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `sesion_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
