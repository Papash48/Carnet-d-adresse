SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `idP` int(11) NOT NULL AUTO_INCREMENT,
  `nomP` varchar(20) NOT NULL,
  `prenomP` varchar(20) NOT NULL,
  `rueP` varchar(50) NOT NULL,
  `cpP` varchar(20) NOT NULL,
  `villeP` varchar(20) NOT NULL,
  `mailP` varchar(50) NOT NULL,
  `telP` varchar(20) NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`idP`, `nomP`, `prenomP`, `rueP`, `cpP`, `villeP`, `mailP`, `telP`) VALUES
(1, 'Mallet', 'Renaud', '5 rue de l''aubrac', '48000', 'Mende', 'ren.mallet@hotmail.fr', '0682670002'),
(2, 'Dhombre', 'Mikael', '75 impasse des buissons', '48000', 'Paummer', 'mikaadhombre@orange.fr', '0964583915'),
(3, 'Laval', 'Benoit', '35 rue de l''impasse', '658742', 'Forlouain', 'benoit.lav@gmail.com', '0895743615'),
(4, 'Aiello', 'Antoine', '7 rue de la moustache', '48000', 'Mende', 'aaiello@gmail.com', '0623569856'),
(5, 'Andre', 'Thibault', '3 rue du Xanax', '48000', 'Mende', 'andre@yahoo.fr', '0645215245'),
(6, 'Duboe', 'Lucas', '4 rue des passants verts', '30000', 'Nîmes', 'ld@hotmail.fr', '0645896589'),
(7, 'Saurel', 'Thibaut', '5 rue de Julien', '12000', 'Rodez', 'saurel@laposte.net', '0612456569'),
(8, 'Delcausse', 'Amandine', '5 rue des mangakas', '48000', 'Mende', 'amdel@yahoo.fr', '0562356896');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;