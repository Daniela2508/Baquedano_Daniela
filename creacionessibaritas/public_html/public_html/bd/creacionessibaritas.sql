-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 07:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creacionessibaritas`
--

-- --------------------------------------------------------

--
-- Table structure for table `contiene`
--

CREATE TABLE `contiene` (
  `id` int(11) NOT NULL,
  `cantidadplatos` int(11) NOT NULL,
  `idplatos` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contiene`
--

INSERT INTO `contiene` (`id`, `cantidadplatos`, `idplatos`, `idpedido`) VALUES
(1, 1, 4, 1),
(2, 1, 15, 1),
(3, 1, 18, 1),
(4, 1, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cuentacliente`
--

CREATE TABLE `cuentacliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `contrasenia` varchar(12) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `iddireccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuentacliente`
--

INSERT INTO `cuentacliente` (`id`, `nombre`, `apellido`, `email`, `fechanacimiento`, `contrasenia`, `telefono`, `iddireccion`) VALUES
(17, 'Daniela', 'Baquedano', 'dbaquper@gmail.com', '2005-08-17', 'Daniela2005+', '639875312', 15),
(18, 'Pablo', 'Giménez', 'pGimenez@gmail.com', '2001-05-01', 'PabloGi3', '608456217', 16),
(19, 'Sofia', 'Rodriguez', 'sRodriguez@gmail.com', '1999-06-15', 'SofiaR46', '635142932', 17),
(20, 'Alicia', 'Martinez', 'alMartin@gmail.com', '1993-12-13', 'ALmar22+', '645823178', 18);

-- --------------------------------------------------------

--
-- Table structure for table `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `tipovia` varchar(20) NOT NULL,
  `nombrevia` varchar(20) NOT NULL,
  `numero` smallint(6) NOT NULL,
  `cp` mediumint(9) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `poblacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `direccion`
--

INSERT INTO `direccion` (`id`, `tipovia`, `nombrevia`, `numero`, `cp`, `provincia`, `poblacion`) VALUES
(15, 'calle', 'Sofia', 15, 35500, 'Las Palmas', 'Arrecife'),
(16, 'calle', 'Castillo de Arévalo', 1, 28232, 'Madrid', 'Las Rozas'),
(17, 'calle', ' de Francos Rodrigue', 66, 28039, 'Madrid', 'Tetuán'),
(18, 'calle', 'Mario', 4, 28232, 'Madrid', 'Las Rozas');

-- --------------------------------------------------------

--
-- Stand-in structure for view `menu`
-- (See below for the actual view)
--
CREATE TABLE `menu` (
`nombre` varchar(150)
,`precio` float
,`tipo` varchar(9)
);

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `idcuentacliente` int(11) NOT NULL,
  `hora` time NOT NULL,
  `precio` float NOT NULL,
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id`, `idcuentacliente`, `hora`, `precio`, `codigo`) VALUES
(1, 17, '18:01:00', 66, 'vCqip8ct'),
(2, 19, '18:04:00', 23.5, 'DL9jHRmJ');

-- --------------------------------------------------------

--
-- Table structure for table `platos`
--

CREATE TABLE `platos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `tipo` varchar(9) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `platos`
--

INSERT INTO `platos` (`id`, `nombre`, `tipo`, `precio`) VALUES
(4, 'Duo de carabineros yaguacate, apio, tomate y menta.', 'entrante', 22.5),
(5, 'Láminas de presa ibérica atemperada sobre cuajada de foie-gras, tarama de ostra y helado de mostaza.', 'entrante', 23.5),
(6, 'Nuestra ensalada todo vegetal, pétalos, brotes y hierbas.', 'entrante', 22),
(7, 'Ravioli de crustáceos y su esencia, burrata y Champagne.', 'entrante', 24.5),
(8, 'Risotto de hinojo, langosta y percebes.', 'entrante', 22),
(9, 'Zanahoria, piñones y verdura a la sal.', 'entrante', 22),
(10, 'Besugo asado con ragu de cañaillas y berberechos en un fondo de nécora, crema fina de pistacho.', 'pescado', 26),
(11, 'Rodaballo a la brasa con licuado de acelgas, achicoria y algas.', 'pescado', 24),
(12, 'Velouté de lenguado y limón amargo, guisantes lágrima y callos de bacalao .', 'pescado', 24.5),
(13, 'Lomo de corzo marinado, raíces a la trufa, crema de amarena, radicchio de Treviso y pimienta rosalimón amargo, guisantes lágrima y callos de bacalao.', 'carne', 24),
(14, 'Pichón de las Landas en su jugo, mermelada de naranja y calabaza con toques acidulados.', 'carne', 23.5),
(15, 'Solomillo de vaca al carbón, berza estofada, maíz ahumado y tubérculos con salsa de chalota al Oporto.', 'carne', 25),
(16, 'Cacahuete, tamarindo, plátano y mantequilla tostada.', 'postre', 19),
(17, 'Esferas de canela, mandarina y rosas.', 'postre', 20),
(18, 'Pastel de chocolate caliente al 70% con helado de té Earl Grey.', 'postre', 18.5),
(19, 'Sorbete de jengibre y fruta de la pasión, coco y zanahoria.', 'postre', 19);

-- --------------------------------------------------------

--
-- Stand-in structure for view `poblacionesfrecuentes`
-- (See below for the actual view)
--
CREATE TABLE `poblacionesfrecuentes` (
`poblacion` varchar(30)
,`total` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `numeropersonas` tinyint(4) NOT NULL,
  `idcuentacliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`id`, `codigo`, `fecha`, `hora`, `numeropersonas`, `idcuentacliente`) VALUES
(11, 'T2sTnLxV', '2024-05-24', '14:30:00', 6, 17),
(12, 'wHQPE61U', '2024-05-27', '14:45:00', 4, 18),
(13, '8U7nwLin', '2024-06-06', '14:00:00', 2, 19),
(14, 'TicD6xsY', '2024-05-24', '14:45:00', 3, 20);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservasfuturas`
-- (See below for the actual view)
--
CREATE TABLE `reservasfuturas` (
`codigo` varchar(10)
,`fecha` date
,`hora` time
,`numeropersonas` tinyint(4)
,`nombre_cliente` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ventaspopulares`
-- (See below for the actual view)
--
CREATE TABLE `ventaspopulares` (
`nombre` varchar(150)
,`tipo` varchar(9)
,`Cantidad_pedidos` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure for view `menu`
--
DROP TABLE IF EXISTS `menu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `menu`  AS SELECT `platos`.`nombre` AS `nombre`, `platos`.`precio` AS `precio`, `platos`.`tipo` AS `tipo` FROM `platos` ;

-- --------------------------------------------------------

--
-- Structure for view `poblacionesfrecuentes`
--
DROP TABLE IF EXISTS `poblacionesfrecuentes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `poblacionesfrecuentes`  AS SELECT `direccion`.`poblacion` AS `poblacion`, count(0) AS `total` FROM `direccion` GROUP BY `direccion`.`poblacion` ;

-- --------------------------------------------------------

--
-- Structure for view `reservasfuturas`
--
DROP TABLE IF EXISTS `reservasfuturas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservasfuturas`  AS SELECT `r`.`codigo` AS `codigo`, `r`.`fecha` AS `fecha`, `r`.`hora` AS `hora`, `r`.`numeropersonas` AS `numeropersonas`, `c`.`nombre` AS `nombre_cliente` FROM (`reservas` `r` join `cuentacliente` `c` on(`r`.`idcuentacliente` = `c`.`id`)) WHERE `r`.`fecha` >= curdate() ORDER BY `r`.`fecha`<> 0 and `r`.`hora` <> 0 ASC ;

-- --------------------------------------------------------

--
-- Structure for view `ventaspopulares`
--
DROP TABLE IF EXISTS `ventaspopulares`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ventaspopulares`  AS SELECT `pl`.`nombre` AS `nombre`, `pl`.`tipo` AS `tipo`, count(`c`.`cantidadplatos`) AS `Cantidad_pedidos` FROM (`platos` `pl` join `contiene` `c` on(`c`.`idplatos` = `pl`.`id`)) GROUP BY `pl`.`tipo` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idplatos` (`idplatos`),
  ADD KEY `idpedido` (`idpedido`);

--
-- Indexes for table `cuentacliente`
--
ALTER TABLE `cuentacliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddireccion` (`iddireccion`);

--
-- Indexes for table `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcuentacliente` (`idcuentacliente`);

--
-- Indexes for table `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcuentacliente` (`idcuentacliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contiene`
--
ALTER TABLE `contiene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cuentacliente`
--
ALTER TABLE `cuentacliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`idplatos`) REFERENCES `platos` (`id`),
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`id`);

--
-- Constraints for table `cuentacliente`
--
ALTER TABLE `cuentacliente`
  ADD CONSTRAINT `cuentacliente_ibfk_1` FOREIGN KEY (`iddireccion`) REFERENCES `direccion` (`id`);

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idcuentacliente`) REFERENCES `cuentacliente` (`id`);

--
-- Constraints for table `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`idcuentacliente`) REFERENCES `cuentacliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
