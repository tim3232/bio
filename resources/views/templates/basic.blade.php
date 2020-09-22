<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Bioolive</title>
    @include('layouts.chank.header')
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="НОВЫЙ УНИКАЛЬНЫЙ ЭКОПРОЕКТ">
    <meta property="og:site_name" content="Bioolive">
    <meta property="og:image" content="/img/sharing.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:description"
          content="Воспользуйтесь наиболее выгодным предложением — приобретайте молодые деревья 2020 года по предпродажной стоимости 65$">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--favicon-->
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="/img/favicon/apple-icon.png">
    <!--style-->

    <link rel="stylesheet" href="/css/app.min.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5DPBX7R');</script>
    <!-- End Google Tag Manager -->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '508959626314745');
        fbq('init', '2589308277802123');
        fbq('track', 'PageView');
    </script>
    <script>
        window.LEELOO = function(){
            window.LEELOO_INIT = { id: '{{$info->leloo_id}}' };
            var js = document.createElement('script');
            js.src = 'https://app.leeloo.ai/init.js';
            js.async = true;
            document.getElementsByTagName('head')[0].appendChild(js);
        }; LEELOO();
    </script>
    <!-- end leeloo init code -->
    <script>window.LEELOO_LEADGENTOOLS = (window.LEELOO_LEADGENTOOLS || []).concat('stiobq');</script>

    <style>iframe{ max-width: 100% !important;}

    .row{
        margin-left: 0;
        margin-right: 0;
    }

        .wrapper.pre-sale{
            padding-left: 250px;
        }

        .main-content{
            margin-top: 20px;
        }
        .social{
            margin-top: 20px;
        }

        .main-image{
            margin-top: 0 !important;
        }

        .main-container:after, .pre-sale:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 250px;
            display: block;
            z-index: 2;
        }
        .pre-sale .main-container:after {
            left: 0px;
            background: url("/images/left-side.svg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .pre-sale:before {
            background: none;
        }

        .valentine-logo{
            margin-bottom: 0;
            /*padding-left: 15px;*/
        }

        .title {
            text-transform: uppercase;
            /*font-size: 36px;*/
            font-size: 3.65vh;
            line-height: 120%;
            padding: 0;
        }

        .subtitle {
            text-transform: uppercase;
            /*font-size: 26px;*/
            font-size: 3.5vh;
            line-height: 120%;
            padding: 0;
            margin-bottom: 20px;
        }

        .description {
            padding: 0;
            font-size: 3.2vh;
            /*font-size: 24px;*/
            line-height: 120%;
            /*background-color: #fcf4f4;*/
        }

        .description::first-letter{
            text-transform: capitalize;
        }

        .description ul li{
            font-size: 3vh;
            line-height: 120%;
            /*font-size: 21px;*/
        }

        .social-image{
            display: none;
        }

        .description ul li::first-letter{
            text-transform: capitalize;
        }

        ul {
            padding-left: 10px;
            margin-top: 35px;
            list-style: none;
        }

        ul li{

            padding-left: 18px;
            font-weight: 400;
            color: #000;
            position: relative;
        }

        ul li:after {
            content: "";
            position: absolute;
            top: 8px;
            left: 0;
            width: 12px;
            height: 12px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #acca34;
        }

        .text-bio{
            color: #808C09;
            font-weight: 900;
        }

        .shares{
            color: #9C0000;
            font-weight: 900;
        }

        .title-mobile{
            display: none !important;
        }

        @media screen and (max-width:768px) {  /*mobile or 150% >*/

            .main-content{
                margin-top: 0;
            }

            .valentine-logo>img {
                padding-left: 0 !important;
            }

            .pre-sale:before {
                left: 79px;
                background: rgba(120, 142, 46, .56);
                width: 30px;
            }

            .wrapper.pre-sale {
                padding-left: 50px;
            }

            .title-mobile{
                font-size: 25px;
                text-transform: uppercase;
                display: block !important;
            }

            .title{
                display: none !important;
            }

            .main-container:after, .pre-sale:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                width: 15px;
                display: block;
                z-index: 2;
            }
            .pre-sale .main-container:after {
                left: 15px;
                background: rgba(120,142,46,.89);
            }

            .pre-sale:before {
                left: 30px;
            }

            .pre-sale:before {
                width: 15px;
            }

        }


        @media screen and (max-width:1300px) {
            .main-image>img{
                max-height: 480px;
            }
        }

        @media screen and (max-width:1100px) {  /*big resize*/

            .social-image{
                display: block !important;
            }

            .title-mobile{
                font-size: 30px;
                text-transform: uppercase;
                display: block !important;
            }

            .title{
                display: none !important;
            }
        }

    </style>
