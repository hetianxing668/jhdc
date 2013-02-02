<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arccache`;");
E_C("CREATE TABLE `dede_arccache` (
  `md5hash` char(32) NOT NULL DEFAULT '',
  `uptime` int(11) NOT NULL DEFAULT '0',
  `cachedata` mediumtext,
  PRIMARY KEY (`md5hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_arccache` values('53e051a257264a2f0c569159abad9f71','1359798769','34,33,32,31');");
E_D("replace into `dede_arccache` values('6f22049b5495b4fc4042a63b56fb6861','1359798769','2');");
E_D("replace into `dede_arccache` values('a2c1d18dfe484c63e0de33eed40db6b0','1359798769','21,20,19,18,17,16,15,14,13,12');");

require("../../inc/footer.php");
?>