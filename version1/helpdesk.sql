-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2017 at 09:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category` varchar(100) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category`) VALUES
('H/Y Hardware'),
('LAN'),
('Internet και Email'),
('ΑΣΚΛΗΠΙΟΣ Software'),
('LIS Software'),
('RIS-PACS Software'),
('Office-Windows'),
('Δημιουργία Report'),
('Στατιστικά'),
('Domain-Users'),
('Ιατρική Φωτογραφία');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(5) NOT NULL,
  `outlet_code` varchar(15) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `tmhma_monada` varchar(50) DEFAULT NULL,
  `klinikh` varchar(50) DEFAULT NULL,
  `orofos` varchar(10) DEFAULT NULL,
  `kwdikos_tomea` varchar(5) DEFAULT NULL,
  `eswterikos_xwros` varchar(10) DEFAULT NULL,
  `computer_name` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `outlet_code`, `ip_address`, `tmhma_monada`, `klinikh`, `orofos`, `kwdikos_tomea`, `eswterikos_xwros`, `computer_name`) VALUES
(1, 'TC1.2S.1.70', '10.1.12.70', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Διαχείριση Πάγιου εξοπλισμού', 'Β\' ΥΠΟΓ.', 'S15', '27-S610', 'TC1-2S-1-70'),
(2, 'TC1.2S.1.71', '10.1.12.71', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Διαχείριση Πάγιου εξοπλισμού', 'Β\' ΥΠΟΓ.', 'S15', '27-S610', 'TC1-2S-1-71'),
(3, 'TC1.2S.1.72', '10.1.12.72', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Προϊστάμενος Τμημ. Οικονομ.', 'Β\' ΥΠΟΓ.', 'S15', '27-S603', 'TC1-2S-1-72'),
(4, 'TC1.2S.1.73', '10.1.12.73', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Aρχείο Γραφείου Προμηθειών', 'Β\' ΥΠΟΓ.', 'S15', '27-S604', 'TC1-2S-1-73'),
(5, 'TC1.2S.1.74', '10.1.12.74', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β\' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-74'),
(6, 'TC1.2S.1.75', '10.1.12.75', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β\' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-75'),
(7, 'TC1.2S.1.76', '10.1.12.76', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β\' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-76'),
(8, 'TC1.2S.1.77', '10.1.12.77', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β\' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-77'),
(9, 'TC1.2S.1.78', '10.1.12.78', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β\' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-78'),
(10, 'TC1.2S.1.79', '10.1.12.79', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β\' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-79'),
(11, 'TC1.2S.1.80', '10.1.12.80', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β\' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-80'),
(12, 'TC1.2S.1.81', '10.1.12.81', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β\' ΥΠΟΓ.', 'S13', '27-S905', ''),
(13, 'TC1.2S.1.82', '10.1.12.82', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β\' ΥΠΟΓ.', 'S13', '27-S905', ''),
(14, 'TC1.2S.1.83', '10.1.12.83', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β\' ΥΠΟΓ.', 'S13', '27-S905', ''),
(15, 'TC1.2S.1.84', '10.1.12.84', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β\' ΥΠΟΓ.', 'S13', '27-S905', ''),
(16, 'TC1.2S.1.85', '10.1.12.85', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β\' ΥΠΟΓ.', 'S13', '27-S611', ''),
(17, 'TC1.2S.1.86', '10.1.12.86', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β\' ΥΠΟΓ.', 'S13', '27-S611', ''),
(18, 'TC1.2S.1.87', '10.1.12.87', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β\' ΥΠΟΓ.', 'S13', '27-S611', ''),
(19, 'TC1.2S.1.88', '10.1.12.88', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β\' ΥΠΟΓ.', 'S13', '27-S611', ''),
(20, 'TC1.2S.1.89', '10.1.12.89', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Τεχνολ. Μηχανικών', 'Β\' ΥΠΟΓ.', 'S13', '27-S612', ''),
(21, 'TC1.2S.1.90', '10.1.12.90', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Τεχνολ. Μηχανικών', 'Β\' ΥΠΟΓ.', 'S13', '27-S612', ''),
(22, 'TC1.2S.1.91', '10.1.12.91', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Τεχνολ. Μηχανικών', 'Β\' ΥΠΟΓ.', 'S13', '27-S612', ''),
(23, 'TC1.2S.1.92', '10.1.12.92', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Συλλόγου Εργαζομένων', 'Β\' ΥΠΟΓ.', 'S13', '27-S711', ''),
(24, 'TC1.2S.1.93', '10.1.12.93', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Διευθυντής Τεχνικής Υπηρεσίας', 'Β\' ΥΠΟΓ.', 'S13', '27-S907', ''),
(25, 'TC1.2S.1.94', '10.1.12.94', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β\' ΥΠΟΓ.', 'S13', '27-S906', ''),
(26, 'TC1.2S.1.95', '10.1.12.95', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β\' ΥΠΟΓ.', 'S13', '27-S906', ''),
(27, 'TC1.2S.1.96', '10.1.12.96', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β\' ΥΠΟΓ.', 'S13', '27-S906', ''),
(28, 'TC1.2S.1.97', '10.1.12.97', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β\' ΥΠΟΓ.', 'S13', '27-S906', ''),
(29, 'TC1.2S.1.98', '10.1.12.98', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β\' ΥΠΟΓ.', 'S13', '27-S906', ''),
(30, 'TC1.2S.1.99', '10.1.12.99', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β\' ΥΠΟΓ.', 'S13', '27-S906', ''),
(31, 'TC1.2S.1.100', '10.1.12.100', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραμματεία-Πρωτόκολλο', 'Β\' ΥΠΟΓ.', 'S13', '27-S708', ''),
(32, 'TC1.2S.1.100', '10.1.12.101', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραμματεία-Πρωτόκολλο', 'Β\' ΥΠΟΓ.', 'S14', '27-S7098', ''),
(33, 'TC1.2S.1.101', '10.1.12.101', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραμματεία-Πρωτόκολλο', 'Β\' ΥΠΟΓ.', 'S13', '27-S708', ''),
(34, 'TC1.2S.1.102', '10.1.12.102', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Δακτυλογράφοι', 'Β\' ΥΠΟΓ.', 'S13', '27-S707', ''),
(35, 'TC1.2S.1.103', '10.1.12.103', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Συλλόγου Εργαζομένων', 'Β\' ΥΠΟΓ.', 'S12', '27-S338', ''),
(36, 'TC1.2S.1.104', '10.1.12.104', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο αναπαραγωγής εγγράφων', 'Β\' ΥΠΟΓ.', 'S12', '27-S339', ''),
(37, 'TC1.2S.1.105', '10.1.12.105', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Iατρικό Αρχείο', 'Β\' ΥΠΟΓ.', 'S12', '27-S706', ''),
(38, 'TC1.2S.1.106', '10.1.12.106', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Iατρικό Αρχείο', 'Β\' ΥΠΟΓ.', 'S12', '27-S706', ''),
(39, 'TC1.2S.1.c6.1', '10.1.1.221', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Πληροφορικης', 'Β\' ΥΠΟΓ.', 'S15', '27-S104', ''),
(40, 'TC1.2S.1.c6.2', '10.1.1.222', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Πληροφορικης', 'Β\' ΥΠΟΓ.', 'S15', '27-S104', '');

