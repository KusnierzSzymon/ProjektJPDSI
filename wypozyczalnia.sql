-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Cze 2022, 23:05
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `Id_rola` int(11) NOT NULL,
  `Nazwa_rola` varchar(45) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rola`
--

INSERT INTO `rola` (`Id_rola`, `Nazwa_rola`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'user'),
(4, 'zbanowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzet`
--

CREATE TABLE `sprzet` (
  `Id_sprzet` int(11) NOT NULL,
  `Producent` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Model` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Cena_dzien` int(11) NOT NULL,
  `Rozmiar` int(11) NOT NULL,
  `Id_typsprzetu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `sprzet`
--

INSERT INTO `sprzet` (`Id_sprzet`, `Producent`, `Model`, `Cena_dzien`, `Rozmiar`, `Id_typsprzetu`) VALUES
(2, 'Producent', 'Modelowy', 400, 42, 1),
(3, 'Atomic', 'Carver', 50, 40, 2),
(4, 'Atomic', 'Race', 45, 30, 3),
(5, 'Nitro', 'Head', 20, 43, 4),
(6, 'Mountains', 'Pro', 100, 45, 5),
(7, 'Fisher', 'Mid', 35, 44, 6),
(8, 'Atomic', 'Head', 30, 41, 7),
(9, 'Mountains', 'Head', 33, 43, 8),
(10, 'Head', 'Shot', 34, 48, 9),
(11, 'Producentowe', 'Modelowe', 33, 21, 10),
(12, 'Pelnanazwa', 'modelsprzet', 345, 42, 11);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typsprzetu`
--

CREATE TABLE `typsprzetu` (
  `Id_typsprzetu` int(11) NOT NULL,
  `Nazwa_typ` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Dla_dzieci` tinyint(1) NOT NULL,
  `Liczba_dostepnych` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `typsprzetu`
--

INSERT INTO `typsprzetu` (`Id_typsprzetu`, `Nazwa_typ`, `Dla_dzieci`, `Liczba_dostepnych`) VALUES
(1, 'Typowy', 0, 34),
(2, 'Narty', 0, 5),
(3, 'Narty', 1, 2),
(4, 'Kask', 0, 5),
(5, 'Snowboard', 0, 2),
(6, 'Narty', 0, 10),
(7, 'Kask', 0, 5),
(8, 'Kask', 0, 3),
(9, 'Narty', 0, 2),
(10, 'Narty', 0, 12),
(11, 'Kask', 0, 11);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `Login` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Id_rola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`Id_user`, `Login`, `Haslo`, `Email`, `Id_rola`) VALUES
(2, 'Admin', '2e33a9b0b06aa0a01ede70995674ee23', 'szymon200022@o2.pl', 1),
(3, 'Admin1', '2e33a9b0b06aa0a01ede70995674ee23', 'szymon2000@onet.pl', 2),
(4, 'Admin2', '02c9eee7a78b100c838a4a977d400533', 'szymon20002@onet.pl', 1),
(5, 'User1', '35b57c281a2d0d71e6b8a6b3c321b1c1', 'szymon135@email.com', 3),
(6, 'User2', '02c9eee7a78b100c838a4a977d400533', 'user2@o2.pl', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozsprzet`
--

CREATE TABLE `wypozsprzet` (
  `Id_sprzet` int(11) NOT NULL,
  `Id_wypozyczenia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wypozsprzet`
--

INSERT INTO `wypozsprzet` (`Id_sprzet`, `Id_wypozyczenia`) VALUES
(3, 23),
(11, 23),
(4, 30),
(7, 30);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczalnia`
--

CREATE TABLE `wypozyczalnia` (
  `Id_wypozyczalnia` int(11) NOT NULL,
  `Ulica` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Miasto` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Kod_pocztowy` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wypozyczalnia`
--

INSERT INTO `wypozyczalnia` (`Id_wypozyczalnia`, `Ulica`, `Miasto`, `Kod_pocztowy`) VALUES
(1, 'Zamkowa', 'Zawiercie', 34532),
(3, 'Długa', 'Zakopane', 35400),
(4, 'Millenium', 'Zator', 23456);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenie`
--

CREATE TABLE `wypozyczenie` (
  `Id_wypozyczenia` int(11) NOT NULL,
  `Data_wypozyczenia` date DEFAULT NULL,
  `Liczba_dni` int(11) DEFAULT NULL,
  `Id_user` int(11) NOT NULL,
  `Id_wypozyczalnia` int(11) NOT NULL DEFAULT 1,
  `zakonczone` bit(1) NOT NULL DEFAULT b'0',
  `akceptacja` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wypozyczenie`
--

INSERT INTO `wypozyczenie` (`Id_wypozyczenia`, `Data_wypozyczenia`, `Liczba_dni`, `Id_user`, `Id_wypozyczalnia`, `zakonczone`, `akceptacja`) VALUES
(9, NULL, NULL, 6, 1, b'0', b'0'),
(10, NULL, NULL, 6, 1, b'0', b'0'),
(11, NULL, NULL, 6, 1, b'1', b'0'),
(12, NULL, NULL, 6, 1, b'1', b'0'),
(13, NULL, NULL, 6, 1, b'1', b'0'),
(14, NULL, NULL, 6, 1, b'0', b'0'),
(15, NULL, NULL, 6, 1, b'1', b'0'),
(16, NULL, NULL, 6, 1, b'1', b'0'),
(17, NULL, NULL, 6, 1, b'0', b'0'),
(18, NULL, NULL, 6, 1, b'0', b'0'),
(19, NULL, NULL, 6, 1, b'1', b'0'),
(20, NULL, NULL, 6, 1, b'0', b'0'),
(21, NULL, NULL, 6, 1, b'1', b'1'),
(22, NULL, NULL, 6, 1, b'0', b'0'),
(23, NULL, NULL, 6, 1, b'0', b'0'),
(24, NULL, NULL, 6, 1, b'1', b'1'),
(25, NULL, NULL, 6, 1, b'0', b'0'),
(26, NULL, NULL, 6, 1, b'1', b'1'),
(27, NULL, NULL, 6, 1, b'0', b'0'),
(28, NULL, NULL, 6, 1, b'0', b'0'),
(29, NULL, NULL, 6, 1, b'0', b'0'),
(30, NULL, NULL, 6, 1, b'1', b'0'),
(31, NULL, NULL, 6, 1, b'0', b'0');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`Id_rola`);

--
-- Indeksy dla tabeli `sprzet`
--
ALTER TABLE `sprzet`
  ADD PRIMARY KEY (`Id_sprzet`),
  ADD KEY `Sprzet_Typsprzetu` (`Id_typsprzetu`);

--
-- Indeksy dla tabeli `typsprzetu`
--
ALTER TABLE `typsprzetu`
  ADD PRIMARY KEY (`Id_typsprzetu`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`),
  ADD KEY `User_Rola` (`Id_rola`);

--
-- Indeksy dla tabeli `wypozsprzet`
--
ALTER TABLE `wypozsprzet`
  ADD KEY `1` (`Id_sprzet`),
  ADD KEY `2` (`Id_wypozyczenia`);

--
-- Indeksy dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  ADD PRIMARY KEY (`Id_wypozyczalnia`);

--
-- Indeksy dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD PRIMARY KEY (`Id_wypozyczenia`),
  ADD KEY `Wypozyczenie_User` (`Id_user`),
  ADD KEY `Wypozyczenie_Wypozyczalnia` (`Id_wypozyczalnia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `rola`
--
ALTER TABLE `rola`
  MODIFY `Id_rola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `sprzet`
--
ALTER TABLE `sprzet`
  MODIFY `Id_sprzet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `typsprzetu`
--
ALTER TABLE `typsprzetu`
  MODIFY `Id_typsprzetu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  MODIFY `Id_wypozyczalnia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  MODIFY `Id_wypozyczenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `sprzet`
--
ALTER TABLE `sprzet`
  ADD CONSTRAINT `Sprzet_Typsprzetu` FOREIGN KEY (`Id_typsprzetu`) REFERENCES `typsprzetu` (`Id_typsprzetu`);

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_Rola` FOREIGN KEY (`Id_rola`) REFERENCES `rola` (`Id_rola`);

--
-- Ograniczenia dla tabeli `wypozsprzet`
--
ALTER TABLE `wypozsprzet`
  ADD CONSTRAINT `1` FOREIGN KEY (`Id_sprzet`) REFERENCES `sprzet` (`Id_sprzet`),
  ADD CONSTRAINT `2` FOREIGN KEY (`Id_wypozyczenia`) REFERENCES `wypozyczenie` (`Id_wypozyczenia`);

--
-- Ograniczenia dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD CONSTRAINT `Wypozyczenie_User` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id_user`),
  ADD CONSTRAINT `Wypozyczenie_Wypozyczalnia` FOREIGN KEY (`Id_wypozyczalnia`) REFERENCES `wypozyczalnia` (`Id_wypozyczalnia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
