<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function registerview(){
        return view("register");
    }

    public function loginview(){
        return view("login");
    }

    public function register(Request $request){
      $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'tanggalLahir' => 'required|date|before:tomorrow',
        'nomorTelepon' => 'required|numeric',
        'password' => Password::min(8)->uncompromised(250),
        'confirmPassword' => 'required|same:password',
        'foto' => 'nullable|image'
      ]);

      $foto = null;

      if($request->foto){
        $foto = Str::random(20).'.'.$request->foto->extension();
        $request->foto->move(public_path('image/users'), $foto);
      }
      $nama = $request->nama;
      $email = $request->email;
      $tanggalLahir = $request->tanggalLahir;
      $nomorTelepon= $request->nomorTelepon;
      $password = $request->password;
      return LoginModel::register($nama, $email, $tanggalLahir, $nomorTelepon, $password, $foto);
    }

    public function login(Request $request){
      $request->validate([
        'email' => 'required|email',
        'password' => 'required'
      ]);
      $email = $request->email;
      $password = $request->password;
      return LoginModel::login($email, $password);
    }

    public function logout(){
      return LoginModel::logout();
    }
}
