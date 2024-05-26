@extends('front.master')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body shadow">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset($student->image) }}" class="img-fluid w-100" alt=""/>
                            </div>
                            <div class="col-md-7">
                                <h2>{{ $student->name }}</h2>
                                <p>{{ $student->email }}</p>
                                <p>{{ $student->mobile }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
