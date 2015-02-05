@extends('search::online.layouts.blank')

@section('alert')
<!-- 弹出创建域名信息 -->
	<div id="createDomain-Modal" class="createDomain-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">创建新的域名信息</h4>
				</div>
				<div class="modal-body">
					<div class="add-info-form">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-xs-3 control-label">域名类型：</label>
								<div class="col-xs-2 pl0">
									<div class="dropdown-toggle personal" data-toggle="dropdown" id="applyType"><span class="info-input-type">个人</span><span class="icon"><span></span></span></div>
									<ul class="list-unstyled dropdown-menu mb0 ptType personal-items" role="menu">
										<li>个人</li>
										<li>组织</li>
									</ul>
								</div>
								<div class="col-xs-4 pa0">
									<div class="dropdown-toggle moban" data-toggle="dropdown" id="applyType"><span class="info-input-type">请选择模板类型</span><span class="icon"><span></span></span></div>
									<ul class="list-unstyled dropdown-menu mb0 ptType moban-items" role="menu">
										<li>1年/68元</li>
										<li>2年/118元</li>
										<li>3年/188元</li>
										<li>4年/138元</li>
										<li>5年/68元</li>
										<li>6年/68元</li>
										<li>7年/68元</li>
										<li>8年/68元</li>
										<li>9年/68元</li>
										<li>10年/68元</li>
									</ul>
								</div>
							</div>
							<div class="form-group">
								<label for="yumingPerson-cn" class="col-xs-3 control-label">域名所有者（中文）：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="yumingPerson-cn" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="yumingPerson-fn" class="col-xs-3 control-label">域名所有者（英文）：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="yumingPerson-fn" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="personName-cn" class="col-xs-3 control-label">联系人姓名（中文）：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="personName-cn" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="personName-fn" class="col-xs-3 control-label">联系人姓名（英文）：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="personName-fn" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="personName-id" class="col-xs-3 control-label">联系人证件号码：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="personName-id" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class="col-xs-3 control-label">省市（区、县）：</label>
								<div class="col-xs-4 pa0">
									<select id="s1">
										<option>省份</option>
									</select>
									<select id="s2">
										<option>地级市</option>
									<select>
									<select id="s3">
										<option>市、县级市、县</option>
									<select>
								</div>
							</div>
							<div class="form-group">
								<label for="street-cn" class="col-xs-3 control-label">街道地址（中文）：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="street-cn" placeholder="">
								</div>
								<div class="col-xs-4 hint-word">
									<p>（不需要填写省市、县、区）</p>
								</div>
							</div>
							<div class="form-group">
								<label for="street-fn" class="col-xs-3 control-label">街道地址（英文）：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="street-fn" placeholder="">
								</div>
								<div class="col-xs-4 hint-word">
									<p>（不需要填写省市、县、区）</p>
								</div>
							</div>
							<div class="form-group">
								<label for="postcode" class="col-xs-3 control-label">邮编：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="postcode" placeholder="">
								</div>
							</div>
							<div class="form-group special-item">
								<label for="tel" class="col-xs-3 control-label">电话：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="tel" placeholder="" style="width: 48px!important; margin-left:0!important;">-
									<input type="text" class="form-control" placeholder="">-
									<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-xs-4 hint-word">
									<p>格式：029-8888-8888</p>
								</div>
							</div>
							<div class="form-group special-item">
								<label for="fax" class="col-xs-3 control-label">传真：</label>
								<div class="col-xs-4 pa0">
									<input type="text" class="form-control" id="fax" placeholder="" style="width: 48px!important; margin-left:0!important;">-
									<input type="text" class="form-control" placeholder="">-
									<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-xs-4 hint-word">
									<p>格式：029-8888-8888</p>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-xs-3 control-label">电子邮箱：</label>
								<div class="col-xs-4 pa0">
									<input type="email" class="form-control" id="email" placeholder="">
								</div>
								<div class="col-xs-5 hint-word">
									<p>非常重要，用于验证身份或获取转移密码</p>
								</div>
							</div>
							<div class="form-group">
								<label for="ID" class="col-xs-3 control-label">所有者证件号码：</label>
								<div class="col-xs-4 pa0">
									<input type="email" class="form-control" id="ID" placeholder="">
								</div>
								<div class="col-xs-4 hint-word">
									<p>(个人-身份证号;组织-注册编号)</p>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-xs-3 control-label">出生日期(个人模板)：</label>
								<div class="col-xs-4 pa0">
									<input type="email" class="form-control" id="email" placeholder="">
								</div>
								<div class="col-xs-4 hint-word">
									<p>例1986-9-2(注册.hk、.my填写)</p>
								</div>
							</div>
						</form>
						<div class="btn-group">
							<button type="submit" class="btn">保存</button>
							<button type="reset" class="btn">重置</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 点击加入购物车/购买相关提示框 -->
	<div id="messageReminder-Modal" class="messageReminder-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog row">
		    <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
		          <h4 class="modal-title" id="myModalLabel">消息提示</h4>
		        </div>
		        <div class="modal-body">
		        	<div class="standard-select">
		        		<p>新增/管理域名信息！</p>
		        	</div>
		        	<div class="plus-success">
			        	<p>加入购物车成功</p>
			        	<form role="form">		        		
							<a href=""><button type="button" class="btn btn-shopping">继续购物</button></a>
							<a href=""><button type="button" class="btn btn-account">去结算</button></a>
			        	</form>
		        	</div>
		        </div>
		    </div>
		</div>
	</div>
