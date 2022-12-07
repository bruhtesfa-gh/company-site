@extends('layouts.main')
@section('main')
<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5 h-full d-flex align-content-center" data-aos="fade-in">
            <div class="col-lg-6 d-flex flex-column align-items-right justify-content-center text-left caption">
                <h2>FEJLESZTŐ</h2>
                <h3 class="heading-secondy">Technology</h3>
                <p>Our company exists to assist you in growing your company. We provide the best web and application
                    solutions, project management,
                    software updates, Google Cloud, SEO optimization, and social media marketing services.</p>
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
<!-- Start Services Section -->
<div id="services" class="the-main-service text-center section">
    <div class="container">
        <div class="row our-offer-items less-carousel">
            <!-- Main Service -->
            <div class="col-md-4 col-sm-12 equal-height">
                <div class="item">
                    <i class="fa fa-pencil"></i>
                    <h4>Web Design</h4>
                    <p align="justify">
                In today's competitive internet market, website design  services are crucial.
                 Fejlesztő focuses on  The visual first impression your website produces will
                 have a significant impact on a pov client's decision to click away or
                 continue reading. 
                    </p>
                </div>
            </div>
            <!-- End Main Service -->

            <!-- Main Service -->
            <div class="col-md-4 col-sm-12 equal-height">
                <div class="item">
                    <i class="fa  fa-pie-chart"></i>
                    <h4>Software Development</h4>
                    <p align="justify" >
                    Fejlesztő  specializes in developing extensible software for a multitude of industries. 
                    We provide the technological expertise and an established development methodology to deliver 
                    custom web application projects. Our clients gain market share,increase efficiency, enhance 
                    productivity, reduce operating costs, and boost customer satisfaction.
                    </p>
                </div>
            </div>
            <!-- End Main Service -->

            <!-- Main Service -->
            <div class="col-md-4 col-sm-12 equal-height">
                <div class="item">
                    <i class="fa fa-tasks"></i>
                    <h4>Project Content Management</h4>
                    <p align="justify">
                    A Content Management System is a web application that makes
content authoring and content delivery easy. It enables even non-
technical users to efficiently build a website, streamline the web
publishing procedures and quickly deploy them, creating a content-rich
website.
.
                    </p>
                </div>
            </div>
            <!-- End Main Service -->

            <!-- Main Service -->
            <div class="col-md-4 col-sm-12 equal-height">
                <div class="item">
                    <i class="fa fa-tachometer"></i>
                    <h4>UI/UX Design</h4>
                    <p p align="justify">
                    Intuitive designs combined with compelling user experience are what makes our
apps stand ahead in the digital age. Seamless experience driven by international
standards in collaboration with out-of-the-box ideas is the specialty of Fejlesztő 
helping your business accomplish its goals.

                    </p>
                </div>
            </div>
            <!-- End Main Service -->

            <!-- Main Service -->
            <div class="col-md-4 col-sm-12 equal-height">
                <div class="item">
                    <i class="fa fa-recycle"></i>
                    <h4>Software Update Services</h4>
                    <p align="justify">
                    Updates can prevent security issues and improve compatibility and program features. 
                    Software updates are necessary to keep computers, mobile devices and tablets running
                     smoothly -- and they may lower security vulnerabilities.
                     Data breaches, hacks, cyber attacks and identity theft have all been in the news.
                    </p>
                </div>
            </div>
            <!-- End Main Service -->

            <!-- Main Service -->
            <div class="col-md-4 col-sm-12 equal-height">
                <div class="item">
                    <i class="fa fa-handshake-o"></i>
                    <h4>24/7 Support</h4>
                    <p align="justify">
                    Whether for on-site assistance, technical support, or remote support, Source is here to ensure 
                    our customers’ success and end-users’ business productivity. We offer dependable, on-demand
                     support options including 24/7 technical and remote support
                     and 4-hour and next business day global on-site support in over 100 countries worldwide
                    </p>
                </div>
            </div>
            <!-- End Main Service -->
        </div>
    </div>
</div>
<!-- End Services Section -->

