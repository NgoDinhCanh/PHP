<?php 
    session_start();
    $_SESSION['function'] = '<?php 
                                function checkNumber($number){
                                    return ($number%2==0)?"Even":"Odd";
                                    } ?>';
eval('?>'. $_SESSION['function']);
echo checkNumber(8);