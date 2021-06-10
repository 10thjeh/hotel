<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;

class CartController extends Controller
{
    public function index(){
        $orders = HotelModel::getOrders();
        // dd($orders);
        return view('cart', ['orders' => $orders]);
    }
}
