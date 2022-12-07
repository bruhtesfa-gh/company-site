@extends('layouts.main')

@section('main')
<main id="main">

    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Services</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Our Services</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/services.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <div class="single-page">
        <!-- - - - - - - - -  Start Services Section -- - - - - - - - -->
        <div id="services" class="the-main-service text-center section">
            <div class="container">
                <div class="row our-offer-items less-carousel">
                    <!-- Main Service -->
                    <div class="col-md-4 col-sm-12 equal-height">
                        <div class="item">
                            <i class="fa fa-pencil"></i>
                            <h4>Project creation</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <!-- End Main Service -->

                    <!-- Main Service -->
                    <div class="col-md-4 col-sm-12 equal-height">
                        <div class="item">
                            <i class="fa  fa-pie-chart"></i>
                            <h4>Software Development</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <!-- End Main Service -->

                    <!-- Main Service -->
                    <div class="col-md-4 col-sm-12 equal-height">
                        <div class="item">
                            <i class="fa fa-tasks"></i>
                            <h4>Project Management</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <!-- End Main Service -->

                    <!-- Main Service -->
                    <div class="col-md-4 col-sm-12 equal-height">
                        <div class="item">
                            <i class="fa fa-tachometer"></i>
                            <h4>Project Impliment</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <!-- End Main Service -->

                    <!-- Main Service -->
                    <div class="col-md-4 col-sm-12 equal-height">
                        <div class="item">
                            <i class="fa fa-recycle"></i>
                            <h4>Software Update</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <!-- End Main Service -->

                    <!-- Main Service -->
                    <div class="col-md-4 col-sm-12 equal-height">
                        <div class="item">
                            <i class="fa fa-handshake-o"></i>
                            <h4>24/7 Support</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <!-- End Main Service -->
                </div>
            </div>
        </div>
        <!-- - - - - - - - -  End Services Section -- - - - - - - - -->
    </div>

</main>
@endsection