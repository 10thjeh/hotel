@extends('layout/front/homeIndex')
@section('content')
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Crustycation - Hotel</title>
    <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    background:#eee;
}


.product-content {
    border: 1px solid #dfe5e9;
    margin-bottom: 20px;
    margin-top: 12px;
    background: #fff
}

.product-content .carousel-control.left {
    margin-left: 0
}

.product-content .product-image {
    background-color: #fff;
    display: block;
    min-height: 238px;
    overflow: hidden;
    position: relative
}

.product-content .product-deatil {
    border-bottom: 1px solid #dfe5e9;
    padding-bottom: 17px;
    padding-left: 16px;
    padding-top: 16px;
    position: relative;
    background: #fff
}

.product-content .product-deatil h5 a {
    color: #2f383d;
    font-size: 15px;
    line-height: 19px;
    text-decoration: none;
    padding-left: 0;
    margin-left: 0
}

.product-content .product-deatil h5 a span {
    color: #9aa7af;
    display: block;
    font-size: 13px
}

.product-content .product-deatil span.tag1 {
    border-radius: 50%;
    color: #fff;
    font-size: 15px;
    height: 50px;
    padding: 13px 0;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
    width: 50px
}

.product-content .product-deatil span.sale {
    background-color: #21c2f8
}

.product-content .product-deatil span.discount {
    background-color: #71e134
}

.product-content .product-deatil span.hot {
    background-color: #fa9442
}

.product-content .description {
    font-size: 12.5px;
    line-height: 20px;
    padding: 10px 14px 16px 19px;
    background: #fff
}

.product-content .product-info {
    padding: 11px 19px 10px 20px
}

.product-content .product-info a.add-to-cart {
    color: #2f383d;
    font-size: 13px;
    padding-left: 16px
}

.product-content name.a {
    padding: 5px 10px;
    margin-left: 16px
}

.product-info.smart-form .btn {
    padding: 6px 12px;
    margin-left: 12px;
    margin-top: -10px
}

.product-entry .product-deatil {
    border-bottom: 1px solid #dfe5e9;
    padding-bottom: 17px;
    padding-left: 16px;
    padding-top: 16px;
    position: relative
}

.product-entry .product-deatil h5 a {
    color: #2f383d;
    font-size: 15px;
    line-height: 19px;
    text-decoration: none
}

.product-entry .product-deatil h5 a span {
    color: #9aa7af;
    display: block;
    font-size: 13px
}

.load-more-btn {
    background-color: #21c2f8;
    border-bottom: 2px solid #037ca5;
    border-radius: 2px;
    border-top: 2px solid #0cf;
    margin-top: 20px;
    padding: 9px 0;
    width: 100%
}

.product-block .product-deatil p.price-container span,
.product-content .product-deatil p.price-container span,
.product-entry .product-deatil p.price-container span,
.shipping table tbody tr td p.price-container span,
.shopping-items table tbody tr td p.price-container span {
    color: #21c2f8;
    font-family: Lato, sans-serif;
    font-size: 24px;
    line-height: 20px
}

.product-info.smart-form .rating label {
    margin-top: 0
}

