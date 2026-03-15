<section class="px-4 pb-16 pt-16 sm:px-6 lg:px-8 relative overflow-hidden" id="home">
    <img src="/assets/images/china-rose.png" alt="" class="hidden lg:block absolute -left-16 top-1/4 w-40 opacity-15 pointer-events-none" />
    <img src="/assets/images/china-rose.png" alt="" class="hidden lg:block absolute -right-10 bottom-10 w-24 opacity-10 pointer-events-none" />
    <div class="mx-auto grid w-full max-w-6xl gap-12 lg:grid-cols-2 lg:items-center relative z-10">
        <div>
            <span class="section-kicker"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="m4.93 4.93 2.83 2.83"/><path d="m16.24 16.24 2.83 2.83"/><path d="M2 12h4"/><path d="M18 12h4"/><path d="m4.93 19.07 2.83-2.83"/><path d="m16.24 7.76 2.83-2.83"/></svg> Pedicure & Spa</span>
            <h1 class="section-title text-4xl md:text-5xl">Welkom bij Edith</h1>
            <p class="mt-6 text-base leading-relaxed text-gray-600">
                Mijn naam is Edith Groothuis. Al ruim 25 jaar werk ik als pedicure en medisch pedicure met een
                sterke focus op kwaliteit, hygiëne en persoonlijke aandacht. In mijn salon in Lichtenvoorde ben je
                welkom voor allround pedicurebehandelingen, gespecialiseerde voetzorg en ontspannende spa-arrangementen.
            </p>
            <p class="mt-4 text-base leading-relaxed text-gray-600">
                Medische voetbehandelingen worden vergoed en de podotherapeut heeft hierin een coördinerende rol.
                Daarnaast werk ik ambulant voor bewoners van Careaz in Lichtenvoorde.
            </p>
            <p class="mt-4 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm leading-relaxed text-amber-900">
                De salon heeft geen ruimte voor nieuwe vaste klanten. Voor een korte incidentele behandeling kunt u een afspraak plannen middels het online boekingsysteem.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('behandelingen') }}" class="brand-btn">Bekijk behandelingen</a>
                <a href="#sz-booking-open" class="brand-btn-outline">Plan afspraak</a>
            </div>
        </div>

        <div class="rounded-3xl border border-brand-100 bg-white p-6 shadow-sm">
            <picture>
                <source srcset="/assets/images/webp/bij_edith_logo-pichi.webp" type="image/webp">
                <source srcset="/assets/images/bij_edith_logo-pichi.png" type="image/jpeg">
                <img class="mx-auto lazyload" style="max-width: 381px;" data-src="/assets/images/bij_edith_logo-pichi.png" alt="Logo Bij Edith" width="761" height="549" />
            </picture>
        </div>
    </div>
</section>
