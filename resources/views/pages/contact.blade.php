@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg> Contact',
        'title' => 'Contact & afspraak',
        'subtitle' => 'Maak een afspraak via de boekingsknop, of neem contact op via e-mail.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid w-full max-w-6xl gap-8 lg:grid-cols-2">
            <div class="rounded-3xl border border-brand-100 bg-white p-6 shadow-sm lg:p-10">
                <h2 class="text-2xl font-display font-semibold text-bijedith-black">Salon Bij Edith</h2>
                <p class="mt-4 text-sm leading-relaxed text-gray-600">Pedicurepraktijk in Lichtenvoorde voor allround pedicurebehandelingen, gespecialiseerde voetzorg en ontspannende spa-arrangementen.</p>
                <dl class="mt-6 space-y-4 text-sm text-gray-600">
                    <div>
                        <dt class="font-semibold text-gray-900">E-mail</dt>
                        <dd class="mt-1"><a class="text-brand-700 transition hover:text-brand-800" href="mailto:info@bijedith.nl">info@bijedith.nl</a></dd>
                    </div>
                </dl>
                <div class="mt-8">
                    <button type="button" class="brand-btn salonized-open">Plan afspraak</button>
                </div>
            </div>

            <figure class="overflow-hidden rounded-3xl img-zoom">
                <img class="lazyload h-full w-full object-cover" data-src="/assets/pictures/DCM_0020-pichi.png" alt="Salon Bij Edith" />
            </figure>
        </div>
    </section>
@endsection
