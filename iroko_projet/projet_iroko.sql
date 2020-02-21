-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 21 fév. 2020 à 16:36
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_iroko`
--

-- --------------------------------------------------------

--
-- Structure de la table `about_section1`
--

DROP TABLE IF EXISTS `about_section1`;
CREATE TABLE IF NOT EXISTS `about_section1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre1` varchar(255) NOT NULL,
  `cont1` varchar(255) NOT NULL,
  `cont1_1` varchar(255) NOT NULL,
  `titre2` varchar(255) NOT NULL,
  `cont2` varchar(255) NOT NULL,
  `cont2_1` varchar(255) NOT NULL,
  `cont2_2` varchar(255) NOT NULL,
  `cont2_3` varchar(255) NOT NULL,
  `cont2_4` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `about_section1`
--

INSERT INTO `about_section1` (`id`, `titre1`, `cont1`, `cont1_1`, `titre2`, `cont2`, `cont2_1`, `cont2_2`, `cont2_3`, `cont2_4`, `date_time_publication`, `confirm`) VALUES
(1, 'ABOUT US', 'Lorem ipsum dolor sitdoni amet, consectetur donald adipis elite for. Vivamus interdum ultrices augue.Vivamus interdum ultrices augue.', 'Ut vel auctor ligula. Aenean nec dui pretium, commodo ligula sit amet, \r\nVivamus interdum ultrices augue.faucibus purus.', 'OUR QUALITY', 'Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor', 'Lorem ipsum dolor sitdoni amet, consectetur dont adipis elite vivamus interdum.', 'Integer pulvinar ante nulla, ac fermentum ex congue id vestibulum ensectetur.', 'Proin blandit nibh in quam semper iaculis lorem ipsum dolor salama ender.', 'Mauris at dolor imperdiet, aliquet nisi non, vulputate est sit amet.', '2020-02-12 01:13:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `about_section2`
--

DROP TABLE IF EXISTS `about_section2`;
CREATE TABLE IF NOT EXISTS `about_section2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `about_section2`
--

