-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         11.0.1-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para ecommerce
CREATE DATABASE IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `ecommerce`;

-- Volcando estructura para tabla ecommerce.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `seccionId` int(11) NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0,
  `precio` float NOT NULL DEFAULT 0,
  `stock` float NOT NULL DEFAULT 0,
  `path_foto` varchar(100) DEFAULT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`idProducto`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `FK_seccion` (`seccionId`),
  CONSTRAINT `FK_seccion` FOREIGN KEY (`seccionId`) REFERENCES `seccion` (`idSeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla ecommerce.producto: ~16 rows (aproximadamente)
INSERT INTO `producto` (`idProducto`, `codigo`, `nombre`, `descripcion`, `seccionId`, `destacado`, `precio`, `stock`, `path_foto`, `fecha_actualizacion`, `usuario`) VALUES
	(18, '10100', 'Celular Nokia 1020', 'Celular no Smartphone. 16MB. Single Sim', 2, 0, 120500, 3, 'cel1.png', '2023-01-01 00:00:00', 'william'),
	(19, '10200', 'Celular Samsung', 'Celular Samsung de última generación. 10GB de Memoria, Doble Simcard.', 2, 0, 250900, 3, 'cel2.png', '2023-01-01 00:00:00', 'william'),
	(20, '10300', 'Celular Motorola', '2GB De Memoria interna. 1 Simcard. Tarjeta externa de 16GB.', 2, 0, 145000, 3, 'cel3.png', '2023-01-01 00:00:00', 'william'),
	(21, '10400', 'Iphone X-11', 'Dobe cámara de alta definición. 16GB de RAM. Tarjeta de almacenamiento de 256GB', 2, 1, 954450, 3, 'cel4.png', '2023-01-01 00:00:00', 'william'),
	(22, '20100', 'PC Gamer', 'Computador PC Gamer de escritorio. 256 Disco sólido. 64GB de Ram. 2TB de disco.', 1, 1, 7800000, 3, 'comp1.png', '2023-01-01 00:00:00', 'william'),
	(23, '20200', 'PC Escritorio HP', 'Computador de escritorio 1TB de Disco duro. 32GB de Ram. Windows 11. Office 365', 1, 0, 1900000, 3, 'comp2.png', '2023-01-01 00:00:00', 'william'),
	(24, '20300', 'Portátil Gamer', 'Computador PC Gamer portátil. 512 Disco sólido. 64GB de Ram. 2TB de disco SATA.', 1, 0, 5300000, 3, 'comp3.png', '2023-01-01 00:00:00', 'william'),
	(25, '20400', 'Portátil ASUS', 'Portátil ASUS 32GB de Ram. 256GB Disco sólido. Windows 11. Antivirus y Office 365.', 1, 0, 2400000, 3, 'comp4.png', '2023-01-01 00:00:00', 'william'),
	(26, '30100', 'Licuadora Oster', 'Licuadora Oster Clásica Blst4655. 6Velocidades. Licua hielo.', 3, 1, 350000, 3, 'elec1.png', '2023-01-01 00:00:00', 'william'),
	(27, '30200', 'Olla Express Imusa', 'Imusa Olla a Presión de 6 litros de capacidad. Anti aderente y válvula de seguridad.', 3, 1, 900000, 3, 'elec2.png', '2023-01-01 00:00:00', 'william'),
	(28, '30300', 'Lavadora Secadora Whirpool', 'Lavadora secadora Whirpool de carga frontal 23kg Expert.', 3, 0, 5300000, 3, 'elec3.png', '2023-01-01 00:00:00', 'william'),
	(29, '30400', 'Nevera LG', 'Nevera de 9 pies LG. Con compartimientos internos. No frost.', 3, 1, 2100000, 3, 'elec4.png', '2023-01-01 00:00:00', 'william'),
	(30, '102030', 'Producto de Prueba', 'Este ers otro producto', 2, 0, 20500, 12300, 'gaseosa.jpg', '2023-03-28 00:00:00', 'usuario'),
	(31, '205080', '', '', 4, 0, 350000, 6, 'gaseosa.jpg', '2023-03-28 00:00:00', 'usuario'),
	(32, '98745', 'Camisa unisexo', 'Camisa para niño o niña en diferentes modelos y colores', 5, 0, 52600, 15, 'ropaninos.jpg', '2023-03-28 00:00:00', 'usuario'),
	(33, '654898', 'Mario Bross', 'Juego de nintendo 64  / Wii Mario Bross ', 6, 0, 285000, 2, 'videojuego.jpg', '2023-03-28 00:00:00', 'usuario');

-- Volcando estructura para tabla ecommerce.seccion
CREATE TABLE IF NOT EXISTS `seccion` (
  `idSeccion` int(11) NOT NULL AUTO_INCREMENT,
  `seccionNombre` varchar(100) NOT NULL,
  PRIMARY KEY (`idSeccion`),
  UNIQUE KEY `seccionNombre` (`seccionNombre`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla ecommerce.seccion: ~7 rows (aproximadamente)
INSERT INTO `seccion` (`idSeccion`, `seccionNombre`) VALUES
	(2, 'Celulares'),
	(1, 'Computadores'),
	(3, 'Electrodomésticos'),
	(4, 'Ropa Hombre'),
	(5, 'Ropa Mujeres'),
	(7, 'Ropa niños'),
	(6, 'Video Games');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
