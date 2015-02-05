<!-- header start -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-3 ht-tel">
                <p class="mb0"><i class="fa fa-phone"></i>咨询热线：029-123456789</p>
            </div>
            <div class="col-xs-3 col-xs-offset-6 ht-corner">
                @if(Sentry::check())
                    <div class="login-success">
                        <button type="button" class="btn dropdown-toggle pa0" data-toggle="dropdown">欢迎您：{{ Sentry::getUser()->email }}
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu ma0" role="menu">
                            <li class="notice"><i class="fa fa-volume-up"></i><a href="">商标公告</a></li>
                            <li class="warn"><i class="fa fa-envelope"></i><a href="">消息提醒</a></li>
                            <li class="order"><i class="fa fa-shopping-cart"></i><a href="">我的订单</a></li>
                            <li class="upgrade"><i class="fa fa-upload"></i><a href="">升级</a></li>
                            <li class="exit"><i class="fa fa-sign-out"></i><a href="{{ route('auth.logout') }}">退出</a></li>
                        </ul>
                    </div>
                @else
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
                @endif
            </div>
        </div>
    </div>
</div>
<div class="container h-nav">
    <div class="row">
        <div class="col-xs-2">
            <a href="{{ route('search') }}"><img src="{{ asset('static/images/logo.png') }}" /></a>
        </div>
        <div class="col-xs-6 col-xs-offset-4 h-nav-list">
            <ul class="navbar list-inline mb0" role="navigation">
                <li class="active"><a href="{{ route('search') }}">首页</a><span>|</span></li>
                <li><a href="{{ route('search.logo.profession') }}">商标查询</a><span>|</span></li>
                <li><a href="{{ route('search.logo.monitor') }}">商标监测</a><span>|</span></li>
                <li><a href="javascript:void(0);">商标注册</a><span>|</span></li>
                <li><a href="javascript:void(0);">商标数据</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- header end -->