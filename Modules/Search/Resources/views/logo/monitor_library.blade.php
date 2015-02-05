@extends('search::logo.layouts.default')

@section('content')

    <div class="jc-state-details jc-s-personal jc-a-contrast">
        <!-- 商标详细信息 -->
        <div class="jc-sp-detail mb0" id="jc-sp-detail">
            <h3 class="mt0 mb0">商标监测知识</h3>
            <!-- 对比内容 -->
            <div class="lib-content">
                <ul class="list-unstyled library-list">
                   @foreach($demo as $vo)
                    <li>
                        <div class="col-xs-2 lib-img">
                            <a href="{{ route('Search.logo.monitor.library.show', $vo['id']) }}"><img src="{{ $vo['logo'] }}" /></a>
                        </div>
                        <div class="col-xs-9 FAQ-detail">
                            <p><a href="{{ route('search.logo.monitor.state.show', $vo['id']) }}">{{ $vo['title'] }}</a>
                            <p class="mb0">{{ $vo['desc'] }}</p>
                            <p>{{ $vo['register_time'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- 换页 -->
            <div class="paging">
                <ul class="list-inline list-unstyled paging-list ml0 mb0">
                    <li><a href="">首页</a></li>
                    <li><a href="">上一页</a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">下一页</a></li>
                    <li class="pform ml10">
                        <span>转到第</span>
                        <input type="text" placeholder="1" class="num-box">
                        <span>页</span>
                        <span class="go">GO</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  
@stop