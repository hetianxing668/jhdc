<?php
$z[0]=Array("field","",319,338);
$z[0][4]['name']="title";
$z[1]=Array("global","",339,365);
$z[1][4]['name']="cfg_webname";
$z[2]=Array("field","",406,435);
$z[2][4]['name']="keywords";
$z[3]=Array("field","",475,533);
$z[3][4]['name']="description";
$z[3][4]['function']="html2text(@me)";
$z[4]=Array("global","",568,600);
$z[4][4]['name']="cfg_templets_skin";
$z[5]=Array("include","",626,663);
$z[5][4]['filename']="header.htm";
$z[6]=Array("include","",667,706);
$z[6][4]['filename']="location.htm";
$z[7]=Array("list","\n					[field:global name='autoindex' runphp='yes']\n					if(@me%3=='0')\n					{\n						@me ='<li class=\"right\">';\n					}\n					else\n					{\n						@me ='<li>';\n					}\n					[/field:global]\n						<p class=\"p_img\">\n							<a href=\"[field:arcurl/]\"><img src=\"[field:litpic/]\" alt=\"\" /></a>\n						</p>\n						<p class=\"p_title\"><a href=\"[field:arcurl/]\">[field:title/]</a></p>\n						<p class=\"p_price\">\n						产品价格：<em>￥[field:price/]</em>\n						</p>\n						<p class=\"p_buy\">\n						<a href=\"[field:arcurl/]\">\n							在线订购\n						</a>\n						</p>\n					</li>\n					",744,1346);
$z[7][4]['pagesize']="20";
$z[8]=Array("pagelist","",1426,1497);
$z[8][4]['listitem']="info,index,end,pre,next,pageno";
$z[8][4]['listsize']="5";
$z[9]=Array("include","",1528,1564);
$z[9][4]['filename']="right.htm";
$z[10]=Array("include","",1565,1602);
$z[10][4]['filename']="footer.htm";

?>