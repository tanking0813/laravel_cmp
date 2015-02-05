
<!-- 查询记录 -->
<div class="record-box">
    <div class="zyr-title">查询记录</div>
    <div class="zyr-detail">
    	{{ link_to_route('search.logo.history', '详细', $parameters = array()) }}
        <div id="datepicker"></div>
    </div>
</div>
<!-- 最近查询记录 -->
<div class="zjrecord-box" id="zjrecord-box">
	<div class="zyr-title">最近查询记录</div>
	<div class="zyr-detail">
		<ul class="mb0 list-unstyled">
			<li><a href="{{ route('search.logo.logoDetail') }}"><span>2014-12-23</span><span>房子</span><span>05类</span></a></li>
			<li><a href="{{ route('search.logo.logoDetail') }}"><span>2014-12-23</span><span>房子</span><span>05类</span></a></li>
			<li><a href="{{ route('search.logo.logoDetail') }}"><span>2014-12-23</span><span>房子</span><span>05类</span></a></li>
			<li><a href="{{ route('search.logo.logoDetail') }}"><span>2014-12-23</span><span>房子</span><span>05类</span></a></li>
			<li><a href="{{ route('search.logo.logoDetail') }}"><span>2014-12-23</span><span>房子</span><span>05类</span></a></li>
		</ul>
	</div>
</div>