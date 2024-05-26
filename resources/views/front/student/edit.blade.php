@extends('front.master')
@section('title')
    Edit-student
@endsection
@section('body')
    {{--    <h1 class="text-center fw-bolder">This is Add-student</h1>--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h3 class="text-center fw-bolder">Edit Student</h3>
                            <hr>
                            <form action="{{ route('student-update',['id' => $student->id]) }}" method="post" enctype="multipart/form-data">
                                <div class="text-center text-success fw-bolder">
                                    <span>{{ Session::has('success') ? Session::get('success') : '' }}</span>
                                </div>
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $student->name }}" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" value="{{ $student->email }}" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $student->mobile }}" name="mobile" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control"/>
                                        <img src="{{ asset($student->image) }}" style="height: 80px" alt=""/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="">
                                        <input type="submit" class="btn btn-outline-success col-md-12 rounded-0" value="Update Student"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
