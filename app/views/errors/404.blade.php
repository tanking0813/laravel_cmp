@extends('layouts.blank')

@section('style')
    {{ HTML::style('static/css/404.css') }}
@stop

@section('content')
<div class="warp">
   <div class="container">
		<div class="top"></div>
		<div class="middle">
           <div  class="row  error ">
           	   <div class="col-xs-6  errorbg">
           	   	   <img src="{{ asset('static/images/404.png') }}">
           	   </div>
           	   <div class="col-xs-6 errorf">
           	      <div class="errorn"></div>
           	   	   <a href="{{ route('index') }}">进入首页>></a>
           	   </div>
           </div>
		</div>
		<div class="footer"></div>
	</div>
</div>
@stop