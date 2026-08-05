@if ($testimonials->isNotEmpty())
    <section class="testimonial bg-lightred">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 m-auto">
                    <testimonials-carousel testimonials="{{ $testimonials->map->only(['quote', 'author', 'role'])->toJson() }}"></testimonials-carousel>
                </div>
            </div>
        </div>
    </section>
@endif
