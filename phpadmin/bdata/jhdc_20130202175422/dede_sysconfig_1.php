<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_sysconfig`;");
E_C("CREATE TABLE `dede_sysconfig` (
  `aid` smallint(8) unsigned NOT NULL DEFAULT '0',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `info` varchar(100) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '1',
  `type` varchar(10) NOT NULL DEFAULT 'string',
  `value` text,
  PRIMARY KEY (`varname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_sysconfig` values('1','cfg_basehost','站点根网址','1','string','http://localhost.jhdc.com');");
E_D("replace into `dede_sysconfig` values('2','cfg_cmspath','DedeCMS安装目录','2','string','');");
E_D("replace into `dede_sysconfig` values('3','cfg_cookie_encode','cookie加密码','2','string','AdAUc7810V');");
E_D("replace into `dede_sysconfig` values('4','cfg_indexurl','网页主页链接','1','string','/');");
E_D("replace into `dede_sysconfig` values('5','cfg_backup_dir','数据备份目录（在data目录内）','2','string','backupdata');");
E_D("replace into `dede_sysconfig` values('6','cfg_indexname','主页链接名','1','string','主页');");
E_D("replace into `dede_sysconfig` values('7','cfg_webname','网站名称','1','string','玖号洞藏');");
E_D("replace into `dede_sysconfig` values('8','cfg_adminemail','网站发信EMAIL','2','string','admin@dedecms.com');");
E_D("replace into `dede_sysconfig` values('9','cfg_html_editor','Html编辑器（ckeditor,需要fck的用户可以去官网下载）','2','string','ckeditor');");
E_D("replace into `dede_sysconfig` values('10','cfg_arcdir','文档HTML默认保存路径','1','string','');");
E_D("replace into `dede_sysconfig` values('11','cfg_medias_dir','图片/上传文件默认路径','1','string','/uploads');");
E_D("replace into `dede_sysconfig` values('12','cfg_ddimg_width','缩略图默认宽度','3','number','240');");
E_D("replace into `dede_sysconfig` values('13','cfg_ddimg_height','缩略图默认高度','3','number','180');");
E_D("replace into `dede_sysconfig` values('63','cfg_album_width','图集默认显示图片的大小','3','number','800');");
E_D("replace into `dede_sysconfig` values('15','cfg_imgtype','图片浏览器文件类型','3','string','jpg|gif|png');");
E_D("replace into `dede_sysconfig` values('16','cfg_softtype','允许上传的软件类型','3','bstring','zip|gz|rar|iso|doc|xsl|ppt|wps');");
E_D("replace into `dede_sysconfig` values('17','cfg_mediatype','允许的多媒体文件类型','3','bstring','swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov');");
E_D("replace into `dede_sysconfig` values('18','cfg_specnote','专题的最大节点数','2','number','6');");
E_D("replace into `dede_sysconfig` values('19','cfg_list_symbol','栏目位置的间隔符号','2','string',' > ');");
E_D("replace into `dede_sysconfig` values('20','cfg_notallowstr','禁用词语（系统将直接停止用户动作）<br/>用|分开，但不要在结尾加|','5','bstring','非典|艾滋病|阳痿');");
E_D("replace into `dede_sysconfig` values('21','cfg_feedbackcheck','评论及留言(是/否)需审核','5','bool','N');");
E_D("replace into `dede_sysconfig` values('22','cfg_keyword_replace','关键字替换(是/否)使用本功能会影响HTML生成速度','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('23','cfg_fck_xhtml','编辑器(是/否)使用XHTML','1','bool','N');");
E_D("replace into `dede_sysconfig` values('24','cfg_df_style','模板默认风格','1','string','jhdc');");
E_D("replace into `dede_sysconfig` values('25','cfg_multi_site','(是/否)支持多站点，开启此项后附件、栏目连接、arclist内容启用绝对网址','2','bool','N');");
E_D("replace into `dede_sysconfig` values('58','cfg_rm_remote','远程图片本地化','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('27','cfg_dede_log','(是/否)开启管理日志','2','bool','N');");
E_D("replace into `dede_sysconfig` values('28','cfg_powerby','网站版权信息','1','bstring','Copyright &copy; 2002-2013 玖号洞藏 版权所有');");
E_D("replace into `dede_sysconfig` values('722','cfg_jump_once','跳转网址是否直接跳转？（否则显示中转页）','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('723','cfg_task_pwd','系统计划任务客户端许可密码<br/>(需要客户端，通常不会太重要)','7','string','');");
E_D("replace into `dede_sysconfig` values('29','cfg_arcsptitle','(是/否)开启分页标题，开启会影响HTML生成速度','6','bool','N');");
E_D("replace into `dede_sysconfig` values('30','cfg_arcautosp','(是/否)开启长文章自动分页','6','bool','N');");
E_D("replace into `dede_sysconfig` values('31','cfg_arcautosp_size','文章自动分页大小（单位: K）','6','number','5');");
E_D("replace into `dede_sysconfig` values('32','cfg_auot_description','自动摘要长度（0-250，0表示不启用）','7','number','240');");
E_D("replace into `dede_sysconfig` values('33','cfg_ftp_host','FTP主机','2','string','');");
E_D("replace into `dede_sysconfig` values('34','cfg_ftp_port','FTP端口','2','number','21');");
E_D("replace into `dede_sysconfig` values('35','cfg_ftp_user','FTP用户名','2','string','');");
E_D("replace into `dede_sysconfig` values('36','cfg_ftp_pwd','FTP密码','2','string','');");
E_D("replace into `dede_sysconfig` values('37','cfg_ftp_root','网站根在FTP中的目录','2','string','/');");
E_D("replace into `dede_sysconfig` values('38','cfg_ftp_mkdir','是否强制用FTP创建目录','2','bool','N');");
E_D("replace into `dede_sysconfig` values('39','cfg_feedback_ck','评论加验证码重确认','5','bool','Y');");
E_D("replace into `dede_sysconfig` values('40','cfg_list_son','上级列表是否包含子类内容','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('41','cfg_mb_open','是否开启会员功能','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('42','cfg_mb_album','是否开启会员图集功能','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('43','cfg_mb_upload','是否允许会员上传非图片附件','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('44','cfg_mb_upload_size','会员上传文件大小(K)','4','number','1024');");
E_D("replace into `dede_sysconfig` values('45','cfg_mb_sendall','是否开放会员对自定义模型投稿','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('46','cfg_mb_rmdown','是否把会员指定的远程文档下载到本地','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('47','cfg_cli_time','服务器时区设置','2','number','8');");
E_D("replace into `dede_sysconfig` values('48','cfg_mb_addontype','会员附件许可的类型','4','bstring','swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov|zip|rar|doc|xsl|ppt|wps');");
E_D("replace into `dede_sysconfig` values('49','cfg_mb_max','会员附件总大小限制(MB)','4','number','500');");
E_D("replace into `dede_sysconfig` values('20','cfg_replacestr','替换词语（词语会被替换成***）<br/>用|分开，但不要在结尾加|','5','bstring','她妈|它妈|他妈|你妈|去死|贱人');");
E_D("replace into `dede_sysconfig` values('719','cfg_makeindex','发布文章后马上更新网站主页','6','bool','N');");
E_D("replace into `dede_sysconfig` values('51','cfg_keyword_like','使用关键词关连文章','6','bool','N');");
E_D("replace into `dede_sysconfig` values('52','cfg_index_max','网站主页调用函数最大索引文档数<br>不适用于经常单栏目采集过多内容的网站<br>不启用本项此值设置为0即可','6','number','10000');");
E_D("replace into `dede_sysconfig` values('53','cfg_index_cache','arclist标签调用缓存<br />(0 不启用，大于0值为多少秒)','6','number','86400');");
E_D("replace into `dede_sysconfig` values('54','cfg_tplcache','是否启用模板缓存','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('55','cfg_tplcache_dir','模板缓存目录','6','string','/data/tplcache');");
E_D("replace into `dede_sysconfig` values('56','cfg_makesign_cache','发布/修改单个文档是否使用调用缓存','6','bool','N');");
E_D("replace into `dede_sysconfig` values('59','cfg_arc_dellink','删除非站内链接','7','bool','N');");
E_D("replace into `dede_sysconfig` values('60','cfg_arc_autopic','提取第一张图片作为缩略图','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('61','cfg_arc_autokeyword','自动提取关键字','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('62','cfg_title_maxlen','文档标题最大长度<br>改此参数后需要手工修改数据表','7','number','60');");
E_D("replace into `dede_sysconfig` values('64','cfg_check_title','发布文档时是否检测重复标题','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('65','cfg_album_row','图集多行多列样式默认行数','3','number','3');");
E_D("replace into `dede_sysconfig` values('66','cfg_album_col','图集多行多列样式默认列数','3','number','4');");
E_D("replace into `dede_sysconfig` values('67','cfg_album_pagesize','图集多页多图每页显示最大数','3','number','12');");
E_D("replace into `dede_sysconfig` values('68','cfg_album_style','图集默认样式<br />1为多页多图,2为多页单图,3为缩略图列表','3','number','2');");
E_D("replace into `dede_sysconfig` values('69','cfg_album_ddwidth','图集默认缩略图大小','3','number','200');");
E_D("replace into `dede_sysconfig` values('70','cfg_mb_notallow','不允许注册的会员id','4','bstring','www,bbs,ftp,mail,user,users,admin,administrator');");
E_D("replace into `dede_sysconfig` values('71','cfg_mb_idmin','用户id最小长度','4','number','3');");
E_D("replace into `dede_sysconfig` values('72','cfg_mb_pwdmin','用户密码最小长度','4','number','3');");
E_D("replace into `dede_sysconfig` values('73','cfg_md_idurl','是否严格限定会员登录id<br>允许会员使用二级域名必须设置此项','4','bool','N');");
E_D("replace into `dede_sysconfig` values('74','cfg_mb_rank','注册会员默认级别<br>[会员权限管理中]查看级别代表的数字','4','number','10');");
E_D("replace into `dede_sysconfig` values('76','cfg_feedback_time','两次评论至少间隔时间(秒钟)','5','number','30');");
E_D("replace into `dede_sysconfig` values('77','cfg_feedback_numip','每个IP一小时内最大评论数','5','number','30');");
E_D("replace into `dede_sysconfig` values('78','cfg_md_mailtest','是否限制Email只能注册一个帐号','4','bool','N');");
E_D("replace into `dede_sysconfig` values('79','cfg_mb_spacesta','会员使用权限开通状态<br>(-10 邮件验证 -1 手工审核, 0 没限制)','4','number','-10');");
E_D("replace into `dede_sysconfig` values('728','cfg_mb_allowreg','是否允许新会员注册','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('729','cfg_mb_adminlock','是否禁止访问管理员帐号的空间','4','bool','N');");
E_D("replace into `dede_sysconfig` values('81','cfg_vdcode_member','会员投稿是否使用验证码','5','bool','Y');");
E_D("replace into `dede_sysconfig` values('83','cfg_mb_cktitle','会员投稿是否检测重复标题','5','bool','Y');");
E_D("replace into `dede_sysconfig` values('84','cfg_mb_editday','投稿多长时间后不能再修改[天]','5','number','7');");
E_D("replace into `dede_sysconfig` values('729','cfg_sendarc_scores','投稿可获取积分','5','number','10');");
E_D("replace into `dede_sysconfig` values('88','cfg_caicai_sub','被踩扣除文章好评度','5','number','2');");
E_D("replace into `dede_sysconfig` values('89','cfg_caicai_add','被顶扣除文章好评度','5','number','2');");
E_D("replace into `dede_sysconfig` values('90','cfg_feedback_add','详细好评可获好评度','5','number','5');");
E_D("replace into `dede_sysconfig` values('91','cfg_feedback_sub','详细恶评扣除好评度','5','number','5');");
E_D("replace into `dede_sysconfig` values('730','cfg_sendfb_scores','参与评论可获积分','5','number','3');");
E_D("replace into `dede_sysconfig` values('92','cfg_search_max','最大搜索检查文档数','6','number','50000');");
E_D("replace into `dede_sysconfig` values('93','cfg_search_maxrc','最大返回搜索结果数','6','number','300');");
E_D("replace into `dede_sysconfig` values('94','cfg_search_time','搜索间隔时间(秒/对网站所有用户)','6','number','3');");
E_D("replace into `dede_sysconfig` values('95','cfg_baidunews_limit','百度新闻xml更新新闻数量 最大100','8','string','100');");
E_D("replace into `dede_sysconfig` values('223','cfg_smtp_port','smtp服务器端口','2','string','25');");
E_D("replace into `dede_sysconfig` values('221','cfg_sendmail_bysmtp','是否启用smtp方式发送邮件','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('222','cfg_smtp_server','smtp服务器','2','string','smtp.qq.com');");
E_D("replace into `dede_sysconfig` values('224','cfg_smtp_usermail','SMTP服务器的用户邮箱','2','string','desdev@vip.qq.com');");
E_D("replace into `dede_sysconfig` values('225','cfg_smtp_user','SMTP服务器的用户帐号','2','string','desdev');");
E_D("replace into `dede_sysconfig` values('226','cfg_smtp_password','SMTP服务器的用户密码','2','string','7260444huxiao');");
E_D("replace into `dede_sysconfig` values('96','cfg_updateperi','百度新闻xml更新时间 （单位：分钟）','8','string','15');");
E_D("replace into `dede_sysconfig` values('227','cfg_online_type','在线支付网关类型','2','string','nps');");
E_D("replace into `dede_sysconfig` values('706','cfg_upload_switch','删除文章文件同时删除相关附件文件','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('708','cfg_rewrite','是否使用伪静态','2','bool','N');");
E_D("replace into `dede_sysconfig` values('707','cfg_allsearch_limit','网站全局搜索时间限制','2','string','1');");
E_D("replace into `dede_sysconfig` values('709','cfg_delete','文章回收站(是/否)开启','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('710','cfg_keywords','站点默认关键字','1','string','重庆白酒');");
E_D("replace into `dede_sysconfig` values('711','cfg_description','站点描述','1','bstring','重庆白酒，玖号洞藏');");
E_D("replace into `dede_sysconfig` values('712','cfg_beian','网站备案号','1','string','');");
E_D("replace into `dede_sysconfig` values('713','cfg_need_typeid2','是否启用副栏目','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('72','cfg_mb_pwdtype','前台密码验证类型：默认32 — 32位md5，可选：<br />l16 — 前16位， r16 — 后16位， m16 — 中间16位','4','string','32');");
E_D("replace into `dede_sysconfig` values('716','cfg_cache_type','id 文档ID，content 标签最终内容<br />(修改此变量后必须更新系统缓存)','6','string','id');");
E_D("replace into `dede_sysconfig` values('717','cfg_max_face','会员上传头像大小限制(单位：KB)','3','number','50');");
E_D("replace into `dede_sysconfig` values('718','cfg_typedir_df','栏目网址使用目录名（不显示默认页，即是 /a/abc/ 形式）','2','bool','Y');");
E_D("replace into `dede_sysconfig` values('719','cfg_make_andcat','发表文章后马上更新相关栏目','6','bool','N');");
E_D("replace into `dede_sysconfig` values('720','cfg_make_prenext','发表文章后马上更新上下篇','6','bool','Y');");
E_D("replace into `dede_sysconfig` values('721','cfg_feedback_forbid','是否禁止所有评论(将包括禁止顶踩等)','5','bool','N');");
E_D("replace into `dede_sysconfig` values('724','cfg_addon_domainbind','附件目录是否绑定为指定的二级域名','7','bool','N');");
E_D("replace into `dede_sysconfig` values('725','cfg_addon_domain','附件目录的二级域名','7','string','');");
E_D("replace into `dede_sysconfig` values('726','cfg_df_dutyadmin','默认责任编辑(dutyadmin)','7','string','admin');");
E_D("replace into `dede_sysconfig` values('727','cfg_mb_allowncarc','是否允许用户空间显示未审核文章','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('730','cfg_mb_spaceallarc','会员空间中所有文档的频道ID(不限为0)','4','number','0');");
E_D("replace into `dede_sysconfig` values('731','cfg_face_adds','上传头像增加积分','5','number','10');");
E_D("replace into `dede_sysconfig` values('732','cfg_moreinfo_adds','填写详细资料增加积分','5','number','20');");
E_D("replace into `dede_sysconfig` values('733','cfg_money_scores','多少积分可以兑换一个金币','5','number','50');");
E_D("replace into `dede_sysconfig` values('734','cfg_mb_wnameone','是否允许用户笔名/昵称重复','4','bool','N');");
E_D("replace into `dede_sysconfig` values('735','cfg_arc_dirname','是否允许用目录作为文档文件名<br />文档命名规则需改为：{typedir}/{aid}/index.html','7','bool','Y');");
E_D("replace into `dede_sysconfig` values('736','cfg_puccache_time','需缓存内容全局缓存时间(秒)','6','number','36000');");
E_D("replace into `dede_sysconfig` values('737','cfg_arc_click','文档默认点击数(-1表示随机50-200)','7','number','-1');");
E_D("replace into `dede_sysconfig` values('738','cfg_addon_savetype','附件保存形式(按data函数日期参数)','3','string','ymd');");
E_D("replace into `dede_sysconfig` values('739','cfg_qk_uploadlit','异步上传缩略图(空间太不稳定的用户关闭此项)','3','bool','Y');");
E_D("replace into `dede_sysconfig` values('740','cfg_login_adds','登录会员中心获积分','5','number','2');");
E_D("replace into `dede_sysconfig` values('741','cfg_userad_adds','会员推广获积分','5','number','10');");
E_D("replace into `dede_sysconfig` values('742','cfg_ddimg_full','缩略图是否使用强制大小(对背景填充)','3','bool','N');");
E_D("replace into `dede_sysconfig` values('743','cfg_ddimg_bgcolor','缩略图空白背景填充颜色(0-白,1-黑)','3','number','0');");
E_D("replace into `dede_sysconfig` values('744','cfg_replace_num','文档内容同一关键词替换次数(0为全部替换)','7','number','2');");
E_D("replace into `dede_sysconfig` values('745','cfg_uplitpic_cut','上传缩略图后是否马上弹出裁剪框','3','bool','Y');");
E_D("replace into `dede_sysconfig` values('746','cfg_album_mark','图集是否使用水印(小图也会受影响)','3','bool','N');");
E_D("replace into `dede_sysconfig` values('747','cfg_mb_feedcheck','会员动态是否需要审核','4','bool','N');");
E_D("replace into `dede_sysconfig` values('748','cfg_mb_msgischeck','会员状态是否需要审核','4','bool','N');");
E_D("replace into `dede_sysconfig` values('749','cfg_mb_reginfo','注册是否需要完成详细资料的填写','4','bool','Y');");
E_D("replace into `dede_sysconfig` values('750','cfg_remote_site','是否启用远程站点','2','bool','N');");
E_D("replace into `dede_sysconfig` values('751','cfg_title_site','是否发布和编辑文档时远程发布(启用远程站点的前提下)','2','bool','N');");
E_D("replace into `dede_sysconfig` values('752','cfg_mysql_type','数据库类型（支持mysql和mysqli）','2','string','mysql');");
E_D("replace into `dede_sysconfig` values('753','cfg_sphinx_article','是否启用文章全文检索功能（需配置sphinx服务器）','7','bool','N');");
E_D("replace into `dede_sysconfig` values('754','cfg_sphinx_host','Sphinx服务器主机地址','7','string','localhost');");
E_D("replace into `dede_sysconfig` values('755','cfg_sphinx_port','Sphinx服务器端口号','7','number','9312');");
E_D("replace into `dede_sysconfig` values('14','cfg_domain_cookie','跨域共享cookie的域名(例如: .dedecms.com)','2','string','');");
E_D("replace into `dede_sysconfig` values('756','cfg_memcache_enable','是否启用memcache缓存，如果为否(N)，默认使用文件缓存','6','bool','N');");
E_D("replace into `dede_sysconfig` values('757','cfg_memcache_mc_defa','默认memcache缓存服务器地址','6','string','memcache://127.0.0.1:11211/default127');");
E_D("replace into `dede_sysconfig` values('758','cfg_memcache_mc_oth','附加memcache缓存服务器地址','6','string','');");
E_D("replace into `dede_sysconfig` values('759','cfg_cross_sectypeid','支持交叉栏目显示副栏目内容','7','bool','N');");
E_D("replace into `dede_sysconfig` values('760','cfg_digg_update','顶踩缓存异步更新间隔（0为不缓存）','6','number','0');");
E_D("replace into `dede_sysconfig` values('761','cfg_feedback_guest','是否允许匿名评论','5','bool','N');");

require("../../inc/footer.php");
?>