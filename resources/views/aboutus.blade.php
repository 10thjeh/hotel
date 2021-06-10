@extends('layout/front/homeIndex')
@section('content')
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
        <title>Crustycation - About Us</title>
    </head>
    <body>  
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Tentang Kami</h2>
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Blog Categorie Area =================-->
        <div class="container">
        <div class="card__collection clear-fix">
            <div class="tengah">
            <divs class="cards cards--two" data-aos="flip-right">
            <img src="{{asset('front/image/ChadRaidenBar.png')}}" class="img-responsive" alt="Cards Image">
                <span class="cards--two__rect"></span>
                <span class="cards--two__tri"></span>
                <p>Raja Darwin - 41790<br> UI/UX Designer<br></p>   
              </divs>
              <divs class="cards cards--two" data-aos="flip-up">
                <img src="{{asset('front/image/ChadFarrelBar.png')}}" class="img-responsive" alt="Cards Image">
                <span class="cards--two__rect"></span>
                <span class="cards--two__tri"></span>
                <p>Indira Hafiz - 41794<br>Frontend Programmer</p>
              </divs>
              <div class="cards cards--two" data-aos="flip-left">
              <img src="{{asset('front/image/ChadJesseBar.png')}}" class="img-responsive" alt="Cards Image">
                <span class="cards--two__rect"></span>
                <span class="cards--two__tri"></span>
                <p>Jesse Evans - 42219<br>Backend Programmer</p>
              </div>
            </div>
            </div>
        </div>
            <style>
                @import 'https://fonts.googleapis.com/css?family=Do+Hyeon';
        *,
        *:before,
        *:after {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        
        .tengah {}
        .clear-fix:after {
          display: block;
          clear: both;
          content: "";
        }
        
        .img-responsive {
          max-width: 100%;
          height: auto;
        }
        
        .card__collection {
          position: relative;
          display: block;
          /* background: rgba(10, 10, 10, 0.5); */
          padding: 10px;
          font-family: "Do Hyeon", sans-serif;
          overflow: hidden;
        }
        .card__collection .cards {
          width: 300px;
          height: 400px;
          display: block;
          background-size: cover;
          float: left;
          border-radius: 15px;
          position: relative;
          overflow: hidden;
          background-position: center;
          margin-left: 70px;
          margin-top: 10px;
        }
        .card__collection .cards--one {
          backface-visiblility: hidden;
        }
        .card__collection .cards--one:hover:after {
          bottom: -20px;
        }
        .card__collection .cards--one:hover:before {
          bottom: -10px;
        }
        .card__collection .cards--one:hover .cards--one__rect {
          left: 45%;
        }
        .card__collection .cards--one:hover .cards--one__rect--back {
          left: 50%;
        }
        .card__collection .cards--one::after {
          content: "";
          display: block;
          position: absolute;
          height: 70px;
          transform: rotate(-3deg);
          background: #e660e3;
          position: absolute;
          bottom: -80px;
          left: 0;
          right: -10px;
          z-index: 9;
          transition: all 0.2s ease-in;
          transition-delay: 0.3s;
        }
        .card__collection .cards--one:before {
          content: "";
          display: block;
          position: absolute;
          height: 80px;
          transform: rotate(-3deg);
          bottom: -90px;
          left: 0;
          background: #fff;
          right: -10px;
          z-index: 5;
          transition: all 0.2s ease-in;
          transition-delay: 0.1s;
        }
        .card__collection .cards--one__rect {
          color: #fff;
          text-transform: uppercase;
          font-size: 18px;
          background: #0f9bc0;
          width: 126px;
          height: 55px;
          transform: skewY(5deg);
          position: absolute;
          display: block;
          top: 60%;
          left: -45%;
          z-index: 1;
          line-height: 3.3rem;
          text-align: center;
          transition: all 0.2s ease-in;
        }
        .card__collection .cards--one__rect--back {
          display: block;
          background: rgba(34, 65, 154, 0.8);
          width: 126px;
          height: 55px;
          transform: skewY(7deg);
          position: absolute;
          top: 65%;
          left: -50%;
          transition: all 0.2s ease-in;
          transition-delay: 0.3s;
        }
        .card__collection .cards--one__rect p {
          transform: skewY(-7deg);
          position: relative;
        }
        .card__collection .cards--two {
          position: relative;
          backface-visibility: hidden;
        }
        .card__collection .cards--two p {
          position: absolute;
          top: 83%;
          left: -100%;
          text-transform: capitalize;
          color: #fff;
          font-size: 20px;
          z-index: 8;
          transition: all 0.6s ease;
        }
        .card__collection .cards--two:hover p {
          left: 8%;
        }
        .card__collection .cards--two:hover img {
          transform: translateY(-15px);
        }
        .card__collection .cards--two:hover .cards--two__rect {
          top: 75%;
        }
        .card__collection .cards--two:hover .cards--two__rect:before {
          transform: translateY(15px);
        }
        .card__collection .cards--two:hover li {
          transform: translateY(0);
        }
        .card__collection .cards--two:hover .cards--two__tri {
          right: -40%;
        }
        .card__collection .cards--two:hover .cards--two__tri:before {
          right: -312px;
        }
        .card__collection .cards--two img {
          transition: all 0.2s ease;
        }
        .card__collection .cards--two__tri {
          border-top: 220px solid transparent;
          border-bottom: 190px solid transparent;
          border-right: 288px solid #fff;
          opacity: 0.9;
          position: absolute;
          display: block;
          top: 0;
          right: -100%;
          transition: all 0.3s ease-in-out;
        }
        .card__collection .cards--two__tri:before {
          border-top: 220px solid transparent;
          border-bottom: 190px solid transparent;
          border-right: 288px solid #395ac9;
          position: absolute;
          content: "";
          display: block;
          top: -220px;
          right: -612px;
          transition: all 0.3s ease-in-out;
          transition-delay: 0.2s;
        }
        .card__collection .cards--two__rect {
          width: 750px;
          height: 200px;
          background: #fff;
          display: block;
          position: absolute;
          top: 175%;
          left: -78%;
          transform: rotate(30deg);
          z-index: 5;
          opacity: 0.9;
          transition: all 0.3s ease-in-out;
        }
        .card__collection .cards--two__rect:before {
          content: "";
          display: block;
          width: 100%;
          position: relative;
          height: 100%;
          background: #395ac9;
          transform: translateY(200px);
          z-index: 2;
          transition: all 0.3s ease-in-out;
          transition-delay: 0.1s;
        }
        .card__collection .cards--two ul {
          list-style: none;
          position: absolute;
          bottom: 0;
          left: 10px;
          z-index: 9;
        }
        .card__collection .cards--two ul li {
          display: inline-block;
          font-size: 16px;
          margin: 7px;
          color: #fff;
          transition: all 0.2s ease-in-out;
          transform: translateY(100px);
        }
        .card__collection .cards--two ul li:nth-child(2) {
          transition-delay: 0.2s;
        }
        .card__collection .cards--two ul li:nth-child(3) {
          transition-delay: 0.3s;
        }
        .card__collection .cards--two ul li:nth-child(4) {
          transition-delay: 0.4s;
        }
        .card__collection .cards--three {
          position: relative;
          z-index: 10;
        }
        .card__collection .cards--three:hover .cards--three__rect-1 {
          left: 10%;
        }
        .card__collection .cards--three:hover .cards--three__rect-1 .shadow-1 {
          left: -20%;
        }
        .card__collection .cards--three:hover .cards--three__rect-2 {
          left: 60%;
        }
        .card__collection .cards--three:hover .cards--three__rect-2:before {
          left: -100%;
        }
        .card__collection .cards--three:hover .cards--three__rect-2:after {
          left: 80%;
        }
        .card__collection .cards--three:hover .cards--three__rect-2 .shadow-2 {
          left: -10%;
        }
        .card__collection .cards--three:hover .cards--three__circle {
          transform: scale(1);
        }
        .card__collection .cards--three:hover .cards--three__circle:before {
          transform: scale(0.9);
        }
        .card__collection .cards--three:hover .cards--three__list li {
          transform: translateX(0);
        }
        .card__collection .cards--three__rect-1 {
          background: #fff;
          width: 200px;
          height: 110px;
          transform: skewX(-20deg);
          display: block;
          position: absolute;
          top: 73%;
          opacity: 0.9;
          left: -100%;
          z-index: 8;
          transition: all 0.5s ease-in;
        }
        .card__collection .cards--three__rect-1 p {
          font-size: 20px;
          color: #fff;
          transform: skewX(20deg);
          line-height: 6rem;
        }
        .card__collection .cards--three__rect-1 .shadow-1 {
          background: #9b1308;
          width: 230px;
          height: 100px;
          display: block;
          position: absolute;
          left: -200%;
          z-index: -1;
          transition: all 0.3s ease-in;
        }
        .card__collection .cards--three__rect-2 {
          width: 100px;
          height: 70px;
          background: #fff;
          position: absolute;
          top: 65%;
          left: 1000%;
          opacity: 0.9;
          transform: skewX(-20deg);
          z-index: 8;
          transition: all 0.5s ease-in;
        }
        .card__collection .cards--three__rect-2::before {
          content: "";
          display: block;
          width: 50px;
          height: 40px;
          background: #57ccfd;
          opacity: 1;
          position: absolute;
          left: 500%;
          top: 10%;
          transition: all 0.3s ease-in;
        }
        .card__collection .cards--three__rect-2::after {
          content: "";
          display: block;
          width: 50px;
          height: 40px;
          background: #9b1308;
          opacity: 1;
          position: absolute;
          left: 500%;
          top: 114%;
          transition: all 0.5s ease-in;
          transition-delay: 0.2s;
        }
        .card__collection .cards--three__rect-2 .shadow-2 {
          background: #57ccfd;
          width: 100%;
          height: 100%;
          display: block;
          position: absolute;
          top: -10%;
          left: 500%;
          transition: all 0.5s ease-in;
          transition-delay: 0.2s;
        }
        .card__collection .cards--three__circle {
          width: 220px;
          height: 220px;
          border-radius: 50%;
          background: #fff;
          position: absolute;
          top: -15%;
          left: 50%;
          opacity: 0.9;
          transform: scale(0);
          transition: all 0.3s ease;
        }
        .card__collection .cards--three__circle:before {
          content: "";
          display: block;
          width: 100%;
          height: 100%;
          background: #9b1308;
          border-radius: 50%;
          transform: scale(0);
          transition: all 0.3s ease;
          transition-delay: 0.2s;
        }
        .card__collection .cards--three__list {
          list-style: none;
          position: absolute;
          top: -9px;
          right: 7px;
          padding-top: 60px;
          transition: all 0.4s ease;
        }
        .card__collection .cards--three__list li {
          display: inline-block;
          margin: 4px;
          color: #fff;
          width: 25px;
          height: 25px;
          border-radius: 50%;
          background: rgba(87, 204, 253, 0.9);
          text-align: center;
          line-height: 1.7rem;
          font-size: 12px;
          transition: all 0.3s ease;
          transform: translateX(500%);
        }
        .card__collection .cards--three__list li:nth-child(1) {
          transition-delay: 0.2s;
        }
        .card__collection .cards--three__list li:nth-child(2) {
          transition-delay: 0.3s;
        }
        .card__collection .cards--three__list li:nth-child(3) {
          transition-delay: 0.4s;
        }
            </style>
        <!--================Blog Categorie Area =================-->  
    </body>
