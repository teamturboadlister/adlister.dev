<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE ads");

$statement = "INSERT INTO ads (user_id, name, date_posted, price, description, availability_status, pick_up_location, category, sub_category, image) VALUES 
('1', 'Mythril Mail', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Chainmail'),
('5', 'Custom-Made Gauntlets', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Gauntlets'),
('2', 'Athlete\'s Boot (NOT THE WINE)', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Boots'),
('4', 'King\'s Crested Shield', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Shield'),
('3', 'Baby Boots, Never Worn', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Boots'),
('5', 'Hate Mail', date('Y-m-d'), 'Armor', 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Chainmail'),
('1', 'Kingslayer', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Sword'),
('3', 'Kylrugh\'r', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Mace'),
('1', 'Elderwood Bow', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Bow'),
('5', 'Hemlock For The Weary', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Ale'),
('4', 'Athlete\s Boot (NOT THE CONDITION)', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Wine'),
('1', 'Venom', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Mead'),
('4', 'Serf Brew', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Ale'),
('2', 'Abel', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Sheep'),
('1', 'Olde Boy', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Horse'),
('1', 'Dozen of Chicks', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Chicken'),
('2', 'Food Goblin FOR SALE', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Pig'),
('5', 'Ye Olde Hoe', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Tool', 'Hoe'),
('1', 'Scythe LIKE NEW', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Tool', 'Scythe'),
('2', 'For sheep and stubborn beards', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Tool', 'Shears'),
('4', 'Dream Gal', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Iron Maiden'),
('2', 'Eat Cake', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Guillotine'),
('5', 'Flogger\'s Friend', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Pillory'),
('2', 'Simple Shackles', date('Y-m-d'), 100, 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Chains')";

$connection->exec($statement);

echo "values added".PHP_EOL;