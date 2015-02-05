@extends('search::logo.layouts.default')

@section('style')
    {{ HTML::style('static/css/font-awesome.css') }}
@stop

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
					<li class="on"><a href="{{ route('search.logo.monitor.order.price') }}">价格套餐介绍</a></li>
					<li><a href="{{ route('search.logo.monitor.order.pay') }}">订单信息</a></li>
                </ul>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0">
            <div class="mc-top monitor-box">
                <div class="jc-i-title">
                    <b>价格套餐介绍</b>
                </div>
                <div class="jc-i-content">
                    <!-- 相关表格 -->
                    <div class="jc-iprice-table">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td rowspan="6" class="title">商标监测</td>
                                    <td class="item">服务项目</td>
                                    <td class="item">普通版</td>
                                    <td class="item">VIP版</td>
                                    <td class="item">至尊版</td>
                                </tr>
                                <tr>
                                    <td>本申请人状态监测免费数量</td>
                                    <td>100个</td>
                                    <td>全部</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td rowspan="5" class="title">商标公告</td>
                                    <td>数据浏览</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>本申请人状态监测免费数量</td>
                                    <td>100个</td>
                                    <td>全部</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td rowspan="5" class="title">商标查询</td>
                                    <td>数据浏览</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>本申请人状态监测免费数量</td>
                                    <td>100个</td>
                                    <td>全部</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" class="title">事务通</td>
                                    <td>单机版</td>
                                    <td></td>
                                    <td></td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>网络版</td>
                                    <td></td>
                                    <td></td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td>免费手动添加状态监测申请人数量</td>
                                    <td><i class="icon icon-ok"></i></td>
                                    <td>10个</td>
                                    <td>企业定制</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="title">价格</td>
                                    <td>标准价格</td>
                                    <td>免费</td>
                                    <td>1800元/年</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>优惠价格（为期三个月）</td>
                                    <td></td>
                                    <td>1500元/年</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="graded-price">
                        <b>梯度收费标准</b>
                    </div>
                    <div class="jc-igprice-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="special-cell">
                                        <span class="sc-row">梯度（个）</span>
                                        <span class="sc-col">类型</span>
                                    </th>
                                    <th>0-9</th>
                                    <th>10-19</th>
                                    <th>20-39</th>
                                    <th>40-99</th>
                                    <th>100以上</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>状态监测</td>
                                    <td>¥30.0/个</td>
                                    <td>¥25.0/个</td>
                                    <td>¥20.0/个</td>
                                    <td>¥10.0/个</td>
                                    <td>¥8.0/个</td>
                                </tr>
                                <tr>
                                    <td>近似监测（按申请人）</td>
                                    <td>¥30.0/个</td>
                                    <td>¥25.0/个</td>
                                    <td>¥20.0/个</td>
                                    <td>¥10.0/个</td>
                                    <td>¥8.0/个</td>
                                </tr>
                                <tr>
                                    <td>近似监测（名称）</td>
                                    <td>¥30.0/个</td>
                                    <td>¥25.0/个</td>
                                    <td>¥20.0/个</td>
                                    <td>¥10.0/个</td>
                                    <td>¥8.0/个</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop