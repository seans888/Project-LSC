-- MySQL Script generated by MySQL Workbench
-- 10/26/16 00:27:50
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lsc_updated
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lsc_updated
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lsc_updated` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `lsc_updated` ;

-- -----------------------------------------------------
-- Table `lsc_updated`.`review_class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lsc_updated`.`review_class` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(150) NOT NULL COMMENT '',
  `description` VARCHAR(400) NOT NULL COMMENT '',
  `start_date` DATE NULL COMMENT '',
  `end_date` DATE NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lsc_updated`.`schedule`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lsc_updated`.`schedule` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `review_class_id` INT NULL COMMENT '',
  `duration_of_hours` INT(3) NULL COMMENT '',
  `start_time` TIME NULL COMMENT '',
  `end_time` TIME NULL COMMENT '',
  `location` VARCHAR(150) NULL COMMENT '',
  `room` VARCHAR(150) NULL COMMENT '',
  PRIMARY KEY (`id`, `review_class_id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  INDEX `fk_schedule_review_class1_idx` (`review_class_id` ASC)  COMMENT '',
  CONSTRAINT `fk_schedule_review_class1`
    FOREIGN KEY (`review_class_id`)
    REFERENCES `lsc_updated`.`review_class` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lsc_updated`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lsc_updated`.`student` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `lastname` VARCHAR(100) NOT NULL COMMENT '',
  `firstname` VARCHAR(100) NOT NULL COMMENT '',
  `middlename` VARCHAR(100) NULL COMMENT '',
  `age` INT(2) NOT NULL COMMENT '',
  `gender` ENUM('Male', 'Female') NOT NULL COMMENT '',
  `contact_number` VARCHAR(12) NULL COMMENT '',
  `email_address` VARCHAR(150) NOT NULL COMMENT '',
  `home_address` VARCHAR(200) NOT NULL COMMENT '',
  `school` VARCHAR(200) NOT NULL COMMENT '',
  `guardian_name` VARCHAR(100) NOT NULL COMMENT '',
  `relation` ENUM('Parent', 'Grandparent', 'Sibling', 'Other') NOT NULL COMMENT '',
  `guardian_contact_number` VARCHAR(12) NOT NULL COMMENT '',
  `guardian_email_address` VARCHAR(150) NULL COMMENT '',
  `selected_school` VARCHAR(100) NULL COMMENT '',
  `learned_lsc` ENUM('friends', 'relatives', 'newspaper ads', 'LSC signage/poster', 'school', 'others') NOT NULL COMMENT '',
  `review_class_id` INT NOT NULL COMMENT '',
  `schedule_id` INT NOT NULL COMMENT '',
  `reserve/enroll` ENUM('RESERVE', 'ENROLL') NOT NULL COMMENT '',
  `status` VARCHAR(45) NULL COMMENT '',
  `date_of_registration` TIMESTAMP NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `review_class_id`, `schedule_id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  INDEX `fk_student_schedule1_idx` (`schedule_id` ASC)  COMMENT '',
  INDEX `fk_student_review_class1_idx` (`review_class_id` ASC)  COMMENT '',
  CONSTRAINT `fk_student_schedule1`
    FOREIGN KEY (`schedule_id`)
    REFERENCES `lsc_updated`.`schedule` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_review_class1`
    FOREIGN KEY (`review_class_id`)
    REFERENCES `lsc_updated`.`review_class` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lsc_updated`.`account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lsc_updated`.`account` (
  `id` INT NOT NULL COMMENT '',
  `username` VARCHAR(50) NOT NULL COMMENT '',
  `email_address` VARCHAR(150) NOT NULL COMMENT '',
  `password` VARCHAR(50) NOT NULL COMMENT '',
  `student_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `student_id`)  COMMENT '',
  UNIQUE INDEX `username_UNIQUE` (`username` ASC)  COMMENT '',
  UNIQUE INDEX `password_UNIQUE` (`password` ASC)  COMMENT '',
  UNIQUE INDEX `email_address_UNIQUE` (`email_address` ASC)  COMMENT '',
  INDEX `fk_account_student1_idx` (`student_id` ASC)  COMMENT '',
  CONSTRAINT `fk_account_student1`
    FOREIGN KEY (`student_id`)
    REFERENCES `lsc_updated`.`student` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lsc_updated`.`class_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lsc_updated`.`class_list` (
  `review_class_id` INT NOT NULL COMMENT '',
  `student_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`review_class_id`, `student_id`)  COMMENT '',
  INDEX `fk_student_has_review_class_review_class1_idx` (`review_class_id` ASC)  COMMENT '',
  INDEX `fk_student_has_review_class_student1_idx` (`student_id` ASC)  COMMENT '',
  CONSTRAINT `fk_student_has_review_class_student1`
    FOREIGN KEY (`student_id`)
    REFERENCES `lsc_updated`.`student` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_has_review_class_review_class1`
    FOREIGN KEY (`review_class_id`)
    REFERENCES `lsc_updated`.`review_class` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'bridge entity';


-- -----------------------------------------------------
-- Table `lsc_updated`.`Payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lsc_updated`.`Payment` (
  `student_id` INT NOT NULL COMMENT '',
  `review_class_id` INT NOT NULL COMMENT '',
  `deposit_slip` VARCHAR(45) NULL COMMENT '',
  `date` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`student_id`, `review_class_id`)  COMMENT '',
  INDEX `fk_review_class_has_student_student1_idx` (`student_id` ASC)  COMMENT '',
  INDEX `fk_review_class_has_student_review_class1_idx` (`review_class_id` ASC)  COMMENT '',
  CONSTRAINT `fk_review_class_has_student_review_class1`
    FOREIGN KEY (`review_class_id`)
    REFERENCES `lsc_updated`.`review_class` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_review_class_has_student_student1`
    FOREIGN KEY (`student_id`)
    REFERENCES `lsc_updated`.`student` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
