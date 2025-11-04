<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="text-gray-900 font-roboto antialiased text-[15px]">
        @yield('navigation')
        @yield('landing')
        <!--@yield('tester')-->
        @yield('about')
        @yield('gallery')
        @yield('calendar')
        <!--@yield('body2')-->
    </body>
</html>
