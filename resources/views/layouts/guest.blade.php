<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/frontend/app.css') }}">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @stack('styles')
    @livewireStyles
</head>

<body class="font-body">

    @include('layouts.frontend.navbar')

    {{ $slot }}

    @include('layouts.frontend.footer')

    <!-- Scripts -->
    @livewireScripts
    @stack('scripts')
    <script src="{{ asset('js/frontend/app.js') }}"></script>

    <!-- Browser Sync -->
    @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>"
                .replace("HOST", location.hostname));
        </script>
    @endif
    <script>
        feather.replace()
    </script>
    <script>
        if ("loading" in HTMLImageElement.prototype) {
            var images = document.querySelectorAll('img[loading="lazy"]');
            var sources = document.querySelectorAll("source[data-srcset]");
            sources.forEach(function(source) {
                source.srcset = source.dataset.srcset;
            });
            images.forEach(function(img) {
                img.src = img.dataset.src;
            });
        } else {
            var script = document.createElement("script");
            script.src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js";
            document.body.appendChild(script);
        }
    </script>
</body>

</html>
