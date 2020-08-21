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


        <div class="row" style="padding-left: 10px">

            <div class="col-md">

                <div class="desc">
                    <div class="valentine-logo col-md-8" style="position: relative;padding-left: 0;padding-top: 30px; margin-bottom: 30px">
                        <img src="" style="width: 100%">
                    </div>
                    <div class="titls" style="position: relative; left: 0">
                        {!! $info->title !!}
                    </div>

                    <div class="main-content__desc col-md" style="padding-left: 0">
                        {!! $info->description !!}
                    </div>
                </div>


                <div class="row col-md-10 bg-white" style="height: 200px; padding-top: 20px; border-radius: 10px">

                    <div class="col-md-12" style="padding: 0">
                        <p>Выберите удобный мессенджер</p>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <button type="button" class="btn btn-primary btn-messenger col-md-4">
                            <div class="icon"><img alt="icon" src="https://app.leeloo.ai/images/lgt-icon-facebook.svg"></div>
                            <span>Messenger</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-telegram col-md-4">
                            <div class="icon"><img alt="icon" src="https://app.leeloo.ai/images/lgt-icon-telegram.svg"></div>
                            <span>Telegram</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-viber col-md-4">
                            <div class="icon"><img alt="icon" src="https://app.leeloo.ai/images/lgt-icon-viber.svg"></div>
                            <span>Viber</span>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col-md main-image" style="padding-top: 60px">
                <img src="{{'images/'.$info->image}}" style="width: 70%">
                <img src="{{'images/'.$info->body_image}}" style="width: 70%;margin-top: 50px">
            </div>
        </div>
    </div>
</div>



</body>
</html>