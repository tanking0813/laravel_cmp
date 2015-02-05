@extends('member::layouts.2columns-left')

@section('leftbar')
    <div class="profile row">
        <div class="avatar col-xs-6 mt20">
            <a href="account.html">
                <img src="{{ asset('modules/member/images/avatar.jpg') }}"/>
            </a>
            <!--头像遮罩-->
            <div class="shade"><img src="{{ asset('modules/member/images/avatar_hover.png') }}"/></div>
        </div>
        <div class="info col-xs-6">
            <h2>王琦</h2>
            <a href="account.html">账户信息 <i class="acount"></i></a>
            <a href="account.html">完善资料 <i class="info"></i></a>
            <div class="acountShow">
                <h3>我的等级</h3>
                <p><span>求购等级：<b class="orange">V0</b></span> <span>出售等级：<b class="orange">V0</b></span></p>
                <p>信用等级：<b class="orange">V0</b></p>
                <h3>资金账户</h3>
                <p><a href="" class="orange">zzgbsh@126.com</a></p>
            </div>
        </div>
        <div class="progress-bar">
            <span class="left">
                <span class="bar"></span>
            </span>
        </div>
        <div class="progress-num">资料完整度：<span>20%</span></div>
    </div>
    <div class="common-use common">
        <h3>常用功能</h3>
        <ul>
            <li><a href="">已发布的求购<i>10</i></a></li>
            <li><a href="">已发布的卖品</a></li>
            <li><a href="">我要发布</a></li>
        </ul>
    </div>
    <div class="myApplication common">
        <h3>我的应用</h3>
        <ul>
            <li class="buyer"><a href="">我是买家</a></li>
            <li class="saler"><a href="">我是卖家</a></li>
            <li class="hallManage"><a href="">展厅管理</a></li>
            <li class="tmIdentify"><a href="">商标认证</a></li>
            <li class="acadimy"><a href="">知产学院</a></li>
            <li class="activity"><a href="">专场活动</a></li>
            <li class="myAcount"><a href="">我的账户</a></li>
            <a class="more" href="">更多我的应用 >></a>
        </ul>
    </div>
@stop

@section('content')
<div class="identify whiteBg ml0">
    <i class="bao"></i><span class="orange">公司未认证，</span><span>柚皮网普通会员 <a href="" class="ocean">【购买柚皮通服务】</a></span>
</div>
<div class="row">
    <div class="shopData col-xs-9">
    <ul class="row">
        <div class="topMiddleDot left"></div>
        <div class="topMiddleDot right"></div>
        <li class="col-xs-4 pa15">
            <img src="{{ asset('modules/member/images/ucenter_09.jpg') }}"/>
            <div class="mLine">
                <div class="upDot"><a href="">等待卖家议价（0）</a></div>
                <div class="downDot"><a href="">等待买家议价（0）</a></div>
            </div>
            <div class="rightDashDot"></div>
        </li>
        <li class="col-xs-4 pa15">
            <img src="{{ asset('modules/member/images/ucenter_11.jpg') }}"/>
            <div class="mLine">
                <div class="upDot"><a href="">等待卖家付款（0）</a></div>
                <div class="downDot"><a href="">等待买家付款（0）</a></div>
            </div>
            <div class="rightDashDot"></div>
        </li>
        <li class="col-xs-4 pa15">
            <img src="{{ asset('modules/member/images/ucenter_06.jpg') }}"/>
            <div class="mLine">
                <div class="upDot"><a href="">等待卖家过户（0）</a></div>
                <div class="downDot"><a href="">等待买家过户（0）</a></div>
            </div>
        </li>
    </ul>

    <!--热门动态等-->
    <div class="whiteBg mt15 pa15">
        <ul class="nav nav-tabs" role="tablist" id="myTab">
          <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">热门话题</a></li>
          <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">会员活动</a></li>
          <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">线下会展</a></li>
        </ul>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">
            <ul class="list mt15">
                <li>
                    <div class="row">
                        <a href="" class="col-xs-3"><img src="{{ asset('modules/member/images/ucenter_26.jpg') }}" class="ml15" width="130" height="130"/></a>
                        <div class="detail col-xs-9">
                            <h2><a href="">"名创优品" 许多产品模仿品牌 或构成侵权</a></h2>
                            <p>近半年多来，广州街头突然出现主打“日本品牌，全球连锁”的快消连锁品牌“名创优品”的多家门
