-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2017 a las 14:23:20
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fundacedis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobantes`
--

CREATE TABLE IF NOT EXISTS `comprobantes` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `numero` int(1) NOT NULL,
  `monto` float(7,2) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `tipo` enum('deposito','transferencia','tdc') NOT NULL,
  `fecha_compro` date NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `verificado` enum('no','si') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `comprobantes`
--

INSERT INTO `comprobantes` (`id`, `numero`, `monto`, `banco`, `tipo`, `fecha_compro`, `fecha_recepcion`, `cedula`, `verificado`) VALUES
(1, 23123123, 20000.00, 'Venezuela', 'deposito', '2017-02-01', '2017-02-19', '23524026', 'si'),
(2, 23123123, 10000.00, 'Venezuela', 'deposito', '2017-02-01', '2017-02-19', '23524026', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diplomados`
--

CREATE TABLE IF NOT EXISTS `diplomados` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `obj_general` text NOT NULL,
  `obj_especifico` text NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `duracion` text NOT NULL,
  `cupos_max` varchar(20) NOT NULL,
  `costo` varchar(30) NOT NULL,
  `region` enum('aragua','oriente') NOT NULL,
  `baner` text NOT NULL,
  `imagen` text NOT NULL,
  `titulo_requerido` text NOT NULL,
  `disponibilidad` text NOT NULL,
  `aptitud` text NOT NULL,
  `disposicion` text NOT NULL,
  `interes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `diplomados`
--

INSERT INTO `diplomados` (`id`, `nombre`, `descripcion`, `obj_general`, `obj_especifico`, `mision`, `vision`, `duracion`, `cupos_max`, `costo`, `region`, `baner`, `imagen`, `titulo_requerido`, `disponibilidad`, `aptitud`, `disposicion`, `interes`) VALUES
(1, 'TÃ©cnicas e instrumentaciÃ³n QuirÃºrgica', 'El Diplomado de InstrumentaciÃ³n QuirÃºrgica , es un programa teÃ³rico- prÃ¡ctico, basado en los principios, normas y tÃ©cnicas quirÃºrgicas, lo cual permite al participante aplicar el Proceso de los Cuidados de EnfermerÃ­a a pacientes sometidos a procedimientos peri operatorios , dado que actualmente los indicadores del Ã­ndice de Morbi-mortalidad de las patologÃ­as medico- quirÃºrgico en Venezuela, se ubican entre las tres primeras causas de Morbi.-mortalidad lo que destaca la importancia de contar con profesionales de enfermerÃ­a capaces de responder a demanda del sector salud y contribuir a mejorar la atenciÃ³n y los cuidados a los usuarios que requieren tratamientos medico-quirÃºrgicos. Este diplomado exige que el participante posea conocimientos previos acerca de los fundamentos en los cuidados de enfermerÃ­a, conceptos bÃ¡sicos de semiolÃ³gica, psicologÃ­a y fisiopatologÃ­a de allÃ­ la importancia de tener como requisito mÃ­nimo para su ingreso poseer el Titulo de TÃ©cnico Superior en EnfermerÃ­a o Licenciado en EnfermerÃ­a.', 'Formar un profesional en InstrumentaciÃ³n QuirÃºrgica integro, idÃ³neo y analÃ­tico que aplique sus conocimientos, habilidades y destrezas durante el ejercicio de su labor en centrales de esterilizaciÃ³n, vigilancia y control de los procesos de asepsia y antisepsia, la preparaciÃ³n de los materiales, equipos bÃ¡sicos y de alta tecnologÃ­a necesarios en los procesos de cirugÃ­a, siendo miembro fundamental del grupo quirÃºrgico, contribuyendo asÃ­ al desarrollo rÃ¡pido y eficiente del procedimiento y del beneficio postoperatorio del paciente, orientado a la disminuciÃ³n de infecciones intrahospitalarias. AsÃ­ mismo, se espera que los participantes se encuentren en capacidad de desempeÃ±arse a nivel administrativo, docente, y comercial en labores afines al ejercicio quirÃºrgico', '<li>Capacitar al participante con las competencias especÃ­ficas para el manejo de la instrumentaciÃ³n quirÃºrgica, bajo parÃ¡metros socio-humanÃ­sticos y dominio teÃ³rico-prÃ¡ctico de los diversos procedimientos quirÃºrgicos.</li><li>Capacitar la participante de manera integral, crÃ­tica y reflexiva para la ejecuciÃ³n de procedimientos en instrumentaciÃ³n quirÃºrgica.</li><li>Promover la capacitaciÃ³n y mejoramiento del personal que labora en los quirÃ³fanos logrando optimizar la atenciÃ³n al paciente quirÃºrgico durante la prestaciÃ³n del servicio de enfermerÃ­a en los periodos pre, trans y post-operatorios.</li>', 'Aqui va una misionFormar de profesionales integrales, con conocimientos cientÃ­ficos, humanista y tecnolÃ³gico, en la aplicaciÃ³n de procesos de instrumentaciÃ³n, asepsia, desinfecciÃ³n, esterilizaciÃ³n, bioseguridad y administraciÃ³n para el intercambio con el equipo de salud en las tomas de decisiones con el objetivo de mejorar las condiciones del usuario en el tratamiento quirÃºrgico por ende la familia y la comunidad donde se desempeÃ±e y del paÃ­s en general. Y contribuir con el fortalecimiento de los programas de salud en el Ã¡rea quirÃºrgica y al mismo tiempo formar especialistas, tÃ©cnicos y cientÃ­ficamente eficientes, con la instituciÃ³n donde labora y la seguridad a la cual pertenece.', 'Fortalecer de los programas de salud en el Ã¡rea quirÃºrgica y al mismo tiempo formar especialistas, tÃ©cnicos y cientÃ­ficamente eficientes, altamente calificado, experto en procedimientos y tÃ©cnicas quirÃºrgicas, con capacidad tanto de gerencial las unidades quirÃºrgicas y desempeÃ±ar todas las funciones inherentes al trabajo quirÃºrgico, optimizando la atenciÃ³n que se le ofrece al enfermo y maximizando el manejo de los insumos y equipos a su cargo, con conocimiento microbiolÃ³gico utilizando la bioÃ©tica como un patrÃ³n obligado de conducta; con calidad humana, liderazgo, habilidad y destreza en los procesos propios de su profesiÃ³n en Pro de una atenciÃ³n integral, fundamentada en el respeto, la Ã©tica y la vocaciÃ³n de servicio.  ', '', '', '70000', 'aragua', 'images/diplomados/iq.jpg', 'images/diplomados/iq2.jpg', '', '', '', '', ''),
(2, 'EmergenciologÃ­a Y Trauma Shock', 'La atenciÃ³n al paciente crÃ­tico en el Ã¡rea hospitalaria y prehospitalarÃ­a, exige la existencia de servicios especÃ­ficos (servicios de Emergencias y trauma shock). Estos servicios, que necesitan profesionales especializados para desarrollar su actividad con eficacia, son imprescindibles dentro de un sistema de cuidados progresivos y estructurados, ya que representan un mÃ¡ximo nivel asistencial al paciente en estado crÃ­tico. Hay que destacar tambiÃ©n, que muchos de los avances de la medicina en el tratamiento y mantenimiento de las funciones vitales de los pacientes (ventilaciÃ³n artificial, asistencia circulatoria mecÃ¡nica, sustituciÃ³n renal con tÃ©cnica continua...) no podrÃ­an llevarse a cabo si no se dispusiera de profesionales muy bien capacitados para asumir las competencias que requiere la atenciÃ³n al paciente en estos servicios.', 'Formar mÃ©dicos, enfermeras(os) y bomberos con los conocimiento y destrezas necesarias que les permitan prestar cuidados de calidad, en el nivel avanzado, relacionados con las situaciones crÃ­ticas y de urgencias y emergencias que surgen en la trayectoria vital de los individuos y las comunidades que requieran de los cuidados en las unidades o servicios de Emergencias, alterando los estados bÃ¡sicos de salud y que suponen riesgo para la vida, dotando, al mismo tiempo de las herramientas y de las nociones necesarias que les permitan formar, investigar, gestionar y asumir responsabilidades en todos los Ã¡mbitos de su campo de actuaciÃ³n.', '<li>Proporcionar atenciÃ³n integral, oportuna, Ã©tica y humana al paciente que se encuentra en emergencia.</li>\n<li>Desarrollar y adquirir herramientas en el manejo de una emergencia y/o urgencia.</li>\n<li>Implementar la gestiÃ³n estratÃ©gica en el proceso de atenciÃ³n de enfermerÃ­a y en la identificaciÃ³n de riesgos a la salud, como metodologÃ­as para la prevenciÃ³n, identificaciÃ³n y soluciÃ³n de problemas del paciente que se encuentra en emergencia.</li>\n<li>Interpretar y aplicar la normatividad y polÃ­ticas de salud institucionales, encaminadas a asegurar la calidad y mejoramiento continuo de los procesos de enfermerÃ­a.</li>\n<li>Adquirir conocimientos, habilidades y destrezas para identificar, diagnosticar las diversas emergencias a nivel hospitalario.</li> ', 'Formar mÃ©dicos, enfermeras(os) y bomberos con los conocimiento acadÃ©micos cientÃ­ficos, tecnolÃ³gicos y destrezas necesarias que les permitan prestar atenciÃ³n y cuidados de calidad, en el nivel avanzado , relacionados con las situaciones de emergencias, urgencias y trauma shock que surgen en la trayectoria vital de los individuos y las comunidades alterando los estados bÃ¡sicos de salud y que suponen riesgo para la vida, dotando, al mismo tiempo, a los mÃ©dicos, enfermeras(os) y bomberos en Emergenciologia y trauma shock, de los conocimientos necesarios que les permitan formar, investigar, gestionar y asumir responsabilidades en todos los Ã¡mbitos de su campo de actuaciÃ³n; sin olvidar el enfoque socio humanista por el impacto en el entorno psicosocial, familiar y Ã©tico legal que esto implica.', 'Capacitar mÃ©dicos y enfermeras(os) que proporcionen los atenciÃ³n y cuidados a personas con problemas de salud en situaciÃ³n crÃ­tica, de alto riesgo o en fase terminal, a nivel individual o colectivo, en un Ã¡mbito hospitalario pÃºblico o privado agilizando la toma de decisiones de la prÃ¡ctica asistencial.', 'El programa tendrÃ¡ una duraciÃ³n de 200 horas AcadÃ©micas, teÃ³ricas prÃ¡cticas', '', '80000', 'aragua', 'images/diplomados/emg1.jpg', 'images/diplomados/emg2.jpg', 'Licenciatura y/o TSU en enfermerÃ­a, licenciatura en bomberos, MÃ©dicos cirujanos o integrales. Otros profesionales', 'Disponibilidad mÃ­nima de medio tiempo para cumplir con las actividades AcadÃ©micas del Diplomado ', 'Aptitud fÃ­sica y mental para participar eficientemente en el Ã¡rea de Emergencia de Adulto.', 'DisposiciÃ³n para realizar trabajo con otros profesionistas que integran el equipo el Ã¡rea de Emergencia de Adulto.', 'InterÃ©s por las actividades acadÃ©micas de anÃ¡lisis y reflexiÃ³n de las prÃ¡cticas actuales de la enfermerÃ­a, con miras a realizar propuestas y participar en el mejoramiento de la calidad de la atenciÃ³n del paciente crÃ­tico.'),
(3, 'Cuidados intensivos en adultos', 'El propÃ³sito del Diplomado de Cuidados Intensivos en Adulto es ofrecer al participante conocimientos con Ã©nfasis en esta Ã¡rea, con alta competencia cientÃ­fica y capacidad de liderazgo, con bases sÃ³lidas en valores Ã©ticos y humanos, de modo que atiendan y cuiden al paciente en un momento muy vulnerable de sus vidas, que requieran monitoreo constante, profesionales capaces de responder al reto que la actualidad nos plantea, no siendo otro, la de brindar atenciÃ³n en salud con la mayor calidad y al menor costo generando estrategias que permitan el manejo clÃ­nico y terapÃ©utico.', 'Formar Profesionales (mÃ©dicos y de enfermerÃ­a) en Cuidados Intensivos del Adulto, con los conocimiento y herramientas necesarias para desarrollar destrezas y habilidades que les permitan prestar una atenciÃ³n de calidad, en el nivel avanzado, relacionados con las situaciones crÃ­ticas que surjan en la trayectoria vital del paciente, alterando los estados bÃ¡sicos de salud y que suponen riesgo para la vida, dotando, al mismo tiempo a mÃ©dicos y enfermera (os) en Cuidados Intensivos de los conocimientos necesarios que les permitan formar, investigar, gestionar y asumir responsabilidades en todos los Ã¡mbitos de su campo de actuaciÃ³n.', '<li>Analizar la estructura y funcionamiento de los servicios de cuidados intensivos del adulto.</li>\n<li>Proporcionar atenciÃ³n y cuidados especializados generando bienestar, seguridad y comodidad al paciente y familia.</li>\n<li>Utilizar con destreza y seguridad la tecnologÃ­a y los medios de apoyo diagnÃ³stico de los pacientes en cuidado intensivo.</li>\n<li>Coordinar actividades con otros integrantes del equipo multidisciplinar de la unidad de cuidados intensivos.</li>\n<li>Aplicar los protocolos y procedimientos especÃ­ficos en los eventos y/o patologÃ­as que presenta los pacientes en la unidad de cuidados intensivos.</li>', 'Formar profesionales (mÃ©dicos y de enfermerÃ­a) en cuidados intensivos del adulto, con alta competencia cientÃ­fica y capacidad de liderazgo, habilidades y destrezas, con bases sÃ³lidas en valores Ã©ticos y humanos, de modo que atiendan al paciente y familia en un momento muy vulnerable de sus vidas.', 'Formar profesionales (mÃ©dicos y de enfermerÃ­a) con conocimientos cientÃ­ficos, pensamiento crÃ­tico y habilidades en tÃ©cnicas de gestiÃ³n del cuidado intensivo del adulto, que contribuyan eficazmente a mejorar la calidad de la atenciÃ³n que se otorga en los servicios de salud. Se espera desarrollen estrategias para guiar los cambios necesarios en los servicios de salud, cautelando y asegurando la dignidad de los usuarios y el respeto a los derechos de los pacientes.', 'El programa tendrÃ¡ una duraciÃ³n de 200 horas AcadÃ©micas, teÃ³ricas prÃ¡cticas', '', '50000', 'aragua', 'images/diplomados/ciu1.jpg', 'images/diplomados/ciu2.jpg', 'TÃ­tulo de MÃ©dicos, licenciatura y/o TSU en enfermerÃ­a', 'Disponibilidad mÃ­nima de medio tiempo para cumplir con las actividades AcadÃ©micas del Diplomado.', 'Aptitud fÃ­sica y mental para participar eficientemente en el Ã¡rea de Cuidados Intensivos.', 'DisposiciÃ³n para realizar trabajo en equipo en las unidades de cuidados intensivos.', 'InterÃ©s por las actividades acadÃ©micas de anÃ¡lisis y reflexiÃ³n de las prÃ¡cticas actuales de la enfermerÃ­a intensivista, con miras a realizar propuestas y participar en el mejoramiento de la calidad de la atenciÃ³n del paciente crÃ­tico.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fundacion`
--

