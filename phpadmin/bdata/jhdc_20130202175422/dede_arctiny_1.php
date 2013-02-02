<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arctiny`;");
E_C("CREATE TABLE `dede_arctiny` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid2` varchar(90) NOT NULL DEFAULT '0',
  `arcrank` smallint(6) NOT NULL DEFAULT '0',
  `channel` smallint(5) NOT NULL DEFAULT '1',
  `senddate` int(10) unsigned NOT NULL DEFAULT '0',
  `sortrank` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8");
E_D("replace into `dede_arctiny` values('2','4','0','0','17','1359790895','1359797340','1');");
E_D("replace into `dede_arctiny` values('3','19','0','0','1','1359791130','1359791323','1');");
E_D("replace into `dede_arctiny` values('4','19','0','0','1','1359792169','1359791997','1');");
E_D("replace into `dede_arctiny` values('5','19','0','0','1','1359792321','1359792173','1');");
E_D("replace into `dede_arctiny` values('6','19','0','0','1','1359792375','1359792332','1');");
E_D("replace into `dede_arctiny` values('7','19','0','0','1','1359792510','1359792377','1');");
E_D("replace into `dede_arctiny` values('8','19','0','0','1','1359792544','1359792513','1');");
E_D("replace into `dede_arctiny` values('9','19','0','0','1','1359792593','1359792558','1');");
E_D("replace into `dede_arctiny` values('10','19','0','0','1','1359792636','1359792599','1');");
E_D("replace into `dede_arctiny` values('11','19','0','0','1','1359792660','1359792645','1');");
E_D("replace into `dede_arctiny` values('12','19','0','0','1','1359792687','1359792663','1');");
E_D("replace into `dede_arctiny` values('13','19','0','0','1','1359792717','1359792692','1');");
E_D("replace into `dede_arctiny` values('14','19','0','0','1','1359792740','1359792723','1');");
E_D("replace into `dede_arctiny` values('15','19','0','0','1','1359792769','1359792752','1');");
E_D("replace into `dede_arctiny` values('16','20','0','0','1','1359793234','1359792850','1');");
E_D("replace into `dede_arctiny` values('17','20','0','0','1','1359793260','1359793237','1');");
E_D("replace into `dede_arctiny` values('18','20','0','0','1','1359793652','1359793601','1');");
E_D("replace into `dede_arctiny` values('19','20','0','0','1','1359793711','1359793668','1');");
E_D("replace into `dede_arctiny` values('20','20','0','0','1','1359793757','1359793713','1');");
E_D("replace into `dede_arctiny` values('21','20','0','0','1','1359793819','1359793765','1');");
E_D("replace into `dede_arctiny` values('22','3','0','0','1','1359794694','1359794668','1');");
E_D("replace into `dede_arctiny` values('23','10','0','0','18','1359795099','1359795045','1');");
E_D("replace into `dede_arctiny` values('24','4','0','0','17','1359797381','1359797507','1');");
E_D("replace into `dede_arctiny` values('25','4','0','0','17','1359797411','1359797383','1');");
E_D("replace into `dede_arctiny` values('26','4','0','0','17','1359797431','1359797413','1');");
E_D("replace into `dede_arctiny` values('27','4','0','0','17','1359797466','1359797433','1');");
E_D("replace into `dede_arctiny` values('28','4','0','0','17','1359797492','1359797468','1');");
E_D("replace into `dede_arctiny` values('29','4','0','0','17','1359797544','1359797521','1');");
E_D("replace into `dede_arctiny` values('30','4','0','0','17','1359797566','1359797570','1');");
E_D("replace into `dede_arctiny` values('31','28','0','0','1','1359798387','1359798422','1');");
E_D("replace into `dede_arctiny` values('32','28','0','0','1','1359798401','1359798504','1');");
E_D("replace into `dede_arctiny` values('33','28','0','0','1','1359798418','1359798512','1');");
E_D("replace into `dede_arctiny` values('34','28','0','0','1','1359798543','1359798521','1');");

require("../../inc/footer.php");
?>