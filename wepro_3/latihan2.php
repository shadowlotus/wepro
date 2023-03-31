<?php
    $age = array('Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43');

    echo 'Umur dari Udin '. $age['Peter']. 'tahun<br>';

    echo '<hr>';

    echo '<ol>';
    foreach($age as $nama => $umur){
        echo '<li>Umur dari '. $nama . ' '. $umur .'</li>';
    }

    echo '</ol>';