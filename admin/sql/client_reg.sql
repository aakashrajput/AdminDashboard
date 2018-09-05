CREATE TABLE `spartanshub`.
   `client_reg` ( `id` INT NOT NULL AUTO_INCREMENT ,
   `cli_field` VARCHAR(50) NOT NULL ,
   `cli_name` VARCHAR(50) NOT NULL ,
   `cli_domain` VARCHAR(50) NOT NULL ,
   `cli_email` VARCHAR(50) NOT NULL ,
   `cli_state` VARCHAR(20) NOT NULL ,
   `cli_services` VARCHAR(20) NOT NULL ,
   `cli_contact` VARCHAR(20) NOT NULL ,
   `cli_agr` VARCHAR(50) NOT NULL ,
   `cli_img` VARCHAR(50) NOT NULL ,
   `cli_dor` VARCHAR(50) NOT NULL ,
   `cli_about` VARCHAR(500) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