CREATE TABLE IF NOT EXISTS `fundacion` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) NOT NULL,
  `icono` text NOT NULL,
  `contenido` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `fundacion`
--

INSERT INTO `fundacion` (`id`, `tipo`, `icono`, `contenido`) VALUES
(1, 'VisiÃ³n', 'images/content.png', 'Promover la formaciÃ³n de profesionales y tÃ©cnicos de la salud y otros profesionales a nivel de pregrado y postgrado, cursos, diplomas, talleres, jornadas, congresos cientÃ­ficos, congresos acadÃ©micos, simposios, con dominios de la competencia'),
(2, 'MisiÃ³n', 'images/content.png', 'Ser una instituciÃ³n orientada hacia la formaciÃ³n y la investigaciÃ³n; acreditada con estÃ¡ndares nacionales e internacionales y constituirse en un referente acadÃ©mico nacional.\n\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informaciones`
--

CREATE TABLE IF NOT EXISTS `informaciones` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `info` varchar(20) NOT NULL,
  `imagen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `informaciones`
--

INSERT INTO `informaciones` (`id`, `info`, `imagen`) VALUES
(1, '', 'images/bg.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE IF NOT EXISTS `matriculas` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(13) NOT NULL,
  `diplomado_id` int(1) NOT NULL,
  `fecha` date NOT NULL,
  `estado` enum('activa','culminada','inactiva') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`id`, `cedula`, `diplomado_id`, `fecha`, `estado`) VALUES
(2, '23524026', 3, '2017-02-01', 'activa'),
(3, '23524026', 2, '2017-02-01', 'activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(20) NOT NULL,
  `contenido` text NOT NULL,
  `diplomado_id` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `modulo`, `contenido`, `diplomado_id`) VALUES
(1, 'Modulo I', 'EvoluciÃ³n histÃ³rica de la cirugÃ­a', 1),
(2, 'modulo II', 'AnatomÃ­a y fisiologÃ­a quirÃºrgica', 1),
(3, 'modulo III', 'MicrobiologÃ­a y parasitologÃ­a prÃ¡ctica. <br>Asepsia, EsterilizaciÃ³n y preparaciÃ³n de insumos blancos', 1),
(4, 'modulo iv', 'Lavado QuirÃºrgico de Manos y Vestimenta QuirÃºrgica', 1),
(5, 'modulo v', 'Instrumental , mecÃ¡nica y suturas quirÃºrgicas', 1),
(6, 'modulo vi', 'Cuidados en el pre, intra y postoperatorio', 1),
(7, 'modulo vii', 'TÃ©cnicas QuirÃºrgicas en CirugÃ­a', 1),
(8, 'modulo viii', 'Anestesia y Unidad de RecuperaciÃ³n Post-AnestÃ©sica', 1),
(9, 'modulo ix', 'Responsabilidad Legal, Conciencia y Etica quirÃºrgica', 1),
(10, 'modulo i', 'Estructura y Funcionamiento de las Unidades de Emergencia', 2),
(11, 'modulo II', 'AtenciÃ³n en Emergencias Respiratorias', 2),
(12, 'modulo III', 'AtenciÃ³n en Emergencias Cardiovasculares y ReanimaciÃ³n Cardiopulmoonar', 2),
(13, 'modulo iv', 'Emergencia UrolÃ³gica y Renales', 2),
(14, 'modulo v', 'Emergencias NeurolÃ³gicas', 2),
(15, 'modulo vi', 'PatologÃ­as mÃ¡s Frecuentes en las Emergencia', 2),
(16, 'modulo vii', 'Emergencias Gineco-ObstÃ©tricas', 2),
(17, 'Modulo I', 'Estructura y Funcionamiento de las Unidades de Cuidados Intensivos.', 3),
(18, 'modulo II', 'AtenciÃ³n y cuidados a Pacientes con Alteraciones de Sistema Respiratorio.', 3),
(19, 'modulo III', 'AtenciÃ³n y cuidados a Pacientes con Alteraciones del Sistema Cardiovascular.', 3),
(20, 'modulo iv', 'AtenciÃ³n y cuidados a Pacientes con Alteraciones del Sistema Renal', 3),
(21, 'modulo v', 'AtenciÃ³n y cuidados a Pacientes con alteraciones del Sistema NeurolÃ³gico.', 3),
(22, 'modulo vi', 'AtenciÃ³n y cuidados a Pacientes con Alteraciones del Sistema Digestivo.', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `matricula_id` int(1) NOT NULL,
  `comprobante_id` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `matricula_id`, `comprobante_id`) VALUES
(1, 2, 1),
(4, 2, 1),
(6, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_estudiante`
--

CREATE TABLE IF NOT EXISTS `perfil_estudiante` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `contenido` text NOT NULL,
  `icono` text NOT NULL,
  `diplomado_id` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `perfil_estudiante`
--

INSERT INTO `perfil_estudiante` (`id`, `contenido`, `icono`, `diplomado_id`) VALUES
(1, 'TÃ­tulo de MÃ©dicos, licenciatura y/o TSU en enfermerÃ­a', 'images/document.png', 3),
(2, 'Disponibilidad mÃ­nima de medio tiempo para cumplir con las actividades AcadÃ©micas del Diplomado ', 'images/flag.png', 3),
(3, 'Aptitud fÃ­sica y mental para participar eficientemente en el Ã¡rea de Cuidados Intensivos', 'images/medicalkit.png', 3),
(4, 'DisposiciÃ³n para realizar trabajo en equipo en las unidades de cuidados intensivos', 'images/nurse-1.png', 3),
(5, 'InterÃ©s por las actividades acadÃ©micas de anÃ¡lisis y reflexiÃ³n de las prÃ¡cticas actuales de la enfermerÃ­a intensivista, con miras a realizar propuestas y participar en el mejoramiento de la calidad de la atenciÃ³n del paciente crÃ­tico', 'images/report.png', 3),
(6, 'TÃ­tulo de licenciatura en enfermerÃ­a o tÃ©cnico superior', 'images/document.png', 1),
(7, 'Disponibilidad mÃ­nima de medio tiempo para cumplir con las actividades AcadÃ©micas del Diplomado ', 'images/flag.png', 1),
(8, 'Aptitud fÃ­sica y mental para participar eficientemente en el Ã¡rea quirÃºrgica.', 'images/medicalkit.png', 1),
(9, 'DisposiciÃ³n para realizar trabajo con otros profesionistas que integran el equipo quirÃºrgico humano', 'images/nurse-1.png', 1),
(10, 'InterÃ©s por las actividades acadÃ©micas de anÃ¡lisis y reflexiÃ³n de las prÃ¡cticas Actuales de la enfermerÃ­a quirÃºrgica, con miras a realizar propuestas y participar en el mejoramiento de la calidad de la atenciÃ³n del paciente quirÃºrgico.', 'images/report.png', 1),
(11, 'InterÃ©s por la realizaciÃ³n de actividades quirÃºrgicas', 'images/scalpel.png', 1),
(12, 'Licenciatura y/o TSU en enfermerÃ­a, licenciatura en bomberos, MÃ©dicos cirujanos o integrales. Otros profesionales', 'images/document.png', 2),
(14, 'Disponibilidad mÃ­nima de medio tiempo para cumplir con las actividades AcadÃ©micas del Diplomado', 'images/flag.png', 2),
(15, 'Aptitud fÃ­sica y mental para participar eficientemente en el Ã¡rea de Emergencia de Adulto.', 'images/medicalkit.png', 2),
(16, 'DisposiciÃ³n para realizar trabajo con otros profesionistas que integran el equipo el Ã¡rea de Emergencia de Adulto.', 'images/flag.png', 2),
(17, 'InterÃ©s por las actividades acadÃ©micas de anÃ¡lisis y reflexiÃ³n de las prÃ¡cticas actuales de la enfermerÃ­a, con miras a realizar propuestas y participar en el mejoramiento de la calidad de la atenciÃ³n del paciente crÃ­tico.', 'images/report.png', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `cedula` varchar(13) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `perfil` enum('admin','profesor','estudiante') NOT NULL,
  `activo` enum('si','no') NOT NULL,
  `genero` enum('masculino','femenino') NOT NULL,
  `nacionalidad` enum('V','E') NOT NULL,
  `fecha_nac` date NOT NULL,
  `lugar_nac` varchar(40) NOT NULL,
  `tlf_hab` varchar(12) NOT NULL,
  `tlf_cel` varchar(12) NOT NULL,
  `direccion` text NOT NULL,
  `nivel_educativo` enum('tsu','lic','ing') NOT NULL,
  `fecha_gradu` date NOT NULL,
  `profesion` varchar(30) NOT NULL,
  `empresa_labora` varchar(30) NOT NULL,
  `tiempo_servicio` varchar(10) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `servicio_labora` varchar(40) NOT NULL,
  `tlf_oficina` varchar(12) NOT NULL,
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`cedula`, `nombre`, `apellido`, `correo`, `clave`, `perfil`, `activo`, `genero`, `nacionalidad`, `fecha_nac`, `lugar_nac`, `tlf_hab`, `tlf_cel`, `direccion`, `nivel_educativo`, `fecha_gradu`, `profesion`, `empresa_labora`, `tiempo_servicio`, `cargo`, `servicio_labora`, `tlf_oficina`) VALUES
('123456', 'Josbert', 'Hernandez', 'joheandroid@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', 'si', 'masculino', 'V', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
('23524026', 'Luis', 'Tesorero', 'Luistesorero5@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', 'si', 'masculino', 'V', '1994-10-14', 'Palo Negro', '02692401263', '04126633525', 'Punto Fijo', 'tsu', '2017-02-15', 'Informatica', 'PDVSA', '3 Meses', 'Analista STI', 'PCP', '02692401263'),
('9644268', 'Maria', 'Vargas', 'mvargas17@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', 'si', 'femenino', 'V', '1994-10-14', 'Palo Negro', '02692401263', '04126633525', 'Turmero', 'lic', '2017-02-15', 'Enfermeria', 'Fundacedis', '4 Años', 'Presidenta', 'Presidenta', '02692401263');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
