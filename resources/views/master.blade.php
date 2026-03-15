<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bij Edith | Pedicurepraktijk Edith Groothuis in Lichtenvoorde</title>
    <meta name="theme-color" content="#67B7D0">
    <meta name="keywords" content="Pedicure Lichtenvoorde, medisch pedicure Lichtenvoorde, Spa">
    <meta name="description" content="BijEdith is een pedicurepraktijk in Lichtenvoorde. Voor allround pedicurebehandelingen of gespecialiseerde voetzorg ben je welkom in salon 'Bij Edith'.">
    <link rel="icon" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://widget.salonized.com">
    <link rel="preconnect" href="https://static-widget.salonized.com">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap"></noscript>
    <link rel="preload" href="{{ mix('/css/app.css') }}" as="style">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NG5XWRCFNG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-NG5XWRCFNG');
    </script>
</head>
<body>
<div id="app" class="min-h-screen bg-gradient-to-b from-brand-50 via-white to-white">
    @if (\Session::has('success'))
        @include('components.project.messages.alert', [
            'message' => \Session::get('success'),
            'title'   => 'Gelukt!',
        ])
    @endif

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</div>

<div class="salonized-booking" data-company="avMXRDrsiQtTjmmxqfcCpTpk" data-color="#4f9fb8" data-language="nl" data-outline="shadow"></div>
<script defer src="{{ mix('/js/app.js') }}"></script>
<script defer src="https://static-widget.salonized.com/loader.js"></script>
</body>
</html>
