-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 06 Αυγ 2012 στις 01:25:55
-- Έκδοση διακομιστή: 5.5.25a
-- Έκδοση PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `helpdesk`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category` varchar(100) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `categories`
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
-- Δομή πίνακα για τον πίνακα `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `outlet_code` varchar(15) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `tmhma_monada` varchar(50) DEFAULT NULL,
  `klinikh` varchar(50) DEFAULT NULL,
  `orofos` varchar(10) DEFAULT NULL,
  `kwdikos_tomea` varchar(5) DEFAULT NULL,
  `eswterikos_xwros` varchar(10) DEFAULT NULL,
  `computer_name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Άδειασμα δεδομένων του πίνακα `data`
--

INSERT INTO `data` (`id`, `outlet_code`, `ip_address`, `tmhma_monada`, `klinikh`, `orofos`, `kwdikos_tomea`, `eswterikos_xwros`, `computer_name`) VALUES
(1, 'TC1.2S.1.70', '10.1.12.70', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Διαχείριση Πάγιου εξοπλισμού', 'Β'' ΥΠΟΓ.', 'S15', '27-S610', 'TC1-2S-1-70'),
(2, 'TC1.2S.1.71', '10.1.12.71', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Διαχείριση Πάγιου εξοπλισμού', 'Β'' ΥΠΟΓ.', 'S15', '27-S610', 'TC1-2S-1-71'),
(3, 'TC1.2S.1.72', '10.1.12.72', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Προϊστάμενος Τμημ. Οικονομ.', 'Β'' ΥΠΟΓ.', 'S15', '27-S603', 'TC1-2S-1-72'),
(4, 'TC1.2S.1.73', '10.1.12.73', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Aρχείο Γραφείου Προμηθειών', 'Β'' ΥΠΟΓ.', 'S15', '27-S604', 'TC1-2S-1-73'),
(5, 'TC1.2S.1.74', '10.1.12.74', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β'' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-74'),
(6, 'TC1.2S.1.75', '10.1.12.75', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β'' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-75'),
(7, 'TC1.2S.1.76', '10.1.12.76', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β'' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-76'),
(8, 'TC1.2S.1.77', '10.1.12.77', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β'' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-77'),
(9, 'TC1.2S.1.78', '10.1.12.78', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β'' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-78'),
(10, 'TC1.2S.1.79', '10.1.12.79', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β'' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-79'),
(11, 'TC1.2S.1.80', '10.1.12.80', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β'' ΥΠΟΓ.', 'S13', '27-5909', 'TC1-2S-1-80'),
(12, 'TC1.2S.1.81', '10.1.12.81', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β'' ΥΠΟΓ.', 'S13', '27-S905', ''),
(13, 'TC1.2S.1.82', '10.1.12.82', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β'' ΥΠΟΓ.', 'S13', '27-S905', ''),
(14, 'TC1.2S.1.83', '10.1.12.83', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β'' ΥΠΟΓ.', 'S13', '27-S905', ''),
(15, 'TC1.2S.1.84', '10.1.12.84', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Αρχιτεκτόνων-Μηχανικ.', 'Β'' ΥΠΟΓ.', 'S13', '27-S905', ''),
(16, 'TC1.2S.1.85', '10.1.12.85', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β'' ΥΠΟΓ.', 'S13', '27-S611', ''),
(17, 'TC1.2S.1.86', '10.1.12.86', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β'' ΥΠΟΓ.', 'S13', '27-S611', ''),
(18, 'TC1.2S.1.87', '10.1.12.87', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β'' ΥΠΟΓ.', 'S13', '27-S611', ''),
(19, 'TC1.2S.1.88', '10.1.12.88', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Βιοϊατρικής Τεχνολογίας', 'Β'' ΥΠΟΓ.', 'S13', '27-S611', ''),
(20, 'TC1.2S.1.89', '10.1.12.89', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Τεχνολ. Μηχανικών', 'Β'' ΥΠΟΓ.', 'S13', '27-S612', ''),
(21, 'TC1.2S.1.90', '10.1.12.90', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Τεχνολ. Μηχανικών', 'Β'' ΥΠΟΓ.', 'S13', '27-S612', ''),
(22, 'TC1.2S.1.91', '10.1.12.91', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Τεχνολ. Μηχανικών', 'Β'' ΥΠΟΓ.', 'S13', '27-S612', ''),
(23, 'TC1.2S.1.92', '10.1.12.92', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Συλλόγου Εργαζομένων', 'Β'' ΥΠΟΓ.', 'S13', '27-S711', ''),
(24, 'TC1.2S.1.93', '10.1.12.93', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Διευθυντής Τεχνικής Υπηρεσίας', 'Β'' ΥΠΟΓ.', 'S13', '27-S907', ''),
(25, 'TC1.2S.1.94', '10.1.12.94', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β'' ΥΠΟΓ.', 'S13', '27-S906', ''),
(26, 'TC1.2S.1.95', '10.1.12.95', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β'' ΥΠΟΓ.', 'S13', '27-S906', ''),
(27, 'TC1.2S.1.96', '10.1.12.96', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β'' ΥΠΟΓ.', 'S13', '27-S906', ''),
(28, 'TC1.2S.1.97', '10.1.12.97', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β'' ΥΠΟΓ.', 'S13', '27-S906', ''),
(29, 'TC1.2S.1.98', '10.1.12.98', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β'' ΥΠΟΓ.', 'S13', '27-S906', ''),
(30, 'TC1.2S.1.99', '10.1.12.99', 'ΤΕΧΝΙΚΗ ΥΠΗΡΕΣΙΑ', 'Τμήμα Τεχνικού', 'Β'' ΥΠΟΓ.', 'S13', '27-S906', ''),
(31, 'TC1.2S.1.100', '10.1.12.100', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραμματεία-Πρωτόκολλο', 'Β'' ΥΠΟΓ.', 'S13', '27-S708', ''),
(32, 'TC1.2S.1.100', '10.1.12.101', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραμματεία-Πρωτόκολλο', 'Β'' ΥΠΟΓ.', 'S14', '27-S7098', ''),
(33, 'TC1.2S.1.101', '10.1.12.101', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραμματεία-Πρωτόκολλο', 'Β'' ΥΠΟΓ.', 'S13', '27-S708', ''),
(34, 'TC1.2S.1.102', '10.1.12.102', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Δακτυλογράφοι', 'Β'' ΥΠΟΓ.', 'S13', '27-S707', ''),
(35, 'TC1.2S.1.103', '10.1.12.103', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Συλλόγου Εργαζομένων', 'Β'' ΥΠΟΓ.', 'S12', '27-S338', ''),
(36, 'TC1.2S.1.104', '10.1.12.104', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο αναπαραγωγής εγγράφων', 'Β'' ΥΠΟΓ.', 'S12', '27-S339', ''),
(37, 'TC1.2S.1.105', '10.1.12.105', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Iατρικό Αρχείο', 'Β'' ΥΠΟΓ.', 'S12', '27-S706', ''),
(38, 'TC1.2S.1.106', '10.1.12.106', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Iατρικό Αρχείο', 'Β'' ΥΠΟΓ.', 'S12', '27-S706', ''),
(39, 'TC1.2S.1.c6.1', '10.1.1.221', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Πληροφορικης', 'Β'' ΥΠΟΓ.', 'S15', '27-S104', ''),
(40, 'TC1.2S.1.c6.2', '10.1.1.222', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Πληροφορικης', 'Β'' ΥΠΟΓ.', 'S15', '27-S104', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `failures`
--

CREATE TABLE IF NOT EXISTS `failures` (
  `status` int(1) NOT NULL DEFAULT '0',
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `solution` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Πίνακας βλαβών' AUTO_INCREMENT=2 ;

--
-- Άδειασμα δεδομένων του πίνακα `failures`
--

INSERT INTO `failures` (`status`, `id`, `outlet_code`, `ip_address`, `computer_name`, `tmhma_monada`, `klinikh`, `orofos`, `kwdikos_tomea`, `eswterikos_xwros`, `start_date`, `end_date`, `final_date`, `category`, `ypeuthynos`, `ypeuthynos2`, `user_name`, `user_phone`, `notes`, `solution`) VALUES
(1, 1, 'TC1.2S.1.75', '10.1.12.75', 'TC1-2S-1-75', 'ΔΙΟΙΚΗΤΙΚΗ ΥΠΗΡΕΣΙΑ', 'Γραφείο Προμηθειών', 'Β  ΥΠΟΓ.', 'S13', '27-5909', '0000-00-00', '0000-00-00', '2012-08-15', '', 'S13', 'Ελόνα Μπουζούκη', 'Σωκράτης Μπαλτζής', 2012, ' S13 ', 'Τεχνική αναφορά');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(32) NOT NULL,
  `password` varchar(34) NOT NULL,
  `real_name` varchar(64) CHARACTER SET greek NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`username`, `password`, `real_name`) VALUES
('vasilis', '827ccb0eea8a706c4c34a16891f84e7b', 'Τζιβάρας Βασίλης'),
('thanos', 'e10adc3949ba59abbe56e057f20f883e', 'Θάνος Στράτης'),
('lona', 'a8698009bce6d1b8c2128eddefc25aad', 'Ελόνα Μπουζούκη'),
('kostas', '01cfcd4f6b8770febfb40cb906715822', 'Κώστας Αναστασίου');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
