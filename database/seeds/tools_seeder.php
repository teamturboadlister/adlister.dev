<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE tools");

$statement = "INSERT INTO tools (user_id, name, sub_category) VALUES (:user_id, :name, :sub_category)";

$preparedStatement = $connection->prepare($statement);

echo "values added".PHP_EOL;