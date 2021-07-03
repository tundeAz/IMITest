<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>
        <link rel="shortcut icon" type="image/png" href="/images/favicon.ico"/>
        @yield('styles')
    </head>
    <body class="font-sans antialiased leading-none bg-gray-100 bg-right-top bg-no-repeat font-gray-900 bg-60 lg:bg-50" style="background-image:url('/images/bg.svg');">
        <header class="py-6">
            <div class="container flex items-end justify-between mx-auto">
                <a href="/">
                    <img class="h-8 md:h-auto" src="/images/logo.svg" alt="IMIconnect logo">
                </a>
                <nav
                  class="relative font-medium text-white"
                  x-data="{ open: false }"
                >
                    <button
                      @click="open = !open"
                      class="flex items-center md:hidden"
                    >
                      Menu <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 ml-1"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <ul
                      class="flex justify-end md:items-center"
                      :class="{ 'hidden md:flex': !open, 'flex flex-col absolute text-gray-700 bg-white right-0 top-0 mt-8 px-5 py-6 rounded shadow-md': open }"
                      @click.away="open = false"
                    >
                        <li class="mb-4 md:mb-0">
                            <a class="flex items-center" href="/">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 p-2 mr-3 text-white bg-purple-700 rounded md:hidden"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                              Home
                            </a>
                        </li>
                        <li class="mb-4 md:mb-0 md:ml-8">
                            <a class="flex items-center" href="/platform">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 p-2 mr-3 text-white bg-purple-700 rounded md:hidden"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                              Platform
                            </a>
                        </li>
                        <li class="mb-4 md:mb-0 md:ml-8">
                            <a class="flex items-center" href="/pricing">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 p-2 mr-3 text-white bg-purple-700 rounded md:hidden"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                              Pricing
                            </a>
                        </li>
                        <li class="md:ml-8">
                            <a class="flex items-center" href="/contact">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 p-2 mr-3 text-white bg-purple-700 rounded md:hidden"><path d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                              Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        @yield('content')

        <footer class="py-10 text-gray-700 border-t border-gray-300">
            <div class="container flex flex-col items-end justify-between mx-auto mb-10 md:flex-row">
                <nav class="w-full mb-6 md:mb-0">
                    <ul class="flex flex-col items-center justify-center md:flex-row md:justify-start">
                        <li class="mb-4 md:mb-0 md:mr-15">
                            <a class="hover:text-purple-700 focus:text-purple-700" href="/solutions">Platform</a>
                        </li>
                        <li class="mb-4 md:mb-0 md:mr-15">
                            <a class="hover:text-purple-700 focus:text-purple-700" href="/pricing">Pricing</a>
                        </li>
                        <li class="mb-4 md:mb-0 md:mr-15">
                            <a class="hover:text-purple-700 focus:text-purple-700" href="https://www.imimobile.com/" target="_blank" noopener noreferrer>IMImobile</a>
                        </li>
                        <li>
                            <a class="hover:text-purple-700 focus:text-purple-700" href="/contact">Contact</a>
                        </li>
                    </ul>                    
                </nav>
                <div class="flex justify-center w-full md:justify-end">
                    <img src="/images/logo.svg" alt="IMIconnect Logo" class="h-8">
                </div>
            </div>
            <div class="container flex justify-center mx-auto text-sm text-center md:justify-end md:text-right">
                <p class="">Copyright &copy; 2000 – {{ date('Y') }} | All Rights Reserved | <a href="#">Legal</a></p>
            </div>
        </footer>
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>