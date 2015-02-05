<div class="topBar">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
			    @if(Sentry::check())
                    你好，<span href="" class="orange slidedown">{{ Sentry::getUser()->nickname?Sentry::getUser()->nickname:Sentry::getUser()->email }} <i class="icon icon-angle-down"></i>
                        <div class="quickS">
                            <div class="avrtar_small pull-left">
                                <img src="{{ Sentry::getUser()->avatar48?Sentry::getUser()->avatar48:'/uploads/avatar/default48.jpg' }}"/>
                            </div>
                            <div class="account1 pull-right"><a href="{{ route('member.account') }}">账户管理</a> | <a href="{{ route('auth.logout') }}">立即退出</a></div>
                            <div class="help"><a href="">去新手帮助中心看看</a></div>
                        </div>

                    </span>
				@else
				    <span><a href="{{ route('auth.register') }}">注册</a></span>
				    <span><a href="{{ route('auth.login') }}">登陆</a></span>
				@endif

			</div>
			<div class="pull-right ">
				<a href="">柚皮平台首页</a> | <a href="">我的柚皮</a> | <a href="">柚皮通服务</a> | <a href="">网站导航 <i class="icon icon-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>