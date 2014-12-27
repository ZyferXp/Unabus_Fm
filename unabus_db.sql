-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2014 a las 21:07:33
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `unabus_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_buses`
--

CREATE TABLE IF NOT EXISTS `tb_buses` (
  `patente` varchar(6) NOT NULL,
  `capacidad` int(2) NOT NULL,
  PRIMARY KEY (`patente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para el almacenamiento de los buses';

--
-- Volcado de datos para la tabla `tb_buses`
--

INSERT INTO `tb_buses` (`patente`, `capacidad`) VALUES
('dan123', 47),
('DC1973', 49),
('DC1978', 47),
('fm3024', 46),
('MP5343', 47),
('XF7262', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_intermedios`
--

CREATE TABLE IF NOT EXISTS `tb_intermedios` (
  `id_recorrido` int(6) NOT NULL,
  `id_comuna` int(6) NOT NULL,
  PRIMARY KEY (`id_recorrido`,`id_comuna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_intermedios`
--

INSERT INTO `tb_intermedios` (`id_recorrido`, `id_comuna`) VALUES
(36, 1101),
(36, 1107),
(36, 1401),
(36, 1402),
(36, 1403),
(36, 1404),
(36, 1405),
(36, 2101),
(36, 2102),
(36, 2103),
(36, 2104),
(36, 2201),
(36, 15202),
(38, 1101),
(38, 1401),
(38, 1403),
(38, 1405),
(38, 2102),
(38, 15101),
(38, 15201),
(39, 5103),
(39, 5105),
(40, 5103),
(40, 5105),
(40, 5109),
(41, 1401),
(41, 1402),
(42, 1401),
(42, 1402),
(42, 1403),
(42, 1404);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_recorridos`
--

CREATE TABLE IF NOT EXISTS `tb_recorridos` (
  `id_recorrido` int(11) NOT NULL AUTO_INCREMENT,
  `id_origen` int(11) NOT NULL,
  `id_destino` int(11) NOT NULL,
  `duracion` varchar(8) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id_recorrido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla con losrecorridos' AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `tb_recorridos`
--

INSERT INTO `tb_recorridos` (`id_recorrido`, `id_origen`, `id_destino`, `duracion`, `valor`) VALUES
(36, 15101, 15101, '10:30', 12000),
(37, 15101, 1404, '10:30', 35000),
(38, 15101, 2201, '1:30', 10000),
(39, 13101, 5107, '2:50', 10000),
(40, 13101, 5107, '2:50', 10000),
(41, 15101, 15201, '1:10', 1000),
(42, 15101, 15201, '1:10', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_territorios`
--

CREATE TABLE IF NOT EXISTS `tb_territorios` (
  `id_region` int(2) DEFAULT NULL,
  `nombre_region` varchar(50) DEFAULT NULL,
  `id_provincia` int(3) DEFAULT NULL,
  `nombre_provincia` varchar(23) DEFAULT NULL,
  `id_comuna` int(5) DEFAULT NULL,
  `nombre_comuna` varchar(28) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_territorios`
--

INSERT INTO `tb_territorios` (`id_region`, `nombre_region`, `id_provincia`, `nombre_provincia`, `id_comuna`, `nombre_comuna`) VALUES
(15, 'Arica y Parinacota', 151, 'Arica', 15101, 'Arica'),
(15, 'Arica y Parinacota', 151, 'Arica', 15102, 'Camarones'),
(15, 'Arica y Parinacota', 152, 'Parinacota', 15201, 'Putre'),
(15, 'Arica y Parinacota', 152, 'Parinacota', 15202, 'General Lagos'),
(1, 'Tarapacá', 11, 'Iquique', 1101, 'Iquique'),
(1, 'Tarapacá', 11, 'Iquique', 1107, 'Alto Hospicio'),
(1, 'Tarapacá', 14, 'Tamarugal', 1401, 'Pozo Almonte'),
(1, 'Tarapacá', 14, 'Tamarugal', 1402, 'Camiña'),
(1, 'Tarapacá', 14, 'Tamarugal', 1403, 'Colchane'),
(1, 'Tarapacá', 14, 'Tamarugal', 1404, 'Huara'),
(1, 'Tarapacá', 14, 'Tamarugal', 1405, 'Pica'),
(2, 'Antofagasta', 21, 'Antofagasta', 2101, 'Antofagasta'),
(2, 'Antofagasta', 21, 'Antofagasta', 2102, 'Mejillones'),
(2, 'Antofagasta', 21, 'Antofagasta', 2103, 'Sierra Gorda'),
(2, 'Antofagasta', 21, 'Antofagasta', 2104, 'Taltal'),
(2, 'Antofagasta', 22, 'El Loa', 2201, 'Calama'),
(2, 'Antofagasta', 22, 'El Loa', 2202, 'Ollagüe'),
(2, 'Antofagasta', 22, 'El Loa', 2203, 'San Pedro de Atacama'),
(2, 'Antofagasta', 23, 'Tocopilla', 2301, 'Tocopilla'),
(2, 'Antofagasta', 23, 'Tocopilla', 2302, 'María Elena'),
(3, 'Atacama', 31, 'Copiapó', 3101, 'Copiapó'),
(3, 'Atacama', 31, 'Copiapó', 3102, 'Caldera'),
(3, 'Atacama', 31, 'Copiapó', 3103, 'Tierra Amarilla'),
(3, 'Atacama', 32, 'Chañaral', 3201, 'Chañaral'),
(3, 'Atacama', 32, 'Chañaral', 3202, 'Diego de Almagro'),
(3, 'Atacama', 33, 'Huasco', 3301, 'Vallenar'),
(3, 'Atacama', 33, 'Huasco', 3302, 'Alto del Carmen'),
(3, 'Atacama', 33, 'Huasco', 3303, 'Freirina'),
(3, 'Atacama', 33, 'Huasco', 3304, 'Huasco'),
(4, 'Coquimbo', 41, 'Elqui', 4101, 'La Serena'),
(4, 'Coquimbo', 41, 'Elqui', 4102, 'Coquimbo'),
(4, 'Coquimbo', 41, 'Elqui', 4103, 'Andacollo'),
(4, 'Coquimbo', 41, 'Elqui', 4104, 'La Higuera'),
(4, 'Coquimbo', 41, 'Elqui', 4105, 'Paiguano'),
(4, 'Coquimbo', 41, 'Elqui', 4106, 'Vicuña'),
(4, 'Coquimbo', 42, 'Choapa', 4201, 'Illapel'),
(4, 'Coquimbo', 42, 'Choapa', 4202, 'Canela'),
(4, 'Coquimbo', 42, 'Choapa', 4203, 'Los Vilos'),
(4, 'Coquimbo', 42, 'Choapa', 4204, 'Salamanca'),
(4, 'Coquimbo', 43, 'Limarí', 4301, 'Ovalle'),
(4, 'Coquimbo', 43, 'Limarí', 4302, 'Combarbalá'),
(4, 'Coquimbo', 43, 'Limarí', 4303, 'Monte Patria'),
(4, 'Coquimbo', 43, 'Limarí', 4304, 'Punitaqui'),
(4, 'Coquimbo', 43, 'Limarí', 4305, 'Río Hurtado'),
(5, 'Valparaíso', 51, 'Valparaíso', 5101, 'Valparaíso'),
(5, 'Valparaíso', 51, 'Valparaíso', 5102, 'Casablanca'),
(5, 'Valparaíso', 51, 'Valparaíso', 5103, 'Concón'),
(5, 'Valparaíso', 51, 'Valparaíso', 5104, 'Juan Fernández'),
(5, 'Valparaíso', 51, 'Valparaíso', 5105, 'Puchuncaví'),
(5, 'Valparaíso', 51, 'Valparaíso', 5107, 'Quintero'),
(5, 'Valparaíso', 51, 'Valparaíso', 5109, 'Viña del Mar'),
(5, 'Valparaíso', 52, 'Isla de Pascua', 5201, 'Isla de Pascua'),
(5, 'Valparaíso', 53, 'Los Andes', 5301, 'Los Andes'),
(5, 'Valparaíso', 53, 'Los Andes', 5302, 'Calle Larga'),
(5, 'Valparaíso', 53, 'Los Andes', 5303, 'Rinconada'),
(5, 'Valparaíso', 53, 'Los Andes', 5304, 'San Esteban'),
(5, 'Valparaíso', 54, 'Petorca', 5401, 'La Ligua'),
(5, 'Valparaíso', 54, 'Petorca', 5402, 'Cabildo'),
(5, 'Valparaíso', 54, 'Petorca', 5403, 'Papudo'),
(5, 'Valparaíso', 54, 'Petorca', 5404, 'Petorca'),
(5, 'Valparaíso', 54, 'Petorca', 5405, 'Zapallar'),
(5, 'Valparaíso', 55, 'Quillota', 5501, 'Quillota'),
(5, 'Valparaíso', 55, 'Quillota', 5502, 'Calera'),
(5, 'Valparaíso', 55, 'Quillota', 5503, 'Hijuelas'),
(5, 'Valparaíso', 55, 'Quillota', 5504, 'La Cruz'),
(5, 'Valparaíso', 55, 'Quillota', 5506, 'Nogales'),
(5, 'Valparaíso', 56, 'San Antonio', 5601, 'San Antonio'),
(5, 'Valparaíso', 56, 'San Antonio', 5602, 'Algarrobo'),
(5, 'Valparaíso', 56, 'San Antonio', 5603, 'Cartagena'),
(5, 'Valparaíso', 56, 'San Antonio', 5604, 'El Quisco'),
(5, 'Valparaíso', 56, 'San Antonio', 5605, 'El Tabo'),
(5, 'Valparaíso', 56, 'San Antonio', 5606, 'Santo Domingo'),
(5, 'Valparaíso', 57, 'San Felipe de Aconcagua', 5701, 'San Felipe'),
(5, 'Valparaíso', 57, 'San Felipe de Aconcagua', 5702, 'Catemu'),
(5, 'Valparaíso', 57, 'San Felipe de Aconcagua', 5703, 'Llaillay'),
(5, 'Valparaíso', 57, 'San Felipe de Aconcagua', 5704, 'Panquehue'),
(5, 'Valparaíso', 57, 'San Felipe de Aconcagua', 5705, 'Putaendo'),
(5, 'Valparaíso', 57, 'San Felipe de Aconcagua', 5706, 'Santa María'),
(5, 'Valparaíso', 58, 'Marga Marga', 5801, 'Quilpué'),
(5, 'Valparaíso', 58, 'Marga Marga', 5802, 'Limache'),
(5, 'Valparaíso', 58, 'Marga Marga', 5803, 'Olmué'),
(5, 'Valparaíso', 58, 'Marga Marga', 5804, 'Villa Alemana'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6101, 'Rancagua'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6102, 'Codegua'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6103, 'Coinco'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6104, 'Coltauco'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6105, 'Doñihue'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6106, 'Graneros'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6107, 'Las Cabras'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6108, 'Machalí'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6109, 'Malloa'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6110, 'Mostazal'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6111, 'Olivar'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6112, 'Peumo'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6113, 'Pichidegua'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6114, 'Quinta de Tilcoco'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6115, 'Rengo'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6116, 'Requínoa'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 61, 'Cachapoal', 6117, 'San Vicente'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 62, 'Cardenal Caro', 6201, 'Pichilemu'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 62, 'Cardenal Caro', 6202, 'La Estrella'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 62, 'Cardenal Caro', 6203, 'Litueche'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 62, 'Cardenal Caro', 6204, 'Marchihue'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 62, 'Cardenal Caro', 6205, 'Navidad'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 62, 'Cardenal Caro', 6206, 'Paredones'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6301, 'San Fernando'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6302, 'Chépica'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6303, 'Chimbarongo'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6304, 'Lolol'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6305, 'Nancagua'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6306, 'Palmilla'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6307, 'Peralillo'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6308, 'Placilla'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6309, 'Pumanque'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins', 63, 'Colchagua', 6310, 'Santa Cruz'),
(7, 'Región del Maule', 71, 'Talca', 7101, 'Talca'),
(7, 'Región del Maule', 71, 'Talca', 7102, 'Constitución'),
(7, 'Región del Maule', 71, 'Talca', 7103, 'Curepto'),
(7, 'Región del Maule', 71, 'Talca', 7104, 'Empedrado'),
(7, 'Región del Maule', 71, 'Talca', 7105, 'Maule'),
(7, 'Región del Maule', 71, 'Talca', 7106, 'Pelarco'),
(7, 'Región del Maule', 71, 'Talca', 7107, 'Pencahue'),
(7, 'Región del Maule', 71, 'Talca', 7108, 'Río Claro'),
(7, 'Región del Maule', 71, 'Talca', 7109, 'San Clemente'),
(7, 'Región del Maule', 71, 'Talca', 7110, 'San Rafael'),
(7, 'Región del Maule', 72, 'Cauquenes', 7201, 'Cauquenes'),
(7, 'Región del Maule', 72, 'Cauquenes', 7202, 'Chanco'),
(7, 'Región del Maule', 72, 'Cauquenes', 7203, 'Pelluhue'),
(7, 'Región del Maule', 73, 'Curicó', 7301, 'Curicó'),
(7, 'Región del Maule', 73, 'Curicó', 7302, 'Hualañé'),
(7, 'Región del Maule', 73, 'Curicó', 7303, 'Licantén'),
(7, 'Región del Maule', 73, 'Curicó', 7304, 'Molina'),
(7, 'Región del Maule', 73, 'Curicó', 7305, 'Rauco'),
(7, 'Región del Maule', 73, 'Curicó', 7306, 'Romeral'),
(7, 'Región del Maule', 73, 'Curicó', 7307, 'Sagrada Familia'),
(7, 'Región del Maule', 73, 'Curicó', 7308, 'Teno'),
(7, 'Región del Maule', 73, 'Curicó', 7309, 'Vichuquén'),
(7, 'Región del Maule', 74, 'Linares', 7401, 'Linares'),
(7, 'Región del Maule', 74, 'Linares', 7402, 'Colbún'),
(7, 'Región del Maule', 74, 'Linares', 7403, 'Longaví'),
(7, 'Región del Maule', 74, 'Linares', 7404, 'Parral'),
(7, 'Región del Maule', 74, 'Linares', 7405, 'Retiro'),
(7, 'Región del Maule', 74, 'Linares', 7406, 'San Javier'),
(7, 'Región del Maule', 74, 'Linares', 7407, 'Villa Alegre'),
(7, 'Región del Maule', 74, 'Linares', 7408, 'Yerbas Buenas'),
(8, 'Región del Biobío', 81, 'Concepción', 8101, 'Concepción'),
(8, 'Región del Biobío', 81, 'Concepción', 8102, 'Coronel'),
(8, 'Región del Biobío', 81, 'Concepción', 8103, 'Chiguayante'),
(8, 'Región del Biobío', 81, 'Concepción', 8104, 'Florida'),
(8, 'Región del Biobío', 81, 'Concepción', 8105, 'Hualqui'),
(8, 'Región del Biobío', 81, 'Concepción', 8106, 'Lota'),
(8, 'Región del Biobío', 81, 'Concepción', 8107, 'Penco'),
(8, 'Región del Biobío', 81, 'Concepción', 8108, 'San Pedro de la Paz'),
(8, 'Región del Biobío', 81, 'Concepción', 8109, 'Santa Juana'),
(8, 'Región del Biobío', 81, 'Concepción', 8110, 'Talcahuano'),
(8, 'Región del Biobío', 81, 'Concepción', 8111, 'Tomé'),
(8, 'Región del Biobío', 81, 'Concepción', 8112, 'Hualpén'),
(8, 'Región del Biobío', 82, 'Arauco', 8201, 'Lebu'),
(8, 'Región del Biobío', 82, 'Arauco', 8202, 'Arauco'),
(8, 'Región del Biobío', 82, 'Arauco', 8203, 'Cañete'),
(8, 'Región del Biobío', 82, 'Arauco', 8204, 'Contulmo'),
(8, 'Región del Biobío', 82, 'Arauco', 8205, 'Curanilahue'),
(8, 'Región del Biobío', 82, 'Arauco', 8206, 'Los Álamos'),
(8, 'Región del Biobío', 82, 'Arauco', 8207, 'Tirúa'),
(8, 'Región del Biobío', 83, 'Biobío', 8301, 'Los Ángeles'),
(8, 'Región del Biobío', 83, 'Biobío', 8302, 'Antuco'),
(8, 'Región del Biobío', 83, 'Biobío', 8303, 'Cabrero'),
(8, 'Región del Biobío', 83, 'Biobío', 8304, 'Laja'),
(8, 'Región del Biobío', 83, 'Biobío', 8305, 'Mulchén'),
(8, 'Región del Biobío', 83, 'Biobío', 8306, 'Nacimiento'),
(8, 'Región del Biobío', 83, 'Biobío', 8307, 'Negrete'),
(8, 'Región del Biobío', 83, 'Biobío', 8308, 'Quilaco'),
(8, 'Región del Biobío', 83, 'Biobío', 8309, 'Quilleco'),
(8, 'Región del Biobío', 83, 'Biobío', 8310, 'San Rosendo'),
(8, 'Región del Biobío', 83, 'Biobío', 8311, 'Santa Bárbara'),
(8, 'Región del Biobío', 83, 'Biobío', 8312, 'Tucapel'),
(8, 'Región del Biobío', 83, 'Biobío', 8313, 'Yumbel'),
(8, 'Región del Biobío', 83, 'Biobío', 8314, 'Alto Biobío'),
(8, 'Región del Biobío', 84, 'Ñuble', 8401, 'Chillán'),
(8, 'Región del Biobío', 84, 'Ñuble', 8402, 'Bulnes'),
(8, 'Región del Biobío', 84, 'Ñuble', 8403, 'Cobquecura'),
(8, 'Región del Biobío', 84, 'Ñuble', 8404, 'Coelemu'),
(8, 'Región del Biobío', 84, 'Ñuble', 8405, 'Coihueco'),
(8, 'Región del Biobío', 84, 'Ñuble', 8406, 'Chillán Viejo'),
(8, 'Región del Biobío', 84, 'Ñuble', 8407, 'El Carmen'),
(8, 'Región del Biobío', 84, 'Ñuble', 8408, 'Ninhue'),
(8, 'Región del Biobío', 84, 'Ñuble', 8409, 'Ñiquén'),
(8, 'Región del Biobío', 84, 'Ñuble', 8410, 'Pemuco'),
(8, 'Región del Biobío', 84, 'Ñuble', 8411, 'Pinto'),
(8, 'Región del Biobío', 84, 'Ñuble', 8412, 'Portezuelo'),
(8, 'Región del Biobío', 84, 'Ñuble', 8413, 'Quillón'),
(8, 'Región del Biobío', 84, 'Ñuble', 8414, 'Quirihue'),
(8, 'Región del Biobío', 84, 'Ñuble', 8415, 'Ránquil'),
(8, 'Región del Biobío', 84, 'Ñuble', 8416, 'San Carlos'),
(8, 'Región del Biobío', 84, 'Ñuble', 8417, 'San Fabián'),
(8, 'Región del Biobío', 84, 'Ñuble', 8418, 'San Ignacio'),
(8, 'Región del Biobío', 84, 'Ñuble', 8419, 'San Nicolás'),
(8, 'Región del Biobío', 84, 'Ñuble', 8420, 'Treguaco'),
(8, 'Región del Biobío', 84, 'Ñuble', 8421, 'Yungay'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9101, 'Temuco'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9102, 'Carahue'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9103, 'Cunco'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9104, 'Curarrehue'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9105, 'Freire'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9106, 'Galvarino'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9107, 'Gorbea'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9108, 'Lautaro'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9109, 'Loncoche'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9110, 'Melipeuco'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9111, 'Nueva Imperial'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9112, 'Padre las Casas'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9113, 'Perquenco'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9114, 'Pitrufquén'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9115, 'Pucón'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9116, 'Saavedra'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9117, 'Teodoro Schmidt'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9118, 'Toltén'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9119, 'Vilcún'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9120, 'Villarrica'),
(9, 'Región de la Araucanía', 91, 'Cautín', 9121, 'Cholchol'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9201, 'Angol'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9202, 'Collipulli'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9203, 'Curacautín'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9204, 'Ercilla'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9205, 'Lonquimay'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9206, 'Los Sauces'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9207, 'Lumaco'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9208, 'Purén'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9209, 'Renaico'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9210, 'Traiguén'),
(9, 'Región de la Araucanía', 92, 'Malleco', 9211, 'Victoria'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14101, 'Valdivia'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14102, 'Corral'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14103, 'Lanco'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14104, 'Los Lagos'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14105, 'Máfil'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14106, 'Mariquina'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14107, 'Paillaco'),
(14, 'Región de Los Ríos', 141, 'Valdivia', 14108, 'Panguipulli'),
(14, 'Región de Los Ríos', 142, 'Ranco', 14201, 'La Unión'),
(14, 'Región de Los Ríos', 142, 'Ranco', 14202, 'Futrono'),
(14, 'Región de Los Ríos', 142, 'Ranco', 14203, 'Lago Ranco'),
(14, 'Región de Los Ríos', 142, 'Ranco', 14204, 'Río Bueno'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10101, 'Puerto Montt'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10102, 'Calbuco'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10103, 'Cochamó'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10104, 'Fresia'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10105, 'Frutillar'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10106, 'Los Muermos'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10107, 'Llanquihue'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10108, 'Maullín'),
(10, 'Región de Los Lagos', 101, 'Llanquihue', 10109, 'Puerto Varas'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10201, 'Castro'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10202, 'Ancud'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10203, 'Chonchi'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10204, 'Curaco de Vélez'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10205, 'Dalcahue'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10206, 'Puqueldón'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10207, 'Queilén'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10208, 'Quellón'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10209, 'Quemchi'),
(10, 'Región de Los Lagos', 102, 'Chiloé', 10210, 'Quinchao'),
(10, 'Región de Los Lagos', 103, 'Osorno', 10301, 'Osorno'),
(10, 'Región de Los Lagos', 103, 'Osorno', 10302, 'Puerto Octay'),
(10, 'Región de Los Lagos', 103, 'Osorno', 10303, 'Purranque'),
(10, 'Región de Los Lagos', 103, 'Osorno', 10304, 'Puyehue'),
(10, 'Región de Los Lagos', 103, 'Osorno', 10305, 'Río Negro'),
(10, 'Región de Los Lagos', 103, 'Osorno', 10306, 'San Juan de la Costa'),
(10, 'Región de Los Lagos', 103, 'Osorno', 10307, 'San Pablo'),
(10, 'Región de Los Lagos', 104, 'Palena', 10401, 'Chaitén'),
(10, 'Región de Los Lagos', 104, 'Palena', 10402, 'Futaleufú'),
(10, 'Región de Los Lagos', 104, 'Palena', 10403, 'Hualaihué'),
(10, 'Región de Los Lagos', 104, 'Palena', 10404, 'Palena'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 111, 'Coihaique', 11101, 'Coihaique'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 111, 'Coihaique', 11102, 'Lago Verde'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 112, 'Aisén', 11201, 'Aisén'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 112, 'Aisén', 11202, 'Cisnes'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 112, 'Aisén', 11203, 'Guaitecas'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 113, 'Capitán Prat', 11301, 'Cochrane'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 113, 'Capitán Prat', 11302, 'O’Higgins'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 113, 'Capitán Prat', 11303, 'Tortel'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 114, 'General Carrera', 11401, 'Chile Chico'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo', 114, 'General Carrera', 11402, 'Río Ibáñez'),
(12, 'Región de Magallanes y de la Antártica Chilena', 121, 'Magallanes', 12101, 'Punta Arenas'),
(12, 'Región de Magallanes y de la Antártica Chilena', 121, 'Magallanes', 12102, 'Laguna Blanca'),
(12, 'Región de Magallanes y de la Antártica Chilena', 121, 'Magallanes', 12103, 'Río Verde'),
(12, 'Región de Magallanes y de la Antártica Chilena', 121, 'Magallanes', 12104, 'San Gregorio'),
(12, 'Región de Magallanes y de la Antártica Chilena', 122, 'Antártica Chilena', 12201, 'Cabo de Hornos (Ex Navarino)'),
(12, 'Región de Magallanes y de la Antártica Chilena', 122, 'Antártica Chilena', 12202, 'Antártica'),
(12, 'Región de Magallanes y de la Antártica Chilena', 123, 'Tierra del Fuego', 12301, 'Porvenir'),
(12, 'Región de Magallanes y de la Antártica Chilena', 123, 'Tierra del Fuego', 12302, 'Primavera'),
(12, 'Región de Magallanes y de la Antártica Chilena', 123, 'Tierra del Fuego', 12303, 'Timaukel'),
(12, 'Región de Magallanes y de la Antártica Chilena', 124, 'Última Esperanza', 12401, 'Natales'),
(12, 'Región de Magallanes y de la Antártica Chilena', 124, 'Última Esperanza', 12402, 'Torres del Paine'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13101, 'Santiago'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13102, 'Cerrillos'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13103, 'Cerro Navia'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13104, 'Conchalí'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13105, 'El Bosque'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13106, 'Estación Central'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13107, 'Huechuraba'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13108, 'Independencia'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13109, 'La Cisterna'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13110, 'La Florida'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13111, 'La Granja'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13112, 'La Pintana'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13113, 'La Reina'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13114, 'Las Condes'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13115, 'Lo Barnechea'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13116, 'Lo Espejo'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13117, 'Lo Prado'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13118, 'Macul'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13119, 'Maipú'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13120, 'Ñuñoa'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13121, 'Pedro Aguirre Cerda'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13122, 'Peñalolén'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13123, 'Providencia'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13124, 'Pudahuel'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13125, 'Quilicura'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13126, 'Quinta Normal'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13127, 'Recoleta'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13128, 'Renca'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13129, 'San Joaquín'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13130, 'San Miguel'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13131, 'San Ramón'),
(13, 'Región Metropolitana de Santiago', 131, 'Santiago', 13132, 'Vitacura'),
(13, 'Región Metropolitana de Santiago', 132, 'Cordillera', 13201, 'Puente Alto'),
(13, 'Región Metropolitana de Santiago', 132, 'Cordillera', 13202, 'Pirque'),
(13, 'Región Metropolitana de Santiago', 132, 'Cordillera', 13203, 'San José de Maipo'),
(13, 'Región Metropolitana de Santiago', 133, 'Chacabuco', 13301, 'Colina'),
(13, 'Región Metropolitana de Santiago', 133, 'Chacabuco', 13302, 'Lampa'),
(13, 'Región Metropolitana de Santiago', 133, 'Chacabuco', 13303, 'Tiltil'),
(13, 'Región Metropolitana de Santiago', 134, 'Maipo', 13401, 'San Bernardo'),
(13, 'Región Metropolitana de Santiago', 134, 'Maipo', 13402, 'Buin'),
(13, 'Región Metropolitana de Santiago', 134, 'Maipo', 13403, 'Calera de Tango'),
(13, 'Región Metropolitana de Santiago', 134, 'Maipo', 13404, 'Paine'),
(13, 'Región Metropolitana de Santiago', 135, 'Melipilla', 13501, 'Melipilla'),
(13, 'Región Metropolitana de Santiago', 135, 'Melipilla', 13502, 'Alhué'),
(13, 'Región Metropolitana de Santiago', 135, 'Melipilla', 13503, 'Curacaví'),
(13, 'Región Metropolitana de Santiago', 135, 'Melipilla', 13504, 'María Pinto'),
(13, 'Región Metropolitana de Santiago', 135, 'Melipilla', 13505, 'San Pedro'),
(13, 'Región Metropolitana de Santiago', 136, 'Talagante', 13601, 'Talagante'),
(13, 'Región Metropolitana de Santiago', 136, 'Talagante', 13602, 'El Monte'),
(13, 'Región Metropolitana de Santiago', 136, 'Talagante', 13603, 'Isla de Maipo'),
(13, 'Región Metropolitana de Santiago', 136, 'Talagante', 13604, 'Padre Hurtado'),
(13, 'Región Metropolitana de Santiago', 136, 'Talagante', 13605, 'Peñaflor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_usuarios` (
  `id_tipo_usuario` int(2) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(36) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tb_tipo_usuarios`
--

INSERT INTO `tb_tipo_usuarios` (`id_tipo_usuario`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Vendedor'),
(3, 'Chofer'),
(4, 'Auxiliar'),
(5, 'Pasajero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `tipo_usuario` int(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `rut`, `nombre`, `apellido`, `contrasena`, `tipo_usuario`) VALUES
(1, '13473660-7', 'Fernando', 'Momberg', 'macmac', 1),
(2, '12312312-1', 'Dario', 'Canales', 'dario', 2),
(4, '23213211-1', 'mac', 'Donals', 'macmac', 3),
(6, '15967508-4', 'Caro', 'Rios', 'gato', 2),
(7, '159195-2', 'Chamelfo', 'elfo', '123213', 4),
(8, '123456-2', 'Cris', 'Mormay', '12345', 3),
(9, '5564', 'Cam', 'Elo', '1231', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
