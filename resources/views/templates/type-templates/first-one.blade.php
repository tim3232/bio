<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Test</title>
    @include('layouts.chank.header')
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
                    <div class="titls" style="position: relative; left: 0">
                        {!! $info->title !!}
                    </div>

                    <div class="main-content__desc col-md" style="padding-left: 0">
                        {!! $info->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>