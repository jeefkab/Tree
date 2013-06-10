-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 10 มิ.ย. 2013  น.
-- รุ่นของเซิร์ฟเวอร์: 5.0.45
-- รุ่นของ PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `treedb`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `board`
-- 

CREATE TABLE `board` (
  `board_id` int(11) NOT NULL auto_increment,
  `board_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `customer_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `board_time` date NOT NULL,
  PRIMARY KEY  (`board_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- dump ตาราง `board`
-- 

INSERT INTO `board` VALUES (1, 'ลองดูอีกที', 'สมชาย', '2012-11-20');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `boardanswer`
-- 

CREATE TABLE `boardanswer` (
  `boardanswer_id` int(11) NOT NULL auto_increment,
  `board_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `boardanswer_detail` varchar(50) collate utf8_unicode_ci NOT NULL,
  `customer_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `boardanswer_time` date NOT NULL,
  PRIMARY KEY  (`boardanswer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `boardanswer`
-- 

INSERT INTO `boardanswer` VALUES (1, 'ลองดูอีกที', 'ทำดูสิว่ามันได้ไหม', 'โจ', '0000-00-00');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `customer`
-- 

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL auto_increment,
  `customer_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `customer_lname` varchar(50) collate utf8_unicode_ci NOT NULL,
  `customer_username` varchar(50) collate utf8_unicode_ci NOT NULL,
  `customer_password` varchar(10) collate utf8_unicode_ci NOT NULL,
  `customer_sex` varchar(5) collate utf8_unicode_ci NOT NULL,
  `customer_email` varchar(50) collate utf8_unicode_ci NOT NULL,
  `customer_addres` varchar(100) collate utf8_unicode_ci NOT NULL,
  `customer_tell` varchar(20) collate utf8_unicode_ci NOT NULL,
  `customer_career` varchar(20) collate utf8_unicode_ci NOT NULL,
  `customer_status` varchar(10) collate utf8_unicode_ci NOT NULL,
  `customer_picture` varchar(50) collate utf8_unicode_ci NOT NULL,
  `id_status` varchar(1) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- dump ตาราง `customer`
-- 

INSERT INTO `customer` VALUES (0, 'พงษ์พัฒน์', 'งามทรัพย์', 'jo', '123456', 'ชาย', 'daekvit@hotmail.com', '96/1 หมู่ที่ 7 ตำบล โนนห้อม อำเภอ เมือง จังหวัดปราจีนบุรี 25000', '0852815119', 'เกษตรกร', '', '', '');
INSERT INTO `customer` VALUES (4, 'พงษ์พัฒน์', 'งามทรัพย์', 'jo', '123456', 'ชาย', 'daekvit@hotmail.com', '96/1 หมู่ที่ 7 ตำบล โนนห้อม อำเภอ เมือง จังหวัดปราจีนบุรี 25000', '0852815119', 'เกษตรกร', '', '', '');
INSERT INTO `customer` VALUES (5, 'พงษ์พัฒน์', 'งามทรัพย์', 'jo', '123456', 'ชาย', 'daekvit@hotmail.com', '96/1 หมู่ที่ 7 ตำบล โนนห้อม อำเภอ เมือง จังหวัดปราจีนบุรี 25000', '0852815119', 'เกษตรกร', '', '', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `product`
-- 

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL auto_increment,
  `product_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `product_type` varchar(50) collate utf8_unicode_ci NOT NULL,
  `product_des` varchar(100) collate utf8_unicode_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_stock` int(10) NOT NULL,
  `product_picture` varchar(50) collate utf8_unicode_ci NOT NULL,
  `product_status` varchar(1) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

-- 
-- dump ตาราง `product`
-- 

INSERT INTO `product` VALUES (0, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1', 50, 600, '', '');
INSERT INTO `product` VALUES (2, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1 เsdasa', 50, 600, '', '1');
INSERT INTO `product` VALUES (3, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1 เsdasa', 50, 600, '', '1');
INSERT INTO `product` VALUES (4, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1 เsdasa', 50, 600, '', '1');
INSERT INTO `product` VALUES (5, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1 เsdasa', 50, 600, '', '1');
INSERT INTO `product` VALUES (6, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1 เsdasa', 50, 600, '', '1');
INSERT INTO `product` VALUES (7, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1 เsdasa', 50, 600, '', '0');
INSERT INTO `product` VALUES (8, 'โมขพวง', 'ไม้ดอก', 'ดอกมีสีขาวส่งกลิ่นหอม ดอกมีชั้นเดียว มีความสูง 1 เsdasa', 50, 600, '', '1');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `producttype`
-- 

CREATE TABLE `producttype` (
  `producttype_id` int(11) NOT NULL auto_increment,
  `producttype_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `producttype_status` varchar(1) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`producttype_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `producttype`
-- 

INSERT INTO `producttype` VALUES (1, 'ไม้ดอก แก้ได้แล้วนะ', '1');
INSERT INTO `producttype` VALUES (2, 'ไม้ประดับ', '1');
INSERT INTO `producttype` VALUES (3, 'อุปกรณ์', '1');
INSERT INTO `producttype` VALUES (4, 'ไม้เลื้อย', '0');
INSERT INTO `producttype` VALUES (5, 'ไม้พุ่ม', '0');
INSERT INTO `producttype` VALUES (6, 'ๅๅๅๅๅๅๅ', '0');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `promo`
-- 

CREATE TABLE `promo` (
  `promo_id` int(11) NOT NULL auto_increment,
  `promo_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `promo_des` varchar(200) collate utf8_unicode_ci NOT NULL,
  `promo_time` date NOT NULL,
  `promo_status` varchar(1) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`promo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=126 ;

-- 
-- dump ตาราง `promo`
-- 

INSERT INTO `promo` VALUES (1, 'วันพิเศษ ราคาพิเศษ', 'ในวันคล้ายวันเกิดของคุณเรามีส่วนลดให้ 20%', '0000-00-00', '1');
INSERT INTO `promo` VALUES (2, 'ซื้อ 3 แถม 1', 'ซื้อต้นดอกมะลิ 3 ต้น เราเเถมต้นมะลิฟรีอีก 1 ต้น', '2012-12-30', '1');
INSERT INTO `promo` VALUES (123, 'นานมาที', 'ไม่ได้มานาน', '0000-00-00', '1');
INSERT INTO `promo` VALUES (124, '$promo_name', '$promo_des', '0000-00-00', '0');
INSERT INTO `promo` VALUES (125, 'มาอีกเหละ', 'มาได้มาอีกนะ', '0000-00-00', '0');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `shop`
-- 

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL auto_increment,
  `customer_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `shop_namet` varchar(50) collate utf8_unicode_ci NOT NULL,
  `shop_number` int(11) NOT NULL,
  `shop_price` int(11) NOT NULL,
  `shop_time` date NOT NULL,
  `shop_p` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`shop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `shop`
-- 

INSERT INTO `shop` VALUES (1, 'สมชาย', 'ต้นโมก', 150, 58, '2012-09-30', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `stock`
-- 

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL auto_increment,
  `stock_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `stock_time` date NOT NULL,
  `stock_in` int(11) NOT NULL,
  `stock_out` int(11) NOT NULL,
  `stock_remain` int(11) NOT NULL,
  PRIMARY KEY  (`stock_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `stock`
-- 

INSERT INTO `stock` VALUES (1, 'ดอกมะลิ', '2012-09-29', 150, 100, 50);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tip`
-- 

CREATE TABLE `tip` (
  `tip_id` int(11) NOT NULL,
  `tip_name` varchar(10) collate utf8_unicode_ci NOT NULL,
  `tip_des` varchar(50) collate utf8_unicode_ci NOT NULL,
  `tip_picture` varchar(50) collate utf8_unicode_ci NOT NULL,
  `tip_time` date NOT NULL,
  `tip_status` varchar(1) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`tip_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `tip`
-- 

INSERT INTO `tip` VALUES (0, 'การปลูก', 'ปลูกในดิน', '', '0000-00-00', '1');
INSERT INTO `tip` VALUES (12, '12qes', 'weasdwr', '', '0000-00-00', '1');
INSERT INTO `tip` VALUES (3, 'การปลูกกไก', 'ดหกดดหกดหกดหก', '', '0000-00-00', '1');
