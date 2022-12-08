@extends('layouts.main')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Projects / Portfolio</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Projects</li>
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
        <!-- - - - - - - - - Portfolio Section - - - - - - - -  -->
        <div id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <ul class="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($projects as $key => $item)
                            <li data-filter="{{'.filter-' . str_replace(" " , "-" , strtolower($key)) }}">{{$key}}</li>
                            @endforeach
                            {{-- <li data-filter=".filter-app">App Design</li>
                            <li data-filter=".filter-product">App Development</li>
                            <li data-filter=".filter-branding">Branding</li>
                            <li data-filter=".filter-books">It Solutions</li> --}}
                        </ul><!-- End Portfolio Filters -->
                    </div>

                    <div class="row gy-4 portfolio-container">
                        @foreach ($projects as $key => $subProjects)
                        @foreach ($subProjects as $pro)
                        <div
                            class="col-xl-4 col-md-6 portfolio-item {{'filter-' . str_replace(" " , "-" , strtolower($pro->category)) }}">
                            <div class="portfolio-wrap">
                                <a href="{{"http://127.0.0.1:8000/" . $pro->image1}}"
                                    data-gallery="portfolio-gallery-app" class="glightbox">
                                    <img src="{{"http://127.0.0.1:8000/" . $pro->image1}}" class="img-project"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">{{$pro->title}}</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>{{$pro->category}}</span></li>
                                                <li><strong>Client</strong> <span>{{$pro->client}}</span></li>
                                                <li><strong>Project date</strong> <span>{{$pro->end_date}}</span></li>
                                                <li><strong>Project URL</strong> <a
                                                        href="{{$pro->link}}">{{$pro->link}}</a></li>
                                            </ul>
                                        </div>
                                        @foreach ($pro->testimonials as $item)
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                {{$pro->discription}}
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-2.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                        {{--<div class="col-xl-4 col-md-6 portfolio-item filter-appi">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/app-1.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">App 1</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-1.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/product-1.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Product 1</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-2.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/branding-1.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Branding 1</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-3.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/books-1.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Books 1</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-4.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-appi">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/app-2.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">App 2</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-1.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/product-2.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Product 2</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-2.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/branding-2.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Branding 2</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-3.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/books-2.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Books 2</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-4.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-appi">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/app-3.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">App 3</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-1.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/product-3.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Product 3</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-2.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/branding-3.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Branding 3</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-3.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                                <a href="assets/images/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="assets/images/portfolio/books-3.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="project-details.html" title="More Details">Books 3</a></h4>
                                    <div class="project-deatils-aside">
                                        <div class="portfolio-details">
                                            <ul>
                                                <li><strong>Category</strong> <span>Web design</span></li>
                                                <li><strong>Client</strong> <span>New Company</span></li>
                                                <li><strong>Project date</strong> <span>12 February, 2022</span></li>
                                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <div>
                                                <img src="assets/images/testimonials/testimonial-4.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Jhone Wilsson</h3>
                                                <h4>Graphic Designer</h4>
                                            </div>
                                        </div>
                                        <div class="project-btn"><a href="project-details.html" class="fill-btn">View
                                                Project</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item --> --}}

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </div><!-- End Portfolio Section -->
    </section>

</main>
@endsection