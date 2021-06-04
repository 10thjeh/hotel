@extends('layout/front/homeIndex')
@section('content')

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
        <title>Crustycation - Hotel Kami</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>  
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Silahkan Pilih Hotel</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
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
                    <div class="wrappers">
                        <div class="cards">
                            <input type="checkbox" id="cards1" class="more" aria-hidden="true">
                            <div class="contents">
                                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')">
                                    <div class="inner">
                                        <h2 style="text-shadow: 4px 2px 5px black;">Cozy apartment</h2>
                                        <div class="rating" style="text-shadow: 4px 4px 7px black;">
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow; "></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                        </div>
                                        <label for="cards1" class="buttons" aria-hidden="true">
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates earum nostrum ipsam
                                                ullam, reiciendis nam consectetur? Doloribus voluptate architecto possimus perferendis
                                                tenetur nemo amet temporibus, enim soluta nam, debitis.</p>
                                                <label for="cards1" class="buttons return" aria-hidden="true">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </label>
                                        </div>
                                        <div class="location">Warsaw, Poland</div>
                                        <div class="price">38€ / day</div>
                                        <label for="" class="buttons return" aria-hidden="true">
                                            <a>BOOK NOW</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cards">
                            <input type="checkbox" id="cards1" class="more" aria-hidden="true">
                            <div class="contents">
                                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')">
                                    <div class="inner">
                                        <h2 style="text-shadow: 4px 2px 5px black;">Cozy apartment</h2>
                                        <div class="rating" style="text-shadow: 4px 4px 7px black;">
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow; "></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                        </div>
                                        <label for="cards1" class="buttons" aria-hidden="true">
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates earum nostrum ipsam
                                                ullam, reiciendis nam consectetur? Doloribus voluptate architecto possimus perferendis
                                                tenetur nemo amet temporibus, enim soluta nam, debitis.</p>
                                                <label for="cards1" class="buttons return" aria-hidden="true">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </label>
                                        </div>
                                        <div class="location">Warsaw, Poland</div>
                                        <div class="price">38€ / day</div>
                                        <label for="" class="buttons return" aria-hidden="true">
                                            <a>BOOK NOW</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cards">
                            <input type="checkbox" id="cards1" class="more" aria-hidden="true">
                            <div class="contents">
                                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')">
                                    <div class="inner">
                                        <h2 style="text-shadow: 4px 2px 5px black;">Cozy apartment</h2>
                                        <div class="rating" style="text-shadow: 4px 4px 7px black;">
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow; "></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                                        </div>
                                        <label for="cards1" class="buttons" aria-hidden="true">
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates earum nostrum ipsam
                                                ullam, reiciendis nam consectetur? Doloribus voluptate architecto possimus perferendis
                                                tenetur nemo amet temporibus, enim soluta nam, debitis.</p>
                                                <label for="cards1" class="buttons return" aria-hidden="true">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </label>
                                        </div>
                                        <div class="location">Warsaw, Poland</div>
                                        <div class="price">38€ / day</div>
                                        <label for="" class="buttons return" aria-hidden="true">
                                            <a>BOOK NOW</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
                      <script src="https://use.fontawesome.com/9ca63657ea.js"></script>
           
                    </div>
        </section>
        <!--================ Accomodation Area  =================-->
        <!--================Booking Tabel Area =================-->
        <div class="container">
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
        </div>
        </section>
        <!--================Booking Tabel Area  =================-->
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
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
        </section>
        <!--================ Accomodation Area  =================-->
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
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
  /* background: linear-gradient(40deg, rgba(67, 138, 243, 0.7), rgba(255, 242, 166, 0.7)); */
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