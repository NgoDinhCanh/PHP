<?php
    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    $login = ($userName == 'admin' && $passWord == '123456') ? "Login Complete" : "Login Fail";
    echo $login;