<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModels{
    public static function get_all(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_pert = DB::table('pertanyaan')->insert($data);
        return $new_pert;
    }
}
?>