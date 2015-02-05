<h1 class="tit mv_15"> 
	<img src="{{ asset('modules/member/images/ucenter_29.jpg') }}"><span class="ml15">我是卖家</span> 
</h1>
<div class="buy_sale">
	<ul>
		<h2 class="ico-shopcart">商品管理<i class="toggle pull-right"></i></h2>
		<li class="active"><a href="{{ route('member.publish.saler.add',['logo']) }}">我要发布的卖品</a>
		</li>
		<li><a href="{{ route('member.publish.saler.list',[1,'logo']) }}">已上架的卖品</a>
		</li>
		<li><a href="{{ route('member.publish.saler.list',[0,'logo']) }}">未上架的卖品</a>
		</li>
	</ul>
	<ul>
		<h2 class="ico-bargaining">议价管理<i class="toggle pull-right"></i></h2>
		<li><a href="{{ route('member.publish.saler.bargain') }}">我的议价</a>
		</li>
	</ul>
	<ul>
		<h2 class="ico-order">订单管理<i class="toggle pull-right"></i></h2>
		<li><a href="{{ route('member.publish.saler.order') }}">我的订单</a>
		</li>
	</ul>
</div>