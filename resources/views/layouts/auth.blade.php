<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <meta name="description"
        content="{{ config('app.name') }} created by emnizaar">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="{{ config('app.name') }} created by emnizaar">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="{{ asset('/') }}/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}/assets/media/favicons/apple-touch-icon-180x180.png">

    <link rel="stylesheet" id="css-main" href="{{ asset('/') }}/assets/css/codebase.min.css">
    @stack('styles')
</head>

<body>
    <div id="page-container" class="main-content-boxed">

        <main id="main-container">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('/') }}/assets/_js/main/app.js"></script>
    <script src="{{ asset('/') }}/assets/js/codebase.app.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/lib/jquery.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    @stack('scripts')
</body>
</html>
