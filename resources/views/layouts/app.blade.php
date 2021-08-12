<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204286431-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-204286431-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Tag Manager -->
    <!-- <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K79J7JD');
    </script> -->
    <!-- End Google Tag Manager -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KusuriKall</title>

    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


    <!-- <script src="/js/app.js" defer></script> -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link href="{{ asset('css/timepicker.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('js/timepicker.min.js') }}"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/60d89d8d7f4b000ac039cc8c/1f972esvh';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XY58M9JFJS"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-XY58M9JFJS');
    gtag('config', 'AW-768058142');
    </script> -->
    <!-- Event snippet for Kusuri-Subscribe conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <!-- <script>
    function gtag_report_conversion(url) {
        var callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-768058142/2K18CK2k8OQCEJ7Gnu4C',
            'event_callback': callback
        });
        return false;
    }
    </script> -->


</head>

<body class="min-h-screen bg-gray-100 font-body">
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K79J7JD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <div id="app">

        <div class="flex flex-col md:flex-row">

            @include('includes.sidebar')

            <div class="w-full md:flex-1">
                <!-- <nav class="justify-end hidden h-16 p-4 pr-16 mb-10 bg-white shadow-md md:flex">
                    <a href="/" class="block mt-0 mr-10 text-teal-600 lg:inline-block lg:mt-0">
                    {{ __('lang.top') }}
                    </a>
                    <a href="/contact" class="block mt-0 mr-10 text-teal-600 lg:inline-block lg:mt-0">
                    {{ __('lang.contact_us') }}
                    </a>
                    <div class="block mt-0 mr-10 text-teal-600 dropdown-menu dropdown-menu-right lg:inline-block lg:mt-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('lang.logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </nav> -->
                <main>
                    <!-- Replace with your content -->

                    @yield('content')

                    <!-- /End replace -->
                </main>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <script type="text/javascript">
    $(function() {
        if ($('.bs-timepicker').length > 0) {
            $('.bs-timepicker').timepicker();
        }
    });
    </script>
</body>

</html>