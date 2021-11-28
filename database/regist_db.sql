-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 12:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `regist_db`
--

CREATE TABLE `regist_db` (
  `reg_id` int(128) NOT NULL,
  `reg_user` varchar(128) NOT NULL,
  `reg_given` varchar(128) NOT NULL,
  `reg_middle` varchar(128) NOT NULL,
  `reg_course` varchar(128) NOT NULL,
  `reg_year` varchar(128) NOT NULL,
  `reg_atm` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regist_db`
--

INSERT INTO `regist_db` (`reg_id`, `reg_user`, `reg_given`, `reg_middle`, `reg_course`, `reg_year`, `reg_atm`) VALUES
(2, 'ABALOS', 'MADEL', 'MALLORCA', 'BS in Food Technology ', '3rd', 'with ATM'),
(3, 'ADIZAS', 'KRISTINE ABBIE ', 'SARTE', 'BS in Information Technology ', '3rd', 'with ATM'),
(4, 'AGRAVANTE ', 'JEORGE PAULO', 'PALCON', 'BS in Information System', '3rd', 'with ATM'),
(5, 'ALMEROL ', 'JENICA', 'TALABON ', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(6, 'APIN', 'IAN', 'MAPI ', 'BS in Information Technology', '3rd', 'with ATM'),
(10, 'APLAYA', 'MADEL', 'LEGARDO', 'Bachelor of Secondary Education Major in English ', '3rd', 'with ATM'),
(11, 'ARABACA', 'ANGELICA', 'IBARRETA', 'BS in Information Technology', '3rd', 'with ATM'),
(12, 'ATIENZA', 'MAIBEL JESSICA', 'VICTORIA', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(13, 'AUXILIO ', 'APPLE CLAIRE', 'BORBO', 'BS in Nursing', '3rd', 'with ATM'),
(14, 'BALANG ', 'ANALIE', 'ATE', 'BS Information Technology', '3rd', 'with ATM'),
(15, 'BALANLAY', 'JESSA MAY', 'SACAYAN ', 'BS in Information System ', '3rd', 'with ATM'),
(16, 'BALINGASA', 'HAZEL', 'GUALBERTO', 'BS in Information Technology', '3rd', 'with ATM'),
(17, 'BALMAS ', 'ROCHELLE', 'DIAZ ', 'BS in Information Technology ', '3rd', 'with ATM'),
(18, 'BARIA', 'ANGELA', 'MORCO', 'Bachelor of Elementary Education', '3rd', 'with ATM'),
(19, 'BARIA', 'ELAIZA MAE', 'BASABE ', 'BS in Information Technology ', '3rd', 'with ATM'),
(20, 'BESMONTE', 'JINKY', 'BALASTA', 'BS in Food Technology', '3rd', 'with ATM'),
(21, 'BOADO ', 'BABYLYN', 'MAGDAONG ', 'BS in Computer Science', '3rd', 'with ATM'),
(22, 'BOLITO', 'JOE MARIE', 'CARIÑAGA', 'BS in Food Technology ', '3rd', 'with ATM'),
(23, 'BONI', 'CHRISTIAN JOMARI', 'DELOS POYOS ', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(24, 'BORILLA', 'DEXTER', 'YAGO ', 'BS in Food Technology', '3rd', 'with ATM'),
(25, 'ACELUCHE', 'AIREEN', 'MAQUIÑANA', 'BS in Information System', '3rd', 'without ATM'),
(26, 'ALAPAD ', 'ELOISA', 'LASONA', 'BS in Information Technology ', '3rd', 'without ATM'),
(28, 'briones', 'ellaine ivy', 'bongon', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(30, 'CAÑETE', 'JANNEN', 'ANDES', 'BS in Food Technology ', '3rd', 'with ATM'),
(31, 'CAPACIO', 'JAY-AR', 'ROGANDA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(32, 'CARUMBA', 'AIRA MAE', 'PONSE', 'BS Computer Science', '3rd', 'with ATM'),
(33, 'CASAUL', 'EDUARDO JR', 'CANABE', 'BSED Major in English', '3rd', 'with ATM'),
(34, 'CENITA', 'JULIEANN', 'ATUN', 'BS in Computer Engineering ', '3rd', 'with ATM'),
(35, 'CERILO', 'MA JESSICA', 'REY', 'BS in Food Technology ', '3rd', 'with ATM'),
(36, 'CHAN', 'CHAZZIE ANDREI', 'MIRAFLOR', 'BS in Nursing', '3rd', 'with ATM'),
(37, 'CLAVO', 'RHEM JOHN', 'SALCEDO', 'BS in Automotive Technology', '3rd', 'with ATM'),
(38, 'CORNELIO', 'CHARMAINE', 'BAUTISTA', 'BS in Information System', '3rd', 'with ATM'),
(39, 'CULIAN', 'JOEL', 'PEÑALOSA', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(40, 'DANIEL', 'alyssa', 'sayat', 'BS in Information System', '3rd', 'with ATM'),
(41, 'DELA TORRE ', 'JULIENA', 'RELLAMA', 'BS Computer Science', '3rd', 'with ATM'),
(43, 'DIO', 'RALPH RIHCI ', 'MADRILLOS', 'BS in Computer Engineering ', '2nd', 'with ATM'),
(44, 'ENCISA', 'ARNIE QUEEN', 'SAPIERA', 'Bachelor of Elementary Education ', '3rd', 'with ATM'),
(45, 'FLORIN', 'MAUI LEA', 'SAÑOSA', 'BS in Nursing', '3rd', 'with ATM'),
(46, 'GAVERIA', 'GABRIEL', 'OROGO', 'BS in Food Technology ', '3rd', 'with ATM'),
(47, 'GOLO', 'FELLY', 'BRECIA', 'Bachelor of Secondary Education Major in English ', '3rd', 'with ATM'),
(48, 'GUDA', 'CIARRA', 'RABELAS', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(49, 'LAGANSON', 'MARY JANE', 'SERDEÑA', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(50, 'LANGCAUON', 'JOENAFE', '', 'BS in Electronics Technology', '3rd', 'with ATM'),
(51, 'LLABRES', 'DAVID RONAN', 'LUNA', 'BS in Electrical Technology ', '3rd', 'with ATM'),
(52, 'LUCIS', 'ANGELICA', 'MONFORTE', 'BS Information System', '3rd', 'with ATM'),
(53, 'MAGDAONG', 'MARK JHON', 'MUJAR', 'BS in Electrical Technology ', '3rd', 'with ATM'),
(54, 'MAGDATO', 'LADY ANN', 'MANCERA', 'BS in Information System', '3rd', 'with ATM'),
(55, 'MALAPO', 'MA SALVE', '', 'Bachelor of Elementary Education', '3rd', 'with ATM'),
(56, 'MALATE', 'FREDERICK', 'CLEOFE', 'BS IN EBachelor of Elementary Education', '3rd', 'with ATM'),
(57, 'MALATE', 'LOURDELYN', 'BERNALDEZ', 'BS in Food Technology ', '3rd', 'with ATM'),
(58, 'MEDALLON', 'SHIELA', 'CONDE', 'BS in Information System', '3rd', 'with ATM'),
(59, 'MERCADO', 'MA ANGELIKA', 'OLICIA', 'Bachelor of Elementary Education ', '3rd', 'with ATM'),
(60, 'MESOLANIA', 'DEMELYN', 'CAMELON', 'BS in Information Technology', '3rd', 'with ATM'),
(65, 'MOISES', 'RICA MAY ', 'MUNI', 'BS in Information Technology', '3rd', 'with ATM'),
(66, 'MORADILLO', 'JOEY', 'LOMIBAO', 'BS in Electronics Technology', '3rd', 'with ATM'),
(67, 'MORAL', 'JONEL', 'MOYO', 'BS in Information Technology ', '3rd', 'with ATM'),
(68, 'MORATA', 'EDMAR', 'DOL', '', '', ''),
(69, 'MORATA', 'EDMAR', 'DOLZ', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(70, 'MORENTE', 'REBECCA', 'ARIOLA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(71, 'NIEGAS', 'MIA RAY', 'LOTINO', 'BS in Information Technology', '3rd', 'with ATM'),
(72, 'NOCETE', 'CECIL', 'OROGO', 'BS in Food Technology ', '3rd', 'with ATM'),
(73, 'OCBINA', 'KAYE', 'MIRANDA', 'BS in Information Technology Specialization in Animation ', '3rd', 'with ATM'),
(74, 'OCFEMIA', 'CAMILLE JOY', 'OLAYTA', 'Bachelor of Secondary Education Major in Mathematics ', '3rd', 'with ATM'),
(75, 'OLGINA', 'SHIELA', 'NACION', 'Bachelor of Secondary Education Major in Mathematics ', '3rd', 'with ATM'),
(76, 'OLIVENZA', 'JOSEPH', 'MACEDA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(77, 'OLLET', 'ARBIEJAY', 'LLONA', 'Bachelor of Secondary Education Major in English ', '3rd', 'with ATM'),
(78, 'ONDES', 'MA ELLA EUNICE', 'MAQUINIANA', 'BS in Nursing', '3rd', 'with ATM'),
(79, 'OPIANA', 'RYAN', 'VELASCO', 'BS in Information Technology ', '3rd', 'with ATM'),
(80, 'OPRECIO', 'MARY GRACE', 'CORNEL', 'BS in Computer Engineering ', '3rd', 'with ATM'),
(81, 'OREBIANA', 'LOIDA', 'BOLIMA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(82, 'OROLFO', 'ARIANELY', 'RINGAD', 'BS in Information System', '3rd', 'with ATM'),
(83, 'OXALES', 'ANJANETTE', 'OPEÑA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(84, 'PAJARA', 'JOHN CARLO', 'PATRIARCA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(85, 'PALENCIA', 'JOSHUA', 'VALIENTE', 'BS in Information System', '3rd', 'with ATM'),
(86, 'PAMPLONA', 'CLARISSE', 'OPRECIO', 'Bachelor of Secondary Education Major in Mathematics ', '3rd', 'with ATM'),
(87, 'PELAYO', 'ANGELYN', 'CADAG', 'BS in Food Technology ', '3rd', 'with ATM'),
(88, 'PIELAGO', 'JAN LI', 'BONETE', 'BS in Information Technology ', '3rd', 'with ATM'),
(89, 'POLBINAR', 'JOLANRRY', 'PANESARES', 'BS in Automotive Technology', '3rd', 'with ATM'),
(90, 'PRELLEGERA', 'AARON', 'DACILLO', 'BS in Information Technology Specialization in Animation ', '3rd', 'with ATM'),
(92, 'PUSING', 'AMIELYN', 'APAREJADO', 'Bachelor of Technology and Livelihood Education ', '2nd', 'with ATM'),
(93, 'RADASA', 'MA JACQUELYN', 'FENIS', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(94, 'RAGOS', 'MICKEE DAN ', 'NOBLEZA', 'Bachelor of Elementary Education ', '3rd', 'with ATM'),
(95, 'RAGUAL', 'GINALYN', 'ALCANTARA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(96, 'RANARA', 'ALTHEA MAE ', 'BRONDIAL', 'Bachelor of Elementary Education ', '3rd', 'with ATM'),
(97, 'RANAY', 'ANGELICA', 'RIBAMBA', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(98, 'RANCES', 'LORELIE', 'LEGASPI', 'BS in Information Technology', '3rd', 'with ATM'),
(99, 'RANOSA', 'ALEXANDRA', 'FAUSTO', 'BS in Information System', '3rd', 'with ATM'),
(100, 'RAYALA', 'JENNIFER', 'DOMANILLO', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(101, 'REBANAL', 'KARREN', 'MIRABUENO', 'Bachelor of Elementary Education ', '3rd', 'with ATM'),
(102, 'REBUSQUILLO', 'LOUIE', 'BANDE', 'Bachelor of Elementary Education', '3rd', 'with ATM'),
(103, 'RECIO', 'SARAH JANE', 'ROS', 'BS in Food Technology ', '3rd', 'with ATM'),
(104, 'RELLORES', 'SAYREX', 'MARTILLAN', 'BS in Electrical Technology ', '3rd', 'with ATM'),
(105, 'REMPILLO', 'JOVI MAE', 'ORAYE', 'BS in Information System', '3rd', 'with ATM'),
(106, 'REOBALDES', 'KAYE', 'RENGALOTA', 'BS in Electronics Engineering', '3rd', 'with ATM'),
(107, 'RETANAN', 'KRISTINE CLAIRE ', 'MIRANDILLA', 'BS in Electronics Engineering ', '3rd', 'with ATM'),
(108, 'RIBANO', 'ANGELA MAE', 'COMERCIASE', 'BS in Electrical Technology', '3rd', 'with ATM'),
(109, 'RICABLANCA', 'MARK JAY ', 'BONCODIN', 'BS in Information Technology Specialization in Animation', '3rd', 'with ATM'),
(110, 'RICAHUERTA', 'JESSA MAE ', 'ROBRIGADO', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(111, 'RITO', 'ANGELICA', 'POLINAR', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(112, 'RIVERA', 'JOSHUA', 'BERMUDO', 'BS in Information Technology ', '3rd', 'with ATM'),
(113, 'ROQUID', 'KENNETH', 'LOZA', 'BS in Information Technology ', '3rd', 'with ATM'),
(114, 'ROSEL', 'PAULO', 'LETADA', 'BS in Electronics Technology', '3rd', 'with ATM'),
(115, 'ROSLIN', 'SHAINA GRACE ', 'CAMU', 'BS in Electronics Engineering', '3rd', 'with ATM'),
(116, 'SACAYAN', 'KIMBERLY CLARK ', 'SAYSON', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(117, 'SAGUION', 'MAYLYN', 'SEGUI', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(118, 'SAMBAJON', 'MECHELLE', 'MAGNO', 'BS in Electronics Technology', '3rd', 'with ATM'),
(119, 'SAMPER', 'JUSTINE JOSE ', 'CORTEZANO', 'Bachelor of Elementary Education ', '3rd', 'with ATM'),
(120, 'SANTAIN', 'AMIE', 'REPOLLES', 'Bachelor of Secondary Education Major in Mathematics ', '3rd', 'with ATM'),
(121, 'SARIO', 'ERICA JOY', 'SALVADOR', 'BS in Information Technology Specialization in Animation', '3rd', 'with ATM'),
(122, 'SAYAGO', 'JEANLYN', 'DEL ROSARIO ', 'BS Computer Science', '3rd', 'with ATM'),
(123, 'SAZON', 'BERNADETH samantha', 'NAPA', 'Bachelor of Secondary Education Major in English', '3rd', 'with ATM'),
(124, 'SECILLANO', 'JOMARI', 'REFEREZA', 'BS in Information Technology Specializtion in Animation ', '2nd', 'with ATM'),
(125, 'SODSOD', 'GRESYL', 'RECTIN', 'BS in Nursing', '2nd', 'with ATM'),
(126, 'STA MARIA', 'DONNA BELL', 'OÑATE', 'BS in Electronics Technology', '3rd', 'with ATM'),
(127, 'SURBANO', 'JULIE ANN ', 'BRAZIL', 'Bachelor of Elementary Education ', '2nd', 'with ATM'),
(128, 'TOLARBA', 'JOSHUA', 'PAGO', 'BS in Information System', '3rd', 'with ATM'),
(129, 'TORALDE', 'ANDY', 'BARBOSA', 'BS in Information Technology', '3rd', 'with ATM'),
(130, 'UBA', 'HAZEL', 'TALIBONG', 'BS in Information Technology ', '3rd', 'with ATM'),
(131, 'VALENZUELA', 'VANESSA', 'CORBILLA', 'Bachelor of Elementary Education', '3rd', 'with ATM'),
(132, 'VENTURA', 'BRENDA', 'PABLEO', 'BS in Electronics Technology', '3rd', 'with ATM'),
(133, 'VISCAYA', 'JOERGE', 'OLAYRES', 'BS in Entrepreneurship', '3rd', 'with ATM'),
(135, 'ALCANTARA', 'RECHILDA', 'PASPER', 'BS in Entrepreneurship', '3rd', 'without ATM'),
(136, 'ALMONTE', 'ANA MAY', 'DIMABAYAO', 'Bachelor of Secondary Education Major in English', '2nd', 'without ATM'),
(137, 'ALTAVANO', ' JOHN DARYLL', '', 'BS in Information System', '3rd', 'without ATM'),
(138, 'ASCUTIA', 'REYMOND', 'PAÑO', 'BS in Information Technology', '2nd', 'without ATM'),
(139, 'BAJARO', 'BABY JANE', 'RABONZA', 'BS in Information Technology', '2nd', 'without ATM'),
(140, 'BALAURO', 'MHELVIN', 'PAYNO', 'BS in Electrical Technology', '3rd', 'without ATM'),
(141, 'BAÑARES', 'RUSELLE', 'OCCIDENTAL', 'BS in Information System', '3rd', 'without ATM'),
(142, 'BARDE', 'JESSA', 'RISGONIO', 'BS in Food Technology ', '2nd', 'without ATM'),
(143, 'BARRAMEDA', 'RENALYN', 'LOYOLA', 'BS Information System', '2nd', 'without ATM'),
(144, 'BARRO', 'jOHN VINCENT', 'MAGDASOC', 'BS in Automotive Technology', '3rd', 'without ATM'),
(145, 'BATALLER', 'JUSTEN CARL', 'VITERO', 'BS in Information Technology Specializtion in Animation', '2nd', 'without ATM'),
(146, 'BELMONTE', 'MARK LEO ', 'ROSANES', 'BS in Automotive Technology', '2nd', 'without ATM'),
(147, 'BELUNO', 'GINALYN', 'ADANA', 'Bachelor of Technology and Livelihood Education', '2nd', 'without ATM'),
(148, 'BENAMIR', 'CHARICE SHANE', 'PAGUNSAN', 'Bachelor of Secondary Education Major in English ', '3rd', 'without ATM'),
(149, 'BERSABE', 'JONA', 'SABAYBAY', 'Bachelor of Secondary Education Major in Mathematics', '3rd', 'without ATM'),
(150, 'BETACHE', 'MARY JOY ', 'LEVANTINO', 'BS Computer Science', '2nd', 'without ATM'),
(151, 'BOBIER', 'RODELIN', 'NOMA', 'BSED Major in Mathematics', '2nd', 'without ATM'),
(152, 'BOBIS', 'ANGELO CARLO', 'FLORES', 'BS in Food Technology ', '2nd', 'without ATM'),
(153, 'BON', 'ROSE ANN', 'PANTAN', 'BS in Electronics Technology', '2nd', 'without ATM'),
(154, 'BONAGUA', 'ANGELA', 'PALIZA', 'Bachelor of Secondary Education Major in English', '2nd', 'without ATM'),
(155, 'BONGOL', 'JOHN OLHIE ', 'SE', 'BS in Electrical Technology', '2nd', 'without ATM'),
(156, 'BRON', 'JUSTIN', 'CAMILLO', 'Bachelor of Elementary Education', '2nd', 'without ATM'),
(157, 'BUBAN', 'MARJORIE', 'POLBORIDO', 'BSED Major in Mathematics ', '2nd', 'without ATM'),
(158, 'BUSTOS', 'PATRICK JOHN ', 'SALAZAR', 'BS in Automotive Technology', '2nd', 'without ATM'),
(159, 'CALISIN', 'JOMER', 'BATALLER', 'BS in Information System', '2nd', 'without ATM'),
(160, 'CAMORAL', 'JECEL', 'TABAYAG', 'BS in Information System', '2nd', 'without ATM'),
(161, 'CANABAL', 'RYZZA ANN ', 'BENAMERA', 'BS in Information System', '2nd', 'without ATM'),
(162, 'CANALDA', 'DIANA', 'PADRE', 'BS in Electronics Technology', '3rd', 'without ATM'),
(163, 'CARILLA', 'ROXAN', 'CHAVEZ', 'BS in Food Technology ', '2nd', 'without ATM'),
(164, 'CERIOLA', 'EUGENE', 'LLANETA', 'BS in Electronics Technology', '3rd', 'without ATM'),
(165, 'CERVANTES', 'CRISTINE', 'MANCERA', 'BS in Electronics Technology', '2nd', 'without ATM'),
(166, 'COLIMA', 'JANINE', 'FIGURACION', 'BS Computer Science', '2nd', 'without ATM'),
(167, 'DE LEON', 'JANE', 'TUSCANO', 'BS in Information System', '3rd', 'without ATM'),
(168, 'DELA CRUZ ', 'OLIVER', 'MODINO', 'BS in Electrical Technology', '2nd', 'without ATM'),
(169, 'DELA PEÑA', 'REX', 'ESPLANA', 'BS in Food Technology ', '3rd', 'without ATM'),
(170, 'DUCOT', 'MARK JENDRIX ', 'GOMEZ', 'BS in Information System', '2nd', 'without ATM'),
(171, 'ESPARTINEZ', 'ACE', 'MADRONIO', 'BS Computer Science', '2nd', 'without ATM'),
(172, 'ESPARTINEZ', 'ALBERT', 'MADRONIO', 'BS in Information Technology', '3rd', 'without ATM'),
(173, 'FERRER', 'KRISHA MIROL', 'BUETA', 'BS in Entrepreneurship', '3rd', 'without ATM'),
(174, 'BUETA', 'JOSHUA IAN ', 'CORNELIO', 'Bachelor of Elementary Education', '2nd', 'without ATM'),
(175, 'FLORES', 'JEROME', 'LAVAPIE', 'BS in Mechanical Technology ', '2nd', 'without ATM'),
(176, 'GONZALES', 'ELLA MAE ', 'GAYMO', 'BS in Entrepreneurship', '3rd', 'without ATM'),
(177, 'IBARETA', 'BABY JAEN', 'RIÑON', 'BS in Information Technology ', '2nd', 'without ATM'),
(178, 'LATUGA', 'PAMELA', 'ESQUILON', 'BS in Information Technology ', '3rd', 'without ATM'),
(179, 'LAURORA', 'RONAN RHEY', 'MESOLANIA', 'BS in Electrical Technology ', '3rd', 'without ATM'),
(180, 'LIGUTAN', 'JOHNLEE', 'PILLOGO', 'BS in Entrepreneurship', '2nd', 'without ATM'),
(181, 'MALAPO', 'CHRISTIAN', 'CHRISTIAN', 'BS in Automotive Technology', '3rd', 'without ATM'),
(182, 'MARILAG', 'ERIKA MAE', 'DELA CRUZ ', 'BS in Food Technology ', '3rd', 'without ATM'),
(183, 'MARTILLANA', 'MAREON', 'VELASCO', 'Bachelor of Secondary Education Major in Mathematics', '2nd', 'without ATM'),
(184, 'MONDA', 'LOVELYN', 'CAMONOGA', 'BS in Information Technology', '3rd', 'without ATM'),
(185, 'MORADA', 'JOEMEL', 'BETMAL', 'Bachelor of Technology and Livelihood Education ', '2nd', 'without ATM'),
(186, 'MOSTAR', 'DIANA JANE ', 'OBIÑA', 'Bachelor of Elementary Education', '3rd', 'without ATM'),
(187, 'MUNDA', 'NIKKA', 'REMADA', 'BS in Automotive Technology', '3rd', 'without ATM'),
(188, 'MURILLA', 'DANICA JOY', 'SAYNO', 'BS in Electronics Technology', '3rd', 'without ATM'),
(189, 'NUGUIT', 'PAULINE JOY', 'TAMBOBONG', 'Bachelor of Elementary Education', '2nd', 'without ATM'),
(190, 'OLIVAREZ', 'EUGENE', 'LLAMASARES', 'BS in Electrical Technology', '2nd', 'without ATM'),
(191, 'OLIVARIO', 'JOSEPH', 'BLANCO', 'BS Computer Science', '2nd', 'without ATM'),
(192, 'ORILLA', 'CRISTY MAE ', 'SEVA', 'BS in Information Technology', '2nd', 'without ATM'),
(193, 'ORILLA', 'CHRISTOBERT', 'SEVA', 'BS in Electronics Technology', '2nd', 'without ATM'),
(194, 'PANTE', 'JOHN BOY', 'AVILA', 'BS in Information System', '3rd', 'without ATM'),
(195, 'PORTEM', 'SHAIRAMAE', 'MILLAN', 'BS in Food Technology ', '3rd', 'without ATM'),
(196, 'RAMBOYONG', 'RICA MAE', 'CASIAO', 'Bachelor of Secondary Education Major in English ', '2nd', 'without ATM'),
(197, 'RANAY', 'MARK HAROLD ', 'OLIDO', 'BS in Food Technology ', '2nd', 'without ATM'),
(198, 'RAPI', 'DAINA ROSE', 'TIAMZON', 'Bachelor of Elementary Education ', '3rd', 'without ATM'),
(199, 'RAULE', 'jAKE RYAN ', 'MAGNO', 'BS Computer Science', '3rd', 'without ATM'),
(200, 'RELLEVE', 'SHYMIE FRANCE', 'TANDINGAN', 'BS Information Technology', '3rd', 'without ATM'),
(201, 'REMOLACIO', 'KHEN WELMER', 'PRIULO', 'BS in Electronics Engineering', '2nd', 'without ATM'),
(202, 'RICACHO', 'ROSEMARIE', 'MADARA', 'BS in Information System', '2nd', 'without ATM'),
(203, 'RIVERA', 'RONA JOY', 'CADAG', 'BS in Information Technology Specialization in Animation ', '3rd', 'without ATM'),
(204, 'SABATER', 'JENNIFER', 'VARGAZ', 'BS in Information System', '3rd', 'without ATM'),
(205, 'SABEROLA', 'JEANNIE MARIE', 'FIGURASIN', 'BS in Food Technology ', '3rd', 'without ATM'),
(206, 'SALCEDO', 'JEZZA', 'BAGASBAS', 'Bachelor of Elementary Education ', '3rd', 'without ATM'),
(207, 'SALUYA', 'MONIQUE', 'ARDALES', 'BS in Electronics Technology', '2nd', 'without ATM'),
(208, 'SALVANTE', 'ERICKA MAE ', 'SACULSAN', 'Bachelor of Secondary Education Major in English', '2nd', 'without ATM'),
(209, 'SAMORIN', 'NELVIE', 'ARIATE', 'BS in Electronics Technology', '3rd', 'without ATM'),
(210, 'SAN ANDRES', 'KAREN JOY', 'MACANDOG', 'BSED Major in English', '2nd', 'without ATM'),
(211, 'SANDRINO', 'MA HAZEL ', 'VASQUEZ', 'Bachelor of Elementary Education ', '2nd', 'without ATM'),
(212, 'SARILLA', 'ROCEL', 'BONGALOS', 'BS in Electronics Technology', '3rd', 'without ATM'),
(213, 'SATIADA', 'MEDEN JOY', 'REODIQUE', 'BS in Information System', '2nd', 'without ATM'),
(214, 'SATUITO', 'BERNADETTE', 'RIOFRIO', 'Bachelor os Secondary Education Major in English', '3rd', 'without ATM'),
(215, 'SECILLANO', 'JOMAR', 'REFEREZA', 'BS in Information Technology', '3rd', 'without ATM'),
(216, 'SERGIO', 'CARLO', 'PRIOLO', 'BS in Mechanical Technology ', '3rd', 'without ATM'),
(217, 'SOLA', 'JOHN JASCENT', 'PEDRAGOSA', 'BS in Automotive Technology', '2nd', 'without ATM'),
(218, 'SURBANO', 'JENNIFER', 'BRAZIL', 'Bachelor of Elementary Education ', '3rd', 'without ATM'),
(219, 'SURUIZ', 'PATRICIA MAE', 'BOY', 'Bachelor of Elementary Education ', '2nd', 'without ATM'),
(220, 'TALANGAN', 'DANIELA JANE', 'ECHIPARE', 'Bachelor of Secondary Education Major in English ', '2nd', 'without ATM'),
(221, 'TANAOTANAO', 'MARK JASTIN ', 'REORA', 'BS in Information Technology ', '2nd', 'without ATM'),
(222, 'TAPIAHAN', 'JUNREY', '', 'BS in Entrepreneurship', '2nd', 'without ATM'),
(223, 'TORRES', 'SHYNNA', 'SALVO', 'BS in Information System', '3rd', 'without ATM'),
(224, 'VILLAREAL', 'IVAN JODEL ', 'MAYOR', 'BS in Information Technology ', '3rd', 'without ATM'),
(227, 'ZARAGOZA', 'KENNETH', 'RABELAS', 'BS in Information Technology', '3rd', 'with ATM'),
(228, 'CALPE', 'jOHN CARLO', 'ABABA', 'BS in Electronics Technology', '3rd', 'with ATM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regist_db`
--
ALTER TABLE `regist_db`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regist_db`
--
ALTER TABLE `regist_db`
  MODIFY `reg_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
