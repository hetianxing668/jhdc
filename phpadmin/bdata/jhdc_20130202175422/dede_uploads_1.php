<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_uploads`;");
E_C("CREATE TABLE `dede_uploads` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `arcid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` char(60) NOT NULL DEFAULT '',
  `url` char(80) NOT NULL DEFAULT '',
  `mediatype` smallint(6) NOT NULL DEFAULT '1',
  `width` char(10) NOT NULL DEFAULT '',
  `height` char(10) NOT NULL DEFAULT '',
  `playtime` char(10) NOT NULL DEFAULT '',
  `filesize` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `memberid` (`mid`),
  KEY `arcid` (`arcid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `dede_uploads` values('1','2','私藏酒测试标题1','/uploads/130202/1-130202155ZTQ.jpg','1','219','190','0','41178','1359791948','1');");
E_D("replace into `dede_uploads` values('2','4','世界顶级名酒介绍','/uploads/allimg/130202/1-13020216004T07.png','1','790','565','0','128629','1359792048','1');");
E_D("replace into `dede_uploads` values('3','4','世界顶级名酒介绍','/uploads/allimg/130202/1-13020216013JO.png','1','793','568','0','204671','1359792097','1');");
E_D("replace into `dede_uploads` values('4','4','世界顶级名酒介绍','/uploads/allimg/130202/1-130202160240F5.png','1','795','471','0','118083','1359792160','1');");
E_D("replace into `dede_uploads` values('5','5','生日寿宴','/uploads/allimg/130202/1-13020216050A36.png','1','753','223','0','286377','1359792306','1');");
E_D("replace into `dede_uploads` values('6','7','腊八节节日文化','/uploads/allimg/130202/1-130202160A9545.jpg','1','184','221','0','14773','1359792419','1');");
E_D("replace into `dede_uploads` values('7','7','腊八节节日文化','/uploads/allimg/130202/1-130202160J3948.jpg','1','568','556','0','54921','1359792463','1');");
E_D("replace into `dede_uploads` values('8','7','腊八节节日文化','/uploads/allimg/130202/1-130202160R2329.jpg','1','644','553','0','78363','1359792502','1');");
E_D("replace into `dede_uploads` values('9','16','香槟“CHAMPAGNE”','/uploads/allimg/130202/1-1302021620122P.png','1','697','409','0','69485','1359793212','1');");
E_D("replace into `dede_uploads` values('10','0','130202/1-130202162302116.png','/uploads/allimg/130202/1-130202162302116.png','1','647','650','0','440108','1359793382','1');");
E_D("replace into `dede_uploads` values('11','0','130202/1-130202162321530.png','/uploads/allimg/130202/1-130202162321530.png','1','692','654','0','296859','1359793401','1');");
E_D("replace into `dede_uploads` values('12','0','130202/1-13020216234c64.png','/uploads/allimg/130202/1-13020216234c64.png','1','526','508','0','315373','1359793429','1');");
E_D("replace into `dede_uploads` values('13','0','130202/1-130202162404145.png','/uploads/allimg/130202/1-130202162404145.png','1','173','165','0','41487','1359793444','1');");
E_D("replace into `dede_uploads` values('14','0','130202/1-130202162605C3.png','/uploads/allimg/130202/1-130202162605C3.png','1','709','342','0','521282','1359793565','1');");
E_D("replace into `dede_uploads` values('15','18','鉴道白酒知识讲座（1）','/uploads/allimg/130202/1-130202162H5963.png','1','710','668','0','43730','1359793645','1');");
E_D("replace into `dede_uploads` values('16','19','红葡萄酒和白葡萄酒','/uploads/allimg/130202/1-130202162RN53.png','1','706','400','0','59234','1359793707','1');");
E_D("replace into `dede_uploads` values('17','20','白酒收藏知识讲座（2）','/uploads/allimg/130202/1-1302021629131G.jpg','1','553','449','0','60926','1359793753','1');");
E_D("replace into `dede_uploads` values('18','21','《私藏酒GranReserve酒制》','/uploads/allimg/130202/1-130202163010950.jpg','1','553','453','0','57903','1359793810','1');");
E_D("replace into `dede_uploads` values('19','0','130202/1-13020216325HE.jpg','/uploads/allimg/130202/1-13020216325HE.jpg','1','553','484','0','41206','1359793977','1');");
E_D("replace into `dede_uploads` values('20','0','130202/1-1302021633125E.jpg','/uploads/allimg/130202/1-1302021633125E.jpg','1','553','484','0','41008','1359793992','1');");
E_D("replace into `dede_uploads` values('21','0','130202/1-1302021633402X.jpg','/uploads/allimg/130202/1-1302021633402X.jpg','1','553','395','0','14738','1359794020','1');");
E_D("replace into `dede_uploads` values('22','0','130202/1-130202163350594.jpg','/uploads/allimg/130202/1-130202163350594.jpg','1','553','395','0','42189','1359794030','1');");
E_D("replace into `dede_uploads` values('23','0','130202/1-130202163405138.jpg','/uploads/allimg/130202/1-130202163405138.jpg','1','553','394','0','51578','1359794045','1');");
E_D("replace into `dede_uploads` values('24','31','首页幻灯片一','/uploads/allimg/130202/1-1302021JP4O6.jpg','1','685','481','0','234199','1359798484','1');");

require("../../inc/footer.php");
?>