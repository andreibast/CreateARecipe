-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2020 at 01:12 AM
-- Server version: 8.0.20
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `createarecipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe_post`
--

CREATE TABLE `recipe_post` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guidelines` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preparationtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recipeprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe_post`
--

INSERT INTO `recipe_post` (`id`, `title`, `ingredients`, `guidelines`, `preparationtime`, `servings`, `recipeprice`) VALUES
(39, 'Musaca', 'ulei, ceapa, morcovi, carne tocata, conserva de rosii, boia, cartofi, patrunjel, cascaval, smanatana, oua', 'Reteta de musaca de cartofi  este foarte populara si iubita de romani. O stim inca din copilarie atunci cand ne-o pregateau mamele sau bunicile noastre. Este acel fel de mancare satios si gutos care ne tinea de foame intreaga zi.', '2h', '8', '70 lei'),
(40, 'Pizza cu legume coapte', 'aluat, \r\n2 dovlecei copti, \r\n2 vinete mici coapte, \r\n3 ardei grasi copti,\r\n200 g mozzarella,\r\n2 cepe coapte,\r\n1 cutie Mediteraneean Mix Bonduelle,\r\n200 g rosii pasate,\r\n2 linguri ulei,\r\n1 lingurita oregano,\r\nsare,\r\npiper', 'Pentru aceasta pizza cu legume coapte, mi-am facut aluatul singura, asa cum fac de fiecare data. In felul acesta pizza mea e de fiecare data perfecta.', '12 min', '16', '50 lei'),
(41, 'Paste cu sos de porumb', '400 g paste fusilli\r\n50 g parmezan\r\n100 g spanac\r\n100 ml smantana pentru gatit\r\n200 ml lapte\r\n1 legatura patrunjel\r\n2 conseve porumb Bonduelle\r\n50 g unt\r\n3 catei de usturoi razuiti\r\nsare\r\npiper', 'Reteta de paste cu sos de porumb este perfecta pentru cinele din timpul saptamanii, atunci cand ne intoarcem de la serviciu si nu avem nimic de mancare si cand trebuie sa hranim intreaga familie.', '15min', '6', '20 lei'),
(42, 'delete me', '123', '123', '???', '???', '???');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe_post`
--
ALTER TABLE `recipe_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe_post`
--
ALTER TABLE `recipe_post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
