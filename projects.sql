-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 mrt 2019 om 14:55
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halloffame`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `STUDENT` varchar(255) NOT NULL,
  `EDUCATION` varchar(255) NOT NULL,
  `STARTDATE` date NOT NULL,
  `ENDDATE` date NOT NULL,
  `STUDENTIMG` varchar(255) NOT NULL,
  `PROJECTIMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`ID`, `TITLE`, `DESCRIPTION`, `STUDENT`, `EDUCATION`, `STARTDATE`, `ENDDATE`, `STUDENTIMG`, `PROJECTIMG`) VALUES
(1, 'Project', 'dit is een project', 'Test', 'ICT', '2019-03-19', '2019-03-28', 'https://randomuser.me/api/portraits/men/23.jpg', 'https://homepages.cae.wisc.edu/~ece533/images/monarch.png'),
(2, 'Project2', 'dit is het tweede project', 'teststudent', 'ICT', '2019-03-19', '2019-03-29', 'https://randomuser.me/api/portraits/men/85.jpg', 'https://pbs.twimg.com/media/DdI0MjVWkAIMg2s.jpg'),
(3, 'project3', 'dit is het derde project', 'een persoon', 'ict', '2019-03-01', '2019-03-26', 'https://randomuser.me/api/portraits/men/74.jpg', 'https://hc.weebly.com/hc/article_attachments/115020938528/create-links-button.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
