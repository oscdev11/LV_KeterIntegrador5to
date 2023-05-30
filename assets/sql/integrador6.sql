-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2023 a las 19:30:49
-- Versión del servidor: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE `Cliente` (
  `id_Cliente` int(11) NOT NULL,
  `razonSocial` varchar(100) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  `rfc` varchar(15) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `numeroExterior` varchar(10) DEFAULT NULL,
  `numeroInterior` varchar(20) DEFAULT NULL,
  `codigoPostal` varchar(11) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correoElectronico` varchar(50) DEFAULT NULL,
  `direccionEnvioAlternativa` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`id_Cliente`, `razonSocial`, `alias`, `rfc`, `calle`, `colonia`, `numeroExterior`, `numeroInterior`, `codigoPostal`, `ciudad`, `estado`, `telefono`, `correoElectronico`, `direccionEnvioAlternativa`) VALUES
(1, 'SPLENDID AND ELLA MOSS DIV OF VF CONTENPORARY BRANDS, INC.', 'SPLENDID', 'GORJ8608234G3', 'S.ALAMEDA ST.4TH FLOOR', '', '777', '', '90021', 'LOS ANGELES', 'California', '2311549054', 'iabarcae@yahoo.es', ''),
(2, 'PENDLETON WOOLEN MILLS, INC.', 'PENDLETON', 'SERD8608285G3', 'NORTHWEST BROADWAY', 'MOMM770119F65', '220', '', '97209', 'PORTLAND', 'Washington', '2311112233', '	alexus3@hotmail.com', ''),
(3, 'HYBRID PROMOTIONS LLC DBA EVY OF CALIFORNIA', 'HYBRID', 'GOVM860812QA2', 'WALKER STREET', 'SAN MATEO CUAUTEPEC', '10711', '', '90630', 'CYPRESS', 'California', '2310991233', 'maeillanes@hotmail.com', ''),
(4, 'K-LINK ENTERPRISES INC', 'K-LINK', 'HEGE501203T68', 'WILSHIRE BLVD', 'JACL841028Q62', '3255', '1034', '90010', 'LOS ANGELES', 'California', '2310301010', 'cabrigo@garmendia.cl', ''),
(5, 'INDUSTRIAS BUNNY BABY S.A DE C.V.', 'BUNNY BABY', 'IBB7712286Q8', 'AV. LIC. BENITO JUAREZ', 'SAN MATEO CUAUTEPEC', '10', 'NAVE 1', '24948', 'TULTITLAN', 'Ciudad en México', '2319403710', 'osabarca@hotmail.com', ''),
(6, 'AURIMODA S.A DE C.V.', 'AURIMODA', 'AUR890515386', 'FRAY SERVANDO TERESA DE MIER', 'CENTRO CUAUTEMOC', '143', '1ro. Y 2do.', '60800', 'MEXICO', 'Ciudad en México', '2317516451', 'carlosaguileram@hotmail.com', ''),
(7, 'JK MONTERREY S.A DE C.V.', 'JK MONTERREY', 'JMO0110248D6', 'AVENIDA SEGUNDA', 'LUIS ECHEVERRIA, SANTA CATRIN', '304', '', '66358', 'MONTERREY', 'Nuevo León', '2319586400', 'vizkala@hotmail.com', ''),
(8, 'GRUPO INDUSTRIAL DE CONFECCIONES S.A DE C.V.', 'GRUPO INDUSTRIAL', 'GIC850806BSA', 'MORELOS', 'BARRIO DE AHUATENO', '100', '', '73830', 'TEZIUTLAN', 'Puebla', '2317410203', 'alexus3@hotmail.com', ''),
(9, 'INNOVA IMAGEN S.A. DE C.V.', 'INNOVA IMAGEN', 'IIM040714VC1', 'SAN ANGEL', 'CHURUBUSCO', '401', '', '64590', 'MONTERREY', 'Nuevo León', '2313529513', 'apalamosg@hotmail.com', ''),
(10, 'MAZADA GARMENT MANUFACTURING S.A DE C.V.', 'MAZADA GARMENT', 'MGM151218FX5', ' 11', 'FRANCIA NORTE', '245', '', '73880', 'TEZIUTLAN', 'Puebla', '2319638552', 'leonor.araya@gmail.com', ''),
(11, 'MAD ENGINE, LLC', 'MAD ENGINE', 'RAGF630503EW7', 'COBRA WAY', 'CIRCUITO JUAN PABLO', '558', '', '92121', 'SAN DIEGO', 'Puebla', '2318527845', 'paulifran@hotmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Color`
--

CREATE TABLE `Color` (
  `id_Color` int(11) NOT NULL,
  `nombreColor` varchar(30) DEFAULT NULL,
  `abreviaturaColor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Color`
--

INSERT INTO `Color` (`id_Color`, `nombreColor`, `abreviaturaColor`) VALUES
(1, 'FireBrick', '#B22222'),
(2, 'LightPink', '#FFB6C1'),
(3, 'PaleVioletRed', '#C71585'),
(4, 'Coral', '#FF7F50'),
(5, 'Tomato', '#FF6347'),
(6, 'DarkOrange', '#FF8C00'),
(7, 'PaleGoldenrod', '#EEE8AA'),
(8, 'Khaki', '#F0E68C'),
(9, 'Thistle', '#D8BFD8'),
(10, 'MediumPurple', '#9370DB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departamento`
--

CREATE TABLE `Departamento` (
  `id_Departamento` int(11) NOT NULL,
  `id_Planta` int(11) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Departamento`
--

INSERT INTO `Departamento` (`id_Departamento`, `id_Planta`, `nombre`) VALUES
(1, 1, 'Area Contruccion'),
(2, 1, 'Area Coloracion'),
(3, 1, 'Area Tratamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleado`
--

CREATE TABLE `Empleado` (
  `id_Empleado` int(11) NOT NULL,
  `id_Puesto` int(11) DEFAULT NULL,
  `numTrabajador` varchar(10) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellidoPaterno` varchar(50) DEFAULT NULL,
  `apellidoMaterno` varchar(50) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `RFC` varchar(15) DEFAULT NULL,
  `CURP` varchar(18) DEFAULT NULL,
  `NSS` varchar(20) DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `sexo` enum('H','M') DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `estadoSalud` enum('Saludable','Discapacitadad','Enfermedad') DEFAULT NULL,
  `observaciones` varchar(1000) DEFAULT NULL,
  `estadoCivil` enum('Casado','Soltero','Viudo') DEFAULT NULL,
  `telefonoContacto` varchar(10) DEFAULT NULL,
  `correoElectronico` varchar(50) DEFAULT NULL,
  `estatus` enum('Activo','Renuncia','Baja','Despido') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Empleado`
--

INSERT INTO `Empleado` (`id_Empleado`, `id_Puesto`, `numTrabajador`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `domicilio`, `RFC`, `CURP`, `NSS`, `fechaIngreso`, `sexo`, `fechaNacimiento`, `estadoSalud`, `observaciones`, `estadoCivil`, `telefonoContacto`, `correoElectronico`, `estatus`) VALUES
(1, 1, '42472', 'Moises', 'Bustos', 'Castellano', 'C Viveros 45', 'ABC061225KA9', 'ABC061225JPLSSA9', '5777310643', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Viudo', '2314568655', 'hola@gmail.com', 'Activo'),
(2, 2, '77160', 'Alejandro', 'Hérnandez', 'Roque', 'C Aldama 56', 'ABC061225KA9', 'ABC061225JPLSSA9', '7780579020', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '1598654745', 'jajajaj@gmail.com', 'Activo'),
(3, 2, '15184', 'Diana', 'Bautista', 'Espinoza', 'C Martínez 58', 'ABC061225KA9', 'ABC061225JPLSSA9', '9313364865', '2022-05-20', 'M', '1999-06-06', 'Saludable', '', 'Casado', '2315698653', 'estoesuncorreo@gmail.com', 'Activo'),
(4, 3, '40809', 'Kenia', 'Bustamante', 'Álvares', 'Av. Morelos 569', 'ABC061225KA9', 'ABC061225JPLSSA9', '1027445622', '2022-05-20', 'M', '1999-06-06', 'Saludable', '', 'Soltero', '2654589685', 'micorreo@gmail.com', 'Activo'),
(5, 4, '98974', 'Adolfo', 'Castelan', 'Torres', 'Priv. Xalapa 3', 'ABC061225KA9', 'ABC061225JPLSSA9', '4193098713', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '3256891526', 'castelanxd@gmail.com', 'Activo'),
(6, 5, '26958', 'María', 'López', 'Pérez', 'C. 5 de mayo 163', 'ABC061225KA9', 'ABC061225JPLSSA9', '7741637835', '2022-05-20', 'M', '1999-06-06', 'Saludable', '', 'Soltero', '4586952357', 'olasoygerman@gmail.com', 'Activo'),
(7, 6, '29168', 'Benjamin', 'Landero', 'Martínez', 'C. Matamoros 89', 'ABC061225KA9', 'ABC061225JPLSSA9', '1332970282', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '5698654210', 'amdryzen@gmail.com', 'Activo'),
(8, 6, '94937', 'Brandon', 'Jimenez', 'Murrieta', 'Priv. Sin nombre 47', 'ABC061225KA9', 'ABC061225JPLSSA9', '4274463499', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Soltero', '2311000028', 'maquinaferoz@gmail.com', 'Baja'),
(9, 7, '12354', 'Gael', 'Torres', 'Díaz', 'Priv. Juan Aldama 15', 'ABC061225KA9', 'ABC061225JPLSSA9', '4545643735', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '8945628675', 'antman@gmail.com', 'Activo'),
(10, 8, '84091', 'Emmanuel', 'Tejeda', 'Tejeda', 'C. Benito Juárez 89', 'ABC061225KA9', 'ABC061225JPLSSA9', '6848772688', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '1259863214', 'midudev@gmail.com', 'Activo'),
(11, 9, '12590', 'Hugo', 'García', 'González', 'Priv. Juan Aldama 15', 'ABC061225KA9', 'ABC061225JPLSSA9', '4545643735', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '8945628675', 'antman@gmail.com', 'Activo'),
(12, 9, '99999', 'Martín', 'López', 'Pérez', 'Priv. Juan Aldama 15', 'ABC061225KA9', 'ABC061225JPLSSA9', '4545643735', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '8945628675', 'antman@gmail.com', 'Activo'),
(13, 10, '18348', 'Leo', 'Vázquez', 'Cruz', 'Priv. Juan Aldama 15', 'ABC061225KA9', 'ABC061225JPLSSA9', '4545643735', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '8945628675', 'antman@gmail.com', 'Activo'),
(14, 11, '98829', 'Daniel', 'Morales', 'Ramírez', 'Priv. Juan Aldama 15', 'ABC061225KA9', 'ABC061225JPLSSA9', '4545643735', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '8945628675', 'antman@gmail.com', 'Activo'),
(15, 12, '0214', 'Alejandro', 'González', 'Rodríguez', 'Priv. Juan Aldama 15', 'ABC061225KA9', 'ABC061225JPLSSA9', '4545643735', '2022-05-20', 'H', '1999-06-06', 'Saludable', '', 'Casado', '8945628675', 'antman@gmail.com', 'Activo'),
(16, 5, '13513515', 'osc', 'luna', 'santiago', 'adsf', 'asdfas', 'asdfa', '5646', '2023-06-07', 'H', '2023-05-19', 'Discapacitadad', 'asdf', 'Casado', '1323', 'asdfa@dasfd.com', 'Activo'),
(17, 1, '2566', 'Cata Antonio', 'Rodriguez', 'Mendez', 'Teziutlan Puebla', 'egsdfgsdfg', 'sdfgsdfhsgdfh', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', ''),
(20, 8, '561351', 'cliente1', 'adsfasdf', 'asdfa', 'asdfa', 'asdfa', 'asdfasdf', 'asdfasd', '2023-01-31', 'H', '2022-12-30', 'Discapacitadad', 'fasdf', 'Casado', '645651', 'asdfa@dasfd.com', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estatus`
--

CREATE TABLE `Estatus` (
  `id_Pedido` int(11) NOT NULL,
  `id_JefeDepartamento` int(11) NOT NULL,
  `fechaEntrada` date DEFAULT NULL,
  `estado` enum('En espera','En proceso','Completado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JefeDepartamento`
--

CREATE TABLE `JefeDepartamento` (
  `id_JefeDepartamento` int(11) NOT NULL,
  `id_Empleado` int(11) DEFAULT NULL,
  `nombreUsuario` varchar(30) DEFAULT NULL,
  `contra` varchar(50) DEFAULT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `JefeDepartamento`
--

INSERT INTO `JefeDepartamento` (`id_JefeDepartamento`, `id_Empleado`, `nombreUsuario`, `contra`, `perfil`) VALUES
(1, 1, 'JEF_Tra_1', '6491d8f3bf65933b3af7fdd85cccb462', 2),
(2, 6, 'JEF_Pin_1', '07a9ff8aa95c98f1c94b7392e2aec3d2', 2),
(3, 10, 'JEF_Est_1', '25f9e794323b453885f5181f1b624d0b', 2),
(14, 16, 'JD', 'd24f60bdeb635e4d989ddb5356b4e7fd', 2),
(15, 16, 'JDD', '0192023a7bbd73250516f069df18b500', 1),
(16, 17, 'oooo', 'ce7ce9108ae218e4ee612b0b36e3ed1d', 2),
(17, 20, 'CLIENTE1', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(18, 20, 'CLIENTE2', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(19, 20, 'ADMIN1', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Material`
--

CREATE TABLE `Material` (
  `id_Material` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `tipo` enum('Natural','Sintetico') DEFAULT NULL,
  `fabricante` varchar(50) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `cantidadDisponible` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Material`
--

INSERT INTO `Material` (`id_Material`, `nombre`, `tipo`, `fabricante`, `descripcion`, `cantidadDisponible`) VALUES
(1, 'Algodón', 'Natural', 'Abaquim, S.A', 'Buen servicio y calidad', 2000),
(2, 'Seda', 'Natural', 'FarmaNova, S.A. de C.V.', 'Excelentes precios', 300.5),
(3, 'Lino', 'Sintetico', 'Gremco, S.A. de C.V.', 'Atencion aceptable', 20),
(4, 'Lana', 'Natural', 'Koprimo, S.A. de C.V.', 'Entregas puntuales', 30),
(5, 'Cuero', 'Sintetico', 'Medivac, S.A. de C.V.', 'Mala organizacion', 50),
(6, 'Poliéster', 'Natural', 'Pochteca Materias Primas', 'Excelentes precios', 100012),
(7, 'Lycra', 'Sintetico', 'Quimygraf Solutions, S. de R.L. MI', 'Excelentes precios', 120.2),
(8, 'Nylon', 'Sintetico', 'Abaquim, S.A', 'Excelentes precios', 68.3),
(9, 'Algodón', 'Natural', 'Gremco, S.A. de C.V.', 'Atencion aceptabe', 58.69),
(10, 'Viscosa', 'Sintetico', 'Pochteca Materias Primas', 'Entregas puntuales', 15.68);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MaterialPedido`
--

CREATE TABLE `MaterialPedido` (
  `id_Pedido` int(11) NOT NULL,
  `id_Material` int(11) NOT NULL,
  `porcentaje` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdenProduccion`
--

CREATE TABLE `OrdenProduccion` (
  `id_OrdenProduccion` int(11) NOT NULL,
  `id_Planta` int(11) DEFAULT NULL,
  `id_Cliente` int(11) DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `domicilioEnvio` varchar(200) DEFAULT NULL,
  `comentarios` varchar(150) DEFAULT NULL,
  `estado` enum('En espera','En proceso','Terminado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `OrdenProduccion`
--

INSERT INTO `OrdenProduccion` (`id_OrdenProduccion`, `id_Planta`, `id_Cliente`, `fechaCaptura`, `fechaEntrega`, `domicilioEnvio`, `comentarios`, `estado`) VALUES
(1, 1, 1, '2023-05-02', '2022-05-05', 'Atoluca Teziutlan Puebla', '', 'En espera'),
(2, 1, 2, '2023-05-02', '2022-06-06', 'Cedral Teziutlan Puebla', '', 'En proceso'),
(3, 1, 3, '2023-05-02', '2022-07-07', 'Acateno Teziutlan Puebla', '', 'En espera'),
(4, 1, 4, '2023-05-02', '2022-08-08', 'San Diego Teziutlan Puebla', '', 'En proceso'),
(5, 1, 5, '2023-05-02', '2022-09-09', 'San juan Teziutlan Puebla', '', 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE `Pedido` (
  `id_Pedido` int(11) NOT NULL,
  `id_OrdenProduccion` int(11) DEFAULT NULL,
  `id_Color` int(11) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `PrecioUnitario` float DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Planta`
--

CREATE TABLE `Planta` (
  `id_Planta` int(11) NOT NULL,
  `id_UserAdmin` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `domicilio` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Planta`
--

INSERT INTO `Planta` (`id_Planta`, `id_UserAdmin`, `nombre`, `alias`, `telefono`, `domicilio`) VALUES
(1, 1, 'keter_1', 'EL chido', '231137046', 'Teziutlan,Atoluca Seccion 3,Calle independia num 45'),
(2, 1, 'keter_2', 'El Pro', '231100028‬', 'Teziutlan,Atoluca Seccion 3,Calle Predregal num 14'),
(5, 1, 'Champy', 'hkh', '2325938406', 'hjhjhj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Puesto`
--

CREATE TABLE `Puesto` (
  `id_Puesto` int(11) NOT NULL,
  `id_Departamento` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Puesto`
--

INSERT INTO `Puesto` (`id_Puesto`, `id_Departamento`, `nombre`) VALUES
(1, 1, 'Jefe De Departamento'),
(2, 1, 'Limpiesa'),
(3, 1, 'Empleado - Contruccion 1'),
(4, 1, 'Empleado - Contruccion 2'),
(5, 2, 'Jefe De Departamento'),
(6, 2, 'Limpiesa'),
(7, 2, 'Empleado - Coloracion 1'),
(8, 3, 'Jefe De Departamento'),
(9, 3, 'Limpiesa'),
(10, 3, 'Empleado - Tratamiento 1'),
(11, 3, 'Empleado - Tratamiento 2'),
(12, 3, 'Empleado - Tratamiento 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Quimico`
--

CREATE TABLE `Quimico` (
  `id_Quimico` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `fabricante` varchar(50) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `cantidadDisponible` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Quimico`
--

INSERT INTO `Quimico` (`id_Quimico`, `nombre`, `fabricante`, `descripcion`, `cantidadDisponible`) VALUES
(1, 'Alquifenoles', 'Arkema México S.A. de C.V.', '', 18000),
(2, 'Ftalatos', 'BASF Mexicana S.A. de C.V.', '', 15000),
(3, 'Bromados', 'Charlote Chemical inc.', '', 20000),
(4, 'Azoicos', 'Disan Mexico S.A. de C.V.', '', 16000),
(5, 'Perfluorados', 'Fortequim S.A. de C.V.', '', 5000),
(6, 'Clorobencenos', 'Quimi Kao S.A. de C.V.', '', 8000),
(7, 'Clorox', 'Charlote Chemical inc.', '', 25000),
(8, 'Benceno', 'Charlote Chemical inc.', '', 14000),
(9, 'Butadieno', 'Arkema México S.A. de C.V.', '', 6000),
(10, 'Estireno', 'Arkema México S.A. de C.V.', '', 9000),
(11, 'Pigmento Amarillo', 'Disan Mexico S.A. de C.V.', '', 30000),
(12, 'Pigmento Azul', 'Disan Mexico S.A. de C.V.', '', 30000),
(13, 'Pigmento Rojo', 'Disan Mexico S.A. de C.V.', '', 30000),
(14, 'Resiona', 'Disan Mexico S.A. de C.V.', '', 60000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `QuimicoColor`
--

CREATE TABLE `QuimicoColor` (
  `id_Quimico` int(11) NOT NULL,
  `id_Color` int(11) NOT NULL,
  `cantidadUsar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `QuimicoTratamiento`
--

CREATE TABLE `QuimicoTratamiento` (
  `id_Quimico` int(11) NOT NULL,
  `id_Tratamiento` int(11) NOT NULL,
  `cantidadUsar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tratamiento`
--

CREATE TABLE `Tratamiento` (
  `id_Tratamiento` int(11) NOT NULL,
  `nombreTratamiento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Tratamiento`
--

INSERT INTO `Tratamiento` (`id_Tratamiento`, `nombreTratamiento`) VALUES
(1, 'Lavado con ácido'),
(2, 'Cepillado'),
(3, 'Blanqueamiento'),
(4, 'Tratamiento Cuástico'),
(5, 'Calandrado'),
(6, 'Técnicas de agotamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TratamientoPedido`
--

CREATE TABLE `TratamientoPedido` (
  `id_Pedido` int(11) NOT NULL,
  `id_Tratamiento` int(11) NOT NULL,
  `tiempoEnTratamiento` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UserAdmin`
--

CREATE TABLE `UserAdmin` (
  `id_UserAdmin` int(11) NOT NULL,
  `nombreUsuario` varchar(30) DEFAULT NULL,
  `contra` varchar(50) DEFAULT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `UserAdmin`
--

INSERT INTO `UserAdmin` (`id_UserAdmin`, `nombreUsuario`, `contra`, `perfil`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `Color`
--
ALTER TABLE `Color`
  ADD PRIMARY KEY (`id_Color`);

--
-- Indices de la tabla `Departamento`
--
ALTER TABLE `Departamento`
  ADD PRIMARY KEY (`id_Departamento`),
  ADD KEY `FK_idPlanta` (`id_Planta`);

--
-- Indices de la tabla `Empleado`
--
ALTER TABLE `Empleado`
  ADD PRIMARY KEY (`id_Empleado`),
  ADD UNIQUE KEY `numTrabajador` (`numTrabajador`),
  ADD KEY `FK_idPuesto` (`id_Puesto`);

--
-- Indices de la tabla `Estatus`
--
ALTER TABLE `Estatus`
  ADD PRIMARY KEY (`id_Pedido`,`id_JefeDepartamento`);

--
-- Indices de la tabla `JefeDepartamento`
--
ALTER TABLE `JefeDepartamento`
  ADD PRIMARY KEY (`id_JefeDepartamento`),
  ADD KEY `FK_idEmpleado` (`id_Empleado`);

--
-- Indices de la tabla `Material`
--
ALTER TABLE `Material`
  ADD PRIMARY KEY (`id_Material`);

--
-- Indices de la tabla `MaterialPedido`
--
ALTER TABLE `MaterialPedido`
  ADD PRIMARY KEY (`id_Pedido`,`id_Material`);

--
-- Indices de la tabla `OrdenProduccion`
--
ALTER TABLE `OrdenProduccion`
  ADD PRIMARY KEY (`id_OrdenProduccion`),
  ADD KEY `FK_idplanta1` (`id_Planta`);

--
-- Indices de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`id_Pedido`);

--
-- Indices de la tabla `Planta`
--
ALTER TABLE `Planta`
  ADD PRIMARY KEY (`id_Planta`),
  ADD KEY `FK_iduseradmin` (`id_UserAdmin`);

--
-- Indices de la tabla `Puesto`
--
ALTER TABLE `Puesto`
  ADD PRIMARY KEY (`id_Puesto`),
  ADD KEY `FK_iddepartamento` (`id_Departamento`);

--
-- Indices de la tabla `Quimico`
--
ALTER TABLE `Quimico`
  ADD PRIMARY KEY (`id_Quimico`);

--
-- Indices de la tabla `QuimicoColor`
--
ALTER TABLE `QuimicoColor`
  ADD PRIMARY KEY (`id_Quimico`,`id_Color`);

--
-- Indices de la tabla `QuimicoTratamiento`
--
ALTER TABLE `QuimicoTratamiento`
  ADD PRIMARY KEY (`id_Quimico`,`id_Tratamiento`);

--
-- Indices de la tabla `Tratamiento`
--
ALTER TABLE `Tratamiento`
  ADD PRIMARY KEY (`id_Tratamiento`);

--
-- Indices de la tabla `TratamientoPedido`
--
ALTER TABLE `TratamientoPedido`
  ADD PRIMARY KEY (`id_Pedido`,`id_Tratamiento`);

--
-- Indices de la tabla `UserAdmin`
--
ALTER TABLE `UserAdmin`
  ADD PRIMARY KEY (`id_UserAdmin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Color`
--
ALTER TABLE `Color`
  MODIFY `id_Color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `Departamento`
--
ALTER TABLE `Departamento`
  MODIFY `id_Departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Empleado`
--
ALTER TABLE `Empleado`
  MODIFY `id_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `JefeDepartamento`
--
ALTER TABLE `JefeDepartamento`
  MODIFY `id_JefeDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `Material`
--
ALTER TABLE `Material`
  MODIFY `id_Material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `OrdenProduccion`
--
ALTER TABLE `OrdenProduccion`
  MODIFY `id_OrdenProduccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `id_Pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Planta`
--
ALTER TABLE `Planta`
  MODIFY `id_Planta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Puesto`
--
ALTER TABLE `Puesto`
  MODIFY `id_Puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Quimico`
--
ALTER TABLE `Quimico`
  MODIFY `id_Quimico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `Tratamiento`
--
ALTER TABLE `Tratamiento`
  MODIFY `id_Tratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `UserAdmin`
--
ALTER TABLE `UserAdmin`
  MODIFY `id_UserAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Departamento`
--
ALTER TABLE `Departamento`
  ADD CONSTRAINT `FK_idPlanta` FOREIGN KEY (`id_Planta`) REFERENCES `Planta` (`id_Planta`);

--
-- Filtros para la tabla `Empleado`
--
ALTER TABLE `Empleado`
  ADD CONSTRAINT `FK_idPuesto` FOREIGN KEY (`id_Puesto`) REFERENCES `Puesto` (`id_Puesto`);

--
-- Filtros para la tabla `JefeDepartamento`
--
ALTER TABLE `JefeDepartamento`
  ADD CONSTRAINT `FK_idEmpleado` FOREIGN KEY (`id_Empleado`) REFERENCES `Empleado` (`id_Empleado`);

--
-- Filtros para la tabla `OrdenProduccion`
--
ALTER TABLE `OrdenProduccion`
  ADD CONSTRAINT `FK_idplanta1` FOREIGN KEY (`id_Planta`) REFERENCES `Planta` (`id_Planta`);

--
-- Filtros para la tabla `Planta`
--
ALTER TABLE `Planta`
  ADD CONSTRAINT `FK_iduseradmin` FOREIGN KEY (`id_UserAdmin`) REFERENCES `UserAdmin` (`id_UserAdmin`);

--
-- Filtros para la tabla `Puesto`
--
ALTER TABLE `Puesto`
  ADD CONSTRAINT `FK_iddepartamento` FOREIGN KEY (`id_Departamento`) REFERENCES `Departamento` (`id_Departamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
