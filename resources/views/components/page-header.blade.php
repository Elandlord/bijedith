<section class="px-4 pb-8 pt-16 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-6xl">
        <span class="section-kicker">{!! $kicker !!}</span>
        <h1 class="section-title text-4xl md:text-5xl">{{ $title }}</h1>
        @if(isset($subtitle))
            <p class="mt-4 max-w-2xl text-base leading-relaxed text-gray-600">{{ $subtitle }}</p>
        @endif
    </div>
</section>
