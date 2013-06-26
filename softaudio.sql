-- -----------------------------------------------------
-- Table `softaudio`.`peoples`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softaudio`.`peoples` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(80) NOT NULL ,
  `cpf` INT(11) NOT NULL ,
  `rg` INT(9) NOT NULL ,
  `data_nascimento` DATE NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NOT NULL ,
  `deleted_at` DATETIME NOT NULL ,
  `rua` VARCHAR(50) NOT NULL ,
  `bairro` VARCHAR(50) NOT NULL ,
  `complemento` VARCHAR(100) NULL DEFAULT NULL ,
  `numero` INT(5) NOT NULL ,
  `cep` INT(8) NOT NULL ,
  `email` VARCHAR(50) NULL DEFAULT NULL ,
  `cel` INT(11) NULL DEFAULT NULL ,
  `tel` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `cpf` (`cpf` ASC, `rg` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = UTF8
COMMENT = 'Pessoa';


-- -----------------------------------------------------
-- Table `softaudio`.`products`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softaudio`.`products` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(100) NOT NULL ,
  `preco` DOUBLE NOT NULL ,
  `qtd` INT(11) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NOT NULL ,
  `deleted_at` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = UTF8;


-- -----------------------------------------------------
-- Table `softaudio`.`comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softaudio`.`comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `product_id` INT(11) NOT NULL ,
  `titulo` VARCHAR(100) NOT NULL ,
  `conteudo` VARCHAR(100) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NOT NULL ,
  `deleted_at` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `product_id` (`product_id` ASC)
  )
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = UTF8;



-- -----------------------------------------------------
-- Table `softaudio`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softaudio`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(100) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `senha` VARCHAR(100) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NOT NULL ,
  `deleted_at` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = UTF8
COMMENT = 'Usuário';

USE `softaudio` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
