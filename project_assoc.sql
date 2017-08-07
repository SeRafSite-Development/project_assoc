-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2017 at 09:44 PM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_assoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Description` text COLLATE utf8_polish_ci NOT NULL,
  `Slug` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Datetime` datetime NOT NULL,
  `Image` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `Name`, `Description`, `Slug`, `Datetime`, `Image`) VALUES
(1, 'Życzenia świąteczne', 'Stowarzyszenie Nasze Dzieci pragnie serdecznie podziękować za zaufanie i współpracę w minionym roku.\r\nDzięki Państwa ofiarności i życzliwości mogliśmy zorganizować wiele imprez oraz obdarować naszych podopiecznych upominkami.\r\nW uznaniu naszej długoletniej współpracy z okazji Świąt Bożego Narodzenia chcielibyśmy złożyć najserdeczniejsze życzenia, wielu radosnych chwil przy wigilijnym stole oraz samych sukcesów w Nowym Roku. ', 'zyczenia_swiateczne', '2015-12-16 16:25:00', ''),
(2, 'Pomoc finansowa na organizację imprezy mikołajowo-świątecznej', 'Zwracamy się z gorącą prośbą o pomoc finansową na zorganizowanie imprezy mikołajowo - świątecznej dla podopiecznych naszego Stowarzyszenia. Jak co roku będą to dzieci najbardziej potrzebujące pomocy z różnych placówek opiekuńczych z Krakowa i okolic.\r\nCała zabawa odbędzie się w Karczmie Bida w Głogoczowie i przy smacznym poczęstunku każdy z uczestników otrzyma prezent od Św. Mikołaja.\r\nW imieniu Stowarzyszenia i dzieci bardzo dziękujemy za okazaną pomoc i wsparcie w ważnych dla dzieci chwilach. ', 'pomoc_finansowa_na_organizacje_imprezy_2015', '2015-11-26 00:00:00', 'default2'),
(3, 'Dzień dziecka 2015', 'Zwracamy się do Państwa z gorącą prośbą o pomoc finansową na zorganizowanie pikniku z okazji Dnia Dziecka dla dzieci najbardziej potrzebujących pomocy. Piknik odbędzie się na Ranczo Pasja w Brzesku.\r\n\r\nPlanujemy zorganizować całodniową imprezę z zabawą, muzyką i śmiechem. Chcielibyśmy, aby w tym dniu wszystkie dzieci nie tylko bawiły się i uczestniczyły w różnych konkursach, ale także mogli posmakować pysznych kiełbasek, słodyczy i napojów.\r\n\r\nCałą zabawę na świeżym powietrzu poprowadzi zaprzyjaźniony ze Stowarzyszeniem animator zabaw dla dzieci, który współpracuje z nami od kilku lat i jest uwielbiany przez naszych podopiecznych.\r\n\r\nW realizację imprezy wkładamy wiele serca, własne siły i środki, lecz ze względu na bardzo ciężkie czasy nie jesteśmy wstanie zrealizować imprezy bez Państwa pomocy i wsparcia.\r\n\r\nW imieniu Stowarzyszenia i dzieci biorących udział w naszych imprezach bardzo dziękujemy za dotychczasową pomoc. ', 'dzien_dziecka_2015', '2015-05-05 00:00:00', ''),
(4, 'Zimowisko w Zakopanem', 'Zwracamy się z uprzejmą prośbą o pomoc finansową na zorganizowanie zimowiska w Zakopanem dla dzieci najbardziej potrzebujących pomocy.\r\n\r\nWyjazd odbędzie się od 16.02.2015 do 21.02.2015r. Dla niektórych naszych podopiecznych będzie to pierwszy ich wyjazd w swoim życiu.\r\nDo tej pory nigdzie nie byli, nic nie zobaczyli i dlatego stawiamy na aktywny wypoczynek. Najważniejsza podczas wyjazdu będzie fantastyczna zabawa i możliwość poznania i spędzenia czasu z nowymi rówieśnikami.\r\nPoprzez zorganizowanie zimowiska chcemy choć trochę zrekompensować krzywdy jakich doznali i wnieść w nich życie trochę radości.\r\nW imieniu Stowarzyszenia i dzieci dziękujemy za okazaną pomoc i wsparcie. ', 'zimowisko_w_zakopanem', '2015-02-10 00:00:00', NULL),
(5, 'Impreza mikołajowo-świąteczna', 'Zwracamy się z gorącą prośbą o pomoc finansową na zorganizowanie imprezy mikołajowo - świątecznej dla podopiecznych naszego Stowarzyszenia. Jak co roku będą to dzieci najbardziej potrzebujące pomocy z różnych placówek opiekuńczych z Krakowa i okolic.\r\n\r\nCała zabawa odbędzie się w Karczmie Bida w Głogoczowie i przy smacznym poczęstunku każdy z uczestników otrzyma prezent od Św. Mikołaja.\r\n\r\nW imieniu Stowarzyszenia i dzieci bardzo dziękujemy za okazaną pomoc i wsparcie w ważnych dla dzieci chwilach. ', 'impreza_mikolajkowo_swiateczna', '2014-11-14 00:00:00', ''),
(6, 'Podziękowanie za pomoc w organizacji koloni w Sielpi', 'Dobiegła końca wspaniała przygoda kolonijna w Sielpi. Dzięki Państwa wsparciu udało nam się zorganizować wakacyjny wyjazd dla dzieci z rodzin patologicznych z Szarowa.\r\n\r\nDzieci spełniały swoje największe marzenia. Zwiedzili wiele wspaniałych miejsc, pływali na rowerkach wodnych. Jednakże, największą frajdą był dla nich park liniowy, gdzie mogły sprawdzić swoje umiejętności sportowe i przezwyciężyć swój lęk.\r\nPrzeżycia i spotkania, w których mogli uczestniczyć podczas wakacji z pewnością pozostaną w ich wspomnieniach na długi czas i będą dla nich siłą przy podejmowaniu nowych zadań w nowym roku szkolnym.\r\nKończąc letnią akcję organizacji wypoczynku w imieniu Stowarzyszenia i dzieci gorąco dziękujemy za okazane im serce i wsparcie. ', 'podziekowania_za_pomoc', '2014-08-29 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id_partners` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Description` text COLLATE utf8_polish_ci,
  `Slug` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id_partners`, `Name`, `Description`, `Slug`, `Image`) VALUES
(1, 'Lanster sp. z o.o.', NULL, 'http://lanster.com', 'default.jpg'),
(2, 'Drukarnia Gryfix', NULL, 'http://www.gryfix.eu', 'default.jpg'),
(3, 'Elwolight', NULL, 'http://elwolight.com', 'default.jpg'),
(4, 'Bahlsen', NULL, 'http://www.bahlsen.pl', NULL),
(5, 'F.H.U.P. HUT POŻ s.c.', NULL, 'http://www.hut-poz.krakow.pl', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id_partners`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id_partners` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
