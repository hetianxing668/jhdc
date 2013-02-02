<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_scores`;");
E_C("CREATE TABLE `dede_scores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titles` char(15) NOT NULL,
  `icon` smallint(6) unsigned DEFAULT '0',
  `integral` int(10) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `integral` (`integral`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `dede_scores` values('2','列兵','1','0','1');");
E_D("replace into `dede_scores` values('3','班长','2','1000','1');");
E_D("replace into `dede_scores` values('4','少尉','3','2000','1');");
E_D("replace into `dede_scores` values('5','中尉','4','3000','1');");
E_D("replace into `dede_scores` values('6','上尉','5','4000','1');");
E_D("replace into `dede_scores` values('7','少校','6','5000','1');");
E_D("replace into `dede_scores` values('8','中校','7','6000','1');");
E_D("replace into `dede_scores` values('9','上校','8','9000','1');");
E_D("replace into `dede_scores` values('10','少将','9','14000','1');");
E_D("replace into `dede_scores` values('11','中将','10','19000','1');");
E_D("replace into `dede_scores` values('12','上将','11','24000','1');");
E_D("replace into `dede_scores` values('15','大将','12','29000','1');");

require("../../inc/footer.php");
?>