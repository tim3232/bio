<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Test</title>
    @include('layouts.chank.header')
    <link href="/css/layout.css" rel="stylesheet">
</head>

<body>
@include('layouts.chank.navbar')
<div class="wrapper">
    <div class="container h-100 d-flex flex-column justify-content-between">
        <div class="row mx-auto" style="margin-top: 60px">{!! $info->title !!}</div>


        <div class="row col-md-12">
            <div class="col-md-5" style="background: url('{{asset('images/'.$info->image)}}') 100% no-repeat; background-size: cover; min-height: 450px;"></div>
            <div class="col-md-2"></div>
            <div class="col-md-5" style="background: url('{{asset('images/'.$info->body_image)}}') 100% no-repeat; background-size: cover; min-height: 450px;"></div>
        </div>

        <div class="row">
            <div class="col-md-12">{!! $info->text !!}</div>
            <div class="col-md-12">{!! $info->description !!}</div>
        </div>
    </div>
</div>

</body>
</html>