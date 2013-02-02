<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arctype`;");
E_C("CREATE TABLE `dede_arctype` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `reid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `topid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sortrank` smallint(5) unsigned NOT NULL DEFAULT '50',
  `typename` char(30) NOT NULL DEFAULT '',
  `typedir` char(60) NOT NULL DEFAULT '',
  `isdefault` smallint(6) NOT NULL DEFAULT '0',
  `defaultname` char(15) NOT NULL DEFAULT 'index.html',
  `issend` smallint(6) NOT NULL DEFAULT '0',
  `channeltype` smallint(6) DEFAULT '1',
  `maxpage` smallint(6) NOT NULL DEFAULT '-1',
  `ispart` smallint(6) NOT NULL DEFAULT '0',
  `corank` smallint(6) NOT NULL DEFAULT '0',
  `tempindex` char(50) NOT NULL DEFAULT '',
  `templist` char(50) NOT NULL DEFAULT '',
  `temparticle` char(50) NOT NULL DEFAULT '',
  `namerule` char(50) NOT NULL DEFAULT '',
  `namerule2` char(50) NOT NULL DEFAULT '',
  `modname` char(20) NOT NULL DEFAULT '',
  `description` char(150) NOT NULL DEFAULT '',
  `keywords` varchar(60) NOT NULL DEFAULT '',
  `seotitle` varchar(80) NOT NULL DEFAULT '',
  `moresite` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sitepath` char(60) NOT NULL DEFAULT '',
  `siteurl` char(50) NOT NULL DEFAULT '',
  `ishidden` smallint(6) NOT NULL DEFAULT '0',
  `cross` tinyint(1) NOT NULL DEFAULT '0',
  `crossid` text,
  `content` text,
  `smalltypes` text,
  PRIMARY KEY (`id`),
  KEY `reid` (`reid`,`isdefault`,`channeltype`,`ispart`,`corank`,`topid`,`ishidden`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `dede_arctype` values('1','0','0','1','关于玖号洞藏','{cmspath}/about','1','index.html','1','1','-1','1','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','关于玖号洞藏','0','{cmspath}/about','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('2','0','0','2','玖号洞藏特产','{cmspath}/specialty','1','index.html','1','17','-1','0','0','{style}/index_article_product.htm','{style}/list_article_product.htm','{style}/article_article_product.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','玖号洞藏特产','0','{cmspath}/specialty','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('3','0','0','3','酒文化','{cmspath}/culture','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','酒文化','0','{cmspath}/culture','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('4','2','2','0','私藏酒','{cmspath}/scj','1','index.html','1','17','-1','0','0','{style}/index_article_product.htm','{style}/list_article_product.htm','{style}/article_article_product.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','私藏酒','0','{cmspath}/specialty','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('5','2','2','1','私房酒','{cmspath}/sfj','1','index.html','1','17','-1','0','0','{style}/index_article_product.htm','{style}/list_article_product.htm','{style}/article_article_product.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','私房酒','0','{cmspath}/specialty','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('6','2','2','2','定制酒','{cmspath}/dzj','1','index.html','1','17','-1','0','0','{style}/index_article_product.htm','{style}/list_article_product.htm','{style}/article_article_product.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','定制酒','0','{cmspath}/specialty','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('7','2','2','3','喜酒','{cmspath}/xj','1','index.html','1','17','-1','0','0','{style}/index_article_product.htm','{style}/list_article_product.htm','{style}/article_article_product.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','喜酒','0','{cmspath}/specialty','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('8','2','2','4','寿酒','{cmspath}/sj','1','index.html','1','17','-1','0','0','{style}/index_article_product.htm','{style}/list_article_product.htm','{style}/article_article_product.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','寿酒','0','{cmspath}/specialty','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('9','2','2','5','赖茅','{cmspath}/lm','1','index.html','1','17','-1','0','0','{style}/index_article_product.htm','{style}/list_article_product.htm','{style}/article_article_product.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','赖茅','0','{cmspath}/specialty','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('10','0','0','5','酒视频中心','{cmspath}/video','1','index.html','1','18','-1','0','0','{style}/index_article_video.htm','{style}/list_article_video.htm','{style}/article_article_video.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','酒视频中心','0','{cmspath}/video','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('11','0','0','6','招贤纳士','{cmspath}/hr','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','招贤纳士','0','','','0','0','0','','');");
E_D("replace into `dede_arctype` values('12','0','0','7','购买须知','{cmspath}/gmxz','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','购买须知','0','','','0','0','0','','');");
E_D("replace into `dede_arctype` values('13','4','4','1','酱香型','{cmspath}/jxx','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','酱香型','0','{cmspath}/specialty','','0','0','0','','');");
E_D("replace into `dede_arctype` values('14','4','4','2','浓香型','{cmspath}/nxx','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','浓香型','0','{cmspath}/specialty','','0','0','0','','');");
E_D("replace into `dede_arctype` values('15','9','9','1','赖茅历史','{cmspath}/history','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','赖茅历史','0','{cmspath}/specialty','','0','0','0','','');");
E_D("replace into `dede_arctype` values('16','9','9','2','赖茅工艺','{cmspath}/lmgy','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','赖茅工艺','0','{cmspath}/specialty','','0','0','0','','');");
E_D("replace into `dede_arctype` values('17','9','9','3','赖茅产品','{cmspath}/lmcp','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','赖茅产品','0','{cmspath}/specialty','','0','0','0','','');");
E_D("replace into `dede_arctype` values('18','0','0','4','新闻资讯','{cmspath}/news','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('19','18','18','1','公司动态','{cmspath}/gsdt','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','公司动态','0','','','0','0','0','&nbsp;','');");
E_D("replace into `dede_arctype` values('20','18','18','2','行业动态','{cmspath}/hydt','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','行业动态','0','','','0','0','0','','');");
E_D("replace into `dede_arctype` values('21','18','18','3','茅台旧闻','{cmspath}/mtjw','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','茅台旧闻','0','','','0','0','0','','');");
E_D("replace into `dede_arctype` values('22','1','1','1','公司简介','{cmspath}/about','1','index.html','1','1','-1','1','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','公司简介','0','{cmspath}/about','','0','0','0','&nbsp;<img alt=\"\" src=\"/uploads/allimg/130202/1-130202162605C3.png\" style=\"width: 709px; height: 342px;\" /><br />\r\n<strong>企业介绍</strong><strong>：</strong><br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;<strong>重庆骏盛商贸有限公司</strong><strong>，</strong>是一家专注于酱香型白酒产品研究、开发、生产和销售的国际知名健康酒业企业。传承千年基业，缔造现代经典，从尊重开始，诠释了天然酿酒基材的自然本真；从尊重开始，最流行的酱香元素得以释放梦想。&ldquo;玖号洞藏&rdquo;是为成功团队和个人打造的专属定制品牌。','');");
E_D("replace into `dede_arctype` values('23','1','1','2','企业文化','{cmspath}/qywh','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','企业文化','0','{cmspath}/about','','0','0','0','','');");
E_D("replace into `dede_arctype` values('24','1','1','3','核心优势','{cmspath}/hxys','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','核心优势','0','{cmspath}/about','','0','0','0','','');");
E_D("replace into `dede_arctype` values('25','1','1','4','合作伙伴','{cmspath}/partners','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','合作伙伴','0','{cmspath}/about','','0','0','0','','');");
E_D("replace into `dede_arctype` values('26','1','1','50','联系洞藏','{cmspath}/about/contact','1','index.html','1','1','-1','1','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/about','','0','0','','&nbsp;<img alt=\"\" src=\"/uploads/allimg/130202/1-130202162302116.png\" style=\"width: 647px; height: 650px;\" /><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-130202162321530.png\" style=\"width: 692px; height: 654px;\" /><img alt=\"\" src=\"/uploads/allimg/130202/1-13020216234c64.png\" style=\"width: 526px; height: 508px;\" /><br />\r\n<br />\r\n余辉 网络营销<br />\r\n15723147125<br />\r\n联系电话：68009395','');");
E_D("replace into `dede_arctype` values('27','1','1','50','洞藏LOGO','{cmspath}/about/logo','1','index.html','1','1','-1','1','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/about','','0','0','','【<strong>玖号洞藏酒</strong><strong>-</strong><strong>图标</strong>】<br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-13020216325HE.jpg\" style=\"width: 553px; height: 484px;\" /><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-1302021633125E.jpg\" style=\"width: 553px; height: 484px;\" /><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-1302021633402X.jpg\" style=\"width: 553px; height: 395px;\" /><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-130202163350594.jpg\" style=\"width: 553px; height: 395px;\" /><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-130202163405138.jpg\" style=\"width: 553px; height: 394px;\" />','');");
E_D("replace into `dede_arctype` values('28','0','0','50','首页幻灯片','{cmspath}/sliders','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{Y}/{M}{D}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','','0','{cmspath}/sliders','','1','0','','&nbsp;','');");

require("../../inc/footer.php");
?>