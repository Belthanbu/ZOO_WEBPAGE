-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2022 a las 23:32:56
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
-- Base de datos: `bd_zoologico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `clicod` varchar(10) NOT NULL,
  `clinom` varchar(50) NOT NULL,
  `clicor` varchar(100) NOT NULL,
  `clitel` varchar(9) NOT NULL,
  `clidni` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`clicod`, `clinom`, `clicor`, `clitel`, `clidni`) VALUES
('C0001', 'Erick Basurto', 'erickgianpierre@gmail.com', '957806432', '75191958'),
('C0002', 'Anderson Samir Gonzales Guayanay', 'ansangongu@gmail.com', '973725421', '74203454'),
('C0003', 'Miguel Lopez Velarde', 'migueve@gmail.com', '985856425', '05105625'),
('C0004', 'Mario Casas Llanos', 'marillan@gmail.com', '956425752', '75485425'),
('C0005', 'ANGELICA LISSETH BLANCO CONCHA', 'angelica@gmail.com', '952452145', '58452145'),
('C0006', 'JORGE ESTEBAN REY BOTERO', 'estebaojor@gmail.com', '956254853', '75484585'),
('C0007', 'HUGO ANDRÉS CAMARGO VARGAS', 'hugoandres@gmail.com', '965845852', '74521452'),
('C0008', 'IVONNE JOULIETTE BARRERA LOPEZ ', 'ivonebare@gmail.com', '956485452', '78545214');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `entcod` varchar(10) NOT NULL,
  `pre` double(10,2) NOT NULL,
  `can` int(11) NOT NULL,
  `fec` varchar(30) NOT NULL,
  `clicod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`entcod`, `pre`, `can`, `fec`, `clicod`) VALUES
('ECZ_001', 30.00, 2, '21-06-2022', 'C0001'),
('ECZ_002', 30.00, 2, '20-07-2022', 'C0002'),
('ECZ_003', 4.00, 1, '19-07-2022', 'C0003'),
('ECZ_004', 45.00, 3, '18-07-2022', 'C0004'),
('ECZ_005', 30.00, 2, '20-07-2022', 'C0005'),
('ECZ_006', 30.00, 2, '20-07-2022', 'C0006'),
('ECZ_007', 12.00, 3, '19-07-2022', 'C0007'),
('ECZ_008', 30.00, 2, '20-07-2022', 'C0008');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codpro` varchar(10) NOT NULL,
  `nompro` varchar(100) NOT NULL,
  `prepro` double(10,2) NOT NULL,
  `fotpro` varchar(100) NOT NULL,
  `codtip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codpro`, `nompro`, `prepro`, `fotpro`, `codtip`) VALUES
('A111', 'Camiseta Zoo', 25.00, 'accesorio1.png', 'T003'),
('A112', 'Camiseta T-Rex', 30.00, 'accesorio2.png', 'T003'),
('A113', 'Camiseta Tiger', 30.00, 'accesorio3.png', 'T003'),
('A114', 'Camiseta Monkey Face', 25.00, 'accesorio4.png', 'T003'),
('A115', 'Lentes de Animales', 10.00, 'accesorio5.png', 'T003'),
('A116', 'Gafas de Sol Redondas', 35.00, 'accesorio6.png', 'T003'),
('J111', 'Kit de Explorador ', 100.00, 'juguete1.png', 'T001'),
('J112', 'Juego de 54 animales', 45.00, 'juguete2.png', 'T001'),
('J113', 'Pulpo Azul de Cristal', 35.00, 'juguete3.png', 'T001'),
('J114', 'Granja de Animales', 35.00, 'juguete4.png', 'T001'),
('J115', 'Animales Marinos en Miniatura', 30.00, 'juguete5.png', 'T001'),
('J116', 'Figuras de Dinosaurio', 15.00, 'juguete6.png', 'T001'),
('P111', 'Tigre de Peluche', 50.00, 'peluche_tigre.png', 'T002'),
('P112', 'Cocodrilo de Peluche', 50.00, 'peluche_coco.png', 'T002'),
('P113', 'Elefante de Peluche', 45.00, 'peluche_elefante.png', 'T002'),
('P114', 'Jirafa de Peluche', 55.00, 'peluche_jirafa.png', 'T002'),
('P115', 'Loro de Peluche', 45.00, 'peluche_loro.png', 'T002'),
('P116', 'Mono de Peluche', 40.00, 'peluche_mono.png', 'T002'),
('P117', 'Llama de Peluche Rainbow', 55.00, 'peluche_llama2.png', 'T002'),
('P118', 'Foca de Peluche', 35.00, 'peluche_foca.png', 'T002'),
('P119', 'Oso de Peluche', 45.00, 'peluche_oso.png', 'T002'),
('P120', 'Llamitas de Peluche', 60.00, 'peluche_llama.png', 'T002'),
('P121', 'Dragon de Peluche', 70.00, 'peluche_dragon.png', 'T002'),
('P122', 'Pikachu de Peluche', 80.00, 'peluche_pikachu.png', 'T002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `nro` int(100) NOT NULL,
  `tipodoc` varchar(50) NOT NULL,
  `clidni` varchar(8) NOT NULL,
  `clinom` varchar(30) NOT NULL,
  `cliape` varchar(50) NOT NULL,
  `clitel` int(9) NOT NULL,
  `clicor` varchar(30) NOT NULL,
  `clicom` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reclamos`
--

INSERT INTO `reclamos` (`nro`, `tipodoc`, `clidni`, `clinom`, `cliape`, `clitel`, `clicor`, `clicom`) VALUES
(1, 'dni', '74203451', 'Anderson Samir', 'Gonzales Guayanay', 973725425, 'ansangongu@gmail.com', 'Mal trato de los trabajadores'),
(2, 'dni', '74203451', 'Anderson Samir', 'Gonzales Guayanay', 973725425, 'buttlicker@gmail.com', 'sds'),
(3, 'dni', '74203451', 'Anderson Samir', 'Gonzales Guayanay', 973725425, 'ansangongu@gmail.com', 'Perdí mi cartera en la entrada, por favor comunicarse a este número'),
(4, 'dni', '75253856', 'Jorge', 'Llanos Contreras', 986354258, 'jorgellanos@gmail.com', 'Un animal quiso atacar a mi hijo, deben controlarlos más'),
(5, 'dni', '75421856', 'Miguel', 'Casas Moñanos', 956245125, 'llano12s@gmail.com', 'Perdí mi dni en el zoologico, si alguien lo encuentra por favor entregarmeloi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `codtip` varchar(10) NOT NULL,
  `nomtip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`codtip`, `nomtip`) VALUES
('T001', 'Juguetes'),
('T002', 'Peluches'),
('T003', 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codusu` int(11) NOT NULL,
  `nomusu` varchar(20) NOT NULL,
  `passusu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codusu`, `nomusu`, `passusu`) VALUES
(1, 'anderson', 'sanctusabaddon'),
(2, 'jose', 'programacion123'),
(3, 'Erick', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`clicod`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`entcod`),
  ADD KEY `clicod` (`clicod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codpro`),
  ADD KEY `codtip` (`codtip`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`codtip`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `nro` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
