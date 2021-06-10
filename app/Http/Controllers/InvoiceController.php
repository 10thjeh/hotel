<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;

class InvoiceController extends Controller
{
    public function index($id){
        $email = session('email');
        $invoices = HotelModel::getInvoice($email,$id);
        // dd($invoices);
        return view('invoice',['invoices'=>$invoices]);
    }
}