-- --------------------------------------------------------

--
-- Table structure for table `failures`
--

CREATE TABLE `failures` (
  `status` int(1) NOT NULL DEFAULT '0',
  `id` int(10) NOT NULL,
  `outlet_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `ip_address` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `computer_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `tmhma_monada` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `klinikh` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `orofos` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `kwdikos_tomea` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `eswterikos_xwros` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `final_date` date NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `ypeuthynos` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `ypeuthynos2` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `user_phone` int(16) NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `solution` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Πίνακας βλαβών';

--
-- Dumping data for table `failures`
--

INSERT INTO `failures` (`status`, `id`, `outlet_code`, `ip_address`, `computer_name`, `tmhma_monada`, `klinikh`, `orofos`, `kwdikos_tomea`, `eswterikos_xwros`, `start_date`, `end_date`, `final_date`, `category`, `ypeuthynos`, `ypeuthynos2`, `user_name`, `user_phone`, `notes`, `solution`) VALUES
(0, 11244, '       TC1.2S.1.711            ', '       10.1.12.11            ', 'TC1-2S-1-75', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β  ΥΠΟΓ.', 'S13', '27-5909', '2017-01-01', '0000-00-00', '2017-01-02', '', '      Giorgos Karagiannis      ', 'Ελόνα Μπουζούκη', '      Giannoulis Karagiorgos            ', 1133, 'Computer still freeze at startup.', 'Το τράβηξε με τα πόδια του και το έβγαλε.'),
(0, 11245, '       TC1.2S.1.76              ', '       10.7.48.52              ', 'Drakopotias', '34', 'Optiki', '3rd', '-12', '-proto tmima', '2017-01-04', '2017-12-03', '2017-01-06', '-entatiki', '       Vasilis Tzivaras   ', '-giorgios', '       kostas Drepas              ', 4452, '-', ''),
(0, 11246, '   TC1.2S.1.111      ', '   192.168.465      ', 'mhtsos', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'klinikh', '2os', '434-B', 'tomeas-A', '2017-01-07', '0000-00-00', '2017-01-08', 'Office-Windows', '   Vasilis Tzivaras   ', 'Τζιβάρας Βασίλης', '   mhtsos      ', 5455, 'all good here', 'All good'),
(0, 11247, '  TC1.3S.1.7f    ', '  40.1659.58    ', 'Thalis', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'klinikh', '2os', '434-B', 'tomeas-A', '2017-01-07', '2017-07-01', '2017-01-08', 'LAN', '  Vasilis Tzivaras  ', 'Ελόνα Μπουζούκη', '  Alexandros Karvounis    ', 6592, 'Xalase to mprizaki', 'All good'),
(0, 11248, '   TC1.2S.1.75      ', '   10.7.48.45      ', 'Michael', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'klinikh', '2nd', '434-B', 'tomeas-A', '2017-01-03', '1990-02-12', '2017-01-03', 'LAN', '   Tzivaras Panagiotis   ', 'Θάνος Στράτης', '   Tasoulios      ', 4581, 'New ethernet cable has been ordered.', 'All good'),
(0, 11249, '   TC1.2S.1.23      ', '   10.7.48.10      ', 'Dionyshs', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'klinikh', '2os', '434-B', 'tomeas-A', '2017-02-05', '1555-10-10', '2017-02-06', 'H/Y Hardware', '   Aglaia Papadopoulou   ', 'Ελόνα Μπουζούκη', '   Pralios Dimitris      ', 4545, 'New cable has been ordered.', 'All good'),
(0, 11250, '  TC1.2S.1.231    ', '  10.7.4.28    ', '', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'klinikh', '2os', '434-B', 'tomeas-A', '2017-02-06', '2018-05-25', '2017-02-06', 'Ιατρική Φωτογραφία', '  Aglaia Papadopoulou  ', 'Τζιβάρας Βασίλης', '  Kartios Pavlopoulos    ', 4562, '', 'All good'),
(0, 11251, ' TCP1.2S.54  ', ' 192.168.5.45  ', 'Asklipi', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'klinikh', '2os', '434-B', 'tomeas-A', '2017-02-08', '0000-00-00', '2017-02-09', 'Στατιστικά', ' Panagiotis Tzivaras ', 'Παναγιώτης Τζιβάρας', ' Nikolakis Athanasiou  ', 6598, 'Ο εκτυπωτης βούλωσε', 'All good'),
(0, 11252, '  TCP1.23.46    ', '  10.7.4.59    ', '', '', '', '', '', '', '2017-02-03', '0000-00-00', '2017-02-04', '', ' Miltos Athanasiadhs ', '', '  Dionysis Ashmidis    ', 5674, 'Damaged ethernet cable.', 'All good'),
(0, 11253, '   TCP2.2C.12      ', '   1.145.7.789      ', '', '', '', '', '', '', '2017-02-01', '0000-00-00', '2017-02-02', '', '   Panagiotis Tzivaras   ', '', '   Pavlos Kaponis      ', 8974, 'Replace the monitor', 'All good'),
(0, 11254, '    TCP196.24        ', '    1.124.5.4789        ', '', '', '', '', '', '', '2017-02-10', '2017-10-11', '2017-02-12', '', '    Vasilis Tzivaras    ', '', '    Tasos Apostolou        ', 6984, 'Hello this comment', 'All good'),
(0, 11255, '   ', '   ', '', '', '', '', '', '', '2017-02-25', '2017-02-03', '2017-02-02', '', '  ', '', '   Giorgos Anastasiou      ', 7659, 'This is a comment', 'All good'),
(0, 11256, '   ', '   ', '-', '-', '-', '-', '-', '-', '2017-02-02', '0000-00-00', '2017-02-02', '-', '  ', '-', '  Mhtsotakis    ', 6548, 'Ola kala os edw', ''),
(0, 11257, ' TCP2.2S.65  ', ' 10.7.5.56  ', '-', '-', '-', '-', '-', '-', '2017-02-02', '0000-00-00', '2017-03-04', '-', ' Aglaia Papadopoulou ', '-', ' Kostas Anagnostopoulos  ', 4581, '3rd time that he contacts in a week', ''),
(0, 11258, ' TCP1.23.22  ', ' 107.4.69  ', '-', '-', '-', '-', '-', '-', '2017-03-06', '0000-00-00', '2017-03-26', '-', ' Miltos Asimakopoulos ', '-', ' Miltos Miltiadhs  ', 4816, 'Need to replace the printer ink', ''),
(0, 11259, '      ', '      ', '-', '-', '-', '-', '-', '-', '2017-05-06', '0000-00-00', '2017-05-07', '-', '    ', '-', '         ', 0, 'Broken pipe in the bathroom', ''),
(0, 11260, ' TCP1.23.223  ', ' 10.5.5.5  ', '-', '-', '-', '-', '-', '-', '2017-06-06', '0000-00-00', '2017-06-28', '-', ' Mitsos Takis ', '-', ' Marios Papadatos  ', 4578, 'Error while printing ', ''),
(1, 11261, '   TCP1.22.31      ', '   10.7.2.54      ', '-', '-', '-', '-', '-', '-', '2017-07-06', '0000-00-00', '2017-07-21', '-', '   Aglaia Papadopoulou   ', '-', '   Kostas Kostopoulos      ', 4621, 'Printer problem', ''),
(1, 11262, ' TCP.12.12.32  ', ' 10.7.5.185  ', '-', '-', '-', '-', '-', '-', '2017-07-06', '0000-00-00', '2017-07-31', '-', ' Miltos Asimakopoulos ', '-', ' Toula Matoula  ', 4565, 'Network failure every two hours.', ''),
(0, 11263, 'TC1.2L.1.111', '10.8.4.95', '-', '-', '-', '-', '-', '-', '2017-07-06', '0000-00-00', '2017-09-15', '-', 'Aglaia Papadopoulou', '-', 'Marios Kotanidis', 7913, 'Broken ink cartridge', ''),
(0, 11264, ' TCP.12.12.125  ', ' 10.7.54.65  ', '-', '-', '-', '-', '-', '-', '2017-12-01', '0000-00-00', '2017-12-02', '-', ' Mitsos Takis ', '-', ' Alexis Alexopoulos  ', 4591, 'Destroyed ink in printer', ''),
(0, 11265, '   ', '   ', '-', '-', '-', '-', '-', '-', '2017-12-01', '0000-00-00', '2017-12-03', '-', ' Aglaia Papadopoulou ', '-', '   ', 0, '', ''),
(0, 11266, '   asdf      ', '   asfd      ', '-', '-', '-', '-', '-', '-', '2017-12-13', '0000-00-00', '2017-12-14', '-', '   Mitsos Takis   ', '-', '   sadf      ', 0, 'sdafasdfasdf', ''),
(0, 11267, '      ', '      ', '-', '-', '-', '-', '-', '-', '2017-12-13', '0000-00-00', '2017-12-14', '-', '    ', '-', '      ', 0, '', ''),
(0, 11268, '  Tcp12e4    ', '  107.3.2    ', '-', '-', '-', '-', '-', '-', '2017-12-13', '0000-00-00', '2017-12-14', '-', '  Aglaia Papadopoulou  ', '-', '  hssj    ', 995649, 'hshshshh', ''),
(0, 11269, ' jsgsksh  ', ' bsjsjj  ', '-', '-', '-', '-', '-', '-', '2017-12-21', '0000-00-00', '2017-12-22', '-', ' Miltos Asimakopoulos ', '-', ' Konstantina Gogouli  ', 54613, 'very good girl', ''),
(0, 11270, 'sasd', '1111', '-', '-', '-', '-', '-', '-', '2017-09-20', '0000-00-00', '2017-09-15', '-', 'Παναγιώτης Τζιβάρας', '-', 'sdf', 234, 'AFA', ''),
(0, 11271, '1111', '1111', '-', '-', '-', '-', '-', '-', '2017-09-20', '0000-00-00', '2017-09-22', '-', 'Τζιβάρας Βασίλης', '-', '123123', 0, '1231231231312312', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `password` varchar(34) NOT NULL,
  `real_name` varchar(64) CHARACTER SET greek NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `real_name`) VALUES
('vasilis', '827ccb0eea8a706c4c34a16891f84e7b', 'Τζιβάρας Βασίλης'),
('thanos', 'e10adc3949ba59abbe56e057f20f883e', 'Θάνος Στράτης'),
('lona', 'a8698009bce6d1b8c2128eddefc25aad', 'Ελόνα Μπουζούκη'),
('kostas', '01cfcd4f6b8770febfb40cb906715822', 'Κώστας Αναστασίου'),
('panos', '4e990a8bdb3df0ea69f88281845ea553', 'Παναγιώτης Τζιβάρας'),
('mhtsotakhs', '8399cdfd973680b547bf4357009daf76', 'Mitsos Takis'),
('apapadop', 'apapadop', 'Aglaia Papadopoulou'),
('masimak', 'e2dd7cde6f171cf735d018a3a1308f07', 'Miltos Asimakopoulos'),
('tester', 'f5d1278e8109edd94e1e4197e04873b9', 'Mr Tester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failures`
--
ALTER TABLE `failures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `failures`
--
ALTER TABLE `failures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11272;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
