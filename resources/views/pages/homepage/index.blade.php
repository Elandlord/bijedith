@extends('master')
@section('content')
    @include('pages.homepage.partials.banner')

    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid w-full max-w-6xl gap-6 md:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('behandelingen') }}" class="group rounded-2xl border border-brand-100 bg-white p-8 shadow-sm transition hover:shadow-md hover:border-brand-300">
                <div class="mb-4 inline-flex rounded-full bg-brand-100 p-3 text-brand-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h4c1.1 0 2 .9 2 2"/><path d="M14 4c0-1.1.9-2 2-2h4c1.1 0 2 .9 2 2v10c0 1.1-.9 2-2 2"/><path d="m10 10-6 6"/><path d="m20 16-6 6"/><path d="M12 12a2 2 0 1 0 4 0 2 2 0 1 0-4 0"/><path d="M6 20a2 2 0 1 0 4 0 2 2 0 1 0-4 0"/></svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-bijedith-black group-hover:text-brand-700 transition">Behandelingen</h3>
                <p class="mt-2 text-sm text-gray-600">Pedicurebehandelingen, gespecialiseerde voetzorg en praktische adviezen.</p>
            </a>

            <a href="{{ route('spa-arrangementen') }}" class="group rounded-2xl border border-brand-100 bg-white p-8 shadow-sm transition hover:shadow-md hover:border-brand-300">
                <div class="mb-4 inline-flex rounded-full bg-brand-100 p-3 text-brand-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.9C15.5 4.9 17 3.5 17 3.5s1.5 2.5-.8 6.3A7 7 0 0 1 11 20z"/><path d="M11 13V7.5"/><path d="M11 20v-6"/></svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-bijedith-black group-hover:text-brand-700 transition">Spa-arrangementen</h3>
                <p class="mt-2 text-sm text-gray-600">Ontspannende massages en luxe verwenbehandelingen.</p>
            </a>

            <a href="{{ route('tarieven') }}" class="group rounded-2xl border border-brand-100 bg-white p-8 shadow-sm transition hover:shadow-md hover:border-brand-300">
                <div class="mb-4 inline-flex rounded-full bg-brand-100 p-3 text-brand-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-bijedith-black group-hover:text-brand-700 transition">Tarieven</h3>
                <p class="mt-2 text-sm text-gray-600">Overzicht van behandelingen en bijbehorende kosten.</p>
            </a>
        </div>
    </section>

    @include('pages.homepage.partials.treatments')
    @include('pages.homepage.partials.appointments')
@endsection
