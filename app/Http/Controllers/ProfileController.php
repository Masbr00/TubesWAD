<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editProfile($id, Request $request){
        $this->validate($request,[
            'nama'      => 'required',
            'telp'      => 'required',
            'alamat'    => 'required',
            'password'  => 'required|min:5',
            'password_confirmation'  => 'required',
        ]);

        $pass = $request->password;
        $conf_pass = $request->password_confirmation;

        $users = User::find($id);
        $users->nama = $request->nama;
        $users->telp = $request->telp;
        $users->alamat = $request->alamat;
        $users->password = bcrypt($request->password);
        
        if ($pass == $conf_pass) {
            $users->save();
            return redirect()->back()->with('success', 'Profil berhasil diupdate');
        } else {
            return redirect()->back()->with('failed', 'Prodil gagal diupdate');
        }
        
    }
}
