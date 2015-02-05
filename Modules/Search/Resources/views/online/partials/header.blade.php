<div class="header">
    <!-- 头部导航 -->
    <div class="h-top">
        <div class="container">
            <div class="row">
                <div class="h-left col-xs-4">
                    <p>您好，欢迎来到柚皮网！&nbsp;联系电话：029-9999999</p>
                </div>
                <div class="h-right col-xs-4 col-xs-offset-4">
                    <ul class="list-inline list-unstyled mb0">
                        <li class="register"><i class="icon icon-user"></i><a href="javascript:;" data-toggle="modal" data-target="#registerLogin-Modal" class="register">请登录</a></li>
                        <li class="class="login""><i class="icon icon-lock"></i><a href="javascript:;" data-toggle="modal" data-target="#registerLogin-Modal" class="login">注册</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- logo -->
    <div class="h-bottom">
        <div class="container">
            <div class="row">
                <div class="h-left col-xs-4">
                    <a href="{{ route('search') }}"><img src="{{ asset('modules/search/images/logo.png') }}" /></a>
                </div>
                <div class="h-right col-xs-8">
                    <ul class="navbar nav-items list-inline mb0" role="navigation">
                        <li ><a href="{{ route('search') }}">首页</a></li>
                        <li><a href="{{ route('search.online.logo.index') }}">商标业务</a></li>
                        <li><a href="{{ route('search.online.patent.index') }}">专利申请</a></li>
                        <li><a href="{{ route('search.online.copyright.index') }}">著作权登记</a></li>
                        <li class="m">
                            <h3><a href="{{ route('search.online.internet.index') }}">互联网业务</a></h3>
                            <ul class="sub list-unstyled">
                                <li><a href="{{ route('search.online.internet.index') }}">域名注册</a></li>
                                <li><a href="{{ route('search.online.internet.attestation') }}">可信认证</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);">常见问题</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>