店。该品牌网站的数据显示，该... <a href="" class="orange">详情>></a></p>
                            <p class="source">来自：<span class="orange">资讯</span> <span class="pull-right"><a href="">转发（3）</a> <a href="javascript:;" class="coment">评论：（6）</a></span></p>
                        </div>
                    </div>
                    <!--评论列表-->
                    <ul class="commentZone mv15 ph15">
                        <li class="row">
                            <a href="" class="col-xs-1">
                                <img class="avatar" src="{{ asset('modules/member/images/avatar.jpg') }}" width="45" height="45"/>
                            </a>
                            <div class="col-xs-11">
                                <p><span class="orange">小二</span>：这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容</p>
                                <p><span class="timeTip">50秒前</span> <a href="" class="pull-right ocean">回复</a></p>
                            </div>
                        </li>
                        <li class="row">
                            <a href="" class="col-xs-1">
                                <img class="avatar" src="{{ asset('modules/member/images/avatar.jpg') }}" width="45" height="45"/>
                            </a>
                            <div class="col-xs-11">
                                <p><span class="orange">小二</span>：这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容</p>
                                <p><span class="timeTip">50秒前</span> <a href="" class="pull-right ocean">回复</a></p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="row">
                        <a href="" class="col-xs-3"><img src="{{ asset('modules/member/images/ucenter_26.jpg') }}" class="ml15" width="130" height="130"/></a>
                        <div class="detail col-xs-9">
                            <h2><a href="">"名创优品" 许多产品模仿品牌 或构成侵权</a></h2>
                            <p>近半年多来，广州街头突然出现主打“日本品牌，全球连锁”的快消连锁品牌“名创优品”的多家门
店。该品牌网站的数据显示，该... <a href="" class="orange">详情>></a></p>
                            <p class="source">来自：<span class="orange">资讯</span> <span class="pull-right"><a href="">转发（3）</a> <a href="javascript:;" class="coment">评论：（6）</a></span></p>
                        </div>
                    </div>
                    <!--评论列表-->
                    <ul class="commentZone mv15 ph15">
                        <li class="row">
                            <a href="" class="col-xs-1">
                                <img class="avatar" src="{{ asset('modules/member/images/avatar.jpg') }}" width="45" height="45"/>
                            </a>
                            <div class="col-xs-11">
                                <p><span class="orange">小二</span>：这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容</p>
                                <p><span class="timeTip">50秒前</span> <a href="" class="pull-right ocean">回复</a></p>
                            </div>
                        </li>
                        <li class="row">
                            <a href="" class="col-xs-1">
                                <img class="avatar" src="{{ asset('modules/member/images/avatar.jpg') }}" width="45" height="45"/>
                            </a>
                            <div class="col-xs-11">
                                <p><span class="orange">小二</span>：这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容</p>
                                <p><span class="timeTip">50秒前</span> <a href="" class="pull-right ocean">回复</a></p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="row">
                        <a href="" class="col-xs-3"><img src="{{ asset('modules/member/images/ucenter_26.jpg') }}" class="ml15" width="130" height="130"/></a>
                        <div class="detail col-xs-9">
                            <h2><a href="">"名创优品" 许多产品模仿品牌 或构成侵权</a></h2>
                            <p>近半年多来，广州街头突然出现主打“日本品牌，全球连锁”的快消连锁品牌“名创优品”的多家门
店。该品牌网站的数据显示，该... <a href="" class="orange">详情>></a></p>
                            <p class="source">来自：<span class="orange">资讯</span> <span class="pull-right"><a href="">转发（3）</a> <a href="javascript:;" class="coment">评论：（6）</a></span></p>
                        </div>
                    </div>

                    <!--评论列表-->
                    <ul class="commentZone mv15 ph15">
                        <li class="row">
                            <a href="" class="col-xs-1">
                                <img class="avatar" src="{{ asset('modules/member/images/avatar.jpg') }}" width="45" height="45"/>
                            </a>
                            <div class="col-xs-11">
                                <p><span class="orange">小二</span>：这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容</p>
                                <p><span class="timeTip">50秒前</span> <a href="" class="pull-right ocean">回复</a></p>
                            </div>
                        </li>
                        <li class="row">
                            <a href="" class="col-xs-1">
                                <img class="avatar" src="{{ asset('modules/member/images/avatar.jpg') }}" width="45" height="45"/>
                            </a>
                            <div class="col-xs-11">
                                <p><span class="orange">小二</span>：这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容这是说话的内容</p>
                                <p><span class="timeTip">50秒前</span> <a href="" class="pull-right ocean">回复</a></p>
                            </div>
                        </li>
                    </ul>
                </li>
                    <!--评论框-->
                    <!--<form action="" class="comment mt15 row">
                        <textarea name="" rows="6" cols="">#评论你的话题#</textarea>
                        <a href="" class="btn orangeBg pull-right mr15">提交</a>
                    </form>-->
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane" id="profile">
            <ul class="list mt15">
                <li>
                    <div class="row">
                        <a href="" class="col-xs-3"><img src="{{ asset('modules/member/images/ucenter_26.jpg') }}" class="ml15" width="130" height="130"/></a>
                        <div class="detail col-xs-9">
                            <h2><a href="">"名创优品" 许多产品模仿品牌 或构成侵权</a></h2>
                            <p>近半年多来，广州街头突然出现主打“日本品牌，全球连锁”的快消连锁品牌“名创优品”的多家门
