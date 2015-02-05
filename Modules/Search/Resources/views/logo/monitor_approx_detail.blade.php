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


    <div class="jc-state-details jc-s-personal jc-a-contrast">
        <!-- 商标详细信息 -->
        <div class="jc-sp-detail mb0" id="jc-sp-detail">
            <h3 class="mt0 mb0">商标详情对比</h3>
            <p class="similarity"><span>中文相似度：</span><span>英文相似度：</span><span>图形：【一致】</span><span>数字：【不一致】</span><span>字头：【不一致】</span></p>
            <a href="javascript:;" class="create-word">生成WORD文档</a>
            <!-- 对比内容 -->
            <div class="pt-contrast">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="ptc-items"></th>
                            <th>申请人商标</th>
                            <th>初审商标</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="ptc-i-title">
                            <td></td>
                            <td><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></td>
                            <td><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></td>
                        </tr>
                        <tr class="ptc-i-center">
                            <td></td>
                            <td>图形要素：26.7.25</td>
                            <td>图形要素：1.13.1</td>
                        </tr>
                        <tr>
                            <td>商标名称</td>
                            <td>图形</td>
                            <td>图形</td>
                        </tr>
                        <tr>
                            <td>商标中文</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>商标英文</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>注册号</td>
                            <td>10278629</td>
                            <td>13302265</td>
                        </tr>
                        <tr>
                            <td>国际分类号</td>
                            <td>35</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>申请日期</td>
                            <td>2011-12-12</td>
                            <td>2013-03-22</td>
                        </tr>
                        <tr>
                            <td>申请人名称（中文）</td>
                            <td>北京科技园建设(集团)股份有限公司</td>
                            <td>成都市森坤塑胶管件厂</td>
                        </tr>
                        <tr>
                            <td>申请人地址（中文）</td>
                            <td>北京市海淀区北四环中路229号</td>
                            <td>四川省崇州市观胜镇</td>
                        </tr>
                        <tr>
                            <td>申请人名称（英文）</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>申请人地址（英文）</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>申请人2</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>申请人3</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>初审公告期号</td>
                            <td></td>
                            <td>1428</td>
                        </tr>
                        <tr>
                            <td>初审公告日期</td>
                            <td></td>
                            <td>2014-02-02</td>
                        </tr>
                        <tr>
                            <td>注册公告期号</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>注册公告日期</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>专用权期限</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>商标类型</td>
                            <td>普通商标</td>
                            <td>普通商标</td>
                        </tr>
                        <tr>
                            <td>代理人名称</td>
                            <td>陕西汇泽知识产权代理有限公司</td>
                            <td>北京中诚联信知识产权代理有限公司</td>
                        </tr>
                        <tr>
                            <td>是否共有商标</td>
                            <td>否</td>
                            <td>否</td>
                        </tr>
                        <tr>
                            <td>使用商品</td>
                            <td>[3501——广告;广告设计;] [3502——商业管理咨询(顾问);特许经营的商业管理;组织技术展览;] [3504——人事管理咨询;] [3505——商业区迁移(提供信息);] [3506——文秘;] [3507——会计;] [3508——寻找赞助;]</td>
                            <td>[1801——动物皮;软毛皮(仿皮制品);] [1802——公文包;书包;人造革箱;钱包(钱夹);] [1804——伞;] [1805——手杖;] [1806——马具配件;皮带(鞍具);]</td>
                        </tr>
                        <tr>
                            <td>备注</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>商标流程</td>
                            <td>打印驳回或部分驳回通知书(2012-12-31)--->收到驳回复审申请或补充材料,待审(2013-01-21)</td>
                            <td>--->初步审定（1428）(2014-10-20)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="skip-list">
            <ul class="list-inline mb0">
                <li class="prev"><button type="button" class="btn">上一个</button></li>
                <li class="next"><button type="button" class="btn">下一个</button></li>
            </ul>
        </div>
    </div>

@stop