<div class="ex-mr2">
	<div class="sorting">
		<div class="sorting-l fl">
			<ul class="list-inline sort">
				@if($shops['sorts_url'] == 1 || $shops['sorts_url'] == 0)
				<li class="s1"><a href="javascript:;">默认排序</a></li>
				@else
				<li><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>1]) }}">默认排序</a></li>
				@endif

				@if($shops['sorts_url'] == 2)
				<li class="s1"><a href="javascript:;">人气排序</a></li>
				@else
				<li><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>2]) }}">人气排序</a></li>
				@endif
				
				<?php if($shops['sorts_url'] == 3){ $e=4; }else{ $e=3; } ?>
				<li @if($shops['sorts_url'] == 3 || $shops['sorts_url'] == 4)class="s1"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$e]) }}">价格排序</a></li>
			</ul>
		</div>
		<div class="sorting-l fr">
			<ul class="list-inline sort1">
				<li><a href="">发布商标转让</a></li>
				<li><a href="">发布商标求购</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>	
</div>

