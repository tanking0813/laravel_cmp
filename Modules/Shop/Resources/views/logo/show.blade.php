@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.logo_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.logo_menu')
@stop

@section('banner')
	<!--banner开始-->
	<div class="row banner">
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/banner9.png') }}</div>
	</div>
	<!--banner结束-->
@stop

@section('content')
	<div class="container m-main">
		<div class="row mt20">
			<div class="col-xs-12 details">
				<!--返回首页导航开始-->
				<div class="row">
					<div class="col-xs-12">
						<p class="station"><a href="{{ route('shop')}}">柚皮网首页</a>&nbsp;＞&nbsp;<a href="{{ route('shop.logo.category',$shops['data']['category_id'])}}">{{ $shops['data']['category']['name'] }}</a>&nbsp;＞&nbsp;商品详情</p>
					</div>
				</div>
				<!--返回首页导航结束-->
				<!--商品详情开始-->
				<div class="row mt10">
					<!--左部-展示开始-->
					<div class="col-xs-9 goods">
						<!--商品信息展示开始-->
						<div>
	    					<div class="tb-tooth fl">
								<div class="min-pic">{{ HTML::image($shops['data']['images']['path'],'',['id'=>'j_show_img']) }}</div>
							    <div class="tb-pic">
							        <ul class="smal-pic">
				                    	<li class="j_toggle">
				                    		<a href="javascript:;">
				                    			{{ HTML::image($shops['data']['images']['path'],'',['width'=>'60','height'=>'60','data-middle'=>$shops['data']['images']['path'],'id'=>'t_0']) }}
				                    		</a>
				                    	</li>
				                    	<li class="j_toggle">
				                    		<a href="javascript:;">
				                    			{{ HTML::image('modules/shop/images/test/small2.png','',['width'=>'60','height'=>'60','data-middle'=>'/modules/shop/images/test/small2.png','id'=>'t_1']) }}
				                    		</a>
				                    	</li>
				                    	<li class="j_toggle">
				                    		<a href="javascript:;">
				                    			{{ HTML::image('modules/shop/images/test/small2.png','',['width'=>'60','height'=>'60','data-middle'=>'/modules/shop/images/test/small2.png','id'=>'t_1']) }}
				                    		</a>
				                    	</li>
				                    	<li class="j_toggle">
				                    		<a href="javascript:;">
				                    			{{ HTML::image('modules/shop/images/test/small2.png','',['width'=>'60','height'=>'60','data-middle'=>'/modules/shop/images/test/small2.png','id'=>'t_1']) }}
				                    		</a>
				                    	</li>
				                    	<div class="clear"></div>
							        </ul>
							    </div>
							    <div class="tb-social mt20">
							    	<ul class="list-inline">
										<li><a href="javascript:;">{{ HTML::image('modules/shop/images/icon/q1.png') }}</a></li>
										<li>分享到：</li>
										<li><a href="javascript:;">{{ HTML::image('modules/shop/images/icon/q2.png') }}</a></li>
										<li><a href="javascript:;">{{ HTML::image('modules/shop/images/icon/q3.png') }}</a></li>
										<li><a href="javascript:;">{{ HTML::image('modules/shop/images/icon/q4.png') }}</a></li>
										<li><a href="javascript:;">{{ HTML::image('modules/shop/images/icon/q5.png') }}</a></li>
										<li><a href="javascript:;">{{ HTML::image('modules/shop/images/icon/q6.png') }}</a></li>
										<li><a href="javascript:;">{{ HTML::image('modules/shop/images/icon/q7.png') }}</a></li>
									</ul>
							    </div>
							</div>
							<div class="tb-property fr">
								<!-- 议价弹出框开始 -->
								<div id="mode1" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="flash">
									<div class="modal-dialog">
								    	<div class="modal-content box2">
									        <div class="modal-header modal-top">
									          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">{{ HTML::image('modules/shop/images/icon/close.png') }}</a></span><span class="sr-only">Close</span></button>
									          <h4 class="modal-title" id="myModalLabel">我要议价</h4>
									        </div>
									        <div class="modal-body modal-yijia">
									        	<form action="get">
													<label>{{ HTML::image('modules/shop/images/icon/bid.png') }}&nbsp;出价：</label><input class="com-inp" type="text" /><br>
													<label>{{ HTML::image('modules/shop/images/icon/mes.png') }}&nbsp;留言：</label><textarea cols="36"></textarea>
													<button type="button" class="btn but">确定</button>
									        	</form>
									        </div>
								    	</div>
								    </div>
								</div>
								<!-- 议价弹出框结束 -->
								<!-- 加入购物车弹出框开始 -->
								<div id="mode2" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="flash">
									<div class="modal-dialog">
								    	<div class="modal-content box2">
									        <div class="modal-header modal-top1">
									          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">{{ HTML::image('modules/shop/images/icon/close1.png') }}</a></span><span class="sr-only">Close</span></button>
									        </div>
									        <div class="modal-body modal-yijia">
									        	<h4>您已成功将该宝贝加入购物车</h4>
									        	<div class="ware mt10">
									        		<div class="samll-tu fl">{{ HTML::image('modules/shop/images/test/small1.png') }}</div>
										        	<div class="tbp fr mt10">
														<p class="tbp-name">【商标名称】{{ $shops['data']['title'] }}</p>
														<p>商标注册号:{{ $shops['data']['register_code'] }} </p><p>商标分类: 第{{ $shops['data']['category']['slug'] }}类-{{ $shops['data']['category']['name'] }}</p> 
														<p>组合类型: {{ $shops['data']['combine'] }} </p>
														<p class="pr">小计：￥{{ $shops['data']['price'] }} </p>
														<p>购物车共有<span class="pr"> 5 </span>件商品 </p>
														<p class="account fr"><a href="">去购物车结算</a></p>
													</div>
													<div class="clear"></div>
												</div>
									        </div>
								    	</div>
								    </div>
								</div>
								<!-- 加入购物车弹出框结束 -->
								<div class="tbp-name">【商标名称】{{ $shops['data']['title'] }}</div>
								<div class="tbp-price">￥{{ $shops['data']['price'] }}<del>￥84999</del><span class="clock fr">02天17小时12分54秒</span></div>
								<div class="tbp-summary mt10">
									<span>商标注册号:{{ $shops['data']['register_code'] }} </span>              
									<span>商标分类: 第{{ $shops['data']['category']['slug'] }}类-{{ $shops['data']['category']['name'] }}</span><br> 
									<span>所属地区: 中国 </span>              
									<span>核定使用商品: {{ $shops['data']['server_list'] }} </span><br>
									<span>组合类型: {{ $shops['data']['combine'] }} </span>
								</div>
								<div class="tbp-summary mt10">
									<span>注册公告日期: {{ $shops['data']['announced_date'] }}</span><br>
									<span>过期时间： {{ $shops['data']['validity_date'] }}</span><br>
								</div>
								@include('shop::partials._like_show')
							</div>
							<div class="clear"></div>
						</div>
						<!--商品信息展示结束-->
						<!--详情切换开始-->
						<div class="slideTxtBox1 mt40">
							<div class="hd">
								<ul><li>商标详情</li><li>交易流程</li><li>安全保障</li><li>评论(共33人)</li></ul>
							</div>
							<div class="bd">
								<div class="pro-details">
									<h3>设计理念</h3>
									<div>{{ $shops['data']['content'] }}</div>
									<h3>交易流程</h3>
									<p>1.买家选定所需商标，立刻在线下单；</p>
									<p>2.买家网上确认交易合同，支付交易款项；</p>
									<p>3.交易经纪人联系买家签订《知识产权交易合同》、《转让申请/注册商标申请书》、《代理委托书》、《转让协议》，各一式四份；</p>
									<p>4.交易经纪人联系卖家签订《知识产权交易合同》、《转让申请/注册商标申请书》、《转让协议》，各一式四份；</p>
									<p>5.与卖家签订《知识产权交易合同》后，卖家办理公证，并将相关文件资料一并寄到我网；</p>
									<p>6.交易经纪人将商标《公证书》、《商标使用授权书》、《商标证》原件交付买方，并将双方签字的相关材料递交国家商标局办理国家转让手续；</p>
									<p>1)商标《公证书》原件作用：通过公证方式持标人声明将商标转让给买方，确保商标转让真实有效具有法律效应；</p>
									<p>2)《商标使用授权书》是商标持有人出具的独家商标使用授权书，作用是在商标转让期间，买方能够立即使用商标，商标转让成功后授权书作废。</p>
									<p class="table">相关资料准备</p>
									<table>
										<thead>
											<tr>
												<td width="90">交易方</td>
												<td width="170">企业</td>
												<td width="">个人</td>
												<td width="240">备注</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>买家</td>
												<td class="tdl">营业执照副本复印件（最新年检需盖公章）</td>
												<td class="tdl">提供身份证及个体户执照最新年检复印件（需盖公章/签字）</td>
												<td class="tdl"></td>
											</tr>
											<tr>
												<td rowspan="2">卖家</td>
												<td class="tdl">营业执照副本复印件（最新年检需盖公章）</td>
												<td class="tdl">身份证复印件（需申请人签字）</td>
												<td class="tdl">商标注册证复印件/受理通知书复印件/商标网打印的商标信息复印件（需加盖公章，商标信息文件可三选一），如此商标办理过商标变更、续展、转让的还需提供相应的核准变更、续展、转让证明。</td>
											</tr>
											<tr>
												<td class="tdl">商标证原件</td>
												<td class="tdl">商标证原件</td>
												<td class="tdl"></td>
											</tr>
										</tbody>
									</table>
									<h3>安全保障</h3>
									<p>1.通过本平台交易的交易品，均由我网验证交易品有效性；</p>
									<p>2.通过本平台交易，均由我网核实并确保买卖双方身份信息真实有效；</p>
									<p>3.通过本平台交易，均由我网专属律师事务所全程监督，确保所有交易合同及相关文件合法有效。</p>
									<p>4.通过本平台交易，均由我网代收买家交易款项，代付卖家定金，卖家办理完商标公证，并经我网核实公证书的真实有效后，支付卖家尾款，全程资金代管，保障买卖双方资金安全。</p>
									<p>5.通过本平台交易，均由我网代办国家手续，办理过程公开透明，进度随时查询，确保交易真实可靠。</p>
								</div>
								<div class="pro-details">
									<h3>交易流程</h3>
									<p>1.买家选定所需商标，立刻在线下单；</p>
									<p>2.买家网上确认交易合同，支付交易款项；</p>
									<p>3.交易经纪人联系买家签订《知识产权交易合同》、《转让申请/注册商标申请书》、《代理委托书》、《转让协议》，各一式四份；</p>
									<p>4.交易经纪人联系卖家签订《知识产权交易合同》、《转让申请/注册商标申请书》、《转让协议》，各一式四份；</p>
									<p>5.与卖家签订《知识产权交易合同》后，卖家办理公证，并将相关文件资料一并寄到我网；</p>
									<p>6.交易经纪人将商标《公证书》、《商标使用授权书》、《商标证》原件交付买方，并将双方签字的相关材料递交国家商标局办理国家转让手续；</p>
									<p>1)商标《公证书》原件作用：通过公证方式持标人声明将商标转让给买方，确保商标转让真实有效具有法律效应；</p>
									<p>2)《商标使用授权书》是商标持有人出具的独家商标使用授权书，作用是在商标转让期间，买方能够立即使用商标，商标转让成功后授权书作废。</p>
									<p class="table">相关资料准备</p>
									<table>
										<thead>
											<tr>
												<td width="90">交易方</td>
												<td width="170">企业</td>
												<td width="">个人</td>
												<td width="240">备注</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>买家</td>
												<td class="tdl">营业执照副本复印件（最新年检需盖公章）</td>
												<td class="tdl">提供身份证及个体户执照最新年检复印件（需盖公章/签字）</td>
												<td class="tdl"></td>
											</tr>
											<tr>
												<td rowspan="2">卖家</td>
												<td class="tdl">营业执照副本复印件（最新年检需盖公章）</td>
												<td class="tdl">身份证复印件（需申请人签字）</td>
												<td class="tdl">商标注册证复印件/受理通知书复印件/商标网打印的商标信息复印件（需加盖公章，商标信息文件可三选一），如此商标办理过商标变更、续展、转让的还需提供相应的核准变更、续展、转让证明。</td>
											</tr>
											<tr>
												<td class="tdl">商标证原件</td>
												<td class="tdl">商标证原件</td>
												<td class="tdl"></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="pro-details">
									<h3>安全保障</h3>
									<p>1.通过本平台交易的交易品，均由我网验证交易品有效性；</p>
									<p>2.通过本平台交易，均由我网核实并确保买卖双方身份信息真实有效；</p>
									<p>3.通过本平台交易，均由我网专属律师事务所全程监督，确保所有交易合同及相关文件合法有效。</p>
									<p>4.通过本平台交易，均由我网代收买家交易款项，代付卖家定金，卖家办理完商标公证，并经我网核实公证书的真实有效后，支付卖家尾款，全程资金代管，保障买卖双方资金安全。</p>
									<p>5.通过本平台交易，均由我网代办国家手续，办理过程公开透明，进度随时查询，确保交易真实可靠。</p>
									<table>
										<thead>
											<tr>
												<td width="90">交易方</td>
												<td width="170">企业</td>
												<td width="">个人</td>
												<td width="240">备注</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>买家</td>
												<td class="tdl">营业执照副本复印件（最新年检需盖公章）</td>
												<td class="tdl">提供身份证及个体户执照最新年检复印件（需盖公章/签字）</td>
												<td class="tdl"></td>
											</tr>
											<tr>
												<td rowspan="2">卖家</td>
												<td class="tdl">营业执照副本复印件（最新年检需盖公章）</td>
												<td class="tdl">身份证复印件（需申请人签字）</td>
												<td class="tdl">商标注册证复印件/受理通知书复印件/商标网打印的商标信息复印件（需加盖公章，商标信息文件可三选一），如此商标办理过商标变更、续展、转让的还需提供相应的核准变更、续展、转让证明。</td>
											</tr>
											<tr>
												<td class="tdl">商标证原件</td>
												<td class="tdl">商标证原件</td>
												<td class="tdl"></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="comm">
									<div class="score">宝贝与描述相符累计分<span class="cr">4.8</span>分 共180次打分</div>
									<div class="consumer">
										<div class="con-tu fl">{{ HTML::image('modules/shop/images/test/t1.png') }}</div>
										<div class="con-txt fr">
											<p class="con-txt-n"><span>QengHui</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/store.png') }}</span><span class="fr">2015年01月06日</span></p>
											<p>非常满意，以后会常来，这是我的第一体会到商标维权的重要性了，商标还可以投资升值呢！</p>
										</div>
										<div class="clear"></div>
									</div>
									<div class="consumer">
										<div class="con-tu fl">{{ HTML::image('modules/shop/images/test/t1.png') }}</div>
										<div class="con-txt fr">
											<p class="con-txt-n"><span>QengHui</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/store.png') }}</span><span class="fr">2015年01月06日</span></p>
											<p>非常满意，以后会常来，这是我的第一体会到商标维权的重要性了，商标还可以投资升值呢！</p>
										</div>
										<div class="clear"></div>
									</div>
									<div class="consumer">
										<div class="con-tu fl">{{ HTML::image('modules/shop/images/test/t3.png') }}</div>
										<div class="con-txt fr">
											<p class="con-txt-n"><span>QengHui</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/store.png') }}</span><span class="fr">2015年01月06日</span></p>
											<p>非常满意，以后会常来，这是我的第一体会到商标维权的重要性了，商标还可以投资升值呢！</p>
										</div>
										<div class="clear"></div>
									</div>
									<div class="consumer">
										<div class="con-tu fl">{{ HTML::image('modules/shop/images/test/t1.png') }}</div>
										<div class="con-txt fr">
											<p class="con-txt-n"><span>QengHui</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/store.png') }}</span><span class="fr">2015年01月06日</span></p>
											<p>非常满意，以后会常来，这是我的第一体会到商标维权的重要性了，商标还可以投资升值呢！</p>
										</div>
										<div class="clear"></div>
									</div>
									<div class="consumer">
										<div class="con-tu fl">{{ HTML::image('modules/shop/images/test/t2.png') }}</div>
										<div class="con-txt fr">
											<p class="con-txt-n"><span>QengHui</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/store.png') }}</span><span class="fr">2015年01月06日</span></p>
											<p>非常满意，以后会常来，这是我的第一体会到商标维权的重要性了，商标还可以投资升值呢！</p>
										</div>
										<div class="clear"></div>
									</div>
									<div class="consumer">
										<div class="con-tu fl">{{ HTML::image('modules/shop/images/test/t3.png') }}</div>
										<div class="con-txt fr">
											<p class="con-txt-n"><span>QengHui</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/store.png') }}</span><span class="fr">2015年01月06日</span></p>
											<p>非常满意，以后会常来，这是我的第一体会到商标维权的重要性了，商标还可以投资升值呢！</p>
										</div>
										<div class="clear"></div>
									</div>
									<div class="mark"><span>评分</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/stored.png') }}</span><span>{{ HTML::image('modules/shop/images/icon/store.png') }}</span>4.5分</div>
									<textarea cols="130" rows="6"></textarea>
									<div class="share">
										<span><input name="share" type="checkbox" value="" />&nbsp;分享到微博</span>
										<span class="quick fr"><a href="">提交发布评论</a></span>
									</div>
								</div>
							</div>
						</div>
						<!--详情结束-->	
					</div>
					<!--左部-展示结束-->
					<!--右部-卖家信息开始-->
					<div class="col-xs-3 store">
						<div class="individual">
							<p class="fl mt10">{{ HTML::image('modules/shop/images/icon/head.png') }}</p>
							<p class="ind fl">
								<span>penghui444</span><br>
								<span class="attented">已关注<b></b></span><span class="fans">98537粉丝</span>
							</p>
							<p class="promote fr"><a href="javascript:;">升级店铺VIP</a></p>
							<div class="clear"></div>
						</div>
						<div class="tbp-summary">
							<p class="seller">卖家信息</p>              
							<p>联系人：孙**</p> 
							<p>经纪人电话：13750957561</p>              
							<p>经纪人邮箱：6086130_tmp@wtoip.com</p>
							<p>地区： 浙江省 金华市 义乌市</p>
							<p>会员等级：普通会员</p>
							<p class="free"><a href="javascript:;">免费开通店铺</a></p>
						</div>
						<div class="groom mt30">
							<h4>热门推荐</h4>
							@include('shop::partials.recomment_list')
						</div>
					</div>
					<!--右部-卖家信息结束-->
				</div>
				<!--商品详情结束-->
			</div>
		</div>
		<!--广告图1开始-->
		<div class="row gao2">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao2.png') }}</div>
		</div>
		<!--广告图1结束-->
	</div>
@stop