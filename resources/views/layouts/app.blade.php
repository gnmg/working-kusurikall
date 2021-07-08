<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KusuriKall</title>

    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


    <!-- <script src="/js/app.js" defer></script> -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<link href="{{ asset('css/timepicker.min.css') }}" rel="stylesheet">

<script type="text/javascript" src="{{ asset('js/timepicker.min.js') }}"></script>

</head>

<body class="min-h-screen bg-gray-100 font-body">
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

     $(function () {
    if($('.bs-timepicker').length > 0 ){
                $('.bs-timepicker').timepicker();         
         }
  });

</script>
</body>

</html>