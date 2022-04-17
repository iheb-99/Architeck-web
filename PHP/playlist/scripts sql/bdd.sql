-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 10, 2021 at 07:52 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `playlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

CREATE TABLE `association` (
  `id` int(11) NOT NULL,
  `id_playlist` int(11) NOT NULL,
  `id_musique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `association`
--

INSERT INTO `association` (`id`, `id_playlist`, `id_musique`) VALUES
(9, 11, 7);

-- --------------------------------------------------------

--
-- Table structure for table `musique`
--

CREATE TABLE `musique` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `annee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musique`
--

INSERT INTO `musique` (`id`, `titre`, `artiste`, `annee`) VALUES
(7, 'La fête du slip', 'iheb', '2021-01-15'),
(8, 'Musique super cool', 'zekri', '2021-01-22'),
(9, 'j\'ai pas d\'idée', 'kar', '2021-01-15'),
(10, 'Encore un autre song ', 'namm', '2021-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `style` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `nom`, `date_creation`, `style`) VALUES
(10, 'Playlist pour le fun', '2021-01-10 20:50:06', 'Rock '),
(11, 'Playlist iheb', '2021-01-10 20:51:31', 'Rap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_playlist_id` (`id_playlist`),
  ADD KEY `fk_musique_id` (`id_musique`);

--
-- Indexes for table `musique`
--
ALTER TABLE `musique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `association`
--
ALTER TABLE `association`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `musique`
--
ALTER TABLE `musique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `fk_musique_id` FOREIGN KEY (`id_musique`) REFERENCES `musique` (`id`),
  ADD CONSTRAINT `fk_playlist_id` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id`);
