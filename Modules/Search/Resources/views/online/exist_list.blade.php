@extends('search::online.layouts.blank')

@section('alert')
<!-- 弹出创建域名信息 -->
<div id="existDomain-Modal" class="createDomain-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">域名所有者信息</h4>
			</div>
			<div class="modal-body">
				<div class="add-info-form">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="yumingPerson-cn" class="col-xs-3 control-label">域名所有者：</label>
							<div class="col-xs-4 pa0">
								<input type="text" class="form-control" id="yumingPerson-cn" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="personName-cn" class="col-xs-3 control-label">联系人姓名：</label>
							<div class="col-xs-4 pa0">
								<input type="text" class="form-control" id="personName-cn" placeholder="">
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
								<input type="text" class="form-control" id="tel" placeholder="" style="width: 48px!important; margin-left:0;">-
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
								<input type="text" class="form-control" id="fax" placeholder="" style="width: 48px!important; margin-left:0;">-
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
						<b>域名所有者英文信息</b>
						<div class="form-group">
							<label for="yumingPerson-fn" class="col-xs-3 control-label">域名所有者（英文）：</label>
							<div class="col-xs-4 pa0">
								<input type="text" class="form-control" id="yumingPerson-fn" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="personName-fn" class="col-xs-3 control-label">联系人姓名（英文）：</label>
							<div class="col-xs-4 pa0">
								<input type="text" class="form-control" id="personName-fn" placeholder="">
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
					</form>
					<div class="btn-group">
						<button type="submit" class="btn">确定</button>
						<button type="reset" class="btn">取消</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 删除提醒 -->
<div id="deleteWarn-Modal" class="createDomain-box deleteWarn-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">消息提示</h4>
			</div>
			<div class="modal-body">
				<div class="add-info-form">
					<p>您确定要删除该域名所有者的信息模板吗？</p>
					<div class="btn-group">
						<button type="submit" class="btn">确定</button>
						<button type="reset" class="btn">取消</button>
					</div>
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
					<div class="special-title">已有域名信息</div>
					<div class="add-info-blist">
						<div class="zx-exist-info">
							<div class="zx-ei-title">请核对确认域名信息：</div>
							<div class="zx-ei-para">
								<p style="font-size:14px; margin-bottom:20px;">以下为您曾经使用过的域名信息，您可以直接选择使用：</p>
								<ul class="list-unstyled yiyou-admian-info">
									<li>
										<span><span class="radio-icon"></span>杨菲菲</span><span>杨菲菲</span><span>37014526785@qq.com</span><span class="ei-detail"><a href="{{ route('search.online.internet.org_detail') }}">详情</a></span><span class="ei-delete" data-toggle="modal" data-target="#deleteWarn-Modal">删除</span>
									</li>
									<li>
										<span><span class="radio-icon"></span>杨菲菲</span><span>杨菲菲</span><span>37014526785@qq.com</span><span class="ei-detail"><a href="{{ route('search.online.internet.org_detail') }}">详情</a></span><span class="ei-delete">删除</span>
									</li>
									<li>
										<span><span class="radio-icon"></span>杨菲菲</span><span>杨菲菲</span><span>37014526785@qq.com</span><span class="ei-detail"><a href="{{ route('search.online.internet.org_detail') }}">详情</a></span><span class="ei-delete">删除</span>
									</li>
									<li>
										<span><span class="radio-icon"></span>杨菲菲</span><span>杨菲菲</span><span>37014526785@qq.com</span><span class="ei-detail"><a href="{{ route('search.online.internet.org_detail') }}">详情</a></span><span class="ei-delete">删除</span>
									</li>
									<li>
										<span><span class="radio-icon"></span>杨菲菲</span><span>杨菲菲</span><span>37014526785@qq.com</span><span class="ei-detail"><a href="{{ route('search.online.internet.org_detail') }}">详情</a></span><span class="ei-delete">删除</span>
									</li>
								</ul>
								<div class="ei-ensure">
									<button type="button" class="btn" onclick="window.location.href='{{ route('search.online.internet.orders') }}'">确定</button>
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
