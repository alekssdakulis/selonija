<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/assets/favicon.ico">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/lv_LV/sdk.js#xfbml=1&version=v18.0"></script>
    </head>
    <body class="text-gray-900 antialiased text-[15px]">
        @yield('navigation')
        @yield('landing')
        @yield('about')
        @yield('gallery')
        @yield('calendar')
        @yield('contacts')
        @yield('facebook-embed')
        @yield('map')

        @yield('privacy-policy')
        @yield('terms-of-service')
    </body>
</html>
