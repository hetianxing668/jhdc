<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_sys_module`;");
E_C("CREATE TABLE `dede_sys_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hashcode` char(32) NOT NULL DEFAULT '',
  `modname` varchar(30) NOT NULL DEFAULT '',
  `indexname` varchar(20) NOT NULL DEFAULT '',
  `indexurl` varchar(30) NOT NULL DEFAULT '',
  `ismember` tinyint(4) NOT NULL DEFAULT '1',
  `menustring` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `dede_sys_module` values('1','0cce60bc0238aa03804682c801584991','百度新闻','','','0','');");
E_D("replace into `dede_sys_module` values('2','1f35620fb42d452fa2bdc1dee1690f92','文件管理器','','','0','');");
E_D("replace into `dede_sys_module` values('3','72ffa6fabe3c236f9238a2b281bc0f93','广告管理','','','0','');");
E_D("replace into `dede_sys_module` values('4','b437d85a7a7bc778c9c79b5ec36ab9aa','友情链接','','','0','');");
E_D("replace into `dede_sys_module` values('5','acb8b88eb4a6d4bfc375c18534f9439e','投票模块','','','0','');");
E_D("replace into `dede_sys_module` values('6','572606600345b1a4bb8c810bbae434cc','挑错管理','','','0','');");

require("../../inc/footer.php");
?>