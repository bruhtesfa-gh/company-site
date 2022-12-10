@extends('layouts.main')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Project Details</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="/">Home</a></li>
                                <li>Project Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/common-page.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <section class="single-page">

        <div id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-between gy-2">
                    <div class="col-lg-8">
                        <div class="position-relative">
                            <div class="slides-1 portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">

                                    <div class="swiper-slide">
                                        <img src="{{"http://127.0.0.1:8000/" . $project->image1}}" alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{"http://127.0.0.1:8000/" . $project->image2}}" alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{"http://127.0.0.1:8000/" . $project->image3}}" alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{"http://127.0.0.1:8000/" . $project->image4}}" alt="">
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                {{$project->discription}}
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-4 project-deatils-aside">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong> <span>{{$project->category}}</span></li>
                                <li><strong>Client</strong> <span>{{$project->client}}</span></li>
                                <li><strong>Project date</strong> <span>{{$project->end_date}}</span></li>
                                <li><strong>Project URL</strong>
                                    <a href="{{$project->link == null ? '#' : $project->link}}">
                                        {{$project->link == null ? 'Private Project' : $project->link}}
                                    </a>
                                </li>
                                {{-- <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li> --}}
                            </ul>
                        </div>
                        <div class="testimonial-item">
                            @foreach ($project->testimonials as $item)
                            <div class="col mb-5">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    {{$item->testimony}}
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <div>
                                    <img src="{{"http://127.0.0.1:8000/" . $item->image}}" class="testimonial-img"
                                        alt="">
                                    <h3>{{$item->name}}</h3>
                                    <h4>{{$item->career}}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

</main>
@endsection