<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_member_stowtype`;");
E_C("CREATE TABLE `dede_member_stowtype` (
  `stowname` varchar(30) NOT NULL,
  `indexname` varchar(30) NOT NULL,
  `indexurl` varchar(50) NOT NULL,
  PRIMARY KEY (`stowname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_member_stowtype` values('sys','系统收藏','archives_do.php');");
E_D("replace into `dede_member_stowtype` values('book','小说收藏','/book/book.php?bid');");

require("../../inc/footer.php");
?>