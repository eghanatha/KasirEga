<?php

namespace App\Http\Controllers;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){

        if(auth::check()){
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function proses(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        Auth::attempt($data);
        if(auth::check()){
            return redirect()->route('dashboard');
        }else {
            abort(403, 'gagal Login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
