<?php 
    $data =file('question.txt') or die("Can't read file");
    
    array_shift($data);
    $arrQuestions = array();
    foreach($data as $key => $value){
        $tmp = explode("|",$value);
        $id = $tmp[0];
        $question = $tmp[1];
        $arrQuestions[$id] = array('question' => $question);
    }
    