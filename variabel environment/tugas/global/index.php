<?php 
    // global
    require 'variabel%environment\tugas\global\index.php';

    // statis
    function statis(){
        static $var = " saya adalah anggota Brizzer";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = "";
    function lokal(){
        $skil = "";
        echo $skil;
    }
    lokal();
    echo $skil;

?>