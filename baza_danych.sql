-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 29 Kwi 2019, 18:10
-- Wersja serwera: 5.5.60-0+deb8u1
-- Wersja PHP: 5.6.38-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `firmy`
--

CREATE TABLE IF NOT EXISTS `firmy` (
`id` int(11) NOT NULL,
  `nazwa` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wlasciciel_imie` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wlasciciel_nazwisko` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `NIP` int(11) NOT NULL,
  `strona` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `logo_link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `firmy`
--

INSERT INTO `firmy` (`id`, `nazwa`, `wlasciciel_imie`, `wlasciciel_nazwisko`, `opis`, `NIP`, `strona`, `tel`, `logo_link`) VALUES
(1, 'Maksyma', '', 'Myrcha', 'Oferujemy szeroką gamę produktów z naszej branży. Zadzwoń i sprawdź.', 1234563218, 'http://www.ksiegarniamaksyma.pl/', '111-222-444', 'https://www.ksiegarniamaksyma.pl/uploads/5/9/1/0/59104537/3725464_orig.jpg'),
(2, 'Propcnet', 'Michał', 'Górnik', 'Oddaj swój komputer pod naszą opiekę.', 1234563218, 'http://propcnet.pl/', '222-555-666', 'http://propcnet.pl/wp-content/themes/Untitled_181105/images/7f82def28945392421738c9513a6c548_logo.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$2RfnZHSGn.6GZWvgRDqKG.GZgx8lgjtWxvGwOnaP5c4oP4fYMbCWW');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `firmy`
--
ALTER TABLE `firmy`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `firmy`
--
ALTER TABLE `firmy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
