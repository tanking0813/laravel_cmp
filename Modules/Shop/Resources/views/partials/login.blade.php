<div class="row mt10">
	<div class="col-xs-4 pl20">{{ HTML::image('modules/shop/images/icon/user.png') }}</div>
	<div class="col-xs-8 hi">Hi,上午好<br>欢迎来到柚皮网</div>
</div>
<div class="row resgister mt10">
	<div class="col-xs-6 res"><a href="{{ route('auth.login') }}">{{ HTML::image('modules/shop/images/icon/key.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;登录</a></div>
	<div class="col-xs-6 res1"><a href="{{ route('auth.register') }}">{{ HTML::image('modules/shop/images/icon/pen.png','',['style'=>'vertical-align: -2px']) }}&nbsp;立即注册</a></div>
</div>