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
					<li><a href="{{ route('search.logo.monitor.order.combo') }}">套餐升级</a></li>
					<li><a href="{{ route('search.logo.monitor.order.price') }}">价格套餐介绍</a></li>
					<li class="on"><a href="{{ route('search.logo.monitor.order.pay') }}">订单信息</a></li>
                </ul>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0">
            <div class="mc-top monitor-box">
                <div class="jc-i-title">
                    <b>订单信息</b>
                </div>
                <div class="jc-i-content">
                    <!-- 相关表格 -->
                    <div class="jc-i-table">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>我的订单</td>
                                    <td><a href="" class="on">全部</a><a href="">未支付</a><a href="">已支付</a></td>
                                </tr>
                                <tr>
                                    <td>订单类型</td>
                                    <td><a href="" class="on">全部</a><a href="">状态监测</a><a href="">近似监测</a>
                                    <a href="">名称监测</a><a href="">分类数据</a>
                                    <a href="">正式会员</a><a href="">独享会员</a></td>
                                </tr>
                                <tr>
                                    <td>时间</td>
                                    <td><a href="" class="on">全部</a><a href="">近一个月</a><a href="">近二个月</a><a href="">近三个月</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="jc-ii-btn">
                        <a href=""><button type="button" class="btn">合并付款</button></a>
                    </div>
                    <!-- 列表展示 -->
                    <div class="jcs-items">
                        <div class="jcs-i-list jc-i-dlist jc-i-select">
                            <div class="check-all"><span></span>全选</div>
                            <table class="liebiao">
                                <thead>
                                    <tr>
                                        <th style="width: 380px;">订单简介</th>
                                        <th style="width: 80px;">单价（元）</th>
                                        <th style="width: 100px;">订单创建日期</th>
                                        <th style="width: 120px;">交易状态</th>
                                        <th style="width: 180px;">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span></span>[20150114132229] 手动添加申请人商标近似监测，共101个</td>
                                        <td>￥0.00</td>
                                        <td>2015-01-14</td>
                                        <td>已支付 2015-01-14</td>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-target="#jc-indent-Modal">订单内容</a>
                                            <a href="javascript:;" class="delete">删除</a>
                                            <a href="{{ route('search.logo.monitor.approx.hand') }}">去看详细</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span></span>[20150113110344]手动添加状态监测，共1个</td>
                                        <td>￥0.00</td>
                                        <td>2015-01-14</td>
                                        <td>已支付 2015-01-14</td>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-target="#jc-indent-Modal">订单内容</a>
                                            <a href="javascript:;" class="delete">删除</a>
                                            <a href="{{ route('search.logo.monitor.approx.hand') }}">去看详细</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span></span>[20141230165045] 系统自动为体验会员开通近似监测 </td>
                                        <td>￥0.00</td>
                                        <td>2015-01-14</td>
                                        <td>已支付 2015-01-14</td>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-target="#jc-indent-Modal">订单内容</a>
                                            <a href="javascript:;" class="delete">删除</a>
                                            <a href="{{ route('search.logo.monitor.approx.hand') }}">去看详细</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 换页 -->
            <div class="paging">
                <ul class="list-inline list-unstyled paging-list ml0 mb0">
                    <li><a href="">首页</a></li>
                    <li><a href="">上一页</a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">下一页</a></li>
                    <li class="pform ml10">
                        <span>转到第</span>
                        <input type="text" placeholder="1" class="num-box">
                        <span>页</span>
                        <span class="go">GO</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  
@stop