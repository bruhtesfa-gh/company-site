@extends('layouts.app')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>F.A. Questions</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
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
                                        What is web domain and hosting?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse show"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Which server is best for websites linux or windows?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Google cloud or Amazon server which one is best and fast?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Why Organic SEO is important for all businesses?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        What is web domain and hosting?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-6">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Which server is best for websites linux or windows?
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-7">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Google cloud or Amazon server which one is best and fast?
                                    </button>
                                </h3>
                                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-8">
                                        <span class="num"><i class="bi bi bi-arrow-right-square-fill"></i></span>
                                        Why Organic SEO is important for all businesses?
                                    </button>
                                </h3>
                                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur? Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </div>
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
                <h3>Read to start something great?</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <a class="cta-btn" href="mailto:info@example.com">Conatct Us</a>
            </div>
        </section><!-- End Call To Action Section -->
    </div>

</main>
@endsection