CREATE TABLE `spartanshub`.
   `employee_reg` ( `id` INT NOT NULL AUTO_INCREMENT ,
   `emp_name` VARCHAR(50) NOT NULL ,
   `emp_domain` VARCHAR(50) NOT NULL ,
   `emp_email` VARCHAR(50) NOT NULL ,
   `emp_state` VARCHAR(20) NOT NULL ,
   `emp_contact` VARCHAR(20) NOT NULL ,
   `emp_cv` VARCHAR(50) NOT NULL ,
   `emp_img` VARCHAR(50) NOT NULL ,
   `emp_dor` VARCHAR(50) NOT NULL ,
   `emp_about` VARCHAR(500) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
