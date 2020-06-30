<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('register');
    }
    
    public function form_post(Request $request){
        $nama_depan = $request["first_name"];
        $nama_belakang = $request["last_name"];
        return view('welcome', compact('nama_depan', 'nama_belakang'));
    }
}
