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
                    <li ><a href="{{ route('search.logo.monitor.remind') }}">已设定状态提醒商标</a></li>
                    <li><a href="{{ route('search.logo.monitor.remind.update') }}">已设提醒状态更新（<span class="data">0</span>）</a></li>
                    <li class="on"><a href="{{ route('search.logo.monitor.remind.notice') }}">柚皮系统通知公告（<span class="data">0</span>）</a></li>
                </ul>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0"> 
            <div class="mc-top monitor-box">
                <div class="jc-i-title">
                    <b>柚皮系统通知公告</b>
                </div>
                <div class="jc-i-content jc-r-notice">
                    <!-- 操作日志 -->
                    <div class="jc-i-log">
                        <!-- 列表展示 -->
                        <div class="jcs-items">
                            <div class="jcs-i-list">
                                <table class="liebiao">
                                    <thead>
                                        <tr>
                                            <th style="width: 431px;">标题</th>
                                            <th style="width: 431px;">提醒日期</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 商标 10675403 北科建 最新状态：商标已注册(2013-05-21) </td>
                                            <td>2015-01-14</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="notice-none">
                                    暂无任何公告
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop