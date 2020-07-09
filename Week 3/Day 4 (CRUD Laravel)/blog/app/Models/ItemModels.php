<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;

class ItemModels{
    public static function get_all(){
        $items = DB::table('items')->get();
        return $items;
    }

    public static function save($data){
        $new_items = DB::table('items')->insert($data);
        return $new_items;
    }

    public static function find_by_id($id){
        $pertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
        return $pertanyaan;
    }
    public static function update($id,$request){
        $items = DB::table('items')
                            ->where('id',$id)
                            ->update([
                                'name' => $request['name'],
                                'description' => $request['description'],
                                'stock' => $request['stock'],
                                'price' => $request['price'],
                                'stock' => $request['stock'],
                                'category_id' => $request['category_id']
                            ]);
        return $items;
    }
}
?>