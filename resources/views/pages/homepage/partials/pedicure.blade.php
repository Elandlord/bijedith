<section class="about animate__animated animate__fadeIn wow" id="pedicurebehandelingen">
    <img data-src="/assets/images/china-rose.png" class="flower-1 lazyload"/>
    <img data-src="/assets/images/jasmine.png" class="flower-2 lazyload"/>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 m-auto">
                <div class="sec-heading">
                    <h3 class="sec-title blue-border" style="word-wrap: break-word">Behandelingen</h3>
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
                    <h3 class="sec-title text-left">Algemene adviezen</h3>
                    <ul class="list-style-emoji" style="list-style-position: inside;">
                        <li>Was je voeten dagelijks met lauw water en weinig zeep</li>
                        <li>Zorg dat je ze goed droogt, vooral tussen de tenen (maar niet te hard wrijven)</li>
                        <li>Knip de nagels recht af</li>
                        <li>Smeer de voeten goed in, maar niet tussen de tenen, zodat de huid niet uitdroogt</li>
                        <li>Draag schone katoenen sokken (zonder dikke naden) die niet knellen</li>
                        <li>Zorg voor goed passende schoenen van natuurlijk materiaal, dit vermindert de kans op blaren, likdoorns en eeltplekken</li>
                        <li>Controleer de binnenkant van je schoenen op oneffenheden</li>
                        <li>Wissel indien mogelijk dagelijks je schoenen</li>
                        <li>Pak voldoende beweging, voetgymnastiek stimuleert de doorbloeding</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading text-left">
                    <h3 class="sec-title text-left">Advies bij aankoop schoenen</h3>
                    <ul class="list-style-emoji" style="list-style-position: inside;">
                        <li>Koop nieuwe schoenen altijd in de namiddag voor een betere pasvorm. In de loop van de dag kunnen voeten opzwellen</li>
                        <li>Laat de maat van je voeten regelmatig opmeten</li>
                        <li>Een schoen moet direct prettig zitten, neem ook aangemeten zolen mee.</li>
                        <li>Let op stiksels en naden ter hoogte van de voorvoet, ze kunnen drukplekken geven</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
