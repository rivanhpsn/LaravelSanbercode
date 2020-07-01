<?php 
    require ('animal.php');
    require ('ape.php');
    require ('frog.php');

    $sheep = new Animal('shaun');

    echo 'Nama : '.$sheep->getName(); // "shaun"
    echo '<br>';
    echo 'Jumlah Kaki : '.$sheep->getLegs(); // 2
    echo '<br>';
    echo 'Berdarah Dingin : '.$sheep->getColdBlooded(); // false
    echo '<br>';

    $sungokong = new Ape('kera sakti');
    echo '<br>';
    echo 'Nama : '.$sungokong->getName();
    echo '<br>';
    echo 'Jumlah Kaki : '.$sungokong->getLegs(); 
    echo '<br>';
    echo 'Berdarah Dingin : '.$sungokong->getColdBlooded();
    echo '<br>';
    $sungokong->yell();// "Auooo"
    echo '<br>';

    $kodok = new Frog('buduk');
    echo '<br>';
    echo 'Nama : '.$kodok->getName();
    echo '<br>';
    echo 'Jumlah Kaki : '.$kodok->getLegs();
    echo '<br>';
    echo 'Berdarah Dingin : '.$kodok->getColdBlooded(); 
    echo '<br>';
    $kodok->jump() ; // "hop hop"
?>