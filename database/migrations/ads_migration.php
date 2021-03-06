
<?php
$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';
$connection->exec('DROP TABLE IF EXISTS ads');
$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(240) NOT NULL,
    price INT NOT NULL,
    date_posted DATE NOT NULL,
    description VARCHAR(255) NOT NULL,
    availability_status VARCHAR(100) NOT NULL,
    pick_up_location VARCHAR(255)NOT NULL,
    category VARCHAR(240) NOT NULL,
    sub_category VARCHAR(240) NOT NULL,
    image VARCHAR(64) NOT NULL,
    PRIMARY KEY (id)
)';
$connection->exec($query);