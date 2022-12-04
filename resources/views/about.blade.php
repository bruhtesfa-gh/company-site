@extends('layouts.app')

@section('main')
<!-- Main Section -->
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>About Us</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>About Us</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/about.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <div class="single-page">
        <!-- - - - - - - - -  About Section - - - - - - - -  -->
        <div id="about" class="about section">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="content ps-0" data-aos="fade-right">
                            <div class="bar learning" data-skill="TDD"></div>
                            <div class="bar back basic" data-skill="Python"></div>
                            <div class="bar back intermediate" data-skill="C#"></div>
                            <div class="bar front advanced" data-skill="CSS3"></div>
                            <div class="bar front expert" data-skill="HTML5"></div>
                            <div class="bar front expert" data-skill="JQuery"></div>
                            <div class="bar front advanced" data-skill="React"></div>
                            <div class="bar front basic" data-skill="Javascripts"></div>
                            <div class="bar front intermediate" data-skill="Angular Js"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 image-design-box">
                        <img src="assets/images/aboutus.png" class="img-fluid rounded-4 mb-4" alt="">
                    </div>
                </div>

            </div>
        </div><!-- End Skills Section -->

        <!-- - - - - - - - -  Why Us Section - - - - - - - -  -->
        <section id="whyus" class="whyus">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Why Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="assets/images/whyus.jpg" class="img-fluid rounded-4 mb-4" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore
                                magna aliqua. Xonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Nemo enim ipsam voluptatem quia
                                    voluptas sit
                                    aspernatur aut odit aut fugit.</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Sed quia consequuntur magni dolores
                                    eos qui ratione
                                    voluptatem sequi nesciunt.</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Sed quia consequuntur magni dolores
                                    eos qui ratione</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Neque porro quisquam est, qui dolorem
                                    ipsum quia dolor
                                    sit amet.</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Consectetur, adipisci velit, sed quia
                                    non numquam
                                    eius.</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Rempora incidunt ut labore et dolore
                                    magnam aliquam</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->



        <!-- - - - - - - - -  Call To Action Section - - - - - - - -  -->
        <section id="call-to-action">
            <div class="container text-center call-to-action" data-aos="zoom-out">
                <h3>Read to start something great?</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <a class="cta-btn" href="mailto:info@example.com">Conatct Us</a>
            </div>
        </section><!-- End Call To Action Section -->
    </div>

</main>
<!-- End #main -->
@endsection