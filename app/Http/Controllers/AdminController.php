<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{
    /*Index*/ /**/
    function index(){
      return view('admin/index');
    }

    /*Show list of hotels*/
    function showhotels(){
      $hotels = AdminModel::getHotels();
      return view('admin/hotels', ['hotels' => $hotels]);
    }

    /*Show hotel details*/
    function hotel($id){
      $hotels = AdminModel::hotel($id);
      $rooms = AdminModel::hotelRoom($id);
      $listOfFacilities = AdminModel::hotelFacilities();
      $hotelFacilities = AdminModel::hotelFacilities($id);
      $locations = AdminModel::location();
      $hotelLocation = AdminModel::location($id);
      return view('admin/hotel', [
        'hotels' => $hotels,
        'rooms' => $rooms,
        'listOfFacilities' => $listOfFacilities,
        'hotelFacilities' => $hotelFacilities,
        'locations' => $locations,
        'hotelLocation' => $hotelLocation
      ]);
    }

    function kamar($id){
      $rooms = AdminModel::room($id);
      return view('admin/kamar', ['rooms' => $rooms]);
    }

    /*=========================================
    | Update functions
    | updatehoteld(Request $request) -> Update Deskripsi hotel dan rating hotel
    =========================================*/

    /*Update deskripsi hotel dan rating hotel*/
    function updatehoteld(Request $request){
      $request->validate([
        'id' => 'required|numeric',
        'deskripsi' =>'required',
        'rating' => 'required|numeric|max:5|min:0'
      ]);
      $id = $request->id;
      $deskripsi = $request->deskripsi;
      $rating = $request->rating;
      return AdminModel::updateHotelD($id, $deskripsi, $rating);
    }

    /*Update fasilitas hotel*/
    function updatehotelf(Request $request){
      $response = request()->all();
      $request->validate([
        'id' => 'required|numeric|min:0|multiple_of:1'
      ]);
      $id = $request->id;
      $facilities = array_slice($response, 2);
      return AdminModel::updateHotelF($id, $facilities);
    }

    /*Update lokasi hotel*/
    function updatelocation(Request $request){
      $request->validate([
        'id' => 'required|numeric|min:0|multiple_of:1',
        'lokasi' => 'required|numeric|min:0|multiple_of:1'
      ]);

      $idHotel = $request->id;
      $idLokasi = $request->lokasi;

      return AdminModel::updateHotelLocation($idHotel, $idLokasi);
    }

    /*Update kamar*/
    function updateroom(Request $request){
      $request->validate([
        'id' => 'required|numeric',
        'namaKamar' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required|numeric|min:0|multiple_of:1',
        'qty' => 'required|numeric|min:0|multiple_of:1'
      ]);

      $id = $request->id;
      $namaKamar = $request->namaKamar;
      $deskripsi = $request->deskripsi;
      $harga = $request->harga;
      $qty = $request->qty;

      return AdminModel::updateRoom($id, $namaKamar, $deskripsi, $harga, $qty);
    }


}
