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
      if($request->has('location')){
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

      if($request->has('rate')){
        $request->validate([
          'rating' => 'required|numeric|min:0|max:5|multiple_of:1'
        ]);
        $rating = $request->rating;
        $hotels = HotelModel::getHotelWithRating($rating);
        return view('listhotel', [
          'hotels' => $hotels
        ]);
      }

      if($request->has('price')){
        $request->validate([
          'harga' => 'required|numeric|min:0|multiple_of:1'
        ]);

        $harga = $request->harga;
        $hotels = HotelModel::getHotelWithPrice($harga);
        return view('listhotel', [
          'hotels' => $hotels
        ]);
      }

      return redirect('/hotel');
    }

    public function debug(){
      $data = HotelModel::getHotelWithPrice(1500000);
      dd($data);
    }

    public function aboutus(){
      return view("aboutus");
    }
}
