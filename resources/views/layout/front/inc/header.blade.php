<header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{url('home')}}"><img src="{{asset('front/image/CRUSTYCATION1.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">

                            <li class="nav-item active"><a class="nav-link" href="{{url('home#header')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('home#akomodasigan')}}">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('home#fasilitas')}}">Facilities</a></li> 
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('home#about')}}">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Hotel</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{url('/register')}}">Sign Up</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script>
(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using anime.js
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').on('click', function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ?
                target :
                $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                anime({
                    targets: 'html, body',
                    scrollTop: target.offset().top - 20,
                    duration: 1000,
                    easing: 'easeInOutExpo'
                });
                return false;
            }
        }
    });
})(jQuery); // End of use strict
        </script>
