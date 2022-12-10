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
                            action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <select name="project_id" id="project_id" required="required"
                                                data-error="Project is required."
                                                class="form-control form-select custom-select">
                                                <option value=""> Select Project </option>
                                                @foreach ($projects as $project)
                                                <option value="{{$project->id}}">{{$project->title}}</option>
                                                @endforeach
                                            </select>
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
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name*" required="required" data-error="name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="career" name="career"
                                                placeholder="Career*" required="required"
                                                data-error="career is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="number" min="0" max="5" maxlength="1" step="1"
                                                class="form-control" id="rating" name="rating"
                                                placeholder="Rating* (0 - 5)" required="required"
                                                data-error="rating is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group form-input-box mb-2">
                                            <textarea class="form-control" id="testimony" name="testimony" rows="7"
                                                placeholder="Write Your testimony*" required="required"
                                                data-error="Please, leave us a testimony."></textarea>
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