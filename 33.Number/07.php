<?php 
    $number = 123456789.123456;
    echo "Input :" .$number."<br />";
    echo "Output One :" .number_format($number)."<br />";
    echo "Output Two :" .number_format($number,3,".",",");