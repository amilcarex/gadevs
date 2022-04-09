-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla gadevs.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gadevs.admins: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT IGNORE INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`) VALUES
	(1, 'amse', 'Amilcar Coronado', '$2y$12$AdBqV9vd9OJR4OrSk0TM1eWOhPhwVgOwdtS.K9b3PeaRYMECgslAi'),
	(2, 'Admin', 'Amilcar Coronado', '$2y$12$PJpNvPtBu109aErxM6pRq.l5LwaAWhYFFyfLCQHO6t3/m7wrfOWWa');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Volcando estructura para tabla gadevs.categoria_evento
CREATE TABLE IF NOT EXISTS `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gadevs.categoria_evento: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria_evento` DISABLE KEYS */;
INSERT IGNORE INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`) VALUES
	(1, 'Seminarios', 'fa-university'),
	(2, 'Conferencias', 'fa-comment'),
	(3, 'Talleres', 'fa-code');
/*!40000 ALTER TABLE `categoria_evento` ENABLE KEYS */;

-- Volcando estructura para tabla gadevs.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(80) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(10) NOT NULL,
  `clave` varchar(10) NOT NULL,
  PRIMARY KEY (`evento_id`),
  KEY `id_cat_evento` (`id_cat_evento`),
  KEY `id_inv_fk` (`id_inv`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gadevs.eventos: ~29 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT IGNORE INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`) VALUES
	(1, 'Responsive Web Design', '2021-12-10', '10:00:00', 3, 1, 'taller_01'),
	(2, 'Flexbox', '2021-12-10', '12:00:00', 3, 2, 'taller_02'),
	(3, 'HTML5 y CSS3', '2021-12-10', '14:00:00', 3, 3, 'taller_03'),
	(4, 'Drupal', '2021-12-10', '17:00:00', 3, 4, 'taller_04'),
	(5, 'WordPress', '2021-12-10', '19:00:00', 3, 5, 'taller_05'),
	(6, 'Como ser freelancer', '2021-12-10', '10:00:00', 2, 6, 'conf_01'),
	(7, 'Tecnologías del Futuro', '2021-12-10', '17:00:00', 2, 1, 'conf_02'),
	(8, 'Seguridad en la Web', '2021-12-10', '19:00:00', 2, 2, 'conf_03'),
	(9, 'AngularJS', '2021-12-11', '10:00:00', 3, 1, 'taller_06'),
	(10, 'PHP y MySQL', '2021-12-11', '12:00:00', 3, 2, 'taller_07'),
	(11, 'JavaScript Avanzado', '2021-12-11', '14:00:00', 3, 3, 'taller_08'),
	(12, 'SEO en Google', '2021-12-11', '17:00:00', 3, 4, 'taller_09'),
	(13, 'De Photoshop a HTML5 y CSS3', '2021-12-11', '19:00:00', 3, 5, 'taller_10'),
	(14, 'PHP Intermedio y Avanzado', '2021-12-11', '21:00:00', 3, 6, 'taller_11'),
	(15, 'Como crear una tienda online que venda millones en pocos días', '2021-12-11', '10:00:00', 2, 6, 'conf_04'),
	(16, 'Los mejores lugares para encontrar trabajo', '2021-12-11', '17:00:00', 2, 1, 'conf_05'),
	(17, 'Pasos para crear un negocio rentable ', '2021-12-11', '19:00:00', 2, 2, 'conf_06'),
	(18, 'Aprende a Programar en una mañana', '2021-12-11', '10:00:00', 1, 3, 'sem_02'),
	(19, 'Diseño UI y UX para móviles', '2021-12-11', '17:00:00', 1, 5, 'sem_03'),
	(20, 'Laravel', '2021-12-12', '10:00:00', 3, 1, 'taller_12'),
	(21, 'Crea tu propia API', '2021-12-12', '12:00:00', 3, 2, 'taller_13'),
	(22, 'JavaScript y jQuery', '2021-12-12', '14:00:00', 3, 3, 'taller_14'),
	(23, 'Creando Plantillas para WordPress', '2021-12-12', '17:00:00', 3, 4, 'taller_15'),
	(24, 'Tiendas Virtuales en Magento', '2021-12-12', '19:00:00', 3, 5, 'taller_16'),
	(25, 'Como hacer Marketing en línea', '2021-12-12', '10:00:00', 2, 6, 'conf_07'),
	(26, '¿Con que lenguaje debo empezar?', '2021-12-12', '17:00:00', 2, 2, 'conf_08'),
	(27, 'Frameworks y librerias Open Source', '2021-12-12', '19:00:00', 2, 3, 'conf_09'),
	(28, 'Creando una App en Android en una mañana', '2021-12-12', '10:00:00', 1, 4, 'sem_04'),
	(29, 'Creando una App en iOS en una tarde', '2021-12-12', '17:00:00', 1, 1, 'sem_05');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

-- Volcando estructura para tabla gadevs.invitados
CREATE TABLE IF NOT EXISTS `invitados` (
  `invitado_id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`invitado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gadevs.invitados: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `invitados` DISABLE KEYS */;
INSERT IGNORE INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
	(1, 'Rafael', 'Bautista', '   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quas quidem minus sequi quo quam ab at nobis autem saepe incidunt ea, beatae corrupti, delectus dolorum veritatis itaque quibusdam quos.', 'invitado1.jpg'),
	(2, 'Shari', 'Herrera', '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi expedita soluta nostrum odit rem tenetur porro repellendus minima a asperiores tempore, explicabo, dolore iste esse aspernatur? At beatae eveniet sequi.', 'invitado2.jpg'),
	(3, 'Gregorio', 'Sanchez', '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi expedita soluta nostrum odit rem tenetur porro repellendus minima a asperiores tempore, explicabo, dolore iste esse aspernatur? At beatae eveniet sequi.', 'invitado3.jpg'),
	(4, 'Susana', 'Rivera', '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi expedita soluta nostrum odit rem tenetur porro repellendus minima a asperiores tempore, explicabo, dolore iste esse aspernatur? At beatae eveniet sequi.', 'invitado4.jpg'),
	(5, 'Harold', 'Garcia', '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi expedita soluta nostrum odit rem tenetur porro repellendus minima a asperiores tempore, explicabo, dolore iste esse aspernatur? At beatae eveniet sequi.', 'invitado5.jpg'),
	(6, 'Susan', 'Sanchez', '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi expedita soluta nostrum odit rem tenetur porro repellendus minima a asperiores tempore, explicabo, dolore iste esse aspernatur? At beatae eveniet sequi.', 'invitado6.jpg');
/*!40000 ALTER TABLE `invitados` ENABLE KEYS */;

-- Volcando estructura para tabla gadevs.regalos
CREATE TABLE IF NOT EXISTS `regalos` (
  `ID_regalo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_regalo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_regalo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gadevs.regalos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `regalos` DISABLE KEYS */;
INSERT IGNORE INTO `regalos` (`ID_regalo`, `nombre_regalo`) VALUES
	(1, 'Pulsera'),
	(2, 'Etiquetas'),
	(3, 'Plumas');
/*!40000 ALTER TABLE `regalos` ENABLE KEYS */;

-- Volcando estructura para tabla gadevs.registrados
CREATE TABLE IF NOT EXISTS `registrados` (
  `ID_Registrado` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Registrado`),
  KEY `regalo_fk` (`regalo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gadevs.registrados: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `registrados` DISABLE KEYS */;
INSERT IGNORE INTO `registrados` (`ID_Registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`) VALUES
	(1, 'amirukaru', 'coroneido', 'amilcar.coronado70@gmail.com', '2021-02-12 23:14:15', '{"un_dia":2,"camisas":3}', '{"eventos":["conf_01","conf_02","conf_03"]}', 2, '84.6'),
	(2, 'Amilcar', 'jose', 'amirlenysanais@hotmail.com', '2021-02-12 23:19:36', '{"un_dia":3,"camisas":3}', '{"eventos":["taller_01","taller_02","taller_03","taller_04"]}', 2, '114.6'),
	(3, 'Juan ', 'Perez', 'amilcar-59@hotmail.com', '2021-02-13 01:34:27', '{"un_dia":4,"pase_completo":1,"pase_2dias":1,"camisas":2}', '{"eventos":["taller_01","taller_02","taller_03","taller_04","taller_05","conf_04","conf_05","conf_06","sem_04","sem_05"]}', 2, '237.6'),
	(7, 'Pedro', 'Landaeta', 'amilcar.coronado70@gmail.com', '2021-02-13 01:56:37', '{"un_dia":3,"camisas":2}', '{"eventos":["conf_01","conf_02","conf_03"]}', 1, '112.6');
/*!40000 ALTER TABLE `registrados` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
