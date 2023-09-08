<section class="section content-area dark-bg ptb_150">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
                <!-- Content Inner -->
                <div class="content-inner text-center">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-3">
                        <h2 class="text-white">{{ $options->title ?? ''}}</h2>
                        <p class="text-white-50 d-none d-sm-block mt-4">{{ $options->description ?? ''}}</p>
                    </div>
                    <!-- Content List -->
                    <ul class="content-list text-left">
                        @foreach($blocks as $block)
                        <li class="single-content-list media py-2">
                            <div class="content-icon pr-4">
                                <span class="color-1"><i class="fas fa-angle-double-right"></i></span>
                            </div>
                            <div class="content-text media-body">
                                <span class="text-white">
                                    <b>{{ $block->options->title  ?? ''}}</b>
                                    <br>{{ $block->options->description  ?? ''}}</span>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <a href="#" class="btn btn-bordered-white mt-4">Learn More</a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Service Thumb -->
                <div class="service-thumb mx-auto pt-4 pt-lg-0">
                    <img src="{{ $options->image  ?? ''}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
