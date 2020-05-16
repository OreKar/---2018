CREATE DATABASE IF NOT EXISTS `ekdromes` DEFAULT CHARACTER SET greek COLLATE greek_general_ci;
USE `ekdromes`;

DROP TABLE IF EXISTS `kratiseis`;
CREATE TABLE IF NOT EXISTS `kratiseis` (
  `Ονοματεπώνυμο` varchar(30),
  `EMAIL` varchar(30) ,
  `Προορισμός` varchar(50) ,
  `Άφιξη` Date ,
  `Αναχώρηση` Date ,
  `Εισιτήρια/Άτομα` int(3) ,
  `Ημερήσια Χρέωση` int(5)
) ENGINE=InnoDB DEFAULT CHARSET=greek;



DROP TABLE IF EXISTS `xri`;
CREATE TABLE IF NOT EXISTS `xri` (
  `Όνομα` varchar(30),
  `Επώνυμο` varchar(30) ,
  `EMAIL` varchar(50) ,
  `Username` varchar(30) ,
  `Κωδικός` varchar(30)
) ENGINE=InnoDB DEFAULT CHARSET=greek;
