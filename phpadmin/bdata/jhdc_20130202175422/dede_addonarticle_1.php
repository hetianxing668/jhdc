<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_addonarticle`;");
E_C("CREATE TABLE `dede_addonarticle` (
  `aid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `body` mediumtext,
  `redirecturl` varchar(255) NOT NULL DEFAULT '',
  `templet` varchar(30) NOT NULL DEFAULT '',
  `userip` char(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`aid`),
  KEY `typeid` (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_addonarticle` values('3','19','&ldquo;二十九，去打酒；年三十，包饺子&rdquo;；&ldquo;有钱没钱，打酒过年&rdquo;。来自白酒营销得到的数据：从第一年的9月到第二年的春节后，始终是白酒消费最高峰期，白酒全年销售总量的90%是在这一阶段完成的。<br />\r\n&nbsp; &nbsp; 又到岁尾年头，自然想起买酒的事情来。<br />\r\n&nbsp;&nbsp; &nbsp;&ldquo;酒是陈的香&rdquo;，买酒自然挑陈年老酒的好。然而何为&ldquo;陈酿&rdquo;，却不一定都能说得上来。<br />\r\n&nbsp;&nbsp;&nbsp; 《广雅&bull;释诂》：&ldquo;陈，列也。&rdquo;金文的&ldquo;陈&rdquo;字，有说左边的&ldquo;阝&rdquo;是旌旗的形状，右边的&ldquo;东&rdquo;字是战车车轮，上面载着戈矛，下面是土字的会意，意思是把战车摆在边界保卫国土安全，因此&ldquo;陈&rdquo;的本义是部列战阵的意思。所以，在古代，&ldquo;陈&rdquo;、&ldquo;阵&rdquo;是一个字，可以通用。<br />\r\n&nbsp;&nbsp; &nbsp; 战阵要排列，说理陈词也须排列事实，所以述说也叫&ldquo;陈&rdquo;。 陈词所述的事实皆为已然发生的旧事，故&ldquo;陈&rdquo;又引伸出&ldquo;旧&rdquo;、&ldquo;古久&rdquo;、&ldquo;老&rdquo;等义。<br />\r\n&nbsp;&nbsp; &nbsp;是不是说，陈酿就是指有年头的老酒呢？模糊的可以这么理解。我国历史上先秦有&ldquo;三酒&rdquo;之说，《周礼&bull;天官&bull;酒正》：&ldquo;辨三酒之物，一曰事酒，二曰昔酒，三曰清酒。&rdquo; 贾公彦疏：&ldquo;&lsquo;昔酒&rsquo;者，久酿乃熟，故以昔酒为名。&rdquo;郑玄注：&ldquo;郑司农云：&lsquo;事酒，有事而饮也；昔酒，无事而饮也；清酒，祭祀之酒。&rsquo;玄谓事酒酌有事者之酒，其酒则今之酵酒也；昔酒，今之酋久白酒，所谓旧醳者也；清酒，今中山冬酿接夏而成。&rdquo;(醳，新酿的较醇的酒；酋，在这里是久的意思。)<br />\r\n&nbsp;&nbsp; &nbsp;到了宋代，陈酿又叫&ldquo;老酒&rdquo;。苏辙《求黄家紫竹杖》诗：&ldquo;一枝遗我拄寻君，老酒仍烦为开瓮。&rdquo;范成大《食罢书字》诗：&ldquo;扪腹蛮茶快，扶头老酒中。&rdquo;自注：&ldquo;老酒，数年酒，南人珍之。&rdquo;<br />\r\n&nbsp;&nbsp;&nbsp; 为什么说陈酿就是指有年头的老酒只在&ldquo;模糊&rdquo;的层面理解算正确呢？因为在酿酒行业陈酿是个很专业的术语，目下社会上对&ldquo;陈酿&rdquo;的理解往往有些偏差，就是因为没有从专业的角度去细察，因而出现了两种误区。<br />\r\n&nbsp;&nbsp; &nbsp;一种认为，既然&ldquo;酒是陈的香&rdquo;那么&ldquo;陈酿&rdquo;必定越陈越好了。这其实是一种认识的误区。白酒界权威专家们早就指出，并不是所有的白酒都越陈越好，越陈越香只是茅台酒等极少数真正靠纯天然酿造、绝无任何添加剂的极品酱香白酒所拥有的专利。一般白酒随着时间的推移，添加成分会逐渐挥发，相应的香气也就会逐渐降低，味儿也会变淡。特别是一些低度白酒，更谈不上越陈越香。中国食品发酵工业研究所检测部的高级工程师胡国栋就曾经指出，越陈越香的传统观念用在低度白酒的保存上是不合适的。白酒淳冽的香味和口感主要来自于酒酯类物质，而低度白酒中的酒酯类物质会随着时间的延长而水解（通常是一年或更久，但因酒而异），口味甚至会变得越来越寡淡。他还特别告诫消费者，买低度酒要注意酒的生产日期。<br />\r\n&nbsp;&nbsp;&nbsp; 关于片面追求酒的陈化不科学，还可以举出些极端的例子来说明。你说越陈越好么？考古发现的埋在地下百年、千年的酒该是最好的酒了，其实并不是这样。2003年6月，西安的考古专家在清理一件刚刚出土的西汉早期凤首铜锺时，发现其中盛放着约26公斤青绿色的酒，虽然只含有0.1%的酒精，但酒香明显。这可是陈放时间超过2,000年的酒了，媒体称其为&ldquo;西汉美酒&rdquo;，够古了吧？可这些酒已不能喝。因为其中差不多已经没有什么酒精了，况且还从容器中带进了高浓度的铜离子，喝了对身体肯定有害。不能喝的酒，还能叫好酒么？由此可见，对于酒的越陈越香也要做区别对待，不能以偏概全。<br />\r\n&nbsp;&nbsp;&nbsp; 对&ldquo;陈酿&rdquo;理解第二种典型的偏差，是误以为带有年份意义的&ldquo;陈酿&rdquo;，瓶子里应该百分之百、整齐划一的都装了那个&ldquo;年份&rdquo;的老酒。<br />\r\n&nbsp;&nbsp;&nbsp; 这方面最典型的例子莫过于前些年盐城一市民状告茅台的案例。该市民就认为，80年陈年茅台酒似乎就应该整瓶酒都是被储存了80年的陈酒的，包装上说用1915年获奖老茅台&ldquo;精心勾兑&rdquo;而成的这种用老酒加新酒&ldquo;勾兑&rdquo;出来的酒，就不能称&ldquo;80年陈年茅台酒&rdquo;。<br />\r\n&nbsp;&nbsp;&nbsp; 在酿酒行业，陈酿主要有两个含义：一是工艺术语。酒类酿造都有个&ldquo;陈酿&rdquo;过程，新酒酿出处于不稳定状态，一定要存放一段时间才可以上市。一般因酒而异，香型不同存放时间不同，但作为工艺的&ldquo;陈酿&rdquo;一般不会超过10年，有的仅数月。另一个含义是指&ldquo;年份酒&rdquo;。比如茅台酒就有10年、30年、50年、80年陈的品种等。<br />\r\n&nbsp;&nbsp;&nbsp; 中外&ldquo;年份酒&rdquo;往往标准有所不同。国外有的国家对于酒的年份标注规定&ldquo;以勾兑该酒的所有不同年份酒中最年轻的年份来标注&rdquo;。中国茅台酒，其标准是国家标准，它的陈年标准是以相应年份的酒为基础，把储存了与之相匹配的不同年份的酒互相勾兑而成（如30年茅台陈酿，是以在地下储存了30年的老酒为主体，勾兑储存时间超过30年的老酒，同时加入一部分低龄酒）。<br />\r\n&nbsp;&nbsp;&nbsp; 关于中国白酒的年份酒需要勾兑而成，中科院微生物研究所教授级研究员、中国微生物学会常务理事、技术咨询委员会主任、中国著名微生物学家程光胜曾在报上发表过一篇文章，其中有些观点和材料很有助于我们对于&ldquo;年份酒&rdquo;、&ldquo;陈酿&rdquo;这些概念的理解。<br />\r\n&nbsp;&nbsp;&nbsp; 程先生在文章中告诉读者：许多名酒包装的标签上都写有&ldquo;10年陈&rdquo;、&ldquo;20年陈&rdquo;的字样，外国的酒也有V.S.O.P(10年以上)和XO等表明储存期长短的标识。是否这些名酒商品都是陈放了这样长时间的呢？不是。因为有些名酒在酒库中存放10年后，基本上不适合直接饮用。但是，由于它们储存时间很长，酒中的许多化学成分发生了较大的改变，含有许多经过长时间酝酿而成的化合物，这些化合物对于改善酒质有非常重要的作用。怎样利用它们呢？勾兑就是主要手段。我们平常在名酒包装上见到的&ldquo;XX年陈&rdquo;，实际上是表示这种商品中含有储存XX年的酒的成分。至于这种成分含量应该多少，各种品牌并不一样。为了说明这一点，程先生在文中还举了一个例子，说华北某名酒中，只要在1吨基础酒中加上1斤到2斤储存10年的陈酒，其风味便大为改观。<br />\r\n&nbsp;&nbsp;&nbsp; 从上面这个1吨比1至2斤的例子我们应该能够领略到&ldquo;酒是陈的香&rdquo;的威力了。我想，那位盐城市民若是当初读过程先生的这篇文章，绝不会再对茅台酒&ldquo;冲冠一怒&rdquo;为&ldquo;勾兑&rdquo;了，相反在真正了解了茅台酒的陈年标准后，一定还会生出许多感动。因为茅台年份酒其中&ldquo;相应年份的酒&rdquo;含量比起&ldquo;1吨比1至2斤&rdquo;不知要高出多少倍来呢！ ','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('4','19','<img alt=\"\" src=\"/uploads/allimg/130202/1-13020216004T07.png\" style=\"width: 790px; height: 565px;\" /><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-13020216013JO.png\" style=\"width: 793px; height: 568px;\" /><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-130202160240F5.png\" style=\"width: 795px; height: 471px;\" />','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('5','19','<div>\r\n	【 生日、祝寿的风俗安排】</div>\r\n&nbsp;<br />\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100.0%;\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				生日祝寿如何安排呢？<br />\r\n				按照中国民间的习俗，祝贺生日，小的曰&ldquo;过生日&rdquo;，老的曰为&ldquo;祝寿&rdquo;。通常四十岁以下的称作&ldquo;过生&rdquo;，以上就<br />\r\n				称作&ldquo;做寿&rdquo; 。而今&ldquo;过生日&rdquo;就是亲朋好友聚会快乐的最好的借口之一，因而亲朋好友这么一聚，寿面不能不吃、<br />\r\n				蛋糕不能不切、酒也不能不喝....<br />\r\n				<br />\r\n				祝寿项目主要有：<br />\r\n				1.子女送上寿礼；<br />\r\n				2.全家寿宴。<br />\r\n				寿宴可在家中，也可在外餐厅，菜品随便，但长寿面是一定不能少的，图个吉利。酒一定要好，这是诚意，平时舍不得<br />\r\n				喝的【鉴道私藏酒】一定得有，就是平时不喝酒的老寿星，今天遇上这不上头的好酒也得喝上几杯，高兴....<br />\r\n				<br />\r\n				按中国的风俗，比较重要的祝寿一般对六十以上所为，每逢十都是比较重要的生日。如六十大寿，七十大寿，八十大寿...<br />\r\n				子女们这时费心费力给老人过过，能够尽显一片心意。中华之传统美德呀。<br />\r\n				<br />\r\n				小的过生日，四十岁以下的。<br />\r\n				这个阶段，比较重要的生日有，一周岁人生初始，18岁成人，36岁本命年，四十岁人到中年。<br />\r\n				1周岁人生初始：盼着孩子幸福成长；<br />\r\n				18&nbsp; 岁&nbsp; 成 人：庆祝孩子长成人，祝愿前途无量，大有作为。<br />\r\n				36岁 本 命 年：人生成熟，事业有成，自我肯定，把握人生。<br />\r\n				40岁 人到中年：承前启后，总结得失，感叹岁月，展望未来。<br />\r\n				<br />\r\n				孔子说：&ldquo;三十而立，四十不惑，五十耳顺，六十知天命，七十古稀&rdquo;。这些岁数对于中国来说应该具有特别的含义。<br />\r\n				长寿是永远的主题，美酒是永远的快乐。</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:50px;\">\r\n				<img alt=\"\" src=\"/uploads/allimg/130202/1-13020216050A36.png\" style=\"width: 753px; height: 223px;\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('6','19','有些酒为何会特别上头，酒后头痛？<br />\r\n喝酒都会上头，但有些酒特别容易上头，有些酒后还会头痛，这是为什么呢？主要原因：<br />\r\n1－酒中的杂醇油含量高，饮后头痛。是因为酿酒原料较差造成，致使杂醇油较高，造成容易上头，且酒后头痛。<br />\r\n2－酒中一些低沸点醛类物质造成上头，主要陈藏时间不够，陈酒一般使低沸点物质挥了发许多，所以酒后不容易上头。新酒容易上头。<br />\r\n如您有幸饮到鉴道私藏酒，您就会发现比平时可多喝几杯，酒量见涨。','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('7','19','<p>\r\n	&nbsp;中国农历腊月最重大的节日，是农历十二月称腊月，十二月初八，古代称为&ldquo;腊日&rdquo;，俗称&ldquo;腊八节&rdquo;。从先秦起，腊八节都是用来祭祀祖先和神灵，祈求丰收和吉祥。据说，佛教创始人释迦牟尼的成道之日也在十二月初八，因此腊八也是佛教徒的节日，称为&ldquo;佛成道节&rdquo;。<br />\r\n	<strong>节日习俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 腊八这一天有喝腊八粥的习俗，腊八粥也叫&ldquo;七宝五味粥&rdquo;。我国喝腊八粥的的历史，已有一千多年。最早开始于宋代。每逢腊八这一天，不论是朝廷、官府、寺院还是黎民百姓家都要做腊八粥。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 到了清朝，喝腊八粥的风俗更是盛行。在宫廷，皇帝、皇后、皇子等都要向文武大臣、侍从宫女赐腊八粥，并向各个寺院发放米、果等供僧侣食用。在民间，家家户户也要做腊八粥，祭祀祖先；同时，合家团聚在一起食用，馈赠亲朋好友。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 中国各地腊八粥的花样，争奇竞巧，品种繁多。其中以北京的最为讲究，搀在白米中的物品较多，如红枣、莲子、核桃、栗子、杏仁、松仁、桂圆、榛子、葡萄、白果、菱角、青丝、玫瑰、红豆、花生&hellip;&hellip;总计不下二十种。人们在腊月初七的晚上，就开始忙碌起来，洗米、泡果、拨皮、去核、精拣然后在半夜时分开始煮，再用微火炖，一直炖到第二天的清晨，腊八粥才算熬好了。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 腊八粥在民间还有巫术的作用。假如院子里种着花卉和果树，也要在枝干上涂抹一些腊八粥，相信来年多结果实。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;在腊八这一天，大家除了要喝腊八粥外，还要吃腊八饭、泡腊八蒜。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;腊八这一天，除了祭祖敬神外，还有悼念亡国、寄托哀思的。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在东北也有谚语&ldquo;腊八腊八，冻掉下巴&rdquo;的之说，意指腊八这一天非常冷，吃腊八粥可以使人暖和、抵御寒冷。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&ldquo;腊八粥，吃不完，吃了腊八粥便丰收&rdquo;。农历腊月初八，是我国民间的传统节日&mdash;&mdash;&ldquo;腊八节&rdquo;。关中一带到了这一天，家家户户都要煮上一锅&ldquo;腊八粥&rdquo;，美餐一顿。不光大人、娃娃吃，还要给牲口、鸡狗喂一些，在门上、墙上、树上抹一些，图个吉利。<br />\r\n	<strong>佛教渊源</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 腊月初八煮成腊八粥分赠信徒，称为&ldquo;福寿粥&rdquo;&ldquo;福德粥&rdquo;意思是说吃了以后可以增福增寿。可见当时各寺僧爱惜粮食之美德。<br />\r\n	<strong>各地风俗</strong><br />\r\n	<strong>天津风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 天津人 煮腊八粥，同北京近似，讲究些的还要加莲子、百合、珍珠米、意仁米、大麦仁、粘秫米、粘黄米、云豆、绿豆、桂圆肉、龙眼肉、白果、红枣及糖水桂花等，色、香、味俱佳。近年还有加入黑米的。这种腊八粥可供食疗，有健脾、开胃、补气、安神、清心、养血等功效。<br />\r\n	<strong>山西风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山西的腊八粥，别称八宝粥，以小米为主，附加以豇豆、小豆、绿豆、小枣，还有粘黄米、大米、江米等煮之。晋东南地区，腊月初五即用小豆、红豆、豇豆、红薯、花生、江米、柿饼，合水煮粥，又叫甜饭，亦是食俗之一。<br />\r\n	<strong>陕北风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 陕北高原在腊八之日，熬粥除了用多种米、豆之外，还得加入各种干果、豆腐和肉混合煮成。通常是早晨就煮，或甜或咸，依人口味自选酌定。倘是午间吃，还要在粥内煮上些面条，全家人团聚共餐。吃完以后，还要将粥抹在门上、灶台上及门外树上，以驱邪避灾，迎接来年的农业大丰收。民间相传，腊八这天忌吃菜，说吃了莱庄稼地里杂草多。陕南人腊八要吃杂合粥，分&ldquo;五味&rdquo;和&ldquo;八味&rdquo;两种。前者用大米、糯米、花生、白果、豆子煮成。后者用上述五种原料外加大肉丁、豆腐、萝卜，另外还要加调味品。腊八这天人们除了吃腊八粥，还得用粥供奉祖先和粮仓。<br />\r\n	<strong>甘肃风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;甘肃人 传统煮腊八粥用五谷、蔬菜，煮熟后除家人吃，还分送给邻里，还要用来喂家畜。在兰州、白银城市地区，腊八粥煮得很讲究，用大米、豆、红枣、白果、莲子、葡萄干、杏干、瓜干、核桃仁、青红丝、白糖、肉丁等煮成。煮熟后先用来敬门神、灶神、土神、财神，祈求来年风调雨顺，五谷丰登；再分给亲邻，最后一家人享用。甘肃武威地区讲究过&ldquo;素腊八&rdquo;，吃大米稠饭、扁豆饭或是稠饭，煮熟后配炸散子、麻花同吃，民俗叫它&ldquo;扁豆粥泡散&rdquo;。<br />\r\n	<img alt=\"\" src=\"/uploads/allimg/130202/1-130202160A9545.jpg\" style=\"width: 184px; height: 221px;\" /><br />\r\n	<strong>宁夏风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 宁夏人 做腊八饭一般用扁豆、黄豆、红豆、蚕豆、黑豆、大米、土豆煮粥，再加上用麦面或荞麦面切成菱形柳叶片的&ldquo;麦穗子&rdquo;，或者是做成小圆蛋的&ldquo;雀儿头&rdquo;，出锅之前再入葱花油。这天全家人只吃腊八饭，不吃菜。<br />\r\n	<strong>青海风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp; 青海的西宁人，虽是汉族人居多，可是腊八不吃粥，而是吃麦仁饭。将新碾的麦仁，与牛羊肉同煮，加上青盐、姜皮、花椒、草果、苗香等佐料，经一夜文火煮熬，肉、麦交融成乳糜状，清晨揭锅，异香扑鼻，食之可口。<br />\r\n	<strong>山东风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在山东&ldquo;孔府食制&rdquo;中，规定&ldquo;腊八粥&rdquo;分两种，一种是用意米仁、桂圆、莲子、百合、栗子、红枣、粳米等熬成的，盛入碗里还要加些&ldquo;粥果&rdquo;，主要是雕刻成各种形状的水果，是为点缀。这种粥专供孔府主人及十二府主人食用。另一种是用大米、肉片、白菜、豆腐等煮成的，是给孔府里当差们喝的。<br />\r\n	<strong>河南风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 河南人 吃腊八饭，是小米、绿豆、豇豆、麦仁、花生、红枣、玉米特等八种原料配合煮成，熟后加些红糖、核桃仁，粥稠味香，喻意来年五谷丰登。<br />\r\n	<strong>江苏风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 江苏地区 吃腊八粥分甜咸两种，煮法一样。只是咸粥是加青菜和油。苏州人煮腊八粥要放入茨菇、荸荠、胡桃仁、松子仁、芡实、红枣、栗子、木耳、青菜、金针菇等。清代苏州文人李福曾有诗云：&ldquo;腊月八日粥，传自梵王国，七宝美调和，五味香掺入。&rdquo;<br />\r\n	<strong>浙江风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 浙江人 煮腊八粥一般都用胡桃仁、松子仁、芡实、莲子、红枣、桂圆肉、荔枝肉等，香甜味美，食之祈求长命百岁。据说，这种煮粥方法是从南京流传过来的，其中内含若干传说。<br />\r\n	<strong>四川风俗</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 四川地大人多.腊八粥做法五花八门，甜咸麻辣，而农村人吃咸味的比较多，主要是用黄豆、花生、肉丁、白萝卜、胡萝卜熬成的。异乡人来此品尝，虽入乡随俗，但很难习惯，现如今城市人吃甜粥的也不少，堪称风味各异。腊八与粥可谓密切相关，而粥喝在腊八，也算是喝出了花样，喝出了水平。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 国人如此钟情腊八粥，食俗之外，也确有些科学道理。清代营养学家曹燕山撰《粥谱》，对腊八粥的健身营养功能讲得详尽、清楚，调理营养，易于吸收，是&ldquo;食疗&rdquo;佳品，有和胃、补脾、养心、清肺、益肾、利肝、消渴、明目、通便、安神的作用。这些已都被现代医学所证实。对于老年人说来，腊八粥同样也是有益的美食，但也应注意不宜多喝。其实，何止是腊八，平素喝粥，对老年人也是大有裨益的。粥的品种也相当多，可因人而异，按需选择，酌情食用。<br />\r\n	<strong>腊八美食</strong><br />\r\n	<strong>腊八豆腐</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&ldquo;腊八豆腐&rdquo;是安徽黔县民间风味特产，在春节前夕的腊八，即农历十二月初八前后，黔县家家户户都要晒制豆腐，民间将这种自然晒制的豆腐称作&ldquo;腊八豆腐&rdquo;。<br />\r\n	<strong>翡翠碧玉腊八蒜</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 泡腊八蒜是北方，尤其是华北地区的一个习俗。顾名思义，就是在阴历腊月初八的这天来泡制蒜。其实材料非常简单，就是醋和大蒜瓣儿。做法也是极其简单，将剥了皮的蒜瓣儿放到一个可以密封的罐子，瓶子之类的容器里面，然后倒入醋，封上口放到一个冷的地方。慢慢地，泡在醋中的蒜就会变绿，最后会变得通体碧绿的，如同翡翠碧玉。</p>\r\n<p>\r\n	<img alt=\"\" src=\"/uploads/allimg/130202/1-130202160J3948.jpg\" style=\"width: 568px; height: 556px;\" /><br />\r\n	<strong>煮&ldquo;五豆&rdquo;</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;有些地方过腊八煮粥，不称&ldquo;腊八粥&rdquo;，而叫做煮&ldquo;五豆&rdquo;，有的在腊八当天煮，有的在腊月初五就煮了，还要用面捏些&ldquo;雀儿头&rdquo;，和米、豆（五种豆子）同煮。据说，腊八人们吃了&ldquo;雀儿头&rdquo;，麻雀痛，来年不危害庄稼。煮的这种&ldquo;五豆&rdquo;，除了自食，也赠亲邻。每天吃饭时弄热搭配食用，一直吃到腊月二十三，象征连年有余。<br />\r\n	<img alt=\"\" src=\"/uploads/allimg/130202/1-130202160R2329.jpg\" style=\"width: 644px; height: 553px;\" /></p>\r\n','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('8','19','在中国历史上，关于酒的最早的溯源，既有&ldquo;酒星始酒&rdquo;、&ldquo;上皇兴酒&rdquo;的典故，又有&ldquo;仪狄作醪&rdquo;、&ldquo;杜康酿酒&rdquo;的传说。人类酿酒已有近万年的历史，而中国，则是世界上学会酿酒最早的国家之一，同时也是独具匠心首创用酒曲发酵酿造粮食酒的国家。<br />\r\n&nbsp;&nbsp;&nbsp; 茅台酒始于何时？当从赤水河酿酒的历史说起。赤水河发源于云南镇雄，古称大涉水、安乐水，后为赤虺河，再后称赤水河，因沿岸土壤为紫红色，雨水流入河中成红色而得名。&ldquo;集灵泉于一身，汇秀水而东下&rdquo;的赤水河，是一条美酒飘香的河，也是中华民族有史记载最早酿造美酒的地区。<br />\r\n&nbsp;&nbsp;&nbsp; 抛开神奇的传说不提，历史上最早记载赤水河畔酿酒史的，为司马迁的《史记》。《史记&middot;西南夷列传》载：公元前130多年，汉武帝刘彻饮到来自夜郎(今黔北一带)所产的名酒&ldquo;枸酱&rdquo;，情不自禁地赞曰：&ldquo;甘美之&rdquo;。以后便有了汉武帝派大将唐蒙到贵州开拓夷道，专门绕道茅台所在的仁怀的历史，有道是&ldquo;汉家枸酱为何物？赚得唐蒙益部来。&rdquo;为此，清代著名诗人郑珍曾写道：&ldquo;枸酱乃从益部来。&rdquo;茅台古称益部，而枸酱，经考证为仁怀赤水河一带生产的用水果加入粮食经发酵酿制的酒。<br />\r\n&nbsp;&nbsp;&nbsp; 2000多年前的中国汉朝，任何产品都不可能有品牌。赤水河畔益部(茅台)所产的枸酱是不是茅台酒的前身，没有人说得清楚。但是有一点是可以肯定的，茅台酿酒的历史源远流长，而产自茅台的所有美酒中，最好的当数被后人以地名冠于酒名的茅台酒。所以，在今天林林总总的中国传统白酒品牌中，茅台酒理应是历史最为悠远、品质最早享誉的名酒之一。<br />\r\n&nbsp;&nbsp;&nbsp; 在中国的酿酒史上，真正完全用粮食经制曲酿造的白酒始于唐宋。而赤水河畔茅台一带所产的大曲酒，就已经成为朝廷贡品。至元、明期间，具有一定规模的酿酒作坊就已经在茅台镇杨柳湾(今茅台酒厂一车间片区)陆续兴建，值得注意的是，茅台当时的酿酒技术已开创了独具特色的&ldquo;回沙&rdquo;工艺。所产优质白酒顺赤水河入川后经长江远销，陆路则翻山越岭由马帮驮运销往贵阳等地。<br />\r\n&nbsp;&nbsp;&nbsp; 至明末清初，随着当时交通、经济的发展，仁怀地区的酿酒业达到村村有作坊，户户闻酒香的兴旺景象。在此期间，茅台地区独步天下的回沙酱香型白酒已臻成型。到了1704年(康熙四十二年)，茅台白酒的品牌开始出现。以&ldquo;回沙茅台&rdquo;、&ldquo;茅春&rdquo;、&ldquo;茅台烧春&rdquo;为标志的一批茅台佳酿，成为贵州白酒的精品而遐迩闻名。<br />\r\n&nbsp;&nbsp;&nbsp; &ldquo;酒冠黔人国，盐登赤虺河&rdquo;。乾隆年间贵州总督张广泗向朝廷奏请开修疏浚赤水河道以便川盐入黔，工程次年完工后，濒临赤水河的茅台便成为黔北重要交通口岸。便利的水运不仅带来盐业的发展，也促使茅台酿酒业的更加兴旺，到嘉庆、道光年间，茅台镇上专门酿制回沙酱香茅台酒的烧房已有20余家，其时最有名的当数&ldquo;偈盛酒号&rdquo;和&ldquo;大和烧房&rdquo;。到1840年，茅台地区白酒的产量已达170余吨，创下中国酿酒史上首屈一指的生产规模，&ldquo;家唯储酒卖，船只载盐多&rdquo;成为那一时期茅台繁忙景象的历史写照。<br />\r\n&nbsp;&nbsp;&nbsp; &ldquo;风来隔壁三家醉，雨过开瓶十里香&rdquo;。<br />\r\n&nbsp;&nbsp;&nbsp; 茅台所产的酒质量特别好，从古至今早有定论。<br />\r\n&nbsp;&nbsp;&nbsp; 汉高祖刘邦饮过枸酱酒后赞不绝口。汉武帝刘彻饮之盛赞&ldquo;甘美之&rdquo;。曾写下&ldquo;杨柳春风一杯酒，江湖夜雨十年灯&rdquo;佳词名句的北宋大诗人黄庭坚，饮之则叹曰&ldquo;殊可饮&rdquo;。太平天国名将石达开七经仁怀，畅饮茅台酒之后更是写下&ldquo;万倾明珠一瓮收，君王到此也低头，赤虺托起擎天柱，饮尽长江水倒流&rdquo;的千古名句。翼王虽然兵败大渡河，但他诗中隐喻赤虺托起的&ldquo;擎天柱&rdquo;，是否使人隐隐感悟到赤水河畔的茅台百年之后将会成为中国的&ldquo;国酒&rdquo;？<br />\r\n&nbsp;&nbsp;&nbsp; 茅台地区所产之酒质量为什么特别好？在过去，无法用科学的手段来揭示。但赤水河畔悠远的酿酒历史，茅台地区特殊的气候、水质，独具匠心的酿酒工艺，早为古人所知并加于总结。清道光年间的《遵义府志》载：&ldquo;茅台酒，仁怀城西茅台村制酒，黔省称第一。其料用纯高粱者上，用杂粮者次。制法：煮料和曲即纳窖中，弥月出窖烤之，其曲用小麦，谓之白水曲，黔人称大曲酒，一曰茅台烧。仁怀地瘠民贫，茅台烧房不下二十家，所费山粮不下二万石。&rdquo;这段记载，准确地描绘了当年茅台酒的品牌、酒质、制作工艺及生产规模。','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('9','19','<strong>茅台有着红色彰显的历史</strong><br />\r\n&nbsp;&nbsp;&nbsp; 我们说茅台是中国当之无愧的国酒，还不仅仅在于它的悠远的历史，独特的工艺，卓然的品质。同时，茅台对中国革命特殊的贡献，也是任何其他产品不能比肩并提的。基于此，新中国刚一成立，茅台就被评为国酒。如同井冈山、遵义、延安一样，她们哺育了中国革命，她们是中国革命的摇篮、名城、圣地，中国共产党领导的中国就会给予她们特别的荣誉，就会永远将她们对革命的贡献铭刻在历史的丰碑上。<br />\r\n&nbsp;&nbsp;&nbsp; 茅台，红色彰显的历史始于中国工农红军艰苦卓绝的二万五千里长征。1935年3月16日，红军攻占茅台。为了保护遐迩闻名的茅台酒生产作坊不受损失，军委政治部分别在茅台镇上生产茅台酒最多的成义、荣和、恒兴三家酒坊门口贴上布告：&ldquo;民族工商业应鼓励发展，属于我军保护范围。私营企业酿制的茅台老酒，酒好质佳，一举夺得国际巴拿马大赛金奖，为国人争光，我军只能在酒厂公买公卖，对酒灶、酒窖、酒坛、酒甑、酒瓶等一切设备，均应加以保护，不得损坏，望我军全体将士切切遵照。&rdquo;从这张通告中可以看出红军对民族工业、对知名产品的高度重视。<br />\r\n&nbsp;&nbsp;&nbsp; 为了欢迎红军，当地群众捧出茅台酒。茅台酒好，当时红军的很多高级领导人都知道。红军工兵连长王跃南回忆说，他与毛泽东的警卫员陈奉昌从酒坊买酒回来，正巧碰上毛泽东同志，毛泽东问，你们提的么子？陈奉昌回答，买的酒，驱驱疲劳擦擦腿。毛泽东笑着说：&ldquo;茅台是出名酒的地方，不过，用这酒擦脚太可惜了！&rdquo;周恩来也向很多同志介绍&ldquo;这是巴拿马万国博览会获了金奖的茅台啊&rdquo;！<br />\r\n&nbsp;&nbsp;&nbsp; 然而，对于当时的红军队伍来说，茅台酒恢复疲劳的功能和治病疗伤作用更是终生难忘。据参加过长征的我军第一位女将军李真后来回忆：&ldquo;1935年3月，我们长征到贵州仁怀县茅台镇。由于长途劳累和暂时甩掉蒋介石军队的围追堵截，大家都希望能轻松一下。当时听说当地酒好，芳香味美，大家很高兴。有的用酒揉揉手脚，擦擦脸，擦过之后，真有舒筋活血的作用，浑身感到痛快。同志们喝了酒后，长途行军的疲乏全消失了，因风寒而引起泻肚子的同志喝了酒也好了。&rdquo;<br />\r\n&nbsp;&nbsp;&nbsp; 著名作家成仿吾在其《长征回忆录》中写道：&ldquo;因军情紧急，不敢多饮，主要用来擦脚，恢复行路的疲劳。而茅台酒擦脚确有奇效，大家莫不称赞。&rdquo;<br />\r\n&nbsp;&nbsp;&nbsp; 抗战末期，周恩来在重庆曾经对作家姚雪垠说：&ldquo;1935年，我们长征到茅台时，当地群众捧出茅台酒来欢迎，战士们用茅台酒擦洗脚腿伤口，止痛消炎，喝了可以治疗泻肚子，暂时解决了我们当时缺医少药的一大困难。红军长征胜利了，也有茅台酒的一大功劳。&rdquo;<br />\r\n&nbsp;&nbsp;&nbsp; 1949年末贵州刚一解放，中央就来电，要求贵州省委、仁怀县委要正确执行党的工商业政策，保护好茅台酒厂的生产设备，继续进行生产。贵州省根据中央的指示，对成义、荣和、恒兴三家烧房在经济上给予有力支持，帮助其发展。对其老板还给予政治待遇，在人民政府中安排了职位。<br />\r\n&nbsp;&nbsp;&nbsp; <strong>1951</strong><strong>年，贵州省将最大的</strong><strong><a href=\"http://www.52dzj.com\">成义烧房（华茅）</a></strong><strong>收购，并将另两家烧房合并进来，成立了国营茅台酒厂。</strong>政府随即调入得力干部，投入大量资金扩大生产规模，茅台酒从此开始了欣欣向荣的历史。<br />\r\n&nbsp;&nbsp;&nbsp; 1949年10月，开国大典前夜，茅台酒就进了中南海怀仁堂，共和国的开国元勋们以此互为敬贺。据中新社报道：开国大典当晚的开国第一宴在北京饭店举行，从厨师选择到菜单酒品都经周恩来亲自审定，主酒为茅台。国运兴，国酒兴，当年为红军疗伤洗尘的茅台酒终于成为共和国的&ldquo;开国喜酒&rdquo;。<br />\r\n&nbsp;&nbsp;&nbsp; 茅台酒虽然对中国革命做出了特殊贡献，但是它从被尊为&ldquo;开国第一酒&rdquo;到两年后的中国&ldquo;国酒&rdquo;，却是在全国性的评酒会上评出来的。<br />\r\n&nbsp;&nbsp;&nbsp; 1952年9月，中国有史以来的全国第一届评酒会在北京举行。周恩来总理不仅批准举行评酒会，而且再三叮嘱，要认真组织，严格把关，评出好酒。评酒会由中国专卖事业总公司主持，全国各地送来了上万种参评样酒，到评酒会正式开会前，已筛选出103种酒样供评酒会品评。经过来自全国的酿造专家、评酒专家及学者的认真评品，最终选出并命名了中国八大名酒，茅台酒名列榜首，理所当然地成为中国的国酒。从某种意义上来说，这次评选，既是历史的认定，又是人民的认定，茅台酒被评为国酒当之无愧！<br />\r\n&nbsp;&nbsp;&nbsp; 从此以后，茅台酒作为国酒，不仅成为规格最高、彰显高贵的国宴酒、外交礼仪酒，而且成为中国民间弥足珍贵的上乘佳品。同时，党和国家为了茅台酒的生产和质量保证也给予了高度重视。即使是在&ldquo;文革&rdquo;中，身患重病的周恩来总理仍在强调&ldquo;不准污染茅台河水&rdquo;。<br />\r\n&nbsp;&nbsp;&nbsp; 1999年10月，中华人民共和国诞生50周年之际，中国历史博物馆收藏了一瓶50年的陈酿茅台，并为茅台酒厂颁发了收藏证书：&ldquo;兹因茅台酒与共和国的世纪情缘和卓越品质而尊为国酒，暨在共和国五十华诞中以窖藏五十年之&lsquo;开国第一酒&rsquo;晋京献礼而誉为历史见证和文化象征。现我馆接受贵州茅台五十陈酿酒捐赠，并予永久收藏。&rdquo;<br />\r\n&nbsp;&nbsp;&nbsp; 这份收藏证书，从一个侧面明确地肯定了茅台酒与中国革命的红色情缘、特殊贡献、卓越品质，以及茅台酒作为国酒的尊贵而崇高的地位。','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('10','19','<strong>茅台有着名冠世界的历史</strong><br />\r\n&nbsp;&nbsp;&nbsp; 作为世界三大蒸馏名酒之一的贵州茅台酒，名冠四海的历史是从1915年开始的。几乎可以这样说，在此之前，古老的中国虽然有着悠远的酿酒历史，有着丰厚的酒的文化渊源，有着风格各异的众多美酒，但还没有哪一种佳酿能够冲出华夏大地，香飘环宇，并为国际社会所认同。<br />\r\n&nbsp;&nbsp;&nbsp; 但是，茅台走出去了，代表中国传统白酒的最高境界走出去了，初次飘洋过海就一鸣惊人，首次登台亮相便饮誉世界。<br />\r\n&nbsp;&nbsp;&nbsp; 也就在这届国际博览会上，经过各国评委反复比较、品评，一致认为茅台酒色、香、味俱佳，堪为世界名酒，于是，与法国的科涅克白兰地、英国的苏格兰威士忌共同被评为世界三大蒸馏酒，并授予金牌和奖凭。茅台，从此走上世界舞台，从此高踞世界三大名酒的宝座。<br />\r\n&nbsp;&nbsp;&nbsp; 茅台酒获得国际金奖，成为世界名酒，偶然中蕴涵着必然，这个&ldquo;必然&rdquo;，就是茅台酒佳韵天成的独特风味和亘古相传的卓越品质。<br />\r\n&nbsp;&nbsp;&nbsp; 获奖之后的茅台从此声名大振，供不应求，成为当时中国各种重要社交场合中的头号名酒，也成为中国在国际社会知名度最高的惟一名酒。从这个意义上来说，还没有被明确为&ldquo;国酒&rdquo;的茅台酒其实早就具有了&ldquo;国酒&rdquo;的意义，早就被国人赋予了&ldquo;国酒&rdquo;的巨大信任和至高荣誉。<br />\r\n&nbsp;&nbsp;&nbsp; 毛泽东第一次赴苏联赠送给斯大林的礼品之一就是茅台酒；日内瓦会议，新中国外交战线取得的第一次胜利，周总理说茅台酒功不可没；尼克松首次访华，打破中美关系坚冰后，与周恩来开怀畅饮的是茅台酒；中日邦交正常化之后，田中首相回国带给女儿的贵重礼物是周恩来送的茅台酒；中英香港问题谈判结束后，邓小平与撒切尔夫人共同举杯相庆的是茅台&hellip;&hellip;可以这样说，用茅台来招待国家贵宾几乎已成惯例；茅台，作为中国的国酒，对外交往的国礼酒，它代表着中华民族的悠久的历史和深厚的文化。<br />\r\n&nbsp;&nbsp;&nbsp; 我们还可以从另一方面看到国酒茅台在世界各国的影响。到二十世纪九十年代末，茅台酒连续14次荣获国际金奖。从1953年开始通过香港、澳门转口销往国际市场以来，茅台酒出口如今已遍及世界150多个国家和地区，年创外汇1000多万美元，成为中国出口量最大、所及国家最多、吨酒创汇率最高的传统白酒类商品。<br />\r\n&nbsp;&nbsp;&nbsp; 八十年金牌不倒，八十年风华更茂。这是茅台一笔无可比拟的财富，更是一种难以超越的殊荣！由是观之，国酒茅台，实至名归！','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('11','19','有条微博非常热门，转发超过15万次，评论1.1万条，包括明星马伊琍在内的诸多名人，都参与了转发。原微博写着：&ldquo;今天我们科室又收来16个食道癌的患者，最年轻的才27岁，全是食管中段病变。可以断定的是，都是喝酒后呕吐出血才来检查的。还好是早期癌。喝酒脸红的人是体内缺少解酒的物质，脸红是中毒的症状，这样的人喝酒比其他人患食道癌概率多16到28倍。别再说脸红的人能喝了。年纪轻轻的，爱惜身体啊。&rdquo;原微博，来自一位叫做&ldquo;qiu无忌不喝酒&rdquo;的用户。<br />\r\n&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp; 发现早在2009年，美国国立卫生研究院就有专家从事酗酒及酒精中毒研究，名叫Philip J.Brooks的人作为第一作者，在《美国科学公共图书馆&middot;医学》杂志上发表了一篇长达4页半的论文，阐述喝酒与脸红、食道癌之间的关系。<br />\r\n&nbsp;&nbsp;&nbsp; 论文中有许多的研究，其支持观点，都来自世界上最权威的医学杂志《柳叶刀》。<br />\r\n&nbsp;&nbsp;&nbsp; Brooks和日本久里滨酒精研究中心的研究人员联合研究发现，大约三分之一的东亚人(日本人、中国人和韩国人)身体中缺乏乙醛脱氢酶2(ALDH2)，这种酶在分解酒精的过程中起着重要作用；缺乏这种酶的人即使喝一点儿酒，脸色也容易变红。他们比不缺乏ALDH2酶的人，有更高的患食道癌的风险。<br />\r\n&nbsp;&nbsp;&nbsp; 研究结论是，有ALDH2缺陷的人，每天喝2杯啤酒(180毫升)，会使患食道癌的风险增加6~10倍。<br />\r\n&nbsp;&nbsp;&nbsp; 浙江一医院胃镜发现，确有一种食道癌与酒精关系密切<br />\r\n&nbsp;&nbsp;&nbsp; 浙江大学医学院附属第二医院消化内科主任医师潘文胜说，一般认为，食道癌的相关因素包括：酒精、微量元素钼缺乏、长期吃腌制霉变食物、抽烟等。<br />\r\n&nbsp;&nbsp;&nbsp; 多年来，他一直在关注两个食道癌高发地区：台州仙居和衢州。他说，前一个地区，可能和食物粗糙有关；而后一个地区则可能与食辣有关。<br />\r\n&nbsp;&nbsp;&nbsp; 那么喝酒与食道癌到底有多大的关系？<br />\r\n&nbsp;&nbsp;&nbsp; 潘文胜说，每年通过胃镜检查，他会发现近200例食道癌患者。他们中的9成，是鳞状上皮细胞癌。&ldquo;这种食道癌与酒精关系就非常密切了。&rdquo;<br />\r\n&nbsp;&nbsp;&nbsp; 潘文胜建议，40岁以上的人，如果发现咽喉不舒服、吞咽有异样感、胸骨后疼痛、反酸等，应该及时进行胃镜检查。平时喝酒会脸红的病人，在40岁前后，也建议做一次胃镜，看看食道状况。<br />\r\n&nbsp;&nbsp;&nbsp; 浙江医院提供基因检测，看看你是否体内缺乏ALDH2<br />\r\n&nbsp;&nbsp;&nbsp; 如何知道自己是否是ALDH2缺乏症？<br />\r\n&nbsp;&nbsp;&nbsp; Brooks说，初步判断可以问自己两个问题：第一，喝一杯啤酒之后脸红吗？第二，刚开始喝酒的头两年，脸红吗？Brooks认为，这两个问题可以帮助医生初步判断患者是否存在ALDH2缺陷。<br />\r\n&nbsp;&nbsp;&nbsp; 另外还可以用乙醇浸润过的纸片贴在皮肤上，来帮助诊断：如果接触酒精的部位15分钟后变红，这就说明这个人很可能为ALDH2缺陷患者。<br />\r\n&nbsp;&nbsp;&nbsp; 当然最准确的方法是进行基因检测。<br />\r\n&nbsp;&nbsp;&nbsp; 王国付博士说，浙江医院就有ALDH2基因检测项目。检测就像检验血常规一样，抽1毫升血就可以，每次需要付360元。<br />\r\n&nbsp;&nbsp;&nbsp; 王国付说，这种检测可以判断为三种情况。一种是正常型：更快的代谢乙醛，不容易引起乙醛的堆积，对健康的危害稍小些。而不正常的人，因为完全不能代谢酒精，不胜酒力，很快就醉倒了。还有是部分缺乏ALDH2，这类人会逐渐对乙醛、脸红现象产生耐受，成为习惯性的重度饮酒者，是食道癌的高危人群。<br />\r\n&nbsp;&nbsp;&nbsp; 健康教育何超：&ldquo;1秒钟变关公hold住，脸红事小，癌症事大&rdquo;。有喝酒脸红反应是因为代谢酒精的酶有基因缺陷，因而导致有毒的乙醛在体内大量累积，造成血管扩张，引起脸红反应。你还喝吗？你还使劲劝人喝酒？<br />\r\n&nbsp;&nbsp;&nbsp; 奥博脑健康：据报道，世界卫生组织下属的国际癌症研究机构，曾在一份报告中评估酒精和癌症之间的因果关系。结果发现，对于体内缺乏ALDH2或这种酶不能正常发挥功效的人群来说，罹患食道癌的风险随酒精摄入量增多而倍增。<br />\r\n&nbsp;&nbsp;&nbsp; 北京大学肿瘤医院：此现象，确有发现，但内在关联机制尚不明确。<br />\r\n&nbsp;&nbsp;&nbsp; 俞志勇浙江大学医学院附属第一医院：食道癌和很多因素相关，喝酒就是之一。<br />\r\n&nbsp;&nbsp;&nbsp; 央广健康：有研究表明，高度酒会烧伤食道黏膜引发炎症，反复炎症后造成细胞癌变，从而导致食道癌。另外，经常喝醉酒会引发呕吐，呕吐出来的胃酸及食物会刺激食道黏膜，也有可能造成食道癌。<br />\r\n&nbsp;','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('12','19','美酒是自然的馈赠。中国白酒对天赋生态极其依赖，细微至末的考究方能成就最高贵的品质。茅台陈酿每一细节都尊崇天然。<br />\r\n水<br />\r\n&nbsp;&nbsp;&nbsp; 水是酒的灵魂。茅台陈酿完全萃取清冽纯净的赤水。赤水河是我国最天然纯净的河流之一，发端于云南，蜿蜒流淌过连绵青山，经过两岸红土层层过滤，形成纯净、香甜的清澈泉水。据专家科学检验，赤水河水质非常优良，微甜透明，酸碱适度、钙镁离子含量、硬度均符合优质饮用水标准。<br />\r\n山<br />\r\n&nbsp;&nbsp;&nbsp; 山含水势，地蕴酒风。茅台的地质地貌结构，主要是形成于7000万年以前的侏罗白垩系紫色砂页岩、砾岩。土壤主要受海拔高度和岩石风化后成土母质的影响，茅台镇广泛发育着的紫色土层，酸碱适度。砂质和砾石为主的地质结构，形成了天然的滤水系统。特殊的地理环境赋予了茅台酒多种有益的微量元素。<br />\r\n气<br />\r\n&nbsp;&nbsp;&nbsp; 茅台镇海拔仅在400米左右，气候冬暖夏热，风微雨少，形成一个相对封闭，有利于酿酒微生物生长的小环境。加上千百年来旺盛不息的酿酒活动，茅台镇的空气中活跃着大量的微生物群。这些精灵般的微生物在茅台酒开放式发酵过程中被充分网络到曲醅里，对茅台酒神奇品质的孕育功不可没。<br />\r\n源<br />\r\n&nbsp;&nbsp;&nbsp; 美酒之源必为上品。茅台陈酿完全采用昂贵的有机原料，精选上等高粱及小麦。高粱须是高原地带所产的糯高粱，长于红壤，粒小皮薄，耐蒸煮，高淀粉，为酿酒佳品。小麦也须选用本地有机品种。二者进厂，还需经过感官检测和精密的理化分析。高尚品质，足已彰显。<br />\r\n道<br />\r\n&nbsp;&nbsp;&nbsp; &nbsp;在酿造工艺上，茅台酒师法于自然，顺应节气，追求天、地、人的完美和谐。独特的开放式发酵工艺充分能够吸纳空气的微生物质，赋予茅台酒天然的香味。同时，顺应春夏秋冬的节气交替，自然调和酒中祥和醇正之气。正因如此，茅台酒才能成为我们这个星球上唯一不加任何添加调味、净化物质及水分的纯天然发酵食品。<br />\r\n藏<br />\r\n&nbsp;&nbsp;&nbsp; 酒是越陈越香。在自然恒温的酒窖里，茅台酒寂寞的实现着生命的涅磐。天地灵气与珍贵酒液的交融汇合，孕育出气质含蓄、成熟完美的珍贵茅台。日本人曾动用气象色谱仪对陈年茅台进行全面分析，竟惊奇的发现其中含有230余种香气成分，三分之二至今无法辨别属于何种物质，美酒茅台的魅力可见一斑。<br />\r\n技<br />\r\n&nbsp;&nbsp;&nbsp; 如同璞玉需要雕琢，茅台酒的最终形成还需要&ldquo;精心勾兑&rdquo;。勾兑大师的&ldquo;心酒&rdquo;感应为茅台酒添加了更多神奇。多达两百余种单型酒如同精美乐章的音符，在充满艺术般的精心勾兑下，才造就出风格突出、色香俱佳、臻于完善的美酒茅台。<br />\r\n品<br />\r\n&nbsp;&nbsp; &nbsp;茅台酒品尝享用也有诸多神妙。茅台酒一开，&ldquo;奇香溢满室，异芳举座惊&rdquo;。闻香之后，荡香入杯，观其色，微黄透明，纯净深沉。举杯轻摇，对日或月，可见纤细酒花沿杯而生，又复归于灭。<br />\r\n&nbsp;&nbsp;&nbsp; 品茅台酒，有三式，一&ldquo;抿&rdquo;、二&ldquo;咂&rdquo;、三&ldquo;呵&rdquo;，丝丝入扣，从容一体，心神凝聚间完全感受到茅台酒的绝妙。惟有得到茅台品酒大师们的认可，国酒茅台方能上市场。<br />\r\n&nbsp;&nbsp;&nbsp; 处处高品位，才有非凡品质的国酒茅台。<br />\r\n&nbsp;&nbsp;&nbsp; 天香之作茅台陈酿，传奇品质，经典魅力，尽在低饮浅斟之中。不知不觉，让您进入最为醇美的境界。<br />\r\n&nbsp;','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('13','19','藏酒是不会赔钱贬值的，只要以出品年正常售价购入，随时间的推移，只会增值，是不会贬值的。只是增值的幅度不同罢了。<br />\r\n藏酒初期每年的增值幅度大约十几个百分点，时间越长，每年的增值幅度越大。<br />\r\n藏酒作为一项投资，其风险收益评估后，其是一个极好的投资项目，可稳健收益。<br />\r\n藏酒一定要选对品种，中国白酒，特别是酱香型的，是最佳藏酒品种，具有可长期陈藏能力。根据陈藏能力，蒸馏酒的陈藏时间大于发酵酒，即白酒陈藏价值大于红酒、黄酒等酒种；酱香型白酒又大于其它香型。<br />\r\n藏酒一定要选酒质超群的顶级好酒，酒好好喝才是硬道理。<br />\r\n<br />\r\n<strong>藏酒的本质</strong>--通过陈藏手段，选取具有陈藏能力的极优质酒品，利用越陈酒越香的原理，从而获得最优质酒品的稀缺资源。这种资源是不可复制的，是稀缺的，是受众生所青睐的。其稀缺性随时间的推移，愈发珍贵。从而获得其价值的增长。','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('14','19','国人爱酒，尤其是<a href=\"http://www.51dzj.com\"><strong>白酒</strong></a>，这种爱好不仅体现在餐桌上，也投射在股市中。2010年以来，中国股市3年走熊，白酒类上市公司股票却走出了一波强劲上扬的大行情，酒鬼酒和贵州茅台是其中最耀眼的明星：前者股价暴涨数倍，后者始终牢牢占据沪深两市第一高价股的王座。与此同时，在消费市场和收藏市场上，以茅台为代表的名牌白酒也备受追捧，中国经济因此演绎了一段&ldquo;对酒当歌&rdquo;的传奇。<br />\r\n&nbsp;&nbsp;&nbsp; 当然，&ldquo;对酒当歌&rdquo;的主旋律中也有一些不和谐的音符。随着茅台销售价格步步攀高，国人对于它的批评之声不绝于耳，主要是指责茅台蜕变为权贵阶层专享的奢侈品和腐败酒，普通老百姓根本喝不起。不过，茅台酒厂的经营者们对&ldquo;奢侈品&rdquo;的指责似乎甘之如饴，也许在他们的价值观中，茅台就是为上流社会服务的。<br />\r\n&nbsp;&nbsp;&nbsp; 茅台的名贵，源于它悠久的历史和独特的酿制工艺，此外，周恩来等老一辈国家领导人与茅台之间的逸闻趣事，也极大地提高了它的身价，攀龙附凤的好处由此可见一斑。这些都可以看作茅台定价高的正当理由。不过，也有一些因素让茅台的高定价显得不那么正当，主要有两点：其一，政府官员铺张浪费式的&ldquo;三公&rdquo;消费，成全了茅台的高价格；其二，茅台从出厂到销售终端，有四、五道转手环节，这种人为增加的物流成本最终转嫁给了消费者。<br />\r\n&nbsp;&nbsp;&nbsp; &ldquo;三公&rdquo;消费是中国官场的顽疾，国人对此喊打多年但成效不彰，难免有一些&ldquo;审美疲劳&rdquo;，相应的痛感也有所麻痹。但是，国人对于物流成本畸高而产生的痛感，这两年来是日益加剧的。去年，一则新闻报道灼痛了国人的神经：同一品质的茅台，在美国、日本和越南等国的售价只有中国的一半以下。因此，出境旅游的中国人从国外购买茅台带回国内悄然成风。该新闻能够曝光并推动公众对于国内物流成本高企的现象进一步反思，要在很大程度上归功于出国旅游者的微博爆料。由此可见，经济全球化不仅促进了商品的跨境交流，也拓展了国人的中外比较视野。<br />\r\n&nbsp;&nbsp;&nbsp; 有意思的是，在国内高价名牌白酒引发的批评达到高潮之际，白酒企业阵营内部也展开了一场论战。茅台申请&ldquo;国酒&rdquo;商标便是这场论战的导火线。尽管在民间，茅台已经有&ldquo;国酒&rdquo;的口碑，但茅台不满足于此，决意借助政府之手将自身&ldquo;国酒&rdquo;的名号做实。对此，五粮液等其他白酒企业当然不肯玉成，而是组成了反对者联盟去搅局，让有权批准商标的政府部门好生为难，毕竟各大知名白酒企业背后，都有企业所在地的地方政府做靠山，哪一个都得罪不起。政企联姻的微妙之处，是这场&ldquo;国酒&rdquo;商标战的精髓所在。<br />\r\n&nbsp;&nbsp;&nbsp; &ldquo;塑化剂事件&rdquo;的阴影还在笼罩，官场反腐的达摩克里斯之剑又从天而降。日前，中央军委颁发&ldquo;禁酒令&rdquo;，让茅台的投资者风声鹤唳。坊间一直传说，军队是茅台酒的重要消费群体，也是茅台酒厂利润的重要来源，因此，&ldquo;禁酒令&rdquo;一旦在军队中严格执行，必然对茅台股价构成重大利空。此外，不排除&ldquo;禁酒令&rdquo;的榜样效应有在官场扩散的可能，因此，茅台等名牌白酒所面临的利空还没有终结。江湖有谚云：&ldquo;出来混，总是要还的&rdquo;。曾经依托于&ldquo;三公&rdquo;消费而牛气冲天的茅台、五粮液们，经过此番教训之后，未来会不会向老百姓放下身段呢？<br />\r\n&nbsp;&nbsp;&nbsp; 有人说，美国的经济是苹果引领的，而中国的经济是茅台引领的。此话貌似戏谑，却不无道理。美酒藏风物，杯里有乾坤，从中窥见中国经济的倒影，并非小题大做。写到这里，笔者也有几分醉意了，就此打住。<br />\r\n&nbsp;','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('15','19','礼尚往来是中华传统文化几千年来的传承。相互赠送礼品也是我们处在社会中必须学会的交际之道。这里面的&ldquo;礼&rdquo;字我想有两个含义，其一是礼仪方面，人家以礼相待你当然要还之彼身。其二，是指礼物，我们在相互交往中有时候是需要互赠一些礼物，作以调剂我们的人际关系。<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现在越来越多的人感觉到礼物在我们生活中的重要性，当然，也就有越来越多的人为送什么样的礼物而头疼不已。随着社会的进步、消费水平的提高，现在对于礼物的选择范围也越来越远，现今，<strong>个性定制礼品</strong>被越来越多的消费者选择和认可，有以下三大理由：<br />\r\n1、个性设计，专属定做<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 酒香盛世根据客户提供的信息提练出个性元素，将其融入酒器中，生产出来的<a href=\"http://www.51dzj.com\"><strong>个性定制酒</strong></a>将会是世界上独一无二的礼品，不会再有第二件礼物和您的雷同，不必担心收礼人觉得您的礼物没有新意，不具特色的。也正是这样一份独一无二，用心定制的礼物，也显得弥足的珍贵。充分体现您对受礼者的重视并用心送礼的情谊，以收礼人为中心，无论是礼品的创意和设计，还是定制流程，都围绕他的个性和品味而进行的，充分体现了您对他的重视，并展示的您对收礼人的情意及用心良苦，将您要表现的心意展现得淋漓尽致，您的用心还担心对方领会不到？<br />\r\n2、个性礼品让对方无从拒绝、倍加珍惜<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 创意定制酒服务，将送礼人的心意和收礼人相关的个性元素与作品融合在一起，集观赏、实用、纪念、收藏于一体，将与之相关的个性元素融入到酒礼中，真正做到独一无二。受礼人在品味独特的酱香型白酒的同时，感受送礼者的贴心、情意，无不倍加珍惜，这样的礼品让人无从拒绝、无法转送、永久保存。定制酒将每一瓶酒器打造成结合送礼人心意和收礼人个性元素的专属礼品，这样的一份为对方量身定制的酒礼，珍惜还来不及，还舍得转送出去吗？而具有独特的个性创意元素，也让对方无法转送。<br />\r\n3、意想不到的礼品留下意想不到的惊喜和回忆<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 酒香盛世<a href=\"http://www.51dzj.com\"><strong>个性定制酒</strong></a>因您的参与，让您的情意、品味融合在这件独具匠心的礼品当中，定制出意想不到的礼品，送出意想不到的惊喜，收获意想不到的效果，更有让收礼人&ldquo;睹物思人&rdquo;的特殊效果，并就此留下永久而美好的回忆。<br />\r\n&nbsp;','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('16','20','香槟&ldquo;CHAMPAGNE&rdquo;，与快乐、欢笑同义。始终充满奢侈、诱惑、浪漫的色彩，也是葡萄酒中的王后。在历史上没有任何酒，可比美香槟的神秘性，它给人一种纵酒高歌的豪放气氛，它独特的汽泡和甘甜的香味为无数人增添欢乐。让惊喜随着那一清脆的&ldquo;砰&rdquo;响喷薄而来&hellip;&hellip; ，于是，一切，还没开始，心里就泛起一抹金色的遐想。<br />\r\n&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 路易王妃香槟--求婚香槟 世界上最著名的香槟之一。是英皇室的御用香槟，也是欧洲贵族的挚爱。酒香清新雅致，带富士苹果，多士等复杂多变香味。口感高雅，活跃又浪漫无比。在法国，很多人用路易王妃水晶香槟(Louis Roederer Cristal)来向女朋友求婚，以示态度的真诚。女孩子会因受到王妃般的礼遇而感动，再加上香槟那恰到好处的酒精的作用，所以，只要女孩子喝了香槟，就会很自然地答应求婚。久而久之，路易王妃香槟便被赋予了爱情、求婚的意义。水晶香槟一般是用于上流社会的经典晚宴。也有不少高收入人士在求婚时向爱侣开一瓶水晶香槟以表态度的真诚和感情像水晶般纯洁。<br />\r\n&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 路易王妃香槟建园于1776年，面积178公顷。按照香槟区的种植法定（Appellation）种植霞多丽（Chardonnay）和黑皮诺（Pinot Noir）两种葡萄。此园的区域微型气候相当稳定，因此不管年份如何都能保持一贯水准。两处不同的葡萄园，赋予黑皮诺不同的风格，兰斯山葡萄园的黑皮诺为酒支撑起架构，马恩谷葡萄园的黑皮诺则为酒带来芳香和柔和口感。路易王妃所生产的Brut Premier，是一只没有年份的香槟，在市场上有很高的评价，她的陈年比一般的3-4年还要久，因此饮用时能获得即时的快乐，由于她用66%的黑皮诺葡萄酿制，因此呈现令人愉悦的果香味，颜色带些鲑鱼红，十分诱人，这款酒90年问世，也被Wine Spectator杂志选为最好的香槟之一。特点：色泽金黄，气泡细致而持续。口感十分柔滑，有着苹果、梨、樱桃、烤面包、杏仁等复合味道，是令人欣喜的酒。<br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-1302021620122P.png\" style=\"width: 697px; height: 409px;\" />','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('17','20','为什么选择酒钟情DIY个性化定制酒？<br />\r\n一、对企事业单位：<br />\r\n1、将个性化定制酒作为贵方产品或者服务的赠品赠送给消费者，增加贵方形象及品牌附加值；<br />\r\n2、将个性化定制酒融入贵方对消费者的问候、感激、祝福之情，增进消费者与贵方情感联系；<br />\r\n3、将个性化定制酒作为贵方在节假日、客户生日的时间作为高端礼品送出去，可以加强客户对贵方产品或者服务的忠诚度及满意度；<br />\r\n4、将个性化定制酒融入贵方产品宣传、广告促销、答谢会、年会、招待、员工福利方面作为个性化的礼品会在一定程度上会引起口碑宣传及消费者转介绍；<br />\r\n5、<a href=\"http://jzqdiy.com\" target=\"_blank\">个性化定制酒</a>是赠品、节假日礼品、奖励、促销、市场推广、客户维系、年会庆祝、招待等各个层面最好的选择&hellip;&hellip;<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n二、对个人送礼人群<br />\r\n1、个性化定制酒是最好的生日礼物；<br />\r\n2、个性化定制酒是最好的暗恋表白；<br />\r\n3、个性化定制酒是最好的祝福礼物；<br />\r\n4、个性化定制酒是最好的友情见证；<br />\r\n5、个性化定制酒是最好的赠别情谊；<br />\r\n6、个性化定制酒是爱情甜蜜的延续；<br />\r\n7、个性化定制酒是纪念日温馨伴侣；<br />\r\n8、个性化定制酒是聚会最佳调味品；<br />\r\n<a href=\"http://www.jzqdiy.com\" target=\"_blank\">个性化定制酒</a>是关怀父母、感恩父辈、体贴呵护爱人、关心朋友、暗恋表白、生日礼物、周年纪念、祝福、话别、聚会等。战友情、师生情、朋友情、爱情、亲情等所有喜怒哀乐都可以借助个性化定制酒来宣泄或者表达。<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n三、婚庆人群<br />\r\n1、个性化定制酒是婚礼邀请亲朋好友最佳的请柬卡；<br />\r\n2、个性化定制酒是婚礼幸福最大的分享与传递招待酒；<br />\r\n3、个性化定制酒是婚礼幸福浪漫甜蜜时刻的见证；<br />\r\n4、个性化定制酒是婚礼赠送亲朋好友的最佳礼物；<br />\r\n5、个性化定制酒是婚礼感恩父母养育之恩的最佳情谊；<br />\r\n6、个性化定制酒婚礼主人公是彰显尊贵与魅力的完美体现。<br />\r\n&nbsp;','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('18','20','<img alt=\"\" src=\"/uploads/allimg/130202/1-130202162H5963.png\" />','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('19','20','仿佛时空拉开一个隧道，身着一袭旗袍的丽人款款而来。一首低吟平仄的诗，赋的是美酒，醉的是人心。刹那间，空气中弥漫的是浓郁的酒香。只是一品，竟是笑颜如花...... 93年拉图 产地: 法国-波尔多美度区-菩依乐村 酒庄:拉图酒庄 类型:干红 年份:1993年 等级:列级名庄第1级葡萄 种类:赤霞珠、梅洛、佛朗、小伟度 酒精度:12.5% 容量:750ML 93年拉图 例级名装第一级(Chateau Latour) 口感;单宁细致而紧密，成熟、厚重、顺滑。酒体均衡而优雅，是浓郁葡萄酒的典范。拉图庄园的城堡位于波尔多芝朗狄河（Gironde）河口。这座由英国人在15世纪建成的城堡，最初是为了防止海盗而建，后来更成了英法百年战争时兵家必争之地。拉图城堡在16世纪已开拓为葡萄园。<br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-130202162RN53.png\" style=\"width: 706px; height: 400px;\" />','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('20','20','<strong>[ </strong><strong>鉴道白酒知识讲座 ]</strong>&nbsp; 之二 <strong>白酒收藏</strong><br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-1302021629131G.jpg\" style=\"width: 553px; height: 449px;\" />','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('21','20','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100.0%;\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				什么是私藏(级)酒 ？Gran Reserve</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<div style=\"clear:both;\">\r\n	&nbsp;</div>\r\n(本私藏酒制由本庄主-中国&ldquo;私藏酒之父&rdquo;刘雷先生创制)&nbsp;<br />\r\n私藏酒酒制:<br />\r\n1.&quot;私&quot;：指须为私人家族酒庄出品的私家酒。具有本家特有的酒格，须有酒庄签封,单独<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 编号。全手工制－手工酿造，手工装瓶，手工封口,手工贴标，不用机械化大批<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 生产。&nbsp;<br />\r\n2.&quot;藏&quot;：一指酒质能够陈藏，值得陈藏.<br />\r\n酒体必须是&quot;酿造酒&quot;.（不能是&ldquo;勾兑酒&rdquo;，可使用&ldquo;掺兑&rdquo;工艺。）酒度要求必须为53<br />\r\n度的高度白酒。酒体陈藏期要达8年以上,50年以内的中国白酒。（并不是所有酒都能陈<br />\r\n藏，许多酒陈放3年后就会口味寡淡，酒质变差。）须是传统自然酿制，须是酒庄最优质<br />\r\n的酒,体现酒师的最高酿造水平,独特风格。<br />\r\n&nbsp;&quot;藏&quot;：二指酒器要适合陈藏.<br />\r\n陈藏酒器必须为专用藏酒瓶、藏酒塞、藏酒标（非必须），火漆蜡封口,这样才可能保证<br />\r\n酒长期存放，且酒质变好。<br />\r\n酒体全程养护-只能接触陶瓷,原木,谷物...等自然物质，决不接触塑料等化学物质。<br />\r\n如能达到以上条件,就可为私藏(级)酒出品，以&ldquo;私藏酒&rdquo;标注。<br />\r\n<br />\r\n按出酒方法又分为【民国版】和【共和版】两个级别:<br />\r\n【共和版】:<br />\r\n指采用49年&quot;中华人民共和国&quot;成立以后的酿造方法酿制的酒,借用&ldquo;共和（国）&rdquo;标注.<br />\r\n是指成酒采用了解放后普遍使用的&ldquo;掺兑&rdquo;工艺酿制的酒。(解放后酿酒界开始采用<br />\r\n&quot;掺兑&quot;工艺,出酒后普遍采用&quot;掺兑&quot;工艺提高酒质,如两批都有缺点的酒,经掺兑后,两批<br />\r\n都可变成近乎完美的好酒,好酒的出酒率大大提高.)<br />\r\n【民国版】:<br />\r\n指采用49年以前&quot;中华民国&quot;时的中国传统酿造方法酿制的酒,借用&ldquo;民国&rdquo;标注,即原酒<br />\r\n出酒后就封存,窖藏,不能使用&quot;掺兑&quot;工艺,原酒出好酒的出酒率低,难度极大.需要酿造<br />\r\n技艺娴熟高超,是酒<br />\r\n中极品.(就如同一快整木做成的家具,不是木材榫接、铆钉而成的,用料费，难度大,珍<br />\r\n贵)，但可体验到不同风格，与个性魅力。<br />\r\n<img alt=\"\" src=\"/uploads/allimg/130202/1-130202163010950.jpg\" style=\"width: 553px; height: 453px;\" /><br />\r\n','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('22','3','酒文化测试文章酒文化测试文章酒文化测试文章酒文化酒文化测试文酒文化酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章酒文化测试文章','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('31','28','首页幻灯片一首页幻灯片一首页幻灯片一首页幻灯首页幻灯片一首页幻灯片一首页幻灯片一首页幻灯片一首页幻灯片一','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('32','28','首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二首页幻灯片二','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('33','28','首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三首页幻灯片三','','','127.0.0.1');");
E_D("replace into `dede_addonarticle` values('34','28','首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四首页幻灯片四','','','127.0.0.1');");

require("../../inc/footer.php");
?>