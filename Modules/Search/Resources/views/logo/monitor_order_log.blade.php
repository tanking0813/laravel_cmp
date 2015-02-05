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
					<li class="on"><a href="{{ route('search.logo.monitor.order.log') }}">操作日志</a></li>
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
                    <b>操作日志</b>
                </div>
                <div class="jc-i-content">
                    <!-- 操作日志 -->
                    <div class="jc-i-log">
                        <!-- 列表展示 -->
                        <div class="jcs-items">
                            <div class="jcs-i-list">
                                <table class="liebiao">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px!important;">序号</th>
                                            <th>标题</th>
                                            <th>内容</th>
                                            <th>会员</th>
                                            <th>IP</th>
                                            <th>日期</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>进入账户订单主界面</td>
                                            <td>进入账户订单主界面</td>
                                            <td>2805487741@qq.com</td>
                                            <td>36.46.250.253</td>
                                            <td>2015-01-14 15:32:39</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>进入账户订单主界面</td>
                                            <td>进入账户订单主界面</td>
                                            <td>2805487741@qq.com</td>
                                            <td>36.46.250.253</td>
                                            <td>2015-01-14 15:32:39</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>进入账户订单主界面</td>
                                            <td>进入账户订单主界面</td>
                                            <td>2805487741@qq.com</td>
                                            <td>36.46.250.253</td>
                                            <td>2015-01-14 15:32:39</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>进入账户订单主界面</td>
                                            <td>进入账户订单主界面</td>
                                            <td>2805487741@qq.com</td>
                                            <td>36.46.250.253</td>
                                            <td>2015-01-14 15:32:39</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>进入账户订单主界面</td>
                                            <td>进入账户订单主界面</td>
                                            <td>2805487741@qq.com</td>
                                            <td>36.46.250.253</td>
                                            <td>2015-01-14 15:32:39</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>进入账户订单主界面</td>
                                            <td>进入账户订单主界面</td>
                                            <td>2805487741@qq.com</td>
                                            <td>36.46.250.253</td>
                                            <td>2015-01-14 15:32:39</td>
                                        </tr>
                                    </tbody>
                                </table>
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
            </div>
        </div>
    </div>

@stop