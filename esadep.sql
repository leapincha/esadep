-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-07-2015 a las 14:12:12
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `esadep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abiertas`
--

CREATE TABLE IF NOT EXISTS `abiertas` (
  `id_prueba` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_prueba` varchar(70) NOT NULL,
  `introduccion` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo_prueba` int(11) NOT NULL,
  `foto` varchar(160) NOT NULL,
  `link_galeriafb` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL,
  PRIMARY KEY (`id_prueba`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `abiertas`
--

INSERT INTO `abiertas` (`id_prueba`, `nombre_prueba`, `introduccion`, `descripcion`, `tipo_prueba`, `foto`, `link_galeriafb`, `youtube`) VALUES
(1, 'Nadar Surf', 'Corre al agua desde la linea de salida y el competidor nada unos 400m', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el competidor corre al agua desde la l&iacute;nea de salida, el competidor nada unos 400m en un recorrido delimitado por boyas, vuelve a la arena para terminar entre dos banderas en la playa. Para facilitar la recopilaci&oacute;n de puestos despu&eacute;s de la llegada, los competidores se pueden colocar: En una l&iacute;nea recta dibujada aproximadamente a 30&ordm; de la l&iacute;nea de llegada y hacia la arena.</span></p>\r\n', 1, '19d6c-387839_298498920184600_490682206_n.jpg', 'https://www.facebook.com/media/set/?set=a.298498560184636.77942.219089338125559&type=3', 'JUqynadp-8A'),
(2, 'Carrera con Tabla de Salvamento', '', '<p>\r\n	<span class="fbPhotoCaptionText">Los competidores permanecen en o detr&aacute;s de la l&iacute;nea de salida en la arena con sus tablas con 1,5m de separaci&oacute;n entre cada uno. A la se&ntilde;al de salida, los competidores entran en el agua, lanzan sus tablas y reman el recorrido marcado por las boyas, vuelven a la playa y cruzan la l&iacute;nea de llegada. A los competidores no se le permite agarrar o de cualquier otra forma interferir las tablas de otros competidores o impedir deliberadamente su progreso.</span></p>\r\n', 1, '23d0f-393574_312261572141668_1234109008_n.jpg', 'https://www.facebook.com/media/set/?set=a.302047459829746.78389.219089338125559&type=3', 'd0AQQd8MBrw'),
(3, 'Carrera con Ski de Salvamento', '', '<p>\r\n	<span class="fbPhotoCaptionText">Los competidores sujetan sus skies en l&iacute;nea a la profundidad de la rodilla con una separaci&oacute;n de 1,5m. Los competidores deben obedecer las directrices dadas por el Juez de Salidas o por el Ayudante del Juez de Salidas referente a la alineaci&oacute;n en la salida. A la se&ntilde;al de salida, los competidores palean con sus skies por el recorrido marcado por las boyas y vuelven para llegar cuando cualquier parte del ski cruza la l&iacute;nea de llegada, montado, agarrado o arrastrado por el competidor. El competidor puede perder el contacto o el control de su ski sin ser necesariamente descalificado. Para completar la carrera los competidores deben tener (o haber recuperado) el ski y la pala y cruzar la l&iacute;nea de llegada desde mar adentro mientras mantiene contacto con la pala y el ski. Los competidores no pueden agarrar o de cualquier otra manera interferir el ski de otros competidores o impedir deliberadamente su progreso.</span></p>\r\n', 1, '8ebdd-392084_303134549721037_1965395586_n.jpg', 'https://www.facebook.com/media/set/?set=a.303133913054434.78560.219089338125559&type=3', 'HtE4GDVuayE'),
(4, '90m Sprint', '', '<p>\r\n	<span class="fbPhotoCaptionText">Los competidores toman sus posiciones en sus calles asignadas. A la se&ntilde;al de salida, los competidores corren los 90 metros del recorrido hasta la l&iacute;nea de llegada. La llegada es juzgada por el pecho del deportista cruzando la l&iacute;nea de llegada. Los competidores deben terminar la prueba sobre sus pies en posici&oacute;n vertical. La salida<br />\r\n	No se permiten usar elementos artificiales para la salida, pero los competidores pueden hacer hoyos y/o mont&iacute;culos de arena para asistir en la salida.</span></p>\r\n', 1, '63fc3-541852_378780028823155_1033042257_n.jpg', 'https://www.facebook.com/media/set/?set=a.378779252156566.94144.219089338125559&type=3', ''),
(5, 'Banderas en Playa', '', '<p>\r\n	<span class="fbPhotoCaptionText">Los competidores, tras salir tumbados boca abajo en la arena, se levantan, giran y corren aproximadamente 20m para conseguir una bandera enterrada verticalmente en la arena. Siempre tiene que haber menos banderas que competidores, aquellos que no consigan bandera ser&aacute;n eliminados. Ganar&aacute; aquel competidor que obtenga la ultima bandera. </span></p>\r\n', 1, '0b119-306060_378788315488993_751363128_n.jpg', 'https://www.facebook.com/media/set/?set=a.297945903573235.77833.219089338125559&type=3', ''),
(6, 'OceanMan', '', '<p>\r\n	Los competidores cubren un recorrido de 1400m aproximadamente que incluye una posta de nataci&oacute;n, una posta de tabla, una posta de ski y un sprint final.</p>\r\n', 1, 'ccbbb-387839_298498920184600_490682206_n.jpg', '', 'kls2TPi9kDQ'),
(7, '4x90 Sprint', '', '<p>\r\n	<span class="fbPhotoCaptionText">Un equipo de cuatro competidores completan un relevo con testimonio de manera que cubren 90m. de recorrido. Para empezar, 2 competidores toman su posici&oacute;n en su calle asignada en cada extremo del recorrido. Despu&eacute;s de la salida cada competidor completa una posta del recorrido con un testimonio agarrado con una mano y pasa el testimonio al terminar la primera, segunda y tercera posta al siguiente corredor. Todos los competidores terminan su posta sobre sus pies y en posici&oacute;n vertical. Los competidores no pueden interferir en el progreso de otros competidores.</span></p>\r\n', 2, 'ddbd5-527614_378779985489826_1037889659_n.jpg', 'https://www.facebook.com/media/set/?set=a.378779252156566.94144.219089338125559&type=3', '2cqzjrq1eG0'),
(8, 'Rescate con Tubo', '', '<p>\r\n	<span class="fbPhotoCaptionText">Cuatro competidores de cada equipo participan en esta prueba: una v&iacute;ctima, un nadador con tubo de rescate y dos socorristas. La v&iacute;ctima nada 120m aproximadamente hasta la boya designada, se&ntilde;ala y espera a ser rescatado por el nadador con tubo. Cuando est&eacute;n volviendo hacia la orilla, los dos socorristas que est&aacute;n esperando, entran en el agua para ayudar. La prueba termina cuando el primer competidor del equipo cruce la l&iacute;nea de llegada en contacto con la victima.</span></p>\r\n', 2, 'ab0ae-385797_297966286904530_21904291_n.jpg', 'https://www.facebook.com/media/set/?set=a.297966050237887.77844.219089338125559&type=3', 'saJKGSa-af0'),
(9, 'Rescate con Tabla', '', '<p>\r\n	<span class="fbPhotoCaptionText">En esta prueba, un miembro del equipo nada aproximadamente 120m a la boya asignada, se&ntilde;ala y espera a ser recogido por el segundo miembro del equipo con la tabla. Ambos reman a la orilla y cruzan la l&iacute;nea de llegada en la arena con la tabla. Los competidores deben empezar desde la posici&oacute;n correcta asignada. Ser&aacute;n descalificados los competidores que naden y se&ntilde;alen desde una boya err&oacute;nea.<br />\r\n	<br />\r\n	Primer competidor: desde la posici&oacute;n asignada en l&iacute;nea de salida, y a la se&ntilde;al de salida, las v&iacute;ctimas entran en el agua, nadan para tocar la boya asignada, se&ntilde;alando su llegada levantando el otro brazo en posici&oacute;n vertical mientras est&aacute; en contacto con la boya. Entonces la v&iacute;ctima pasa a esperar en el agua en el lado de mar adentro de la boya. El Juez Principal puede determinar un m&eacute;todo alternativo aceptable de clara se&ntilde;alizaci&oacute;n de que la v&iacute;ctima ha tocado la boya.<br />\r\n	<br />\r\n	Segundo competidor: a la se&ntilde;al de la v&iacute;ctima, el socorrista con la tabla, cruza la l&iacute;nea de salida, entra en el agua y rema hacia la v&iacute;ctima que est&aacute; en el lado de mar adentro de la boya asignada. La v&iacute;ctima debe tomar contacto con la tabla en la parte de mar adentro de la boya. La tabla debe girar la boya en sentido de las agujas del reloj (a derechas) antes de volver a la arena con la v&iacute;ctima. La v&iacute;ctima puede colocarse ella misma en la parte delantera o trasera de la tabla. La v&iacute;ctima puede ayudar remando en la tabla para volver a la arena. La llegada ser&aacute; juzgada por el pecho del primer competidor del equipo que cruce la l&iacute;nea de llegada sobre sus pies y en posici&oacute;n vertical, con el socorrista y la v&iacute;ctima en contacto con la tabla. El socorrista no puede empezar antes de que la v&iacute;ctima se&ntilde;ale su llegada a la boya. Los competidores no pueden agarrar o de cualquier otro modo interferir las tablas de otros competidores o impedir deliberadamente su progreso.</span></p>\r\n', 2, '84a78-246473_476887585679065_433736562_n.jpg', 'https://www.facebook.com/media/set/?set=a.476886959012461.115568.219089338125559&type=3', 'C7R867c2Vkw'),
(10, 'Relevo Taplin', '', '<p>\r\n	Un equipo de 4 competidores (nadar, tabla, ski y sprint) cubren el recorrido en una secuencia de postas determinadas por sorteo al comienzo de cada competici&oacute;n. La posta de sprint ser&aacute; siempre la &uacute;ltima.</p>\r\n', 2, 'a52ec-salvamento-viejete.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Novedades'),
(2, 'Eventos'),
(3, 'Capacitaciones'),
(4, 'ESADEP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_noticia`
--

CREATE TABLE IF NOT EXISTS `categoria_noticia` (
  `id_noticia` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_noticia`
--

INSERT INTO `categoria_noticia` (`id_noticia`, `id_categoria`) VALUES
(13, 3),
(13, 4),
(14, 3),
(14, 2),
(15, 4),
(16, 1),
(17, 4),
(17, 2),
(18, 2),
(19, 3),
(20, 4),
(20, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerradas`
--

CREATE TABLE IF NOT EXISTS `cerradas` (
  `id_prueba` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_prueba` varchar(70) NOT NULL,
  `introduccion` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo_prueba` int(11) NOT NULL,
  `foto` varchar(160) NOT NULL,
  `link_galeriafb` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL,
  PRIMARY KEY (`id_prueba`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cerradas`
--

INSERT INTO `cerradas` (`id_prueba`, `nombre_prueba`, `introduccion`, `descripcion`, `tipo_prueba`, `foto`, `link_galeriafb`, `youtube`) VALUES
(1, '50m Arrastre de maniqui', '', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el competidor entra en el agua con un salto y nada 25m estilo libre, entonces se sumerge para recoger un maniqu&iacute; hundido y sacarlo a la superficie dentro de la l&iacute;nea de los 5m de recogida. El competidor arrastra el maniqu&iacute; hasta tocar la pared de llegada. El competidor puede impulsarse del fondo de la piscina para emerger el maniqu&iacute;.</span></p>\r\n', 1, 'ad50c-547702_378771665490658_1449879321_n.jpg', 'https://www.facebook.com/media/set/?set=a.378771115490713.94143.219089338125559&type=3', '0S6J-Lf_bHs'),
(2, '100m Arrastre de maniqui con aletas', '', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el competidor entra en el agua con un salto y nada 50m estilo libre llevando aletas, recoge un maniqu&iacute; hundido y lo saca a la superficie dentro de la l&iacute;nea de los 10m de recogida. El competidor arrastra el maniqu&iacute; hasta tocar la pared de llegada. Los competidores no necesitan tocar la pared de viraje en la recogida del maniqu&iacute;. Tampoco es necesario que el competidor salga a la superficie antes de recoger el maniqu&iacute;. El competidor puede impulsarse del fondo de la piscina para emerger el maniqu&iacute;.</span></p>\r\n', 1, '9e923-941752_573960882638401_283273757_n.jpg', 'https://www.facebook.com/media/set/?set=a.378783968822761.94145.219089338125559&type=3', 'wMoKpljTBqA'),
(3, '100m Socorrista', '', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el competidor entra en el agua con un salto y nada 50m estilo libre llevando aletas y tubo de rescate . Despu&eacute;s de tocar la pared, y dentro de la zona de enganche de 5m, el competidor asegura el tubo de rescate alrededor del maniqu&iacute; y lo remolca con el tubo hasta el final . </span></p>\r\n', 1, 'e42de-580740_445811495453341_1696648842_n.jpg', 'https://www.facebook.com/media/set/?set=a.378755462158945.94139.219089338125559&type=3', ''),
(4, '100m Combinada de salvamento', '', '', 1, '', '', ''),
(5, '200m con obtaculos', '', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el competidor entra en el agua con un salto y nada el recorrido de 200m. Pasando 8 veces por debajo de un obst&aacute;culo sumergido para finalizar tocando la pared de llegada de la piscina.El competidor debe salir a la superficie del agua despu&eacute;s de la salida antes de pasar el primer obst&aacute;culo y entre cada uno de ellos. (&ldquo;Salir a la superficie&rdquo; significa que la cabeza del competidor debe romper el plano de la superficie del agua.)El competidor puede impulsarse del fondo de la piscina para salir a la superficie del pase del obst&aacute;culo. Nadar rozando el obst&aacute;culo o golpearlo no es motivo de descalificaci&oacute;n.</span></p>\r\n', 1, '', '', 'AoAywoGOqMk'),
(6, '200m Super socorrista', '', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el competidor entra en el agua con un salto y nada 75m estilo libre para luego sumergirse y recoger un maniqu&iacute; sumergido. El competidor saca el maniqu&iacute; dentro de la l&iacute;nea de recogida los 5m y lo arrastra hasta la pared de viraje . Toca la pared y suelta el maniqu&iacute;. Sin salir del agua, el competidor se coloca las aletas y el tubo de rescate y nada 50m estilo libre. Despu&eacute;s de tocar la pared, el competidor asegura el tubo alrededor del maniqu&iacute; dentro de la l&iacute;nea de 5m desde la pared de viraje y lo remolca hasta tocar la pared de llegada . La prueba termina cuando el competidor toca la pared de llegada</span></p>\r\n', 1, '8e958-539140_556515187716304_1936600421_n.jpg', 'https://www.facebook.com/media/set/?set=a.445814295453061.106780.219089338125559&type=3', '6kD5rhQW1_Q'),
(7, '4x50 con obstaculos', '', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el primer competidor entra en el agua con un salto y nada 50m estilo libre pasando por debajo de dos obst&aacute;culos. Despu&eacute;s que el primer competidor toca la pared, el segundo, el tercer y el cuarto competidor repite el procedimiento por turnos.</span></p>\r\n', 2, 'df39e-381508_299726283395197_1276597386_n.jpg', 'https://www.facebook.com/media/set/?set=a.299725490061943.78107.219089338125559&type=3', 'm8EklcWWopQ'),
(8, '4x50 combinada de salvamento', '', '<p>\r\n	<span class="fbPhotoCaptionText">A la se&ntilde;al de salida, el primer competidor entra en el agua con un salto y nada 50m estilo libre pasando por debajo de dos obst&aacute;culos. Despu&eacute;s que el primer competidor toca la pared, el segundo, el tercer y el cuarto competidor repite el procedimiento por turnos.</span></p>\r\n', 2, '85044-943695_576402699060886_725162458_n.jpg', 'https://www.facebook.com/media/set/?set=a.576402612394228.1073741825.219089338125559&type=3', '755Gr03ionw'),
(9, '4x25 arrastre de maniqui', '', '<p>\r\n	<span class="fbPhotoCaptionText">La prueba la realizar&aacute;n cuatro competidores que, por turnos, remolcan un maniqu&iacute; aproximadamente 25 m. cada uno. En caso de ser una piscina de 25 metros se encontrar&aacute;n dos competidores en cada cabecera, y si en caso de ser de 50 metros, uno en cada cabecera y dos en el medio.</span></p>\r\n', 2, '67e42-392281_298976713470154_1079500780_n.jpg', 'https://www.facebook.com/media/set/?set=a.298778313489994.77982.219089338125559&type=3', 'obn7EHShEls'),
(10, 'Lanzamiento de Soga', '', '<p>\r\n	<span class="fbPhotoCaptionText">Es una prueba con l&iacute;mite de tiempo de 45 segundos, el competidor recoge y lanza la cuerda sin peso al miembro del equipo localizado en el agua aproximadamente a 12m de distancia y lo recoge mediante tracci&oacute;n de la cuerda hasta la pared de llegada. La &quot;v&iacute;ctima&quot; puede colaborar con batido de piernas.</span></p>\r\n', 2, 'd9393-970224_574392862595203_792814075_n.jpg', 'https://www.facebook.com/media/set/?set=a.299282320106260.78043.219089338125559&type=3', 'PGrACTZyRbY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) NOT NULL,
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2fa5ee091dc03fed6fd834175379891e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:39.0) Gecko/201001', 1436807475, 'a:1:{s:9:"idusuario";s:1:"1";}'),
('39312876283a782316568619459227ee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1436800815, 'a:0:{}'),
('bc1b345f12b271451ca43d35247a7d61', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1436799286, 'a:0:{}'),
('f532ffb00ffa17e41cd164b276b33eb1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1436807093, 'a:0:{}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision_directiva`
--

CREATE TABLE IF NOT EXISTS `comision_directiva` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre_apellido` varchar(60) NOT NULL,
  `descripcion` text NOT NULL,
  `file_url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `comision_directiva`
--

INSERT INTO `comision_directiva` (`id`, `nombre_apellido`, `descripcion`, `file_url`) VALUES
(1, 'Matias Tombazzi', '<p>\r\n	Toma de decisiones y Formador de Instructores y Colaboradores dentro de ESADEP</p>\r\n', '340e1-matias.jpg'),
(2, 'Leandro Oltolina', '<p>\r\n	Instructor en Salvamento Acu&aacute;tico. Entrenamientos. Planificaci&oacute;n.Profesor a cargo de Preparaci&oacute;n F&iacute;sica Martes y Jueves 17:30hs. en el Bosque.</p>\r\n', '53784-pepe.jpg'),
(3, 'Sebastián Clúa D´Alessandro', '<p>\r\n	Delegado en las Competencias.Mantenimiento de las instalaciones/material deportivo.Apoyo a los otros cargos.</p>\r\n', '50c22-11026191_10205098888925667_2622424482592111521_n.jpg'),
(4, 'Paula Rodriguez', '<p>\r\n	Persona a cargo de Salvamento Deportivo Kids.Secretaria en los eventos</p>\r\n', 'af7d7-1003399_10203179922689086_1307434332_n.jpg'),
(5, 'Ramiro Garzaniti', '<p>\r\n	Apoyo a los otros cargos. Disponibilidad y buena predisposici&oacute;n.Iniciativa.</p>\r\n', ''),
(6, 'Ignacio Gimenez', '<p>\r\n	Capacitaci&oacute;n en RCP, PA y Salvamento. Conseguir lugares donde brindar jornadas. Folleto y proyectos listos a ser presentados cuando se lo requiera.</p>\r\n', ''),
(7, 'Candela Bonaura', '<p>\r\n	Administraci&oacute;n Indumentaria. Administraci&oacute;n del Fondo Econ&oacute;mico de Esadep</p>\r\n', ''),
(8, 'Verónica Uran', '<p>\r\n	Armado de eventos recaudadores de fondos. Organizaci&oacute;n de Guardafest. Rifas, con alguna causa cerca.</p>\r\n', ''),
(9, 'Francisco Romero', '<p>\r\n	<span class="text_exposed_show">Asesor en la parte econ&oacute;mica del equipo, balances, llenado de libros obligatorios, actas de asambleas etc. Gastos, ingresos, pr&eacute;stamos, etc. Balance de cada evento (torneo, capacitaci&oacute;n, aniversario, etc.)</span></p>\r\n', ''),
(10, 'Javier Naveyra', '<p>\r\n	<span class="text_exposed_show">Entendido de la visi&oacute;n australiana que el equipo quiere llevar a cabo. Asesor legal en la parte de abogac&iacute;a. Responsabilidad civil y penal.</span></p>\r\n', ''),
(11, 'Francisco Paredes', '<p>\r\n	<span class="text_exposed_show">A cargo del departamento Inform&aacute;tica y tecnolog&iacute;a. Armado de la p&aacute;gina web.</span></p>\r\n', ''),
(12, 'Manuel Diaz', '<p>\r\n	<span class="text_exposed_show">A cargo del departamento de Dise&ntilde;o y Comunicaci&oacute;n. Armado de folletos. Dise&ntilde;o de certificados. Im&aacute;genes de difusi&oacute;n. Etc. Dise&ntilde;o Indumentaria.</span></p>\r\n', ''),
(13, 'Lara Tomatti', '<p>\r\n	<span class="text_exposed_show">Administraci&oacute;n del twitter seg&uacute;n publicaciones del Facebook.</span></p>\r\n', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `usuario`, `email`, `mensaje`) VALUES
(1, 'pepe', 'lealp88@gmail.com', ' dsvsdavsdvafsdvfdvdsf'),
(2, 'Leandro', 'lealp88@gmail.com', 'cdacsdlakcmansdlkcnsadlkcnsadc lkdajfclksdancsdaklc dkjcsdñkcasñlkdc'),
(3, 'Leandro', 'lealp88@gmail.com', 'cdcasdcsdacs'),
(4, 'Leandro', 'lealp88@gmail.com', 'xcsdavfsdavfsvfsd'),
(5, 'Leandro', 'lealp88@gmail.com', 'sdvcsdvsdvs'),
(6, 'pepe', 'lealp88@gmail.com', 'cascscsdac'),
(7, 'pepe', 'lealp88@gmail.com', 'sacsdacac'),
(8, 'Leandro', 'lealp88@gmail.com', 'davcsdvsadvsadvsda'),
(9, 'pepe', 'lealp88@gmail.com', 'vzdvdsvsdavsdavsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_salvamento`
--

CREATE TABLE IF NOT EXISTS `definicion_salvamento` (
  `id_historia` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_historia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `definicion_salvamento`
--

INSERT INTO `definicion_salvamento` (`id_historia`, `descripcion`) VALUES
(1, '<p>\r\n	El <strong>salvamento deportivo</strong> es una de las pocas disciplinas que cumplen funciones deportivas y extradeportivas: su accionar no solo se aplica dentro del &aacute;mbito atl&eacute;tico si no tambi&eacute;n dentro de la profesi&oacute;n del socorrismo acu&aacute;tico profesional. Su popularidad quiz&aacute; sea escasa en nuestro pa&iacute;s, pero es un deporte federado reconocido por el Comit&eacute; Ol&iacute;mpico Internacional (C.O.I).</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Dentro de lo deportivo la disciplina desarrolla dos tipos de competiciones que reciben su nombre seg&uacute;n el medio donde se realicen: Las pruebas a realizarse en piletas se conocen como <em>eventos de aguas cerradas</em> y aquellas en las cuales su campo de acci&oacute;n est&aacute; relegado a mares, r&iacute;os y lagos al aire libre las llamamos <em>eventos de aguas abiertas</em> y a la deriva de todo tipo de factor natural. Estas, a su vez,&nbsp; se dividen en pruebas de car&aacute;cter individual o grupal.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	A pesar de ser un deporte vinculado estrechamente con el medio acu&aacute;tico no solo la capacidad de buen nado va a determinar a un deportista de elite; Los practicantes de elite tambi&eacute;n constan de un buen manejo de t&eacute;cnicas de salvamento acu&aacute;tico, de los materiales espec&iacute;ficos propios del salvamento deportivo, pedestrismo y tambi&eacute;n una gran capacidad de trabajo en equipo.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	En lo que resta a extradeportivo partimos de la base que muchas de las pruebas simulan situaciones reales de rescate, por lo tanto permitir&aacute; a quien desarrolle profesionalmente esa labor, de guardavidas, tener un entrenamiento y poder perfeccionarse en ese campo del salvamento acu&aacute;tico.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	La falta de difusi&oacute;n hace que este deporte hoy no genere una masiva atracci&oacute;n de p&uacute;blico, pero sin duda favorece al espect&aacute;culo y tambi&eacute;n es una actividad muy completa la cual abarca ocio, trabajo en equipo y ganas de superarse continuamente.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Matias Tombazzi</p>\r\n<p>\r\n	&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(130) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre_equipo`, `foto`, `descripcion`) VALUES
(1, 'KIDS (< 14 años) ', '9a3fc-kids.jpg', '<p>\r\n	Son ni&ntilde;os que ya poseen conocimientos de nataci&oacute;n y fomentamos en ellos el salvamento en edades tempranas. Seguridad acu&aacute;tica. Autorescate. Cuidado del medio acu&aacute;tico. Prevenci&oacute;n. Como poder colaborar. T&eacute;cnicas de rescate a modo difusi&oacute;n a trav&eacute;s de juegos. Salvamento Deportivo adaptado. Exhibiciones de Rescate en p&uacute;blico.</p>\r\n'),
(2, 'JUVENILES (entre 15 y 18 años)', 'e7b98-juveniles.jpg', '<p>\r\n	J&oacute;venes adolescentes que ya incursionan en el &aacute;mbito del salvamento y anhelan ser guardavidas en alg&uacute;n momento. No se los hace esperar a que tengan la mayor&iacute;a de edad para arrimarse a este nuevo mundo sino que ya se los va preparando para que lleguen en condiciones &oacute;ptimas cuando sea el momento. En lo deportivo, existe una categor&iacute;a para ellos, inclusive a nivel internacional, para la cual nos preparamos, y est&aacute; creciendo poco a poco en nuestro pa&iacute;s.</p>\r\n'),
(3, 'MASTERS (> 30 años)', 'c0937-masters.jpg', '<p>\r\n	Ellos suelen venir a contagiarse de la energ&iacute;a que hay en el equipo pero son los que m&aacute;s aportan ya que nos transmiten toda su experiencia y valores de vida.</p>\r\n'),
(4, 'ABSOLUTO (19 a 29 años)', '360a3-absoluto.jpg', '<p>\r\n	Son todos aquellos guardavidas y/o interesados en el Salvamento Acu&aacute;tico en cualquiera de sus facetas. Por la edad que comprenden suelen ser considerados como la categor&iacute;a mas fuerte.</p>\r\n'),
(5, 'ALTO RENDIMIENTO', '566a7-alto_rendimiento.jpg', '<p>\r\n	Preparamos deportistas que deseen desempe&ntilde;arse al m&aacute;ximo y destacarse en esta disciplina. Preparaci&oacute;n de deportistas para ser parte de la Selecci&oacute;n Argentina Open que asiste a los mundiales de rescate cada 2 a&ntilde;os. Eventos Internacionales. Testeos. Seguimientos Personalizados. &Uacute;ltimas T&eacute;cnicas de Salvamento.</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `link_fb` varchar(150) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `fecha`, `nombre`, `descripcion`, `lugar`, `foto`, `link_fb`) VALUES
(1, '2015-08-07', 'Capacitacion ESADeP', '<p>\r\n	vcdlkcsdnclksdnclksdanclksadncsq lakdfjsdaklfjasdklfs lkkdfsjlksadfjsldkaf &ntilde;lkjdflkdsjfslkdaf &ntilde;lkdakflad kkdkkd lslls lslsl skksks ksksksk ksksksk sksksksk skskks ksksk ksksk sa,fjdflkdshf jdshfafdjhdakjlkdfhljdahf lfkjdfjds sdalkfjdsalkFJad kldafjlkfjsdkf d&ntilde;lfkl&ntilde;sdafjsd lkdsjflkdjf lksdjflkdsjf lkdsjflksdjaf lksdajfdkls lkdjjd dkjkd sdjsdjdskj lkdsklsdk</p>\r\n', 'la Plata', 'd0f5c-postal-8.jpg', ''),
(2, '2015-10-17', 'Capacitacion Primeros auxilios', '<p>\r\n	vsdavlkasdjvksvjs lkdfjksdjfskd</p>\r\n', 'Club Estudiantes de La Plata', '83e20-11390203_970168996350919_2681277915610841705_n.jpg', ''),
(3, '2015-07-31', 'Si es largo el nombre del evento quiero ver como ', '<p>\r\n	ckjsdaclksdajcsd lksdjcsdkljfcsd ksdjfcdlksfj lkdsjfdslkfjs</p>\r\n', 'La Plata', '3d46e-13034_1153764120835_7657788_n.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE IF NOT EXISTS `historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `historia` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `historia`) VALUES
(1, '<p>\r\n	<span style="font-size:14px;">ESADEP, Espacio de Salvamento Acu&aacute;tico Deportivo Educativo Profesional, es una Instituci&oacute;n conformada por personas interesadas con el fin de desenvolverse en el &aacute;rea del salvamento acu&aacute;tico en todos sus aspectos. Esta situado en la ciudad de La Plata y realizamos nuestros entrenamientos en el Club de Estudiantes de La Plata.</span></p>\r\n<p>\r\n	<span style="font-size:14px;">El <b>Salvamento Deportivo</b> es una de las pocas disciplinas que cumplen funciones deportivas y extradeportivas: su accionar no solo se aplica dentro del &aacute;mbito atl&eacute;tico si no tambi&eacute;n dentro de la profesi&oacute;n del socorrismo acu&aacute;tico profesional. Su popularidad quiz&aacute; sea escasa en nuestro pa&iacute;s, pero es un deporte federado reconocido por el Comit&eacute; Ol&iacute;mpico Internacional (C.O.I).</span></p>\r\n<p>\r\n	<span style="font-size:14px;">Dentro de lo deportivo la disciplina desarrolla dos tipos de competiciones que reciben su nombre seg&uacute;n el medio donde se realicen: Las pruebas a realizarse en piletas se conocen como eventos de aguas cerradas y aquellas en las cuales su campo de acci&oacute;n est&aacute; relegado a mares, r&iacute;os y lagos al aire libre las llamamos eventos de aguas abiertas y a la deriva de todo tipo de factor natural. Estas, a su vez, se dividen en pruebas de car&aacute;cter individual o grupal.</span></p>\r\n<p>\r\n	<span style="font-size:14px;">A pesar de ser un deporte vinculado estrechamente con el medio acu&aacute;tico no solo la capacidad de buen nado va a determinar a un deportista de elite; Los practicantes de elite tambi&eacute;n constan de un buen manejo de t&eacute;cnicas de salvamento acu&aacute;tico, de los materiales espec&iacute;ficos propios del salvamento deportivo, pedestrismo y tambi&eacute;n una gran capacidad de trabajo en equipo.</span></p>\r\n<p>\r\n	<span style="font-size:14px;">En lo que resta a extradeportivo partimos de la base que muchas de las pruebas emulan situaciones reales de rescate, por lo tanto permitir&aacute; a quien desarrolle profesionalmente esa labor, de guardavidas, tener un entrenamiento y poder perfeccionarse en ese campo del socorrismo acu&aacute;tico.</span></p>\r\n<p>\r\n	<span style="font-size:14px;">La falta de difusi&oacute;n hace que este deporte hoy no genere una masiva atracci&oacute;n de p&uacute;blico, pero sin duda favorece al espect&aacute;culo y tambi&eacute;n es una actividad muy completa la cual abarca ocio, trabajo en equipo y ganas de superarse continuamente.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_salvamento`
--

CREATE TABLE IF NOT EXISTS `historia_salvamento` (
  `id_historia` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_historia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `historia_salvamento`
--

INSERT INTO `historia_salvamento` (`id_historia`, `descripcion`) VALUES
(1, '<p>\r\n	El Salvamento Acu&aacute;tico Deportivo va a surgir como consecuencia de que a la vez que se hace deporte se prepara para realizar actos humanitarios de salvamento.</p>\r\n<p>\r\n	A lo largo de la historia el medio acu&aacute;tico ha proporcionado al ser humano, alimentos, riquezas, aventura, belleza, y como consecuencia placer, alegr&iacute;a, satisfacci&oacute;n, felicidad...</p>\r\n<p>\r\n	El agua de las piscinas, r&iacute;os, lagos, pantanos, mares, etc, pueden significar diversi&oacute;n. Pero siempre con mecanismos de prevenci&oacute;n insuficientes, en muchos casos con poca vigilancia o sin ella, se puede convertir en una tr&aacute;gica experiencia, actuando el agua y el medio que la rodea como una trampa mortal en la que caen tanto gentes que no saben nadar como expertos nadadores.</p>\r\n<p>\r\n	Como siempre ocurre, uno no se da cuenta del peligro que subyace al agua hasta que lo experimenta en sus propias carnes. Hasta que un familiar o amigo cercano se ahogan.</p>\r\n<p>\r\n	Muchas veces se trata de olvidar estos casos tr&aacute;gicos, aunque con esto se produce un da&ntilde;o mayor, ya que las cosas siguen sin cambiar y los accidentes y las muertes siguen sucediendo, cuando la mayor parte se podr&iacute;a olvidar si se tuviera m&aacute;s en cuenta al Salvamento Acu&aacute;tico.</p>\r\n<p>\r\n	Los responsables de tal entramado son los responsables pol&iacute;ticos o empresarios que son los que deben elegir, pero que deber&iacute;an preguntarse antes de tomar cualquier decisi&oacute;n, si pueden poner precio a la vida de cualquier ni&ntilde;o, que pude ser el suyo, o la de cualquier otra persona, que pueden ser ellos mismos.</p>\r\n<p>\r\n	Esta es la m&aacute;s pura realidad de la situaci&oacute;n actual de desgracias en el medio acu&aacute;tico y hay que destacar una frase m&iacute;tica que deja claro que para evitar todas estas desgracias</p>\r\n<p>\r\n	&quot;NO ES NECESARIO SABER NADAR, TAMBI&Eacute;N ES &Uacute;TIL Y M&Aacute;S HUMANITARIO SABER SALVAR Y PONER LOS MEDIOS SUFICIENTES PARA CONSEGUIRLO&quot;.</p>\r\n<p>\r\n	El salvamento acu&aacute;tico es una actividad de gran val&iacute;a. Tras su creaci&oacute;n da paso a la formaci&oacute;n de las primeras asociaciones dedicadas al Salvamento Acu&aacute;tico Deportivo que comenzaron a medir sus conocimientos de salvamento acu&aacute;tico en algunas competiciones entre ellos. M&aacute;s adelante este deporte fue evolucionando y de lo que era una mera concentraci&oacute;n de dos asociaciones de salvamento pas&oacute; a ser m&aacute;s numerosa la afluencia de asociaciones en dichos eventos, llegando como resultado a la formaci&oacute;n de diferentes clubes independientes de las asociaciones profesionales de salvamento acu&aacute;tico que anteriormente he mencionado.</p>\r\n<p>\r\n	Pero la realidad es que la historia del Salvamento acu&aacute;tico no es muy corta, sus antecedentes se remontan a los or&iacute;genes de la humanidad. Comenz&oacute; cuando el ser humano realiz&oacute; los primeros intentos de nadar, de ah&iacute; que digamos que el origen del salvamento y de la nataci&oacute;n est&eacute; estrechamente relacionado, ya que nacen juntos. La causa de este tema es que aunque no existieran pautas de actuaci&oacute;n para realizar un rescate en el medio acu&aacute;tico por parte del personal competente, una organizaci&oacute;n significativa, una instrucci&oacute;n previa de los mismo, etc, la gente se ahogaba cotidianamente y hab&iacute;a que prestar su ayuda en este momento al que lo necesitaba, no por obligaci&oacute;n, sino como algo moral porque se mor&iacute;a un allegado, de ah&iacute; que ya se comenzaran a realizar los primeros salvamentos acu&aacute;ticos, seg&uacute;n requer&iacute;a el medio y sus propias posibilidades de actuaci&oacute;n, que eran de gran escasez.</p>\r\n<p>\r\n	El hombre comenz&oacute; a nadar como medio de obtener alimentos en el medio acu&aacute;tico, ya que era un gran fil&oacute;n repleto de gran cantidad y calidad de alimentos. Tras esta experiencia, la existencia de muertos en tal medio era inmensa, de ah&iacute; que aparezcan las primeras muestras de salvamento para evitar la p&eacute;rdida de la vida tanto de la gente confiada que se met&iacute;a en el medio acu&aacute;tico crey&eacute;ndose un experto dominante, como tambi&eacute;n de los que se arriesgaban acerc&aacute;ndose demasiado.</p>\r\n<p>\r\n	El salvamento, por lo tanto, desde el comienzo de la introducci&oacute;n del hombre en el agua comienza su historia, pero la realidad es que no hay una literatura clara que muestre demasiadas pruebas que confirmen la existencia del salvamento acu&aacute;tico organizado, puesto que no se necesitaba reflejar algo cotidiano y tan vinculado con la supervivencia. No s&oacute;lo para extender su civilizaci&oacute;n y dominio por el mundo, sino tambi&eacute;n para recrearse en &eacute;l, gozar del placer de los ba&ntilde;os y piscinas, o como los fenicios y cartagineses, que utilizaron los mares para llevar a cabo su medio de vida: el comercio, o como los reinos y ciudades del final de la Edad Media y de todo el Renacimiento, a los que se les debe tantos descubrimientos siempre por el mar.</p>\r\n<p>\r\n	Ya en el 63 a. C, el emperador Augusto, cre&oacute; un cuerpo de &quot;salvadores&quot; en Roma, que probablemente, no ten&iacute;an relaci&oacute;n directa con el Salvamento Acu&aacute;tico, pero s&iacute; que puede entenderse como un antecedente.</p>\r\n<p>\r\n	Antes de que los europeos pensaran en la necesidad de instaurar servicios de salvamento, en China ya se hab&iacute;an instalado en los principales r&iacute;os, para proteger la vida de sus ciudadanos.</p>\r\n<p>\r\n	Otro antecedente m&aacute;s reciente es el de uno de los padres de la Gimn&aacute;stica, Guts Muts, que en 1771 lanza las siguientes preguntas: &quot; Es moda ahogarse, &iquest;por qu&eacute; no es moda saber nadar?, &iquest;ser&aacute; moda, alg&uacute;n d&iacute;a, saber nadar?, &iquest;y saber salvar?</p>\r\n<p>\r\n	En Am&eacute;rica la historia del salvamento comenz&oacute; en 1785, es cuando se crea la &quot;Massachussets Human Society&quot;. Esta sociedad estaba constituida por socorristas voluntarios y les condecoraba con medallas a los socorristas que realizaban y les pagaban suplementos cuando hac&iacute;an frente rescates dram&aacute;ticos en situaciones adversas.</p>\r\n<p>\r\n	Seg&uacute;n avanza la historia los socorristas van a pasar de ser voluntarios, sin cobrar ni un duro, a ser profesionales, cobrando ya un salario. Esto se dio por primera vez en Par&iacute;s con la sociedad denominada &quot;Salvadores del Sena&quot;, es un cuerpo experimentado en la lucha contra los ahogamientos.</p>\r\n<p>\r\n	Va a surgir uno de los mayores contribuyentes del progreso del Salvamento Acu&aacute;tico, tanto deportivo como humanitario, Raymond Pitet, quien fund&oacute; el &quot;Instituto de Salvamento del Mediterr&aacute;neo&quot;, fue el promotor del &quot;Primer Congreso Internacional de Salvamento&quot; en 1878. En cuanto al Salvamento Acu&aacute;tico Deportivo fue el impulsor de la &quot;Federaci&oacute;n Internacionale de Sauvetage&quot; y creador de la &quot;Federaci&oacute;n Francesa de Salvamento&quot; en 1889. Con esta importante creaci&oacute;n hace que prospere el mundo del deporte del salvamento acu&aacute;tico, y adem&aacute;s crea las primeras pautas de actuaci&oacute;n en cuanto al reglaje de dicho deporte. Comienzan a sucederse las primeras relaciones internacionales con los diferentes organismos competentes referentes a este tema para conseguir la promulgaci&oacute;n de la necesidad de tener un personal con cualidades propicias y bien formado para la realizaci&oacute;n de rescates en el medio acu&aacute;tico, pero tambi&eacute;n al mismo tiempo se van poniendo las pautas del deporte del Salvamento Acu&aacute;tico deportivo.</p>\r\n<p>\r\n	Al otro lado del Atl&aacute;ntico, en EEUU, fue Sumner Kimball quien crea un departamento, dentro de la Secretar&iacute;a del Tesoro, llamado &quot;United States Lifesaving Service&quot; (Servicio de Salvamento de EEUU), que realiz&oacute; 175.000 rescates con sumo &eacute;xito.&nbsp;</p>\r\n<p>\r\n	En 1892 se crea en Portugal el Instituto de Socorro de N&aacute;ufragos.</p>\r\n<p>\r\n	En Australia se funda en 1894 &quot;The Surf Life Saving Association&quot;. La cual forma un grupo muy competente y ya se comienza a ver el car&aacute;cter competitivo entre los diferentes clubes que exist&iacute;an. En cuanto a las pruebas que realizaban al competir no est&aacute;n muy claramente definidas, ya que eran de forma subjetiva, es decir, realizaban pruebas que no estaban propiamente establecidas.</p>\r\n<p>\r\n	En cuanto al material de rescate, el primer flotador salvavidas se fabric&oacute; en 1897 por el Capit&aacute;n Harry Sheffield para un club de salvamento de &Aacute;frica del Sur, era bastante pesado, por lo que pronto sufrir&iacute;a modificaciones que ir&iacute;an mejorando su utilidad. Como podemos observar ya hay una cierta propagaci&oacute;n de clubes deportivos que se dedicaban al Salvamento Acu&aacute;tico Deportivo.</p>\r\n<p>\r\n	En 1913 se introdujo en las playas de California la tabla de surf para realizar salvamentos.</p>\r\n<p>\r\n	Pero como no se pod&iacute;an efectuar de forma favorable dichos rescates se invent&oacute; otra tabla de dimensiones mayores que favorecen la realizaci&oacute;n de un buen rescate, denominada como &quot;Tabla de Salvamento&quot;.</p>\r\n<p>\r\n	Ciudades de California como Long Beach y Huntington Beach contrataron socorristas profesionales dedicados a este cometido, y a la vez, en sus ratos de qu&eacute; hacer, entrenaban salvamento deportivo como preparaci&oacute;n. Tambi&eacute;n en Los &Aacute;ngeles se consigui&oacute; establecer, en la playa, la organizaci&oacute;n denominada &quot;Vigilantes de la Playa&quot;, en 1925. Su fundador es Myron Cox, quien acu&ntilde;&oacute; la m&iacute;tica frase de &quot;PREVENIR UN RESCATE EN LUGAR DE HACERLO&quot;. Es en este momento en el que se realizan los primeros enfrentamientos, competitivamente hablando, entre estas ciudades pr&oacute;ximas, por la supremac&iacute;a en el campo del salvamento deportivo en playa.</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_contacto`
--

CREATE TABLE IF NOT EXISTS `info_contacto` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `info_contacto`
--

INSERT INTO `info_contacto` (`id_info`, `descripcion`) VALUES
(1, '<p>\r\n	Los entrenamientos son gratuitos y abiertos a todos aquellos guardavidas interesados.</p>\r\n<p>\r\n	S&aacute;bados 18:00 a 19:30hs; rambla de 32 y 23; (a confirmar)</p>\r\n<p>\r\n	- Entrenamiento en tierra para tiradores de soga [Prueba de la costa]</p>\r\n<p>\r\n	- Line Throw (Lanzamiento de soga) [Una de las pruebas oficiales que hay para hacer en pileta]</p>\r\n<p>\r\n	- Traslados [T&eacute;cnicas y opciones de como cargar a la victima para salir del agua]</p>\r\n<p>\r\n	S&aacute;bados 20 a 22hs; Natatorio Estoa 35 23 y 24 N&ordm; 1427;</p>\r\n<p>\r\n	- Salvamento Acu&aacute;tico (Pruebas de las competencias, Remolques Deportivos, Forzada, Apnea, etc.)</p>\r\n<p>\r\n	Horarios de revisaci&oacute;n m&eacute;dica:</p>\r\n<p>\r\n	Lunes 8 30 a 10 30, 18 30 a 21</p>\r\n<p>\r\n	Martes 9 a 11, 18 a 20</p>\r\n<p>\r\n	Mi&eacute;rcoles 13 30 a 15 30, 18 a 20</p>\r\n<p>\r\n	Jueves 16 a 17 30, 18 a 20 30.</p>\r\n<p>\r\n	Viernes 18 a 20 30</p>\r\n<p>\r\n	S&aacute;bados 10 a 12</p>\r\n<p>\r\n	Domingos; 15hs aproximadamente; (a confirmar)</p>\r\n<p>\r\n	Salidas al R&iacute;o. Punta Lara, Ensenada.</p>\r\n<p>\r\n	- Entradas, simulacros de rescate, nataci&oacute;n.</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `copete` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `desarrollo` text NOT NULL,
  `documento` varchar(180) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `fecha`, `titulo`, `copete`, `foto`, `desarrollo`, `documento`) VALUES
(13, '0000-00-00', 'Capacitación Gratuita en Desarrollo de Equipos de Alto Rendimiento', '<p>\r\n	<span class="fbPhotosPhotoCaption" data-ft="{" id="fbPhotoSnowliftCaption" tabindex="0"><span class="hasCaption">Finalizada la Capacitaci&oacute;n Gratuita en Desarrollo de Equipos de Alto Rendimiento en el Club de Estudiantes de La Plata a cargo de Esadep Salvamento Acuatico. </span></span></p>\r\n', '0ec38-11428794_974252565942562_8464666360110790124_n.jpg', '<p>\r\n	<span class="fbPhotosPhotoCaption" data-ft="{" id="fbPhotoSnowliftCaption" tabindex="0"><span class="hasCaption">Muy contentos de que el equipo aposto a algo diferente en esta ocasi&oacute;n, a interesarse por el trasfondo del equipo, que es lo que hace a un equipo, como se logran las metas y objetivos, cual es la visi&oacute;n del equipo, su lider como un intermed<span class="text_exposed_show">iario entre la visi&oacute;n de todos y las repectivas metas individuales y colectivas, sinergia, creencias, valores, motivaci&oacute;n, INCREIBLE!!<br />\r\n	<br />\r\n	Contentos tambi&eacute;n por contar con varios referentes de otras disciplinas, esperamos haya sido de utilidad para sus grupos.<br />\r\n	<br />\r\n	Guillermo Balmas - Bal+Team Triatlon<br />\r\n	Diego Chacon - Nataci&oacute;n Estudiantes de La Plata<br />\r\n	Luisina Speleta - Patin Estudiantes de La Plata<br />\r\n	Victor Moyano - Destreza<br />\r\n	Olga Bazterrica - Referente en Atletismo y otros deportes con personas con discapacidad<br />\r\n	Leandro Oltolina/Paula Rodriguez - Salvamento<br />\r\n	<br />\r\n	Seguramente escondidos hay varios mas con mucha proyecci&oacute;n a aplicar en cualquier ambito no solo el deportivo... <i class="_4-k1 img sp_KzR5XM7-sC1 sx_db5374"><u>Emoticono wink</u></i><br />\r\n	<br />\r\n	Gracias a la Comisi&oacute;n Directiva de Esadep que estuvo presente, en mayor medida fue programada para estas 10 personas que anualmente realizan el compromiso para con la instituci&oacute;n.<br />\r\n	<br />\r\n	Agradecemos a Leonardo Gimenez de HUNA Organizaciones Conscientes por lograr meter tanto mensaje en un encuentro exclusivo, a Fernando Yuma por la disposici&oacute;n del Club de Estudiantes en todo momento, y a todos los que asistieron un sabado con tanto frio al encuentro programado </span></span></span></p>\r\n', ''),
(14, '0000-00-00', 'pepepeppe', '<p>\r\n	vsdvsdavsdvsve</p>\r\n', '', '<p>\r\n	safvafsdvdfavfdav</p>\r\n', ''),
(15, '0000-00-00', 'titulo tmb de la nota', '<p>\r\n	hay que ver como se vel el copete de la novedad o noticia</p>\r\n', '', '<p>\r\n	csdcsdacascsa</p>\r\n', ''),
(16, '0000-00-00', 'lsadljclksdjclksdjcs', '<p>\r\n	lkdjscvkljdklcjlsdkc</p>\r\n', '6f345-11428794_974252565942562_8464666360110790124_n.jpg', '<p>\r\n	lkjDVCLKDLKSAJLKSDAJCSDQLKCJSDALKCJSDALKJCSLKDAJS</p>\r\n', ''),
(17, '0000-00-00', 'titulo de la noticia o novedad', '<p>\r\n	este es el copete de la nota, una descripcion reducida</p>\r\n', 'b638f-esadep.jpg', '<p>\r\n	&nbsp;SCSDALC&Ntilde;KSADL&Ntilde;CMSACM&acute;&Ntilde;SAD&Ntilde;LCMSDAL&Ntilde;C</p>\r\n', ''),
(18, '0000-00-00', 'SDCSDACSADC', '<p>\r\n	SCSDACSADCSADCDSACSDA</p>\r\n', '5b63a-11390203_970168996350919_2681277915610841705_n.jpg', '<p>\r\n	SDAVCSDAFVDSFVBDFASBDAF</p>\r\n', ''),
(19, '0000-00-00', 'hola soy el tomba y quiero probar el titulo', '<p>\r\n	esta es una nota que iria el copete</p>\r\n', '21cfe-10253840_975432172491268_6044209486699506983_n.jpg', '<p>\r\n	FDAV&Ntilde;LFDAMV&Ntilde;LDAFMV&Ntilde;LDFAMV&Ntilde;LDFAM</p>\r\n', '\r\n'),
(20, '2015-07-06', 'Propuesta de Patrocinio y Sponsoreo', '<p>\r\n	El d&iacute;a 12 de Julio de 2015 estaremos realizando un Torneo de Nataci&oacute;n en el Club de Estudiantes de La Plata, por lo tanto, estamos ofreciendo a los diferentes interesados la posibilidad de que incluyamos su marca/producto/servicio dentro de los sponsors que patrocinan y apoyan el evento.</p>\r\n', 'dd1a5-11390257_970172729683879_920091097760442996_n.jpg', '<p>\r\n	Propuesta de Patrocinio y Sponsoreo para todos aquellos que les interese no duden en contactarnos! Comunicamos por este medio que el d&iacute;a 12 de Julio de 2015 estaremos realizando un Torneo de Nataci&oacute;n en el Club de Estudiantes de La Plata.</p>\r\n<p>\r\n	Es una Posta Americana 5x25m durante 20 minutos. Por experiencia en eventos pasados de la misma metodolog&iacute;a estimamos contar con la presencia de aproximadamente 60 equipos dando un total de 500 personas entre deportistas y familiares que estar&aacute;n presentes el d&iacute;a del evento.</p>\r\n<p>\r\n	Estamos ofreciendo a los diferentes interesados la posibilidad de que incluyamos su marca/producto/servicio dentro de los sponsors que patrocinan y apoyan el evento. Ofrecemos: - Colgar Banners, Banderas o Afiches en el Natatorio cerca de donde realizamos la premiaci&oacute;n. Sector donde se canaliza la mayor cantidad de fotograf&iacute;as de los deportistas. - Incluir panfletos y/o tarjetas de contacto en los Kits de Hidrataci&oacute;n que se les entregan a los participantes al momento de la acreditaci&oacute;n. - Nombrarlos por micr&oacute;fono al momento de inicio de cada serie, y en la premiaci&oacute;n. - Posteos previos y posteriores al evento, en el grupo de Facebook destinado a este torneo. - Imagen en la Revistita donde se encuentra el Cronograma de la Fecha la cual es entregada a todos los que asisten. - Otros</p>\r\n<p>\r\n	Por otro lado, la propuesta m&aacute;s econ&oacute;mica es participar en la Revista Oficial del Torneo. En la cual se presentan 3 posibilidades. Hoja Completa, Media Hoja, un cuarto de hoja.</p>\r\n', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes`
--

CREATE TABLE IF NOT EXISTS `quienes` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `quienes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `quienes`
--

INSERT INTO `quienes` (`id`, `quienes`) VALUES
(1, '<div class="about-us-container">\r\n	<div class="container">\r\n		<div class="row">\r\n			<div class="col-sm-12 about-us-text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">\r\n				<p>\r\n					El Equipo de Salvamento Acu&aacute;tico Deportivo, ESADEP, es un equipo conformado por guardavidas y aspirantes a guardavidas con el fin de desenvolverse en el &aacute;rea de la competencia deportiva en salvamento acu&aacute;tico.</p>\r\n				<h3>\r\n					Objetivos</h3>\r\n				<p>\r\n					Divulgaci&oacute;n y formaci&oacute;n por la pr&aacute;ctica adecuada del deporte del salvamento. Formar un grupo de entrenamiento para seleccionar y capacitar guardavidas y as&iacute; formar equipos que quieran participar de las distintas competencias; ya sea de salvamento deportivo en pileta o de rescate en playa o r&iacute;o. As&iacute; como tambi&eacute;n competencias de aguas abiertas, postas americanas, acuatlones y otros eventos de inter&eacute;s.</p>\r\n				<h3>\r\n					Entrenamientos</h3>\r\n				<p>\r\n					Los entrenamientos son gratuitos y abiertos a todos aquellos guardavidas interesados.</p>\r\n				<p>\r\n					S&aacute;bados 18:00 a 19:30hs; rambla de 32 y 23; (a confirmar)</p>\r\n				<p>\r\n					- Entrenamiento en tierra para tiradores de soga [Prueba de la costa]</p>\r\n				<p>\r\n					- Line Throw (Lanzamiento de soga) [Una de las pruebas oficiales que hay para hacer en pileta]</p>\r\n				<p>\r\n					- Traslados [T&eacute;cnicas y opciones de como cargar a la victima para salir del agua]</p>\r\n				<p>\r\n					S&aacute;bados 20 a 22hs; Natatorio Estoa 35 23 y 24 N&ordm; 1427;</p>\r\n				<p>\r\n					- Salvamento Acu&aacute;tico (Pruebas de las competencias, Remolques Deportivos, Forzada, Apnea, etc.)</p>\r\n				<p>\r\n					Horarios de revisaci&oacute;n m&eacute;dica:</p>\r\n				<p>\r\n					Lunes 8 30 a 10 30, 18 30 a 21</p>\r\n				<p>\r\n					Martes 9 a 11, 18 a 20</p>\r\n				<p>\r\n					Mi&eacute;rcoles 13 30 a 15 30, 18 a 20</p>\r\n				<p>\r\n					Jueves 16 a 17 30, 18 a 20 30.</p>\r\n				<p>\r\n					Viernes 18 a 20 30</p>\r\n				<p>\r\n					S&aacute;bados 10 a 12</p>\r\n				<p>\r\n					Domingos; 15hs aproximadamente; (a confirmar)</p>\r\n				<p>\r\n					Salidas al R&iacute;o. Punta Lara, Ensenada.</p>\r\n				<p>\r\n					- Entradas, simulacros de rescate, nataci&oacute;n.</p>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reglamento`
--

CREATE TABLE IF NOT EXISTS `reglamento` (
  `id_reglamento` int(11) NOT NULL AUTO_INCREMENT,
  `reglamento` varchar(180) NOT NULL,
  `Descripcion` text NOT NULL,
  PRIMARY KEY (`id_reglamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `reglamento`
--

INSERT INTO `reglamento` (`id_reglamento`, `reglamento`, `Descripcion`) VALUES
(1, '2ada5-reglamento-completo.pdf', '<p>\r\n	Reglamento de competencia de Salvamento acu&aacute;tico deportivo 2015</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(90) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(120) NOT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `descripcion`, `foto`) VALUES
(1, 'Capacitación', '<p>\r\n	En vistas a lograr nuestra misi&oacute;n de disminuir las muertes por ahogamiento y jerarquizar la profesi&oacute;n de los guardavidas. Ponemos a disposici&oacute;n nuestra instituci&oacute;n para trabajar en este &aacute;rea en particular tratando de desarrollar todo tipo de posibles tem&aacute;ticas relacionadas.</p>\r\n<p>\r\n	1. Desde el Departamento de Capacitaci&oacute;n ESADEP ofrecemos a aquellos interesados Jornadas de Capacitaci&oacute;n de diferentes temas.</p>\r\n<p>\r\n	- Cursos de Primeros Auxilios y RCP</p>\r\n<p>\r\n	- Jornadas de Actualizaci&oacute;n en Primeros Auxilios y RCP</p>\r\n<p>\r\n	- Jornadas de Seguridad Acu&aacute;tica y Prevenci&oacute;n en el Medio Acu&aacute;tico</p>\r\n<p>\r\n	- Jornadas de Salvamento Deportivo de todo tipo</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	2. En lo local solemos traer disertantes invitados para armar jornadas espec&iacute;ficas de diferentes temas relacionados de inter&eacute;s:</p>\r\n<p>\r\n	- Jornada de Uso y Rescate con Tabla.</p>\r\n<p>\r\n	- Jornada de Uso y Rescate con Kayac</p>\r\n<p>\r\n	- Jornada de Trauma</p>\r\n<p>\r\n	- Jornada de Alto Rendimiento en Equipos de Trabajo</p>\r\n<p>\r\n	- Jornada de Supervivencia en el Medio Acu&aacute;tico</p>\r\n<p>\r\n	- Otras</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	3. Tambi&eacute;n realizamos viajes educativos a Congresos, Capacitaciones, y Jornadas de inter&eacute;s.</p>\r\n<p>\r\n	- Congreso Argentino de Guardavidas</p>\r\n<p>\r\n	- Bautismos de Buceo y Rescate Subacu&aacute;tico en el Pozo Buceo.</p>\r\n<p>\r\n	- Otros</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	4. Finalmente, tambi&eacute;n solemos orientar en todo momento sobre cursos ajenos a la instituci&oacute;n que est&aacute;n alineados con nuestros objetivos del Depatamento Capacitaci&oacute;n.</p>\r\n<p>\r\n	- Cursos de Guardavidas</p>\r\n<p>\r\n	- Instructorado en Salvamento</p>\r\n<p>\r\n	- Nadador de Rescate</p>\r\n<p>\r\n	- Timonel</p>\r\n<p>\r\n	- Socorrismo</p>\r\n<p>\r\n	- Jornadas Varias,</p>\r\n<p>\r\n	- Congresos Varios,</p>\r\n<p>\r\n	- Etc</p>\r\n', '565f8-1377505_532429573507539_1076518144_n.jpg'),
(2, 'Alquiler de Material', '<p>\r\n	En vistas a promover las actividades que realizamos ponemos a disposici&oacute;n el Alquiler de nuestros Materiales para aquellas instituciones o personas que lo requieran para realizar jornadas, capacitaci&oacute;n, torneos, o actividades aisladas.</p>\r\n<p>\r\n	<u>Entre los materiales que contamos tenemos: </u></p>\r\n<p>\r\n	- 1 Ca&ntilde;&oacute;n proyector de diapositivas</p>\r\n<p>\r\n	- 1 Maniqu&iacute; de RCP. Ambu Pedi&aacute;trico y Est&aacute;ndar. Mascarillas.</p>\r\n<p>\r\n	- Botiqu&iacute;n Completo.</p>\r\n<p>\r\n	- 1 Camilla para Trauma + 3 Collares Filadelfia (3 medidas) + Tabla de extracci&oacute;n corta</p>\r\n<p>\r\n	- 6 Torpedos</p>\r\n<p>\r\n	- 2 Carreteles de Soga de 200m</p>\r\n<p>\r\n	- 1 Bolsa de Rescate</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<u>Kit Completo de Salvamento Deportivo</u></p>\r\n<p>\r\n	- 6 Maniqu&iacute;es de Salvamento Deportivo</p>\r\n<p>\r\n	- 6 Obst&aacute;culos</p>\r\n<p>\r\n	- 6 Tubos de Rescate</p>\r\n<p>\r\n	- 6 Sogas de Lanzamiento de Soga</p>\r\n<p>\r\n	- 2 Sogas de 30m con Bandolera y mosquet&oacute;n.</p>\r\n<p>\r\n	- 1 Tabla de Rescate Deportivo</p>\r\n<p>\r\n	- 10 Testimonios Australianos para&nbsp; Banderas en Playa</p>\r\n', '95ddc-maniquies-de-atras.jpg'),
(3, 'Seguridad Acuática', '<p>\r\n	Nuestra entidad ESADEP, situada en la Ciudad de La Plata, ofrece a aquellas entidades organizadoras de eventos deportivos, tales como maratones, acuatlones, duatlones, triatlones, aguas abiertas, etc. el plantel de Recursos Humanos&nbsp; con el que contamos, puesto a disposici&oacute;n para cubrir todos los roles en donde nos requieran. La totalidad de nuestro personal son&nbsp; deportistas que realizan Salvamento Acu&aacute;tico, pertenecientes tambi&eacute;n a otras disciplinas como Nataci&oacute;n, Pedestrismo, Ciclismo, en cualquiera de sus modalidades, por lo que son afines al deporte en cuesti&oacute;n sobre el cual hay que trabajar.</p>\r\n<p>\r\n	Sumado a la experiencia en el &aacute;mbito (adjuntamos CV del equipo de trabajo debajo) es de gran utilidad para el anfitri&oacute;n, organizador del evento, solo tener que indicar el n&uacute;mero de personas que desean y despreocuparse de tener que emprender una b&uacute;squeda de tantas personas, corroborando disponibilidad y debiendo explicar a todos por separados de que se trata. La entidad organizadora solo debe comunicarse con el coordinador general del grupo, y este ser&aacute; quien se encargue de estar en tiempo y forma con el plantel de recursos humanos requerido.</p>\r\n<p>\r\n	<strong><u>ROLES</u></strong></p>\r\n<p>\r\n	<strong>1. Seguridad Acu&aacute;tica</strong>: a cargo de Guardavidas experimentados con T&iacute;tulo Habilitante, con la rev&aacute;lida actualizada al d&iacute;a de la fecha.</p>\r\n<p>\r\n	600$ La Jornada. Coordinador del Operativo en Agua</p>\r\n<p>\r\n	400$ La Jornada. Cada Guardavidas</p>\r\n<p>\r\n	ESADEP solo responder&aacute; a la Seguridad Acu&aacute;tica en caso de corroborar que el evento se encuentre asegurado bajo todo riesgo, incluyendo ahogamiento. En caso contrario, solo asistir&iacute;amos como Colaboradores en la parte de Seguridad en el Agua brindando ayuda y apoyo a quien tenga la responsabilidad de esa &aacute;rea.</p>\r\n<p>\r\n	ESADEP NO ASUME NINGUN TIPO DE RESPONSABILIDAD CIVIL Y/O PENAL POR EVENTUALES DA&Ntilde;OS Y PERJUICIOS SUFRIDOS POR LOS COMPETIDORES DURANTE LA COMPETENCIA, ASUMIENDO LA EXCLUSIVA RESPONSABILIDAD EL ORGANIZADOR DEL EVENTO, QUIEN DEBERA ACREDITAR PREVIAMENTE LA CONTRATACION DE UN SEGURO DE RESPONSABILIDAD CIVIL HACIA TERCEROS POR DA&Ntilde;OS Y PERJUICIOS Y SEGURO DEPORTIVO VIGENTE, DEBIENDO EXHIBIR LA RESPECTIVA POLIZA.</p>\r\n<p>\r\n	ESADEP cuenta con infraestructura de equipamiento propio para ofrecer un buen servicio de seguridad a los deportistas que asistan al evento. Kayacs y Tablas de rescate para seguir a los deportistas, teniendo una visual desde un &aacute;ngulo superior sumado a un r&aacute;pido acceso. Dispositivos de flotaci&oacute;n (roscas, torpedos, tubos de rescate), Camilla y collarines de inmovilizaci&oacute;n en caso de trauma, Botiquines, etc.</p>\r\n<p>\r\n	<strong>2. Coordinadores </strong></p>\r\n<p>\r\n	a. Coordinador General del Staff Organizativo: 500$</p>\r\n<p>\r\n	En caso que la organizaci&oacute;n no tenga tiempo o disponibilidad de encargarse del Staff Organizativo de Banderilleros, puestos de hidrataci&oacute;n, etc. Asignamos a un coordinador del grupo encargado de asignar/supervisar todas las tareas y actividades a cubrir establecidos previamente con la organizaci&oacute;n.</p>\r\n<p>\r\n	Esta persona estar&iacute;a encargada de:</p>\r\n<p>\r\n	- Comunicaci&oacute;n y disponibilidad constante con el anfitri&oacute;n del evento.</p>\r\n<p>\r\n	- Chequeo de que los puestos de hidrataci&oacute;n est&eacute;n equipados y de su posible reposici&oacute;n.</p>\r\n<p>\r\n	- Entrega de viandas a los colaboradores en caso de ser de gran duraci&oacute;n el periodo a estar en ese lugar.</p>\r\n<p>\r\n	- Posibles relevos y cambios en caso de tener que reemplazar a alguno por x motivo.</p>\r\n<p>\r\n	- Cierre del recorrido, retiro de banderilleros e infraestructura m&aacute;s lejana.</p>\r\n<p>\r\n	- Otros.</p>\r\n<p>\r\n	<strong>3. Recursos Humanos a disposici&oacute;n: </strong></p>\r\n<p>\r\n	300$ se destinaran a aquellas personas puestas a disposici&oacute;n como recursos humanos, conocidos como &ldquo;manos &uacute;tiles&rdquo;.</p>\r\n<p>\r\n	Estacionamiento/Recepci&oacute;n de Deportistas, Banderilleros de Recorrido, Puestos de Hidrataci&oacute;n, Limpieza del Lugar, Armado y desarmado del per&iacute;metro a recorrer, seguimiento en moto del primer/ultimo deportista, o cualquier otro rol que se necesite cubrir.</p>\r\n<p>\r\n	<strong>4. Roles Clave</strong></p>\r\n<p>\r\n	Hay roles importantes por lo general ya cubiertos por personal de confianza del organizador del evento, pero dejamos la puerta abierta si se necesitan personas con capacidades espec&iacute;ficas para roles clave dentro del evento a concretar valor con la persona a convocar y al analizar la responsabilidad del rol en detalle:</p>\r\n<p>\r\n	- Megafon&iacute;a y Locuci&oacute;n: Fluidez y relato del evento. Entrega de premiaci&oacute;n. Etc.</p>\r\n<p>\r\n	- Secretar&iacute;a: Check-in, entrega de kits, cobro de inscripciones, etc.</p>\r\n<p>\r\n	- Otros.</p>\r\n<p>\r\n	<strong>Experiencia </strong></p>\r\n<p>\r\n	5. MaxRace, Magdalena. Abril 2015.</p>\r\n<p>\r\n	4. 021 Sports, Triatlon Short Rio Santiago, Berisso.</p>\r\n<p>\r\n	3. 021Sports, Triatlon Ensenada, Laguna de la Diagonal 74. Febrero 2015</p>\r\n<p>\r\n	2. 021 Sports, Triatl&oacute;n Republica de los Ni&ntilde;os, City Bell, Enero 2015</p>\r\n<p>\r\n	1. Ciclismo City Bell. Octubre 2014</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Referencias</strong></p>\r\n<p>\r\n	Leandro Gilbert, 021Sports (tel&eacute;fonos)</p>\r\n<p>\r\n	Leandro, Max Race.</p>\r\n', '26614-10408951_927340907300395_6562129122599040769_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `id_sponsor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sponsor` varchar(70) NOT NULL,
  `link_web` varchar(100) NOT NULL,
  `foto` varchar(150) NOT NULL,
  PRIMARY KEY (`id_sponsor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sponsors`
--

INSERT INTO `sponsors` (`id_sponsor`, `nombre_sponsor`, `link_web`, `foto`) VALUES
(1, 'EPSA', 'http://www.epsa.org.ar/', 'b67c9-10613155_695831703830844_5008201081519592716_n.jpg'),
(2, 'Club Estudiantes de La Plata', 'http://www.estudiantesdelaplata.com/salvamento-acuatico/', 'a9f51-estudiantes.bmp'),
(3, 'El Pozo de Buceo', 'http://elpozobuceo.com/', '16ae1-elpozo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_prueba`
--

CREATE TABLE IF NOT EXISTS `tipo_prueba` (
  `id_prueba` int(1) NOT NULL,
  `tipo_prueba` varchar(60) NOT NULL,
  PRIMARY KEY (`id_prueba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_prueba`
--

INSERT INTO `tipo_prueba` (`id_prueba`, `tipo_prueba`) VALUES
(1, 'Individuales'),
(2, 'Grupales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'pepito', '$2a$08$0dgO5S0iu.tlRzCj25I5bemkjdoWrKjVXO2zCxjIbt20miyVZwYF6'),
(2, 'lea', '$2a$08$lkotxlItw5U/O5DW9fE.D.fINQIrnl70k7AHNjTeNH/SDLvtQxLCm'),
(3, 'hola', '$2a$08$Wwtl7ggX8rvjSC9OOz0WGOdh1PoUCBLNjVrQ621utnA41OijYRCj2'),
(4, 'juanca', '$2a$08$oSig9clrAOol/K0AADAeMea6StdYlong0Yom5/yq3jc2Votns5OZW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `nombreusuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tipo` char(1) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `mail`, `nombreusuario`, `password`, `tipo`) VALUES
(1, 'Leandro', 'Gorriz', 'lealp88@gmail.com', 'lea', 'laplata10', 'A'),
(2, 'Matias', 'Tombazzi', 'matias.tombazzi@hotmail.com', 'matiastombazzi', 'Natacion1988', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
