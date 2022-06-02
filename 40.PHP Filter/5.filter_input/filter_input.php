<?php 
    if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)) echo "Email Invalid";
    else echo "Email Valid";