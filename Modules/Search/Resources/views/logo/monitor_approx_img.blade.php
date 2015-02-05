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
            <!-- 手动添加状态统计列表项展示 -->
            <div class="addState">
                <p class="lead mb0">近似监测</p>
                <div class="jcs-l-box">
                    <div class="jcs-l-title">按分组查看</div>
                    <ul class="mb0 appro-personal">
                        <li class="active">全部名称监测</li>
                        <li><a href="{{ route('search.logo.monitor.approx.img') }}">服务客户</a></li>
                    </ul>
                </div>
                <div class="jcs-l-box">
                    <div class="jcs-l-title">按商标近似度分组查看</div>
                    <div class="jc-appro-items">
                        <h4><em></em>全部商标</h4>
                        <ul class="cly-detail">
                            <li>按各期近似度全部倒排</li>
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
                        <li class="on"><a href="{{ route('search.logo.monitor.approx.img') }}">名称监测（含图形）</a></li>
                        <li><a href="{{ route('search.logo.monitor.approx') }}">我的商标近似监测</a></li>
                        <li><a href="{{ route('search.logo.monitor.approx.hand') }}">手添申请人近似监测</a></li>
                    </ul>
                </div>
                <div class="bd">
                    <!-- 名称监测（含图形） -->
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
                        <div class="jc-i-content">
                            <div class="jcs-items">
                                <!-- 相关表格 -->
                                <div class="jc-i-table" style="margin-top: 20px;">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>初审公告期</td>
                                                <td><a href="" class="on">全部</a><a href="">1437</a><a href="">1436</a><a href="">1435</a><a href="">1434</a><a href="">1433</a><a href="">1432</a><a href="">1431</a><a href="">1430</a><a href="">1429</a><a href="">1428</a><a href="">1427</a><a href="">1426</a></td>
                                            </tr>
                                            <tr>
                                                <td>监测类别</td>
                                                <td><a href="" class="on">全部</a><a href="">1</a><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a><a href="">6</a><a href="">7</a><a href="">8</a><a href="">9</a><a href="">10</a><a href="">11</a><a href="">12</a><a href="">13</a><a href="">14</a><a href="">15</a><a href="">16</a><a href="">17</a><a href="">18</a><a href="">19</a><a href="">20</a><a href="">21</a><a href="">22</a><a href="">23</a><a href="">24</a><a href="">25</a><a href="">26</a><a href="">27</a><a href="">28</a><a href="">29</a><a href="">30</a><a href="">31</a><a href="">32</a><a href="">33</a><a href="">34</a><a href="">35</a><a href="">36</a><a href="">37</a><a href="">38</a><a href="">39</a><a href="">40</a><a href="">41</a><a href="">42</a><a href="">43</a><a href="">44</a><a href="">45</a></td>
                                            </tr>
                                            <tr>
                                                <td>监测类型</td>
                                                <td><a href="" class="on">全部</a><a href="">中文</a><a href="">英文</a><a href="">图形</a><a href="">数字</a><a href="">字头</a><a href="">拼音</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- 相关表单 -->
                                <div class="jcs-i-list">
                                    <table class="liebiao">
                                        <thead>
                                            <tr>
                                                <th>类型</th>
                                                <th>监测名称</th>
                                                <th>监测类别</th>
                                                <th>监测条件</th>
                                                <th>服务客户</th>
                                                <th>近似数</th>
                                                <th>进度</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <div class="notice-none">
                                        此功能【即将开放】
                                    </div>
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