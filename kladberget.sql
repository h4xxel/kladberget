-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny6
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 29 oktober 2010 kl 15:03
-- Serverversion: 5.0.51
-- PHP-version: 5.2.6-1+lenny9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Databas: `kladberget`
--

-- --------------------------------------------------------

--
-- Struktur för tabell `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(20) collate utf8_bin NOT NULL,
  `description` text collate utf8_bin NOT NULL,
  `size` varchar(64) collate utf8_bin NOT NULL default 'S,M,L,XL',
  `color` varchar(128) collate utf8_bin NOT NULL default 'Black,White,Red,Blue,Yellow,Green',
  `price` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Data i tabell `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `size`, `color`, `price`) VALUES
(1, 'Hat', 0x41207761726d20666c656563652068617420666f7220636f6c6420646179732e, 'S,M', 'Black,Beige,Blue', 14.99),
(2, 'Mittens', 0x5761726d206d697474656e73206d61646520696e20666c656563652e205374726f6e6720616e642064757261626c652e, 'S,M', 'Brown,White,Red', 13.4),
(3, 'Vest', 0x4c61746573742066617368696f6e2066726f6d204b6c2661756d6c3b646265726765742e205472656e6479207665737420746861742077696c6c206b65657020796f75207761726d20696e2074686520617574756d6e732e, 'S,M,L', 'Black', 31),
(4, 'Jacket', 0x536f66742d7368656c6c206a61636b65742c2077696e6420616e6420776174657220726573697374616e742e, 'S,M,L,XL', 'Black,Green', 74.5),
(5, 'Pullover', 0x5761726d2070756c6c6f76657220696e207374726574636879206661627269632e2039302520636f74746f6e2c2031302520706f6c7965737465722e, 'S,M,L,XL', 'Gray,White,Blue', 24.6),
(6, 'Shirt', 0x436f6e666f727461626c6520616e64207472656e64792073686972742e205769646520736c65657665732e, 'S,M,L,XL', 'Black,White,Gray', 18.99),
(7, 'Towel', 0x4c6172676520746572727920746f77656c732e20476f6f6420736f616b696e67206361626162696c6974792e, 'L', 'Blue,Yellow,Green,White', 15.2),
(8, 'Pants', 0x436f6e666f727461626c6520616e642070726163746963616c2e2057697468206272616365732e, 'M,L,XL', 'Khaki,Blue', 41.7),
(9, 'Shorts', 0x53686f72742073686f72747320666f72207761726d20646179732e20576974682068697020706f636b6574732e, 'S,M,L,XL', 'Black,Red,Blue,Yellow,Green', 20),
(10, 'Sun Hat', 0x50726f746563747320796f7572206661636520616e64206e65636b2066726f6d2067657474696e67206275726e7420696e207468652073756e2e, 'S,M,L', 'Red,Blue,Yellow,Green', 12.9),
(11, 'Backpack', 0x53706163696f757320616e642063616e666f727461626c652e20576974682077616973742073747261702e, 'M', 'Black,Blue', 34.8),
(12, 'Bag', 0x456173696c7920666974732061206c6170746f7020616e6420646f63756d656e7420666f6c646572732e205065726665637420666f7220746865206d6f76696e6720627573696e6573736d616e2e, 'M', 'Black', 51.5);

