<?php

    $cars = array('volvo','BMW','Toyota');

    $sumdta = count($cars);
    echo 'Jumlah data '. $sumdta . '<br>';
    for($i=0; $i<$sumdta; $i++){
        echo '<br>Kendaraan '. $cars[$i];
    }

    echo '<hr>';

    echo '<ol class=\'mobil\'>';
    foreach($cars as $data){
        echo '<li>Kendaraan '. $data . '</li>';
    }

    echo '</ol>';