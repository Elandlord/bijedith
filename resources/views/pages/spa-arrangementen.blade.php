@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.9C15.5 4.9 17 3.5 17 3.5s1.5 2.5-.8 6.3A7 7 0 0 1 11 20z"/><path d="M11 13V7.5"/><path d="M11 20v-6"/></svg> Ontspanning',
        'title' => 'Spa-arrangementen',
        'subtitle' => 'Leuk om te geven, geweldig om te krijgen. Welke spa-behandeling je ook kiest, je loopt ontspannen de deur uit.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-6xl">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse($spaprocedures as $procedure)
                    @php $procedure = (object) $procedure; @endphp
                    <article class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">
                        <div class="img-zoom">
                            <img data-src="{{ $procedure->img }}" class="lazyload h-56 w-full object-cover" alt="" />
                        </div>
                        <div class="space-y-3 p-6">
                            <h3 class="text-xl font-display font-semibold text-bijedith-black">{{ $procedure->name }}</h3>
                            <div class="text-base leading-relaxed text-gray-600">{!! $procedure->description !!}</div>
                        </div>
                    </article>
                @empty
                @endforelse
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('tarieven') }}" class="brand-btn">Bekijk tarieven</a>
            </div>
        </div>
    </section>
@endsection
