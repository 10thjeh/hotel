<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
        <title>Crustycation</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('front/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('front/vendors/owl-carousel/owl.carousel.min.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @section('navbar')
            @include('layout.front.inc.header')
        @show
        <!-- Project -->
        @yield('content')
        <!-- Footer-->
        @section('footer')
            @include('layout.front.inc.footer')
        @show
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('front/js/scripts.js')}}"></script>
    </body>
</html>



<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-
        <link href="{{asset('front/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        
        <!-- Page header-->
        
        <!-- Page Content--
        
        <hr class="my-0" />
        <!-- Call to Action--
        <aside class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p></div>
                    <div class="col-md-4"><a class="btn btn-lg btn-secondary btn-block" href="#!">Call to Action</a></div>
                </div>
            </div>
        </aside>
        <!-- Footer--
        
        <!-- Bootstrap core JS--
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS--
        <script src="{{asset('front/js/scripts.js')}}"></script>
    </body>
</html> -->
