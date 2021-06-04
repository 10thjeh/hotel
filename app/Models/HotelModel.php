<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/*==================================
README
  hotel()                 : get all hotels
  hotel($id)              : get hotel with id $id
  kamar($id)              : get kamar with id $id
  kamarDariHotel($id)     : get kamar hotel with id $id
  fasilitasHotel()        : get all fasilitas hotel
  fasilitasHotel($id)     : get hotel with facility $id
  hotelWithRating($rating): get hotel with rating $rating
  fasilitasKamar()        : get all fasilitas kamar
  fasilitasKamar($id)     : get fasilitas kamar with id $id
  city()                  : get all cities

*/


class HotelModel extends Model
{
    //Get list hotel kalo param kosong
    //Kalo ada isi get hotel dgn id $id
    static function hotel($id = ''){
      if($id == ''){
        $query = DB::table('hotel')->get();
        return $query;
      }

      $query = DB::table('hotel')
                   ->where('id', $id)
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

    //Kamar dari hotel dengan id $id
    static function kamarDariHotel($id){
      $query = DB::table('kamar')
                   ->where('idHotel', $id)
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

      $query = DB::table('hotel')
                   ->join('fasilitashotel', 'hotel.id', '=', 'fasilitashotel.idHotel')
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

      $query = DB::table('kamar')
                   ->join('fasilitaskamar', 'kamar.id', '=', 'fasilitaskamar.idKamar')
                   ->where('kamar.id', $id)
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

}
