<li class="col-xs-12" style="display:inline-block;">
	<ul class="subTabHead">
	@if($status==1)
		<li class="@if($status == 1 && !Request::get('expire')) active @endif"><a href="?status={{ $status }}">已发布</a>
		</li>
	@elseif($status==2)
		<li class="@if($status == 2 && !Request::get('expire')) active @endif"><a href="?status={{ $status }}">待发布</a>
		</li>
	@endif
		<li class="@if(Request::get('expire')) active @endif"><a href="?status={{ $status }}&expire=1">已过期</a>
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
			@if($data)
				@foreach($data as $v)
					<tr>
						<td valign="middle">
							<a href=""><img src="{{ asset('modules/member/images/nail.jpg') }}" width="80" height="80" />{{ $v->pur_title }}</a>
						</td>
						<td>{{ $v->pur_title }}</td>  
						<td>{{ $v->trading }}</td>
						<td>{{ $v->pur_date }}</td>
						<td>{{ $v->effectivetime }}</td>
						<td>
							<a href="" class="fa fa-eye tip0" data-toggle="tooltip" data-placement="top" title="查看"></a> | <a href="{{ route('member.publish.buyer.edit',['type'=>$type,'id'=>$v->id,'status'=>$status]) }}" class="fa fa-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
							<br /><a href="" class="fa fa-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="关闭"></a> | 
							<a href="{{ route('member.publish.buyer.delete',['type'=>$type,'id'=>$v->id,'status'=>$status]) }}"  class="J_ajax_get confirm fa fa-remove tip0" data-toggle="tooltip" data-placement="top" data-id="{{ $v->id}}" title="删除"></a>
						</td>
					</tr>
				@endforeach
			@elseif(!$data)
					<tr>
						<td colspan="6">
							<p><h2>暂无信息</h2></p>
						</td>
					</tr>
			@endif	
					<tr>
						<td colspan="6">{{ $data->appends(Input::except('page'))->links(); }}</td>
					</tr>
				</tbody>
			</table>	
		</li>
	</ul>
</li>

