@extends('layout/front/homeIndex')
@section('content')

    <head>
        <!-- Required meta tags -->
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Profil Saya - Crustycation</title>
        <!-- Bootstrap CSS -->
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Profil Saya</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul class="p-0 m-0" style="list-style: none;">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @foreach($users as $user)
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                <div class="container bootstrap snippet">
                    <div class="row">
                          <div class="col-sm-10"><h1>Halo, {{$user->nama}}</h1></div>
                        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="{{asset('front/image/CRUSTYCATION1.png')}}"></a></div>
                    </div>
                    <div class="row">
                          <div class="col-sm-3"><!--left col-->

                      <div class="text-center">
                        <form action="{{url('/user/image')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <img src="{{asset('image/users/'.$user->foto)}}" class="avatar img-circle img-thumbnail" alt="avatar">
                          <h6>Upload a different photo...</h6>
                          <input type="file" name="image" class="text-center center-block file-upload">
                          <br>
                          <input type="submit" name="" class="btn btn-primary" value="Submit new photo">
                        </form>
                      </div></hr><br>



                        </div><!--/col-3-->
                        <div class="col-sm-9">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                              </ul>


                          <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <hr>
                                  <form class="form" action="{{url('/user')}}" method="post" id="registrationForm">
                                    @csrf
                                      <div class="form-group">

                                          <div class="col-xs-6">
                                              <label for="first_name"><h4>Nama</h4></label>
                                              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" title="enter your first name if any." value="{{$user->nama}}">
                                          </div>
                                      </div>

                                      <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="tanggaLahir"><h4>Tanggal Lahir</h4></label>
                                            <input type="date" class="form-control" id="tanggaLahir" placeholder="Tanggal Lahir" name="tanggalLahir" title="enter a location" value="{{$user->tanggalLahir}}">
                                        </div>
                                    </div>

                                      <div class="form-group">
                                          <div class="col-xs-6">
                                             <label for="mobile"><h4>Nomor Handphone</h4></label>
                                              <input type="text" class="form-control" name="nomorTelepon" id="mobile" placeholder="Nomor Handphone" title="enter your mobile number if any." value="{{$user->nomorTelepon}}">
                                          </div>
                                      </div>
                                      <div class="form-group">

                                          <div class="col-xs-6">
                                              <label for="email"><h4>Email</h4></label>
                                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="{{$user->email}}" disabled>
                                          </div>
                                      </div>

                                      <div class="form-group">

                                          <div class="col-xs-6">
                                              <label for="password"><h4>Password</h4></label>
                                              <input type="password" class="form-control" name="password" id="password" placeholder="enter your password to confirm changes" title="enter your password to confirm changes.">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                           <div class="col-xs-12">
                                                <br>
                                                  <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Save</button>
                                                   <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                            </div>
                                      </div>
                                  </form>

                              <hr>

                             </div>

                              </div>
                          </div>

                        </div>
                    </div>
            </div>
        </section>
        <!--================End Contact Success and Error message Area =================-->
        @endforeach

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
        <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/custom.js"></script>
    </body>
