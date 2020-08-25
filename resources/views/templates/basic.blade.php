<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Test</title>
    @include('layouts.chank.header')
    <title>Bioolive</title>
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
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="images/favicon/apple-icon.png">
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
            window.LEELOO_INIT = { id: '5dc53308750c5e000c15a678' };
            var js = document.createElement('script');
            js.src = 'https://app.leeloo.ai/init.js';
            js.async = true;
            document.getElementsByTagName('head')[0].appendChild(js);
        }; LEELOO();
    </script>
    <!-- end leeloo init code -->
    <script>window.LEELOO_LEADGENTOOLS = (window.LEELOO_LEADGENTOOLS || []).concat('stiobq');</script>

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
<!-- End Google Tag Manager (noscript) -->
@include('layouts.chank.navbar')
<div class="wrapper pre-sale">
    <div class="container">
        <div class="main-info main-content">
            <div class="desc">
                <div class="valentine-logo">
                    <img src="/images/logo.png" alt="logo">
                </div>
                <p>УНИКАЛЬНЫЙ ЭКОПРОЕКТ: ТРАДИЦИОННЫЙ БИЗНЕС И НОВЫЕ ТЕХНОЛОГИИ</p>
                <div class="social-image">
                    <picture>
                        <source srcset="/img/pre-sale-img.webp?v=1" type="image/webp">
                        <source srcset="/img/pre-sale-img.png?v=1" type="image/png">
                        <img src="/images/pre-sale-img.webp?v=1" alt="" width="1167" height="704">
                    </picture>
                </div>
                <div class="main-content__desc">
                    <strong>Зарабатывайте, помогая планете</strong>
                    <br>
                    <br>
                    С проектом <b>BioDeposit</b> Вы можете стать владельцем оливковых деревьев, помогать планете и ежегодно получать прибыль с продажи урожая.
                    <br>
                    <br>
                    Воспользуйтесь наиболее выгодным предложением — приобретайте молодые деревья 2020 года по предпродажной стоимости <b>65$</b><br>
                    В конце июля, когда молодые деревья появятся на платформе, их цена возрастет до <b class="red">95$</b>.
                    <span>
            Выберите удобный мессенджер и узнайте:
          </span>
                </div>
                <ul>
                    <li>
                        Технические и юридические гарантии, сроки окупаемости
                    </li>
                    <li>
                        Как получить молодое дерево 2020 года по выгодной цене?
                    </li>
                    <li>
                        Как это может быть полезно Вам и планете одновременно?
                    </li>
                    <li>
                        Как происходит формирование цены на деревья и оливковое масло?
                    </li>
                </ul>
            </div>
            <div class="social">
                <div class="social-link">
                    <div class="wepster-hash-stiobq" onclick="fbq('track', 'Subscribe');
                    dataLayer.push({'event': 'bioolivenet', 'eventCategory': 'bioolive_userclicks_ru', 'eventAction': 'messenger_ru', 'eventLabel': 'messenger_ru'});"></div>
                </div>
            </div>
        </div>
        <div class="main-image">
            <picture>
                <source srcset="/images/pre-sale-img.webp?v=1" type="image/webp">
                <source srcset="/images/pre-sale-img.png?v=1" type="image/png">
                <img src="/images/pre-sale-img.webp?v=1" alt="" width="1167" height="704">
            </picture>
        </div>
    </div>
    <div class="privacy-policy__link">
        <a href="/privacy-policy.html" target="_blank">
            Политика конфиденциальности
        </a>
    </div>
</div>

{{--DELETE--}}
{{--<div class="wrapper">--}}
{{--<div class="container-fluid">--}}


{{--<div class="row" style="padding-top: 100px">--}}

{{--<div class="col-md">--}}
{{--<div class="desc" style="padding-top: 60px">--}}
{{--<div class="logo"> <img src="{{'images/logo.png'}}" style="max-width: 45%; padding-left: 60px"></div>--}}
{{--<div class="titls" style="padding-top: 50px; padding-left: 60px">--}}
{{--{!! $info->title !!}--}}
{{--</div>--}}

{{--<div class="main-content__desc col-md" style="padding-left: 60px">--}}
{{--<br>--}}
{{--{!! $info->description !!}--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--<div class="col-md main-image" style="padding-top: 50px">--}}
{{--<img src="{{'images/main-img-tree.jpg'}}" style="width: 100%">--}}
{{--</div>--}}

{{--@if($info->video_status == 1)--}}
{{--<div class="col-md-12 text-center" style="margin-top: 20px">--}}
{{--@youtube($info->youtube, ['width'=>560, 'height'=>315])--}}
{{--</div>--}}
{{--@endif--}}

{{--<div class="col-md-12">--}}
{{--<a href="/privacy-policy.html" target="_blank">--}}
{{--Политика конфиденциальности--}}
{{--</a>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}



</body>
</html>