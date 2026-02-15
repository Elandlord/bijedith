<section class="px-4 py-16 sm:px-6 lg:px-8" id="pedicurebehandelingen">
    <div class="mx-auto w-full max-w-6xl">
        <div class="max-w-3xl">
            <span class="section-kicker">Voetzorg</span>
            <h2 class="section-title">Pedicurebehandelingen</h2>
            <p class="mt-3 text-gray-600">Hieronder zie je een selectie van behandelingen.</p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2">
            @forelse($pedicureprocedures as $procedure)
                @php $procedure = (object) $procedure; @endphp
                <article class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">
                    <img data-src="{{ $procedure->img }}" class="lazyload h-64 w-full object-cover" alt="" />
                    <div class="space-y-4 p-6">
                        <h3 class="text-2xl font-display font-semibold text-bijedith-black">{{ $procedure->name }}</h3>
                        <p class="text-sm leading-relaxed text-gray-600">{!!  $procedure->description !!}</p>
                        <a href="#tarieven" class="brand-btn">Bekijk tarieven</a>
                    </div>
                </article>
            @empty
            @endforelse
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-2">
            <article class="rounded-2xl border border-brand-100 bg-brand-50 p-6">
                <h3 class="text-2xl font-display font-semibold text-bijedith-black">Algemene adviezen</h3>
                <ul class="mt-5 space-y-3 text-sm text-gray-700">
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
                <ul class="mt-5 space-y-3 text-sm text-gray-700">
                    <li>Koop nieuwe schoenen bij voorkeur in de namiddag.</li>
                    <li>Laat de maat van je voeten regelmatig opmeten.</li>
                    <li>Een schoen moet direct prettig zitten; neem aangemeten zolen mee.</li>
                    <li>Let op stiksels en naden ter hoogte van de voorvoet.</li>
                </ul>
            </article>
        </div>
    </div>
</section>
