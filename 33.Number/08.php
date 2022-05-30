<?php 
    $frac = "4/3";
    // 01-Lay phan so
    // 02- UCLN cua tu so va mau so 
    // 03- Chia tu so va mau so cho UCLN 
    // 04- Phan so moi  

    // 01
    $arrFrac = explode("/",$frac);
    $ts = $arrFrac[0];
    $ms = $arrFrac[1];
    // 02
    // a%d == 0 -> d uoc cua a , a boi cua d 
    // d UCLN cua a va b,d la gia tri uoc lon nhat cua a va b 
    // 18 - 4 -> 2

    function UCLN($n1,$n2){
        while($n1 *$n2 != 0){    
            if($n1 > $n2){
                $n1 %= $n2;
            }
            else{
                $n2 %= $n1;
            }
        }
        return $n1 + $n2;
    }