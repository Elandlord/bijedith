<section class="procedures">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 m-auto">
                <div class="sec-heading">
                    <h3 class="sec-title">Populaire behandelingen</h3>
                    <p>Hieronder ziet u een aantal van onze populaire behandelingen.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($procedures as $procedure)
                @php $procedure = (object) $procedure; @endphp
                <div class="col-md-4">
                    <article class="post">
                        <img src="{{ $procedure->img }}" class="object-cover" style="height: 200px; max-height: 200px;" alt="" />
                        <h4><a href="">{{ $procedure->name }}</a></h4>
                        <p>{{ $procedure->description }}</p>
                        <a href="" class="btn btn-round">Bekijk tarieven</a>
                    </article>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>


