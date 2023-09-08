<!doctype html>
<html class="no-js" lang="en">

<x-front.head :$meta />

<body class="homepage-5 dark">
<!--====== Preloader Area Start ======-->
<div id="preloader">
    <!-- Digimax Preloader -->
    <div id="digimax-preloader" class="digimax-preloader">
        <!-- Preloader Animation -->
        <div class="preloader-animation">
            <!-- Spinner -->
            <div class="spinner"></div>
            <!-- Loader -->
            <div class="loader">
                <span data-text-preloader="D" class="animated-letters">D</span>
                <span data-text-preloader="I" class="animated-letters">I</span>
                <span data-text-preloader="G" class="animated-letters">G</span>
                <span data-text-preloader="I" class="animated-letters">I</span>
                <span data-text-preloader="M" class="animated-letters">M</span>
                <span data-text-preloader="A" class="animated-letters">A</span>
                <span data-text-preloader="X" class="animated-letters">X</span>
            </div>
            <p class="fw-5 text-center text-uppercase">Loading</p>
        </div>
        <!-- Loader Animation -->
        <div class="loader-animation">
            <div class="row h-100">
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== Preloader Area End ======-->

<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->

<div class="main overflow-hidden">
    <!-- ***** Header Start ***** -->
    <header id="header">
        <!-- Navbar -->
        <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
            <div class="container header">
                <!-- Navbar Brand-->
                <a class="navbar-brand" href="/{{ $langSlug }}">
                    <img class="navbar-brand-regular" src="{{ asset('assets/img/logo/logo-white.png') }}" alt="brand-logo">
                    <img class="navbar-brand-sticky" src="{{ asset('assets/img/logo/logo.png') }}" alt="sticky brand-logo">
                </a>
                <div class="ml-auto"></div>
                <select name="" id="lang" onchange="changeLanguage()">
                    @foreach($languages as $lang)
                        <option @selected($lang->slug == $langSlug)
                            value="{{ $lang->slug }}">{{ $lang->title }}</option>
                    @endforeach
                </select>

                <script>
                    function changeLanguage() {
                        const lang = document.querySelector('#lang').value
                        location.href = '/' + lang + '{{ $slug }}'
                    }


                </script>
                <!-- Navbar -->
                <x-site.navbar :$menus :$langSlug/>
                <!-- Navbar Icons -->
                <ul class="navbar-nav icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>

                <!-- Navbar Toggler -->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="fas fa-bars toggle-icon m-0"></i>
                        </a>
                    </li>
                </ul>

                <!-- Navbar Action Button -->
                <ul class="navbar-nav action">
                    <li class="nav-item ml-3">
                        <a href="#" class="btn ml-lg-auto btn-bordered-white">
                            <i class="fas fa-paper-plane contact-icon mr-md-2">

                            </i>{{ __('buttons.top') }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ***** Header End ***** -->


    @foreach($page->blocks as $block)
        <x-dynamic-component
            :component="'front.blocks.'.$block->template->slug"
            :options="$block->options"
            :blocks="$block->blocks"
        />
    @endforeach

    <!-- ***** Welcome Area End ***** -->

    <!--====== Call To Action Area End ======-->

    <!--====== Footer Area Start ======-->
    <footer class="section footer-area dark-bg">
        <!-- Footer Top -->
        <div class="footer-top ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-white text-uppercase mb-2">About Us</h3>
                            <ul>
                                <li class="py-2"><a class="text-white-50" href="#">Company Profile</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Testimonials</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Careers</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Partners</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Affiliate Program</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-white text-uppercase mb-2">Services</h3>
                            <ul>
                                <li class="py-2"><a class="text-white-50" href="#">Web Application</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Product Management</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">User Interaction Design</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">UX Consultant</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Social Media Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-white text-uppercase mb-2">Support</h3>
                            <ul>
                                <li class="py-2"><a class="text-white-50" href="#">Frequently Asked</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Terms &amp; Conditions</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Privacy Policy</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Help Center</a></li>
                                <li class="py-2"><a class="text-white-50" href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-white text-uppercase mb-2">Follow Us</h3>
                            <p class="text-white-50 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quae.</p>
                            <!-- Social Icons -->
                            <ul class="social-icons list-inline pt-2">
                                <li class="list-inline-item px-1"><a class="text-white-50" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li class="list-inline-item px-1"><a class="text-white-50" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item px-1"><a class="text-white-50" href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li class="list-inline-item px-1"><a class="text-white-50" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item px-1"><a class="text-white-50" href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copyright Area -->
                        <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                            <!-- Copyright Left -->
                            <div class="copyright-left text-white-50">&copy; Copyrights 2020 Digimax All rights reserved.</div>
                            <!-- Copyright Right -->
                            <div class="copyright-right text-white-50">Made with <i class="fas fa-heart color-2"></i> By <a class="text-white-50" href="#">Themeland</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->

    <!--====== Modal Search Area Start ======-->
    <div id="search" class="modal fade p-0">
        <div class="modal-dialog dialog-animated">
            <div class="modal-content h-100">
                <div class="modal-header" data-dismiss="modal">
                    Search <i class="far fa-times-circle icon-close"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 align-self-center">
                            <div class="row">
                                <div class="col-12 pb-3">
                                    <h2 class="search-title mb-3">What are you looking for?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 input-group">
                                    <input type="text" class="form-control" placeholder="Enter your keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 input-group align-self-center">
                                    <button class="btn btn-bordered mt-3">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== Modal Search Area End ======-->

    <!--====== Modal Responsive Menu Area Start ======-->
    <div id="menu" class="modal fade p-0">
        <div class="modal-dialog dialog-animated">
            <div class="modal-content h-100">
                <div class="modal-header" data-dismiss="modal">
                    Menu <i class="far fa-times-circle icon-close"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Modal Responsive Menu Area End ======-->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="{{ asset('assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Plugins js -->
<script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>

<!-- Active js -->
<script src="{{ asset('assets/js/active.js') }}"></script>
</body>

</html>
