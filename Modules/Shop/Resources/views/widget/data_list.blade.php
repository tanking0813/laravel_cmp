@foreach($data as $v)
<li><a href="{{ route('shop.logo.show',$v['id']) }}">{{ HTML::image($v['images']['path']) }}</a></li>
@endforeach