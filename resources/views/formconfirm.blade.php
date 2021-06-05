@extends('layout/front/homeIndex')
@section('content')
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
        <title>Crustycation - Confirmation</title>
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
                    <h2 class="page-cover-tittle">Konfirmasi Data</h2>
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <div class="col-md-8 offset-md-2">
            <span class="anchor" id="formUserEdit"></span>
           

            <!-- form user info -->
                <br>
                <div class="card-header">
                    <h3 class="mb-0">User Information</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama Lengkap</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nomor Telepon</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Jumlah Kamar</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" placeholder="Jumlah Kamar" min="1" max="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Check-In</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Check-Out</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Harga</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" placeholder="Harga">
                            </div>
                        </div>
                        <!-- <div class="form-group row"> -->
                            <!-- <label class="col-lg-3 col-form-label form-control-label">Password</label> -->
                            <!-- <div class="col-lg-9"> -->
                                <!-- <input class="form-control" type="password" value="11111122333"> -->
                            <!-- </div> -->
                        <!-- </div> -->
                        <!-- <div class="form-group row"> -->
                            <!-- <label class="col-lg-3 col-form-label form-control-label">Confirm</label> -->
                            <!-- <div class="col-lg-9"> -->
                                <!-- <input class="form-control" type="password" value="11111122333"> -->
                            <!-- </div> -->
                        <!-- </div> -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
 
            <!-- /form user info -->

        </div>
    </body>
