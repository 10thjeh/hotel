@extends('layout/front/homeIndex')
@section('content')

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
        <title>Crustycation - Hotel Kami</title>
        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css"> -->
        <!-- main css -->
        <!-- <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css"> -->
    </head>
    <body>
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Silahkan Pilih Hotel</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('home')}}">Home</a></li>
                        <li class="active">Hotel</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="batas">
              <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color" >Best Hotel</h2>
                    <p>Berikut ini adalah 3 hotel terbaik yang bekerja sama dengan Crustycation. Kami mengutamakan kenyamanan dan keamanan para tamu</p>
                </div>
              </div>
                <!--================ Buat Ngeluarin hotel disini yeee  =================-->
                    <!-- <div class="wrappers">
                    @foreach($hotels as $hotel)
                        <div class="cards">
                            <input type="checkbox" id="{{$hotel->id}}" class="more" aria-hidden="true">
                            <div class="contents">
                                <div class="front">
                                <img src="{{url('image/hotel/'.$hotel->foto)}}" style="  position: absolute; top: 0; left: 0;width: 100%; height: 100%;backface-visibility: hidden; transform-style: preserve-3d; border-radius: 6px;">
                                    <div class="inner">
                                        <h2 style="text-shadow: 4px 2px 5px black;">{{$hotel->nama}}</h2>
                                        <div class="rating" style="text-shadow: 4px 4px 7px black;">
                                            @for($i = 0; $i < $hotel->rating; $i++)
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow; "></i>
                                            @endfor
                                        </div>
                                        <label for="{{$hotel->id}}" class="buttons" aria-hidden="true">
                                            Details
                                        </label>
                                    </div>
                                </div>
                                <div class="backs">
                                    <div class="inner">
                                        <div class="infos">
                                            <span>5</span>
                                            <div class="icon">
                                              <i class="fa fa-users" aria-hidden="true"></i>
                                                <span>people</span>
                                            </div>
                                        </div>
                                        <div class="infos">
                                            <span>4</span>
                                            <div class="icon">
                                              <i class="fas fa-door-open"></i>
                                                <span>rooms</span>
                                            </div>
                                        </div>
                                        <div class="infos">
                                            <span>3</span>
                                            <div class="icon">
                                              <i class="fa fa-bed"></i>
                                                <span>beds</span>
                                            </div>
                                        </div>
                                        <div class="infos">
                                            <span>1</span>
                                            <div class="icon">
                                              <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>bath</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <label for="{{$hotel->id}}" class="buttons return" aria-hidden="true">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </label>
                                            <p>{{$hotel->deskripsi}}</p>
                                        </div>
                                        <div class="location">Warsaw, Poland</div>
                                        <div class="price">38€ / day</div>
                                        <label for="" class="buttons return" aria-hidden="true">
                                            <a href="{{url('/details')}}">BOOK NOW</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div> -->

                    </div>
        </section>
        <!--================ Ini buat nutup si hotel  =================-->