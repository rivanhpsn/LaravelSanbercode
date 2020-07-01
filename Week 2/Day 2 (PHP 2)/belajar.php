<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Belajar PHP 2</title>
</head>
<body>
    <h1>Loop PHP</h1>
    <?php 

        $hewan = ['anjing','babi','ayam','komodo'];
        $bio = [
            'nama' => 'rivan',
            'umur' => 17,
            'hobi' => 'meme',
    
        ];

        perulangan for
        for($i = 0 ; $i< count($hewan); $i++ ){
            echo $hewan[$i];
        }

        // // perulangan for each
        // foreach ($hewan as $h){
        //     echo $h;
        // }

        // foreach ($bio as $key => $value){
        //     echo $value . "<br>";
        // }

        // // perulangan while
        // $i = 0;

        // while($i < count($hewan)){
        //     echo $hewan[$i]. "<br>";
        //     $i++;
        // }
        // // do - while
        // do{
        //     echo $hewan[$i]. "<br>";
        //     $i++;
        // }
        // while($i < count($hewan));

        // if else
        // $pass = '123';

        // if($pass == '123'){
        //     echo ' berhasil';
        // }else{
        //     echo ' gagal';
        // }

        // fungsi
        // function menghitung($x,$y){
        //     $z = $x + $y;
        //     return $z;
        // }

        // $hasil = menghitung(2,4);
        // echo 'Hasil : '.$hasil;

        // fungsi anonimus
        // $ngetik = function($text){
        //     echo $text;
        // }

        // $greeting = $ngetik;

        // $greeting('bruh');


    ?>
    
</body>
</html>