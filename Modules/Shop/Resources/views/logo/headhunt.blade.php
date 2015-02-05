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
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/banner8.png') }}</div>
	</div>
	<!--banner结束-->
@stop

@section('content')
	<!--内容块开始-->
	<div class="container m-main">
		<div class="row ex-main mt20">
			<div class="col-xs-12 hunting">
				<!--经纪人筛选开始-->
				<div class="screen">
					<ul class="list-inline list-unstyled">
						<li class="sc1">经纪人筛选</li>
						<li>地区：<select name='sldd' onchange='location.href=this.options[this.selectedIndex].value;'>
						<option value='' selected>北京</option>
						<option value=''>上海</option>
						<option value=''>深圳</option>
						<option value=''>西安</option>
						<option value=''>广州</option>
						</select></li>
						<li>工作年限：</li>
						<li><a href="">1-3年</a></li>
						<li><a href="">5-10年</a></li>
						<li><a href="">10年以上</a></li>
						<li class="default"><a href="">不限</a></li>
					</ul>
				</div>
				<!--经纪人筛选结束-->
				<!--经纪人内容切换开始-->
				<div class="slideTxtBox">
					<div class="hd">
						<ul><li>银牌经纪人</li><li><a href="javascript:void(0);" data-toggle="modal" data-target="#upgrade-Modal">金牌经纪人</a></li><li><a href="javascript:void(0);" data-toggle="modal" data-target="#upgrade-Modal1">钻石经纪人</a></li></ul>
					</div>
					<div class="bd">
						<div class="broker">
							<!-- 委托提交弹出开始 -->
							<div id="upgrade-Modal2" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="flash">
								<div class="modal-dialog modal-eject">
								    <div class="modal-content box1">
								        <div class="modal-header modal-top">
								        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">{{ HTML::image('modules/shop/images/icon/close.png') }}</a></span><span class="sr-only">Close</span></button>
								          	<h4 class="modal-title" id="myModalLabel">我要委托经纪人</h4>
								        </div>
								        <div class="modal-body modal-con">
								        	<form role="form" action="get">
								        		<div class="form-group">
												    <div class="input-group tab">
												        <div class="input-group-addon com-img">公司名称：</div>
												        <input class="form-control com-inp" type="text">
												    </div>
												</div>
												<div class="form-group">
												    <div class="input-group tab">
												        <div class="input-group-addon com-img">姓名(职务)：</div>
												        <input class="form-control com-inp" type="text">
												    </div>
												</div>
												<div class="form-group">
												    <div class="input-group tab">
												        <div class="input-group-addon com-img">QQ：</div>
												        <input class="form-control" type="password">
												    </div>
												</div>
												<div class="form-group">
												    <div class="input-group tab">
												        <div class="input-group-addon com-img">联系方式：</div>
												        <input class="form-control" type="text">
												    </div>
												</div>
												<div class="form-group">
												    <div class="input-group">
												        <div class="input-group-addon com-img"><span class="red">*</span>需求简介：</div>
												        <textarea class="form-control tex" cols="15"></textarea>
												    </div>
												</div>
												<div class="form-group">
												    <div class="input-group">
												        <div class="input-group-addon com-img"><span class="red">*</span>验证码：</div>
												        <a class="code" href="javascript:void(0);">点击获取</a>
												    </div>
												</div>
												<button type="button" class="btn">马上提交</button>
		        							</form>
								        </div>
								    </div>
								</div>
							</div>
							<!-- 委托提交弹出结束 -->
							<div class="bro-ud">
								<div>
									<div class="broker-head fl">
										<p>{{ HTML::image('modules/shop/images/test/user.png') }}</p>
										<p class="call-in"><a href="">在线咨询</a></p>
									</div>
									<div class="broker-name fr">
										<p class="n">王盼<span><a href="javascript:void(0);" data-toggle="modal" data-target="#upgrade-Modal2">委托经纪人</a></span></p>
										<p class="z"><strong>地区:</strong>北京<strong>&nbsp;&nbsp;工作年限:</strong>10年</p>
										<p><strong>个人简介: </strong>国家工商行政管理总局高级经济师、中华商标协会专家委员会主任 、《中华商标》杂志社高级顾问。1979年以来一直在商标局、商标评审委员会从事商标工作，曾任综合处副处长、法律事务处处长，商标局助理巡视员。</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="updown">
									<h3 class="on">经纪人推荐商标</h3>
									<div class="panel j-panel">
										<ul class="list-inline updown-con">
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop14.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop13.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop15.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop16.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop17.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="updown mt10">
									<h3>经纪人推荐成功案例</h3>
									<div class="panel j-panel">
										<ul class="list-inline updown-con">
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop14.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop13.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop15.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop16.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop17.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="bro-ud mt20">
								<div>
									<div class="broker-head fl">
										<p>{{ HTML::image('modules/shop/images/test/user.png') }}</p>
										<p class="call-in"><a href="">在线咨询</a></p>
									</div>
									<div class="broker-name fr">
										<p class="n">王盼<span><a href="javascript:void(0);" data-toggle="modal" data-target="#upgrade-Modal2">委托经纪人</a></span></p>
										<p class="z"><strong>地区:</strong>北京<strong>&nbsp;&nbsp;工作年限:</strong>10年</p>
										<p><strong>个人简介: </strong>国家工商行政管理总局高级经济师、中华商标协会专家委员会主任 、《中华商标》杂志社高级顾问。1979年以来一直在商标局、商标评审委员会从事商标工作，曾任综合处副处长、法律事务处处长，商标局助理巡视员。</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="updown">
									<h3 class="on">经纪人推荐商标</h3>
									<div class="panel j-panel">
										<ul class="list-inline updown-con">
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop14.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop13.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop15.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop16.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop17.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="updown mt10">
									<h3>经纪人推荐成功案例</h3>
									<div class="panel j-panel">
										<ul class="list-inline updown-con">
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop14.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop13.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop15.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop16.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop17.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="bro-ud mt20">
								<div>
									<div class="broker-head fl">
										<p>{{ HTML::image('modules/shop/images/test/user.png') }}</p>
										<p class="call-in"><a href="">在线咨询</a></p>
									</div>
									<div class="broker-name fr">
										<p class="n">王盼<span><a href="javascript:void(0);" data-toggle="modal" data-target="#upgrade-Modal2">委托经纪人</a></span></p>
										<p class="z"><strong>地区:</strong>北京<strong>&nbsp;&nbsp;工作年限:</strong>10年</p>
										<p><strong>个人简介: </strong>国家工商行政管理总局高级经济师、中华商标协会专家委员会主任 、《中华商标》杂志社高级顾问。1979年以来一直在商标局、商标评审委员会从事商标工作，曾任综合处副处长、法律事务处处长，商标局助理巡视员。</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="updown">
									<h3 class="on">经纪人推荐商标</h3>
									<div class="panel j-panel">
										<ul class="list-inline updown-con">
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop14.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop13.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop15.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop16.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
											<li>
												<p class="hun1"><a href="">{{ HTML::image('modules/shop/images/test/shop17.png') }}</a></p>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
												<p class=""><span class="cr">推荐理由:</span>叠字商标容易吸引人们注意，容易为人记住，文字运用给人调皮轻松的观感，用叠字商标作为童装品牌的话......</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="updown mt10">
									<h3>经纪人推荐成功案例</h3>
									<div class="panel j-panel">
										<ul class="list-inline updown-con">
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop14.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop13.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop15.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop16.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
											<li>
												<a href="">
													<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
													<p>{{ HTML::image('modules/shop/images/test/shop17.png') }}</p>
												</a>
												<p>《红红火火》摄影作品</p>
												<p class="lap4 cr">￥14999 <del>￥84999</del></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div>
							<!-- 升级弹出框开始 -->
							<div id="upgrade-Modal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="flash">
								<div class="modal-dialog modal-eject">
							    	<div class="modal-content box">
								        <div class="modal-header modal-top">
								          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">{{ HTML::image('modules/shop/images/icon/close.png') }}</a></span><span class="sr-only">Close</span></button>
								          <h4 class="modal-title" id="myModalLabel">提示</h4>
								        </div>
								        <div class="modal-body modal-con">
								        	<p>您还没有此权限，<a href="" class="cr">立即升级</a></p>
								        </div>
							    	</div>
							    </div>
							</div>
							<!-- 升级弹出框结束 -->
						</div>
						<div>
							<!-- 升级弹出框开始 -->
							<div id="upgrade-Modal1" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="flash">
								<div class="modal-dialog modal-eject">
							    	<div class="modal-content box">
								        <div class="modal-header modal-top">
								          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">{{ HTML::image('modules/shop/images/icon/close.png') }}</a></span><span class="sr-only">Close</span></button>
								          <h4 class="modal-title" id="myModalLabel">提示</h4>
								        </div>
								        <div class="modal-body modal-con">
								        	<p>您还没有此权限，<a href="" class="cr">立即升级</a></p>
								        </div>
							    	</div>
							    </div>
							</div>
							<!-- 升级弹出框结束 -->
						</div>
					</div>
				</div>
				<!--经纪人内容切换结束-->	
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
		</div>
		<!--广告图1开始-->
		<div class="row gao2">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao2.png') }}</div>
		</div>
		<!--广告图1结束-->
	</div>
	<!--内容块结束-->
@stop