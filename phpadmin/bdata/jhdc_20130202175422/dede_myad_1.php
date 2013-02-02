<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_myad`;");
E_C("CREATE TABLE `dede_myad` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `clsid` smallint(5) NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagname` varchar(30) NOT NULL DEFAULT '',
  `adname` varchar(60) NOT NULL DEFAULT '',
  `timeset` smallint(6) NOT NULL DEFAULT '0',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `normbody` text,
  `expbody` text,
  PRIMARY KEY (`aid`),
  KEY `tagname` (`tagname`,`typeid`,`timeset`,`endtime`,`starttime`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `dede_myad` values('1','0','0','indexTopBanner1','首页顶部导航大图-500*60','0','1297933028','1300525028','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=fronttopbanner&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('2','0','0','indexTopBanner2','首页顶部导航小图-200*60','0','1297933605','1300525605','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=fronttopbanner2&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('3','0','0','innerTopBanner1','(频道/列表)顶部导航大图-500*60','0','1297934052','1300526052','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=innertopbanner1&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('4','0','0','innerTopBanner2','(频道/列表)顶部导航小图-200*60','0','1297934104','1300526104','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=innertopbanner2&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('5','0','0','indexLeftBanner','首页左侧大图广告-712*75','0','1297934791','1300526791','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=indexleftbanner&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('6','0','0','indexRightLitpic1','首页右侧小块图1-240*65','0','1297936106','1300528106','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=indexrtlitpic1&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('7','0','0','indexRightLitpic2','首页右侧小块图2-240*65','0','1297936768','1300528768','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=indexrtlitpic2&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('8','0','0','indexfooterAD','首页底部图片广告-726*91','0','1297937814','1300529814','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=indexfooterad&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('9','0','0','innerfooterAD','(频道/列表)底部图片广告-726*91','0','1297991183','1300583183','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=innerfooterad&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('10','0','0','innerfooterAD2','内容底部图片广告-726*91','0','1297991709','1300583709','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=innerfooterad2&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('11','0','0','listRtPicAD','(频道/列表)右侧图片广告-240*200','0','1297992254','1300584254','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=listrtpicad&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('12','0','0','contentRtPicAD','内容右侧图片广告-240*200','0','1297995082','1300587082','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=contentrtpicad&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('13','0','0','listRtPicAD2','(频道/列表)右侧图片广告2-240*200','0','1297996543','1300588543','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=listrtpicad2&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('14','0','0','contentRtPicAD2','内容右侧图片广告2-240*200','0','1297997106','1300589106','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=contentrtpicad2&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('15','0','0','contentMidPicAD','内容页内容中广告-300*250','0','1297997971','1300589971','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=contentmidpicad&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('16','0','0','searchPicAD','搜索页右侧广告-300*268','0','1297999720','1300591720','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=searchpicad&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('17','0','0','indexRtpicAd3','首页右侧图片广告-240*200','0','1298000077','1300592077','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=indexrtpicad3&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('18','0','0','searchTopBanner','搜索页面顶部banner广告-300*40','0','1298012954','1300604954','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=searchtopbanner&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('19','0','0','contentTopBanner1','内容顶部导航大图-500*60','0','1298017655','1300609655','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=ctenttpbanner1&charset=gbk\"></script>','');");
E_D("replace into `dede_myad` values('20','0','0','contentTopBanner2','内容顶部导航小图-200*60','0','1298017688','1300609688','<script type=\"text/javascript\" src=\"http://ad.dedecms.com/adsview/?action=single&key=ctenttpbanner2&charset=gbk\"></script>','');");

require("../../inc/footer.php");
?>