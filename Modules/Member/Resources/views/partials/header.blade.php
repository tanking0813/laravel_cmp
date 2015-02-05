<!--header开始-->
<div class="header">
    @include('partials.toolbar')
    <div class="navBar">
        <div class="container">
            <div class="row">
                <a href="{{ route('member') }}" class="logo col-xs-2">
                    <img src="{{ asset('modules/member/images/logo.png') }}" alt="logo" height="50"/>
                </a>
                <ul class="col-xs-10 mh15 ph_15">
                    <li><a href="{{ route('member') }}">首页</a></li>
                    <li class="active"><a href="{{ route('member.publish') }}">我要发布</a></li>
                  
                    <li><a href="">我的应用</a>
                        <div class="subNav">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('modules/member/images/ucenter_29.jpg') }}" alt="" />
                                        <p>我是买家</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('modules/member/images/ucenter_32.jpg') }}" alt="" />
                                        <p>我是卖家</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('modules/member/images/ucenter_35.jpg') }}" alt="" />
                                        <p>展厅管理</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('modules/member/images/ucenter_37.jpg') }}" alt="" />
                                        <p>商标认证</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('modules/member/images/ucenter_39.jpg') }}" alt="" />
                                        <p>知产学院</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('modules/member/images/ucenter_41.jpg') }}" alt="" />
                                        <p>专场活动</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('modules/member/images/ucenter_43.jpg') }}" alt="" />
                                        <p>我的账户</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">新手攻略</a></li>
                    <li><a href="{{ route('member.account') }}">账号管理</a></li>
                    <li><a href="">查询模块</a></li>
                    <!--<div class="abslt"></div>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<!--header结束-->