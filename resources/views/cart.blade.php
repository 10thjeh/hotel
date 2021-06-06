@extends('layout/front/homeIndex')
@section('content')
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
        <title>Crustycation - History Pemesanan</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
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
                    <h2 class="page-cover-tittle">History Pemesanan</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <div class="container main-sections" style="margin-top: 10px;">
            <div class="row">
                <div class="col-lg-12 pl-3 pt-3">
                    <table class="table table-hover border bg-white">
                        <thead>
                              <tr>
                                <th>List Pemesanan</th>
                                <th style="width:12%;">Tanggal Order</th>
                                <th style="width:5%;">Hari</th>
                                <th>Total</th>
                                <th>Invoice</th>
                              </tr>
                        </thead>
                        <tbody>
                            <div class="Pesenan">
                              <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-lg-2 Product-imgs">
                                            <img src="ps4gan.png" alt="..." class="img-responsive"/>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="nomargin">Trans Luxury Hotel</h4>
                                            <p>Nama Kamar</p>
                                            <p>Check-In : Kapan</p>
                                            <p>Check-Out : Kapan</p>
                                        </div>
                                    </div>
                                </td>
                                <td> Date </td>
                                <td data-th="Quantity">
                                    <p>1</p>
                                </td>
                                <td>Rp. XXXX</td>
                                <td class="actions" data-th="" style="width:10%;">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-info"></i></button>
                                    <!-- <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								 -->
                                </td>
                              </tr>
                        </div>
                              <tr>
                              </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><a href="#" class="btn btn-warning text-white"><i class="fa fa-angle-left"></i> Kembali</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <!-- <td class="hidden-xs text-center" style="width:10%;"><strong>Total : 47,000</strong></td> -->
                                <!-- <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td> -->
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <style>

            .Product-imgs img{
                width: 100%;
            }
            .main-sections{
                font-family: 'Roboto Condensed', sans-serif;
                margin-top:100px;
            }
            </style>
    </body>
