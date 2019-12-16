<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Packtag') }} - Inserts made easy</title>

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

<body id="landing" class="font-pack text-pack_text antialiased leading-none px-8 sm:px-24 pt-6 bg-cover" style="background-image: url({{URL('/images/bg-mobile.png')}});">

    <!-- Header -->
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

    <!-- Hero -->
    <section class="mt-24">
        <div class="flex justify-between items-center">

            <div class="w-full">
                <h1 class="text-3xl sm:text-4xl font-semibold leading-relaxed">Build trust with your<br> customers</h1>
                <p class="w-full sm:w-2/3 min-w-0 text-lg font-medium leading-relaxed mt-8">It's almost always cheaper to retain your current customers than it is to constantly acquire new customers.</p>
                <div class="mt-10">
                    <a href="#" class="uppercase bg-pack_primary text-white text-sm font-semibold shadow-md px-6 py-2">Create your first insert</a>
                </div>
            </div>
            <img class="hidden sm:inline sm:w-1/2" src="{{URL('/images/hero_bg.png')}}">

        </div>
    </section>

    <!-- Testimonial -->
    <section class="mt-24">
        <div class="flex-row sm:flex">
            <div class="shadow-lg bg-white p-6 w-full">

                <div class="flex justify-between items-start">
                    <div class="flex">
                        <img src="https://randomuser.me/api/portraits/men/61.jpg" alt="user_1" class="w-16">
                        <div class="self-center ml-4">
                            <h1 class="font-medium">John Doe</h1>
                            <h2 class="text-pack_primary mt-2">CEO, PrettyDopeDesigns</h2>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current text-pack_primary w-12"><path d="M0 4v12h8c0 4.41-3.586 8-8 8v4c6.617 0 12-5.383 12-12V4H0zM20 4v12h8c0 4.41-3.586 8-8 8v4c6.617 0 12-5.383 12-12V4H20z"/></svg>
                </div>

                <p class="leading-relaxed mt-4">
                    “Our senior frontend developer was 70% faster in building React.js components thanks to VanGoux!”
                </p>

            </div>

            <div class="shadow-lg bg-white p-6 mt-6 sm:mt-0 sm:ml-6 w-full">

                <div class="flex justify-between items-start">
                    <div class="flex">
                        <img src="https://randomuser.me/api/portraits/women/82.jpg" alt="user_2" class="w-16">
                        <div class="self-center ml-4">
                            <h1 class="font-medium">Jane Goodman</h1>
                            <h2 class="text-pack_primary mt-2">Founder, ImpactNation</h2>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current text-pack_primary w-12"><path d="M0 4v12h8c0 4.41-3.586 8-8 8v4c6.617 0 12-5.383 12-12V4H0zM20 4v12h8c0 4.41-3.586 8-8 8v4c6.617 0 12-5.383 12-12V4H20z"/></svg>
                </div>

                <p class="leading-relaxed mt-4">
                    “It was awesome to see VanGoux turn our MVP designs into code within minutes.””
                </p>

            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="mt-24">
        <h1 class="uppercase text-2xl font-semibold">How Packtag works</h1>
        <div class="border-b-2 border-pack_primary mt-2 w-12"></div>

        <div class="flex-row sm:flex mt-6">
            <div class="bg-white shadow-lg p-4 bg-right-bottom bg-30 bg-no-repeat" style="background-image: url('{{URL('/images/DecorationJuju.png')}}');">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="uppercase font-semibold text-sm">Step 1</h1>
                        <p class="uppercase mt-4 text-pack_primary text-base font-medium">Upload Data</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-pack_primary w-12"><path d="M15.213 6.639c-.276 0-.546.025-.809.068C13.748 4.562 11.716 3 9.309 3c-2.939 0-5.32 2.328-5.32 5.199 0 .256.02.508.057.756a3.567 3.567 0 00-.429-.027C1.619 8.928 0 10.51 0 12.463S1.619 16 3.617 16H8v-4H5.5L10 7l4.5 5H12v4h3.213C17.856 16 20 13.904 20 11.32c0-2.586-2.144-4.681-4.787-4.681z"/></svg>
                </div>
                <p class="leading-relaxed font-medium mt-4">
                    Upload your customer data or connect your store
                </p>
            </div>

            <div class="bg-white shadow-lg p-4 mt-4 sm:mt-0 sm:ml-4 bg-right-bottom bg-30 bg-no-repeat" style="background-image: url('{{URL('/images/DecorationJuju.png')}}');">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="uppercase font-semibold text-sm">Step 2</h1>
                        <p class="uppercase mt-4 text-pack_primary text-base font-medium">Pick template</p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-pack_primary w-12"><path d="M19.398 7.415l-7.444-1.996L10.651.558c-.109-.406-.545-.642-.973-.529L.602 2.461c-.428.114-.686.538-.577.944l3.23 12.051c.109.406.544.643.971.527l3.613-.967-.492 1.838c-.109.406.149.83.577.943l8.11 2.174c.428.115.862-.121.972-.529l2.97-11.084c.108-.406-.15-.83-.578-.943zM1.633 3.631l7.83-2.096 2.898 10.818-7.83 2.096L1.633 3.631zm14.045 14.832L8.864 16.6l.536-2.002 3.901-1.047c.428-.113.688-.537.578-.943l-1.508-5.627 5.947 1.631-2.64 9.851z"/></svg>
                </div>
                <p class="leading-relaxed font-medium mt-4">
                    Upload your customer data or connect your store
                </p>
            </div>

            <div class="bg-white shadow-lg p-4 mt-4 sm:mt-0 sm:ml-4 bg-right-bottom bg-30 bg-no-repeat" style="background-image: url('{{URL('/images/DecorationJuju.png')}}');">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="uppercase font-semibold text-sm">Step 3</h1>
                        <p class="uppercase mt-4 text-pack_primary text-base font-medium">Generate</p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-pack_primary w-12"><path d="M11 0H3a1 1 0 00-1 1v12a1 1 0 001 1h5v2h2v-2H8.001v-2H10v-2H8v2H4V2h6v4h2V1a1 1 0 00-1-1zM8 7v1h2V6H9a1 1 0 00-1 1zm4 13h2v-2h-2v2zm0-12h2V6h-2v2zM8 19a1 1 0 001 1h1v-2H8v1zm9-13h-1v2h2V7a1 1 0 00-1-1zm-1 14h1a1 1 0 001-1v-1h-2v2zm0-8h2v-2h-2v2zm0 4h2v-2h-2v2z"/></svg>
                </div>
                <p class="leading-relaxed font-medium mt-4">
                    Upload your customer data or connect your store
                </p>
            </div>
        </div>
    </section>

    <!-- Use case -->
    <section class="mt-24">
        <h1 class="uppercase text-2xl font-semibold">Who is Packtag for</h1>
        <div class="border-b-2 border-pack_primary mt-2 w-12"></div>

        <div class="flex-row sm:flex mt-6">
            <div class="bg-white shadow-lg p-4 w-full">
                <div class="">
                    <div>
                        <p class="uppercase mt-4 text-pack_primary text-base font-semibold">eCommerce brands</p>
                    </div>
                </div>
                <p class="leading-relaxed font-medium mt-4">
                    a great way to level up your shipping and fulfillment strategy.
                </p>
            </div>

            <div class="bg-white shadow-lg p-4 mt-4 sm:mt-0 sm:ml-4 w-full">
                <div class="">
                    <div>
                        <p class="uppercase mt-4 text-pack_primary text-base font-semibold">Small Business</p>
                    </div>
                </div>
                <p class="leading-relaxed font-medium mt-4">
                    increase the exposure that the insert receives.
                </p>
            </div>

            <div class="bg-white shadow-lg p-4 mt-4 sm:mt-0 sm:ml-4 w-full">
                <div class="">
                    <div>
                        <p class="uppercase mt-4 text-pack_primary text-base font-semibold">Starups</p>
                    </div>
                </div>
                <p class="leading-relaxed font-medium mt-4">
                    The average conversion rate for package insert marketing programs is .35%.
                </p>
            </div>

        </div>
    </section>

    <!-- Story -->
    <section class="mt-24">
        <h1 class="uppercase text-2xl font-semibold">MON HISTOIRE</h1>
        <div class="border-b-2 border-pack_primary mt-2 w-12"></div>

        <div class="flex-row sm:flex mt-6">
            <div class="p-4 w-full">


                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-pack_primary w-10"><path d="M17.924 17.315c-.057.174-.193.367-.416.432-.161.047-5.488 1.59-5.652 1.633-.469.125-.795.033-1.009-.156-.326-.287-4.093-2.85-8.845-3.092-.508-.025-.259-1.951 1.193-1.951.995 0 3.904.723 4.255.371.271-.272.394-1.879-.737-4.683L4.438 4.232a1.045 1.045 0 011.937-.781L8.361 8.37c.193.48.431.662.69.562.231-.088.279-.242.139-.709L7.144 2.195A1.043 1.043 0 017.796.871a1.042 1.042 0 011.325.652l1.946 5.732c.172.504.354.768.642.646.173-.073.161-.338.115-.569l-1.366-5.471a1.045 1.045 0 112.027-.506l1.26 5.042c.184.741.353 1.008.646.935.299-.073.285-.319.244-.522l-.872-4.328a.95.95 0 011.86-.375l.948 4.711.001.001v.001l.568 2.825c.124.533.266 1.035.45 1.527 1.085 2.889.519 5.564.334 6.143z"/></svg>
                        <h1 class="font-semibold text-lg ml-2">Who am i?</h1>
                    </div>

                    <p class="mt-2 leading-relaxed text-justify">Hi! I’m Youssef ELMZELJI — passionate entrepeneur that loves user experience. Building things people want makes me happy!</p>
                    <p class="mt-4 leading-relaxed text-justify">I’ve started Packtag because I as an eCommerce brand owner, i know how special the unboxing moment is for shoppers. Including a package insert in the box means your message is part of that magic moment. Package inserts – especially nice ones – get read. Maybe it’s because they remind us of the gift cards that come along with presents.</p>
                </div>
            </div>

            <div class="p-4 w-full">

                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-pack_primary w-10"><path d="M19.753 10.909c-.624-1.707-2.366-2.726-4.661-2.726-.09 0-.176.002-.262.006l-.016-2.063 3.525-.607c.115-.019.133-.119.109-.231-.023-.111-.167-.883-.188-.976-.027-.131-.102-.127-.207-.109-.104.018-3.25.461-3.25.461l-.013-2.078c-.001-.125-.069-.158-.194-.156l-1.025.016c-.105.002-.164.049-.162.148l.033 2.307s-3.061.527-3.144.543c-.084.014-.17.053-.151.143.019.09.19 1.094.208 1.172.018.08.072.129.188.107l2.924-.504.035 2.018c-1.077.281-1.801.824-2.256 1.303-.768.807-1.207 1.887-1.207 2.963 0 1.586.971 2.529 2.328 2.695 3.162.387 5.119-3.06 5.769-4.715 1.097 1.506.256 4.354-2.094 5.98-.043.029-.098.129-.033.207l.619.756c.08.096.206.059.256.023 2.51-1.73 3.661-4.515 2.869-6.683zm-7.386 3.188c-.966-.121-.944-.914-.944-1.453 0-.773.327-1.58.876-2.156a3.21 3.21 0 011.229-.799l.082 4.277c-.385.131-.799.185-1.243.131zm2.427-.553l.046-4.109c.084-.004.166-.01.252-.01.773 0 1.494.145 1.885.361.391.217-1.023 2.713-2.183 3.758zm-8.95-7.668a.196.196 0 00-.196-.145h-1.95a.194.194 0 00-.194.144L.008 16.916c-.017.051-.011.076.062.076h1.733c.075 0 .099-.023.114-.072l1.008-3.318h3.496l1.008 3.318c.016.049.039.072.113.072h1.734c.072 0 .078-.025.062-.076-.014-.05-3.083-9.741-3.494-11.04zm-2.618 6.318l1.447-5.25 1.447 5.25H3.226z"/></svg>
                        <h1 class="font-semibold text-lg ml-2">What’s up with the name?</h1>
                    </div>
                    <p class="mt-2 leading-relaxed text-justify">Packtag is a combinition of two words, “Packaging ” and “Tag”.<br> We’re already shipping the box. It’s unlikely that the few extra grams of weight from the package insert are going to cost us any more, so why not exploit this.</p>
                    <p class="mt-4 leading-relaxed text-justify">Package inserts are an easy way to increase loyalty and attract new customers. They work even for small online crafters and shops because they’re so affordable. All you need is a few seconds and Packtag will complete the reste.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-24 py-6">
        <div class="flex justify-between items-center">
            <img src="{{URL('/images/logo.png')}}" alt="Packtage" class="w-32">
            <div class="flex">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-6"><path d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z"/></svg>
                </a>
                <a href="#" class="ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" class="w-6"><path d="M17.946 5.29a6.606 6.606 0 00-.418-2.185 4.412 4.412 0 00-1.039-1.594A4.412 4.412 0 0014.895.472a6.606 6.606 0 00-2.184-.418C11.75.01 11.444 0 9 0S6.25.01 5.29.054a6.606 6.606 0 00-2.185.418A4.412 4.412 0 001.51 1.511 4.412 4.412 0 00.472 3.105a6.606 6.606 0 00-.418 2.184C.01 6.25 0 6.556 0 9s.01 2.75.054 3.71a6.606 6.606 0 00.418 2.185 4.412 4.412 0 001.039 1.594 4.411 4.411 0 001.594 1.039 6.606 6.606 0 002.184.418C6.25 17.99 6.556 18 9 18s2.75-.01 3.71-.054a6.606 6.606 0 002.185-.418 4.602 4.602 0 002.633-2.633 6.606 6.606 0 00.418-2.184C17.99 11.75 18 11.444 18 9s-.01-2.75-.054-3.71zm-1.62 7.347a4.978 4.978 0 01-.31 1.67 2.98 2.98 0 01-1.708 1.709 4.979 4.979 0 01-1.671.31c-.95.043-1.234.052-3.637.052s-2.688-.009-3.637-.052a4.979 4.979 0 01-1.67-.31 2.788 2.788 0 01-1.036-.673 2.788 2.788 0 01-.673-1.035 4.978 4.978 0 01-.31-1.671c-.043-.95-.052-1.234-.052-3.637s.009-2.688.052-3.637a4.979 4.979 0 01.31-1.67 2.788 2.788 0 01.673-1.036 2.788 2.788 0 011.035-.673 4.979 4.979 0 011.671-.31c.95-.043 1.234-.052 3.637-.052s2.688.009 3.637.052a4.979 4.979 0 011.67.31 2.788 2.788 0 011.036.673 2.788 2.788 0 01.673 1.035 4.979 4.979 0 01.31 1.671c.043.95.052 1.234.052 3.637s-.009 2.688-.052 3.637zM9 4.378A4.622 4.622 0 1013.622 9 4.622 4.622 0 009 4.378zM9 12a3 3 0 113-3 3 3 0 01-3 3zm5.884-7.804a1.08 1.08 0 11-1.08-1.08 1.08 1.08 0 011.08 1.08z"/></svg>
                </a>
            </div>
        </div>
        <div class="text-black font-medium text-sm flex justify-center mt-4">
            <a href="#">Contact</a>
            <a href="#" class="ml-6">Feedback</a>
            <a href="#" class="ml-6">Join our Slack</a>
            <a href="#" class="ml-6">Terms</a>
        </div>
    </footer>

    <!-- @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif -->




</body>
</html>