.product-wrap .product-image span.tag2 {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.product-wrap .product-image span.sale {
    background-color: #57889c
}

.product-wrap .product-image span.hot {
    background-color: #a90329
}

.shop-btn {
    position: relative
}

.shop-btn>span {
    background: #a90329;
    display: inline-block;
    font-size: 10px;
    box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
    font-weight: 700;
    border-radius: 50%;
    padding: 2px 4px 3px!important;
    text-align: center;
    line-height: normal;
    width: 19px;
    top: -7px;
    left: -7px
}

.description-tabs {
    padding: 30px 0 5px!important
}

.description-tabs .tab-content {
    padding: 10px 0
}

.product-deatil {
    padding: 30px 30px 50px
}

.product-deatil hr+.description-tabs {
    padding: 0 0 5px!important
}

.product-deatil .carousel-control.left,
.product-deatil .carousel-control.right {
    background: none!important
}

.product-deatil .glyphicon {
    color: #3276b1
}

.product-deatil .product-image {
    border-right: none!important
}

.product-deatil .name {
    margin-top: 0;
    margin-bottom: 0
}

.product-deatil .name small {
    display: block
}

.product-deatil .name a {
    margin-left: 0
}

.product-deatil .price-container {
    font-size: 24px;
    margin: 0;
    font-weight: 300
}

.product-deatil .price-container small {
    font-size: 12px
}

.product-deatil .fa-2x {
    font-size: 16px!important
}

.product-deatil .fa-2x>h5 {
    font-size: 12px;
    margin: 0
}

.product-deatil .fa-2x+a,
.product-deatil .fa-2x+a+a {
    font-size: 13px
}

.profile-message ul {
  list-style: none ;  
}

.product-deatil .certified {
    margin-top: 10px
}

.product-deatil .certified ul {
    padding-left: 0
}

.product-deatil .certified ul li:not(first-child) {
    margin-left: -3px
}

.product-deatil .certified ul li {
    display: inline-block;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 13px 19px
}

.product-deatil .certified ul li:first-child {
    border-right: none
}

.product-deatil .certified ul li a {
    text-align: left;
    font-size: 12px;
    color: #6d7a83;
    line-height: 16px;
    text-decoration: none
}

.product-deatil .certified ul li a span {
    display: block;
    color: #21c2f8;
    font-size: 13px;
    font-weight: 700;
    text-align: center
}

.product-deatil .message-text {
    width: calc(100% - 70px)
}

@media only screen and (min-width:1024px) {
    .product-content div[class*=col-md-4] {
        padding-right: 0
    }
    .product-content div[class*=col-md-8] {
        padding: 0 13px 0 0
    }
    .product-wrap div[class*=col-md-5] {
        padding-right: 0
    }
    .product-wrap div[class*=col-md-7] {
        padding: 0 13px 0 0
    }
    .product-content .product-image {
        border-right: 1px solid #dfe5e9
    }
    .product-content .product-info {
        position: relative
    }
}

.message img.online {
    width:40px;
    height:40px;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
@foreach($hotels as $hotel)

        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">{{$hotel->nama}}</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
<div class="col-sm-12 col-md-12 col-lg-12">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <div id="myCarousel-2" class="carousel slide">
                        <ol class="carousel-indicators">
                        
                            <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach($photos as $photo)
                                <!-- Slide 1 -->
                                <div class="item @if($loop->first) active @endif">
                                    <img src="{{url('image/hotel/'.$photo->foto)}}" class="img-responsive" alt="" />
                                </div>
                            @endforeach
                        </div>
                        <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                        <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">
                <strong>{{$hotel->nama}}</strong>
                    <small>Room By <a href="javascript:void(0);">{{$hotel->nama}}</a></small>
                    @for($i = 0; $i < $hotel->rating; $i++)
                        <i class="fa fa-star" aria-hidden="true" style="color:yellow; "></i>
                    @endfor
                </h2>
                <hr />
                <h3 class="price-container">
                    <p>FACILITY</p>
                    <h4>
                    @foreach($fasilitass as $fasilitas)
                        {{$fasilitas->nama}}, 
                    @endforeach
                    </h4>
                    
                </h3>
                <hr />
                <div class="description description-tabs">
                    <ul id="myTab" class="nav nav-pills">
                        <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Deskripsi Hotel </a></li>
                    </ul>
                    
                    <div id="myTabContent" class="tab-content ">
                        <div class="row ab-pane fade active in" id="more-information">
                            <br />
                            @foreach($kamars as $kamar)
                            <h5><strong>{{$kamar->namaKamar}}</strong></h5>
                            <div class="item col-3 @if($loop->first) active @endif">
                                    <img src="{{url('image/room/'.$kamar->foto)}}" class="img-responsive"  alt="" />
                            </div>
                            <div class="col-9">
                                <p>
                                    {{$kamar->deskripsi}}
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="javascript:void(0);" class="btn btn-success btn-lg">See Details</a>
                            </div>
                            <br>
                            @endforeach
                        </div>
                        
                        
                        <div class="tab-pane fade" id="reviews">
                            <br />
                            <form method="post" class="well padding-bottom-10" onsubmit="return false;">
                                <textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
                                <div class="margin-top-10">
                                    <button type="submit" class="btn btn-sm btn-primary pull-right">
                                        Submit Review
                                    </button>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
                                </div>
                            </form>

                            <div class="chat-body no-padding profile-message">
                                <ul>
                                    <li class="message">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="online" />
                                        <span class="message-text">
                                            <a href="javascript:void(0);" class="username">
                                                Alisha Molly
                                                <span class="badge">Purchase Verified</span>
                                                <span class="pull-right">
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-muted"></i>
                                                </span>
                                            </a>
                                            Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved
                                        </span>
                                        <ul class="list-inline font-xs">
                                            <li>
                                                <a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
                                            </li>
                                            <li class="pull-right">
                                                <small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="message">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="online" />
                                        <span class="message-text">
                                            <a href="javascript:void(0);" class="username">
                                                Aragon Zarko
                                                <span class="badge">Purchase Verified</span>
                                                <span class="pull-right">
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                </span>
                                            </a>
                                            Excellent product, love it!
                                        </span>
                                        <ul class="list-inline font-xs">
                                            <li>
                                                <a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
                                            </li>
                                            <li class="pull-right">
                                                <small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- <div class="btn-group pull-right"> -->
                            <!-- <button class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to wishlist</button> -->
                            <!-- <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i> Contact Seller</button> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
</div>

@endforeach


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
