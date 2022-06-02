<?php 
    $array = array(
        array('name' => 'Canh' , 'id' => 1),
        array('name' => 'Giang' , 'id' => 2),
        array('name' => 'Khoa' , 'id' => 3),
    );
    session_start();
    $_SESSION['array'] = $array;

    echo '<pre>'; print_r($_SESSION['array']); echo '</pre>';