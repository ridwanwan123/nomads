@extends('layouts.app')
@section('title')
    Detail
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@section('content')
<!-- MAIN  -->
<main>
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Republic Of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/details-1.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/details-1.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img src="frontend/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, iure quia! Voluptatem magni cupiditate facere sed vero et, sequi dolore!</p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="frontend/images/ic_event.png" class="features-image" alt="" srcset="">
                                <div class="description">
                                    <h3>
                                        Featured Event
                                    </h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_bahasa.png" class="features-image" alt="" srcset="">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indoensia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_foods.png" class="features-image" alt="" srcset="">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Member Are Going</h2>
                        <div class="members my-2">
                            <img src="frontend/images/avatar-1.png" class="member-image mr-1" alt="" srcset="">
                            <img src="frontend/images/avatar-2.png" class="member-image mr-1" alt="" srcset="">
                            <img src="frontend/images/avatar-3.png" class="member-image mr-1" alt="" srcset="">
                            <img src="frontend/images/avatar-4.png" class="member-image mr-1" alt="" srcset="">
                            <img src="frontend/images/avatar-5.png" class="member-image mr-1" alt="" srcset="">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">10, April 2022</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">Rp 100.000 / Person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ url('/checkout') }}" class="btn btn-block btn-join-now mt-3 py-2" >  Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush