-- -----------------------------------------------------
-- Schema secret
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `secret` DEFAULT CHARACTER SET latin1 ;
USE `secret` ;

-- -----------------------------------------------------
-- Table `secret`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secret`.`usuario` (
  `username` VARCHAR(250) NOT NULL,
  `senha` TEXT NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `secret`.`secret`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secret`.`secret` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(280) NOT NULL,
  `cor_fundo` VARCHAR(45) NOT NULL,
  `cor_texto` VARCHAR(80) NOT NULL,
  `username` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `secret_ibfk_1`
    FOREIGN KEY (`username`)
    REFERENCES `secret`.`usuario` (`username`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


CREATE TABLE IF NOT EXISTS `secret`.`comentario` (
  `id` INT NOT NULL auto_increment,
  `texto` TEXT NOT NULL,
  `datahora` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` VARCHAR(250) NOT NULL,
  `secret_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_comentario_usuario`
    FOREIGN KEY (`username`)
    REFERENCES `secret`.`usuario` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentario_secret1`
    FOREIGN KEY (`secret_id`)
    REFERENCES `secret`.`secret` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `secret`.`notificacao` (
  `idnotificacao` INT NOT NULL auto_increment,
  `mensagem` VARCHAR(400) NOT NULL,
  `tipo` CHAR(1) NOT NULL,
  `lida` CHAR(1) NOT NULL DEFAULT 'N',
  `link` VARCHAR(45) NOT NULL,
  `username` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`idnotificacao`),
  CONSTRAINT `fk_notificacao_usuario1`
    FOREIGN KEY (`username`)
    REFERENCES `secret`.`usuario` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `secret`.`reacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secret`.`reacao` (
  `secret_id` INT(11) NOT NULL,
  `username` VARCHAR(250) NOT NULL,
  `tipo` CHAR(1) NOT NULL,
  PRIMARY KEY (`secret_id`, `username`),
  CONSTRAINT `reacao_ibfk_1`
    FOREIGN KEY (`secret_id`)
    REFERENCES `secret`.`secret` (`id`),
  CONSTRAINT `reacao_ibfk_2`
    FOREIGN KEY (`username`)
    REFERENCES `secret`.`usuario` (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `secret`.`seguidor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secret`.`seguidor` (
  `username` VARCHAR(250) NOT NULL,
  `seguindo` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`username`, `seguindo`),
  CONSTRAINT `seguidor_ibfk_1`
    FOREIGN KEY (`username`)
    REFERENCES `secret`.`usuario` (`username`),
  CONSTRAINT `seguidor_ibfk_2`
    FOREIGN KEY (`seguindo`)
    REFERENCES `secret`.`usuario` (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;
