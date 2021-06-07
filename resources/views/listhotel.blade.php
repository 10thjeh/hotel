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
        <!--================Booking Tabel Area =================-->
        <div class="container">
        
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>CARI<br>RATING<br> HARGA</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                             <div class="row">
                             <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <form action="{{url('/hotel')}}" method="post">
                                    @csrf
                                        <divs class="form-group">
                                            <div class='input-group date'>
                                                <input type='number' class="form-control" placeholder="Harga" name="harga" min="1"/>
                                            </div>
                                        </div>
                                        <div class="book_tabel_item">
                                            <button type="submit" class="book_now_btn button_hover" name="price">CARI HARGA</button>
                                        </div>
                                    </form>
                                    <form action="{{url('/hotel')}}" method="post">
                                    @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="wide" name="rating">
                                                    <option data-display="Rating">Rating</option>
                                                    <option value="1">Bintang 1</option>
                                                    <option value="2">Bintang 2</option>
                                                    <option value="3">Bintang 3</option>
                                                    <option value="4">Bintang 4</option>
                                                    <option value="5">Bintnag 5</option>
                                                    <option value="5">Bintang 5</option>
                                                </select>
                                            </div>
                                            <div class="book_tabel_item">
                                                <button type="submit" class="book_now_btn button_hover" name="rate">CARI RATING</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                    <a class="book_now_btn button_hover" href="#">CARI HARGA</a>
                                    </div>
                                    <div class="input-group">
                                    <a class="book_now_btn button_hover" href="#">CARI RATING</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!--================Booking Tabel Area  =================-->
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="batas">
              <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color" >Out Hotel</h2>
                    <p>Berikut ini adalah 3 hotel terbaik yang bekerja sama dengan Crustycation. Kami mengutamakan kenyamanan dan keamanan para tamu</p>
                </div>
              </div>
                <!--================ Buat Ngeluarin hotel disini yeee  =================-->
                    <div class="wrappers">
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
                                        <div class="location">{{$hotel->namaLokasi}}</div>
                                        <div class="price"><i class="fa fa-star" aria-hidden="true"></i> {{$hotel->rating}} </div>
                                        <label for="" class="buttons return" aria-hidden="true">
                                            <a href="{{url('/hoteldetail/'.$hotel->id)}}">BOOK NOW</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>

                    </div>
        </section>
        <!--================ Ini buat nutup si hotel  =================-->
        <!--================Booking Tabel Area =================-->
        <!-- <div class="container">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>Book<br> Your Hotel</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" placeholder="Arrival Date"/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Departure Date"/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Hotel">Hotel</option>
                                            <option value="1">Old</option>
                                            <option value="2">Younger</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Room Type">Room Type</option>
                                            <option value="1">Child</option>
                                            <option value="2">Baby</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">

                                        </select>
                                    </div>
                                    <a class="book_now_btn button_hover" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        </section>
        <!--================Booking Tabel Area  =================-->
        <!--================ Accomodation Area  =================-->
        <!-- <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">List Hotel</h2>
                    <p>Berikut ini adalah list hotel yang bekerja sama dengan Crustycation. Kami mengutamakan kenyamanan dan keamanan para tamu</p>
                </div>
                <div class="row accomodation_two">
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                            <h5>$250<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room2.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Single Deluxe Room</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room3.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Honeymoon Suit</h4></a>
                            <h5>$750<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room4.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Economy Double</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                            <h5>$250<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room2.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Single Deluxe Room</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room3.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Honeymoon Suit</h4></a>
                            <h5>$750<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room4.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Economy Double</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================ Accomodation Area  =================-->
        <style>

.bodi {
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  font-family: "Montserrat", sans-serif;
}
        .wrappers {
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
}

.cards {
  width: 420px;
  height: 340px;
  margin: 1em;
  perspective: 1500px;
}
.cards .contents {
  position: relative;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: transform 0.8s cubic-bezier(0.75, 0, 0.85, 1);
}

