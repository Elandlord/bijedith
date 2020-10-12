<section class="about animate__animated animate__fadeIn wow" id="pedicurebehandelingen">
    <img data-src="/assets/images/china-rose.png" class="flower-1 lazyload"/>
    <img data-src="/assets/images/jasmine.png" class="flower-2 lazyload"/>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 m-auto">
                <div class="sec-heading">
                    <h3 class="sec-title blue-border font" style="word-wrap: break-word">Behandelingen</h3>
                    <p>Hieronder zie je een aantal van de behandelingen.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($pedicureprocedures as $procedure)
                @php $procedure = (object) $procedure; @endphp
                <div class="col-md-6">
                    <article class="post">
                        <img data-src="{{ $procedure->img }}" class="object-cover lazyload" style="height: 300px; max-height: 300px;" alt="" />
                        <h4><a href="">{{ $procedure->name }}</a></h4>
                        <p>{!!  $procedure->description !!}</p>
                        {{--                        <a href="#tarieven" class="btn btn-round">Bekijk tarieven</a>--}}
                        <a href="#tarieven" class="btn">Tarieven</a>

                    </article>
                </div>
            @empty
            @endforelse
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading text-left">
                    <div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                        <h5 class="mb-8 text-4xl text-bijedith-black leading-none md:pl-2">
                            Algemene <span class="inline-block text-bijedith-fresh-blue">adviezen</span>
                        </h5>
                        <div class="grid gap-3 row-gap-3 lg:grid-cols-2">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Was je voeten dagelijks met lauw water en weinig zeep
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Zorg dat je ze goed droogt, vooral tussen de tenen (maar niet te hard wrijven)
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Knip de nagels recht af
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Smeer de voeten goed in, maar niet tussen de tenen, zodat de huid niet uitdroogt
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Draag schone katoenen sokken (zonder dikke naden) die niet knellen
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Zorg voor goed passende schoenen van natuurlijk materiaal, dit vermindert de kans op blaren, likdoorns en eeltplekken
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Controleer de binnenkant van je schoenen op oneffenheden
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Wissel indien mogelijk dagelijks je schoenen
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Pak voldoende beweging, voetgymnastiek stimuleert de doorbloeding
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading text-left">
                    <div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                        <h5 class="mb-8 text-4xl text-bijedith-black leading-none md:pl-2">
                            Advies bij aankoop <span class="inline-block text-bijedith-fresh-blue">schoenen</span>
                        </h5>
                        <div class="grid gap-3 row-gap-3 lg:grid-cols-2">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Koop nieuwe schoenen altijd in de namiddag voor een betere pasvorm. In de loop van de dag kunnen voeten opzwellen
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Laat de maat van je voeten regelmatig opmeten
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Een schoen moet direct prettig zitten, neem ook aangemeten zolen mee.
                                </li>
                                <li class="flex items-start">
                                    <span class="mr-1">
                                        <svg class="w-5 h-5 mt-px text-bijedith-fresh-blue"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                    </span>
                                    Let op stiksels en naden ter hoogte van de voorvoet, ze kunnen drukplekken geven
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
