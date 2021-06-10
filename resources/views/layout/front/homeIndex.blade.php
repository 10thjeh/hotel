<!doctype html>
<html lang="en">
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
        <!-- AOS css-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <!--================Header Area =================-->
        @section('header')
            @include('layout.front.inc.header')
        @show
        <!--================Header Area =================-->
        
        <!--================ Content =================-->
        @yield('content')
        <!--================ Content =================-->

        <!--================ start footer Area  =================-->	
        @section('footer')
            @include('layout.front.inc.footer')
        @show
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('front/js/popper.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('front/js/mail-script.js')}}"></script>
        <script src="{{asset('front/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('front/vendors/nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('front/js/mail-script.js')}}"></script>
        <script src="{{asset('front/js/stellar.js')}}"></script>
        <script src="{{asset('front/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('front/js/custom.js')}}"></script>
        <!-- JS AOS-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>