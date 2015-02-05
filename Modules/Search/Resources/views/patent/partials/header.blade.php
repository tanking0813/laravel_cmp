<div class="header container">	
	<div class="row">
		<div class="h-left col-xs-4">
			<ul class="navbar list-inline mb0" role="navigation">
				<li><a href="{{ route('search.patent.index') }}">首页</a>|</li>
				<li><a href="{{ route('search.patent.retrieval') }}">专利检索</a>|</li>
				<!-- <li><a href="{{ route('search.patent.apply') }}">专利申请</a>|</li> -->
				<li><a href="{{ route('search.patent.guide') }}">专利指南</a>|</li>
				<li><a href="{{ route('search.patent.declares') }}">数据说明</a></li>
			</ul>
		</div>
		<div class="h-right col-xs-4 col-xs-offset-4">
			<ul class="list-inline list-unstyled mb0">
                <li class="register">
                    <i class="fa fa-user"></i>
                    <a href="javascript:;" data-toggle="modal" data-target="#registerLogin-Modal" class="register">注册</a>
                </li>
                <li class="login">
                    <i class="fa fa-lock"></i>
                    <a href="javascript:;" data-toggle="modal" data-target="#registerLogin-Modal" class="login">登录</a>
                </li>
            </ul>
		</div>
	</div>
</div>