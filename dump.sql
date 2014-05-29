-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 22 Kwi 2014, 19:56
-- Wersja serwera: 5.5.21-log
-- Wersja PHP: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `quickcli_rach`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `jed_miary` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Zrzut danych tabeli `items`
--

INSERT INTO `items` (`id`, `user_id`, `cena`, `nazwa`, `opis`, `jed_miary`) VALUES
(3, 0, 22, 'test', '2', '2'),
(12, 28, 44, '44', '44', '44'),
(13, 8, 44, 'lampa ', 'super lampa', 'sztuka'),
(14, 8, 77, 'test', 'tst', 'zcxz'),
(15, 9, 44, 'testowa', 'moja lampa', 'asd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `items_rachuneks`
--

CREATE TABLE IF NOT EXISTS `items_rachuneks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rachunek_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontrachents`
--

CREATE TABLE IF NOT EXISTS `kontrachents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` int(10) NOT NULL,
  `ulica` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numer_domu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `miasto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kod_pocztowy` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nazwa_firmy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_datas`
--

CREATE TABLE IF NOT EXISTS `personal_datas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `regon` int(9) NOT NULL,
  `tel1` int(15) NOT NULL,
  `tel2` int(15) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_budynku` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kod_pocztowy` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nazwa_firmy` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo_firmy` blob NOT NULL,
  `kraj` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `typ_firmy` enum('Indywidualna działalność gospodarcza','Spółka cywilna','Spółka jawna','Spółka komandytowa','Spółka komandytowo – akcyjna','Spółka partnerska','Spółka akcyjna','Spółka z ograniczoną odpowiedzialnością') COLLATE utf8_unicode_ci NOT NULL,
  `nazwa_banku` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numer_konta` bigint(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `personal_datas`
--

INSERT INTO `personal_datas` (`id`, `imie`, `nazwisko`, `nip`, `regon`, `tel1`, `tel2`, `city`, `street`, `no_budynku`, `kod_pocztowy`, `nazwa_firmy`, `logo_firmy`, `kraj`, `typ_firmy`, `nazwa_banku`, `numer_konta`) VALUES
(1, 'pies', 'test', '33', 33, 33, 33, 'test', 'test', '44', 'df', 'test', '', 'test', '', 'test', 34534534);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rachuneks`
--

CREATE TABLE IF NOT EXISTS `rachuneks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_wystawienia` datetime NOT NULL,
  `kwota_total` int(11) NOT NULL,
  `status` enum('zaplacona','niezaplacona') COLLATE utf8_unicode_ci NOT NULL,
  `numer` text COLLATE utf8_unicode_ci NOT NULL,
  `data_sprzedazy` datetime NOT NULL,
  `kwota_zaplacona` float NOT NULL,
  `uwagi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `typ` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kontrachents_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `rachuneks`
--

INSERT INTO `rachuneks` (`id`, `data_wystawienia`, `kwota_total`, `status`, `numer`, `data_sprzedazy`, `kwota_zaplacona`, `uwagi`, `user_id`, `typ`) VALUES
(1, '2014-04-12 20:46:00', 543, '', '34534', '2014-04-12 20:46:00', 33, '4535', 9, '3534'),
(2, '2014-04-12 20:48:00', 23, '', '234', '2014-04-12 20:48:00', 234, '234', 8, '234'),
(3, '2014-04-12 20:50:00', 5646, '', '444', '2014-04-12 20:50:00', 444, '44', 9, '444');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `personal_data_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`personal_data_id`),
  KEY `personal_data_id` (`personal_data_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`, `personal_data_id`) VALUES
(8, '', 'admin@admin.pl', '4c53f9ffff06ba971488638f9beff4ba01032ad1', 1, 1),
(9, '', 't@t.pl', '68dc252aebc907d71981fcb1b33829dc7a6c2103', 0, 1),
(10, '', 'asdas@asd.pl', '815b61000e81868fb02604b5ca40cee04a2e4eb2', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