店。该品牌网站的数据显示，该... <a href="" class="orange">详情>></a></p>
                            <p class="source">来自：<span class="orange">资讯</span> <span class="pull-right"><a href="">转发（3）</a></span></p>
                        </div>
                    </div>
                </li>


            </ul>
          </div>
          <div role="tabpanel" class="tab-pane" id="messages">
            <ul class="list mt15">
                <li>
                    <div class="row">
                        <a href="" class="col-xs-3"><img src="{{ asset('modules/member/images/ucenter_26.jpg') }}" class="ml15" width="130" height="130"/></a>
                        <div class="detail col-xs-9">
                            <h2><a href="">"名创优品" 许多产品模仿品牌 或构成侵权</a></h2>
                            <p>近半年多来，广州街头突然出现主打“日本品牌，全球连锁”的快消连锁品牌“名创优品”的多家门
店。该品牌网站的数据显示，该... <a href="" class="orange">详情>></a></p>
                            <p class="source">来自：<span class="orange">资讯</span> <span class="pull-right"><a href="">转发（3）</a></span></p>
                        </div>
                    </div>
                </li>

            </ul>
          </div>
        </div>
    </div>
</div>
<!--右侧sideBar开始-->
<div class="col-xs-3 sideBarR">
<!--开启知企通-->
<div class="whiteBg row">
    <div class="upgrade col-xs-12">
        <h3><i></i>开启知企通<a href="" class="pull-right">了解详情 >></a></h3>
        <div class="content">
            <a href="" class="active">建站特权 +</a>
            <a href="">理财服务 +</a>
            <a href="">线下会展 +</a>
            <a href="">权威认证 +</a>
            <a href="">VIP培训 +</a>
            <a href="">搜索排名 +</a>
            <a href="">专属经济人 +</a>
        </div>
    </div>
</div>
<!--买家卖家-->
<div id="buySaler" class="whiteBg row mv15">
    <div class="hd">
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="buyer.html">买家入口</a>
        </li>
        <li role="presentation"><a href="saler.html">卖家入口</a>
        </li>
    </ul>
    </div>

    <div class="tab-content mb15 mt10 bd">
            <ul class="col-xs-12 mb15 pb5">
                <li><a href=""  class="orange"><span>-</span>【买家必读】完成认证增加信任</a></li>
                <li><a href=""><span>-</span>【买家必读】完成认证增加信任</a></li>
                <li><a href=""><span>-</span>【买家必读】完成认证增加信任</a></li>
                <li><a href=""><span>-</span>【买家必读】完成认证增加信任</a></li>

            </ul>
            <ul class="col-xs-12 mb15 pb15">
                <li><a href=""  class="orange"><span>-</span>【卖家必读】完成认证增加信任</a></li>
                <li><a href=""><span>-</span>【卖家必读】完成认证增加信任</a></li>
                <li><a href=""><span>-</span>【卖家必读】完成认证增加信任</a></li>
                <li><a href=""><span>-</span>【卖家必读】完成认证增加信任</a></li>
            </ul>
    </div>
</div>
<!--站内公告-->
<div class="whiteBg row">
    <div class="notice col-xs-12">
        <h3>站内公告</h3>
        <div class="content row">
            <ul class="col-xs-12 mb15">
                <li><a href=""  class="orange"><span>-</span> 汇聚站长力量，重塑电商新格局！</a></li>
                <li><a href=""><span>-</span> 汇聚站长力量，重塑电商新格局！</a></li>
                <li><a href=""><span>-</span> 汇聚站长力量，重塑电商新格局！</a></li>
                <li><a href=""><span>-</span> 汇聚站长力量，重塑电商新格局！</a></li>
            </ul>
        </div>
    </div>
</div>
<!--法律在线顾问-->
<div class="whiteBg row mt15">
    <div class="guider col-xs-12">
        <h3>法律在线顾问</h3>
        <div class="content row">
            <ul class="col-xs-12 mb15">
                <li><i class="tel"></i><a href=""> 电话咨询</a></li>
                <li><i class="QQ"></i><a href=""> QQ在线地址</a></li>
                <li><i class="email"></i><a href=""> 邮箱联系</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<!--右侧sideBar结束-->
</div>
@stop