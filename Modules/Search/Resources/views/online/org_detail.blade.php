@extends('search::online.layouts.blank')

@section('alert')
<!-- 弹出验证框 -->
<div id="ValidateBox-Modal" class="ValidateBox-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">安全验证</h4>
			</div>
			<div class="modal-body">
				<p>请输入图片中的数字或字母</p>
				<form role="form">
					<div class="form-group row">
						<div class="col-xs-3 pr0">
							<input type="text" class="form-control" placeholder="请输入验证码">
						</div>
						<div class="col-xs-3 code pa0">
							<img src="{{ asset('modules/search/images/close.png') }}" />
						</div>
						<div class="col-xs-3 word pa0">看不清</br>换一张</div>
					</div>
					<button type="button" class="btn ensure">确定</button>
				</form>
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
				<!-- 查询结果详情页 -->
				<div class="result-detail-box">
					<div class="rd-mix-box">
						<div class="rd-mix-title">域名<span>upipr.cn</span>的注册信息</div>
						<!-- 中文 -->
						<div class="cn-message">
							<b class="gain-time">以下信息获取时间：2015-01-21 16:03:32<a href="javascript:;" data-toggle="modal" data-target="#ValidateBox-Modal">更新最新信息</a><div>域名注册信息可能为缓存信息，您可以点此获取最新信息</div></b>
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td>域名：</td>
										<td>upipr.cn</td>
									</tr>
									<tr>
										<td>注册商：</td>
										<td>杭州电商互联科技有限公司（原杭州创业互联科技有限公司）</td>
									</tr>
									<tr>
										<td>注册人：</td>
										<td>广东时代梦想网络科技有限公司</td>
									</tr>
									<tr>
										<td>注册人邮箱：</td>
										<td>2408631787@qq.com</td>
									</tr>
									<tr>
										<td>注册日期：</td>
										<td>2014-12-27 18:09:49</td>
									</tr>
									<tr>
										<td>到期日期：</td>
										<td>2015-12-27 18:09:49</td>
									</tr>
									<tr>
										<td>域名状态：</td>
										<td>clientDeleteProhibited(注册商禁止删除)<span>clientTransferProhibited(注册商禁止转移)</span>
										</td>
									</tr>
									<tr>
										<td>DNS服务器：</td>
										<td>ns1.everdns.com<span>ns2.everdns.com</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- 英文 -->
						<div class="fn-message">
							<b class="gain-time">详细英文注册信息如下</b>
							<div class="fn-m-detail">
								<p>[Querying whois.cnnic.cn]</p>
								<p>[whois.cnnic.cn]</p>
								<p>Domain Name: upipr.cn</p>
								<p>ROID: 20141227s10001s73477697-cn</p>
								<p>Domain Status: clientDeleteProhibited</p>
								<p>Domain Status: clientTransferProhibited</p>
								<p>Registrant ID: 22cn141224vfmnbn</p>
								<p>Registrant: 广东时代梦想网络科技有限公司</p>
								<p>Registrant Contact Email: 2408631787@qq.com</p>
								<p>Sponsoring Registrar: 杭州电商互联科技有限公司（原杭州创业互联科技有限公司）</p>
								<p>Name Server: ns1.everdns.com</p>
								<p>Name Server: ns2.everdns.com</p>
								<p>Registration Date: 2014-12-27 18:09:49</p>
								<p>Expiration Date: 2015-12-27 18:09:49</p>
								<p>DNSSEC: unsigned</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
