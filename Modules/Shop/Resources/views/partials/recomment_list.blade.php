@foreach($shops['lists'] as $v)
<div class="tbp-summary lei">
	<a href="{{ route($shops['url'],$v['id']) }}">
		<p>{{ HTML::image($v['images']['path']) }}</p>
		@if($v['category']['slug'])
		<p class="seller">{{ $v['title'] }}（第{{ $v['category']['slug'] }}类）</p>
		<p>服务列表：{{ $v['server_list'] }}</p> 
		@else
		<p class="seller">{{ $v['title'] }}（{{ $v['category']['name'] }}类）</p> 
		@endif

		@if($v['price'] == '0' || $v['price'] == '0.00')
			<p class="seller cr">价格面议</p> 
		@else
			<p>参考价：<span class="seller1">￥{{ $v['price'] }}</span></p>
		@endif 
	</a>
</div>
@endforeach