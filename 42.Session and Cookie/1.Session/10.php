<?php 
    session_start();
    $_SESSION['course'] = 'PHP';
    $_SESSION['info'] = array(
            'name' => 'Dinh Canh',
            'age' => 25,
    );
    $session = session_encode();
    session_unset();
    session_decode($session);
    print_r($session);