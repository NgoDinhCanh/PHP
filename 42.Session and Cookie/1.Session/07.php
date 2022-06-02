<?php 
    session_start();
    $_SESSION['file'] = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
        <h1>File</h1>
    </body>
    
    </html>
    <?php 
        function checkNumber($number){
            return ($number%2==0)?"Even":"Odd";
        }
    ?>';

eval( '?>'.$_SESSION['file']);
echo checkNumber(3);
?>