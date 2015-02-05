@extends('search::logo.layouts.blank')

@section('content')
<div class="content container">
    <div class="inquire-box">
        <h1 class="title">商标查询</h1>
        <div class="inquire index-tab-change">
                <div class="row btn-title hd">
                    <ul class="list-unstyled">
                        <li>
                            <div class="col-xs-4 col-xs-offset-2">
                                <button type="button" class="btn btn-appro">商标近似查询<span></span></button>
                            </div>
                        </li>
                        <li>
                            <div class="col-xs-4">
                                <button type="button" class="btn btn-status">商标状态查询<span></span></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- 商标近似查询 -->
                <div class="bd">
                    <div class="row quiry-appro-group">
                        {{ Form::open(['route'=>'search.logo','class'=>'form-inline','id'=>'approximate_query','method'=>'get']) }}
                            <div class="form-group">
                                <label class="sr-only" for="brandName">name</label>
                                {{ Form::text('q', null, ['class'=>'form-control', 'placeholder'=>'请输入商标名称', 'id'=>'brandName']) }}
                            </div>
                            <div class="form-group ml6">
                                <label class="sr-only" for="brandClassify">name</label>
                                {{ Form::text('ics', null, ['class'=>'form-control', 'placeholder'=>'分类号', 'id'=>'brandClassify']) }}
                                <a href="{{ route('search.logo.classify') }}" class="trademark-link">商标分类</a>
                            </div>
                            <button type="submit" id="a_quary" class="btn btn-quiry ml6">查询</button>
                            <button type="button" class="btn btn-mquiry" onclick="window.location.href='{{ route('search.logo.profession') }}'">专业查询</button>
                        {{ Form::close() }}
                    </div>
                    <!-- 商标状态查询 -->
                    <div class="row quiry-status-group lh"  style="display:none;">
                        {{ Form::open(['route'=>'search.logo.logoState','class'=>'form-inline','id'=>'_state_query','method'=>'get']) }}
                            <div class="form-group">
                                <label class="sr-only" for="brandName">name</label>
                                <input type="text" id="brandName1" name="brandName1" class="form-control" placeholder="注册号/申请号">
                            </div>
                            <button type="submit" id="s_query" @if(!Sentry::check()) class="btn btn-quiry ml6" @endif>查询</button>
                        {{ Form::close() }}
                    </div>
                </div>
        </div>
    </div>
</div>
@stop

@section('script')
@asset('jquery-ui-1.10.1', 'script')
@asset('jquery-validate', 'script')
{{ HTML::script('modules/search/js/queryForm_validate.js') }}
@stop
