<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModels;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModels::get_all();
        // dd($items);
        return view('pertanyaan.pertanyaan', compact('pertanyaan'));
    }

    public function create(){
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModels::save($data);
        if($pertanyaan){
            return redirect('/pertanyaan');
        }
    }

    public function show($id){
        $pertanyaan = PertanyaanModels::find_by_id($id);

        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = PertanyaanModels::find_by_id($id);

        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){
        $pertanyaan = PertanyaanModels::update($id, $request->all());

        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $deleted = PertanyaanModels::destroy($id);

        return redirect('/pertanyaan');
    }
}
