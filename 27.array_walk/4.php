<?php
    $array = array(2,4,6,8);

    function myFunction(&$value,$key,$param=2,$pre=4) {
        $value = $value * $param* $pre;
    }

    array_walk($array,'myFunction',2);
    echo "<pre>";print_r($array);echo "</pre>";