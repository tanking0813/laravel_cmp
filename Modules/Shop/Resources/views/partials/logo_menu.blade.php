<div class="row g-nav">
	<ul id="nav1" class="list-inline first">
		<li id="mainCate-1" class="li1 mainCate1">{{ HTML::image('modules/shop/images/icon/menu.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;<a href="">商标热门分类{{ HTML::image('modules/shop/images/icon/left.png','',['class'=>'ic-left']) }}</a>
			<div class="subCate1">
				<ul class="list-unstyled second">
					@foreach($shops['categories'] as $k=>$v)
					@if($k!=0 && ($k+1)%10 == 1)
						</ul>
						<ul class="list-unstyled second">
					@endif
							<li><a href="{{ route('shop.logo.category',['b'=>$v['id']]) }}">{{ $v['slug'] }}-{{ $v['name'] }}</a></li>					
					@endforeach
				</ul>
				<div class="clear"></div>
				</div>
		</li>
		<li><a href="{{ route('shop.logo.boutique') }}">精品商标</a></li>
		<li><a href="{{ route('shop.logo.fixedprice') }}">一口价商标</a></li>
		<li><a href="{{ route('shop.logo.foreigns') }}">涉外商标<span class="hot">{{ HTML::image('modules/shop/images/icon/cu.png') }}</span></a></li>
		<li><a href="{{ route('shop.logo.popularity') }}">人气商标</a></li>
		<li><a href="{{ route('shop.logo.antique') }}">古董商标拍卖</a></li>
		<li><a href="{{ route('shop.logo.headhunt') }}">商标猎头</a></li>
		<li><a href="javascript:;">商标问问</a></li>					
	</ul>
</div>