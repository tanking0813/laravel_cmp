<ul class="list-unstyled jilist">
@foreach($data as $v)		
	<li>
		<a href="{{ route('shop.logo.show',$v['id']) }}">
		@if($v['category']['slug'])
		[第{{ $v['category']['slug'] }}类]
		@else
		{{ $v['category']['name'] }}类
		@endif
		&nbsp;{{ $v['title'] }}
		<span class="mr fr">{{ date("m-h",strtotime($v['updated_at'])) }}</span>
		</a>
	</li>
@endforeach
</ul>