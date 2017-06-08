-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2017 a las 22:37:25
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` tinyint(4) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rpe` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `esPosgrado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nac` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rfc` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_particular` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_cel` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_oficina` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_alter` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id`, `nombre`, `rpe`, `titulo`, `esPosgrado`, `fecha_nac`, `rfc`, `tel_particular`, `tel_cel`, `tel_oficina`, `correo`, `correo_alter`) VALUES
(1, 'ARTURO IGLESIAS ZARATE', '2228', 'x', 'MAESTRIA EN CIENCIAS, MAESTRIA EN ING.', '06/09/59', 'IEZA5909061A6', '1385177', '4441044326', '8240778', 'addsic@yahoo.com.mx', 'arturoiglesias@uaslp.mx'),
(2, 'JUANA EULALIA MARTINEZ HERNANDEZ', '13332', 'INGENIERIA CIVIL', 'MAESTRIA EN HIDROSISTEMAS CON ESPECIALIDAD EN ING.', '24/06/1979', 'MAHJ790624A28', '4441422998', '', '', 'juana.eulalia@gmail.com', 'juanaeulalia@outlook.com'),
(3, 'GUSTAVO ADOLFO CERVANTES SALAS', '19097', 'INGENIERO EN COMPUTACION', 'X', '21/04/88', 'CESG880421C42', '8181734', '4441915623', '8262300 EX', 'gustavo.cervantes@uaslp.mx', 'gustavo.cervantes.salas@gmail.com'),
(4, 'RAFAEL LEYVA MARTINEZ', '24921', 'MAESTRO EN INGENIERIA', 'MAESTRIA', 'X', 'LEMR770127SC6', '1620092', '4445102916', '8174880', 'rleyvam@yahoo.com.mx', 'rleyvam@hotmail.com'),
(5, 'FELIPE EDUARDO ANAYA GUTIERREZ', '23685', 'ING. CIVIL', 'HIDROSISTEMAS', '21/08/1988', 'AAGF880821G54', '4448187715', '4441531744', '4441796161', 'eduardo_0888@hotmail.com', 'fanaya@mexichem.com'),
(6, 'BLANCA VERONICA ALEJO AVALOS', '23625', 'QFB', 'X', '01/07/74', 'AEAB740701FE5', '1682591', '4441705983', '', 'vero_alejo@HOTMAIL.COM', 'vero.alejo@gmail.com'),
(7, 'HERMANN ROCHA ESCALANTE', '19300', 'INGENIERO CIVIL', 'DR. EN CIENCIAS AMBIENTALES', '30/10/83', 'ROEH831030CP5', '', '4441164909', '8262330 EX', 'hermann.escalante@uaslp.mx', 'hermann.rocha.escalante@gmail.com'),
(8, 'GUILLERMO SANCHEZ DIAS', '20993', 'LICENCIADO EN CO PUTACION', 'MAESTRIA Y DOCTORADO EN CIENCIAS DE LA COMPUTACION', '12/04/70', 'SAD6700412-1BA', '8113288', '4441176626', '8262300  E', 'GUILLERMO.SANCHEZ@UASLP.MX', 'GSANCHEZD@HOTMAIL.COM'),
(9, 'FRANCISCO EVERARDO ESTRADA VELAZQUEZ', '21007', 'INGENIERO EN COMPUTACION', 'X', '19/08/89', 'EAVF890819KQ4', '8390699', '4441261115', '8262300  E', 'everardo.estrada@uaslp.mx', 'everardo.estrada.uaslp@gmail.com'),
(10, 'ROBERTO ESPINOZA VALENZUELA', '9033', 'ING. TOPOGRAFO HIDROLOGO', 'MAESTRIA EN PLANEACION Y SISTEMAS', '26/08/68', 'ELVR680826KJ3', '8232567', '4443796950', '', 'topografiaing@uaslp.mx', ''),
(11, 'JUAN ANTORIO ARAIZA RODRIGUEZ', '8083', 'ING. CIVIL', 'MAESTRIA EN INGENIERIA HIDRAULICA', '13/06/64', 'AARJ640613L58', '8230330', '4441885910', '8262300 EX', 'jaraiza@uaslp.mx', 'jaraiza613@gmail.com'),
(12, 'DAVID ROGELIO MARTINEZ ESTRADA', '7133', 'ING. CIVIL', 'X', '07/07/76', 'MAED760707A87', '', '4442163348', '', 'david_rogelio@hotmail.com', ''),
(13, 'ROGELIO SANTANA ARIAS', '26419', 'LICENCIATURA EN GEOGRAFIA', 'X', '21/11/92', 'SAAR921121664', '4441759706', '4441759706', '', 'rogelio_santana_a@hotmail.com', ''),
(14, 'ANDRES GERARDO', 'CASTR', 'INGENIERO EN GEOMATICA', 'X', '17/05/93', 'CAOA930517B49', '1298530', '4443299451', '', 'andres-ovalle@outlook.com', ''),
(15, 'SORAIDA CRISTINA ZUÃ‘IGA MARTINEZ', '19296', 'MAESTRA EN CIENCIAS EN FISICA', 'MAESTRIA', '18/04/81', 'ZUMS810418354', '', '4441262314', '', 'soraida.zuniga@uaslp.mx', 'soraida_zuniga@hotmail.com'),
(16, 'DANTE NAVARRETE MACIAS', '29048', 'INGENIERO CIVIL', 'MAESTRIA Y DOCTORADO EN INGENIERIA', '15/12/82', 'NAMD821215074', '1126871', '4444265635', '', 'dante.macias@uaslp.mx', 'navarrete.md@hotmail.com'),
(17, 'DANTE NAVARRETE MACIAS', '29048', 'INGENIERO CIVIL', 'MAESTRIA Y DOCTORADO EN INGENIERIA', '15/12/82', 'NAMD821215074', '1126871', '4444265635', '', 'dante.macias@uaslp.mx', 'navarrete.md@hotmail.com'),
(18, 'JOSE XAVIER SANCHEZ MARTINEZ', '23400', 'INGENIERO CIVIL', '', '22/03/91', 'SAMX9103221J9', '8184138', '4442148946', '', 'xavier.smartinez@gmail.com', 'xavier.san@hotmail.com'),
(19, 'CLEMENTE RODRIGUEZ CUEVAS', '10287', 'INGENIERO', 'DOCTORADO', '30/07/76', 'ROCC760730IL8', '', '4442896348', '82623000', 'clemente.rodriguez@uaslp.mx', 'clemente.rdz@yahoo.com.mx'),
(20, 'ENRIQUE MACIAS DE LA TORRE', '20775', 'INGENIERO CIVIL', '', '15/07/45', 'MATE4507152VZ', '8250607', '4441267165', '', 'enrique.macias@uaslp.mx', ''),
(21, 'JORGE PEDRO GARCIA CONTRERAS', '23117', 'DOCTOR EN CIENCIA DE LA TIERRA', 'DOCTORADO', '20/05/1975', 'GACJ750520', '4441772590', '4441772590', '', 'jorge.garcia@uaslp.mx', 'wilsof96@yahoo'),
(22, 'ANDRES BENAVENTE WAGNER', '23500', 'ING. CIVIL', 'MAESTRO EN CIENCIAS', '04/01/85', 'BEWA850104G02', '4448403621', '', '8304827', 'ing.andres-bw@hotmail.com', ''),
(23, 'WENDY LORENA PUENTE CASTILLO', '29540', 'MAESTRA EN CIENCIAS', 'U.A.S.P., INSTITUTO DE GEOLOGIA', '07/06/82', 'PUCW820607L42', '', '4444212459', '', 'wendypuente7@hotmail.com', 'welopuca@gmail.com'),
(24, 'JORGE ALBERTO PEREZ GONZALEZ', '8851', 'ING. CIVIL', 'MAESTRIA EN ESTRUCTURAS', '09/07/65', 'PEGJ_650609_GR2', '1385510', '4442381962', '8262331', 'perezjor@uaslp.mx', 'direccionfiuaslp@gmail.com'),
(25, 'LUIS JORGE GONZALEZ MORENO', '10008', 'ING. CIVIL', 'MAESTRIA EN ESTRUCTURAS', '25/08/1948', 'GOML480825', '', '4441795850', '', 'lgonzale@uaslp.mx', ''),
(26, 'MARCOP ANTONIO CASTAÃ‘ON BARRAGAN', '18486', 'ING. TOPOGRAFO HIDROLOGO', '', '25/04/86', 'CABM860425B87', '', '4441712805', '', 'makoys86@hotmail.com', ''),
(27, 'LORENZO BORSELLI', '22106', 'DOCTOR', 'DR EN CIENCIAS DEL SUELO', '01/12/65', 'BOLO651201F54', '', '4443026048', '8171039', 'LBORSELLI@GMAIL.COM', 'LORENZO.BORSELLI@UASLP.MX'),
(28, 'EMMA LUZ DE VELAZQUEZ FARFAN', '22234', 'ING CIVIL', '', '23/03/70', 'VEFE700323KK8', '4442839953', '4442839953', '', 'ema.develazquez@uaslp.mx', 'emaluzdv@hotmail.com'),
(29, 'EMMA LUZ DE VELAZQUEZ FARFAN', '22234', 'ING CIVIL', '', '23/03/70', 'VEFE700323KK8', '4442839953', '4442839953', '', 'ema.develazquez@uaslp.mx', 'emaluzdv@hotmail.com'),
(30, 'LUIS ARNOLDO GONZALEZ CASTILLO', '29546', 'ING CIVIL', '', '19/12/91', 'GOCL911219', '8158647', '4448490324', '', 'luis_arnoldo19@hotmail.com', ''),
(31, 'LUIS ARNOLDO GONZALEZ CASTILLO', '29546', 'ING CIVIL', '', '19/12/91', 'GOCL911219', '8158647', '4448490324', '', 'luis_arnoldo19@hotmail.com', ''),
(32, 'OSCAR ANDRES VILLASANA MENDEZ', '7177', 'ING. CIVIL', 'MAESTRIA EN ESTRUCTURA', '20/04/67', 'VIMO670420SQ5', '4442980978', '4444153850', '4448118800', 'andresvillasana@yahoo.com.mx', ''),
(33, 'JOSE DE JESUS PUENTE NAVARRO', '3650', 'ING. CIVIL', 'ESPECIALIDAD EN CONSTRUCCION', '19/11/56', 'PUNJ5611198G8', '', '4448442714', '', 'ing_jpuentenavarro@hotmail.com', ''),
(34, 'MARIO ALBERTO  BENTACOURT URBINA', '21287', 'ING. CIVIL', '', '11/04/90', 'BEUM900411BF7', '8390918', '4448490765', '8262330', 'mario.betancourt42@gmail.com', 'mario.betancourt@uaslp.mx'),
(35, 'VICTOR VAZQUEZ RAMOS', '9469', 'ING. CIVIL', 'MAESTRIA EN ESTRUCTURAS', '14/05/66', 'VARV660514C19', '4448205372', '4448450002', '4448201150', 'victor.vazquez@uaslp.mx', 'vvr40cartas@yahoo.com'),
(36, '', '', '', '', '', '', '', '', '', '', ''),
(37, 'JUAN CARLOS IBARRA GARCIA', '7614', 'ING. CIVIL', 'MAESTRIA EN ESTRUCTURAS', '14/02/71', 'IACJ710214PQ1', '3873392', '4445892083', '4441835655', 'carlos.castillo@uaslp.mx', 'perlaibonf@yahoo.com.mx'),
(38, 'JOSE LUIS JUAREZ RUBIO', '21414', 'ING. CIVIL', 'MAESTRIA EN PLANEACION Y SISTEMAS', '05/11/70', 'JURL701105SP3', '8350421', '4444277810', '1025200 EX', 'joseluisjuarezr@hotmail.com', 'luis.juarez@uaslp.mx'),
(39, 'HILARION MENDEZ MARTINEZ', '27338', 'ING. CIVIL', 'MAESTRIA EN INGENIERIA', '22/12/83', 'MEMH831222UH7', '2116731', '4441267104', '', 'hmendezcursos@gmail.com', 'hmendezecs@gmail.com'),
(40, 'RICARDO HOLGUIN OGAZ', '4275', 'INGENIERO QUIMICO', '', '26/05/68', 'HOOR680526RI8', '2069793', '4441247659', '', 'ricardo.holguin@uaslp.mx', 'ricardo_holguin@yahoo.com.mx'),
(41, 'FEDERICO EUGENIO MEJIA VELAZQUEZ', '21848', 'ING. CIVIL', 'MAESTRIA EN VALUACION', '24/11/63', 'MEVF631124RB9', '4448114156', '4441601847', '4441601847', 'fedemejiz4@hotmail.com', 'federico.mejiz@uaslp.mx'),
(42, 'CUTBERTO JAIME CARREON', '5625', 'ING. CIVIL', '', '20/03/66', 'JACC660320MG0', '', '4441338748', '', 'cutbertojaimecarreon@hotmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
