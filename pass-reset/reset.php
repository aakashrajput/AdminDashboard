<?php
$db->query( "CREATE TABLE IF NOT EXISTS password_reset (
        ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255),
        selector CHAR(16),
        token CHAR(64),
        expires BIGINT(20)
    )");
