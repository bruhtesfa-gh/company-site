@extends('layouts.main')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="contact-form-box contact-form contact-form-3">
                    <div class="form-container-box">
                        <form class="contact-form form" id="my-form" method="POST" action="{{ route('blogs.store') }}"
                            enctype="multipart/form-data">
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
                                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                                placeholder="Subtitle*" required="required"
                                                data-error="subtitle is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="link" name="link"
                                                placeholder="Link" data-error="link is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="file" class="form-control" id="image" name="image"
                                                placeholder="Image*" required="required"
                                                data-error="image is required.">
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