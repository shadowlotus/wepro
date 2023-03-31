<?php

    // function namafungsi(parameter = nilaidefault){

    //     return hasil;
    // }

    function TentangAplikasi(){

        echo '<h3>Aplikasi apa saja</h3>';
        echo '<sup>versi 1.0</sup>';
    }

    function cetaklabel($tx){
        echo '<br>Isi Label : '.$tx;
    }

    function cetaklabel2($tx='Isikan Label'){
        echo '<br>Isi Label : '.$tx;
    }

    function jumlahkan($angka1=0, $angka2=0){
        return $angka1 + $angka2;
    }


    // TentangAplikasi();