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
      return view('admin/hotel', ['hotels' => $hotels, 'rooms' => $rooms, 'listOfFacilities' => $listOfFacilities]);
    }

    function kamar($id){
      $rooms = AdminModel::room($id);
      return view('admin/kamar', ['rooms' => $rooms]);
    }

}
