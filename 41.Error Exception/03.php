<?php 
    $config = ini_get_all();// lay tat ca  thuoc tinh

    echo $timeZone = ini_get('date.timezone');
    ini_set('date.timezone','Asia/Ho_Chi_Minh');

    echo $timeZone = ini_get('date.timezone');