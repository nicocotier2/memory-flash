SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id_game` int NOT NULL AUTO_INCREMENT,
  `game_name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_game` int NOT NULL,
  `date_send` datetime DEFAULT NULL,
  `text_send` text NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `message_id_user_fk` (`id_user`),
  KEY `message_id_game_fk` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id_score` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_game` int NOT NULL,
  `difficulty` int NOT NULL,
  `score` int NOT NULL,
  `date_game` datetime DEFAULT NULL,
  PRIMARY KEY (`id_score`),
  KEY `score_id_user_fk` (`id_user`),
  KEY `score_id_game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(60) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `date_connection` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

ALTER TABLE `message`
  ADD CONSTRAINT ` e_id_game_fk` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`),
  ADD CONSTRAINT `message_id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `score`
  ADD CONSTRAINT `score_id_game` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`),
  ADD CONSTRAINT `score_id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);