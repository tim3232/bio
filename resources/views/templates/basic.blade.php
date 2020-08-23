<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Test</title>
    @include('layouts.chank.header')
    <link href="/css/layout.css" rel="stylesheet">
    <style>

        .wrapper{
            padding-top: 0px;
            min-height: 120vh;
            background: url('/images/{{$info->body_image}}') 50% no-repeat; background-size: cover;
        }

    </style>

</head>

<body>
@include('layouts.chank.navbar')
<div class="wrapper">
    <div class="container-fluid">


        <div class="row text-row">

            <div class="col-md">

                <div class="desc">
                    <div class="titls" style="padding-top: 50px; padding-left: 60px">
                        {!! $info->title !!}
                    </div>

                    <div class="main-content__desc col-md" style="padding-left: 60px">
                        <br>
                        {!! $info->description !!}
                    </div>
                </div>

            </div>
            <div class="col-md main-image" style="padding-top: 50px">
                <img src="{{'images/'.$info->image}}" style="width: 80%">
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