INSERT INTO `about_section2` (`id`, `nom`, `poste`, `contact`, `email`, `date_time_publication`, `confirme`) VALUES
(2, 'Tony Holland ', 'Real Estate Agent ', '(+225) 22 121 288  ', 'tonyholland@gmail.com', '2020-02-12 01:31:00', 1),
(3, 'Sasha Gordon ', 'Researcher', '(+225) 22 121 288  ', 'sashagordon@gmail.com', '2020-02-12 01:33:10', 1),
(4, 'Nicky Butt ', 'Agent ', '(+225) 22 121 288  ', 'nickybutt79@gmail.com', '2020-02-12 01:34:00', 1),
(5, 'Gina Wesley  ', 'Real Estate Agent', '(+225) 22 121 288  ', 'ginawesley@gmail.com', '2020-02-12 01:36:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

DROP TABLE IF EXISTS `composant`;
CREATE TABLE IF NOT EXISTS `composant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `composant`
--

INSERT INTO `composant` (`id`, `titre`, `sous_titre`, `contenu`, `date_time_publication`, `confirme`) VALUES
(1, 'Bibliotheque\r\n', 'Tasley, VA 23441', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-11 00:06:00', 0),
(2, 'Mediatheque', 'Miami Beach, FL 33141', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-11 00:07:00', 0),
(3, 'Espace de jeux\r\n', 'Beverly Hills, CA 90210', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-11 00:06:00', 0),
(4, 'Un centre commercial avec supermarche\r\n', 'Beverly Hills, CA 90210', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-11 00:07:00', 0),
(5, 'Une clinique privee avec un heliport\r\n\r\n', 'Beverly Hills, CA 90210', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-11 00:06:00', 0),
(6, 'Une salle de sport avec SPA', 'Beverly Hills, CA 90210', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-11 00:07:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `mail`, `contenu`) VALUES
(1, 'kouassi davy', 'admin@gmail.com', '                                                      ceci est un test pour vÃ©rifier mon formulaire de contact!!!\r\n                                                    '),
(6, 'adel sepe', 'sepeadel@gmail.com', 'Ceci est un test'),
(7, 'adel sepe', 'sepeadel@gmail.com', 'Ceci est un test'),
(4, 'Babou Laris', 'laris555@gmail.com', 'Ceci est mon message'),
(5, 'adel sepe', 'sepeadel@gmail.com', 'Ceci est un test');

-- --------------------------------------------------------

--
-- Structure de la table `contact_section1`
--

DROP TABLE IF EXISTS `contact_section1`;
CREATE TABLE IF NOT EXISTS `contact_section1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact_section1`
--

INSERT INTO `contact_section1` (`id`, `adresse`, `email`, `contact`, `date_time_publication`, `confirme`) VALUES
(1, 'Abidjan, Cocody, Riviera 3 Bonoumin', 'info.iroko@ibp-holding.com', '(+225) xx xxx xxx', '2020-02-09 02:08:09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact_section2`
--

DROP TABLE IF EXISTS `contact_section2`;
CREATE TABLE IF NOT EXISTS `contact_section2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact_section2`
--

INSERT INTO `contact_section2` (`id`, `titre`, `sous_titre`, `date_time_publication`, `confirme`) VALUES
(2, 'Envoyez nous un message', 'Browse houses and flats for sale and to rent in your area', '2020-02-09 02:45:03', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `avatar`) VALUES
(6, 'Ghost#Dev', 'larisbabou555@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letter` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `letter`) VALUES
(1, 'larisbabou555@gmail.com'),
(4, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `icon1_titre` varchar(255) NOT NULL,
  `icon1_contenu` varchar(255) NOT NULL,
  `icon2_titre` varchar(255) NOT NULL,
  `icon2_contenu` varchar(255) NOT NULL,
  `icon3_titre` varchar(255) NOT NULL,
  `icon3_contenu` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `titre`, `sous_titre`, `icon1_titre`, `icon1_contenu`, `icon2_titre`, `icon2_contenu`, `icon3_titre`, `icon3_contenu`, `date_time_publication`, `confirme`) VALUES
(4, 'OUR SERVICES', 'We provide the perfect service for', 'Consultant Service', 'In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.', 'Properties Management', 'In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.', 'Renting and Selling', 'In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.', '2020-02-11 11:38:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type1`
--

DROP TABLE IF EXISTS `type1`;
CREATE TABLE IF NOT EXISTS `type1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `icon1` varchar(255) NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `icon3` varchar(255) NOT NULL,
  `icon4` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type1`
--

INSERT INTO `type1` (`id`, `titre`, `sous_titre`, `icon1`, `icon2`, `icon3`, `icon4`, `contenu`, `date_time_publication`, `confirme`) VALUES
(1, '1963 S Crescent Heights Blvd', 'Los Angeles, CA 90034', '800 Square foot', '10 Bedrooms', '2 Garages', '6 Bathrooms', 'Ipsum dolor sit amet, consectetur adipisicing elit. Enim, aliquid exercitationem quod,', '2020-02-10 15:36:15', 1),
(2, '305 North Palm Drive ', 'Beverly Hills, CA 90210   ', '1500 Square foot  ', ' 16 Bedrooms   ', '2 Garages   ', '8 Bathrooms', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, aliquid exercitationem quod,', '2020-02-10 17:11:14', 0),
(3, '305 North Palm Drive', 'Beverly Hills, CA 90210', '800 Square foot', '16 Bedrooms', '2 Garages', '6 Bathrooms', 'Amet, consectetur adipisicing elit. Enim, aliquid exercitationem quod.Lorem ipsum dolor sit.', '2020-02-10 15:38:47', 1),
(4, '28 Quaker Ridge Road, Manhasset', 'San Jose, CA 95133', '1200 Square foot', '12 Bedrooms', '3 Garages', '8 Bathrooms', 'Sit amet, consectetur adipisicing elit. Enim, aliquid exercitationem quod,Lorem ipsum dolor ', '2020-02-10 15:41:15', 1),
(5, '1203 Orren Street, Northeast', 'Washington, DC 20002', '500 Square foot', '4 Bedrooms', '1 Garages', '2 Bathrooms', 'Dolor sit amet, consectetur adipisicing elit. Enim, aliquid exercitationem quod,', '2020-02-10 15:57:15', 1),
(6, 'Sofi Berryessa 750 N King Road ', 'San Jose, CA 95133', '800 Square foot', '10 Bedrooms', '2 Garages', '6 Bathrooms', ' ipsum dolor sit amet, consectetur adipisicing elit. Enim, aliquid exercitationem quod,', '2020-02-10 16:01:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type2`
--

DROP TABLE IF EXISTS `type2`;
CREATE TABLE IF NOT EXISTS `type2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `icon1` varchar(255) NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `icon3` varchar(255) NOT NULL,
  `icon4` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type2`
--

INSERT INTO `type2` (`id`, `titre`, `sous_titre`, `icon1`, `icon2`, `icon3`, `icon4`, `contenu`, `date_time_publication`, `confirme`) VALUES
(1, '1963 S Crescent Heights Blvd', 'Los Angeles, CA 90034', '800 Square foot', '10 Bedrooms', '2 Garages', '6 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:36:15', 1),
(2, '305 North Palm Drive ', 'Beverly Hills, CA 90210   ', '1500 Square foot  ', ' 16 Bedrooms   ', '2 Garages   ', '8 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 17:11:14', 1),
(3, '305 North Palm Drive', 'Beverly Hills, CA 90210', '800 Square foot', '16 Bedrooms', '2 Garages', '6 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:38:47', 1),
(4, '28 Quaker Ridge Road, Manhasset', 'San Jose, CA 95133', '1200 Square foot', '12 Bedrooms', '3 Garages', '8 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:41:15', 1),
(5, '1203 Orren Street, Northeast', 'Washington, DC 20002', '500 Square foot', '4 Bedrooms', '1 Garages', '2 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:57:15', 1),
(6, 'Sofi Berryessa 750 N King Road ', 'San Jose, CA 95133', '800 Square foot', '10 Bedrooms', '2 Garages', '6 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 16:01:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type3`
--

DROP TABLE IF EXISTS `type3`;
CREATE TABLE IF NOT EXISTS `type3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `icon1` varchar(255) NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `icon3` varchar(255) NOT NULL,
  `icon4` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type3`
--

INSERT INTO `type3` (`id`, `titre`, `sous_titre`, `icon1`, `icon2`, `icon3`, `icon4`, `contenu`, `date_time_publication`, `confirme`) VALUES
(1, '1963 S Crescent Heights Blvd', 'Los Angeles, CA 90034', '800 Square foot', '10 Bedrooms', '2 Garages', '6 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:36:15', 1),
(10, '305 North Palm Drive ', 'Beverly Hills, CA 90210   ', '1500 Square foot  ', ' 16 Bedrooms   ', '2 Garages   ', '8 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 17:11:14', 0),
(3, '305 North Palm Drive', 'Beverly Hills, CA 90210', '800 Square foot', '16 Bedrooms', '2 Garages', '6 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:38:47', 1),
(4, '28 Quaker Ridge Road, Manhasset', 'San Jose, CA 95133', '1200 Square foot', '12 Bedrooms', '3 Garages', '8 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:41:15', 1),
(5, '1203 Orren Street, Northeast', 'Washington, DC 20002', '500 Square foot', '4 Bedrooms', '1 Garages', '2 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 15:57:15', 1),
(6, 'Sofi Berryessa 750 N King Road ', 'San Jose, CA 95133', '800 Square foot', '10 Bedrooms', '2 Garages', '6 Bathrooms', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nCumque eius quos placeat, voluptatibus iste corrupti dolorum distinctio perferendis repudiandae.', '2020-02-10 16:01:15', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
