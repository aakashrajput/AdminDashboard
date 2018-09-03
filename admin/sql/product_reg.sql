CREATE TABLE `spartanshub`.
   `products` ( `id` INT NOT NULL AUTO_INCREMENT ,
   `pname` VARCHAR(50) NOT NULL ,
   `pcategory` VARCHAR(50) NOT NULL ,
   `phead` VARCHAR(50) NOT NULL ,
   `doi` VARCHAR(20) NOT NULL ,
   `pinfo` VARCHAR(500) NOT NULL ,
   `byName` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
