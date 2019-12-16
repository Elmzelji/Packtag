<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,500,700&display=swap" rel="stylesheet">

    <style type="text/css">
        @media (min-width:641px) {
            #landing {
                background-image: url('{{URL('/images/BackgroundDecor.png')}}') !important;
            }
        }
    </style>

</head>
<!-- <body class="bg-gray-100 h-screen antialiased leading-none"> -->
<body id="landing" class="h-screen font-pack text-pack_text antialiased leading-none px-8 sm:px-24 pt-6 bg-cover" style="background-image: url({{URL('/images/BackgroundDecor.png')}});">
    <div id="app">
        <header class="flex justify-between items-center">
            <a href="{{URL('/')}}">
                <img src="{{URL('/images/logo.png')}}" class="w-40">
            </a>
            <div class="flex items-center">
                @guest
                    <div class="hidden sm:flex mr-4">
                        <a href="#" class="font-medium text-sm">How it works</a>
                        <a href="#" class="ml-2 font-medium text-sm">Features</a>
                        <a href="#" class="ml-2 font-medium text-sm">Use cases</a>
                    </div>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="uppercase bg-pack_primary text-white text-sm font-semibold shadow-md px-6 py-2"> Get started</a>
                    @endif
                @else
                    <a href="{{route('home')}}">
                        <span class="text-pack_text text-sm pr-4">{{ Auth::user()->name }}</span>
                    </a>

                    <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-pack_text text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </header>

        @yield('content')

        <footer class="py-6 flex justify-center">
            <p class="flex items-center">
                Made with 

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-pink-300 w-4 mx-2"><path d="M17.19 4.155c-1.672-1.534-4.383-1.534-6.055 0L10 5.197 8.864 4.155c-1.672-1.534-4.382-1.534-6.054 0-1.881 1.727-1.881 4.52 0 6.246L10 17l7.19-6.599c1.88-1.726 1.88-4.52 0-6.246z"/></svg>

                by <a href="#" class="ml-2">Prototech Team</a>
            </p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
