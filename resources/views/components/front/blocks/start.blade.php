<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center"
         style="background: rgba(0, 0, 0, 0) url('{{ $options->bg_image  ?? ''}}') no-repeat fixed center center / cover;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-7">
                <div class="welcome-intro">
                    <h1 class="text-white"><span class="fw-4">{{ $options->title  ?? ''}}</h1>
                    <p class="text-white-50 my-4">{{ $options->description  ?? ''}}</p>
                    <!-- Buttons -->
                    <div class="button-group">
                        <a href="#" class="btn btn-bordered-white active">Start a Project</a>
                        <a href="#" class="btn btn-bordered-white d-none d-sm-inline-block">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                            <span class="welcome-thumb-1">
                                <img class="d-block ml-auto" src="{{ $options->image_left  ?? ''}}" alt="">
                            </span>
                    <span class="welcome-thumb-2">
                                <img class="welcome-animation d-block" src="{{ $options->image_right  ?? ''}}" alt="">
                            </span>
                </div>
            </div>
        </div>
    </div>
</section>
