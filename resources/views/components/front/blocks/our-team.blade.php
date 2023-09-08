<section class="section team-area ptb_100">
    <div class="container">
        <div class="row">
            @foreach($blocks as $block)

            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Team -->
                <div class="single-team">
                    <!-- Team Photo -->
                    <div class="team-photo">
                        <a href="#"><img src="{{ $block->options->photo }}" alt=""></a>
                    </div>
                    <!-- Team Content -->
                    <div class="team-content p-3">
                        <a href="#">
                            <h3 class="mb-2">{{ $block->options->name }}</h3>
                        </a>
                        <h5 class="text-uppercase">{{ $block->options->position }}</h5>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section>
