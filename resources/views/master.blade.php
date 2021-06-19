<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-86938202-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-86938202-2');
    </script>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.png">
    <meta name="theme-color" content="#67B7D0">
    <meta name="keywords" content="Pedicure Lichtenvoorde, medisch pedicure Lichtenvoorde, Spa">
    <meta name="description" content="BijEdith is een pedicurepraktijk in Lichtenvoorde. Voor allround pedicurebehandelingen of gespecialiseerde voetzorg ben je welkom in salon 'Bij Edith'.">
    <link rel="apple-touch-icon" href="logo192.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bij Edith | Pedicurepraktijk Edith Groothuis in Lichtenvoorde</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div id="app">
    @if (\Session::has('success'))
        @include('components.project.messages.alert', [
            'message' => \Session::get('success'),
            'title'   => 'Gelukt!',
        ])
    @endif
    @include('components.navbar')
        @yield('content')
    @include('components.footer')
</div>

<script defer src="{{ mix('/js/app.js') }}"></script>
<script src="/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
