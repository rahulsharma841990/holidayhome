@extends('layouts.website')
@section('content')
    <!-- Page Banner Start -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-area">
                        <h2>ABout Us</h2>
                        <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                        <a href="index.html" class="btn btn-fill">Home</a>
                        <a href="about.html" class="btn btn-fill btn-default">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- About Item Start -->
    <div class="about-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="rooms-detail-slider simple-slider">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="img/ht/img1.jpeg" class="img-preview" alt="About">
                                    </div>
                                    <div class="item">
                                        <img src="img/ht/img2.jpeg" class="img-preview" alt="About">
                                    </div>
                                    <div class="item">
                                        <img src="img/ht/img3.jpeg" class="img-preview" alt="About">
                                    </div>
                                    <div class="item active">
                                        <img src="img/ht/img4.jpeg" class="img-preview" alt="About">
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
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text">
                        <h2>About Khaijjar</h2>
                        <p>Dalhousie is a hill resort town in the Chamba District of Himachal Pradesh in India at 32.53° N 75.98° E and 2000 meters (6400 feet) altitude.

                            Dalhousie is a quiet hill station with little night life, best suited for people who want to de-stress, who like the quiet, serene atmosphere, and for honeymooners, ideal for long walks picnics and treks. It is not recommended for people who want discos, malls and multiplexes. While there is plenty to do, see and experience, Dalhousie exudes an old-world charm and it seems like it hasn't quite caught up with the rest of the world yet.

                            Lord Dalhousie founded the town in 1854 because its fresh and peaceful atmosphere and healthy surroundings enchanted him. The British acquired five hills — Kathalagh, Potreyn, Terah (now called Moti Tibba by the locals), Bakrota and Bhangora — from the ruler of the Chamba State for developing the area as a sanatorium; in return, his taxes were reduced. The project originated with Lt. Col. Napier, then Chief Engineer of Punjab; (‘afterwards Lord Napier of Magdala”). Dr. Clemenger of the 49th Native infantry did the surveying. In 1851 a spot where the Dayan Kund Ridge (now Dain Kund) breaks in to spurs was selected for the project and Kathalagh was identified for the construction of Convalescent Depot..</p>
                    </div>
                </div>
                <!-- About Item End -->
            </div>
        </div>
    </div>
    <!-- About Item End -->
@endsection