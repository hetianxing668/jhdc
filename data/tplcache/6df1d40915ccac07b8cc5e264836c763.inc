[field:global name='autoindex' runphp='yes']
					if(@me%3=='0')
					{
						@me ='<li class="right">';
					}
					else
					{
						@me ='<li>';
					}
					[/field:global]
						<p class="p_img">
							<a href="[field:arcurl/]"><img src="[field:litpic/]" alt="" /></a>
						</p>
						<p class="p_title"><a href="[field:arcurl/]">[field:title/]</a></p>
						<p class="p_price">
						产品价格：<em>￥[field:price/]</em>
						</p>
						<p class="p_buy">
						<a href="[field:arcurl/]">
							在线订购
						</a>
						</p>
					</li>