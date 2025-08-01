<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
            <nav class="flex items-center justify-end gap-4">
                <a href="{{ url('/') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border {{ request()->is('/') ? 'border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]' : 'border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A]' }} rounded-sm text-sm leading-normal">
                    Home
                </a>
                <a href="{{ route('about') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border {{ request()->routeIs('about') ? 'border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]' : 'border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A]' }} rounded-sm text-sm leading-normal">
                    About
                </a>
                <a href="{{ route('services') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border {{ request()->routeIs('services') ? 'border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]' : 'border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A]' }} rounded-sm text-sm leading-normal">
                    Services
                </a>
                <a href="{{ route('contact') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border {{ request()->routeIs('contact') ? 'border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]' : 'border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A]' }} rounded-sm text-sm leading-normal">
                    Contact
                </a>
            </nav>
        </header>

        <main class="flex-1 w-full lg:max-w-4xl max-w-[335px]">
            <div class="bg-white dark:bg-[#161615] rounded-lg shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] p-6 lg:p-8">
                @yield('content')
            </div>
        </main>

        <footer class="w-full lg:max-w-4xl max-w-[335px] text-sm text-gray-600 dark:text-gray-400 text-center mt-8">
            <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
        </footer>
    </body>
</html>