<html lang="nl">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-86938202-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-86938202-2');
    </script>
    <meta charset="utf-8">
    <link rel="icon" href="/public/favicon.ico">
    <meta name="theme-color" content="#67B7D0">
    <meta name="keywords" content="Pedicure Lichtenvoorde, medisch pedicure Lichtenvoorde, Spa">
    <meta name="description" content="BijEdith is een pedicurepraktijk in Lichtenvoorde. Voor allround pedicurebehandelingen of gespecialiseerde voetzorg ben je welkom in salon 'Bij Edith'.">
    <link rel="manifest" href="/public/mix-manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bij Edith | Pedicurepraktijk Edith Groothuis in Lichtenvoorde</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preload" href="{{ mix('/css/app.css') }}" as="style">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
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

<script defer src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
