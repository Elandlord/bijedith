<section class="procedures animate__animated animate__fadeIn wow" id="spa-arrangementen">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 m-auto">
                <div class="sec-heading">
                    <h3 class="sec-title blue-border">Spa-arrangementen</h3>
                    <p>Leuk om te geven , geweldig om te krijgen. Welke Spa-behandeling je ook kiest, je loopt op wolkjes de deur uit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($spaprocedures as $procedure)
                @php $procedure = (object) $procedure; @endphp
                <div class="col-md-4">
                    <article class="post h-full">
                        <img data-src="{{ $procedure->img }}" class="object-cover lazyload" style="height: 200px; max-height: 200px;" alt="" />
                        <h4>
                            <a href="">{{ $procedure->name }}</a>
                        </h4>
                        <p>{!! $procedure->description !!}</p>
                    </article>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>


