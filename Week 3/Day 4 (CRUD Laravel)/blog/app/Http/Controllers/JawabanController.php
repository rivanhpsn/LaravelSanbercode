<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModels;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class JawabanController extends Controller
{
    public function index($id){
        $jawaban = JawabanModels::get_from($id);
        $data = compact('jawaban');
        $data['pertanyaan_id']=$id;
        // dd($items);
        return view('jawaban.jawaban', compact('data'));
    }

    public function create($id){
        return view('jawaban.create',compact('id'));
    }

    public function store(Request $request, $id){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $data['pertanyaan_id'] = $id;
        JawabanModels::save($data);
        $jawaban = JawabanModels::get_from($id);
        $data =  compact('jawaban');
        $data['pertanyaan_id'] = $id;
        return view('jawaban.jawaban', compact('data'));
        // if($jawaban){
        //     return redirect('/pertanyaan');
        // $new_jaw = new \App\Models\JawabanModels;
        // $new_jaw->isi = $request->get('jawaban');
        // $new_jaw->pertanyaan_id = $request->('pertanyaan_id');
        // $new_jaw->save();
        // return redirect()->route('jawaban.jawaban', $request->get('pertanyaan_id'));
    }
}

