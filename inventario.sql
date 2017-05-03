-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2017 a las 09:47:04
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE IF NOT EXISTS `incidencias` (
  `idIncidencia` int(11) NOT NULL AUTO_INCREMENT,
  `idMaterial` int(11) NOT NULL,
  `FechaIncidencia` date NOT NULL,
  `Incidencia` text COLLATE utf8_unicode_ci NOT NULL,
  `FechaSolucion` date NOT NULL,
  `Solucion` text COLLATE utf8_unicode_ci NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idIncidencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE IF NOT EXISTS `materiales` (
  `idReferencia` int(11) NOT NULL AUTO_INCREMENT,
  `Aparato` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `NifProveedor` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `idMarca` int(11) NOT NULL,
  `Modelo` int(11) NOT NULL,
  `NumSerie` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `FechaEntrada` date NOT NULL,
  `DniUsuario` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Garantia` date NOT NULL,
  `idUbicacion` int(11) NOT NULL,
  `NumInterno` int(11) NOT NULL,
  `FechaBaja` date NOT NULL,
  `Observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idReferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `Nif` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Proveedor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Nif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE IF NOT EXISTS `puestos` (
  `idPuesto` int(11) NOT NULL AUTO_INCREMENT,
  `Puesto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idPuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE IF NOT EXISTS `revisiones` (
  `idRevision` int(11) NOT NULL AUTO_INCREMENT,
  `idMaterial` int(11) NOT NULL,
  `FechaRevision` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `Observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idRevision`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE IF NOT EXISTS `ubicaciones` (
  `idUbicacion` int(11) NOT NULL AUTO_INCREMENT,
  `Ubicacion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idUbicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idPuesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
