-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: gestor_jj
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anio_escolar`
--

DROP TABLE IF EXISTS `anio_escolar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anio_escolar` (
  `id_anioEscolar` int(11) NOT NULL AUTO_INCREMENT,
  `ddmmi` char(255) NOT NULL,
  `yyi` char(255) NOT NULL,
  `ddmmf` char(255) NOT NULL,
  `yyf` char(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_anioEscolar`),
  UNIQUE KEY `yyf` (`yyf`,`yyi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anio_escolar`
--

LOCK TABLES `anio_escolar` WRITE;
/*!40000 ALTER TABLE `anio_escolar` DISABLE KEYS */;
INSERT INTO `anio_escolar` VALUES (4,'14-09','2020','09-07','2021','2020-09-02 04:45:20'),(5,'06-09','2021','15-07','2022','2021-09-02 04:46:14'),(6,'19-09','2022','14-07','2023','2022-09-02 04:47:13'),(7,'17-04','2023','29-03','2024','2023-05-16 04:48:24');
/*!40000 ALTER TABLE `anio_escolar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCargo` varchar(30) NOT NULL,
  `asignado` tinyint(4) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cargo`),
  UNIQUE KEY `nombreCargo` (`nombreCargo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Director',0,'2023-04-22 06:40:00'),(2,'Sub-director Administrativo',0,'2023-04-22 06:40:00'),(3,'Sub-director Académico',0,'2023-04-22 06:40:00'),(9,'Cocinera',0,'2023-04-23 06:02:36'),(11,'Bibliotecaria',0,'2023-04-23 06:02:43'),(12,'Docente',0,'2023-04-23 06:03:26'),(14,'Obrero',0,'2023-04-23 06:05:46'),(15,'Auxiliar',0,'2023-04-23 09:18:42');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codigos`
--

DROP TABLE IF EXISTS `codigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codigos` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_codigo`),
  UNIQUE KEY `numeroCodigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigos`
--

LOCK TABLES `codigos` WRITE;
/*!40000 ALTER TABLE `codigos` DISABLE KEYS */;
INSERT INTO `codigos` VALUES (1,'1234','2023-04-25 00:21:27'),(2,'4321','2023-04-25 00:22:45'),(3,'0','2023-04-25 00:25:08'),(4,'2222','2023-04-25 00:25:37'),(5,'0000','2023-04-25 00:27:40'),(6,'9999','2023-04-25 00:32:13');
/*!40000 ALTER TABLE `codigos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `e_data_estudiante`
--

DROP TABLE IF EXISTS `e_data_estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `e_data_estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `apellidosE` char(255) NOT NULL,
  `nombresE` char(255) NOT NULL,
  `cedulaE` char(11) NOT NULL,
  `fechaNacimientoE` date NOT NULL,
  `edadAniosE` int(2) NOT NULL,
  `edadMesesE` int(2) NOT NULL,
  `lugarNacimientoE` char(255) NOT NULL,
  `idEstadoNatalE` int(11) NOT NULL,
  `idMunicipioNatalE` int(11) NOT NULL,
  `idParroquiaNatalE` int(11) NOT NULL,
  `direccionHabitacionE` char(255) NOT NULL,
  `sexoEB` char(255) NOT NULL,
  `inscritoInicial` tinyint(1) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `papeleraE` tinyint(4) NOT NULL,
  `formalizado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `cedulaE` (`cedulaE`),
  KEY `estudiantesEstados` (`idEstadoNatalE`),
  KEY `estudiantesMunicipios` (`idMunicipioNatalE`),
  KEY `estudiantesParroquias` (`idParroquiaNatalE`),
  CONSTRAINT `estudiantesEstados` FOREIGN KEY (`idEstadoNatalE`) REFERENCES `estados` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `estudiantesMunicipios` FOREIGN KEY (`idMunicipioNatalE`) REFERENCES `municipios` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `estudiantesParroquias` FOREIGN KEY (`idParroquiaNatalE`) REFERENCES `parroquias` (`id_parroquia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `e_data_estudiante`
--

LOCK TABLES `e_data_estudiante` WRITE;
/*!40000 ALTER TABLE `e_data_estudiante` DISABLE KEYS */;
INSERT INTO `e_data_estudiante` VALUES (32,'Sarmiento','Barbara','28078347','2020-08-07',2,10,'Boconó',20,371,890,'Calle Bolivar','',1,'2023-06-25 02:10:39',0,1),(33,'Graterol','Erickson','28078150','2020-07-23',2,11,'Boconó',20,371,890,'Valle Verde 1','',1,'2023-06-25 02:12:50',0,0),(34,'Garcia','Ronal','27776438','2020-06-02',3,0,'Boconó',20,371,890,'Bisnaca','',1,'2023-06-25 02:15:23',0,0),(35,'Cabezas','Emilio','28078563','2020-10-21',2,8,'Boconó',20,371,890,'Banco Obrero','',1,'2023-06-25 02:17:58',0,1),(37,'Hernandez Padron','Jose Gregorio','27051490','2020-02-07',3,4,'Estado Apure',3,33,98,'Valle Verde 1 Calle Jumangal 1','',1,'2023-06-25 02:28:49',0,1),(68,'Asdas','Asdas','28078000','2018-07-17',5,0,'Asdasd',13,194,576,'Asdasdasd','Masculino',0,'2023-07-19 23:30:08',0,1),(69,'Asdasd','Asdasd','28078111','2021-07-01',2,0,'Asdasd',13,194,576,'Asdasdas','',1,'2023-07-19 23:31:47',0,0),(70,'Asdasd','Asdasd','28078222','2021-07-13',2,0,'Asdasd',12,148,485,'Asdasdas','',1,'2023-07-19 23:34:01',0,0),(71,'Asdasd','Asdas','28078333','2021-07-08',2,0,'Asdasd',11,138,441,'Asdasdas','',1,'2023-07-20 00:16:29',0,1);
/*!40000 ALTER TABLE `e_data_estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `e_data_familiar_i`
--

DROP TABLE IF EXISTS `e_data_familiar_i`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `e_data_familiar_i` (
  `id_estudiante` int(11) NOT NULL,
  `autorizacionFEI` tinyint(4) NOT NULL,
  `organismoAutorizacionFEI` char(255) NOT NULL,
  `tieneHermanosEI` tinyint(4) NOT NULL,
  `cuantosHermanosEI` int(2) NOT NULL,
  `cuantosHermanosVEI` int(2) NOT NULL,
  `cuantosHermanosHEI` int(2) NOT NULL,
  `lugarHermanosEI` char(255) NOT NULL,
  `quienDuermeEI` char(255) NOT NULL,
  `quienJuegaEI` char(255) NOT NULL,
  `localizarFEI` char(255) NOT NULL,
  `dondeQuienViveEI` char(255) NOT NULL,
  `tipoPartoEI` char(255) NOT NULL,
  `enfermedadesEI` char(255) NOT NULL,
  `vacunasEI` char(255) NOT NULL,
  `dificultadCaminarEI` char(255) NOT NULL,
  `compromisoVisualEI` char(255) NOT NULL,
  `auditivosEI` char(255) NOT NULL,
  `pronunciacionEI` char(255) NOT NULL,
  `otrasEI` char(255) NOT NULL,
  `caracteristicasEI` char(255) NOT NULL,
  `sueñoIntranquiloEI` char(255) NOT NULL,
  `esfinteresEI` char(255) NOT NULL,
  `ayudaBanioEI` char(255) NOT NULL,
  `comeSoloEI` char(255) NOT NULL,
  `alimentosPrefiereEI` char(255) NOT NULL,
  `alergicoEI` char(255) NOT NULL,
  `alimentosProhibidosEI` char(255) NOT NULL,
  `fiebreMedicamentoEI` char(255) NOT NULL,
  UNIQUE KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `estudiante_familiar` FOREIGN KEY (`id_estudiante`) REFERENCES `e_data_estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `e_data_familiar_i`
--

LOCK TABLES `e_data_familiar_i` WRITE;
/*!40000 ALTER TABLE `e_data_familiar_i` DISABLE KEYS */;
INSERT INTO `e_data_familiar_i` VALUES (32,0,'',0,0,0,0,'','','','En la casa','Casa','Cesaría','','','','','','','','','','','','','','','','De todo'),(33,0,'',0,0,0,0,'','','','En la casa','Casa','Normal','','','','','','','','','','','','','','','','Pastillas'),(34,0,'',0,0,0,0,'','','','En la casa','En la casa','Normal','','','','','','','','','','','','','','','','Pastillas'),(35,0,'',0,0,0,0,'','','','En la casa','En la casa','Normal','','','','','','','','','','','','','','','','Pastillas'),(37,1,'Ninguno',1,3,1,0,'2','Solo','Solo','Sabra dios! en apure','En la casa solo','Normal','Le falta un tornillo','Todas cree','Flojera','','','','','','Si la culpa lo consume','Si','Cuando esta tomado','Si','El huevo','No','El pescado pollo y carne','Aguante'),(69,0,'',0,0,0,0,'','','','Asdasd','Asdasd','Fórceps','','','','','','','','','','','','','','','','Asdasda'),(70,0,'',0,0,0,0,'','','','Asdasdas','Asdasd','Fórceps','','','','','','','','','','','','','','','','Asdasdas'),(71,0,'',0,0,0,0,'','','','Asdasd','Asdasd','Cesaría','','','','','','','','','','','','','','','','Asdasdas');
/*!40000 ALTER TABLE `e_data_familiar_i` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `e_data_interes_i`
--

DROP TABLE IF EXISTS `e_data_interes_i`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `e_data_interes_i` (
  `id_estudiante` int(11) NOT NULL,
  `tallaOctubreEI` char(255) NOT NULL,
  `tallaEneroEI` char(255) NOT NULL,
  `tallaAbrilEI` char(255) NOT NULL,
  `tallaJunioEI` char(255) NOT NULL,
  `pesoOctubreEI` char(255) NOT NULL,
  `pesoEneroEI` char(255) NOT NULL,
  `pesoAbrilEI` char(255) NOT NULL,
  `pesoJunioEI` char(255) NOT NULL,
  `atencionAdultaEI` char(255) NOT NULL,
  `entretieneSoloEI` char(255) NOT NULL,
  `expresaAfectoEI` char(255) NOT NULL,
  `enojaFrecuentementeEI` char(255) NOT NULL,
  `porqueEnojaEI` char(255) NOT NULL,
  `miedosInfundidosEI` char(255) NOT NULL,
  `intranquiloEI` char(255) NOT NULL,
  `tiempoViendoTvEI` char(255) NOT NULL,
  `programasTvEI` char(255) NOT NULL,
  `tiempoGamingEI` char(255) NOT NULL,
  `gamesEI` char(255) NOT NULL,
  `actividadPeriodo1EI` char(255) NOT NULL,
  `actividadPeriodo2EI` char(255) NOT NULL,
  `actividadPeriodo3EI` char(255) NOT NULL,
  `infoCometeFaltaEI` char(255) NOT NULL,
  UNIQUE KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `estudiante_interes` FOREIGN KEY (`id_estudiante`) REFERENCES `e_data_estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `e_data_interes_i`
--

LOCK TABLES `e_data_interes_i` WRITE;
/*!40000 ALTER TABLE `e_data_interes_i` DISABLE KEYS */;
INSERT INTO `e_data_interes_i` VALUES (32,'','','','','','','','','Normal','','','','','','','','','','','','','','Regaño'),(33,'','','','','','','','','Poca','','','','','','','','','','','','','','Regaño'),(34,'','','','','','','','','Poca','','','','','','','','','','','','','','Coñazos'),(35,'','','','','','','','','Poca','','','','','','','','','','','','','','Le quita el internet'),(37,'','','','','','','','','Mucha','Si','Si','Si','Por todo','Si a la soledad el silencio la muerte','No','No xq no tiene','No tiene tv','Si','El corre corre','','','','Lo regaña la mama y se pone toxica y seca con el'),(69,'','','','','','','','','Normal','','','','','','','','','','','','','','Asdasd'),(70,'','','','','','','','','Normal','','','','','','','','','','','','','','Asdasdas'),(71,'','','','','','','','','Mucha','','','','','','','','','','','','','','Asdasd');
/*!40000 ALTER TABLE `e_data_interes_i` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `e_data_padres_i`
--

DROP TABLE IF EXISTS `e_data_padres_i`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `e_data_padres_i` (
  `id_estudiante` int(11) NOT NULL,
  `parentescoREI1` char(255) NOT NULL,
  `nombreCompletoREI1` char(255) NOT NULL,
  `cedulaREI1` int(8) NOT NULL,
  `edadREI1` int(2) NOT NULL,
  `nacionalidadREI1` char(255) NOT NULL,
  `gradoInstrucionREI1` char(255) NOT NULL,
  `trabajaREI1` char(255) NOT NULL,
  `direccionTrabajoREI1` char(255) NOT NULL,
  `viveREI1` char(255) NOT NULL,
  `codigoTelCasaREI1` char(255) NOT NULL,
  `telefonoCasaREI1` char(255) NOT NULL,
  `codigoTelCelREI1` char(255) NOT NULL,
  `telefonoCelREI1` char(255) NOT NULL,
  `direccionHabitacionREI1` char(255) NOT NULL,
  `parentescoREI2` char(255) NOT NULL,
  `nombreCompletoREI2` char(255) NOT NULL,
  `cedulaREI2` int(8) NOT NULL,
  `edadREI2` int(2) NOT NULL,
  `nacionalidadREI2` char(255) NOT NULL,
  `gradoInstrucionREI2` char(255) NOT NULL,
  `trabajaREI2` char(255) NOT NULL,
  `direccionTrabajoREI2` char(255) NOT NULL,
  `viveREI2` char(255) NOT NULL,
  `codigoTelCasaREI2` char(255) NOT NULL,
  `telefonoCasaREI2` char(255) NOT NULL,
  `codigoTelCelREI2` char(255) NOT NULL,
  `telefonoCelREI2` char(255) NOT NULL,
  `direccionHabitacionREI2` char(255) NOT NULL,
  `situacionPadresEI` char(255) NOT NULL,
  UNIQUE KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `estudiante_padres` FOREIGN KEY (`id_estudiante`) REFERENCES `e_data_estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `e_data_padres_i`
--

LOCK TABLES `e_data_padres_i` WRITE;
/*!40000 ALTER TABLE `e_data_padres_i` DISABLE KEYS */;
INSERT INTO `e_data_padres_i` VALUES (32,'Madre','Mama de barbara',12312312,12,'Vzla','Bachiller','Si','En el trabajo','Si','58','123123123','58','345345345','Calle Bolivar','Representante','',0,0,'','','No','','No','58','','58','','','Separados'),(33,'Padre','Papa de erickson',12312312,50,'Vzlo','Bachiller','Si','En el trabajo','Si','58','12312312','58','456456456','Valle Verde 1','Representante','',0,0,'','','Si','','Si','58','','58','','','Separados'),(34,'Representante','Mama de ronal',11231231,34,'Vzla','Bachiller','Si','Trabajo','Si','58','12312332','58','12312312','Bisnaca','Padre','',0,0,'','','Si','','Si','58','','58','','','Conviven'),(35,'Padre','Hermano de emilio',1231231,34,'Vzlo','Tsu en informatica','Si','En el trabajo','Si','58','12312312','58','1231232','Banco obrero','Madre','',0,0,'','','Si','','Si','58','','58','','Banco obrero','Conviven'),(37,'Madre','Yennys',12312312,47,'Venezolana','Primaria','No','No tiene','No','58','123123123','58','12312312','En la casa','Representante','',0,22,'','','Si','','Si','58','','58','','','Separados'),(69,'Madre','Asdasdas',12312312,12,'Aasdas','Asdasd','Si','Asdasd','Si','58','123123123','58','123123123','Asdasdas','Representante','',0,0,'','','No','','No','58','','58','','','Conviven'),(70,'Padre','Asdasd',12312312,12,'Asdasd','Asdasd','No','Asdasd','Si','58','123123123','58','12312312','Asdasdasd','Representante','',0,0,'','','No','','No','58','','58','','','Conviven'),(71,'Padre','Asdasd',12312312,12,'Asdasd','Asdasd','Si','Asdasd','Si','58','123123123','58','123123123','Asdasdas','Representante','',0,0,'','','Si','','Si','58','','58','','','Conviven');
/*!40000 ALTER TABLE `e_data_padres_i` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `e_data_representante_b`
--

DROP TABLE IF EXISTS `e_data_representante_b`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `e_data_representante_b` (
  `id_estudiante` int(11) NOT NULL,
  `nombreCompletoREB` char(255) NOT NULL,
  `fechaNacimientoREB` date NOT NULL,
  `cedulaREB` int(8) NOT NULL,
  `edadREB` int(2) NOT NULL,
  `gradoInstruccionREB` char(255) NOT NULL,
  `ocupacionREB` char(255) NOT NULL,
  `lugarTrabajoREB` char(255) NOT NULL,
  `codigoTelREB` char(255) NOT NULL,
  `telefonoREB` char(255) NOT NULL,
  `direccionDomicilioREB` char(255) NOT NULL,
  `parentescoREB` char(255) NOT NULL,
  `rSustitutoEB` char(255) NOT NULL,
  `fechaNacimientoRSEB` date NOT NULL,
  `cedulaRSEB` int(8) NOT NULL,
  `direccionHabitacionRSEB` char(255) NOT NULL,
  `codigoTelRSEB` char(255) NOT NULL,
  `telefonoRSEB` char(255) NOT NULL,
  `id_personalResponsableEB` int(11) NOT NULL,
  `confirmResponsableInsEB` tinyint(4) NOT NULL,
  `observacionesEB` char(255) NOT NULL,
  `fichaNumEB` int(4) NOT NULL,
  UNIQUE KEY `id_estudiante` (`id_estudiante`),
  KEY `representante_personal` (`id_personalResponsableEB`),
  CONSTRAINT `estudiante_representante` FOREIGN KEY (`id_estudiante`) REFERENCES `e_data_estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `representante_personal` FOREIGN KEY (`id_personalResponsableEB`) REFERENCES `personal_p1` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `e_data_representante_b`
--

LOCK TABLES `e_data_representante_b` WRITE;
/*!40000 ALTER TABLE `e_data_representante_b` DISABLE KEYS */;
INSERT INTO `e_data_representante_b` VALUES (68,'Asdasdasd','2004-07-12',12312312,19,'Asdasd','Asdasd','Asdas','58','123123123','Asdasd','Asdasd','Asdasd','2004-07-13',12312312,'Asdasdas','58','123123123',14,0,'',68);
/*!40000 ALTER TABLE `e_data_representante_b` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(250) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Amazonas'),(2,'Anzoátegui'),(3,'Apure'),(4,'Aragua'),(5,'Barinas'),(6,'Bolívar'),(7,'Carabobo'),(8,'Cojedes'),(9,'Delta Amacuro'),(10,'Falcón'),(11,'Guárico'),(12,'Lara'),(13,'Mérida'),(14,'Miranda'),(15,'Monagas'),(16,'Nueva Esparta'),(17,'Portuguesa'),(18,'Sucre'),(19,'Táchira'),(20,'Trujillo'),(21,'La Guaira'),(22,'Yaracuy'),(23,'Zulia'),(24,'Distrito Capital'),(25,'Dependencias Federales');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalizar_ins_e`
--

DROP TABLE IF EXISTS `formalizar_ins_e`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalizar_ins_e` (
  `id_tabla` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) NOT NULL,
  `id_anioEscolar` int(11) NOT NULL,
  `id_literalGradoAnterior` int(11) NOT NULL,
  `id_gradoCursar` int(11) NOT NULL,
  `id_seccionGradoCursar` int(11) NOT NULL,
  `confirmacionRE` tinyint(4) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tabla`),
  KEY `formalizar_estudiante` (`id_estudiante`),
  KEY `formalizar_anioEscolar` (`id_anioEscolar`),
  KEY `formalizar_literal` (`id_literalGradoAnterior`),
  KEY `formalizar_grados` (`id_gradoCursar`),
  KEY `formalizar_secciones` (`id_seccionGradoCursar`),
  CONSTRAINT `formalizar_anioEscolar` FOREIGN KEY (`id_anioEscolar`) REFERENCES `anio_escolar` (`id_anioEscolar`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `formalizar_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `e_data_estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `formalizar_grados` FOREIGN KEY (`id_gradoCursar`) REFERENCES `grados` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `formalizar_literal` FOREIGN KEY (`id_literalGradoAnterior`) REFERENCES `literal` (`id_literal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `formalizar_secciones` FOREIGN KEY (`id_seccionGradoCursar`) REFERENCES `secciones` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalizar_ins_e`
--

LOCK TABLES `formalizar_ins_e` WRITE;
/*!40000 ALTER TABLE `formalizar_ins_e` DISABLE KEYS */;
INSERT INTO `formalizar_ins_e` VALUES (25,35,7,6,1,23,0,'2023-07-19 22:04:10'),(26,32,7,6,4,30,0,'2023-07-19 22:06:43'),(27,37,7,6,1,24,0,'2023-07-19 22:21:56'),(33,68,7,6,1,23,1,'2023-07-19 23:30:08'),(34,71,7,7,1,22,1,'2023-07-20 00:17:32');
/*!40000 ALTER TABLE `formalizar_ins_e` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grados`
--

DROP TABLE IF EXISTS `grados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grados` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `numeroGrado` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_grado`),
  UNIQUE KEY `numeroGrado` (`numeroGrado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grados`
--

LOCK TABLES `grados` WRITE;
/*!40000 ALTER TABLE `grados` DISABLE KEYS */;
INSERT INTO `grados` VALUES (1,'Preescolar Primer Nivel','2023-05-08 20:10:04'),(4,'Primero','2023-05-08 20:12:21'),(5,'Segundo','2023-07-04 06:05:27'),(6,'Tercero','2023-07-19 22:25:44');
/*!40000 ALTER TABLE `grados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `literal`
--

DROP TABLE IF EXISTS `literal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `literal` (
  `id_literal` int(11) NOT NULL AUTO_INCREMENT,
  `letraLiteral` varchar(5) NOT NULL,
  `descripcionLiteral` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_literal`),
  UNIQUE KEY `letraLiteral` (`letraLiteral`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `literal`
--

LOCK TABLES `literal` WRITE;
/*!40000 ALTER TABLE `literal` DISABLE KEYS */;
INSERT INTO `literal` VALUES (6,'A','Alcanzo y supero las competencias previstas para el grado','2023-04-23 09:16:21'),(7,'B','Bueno','2023-04-23 09:16:31'),(8,'C','Regular','2023-04-23 09:16:39'),(9,'D','Malo','2023-04-23 09:17:01'),(10,'E','Muy malo','2023-04-23 09:17:08');
/*!40000 ALTER TABLE `literal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias_ruleta`
--

DROP TABLE IF EXISTS `materias_ruleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias_ruleta` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMateria` char(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_materia`),
  UNIQUE KEY `nombreMateria` (`nombreMateria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias_ruleta`
--

LOCK TABLES `materias_ruleta` WRITE;
/*!40000 ALTER TABLE `materias_ruleta` DISABLE KEYS */;
INSERT INTO `materias_ruleta` VALUES (1,'Castellano','2023-08-22 00:07:52'),(2,'Quimica','2023-08-22 00:14:18'),(3,'Biologia','2023-08-22 00:14:42');
/*!40000 ALTER TABLE `materias_ruleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL AUTO_INCREMENT,
  `id_estado` int(11) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  PRIMARY KEY (`id_municipio`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=463 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios`
--

LOCK TABLES `municipios` WRITE;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` VALUES (1,1,'Alto Orinoco'),(2,1,'Atabapo'),(3,1,'Atures'),(4,1,'Autana'),(5,1,'Manapiare'),(6,1,'Maroa'),(7,1,'Río Negro'),(8,2,'Anaco'),(9,2,'Aragua'),(10,2,'Manuel Ezequiel Bruzual'),(11,2,'Diego Bautista Urbaneja'),(12,2,'Fernando Peñalver'),(13,2,'Francisco Del Carmen Carvajal'),(14,2,'General Sir Arthur McGregor'),(15,2,'Guanta'),(16,2,'Independencia'),(17,2,'José Gregorio Monagas'),(18,2,'Juan Antonio Sotillo'),(19,2,'Juan Manuel Cajigal'),(20,2,'Libertad'),(21,2,'Francisco de Miranda'),(22,2,'Pedro María Freites'),(23,2,'Píritu'),(24,2,'San José de Guanipa'),(25,2,'San Juan de Capistrano'),(26,2,'Santa Ana'),(27,2,'Simón Bolívar'),(28,2,'Simón Rodríguez'),(29,3,'Achaguas'),(30,3,'Biruaca'),(31,3,'Muñóz'),(32,3,'Páez'),(33,3,'Pedro Camejo'),(34,3,'Rómulo Gallegos'),(35,3,'San Fernando'),(36,4,'Atanasio Girardot'),(37,4,'Bolívar'),(38,4,'Camatagua'),(39,4,'Francisco Linares Alcántara'),(40,4,'José Ángel Lamas'),(41,4,'José Félix Ribas'),(42,4,'José Rafael Revenga'),(43,4,'Libertador'),(44,4,'Mario Briceño Iragorry'),(45,4,'Ocumare de la Costa de Oro'),(46,4,'San Casimiro'),(47,4,'San Sebastián'),(48,4,'Santiago Mariño'),(49,4,'Santos Michelena'),(50,4,'Sucre'),(51,4,'Tovar'),(52,4,'Urdaneta'),(53,4,'Zamora'),(54,5,'Alberto Arvelo Torrealba'),(55,5,'Andrés Eloy Blanco'),(56,5,'Antonio José de Sucre'),(57,5,'Arismendi'),(58,5,'Barinas'),(59,5,'Bolívar'),(60,5,'Cruz Paredes'),(61,5,'Ezequiel Zamora'),(62,5,'Obispos'),(63,5,'Pedraza'),(64,5,'Rojas'),(65,5,'Sosa'),(66,6,'Caroní'),(67,6,'Cedeño'),(68,6,'El Callao'),(69,6,'Gran Sabana'),(70,6,'Heres'),(71,6,'Piar'),(72,6,'Angostura (Raúl Leoni)'),(73,6,'Roscio'),(74,6,'Sifontes'),(75,6,'Sucre'),(76,6,'Padre Pedro Chien'),(77,7,'Bejuma'),(78,7,'Carlos Arvelo'),(79,7,'Diego Ibarra'),(80,7,'Guacara'),(81,7,'Juan José Mora'),(82,7,'Libertador'),(83,7,'Los Guayos'),(84,7,'Miranda'),(85,7,'Montalbán'),(86,7,'Naguanagua'),(87,7,'Puerto Cabello'),(88,7,'San Diego'),(89,7,'San Joaquín'),(90,7,'Valencia'),(91,8,'Anzoátegui'),(92,8,'Tinaquillo'),(93,8,'Girardot'),(94,8,'Lima Blanco'),(95,8,'Pao de San Juan Bautista'),(96,8,'Ricaurte'),(97,8,'Rómulo Gallegos'),(98,8,'San Carlos'),(99,8,'Tinaco'),(100,9,'Antonio Díaz'),(101,9,'Casacoima'),(102,9,'Pedernales'),(103,9,'Tucupita'),(104,10,'Acosta'),(105,10,'Bolívar'),(106,10,'Buchivacoa'),(107,10,'Cacique Manaure'),(108,10,'Carirubana'),(109,10,'Colina'),(110,10,'Dabajuro'),(111,10,'Democracia'),(112,10,'Falcón'),(113,10,'Federación'),(114,10,'Jacura'),(115,10,'José Laurencio Silva'),(116,10,'Los Taques'),(117,10,'Mauroa'),(118,10,'Miranda'),(119,10,'Monseñor Iturriza'),(120,10,'Palmasola'),(121,10,'Petit'),(122,10,'Píritu'),(123,10,'San Francisco'),(124,10,'Sucre'),(125,10,'Tocópero'),(126,10,'Unión'),(127,10,'Urumaco'),(128,10,'Zamora'),(129,11,'Camaguán'),(130,11,'Chaguaramas'),(131,11,'El Socorro'),(132,11,'José Félix Ribas'),(133,11,'José Tadeo Monagas'),(134,11,'Juan Germán Roscio'),(135,11,'Julián Mellado'),(136,11,'Las Mercedes'),(137,11,'Leonardo Infante'),(138,11,'Pedro Zaraza'),(139,11,'Ortíz'),(140,11,'San Gerónimo de Guayabal'),(141,11,'San José de Guaribe'),(142,11,'Santa María de Ipire'),(143,11,'Sebastián Francisco de Miranda'),(144,12,'Andrés Eloy Blanco'),(145,12,'Crespo'),(146,12,'Iribarren'),(147,12,'Jiménez'),(148,12,'Morán'),(149,12,'Palavecino'),(150,12,'Simón Planas'),(151,12,'Torres'),(152,12,'Urdaneta'),(179,13,'Alberto Adriani'),(180,13,'Andrés Bello'),(181,13,'Antonio Pinto Salinas'),(182,13,'Aricagua'),(183,13,'Arzobispo Chacón'),(184,13,'Campo Elías'),(185,13,'Caracciolo Parra Olmedo'),(186,13,'Cardenal Quintero'),(187,13,'Guaraque'),(188,13,'Julio César Salas'),(189,13,'Justo Briceño'),(190,13,'Libertador'),(191,13,'Miranda'),(192,13,'Obispo Ramos de Lora'),(193,13,'Padre Noguera'),(194,13,'Pueblo Llano'),(195,13,'Rangel'),(196,13,'Rivas Dávila'),(197,13,'Santos Marquina'),(198,13,'Sucre'),(199,13,'Tovar'),(200,13,'Tulio Febres Cordero'),(201,13,'Zea'),(223,14,'Acevedo'),(224,14,'Andrés Bello'),(225,14,'Baruta'),(226,14,'Brión'),(227,14,'Buroz'),(228,14,'Carrizal'),(229,14,'Chacao'),(230,14,'Cristóbal Rojas'),(231,14,'El Hatillo'),(232,14,'Guaicaipuro'),(233,14,'Independencia'),(234,14,'Lander'),(235,14,'Los Salias'),(236,14,'Páez'),(237,14,'Paz Castillo'),(238,14,'Pedro Gual'),(239,14,'Plaza'),(240,14,'Simón Bolívar'),(241,14,'Sucre'),(242,14,'Urdaneta'),(243,14,'Zamora'),(258,15,'Acosta'),(259,15,'Aguasay'),(260,15,'Bolívar'),(261,15,'Caripe'),(262,15,'Cedeño'),(263,15,'Ezequiel Zamora'),(264,15,'Libertador'),(265,15,'Maturín'),(266,15,'Piar'),(267,15,'Punceres'),(268,15,'Santa Bárbara'),(269,15,'Sotillo'),(270,15,'Uracoa'),(271,16,'Antolín del Campo'),(272,16,'Arismendi'),(273,16,'García'),(274,16,'Gómez'),(275,16,'Maneiro'),(276,16,'Marcano'),(277,16,'Mariño'),(278,16,'Península de Macanao'),(279,16,'Tubores'),(280,16,'Villalba'),(281,16,'Díaz'),(282,17,'Agua Blanca'),(283,17,'Araure'),(284,17,'Esteller'),(285,17,'Guanare'),(286,17,'Guanarito'),(287,17,'Monseñor José Vicente de Unda'),(288,17,'Ospino'),(289,17,'Páez'),(290,17,'Papelón'),(291,17,'San Genaro de Boconoíto'),(292,17,'San Rafael de Onoto'),(293,17,'Santa Rosalía'),(294,17,'Sucre'),(295,17,'Turén'),(296,18,'Andrés Eloy Blanco'),(297,18,'Andrés Mata'),(298,18,'Arismendi'),(299,18,'Benítez'),(300,18,'Bermúdez'),(301,18,'Bolívar'),(302,18,'Cajigal'),(303,18,'Cruz Salmerón Acosta'),(304,18,'Libertador'),(305,18,'Mariño'),(306,18,'Mejía'),(307,18,'Montes'),(308,18,'Ribero'),(309,18,'Sucre'),(310,18,'Valdéz'),(341,19,'Andrés Bello'),(342,19,'Antonio Rómulo Costa'),(343,19,'Ayacucho'),(344,19,'Bolívar'),(345,19,'Cárdenas'),(346,19,'Córdoba'),(347,19,'Fernández Feo'),(348,19,'Francisco de Miranda'),(349,19,'García de Hevia'),(350,19,'Guásimos'),(351,19,'Independencia'),(352,19,'Jáuregui'),(353,19,'José María Vargas'),(354,19,'Junín'),(355,19,'Libertad'),(356,19,'Libertador'),(357,19,'Lobatera'),(358,19,'Michelena'),(359,19,'Panamericano'),(360,19,'Pedro María Ureña'),(361,19,'Rafael Urdaneta'),(362,19,'Samuel Darío Maldonado'),(363,19,'San Cristóbal'),(364,19,'Seboruco'),(365,19,'Simón Rodríguez'),(366,19,'Sucre'),(367,19,'Torbes'),(368,19,'Uribante'),(369,19,'San Judas Tadeo'),(370,20,'Andrés Bello'),(371,20,'Boconó'),(372,20,'Bolívar'),(373,20,'Candelaria'),(374,20,'Carache'),(375,20,'Escuque'),(376,20,'José Felipe Márquez Cañizalez'),(377,20,'Juan Vicente Campos Elías'),(378,20,'La Ceiba'),(379,20,'Miranda'),(380,20,'Monte Carmelo'),(381,20,'Motatán'),(382,20,'Pampán'),(383,20,'Pampanito'),(384,20,'Rafael Rangel'),(385,20,'San Rafael de Carvajal'),(386,20,'Sucre'),(387,20,'Trujillo'),(388,20,'Urdaneta'),(389,20,'Valera'),(390,21,'Vargas'),(391,22,'Arístides Bastidas'),(392,22,'Bolívar'),(407,22,'Bruzual'),(408,22,'Cocorote'),(409,22,'Independencia'),(410,22,'José Antonio Páez'),(411,22,'La Trinidad'),(412,22,'Manuel Monge'),(413,22,'Nirgua'),(414,22,'Peña'),(415,22,'San Felipe'),(416,22,'Sucre'),(417,22,'Urachiche'),(418,22,'José Joaquín Veroes'),(441,23,'Almirante Padilla'),(442,23,'Baralt'),(443,23,'Cabimas'),(444,23,'Catatumbo'),(445,23,'Colón'),(446,23,'Francisco Javier Pulgar'),(447,23,'Páez'),(448,23,'Jesús Enrique Losada'),(449,23,'Jesús María Semprún'),(450,23,'La Cañada de Urdaneta'),(451,23,'Lagunillas'),(452,23,'Machiques de Perijá'),(453,23,'Mara'),(454,23,'Maracaibo'),(455,23,'Miranda'),(456,23,'Rosario de Perijá'),(457,23,'San Francisco'),(458,23,'Santa Rita'),(459,23,'Simón Bolívar'),(460,23,'Sucre'),(461,23,'Valmore Rodríguez'),(462,24,'Libertador');
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(250) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `codigo` varchar(5) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Afganistan','93'),(2,'Albania','355'),(3,'Alemania','49'),(4,'Andorra','376'),(5,'Angola','244'),(6,'Anguila','1264'),(7,'Antartida','672'),(8,'Antigua y Barbuda','1268'),(9,'Arabia Saudita','966'),(10,'Argelia','213'),(11,'Argentina','54'),(12,'Armenia','374'),(13,'Aruba','297'),(14,'Australia','61'),(15,'Austria','43'),(16,'Azerbaiyan','994'),(17,'Belgica','32'),(18,'Bahamas','1242'),(19,'Bahrein','973'),(20,'Bangladesh','880'),(21,'Barbados','1246'),(22,'Belice','501'),(23,'Benín','229'),(24,'Bhután','975'),(25,'Bielorrusia','375'),(26,'Birmania','95'),(27,'Bolivia','591'),(28,'Bosnia y Herzegovina','387'),(29,'Botsuana','267'),(30,'Brasil','55'),(31,'Brunéi','673'),(32,'Bulgaria','359'),(33,'Burkina Faso','226'),(34,'Burundi','257'),(35,'Cabo Verde','238'),(36,'Camboya','855'),(37,'Camerún','237'),(38,'Canadá','1'),(39,'Chad','235'),(40,'Chile','56'),(41,'China','86'),(42,'Chipre','357'),(43,'Ciudad del Vaticano','39'),(44,'Colombia','57'),(45,'Comoras','269'),(46,'República del Congo','242'),(47,'República Democrática del Congo','243'),(48,'Corea del Norte','850'),(49,'Corea del Sur','82'),(50,'Costa de Marfil','225'),(51,'Costa Rica','506'),(52,'Croacia','385'),(53,'Cuba','53'),(54,'Curazao','5999'),(55,'Dinamarca','45'),(56,'Dominica','1767'),(57,'Ecuador','593'),(58,'Egipto','20'),(59,'El Salvador','503'),(60,'Emiratos Árabes Unidos','971'),(61,'Eritrea','291'),(62,'Eslovaquia','421'),(63,'Eslovenia','386'),(64,'España','34'),(65,'Estados Unidos de América','1'),(66,'Estonia','372'),(67,'Etiopía','251'),(68,'Filipinas','63'),(69,'Finlandia','358'),(70,'Fiyi','679'),(71,'Francia','33'),(72,'Gabón','241'),(73,'Gambia','220'),(74,'Georgia','995'),(75,'Ghana','233'),(76,'Gibraltar','350'),(77,'Granada','1473'),(78,'Grecia','30'),(79,'Groenlandia','299'),(80,'Guadalupe','590'),(81,'Guam','1671'),(82,'Guatemala','502'),(83,'Guayana Francesa','594'),(84,'Guernsey','44'),(85,'Guinea','224'),(86,'Guinea Ecuatorial','240'),(87,'Guinea-Bissau','245'),(88,'Guyana','592'),(89,'Haití','509'),(90,'Honduras','504'),(91,'Hong kong','852'),(92,'Hungría','36'),(93,'India','91'),(94,'Indonesia','62'),(95,'Irán','98'),(96,'Irak','964'),(97,'Irlanda','353'),(98,'Isla Bouvet','47'),(99,'Isla de Man','44'),(100,'Isla de Navidad','61'),(101,'Isla Norfolk','672'),(102,'Islandia','354'),(103,'Islas Bermudas','1441'),(104,'Islas Caimán','1345'),(105,'Islas Cocos (Keeling)','61'),(106,'Islas Cook','682'),(107,'Islas de Åland','358'),(108,'Islas Feroe','298'),(109,'Islas Georgias del Sur y Sandwich del Sur','500'),(110,'Islas Heard y McDonald','61'),(111,'Islas Maldivas','960'),(112,'Islas Malvinas','500'),(113,'Islas Marianas del Norte','1670'),(114,'Islas Marshall','692'),(115,'Islas Pitcairn','870'),(116,'Islas Salomón','677'),(117,'Islas Turcas y Caicos','1649'),(118,'Islas Ultramarinas Menores de Estados Unidos','246'),(119,'Islas Vírgenes Británicas','1284'),(120,'Islas Vírgenes de los Estados Unidos','1340'),(121,'Israel','972'),(122,'Italia','39'),(123,'Jamaica','1876'),(124,'Japón','81'),(125,'Jersey','44'),(126,'Jordania','962'),(127,'Kazajistán','7'),(128,'Kenia','254'),(129,'Kirguistán','996'),(130,'Kiribati','686'),(131,'Kuwait','965'),(132,'Líbano','961'),(133,'Laos','856'),(134,'Lesoto','266'),(135,'Letonia','371'),(136,'Liberia','231'),(137,'Libia','218'),(138,'Liechtenstein','423'),(139,'Lituania','370'),(140,'Luxemburgo','352'),(141,'México','52'),(142,'Mónaco','377'),(143,'Macao','853'),(144,'Macedônia','389'),(145,'Madagascar','261'),(146,'Malasia','60'),(147,'Malawi','265'),(148,'Mali','223'),(149,'Malta','356'),(150,'Marruecos','212'),(151,'Martinica','596'),(152,'Mauricio','230'),(153,'Mauritania','222'),(154,'Mayotte','262'),(155,'Micronesia','691'),(156,'Moldavia','373'),(157,'Mongolia','976'),(158,'Montenegro','382'),(159,'Montserrat','1664'),(160,'Mozambique','258'),(161,'Namibia','264'),(162,'Nauru','674'),(163,'Nepal','977'),(164,'Nicaragua','505'),(165,'Niger','227'),(166,'Nigeria','234'),(167,'Niue','683'),(168,'Noruega','47'),(169,'Nueva Caledonia','687'),(170,'Nueva Zelanda','64'),(171,'Omán','968'),(172,'Países Bajos','31'),(173,'Pakistán','92'),(174,'Palau','680'),(175,'Palestina','970'),(176,'Panamá','507'),(177,'Papúa Nueva Guinea','675'),(178,'Paraguay','595'),(179,'Perú','51'),(180,'Polinesia Francesa','689'),(181,'Polonia','48'),(182,'Portugal','351'),(183,'Puerto Rico','1'),(184,'Qatar','974'),(185,'Reino Unido','44'),(186,'República Centroafricana','236'),(187,'República Checa','420'),(188,'República Dominicana','1809'),(189,'República de Sudán del Sur','211'),(190,'Reunión','262'),(191,'Ruanda','250'),(192,'Rumanía','40'),(193,'Rusia','7'),(194,'Sahara Occidental','212'),(195,'Samoa','685'),(196,'Samoa Americana','1684'),(197,'San Bartolomé','590'),(198,'San Cristóbal y Nieves','1869'),(199,'San Marino','378'),(200,'San Martín (Francia)','1599'),(201,'San Pedro y Miquelón','508'),(202,'San Vicente y las Granadinas','1784'),(203,'Santa Elena','290'),(204,'Santa Lucía','1758'),(205,'Santo Tomé y Príncipe','239'),(206,'Senegal','221'),(207,'Serbia','381'),(208,'Seychelles','248'),(209,'Sierra Leona','232'),(210,'Singapur','65'),(211,'Sint Maarten','1721'),(212,'Siria','963'),(213,'Somalia','252'),(214,'Sri lanka','94'),(215,'Sudáfrica','27'),(216,'Sudán','249'),(217,'Suecia','46'),(218,'Suiza','41'),(219,'Surinám','597'),(220,'Svalbard y Jan Mayen','47'),(221,'Swazilandia','268'),(222,'Tayikistán','992'),(223,'Tailandia','66'),(224,'Taiwán','886'),(225,'Tanzania','255'),(226,'Territorio Británico del Océano Índico','246'),(227,'Territorios Australes y Antárticas Franceses','33'),(228,'Timor Oriental','670'),(229,'Togo','228'),(230,'Tokelau','690'),(231,'Tonga','676'),(232,'Trinidad y Tobago','1868'),(233,'Tunez','216'),(234,'Turkmenistán','993'),(235,'Turquía','90'),(236,'Tuvalu','688'),(237,'Ucrania','380'),(238,'Uganda','256'),(239,'Uruguay','598'),(240,'Uzbekistán','998'),(241,'Vanuatu','678'),(242,'Venezuela','58'),(243,'Vietnam','84'),(244,'Wallis y Futuna','681'),(245,'Yemen','967'),(246,'Yibuti','253'),(247,'Zambia','260'),(248,'Zimbabue','263');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parroquias`
--

DROP TABLE IF EXISTS `parroquias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parroquias` (
  `id_parroquia` int(11) NOT NULL AUTO_INCREMENT,
  `id_municipio` int(11) NOT NULL,
  `parroquia` varchar(250) NOT NULL,
  PRIMARY KEY (`id_parroquia`),
  KEY `id_municipio` (`id_municipio`),
  CONSTRAINT `parroquias_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1139 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parroquias`
--

LOCK TABLES `parroquias` WRITE;
/*!40000 ALTER TABLE `parroquias` DISABLE KEYS */;
INSERT INTO `parroquias` VALUES (1,1,'Alto Orinoco'),(2,1,'Huachamacare Acanaña'),(3,1,'Marawaka Toky Shamanaña'),(4,1,'Mavaka Mavaka'),(5,1,'Sierra Parima Parimabé'),(6,2,'Ucata Laja Lisa'),(7,2,'Yapacana Macuruco'),(8,2,'Caname Guarinuma'),(9,3,'Fernando Girón Tovar'),(10,3,'Luis Alberto Gómez'),(11,3,'Pahueña Limón de Parhueña'),(12,3,'Platanillal Platanillal'),(13,4,'Samariapo'),(14,4,'Sipapo'),(15,4,'Munduapo'),(16,4,'Guayapo'),(17,5,'Alto Ventuari'),(18,5,'Medio Ventuari'),(19,5,'Bajo Ventuari'),(20,6,'Victorino'),(21,6,'Comunidad'),(22,7,'Casiquiare'),(23,7,'Cocuy'),(24,7,'San Carlos de Río Negro'),(25,7,'Solano'),(26,8,'Anaco'),(27,8,'San Joaquín'),(28,9,'Cachipo'),(29,9,'Aragua de Barcelona'),(30,11,'Lechería'),(31,11,'El Morro'),(32,12,'Puerto Píritu'),(33,12,'San Miguel'),(34,12,'Sucre'),(35,13,'Valle de Guanape'),(36,13,'Santa Bárbara'),(37,14,'El Chaparro'),(38,14,'Tomás Alfaro'),(39,14,'Calatrava'),(40,15,'Guanta'),(41,15,'Chorrerón'),(42,16,'Mamo'),(43,16,'Soledad'),(44,17,'Mapire'),(45,17,'Piar'),(46,17,'Santa Clara'),(47,17,'San Diego de Cabrutica'),(48,17,'Uverito'),(49,17,'Zuata'),(50,18,'Puerto La Cruz'),(51,18,'Pozuelos'),(52,19,'Onoto'),(53,19,'San Pablo'),(54,20,'San Mateo'),(55,20,'El Carito'),(56,20,'Santa Inés'),(57,20,'La Romereña'),(58,21,'Atapirire'),(59,21,'Boca del Pao'),(60,21,'El Pao'),(61,21,'Pariaguán'),(62,22,'Cantaura'),(63,22,'Libertador'),(64,22,'Santa Rosa'),(65,22,'Urica'),(66,23,'Píritu'),(67,23,'San Francisco'),(68,24,'San José de Guanipa'),(69,25,'Boca de Uchire'),(70,25,'Boca de Chávez'),(71,26,'Pueblo Nuevo'),(72,26,'Santa Ana'),(73,27,'Bergantín'),(74,27,'Caigua'),(75,27,'El Carmen'),(76,27,'El Pilar'),(77,27,'Naricual'),(78,27,'San Crsitóbal'),(79,28,'Edmundo Barrios'),(80,28,'Miguel Otero Silva'),(81,29,'Achaguas'),(82,29,'Apurito'),(83,29,'El Yagual'),(84,29,'Guachara'),(85,29,'Mucuritas'),(86,29,'Queseras del medio'),(87,30,'Biruaca'),(88,31,'Bruzual'),(89,31,'Mantecal'),(90,31,'Quintero'),(91,31,'Rincón Hondo'),(92,31,'San Vicente'),(93,32,'Guasdualito'),(94,32,'Aramendi'),(95,32,'El Amparo'),(96,32,'San Camilo'),(97,32,'Urdaneta'),(98,33,'San Juan de Payara'),(99,33,'Codazzi'),(100,33,'Cunaviche'),(101,34,'Elorza'),(102,34,'La Trinidad'),(103,35,'San Fernando'),(104,35,'El Recreo'),(105,35,'Peñalver'),(106,35,'San Rafael de Atamaica'),(107,36,'Pedro José Ovalles'),(108,36,'Joaquín Crespo'),(109,36,'José Casanova Godoy'),(110,36,'Madre María de San José'),(111,36,'Andrés Eloy Blanco'),(112,36,'Los Tacarigua'),(113,36,'Las Delicias'),(114,36,'Choroní'),(115,37,'Bolívar'),(116,38,'Camatagua'),(117,38,'Carmen de Cura'),(118,39,'Santa Rita'),(119,39,'Francisco de Miranda'),(120,39,'Moseñor Feliciano González'),(121,40,'Santa Cruz'),(122,41,'José Félix Ribas'),(123,41,'Castor Nieves Ríos'),(124,41,'Las Guacamayas'),(125,41,'Pao de Zárate'),(126,41,'Zuata'),(127,42,'José Rafael Revenga'),(128,43,'Palo Negro'),(129,43,'San Martín de Porres'),(130,44,'El Limón'),(131,44,'Caña de Azúcar'),(132,45,'Ocumare de la Costa'),(133,46,'San Casimiro'),(134,46,'Güiripa'),(135,46,'Ollas de Caramacate'),(136,46,'Valle Morín'),(137,47,'San Sebastían'),(138,48,'Turmero'),(139,48,'Arevalo Aponte'),(140,48,'Chuao'),(141,48,'Samán de Güere'),(142,48,'Alfredo Pacheco Miranda'),(143,49,'Santos Michelena'),(144,49,'Tiara'),(145,50,'Cagua'),(146,50,'Bella Vista'),(147,51,'Tovar'),(148,52,'Urdaneta'),(149,52,'Las Peñitas'),(150,52,'San Francisco de Cara'),(151,52,'Taguay'),(152,53,'Zamora'),(153,53,'Magdaleno'),(154,53,'San Francisco de Asís'),(155,53,'Valles de Tucutunemo'),(156,53,'Augusto Mijares'),(157,54,'Sabaneta'),(158,54,'Juan Antonio Rodríguez Domínguez'),(159,55,'El Cantón'),(160,55,'Santa Cruz de Guacas'),(161,55,'Puerto Vivas'),(162,56,'Ticoporo'),(163,56,'Nicolás Pulido'),(164,56,'Andrés Bello'),(165,57,'Arismendi'),(166,57,'Guadarrama'),(167,57,'La Unión'),(168,57,'San Antonio'),(169,58,'Barinas'),(170,58,'Alberto Arvelo Larriva'),(171,58,'San Silvestre'),(172,58,'Santa Inés'),(173,58,'Santa Lucía'),(174,58,'Torumos'),(175,58,'El Carmen'),(176,58,'Rómulo Betancourt'),(177,58,'Corazón de Jesús'),(178,58,'Ramón Ignacio Méndez'),(179,58,'Alto Barinas'),(180,58,'Manuel Palacio Fajardo'),(181,58,'Juan Antonio Rodríguez Domínguez'),(182,58,'Dominga Ortiz de Páez'),(183,59,'Barinitas'),(184,59,'Altamira de Cáceres'),(185,59,'Calderas'),(186,60,'Barrancas'),(187,60,'El Socorro'),(188,60,'Mazparrito'),(189,61,'Santa Bárbara'),(190,61,'Pedro Briceño Méndez'),(191,61,'Ramón Ignacio Méndez'),(192,61,'José Ignacio del Pumar'),(193,62,'Obispos'),(194,62,'Guasimitos'),(195,62,'El Real'),(196,62,'La Luz'),(197,63,'Ciudad Bolívia'),(198,63,'José Ignacio Briceño'),(199,63,'José Félix Ribas'),(200,63,'Páez'),(201,64,'Libertad'),(202,64,'Dolores'),(203,64,'Santa Rosa'),(204,64,'Palacio Fajardo'),(205,65,'Ciudad de Nutrias'),(206,65,'El Regalo'),(207,65,'Puerto Nutrias'),(208,65,'Santa Catalina'),(209,66,'Cachamay'),(210,66,'Chirica'),(211,66,'Dalla Costa'),(212,66,'Once de Abril'),(213,66,'Simón Bolívar'),(214,66,'Unare'),(215,66,'Universidad'),(216,66,'Vista al Sol'),(217,66,'Pozo Verde'),(218,66,'Yocoima'),(219,66,'5 de Julio'),(220,67,'Cedeño'),(221,67,'Altagracia'),(222,67,'Ascensión Farreras'),(223,67,'Guaniamo'),(224,67,'La Urbana'),(225,67,'Pijiguaos'),(226,68,'El Callao'),(227,69,'Gran Sabana'),(228,69,'Ikabarú'),(229,70,'Catedral'),(230,70,'Zea'),(231,70,'Orinoco'),(232,70,'José Antonio Páez'),(233,70,'Marhuanta'),(234,70,'Agua Salada'),(235,70,'Vista Hermosa'),(236,70,'La Sabanita'),(237,70,'Panapana'),(238,71,'Andrés Eloy Blanco'),(239,71,'Pedro Cova'),(240,72,'Raúl Leoni'),(241,72,'Barceloneta'),(242,72,'Santa Bárbara'),(243,72,'San Francisco'),(244,73,'Roscio'),(245,73,'Salóm'),(246,74,'Sifontes'),(247,74,'Dalla Costa'),(248,74,'San Isidro'),(249,75,'Sucre'),(250,75,'Aripao'),(251,75,'Guarataro'),(252,75,'Las Majadas'),(253,75,'Moitaco'),(254,76,'Padre Pedro Chien'),(255,76,'Río Grande'),(256,77,'Bejuma'),(257,77,'Canoabo'),(258,77,'Simón Bolívar'),(259,78,'Güigüe'),(260,78,'Carabobo'),(261,78,'Tacarigua'),(262,79,'Mariara'),(263,79,'Aguas Calientes'),(264,80,'Ciudad Alianza'),(265,80,'Guacara'),(266,80,'Yagua'),(267,81,'Morón'),(268,81,'Yagua'),(269,82,'Tocuyito'),(270,82,'Independencia'),(271,83,'Los Guayos'),(272,84,'Miranda'),(273,85,'Montalbán'),(274,86,'Naguanagua'),(275,87,'Bartolomé Salóm'),(276,87,'Democracia'),(277,87,'Fraternidad'),(278,87,'Goaigoaza'),(279,87,'Juan José Flores'),(280,87,'Unión'),(281,87,'Borburata'),(282,87,'Patanemo'),(283,88,'San Diego'),(284,89,'San Joaquín'),(285,90,'Candelaria'),(286,90,'Catedral'),(287,90,'El Socorro'),(288,90,'Miguel Peña'),(289,90,'Rafael Urdaneta'),(290,90,'San Blas'),(291,90,'San José'),(292,90,'Santa Rosa'),(293,90,'Negro Primero'),(294,91,'Cojedes'),(295,91,'Juan de Mata Suárez'),(296,92,'Tinaquillo'),(297,93,'El Baúl'),(298,93,'Sucre'),(299,94,'La Aguadita'),(300,94,'Macapo'),(301,95,'El Pao'),(302,96,'El Amparo'),(303,96,'Libertad de Cojedes'),(304,97,'Rómulo Gallegos'),(305,98,'San Carlos de Austria'),(306,98,'Juan Ángel Bravo'),(307,98,'Manuel Manrique'),(308,99,'General en Jefe José Laurencio Silva'),(309,100,'Curiapo'),(310,100,'Almirante Luis Brión'),(311,100,'Francisco Aniceto Lugo'),(312,100,'Manuel Renaud'),(313,100,'Padre Barral'),(314,100,'Santos de Abelgas'),(315,101,'Imataca'),(316,101,'Cinco de Julio'),(317,101,'Juan Bautista Arismendi'),(318,101,'Manuel Piar'),(319,101,'Rómulo Gallegos'),(320,102,'Pedernales'),(321,102,'Luis Beltrán Prieto Figueroa'),(322,103,'San José (Delta Amacuro)'),(323,103,'José Vidal Marcano'),(324,103,'Juan Millán'),(325,103,'Leonardo Ruíz Pineda'),(326,103,'Mariscal Antonio José de Sucre'),(327,103,'Monseñor Argimiro García'),(328,103,'San Rafael (Delta Amacuro)'),(329,103,'Virgen del Valle'),(330,10,'Clarines'),(331,10,'Guanape'),(332,10,'Sabana de Uchire'),(333,104,'Capadare'),(334,104,'La Pastora'),(335,104,'Libertador'),(336,104,'San Juan de los Cayos'),(337,105,'Aracua'),(338,105,'La Peña'),(339,105,'San Luis'),(340,106,'Bariro'),(341,106,'Borojó'),(342,106,'Capatárida'),(343,106,'Guajiro'),(344,106,'Seque'),(345,106,'Zazárida'),(346,106,'Valle de Eroa'),(347,107,'Cacique Manaure'),(348,108,'Norte'),(349,108,'Carirubana'),(350,108,'Santa Ana'),(351,108,'Urbana Punta Cardón'),(352,109,'La Vela de Coro'),(353,109,'Acurigua'),(354,109,'Guaibacoa'),(355,109,'Las Calderas'),(356,109,'Macoruca'),(357,110,'Dabajuro'),(358,111,'Agua Clara'),(359,111,'Avaria'),(360,111,'Pedregal'),(361,111,'Piedra Grande'),(362,111,'Purureche'),(363,112,'Adaure'),(364,112,'Adícora'),(365,112,'Baraived'),(366,112,'Buena Vista'),(367,112,'Jadacaquiva'),(368,112,'El Vínculo'),(369,112,'El Hato'),(370,112,'Moruy'),(371,112,'Pueblo Nuevo'),(372,113,'Agua Larga'),(373,113,'El Paují'),(374,113,'Independencia'),(375,113,'Mapararí'),(376,114,'Agua Linda'),(377,114,'Araurima'),(378,114,'Jacura'),(379,115,'Tucacas'),(380,115,'Boca de Aroa'),(381,116,'Los Taques'),(382,116,'Judibana'),(383,117,'Mene de Mauroa'),(384,117,'San Félix'),(385,117,'Casigua'),(386,118,'Guzmán Guillermo'),(387,118,'Mitare'),(388,118,'Río Seco'),(389,118,'Sabaneta'),(390,118,'San Antonio'),(391,118,'San Gabriel'),(392,118,'Santa Ana'),(393,119,'Boca del Tocuyo'),(394,119,'Chichiriviche'),(395,119,'Tocuyo de la Costa'),(396,120,'Palmasola'),(397,121,'Cabure'),(398,121,'Colina'),(399,121,'Curimagua'),(400,122,'San José de la Costa'),(401,122,'Píritu'),(402,123,'San Francisco'),(403,124,'Sucre'),(404,124,'Pecaya'),(405,125,'Tocópero'),(406,126,'El Charal'),(407,126,'Las Vegas del Tuy'),(408,126,'Santa Cruz de Bucaral'),(409,127,'Bruzual'),(410,127,'Urumaco'),(411,128,'Puerto Cumarebo'),(412,128,'La Ciénaga'),(413,128,'La Soledad'),(414,128,'Pueblo Cumarebo'),(415,128,'Zazárida'),(416,113,'Churuguara'),(417,129,'Camaguán'),(418,129,'Puerto Miranda'),(419,129,'Uverito'),(420,130,'Chaguaramas'),(421,131,'El Socorro'),(422,132,'Tucupido'),(423,132,'San Rafael de Laya'),(424,133,'Altagracia de Orituco'),(425,133,'San Rafael de Orituco'),(426,133,'San Francisco Javier de Lezama'),(427,133,'Paso Real de Macaira'),(428,133,'Carlos Soublette'),(429,133,'San Francisco de Macaira'),(430,133,'Libertad de Orituco'),(431,134,'Cantaclaro'),(432,134,'San Juan de los Morros'),(433,134,'Parapara'),(434,135,'El Sombrero'),(435,135,'Sosa'),(436,136,'Las Mercedes'),(437,136,'Cabruta'),(438,136,'Santa Rita de Manapire'),(439,137,'Valle de la Pascua'),(440,137,'Espino'),(441,138,'San José de Unare'),(442,138,'Zaraza'),(443,139,'San José de Tiznados'),(444,139,'San Francisco de Tiznados'),(445,139,'San Lorenzo de Tiznados'),(446,139,'Ortiz'),(447,140,'Guayabal'),(448,140,'Cazorla'),(449,141,'San José de Guaribe'),(450,141,'Uveral'),(451,142,'Santa María de Ipire'),(452,142,'Altamira'),(453,143,'El Calvario'),(454,143,'El Rastro'),(455,143,'Guardatinajas'),(456,143,'Capital Urbana Calabozo'),(457,144,'Quebrada Honda de Guache'),(458,144,'Pío Tamayo'),(459,144,'Yacambú'),(460,145,'Fréitez'),(461,145,'José María Blanco'),(462,146,'Catedral'),(463,146,'Concepción'),(464,146,'El Cují'),(465,146,'Juan de Villegas'),(466,146,'Santa Rosa'),(467,146,'Tamaca'),(468,146,'Unión'),(469,146,'Aguedo Felipe Alvarado'),(470,146,'Buena Vista'),(471,146,'Juárez'),(472,147,'Juan Bautista Rodríguez'),(473,147,'Cuara'),(474,147,'Diego de Lozada'),(475,147,'Paraíso de San José'),(476,147,'San Miguel'),(477,147,'Tintorero'),(478,147,'José Bernardo Dorante'),(479,147,'Coronel Mariano Peraza '),(480,148,'Bolívar'),(481,148,'Anzoátegui'),(482,148,'Guarico'),(483,148,'Hilario Luna y Luna'),(484,148,'Humocaro Alto'),(485,148,'Humocaro Bajo'),(486,148,'La Candelaria'),(487,148,'Morán'),(488,149,'Cabudare'),(489,149,'José Gregorio Bastidas'),(490,149,'Agua Viva'),(491,150,'Sarare'),(492,150,'Buría'),(493,150,'Gustavo Vegas León'),(494,151,'Trinidad Samuel'),(495,151,'Antonio Díaz'),(496,151,'Camacaro'),(497,151,'Castañeda'),(498,151,'Cecilio Zubillaga'),(499,151,'Chiquinquirá'),(500,151,'El Blanco'),(501,151,'Espinoza de los Monteros'),(502,151,'Lara'),(503,151,'Las Mercedes'),(504,151,'Manuel Morillo'),(505,151,'Montaña Verde'),(506,151,'Montes de Oca'),(507,151,'Torres'),(508,151,'Heriberto Arroyo'),(509,151,'Reyes Vargas'),(510,151,'Altagracia'),(511,152,'Siquisique'),(512,152,'Moroturo'),(513,152,'San Miguel'),(514,152,'Xaguas'),(515,179,'Presidente Betancourt'),(516,179,'Presidente Páez'),(517,179,'Presidente Rómulo Gallegos'),(518,179,'Gabriel Picón González'),(519,179,'Héctor Amable Mora'),(520,179,'José Nucete Sardi'),(521,179,'Pulido Méndez'),(522,180,'La Azulita'),(523,181,'Santa Cruz de Mora'),(524,181,'Mesa Bolívar'),(525,181,'Mesa de Las Palmas'),(526,182,'Aricagua'),(527,182,'San Antonio'),(528,183,'Canagua'),(529,183,'Capurí'),(530,183,'Chacantá'),(531,183,'El Molino'),(532,183,'Guaimaral'),(533,183,'Mucutuy'),(534,183,'Mucuchachí'),(535,184,'Fernández Peña'),(536,184,'Matriz'),(537,184,'Montalbán'),(538,184,'Acequias'),(539,184,'Jají'),(540,184,'La Mesa'),(541,184,'San José del Sur'),(542,185,'Tucaní'),(543,185,'Florencio Ramírez'),(544,186,'Santo Domingo'),(545,186,'Las Piedras'),(546,187,'Guaraque'),(547,187,'Mesa de Quintero'),(548,187,'Río Negro'),(549,188,'Arapuey'),(550,188,'Palmira'),(551,189,'San Cristóbal de Torondoy'),(552,189,'Torondoy'),(553,190,'Antonio Spinetti Dini'),(554,190,'Arias'),(555,190,'Caracciolo Parra Pérez'),(556,190,'Domingo Peña'),(557,190,'El Llano'),(558,190,'Gonzalo Picón Febres'),(559,190,'Jacinto Plaza'),(560,190,'Juan Rodríguez Suárez'),(561,190,'Lasso de la Vega'),(562,190,'Mariano Picón Salas'),(563,190,'Milla'),(564,190,'Osuna Rodríguez'),(565,190,'Sagrario'),(566,190,'El Morro'),(567,190,'Los Nevados'),(568,191,'Andrés Eloy Blanco'),(569,191,'La Venta'),(570,191,'Piñango'),(571,191,'Timotes'),(572,192,'Eloy Paredes'),(573,192,'San Rafael de Alcázar'),(574,192,'Santa Elena de Arenales'),(575,193,'Santa María de Caparo'),(576,194,'Pueblo Llano'),(577,195,'Cacute'),(578,195,'La Toma'),(579,195,'Mucuchíes'),(580,195,'Mucurubá'),(581,195,'San Rafael'),(582,196,'Gerónimo Maldonado'),(583,196,'Bailadores'),(584,197,'Tabay'),(585,198,'Chiguará'),(586,198,'Estánquez'),(587,198,'Lagunillas'),(588,198,'La Trampa'),(589,198,'Pueblo Nuevo del Sur'),(590,198,'San Juan'),(591,199,'El Amparo'),(592,199,'El Llano'),(593,199,'San Francisco'),(594,199,'Tovar'),(595,200,'Independencia'),(596,200,'María de la Concepción Palacios Blanco'),(597,200,'Nueva Bolivia'),(598,200,'Santa Apolonia'),(599,201,'Caño El Tigre'),(600,201,'Zea'),(601,223,'Aragüita'),(602,223,'Arévalo González'),(603,223,'Capaya'),(604,223,'Caucagua'),(605,223,'Panaquire'),(606,223,'Ribas'),(607,223,'El Café'),(608,223,'Marizapa'),(609,224,'Cumbo'),(610,224,'San José de Barlovento'),(611,225,'El Cafetal'),(612,225,'Las Minas'),(613,225,'Nuestra Señora del Rosario'),(614,226,'Higuerote'),(615,226,'Curiepe'),(616,226,'Tacarigua de Brión'),(617,227,'Mamporal'),(618,228,'Carrizal'),(619,229,'Chacao'),(620,230,'Charallave'),(621,230,'Las Brisas'),(622,231,'El Hatillo'),(623,232,'Altagracia de la Montaña'),(624,232,'Cecilio Acosta'),(625,232,'Los Teques'),(626,232,'El Jarillo'),(627,232,'San Pedro'),(628,232,'Tácata'),(629,232,'Paracotos'),(630,233,'Cartanal'),(631,233,'Santa Teresa del Tuy'),(632,234,'La Democracia'),(633,234,'Ocumare del Tuy'),(634,234,'Santa Bárbara'),(635,235,'San Antonio de los Altos'),(636,236,'Río Chico'),(637,236,'El Guapo'),(638,236,'Tacarigua de la Laguna'),(639,236,'Paparo'),(640,236,'San Fernando del Guapo'),(641,237,'Santa Lucía del Tuy'),(642,238,'Cúpira'),(643,238,'Machurucuto'),(644,239,'Guarenas'),(645,240,'San Antonio de Yare'),(646,240,'San Francisco de Yare'),(647,241,'Leoncio Martínez'),(648,241,'Petare'),(649,241,'Caucagüita'),(650,241,'Filas de Mariche'),(651,241,'La Dolorita'),(652,242,'Cúa'),(653,242,'Nueva Cúa'),(654,243,'Guatire'),(655,243,'Bolívar'),(656,258,'San Antonio de Maturín'),(657,258,'San Francisco de Maturín'),(658,259,'Aguasay'),(659,260,'Caripito'),(660,261,'El Guácharo'),(661,261,'La Guanota'),(662,261,'Sabana de Piedra'),(663,261,'San Agustín'),(664,261,'Teresen'),(665,261,'Caripe'),(666,262,'Areo'),(667,262,'Capital Cedeño'),(668,262,'San Félix de Cantalicio'),(669,262,'Viento Fresco'),(670,263,'El Tejero'),(671,263,'Punta de Mata'),(672,264,'Chaguaramas'),(673,264,'Las Alhuacas'),(674,264,'Tabasca'),(675,264,'Temblador'),(676,265,'Alto de los Godos'),(677,265,'Boquerón'),(678,265,'Las Cocuizas'),(679,265,'La Cruz'),(680,265,'San Simón'),(681,265,'El Corozo'),(682,265,'El Furrial'),(683,265,'Jusepín'),(684,265,'La Pica'),(685,265,'San Vicente'),(686,266,'Aparicio'),(687,266,'Aragua de Maturín'),(688,266,'Chaguamal'),(689,266,'El Pinto'),(690,266,'Guanaguana'),(691,266,'La Toscana'),(692,266,'Taguaya'),(693,267,'Cachipo'),(694,267,'Quiriquire'),(695,268,'Santa Bárbara'),(696,269,'Barrancas'),(697,269,'Los Barrancos de Fajardo'),(698,270,'Uracoa'),(699,271,'Antolín del Campo'),(700,272,'Arismendi'),(701,273,'García'),(702,273,'Francisco Fajardo'),(703,274,'Bolívar'),(704,274,'Guevara'),(705,274,'Matasiete'),(706,274,'Santa Ana'),(707,274,'Sucre'),(708,275,'Aguirre'),(709,275,'Maneiro'),(710,276,'Adrián'),(711,276,'Juan Griego'),(712,276,'Yaguaraparo'),(713,277,'Porlamar'),(714,278,'San Francisco de Macanao'),(715,278,'Boca de Río'),(716,279,'Tubores'),(717,279,'Los Baleales'),(718,280,'Vicente Fuentes'),(719,280,'Villalba'),(720,281,'San Juan Bautista'),(721,281,'Zabala'),(722,283,'Capital Araure'),(723,283,'Río Acarigua'),(724,284,'Capital Esteller'),(725,284,'Uveral'),(726,285,'Guanare'),(727,285,'Córdoba'),(728,285,'San José de la Montaña'),(729,285,'San Juan de Guanaguanare'),(730,285,'Virgen de la Coromoto'),(731,286,'Guanarito'),(732,286,'Trinidad de la Capilla'),(733,286,'Divina Pastora'),(734,287,'Monseñor José Vicente de Unda'),(735,287,'Peña Blanca'),(736,288,'Capital Ospino'),(737,288,'Aparición'),(738,288,'La Estación'),(739,289,'Páez'),(740,289,'Payara'),(741,289,'Pimpinela'),(742,289,'Ramón Peraza'),(743,290,'Papelón'),(744,290,'Caño Delgadito'),(745,291,'San Genaro de Boconoito'),(746,291,'Antolín Tovar'),(747,292,'San Rafael de Onoto'),(748,292,'Santa Fe'),(749,292,'Thermo Morles'),(750,293,'Santa Rosalía'),(751,293,'Florida'),(752,294,'Sucre'),(753,294,'Concepción'),(754,294,'San Rafael de Palo Alzado'),(755,294,'Uvencio Antonio Velásquez'),(756,294,'San José de Saguaz'),(757,294,'Villa Rosa'),(758,295,'Turén'),(759,295,'Canelones'),(760,295,'Santa Cruz'),(761,295,'San Isidro Labrador'),(762,296,'Mariño'),(763,296,'Rómulo Gallegos'),(764,297,'San José de Aerocuar'),(765,297,'Tavera Acosta'),(766,298,'Río Caribe'),(767,298,'Antonio José de Sucre'),(768,298,'El Morro de Puerto Santo'),(769,298,'Puerto Santo'),(770,298,'San Juan de las Galdonas'),(771,299,'El Pilar'),(772,299,'El Rincón'),(773,299,'General Francisco Antonio Váquez'),(774,299,'Guaraúnos'),(775,299,'Tunapuicito'),(776,299,'Unión'),(777,300,'Santa Catalina'),(778,300,'Santa Rosa'),(779,300,'Santa Teresa'),(780,300,'Bolívar'),(781,300,'Maracapana'),(782,302,'Libertad'),(783,302,'El Paujil'),(784,302,'Yaguaraparo'),(785,303,'Cruz Salmerón Acosta'),(786,303,'Chacopata'),(787,303,'Manicuare'),(788,304,'Tunapuy'),(789,304,'Campo Elías'),(790,305,'Irapa'),(791,305,'Campo Claro'),(792,305,'Maraval'),(793,305,'San Antonio de Irapa'),(794,305,'Soro'),(795,306,'Mejía'),(796,307,'Cumanacoa'),(797,307,'Arenas'),(798,307,'Aricagua'),(799,307,'Cogollar'),(800,307,'San Fernando'),(801,307,'San Lorenzo'),(802,308,'Villa Frontado (Muelle de Cariaco)'),(803,308,'Catuaro'),(804,308,'Rendón'),(805,308,'San Cruz'),(806,308,'Santa María'),(807,309,'Altagracia'),(808,309,'Santa Inés'),(809,309,'Valentín Valiente'),(810,309,'Ayacucho'),(811,309,'San Juan'),(812,309,'Raúl Leoni'),(813,309,'Gran Mariscal'),(814,310,'Cristóbal Colón'),(815,310,'Bideau'),(816,310,'Punta de Piedras'),(817,310,'Güiria'),(818,341,'Andrés Bello'),(819,342,'Antonio Rómulo Costa'),(820,343,'Ayacucho'),(821,343,'Rivas Berti'),(822,343,'San Pedro del Río'),(823,344,'Bolívar'),(824,344,'Palotal'),(825,344,'General Juan Vicente Gómez'),(826,344,'Isaías Medina Angarita'),(827,345,'Cárdenas'),(828,345,'Amenodoro Ángel Lamus'),(829,345,'La Florida'),(830,346,'Córdoba'),(831,347,'Fernández Feo'),(832,347,'Alberto Adriani'),(833,347,'Santo Domingo'),(834,348,'Francisco de Miranda'),(835,349,'García de Hevia'),(836,349,'Boca de Grita'),(837,349,'José Antonio Páez'),(838,350,'Guásimos'),(839,351,'Independencia'),(840,351,'Juan Germán Roscio'),(841,351,'Román Cárdenas'),(842,352,'Jáuregui'),(843,352,'Emilio Constantino Guerrero'),(844,352,'Monseñor Miguel Antonio Salas'),(845,353,'José María Vargas'),(846,354,'Junín'),(847,354,'La Petrólea'),(848,354,'Quinimarí'),(849,354,'Bramón'),(850,355,'Libertad'),(851,355,'Cipriano Castro'),(852,355,'Manuel Felipe Rugeles'),(853,356,'Libertador'),(854,356,'Doradas'),(855,356,'Emeterio Ochoa'),(856,356,'San Joaquín de Navay'),(857,357,'Lobatera'),(858,357,'Constitución'),(859,358,'Michelena'),(860,359,'Panamericano'),(861,359,'La Palmita'),(862,360,'Pedro María Ureña'),(863,360,'Nueva Arcadia'),(864,361,'Delicias'),(865,361,'Pecaya'),(866,362,'Samuel Darío Maldonado'),(867,362,'Boconó'),(868,362,'Hernández'),(869,363,'La Concordia'),(870,363,'San Juan Bautista'),(871,363,'Pedro María Morantes'),(872,363,'San Sebastián'),(873,363,'Dr. Francisco Romero Lobo'),(874,364,'Seboruco'),(875,365,'Simón Rodríguez'),(876,366,'Sucre'),(877,366,'Eleazar López Contreras'),(878,366,'San Pablo'),(879,367,'Torbes'),(880,368,'Uribante'),(881,368,'Cárdenas'),(882,368,'Juan Pablo Peñalosa'),(883,368,'Potosí'),(884,369,'San Judas Tadeo'),(885,370,'Araguaney'),(886,370,'El Jaguito'),(887,370,'La Esperanza'),(888,370,'Santa Isabel'),(889,371,'Boconó'),(890,371,'El Carmen'),(891,371,'Mosquey'),(892,371,'Ayacucho'),(893,371,'Burbusay'),(894,371,'General Ribas'),(895,371,'Guaramacal'),(896,371,'Vega de Guaramacal'),(897,371,'Monseñor Jáuregui'),(898,371,'Rafael Rangel'),(899,371,'San Miguel'),(900,371,'San José'),(901,372,'Sabana Grande'),(902,372,'Cheregüé'),(903,372,'Granados'),(904,373,'Arnoldo Gabaldón'),(905,373,'Bolivia'),(906,373,'Carrillo'),(907,373,'Cegarra'),(908,373,'Chejendé'),(909,373,'Manuel Salvador Ulloa'),(910,373,'San José'),(911,374,'Carache'),(912,374,'La Concepción'),(913,374,'Cuicas'),(914,374,'Panamericana'),(915,374,'Santa Cruz'),(916,375,'Escuque'),(917,375,'La Unión'),(918,375,'Santa Rita'),(919,375,'Sabana Libre'),(920,376,'El Socorro'),(921,376,'Los Caprichos'),(922,376,'Antonio José de Sucre'),(923,377,'Campo Elías'),(924,377,'Arnoldo Gabaldón'),(925,378,'Santa Apolonia'),(926,378,'El Progreso'),(927,378,'La Ceiba'),(928,378,'Tres de Febrero'),(929,379,'El Dividive'),(930,379,'Agua Santa'),(931,379,'Agua Caliente'),(932,379,'El Cenizo'),(933,379,'Valerita'),(934,380,'Monte Carmelo'),(935,380,'Buena Vista'),(936,380,'Santa María del Horcón'),(937,381,'Motatán'),(938,381,'El Baño'),(939,381,'Jalisco'),(940,382,'Pampán'),(941,382,'Flor de Patria'),(942,382,'La Paz'),(943,382,'Santa Ana'),(944,383,'Pampanito'),(945,383,'La Concepción'),(946,383,'Pampanito II'),(947,384,'Betijoque'),(948,384,'José Gregorio Hernández'),(949,384,'La Pueblita'),(950,384,'Los Cedros'),(951,385,'Carvajal'),(952,385,'Campo Alegre'),(953,385,'Antonio Nicolás Briceño'),(954,385,'José Leonardo Suárez'),(955,386,'Sabana de Mendoza'),(956,386,'Junín'),(957,386,'Valmore Rodríguez'),(958,386,'El Paraíso'),(959,387,'Andrés Linares'),(960,387,'Chiquinquirá'),(961,387,'Cristóbal Mendoza'),(962,387,'Cruz Carrillo'),(963,387,'Matriz'),(964,387,'Monseñor Carrillo'),(965,387,'Tres Esquinas'),(966,388,'Cabimbú'),(967,388,'Jajó'),(968,388,'La Mesa de Esnujaque'),(969,388,'Santiago'),(970,388,'Tuñame'),(971,388,'La Quebrada'),(972,389,'Juan Ignacio Montilla'),(973,389,'La Beatriz'),(974,389,'La Puerta'),(975,389,'Mendoza del Valle de Momboy'),(976,389,'Mercedes Díaz'),(977,389,'San Luis'),(978,390,'Caraballeda'),(979,390,'Carayaca'),(980,390,'Carlos Soublette'),(981,390,'Caruao Chuspa'),(982,390,'Catia La Mar'),(983,390,'El Junko'),(984,390,'La Guaira'),(985,390,'Macuto'),(986,390,'Maiquetía'),(987,390,'Naiguatá'),(988,390,'Urimare'),(989,391,'Arístides Bastidas'),(990,392,'Bolívar'),(991,407,'Chivacoa'),(992,407,'Campo Elías'),(993,408,'Cocorote'),(994,409,'Independencia'),(995,410,'José Antonio Páez'),(996,411,'La Trinidad'),(997,412,'Manuel Monge'),(998,413,'Salóm'),(999,413,'Temerla'),(1000,413,'Nirgua'),(1001,414,'San Andrés'),(1002,414,'Yaritagua'),(1003,415,'San Javier'),(1004,415,'Albarico'),(1005,415,'San Felipe'),(1006,416,'Sucre'),(1007,417,'Urachiche'),(1008,418,'El Guayabo'),(1009,418,'Farriar'),(1010,441,'Isla de Toas'),(1011,441,'Monagas'),(1012,442,'San Timoteo'),(1013,442,'General Urdaneta'),(1014,442,'Libertador'),(1015,442,'Marcelino Briceño'),(1016,442,'Pueblo Nuevo'),(1017,442,'Manuel Guanipa Matos'),(1018,443,'Ambrosio'),(1019,443,'Carmen Herrera'),(1020,443,'La Rosa'),(1021,443,'Germán Ríos Linares'),(1022,443,'San Benito'),(1023,443,'Rómulo Betancourt'),(1024,443,'Jorge Hernández'),(1025,443,'Punta Gorda'),(1026,443,'Arístides Calvani'),(1027,444,'Encontrados'),(1028,444,'Udón Pérez'),(1029,445,'Moralito'),(1030,445,'San Carlos del Zulia'),(1031,445,'Santa Cruz del Zulia'),(1032,445,'Santa Bárbara'),(1033,445,'Urribarrí'),(1034,446,'Carlos Quevedo'),(1035,446,'Francisco Javier Pulgar'),(1036,446,'Simón Rodríguez'),(1037,446,'Guamo-Gavilanes'),(1038,448,'La Concepción'),(1039,448,'San José'),(1040,448,'Mariano Parra León'),(1041,448,'José Ramón Yépez'),(1042,449,'Jesús María Semprún'),(1043,449,'Barí'),(1044,450,'Concepción'),(1045,450,'Andrés Bello'),(1046,450,'Chiquinquirá'),(1047,450,'El Carmelo'),(1048,450,'Potreritos'),(1049,451,'Libertad'),(1050,451,'Alonso de Ojeda'),(1051,451,'Venezuela'),(1052,451,'Eleazar López Contreras'),(1053,451,'Campo Lara'),(1054,452,'Bartolomé de las Casas'),(1055,452,'Libertad'),(1056,452,'Río Negro'),(1057,452,'San José de Perijá'),(1058,453,'San Rafael'),(1059,453,'La Sierrita'),(1060,453,'Las Parcelas'),(1061,453,'Luis de Vicente'),(1062,453,'Monseñor Marcos Sergio Godoy'),(1063,453,'Ricaurte'),(1064,453,'Tamare'),(1065,454,'Antonio Borjas Romero'),(1066,454,'Bolívar'),(1067,454,'Cacique Mara'),(1068,454,'Carracciolo Parra Pérez'),(1069,454,'Cecilio Acosta'),(1070,454,'Cristo de Aranza'),(1071,454,'Coquivacoa'),(1072,454,'Chiquinquirá'),(1073,454,'Francisco Eugenio Bustamante'),(1074,454,'Idelfonzo Vásquez'),(1075,454,'Juana de Ávila'),(1076,454,'Luis Hurtado Higuera'),(1077,454,'Manuel Dagnino'),(1078,454,'Olegario Villalobos'),(1079,454,'Raúl Leoni'),(1080,454,'Santa Lucía'),(1081,454,'Venancio Pulgar'),(1082,454,'San Isidro'),(1083,455,'Altagracia'),(1084,455,'Faría'),(1085,455,'Ana María Campos'),(1086,455,'San Antonio'),(1087,455,'San José'),(1088,456,'Donaldo García'),(1089,456,'El Rosario'),(1090,456,'Sixto Zambrano'),(1091,457,'San Francisco'),(1092,457,'El Bajo'),(1093,457,'Domitila Flores'),(1094,457,'Francisco Ochoa'),(1095,457,'Los Cortijos'),(1096,457,'Marcial Hernández'),(1097,458,'Santa Rita'),(1098,458,'El Mene'),(1099,458,'Pedro Lucas Urribarrí'),(1100,458,'José Cenobio Urribarrí'),(1101,459,'Rafael Maria Baralt'),(1102,459,'Manuel Manrique'),(1103,459,'Rafael Urdaneta'),(1104,460,'Bobures'),(1105,460,'Gibraltar'),(1106,460,'Heras'),(1107,460,'Monseñor Arturo Álvarez'),(1108,460,'Rómulo Gallegos'),(1109,460,'El Batey'),(1110,461,'Rafael Urdaneta'),(1111,461,'La Victoria'),(1112,461,'Raúl Cuenca'),(1113,447,'Sinamaica'),(1114,447,'Alta Guajira'),(1115,447,'Elías Sánchez Rubio'),(1116,447,'Guajira'),(1117,462,'Altagracia'),(1118,462,'Antímano'),(1119,462,'Caricuao'),(1120,462,'Catedral'),(1121,462,'Coche'),(1122,462,'El Junquito'),(1123,462,'El Paraíso'),(1124,462,'El Recreo'),(1125,462,'El Valle'),(1126,462,'La Candelaria'),(1127,462,'La Pastora'),(1128,462,'La Vega'),(1129,462,'Macarao'),(1130,462,'San Agustín'),(1131,462,'San Bernardino'),(1132,462,'San José'),(1133,462,'San Juan'),(1134,462,'San Pedro'),(1135,462,'Santa Rosalía'),(1136,462,'Santa Teresa'),(1137,462,'Sucre (Catia)'),(1138,462,'23 de enero');
/*!40000 ALTER TABLE `parroquias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `nombrePermiso` varchar(80) NOT NULL,
  `descripcionPermiso` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_permiso`),
  UNIQUE KEY `nombrePermiso` (`nombrePermiso`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` VALUES (1,'Medico','Permiso por enfermedad','2023-05-18 00:38:08'),(2,'Personal','Por motivos de la vida','2023-05-18 01:03:11');
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_p1`
--

DROP TABLE IF EXISTS `personal_p1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_p1` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `tipoPersonal` char(255) NOT NULL,
  `codigoPersonal` char(255) NOT NULL,
  `trasladoPersonal` tinyint(4) NOT NULL,
  `fechaPersonal` date NOT NULL,
  `nombreCompletoPersonal` char(255) NOT NULL,
  `cedulaPersonal` int(8) NOT NULL,
  `fechaNacimientoPersonal` date NOT NULL,
  `sexoPersonal` char(255) NOT NULL,
  `grupoSanguineoPersonal` char(255) NOT NULL,
  `factorRhPersonal` char(255) NOT NULL,
  `nivelInstrucionPersonal` char(255) NOT NULL,
  `especialidadPersonal` char(255) NOT NULL,
  `egresadoPersonal` char(255) NOT NULL,
  `preGradoPersonal` char(255) NOT NULL,
  `postGradoPersonal` char(255) NOT NULL,
  `condicionMedicaPersonal` char(255) NOT NULL,
  `direccionPersonal` char(255) NOT NULL,
  `codigoTelPersonal` char(255) NOT NULL,
  `telefonoPersonal` char(255) NOT NULL,
  `codigoTel2Personal` char(255) NOT NULL,
  `telefono2Personal` char(255) NOT NULL,
  `codigoTelOpcionalPersonal` char(255) NOT NULL,
  `telefonoOpcionalPersonal` char(255) NOT NULL,
  `correoPersonal` char(255) NOT NULL,
  `cuentaNominaPersonal` char(255) NOT NULL,
  `tipoCuentaPersonal` char(255) NOT NULL,
  PRIMARY KEY (`id_personal`),
  UNIQUE KEY `cedulaPersonal` (`cedulaPersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_p1`
--

LOCK TABLES `personal_p1` WRITE;
/*!40000 ALTER TABLE `personal_p1` DISABLE KEYS */;
INSERT INTO `personal_p1` VALUES (11,'Administrativo','1234',0,'2023-07-06','Graterol Erickson',28078150,'2001-07-23','Masculino','A','+','TSU en Informatica','','UPTT MBI','','','','Valle Verde 1','58','4247212439','58','','58','','erickson17graterol@gmail.com','12341234123412341234','Corriente'),(14,'Administrativo','12314',1,'2023-07-06','Emilio cabezas',28078563,'2001-10-21','Masculino','A','+','TSU en Informtica','','UPTT MBI','','','','Banco Obrero','58','4247000629','58','','58','','emiliodavidcc@gmail.com','12312312312312312312','Corriente'),(15,'Administrativo','123123',1,'2023-07-06','Barbara Sarmiento',28078347,'2001-08-07','Femenino','A','+','Bachiller','','L. B. Dalla Costa','','','','Calle Bolivar','58','4125380558','58','','58','','barbysarmiento118@gmail.com','12312312312312312312','Corriente'),(16,'Obrero','1241',1,'2023-07-06','Garcia Ronal',27776438,'2001-06-02','Masculino','A','+','TSU en Informatica','','UPTT MBI','','','','Bisnaca','58','4162152010','58','','58','','ronaljgd1@gmail.com','12412412341231231323','Corriente'),(17,'Docente','AWEQWE',1,'2023-07-16','José Gregorio Hernández Padrón',27051490,'2000-02-07','Masculino','A','+','Bachiller','','L. B. Lomelli','','','','Valle Verde 1','58','4121686460','58','','58','','joseghernandezp15@gmail.com','12312312312312312312','Corriente');
/*!40000 ALTER TABLE `personal_p1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_p2`
--

DROP TABLE IF EXISTS `personal_p2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_p2` (
  `id_personal` int(11) NOT NULL,
  `id_funcionPersonal` int(11) NOT NULL,
  `especialistaPersonal` char(255) NOT NULL,
  `fechaIngresoPersonal` date NOT NULL,
  `observacionPersonal` char(255) NOT NULL,
  `codigoVoucherPersonal` char(255) NOT NULL,
  `cargoVoucherPersonal` char(255) NOT NULL,
  `adscritoPersonal` char(255) NOT NULL,
  `codigoIPersonal` char(255) NOT NULL,
  `codigoBPersonal` char(255) NOT NULL,
  `institucionPersonal` char(255) NOT NULL,
  `codigoDependenciaPersonal` char(255) NOT NULL,
  `codigoDeaPersonal` char(255) NOT NULL,
  `copiaCIPersonal` tinyint(4) NOT NULL,
  `copiaCredencialPersonal` tinyint(4) NOT NULL,
  `constanciaTrabajoPersonal` tinyint(4) NOT NULL,
  `reciboPagoPersonal` tinyint(4) NOT NULL,
  `curriculoPersonal` tinyint(4) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id_personal` (`id_personal`),
  KEY `personalCargos` (`id_funcionPersonal`),
  CONSTRAINT `personalCargos` FOREIGN KEY (`id_funcionPersonal`) REFERENCES `cargos` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `personalP2P1` FOREIGN KEY (`id_personal`) REFERENCES `personal_p1` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_p2`
--

LOCK TABLES `personal_p2` WRITE;
/*!40000 ALTER TABLE `personal_p2` DISABLE KEYS */;
INSERT INTO `personal_p2` VALUES (11,1,'','2006-07-06','','1234','Director','Si esta','','','','','',1,1,1,1,1,'2023-07-06 04:15:28'),(14,2,'','2006-07-06','','QWEQWE','Sub director','No lo esta','','','','','',1,0,1,0,1,'2023-07-06 13:31:09'),(15,3,'','2006-07-03','','ASDASD','Sub director','No esta','','','','','',1,0,0,0,1,'2023-07-06 13:33:28'),(16,14,'','2006-07-05','','ASDASD','Obrero','Si lo esta','','','','','',0,1,0,1,0,'2023-07-06 13:35:44'),(17,12,'','2006-07-01','','ASDASD','Docente','No lo esta','','','','','',1,1,0,0,0,'2023-07-16 18:53:37');
/*!40000 ALTER TABLE `personal_p2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas_ruleta`
--

DROP TABLE IF EXISTS `preguntas_ruleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas_ruleta` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `id_materiaRuleta` int(11) NOT NULL,
  `pregunta` char(255) NOT NULL,
  `respuesta` char(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas_ruleta`
--

LOCK TABLES `preguntas_ruleta` WRITE;
/*!40000 ALTER TABLE `preguntas_ruleta` DISABLE KEYS */;
INSERT INTO `preguntas_ruleta` VALUES (1,3,'1','1','2023-08-27 04:41:58'),(2,2,'C1','C1','2023-08-27 04:42:03'),(3,2,'1','1','2023-08-27 04:42:25'),(4,1,'C2','C2','2023-08-27 04:42:56'),(5,3,'C2','C2','2023-08-27 04:43:12');
/*!40000 ALTER TABLE `preguntas_ruleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secciones`
--

DROP TABLE IF EXISTS `secciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secciones` (
  `id_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `letraSeccion` varchar(50) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_seccion`),
  KEY `gradosSecciones` (`id_grado`),
  CONSTRAINT `gradosSecciones` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secciones`
--

LOCK TABLES `secciones` WRITE;
/*!40000 ALTER TABLE `secciones` DISABLE KEYS */;
INSERT INTO `secciones` VALUES (22,'B',1,'2023-05-08 21:28:14'),(23,'A',1,'2023-05-08 21:29:13'),(24,'C',1,'2023-05-08 21:29:25'),(28,'A',4,'2023-05-09 05:33:30'),(29,'B',4,'2023-05-09 05:33:44'),(30,'C',4,'2023-05-09 05:33:49'),(31,'A',5,'2023-07-04 06:06:16'),(32,'B',5,'2023-07-19 22:25:36'),(33,'A',6,'2023-07-19 22:25:55');
/*!40000 ALTER TABLE `secciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUser` varchar(20) NOT NULL,
  `apellidoUser` varchar(20) NOT NULL,
  `correoUser` varchar(80) NOT NULL,
  `id_cargoUser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pregunta1` varchar(80) NOT NULL,
  `respuesta1` varchar(80) NOT NULL,
  `pregunta2` varchar(80) NOT NULL,
  `respuesta2` varchar(80) NOT NULL,
  `pregunta3` varchar(80) NOT NULL,
  `respuesta3` varchar(80) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  KEY `usuariosCargos` (`id_cargoUser`),
  CONSTRAINT `usuariosCargos` FOREIGN KEY (`id_cargoUser`) REFERENCES `cargos` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (35,'Barbara','Sarmiento','barbysarmiento118@gmail.com',15,'barby','7c222fb2927d828af22f592134e8932480637c0d','SEGUNDO NOMBRE','KRISLEY','SEGUNDO APELLIDO','SARMIENTO','COLOR FAVORITO','AZUL','2023-04-24 21:18:29'),(43,'Emilio','Cabezas','emiliodavidcc@gmail.com',2,'emilio','7c222fb2927d828af22f592134e8932480637c0d','SEGUNDO NOMBRE','DAVID','SEGUNDO APELLIDO','COLLANTES','FECHA DE NACIMIENTO','2001','2023-09-05 20:17:14'),(41,'Erick','Graterol','erick@gmail.com',15,'ericc','7c222fb2927d828af22f592134e8932480637c0d','1','1','2','2','3','3','2023-07-04 06:02:23'),(42,'Erickson','Graterol','erickson17graterol@mail.com',1,'Erick','7c222fb2927d828af22f592134e8932480637c0d','SEGUNDO APELLIDO','GUZMAN','APELLIDO PATERNO','GRATEROL','FECHA NACIMIENTO','2001','2023-09-05 20:16:09'),(39,'Gabo','Hidalgo','gabo@gmail.com',14,'gabo','7c222fb2927d828af22f592134e8932480637c0d','1','1','2','2','3','3','2023-05-31 00:51:12'),(37,'Jehyser','Ruiz','jehyser@gmail.com',14,'jehyser','7c222fb2927d828af22f592134e8932480637c0d','1','1','2','2','3','3','2023-05-21 20:17:26'),(40,'Jose','Hernandez','jose@gmail.com',12,'jose','7c222fb2927d828af22f592134e8932480637c0d','1','1','2','2','3','3','2023-05-31 00:51:49'),(44,'Ronal','Garcia','ronaljgd@gmail.com',3,'ronal','7c222fb2927d828af22f592134e8932480637c0d','SEGUNDO NOMBRE','JOSE','SEGUNDO APELLIDO','DELGADO','FECHA DE NACIMIENTO','2001','2023-09-05 20:18:15');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-05 15:49:43
