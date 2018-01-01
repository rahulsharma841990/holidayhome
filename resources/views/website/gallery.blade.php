@extends('layouts.website')
@section('content')

    <!-- Page Banner Start -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-area">
                        <h2>Our Gallery</h2>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Our Gallery</h1>
                    <div class="hotel-details">                       
                        <!-- Rooms Detail Slider Start-->
                        <div class="rooms-detail-slider simple-slider">
                            <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                <div class="carousel-outer">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img src="ht/1.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="ht/2.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="ht/3.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="ht/12.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="ht/5.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="ht/6.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="ht/7.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item active">
                                            <img src="ht/9.jpeg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                        <span class="slider-mover-left no-bg" aria-hidden="true">
                                            <img src="img/chevron-left.png" alt="chevron-left">
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                            <img src="img/chevron-right.png" alt="chevron-right">
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators thumbs visible-lg visible-md">
                                    <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="ht/1.jpeg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="ht/2.jpeg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="ht/3.jpeg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="ht/12.jpeg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="ht/5.jpeg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="ht/6.jpeg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="6" class="active"><img src="ht/7.jpeg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="7" class="active"><img src="ht/9.jpeg" alt="Chevrolet Impala"></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Car Detail Slider End-->
                        <br/>
                    </div>
                    <!-- content div End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Details Body End-->
@endsection