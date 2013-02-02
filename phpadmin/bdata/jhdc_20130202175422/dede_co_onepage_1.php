<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_co_onepage`;");
E_C("CREATE TABLE `dede_co_onepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(60) NOT NULL DEFAULT '',
  `title` varchar(60) NOT NULL DEFAULT '',
  `issource` smallint(6) NOT NULL DEFAULT '1',
  `lang` varchar(10) NOT NULL DEFAULT 'gb2312',
  `rule` text,
  PRIMARY KEY (`id`),
  KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `dede_co_onepage` values('5','www.dedecms.com','织梦网络','1','gb2312','<div class=\"content\">{@body}<div class=\"cupage\">');");
E_D("replace into `dede_co_onepage` values('4','www.techweb.com.cn','Techweb','1','gb2312','<div class=\"content_txt\">{@body}</div>	\n');");
E_D("replace into `dede_co_onepage` values('6','tw.news.yahoo.com','台湾雅虎','1','big5','<div id=\"ynwsartcontent\">{@body}</div>	\n');");

require("../../inc/footer.php");
?>