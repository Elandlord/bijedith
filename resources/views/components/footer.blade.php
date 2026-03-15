<footer class="mt-16 border-t border-brand-100 bg-brand-50">
    <div class="mx-auto grid w-full max-w-6xl gap-10 px-4 py-12 sm:px-6 lg:grid-cols-3 lg:px-8">
        <div>
            <a class="text-2xl font-display font-semibold text-bijedith-black" href="{{ route('home') }}">Bij Edith</a>
            <p class="mt-4 text-base text-gray-700">
                Bij Edith is een pedicurepraktijk in Lichtenvoorde voor allround pedicurebehandelingen,
                gespecialiseerde voetzorg en ontspannende spa-arrangementen.
            </p>
            <p class="mt-3 text-base text-gray-700">Pastoor Sandersstraat 28, 7131 BV Lichtenvoorde</p>
        </div>

        <div>
            <p class="text-base font-semibold uppercase tracking-wider text-gray-900">Navigatie</p>
            <ul class="mt-4 space-y-2 text-base text-gray-700">
                <li><a class="transition hover:text-brand-700" href="{{ route('home') }}">Home</a></li>
                <li><a class="transition hover:text-brand-700" href="{{ route('behandelingen') }}">Behandelingen</a></li>
                <li><a class="transition hover:text-brand-700" href="{{ route('spa-arrangementen') }}">Spa-arrangementen</a></li>
                <li><a class="transition hover:text-brand-700" href="{{ route('tarieven') }}">Tarieven</a></li>
                <li><a class="transition hover:text-brand-700" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div>
            <p class="text-base font-semibold uppercase tracking-wider text-gray-900">Informatie</p>
            <ul class="mt-4 space-y-2 text-base text-gray-700">
                <li><a class="transition hover:text-brand-700" target="_blank" href="{{ route('privacy') }}">Privacyverklaring</a></li>
                <li><a class="transition hover:text-brand-700" href="#sz-booking-open">Afspraak maken</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-brand-100">
        <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-4 text-base text-gray-700 sm:px-6 lg:px-8">
            <p>&copy; {{ Date('Y') }} Edith Groothuis</p>
        </div>
    </div>
</footer>
