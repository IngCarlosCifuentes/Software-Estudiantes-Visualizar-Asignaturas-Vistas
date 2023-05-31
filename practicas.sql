-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 16:34:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(150) NOT NULL,
  `tipo_identidad` enum('TI','CC','TE','CE') NOT NULL,
  `numero_documento` int(150) NOT NULL,
  `id_estudiante` int(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `semestres` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL,
  `generos` enum('Masculino','Femenino','Otro') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `tipo_identidad`, `numero_documento`, `id_estudiante`, `nombre`, `fecha_nacimiento`, `email`, `semestres`, `generos`) VALUES
(194, 'CC', 1070625937, 700942, 'Carlos Cifuentes', '1999-02-10', 'carlos.cifuentes@uniminuto.edu.co', '9', 'Masculino'),
(195, 'CC', 123456789, 10001, 'Juan Pérez', '1999-05-12', 'juanperez@example.com', '1', 'Masculino'),
(196, 'TI', 987654321, 10002, 'María Gómez', '2000-09-20', 'mariagomez@example.com', '2', 'Femenino'),
(197, 'CC', 456789123, 10003, 'Pedro Rodríguez', '1998-02-05', 'pedrorodriguez@example.com', '3', 'Masculino'),
(198, 'CE', 789123456, 10004, 'Ana Martínez', '2001-11-08', 'anamartinez@example.com', '2', 'Femenino'),
(199, 'CC', 234567891, 10005, 'Luisa Torres', '2002-07-15', 'luisatorres@example.com', '4', 'Femenino'),
(200, 'TE', 876543219, 10006, 'Carlos López', '1997-03-28', 'carloslopez@example.com', '3', 'Masculino'),
(201, 'CC', 345678912, 10007, 'Laura Ramírez', '2000-06-30', 'lauraramirez@example.com', '2', 'Femenino'),
(202, 'TI', 654321987, 10008, 'Daniel Herrera', '1999-09-18', 'danielherrera@example.com', '5', 'Masculino'),
(203, 'CC', 567891234, 10009, 'Isabella Sánchez', '2001-04-10', 'isabellasanchez@example.com', '3', 'Femenino'),
(204, 'CE', 987654321, 10010, 'Andrés Cruz', '1998-11-24', 'andrécruz@example.com', '4', 'Masculino'),
(205, 'CC', 876543219, 10011, 'Camila Vargas', '1999-12-06', 'camilavargas@example.com', '1', 'Femenino'),
(206, 'TE', 765432198, 10012, 'Javier González', '2000-08-22', 'javiergonzalez@example.com', '6', 'Masculino'),
(207, 'CC', 456789123, 10013, 'Valentina Medina', '1997-07-04', 'valentinamedina@example.com', '4', 'Femenino'),
(208, 'TI', 654321987, 10014, 'Santiago Ortega', '2001-10-16', 'santiagoortega@example.com', '3', 'Masculino'),
(209, 'CC', 543219876, 10015, 'Alejandra Castro', '2002-03-26', 'alejandracastro@example.com', '2', 'Femenino'),
(210, 'TE', 876543219, 10016, 'Manuel Jiménez', '1998-06-17', 'manueljimenez@example.com', '5', 'Masculino'),
(211, 'CC', 848919191, 4994911, 'JINATAN CIFUENTES', '2023-04-30', 'JONAtan@unu.co', '5', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre_materia` varchar(250) NOT NULL,
  `nrc` int(150) NOT NULL,
  `alfanumericos` varchar(250) NOT NULL,
  `semestre` int(11) NOT NULL,
  `numero_creditos` int(11) NOT NULL,
  `horas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre_materia`, `nrc`, `alfanumericos`, `semestre`, `numero_creditos`, `horas`) VALUES
(69, 'ISFCOL', 12345, 'ISUMGI012', 1, 3, 2),
(70, 'PRECALCULO', 54321, 'ISUMGI011', 1, 3, 6),
(71, 'Lógica MatemáticaPresencial', 98765, 'ISUMGI021', 1, 2, 2),
(72, 'Gestión Básica de la InformaciónRemoto Transversal', 98766, 'INFO1010', 1, 3, 2),
(73, 'Introducción a la Ingeniería de SistemasRemoto Transversal', 98767, 'ISUMGI031', 1, 1, 2),
(74, 'Programación Básica', 98768, 'ISUMGI013', 1, 2, 4),
(75, 'Ingeniería y Desarrollo Regional', 98769, 'ISUMGI022', 2, 3, 2),
(76, 'Proyecto de Vida', 98770, 'FHUM1010', 2, 2, 2),
(77, 'Calculo Diferencial', 98771, 'ISUMGI041', 2, 3, 4),
(78, 'CEPLEC I', 98772, 'FHUM1010', 2, 2, 2),
(79, 'Pogramación Orientada a Objetos', 98773, 'ISUMGI023', 2, 3, 4),
(80, 'Arquitectura de Computadores', 98774, 'ISUMGI033', 2, 3, 3),
(81, 'Catedra Minuto de Dios', 98775, 'FHUM1020', 3, 2, 4),
(82, 'Calculo IntegralPresencial', 98776, 'ISUMGI051', 3, 3, 4),
(83, 'Algebra LinealPresencial', 98777, 'ISUMGI061', 3, 2, 4),
(84, 'CEPLEC II', 98778, 'LENG1020', 3, 2, 2),
(85, 'INGLES I', 98779, 'NGL1010', 3, 3, 4),
(86, 'Metodología de Investigación', 98780, 'ISUMGI071', 3, 2, 2),
(87, 'Estructura de Datos', 98781, 'ISUMGI043', 3, 3, 4),
(88, 'Emprendimiento', 98782, 'ADMI1060', 4, 2, 2),
(89, 'Física Mecánica', 98783, 'ISUMGI081', 4, 3, 4),
(90, 'Matemáticas Discretas', 98784, 'ISUMGI091', 4, 2, 4),
(91, 'INGLES II', 98785, 'INGL1020', 4, 3, 4),
(92, 'Programación Web', 98786, 'ISUMGI053', 4, 3, 4),
(93, 'Bases de Datos', 98787, 'ISUMGI063', 4, 3, 4),
(94, 'Desarrollo Social Contemporaneo', 98788, 'PRAC1020', 5, 2, 2),
(95, 'Física Eléctrica', 98789, 'ISUMGI101', 5, 3, 4),
(96, 'Metodos Numericos', 98790, 'ISUMGI111', 5, 3, 4),
(97, 'INGLES III', 98791, 'INGL1030', 5, 3, 4),
(98, 'Ingeniería de Software', 98792, 'ISUMGI073', 5, 3, 4),
(99, 'Sistemas Transaccionales', 54393, 'ISUMGI083', 5, 3, 4),
(100, 'doña leche', 56194, 'ffdf46f', 4, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_estudiantes`
--

CREATE TABLE `materias_estudiantes` (
  `materias_id` int(11) NOT NULL,
  `estudiantes_id` int(11) NOT NULL,
  `notas` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias_estudiantes`
--

INSERT INTO `materias_estudiantes` (`materias_id`, `estudiantes_id`, `notas`) VALUES
(69, 194, 4.3),
(70, 194, 3.6),
(71, 194, 4.6),
(72, 194, 4.6),
(73, 194, 4.6),
(74, 194, 4.6),
(76, 194, 4.5),
(77, 194, 4.5),
(79, 194, 3.6),
(82, 194, 4.6),
(84, 194, 4.6),
(86, 194, 3.6),
(87, 194, 4.6),
(90, 211, 3.6),
(100, 211, 4.5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias_estudiantes`
--
ALTER TABLE `materias_estudiantes`
  ADD PRIMARY KEY (`materias_id`,`estudiantes_id`),
  ADD KEY `fk_materias_has_estudiantes_estudiantes1_idx` (`estudiantes_id`),
  ADD KEY `fk_materias_has_estudiantes_materias_idx` (`materias_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias_estudiantes`
--
ALTER TABLE `materias_estudiantes`
  ADD CONSTRAINT `fk_materias_has_estudiantes_estudiantes1` FOREIGN KEY (`estudiantes_id`) REFERENCES `estudiantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materias_has_estudiantes_materias` FOREIGN KEY (`materias_id`) REFERENCES `materias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
