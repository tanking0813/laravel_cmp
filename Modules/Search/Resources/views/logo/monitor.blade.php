@extends('search::logo.layouts.2columns-right')

@section('content')
    <div class="monitor-left">
        @include('search::logo.partials._block_monitor_nav')
        <!-- 展示内容 -->
        <div class="monitor-matter">
            <div class="mc-top monitor-box">
                <div class="hd">
                    <ul class="list-inline ma0">
                        <li>我的商标状态统计</li>
                        <li>手动添加状态统计</li>
                    </ul>
                </div>
                <div class="bd">
                    <div class="lh">
                        <div id="my_tmState" style="width: 850px; height:350px;"></div>
                    </div>
                    <div class="lh">
                        <div id="my_tmState_handle" style="width: 850px; height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="mc-bottom monitor-box">
                <div class="hd">
                    <ul class="list-inline ma0">
                        <li>我的商标初审近似统计</li>
                        <li>手动添加近似统计</li>
                    </ul>
                </div>
                <div class="bd">
                    <div class="lh">
                        <div id="my_tmState_similar" style="width: 850px; height:350px;"></div>
                    </div>
                    <div class="lh">
                        <div id="my_tmState_similar_handle" style="width: 850px; height:350px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('sidebar')
    @include('search::logo.partials._block_monitor_add')
    <!-- 商标监测说明、知识 -->
    <div class="jc-correlation">
        <!-- 商标监测说明 -->
        <div class="jc-explain-box">
            <div class="jcr-title">商标监测说明</div>
            <div class="jcr-detail">
                <p class="lead mb0">北京科技园建设(集团)股份有限公司</p>
                <p>您当前是普通会员<a href="" class="VIP-up">升级会员</a></p>
                <ul class="mb0 pa0 jcr-explain">
                    <li>已添加状态监测：
                        <span class="progress-bar"></span>
                        <span class="figure"><a href="">1</a>/2</span>
                    </li>
                    <li>已添加状态监测：
                        <span class="progress-bar"></span>
                        <span class="figure"><a href="">1</a>/2</span>
                    </li>
                </ul>
                <p>您当前监测权利：</p>
                <p>仅监测您的10个以内商标的状态变化.</p>
                <p>仅监测您的10个以内商标的近似情况.</p>
                <p>仅可额外对2个申请人商标进行状态监测.</p>
                <p>仅可额外对2个申请人商标进行近似监测.</p>
                <p>及时状态提醒.</p>
                <p>生成Word版打印.</p>
                <p>编辑申请人企业名片.</p>
                <p>近似监测末尾三期的初审公告数据.</p>
            </div>
        </div>
        <!-- 商标监测知识 -->
        <div class="data-box">
            <div class="jcr-title">商标监测知识</div>
            <div class="jcr-detail">
                <ul class="mb0 pa0 jcr-data">
                     @foreach($demo as $vo)
                    <li><span></span><a href="{{ route('Search.logo.monitor.library.show', $vo['id']) }}">{{ $vo['name'] }}</a></li>
                    <li><span></span><a href="{{ route('Search.logo.monitor.library.show', $vo['id']) }}">{{ $vo['title'] }}</a></li>
                     @endforeach
                 </ul>
                <a href="{{ route('Search.logo.monitor.library') }}" class="more pt10">查看更多>></a>
            </div>
        </div>
    </div>
@stop

@section('script')
 {{ HTML::script('static/js/echarts/echarts.js') }}
 {{ HTML::script('modules/search/js/jc.js') }}
@stop