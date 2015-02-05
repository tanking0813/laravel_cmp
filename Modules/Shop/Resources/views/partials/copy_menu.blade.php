<div class="row g-nav">
	<ul id="nav-c" class="list-inline first1">
		<li id="mainCate-1" class="li1 mainCate1">{{ HTML::image('modules/shop/images/icon/menu.png','',['style'=>'vertical-align: -2px;']) }}&nbsp;&nbsp;<a href="">著作权全部分类</a>
			<div class="subCate-c">
				<ul class="list-unstyled second">
				@foreach($shops['categories'] as $k=>$v)
					@if($k != 10)
					<li>
						<a href="{{ route('shop.copy.category',['b'=>$v['id']]) }}">
							<p>{{ HTML::image('modules/shop/images/test/in'.($k+1).'.png') }}</p>
							<p>{{ $v['name'] }}</p>
						</a>
					</li>
					@endif
				@endforeach
					<div class="clear"></div>
				</ul>
				<p class="allcopy"><a href="{{ route('shop.copy.category',['b'=>$shops['categories'][10]['id']]) }}">{{ $shops['categories'][10]['name']}}＞＞</a></p>
				</div>
		</li>
		<li><a href="{{ route('shop.copy.fixedprice') }}">一口价著作权</a></li>
		<li><a href="{{ route('shop.copy.popularity') }}">人气著作权<span class="hot">{{ HTML::image('modules/shop/images/icon/cu.png') }}</span></a></li>
		<li><a href="">著作权猎头</a></li>
		<li><a href="">著作权问问</a></li>					
	</ul>
</div>