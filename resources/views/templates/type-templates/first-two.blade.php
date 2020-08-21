<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Test</title>
    @include('layouts.chank.header')
</head>

<body>
@include('layouts.chank.navbar')
<div class="wrapper">
    <div class="container h-100 d-flex flex-column justify-content-between">
        <div class="col-md-12 text-center" style="margin-top: 60px">{!! $info->title !!}</div>
        <div class="col-md-12 text-center">
            <img class="images" src="{{'images/'.$info->image}}" style="width: 50%;max-height: 300px;">
    </div>
        <div class="row">
            <div class="col-md-12 text-center">{!! $info->text !!}</div>
            <div class="col-md-12">{!! $info->description !!}</div>
        </div>
    </div>
</div>

</body>
</html>