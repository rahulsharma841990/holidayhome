@extends('layouts.website')
@section('content')

    <!-- Page Banner Start -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-area">
                        <h2>Our Rooms</h2>
                        <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                        <a href="{{ route('index') }}" class="btn btn-fill">Home</a>
                        <a href="#" class="btn btn-fill btn-default">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Rooms Details Body Start-->
    <div class="rooms-details-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <!-- Rooms Box Start-->
                    <div class="thumbnail rooms-box clearfix">
                        <img src="ht/image1.jpeg" alt="bedroom-1">
                        <!-- detail -->
                        <div class="caption detail">
                            <!-- Header -->
                            <header class="clearfix">
                                <div class="pull-left">
                                    <h5 class="title">
                                        <a href="rooms-details.html">Family Suite</a>
                                    </h5>
                                    <ul class="custom-list">
                                        <li>
                                            <a href="#">1 bed</a> /
                                        </li>
                                        <li>
                                            <a href="#">4 People</a> /
                                        </li>
                                        <li>
                                            <a href="#">hills view</a> 
                                        </li>
                                    </ul>
                                </div>
                                <!-- Price -->
                                <div class="price">
                                    <span>from ₹6500</span>
                                </div>
                           </header>
                            <!-- Paragraph -->
                            <p>Family Suite pack with 4 person and 6 rooms.</p>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-air-conditioner"></i>
                                    <span>Ac</span>
                                </li>
                                <li>
                                    <i class="flaticon-air-conditioner"></i>
                                    <span>Room Service</span>
                                </li>
                                <li>
                                    <i class="flaticon-wifi"></i>
                                    <span>Wifi Access</span>
                                </li>
                                <li>
                                    <i class="flaticon-car-parking"></i>
                                    <span>Parking</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV</span>
                                </li>
                            </ul>
                            <!-- Btn Div-->
                           {{--  <div class="btn-div">
                                <a href="rooms-details.html">
                                    <span class="read-more">Ream More</span>
                                    <span class="icon-arrow-right2 bg-danger">
                                        <i class="fa  fa-angle-right"></i>
                                    </span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Rooms Box End-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <!-- Rooms Box Start-->
                    <div class="thumbnail rooms-box clearfix">
                        <img src="ht/image2.jpeg" alt="bedroom-2">
                        <!-- detail -->
                        <div class="caption detail">
                            <!-- Header -->
                            <header class="clearfix">
                                <div class="pull-left">
                                    <h5 class="title">
                                        <a href="rooms-details.html">King Suite</a>
                                    </h5>
                                    <ul class="custom-list">
                                        <li>
                                            <a href="#">1 bed</a> /
                                        </li>
                                        <li>
                                            <a href="#">2 People</a> /
                                        </li>
                                        <li>
                                            <a href="#">sea  view</a> 
                                        </li>
                                    </ul>
                                </div>
                                <!-- Price -->
                                <div class="price">
                                    <span>from ₹6000</span>
                                </div>
                           </header>
                            <!-- Paragraph -->
                            <p>King Suite.</p>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-air-conditioner"></i>
                                    <span>Ac</span>
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    <span>Room Service</span>
                                </li>
                                <li>
                                    <i class="flaticon-wifi"></i>
                                    <span>Wifi Access</span>
                                </li>
                                <li>
                                    <i class="flaticon-car-parking"></i>
                                    <span>Parking</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV</span>
                                </li>
                            </ul>
                            <!-- Btn Div-->
                            {{-- <div class="btn-div">
                                <a href="rooms-details.html">
                                    <span class="read-more">Ream More</span>
                                    <span class="icon-arrow-right2 bg-danger">
                                        <i class="fa  fa-angle-right"></i>
                                    </span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Rooms Box End-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <!-- Rooms Box Start-->
                    <div class="thumbnail rooms-box clearfix">
                        <img src="ht/image3.jpeg" alt="bedroom-6">
                        <!-- detail -->
                        <div class="caption detail">
                            <!-- Header -->
                            <header class="clearfix">
                                <div class="pull-left">
                                    <h5 class="title">
                                        <a href="rooms-details.html">Honeymoon Suite</a>
                                    </h5>
                                    <ul class="custom-list">
                                        <li>
                                            <a href="#">1 bed</a> /
                                        </li>
                                        <li>
                                            <a href="#">2 People</a> /
                                        </li>
                                        <li>
                                            <a href="#">sea  view</a> 
                                        </li>
                                    </ul>
                                </div>
                                <!-- Price -->
                                <div class="price">
                                    <span>from ₹12000</span>
                                </div>
                           </header>
                            <!-- Paragraph -->
                            <p>Your honeymoon suite.</p>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-air-conditioner"></i>
                                    <span>Ac</span>
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    <span>Room Service</span>
                                </li>
                                <li>
                                    <i class="flaticon-wifi"></i>
                                    <span>Wifi Access</span>
                                </li>
                                <li>
                                    <i class="flaticon-car-parking"></i>
                                    <span>Parking</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV</span>
                                </li>
                            </ul>
                            <!-- Btn Div-->
                            {{-- <div class="btn-div">
                                <a href="rooms-details.html">
                                    <span class="read-more">Ream More</span>
                                    <span class="icon-arrow-right2 bg-danger">
                                        <i class="fa  fa-angle-right"></i>
                                    </span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Rooms Box End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Details Body End-->
@endsection