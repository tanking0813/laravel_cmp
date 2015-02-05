@extends('layouts.default')

@section('content')
    {{ $error }}

    <script>
    setTimeout(function(){
           window.location.href='';
     },3000)
    </script>
@stop