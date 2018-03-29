/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 10.1.28-MariaDB : Database - dept_agricultura
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dept_agricultura` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `dept_agricultura`;

/*Table structure for table `adea_af_001` */

DROP TABLE IF EXISTS `adea_af_001`;

CREATE TABLE `adea_af_001` (
  `id_adea_af_001` int(11) NOT NULL,
  `aprobacion` varchar(45) DEFAULT NULL,
  `ss` varchar(45) DEFAULT NULL,
  `d_agricultor` int(11) DEFAULT NULL,
  `id_agricultor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adea_af_001`),
  KEY `d_agricultor_idx` (`d_agricultor`,`id_agricultor`),
  KEY `pertenece_a_agricutlor_idx` (`id_agricultor`),
  CONSTRAINT `pertenece_a_agricutlor` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultor` (`id_agricultor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pertenece_d_agricultor` FOREIGN KEY (`d_agricultor`) REFERENCES `d_agricultor` (`id_direccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `adea_af_001` */

/*Table structure for table `adea_ma_001_pa_003` */

DROP TABLE IF EXISTS `adea_ma_001_pa_003`;

CREATE TABLE `adea_ma_001_pa_003` (
  `id_agricultor` int(11) NOT NULL,
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `agricultor_acepta_terminos` tinyint(1) NOT NULL,
  `id_agronomo` int(11) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `region` int(11) NOT NULL,
  `fiscal_year` int(11) NOT NULL,
  `empresas_agricolas` varchar(255) COLLATE utf8_bin NOT NULL,
  `evaluacion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_visita` date NOT NULL,
  `aprobado_por_agronomo` tinyint(1) NOT NULL,
  `cantidad_reembolso` double NOT NULL,
  `numero_factura` text COLLATE utf8_bin NOT NULL,
  `fecha_factura` date NOT NULL,
  `contratista_equipo` varchar(45) COLLATE utf8_bin NOT NULL,
  `cantidad_pagada_agricultor` double NOT NULL,
  `comentarios` varchar(255) COLLATE utf8_bin NOT NULL,
  `certifico_inspeccion` tinyint(1) NOT NULL,
  `firma_agronomo_licencia` varchar(45) COLLATE utf8_bin NOT NULL,
  `fecha_firma_director` date NOT NULL,
  `firma_director` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_solicitud`),
  KEY `pertenece_a_agricultor_idx` (`id_agricultor`),
  CONSTRAINT `pertenece_agricultor_adea_ma_001` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultor` (`id_agricultor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `adea_ma_001_pa_003` */

/*Table structure for table `adea_pa_001` */

DROP TABLE IF EXISTS `adea_pa_001`;

CREATE TABLE `adea_pa_001` (
  `id_adea_pa_001` int(11) NOT NULL AUTO_INCREMENT,
  `num_solicitud` int(11) DEFAULT NULL,
  `num_aprobacion` int(11) DEFAULT NULL,
  `id_agricultor` int(11) DEFAULT NULL,
  `id_finca` int(11) DEFAULT NULL,
  `id_programa` int(11) DEFAULT NULL,
  `recogido` varchar(45) DEFAULT NULL,
  `aprovacion` bit(1) DEFAULT NULL,
  `comentarios` text,
  `recomendaciones` text,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_adea_pa_001`),
  KEY `pertener_a_agricultor_idx` (`id_agricultor`),
  KEY `es_del_programa_idx` (`id_programa`),
  CONSTRAINT `es_del_programa` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pertener_a_agricultor` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultor` (`id_agricultor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `adea_pa_001` */

insert  into `adea_pa_001`(`id_adea_pa_001`,`num_solicitud`,`num_aprobacion`,`id_agricultor`,`id_finca`,`id_programa`,`recogido`,`aprovacion`,`comentarios`,`recomendaciones`,`fecha`) values 
(2,131313,1313213,NULL,NULL,NULL,'kbhjklhkl','','afdafad','adgasdgagsd','0000-00-00'),
(3,NULL,NULL,NULL,NULL,NULL,'','','','',NULL),
(4,NULL,NULL,NULL,NULL,NULL,'','','','',NULL);

/*Table structure for table `agricultor` */

DROP TABLE IF EXISTS `agricultor`;

CREATE TABLE `agricultor` (
  `id_agricultor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `inicial` varchar(45) DEFAULT NULL,
  `apellido_1` varchar(45) DEFAULT NULL,
  `apellido_2` varchar(45) DEFAULT NULL,
  `ss` int(11) DEFAULT NULL,
  `d_post` varchar(45) DEFAULT NULL,
  `d_resi` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `telefono_celular` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_agricultor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `agricultor` */

/*Table structure for table `asda_pa_0025` */

DROP TABLE IF EXISTS `asda_pa_0025`;

CREATE TABLE `asda_pa_0025` (
  `id_asda_pa_0025` int(11) NOT NULL AUTO_INCREMENT,
  `id_agricultor` int(11) DEFAULT NULL,
  `d_agricultor` int(11) DEFAULT NULL,
  `ano` date DEFAULT NULL,
  `cabida` float DEFAULT NULL,
  `cuerdas` float DEFAULT NULL,
  `propia` float DEFAULT NULL,
  `arrendada` float DEFAULT NULL,
  `usofructo` float DEFAULT NULL,
  `tamano_empresa` float DEFAULT NULL,
  `facilidad_costo_estimado` float DEFAULT NULL,
  `fecha_inicio_trabajo` date DEFAULT NULL,
  `fecha_limite_trabajo` date DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `firma_agricultor` bit(1) DEFAULT NULL,
  `recomendaciones` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_accion` date DEFAULT NULL,
  `firma_director_representante` bit(1) DEFAULT NULL,
  `cotizacion_1` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `cotizacion_2` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_asda_pa_0025`),
  KEY `pertenece_d_agricultor_idx` (`d_agricultor`),
  KEY `d_agricutor_pa_0025_idx` (`d_agricultor`),
  CONSTRAINT `d_agricutor_pa_0025` FOREIGN KEY (`d_agricultor`) REFERENCES `d_agricultor` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_agricultor_pertenece_asda_pa_0025` FOREIGN KEY (`id_asda_pa_0025`) REFERENCES `agricultor` (`id_agricultor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

/*Data for the table `asda_pa_0025` */

/*Table structure for table `asda_pa_0026` */

DROP TABLE IF EXISTS `asda_pa_0026`;

CREATE TABLE `asda_pa_0026` (
  `id_asda_pa_0026` int(11) NOT NULL AUTO_INCREMENT,
  `id_agricultor` int(11) DEFAULT NULL,
  `dirrecion_finca` varchar(45) DEFAULT NULL,
  `costo_total_facildiades` float DEFAULT NULL,
  `nombre_parrafo` varchar(45) DEFAULT NULL,
  `caracter_parrafo` varchar(45) DEFAULT NULL,
  `nombre_facilidades_parrafo` varchar(45) DEFAULT NULL,
  `pueblo_parrafo` varchar(45) DEFAULT NULL,
  `firma_parrafo` bit(1) DEFAULT NULL,
  `fecha_certificacion` date DEFAULT NULL,
  `costo_total_facilidades_certificacion` float DEFAULT NULL,
  `comentarios` text,
  `firma_certificante` bit(1) DEFAULT NULL,
  `fecha_aplicacion` date DEFAULT NULL,
  `firma_director` bit(1) DEFAULT NULL,
  `fecha_firma_director` date DEFAULT NULL,
  `factura_1` varchar(45) NOT NULL,
  `factura_2` varchar(45) NOT NULL,
  `factura_3` varchar(45) NOT NULL,
  `factura_4` varchar(45) NOT NULL,
  PRIMARY KEY (`id_asda_pa_0026`),
  KEY `pertenece_agricultor_asda_pa_0026_idx` (`id_agricultor`),
  CONSTRAINT `pertenece_agricultor_asda_pa_0026` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultor` (`id_agricultor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `asda_pa_0026` */

/*Table structure for table `asda_pa_003` */

DROP TABLE IF EXISTS `asda_pa_003`;

CREATE TABLE `asda_pa_003` (
  `id_asda_pa_003` int(11) NOT NULL AUTO_INCREMENT,
  `id_agricultor` int(11) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `munincipio` int(11) DEFAULT NULL,
  `localizacion_finca` varchar(45) DEFAULT NULL,
  `fondo_del_seguro_estado` varchar(45) DEFAULT NULL,
  `seguro_desempleo` varchar(45) DEFAULT NULL,
  `motivo_reembolso` varchar(45) DEFAULT NULL,
  `evidencia_presentada` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fecha_actualizacion` date DEFAULT NULL,
  `url_evidencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_asda_pa_003`),
  KEY `pertenece_a_munincipio_idx` (`munincipio`),
  CONSTRAINT `pertenece_a_munincipio` FOREIGN KEY (`munincipio`) REFERENCES `munincipio` (`id_munincipio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `asda_pa_003` */

/*Table structure for table `asda_pss_02` */

DROP TABLE IF EXISTS `asda_pss_02`;

CREATE TABLE `asda_pss_02` (
  `id_asda_pss_02` int(11) NOT NULL,
  `id_agricultor` int(11) NOT NULL,
  `id_d_agricultor` int(11) NOT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `nombre_finca` varchar(45) DEFAULT NULL,
  `empresa_a` varchar(45) DEFAULT NULL,
  `carr_num_finca` int(11) DEFAULT NULL,
  `km_finca` float DEFAULT NULL,
  `munincipio_finca` varchar(45) DEFAULT NULL,
  `barrio_finca` varchar(45) CHARACTER SET big5 DEFAULT NULL,
  `c_tipo` varchar(2) DEFAULT NULL,
  `c_arrendadas` float DEFAULT NULL,
  `c_propias` float DEFAULT NULL,
  `c_otros` float DEFAULT NULL,
  `num_fondo` int(11) DEFAULT NULL,
  `ss_p` int(11) DEFAULT NULL,
  `ss_d` int(11) DEFAULT NULL,
  `region` varchar(45) DEFAULT NULL,
  `cert_agri` tinyint(4) DEFAULT NULL,
  `fecha_cert_agri` date DEFAULT NULL,
  `cert_agro` tinyint(4) DEFAULT NULL,
  `fecha_cert_agro` date DEFAULT NULL,
  PRIMARY KEY (`id_asda_pss_02`),
  KEY `pertene_a_agricultor_asda_02_idx` (`id_agricultor`),
  KEY `pertene_a_d_agricultor_asda_02_idx` (`id_d_agricultor`),
  CONSTRAINT `pertenece_a_agricultor_asda_02` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultor` (`id_agricultor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pertenece_a_d_agricultor_asda_02` FOREIGN KEY (`id_d_agricultor`) REFERENCES `d_agricultor` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pertenece_periodo` FOREIGN KEY (`id_asda_pss_02`) REFERENCES `periodo_asda_pss_02` (`id_periodo`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `asda_pss_02` */

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `auth_assignment_user_id_idx` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values 
('agricultor',1,NULL,NULL,NULL,NULL,NULL),
('director',3,NULL,NULL,NULL,NULL,NULL),
('empleado',2,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

insert  into `auth_item_child`(`parent`,`child`) values 
('director','agricultor'),
('director','empleado'),
('empleado','agricultor');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

/*Table structure for table `d_agricultor` */

DROP TABLE IF EXISTS `d_agricultor`;

CREATE TABLE `d_agricultor` (
  `id_direccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_agricultor` int(11) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `pueblo` int(11) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `dirrecion_1` varchar(45) DEFAULT NULL,
  `dirrecion_2` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_direccion`),
  KEY `pertenece_a_agricultor_idx` (`id_agricultor`),
  KEY `pueblo_idx` (`pueblo`),
  CONSTRAINT `pertenece_a_agricultor` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultor` (`id_agricultor`) ON UPDATE CASCADE,
  CONSTRAINT `pueblo` FOREIGN KEY (`pueblo`) REFERENCES `munincipio` (`id_munincipio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `d_agricultor` */

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `inicial` varchar(45) DEFAULT NULL,
  `apellido_1` varchar(45) DEFAULT NULL,
  `apellido_2` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `division` varchar(45) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `posicion` varchar(45) DEFAULT NULL,
  `cubiculo` varchar(45) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `pertenece_a_region_idx` (`region`),
  CONSTRAINT `pertenece_a_region` FOREIGN KEY (`region`) REFERENCES `region` (`id_region`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

/*Table structure for table `incentivos_agricolas` */

DROP TABLE IF EXISTS `incentivos_agricolas`;

CREATE TABLE `incentivos_agricolas` (
  `id_incentivo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `info` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_incentivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `incentivos_agricolas` */

/*Table structure for table `incentivos_solicitud` */

DROP TABLE IF EXISTS `incentivos_solicitud`;

CREATE TABLE `incentivos_solicitud` (
  `idSolicitud` int(11) NOT NULL,
  `idIncentivo` int(11) NOT NULL,
  KEY `solicitud` (`idSolicitud`),
  KEY `incentivo` (`idIncentivo`),
  CONSTRAINT `incentivos_solicitud_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `adea_ma_001_pa_003` (`id_solicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `incentivos_solicitud_ibfk_2` FOREIGN KEY (`idIncentivo`) REFERENCES `incentivos_agricolas` (`id_incentivo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `incentivos_solicitud` */

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values 
('m000000_000000_base',1522271758),
('m130524_201442_init',1522271763),
('m140506_102106_rbac_init',1522271911),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1522271911);

/*Table structure for table `munincipio` */

DROP TABLE IF EXISTS `munincipio`;

CREATE TABLE `munincipio` (
  `id_munincipio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_munincipio` varchar(45) DEFAULT NULL,
  `id_region` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_munincipio`),
  KEY `pertene_a_region_idx` (`id_region`),
  CONSTRAINT `pertene_a_region` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `munincipio` */

/*Table structure for table `periodo_asda_pss_02` */

DROP TABLE IF EXISTS `periodo_asda_pss_02`;

CREATE TABLE `periodo_asda_pss_02` (
  `id_periodo` int(11) NOT NULL AUTO_INCREMENT,
  `start_periodo` date DEFAULT NULL,
  `end_periodo` date DEFAULT NULL,
  `desc_periodo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `periodo_asda_pss_02` */

/*Table structure for table `programa` */

DROP TABLE IF EXISTS `programa`;

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_prog` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_programa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `programa` */

/*Table structure for table `region` */

DROP TABLE IF EXISTS `region`;

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_region` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `region` */

/*Table structure for table `sde` */

DROP TABLE IF EXISTS `sde`;

CREATE TABLE `sde` (
  `id_sde` int(11) NOT NULL AUTO_INCREMENT,
  `id_agricultor` varchar(45) DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_sde`),
  KEY `pertenece_servicio_idx` (`id_servicio`),
  CONSTRAINT `servicio_suplido` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sde` */

/*Table structure for table `servicio` */

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `servicio` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`) values 
(1,'yessy','yF440w03O_8L7rzhXiZxwlHfl2HCqIJd','$2y$13$JDnJVqCsLTCoOX.12PbYeOM23/PhxMp/YITOrsct8BmrX7r5H/cci',NULL,'yessy@gmail.com',10,1522272353,1522272353);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
