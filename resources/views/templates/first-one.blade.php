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
    <div class="container-fluid">

        <div class="row text-row">

            <div class="col-md">
                <img src="{{'images/'.$info->image}}" style="width: 100%">
            </div>
            <div class="col-md main-image">
                <div class="desc">
                    <div class="title">
                        {!! $info->title !!}
                    </div>

                    <div class="col-md-12">{!! $info->text !!}</div>

                    <div class="main-content__desc col-md" style="padding-left: 0">
                        {!! $info->description !!}
                    </div>
                </div>
            </div>

            @if($info->video_status == 1)
                <div class="col-md-12 text-center" style="margin-top: 20px">
                    @youtube($info->youtube, ['width'=>560, 'height'=>315])
                </div>
            @endif

        </div>
    </div>
</div>



</body>
</html>