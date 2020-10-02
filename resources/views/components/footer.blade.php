<footer class="relative mt-16 bg-light-blue-bijedith">
    <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-light-blue-bijedith" preserveAspectRatio="none" viewBox="0 0 1440 54">
        <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
    </svg>
    <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <img style="max-width: 150px;" data-src="/assets/images/bij_edith_logo.png" class="lazyload" alt="" />
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">BijEdith</span>
                </a>
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-grey-300">
                        BijEdith is een pedicurepraktijk in Lichtenvoorde. Voor allround pedicurebehandelingen of gespecialiseerde voetzorg ben je welkom in salon 'Bij Edith'.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                    <p class="font-semibold tracking-wide text-bijedith-black">
                        Website
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a class="transition-colors duration-300 text-grey-300 hover:text-bijedith-black" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="transition-colors duration-300 text-grey-300 hover:text-bijedith-black" href="#pedicurebehandelingen">Pedicurebehandelingen</a>
                        </li>
                        <li>
                            <a class="transition-colors duration-300 text-grey-300 hover:text-bijedith-black" href="#spa-arrangementen">Spa-arrangementen</a>
                        </li>
                        <li>
                            <a class="transition-colors duration-300 text-grey-300 hover:text-bijedith-black" href="#tarieven">Tarieven</a>
                        </li>
                        <li>
                            <a class="transition-colors duration-300 text-grey-300 hover:text-bijedith-black" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-bijedith-black">Informatie</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a target="_blank" class="transition-colors duration-300 text-grey-300 hover:text-bijedith-black" href="{{ route('privacy') }}">Privacyverklaring</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between pt-5 pb-10 border-t border-bijedith-black sm:flex-row">
            <p class="text-sm">
                &copy; {{ Date('Y') }} Edith Groothuis
            </p>
        </div>
    </div>
</footer>
