@extends('layouts.main')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Frequently Asked Questions </h2>
                        <p></p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Faqs</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/faq.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <div class="single-page">
        <!-- - - - - - - - -  Frequently Asked Questions Section - - - - - - - -  -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                    As a Software development Firm, What Software development Services do you offer?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse show"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body" align="justify">
                                    We provide full-scale software development services like custom software
development, web app development, mobile app development, software testing,
and similar services. Our robust software development process ensures that
everything within our software development services is done in a clean manner
to provide top-notch services.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        What technologies do we use to develop Software and Website ?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body" align="justify">
                                    We offer a variety of website and software development services that are
inclusive of a range of technologies, diversified frameworks and programming
languages. However, the selection of technology stack is completely dependent
on the client for their project as to what brings the best of business performance
for them. Although, we suggest and assist businesses by analyzing their
business requirements, budget, future demands and available technology stack.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Do you provide maintenance and support after deployment?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body" align="justify">
                                    Yes we do, sustaining a software or website application is equally important as
developing as it keeps the application healthy and relevant. Our maintenance
services include feature enhancements, optimization, bug fixing, and preventive
maintenance.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        > How do you ensure quality in website or software development outsource projects?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body" align="justify">
                                    Fejlesztőa leading outsourced development company, thoroughly analyzes your
project and then gives a list of experts whose knowledge and understanding
match the best for your project. Moreover, you can shortlist from the choices,
and once you have confirmed the applicants, we will continue with the work.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                         Do you offer cost-effective software and website outsourcing services?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body" align="justify">
                                    Unlike other outsource development companies, we offer all the services at a
competitive price. We believe in providing cost-effective, professional, and
reliable services. Being one of the top outsourcing companies in India, our
experts deliver high-quality solutions.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-6">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Where are you located?
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                    Bahir Dar Giorgis Rd ,Friendship Building, 3rd Floor.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                          

                                </div>
                            </div><!-- # Faq item-->
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- - - - - - - - -  Call To Action Section - - - - - - - -  -->
        <section id="call-to-action">
            <div class="container text-center call-to-action" data-aos="zoom-out">
                <h3>If you have any questions, please contact our customer service staff ?</h3>
             
                <a class="cta-btn"  href="{{route('contact-us.index')}}">Conatct Us</a>
            </div>
        </section><!-- End Call To Action Section -->
    </div>

</main>
@endsection