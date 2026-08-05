@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => 'Beheer',
        'title' => 'Inloggen',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-md rounded-2xl border border-brand-100 bg-white p-6 shadow-sm">
            @if ($errors->any())
                <ul class="mb-6 space-y-2 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-base text-amber-900">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form class="space-y-4" method="POST" action="{{ route('login') }}">
                @csrf

                <label class="block">
                    <span class="text-base font-medium text-gray-900">E-mailadres</span>
                    <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="email" name="email" value="{{ old('email') }}" required autofocus>
                </label>

                <label class="block">
                    <span class="text-base font-medium text-gray-900">Wachtwoord</span>
                    <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="password" name="password" required>
                </label>

                <label class="flex items-center gap-3 text-base text-gray-600">
                    <input class="h-4 w-4" type="checkbox" name="remember" value="1">
                    <span>Onthoud mij</span>
                </label>

                <button class="brand-btn" type="submit">Inloggen</button>
            </form>
        </div>
    </section>
@endsection
