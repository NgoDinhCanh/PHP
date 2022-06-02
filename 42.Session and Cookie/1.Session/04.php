<?php 
    session_start();
    if(isset($_SESSION['name'])) echo 'YES';
    else echo 'NO';