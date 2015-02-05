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

    <div class="jc-state-details jc-s-personal jc-s-add">
        <!-- 收藏 -->
        <div class="jc-sp-collect">
            <b>“北京科技园建设(集团)股份有限公司”商标申请人的商标列表</b>
        </div>
        <!-- 商标详细信息 -->
        <div class="jc-sa-detail jc-s-add">
            <div class="jcs-i-rank">
                <p class="jc-a-special"><b>初审公告期：</b><a href="" class="on">全部(<span>3</span>)</a></p>
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
            <div class="jcs-items">
                <div class="jcs-i-rank">
                    <ul class="list-inline ml0">
                        <li class="active">按照注册号排序</li>
                        <li>按照初审公告期号排序</li>
                        <li>按照注册公告日期排序</li>
                        <li>按照最新状态日期排序</li>
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
                                <th style="width: 260px;">当前最新状态</th>
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
@stop