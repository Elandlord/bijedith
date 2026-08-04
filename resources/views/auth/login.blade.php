@extends('admin.layout')
@section('content')
    <div class="mx-auto max-w-sm rounded-2xl border border-brand-100 bg-white p-8 shadow-sm">
        <h1 class="mb-6 text-2xl font-display font-semibold text-bijedith-black">Inloggen</h1>

        @if ($errors->any())
            <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
                <input id="password" type="password" name="password" required
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
            </div>

            <label class="flex items-center gap-2 text-sm text-gray-600">
                <input type="checkbox" name="remember">
                Onthoud mij
            </label>

            <button type="submit" class="brand-btn w-full justify-center">Inloggen</button>
        </form>
    </div>
@endsection
