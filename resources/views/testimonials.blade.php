@extends('layouts.main')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>What people say?</h2>
                        <p>Here is some review from a previous client of our service.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Our Testimonials</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/testimonials.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <div class="single-page">

        <!-- - - - - - - - -  Testimonials Section - - - - - - - -  -->
        <section class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="" data-aos="fade-up" data-aos-delay="100">
                    <div class="">
                        @foreach ($testimonials as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center info-box">
                                        <img src="{{"http://127.0.0.1:8000/" . $item->image}}"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>{{$item->name}}</h3>
                                            <h4>{{$item->career}}</h4>
                                            <div class="stars">
                                                @for ($i = 0; $i < $item->rating; $i++)
                                                    <i class="bi bi-star-fill"></i>
                                                    @endfor
                                                    @for ($i = $item->rating; $i < 5; $i++) <i class="bi bi-star"></i>
                                                        @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        {{$item->testimony}}
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

    </div>

</main>
@endsection