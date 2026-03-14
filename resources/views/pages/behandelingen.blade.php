@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h4c1.1 0 2 .9 2 2"/><path d="M14 4c0-1.1.9-2 2-2h4c1.1 0 2 .9 2 2v10c0 1.1-.9 2-2 2"/><path d="m10 10-6 6"/><path d="m20 16-6 6"/><path d="M12 12a2 2 0 1 0 4 0 2 2 0 1 0-4 0"/><path d="M6 20a2 2 0 1 0 4 0 2 2 0 1 0-4 0"/></svg> Voetzorg',
        'title' => 'Pedicurebehandelingen',
        'subtitle' => 'Hieronder zie je een selectie van behandelingen.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-6xl">
            <div class="grid gap-6 md:grid-cols-2">
                @forelse($pedicureprocedures as $procedure)
                    @php $procedure = (object) $procedure; @endphp
                    <article class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm img-zoom">
                        <img data-src="{{ $procedure->img }}" class="lazyload h-64 w-full object-cover" alt="" />
                        <div class="space-y-4 p-6">
                            <h3 class="text-2xl font-display font-semibold text-bijedith-black">{{ $procedure->name }}</h3>
                            <div class="text-sm leading-relaxed text-gray-600">{!! $procedure->description !!}</div>
                            <a href="{{ route('tarieven') }}" class="brand-btn">Bekijk tarieven</a>
                        </div>
                    </article>
                @empty
                @endforelse
            </div>

            <div class="mt-14 grid gap-8 lg:grid-cols-2">
                <article class="rounded-2xl border border-brand-100 bg-white p-6">
                    <h3 class="text-2xl font-display font-semibold text-bijedith-black">Algemene adviezen</h3>
                    <ul class="content-list mt-5">
                        <li>Was je voeten dagelijks met lauw water en weinig zeep.</li>
                        <li>Droog goed af, vooral tussen de tenen.</li>
                        <li>Knip de nagels recht af.</li>
                        <li>Smeer de voeten regelmatig in, maar niet tussen de tenen.</li>
                        <li>Draag schone katoenen sokken zonder knellende naden.</li>
                        <li>Zorg voor goed passende schoenen van natuurlijk materiaal.</li>
                        <li>Controleer de binnenkant van schoenen op oneffenheden.</li>
                        <li>Wissel indien mogelijk dagelijks van schoenen.</li>
                        <li>Pak voldoende beweging voor een betere doorbloeding.</li>
                    </ul>
                </article>

                <article class="rounded-2xl border border-brand-100 bg-white p-6">
                    <h3 class="text-2xl font-display font-semibold text-bijedith-black">Advies bij aankoop schoenen</h3>
                    <ul class="content-list mt-5">
                        <li>Koop nieuwe schoenen bij voorkeur in de namiddag.</li>
                        <li>Laat de maat van je voeten regelmatig opmeten.</li>
                        <li>Een schoen moet direct prettig zitten; neem aangemeten zolen mee.</li>
                        <li>Let op stiksels en naden ter hoogte van de voorvoet.</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    @include('pages.homepage.partials.treatments')
@endsection
