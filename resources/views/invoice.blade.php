@extends('layout/front/homeIndex')
@section('content')


<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Crustyrent - Invoice</title>
    <link rel="icon" href="{{asset('front/image/LogoAwal.png')}}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    background:#eee;
}

.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Invoice</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
<div class="container">
@foreach($invoices as $invoice)
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            Crustycation, Inc
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               <small>from</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Crustycation, Inc.</strong><br>
                  Alamat<br>
                  Jl. Gerbang Pemuda No.3,  Gelora, Kota Jakarta Pusat, DKI Jakarta 10270<br>
                  Phone: (123) 456-7890<br>
                  Fax: (123) 456-7890
               </address>
            </div>
            <div class="invoice-to">
               <small>to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">{{$invoice->namaPemesan}}</strong><br>
                  {{$invoice->email}}<br>
                  Phone: {{$invoice->nomorTelepon}}<br>
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice</small>
               <div class="date text-inverse m-t-5">{{$invoice->waktuPemesanan}}</div>
               <div class="invoice-detail">
                  #00CC00{{$invoice->id}}<br>
                  Room Reservation
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th>DESKRIPSI</th>
                        <th class="text-center" width="10%">HARGA(Rupiah)</th>
                        <th class="text-center" width="10%">HARI</th>
                        <th class="text-right" width="20%">TOTAL</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <span class="text-inverse">{{$invoice->nama}}</span><br>
                           <small>{{$invoice->namaKamar}}</small>
                        </td>
                        <td class="text-center">{{$hargahari = $invoice->harga / $invoice->lama}}</td>
                        <td class="text-center">{{$invoice->lama}}</td>
                        <td class="text-right">{{$invoice->harga}}</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-right">
                  <small>TOTAL</small> <span class="f-w-600">Rp. {{$invoice->harga}}</span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         <div class="invoice-note">
            * Pastikan semua pembayaran atas nama Crustycation, Inc<br>
            * Pembayaran dapat dilakukan dalam jangka waktu 24 jam<br>
            * Jika Anda memiliki pertanyaan tentang faktur ini, hubungi <i>cs@crustycation.com</i>
         </div>
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               TERIMA KASIH 
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> hotel.crusty-crud.xyz</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> cs@crustycation.com</span>
            </p>
         </div>
         @endforeach
         <!-- end invoice-footer -->
      </div>
   </div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>