<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user = User::paginate();
        return view('user', ['user' => $user]);
    }

    public function tambahuser(){
        return view('tambahuser');
    }

    public function simpanuser(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        return redirect('/user');
    }

    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        // jika email/password tidak tepat
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            // maka akan kembali ke halaman login
            return redirect('/login');
        }
        else{
            // jika benar, akan ke halaman mahasiswa
            return redirect('/mahasiswa');
        }
    }

    public function logout(){        
        Auth::logout(); // ini akan menghapus informasi otentikasi di sesi pengguna
        return redirect('/login');
    }
}
