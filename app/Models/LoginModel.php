<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginModel extends Model
{
    static function register($nama, $email, $tanggalLahir, $nomorTelepon, $password, $foto){
      $password = Hash::make($password);
      if($foto == null){
        $foto = 'placeholder.png';
      }
      DB::beginTransaction();
      $query = DB::table('users')->insert([
        'nama' => $nama,
        'email' => $email,
        'password' => $password,
        'tanggalLahir' => $tanggalLahir,
        'nomorTelepon' => $nomorTelepon,
        'foto' => $foto,
        'role' => 'user'
      ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return back()->withInput()->withErrors(['errors' => 'Error : unknown error']);
      }

      return redirect('/')->with('status', 'Successfully created account, please log in');

    }

    static function login($email, $password){
      $correctPasswordQuery = DB::table('users')->where('email', $email)->get();
      //Not even registered? smh
      if(count($correctPasswordQuery) <= 0) return redirect()->back()->withErrors(['errors' => 'Invalid credentials!']);
      foreach ($correctPasswordQuery as $p) {
        $hashedPassword = $p->password;
        $role = $p->role;
        $userObj = $p;
      }

      //Then let Hash do the job
      if(Hash::check($password, $hashedPassword)) {
        //Set session

        session()->put('isLoggedIn',True);
        session()->put('name', $userObj->nama);
        session()->put('email', $userObj->email);
        session()->put('role', $userObj->role);
        session()->put('foto', $userObj->foto);

        //if admin then redirect to admin page
        if(strcmp($userObj->role, "admin") == 0) return redirect('/admin');

        return redirect('/');
      }

      return redirect()->back()->withErrors(['errors' => 'Invalid credentials!']);

    }

    static function logout(){
      session()->flush();
      return redirect()->route('home');
    }
}