<main id="main">

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>

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
    </section><!-- End Skills Section -->

    <!-- Why Us Section -->
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore
                            magna aliqua. Xonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Nemo enim ipsam voluptatem quia voluptas
                                sit</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Sed quia consequuntur magni dolores eos
                                qui ratione</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Sed quia consequuntur magni dolores eos
                                qui ratione</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Neque porro quisquam est, qui dolorem
                                ipsum quia dolor</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Consectetur, adipisci velit, sed quia non
                                numquam</li>
                            <li><i class="bi bi-arrow-right-square-fill"></i> Rempora incidunt ut labore et dolore
                                magnam aliquam</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- Portfolio Section -->
    <div id="portfolio" class="portfolio section">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Portfolio</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
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
    </div><!-- End Portfolio Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <h3>Read to start something great?</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            <a class="cta-btn" href="mailto:info@example.com">Conatct Us</a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>

            <div class="row gy-4">
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/images/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                        <h4>Jhone Bi</h4>
                        <span>Application Manager</span>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/images/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                        <h4>Sani Awesome</h4>
                        <span>Social Media</span>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/images/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                        <h4>Andrio Willi</h4>
                        <span>Content Writer</span>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/images/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                        <h4>Afa Jonson</h4>
                        <span>Business Manager</span>
                    </div>
                </div><!-- End Team Member -->
            </div>
        </div>
    </section><!-- End Our Team Section -->

    <!-- Pricing -->
    <div id="pricing" class="section">
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
    </div>


    <!-- Recent Blog Posts Section -->
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Recent Blog Posts</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="assets/images/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>
                        <p class="post-category">Domain & Hosting</p>
                        <h2 class="title">
                            <a href="blog-details.html">How to host website on any hosting provider?</a>
                        </h2>
                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-author">William Bla</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Feb 1, 2022</time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div><!-- End post list item -->

                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="assets/images/blog/blog-2.jpg" alt="" class="img-fluid">
                        </div>
                        <p class="post-category">Advertisement</p>
                        <h2 class="title">
                            <a href="blog-details.html">How to create add on google adwords?</a>
                        </h2>
                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-author">Jobi Ret</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Oct 5, 2022</time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div><!-- End post list item -->

                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="assets/images/blog/blog-3.jpg" alt="" class="img-fluid">
                        </div>
                        <p class="post-category">Marketing</p>
                        <h2 class="title">
                            <a href="blog-details.html">What is digital marketing and why is important?</a>
                        </h2>
                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-author">Main Dow</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Dec 22, 2022</time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div><!-- End post list item -->

            </div><!-- End recent posts list -->

        </div>
    </section><!-- End Recent Blog Posts Section -->


    <!-- Start Contact Section -->
    <div id="contact" class="contact-section section">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12" data-aos="fade-left">
                    <div class="contact-form-box contact-form contact-form-3">
                        <div class="form-container-box">
                            <form class="contact-form form" id="ajax-contact" method="post"
                                action="assets/phpscripts/contact.php">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-input-box">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Name*" required="required"
                                                    data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-input-box">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email*" required="required"
                                                    data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group form-input-box">
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="Subject" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-input-box">
                                                <textarea class="form-control" id="message" name="message" rows="7"
                                                    placeholder="Write Your Message*" required="required"
                                                    data-error="Please, leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" data-text="Send Message">Send Message</button>
                                        </div>
                                        <div class="messages">
                                            <div class="alert alert alert-success alert-dismissable alert-dismissable hidden"
                                                id="msgSubmit"><button type="button" class="close" data-dismiss="alert"
                                                    aria-hidden="true">&times;</button> Thank You! your message has been
                                                sent. </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12" data-aos="fade-right">
                    <div class="contact-information-box-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <h6>Address:</h6>
                                        <p>11 West Town</p>
                                        <p>PBo 12345, United States</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <h6>Phone:</h6>
                                        <p>+1 1234 56 789</p>
                                        <p>+1 1234 56 780</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <h6>Email:</h6>
                                        <p>info@example.com</p>
                                        <p>email@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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