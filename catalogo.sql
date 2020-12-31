-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2014 a las 03:18:01
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `desc` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`pid`, `name`, `desc`, `stock`, `price`, `img`) VALUES
(2, 'iMac 27''''', '27 pulgadas a 3,4 GHz<br>\r\nEspecificaciones:<br>\r\n- Procesador Core i5 de Intel de cuatro núcleos a 3,4 GHz.<br>\r\n- Turbo Boost de hasta 3,8 GHz.<br>\r\n- 8 GB de memoria (2 x 4 GB).<br>\r\n- Disco duro de 1TB.<br>\r\n- Procesador gráfico GeForce GTX 775M de NVIDIA con 2 GB de memoria de vídeo.<br>', 40, 2029.99, 'images/prod/imac.png'),
(3, 'MacBook Pro con pantalla Retina', '13 pulgadas: 2,6 GHz, pantalla Retina<br>\r\nEspecificaciones:<br>\r\n- Core i5 de Intel de doble núcleo a 2,6 GHz.<br>\r\n- Turbo Boost de hasta 3,1 GHz.<br>\r\n- 8 GB de memoria a 1.600 MHz.<br>\r\n- 512 GB de almacenamiento flash PCIe.<br>\r\n- Iris Graphics de Intel.<br>\r\n- Batería integrada (9 horas).<br>', 20, 1829.00, 'images/prod/macbookpronew.png'),
(5, 'MacBook Pro', '13 pulgadas: 2,5 GHz<br>\r\nEspecificaciones:<br>\r\n- Core i5 de Intel de doble núcleo a 2,5 GHz.<br>\r\n- Turbo Boost de hasta 3,1 GHz.<br>\r\n- 4 GB de memoria a 1.600 MHz.<br>\r\n- Disco duro de 500 GB a 5.400 rpm.<br>\r\n- HD Graphics 4000 de Intel.<br>\r\n- Batería integrada (7 horas).<br>', 18, 1229.00, 'images/prod/macbookpro.png'),
(6, 'MacBook Air de 13 pulgadas', '13 pulgadas: 256 GB<br>\r\nEspecificaciones:<br>\r\n- Core i5 de Intel de doble núcleo a 1,4 GHz.<br>\r\n- Turbo Boost hasta 2,7 GHz.<br>\r\n- HD Graphics 5000 de Intel.<br>\r\n- 4 GB de memoria.<br>\r\n- 256 GB de almacenamiento flash PCIe.<br>', 30, 1229.00, 'images/prod/macbookair.png'),
(7, 'Mac mini con OS X Server', '- Core i7 de Intel de cuatro núcleos a 2,3 GHz.<br>\r\n- 4 GB de memoria.<br>\r\n- Dos discos duros de 1 TB.<br>\r\n- HD Graphics 4000 de Intel.<br>\r\n- OS X Mavericks.<br>\r\n- OS X Server.<br>', 10, 1049.00, 'images/prod/macmini.png'),
(8, 'Mac Pro 6 Nucleos', '- Seis núcleos y dos GPU.<br>\r\n- Procesador Xeon E5 de Intel de seis núcleos a 3,5 GHz.<br>\r\n- 16 GB de memoria ECC DDR3 a 1.866 MHz.<br>\r\n- Dos GPU FirePro D500 de AMD con 3 GB de VRAM GDDR5 cada una.<br>\r\n- 256 GB de almacenamiento flash PCIe.<br>', 45, 4049.00, 'images/prod/macpro.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `pw`, `admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'alberto', '177dacb14b34103960ec27ba29bd686b', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
