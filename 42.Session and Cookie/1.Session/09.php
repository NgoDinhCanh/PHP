<?php 
    session_start();
    header('Content-Type: image/jpeg');
    echo $_SESSION['image']['data'];