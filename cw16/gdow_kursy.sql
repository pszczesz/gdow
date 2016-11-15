-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Lis 2016, 08:38
-- Wersja serwera: 5.6.24
-- Wersja PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `gdow_kursy`
--
CREATE DATABASE IF NOT EXISTS `gdow_kursy` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `gdow_kursy`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kursy`
--

DROP TABLE IF EXISTS `kursy`;
CREATE TABLE IF NOT EXISTS `kursy` (
  `kursid` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kursy`
--

INSERT INTO `kursy` (`kursid`, `nazwa`) VALUES
(1, 'Programowanie w PHP'),
(2, 'Programowanie zaawansowane w PHP'),
(3, 'Szydełkowanie'),
(4, 'Szydełkowanie zaawansowane');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczestnicy`
--

DROP TABLE IF EXISTS `uczestnicy`;
CREATE TABLE IF NOT EXISTS `uczestnicy` (
  `uczestnikid` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `kursid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uczestnicy`
--

INSERT INTO `uczestnicy` (`uczestnikid`, `imie`, `nazwisko`, `kursid`) VALUES
(1, 'Jan', 'nowak', 1),
(2, 'Adam', 'Motyka', 1),
(3, 'Marzena', 'Brzeska', 3),
(4, 'Antonina', 'Musiał', 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kursy`
--
ALTER TABLE `kursy`
  ADD PRIMARY KEY (`kursid`);

--
-- Indexes for table `uczestnicy`
--
ALTER TABLE `uczestnicy`
  ADD PRIMARY KEY (`uczestnikid`), ADD KEY `indeksik` (`kursid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kursy`
--
ALTER TABLE `kursy`
  MODIFY `kursid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `uczestnicy`
--
ALTER TABLE `uczestnicy`
  MODIFY `uczestnikid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
