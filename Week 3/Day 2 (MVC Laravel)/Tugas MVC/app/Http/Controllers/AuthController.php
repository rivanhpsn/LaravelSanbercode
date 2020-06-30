<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register() {
        return view('register');
    }
    function welcome(Request $request) {
        // dd($request->all());
        return view('welcome');
    }
    function register_post(Request $request) {
        // dd($request->all());
        return view('welcome',['nama_awal' => $request->nama_awal,'nama_akhir' => $request->nama_akhir]);
        
    }

}
