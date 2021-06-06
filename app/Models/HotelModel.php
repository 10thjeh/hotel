<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/*==================================
README
  hotel()                 : get all hotels
  hotel($id)              : get hotel with id $id
  hotelOnKota($id)        : get hotel in kota id $id
  kamar($id)              : get kamar with id $id
  kamarDariHotel($id)     : get kamar hotel with id $id
  fasilitasHotel()        : get all fasilitas hotel
  fasilitasHotel($id)     : get hotel with facility $id
  hotelWithRating($rating): get hotel with rating $rating
  fasilitasKamar()        : get all fasilitas kamar
  fasilitasKamar($id)     : get fasilitas kamar with id $id
  city()                  : get all cities
  featuredHotel()         : return 3 random hotel
  hotelPhotos()           : get hotel photos
  hotelPhotos($id)        : get hotel photos with hotel id $id
  roomPhotos()            : get room photos
  roomPhotos($id)         : get room photos with room id $id

*/


class HotelModel extends Model
{
    //Get list hotel kalo param kosong
    //Kalo ada isi get hotel dgn id $id
    static function hotel($id = ''){
      DB::statement("SET SQL_MODE=''");
      if($id == ''){
        $query = DB::table('hotel')
                     ->join('lokasi', 'hotel.id', '=', 'lokasi.idHotel')
                     ->join('lokasidetail', 'lokasi.idLokasi', '=', 'lokasidetail.idLokasi')
                     ->join('fotohotel', 'hotel.id', '=', 'fotohotel.idHotel')
                     ->groupBy('nama')
                     ->get();
        return $query;
      }

      $query = DB::table('hotel')
                   ->join('lokasi', 'hotel.id', '=', 'lokasi.idHotel')
                   ->join('lokasidetail', 'lokasi.idLokasi', '=', 'lokasidetail.idLokasi')
                   ->where('id', $id)
                   ->get();

      return $query;
    }

    static function hotelOnKota($id){
      DB::statement("SET SQL_MODE=''");
      $query = DB::table('hotel')
                   ->join('lokasi', 'hotel.id', '=', 'lokasi.idHotel')
                   ->join('lokasidetail', 'lokasi.idLokasi', '=', 'lokasidetail.idLokasi')
                   ->join('fotohotel', 'hotel.id', '=', 'fotohotel.idHotel')
                   ->where('lokasi.idLokasi', $id)
                   ->groupBy('nama')
                   ->get();

      return $query;
    }

    //Kamar dengan id $id
    static function kamar($id){
      $query = DB::table('kamar')
                   ->where('id', $id)
                   ->get();

      return $query;
    }

    static function getRoomQty($id){
      $query = DB::table('kamar')
                 ->where('id', $id)
                 ->get();
      foreach ($query as $q) {
        $qty = $q->qty;
      }
      return $qty;
    }

    //Kamar dari hotel dengan id $id
    static function kamarDariHotel($id){
      DB::statement("SET SQL_MODE=''");
      $query = DB::table('kamar')
                   ->where('idHotel', $id)
                   ->join('fotokamar', 'kamar.id', '=', 'fotokamar.idKamar')
                   ->groupBy('namaKamar')
                   ->get();

      return $query;
    }

    //Get list fasilitas kalo kosong
    //Get list hotel dengan fasilitas $id
    static function fasilitasHotel($id = ''){
      if($id == ''){
        $query = DB::table('fasilitashoteldetail')
                     ->get();
        return $query;
      }

      $query = DB::table('fasilitashoteldetail')
                   ->join('fasilitashotel', 'fasilitashoteldetail.id', '=', 'fasilitashotel.idFasilitas')
                   ->where('fasilitashotel.idHotel', $id)
                   ->get();
      return $query;
    }

    //Get hotels with rating $id
    static function hotelWithRating($rating){
      $query = DB::table('hotel')
                   ->where('rating', $rating)
                   ->get();

      return $query;
    }

    static function fasilitasKamar($id = ''){
      if($id == ''){
        $query = DB::table('fasilitaskamardetail')->get();
        return $query;
      }

      $query = DB::table('fasilitaskamar')
                   ->join('fasilitaskamardetail', 'fasilitaskamar.idFasilitas', '=', 'fasilitaskamardetail.id')
                   ->where('fasilitaskamar.idKamar', $id)
                   ->get();
      return $query;
    }

    static function city($city = ''){
      if($city == ''){
        $query = DB::table('lokasidetail')->get();
        return $query;
      }

      $query = DB::table('hotel')
                   ->join('lokasi', 'hotel.id', '=', 'lokasi.idHotel')
                   ->where('lokasi.idLokasi', $city)
                   ->get();
      return $query;
    }

    static function featuredHotel(){
      DB::statement("SET SQL_MODE=''");
      $query = DB::table('hotel')
               ->join('fotohotel', 'hotel.id', '=', 'fotohotel.idHotel')
               ->where('hotel.rating', '>', 3)
               ->groupBy('nama')
               ->inRandomOrder()
               ->take(3)
               ->get();

      return $query;
    }

    static function hotelPhotos($id = ''){
      if($id == ''){
        $query = DB::table('fotohotel')
                     ->get();
        return $query;
      }

      $query = DB::table('fotohotel')
                   ->where('idHotel', $id)
                   ->get();

      return $query;
    }

    static function roomPhotos($id = ''){
      if($id == ''){
        $query = DB::table('fotokamar')
                     ->get();
        return $query;
      }

      $query = DB::table('fotokamar')
                   ->where('idKamar', $id)
                   ->get();

      return $query;
    }

    static function getHotelName($id){
      $query = DB::table('kamar')
                 ->join('hotel', 'kamar.idHotel', '=', 'hotel.id')
                 ->where('kamar.id', $id)
                 ->get();

      return $query;
    }

    static function book($idKamar, $idHotel, $nama, $nomorTelepon, $email, $kamar, $startDate, $endDate, $hargaKamar){
      //get the date diffs
      $date1 = date_create($startDate);
      $date2 = date_create($endDate);
      $diff = date_diff($date1, $date2);
      $lama = $diff->format("%a");
      //Harga = harga kamar * qty * lama
      $harga = $hargaKamar * $kamar * $lama;

      DB::beginTransaction();
      $query = DB::table('transaction')
                   ->insert([
                     'id' => (int)'',
                     'email' => $email,
                     'namaPemesan' => $nama,
                     'nomorTelepon' => $nomorTelepon,
                     'idHotel' => $idHotel,
                     'idKamar' => $idKamar,
                     'qty' => $kamar,
                     'startDate' => $startDate,
                     'endDate' => $endDate,
                     'lama' => $lama,
                     'harga' => $harga,
                   ]);

    DB::commit();
    if(!$query){
      DB::rollback();
      return redirect()->back()->withErrors(['errors' => 'Error : Unknown error']);
      }

    return redirect()->back()->with('status', 'Update successful!');

    }

}
