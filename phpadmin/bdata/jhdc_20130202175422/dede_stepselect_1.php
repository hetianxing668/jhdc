<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_stepselect`;");
E_C("CREATE TABLE `dede_stepselect` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `itemname` char(30) DEFAULT NULL,
  `egroup` char(20) DEFAULT NULL,
  `issign` tinyint(1) unsigned DEFAULT '0',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `dede_stepselect` values('1','血型','blood','1','1');");
E_D("replace into `dede_stepselect` values('2','体型','bodytype','1','1');");
E_D("replace into `dede_stepselect` values('3','公司规模','cosize','1','1');");
E_D("replace into `dede_stepselect` values('4','交友','datingtype','1','1');");
E_D("replace into `dede_stepselect` values('5','是否饮酒','drink','1','1');");
E_D("replace into `dede_stepselect` values('6','教育程度','education','1','1');");
E_D("replace into `dede_stepselect` values('7','住房','house','1','1');");
E_D("replace into `dede_stepselect` values('8','收入','income','1','1');");
E_D("replace into `dede_stepselect` values('9','婚姻','marital','1','1');");
E_D("replace into `dede_stepselect` values('10','是否抽烟','smoke','1','1');");
E_D("replace into `dede_stepselect` values('11','星座','star','1','1');");
E_D("replace into `dede_stepselect` values('12','系统缓存标识','system','1','1');");
E_D("replace into `dede_stepselect` values('13','行业','vocation','2','0');");
E_D("replace into `dede_stepselect` values('14','地区','nativeplace','2','0');");
E_D("replace into `dede_stepselect` values('15','信息类型','infotype','2','0');");

require("../../inc/footer.php");
?>