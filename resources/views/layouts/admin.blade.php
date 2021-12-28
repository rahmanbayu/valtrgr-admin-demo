<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://unpkg.com/alpinejs@3.3.4/dist/cdn.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        /* always hidden */
        [x-cloak=""] {
            display: none;
        }

        [x-cloak="fixed"] {
            display: none;
        }

        @media screen and (max-width: 768px) {
            [x-cloak="navbar"] {
                width: 100%
            }
        }

        @media screen and (min-width: 768px) {
            [x-cloak="navbar"] {
                width: 80%
            }
        }

        @media screen and (max-width: 768px) {
            [x-cloak="right"] {
                width: 100%
            }
        }

        @media screen and (min-width: 768px) {
            [x-cloak="right"] {
                width: 80%
            }
        }

        @media screen and (max-width: 768px) {
            [x-cloak="left"] {
                width: 0%
            }
        }

        @media screen and (min-width: 768px) {
            [x-cloak="left"] {
                width: 20%
            }
        }

        /* hidden on mobile/smaller screens */
        @media screen and (max-width: 768px) {
            [x-cloak="mobile"] {
                display: none;
            }
        }

        @media screen and (max-width: 1024px) {
            [x-cloak="tablet"] {
                display: none;
            }
        }

    </style>
    <title>@yield('title')</title>
    @stack('top')
</head>

<body class="flex bg-gray-300 custom-scrollbar-main overflow-y-scroll" x-data="{ menu: false }">
    @include('layouts.admin-sidebar')

    {{-- right --}}
    <div x-cloak="right" x-bind:class="menu ? 'lg:w-full w-full' : 'lg:w-4/5 w-full'" class="transition-all duration-300">
        @include('layouts.admin-navbar')
        @yield('content')
    </div>
    @stack('bottom')
</body>

</html>
