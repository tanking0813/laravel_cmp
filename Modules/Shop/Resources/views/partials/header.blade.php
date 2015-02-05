<div class="row g-home">
	<div class="col-xs-2">您好，欢迎来到柚皮网</div>
	<div class="col-xs-5">
		<ul id="top" class="list-inline">
			<li>{{ HTML::image('modules/shop/images/icon/1.png','',['style'=>'vertical-align: -1px']) }}&nbsp;&nbsp;<a href="">收藏柚皮</a><span class="line">|</span></li>
			<li class="nLi">{{ HTML::image('modules/shop/images/icon/2.png','',['style'=>'vertical-align: -1px']) }}&nbsp;&nbsp;<a href="javascript:;">我的订单<span class="caret"></span></a><span class="line">|</span>
				<ul class="sub">
					<li><a href="#" class="er">已买到的宝贝</a></li>
					<li><a href="#" class="er">已卖出的宝贝</a></li>
				</ul>
			</li>
			<li>{{ HTML::image('modules/shop/images/icon/3.png','',['style'=>'vertical-align: -1px']) }}&nbsp;&nbsp;<a href="">站内信(4)</a><span class="line">|</span></li>
			<li>{{ HTML::image('modules/shop/images/icon/0.png','',['style'=>'vertical-align: -1px']) }}&nbsp;&nbsp;<a href="">我的购物车(4)</a><span class="line">|</span></li>
			<li>{{ HTML::image('modules/shop/images/icon/0.png','',['style'=>'vertical-align: -1px']) }}&nbsp;&nbsp;<a href="">我的收藏(4)</a></li>
		</ul>	
	</div>
	<div class="col-xs-1"></div>
	<div class="col-xs-4">
		<ul id="top1" class="list-inline">
			<li><a href="{{ route('shop') }}">首页</a></li>
			<li><a href="{{ route('shop.logo.index') }}">商标市场</a></li>
			<li><a href="{{ route('shop.patent.index') }}">专利市场</a></li>
			<li><a href="{{ route('shop.copy.index') }}">版权市场</a></li>
			<li class="nLi"><a href="javascript:;">网站其它导航<span class="caret"></span></a>
				<ul class="sub1 sub">
					<li><a href="#" class="er">{{ HTML::image('modules/shop/images/icon/qi5.png') }}商标查询</a></li>
					<li><a href="#" class="er">{{ HTML::image('modules/shop/images/icon/qi1.png') }}专利查询</a></li>
					<li><a href="#" class="er">{{ HTML::image('modules/shop/images/icon/qi2.png') }}版权查询</a></li>
					<li><a href="#" class="er">{{ HTML::image('modules/shop/images/icon/qi3.png') }}商标查询</a></li>
					<li><a href="#" class="er">{{ HTML::image('modules/shop/images/icon/qi4.png') }}专利查询</a></li>
					<li><a href="#" class="er">{{ HTML::image('modules/shop/images/icon/qi6.png') }}版权查询</a></li>
				</ul>
			</li>
		</ul>
		
	</div>
</div>