</head>

<body>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=508959626314745&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=2589308277802123&ev=PageView&noscript=1"
    /></noscript>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DPBX7R"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="wrapper pre-sale">

    <div class="main-container">
        <div class="row">
            <div class="col">
                <div class="valentine-logo">
            <img src="/images/logo.png" alt="logo">
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col title-mobile">{!! $info->title !!}</div>
        </div>

        <div class="row main-content">

            <div class="col">
                <div>
                    <div class="desc">
                        <div class="social-image">
                            <picture>
                                <source srcset="/images/{{$info->image}}" type="image/webp">
                                <source srcset="/images/{{$info->image}}" type="image/png">
                                <img src="/images/{{$info->image}}" alt="" width="1167" height="704">
                            </picture>
                        </div>
                    </div>
                </div>

                <div class="col title">{!! $info->title !!}</div>
                <div class="col subtitle">{!! $info->text !!}</div>
                <div class="col description desc">{!! $info->description !!}</div>
            </div>

            <div class="col main-image">
                <img class="side-image" src="/images/{{$info->image}}" style="width: 100%">
            </div>
        </div>

        <div class="row" style="padding-bottom: 280px">
            <div class="col">
                <div class="social text-center">
                <div class="social-link">
                <div class="wepster-hash-stiobq" onclick="fbq('track', 'Subscribe');
                dataLayer.push({'event': 'bioolivenet', 'eventCategory': 'bioolive_userclicks_ru', 'eventAction': 'messenger_ru', 'eventLabel': 'messenger_ru'});"></div>
                </div>
                </div>
            </div>
        </div>

    </div>

    <div class="privacy-policy__link">
        <a href="/privacy-policy.html" target="_blank">
            Политика конфиденциальности
        </a>
    </div>
</div>
<script>
    $('.wrapper.pre-sale').css('backgroundImage','url(/images/{{$info->body_image}})')

    let patterns = [
        {text: "BioDeposit", classes: ['text-bio']},
        {text: "акционные цены", classes: ['text-bio']},
        {text: "цена после акции", classes: ['shares']},
        {text: "акция", classes: ['shares']},
    ];


    const marker = ( text, patterns ) => {
        return patterns.reduce( ( result, current ) => {
            let regexp = new RegExp(current.text, 'g');
        let style = current.classes.join(' ');

        return result.replace( regexp, `<span class="${ style }">${ current.text }</span>` );
    }, text );
    }

    let text = document.body.innerHTML;

    document.body.innerHTML = marker( text, patterns );

   // var height = $('.side-image').height();

    //width_image = $('.main-image').width();
    $(window).resize(function(){
//        var width_image_new = $('.main-image').width();
//        var new_height = $('.side-image').height();
//        if(width_image/width_image_new>0.9){
//            $('.side-image').height(height/(width_image/width_image_new));
//        }

//        var li_size = 100*height/new_height;
//        $('.title').css('font-size', '200%');
//        $('.subtitle').css('font-size', '200%');
//        $('.description ul li').css('font-size', ''+li_size+'%');

    })


</script>
</body>
</html>