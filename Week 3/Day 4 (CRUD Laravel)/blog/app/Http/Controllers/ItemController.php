<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModels;

class ItemController extends Controller
{
    public function index(){
        $items = ItemModels::get_all();
        // dd($items);
        return view('items.index', compact('items'));
    }

    public function create(){
        return view('items.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $items = ItemModels::save($data);
        if($items){
            return redirect('/items');
        }
    }
}
