-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Mrz 2018 um 15:33
-- Server-Version: 10.1.22-MariaDB
-- PHP-Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bilderdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL,
  `Passwort` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL,
  `Nickname` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer_galerie`
--

CREATE TABLE `benutzer_galerie` (
  `BenutzerID` int(11) NOT NULL,
  `GalerieID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bilder`
--

CREATE TABLE `bilder` (
  `ID` int(11) NOT NULL,
  `Pfad` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bilder_tag`
--

CREATE TABLE `bilder_tag` (
  `BilderID` int(11) NOT NULL,
  `TagID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `galerie`
--

CREATE TABLE `galerie` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL,
  `Beschreibung` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `galerie_bilder`
--

CREATE TABLE `galerie_bilder` (
  `GalerieID` int(11) NOT NULL,
  `BilderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tag`
--

CREATE TABLE `tag` (
  `ID` int(11) NOT NULL,
  `Tag` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `benutzer_galerie`
--
ALTER TABLE `benutzer_galerie`
  ADD KEY `GalerieID` (`GalerieID`),
  ADD KEY `BenutzerID` (`BenutzerID`);

--
-- Indizes für die Tabelle `bilder`
--
ALTER TABLE `bilder`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `bilder_tag`
--
ALTER TABLE `bilder_tag`
  ADD KEY `BilderID` (`BilderID`),
  ADD KEY `TagID` (`TagID`);

--
-- Indizes für die Tabelle `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `galerie_bilder`
--
ALTER TABLE `galerie_bilder`
  ADD KEY `GalerieID` (`GalerieID`),
  ADD KEY `BilderID` (`BilderID`);

--
-- Indizes für die Tabelle `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `bilder`
--
ALTER TABLE `bilder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `galerie`
--
ALTER TABLE `galerie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tag`
--
ALTER TABLE `tag`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `benutzer_galerie`
--
ALTER TABLE `benutzer_galerie`
  ADD CONSTRAINT `benutzer_galerie_ibfk_1` FOREIGN KEY (`GalerieID`) REFERENCES `galerie` (`ID`),
  ADD CONSTRAINT `benutzer_galerie_ibfk_2` FOREIGN KEY (`BenutzerID`) REFERENCES `benutzer` (`ID`);

--
-- Constraints der Tabelle `bilder_tag`
--
ALTER TABLE `bilder_tag`
  ADD CONSTRAINT `bilder_tag_ibfk_1` FOREIGN KEY (`BilderID`) REFERENCES `bilder` (`ID`),
  ADD CONSTRAINT `bilder_tag_ibfk_2` FOREIGN KEY (`TagID`) REFERENCES `tag` (`ID`);

--
-- Constraints der Tabelle `galerie_bilder`
--
ALTER TABLE `galerie_bilder`
  ADD CONSTRAINT `galerie_bilder_ibfk_1` FOREIGN KEY (`GalerieID`) REFERENCES `galerie` (`ID`),
  ADD CONSTRAINT `galerie_bilder_ibfk_2` FOREIGN KEY (`BilderID`) REFERENCES `bilder` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
