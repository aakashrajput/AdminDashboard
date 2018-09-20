CREATE TABLE `spartanshub`.
   `services_reg` ( `id` INT NOT NULL AUTO_INCREMENT ,
   `sname` VARCHAR(50) NOT NULL ,
   `scname` VARCHAR(50) NOT NULL ,
   `scategory` VARCHAR(50) NOT NULL ,
   `shead` VARCHAR(50) NOT NULL ,
   `doi` VARCHAR(20) NOT NULL ,
   `sinfo` VARCHAR(500) NOT NULL ,
   `service_info` VARCHAR(500) NOT NULL ,
   `byName` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
