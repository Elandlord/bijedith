<section class="px-4 py-16 sm:px-6 lg:px-8" id="spa-arrangementen">
    <div class="mx-auto w-full max-w-6xl">
        <div class="max-w-3xl">
            <span class="section-kicker">Ontspanning</span>
            <h2 class="section-title">Spa-arrangementen</h2>
            <p class="mt-3 text-gray-600">
                Leuk om te geven, geweldig om te krijgen. Welke spa-behandeling je ook kiest,
                je loopt ontspannen de deur uit.
            </p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse($spaprocedures as $procedure)
                @php $procedure = (object) $procedure; @endphp
                <article class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">
                    <img data-src="{{ $procedure->img }}" class="lazyload h-56 w-full object-cover" alt="" />
                    <div class="space-y-3 p-6">
                        <h3 class="text-xl font-display font-semibold text-bijedith-black">{{ $procedure->name }}</h3>
                        <div class="text-sm leading-relaxed text-gray-600">{!! $procedure->description !!}</div>
                    </div>
                </article>
            @empty
            @endforelse
        </div>
    </div>
</section>
