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

    <div class="jc-state-details row ma0 jc-appro-name jc-indent-box">
        <!-- 左侧边栏 -->
        <div class="jcs-left col-xs-3 jc-an-left">
            <!-- 我的商标状态统计列表项展示 -->
            <div class="personalState" style="display:none">
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
                        <li class="active">全部（10）</li>
                        <li>商标已注册（13）</li>
                        <li>续展完成（3）</li>
                    </ul>
                </div>
            </div>
            <!-- 手动添加状态统计列表项展示 -->
            <div class="addState">
                <p class="lead mb0">近似监测</p>
                <div class="jcs-l-box">
                    <div class="jcs-l-title">按分组查看</div>
                    <ul class="mb0 appro-add">
                        <li class="active">全部申请人</li>
                    </ul>
                </div>
                <div class="jcs-l-box">
                    <div class="jcs-l-title">按商标近似度分组查看</div>
                    <div class="jc-appro-items">
                        <h4><em></em>全部商标</h4>
                        <ul class="cly-detail">
                            <li><a href="{{ route('search.logo.monitor.approx.hand.order') }}">按各期近似度全部倒排</a></li>
                            <li>近似度<span>≥80%</span></li>
                            <li>近似度<span>60-80%</span></li>
                            <li>近似度<span>≤60%</span></li>
                        </ul>
                        <h4><em></em>中文商标</h4>
                        <ul class="cly-detail">
                            <li>按各期近似度全部倒排</li>
                            <li>近似度<span>≥80%</span></li>
                            <li>近似度<span>60-80%</span></li>
                            <li>近似度<span>≤60%</span></li>
                        </ul>
                        <h4><em></em>英文商标</h4>
                        <ul class="cly-detail">
                            <li>按各期近似度全部倒排</li>
                            <li>近似度<span>≥80%</span></li>
                            <li>近似度<span>60-80%</span></li>
                            <li>近似度<span>≤60%</span></li>
                        </ul>
                        <h4>图形商标</h4>
                        <h4>数字商标</h4>
                        <h4>字头商标</h4>
                        <h4>拼音商标</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0 jc-an-right">
            <div class="mc-top monitor-box">
                <div class="hd">
                    <ul class="list-inline ma0">
                        <li><a href="{{ route('search.logo.monitor.approx.img') }}">名称监测（含图形）</a></li>
                        <li><a href="{{ route('search.logo.monitor.approx') }}">我的商标近似监测</a></li>
                        <li class="on"><a href="{{ route('search.logo.monitor.approx.hand') }}">手添申请人近似监测</a></li>
                    </ul>
                </div>
                <div class="bd">
                    <!-- 手添申请人近似监测 -->
                    <div class="lh">
                        <!-- 搜索框 -->
                        <form role="form">
                            <div class="row ma0 jcsr-pa0" style="padding-left:160px">
                                <div class="form-group col-xs-4 pa0 ma0">
                                    <label for="brandName" class="sr-only">搜索框</label>
                                    <input type="text" id="brandName" class="form-control" placeholder="申请人名称">
                                </div>
                                <div class="form-group col-xs-4 pa0 ma0">
                                    <label for="brandName" class="sr-only">搜索框</label>
                                    <input type="text" id="brandName" class="form-control" placeholder="注册号">
                                </div>
                                <button type="button" class="btn jc-search col-xs-1 pa0 ma0">搜索</button>
                            </div>
                        </form>
                        <!-- 列表展示 -->
                        <div class="jcs-items">
                            <div class="jcs-i-rank">
                                <p class="jc-a-special"><b>初审公告期：</b><a href="" class="on">全部</a><a href="">1437</a><a href="">1436</a><a href="">1435</a><a href="">1434</a><a href="">1433</a><a href="">1432</a><a href="">1431</a><a href="">1430</a><a href="">1429</a><a href="">1428</a><a href="">1427</a><a href="">1426</a></p>
                            </div>
                            <div class="jcs-i-list">
                                <table class="liebiao">
                                    <thead>
                                        <tr>
                                            <th style="width: 300px;">申请人名称</th>
                                            <th>商标数量</th>
                                            <th>联系方式</th>
                                            <th style="width: 250px;">近似监测</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>北京科技园建设(集团)股份有限公司</td>
                                            <td>4</td>
                                            <td>029-9999999</td>
                                            <td></td>
                                            <td><a href="{{ route('search.logo.monitor.approx.look') }}">查看</a><a href="javascript:;" class="delete delete-special1">删除</a></td>
                                        </tr>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td>4</td>
                                            <td>029-9999999</td>
                                            <td></td>
                                            <td><a href="{{ route('search.logo.monitor.approx.look') }}">查看</a><a href="javascript:;" class="delete delete-special2">删除</a></td>
                                        </tr>
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