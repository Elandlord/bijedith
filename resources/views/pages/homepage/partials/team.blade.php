<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 m-auto">
                <div class="sec-heading">
                    <h3 class="sec-title">Team</h3>
                    <p>Bij Edith verzorgen wij verschillende schoonheidsbehandelingen. Naast pedicures zijn wij compleet uitgerust met spabehandelingen.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($teamMembers as $member)
                <div class="col-md-4">
                    <div class="single-memb">
                        <img data-src="{{ $member->image_path }}" class="lazyload" alt="" />
                        <div class="memb-details">
                            <h6>{{ $member->name }}</h6>
                            <span>{{ $member->role }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
