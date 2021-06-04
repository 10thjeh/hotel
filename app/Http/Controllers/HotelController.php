<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;


class HotelController extends Controller
{
    public function index(){
        $hotels = HotelModel::featuredHotel();
        
        return view('listhotel',['hotels' => $hotels]);
    }
}
