@extends('search::logo.layouts.default')

@section('content')
    <div class="row">
        <!-- left content start -->
        <div class="col-xs-10 zy-quiry-left ml15 pa0">
            <div class="monitor-left">
                <!-- 监测的内导航 -->
                @include('search::logo.partials._block_monitor_nav')
            </div>
        </div>
        <!-- right content strat -->
        <div class="col-xs-2 zy-quiry-right ml15 pa0 monitor-right">
            @include('search::logo.partials._block_monitor_add')
        </div>
    </div>

    <div class="jc-state-details row ma0 jc-indent-box">
        <!-- 左侧边栏 -->
        <div class="jcs-left col-xs-3">
            <!-- 账号订单列表项展示 -->
            <div class="addState jc-i-items">
                <p class="lead mb0">账号订单</p>
                <ul class="pl0">
                    <li><a href="{{ route('search.logo.monitor.order') }}">账户信息</a></li>
					<li><a href="{{ route('search.logo.monitor.order.log') }}">操作日志</a></li>
					<li class="on"><a href="{{ route('search.logo.monitor.order.combo') }}">套餐升级</a></li>
					<li><a href="{{ route('search.logo.monitor.order.price') }}">价格套餐介绍</a></li>
					<li><a href="{{ route('search.logo.monitor.order.pay') }}">订单信息</a></li>
                </ul>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0">
            <div class="mc-top monitor-box">
                <div class="jc-i-title">
                    <b>套餐升级</b>
                </div>
                <div class="jc-i-content">
                    <!-- 套餐升级 -->
                    <div class="row jc-i-combo">
                        <div class="col-xs-3 jc-i-ccommon">
                            <div class="jc-i-ctitle">
                                <span>普通版</span>
                            </div>
                            <div class="jc-i-cmatter">
                                <p>权限：</p>
                                <p>2个手添状态监测项目</p>
                                <p>2个手添近似监测项目</p>
                                <div class="link-box">
                                    <a href="{{ route('search.logo.monitor.order.price') }}">查看会员权限、梯度收费标准</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3 jc-i-cVIP">
                            <div class="jc-i-ctitle">
                                <span>VIP版</span>
                            </div>
                            <div class="jc-i-cmatter">
                                <p>权限：</p>
                                <p>2个手添状态监测项目</p>
                                <p>2个手添近似监测项目</p>
                                <div class="link-box">
                                    <a href="{{ route('search.logo.monitor.order.price') }}">查看会员权限、梯度收费标准</a>
                                    <a href=""><button type="button" class="btn">立即升级</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3 jc-i-cextreme">
                            <div class="jc-i-ctitle">
                                <span>至尊版</span>
                            </div>
                            <div class="jc-i-cmatter">
                                <p>权限：</p>
                                <p>2个手添状态监测项目</p>
                                <p>2个手添近似监测项目</p>
                                <div class="link-box">
                                    <a href="{{ route('search.logo.monitor.order.price') }}">查看会员权限、梯度收费标准</a>
                                    <a href=""><button type="button" class="btn">立即升级</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@stop