@extends('member::layouts.2columns-left')
@section('style')
    {{ HTML::style('static/css/jquery-ui-1.10.4.custom.min.css') }}
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{ HTML::style('static/css/jquery.gritter.css') }}
    {{ HTML::style('static/css/daterangepicker.css') }}
    {{ HTML::style('static/js/jquery/fullcalendar/fullcalendar.css') }}
    {{ HTML::style('static/css/jqvmap.css') }}
    {{ HTML::style('static/css/jquery.easy-pie-chart.css') }}
@stop
@section('leftbar')
    @include('member::publish.partials.publish_buy_left')
@stop
@section('content')
					<div class="identify whiteBg ml0">
						<i class="bao"></i><span class="orange">公司未认证，</span><span>柚皮网普通会员 <a href="" class="ocean">【购买柚皮通服务】</a></span>
					</div>
					<div class="row mt45">
						<div class="pad_15 ml15 whiteBg col-xs-12">
							<!--已发布卖品-->
							<ul class="tabHead1 mt20">
								<li><a href="{{ route('member.publish.buyerAlreadybrand') }}">商标出售</a>
								</li>
								<li class="active"><a href="{{ route('member.publish.buyerAlreadypatent') }}">专利出售</a>
								</li>
								<li><a href="{{ route('member.publish.buyerAlreadycopyright') }}">著作权出售</a>
								</li>
								<li><a href="{{ route('member.publish.buyerAlreadydomain') }}">域名出售</a>
								</li>
							</ul>
							<ul class="tabContent  row mt15">
								<!--商标列表-->
								<li class="col-xs-12" style="display:inline-block;">
									<ul class="subTabHead">
										<li class="active"><a href="javascript:;">待发布</a>
										</li>
										<li><a href="javascript:;">已过期</a>
										</li>

									</ul>
									<ul class="subTabContent">
										<li style="display:block;">
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
											<!--商标出售-->
								
											
												</tbody>
											</table>

										</li>
										<li>
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
												<!--专利出售-->
													<tr>
														<td valign="middle">
															<a href=""><img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />石油企业商标</a>
														</td>
														<td>燃油溶脂</td>
														<td>转让</td>
														<td>2014-12-26</td>
														<td>2014-12-26</td>
														<td>
															<a href="" class="icon  icon-eye-open tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
															<br /><a href="" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | <a href="" class="icon icon-remove tip0" data-toggle="tooltip" data-placement="top" title="删除"></a>
														</td>
													</tr>
													
												</tbody>
											</table>

										</li>
									</ul>
								</li>
								<!--专利列表-->
								<li class="col-xs-12">
									<ul class="subTabHead">
										<li class="active"><a href="javascript:;">待发布</a>
										</li>
										<li><a href="javascript:;">已过期</a>
										</li>

									</ul>
									<ul class="subTabContent">
										<li style="display:block;">
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
												<!--著作权出售-->
													<tr>
														<td valign="middle">
															<a href=""><img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />石油企业商标</a>
														</td>
														<td>燃油溶脂</td>
														<td>转让</td>
														<td>2014-12-26</td>
														<td>2014-12-26</td>
														<td>
															<a href="" class="icon  icon-eye-open tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
															<br /><a href="" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | <a href="" class="icon icon-remove tip0" data-toggle="tooltip" data-placement="top" title="删除"></a>
														</td>
													</tr>
													
												</tbody>
											</table>

										</li>
										<li>
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td valign="middle">
															<a href=""><img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />石油企业商标</a>
														</td>
														<td>燃油溶脂</td>
														<td>转让</td>
														<td>2014-12-26</td>
														<td>2014-12-26</td>
														<td>
															<a href="" class="icon  icon-eye-open tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
															<br /><a href="" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | <a href="" class="icon icon-remove tip0" data-toggle="tooltip" data-placement="top" title="删除"></a>
														</td>
													</tr>
													
												</tbody>
											</table>

										</li>
									</ul>
								</li>
								<!--版权列表-->
								<li class="col-xs-12">
									<ul class="subTabHead">
										<li class="active"><a href="javascript:;">待发布</a>
										</li>
										<li><a href="javascript:;">已过期</a>
										</li>

									</ul>
									<ul class="subTabContent">
										<li style="display:block;">
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td valign="middle">
															<a href=""><img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />石油企业商标</a>
														</td>
														<td>燃油溶脂</td>
														<td>转让</td>
														<td>2014-12-26</td>
														<td>2014-12-26</td>
														<td>
															<a href="" class="icon  icon-eye-open tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
															<br /><a href="" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | <a href="" class="icon icon-remove tip0" data-toggle="tooltip" data-placement="top" title="删除"></a>
														</td>
													</tr>
													
												</tbody>
											</table>

										</li>
										<li>
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td valign="middle">
															<a href=""><img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />石油企业商标</a>
														</td>
														<td>燃油溶脂</td>
														<td>转让</td>
														<td>2014-12-26</td>
														<td>2014-12-26</td>
														<td>
															<a href="" class="icon  icon-eye-open tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
															<br /><a href="" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | <a href="" class="icon icon-remove tip0" data-toggle="tooltip" data-placement="top" title="删除"></a>
														</td>
													</tr>
													
												</tbody>
											</table>

										</li>
									</ul>
								</li>
								<!--域名列表-->
								<li class="col-xs-12">
									<ul class="subTabHead">
										<li class="active"><a href="javascript:;">待发布</a>
										</li>
										<li><a href="javascript:;">已过期</a>
										</li>

									</ul>
									<ul class="subTabContent">
										<li style="display:block;">
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td valign="middle">
															<a href=""><img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />石油企业商标</a>
														</td>
														<td>燃油溶脂</td>
														<td>转让</td>
														<td>2014-12-26</td>
														<td>2014-12-26</td>
														<td>
															<a href="" class="icon  icon-eye-open tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
															<br /><a href="" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | <a href="" class="icon icon-remove tip0" data-toggle="tooltip" data-placement="top" title="删除"></a>
														</td>
													</tr>
													
												</tbody>
											</table>

										</li>
										<li>
											<table class="table table-condensed">
												<thead>
													<tr>
														<th>求购标题</th>
														<th>行业</th>
														<th>交易类型</th>
														<th>发布时间</th>
														<th>截止时间</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td valign="middle">
															<a href="">
																<img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />石油企业商标</a>
														</td>
														<td>燃油溶脂</td>
														<td>转让</td>
														<td>2014-12-26</td>
														<td>2014-12-26</td>
														<td>
															<a href="" class="icon  icon-eye-open tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
															<br /><a href="" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | <a href="" class="icon icon-remove tip0" data-toggle="tooltip" data-placement="top" title="删除"></a>
														</td>
													</tr>
													
												</tbody>
											</table>

										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>

@stop
@section('script')
    {{ HTML::script('static/js/select2.full.js') }}
    <script src="http://s0.jmstatic.com/templates/jumei/js/jquery/placeholder.min.js"></script>
    {{ HTML::script('static/js/bootstrap/bootstrap.js') }}
    {{ HTML::script('static/js/date.js') }}
    {{ HTML::script('static/js/daterangepicker.js') }}
    {{ HTML::script('static/js/jquery/gritter/jquery.gritter.js') }}
    {{ HTML::script('static/js/jquery/fullcalendar/fullcalendar.min.js') }}
    {{ HTML::script('static/js/jquery/charts/easypiechart/jquery.easy-pie-chart.js') }}
@stop