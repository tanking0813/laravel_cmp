<!--page分页开始-->
@if($shops['lists']['last_page'] > 1)
<div class="pages mt20">
	<ul class="list-unstyled pagelist">
		@if($shops['lists']['current_page'] == 1)
		<li><a href="javascript:;">首页</a></li>
		@else
		<li><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url'],'page'=>1]) }}">首页</a></li>
		@endif
		
		<?php			
			if($shops['lists']['last_page'] >5){
				if($current_page > 5){
					$endpage = ($shops['lists']['last_page'] - $current_page) >= 5 ? ($current_page + 5) : $shops['lists']['last_page'];
					$startpage = $endpage - 4;
				}else{
					$startpage = 1;
					$endpage = 5;
				}
			}else{
				$startpage = 1;
				$endpage = $shops['lists']['last_page'];
			}
		?>
		@for($i=$startpage;$i<=$endpage;$i++)
			@if($i == $shops['lists']['current_page'])
			<li class="thisclass">{{ $i }}</li>
			@else
			<li><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url'],'page'=>$i]) }}">{{ $i }}</a></li>
			@endif
		@endfor

		@if($shops['lists']['current_page'] < $shops['lists']['last_page'])
		<li><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url'],'page'=>$shops['lists']['current_page']+1]) }}">下一页</a></li>
		<li><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url'],'page'=>$i]) }}">末页</a></li>	
		@else
		<li><a href="javascript:;">下一页</a></li>
		<li><a href="javascript:;">末页</a></li>
		@endif

		<li>
			<select name='sldd' style='width:42px;height:22px;' data-url="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}" onchange="location.href=this.attr('data-url')+'&p='+this.options[this.selectedIndex].value;">
			@for($i=1;$i<=$shops['lists']['last_page'];$i++)
			<option value='{{ $i }}' @if($i == $shops['lists']['current_page'])selected="selected"@endif>{{ $i }}</option>
			@endfor
			</select>
	    </li>
		<li><span class="pageinfo">共 <strong>{{ $shops['lists']['last_page'] }}</strong>页<strong>{{ $shops['lists']['total'] }}</strong>条</span></li>
		<div class="clear"></div>
	</ul>
</div>
@endif
<!--page分页结束-->