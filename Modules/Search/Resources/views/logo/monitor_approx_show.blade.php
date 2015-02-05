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

    <div class="jc-state-details jc-s-personal jc-al-box">
        <!-- 收藏 -->
        <div class="jc-sp-collect">
            <b>商标初审近似详情</b>
        </div>
        <!-- 商标详细信息 -->
        <div class="jc-al-detail mb0">
            <div class="lib-detail bDetail-message">
                <table class="table table-bordered mb0">
                    <tbody>
                        <tr>
                            <td>商标名称</td>
                            <td>图形</td>
                            <td>注册号</td>
                            <td>10675396</td>
                            <td rowspan="4" class="bPic"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></td>
                        </tr>
                        <tr>
                            <td>申请人名称（中文）</td>
                            <td>北京科技园建设(集团)股份有限公司</td>
                            <td>国际分类</td>
                            <td>第11类</td>
                        </tr>
                        <tr>
                            <td>初审公告期号</td>
                            <td>1348</td>
                            <td>初审公告日期</td>
                            <td>2013-02-20</td>
                        </tr>
                        <tr>
                            <td>当前最新状态</td>
                            <td colspan="3">已注册 2013-06-14</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 列表展示 -->
        <div class="jcs-items">
            <!-- 相关表格 -->
            <div class="jc-i-table">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>初审公告期</td>
                            <td><a href="" class="on">全部</a><a href="">1437</a><a href="">1436</a><a href="">1435</a><a href="">1434</a><a href="">1433</a><a href="">1432</a><a href="">1431</a><a href="">1430</a><a href="">1429</a><a href="">1428</a><a href="">1427</a><a href="">1426</a></td>
                        </tr>
                        <tr>
                            <td>商标类型</td>
                            <td><a href="" class="on">全部(<span class="data">4</span>)</a><a href="">中文商标(<span class="data">0</span>)</a><a href="">英文商标(<span class="data">0</span>)</a><a href="">图形商标(<span class="data">4</span>)</a><a href="">数字商标(<span class="data">0</span>)</a><a href="">字头商标(<span class="data">0</span>)</a></td>
                        </tr>
                        <tr>
                            <td>近似条件</td>
                            <td><a href="" class="on">全部(<span class="data">4</span>)</a><a href="">同类相同(<span class="data">0</span>)</a><a href="">同类近似(<span class="data">1</span>)</a><a href="">异类相同(<span class="data">0</span>)</a><a href="">异类近似(<span class="data">3</span>)</a></td>
                        </tr>
                        <tr>
                            <td>类别</td>
                            <td><a href="" class="on">全部</a><a href="">3</a><a href="">23</a><a href="">33</a><a href="">43</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 搜索框 -->
        <div class="jc-al-form">
            <form role="form">
                <div class="form-group row ma0">
                    <label for="brandName" class="sr-only">搜索框</label>
                    <input type="text" id="brandName" class="form-control col-xs-5" placeholder="注册号">
                    <button type="button" class="btn jc-search col-xs-1" style="margin-left:-2px">搜索</button>
                </div>
            </form>
        </div>
        <!-- 该商标初审近似情况统计 -->
        <div class="jcs-items">
            <div class="jcs-i-list jcs-an-list">
                <table class="liebiao">
                    <thead>
                        <tr>
                            <th>排序</th>
                            <th>注册号</th>
                            <th>商标图片</th>
                            <th>国际分类</th>
                            <th>商标名称</th>
                            <th>初审公告期号</th>
                            <th style="width: 360px;">申请人</th>
                            <th>相似度</th>
                            <th>是否已联系</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             @foreach($demo as $vo)
                            <td>{{ $vo['id'] }}</td>
                            <td>{{ $vo['num'] }}</td>
                            <td>{{ $vo['img'] }}</td>
                            <td>{{ $vo['class'] }}</td>
                            <td>{{ $vo['title'] }}</td>
                            <td>{{ $vo['nums'] }}</td>
                            <td>{{ $vo['pepole'] }}</td>
                            <td>{{ $vo['xs'] }}</td>
                            <td>{{ $vo['istel'] }}</td>
                            <td><a href="{{ route('search.logo.monitor.approx.detail', $vo['id']) }}">查看</a></td>
                        </tr>
                         @endforeach
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
   
@stop