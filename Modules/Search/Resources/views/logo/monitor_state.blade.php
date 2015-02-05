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



<div class="jc-state-details row ma0">
        <!-- 左侧边栏 -->
        <div class="jcs-left col-xs-3">
            <!-- 我的商标状态统计列表项展示 -->
            <div class="personalState">
                <p class="lead mb0">状态监测</p>
                <div class="jcs-l-box">
                    <div class="jcs-l-title">按有效期查看</div>
                    <ul class="mb0">
                        <li>续展期</li>
                        <li>宽展期</li>
                    </ul>
                </div>
                <div class="jcs-l-box">
                    <div class="jcs-l-title">按最新状态查看</div>
                    <ul class="mb0">
                        <li class="active">全部（5）</li>
                        <li>商标已注册（2）</li>
                        <li>续展完成（3）</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0">
            <div class="mc-top monitor-box">
                <div class="hd">
                    <ul class="list-inline ma0">
                        <li class="on"><a href="{{ route('search.logo.monitor.state') }}">我的商标状态统计</a></li>
                        <li ><a href="{{ route('search.logo.monitor.count.people') }}">手动添加申请人状态统计</a></li>
                </ul>
                </div>
                <div class="bd">
                    <div class="lh">
                        <!-- 搜索框 -->
                        <form role="form">
                            <div class="form-group row ma0">
                                <label for="brandName" class="sr-only">搜索框</label>
                                <input type="text" id="brandName" class="form-control col-xs-5 col-xs-offset-4" placeholder="注册号">
                                <button type="button" class="btn jc-search col-xs-1" style="margin-left:-2px">搜索</button>
                            </div>
                        </form>
                        <!-- 列表展示 -->
                        <div class="jcs-items">
                            <div class="jcs-i-rank">
                                <ul class="list-inline ml0">
                                    <li class="active">按照注册号排序</li>
                                    <li>按照初审公告期号排序</li>
                                    <li>按照注册公告日期排序</li>
                                </ul>
                            </div>
                            <div class="jcs-i-list">
                                <table class="liebiao">
                                    <thead>
                                        <tr>
                                            <th>注册号</th>
                                            <th>商标图片</th>
                                            <th>国际分类</th>
                                            <th>商标名称</th>
                                            <th>初审公告期号</th>
                                            <th>注册日期</th>
                                            <th style="width: 300px;">当前最新状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($demo as $vo)
                                        <tr>
                                            <td>{{ $vo['num'] }}</td>
                                            <td>{{ $vo['img-num'] }}</td>
                                            <td>{{ $vo['class'] }}</td>
                                            <td>{{ $vo['title'] }}</td>
                                            <td>{{ $vo['name'] }}</td>
                                            <td>{{ $vo['c-num'] }}</td>
                                            <td>{{ $vo['create'] }}</td>
                                            <td><a href="{{ route('search.logo.monitor.state.show', $vo['id']) }}">查看</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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