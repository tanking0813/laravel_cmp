@extends('search::logo.layouts.2columns-right')

@section('style')
{{ HTML::script('modules/search/js/queryForm_validate.js') }}
@stop

@section('content')
<!-- 近似查询结果 -->
<div class="search-result">
    <div class="searchR-title">
        <h4 class="sR-cleft">查询结果：</h4>
        <div class="sR-cright">
            <p class="sR-record mb0">10项符合查询结果</p>
            <div class="excel-about">
                <P class="warning-upgrade"><span></span>您当前是普通会员，不能将查询结果导出Excel!<a href="">升级会员</a></P>
                <p class="warning"><span></span>导出到Excel</p>
                <a href="javascript:;"><img src="{{ asset('modules/search/images/excel.png') }}" class="excel" data-toggle="tooltip" data-placement="top" data-original-title="Tooltip on top" /></a>
            </div>
            <div class="check">
                <img src="{{ asset('modules/search/images/packUp.png') }}" class="dragPack" />
            </div>
        </div>
    </div>
    <div class="dragPack-wrap">
        <!-- 列表内容 -->
        <div class="searchR-content">
            <div class="row">
                <div class="hd col-xs-8" style="border-right:0;">
                    <ul class="searchR-nav-list list-unstyled" role="navigation">
                        <li class="shitu-icon"><i class="fa fa-search"></i>视图搜索</li>
                        <li class="liebiao-icon"><i class="fa fa-reorder"></i>列表视图</li>
                        <li class="tuxing-icon"><i class="fa fa-th-large"></i>图形视图</li>
                    </ul>
                </div>
            </div>
            <div class="bd">
                <!-- 视图模块 -->
                <div class="lh">
                    <div class="rank">
                        <ul class="list-unstyled list-inline">
                            <li class="registr-id" onclick="do_default_push(1,'num',5);">注册号排序</li>
                            <li class="date-id" onclick="do_default_push(1,'date',5);">申请日排序</li>
                        </ul>
                    </div>
                    <div class="brandDetail-list">
                        <ul class="list-unstyled shitu">
                            @foreach($data as $v)
                                <li>
                                    <div class="col-xs-4 brand-img">
                                        <a href="{{ route('search.logo.logoDetail') }}"><img src="{{ $v['logo'] }}" /></a>
                                    </div>
                                    <div class="col-xs-7 col-xs-offset-1 brand-detail">
                                        <p>商标名称：<mark>{{ $v['name'] }}</mark><span>注册号：<mark>{{ $v['num'] }}</mark></span><button type="button" class="btn pa0">已注册</button></p>
                                        <p><mark>申请人：{{ $v['owner'] }}<span>申请日：{{ $v['start_time'] }}</span><span>分类：{{ $v['ics'] }}</span></mark></p>
                                        <p>注册公告期号：963<span>注册日期：{{ $v['register_time'] }}</span></p>
                                        <p>代理公司：{{ $v['company'] }}</p>
                                        <p><a href="{{ route('search.logo.logoDetail') }}">详细信息>></a></p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- 列表模块 -->
                <div class="lh">
                    <div class="rank">
                        <ul class="list-unstyled list-inline">
                            <li class="registr-id" onclick="do_default_push(1,'num',5);">注册号排序</li>
                            <li class="date-id" onclick="do_default_push(1,'date',5);">申请日排序</li>
                        </ul>
                    </div>
                    <table class="liebiao">
                        <thead>
                            <tr>
                                <th>序号</th>
                                <th>注册号/申请号</th>
                                <th>类别</th>
                                <th>商标</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>5074833</td>
                                <td>9</td>
                                <td>阿迪达斯</td>
                                <td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5074833</td>
                                <td>9</td>
                                <td>阿迪达斯</td>
                                <td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>5074833</td>
                                <td>9</td>
                                <td>阿迪达斯</td>
                                <td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>5074833</td>
                                <td>9</td>
                                <td>阿迪达斯</td>
                                <td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>5074833</td>
                                <td>9</td>
                                <td>阿迪达斯</td>
                                <td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 图形模块 -->
                <div class="lh">
                    <div class="rank">
                        <ul class="list-unstyled list-inline">
                            <li class="registr-id" onclick="do_default_push(1,'num',5);">注册号排序</li>
                            <li class="date-id" onclick="do_default_push(1,'date',5);">申请日排序</li>
                        </ul>
                    </div>
                    <div class="brandDetail-list">
                        <ul class="list-unstyled tuxing list-inline">
                            <li>
                                <a href="{{ route('search.logo.logoDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
                                <div class="txbrand-detail">
                                    <p>商标名称：<a href="{{ route('search.logo.logoDetail') }}">阿迪达斯</a></p>
                                    <p>注册号：<mark>3477306</mark></p>
                                    <p>法律状态：<mark>已注册</mark></p>
                                    <p>类别：<mark>第5类</mark></p>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('search.logo.logoDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
                                <div class="txbrand-detail">
                                    <p>商标名称：<a href="{{ route('search.logo.logoDetail') }}">阿迪达斯</a></p>
                                    <p>注册号：<mark>3477306</mark></p>
                                    <p>法律状态：<mark>已注册</mark></p>
                                    <p>类别：<mark>第5类</mark></p>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('search.logo.logoDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
                                <div class="txbrand-detail">
                                    <p>商标名称：<a href="{{ route('search.logo.logoDetail') }}">阿迪达斯</a></p>
                                    <p>注册号：<mark>3477306</mark></p>
                                    <p>法律状态：<mark>已注册</mark></p>
                                    <p>类别：<mark>第5类</mark></p>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('search.logo.logoDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
                                <div class="txbrand-detail">
                                    <p>商标名称：<a href="{{ route('search.logo.logoDetail') }}">阿迪达斯</a></p>
                                    <p>注册号：<mark>3477306</mark></p>
                                    <p>法律状态：<mark>已注册</mark></p>
                                    <p>类别：<mark>第5类</mark></p>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('search.logo.logoDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
                                <div class="txbrand-detail">
                                    <p>商标名称：<a href="{{ route('search.logo.logoDetail') }}">阿迪达斯</a></p>
                                    <p>注册号：<mark>3477306</mark></p>
                                    <p>法律状态：<mark>已注册</mark></p>
                                    <p>类别：<mark>第5类</mark></p>
                                </div>
                            </li>
                        </ul>
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

@section('sidebar')

    <!-- 商标查询说明 -->
    @include('search::logo.partials._block_doc')
    <!-- 商标状态统计 -->
    @include('search::logo.partials._block_state')
    <!-- 查询记录 -->
    @include('search::logo.partials._block_record')
    <!-- 商标知识 -->
    @include('search::logo.partials._block_know')

@stop

@section('script')
   {{ HTML::script('static/js/jquery/jquery.cookie.js') }}
   {{ HTML::script('static/js/jquery/jquery.pager.js') }}
   {{ HTML::script('static/js/jquery/validate/jquery.validate.min.js') }}
@stop