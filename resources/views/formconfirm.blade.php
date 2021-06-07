@extends('layout/front/homeIndex')
@section('content')
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
        <title>Crustycation - Confirmation</title>
        
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
        <!--================Breadcrumb Area =================-->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <div ng-app="myApp" ng-controller="myCtrl" class="col-md-8 offset-md-2">
            <span class="anchor" id="formUserEdit"></span>


            <!-- form user info -->
                <br>
                <div class="card-header">
                    <h3 class="mb-0">Book Confirmation</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" action="{{url('/book')}}" autocomplete="off" method="post">
                      @csrf
                      <input type="text" name="id" value="{{$id}}" hidden>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama Lengkap</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="{{$nama}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nomor Telepon</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="nomorTelepon" placeholder="Nomor Telepon" value="{{$nomorTelepon}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email" placeholder="Email" value="{{session('email')}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Jumlah Kamar</label>
                            <div class="col-lg-9">
                                <input class="form-control" oninput="updateHarga();" name="kamar" type="number" id="kamar" ng-bind="kamar" placeholder="Jumlah Kamar" value="1" min="1" max="{{$max}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Check-In</label>
                            <div class="col-lg-9">
                                <input class="form-control" oninput="updateHarga();" name="startDate" id="startDate" type="date" value="{{$startDate}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Check-Out</label>
                            <div class="col-lg-9">
                                <input class="form-control" oninput="updateHarga();" name="endDate" id="endDate" type="date" value="{{$endDate}}">
                            </div>
                        </div>
                        <div class="form-group row">
                          <p>Rp <p id="harga">0</p></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" class="btn btn-primary" value="Book!">
                            </div>
                        </div>
                    </form>
                </div>

            <!-- /form user info -->

        </div>
    </body>

    <script type="text/javascript">
      function updateHarga(){
        let arrival = document.getElementById('startDate').value;
        let departure = document.getElementById('endDate').value;
        let object_arrival = new Date(arrival);
        let object_departure = new Date(departure);
        let diff = new Date(object_departure.getTime() - object_arrival.getTime());
        console.log(diff);
        let hargaKamar = {{$harga}};
        let jumlahKamar = document.getElementById('kamar').value;
        let hari = diff.getUTCDate() - 1;
        document.getElementById("harga").innerHTML = hargaKamar * jumlahKamar * hari;
      }

      var app = angular.module('myApp', []);
      app.controller('myCtrl', function($scope){
        let hargaKamar = {{$harga}};
        let jumlahKamar = parseInt($scope.kamar);
        let hari = 5;
        $scope.$watch('harga', function(){
          $scope.harga = hargaKamar * jumlahKamar * hari;
        });

      });
    </script>
