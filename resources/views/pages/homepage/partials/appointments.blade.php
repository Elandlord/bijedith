<section class="px-4 py-16 sm:px-6 lg:px-8" id="contact">
    <div class="mx-auto grid w-full max-w-6xl gap-8 rounded-3xl border border-brand-100 bg-white p-6 shadow-sm lg:grid-cols-2 lg:p-10" data-scroll>
        <figure class="overflow-hidden rounded-2xl img-zoom">
            <picture>
                <source data-srcset="/assets/pictures/webp/DCM_0020-pichi.webp" type="image/webp">
                <img class="lazyload h-full w-full object-cover" data-src="/assets/pictures/DCM_0020-pichi.png" alt="" />
            </picture>
        </figure>

        <div class="flex flex-col justify-center">
            <span class="section-kicker"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg> Contact</span>
            <h2 class="section-title">Afspraak maken</h2>
            <p class="mt-4 text-base text-gray-600">Plan direct een afspraak of bekijk onze contactgegevens.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a class="brand-btn" href="#sz-booking-open">Plan afspraak</a>
                <a class="brand-btn-outline" href="{{ route('contact') }}">Contactgegevens</a>
            </div>
        </div>
    </div>
</section>
