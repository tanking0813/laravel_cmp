@extends('search::logo.layouts.default')

@section('style')

{{ HTML::style('static/css/font-awesome.css') }}

@stop

@section('alert_out')

        <!-- 状态提醒相关弹出提示框 -->
        <div id="jc-stateWarning-Modal" class="jc-stateWarning-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <!-- 短信发送提醒 -->
                        <div class="sendReminders-box">
                            <p>是否发Email到：123456789@qq.com</p>
                            <div class="btn-group">
                                <button type="button" class="btn">是</button>
                                <button type="button" class="btn">否</button>
                            </div>
                        </div>
                        <!-- 设置成功提醒 -->
                        <div class="completeSet-box">
                            <p>此商标的状态提醒设置完成</p>
                            <div class="btn-group">
                                <button type="button" class="btn set-complete" data-dismiss="modal">完成设置</button>
                                <button type="button" class="btn"><a href="{{ route('search.logo.monitor.remind') }}">查看状态</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop

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

                    <div class="jc-state-details jc-s-personal">
                        <!-- 收藏 -->
                        <div class="jc-sp-collect">
                            <b>商标详情</b>
                            <a href="javascript:;" class="create-collect">收藏</a>
                        </div>
                        <!-- 商标详细信息 -->
                        <div class="jc-sp-detail mb0" id="jc-sp-detail">
                            <h3 class="mt0 mb0">商标详情</h3>
                            <a href="javascript:;" class="create-word">生成WORD文档</a>
                            <div class="lib-detail bDetail-message">
                                <div class="table-detail">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>注册号</td>
                                                <td>10675403【第43类】</td>
                                                <td>申请日期</td>
                                                <td>2014-10-22</td>
                                                <td rowspan="8" class="bPic"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></td>
                                            </tr>
                                            <tr>
                                                <td>申请人名称（中文）</td>
                                                <td>北京科技园建设(集团)股份有限公司</td>
                                                <td>申请人名称（英文）</td>
                                                <td>第3类</td>
                                            </tr>
                                            <tr>
                                                <td>申请人地址（中文）</td>
                                                <td>北京市海淀区北四环中路229号</td>
                                                <td>申请人地址（英文）</td>
                                                <td>1990-10-10</td>
                                            </tr>
                                            <tr>
                                                <td>申请人2</td>
                                                <td></td>
                                                <td>申请人3</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>初审公告期号</td>
                                                <td>1348</td>
                                                <td>初审公告日期</td>
                                                <td>2013-02-20</td>
                                            </tr>
                                            <tr>
                                                <td>注册公告期号</td>
                                                <td>1360</td>
                                                <td>注册公告日期</td>
                                                <td>2013-02-20</td>
                                            </tr>
                                            <tr>
                                                <td>专用权期限</td>
                                                <td>2013年05月21日至2023年05月20日</td>
                                                <td>商标类型</td>
                                                <td>普通商标</td>
                                            </tr>
                                            <tr>
                                                <td>代理人名称</td>
                                                <td>北京中理通知识产权代理有限公司</td>
                                                <td>是否共有商标</td>
                                                <td>否</td>
                                            </tr>
                                            <tr>
                                                <td>使用商品</td>
                                                <td colspan="4">[4301——住所(旅馆、供膳寄宿处);饭店;茶馆;酒吧服务;] [4302——提供野营场地设施;柜台出租;] [4303——养老院;] [4304——日间托儿所(看孩子);] [4305——动物寄养;] [4306——烹饪设备出租;]</td>
                                            </tr>
                                            <tr>
                                                <td>备注</td>
                                                <td colspan="4"></td>
                                            </tr>
                                            <tr>
                                                <td>商标流程</td>
                                                <td colspan="4">
                                                    <p>1.商标注册申请中(2012-03-26)</p>
                                                    <p>2.注册申请初步审定(2013-01-11)</p>
                                                    <p>3.商标已注册(2013-06-14)</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="skip-list">
                            <ul class="list-inline mb0">
                                <li class="prev"><button type="button" class="btn">上一个</button></li>
                                <li class="next"><button type="button" class="btn">下一个</button></li>
                            </ul>
                        </div>
                        <!-- 状态提醒 -->
                        <div class="jc-sp-warning" id="jc-sp-warning">
                            <div class="jc-sp-wtitle">
                                <b>设置状态提醒</b>
                                <span class="hint-info">如需重点关注此商标“状态”进展，可设置状态提醒。</span>
                            </div>
                            <div class="jc-sp-wdetail">
                                <div class="jc-sp-wdparag">
                                <ul class="list-inline"></ul>
                                </div>
                                <div class="btn-group">
                                   <!-- <button type="button" class="btn mb0">重新设置</button>  -->
                                    <button type="button" class="btn mb0"><a href="{{ route('search.logo.monitor.remind') }}">查看状态</a></button>
                                </div>
                            </div>
                            <div class="jc-sp-wlists">
                                <div class="all-title">
                                    <b>全部商标状态</b>
                                    <span class="more-btn">更多<i class="icon icon-chevron-down"></i></span>
                                </div>
                                <div class="all-list-items">
                                    <ul class="list-inline ma0">
                                        <li class="all"><span></span>全部</li>
                                        <li><span></span>商标已注册</li>
                                        <li><span></span>商标待审中</li>
                                        <li><span></span>续展期</li>
                                        <li><span></span>宽展期</li>
                                        <li><span></span>商标已无效</li>
                                        <li><span></span>收到异议申请待审</li>
                                        <li><span></span>期满未续展</li>
                                        <li><span></span>驳回或部分驳回</li>
                                        <li><span></span>部分驳回</li>
                                        <li><span></span>初步审定</li>
                                        <li><span></span>国际异议待审中</li>
                                        <li><span></span>异议完成</li>
                                        <li><span></span>异议复审待审中</li>
                                        <li><span></span>收到驳回复审申请</li>
                                        <li><span></span>撤销注册不当待审</li>
                                        <li><span></span>国际异议待审中</li>
                                        <li><span></span>商标使用许可合同提前终止中</li>
                                        <li><span></span>驳回或部分驳回</li>
                                        <li><span></span>部分驳回</li>
                                        <li><span></span>初步审定</li>
                                        <li><span></span>国际异议待审中</li>
                                        <li><span></span>异议完成</li>
                                        <li><span></span>异议复审待审中</li>
                                        <li><span></span>收到驳回复审申请</li>
                                        <li><span></span>撤销注册不当待审</li>
                                        <li><span></span>国际异议待审中</li>
                                        <li><span></span>商标使用许可合同提前终止中</li>
                                        <li><span></span>驳回或部分驳回</li>
                                        <li><span></span>部分驳回</li>
                                        <li><span></span>初步审定</li>
                                        <li><span></span>国际异议待审中</li>
                                        <li><span></span>异议完成</li>
                                        <li><span></span>异议复审待审中</li>
                                        <li><span></span>收到驳回复审申请</li>
                                        <li><span></span>撤销注册不当待审</li>
                                        <li><span></span>国际异议待审中</li>
                                        <li><span></span>商标使用许可合同提前终止中</li>
                                    </ul>
                                </div>
                                <button type="button" class="btn confirm-btn" data-toggle="modal" data-target="#jc-stateWarning-Modal">确定</button>
                            </div>
                        </div>
                        <!-- 该商标初审近似情况统计 -->
                        <div class="jc-sp-wfirstTrial">
                            <div class="jc-sp-wtitle">
                                <b>该商标初审近似情况统计</b>
                            </div>
                            <div class="jc-sp-wfT-lists">
                                <ul class="list-inline ma0">
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                    <li>
                                        <span>1437期：</span><span>同同(0)</span><span>同近(0)</span><span>异同(0)</span><span>异近(0)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
@stop