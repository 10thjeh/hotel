<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    static function user($email){
      $query = DB::table('users')
                   ->where('email', $email)
                   ->get();

      return $query;
    }

    static function change($email, $nama, $tanggalLahir, $nomorTelepon, $password){
      //Check password if true
      $correctPasswordQuery = DB::table('users')->where('email', $email)->get();
      foreach ($correctPasswordQuery as $p) {
        $hashedPassword = $p->password;
      }

      if(!Hash::check($password, $hashedPassword)) return redirect()->back()->withErrors(['errors' => 'Invalid credentials!']);

      DB::beginTransaction();
      $query = DB::table('users')
                   ->where('email', $email)
                   ->update([
                     'nama' => $nama,
                     'tanggalLahir' => $tanggalLahir,
                     'nomorTelepon'=> $nomorTelepon
                   ]);
      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : Unknown error']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }

    static function image($email, $image){
      DB::beginTransaction();
      $query = DB::table('users')
                   ->where('email', $email)
                   ->update([
                     'foto' => $image
                   ]);

      DB::commit();
      if(!$query){
        DB::rollback();
        return redirect()->back()->withErrors(['errors' => 'Error : Unknown error']);
      }

      return redirect()->back()->with('status', 'Update successful!');
    }
}
