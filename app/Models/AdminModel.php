<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class AdminModel extends Model
{
  /*===================
  Read functions
  ====================*/

    /*Get all hotels*/
    static function getHotels(){
      $query = DB::table('hotel')->get();
      return $query;
    }

    /*Get hotel with id $id*/
    static function hotel($id){
      $query = DB::table('hotel')
                   ->where('id', $id)
                   ->get();

      return $query;
    }

    /*Get hotel rooms with hotel id $id*/
    static function hotelRoom($id){
      $query = DB::table('kamar')
                   ->where('idHotel', $id)
                   ->get();

      return $query;
    }

    /*Get hotel room with id $id*/
    static function room($id){
      $query = DB::table('kamar')
                   ->where('id', $id)
                   ->get();

      return $query;
    }

    /*Get hotel facilities*/
    static function hotelFacilities($id=''){
      if($id == ''){
        $query = DB::table('fasilitashoteldetail')
                     ->get();
        return $query;
      }

      $facilityArray = [];
      $query = DB::table('fasilitashotel')
                   ->where('idHotel', $id)
                   ->get();
      foreach ($query as $q) {
        array_push($facilityArray, $q->idFasilitas);
      }

      return $facilityArray;
    }

    /*Get all the cities or the hotel location*/

    static function location($id=''){
      if($id==''){
        $query = DB::table('lokasidetail')->get();
        return $query;
      }

      $query = DB::table('lokasi')
                   ->where('idHotel', $id)
                   ->get();

      foreach ($query as $q) {
        $lokasi = $q->idLokasi;
      }

      return $lokasi;
    }


    /* ==============
    Update functions
    ===============*/

    /*Update deskripsi dan rating hotel*/
    static function updateHotelD($id, $deskripsi, $rating){
      DB::beginTransaction();
      $query = DB::table('hotel')
                   ->where('id', $id)
                   ->update([
                     'deskripsi' => $deskripsi,
                     'rating' => $rating
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    /*Update fasilitas hotel*/
    static function updateHotelF($id, $facilities){
      //Drop all facilities
      $query = DB::table('fasilitashotel')
                   ->where('idHotel', $id)
                   ->delete();

      foreach ($facilities as $facility) {
        DB::beginTransaction();
        $query = DB::table('fasilitashotel')
                     ->insert([
                       'idHotel' => $id,
                       'idFasilitas' => $facility
                     ]);
        DB::commit();
        if(!$query){
          DB::rollback();
          return redirect()->back()->withErrors(['errors' => 'Error: Cannot add facility']);
        }
      }

      return redirect()->back()->with('status', 'Update successful');
    }

    /*Update kamar hotel*/
    static function updateRoom($id, $namaKamar, $deskripsi, $harga, $qty){
      DB::beginTransaction();
      $query = DB::table('kamar')
                   ->where('id', $id)
                   ->update([
                     'namaKamar' => $namaKamar,
                     'deskripsi' => $deskripsi,
                     'harga' => $harga,
                     'qty' => $qty,
                     'qtyReady' => $qty
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : failed to update']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    /*Update lokasi hotel*/
    static function updateHotelLocation($idHotel, $idLokasi){
      DB::beginTransaction();
      $query = DB::table('lokasi')
                   ->where('idHotel', $idHotel)
                   ->update(['idLokasi' => $idLokasi]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : failed to update']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

}
