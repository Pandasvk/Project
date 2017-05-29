-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 29.Máj 2017, 17:45
-- Verzia serveru: 10.1.16-MariaDB
-- Verzia PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `sportoviska`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `bar`
--

CREATE TABLE `bar` (
  `idBar` int(11) NOT NULL,
  `Nazov` varchar(30) NOT NULL,
  `Lokacia` int(11) NOT NULL,
  `Popis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `bar`
--

INSERT INTO `bar` (`idBar`, `Nazov`, `Lokacia`, `Popis`) VALUES
(2, 'Tenisak', 1, 'letime oblohou'),
(3, 'Pandabar', 2, 'popis 1OO bodov'),
(4, 'Swimbar', 5, 'Example'),
(5, 'Pibarpo', 6, 'Vzor'),
(6, 'Squishbar', 7, 'Konecna');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kalendar`
--

CREATE TABLE `kalendar` (
  `idKalendar` int(11) NOT NULL,
  `datums` date NOT NULL,
  `Sportoviska_idSportoviska` int(11) NOT NULL,
  `Pouzivatelia_idPouzivatelia` int(30) NOT NULL,
  `zaplatene` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `kalendar`
--

INSERT INTO `kalendar` (`idKalendar`, `datums`, `Sportoviska_idSportoviska`, `Pouzivatelia_idPouzivatelia`, `zaplatene`) VALUES
(2, '2017-05-20', 1, 1, 15),
(3, '2017-05-10', 1, 2, 15),
(4, '2017-05-16', 2, 3, 20),
(5, '2017-05-01', 5, 5, 25),
(6, '2017-05-12', 6, 4, 30),
(7, '2017-04-15', 2, 4, 15),
(8, '2017-05-18', 1, 1, 15);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pouzivatelia`
--

CREATE TABLE `pouzivatelia` (
  `idPouzivatelia` int(11) NOT NULL,
  `meno` varchar(45) NOT NULL,
  `priezvisko` varchar(45) NOT NULL,
  `firma` varchar(45) DEFAULT NULL,
  `adresa` varchar(45) NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `pouzivatelia`
--

INSERT INTO `pouzivatelia` (`idPouzivatelia`, `meno`, `priezvisko`, `firma`, `adresa`, `telefon`) VALUES
(1, 'denis', 'furik', 'furik s.r.o', 'domnastracejnohe', 234523456),
(2, 'Miro', 'Fuzik', 'Rotos', 'dlabacke', 549871),
(3, 'Patrik', 'Kral', 'kingofpop', 'piestanska 55', 655498),
(4, 'martin ', 'novotny', NULL, 'Mrkva 45', 12345698),
(5, 'Andrea ', 'Masova', NULL, 'dlha 789', 789256541);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pozicane`
--

CREATE TABLE `pozicane` (
  `idPozicane` int(11) NOT NULL,
  `Pouzivatelia_idPouzivatelia` int(11) NOT NULL,
  `Nazov` varchar(40) NOT NULL,
  `zaplatene` int(11) NOT NULL,
  `kspozic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `pozicane`
--

INSERT INTO `pozicane` (`idPozicane`, `Pouzivatelia_idPouzivatelia`, `Nazov`, `zaplatene`, `kspozic`) VALUES
(1, 1, 'Doskaaaaaa', 10, 1),
(2, 1, 'raketa', 10, 2),
(3, 2, 'lopta', 20, 4),
(4, 5, 'Hokejka', 50, 10),
(5, 4, 'raketa', 30, 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sportoviskas`
--

CREATE TABLE `sportoviskas` (
  `idSportoviska` int(11) NOT NULL,
  `nazov` varchar(45) NOT NULL,
  `Popis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `sportoviskas`
--

INSERT INTO `sportoviskas` (`idSportoviska`, `nazov`, `Popis`) VALUES
(1, 'Tenisovy kurt', 'HEJ'),
(2, 'Plavecky bazen', '50m dlzka 5 m hlbka'),
(5, 'Futbal', 'Ihrisko 100x50 m Stredne brány'),
(6, 'Pingpong', '2 stoly '),
(7, 'Squash', '2 Squash haly');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`idBar`);

--
-- Indexy pre tabuľku `kalendar`
--
ALTER TABLE `kalendar`
  ADD PRIMARY KEY (`idKalendar`),
  ADD KEY `fk_Kalendar_Sportoviska_idx` (`Sportoviska_idSportoviska`),
  ADD KEY `fk_Kalendar_Pouzivatelia1_idx` (`Pouzivatelia_idPouzivatelia`);

--
-- Indexy pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  ADD PRIMARY KEY (`idPouzivatelia`);

--
-- Indexy pre tabuľku `pozicane`
--
ALTER TABLE `pozicane`
  ADD PRIMARY KEY (`idPozicane`),
  ADD KEY `fk_Pouzivatelia_has_Pozicovna_Pouzivatelia1_idx` (`Pouzivatelia_idPouzivatelia`);

--
-- Indexy pre tabuľku `sportoviskas`
--
ALTER TABLE `sportoviskas`
  ADD PRIMARY KEY (`idSportoviska`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `bar`
--
ALTER TABLE `bar`
  MODIFY `idBar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pre tabuľku `kalendar`
--
ALTER TABLE `kalendar`
  MODIFY `idKalendar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  MODIFY `idPouzivatelia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pre tabuľku `pozicane`
--
ALTER TABLE `pozicane`
  MODIFY `idPozicane` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `sportoviskas`
--
ALTER TABLE `sportoviskas`
  MODIFY `idSportoviska` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
