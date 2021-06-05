<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;

class HomeController extends Controller
{
    public function index(){
        $cities = HotelModel::city();
        $hotels = HotelModel::featuredHotel();
        return view('home', ['cities' => $cities, 'hotels' => $hotels]);
    }

    public function hotel(Request $request){
        $request->validate([
          'arrival' => 'required|date|after:yesterday',
          'departure' => 'required|date|after:arrival',
          'city' => 'required|numeric'
        ]);

        session()->put('arrival', $request->arrival);
        session()->put('departure', $request->departure);
        session()->put('city', $request->city);

        dd(session());
    }

    public function debug(){
      $data = HotelModel::kamarDariHotel(1);
      dd($data);
    }
}
