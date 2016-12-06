-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2016, 08:35
-- Wersja serwera: 5.6.24
-- Wersja PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `imiona_gdow`
--
CREATE DATABASE IF NOT EXISTS `imiona_gdow` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `imiona_gdow`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `imiona`
--

DROP TABLE IF EXISTS `imiona`;
CREATE TABLE IF NOT EXISTS `imiona` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(500) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `imiona`
--

INSERT INTO `imiona` (`id`, `imie`, `opis`) VALUES
(1, 'Adam', 'Pochodzenie: hebrajskie\r\nZnaczenie: dwa możliwe znaczenia od adom czyli czerwony, od koloru gliny, której ulepiony był Adam lub od adamah czyli ziemia rolnik, Adam oznaczałoby wtedy rolnika człowieka, który z ziemi powstał i do ziemi powróci\r\nImieniny: 6 kwietnia, 24 grudnia'),
(2, 'Aneta', 'Pochodzenie: francuskie\r\nZnaczenie: wdzięk\r\nImieniny: 16 kwietnia, 17 lipca'),
(3, 'Czesław', 'Pochodzenie: słowiańskie\r\nZnaczenie: ten, który szanuje sławę\r\nImieniny: 12 stycznia, 20 kwietnia, 20 lipca, 2 września'),
(4, 'Franciszek', 'Pochodzenie: grecko - łacińskie\r\nZnaczenie: należący do plemienia Franków\r\nImieniny: 29 stycznia, 17 lutego, 9 marca, 2 kwietnia, 11 maja, 4 czerwca, 14 lipca, 21 sierpnia, 17 września, 4 października, 10 października, 24 listopada, 3 grudnia, 22 grudnia'),
(5, 'Katarzyna', 'Pochodzenie: greckie\r\nZnaczenie: dziewicza, bez skazy\r\nImieniny: 13 lutego, 9 marca, 22 marca, 1 kwietnia, 30 kwietnia, 25 października, 25 listopada, 30 grudnia');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `imiona`
--
ALTER TABLE `imiona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `imiona`
--
ALTER TABLE `imiona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
