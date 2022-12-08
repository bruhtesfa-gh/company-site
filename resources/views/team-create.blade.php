@extends('layouts.main')

@section('main')
<main id="main">
    <!--  - - - - - - - -  Breadcrumbs  - - - - - - - -  -->
    <div class="breadcrumbs">
        <div class="page-header d-flex">
            <div class="container position-relative">
                <div class="contact-form-box contact-form contact-form-3">
                    <div class="form-container-box">
                        <form class="contact-form form" id="my-form" method="POST" action="{{ route('teams.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <select name="user_id" id="user_id" required="required"
                                                data-error="User is required."
                                                class="form-control form-select custom-select">
                                                <option value=""> Select User </option>
                                                @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>
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
                                    @foreach ($medias as $item)
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="text" class="form-control" id="{{$item}}" name="{{$item}}"
                                                placeholder="{{ucfirst($item)}}*"
                                                {{$item == 'linkedin' ? "required" : ""}}
                                                data-error="{{$item}} is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-12">
                                        <div class="form-group form-input-box mb-2">
                                            <input type="file" class="form-control" id="image" name="image"
                                                placeholder="Image*" required="required"
                                                data-error="image is required.">
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