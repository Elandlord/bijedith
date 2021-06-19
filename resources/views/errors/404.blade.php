@extends('master')
@section('content')
<div class="container pt-40 pb-32">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">Deze pagina is niet gevonden</span>
            <a href="{{ route('home') }}">
                <span class="block text-bijedith-fresh-blue hover:text-bijedith-fresh-blue-darker transition duration-150">Ga terug naar de homepage</span>
            </a>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('home') }}" class="btn">
                    Terug naar de homepage
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
