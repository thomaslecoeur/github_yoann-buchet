-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Juin 2014 à 14:47
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `yoann_buchet`
--

-- --------------------------------------------------------

--
-- Structure de la table `livreor`
--

CREATE TABLE IF NOT EXISTS `livreor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Contenu de la table `livreor`
--

INSERT INTO `livreor` (`id`, `nom`, `mail`, `message`, `date`, `valid`) VALUES
(10, 'Mickael', 'michkkael@gmail.com', 'Ceci est un message pour tester si l''envoi des tÃ©moignages est fonctionnel. Si le message est affichÃ©, alors Ã§a veut dire que Ã§a marche !!\r\nBref, treve de plaisanteries, il faut continuer de coder..', '2014-05-20 11:15:15', 0),
(62, 'Message test', 'message@test.fr', 'Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. Ceci est un message pour tester la position des boutons dans l''espace d''administration. ', '2014-06-07 09:43:35', 0),
(66, 'Mickael Chanrion', 'michkkael@gmail.com', 'Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. ', '2014-06-16 11:53:41', 1),
(67, 'Mickael Chanrion', 'michkkael@gmail.com', 'Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. ', '2014-06-16 11:53:45', 1),
(68, 'Mickael Chanrion', 'michkkael@gmail.com', 'Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. ', '2014-06-16 11:53:47', 1),
(69, 'Mickael Chanrion', 'michkkael@gmail.com', 'Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. Ceci est un commentaire pour peupler le livre d''or. ', '2014-06-16 11:53:51', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_ut` int(11) NOT NULL AUTO_INCREMENT,
  `login_ut` text NOT NULL,
  `password_ut` text NOT NULL,
  PRIMARY KEY (`id_ut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_ut`, `login_ut`, `password_ut`) VALUES
(1, 'login', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
