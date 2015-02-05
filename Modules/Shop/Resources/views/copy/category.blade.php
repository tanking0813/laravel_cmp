@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.copy_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.copy_menu')	
@stop

@section('banner')
	<div class="row banner">
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/cbanner1.png')}}</div>
	</div>
@stop

@section('content')
	<!--内容块开始-->
	<div class="container m-main">
		<div class="row ex-main mt20">
			<!--左部开始-->
			<div class="col-xs-2 ex-m-left">
				<!--左部-点赞排行开始-->
				<div class="ex-copy">
					<h4 class="dianzan">点赞排行</h4>
					<ul class="copyright-list">
						<li><a href="">作品名称</a><span class="fr">点击率</span></li>
						@datalist('Shop_copy','shop::widget.praise_list',[['status','=',1]],0,10,['id','title','praise_num'],'category',['select'=>['id','name','slug']])
					</ul>
				</div>
				<!--左部-点赞排行结束-->
				<!--左部-成功案例展示无缝滚动开始-->
				<div class="ex-copy mt10">
					<h4>成功案例展示</h4>
					<div class="bd">
						<ul class="list-unstyled ex-cop-list">
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic4.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic5.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic6.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic4.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic5.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic6.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--左部-成功案例展示无缝滚动结束-->
			</div>
			<!--左部结束-->
			<!--右部开始-->
			<div class="col-xs-10 ex-m-right">
				<h2>进店必选商标</h2>
				<!--右部-进店必选开始-->
				<div class=" ex-mr1">
					<ul class="list-inline flo1">
						@foreach($shops['recomment_lists'] as $khl=>$vhl)
						<li @if($khl==2)style="background:none;"@endif>
							<a href="{{ route('shop.copy.show',$vhl['id']) }}">
								<p class="ding-img">{{ HTML::image($vhl['images']['path'],'',['class'=>'fixed-flo1']) }}</p>
								<p>{{ HTML::image('modules/shop/images/icon/line-r.png')}}</p>
								<p class="lap1 cr">{{ $vhl['category']['name'] }}类</p>
								<p>{{ HTML::image('modules/shop/images/icon/line-r.png')}}</p>
								<div class="dk">
									<!-- <p class="lap2 cr">热销理由</p> -->
									<p class="lap3">{{ $vhl['title'] }}</p>
									<del>￥84999</del>
									<p class="lap4 cr">￥{{ $vhl['price'] }}</p>
									<p class="lap5">立即购买</p>
								</div>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
				<!--右部-进店必选结束-->
				<!--商品筛选开始-->
				<div class="ex-mr4 mt20">
					<h3 class="copy-h3">已选分类：<span>{{ $shops['category'] }}</span></h3>
					<ul class="list-inline">
						<li class="t-h">商品分类：</li>
						<li><a href="">文字</a></li>
						<li><a href="">口述</a></li>
						<li><a href="">美术</a></li>
						<li><a href="">音乐</a></li>
						<li class="on"><a href="">摄影</a></li>
						<li><a href="">电影</a></li>
						<li><a href="">软件</a></li>
						<li><a href="">动漫</a></li>
						<li><a href="">表演</a></li>
						<li><a href="">录制</a></li>
						<li><a href="">其它</a></li>
						<li class="default"><a href="">不限</a></li>
					</ul>
					<ul class="list-inline">
						<li class="t-h">交易类型：</li>
						<li><a href="">转让</a></li>
						<li><a href="">普通许可</a></li>
						<li><a href="">独占许可</a></li>
						<li><a href="">排他许可</a></li>
						<li class="default"><a href="">不限</a></li>
					</ul>
					<ul class="list-inline">
						<li class="t-h">价格：</li>
						<li><a href="">5000以下</a></li>
						<li><a href="">5000-1万</a></li>
						<li><a href="">1-2万</a></li>
						<li><a href="">2万以上</a></li>
						<li class="default"><a href="">不限</a></li>
					</ul>
				</div>
				<!--商品筛选结束-->
				<!--右部-排序导航开始-->
				<div class="ex-mr2">
					<div class="sorting">
						<div class="sorting-l fl">
							<ul class="list-inline sort">
								<li class="s1"><a href="">默认排序</a></li>
								<li><a href="">人气排序</a></li>
								<li><a href="">价格排序</a></li>
							</ul>
						</div>
						<div class="sorting-l fr">
							<ul class="list-inline sort1">
								<li><a href="">发布商标转让</a></li>
								<li><a href="">发布商标求购</a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!--右部-排序导航结束-->
				<!--右部-商标展示开始-->
				<div class=" ex-mr3">
					<ul class="list-inline flo3">
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
								</p>
							</a>
							<p class="qiang">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
							<div class="dk">
								<p class="lap1">九寨沟诺日朗瀑布</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
								<p class="go-shop">
									<a href="">
										{{ HTML::image('modules/shop/images/test/c-pic2.png') }}
									</a>
								</p>
							</a>
							<div class="dk">
								<p class="lap1">自然和谐风光作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap7">此商标已售出</p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic3.png') }}
								</p>
							</a>
							<div class="dk">
								<p class="lap1">《红红火火》摄影作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
								</p>
							</a>
							<p class="qiang">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
							<div class="dk">
								<p class="lap1">自然和谐风光作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
								</p>
							</a>
							<p class="qiang">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
							<div class="dk">
								<p class="lap1">九寨沟诺日朗瀑布</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
								<p class="go-shop">
									<a href="">
										{{ HTML::image('modules/shop/images/test/c-pic2.png') }}
									</a>
								</p>
							</a>
							<div class="dk">
								<p class="lap1">自然和谐风光作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap7">此商标已售出</p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic3.png') }}
								</p>
							</a>
							<div class="dk">
								<p class="lap1">《红红火火》摄影作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
								</p>
							</a>
							<p class="qiang">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
							<div class="dk">
								<p class="lap1">自然和谐风光作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
								</p>
							</a>
							<p class="qiang">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
							<div class="dk">
								<p class="lap1">九寨沟诺日朗瀑布</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
								<p class="go-shop">
									<a href="">
										{{ HTML::image('modules/shop/images/test/c-pic2.png') }}
									</a>
								</p>
							</a>
							<div class="dk">
								<p class="lap1">自然和谐风光作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap7">此商标已售出</p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic3.png') }}
								</p>
							</a>
							<div class="dk">
								<p class="lap1">《红红火火》摄影作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
						<li>
							<a href="">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
								<p class="go-shop">
									{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
								</p>
							</a>
							<p class="qiang">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
							<div class="dk">
								<p class="lap1">自然和谐风光作品</p>	
								<p class="lap4 cr">￥14999 <del>￥84999</del></p>
								<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
								<p class="lap6"><span class="sp4"><a href="" class="cr">加入购物车</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
							</div>
						</li>
					</ul>
				</div>
				<!--右部-商标展示结束-->
				<!--page分页开始-->
				<div class="pages mt20">
					<ul class="list-unstyled pagelist">
						<li><a href='javascript:void(0);'>首页</a></li>
						<li class="thisclass">1</li>
						<li><a href=''>2</a></li>
						<li><a href=''>3</a></li>
						<li><a href=''>4</a></li>
						<li><a href=''>5</a></li>
						<li><a href=''>下一页</a></li>
						<li><a href=''>末页</a></li>
						<li><select name='sldd' style='width:42px;height:22px;' onchange='location.href=this.options[this.selectedIndex].value;'>
						<option value='' selected>1</option>
						<option value=''>2</option>
						<option value=''>3</option>
						<option value=''>4</option>
						<option value=''>5</option>
						</select></li>
						<li><span class="pageinfo">共 <strong>23</strong>页<strong>457</strong>条</span></li>
						<div class="clear"></div>
				   	</ul>
					</div>
					<!--page分页结束-->
			</div>
			<!--右部结束-->
		</div>
		<!--广告图1开始-->
		<div class="row gao2">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao2.png') }}</div>
		</div>
		<!--广告图1结束-->
	</div>
	<!--内容块结束-->
@stop