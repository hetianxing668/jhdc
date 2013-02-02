<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_shops_delivery`;");
E_C("CREATE TABLE `dede_shops_delivery` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dname` char(80) NOT NULL,
  `price` float(13,2) NOT NULL DEFAULT '0.00',
  `des` char(255) DEFAULT NULL,
  `orders` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`),
  KEY `orders` (`orders`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `dede_shops_delivery` values('1','送货上门','10.21','送货上门,领取商品时付费.','0');");
E_D("replace into `dede_shops_delivery` values('2','特快专递（EMS）','25.00','特快专递（EMS）,要另收手续费.','0');");
E_D("replace into `dede_shops_delivery` values('3','普通邮递','5.00','普通邮递','0');");
E_D("replace into `dede_shops_delivery` values('4','邮局快邮','12.00','邮局快邮','0');");

require("../../inc/footer.php");
?>