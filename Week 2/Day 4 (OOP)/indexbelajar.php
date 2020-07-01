<?php 

    require_once 'belajaroop.php';
    $optimusprime = new robot('my name is optimus prime');
    $bumblebee = new robot('....');
    $optimusprime->set_suara('bruh');
    // $bumblebee->set_suara();
    echo 'OP : '.$optimusprime->get_suara();
    echo '<br>';
    echo 'BumbleBee : '.$bumblebee->get_suara();
    echo ' <br>';

    $grimlock = new robot_hewan('rexxx');
    echo $grimlock->get_kekuatan();
?>