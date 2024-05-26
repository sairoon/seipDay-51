@extends('front.master')
@section('title')
    Home
@endsection
@section('body')
{{--    <h1 class="text-center fw-bolder">This is Home</h1>--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">All Students</h2>
                    <hr>
                    <div class="row mt-5">
                        @foreach($students as $student)
                        <div class="col-md-4 mt-3">
                            <div class="card shadow">
                                <img src="{{ asset($student->image) }}" class="card-img-top" style="height: 250px" alt="">
                                <div class="card-body">
                                    <h3>{{ $student->name }}</h3>
                                    <p>{{ $student->mobile }}</p>
                                    <a href="{{ route('student-detail',['id' => $student->id]) }}" class="btn btn-outline-primary float-end rounded-0">View</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
