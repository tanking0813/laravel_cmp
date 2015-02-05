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


    <div class="jc-state-details jc-appro-name jc-indent-box">
        <!-- 右侧列表内容 -->
        <div class="jcs-right jc-an-right jc-appro-mine">
            <div class="mc-top monitor-box">
                <div class="hd">
                    <ul class="list-inline ma0">
                         <li><a href="{{ route('search.logo.monitor.approx.img') }}">名称监测（含图形）</a></li>
                        <li class="on"><a href="{{ route('search.logo.monitor.approx') }}">我的商标近似监测</a></li>
                        <li><a href="{{ route('search.logo.monitor.approx.hand') }}">手添申请人近似监测</a></li>
                    </ul>
                </div>
                <div class="bd">
                    <!-- 我的商标近似监测 -->
                    <div class="lh">
                        <!-- 列表展示 -->
                        <div class="jc-i-content">
                            <div class="jcs-items">
                                <div class="jc-i-table">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>国际分类</td>
                                                <td><a href="" class="on">全部</a><a href="">11</a><a href="">35</a><a href="">36</a><a href="">37</a><a href="">42</a><a href="">43</a></td>
                                            </tr>
                                            <tr>
                                                <td>初审公告期</td>
                                                <td><a href="" class="on">全部</a><a href="">1437</a><a href="">1436</a><a href="">1435</a><a href="">1434</a><a href="">1433</a><a href="">1432</a><a href="">1431</a><a href="">1430</a><a href="">1429</a><a href="">1428</a><a href="">1427</a><a href="">1426</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- 搜索框 -->
                                <form role="form">
                                    <div class="form-group row ma0">
                                        <label for="brandName" class="sr-only">搜索框</label>
                                        <input type="text" id="brandName" class="form-control col-xs-5" placeholder="注册号">
                                        <button type="button" class="btn jc-search col-xs-1" style="margin-left:-2px">搜索</button>
                                    </div>
                                </form>
                                <!-- 列表展示 -->
                                <div class="jcs-i-list jcs-an-list">
                                    <table class="liebiao">
                                        <thead>
                                            <tr>
                                                <th>排序</th>
                                                <th>注册号</th>
                                                <th>商标图片</th>
                                                <th>国际分类</th>
                                                <th>商标名称</th>
                                                <th style="width: 360px;">跟它近似的初审商标数</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($demo as $vo)
                                            <tr>
                                                <td>{{ $vo['id'] }}</td>
                                                <td>{{ $vo['num'] }}</td>
                                                <td>{{ $vo['img-num'] }}</td>
                                                <td>{{ $vo['class'] }}</td>
                                                <td>{{ $vo['title'] }}</td>
                                                <td><a href="{{ route('search.logo.monitor.approx.show', $vo['id']) }}">{{ $vo['name'] }}</a></td>
                                                <td><a href="javascript:void(0);" class="tab-text">不再监测</a><a href="{{ route('search.logo.monitor.approx.show', $vo['id']) }}">查看</a></td>
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