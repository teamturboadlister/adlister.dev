<?php

require_once __DIR__ . '/../../models/User.php';
require_once '../db_connect.php';


// $connection->exec("TRUNCATE users");
// $statement = "INSERT INTO  users(name, email, username, password) VALUES (:name, :email, :username, :password)
// $preparedStatement = $connection->prepare($statement);

$user = new User();
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User();
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User();
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User();
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User();
$user->name = 'Jen Ayala';
$user->email = 'jenayala1@email.com';
$user->username = "pandoran_elf";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User();
$user->name = 'Gonzolo Rodriguez';
$user->email = 'gonzolo@email.com';
$user->username = "vlad_the_impossible";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User();
$user->name = 'Emmanuelle Maher';
$user->email = 'emmanuelle@email.com';
$user->username = "the_iron_maiden";
$user->password = $_ENV['USER_PASS'];
$user->save();

echo "users added".PHP_EOL;
