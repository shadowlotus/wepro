<?php

    $mhs = array(
        array('NAMA'=>'Boboiboy', 'ID'=>'1234', 'KOTA'=>'Durian Runtuh'),
        array('NAMA'=>'Jarjit', 'ID'=>'1212', 'KOTA'=>'Vrindavan'),
        array('NAMA'=>'Susanti', 'ID'=>'3232', 'KOTA'=>'Depok'),
        array('NAMA'=>'Crab', 'ID'=>'5656', 'KOTA'=>'Bekasi'),
    );

    // echo $mhs[0]['NAMA'];

    // echo '<hr>';


    // foreach($mhs as $data){

    //     foreach($data as $lb => $s){
    //         echo $lb . ' : ' . $s . '<br>';
    //     }

    //     echo '<br>';
    // }


    header('Content-Type: application/json');
    echo json_encode($mhs);