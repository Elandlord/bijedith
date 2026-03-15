<nav class="sticky top-0 z-40 border-b border-brand-100 bg-white">
    <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a class="text-2xl font-display font-semibold tracking-wide text-bijedith-black" href="{{ route('home') }}">
            Bij Edith
        </a>

        <ul class="hidden items-center gap-6 text-base font-medium text-gray-700 md:flex">
            <li><a class="transition hover:text-brand-700 {{ request()->routeIs('home') ? 'text-brand-700' : '' }}" href="{{ route('home') }}">Home</a></li>
            <li><a class="transition hover:text-brand-700 {{ request()->routeIs('behandelingen') ? 'text-brand-700' : '' }}" href="{{ route('behandelingen') }}">Behandelingen</a></li>
            <li><a class="transition hover:text-brand-700 {{ request()->routeIs('spa-arrangementen') ? 'text-brand-700' : '' }}" href="{{ route('spa-arrangementen') }}">Spa-arrangementen</a></li>
            <li><a class="transition hover:text-brand-700 {{ request()->routeIs('tarieven') ? 'text-brand-700' : '' }}" href="{{ route('tarieven') }}">Tarieven</a></li>
            <li><a class="transition hover:text-brand-700 {{ request()->routeIs('contact') ? 'text-brand-700' : '' }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>

        <a class="brand-btn hidden md:inline-flex" href="#sz-booking-open">Afspraak maken</a>

        <details class="relative md:hidden">
            <summary class="inline-flex cursor-pointer items-center rounded-md border border-brand-200 px-3 py-2 text-base font-medium text-brand-900">
                Menu
            </summary>
            <div class="absolute right-0 mt-2 w-64 rounded-xl border border-brand-100 bg-white p-4 shadow-lg">
                <ul class="space-y-3 text-base text-gray-700">
                    <li><a class="block transition hover:text-brand-700" href="{{ route('home') }}">Home</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('behandelingen') }}">Behandelingen</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('spa-arrangementen') }}">Spa-arrangementen</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('tarieven') }}">Tarieven</a></li>
                    <li><a class="block transition hover:text-brand-700" href="{{ route('contact') }}">Contact</a></li>
                    <li><a class="block font-semibold text-brand-700" href="#sz-booking-open">Afspraak maken</a></li>
                </ul>
            </div>
        </details>
    </div>
</nav>
