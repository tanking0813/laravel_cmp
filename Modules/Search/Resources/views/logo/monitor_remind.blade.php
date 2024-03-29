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


    <div class="jc-state-details row ma0 jc-indent-box jc-remind-box">
        <!-- 左侧边栏 -->
        <div class="jcs-left col-xs-3">
            <!-- 账号订单列表项展示 -->
            <div class="addState jc-i-items">
                <p class="lead mb0">状态提醒</p>
                <ul class="pl0">
                    <li class="on"><a href="{{ route('search.logo.monitor.remind') }}">已设定状态提醒商标</a></li>
                    <li><a href="{{ route('search.logo.monitor.remind.update') }}">已设提醒状态更新（<span class="data">0</span>）</a></li>
                    <li><a href="{{ route('search.logo.monitor.remind.notice') }}">柚皮系统通知公告（<span class="data">0</span>）</a></li>
                </ul>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0"> 
            <div class="mc-top monitor-box">
                <div class="jc-i-title">
                    <b>已设定状态提醒商标</b>
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
                                            <th>商标注册号</th>
                                            <th>商标名称</th>
                                            <th style="width: 150px;">最新状态</th>
                                            <th>订阅状态</th>
                                            <th>重新设定</th>
                                            <th>订阅日期</th>
                                            <th>同时发送邮件</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($demo as $vo)
                                        <tr>
                                            <td>{{ $vo['num'] }}</td>
                                            <td>{{ $vo['name'] }}</td>
                                            <td>{{ $vo['student'] }}</td>
                                            <td>{{ $vo['student_s'] }}</td>
                                            <td><a href="{{ route('search.logo.monitor.state.show', $vo['id']) }}#jc-sp-warning">重新设定</td>
                                            <td>{{ $vo['title'] }}</td>
                                            <td>{{ $vo['time'] }}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop