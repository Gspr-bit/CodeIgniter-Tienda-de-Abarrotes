-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Abarrotes
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Categoria`
--

DROP TABLE IF EXISTS `Categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(15) NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `imagenCategoria` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categoria`
--

LOCK TABLES `Categoria` WRITE;
/*!40000 ALTER TABLE `Categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `Categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ciudad`
--

DROP TABLE IF EXISTS `Ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Estado_idEstado` int(11) NOT NULL,
  PRIMARY KEY (`idCiudad`),
  KEY `fk_Ciudad_Estado1` (`Estado_idEstado`),
  CONSTRAINT `fk_Ciudad_Estado1` FOREIGN KEY (`Estado_idEstado`) REFERENCES `Estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ciudad`
--

LOCK TABLES `Ciudad` WRITE;
/*!40000 ALTER TABLE `Ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `Ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `tratamiento` varchar(30) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Nivel_idNivel` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `fk_Cliente_Nivel1_idx` (`Nivel_idNivel`),
  KEY `fk_Cliente_Usuario_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Cliente_Nivel1_idx` FOREIGN KEY (`Nivel_idNivel`) REFERENCES `Nivel` (`idNivel`),
  CONSTRAINT `fk_Cliente_Usuario_idx` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cliente`
--

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Colonia`
--

DROP TABLE IF EXISTS `Colonia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Colonia` (
  `idColonia` int(11) NOT NULL AUTO_INCREMENT,
  `colonia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Ciudad_idCiudad` int(11) NOT NULL,
  PRIMARY KEY (`idColonia`),
  KEY `fk_Colonia_Ciudad1` (`Ciudad_idCiudad`),
  CONSTRAINT `fk_Colonia_Ciudad1` FOREIGN KEY (`Ciudad_idCiudad`) REFERENCES `Ciudad` (`idCiudad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Colonia`
--

LOCK TABLES `Colonia` WRITE;
/*!40000 ALTER TABLE `Colonia` DISABLE KEYS */;
/*!40000 ALTER TABLE `Colonia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Direccion`
--

DROP TABLE IF EXISTS `Direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Direccion` (
  `idDireccion` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numInterior` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numExterior` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Colonia_idColonia` int(11) NOT NULL,
  PRIMARY KEY (`idDireccion`),
  KEY `fk_Direccion_Colonia1` (`Colonia_idColonia`),
  CONSTRAINT `fk_Direccion_Colonia1` FOREIGN KEY (`Colonia_idColonia`) REFERENCES `Colonia` (`idColonia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Direccion`
--

LOCK TABLES `Direccion` WRITE;
/*!40000 ALTER TABLE `Direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `Direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Empleado`
--

DROP TABLE IF EXISTS `Empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaContratado` date NOT NULL,
  `fechaDespido` date DEFAULT NULL,
  `telefonoPersonal` varchar(24) NOT NULL,
  `extension` varchar(4) DEFAULT NULL,
  `fotografia` varchar(150) DEFAULT NULL,
  `notas` longtext DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Nivel_idNivel` int(11) NOT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `fk_Empleado_Nivel1_idx` (`Nivel_idNivel`),
  KEY `fk_Empleado_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Empleado_Nivel1_idx` FOREIGN KEY (`Nivel_idNivel`) REFERENCES `Nivel` (`idNivel`),
  CONSTRAINT `fk_Empleado_Usuario1_idx` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Empleado`
--

LOCK TABLES `Empleado` WRITE;
/*!40000 ALTER TABLE `Empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `Empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Estado`
--

DROP TABLE IF EXISTS `Estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Estado` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Estado`
--

LOCK TABLES `Estado` WRITE;
/*!40000 ALTER TABLE `Estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `Estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Nivel`
--

DROP TABLE IF EXISTS `Nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Nivel` (
  `idNivel` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Nivel`
--

LOCK TABLES `Nivel` WRITE;
/*!40000 ALTER TABLE `Nivel` DISABLE KEYS */;
/*!40000 ALTER TABLE `Nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pedido`
--

DROP TABLE IF EXISTS `Pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `fechaPedido` datetime DEFAULT NULL,
  `fechaEntrega` datetime DEFAULT NULL,
  `fechaEmbarque` datetime DEFAULT NULL,
  `peso` decimal(19,3) DEFAULT 0.000,
  `totalPedido` decimal(19,2) DEFAULT 0.00,
  `Direccion_idDireccion` int(11) NOT NULL,
  `Transportista_idTransportista` int(11) NOT NULL,
  `Empleado_idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `fk_Pedido_Direccion1_idx` (`Direccion_idDireccion`),
  KEY `fk_Pedido_Empleado1` (`Empleado_idEmpleado`),
  KEY `fk_Pedido_Transportista1_idx` (`Transportista_idTransportista`),
  CONSTRAINT `fk_Pedido_Direccion1_idx` FOREIGN KEY (`Direccion_idDireccion`) REFERENCES `Direccion` (`idDireccion`),
  CONSTRAINT `fk_Pedido_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `Empleado` (`idEmpleado`),
  CONSTRAINT `fk_Pedido_Transportista1_idx` FOREIGN KEY (`Transportista_idTransportista`) REFERENCES `Transportista` (`idTransportista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pedido`
--

LOCK TABLES `Pedido` WRITE;
/*!40000 ALTER TABLE `Pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `Pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Producto`
--

DROP TABLE IF EXISTS `Producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(40) NOT NULL,
  `imagenProducto` varchar(45) DEFAULT NULL COMMENT 'imagen representativa del producto\\n',
  `cantidadPorUnidad` int(11) DEFAULT NULL COMMENT 'Cantidad de productos mínimos por venta',
  `precioUnitario` decimal(19,2) DEFAULT 0.00 COMMENT 'Precio de compra del producto',
  `existencia` int(11) DEFAULT 0 COMMENT 'cantidad de producto en el almacen',
  `descontinuado` tinyint(1) DEFAULT 0 COMMENT 'productos que ya no se venden',
  `Categoria_idCategoria` int(11) NOT NULL,
  `Proveedor_idProveedor` int(11) NOT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `fk_Producto_Categoria1_idx` (`Categoria_idCategoria`),
  KEY `fk_Producto_Proveedor1_idx` (`Proveedor_idProveedor`),
  CONSTRAINT `fk_Producto_Categoria1_idx` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `Categoria` (`idCategoria`),
  CONSTRAINT `fk_Producto_Proveedor1_idx` FOREIGN KEY (`Proveedor_idProveedor`) REFERENCES `Proveedor` (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Producto`
--

LOCK TABLES `Producto` WRITE;
/*!40000 ALTER TABLE `Producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `Producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Proveedor`
--

DROP TABLE IF EXISTS `Proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Proveedor` (
  `idProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(40) NOT NULL,
  `contacto` varchar(30) DEFAULT NULL,
  `tituloContacto` varchar(30) DEFAULT NULL,
  `fax` varchar(24) DEFAULT NULL,
  `sitioWeb` longtext DEFAULT NULL,
  `Direccion_idDireccion` int(11) NOT NULL,
  PRIMARY KEY (`idProveedor`),
  KEY `fk_Proveedor_Direccion1_idx` (`Direccion_idDireccion`),
  CONSTRAINT `fk_Proveedor_Direccion1_idx` FOREIGN KEY (`Direccion_idDireccion`) REFERENCES `Direccion` (`idDireccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Proveedor`
--

LOCK TABLES `Proveedor` WRITE;
/*!40000 ALTER TABLE `Proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `Proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Transportista`
--

DROP TABLE IF EXISTS `Transportista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Transportista` (
  `idTransportista` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(40) NOT NULL,
  `telefono` varchar(24) DEFAULT NULL,
  PRIMARY KEY (`idTransportista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Transportista`
--

LOCK TABLES `Transportista` WRITE;
/*!40000 ALTER TABLE `Transportista` DISABLE KEYS */;
/*!40000 ALTER TABLE `Transportista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `rfc` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion_idDireccion` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_Direccion1` (`Direccion_idDireccion`),
  CONSTRAINT `fk_Usuario_Direccion1` FOREIGN KEY (`Direccion_idDireccion`) REFERENCES `Direccion` (`idDireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-03 21:29:30
