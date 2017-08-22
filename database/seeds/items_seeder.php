<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE items");

$statement = "INSERT INTO items (user_id, name, category, sub_category) VALUES 
('1', 'Mythril Mail', 'Armor', 'Chainmail'),
('5', 'Custom-Made Gauntlets', 'Armor', 'Gauntlets'),
('2', 'Athlete\'s Boot (NOT THE WINE)', 'Armor', 'Boots'),
('4', 'King\'s Crested Shield', 'Armor', 'Shield'),
('3', 'Baby Boots, Never Worn', 'Armor', 'Boots'),
('3', 'Steel Helmet', 'Armor', 'Head Armor'),
('5', 'Hate Mail', 'Armor', 'Chainmail'),
('1', 'Kingslayer', 'Weapon', 'Sword'),
('3', 'Kylrugh\'r', 'Weapon', 'Mace'),
('2', 'Rogue\'s Delight', 'Weapon', 'Dagger'),
('1', 'Elderwood Bow', 'Weapon', 'Bow'),
('5', 'Dragonbreath', 'Weapon', 'Cannon'),
('5', 'Hemlock For The Weary', 'Drink', 'Ale'),
('4', 'Athlete\s Boot (NOT THE CONDITION)', 'Drink', 'Wine'),
('1', 'Venom', 'Drink', 'Mead'),
('4', 'Serf Brew', 'Drink', 'Ale'),
('2', 'Abel', 'Livestock', 'Sheep'),
('1', 'Olde Boy', 'Livestock', 'Horse'),
('1', 'Dozen of Chicks', 'Livestock', 'Chicken'),
('2', 'Food Goblin', 'Livestock', 'Pig'),
('5', 'Ye Olde Hoe', 'Tool', 'Hoe'),
('1', 'Scythe LIKE NEW', 'Tool', 'Scythe'),
('2', 'For sheep and stubborn beards', 'Tool', 'Shears'),
('4', 'Dream Gal', 'Torture', 'Iron Maiden'),
('2', 'Eat Cake', 'Torture', 'Guillotine'),
('5', 'Flogger\'s Friend', 'Torture', 'Pillory'),
('2', 'Simple Shackles', 'Torture', 'Chains')" ;

$connection->exec($statement);

echo "values added".PHP_EOL;