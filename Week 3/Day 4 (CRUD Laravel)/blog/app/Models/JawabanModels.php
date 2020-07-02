<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModels{
    public static function get_all(){
        $pertanyaan = DB::table('jawaban')->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_jaw = DB::table('jawaban')->insert($data);
        return $new_jaw;
    }
}
?>