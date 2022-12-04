@extends('layouts.app')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Our Packages</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Our Packages</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/packages.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <section class="single-page">
        <!-- - - - - - - - -  Pricing - - - - - - - -  -->
        <div id="pricing">
            <div class="container">
                <div class="price-plan-wrapper">
                    <div class="row">
                        <div class="col-lg-4  col-md-6 ">
                            <div class="pricing-table">
                                <div class="price-header">
                                    <h3 class="title">Personal</h3>
                                    <div class="price"><span class="dollar">$</span>10<span class="month">/Mo</span>
                                    </div>
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
                                    <div class="price"><span class="dollar">$</span>40<span class="month">/Mo</span>
                                    </div>
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
                                    <div class="price"><span class="dollar">$</span>77<span class="month">/Mo</span>
                                    </div>
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
        </div>
    </section>

</main>
@endsection