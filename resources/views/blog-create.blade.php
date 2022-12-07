@extends('layouts.main')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="contact-form-box contact-form contact-form-3">
                    <div class="form-container-box">
                        <form class="contact-form form" id="ajax-contact" method="post"
                            action="{{ route('send-message') }}">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-input-box">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name*" required="required" data-error="Name is required.">
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
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                                required="required">
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
                                                aria-hidden="true">&times;</button> Thank
                                            You! your message has been sent. </div>
                                        <div class="alert alert alert-danger alert-dismissable alert-dismissable hidden"
                                            id="msgSubmitError"><button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button> Sorry!
                                            your message is no received please try again. </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection