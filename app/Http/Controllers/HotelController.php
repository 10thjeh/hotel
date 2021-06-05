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

    function detail($id){
        $hotels = HotelModel::hotel($id);
        $photos = HotelModel::hotelPhotos($id);
        $kamars = HotelModel::kamarDariHotel($id);
        $fasilitass = HotelModel::fasilitasHotel($id);
        $roomphotos = HotelModel::roomPhotos($id);
        //dd($kamars);
        return view('hoteldetail',['hotels' => $hotels, 'photos' => $photos, 'kamars' => $kamars, 'fasilitass' => $fasilitass, 'roomphotos' => $roomphotos]);
    }
}
