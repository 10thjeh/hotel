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

        $arrival = explode(" ", $request->arrival);
        $arrivalDate = $arrival[0];
        $departure = explode(" ", $request->departure);
        $departureDate = $departure[0];

        session()->put('arrival', $arrivalDate);
        session()->put('departure', $departureDate);
        session()->put('city', $request->city);

        $hotels = HotelModel::hotelOnKota($request->city);
        return view('listhotel', [
          'hotels' => $hotels
        ]);
    }

    public function debug(){
      $data = HotelModel::hotel();
      dd($data);
    }
}