.more {
  display: none;
}
.more:checked ~ .contents {
  transform: rotateY(180deg);
}

.front,
.backs {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  transform-style: preserve-3d;
  border-radius: 6px;
}
.front .inner,
.backs .inner {
  height: 100%;
  display: grid;
  padding: 1.5em;
  transform: translateZ(80px) scale(0.94);
}

.front {
  background-color: #fff;
  background-size: cover;
  background-position: center center;

}
.front:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  border-radius: 6px;
  backface-visibility: hidden;
  /* background: linear-gradient(1deg, rgb(0,0,0,0.7), rgba(128,128,128, 0.7)); */
  /* background: linear-gradient(40deg, rgba(120, 138, 243, 0.7), rgba(255, 242, 166, 0.7));  */
}
.front .inner {
  grid-template-rows: 5fr 1fr 1fr 2fr 1fr;
  justify-items: center;
}
.front h2 {
  grid-row: 2;
  margin-bottom: 0.3em;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #fff;
  font-weight: 500;
  text-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
}
.front .rating {
  grid-row: 3;
  color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
  display: flex;
  flex-flow: row nowrap;
}
.front .rating i {
  margin: 0 1px;
}

.backs {
  transform: rotateY(180deg);
  background-color: #fff;
  border: 2px solid #f0f0f0;
}
.backs .inner {
  grid-template-rows: 1fr 2fr 1fr 2fr 14fr 1fr 1fr;
  grid-template-columns: repeat(4, auto);
  grid-column-gap: 0.8em;
  justify-items: center;
}
.backs .infos {
  position: relative;
  display: flex;
  align-items: center;
  color: #355cc9;
  grid-row: 3;
}
.backs .infos:not(:first-of-type):before {
  content: "";
  position: absolute;
  left: -0.9em;
  height: 18px;
  width: 1px;
  backsground-color: #ccc;
}
.backs .infos span {
  font-size: 2em;
  font-weight: 700;
}
.backs .infos i {
  font-size: 1.2em;
}
.backs .infos i:before {
  background: linear-gradient(40deg, #355cc9, #438af3);
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
}
.backs .infos .icon {
  margin-left: 0.3em;
}
.backs .infos .icon span {
  display: block;
  margin-top: -0.25em;
  font-size: 0.8em;
  font-weight: 600;
  white-space: nowrap;
}
.backs .description {
  grid-row: 5;
  grid-column: 1/-1;
  font-size: 0.86em;
  border-radius: 5px;
  font-weight: 600;
  line-height: 1.4em;
  overflow: auto;
  color: #355cc9;
  padding-right: 10px;
}
.backs .location,
.backs .price {
  font-weight: 600;
  color: #355cc9;
  grid-row: 1;
  font-size: 0.86em;
}
.backs .location {
  grid-column: 1/3;
  justify-self: left;
}
.backs .price {
  grid-column: 3/-1;
  justify-self: right;
}
.backs .buttons {
  grid-column: 1/-1;
  justify-self: center;
}

.buttons {
  grid-row: -1;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  display: block;
  padding: 0 1.5em;
  height: 3em;
  line-height: 2.9em;
  min-width: 3em;
  background-color: transparent;
  border: solid 2px #fff;
  color: #fff;
  border-radius: 4px;
  text-align: center;
  left: 50%;
  backface-visibility: hidden;
  transition: 0.3s ease-in-out;
  text-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
}
.buttons:hover {
  background-color: #fff;
  box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
  text-shadow: none;
  color: #355cc9;
}
.buttons.return {
  line-height: 3em;
  color: #355cc9;
  border-color: #355cc9;
  text-shadow: none;
}
.buttons.return:hover {
  background-color: #355cc9;
  color: #fff;
  box-shadow: none;
}

::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #859ddf;
}

::-webkit-scrollbar-thumb:hover {
  background: #355cc9;
}
    </style>
