<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_flinktype`;");
E_C("CREATE TABLE `dede_flinktype` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `dede_flinktype` values('1','综合网站');");
E_D("replace into `dede_flinktype` values('2','娱乐类');");
E_D("replace into `dede_flinktype` values('3','教育类');");
E_D("replace into `dede_flinktype` values('4','计算机类');");
E_D("replace into `dede_flinktype` values('5','电子商务');");
E_D("replace into `dede_flinktype` values('6','网上信息');");
E_D("replace into `dede_flinktype` values('7','论坛类');");
E_D("replace into `dede_flinktype` values('8','其它类型');");

require("../../inc/footer.php");
?>