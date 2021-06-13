-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 09:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immobilier`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `CIN_client` varchar(255) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mot_de_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `CIN_client`, `nom_prenom`, `email`, `telephone`, `adresse`, `mot_de_pass`) VALUES
(3, 'h12345', 'youssef', 'youssef@gmail.com', '23456789', 'wertyuillkjhgfds', '123456'),
(5, 'hh721', 'elkafhi youssef', 'you@gmail.com', '2345678', 'safi', '123456'),
(9, '45678', 'walid', 'walid@gmail.com', '234567890', 'safi', '12345'),
(10, 'hh34567', 'salma berouk', 'salma@gmail.com', '3456789', 'safi', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `id_demande` int(11) NOT NULL,
  `date_demande` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_visite` date NOT NULL,
  `temps_visite` time NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_immobilier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`id_demande`, `date_demande`, `date_visite`, `temps_visite`, `id_client`, `id_immobilier`) VALUES
(26, '2021-06-12 17:23:05', '2021-06-17', '18:23:00', 10, 25);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dic`
-- (See below for the actual view)
--
CREATE TABLE `dic` (
`id_demande` int(11)
,`type_immobilier` enum('appartement','villa','magasin','')
,`nom_prenom` varchar(255)
,`date_visite` date
,`temps_visite` time
);

-- --------------------------------------------------------

--
-- Table structure for table `immobilier`
--

CREATE TABLE `immobilier` (
  `id_immobilier` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `type_immobilier` enum('appartement','villa','magasin','') NOT NULL,
  `type_operation` enum('a vendre','a louer','') NOT NULL,
  `prix` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `état` enum('disponible','indisponible','','') NOT NULL DEFAULT 'disponible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `immobilier`
--

INSERT INTO `immobilier` (`id_immobilier`, `description`, `adresse`, `type_immobilier`, `type_operation`, `prix`, `surface`, `img`, `état`) VALUES
(25, 'wertyuiodfghjklfg fghjtyui dfg', 'safi', 'appartement', 'a vendre', 123, 123, 'appartement11.jpg appartement12.jpg appartement13.jpg', 'disponible');

-- --------------------------------------------------------

--
-- Table structure for table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id_rendezvous` int(11) NOT NULL,
  `id_demande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rendezvous`
--

INSERT INTO `rendezvous` (`id_rendezvous`, `id_demande`) VALUES
(12381, 26);

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

CREATE TABLE `reserver` (
  `id_reserve` int(11) NOT NULL,
  `date_reserve` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_immobilier` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `dic`
--
DROP TABLE IF EXISTS `dic`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dic`  AS SELECT `d`.`id_demande` AS `id_demande`, `i`.`type_immobilier` AS `type_immobilier`, `c`.`nom_prenom` AS `nom_prenom`, `d`.`date_visite` AS `date_visite`, `d`.`temps_visite` AS `temps_visite` FROM ((`client` `c` join `demande` `d` on(`c`.`id_client` = `d`.`id_client`)) join `immobilier` `i` on(`d`.`id_immobilier` = `i`.`id_immobilier`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id_demande`),
  ADD KEY `id_client` (`id_client`,`id_immobilier`),
  ADD KEY `FK_id_immo` (`id_immobilier`);

--
-- Indexes for table `immobilier`
--
ALTER TABLE `immobilier`
  ADD PRIMARY KEY (`id_immobilier`);

--
-- Indexes for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id_rendezvous`),
  ADD KEY `id_demande` (`id_demande`);

--
-- Indexes for table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id_reserve`),
  ADD KEY `id_immobilier` (`id_immobilier`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `id_demande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `immobilier`
--
ALTER TABLE `immobilier`
  MODIFY `id_immobilier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id_rendezvous` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12385;

--
-- AUTO_INCREMENT for table `reserver`
--
ALTER TABLE `reserver`
  MODIFY `id_reserve` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_id_immo` FOREIGN KEY (`id_immobilier`) REFERENCES `immobilier` (`id_immobilier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `FK_id_demande` FOREIGN KEY (`id_demande`) REFERENCES `demande` (`id_demande`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `FK_id_immobilier` FOREIGN KEY (`id_immobilier`) REFERENCES `immobilier` (`id_immobilier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserver_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
