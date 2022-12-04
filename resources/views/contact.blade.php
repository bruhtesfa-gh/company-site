@extends('layouts.app')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="row d-flex justify-content-start position-relative">
                    <div class="col-lg-6 text-left">
                        <h2>Contact 24/7</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <nav>
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="pages-images">
                            <img src="assets/images/contact.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Breadcrumbs -->

    <div class="single-page">
        <!-- Start Contact Section -->
        <div id="contact" class="contact-section section">
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
                                                    id="msgSubmit"><button type="button" class="close"
                                                        data-dismiss="alert" aria-hidden="true">&times;</button> Thank
                                                    You! your message has been sent. </div>
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
    </div>

    <div class="map-area">
        <div class="map-content">
            <div class="map-canvas" id="contact-map"></div>
        </div>
    </div>

</main>
@endsection