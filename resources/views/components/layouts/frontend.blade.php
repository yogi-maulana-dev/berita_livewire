<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hospital</title>

    <meta name="title" content="Taring.co | Berita Inspirasi Dari Lampung" />
    <meta name="description"
        content="LAMPUNGPRO - Portal Berita Inspirasi dari Lampung yang menyajikan informasi terbaru, terhangat, dan terpercaya" />


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147228565-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-147228565-1');
    </script>

    <!-- Google AdSense -->
    <!--<script data-ad-client="ca-pub-4970187788660044" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
    <script async src="../pagead2.googlesyndication.com/pagead/js/ff739.txt?client=ca-pub-2273045459951353"
        crossorigin="anonymous"></script>

    <!-- Iklan AdSense -->
    <script src="../fzgrpqktmq.com/script.js"></script>

    <!-- Start Alexa Certify Javascript -->
    <!-- <script type="text/javascript">
        _atrk_opts = {
            atrk_acct: "TrVwx1bYmg20IV",
            domain: "Taring.co",
            dynamic: true
        };
        (function() {
            var as = document.createElement('script');
            as.type = 'text/javascript';
            as.async = true;
            as.src = "https://certify-js.alexametrics.com/atrk.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(as, s);
        })();
    </script>
    <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=TrVwx1bYmg20IV" style="display:none" height="1" width="1" alt="" /></noscript> -->
    <!-- End Alexa Certify Javascript -->

    <link rel="icon" href="frontend/assets/img/icon.png">
    <link rel="stylesheet" href="frontend/assets/css/generated.css">
    <link rel="stylesheet" href="frontend/assets/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="frontend/assets/css/tabler-icons.min.css">
    <script defer src="frontend/assets/js/tailwind.theme.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">
    <script src="../fzgrpqktmq.com/script.js"></script>
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        #description p {
            margin-block-start: 1em;
            margin-block-end: 1em;
        }
    </style>

    <!-- PushAlert -->
    <script type="text/javascript">
        (function(d, t) {
            var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            g.src = "../cdn.pushalert.co/integrate_040fe19ff45952c33252a0c7d9bf1808.js";
            s.parentNode.insertBefore(g, s);
        }(document, "script"));
    </script>
    <!-- End PushAlert -->

    {{--  @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}

    @livewireStyles

</head>

<body>

    {{ $slot }}
    @livewireScripts
</body>


</html>
