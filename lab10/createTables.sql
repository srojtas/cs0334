-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema srojtas001_cs334lab10
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema srojtas001_cs334lab10
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `srojtas001_cs334lab10` DEFAULT CHARACTER SET utf8 ;
USE `srojtas001_cs334lab10` ;

-- -----------------------------------------------------
-- Table `srojtas001_cs334lab10`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `srojtas001_cs334lab10`.`customers` (
  `customerID` INT NOT NULL AUTO_INCREMENT,
  `userName` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `state` VARCHAR(45) NULL,
  `zip` VARCHAR(45) NULL,
  `country` VARCHAR(45) NULL,
  `firstName` VARCHAR(45) NULL,
  `lastName` VARCHAR(45) NULL,
  PRIMARY KEY (`customerID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
