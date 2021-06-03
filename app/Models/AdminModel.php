<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class AdminModel extends Model
{

  function getLatestHotelId(){
    $query = DB::table('hotel')
                 ->orderBy('id', 'desc')
                 ->limit(1)
                 ->get();

    foreach ($query as $q) {
      $id = $q->id;
    }

    return $id;
  }

  /*===================
  Create function
  ====================*/
    /*Create new hotel*/
    static function newHotel($nama, $rating, $lokasi, $deskripsi){
      DB::beginTransaction();
      $query = DB::table('hotel')
               ->insert([
                 'id' => (int)'',
                 'nama' => $nama,
                 'rating' => $rating,
                 'deskripsi' => $deskripsi
               ]);

      //Get Hotel ID

      $queryId = DB::table('hotel')
                   ->orderBy('id', 'desc')
                   ->limit(1)
                   ->get();

      foreach ($queryId as $q) {
        $id = $q->id;
      }

      $querylokasi = DB::table('lokasi')
                         ->insert([
                           'idHotel' => $id,
                           'idLokasi' => $lokasi
                         ]);
      DB::commit();

      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    /*Create new location*/
    static function newLocation($lokasi){
      DB::beginTransaction();
      $query = DB::table('lokasidetail')
                   ->insert([
                     'idLokasi' => (int)'',
                     'namaLokasi' => $lokasi
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    /*Create new hotel facility*/
    static function newHotelFacility($fasilitas){
      DB::beginTransaction();
      $query = DB::table('fasilitashoteldetail')
                   ->insert([
                     'id' => (int)'',
                     'nama' => $fasilitas
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    /*Create new hotel facility*/
    static function newRoomFacility($fasilitas){
      DB::beginTransaction();
      $query = DB::table('fasilitaskamardetail')
                   ->insert([
                     'id' => (int)'',
                     'nama' => $fasilitas
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    /*Create new hotel room*/
    static function newRoom($id, $nama, $deskripsi, $harga, $qty){
      DB::beginTransaction();
      $query = DB::table('kamar')
                   ->insert([
                     'id' => (int)'',
                     'idHotel' => $id,
                     'namaKamar' => $nama,
                     'deskripsi' => $deskripsi,
                     'harga' => $harga,
                     'qty' => $qty,
                     'qtyReady' => $qty
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect()->back()->with('status', 'Successfully added new room!');

    }

    /*Create new image for hotel*/
    static function addHotelImage($id, $namaGambar){
      DB::beginTransaction();
      $query = DB::table('fotohotel')
                   ->insert([
                     'idHotel' => $id,
                     'foto' => $namaGambar
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect()->back()->with('status', 'Successfully added new photo!');
    }

    /*Create new image for room*/
    static function addRoomImage($id, $namaGambar){
      DB::beginTransaction();
      $query = DB::table('fotokamar')
                   ->insert([
                     'idKamar' => $id,
                     'foto' => $namaGambar
                   ]);
     DB::commit();
     if(!$query){
       DB::rollback();
       return redirect()->back()->withErrors(['errors' => 'Error : unknown error']);
     }

     return redirect()->back()->with('status', 'Successfully added new photo!');
    }


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

    /*Get room facilities*/
    static function roomFacilities($id=''){
      if($id == ''){
        $query = DB::table('fasilitaskamardetail')
                     ->get();
        return $query;
      }

      $facilityArray = [];
      $query = DB::table('fasilitaskamar')
                   ->where('idKamar', $id)
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

    /*Get hotel photos*/
    static function hotelPhotos($id){
      $query = DB::table('fotohotel')
                   ->where('idHotel', $id)
                   ->get();
      return $query;
    }

    /*Get room photos*/
    static function roomPhotos($id){
      $query = DB::table('fotokamar')
                   ->where('idKamar', $id)
                   ->get();
      return $query;
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

    /*Update fasilitas kamar*/
    static function updateRoomF($id, $facilities){
      //Drop all facilities
      $query = DB::table('fasilitaskamar')
                   ->where('idKamar', $id)
                   ->delete();

      foreach ($facilities as $facility) {
        DB::beginTransaction();
        $query = DB::table('fasilitaskamar')
                     ->insert([
                       'idKamar' => $id,
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

    static function updateRoomA($id, $orang, $tempatTidur, $kamarMandi){
      DB::beginTransaction();
      $query = DB::table('kamar')
                   ->where('id', $id)
                   ->update([
                     'orang' => $orang,
                     'kasur' => $tempatTidur,
                     'kamarMandi' => $kamarMandi
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : failed to update']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    /*==============
    Delete functions
    ===============*/

    /*==============
    General direction for deleting things:
    Kamar
    ->Hapus transaksi
    ->Hapus fasilitas
    ->Hapus foto
    ->Hapus kamar
    ===============*/

    /*Function for deleting room*/
    static function removeRoom($id){
      DB::beginTransaction();
      $deleteTransaction = DB::table('transaction')
                               ->where('idKamar', $id)
                               ->delete();
      $deleteFacilities = DB::table('fasilitaskamar')
                              ->where('idKamar', $id)
                              ->delete();
      $deletePhotos = DB::table('fotoKamar')
                          ->where('idKamar', $id)
                          ->delete();
      $delete = DB::table('kamar')
                    ->where('id', $id)
                    ->delete();
      DB::commit();
      if(!$delete){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : Unknown error!']);
      }

      return redirect()->back()->with('status', 'Deleted successfully!');
    }

    static function removeHotel($id){
      DB::beginTransaction();
      $deleteTransaction = DB::table('transaction')
                               ->where('idHotel', $id)
                               ->delete();

      $deletePhotos = DB::table('fotohotel')
                        ->where('idHotel', $id)
                        ->delete();

      $deleteLokasi = DB::table('lokasi')
                          ->where('idHotel', $id)
                          ->delete();

      $deleteFasilitas = DB::table('fasilitashotel')
                             ->where('idHotel', $id)
                             ->delete();

      $queryKamar = DB::table('kamar')
                        ->where('idHotel', $id)
                        ->get();

      foreach ($queryKamar as $kamar) {
        $kamarTransaction = DB::table('transaction')
                                 ->where('idKamar', $kamar->id)
                                 ->delete();
        $kamarFacilities = DB::table('fasilitaskamar')
                                ->where('idKamar', $kamar->id)
                                ->delete();
        $kamarPhotos = DB::table('fotoKamar')
                            ->where('idKamar', $kamar->id)
                            ->delete();
        $delete = DB::table('kamar')
                      ->where('id', $kamar->id)
                      ->delete();
      }

      $delete = DB::table('hotel')
                    ->where('id', $id)
                    ->delete();

      DB::commit();
      if(!$delete){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error!']);
      }

      return redirect()->route('hotels')->with('status', 'Deleted successfully!');

    }

    /*Remove hotel photo*/
    static function removeHotelImage($name){
      DB::beginTransaction();
      $query = DB::table('fotohotel')
                   ->where('foto', $name)
                   ->delete();
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error!']);
      }
      return redirect()->back()->with('status', 'Deleted successfully!');
    }

    /*remove room photo*/
    static function removeRoomImage($name){
      DB::beginTransaction();
      $query = DB::table('fotokamar')
                   ->where('foto', $name)
                   ->delete();
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : unknown error!']);
      }
      return redirect()->back()->with('status', 'Deleted successfully!');
    }
}
