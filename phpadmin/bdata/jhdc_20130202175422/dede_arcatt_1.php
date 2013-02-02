<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arcatt`;");
E_C("CREATE TABLE `dede_arcatt` (
  `sortid` smallint(6) NOT NULL DEFAULT '0',
  `att` char(10) NOT NULL DEFAULT '',
  `attname` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`att`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_arcatt` values('5','s','滚动');");
E_D("replace into `dede_arcatt` values('1','h','头条');");
E_D("replace into `dede_arcatt` values('3','f','幻灯');");
E_D("replace into `dede_arcatt` values('2','c','推荐');");
E_D("replace into `dede_arcatt` values('7','p','图片');");
E_D("replace into `dede_arcatt` values('8','j','跳转');");
E_D("replace into `dede_arcatt` values('4','a','特荐');");
E_D("replace into `dede_arcatt` values('6','b','加粗');");

require("../../inc/footer.php");
?>