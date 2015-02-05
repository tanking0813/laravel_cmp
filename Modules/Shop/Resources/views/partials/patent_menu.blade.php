<div class="row g-nav">
	<ul id="nav1" class="list-inline first1">
		<li id="mainCate-1" class="li1 mainCate1">{{ HTML::image('modules/shop/images/icon/menu.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;<a href="javascript:;">热门专利分类</a>
		</li>
		<li><a href="{{ route('shop.patent.hot') }}">热门技术</a></li>
		<li><a href="{{ route('shop.patent.fixedprice') }}">一口价专利</a></li>
		<li><a href="{{ route('shop.patent.foreigns') }}">涉外专利<span class="hot">{{ HTML::image('modules/shop/images/icon/cu.png') }}</span></a></li>
		<li><a href="{{ route('shop.patent.popularity') }}">人气专利</a></li>
		<li><a href="">专利猎头</a></li>
		<li><a href="">专利问问</a></li>					
	</ul>
</div>
