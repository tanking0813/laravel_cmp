@extends('layouts.default')

@section('style')
    @asset('bootstrap', 'style')
@stop

@section('content')

    <div class="container">
        <div class="wrap">
            <div class="col-xm-12">
                <h2>{{ link_to_route('member', 'member') }}</h2>
                <h2>{{ link_to_route('backend', 'backend') }}</h2>
                <h2>{{ link_to_route('shop', 'shop') }}</h2>
                <h2>{{ link_to_route('search', 'search') }}</h2>
            </div>
        </div>

    </div>


@stop