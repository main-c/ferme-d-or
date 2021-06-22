CREATE DATABASE IF NOT EXISTS `GestionClient`;
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(6) NOT NULL,
  `region` varchar(25) NOT NULL,
  `departement` varchar(25) NOT NULL,
  `arrondissement` varchar(25) NOT NULL,
  PRIMARY KEY (`login`)
)
