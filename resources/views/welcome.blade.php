@extends('layouts.main')
@section('main')
<head>

</head>
<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5 h-full d-flex align-content-center" data-aos="fade-in">
            <div class="col-lg-6 d-flex flex-column align-items-right justify-content-center text-left caption">
                <h2>FEJLESZTŐ</h2>
                <h3 class="heading-secondy">Technology</h3>
                <p align="justify" class="intro" >Our company exists to assist you in growing your company. We provide the best web and application
                    solutions, project management, software updates, Google Cloud, SEO optimization, and social media marketing services.</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=5KygwcZ545U&ab_channel=JonathanMickelson"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column align-items-right justify-content-center"><img
                    src="assets/images/hero.png" class="img-fluid rounded-4 mb-4 mt-m70" alt=""></div>
        </div>
    </div>
</section>
<!-- End Hero Section -->
@include('inclusive-service')

<main id="main">

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>About Us</h2>
                <p style=tex>Fejlesztő Software Plc is an outstanding and professional IT company established in
                    2012 in the capital city of Ethiopia.
                    Early in 2016 re-established and registered as Fejlesztő Technology Plc in order to provide further
                    technologies to the consumer.
                    Also, it is a technology wise creative company doing extensive projects in the field of Website
                    Design, Website Development,
                    Search Engine Optimization (SEO), Website Hosting, Software Development, Mobile Application
                    Development and IT service and support.
                    Our expertise are committed to provide work which pursue the desires of our clients and pushes the
                    limits of creativity at quick turn around
                    time with utmost quality.</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="content ps-0" data-aos="PHP">
                        <div class="bar learning" data-skill="Laravel"></div>
                        <div class="bar back basic" data-skill="Python"></div>
                        <div class="bar back intermediate" data-skill="C#"></div>
                        <div class="bar front advanced" data-skill="CSS3"></div>
                        <div class="bar front expert" data-skill="HTML5"></div>
                        <div class="bar front expert" data-skill="JQuery"></div>
                        <div class="bar front advanced" data-skill="React JS"></div>
                        <div class="bar front basic" data-skill="Javascripts"></div>
                        <div class="bar front intermediate" data-skill="Node Js"></div>
                    </div>
                </div>
                <div class="col-lg-6 image-design-box">
                    <img src="assets/images/aboutus.png" class="img-fluid rounded-4 mb-4" alt="">
                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- Why Us Section -->
    <section id="whyus" class="whyus">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Why Choose Us</h2>
                <p>We are here to help you.</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <img src="assets/images/whyus.jpg" class="img-fluid rounded-4 mb-4" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p>
                            Our team consists of certified SEO, PPC, and Social Media experts with years of experience.
                            Our experts have been featured on reputable blogs across the globe, making our website
                            company in ethiopia, one you can trust.
                        </p>
                        <ul>
                            <li><i class="bi bi-arrow-right-square-fill"></i>Experts with extensive experience work on
                                your project.
                                sit</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i>Fejlesztő is a pioneer and a leading player
                                in East Africa's technology solutions space
                                qui ratione</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> TRUST WORTHY
                                sit aspernatur</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i>MULTI INDUSTRIAL
                            </li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> VERY AFFORDABLE PACKAGES</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i>Clearly set processes &
                                Transparent communication within the team</li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- Portfolio Section -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Portfolio</h2>
                <p>Some of our works for client are listed blow</p>
            </div>
        </div>
        @include('inclusive-project')
    </div>
    {{-- <div id="portfolio" class="portfolio section">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Portfolio</h2>
                <p>Some of our works for client are listed blow</p>
            </div>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App Design</li>
                        <li data-filter=".filter-product">App Development</li>
                        <li data-filter=".filter-branding">Branding</li>
                        <li data-filter=".filter-books">It Solutions</li>
                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
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
                                class="glightbox"><img src="assets/images/portfolio/branding-1.jpg" class="img-fluid"
                                    alt=""></a>
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

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
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

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </div> --}}
    <!-- End Portfolio Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <h3>If you have any questions, please contact our customer service staff ?</h3>
            <p> </p>
            <a  class="cta-btn" href="mailto:info@example.com">Conatct Us</a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Here is some review from a previous client of our service.</p>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center info-box">
                                    <img src="assets/images/testimonials/testimonial-1.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Jhone Doe</h3>
                                        <h4>CFO</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus.
                                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center info-box">
                                    <img src="assets/images/testimonials/testimonial-2.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Afa Rose</h3>
                                        <h4>Web Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis
                                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center info-box">
                                    <img src="assets/images/testimonials/testimonial-3.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Keena Lara</h3>
                                        <h4>Store Owner</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center info-box">
                                    <img src="assets/images/testimonials/testimonial-4.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Fizzi Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit
                                    minim dolor enim duis veniam ipsum anim magna sunt elit dolore.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <!-- Our Team Section -->
    <section id="team" class="team sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Team</h2>
                <p>Here is a list of our existing staff.</p>
            </div>
            @include('inclusive-team')
        </div>
    </section>
    <!-- End Our Team Section -->

    <!-- Pricing -->
    <!-- <div id="pricing" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Pricing</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="price-plan-wrapper">
                <div class="row">
                    <div class="col-lg-4  col-md-6 ">
                        <div class="pricing-table">
                            <div class="price-header">
                                <h3 class="title">Personal</h3>
                                <div class="price"><span class="dollar">$</span>10<span class="month">/Mo</span></div>
                            </div>

                            <div class="price-body">
                                <ul>
                                    <li><b>Free</b> Security Service</li>
                                    <li><b>1x</b> Security Service</li>
                                    <li><b>Unlimited</b> Security Service</li>
                                    <li><b>1x</b> Dashboard Access</li>
                                    <li><b>3x</b> Job Listings</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="order-btn" href="">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 ">
                        <div class="pricing-table bg-orange">
                            <div class="price-header">
                                <h3 class="title">Business</h3>
                                <div class="price"><span class="dollar">$</span>40<span class="month">/Mo</span></div>
                            </div>

                            <div class="price-body">
                                <ul>
                                    <li><b>1x</b> Security Service</li>                                    <li><b>Free</b> Security Service</li>

                                    <li><b>Unlimited</b> Security Service</li>
                                    <li><b>1x</b> Dashboard Access</li>
                                    <li><b>3x</b> Job Listings</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="order-btn" href="">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 ">
                        <div class="pricing-table">
                            <div class="price-header">

                                <h3 class="title">Enterprise</h3>
                                <div class="price"><span class="dollar">$</span>77<span class="month">/Mo</span></div>
                            </div>

                            <div class="price-body">
                                <ul>
                                    <li><b>Free</b> Security Service</li>
                                    <li><b>1x</b> Security Service</li>
                                    <li><b>Unlimited</b> Security Service</li>
                                    <li><b>1x</b> Dashboard Access</li>
                                    <li><b>3x</b> Job Listings</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="order-btn" href="">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Recent Blog Posts Section -->
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Recent Blog Posts</h2>
                <p>You may discover daily news and updates regarding our company's activities here.</p>
            </div>
            @include('inclusive-blog')
            <!-- End recent posts list -->

        </div>
    </section><!-- End Recent Blog Posts Section -->


    <!-- Start Contact Section -->
    <div id="contact" class="contact-section section">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Send us your inquiry and we will get back to you as soon as possible.</p>
        </div>
        @include('inclusive-contact-us')
    </div>
    <!-- End Contact Section -->

    <!-- Clients Section -->
    <div id="clients" class="clients">
        <div class="container" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/images/clients/client-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/images/clients/client-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/images/clients/client-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/images/clients/client-4.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/images/clients/client-5.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/images/clients/client-6.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/images/clients/client-7.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/images/clients/client-8.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Clients Section -->

</main><!-- End #main -->
@endsection