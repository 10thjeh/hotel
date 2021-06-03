<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function showuser(){
      $users = UserModel::user(session('email'));
      return view('userdetail', ['users' => $users]);
    }

    function submit(Request $request){
      $request->validate([
        'nama' => 'required',
        'tanggalLahir' => 'required|date|before:tomorrow',
        'nomorTelepon' => 'required|numeric|multiple_of:1',
        'password' => 'required'
      ]);

      $email = session('email'); //Email from form? omegabruh
      $nama = $request->nama;
      $tanggalLahir = $request->tanggalLahir;
      $nomorTelepon = $request->nomorTelepon;
      $password = $request->password;

      return UserModel::change($email, $nama, $tanggalLahir, $nomorTelepon, $password);
    }

    function image(Request $request){
      $request->validate([
        'image' => 'required|image'
      ]);

      //Get image name
      $image = Str::random(20).'.'.$request->image->extension();
      $request->image->move(public_path('image/users'), $image);
      $email = session('email');

      return UserModel::image($email, $image);
    }
}
