<div id="ad-superSlide" class="slideBox">
    <div class="hd">
        <ul>
        @foreach($banners as $k=>$v)
            <li>{{ $k+1 }}</li>
        @endforeach
        </ul>
    </div>
    <div class="bd">
        <ul>
            @foreach($banners as $v)
                <li><a href="http://www.SuperSlide2.com" target="_blank"><img src="{{ Uploader::find($v->banner)->path }}"></a></li>
            @endforeach
        </ul>
    </div>

    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
    <a class="prev" href="javascript:void(0)"></a>
    <a class="next" href="javascript:void(0)"></a>
</div>


@section('script')
{{ HTML::script('static/js/jquery/superslide/jquery.SuperSlide.2.1.js') }}
<script>
    jQuery("#ad-superSlide").slide({mainCell:".bd ul",autoPlay:true,effect:'left'});
</script>
@stop