-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 04:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halloweenstore`
--
CREATE DATABASE IF NOT EXISTS `halloweenstore` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `halloweenstore`;

-- --------------------------------------------------------

--
-- Table structure for table `themovies`
--

CREATE TABLE `themovies` (
  `movieID` int(11) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `moviePrice` decimal(10,0) NOT NULL,
  `movieDescription` varchar(350) NOT NULL,
  `movieImage` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `themovies`
--

INSERT INTO `themovies` (`movieID`, `movieTitle`, `moviePrice`, `movieDescription`, `movieImage`) VALUES
(1, 'The Ring', '10', 'A journalist must investigate a mysterious videotape which seems to cause the death of anyone one week to the day after they view it.', '\"./assets/images/thering.jpg\"'),
(2, 'The Mist', '10', 'A freak storm unleashes a species of bloodthirsty creatures on a small town, where a small band of citizens hole up in a supermarket and fight for their lives.', '\"./assets/images/themist.jpg\"'),
(3, 'The Shining', '15', 'A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.', '\"./assets/images/shining.jpg\"'),
(4, 'Poltergeist', '15', 'A family\'s home is haunted by a host of demonic ghosts.', '\"./assets/images/poltergeist.jpg\"'),
(5, 'Nightmare On Elm Street ', '20', 'Teenager Nancy Thompson must uncover the dark truth concealed by her parents after she and her friends become targets of the spirit of a serial killer with a bladed glove in their dreams, in which if they die, it kills them in real life.', '\"./assets/images/nightmareonelmstreet.jpg\"'),
(6, 'Jeepers Creepers Reborn', '20', 'Forced to travel with her boyfriend, Laine begins to experience premonitions associated with the urban myth of The Creeper. She believes that something supernatural has been summoned - and that she is at the center of it all.', '\"./assets/images/jeeperscreepers.jpg\"'),
(7, 'Friday the 13th: Jason Takes Manhattan ', '20', 'Jason Voorhees is accidentally awakened from his watery grave, and he ends up stalking a ship full of graduating high school students headed to Manhattan, NY.', '\"./assets/images/fridaythe13th.jpg\"'),
(8, 'Halloween', '20', 'Fifteen years after murdering his sister on Halloween night 1963, Michael Myers escapes from a mental hospital and returns to the small town of Haddonfield, Illinois to kill again.', '\"./assets/images/halloween.jpg\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `themovies`
--
ALTER TABLE `themovies`
  ADD PRIMARY KEY (`movieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `themovies`
--
ALTER TABLE `themovies`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
