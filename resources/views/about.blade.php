@extends('layouts.main')

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
                        <p>Details about our company and why you should collaborate with us are provided further below.</p>
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
                    <p>We are here to help you</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="assets/images/whyus.jpg" class="img-fluid rounded-4 mb-4" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p>
                            Our team consists of certified SEO, PPC, and social media experts with years of experience.
                             our experts have been featured on reputable blogs across the globe, making our website 
                             company in ethiopia, one you can trust.
                            </p>
                            <ul>
                                <li><i class="bi bi-arrow-right-square-fill"></i>Experts with extensive experience work on your project</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i>Fejlesztő is a pioneer and a leading player in East Africa's technology solutions space </li>
                                <li><i class="bi bi-arrow-right-square-fill"></i>Trust worthy</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i>Very affordable packages</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Sed quia consequuntur magni dolores
                                    eos qui ratione</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> Neque porro quisquam est, qui dolorem
                                    ipsum quia dolor
                                    sit amet.</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i>Clearly set processes & transparent communication within the team</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->



        <!-- - - - - - - - -  Call To Action Section - - - - - - - -  -->
        <section id="call-to-action">
            <div class="container text-center call-to-action" data-aos="zoom-out">
                <h3>If you have any questions, please contact our customer service staff ?</h3>
                
                <a class="cta-btn" href="{{route('contact-us.index')}}">Conatct Us</a>
            </div>
        </section><!-- End Call To Action Section -->
    </div>

</main>
<!-- End #main -->
@endsection