<?php
$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';
$connection->exec("TRUNCATE ads");
$statement = "INSERT INTO ads (user_id, name, price, date_posted, description, availability_status, pick_up_location, category, sub_category, image) VALUES 
('1', 'Mythril Mail', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Chainmail', 'https://cdn.filestackcontent.com/q163SxGTo6pe6PPSZYNQ'),
('4', 'King\'s Crested Shield', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Shield', 'https://cdn.filestackcontent.com/rifdcy0STipDiBkwWali'),
('3', 'Baby Boots, Never Worn', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Boots', 'https://cdn.filestackcontent.com/QWXD03WhTnySh3ZOMJZl'),
('5', 'Hate Mail', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Armor', 'Chainmail', 'https://cdn.filestackcontent.com/y7oxFDMSQm9FkfZHXGiR'),
('1', 'Kingslayer', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Sword', 'https://cdn.filestackcontent.com/L8ZJCdTGTIqno2y4orcS'),
('3', 'Kylrugh\'r', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Mace', 'https://cdn.filestackcontent.com/psa9zYgQZuZ4k8eVW1cw'),
('1', 'Elderwood Bow', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Weapon', 'Bow', 'https://cdn.filestackcontent.com/nqEenvtsR9WsNC92RwpN'),
('5', 'Hemlock For The Weary', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Ale', 'https://cdn.filestackcontent.com/e919feTpqk168JjpX6sQ'),
('1', 'Venom', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Mead', 'https://cdn.filestackcontent.com/5ftCa2wFRWW3Qs0TzMq5'),
('4', 'Serf Brew', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Drink', 'Ale', 'https://cdn.filestackcontent.com/n74J21peShqmSjXmLL5c'),
('2', 'Abel', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Sheep', 'https://cdn.filestackcontent.com/QN7x4FPRSIGi2iIo3DaQ'),
('1', 'Olde Boy', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Horse', 'https://cdn.filestackcontent.com/dU3qC3vsRX2nBCrzYC4I'),
('1', 'Dozen of Chicks', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Chicken', 'https://cdn.filestackcontent.com/uN6EeL2qRMmmYhSRQ70o'),
('2', 'Food Goblin FOR SALE', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Livestock', 'Pig', 'https://cdn.filestackcontent.com/PHuHyFE3TRiVIn0ssZcm'),
('5', 'Ye Olde Hoe', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Tool', 'Hoe', 'https://cdn.filestackcontent.com/1ePKmG5TWSPfspvjoiSZ'),
('2', 'For sheep and stubborn beards', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Tool', 'Shears', 'https://cdn.filestackcontent.com/eWodMWYCQyQasxt3DQ2X'),
('4', 'Dream Gal', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Iron Maiden', 'https://cdn.filestackcontent.com/lUpNANM3R2RIV5bxBdNF'),
('2', 'Eat Cake', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Guillotine', 'https://cdn.filestackcontent.com/RuxS6HRcimDxOy6fyQ2M'),
('2', 'Simple Shackles', 100, '2000-01-01', 'This is, in fact, an item for sale.', 'available', 'ye olde kingdom', 'Torture', 'Chains', 'https://cdn.filestackcontent.com/bl38vdPvQlWgCv1ap2Qt')";
$connection->exec($statement);
echo "values added".PHP_EOL;