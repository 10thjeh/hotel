@extends('layout/front/homeIndex')
@section('content')

<!--================Banner Area =================-->
<section class="banner_area" id="header">
            <div class="booking_table d_flex align-items-center" data-aos="flip-down">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Memiliki rasa jenuh karena UAS?</h6>
						<h2>Rilekskan Pikiran Anda</h2>
						<p>Kami menyediakan berbagai macam Hotel dengan kualitas dunia<br> Kenyamanan Pelanggan adalah Tujuan Kami</p>
						<a href="{{url('home#akomodasigan')}}" class="btn theme_btn button_hover js-scroll-trigger">Mari Lihat</a>
					</div>
				</div>
            </div>
            <form action="{{url('/hotel')}}" method="post">
              @csrf
              <div class="hotel_booking_area position">
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
                                                      <input type='text' name="arrival" class="form-control" placeholder="Arrival Date"/>
                                                      <span class="input-group-addon">
                                                          <i class="fa fa-calendar" aria-hidden="true"></i>
                                                      </span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class='input-group date' id='datetimepicker1'>
                                                      <input type='text' name="departure" class="form-control" placeholder="Departure Date"/>
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
                                                  <select class="wide" name="city">
                                                      <option data-display="Hotel">Lokasi</option>
                                                      @foreach($cities as $city)
                                                      <option value="{{$city->idLokasi}}">{{$city->namaLokasi}}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="book_tabel_item">
                                             <!-- <div class="input-group">
                                                  <select class="wide">

                                                  </select>
                                              </div>-->
                                              <button type="submit" class="book_now_btn button_hover" name="location">Book now</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </form>
        </section>
        <!--================Banner Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap" id="akomodasigan">
            <div class="container">
                <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="title_color">Best Hotel</h2>
                    <p>Berikut ini adalah 3 hotel terbaik yang bekerja sama dengan Crustycation. Kami mengutamakan kenyamanan dan keamanan para tamu</p>
                </div>
                <div class="wrappers" >
                    @foreach($hotels as $hotel)
                        <div class="cards" data-aos="flip-down">
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
                                        <div class="price">38??? / day</div>
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
        <!--================ Accomodation Area  =================-->

        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap" id="fasilitas">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center" data-aos="fade-up">
                    <h2 class="title_w">Fasilitas Crustycation</h2>
                    <p>Hotel yang bekerja sama dengan kami menyediakan fasilitas yang sangat mumpuni</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6" data-aos="flip-left">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Pada hotel yang kami tunjukan memberikan rasa yang merindukan <br>"A house is not a home unless it contains food and fire for the mind as well as the body". -Benjamin Franklin</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="flip-up">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Gymnesium</h4>
                            <p>Untuk anda yang ingin mengisi waktu luang anda dengan kebugaran namun tapi tidak bisa keluar. Pada hotel kami memberikan Gym yang memiliki fasilitas yang lengkap.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="flip-right">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <p>Kolam renang di dalam hotel pilihan kami, dipastikan bersih dan aman. Sehingga anak -  anak dapat bermain air dengan rekreasi yang sudah disediaka.n</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="flip-left">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <p>Pada beberapa hotel yang kami, anda dapat menyewakan kendaraan untuk jalan jalan keluar. Mulai dari mobil sport hingga mobil keluarga, sehingga anda tidak perlu mencari lagi.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="flip-up">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Sports Club</h4>
                            <p>Jika anda belum mengerti dalam menggunakan alat pada gym atau anda ingin melakukan aktifitas olahraga bersama dapat mengikuti Sports Club pada hotel.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="flip-right">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p>Dunia malam untuk 21+ menyediakan live music untuk menemani malam kalian dan alkohol yang dapat membantu anda untuk menghilangkan penat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap" id="about">
            <div class="container" data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center" >
                        <div class="about_content ">
                            <h2 class="title title_color">Tentang Kami</h2>
                            <p>Tiga mahasiswa yang berjuang dibawah serangan pandemi, yang bekerja demi sebuah nilai. Dengan harapan membangun project bersama untuk mendapatkan sepeser uang makan tanpa harus membebani orang tua, Farrel seorang mahasiswa yang mengulang 2 tahun masa kuliah nya, Darwin seorang desainer dan perfeksionis yang mendorong kelompok kami, dan Jesse Sebagai pendongkrak moral dan pusat otak di dalam kelompok kami.</p>
                            <a href="#" class="button_hover theme_btn_two">KONTAK KAMI</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset('front/image/LogoDepan.png')}}" alt="img" style="border-radius:12px;">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->

        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container"data-aos="fade-left"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="section_title text-center">
                    <h2 class="title_color">Testimonial dari Klien</h2>
                    <p>Bukti bahwa kami memberikan pelayanan yang terbaik se Jabodetabek</p>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="{{asset('front/image/FarrelBulet1.png')}}" alt="">
                        <div class="media-body">
                            <p>Saya sudah menggunakan crustycation sejak saya SMA. Dari dulu hingga sekarang memang memberikan yang terbaik</p>
                            <a href="#"><h4 class="sec_h4">Indira Hafiz Alfarrel</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="{{asset('front/image/JesseBulet1.png')}}" alt="">
                        <div class="media-body">
                            <p>Saya sudah menggunakan crustycation sejak saya SD. Dari dulu hingga sekarang memang memberikan yang terbaik</p>
                            <a href="#"><h4 class="sec_h4">Jesse Evans</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="{{asset('front/image/DarwinBulet1.png')}}" alt="">
                        <div class="media-body">
                            <p>Saya sudah menggunakan crustycation sejak saya SMP. Dari dulu hingga sekarang memang memberikan yang terbaik</p>
                            <a href="#"><h4 class="sec_h4">Raja Darwin</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->
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



@endsection