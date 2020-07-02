<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModels;
use App\Models\JawabanModels;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class JawabanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModels::find($idp);
        $jawaban = $pertanyaan->jawaban;
        // dd($items);
        return view('jawaban.jawaban', compact('pertanyaan','jawaban'));
    }

    public function create(){
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        // dd($request->all());
        // $data = $request->all();
        // unset($data["_token"]);
        // $jawaban = JawabanModels::save($data);
        // if($jawaban){
        //     return redirect('/pertanyaan');
        $new_jaw = new \App\Models\JawabanModels;
        $new_jaw->isi = $request->get('jawaban');
        $new_jaw->pertanyaan_id = $request->('pertanyaan_id');
        $new_jaw->save();
        return redirect()->route('jawaban.jawaban', $request->get('pertanyaan_id'));
        }
    }
}
