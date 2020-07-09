<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model Custom
use App\Models\ItemModels;
// Model Eloquent
use App\Item;
use App\Category;
use App\Tag;
use Prophecy\Call\Call;

class ItemController extends Controller
{
    public function index(){
        // $items = ItemModels::get_all();
        // dd($items);
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create(){
        $categories = Category::all();
        return view('items.form', compact('categories'));
    }

    public function store(Request $request){
        // dd($request->all());
        // $new_item = ItemModels::save($request->all());
        // $data = $request->all();
        // unset($data["_token"]);
        // $items = ItemModels::save($data);
        // if($items){
        //     return redirect('/items');

        //cara eloquent
        // $items = new Item;
        // $items->name = $request ["name"];
        // $items->description = $request ["description"];
        // $items->stock = $request ["stock"];
        // $items->price = $request ["price"];

        // $items->save();

        $items = Item::create([
            "name" => $request["name"],
            "description" => $request["description"],
            "stock" => $request["stock"],
            "price" => $request["price"],
            "category_id" => $request["category_id"]
        ]);
        $tagArr = explode(',', $request->tags);
        $tagsMulti = [];

        foreach($tagArr as $strTag){
            $tagArrAssc["tag_name"] = $strTag;
            $tagsMulti[] = $tagArrAssc;
        }
        
        foreach($tagsMulti as $tagCheck){
            $tag = Tag::firstOrCreate($tagCheck);
            $items->tags()->attach($tag->id);
        }
        return redirect('/items');
        }

        public function edit($id){
            $pertanyaan = ItemModels::find_by_id($id);
            $categories = Category::all();
            return view('items.edit', compact('items','categories'));
        }
    }

