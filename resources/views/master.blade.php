<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.png">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Web site created using create-react-app">
    <link rel="apple-touch-icon" href="logo192.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bij Edith</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>
<body>
@include('components.navbar')
<div id="app">
    @yield('content')
</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
