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
      $listOfFacilities = AdminModel::roomFacilities();
      $roomFacilities = AdminModel::roomFacilities($id);
      return view('admin/kamar', [
        'rooms' => $rooms,
        'listOfFacilities' => $listOfFacilities,
        'roomFacilities' => $roomFacilities
      ]);
    }

    /*Gives the new hotel form*/
    function newhotel(){
      $locations = AdminModel::location();
      return view('admin/new/hotel', ['locations' => $locations]);
    }

    /*Submit the new hotel form*/
    function submitnewhotel(Request $request){
      $request->validate([
        'nama' => 'required',
        'rating' => 'required|numeric|min:0|max:5|multiple_of:1',
        'lokasi' => 'required|numeric|multiple_of:1',
        'deskripsi' => 'required'
      ]);

      $nama = $request->nama;
      $rating = $request->rating;
      $lokasi = $request->lokasi;
      $deskripsi = $request->deskripsi;
      return AdminModel::newHotel($nama, $rating, $lokasi, $deskripsi);
    }

    /*Gives the new location form*/
    function newlocation(){
      return view('/admin/new/location');
    }

    /*Submit the new location*/
    function submitnewlocation(Request $request){
      $request->validate([
        'lokasi' => 'required'
      ]);
      $lokasi = $request->lokasi;
      return AdminModel::newLocation($lokasi);
    }

    /*Gives the new facility form*/
    function newfacility(){
      return view('admin/new/facility');
    }

    /*submit new hotel facility*/
    function submithotelfacility(Request $request){
      $request->validate([
        'fasilitas' => 'required'
      ]);
      $fasilitas = $request->fasilitas;
      return AdminModel::newHotelFacility($fasilitas);
    }

    /*submit new room facility*/
    function submitroomfacility(Request $request){
      $request->validate([
        'fasilitas' => 'required'
      ]);
      $fasilitas = $request->fasilitas;
      return AdminModel::newRoomFacility($fasilitas);
    }

    /*Gives the new room form*/
    function newroom($id){
      $hotels = AdminModel::hotel($id);
      return view('admin/new/room', ['hotels' => $hotels, 'id' => $id]);
    }

    /*submit new room*/
    function submitnewroom(Request $request){
      $request->validate([
        'idHotel' => 'required|numeric',
        'nama' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required|min:0|numeric|multiple_of:1',
        'qty' => 'required|min:0|numeric|multiple_of:1'
      ]);

      $id = $request->idHotel;
      $nama = $request->nama;
      $deskripsi = $request->deskripsi;
      $harga = $request->harga;
      $qty = $request->qty;

      return AdminModel::newRoom($id, $nama, $deskripsi, $harga, $qty);
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

    /*Update fasilitas kamar*/
    function updateroomf(Request $request){
      $response = request()->all();
      $request->validate([
        'id' => 'required|numeric'
      ]);
      $id = $request->id;
      $facilities = array_slice($response, 2);
      return AdminModel::updateRoomF($id, $facilities);
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
