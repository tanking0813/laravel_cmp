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
            <!-- 账号订单列表项展示 -->
            <div class="addState">
                <p class="lead mb0">账号订单</p>
                <div class="jcs-l-box">
                    <div class="jcs-l-title">按分组查看</div>
                    <ul class="mb0">
                        <li class="active">全部</li>
                        <li>有状态更新</li>
                    </ul>
                </div>
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
                        <li>商标已注册</li>
                        <li>商标待审中</li>
                        <li>商标已无效</li>
                        <li>初步审定</li>
                        <li>收到异议申请待审</li>
                        <li>异议完成</li>
                        <li>异议不予受理</li>
                        <li>异议复审待审中</li>
                        <li>异议复审完成</li>
                        <li>异议复审不予受理</li>
                        <li>商标待审中</li>
                        <li>商标已无效</li>
                    </ul>
                    <div class="more-btn">展开<i class="icon icon-double-angle-down"></i></div>
                </div>
            </div>
        </div>
        <!-- 右侧列表内容 -->
        <div class="jcs-right col-xs-9 pa0">
            <div class="mc-top monitor-box">
                <div class="hd">
                    <ul class="list-inline ma0">
                        <li>我的商标状态统计</li>
                        <li>手动添加申请人状态统计</li>
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
                                            <th>当前最新状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10675403</td>
                                            <td>5074833</td>
                                            <td>43</td>
                                            <td>北科建</td>
                                            <td>1348</td>
                                            <td>2013-05-21</td>
                                            <td>商标续展完成(2012-06-14)</td>
                                            <td><a href="jc-s-result.html">查看</a></td>
                                        </tr>
                                        <tr>
                                            <td>10675403</td>
                                            <td>5074833</td>
                                            <td>43</td>
                                            <td>北科建</td>
                                            <td>1348</td>
                                            <td>2013-05-21</td>
                                            <td>商标续展完成(2012-06-14)</td>
                                            <td><a href="jc-s-result.html">查看</a></td>
                                        </tr>
                                        <tr>
                                            <td>10675403</td>
                                            <td>5074833</td>
                                            <td>43</td>
                                            <td>北科建</td>
                                            <td>1348</td>
                                            <td>2013-05-21</td>
                                            <td>商标续展完成(2012-06-14)</td>
                                            <td><a href="jc-s-result.html">查看</a></td>
                                        </tr>
                                        <tr>
                                            <td>10675403</td>
                                            <td>5074833</td>
                                            <td>43</td>
                                            <td>北科建</td>
                                            <td>1348</td>
                                            <td>2013-05-21</td>
                                            <td>商标续展完成(2012-06-14)</td>
                                            <td><a href="jc-s-result.html">查看</a></td>
                                        </tr>
                                        <tr>
                                            <td>10675403</td>
                                            <td>5074833</td>
                                            <td>43</td>
                                            <td>北科建</td>
                                            <td>1348</td>
                                            <td>2013-05-21</td>
                                            <td>商标续展完成(2012-06-14)</td>
                                            <td><a href="v.html">查看</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
                                <ul class="list-inline ml0">
                                    <li class="active">按照申请人名称正排<i class="icon icon-arrow-up"></i></li>
                                    <li>按照申请人名称倒排<i class="icon icon-arrow-down"></i></li>
                                </ul>
                            </div>
                            <div class="jcs-i-list">
                                <table class="liebiao">
                                    <thead>
                                        <tr>
                                            <th>申请人名称</th>
                                            <th>商标数量</th>
                                            <th>联系方式</th>
                                            <th>状态更新</th>
                                            <th>未读</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>北京华商动力知识产权代理有限公司</td>
                                            <td>12</td>
                                            <td>029-9999999</td>
                                            <td>商标续展完成(2012-06-14)</td>
                                            <td>21</td>
                                            <td><a href="jc-s-add.html">查看</a><a href="javascript:;">删除</a></td>
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