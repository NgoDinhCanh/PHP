<?php 
    session_start();
    $_SESSION['name'] = 'Ngo Dinh';
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';