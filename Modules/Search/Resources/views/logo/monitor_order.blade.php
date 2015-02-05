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
                <li class="on"><a href="{{ route('search.logo.monitor.order') }}">账户信息</a></li>
                <li><a href="{{ route('search.logo.monitor.order.log') }}">操作日志</a></li>
                <li><a href="{{ route('search.logo.monitor.order.combo') }}">套餐升级</a></li>
                <li><a href="{{ route('search.logo.monitor.order.price') }}">价格套餐介绍</a></li>
                <li><a href="{{ route('search.logo.monitor.order.pay') }}">订单信息</a></li>
            </ul>
        </div>
    </div>
    <!-- 右侧列表内容 -->
    <div class="jcs-right col-xs-9 pa0">
        <div class="mc-top monitor-box">
            <div class="jc-i-title">
                <b>账户信息</b>
            </div>
            <div class="jc-i-content jc-i-account">
                <!-- 相关表格 -->
                <div class="jc-i-table">
                    <div class="graded-price">
                        <b>账户级别</b>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>账户类型</td>
                                <td>商标申请人</td>
                            </tr>
                            <tr>
                                <td>账户套餐</td>
                                <td>普通会员<a href="">[开通VIP版]</a></td>
                            </tr>
                            <tr>
                                <td>到期时间</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="graded-price">
                        <b>监控数量统计</b>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>状态监测申请人数</td>
                                <td><a href="{{ route('search.logo.monitor.state.add') }}">继续添加</a></td>
                            </tr>
                            <tr>
                                <td>近似监测申请人数</td>
                                <td><a href="{{ route('search.logo.monitor.approx.add') }}">继续添加</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
  
@stop