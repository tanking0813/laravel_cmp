@foreach($data as $k=>$v)
<li><a href="{{ route('shop.copy.show',$v['id']) }}">{{ $k+1 }}.{{ $v['title'] }}</a><span class="fr">{{ $v['praise_num'] }}次</span></li>
@endforeach