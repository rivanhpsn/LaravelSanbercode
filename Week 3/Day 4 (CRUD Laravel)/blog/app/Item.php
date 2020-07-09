<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table ="items";

    //whitelist
    // protected $fillable = ["name"];

    //blacklist
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'item_tag', 'item_id','tag_id');
    }
}
