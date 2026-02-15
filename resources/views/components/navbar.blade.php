<nav class="sticky top-0 z-40 border-b border-brand-100 bg-white">
    <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a class="text-2xl font-display font-semibold tracking-wide text-bijedith-black" href="{{ route('home') . '#home' }}">
            Bij Edith
        </a>

        <ul class="hidden items-center gap-6 text-sm font-medium text-gray-700 md:flex">
            <li><a class="transition hover:text-brand-700" href="{{ route('home') . '#home' }}">Home</a></li>
            <li><a class="transition hover:text-brand-700" href="{{ route('home') . '#pedicurebehandelingen' }}">Behandelingen</a></li>
            <li><a class="transition hover:text-brand-700" href="{{ route('home') . '#spa-arrangementen' }}">Spa-arrangementen</a></li>
            <li><a class="transition hover:text-brand-700" href="{{ route('home') . '#tarieven' }}">Tarieven</a></li>
            <li><a class="transition hover:text-brand-700" href="{{ route('home') . '#contact' }}">Contact</a></li>
        </ul>

        <a class="brand-btn hidden md:inline-flex" href="tel:0544-373326">Bel 0544-373326</a>

        <details class="relative md:hidden">
            <summary class="inline-flex cursor-pointer items-center rounded-md border border-brand-200 px-3 py-2 text-sm font-medium text-brand-700">
                Menu
            </summary>
            <div class="absolute right-0 mt-2 w-64 rounded-xl border border-brand-100 bg-white p-4 shadow-lg">
                <ul class="space-y-3 text-sm text-gray-700">
                    <li><a class="block transition hover:text-brand-700" href="{{ route('home') . '#home' }}">Home</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('home') . '#pedicurebehandelingen' }}">Behandelingen</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('home') . '#spa-arrangementen' }}">Spa-arrangementen</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('home') . '#tarieven' }}">Tarieven</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('home') . '#contact' }}">Contact</a></li>
                    <li><a class="block font-semibold text-brand-700" href="tel:0544-373326">Bel 0544-373326</a></li>
                </ul>
            </div>
        </details>
    </div>
</nav>
