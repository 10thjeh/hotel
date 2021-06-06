<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;
use App\Models\UserModel;


class HotelController extends Controller
{
    public function index(){
        $hotels = HotelModel::hotel();

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

    public function room($id){
        $kamars = HotelModel::kamar($id);
        $photos = HotelModel::roomPhotos($id);
        $hotelName = HotelModel::getHotelName($id);
        $facilities = HotelModel::fasilitasKamar($id);
        //dd($kamars);
        return view('room', [
          'kamars' => $kamars,
          'photos' => $photos,
          'hotel' => $hotelName,
          'facilities' => $facilities
        ]);
    }

    public function book($id){
      $user = UserModel::user(session('email'));
      $hotelDetail = HotelModel::kamar($id);
      foreach ($user as $u) {
        $nama = $u->nama;
        $nomorTelepon = $u->nomorTelepon;
      }
      foreach ($hotelDetail as $h) {
        $max = $h->qty;
        $harga = $h->harga;
      }

      $startDate = session()->pull('arrival');
      $endDate = session()->pull('departure');

      return view('formconfirm', [
        'nama' => $nama,
        'nomorTelepon' => $nomorTelepon,
        'max' => $max,
        'harga' => $harga,
        'startDate' => $startDate,
        'endDate' => $endDate,
        'id' => $id
      ]);
    }

    public function confirmbook(Request $request){
      $request->validate([
        'id' => 'required|numeric|min:1|multiple_of:1'
      ]);
      $qty = HotelModel::getRoomQty($request->id);
      $request->validate([
        'id' => 'required|numeric|min:1|multiple_of:1',
        'nama' => 'required',
        'nomorTelepon' => 'required|numeric|min:0|multiple_of:1',
        'kamar' => 'required|numeric|min:1|max:'.$qty.'|multiple_of:1',
        'startDate' => 'required|date|after:yesterday',
        'endDate' => 'required|date|after:startDate'
      ]);
      $hotelQuery = HotelModel::kamar($request->id);
      foreach ($hotelQuery as $h) {
        $idHotel = $h->idHotel;
        $harga = $h->harga;
      }

      $idKamar = $request->id;
      $nama = $request->nama;
      $nomorTelepon = $request->nomorTelepon;
      $email = session('email');
      $kamar = $request->kamar;
      $startDate = $request->startDate;
      $endDate = $request->endDate;
      $hargaKamar = $harga;

      return HotelModel::book($idKamar, $idHotel, $nama, $nomorTelepon, $email, $kamar, $startDate, $endDate, $hargaKamar);
    }
}
