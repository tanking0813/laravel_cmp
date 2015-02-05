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

    <div class="jc-s-personal jc-s-create">
        <!-- 展示内容 -->
        <div class="monitor-matter">
            <div class="mc-top monitor-box state-approximate">
                <div class="hd">
                    <ul class="list-inline ma0">
                        <li><a href="{{ route('search.logo.monitor.state.add') }}">创建状态监测</a></li>
                        <li class="on"><a href="{{ route('search.logo.monitor.approx.add') }}">创建近似监测</a></li>
                    </ul>
                </div>
                <div class="bd">
                    <div class="lh jinsi-box">
                        <!--  -->
                        <div class="jinsi-proper">
                            <b>申请人商标近似监测</b>
                            <span>名称近似监测（含图形）【即将开放】</span>
                        </div>
                        <!-- 查询条件表单及流程状态 -->
                        <div class="state-a-mixbox">
                            <div class="state-ui">
                                <div class="line">
                                    <span class="line-left"></span>
                                    <span class="line-right"></span>
                                </div>
                                <ul class="list-inline ma0">
                                    <li class="on"><span><b>1</b></span>选择类型并搜索</li>
                                    <li><span><b>2</b></span>选择结果并添加</li>
                                    <li><span><b>3</b></span>点“结算”并支付</li>
                                    <li><span><b>4</b></span>完成并查看</li>
                                </ul>

                            </div>
                            <div class="state-a-search row ma0">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="search-type" class="control-label col-xs-1 col-xs-offset-3">搜索类型：</label>
                                        <ul class="list-inline ma0 pa0 col-xs-4" id="search-type">
                                            <li><span></span>公司名</li>
                                            <li><span></span>个人名</li>
                                            <li><span></span>注册号</li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="search-matter" class="control-label col-xs-1 col-xs-offset-3">搜索内容：</label>
                                        <div class="col-xs-3 pa0">
                                            <input type="text" class="form-control" id="search-matter">
                                        </div>
                                        <div class="col-xs-1 mate-box pa0">
                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                <span>模糊匹配</span>
                                                <i class="icon icon-angle-down"></i>
                                            </div>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>模糊匹配</li>
                                                <li>精确匹配</li>
                                            </ul>
                                        </div>
                                        <button type="button" class="btn col-xs-1">搜索</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- 搜索结果 -->
                        <div class="jc-sp-warning jcs-items">
                            <div class="jc-sp-wtitle">
                                <b>搜索结果</b>
                            </div>
                            <div class="state-a-table1 jcs-i-list">
                                <table class="liebiao">
                                    <thead>
                                        <tr>
                                            <th class="first">申请人名称（中文）</th>
                                            <th class="second">商标数量</th>
                                            <th class="third">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td>11</td>
                                            <td><a href="javascript:;">查看</a><a href="javascript:;">购物车</a></td>
                                        </tr>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td>11</td>
                                            <td><a href="javascript:;">查看</a><a href="javascript:;">购物车</a></td>
                                        </tr>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td>11</td>
                                            <td><a href="javascript:;">查看</a><a href="javascript:;">购物车</a></td>
                                        </tr>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td>11</td>
                                            <td><a href="javascript:;">查看</a><a href="javascript:;">购物车</a></td>
                                        </tr>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td>11</td>
                                            <td><a href="javascript:;">查看</a><a href="javascript:;">购物车</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- 购物车 -->
                        <div class="jc-sp-wfirstTrial jcs-items">
                            <div class="jc-sp-wtitle">
                                <b>购物车</b>
                                <span class="hint-info">您当前是普通会员，附送名额：2个，目前您已成功手动添加1个。 您还有1个免费名额。<a href="{{ route('search.logo.monitor.order.price') }}">收费标准?</a></span>
                            </div>
                            <div class="state-a-table2 jcs-i-list mb0">
                                <table class="liebiao">
                                    <thead>
                                        <tr>
                                            <th class="first">申请人名称（中文）</th>
                                            <th class="second"></th>
                                            <th class="third">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td></td>
                                            <td><a href="javascript:;" class="free">免费</a><a href="javascript:;" class="delete">删除</a></td>
                                        </tr>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td></td>
                                            <td><a href="javascript:;" class="free">免费</a><a href="javascript:;" class="delete">删除</a></td>
                                        </tr>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td></td>
                                            <td><a href="javascript:;" class="free">免费</a><a href="javascript:;" class="delete">删除</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="price-box">
                            总计：￥<span>0*0=0</span>
                        </div>
                        <div class="row">
                            <a class="pull-right col-xs-2" href="{{ route('search.logo.monitor.order.pay') }}"><button type="button" class="btn account-btn">去结算</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop