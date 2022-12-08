@extends('layouts.main')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="contact-form-box contact-form contact-form-3">
                    <div class="form-container-box">
                        <form class="contact-form form" id="my-form" method="POST"
                            action="{{ route('projects.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Title*" required="required"
                                                data-error="title is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="date" class="form-control" id="end_date" name="end_date"
                                                placeholder="End date*" required="required"
                                                data-error="end date is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="category" name="category"
                                                placeholder="Category*" required="required"
                                                data-error="category is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="client" name="client"
                                                placeholder="Client*" required="required"
                                                data-error="client is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="link" name="link"
                                                placeholder="Link*" required="required" data-error="link is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="file" class="form-control" id="image1" name="image1"
                                                placeholder="Image1*" required="required"
                                                data-error="image1 is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="file" class="form-control" id="image2" name="image2"
                                                placeholder="Image2*" required="required"
                                                data-error="image2 is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="file" class="form-control" id="image3" name="image3"
                                                placeholder="Image3*" required="required"
                                                data-error="image3 is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="file" class="form-control" id="image4" name="image4"
                                                placeholder="Image4*" required="required"
                                                data-error="image4 is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group form-input-box mb-2">
                                            <textarea class="form-control" id="discription" name="discription" rows="7"
                                                placeholder="Write Your Discription*" required="required"
                                                data-error="Please, leave us a discription."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" data-text="Submit">Submit</button>
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