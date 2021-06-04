<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelDetailController extends Controller
{
    public function index(){
        return view('hoteldetail');
    }
}
