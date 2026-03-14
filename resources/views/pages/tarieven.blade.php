@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg> Prijzen',
        'title' => 'Tarieven',
        'subtitle' => 'Overzicht van alle behandelingen en bijbehorende kosten.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-4xl space-y-10">

            <div class="rounded-2xl border border-brand-100 bg-white shadow-sm">
                <div class="border-b border-brand-100 bg-brand-50 px-6 py-4 rounded-t-2xl">
                    <h2 class="text-lg font-display font-semibold text-bijedith-black">Pedicurebehandelingen</h2>
                </div>
                <div class="divide-y divide-brand-50">
                    <div class="flex items-center justify-between px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Pedicurebehandeling (standaard)</p>
                            <p class="mt-1 text-xs text-gray-500">Volledige behandeling inclusief nagelverzorging, eelt en crème</p>
                        </div>
                        <span class="ml-4 whitespace-nowrap text-sm font-semibold text-brand-700">€ 45,-</span>
                    </div>
                    <div class="flex items-center justify-between px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Pedicurebehandeling (kort)</p>
                            <p class="mt-1 text-xs text-gray-500">Korte behandeling voor tussentijds onderhoud</p>
                        </div>
                        <span class="ml-4 whitespace-nowrap text-sm font-semibold text-brand-700">€ 35,-</span>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-brand-100 bg-white shadow-sm">
                <div class="border-b border-brand-100 bg-brand-50 px-6 py-4 rounded-t-2xl">
                    <h2 class="text-lg font-display font-semibold text-bijedith-black">Spa-arrangementen</h2>
                </div>
                <div class="divide-y divide-brand-50">
                    <div class="flex items-center justify-between px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Klassieke voet- en onderbeenmassage</p>
                            <p class="mt-1 text-xs text-gray-500">Stevige massage van circa 30 minuten</p>
                        </div>
                        <span class="ml-4 whitespace-nowrap text-sm font-semibold text-brand-700">€ 45,-</span>
                    </div>
                    <div class="flex items-center justify-between px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Klassieke voet- en onderbeenmassage</p>
                            <p class="mt-1 text-xs text-gray-500">Aansluitend aan een pedicurebehandeling</p>
                        </div>
                        <span class="ml-4 whitespace-nowrap text-sm font-semibold text-brand-700">€ 35,-</span>
                    </div>
                    <div class="flex items-center justify-between px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Sparkling-arrangement</p>
                            <p class="mt-1 text-xs text-gray-500">Luxe verwenbehandeling voor twee personen (per persoon)</p>
                        </div>
                        <span class="ml-4 whitespace-nowrap text-sm font-semibold text-brand-700">€ 70,-</span>
                    </div>
                </div>
            </div>

            <div class="mt-10 rounded-2xl border border-brand-100 bg-brand-50 p-6 text-center lg:p-10">
                <h3 class="text-xl font-display font-semibold text-bijedith-black">Interesse in een behandeling?</h3>
                <p class="mx-auto mt-3 max-w-md text-sm text-gray-600">Plan direct een afspraak of neem contact op voor meer informatie.</p>
                <div class="mt-6 flex flex-wrap justify-center gap-3">
                    <button type="button" class="brand-btn salonized-open">Plan afspraak</button>
                    <a class="brand-btn-outline" href="{{ route('contact') }}">Contactgegevens</a>
                </div>
            </div>

        </div>
    </section>
@endsection
