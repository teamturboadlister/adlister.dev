<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE ads");

$statement = "INSERT INTO ads (user_id, name, price, date_posted, description, availability_status, pick_up_location, category, sub_category, image) VALUES 
('1', 'Mythril Mail', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Chainmail', 'image'),
('4', 'King\'s Crested Shield', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Shield', 'image'),
('3', 'Baby Boots, Never Worn', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Boots', 'image'),
('5', 'Hate Mail', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Chainmail', 'image'),
('1', 'Kingslayer', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Sword', 'image'),
('3', 'Kylrugh\'r', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Mace', 'image'),
('1', 'Elderwood Bow', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Bow', 'image'),
('5', 'Hemlock For The Weary', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Ale', 'image'),
('1', 'Venom', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Mead', 'image'),
('4', 'Serf Brew', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Ale', 'image'),
('2', 'Abel', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Sheep', 'image'),
('1', 'Olde Boy', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Horse', 'image'),
('1', 'Dozen of Chicks', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Chicken', 'image'),
('2', 'Food Goblin FOR SALE', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Pig', 'image'),
('5', 'Ye Olde Hoe', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Tool', 'Hoe', 'image'),
('2', 'For sheep and stubborn beards', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Tool', 'Shears', 'image'),
('4', 'Dream Gal', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Iron Maiden', 'image'),
('2', 'Eat Cake', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Guillotine', 'image'),
('2', 'Simple Shackles', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Chains', 'image')";

$connection->exec($statement);

echo "values added".PHP_EOL;