<!--左侧栏开始-->
<h1 class="tit mv_15">
    <img src="{{ asset('modules/member/images/ucenter_29.jpg') }}"><span class="ml15">我是买家</span>
</h1>
<div class="buy_sale">
    <ul>
        <h2 class="ico-shopcart">求购管理<i class="toggle pull-right"></i></h2>
        <li class="active"><a href="{{ route('member.publish.buyer.add', 'logo') }}">我要发布求购</a></li>
        <li><a href="{{ route('member.publish.buyer.list', ['type'=>'logo', 'status'=>1]) }}">我已发布的求购</a></li>
        <li><a href="{{ route('member.publish.buyer.list', ['type'=>'logo', 'status'=>2]) }}">未发布的求购</a></li>
    </ul>
    <ul>
        <h2 class="ico-bargaining">议价管理<i class="toggle pull-right"></i></h2>
        <li><a href="{{ route('member.publish.buyer.bargain', 'logo') }}">我的议价</a></li>
    </ul>
    <ul>
        <h2 class="ico-entrust">委托管理<i class="toggle pull-right"></i></h2>
        <li><a href="{{ route('member.publish.buyer.entrust', 'logo') }}">我的委托</a></li>
    </ul>
    <ul>
        <h2 class="ico-order">订单管理<i class="toggle pull-right"></i></h2>
        <li><a href="{{ route('member.publish.buyer.order', 'logo') }}">我的订单</a></li>
    </ul>
</div>
