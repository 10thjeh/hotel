<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\DB;
use Session;

class LoginController extends Controller
{
    public function registerview(){
        return view("register");
    }

    public function loginview(){
        return view("login");
    }

    public function register(){
      $response = request()->post();
      $nama = $response['nama'];
      $email = $response['email'];
      $tanggalLahir = $response['tanggalLahir'];
      $nomorTelepon= $response['nomorTelepon'];
      $password = $response['password'];
      $confirmPassword = $response['password'];
      return LoginModel::register($nama, $email, $tanggalLahir, $nomorTelepon, $password, $confirmPassword);
    }

    public function login(){
      $response = request()->post();
      $email = $response['email'];
      $password = $response['password'];
      return LoginModel::login($email, $password);
    }

    public function logout(){
      return LoginModel::logout();
    }
}
