@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10h12M4 14h12M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12a7.9 7.9 0 0 0 7.8 8 7.7 7.7 0 0 0 5.2-2"/></svg> Prijzen',
        'title' => 'Tarieven',
        'subtitle' => 'Overzicht van alle behandelingen en bijbehorende kosten.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto mb-8 max-w-4xl">
            <p class="rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm leading-relaxed text-amber-800">De salon heeft geen ruimte voor nieuwe vaste klanten. Voor een korte incidentele behandeling kunt u een afspraak plannen middels het online boekingsysteem.</p>
        </div>
        <div class="mx-auto flex w-full max-w-4xl justify-center">
            <iframe src="https://groothuis.salonized.com/services?layout=embed" class="w-full rounded-2xl border border-brand-100 shadow-sm" style="max-width: 700px; height: 900px; border: none;"></iframe>
        </div>
    </section>
@endsection
