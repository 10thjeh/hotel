<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class AdminModel extends Model
{
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

      $query = DB::table('fasilitashotel')
                   ->where('idHotel', $id)
                   ->get();
        return $query;
    }
    
}