@stop

@section('content')
<div class="content">
	<div class="container">
		<!-- content d-matter start -->
		<div class="d-matter">
			<div class="d-details">
				<!-- 查询结果 -->
				<div class="result-list-box add-info-box">
					<div class="special-title">填写信息</div>
					<div class="add-info-blist">
						<p class="hint">有情提示： 根据CNNIC最新规定，国内域名(包括.cn、.中国等)注册日起三天内必须提供相 关证件资料,如不送达相关资料的域名将被注销，注销的域名费用退还至您会员帐号内！</p>
						<div class="a-i-indent">
							<div class="a-ii-title">订单信息</div>
							<div class="a-ii-para">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td>您选择的域名：</td>
											<td style="width: 200px;">safef.top</td>
											<td>
												<div class="dropdown-toggle" data-toggle="dropdown" id="applyType"><span class="info-input-type">所有分类</span><span class="icon"><span></span></span></div>
												<ul class="list-unstyled dropdown-menu mb0 ptType" role="menu">
													<li>1年/68元</li>
													<li>2年/118元</li>
													<li>3年/188元</li>
													<li>4年/138元</li>
													<li>5年/68元</li>
													<li>6年/68元</li>
													<li>7年/68元</li>
													<li>8年/68元</li>
													<li>9年/68元</li>
													<li>10年/68元</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td>新增/管理域名信息：</td>
											<td colspan="2">【<a href="javascript:;" data-toggle="modal" data-target="#createDomain-Modal">添加新的域名信息</a>】【<a href="{{ route('search.online.internet.exist_list') }}">使用已有域名信息</a>】（在这里可以添加和使用域名信息）</td>
										</tr>
										<tr>
											<td>注意事项：</td>
											<td colspan="2">
												<ul class="list-unstyled">
													<li><span>*</span>进入这个页面即表示您同意我们的 [国际域名注册服务条款] [国内域名注册服务条款]</li>
													<li><span>*</span>对于用于非法用途(包括但不限于私服、色情等)的域名，我们有权永久锁定域名并不退还相关费用</li>
													<li><span>*</span>不了解国际域名？</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="btn-group">
									<button type="button" class="btn shopping-cart" data-toggle="modal" data-target="#messageReminder-Modal">加入购物车</button>
									<button type="button" class="btn buy"><a href="">立即购买</a></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
