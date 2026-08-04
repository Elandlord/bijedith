<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beheer | Bij Edith</title>
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>
<body class="bg-gray-50">
<div class="min-h-screen">
    @auth
        <header class="border-b border-gray-200 bg-white px-4 py-4 sm:px-6 lg:px-8">
            <div class="mx-auto flex w-full max-w-5xl items-center justify-between">
                <a href="{{ route('admin.treatments.index') }}" class="text-lg font-display font-semibold text-bijedith-black">Beheer</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 hover:text-bijedith-black">Uitloggen</button>
                </form>
            </div>
        </header>
    @endauth

    <main class="px-4 py-10 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-5xl">
            @if (\Session::has('success'))
                <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                    {{ \Session::get('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
