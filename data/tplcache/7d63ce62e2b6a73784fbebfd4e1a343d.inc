<a href="#">&nbsp;</a></li>
			</ul>
			</div>
			<div class="menu">
				<script type="text/javascript" src="{dede:global.cfg_templets_skin/}/js/jquery-1.8.3.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
					var tg = $(".tg");
					var tg_hidden = $(".tg_hidden");
					tg.each(function(index){
						tg.eq(index).click(function(){
							tg_hidden.eq(index).slideToggle("8000");
						});
					});
				});
				</script>
				<ul>
					<li class="m1"><a href="/">&nbsp;</a></li>
					<li class="m2">{dede:type typeid="1"}<a href="[field:typelink/]">