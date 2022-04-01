@extends('layouts.success')

@section('title')
    Success
@endsection

@section('content')
    <!-- MAIN  -->
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
                <h1>
                    Yayy!! Success
                </h1>
                <p>
                    We've sent your email for trip instruction <br>
                    please read it as well
                </p>
                <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5"> Home Page</a>
            </div>
        </div>
    </main>
@endsection

