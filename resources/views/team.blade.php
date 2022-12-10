@extends('layouts.main')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Our Expert Team</h2>
                        <p>Here is a list of our existing staff.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Our Team</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/team.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <div class="single-page">
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                @include('inclusive-team')
            </div>
        </section><!-- End Our Team Section -->
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