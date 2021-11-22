DROP TABLE `argonautes` IF EXISTS;

CREATE TABLE `argonautes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `argonautes` (`name`) VALUES ('Eleftheria');
INSERT INTO `argonautes` (`name`) VALUES ('Gennadios');
INSERT INTO `argonautes` (`name`) VALUES ('Lysimachos');
