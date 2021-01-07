<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login_form');
    }

    public function postLogin(Request $request){
        $login = Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        $kelas = Auth::user() -> kelas;
        if($login){
            if($kelas == 'admin'){
                return redirect()->route('admin_home');
            }
            else{
                return redirect()->route('home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('get_login');
    }

    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'telp' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:5|confirmed',
        ]);
        
        User::create([
            'nama' => $request->nama,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login');
    }
}
