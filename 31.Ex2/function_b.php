<?php 
    $data =file('options.txt') or die("Can't read file");
    
    array_shift($data);
    $arrOptions = array();
    foreach($data as $key => $value){
        $tmp = explode("|",$value);
        $id = $tmp[0];
        $option_id = $tmp[1];
        $option = $tmp[2];
        $point = $tmp[3];
        $arrOptions[$id][$option_id]['option'] = $option;
        $arrOptions[$id][$option_id]['point'] = $point;
    }