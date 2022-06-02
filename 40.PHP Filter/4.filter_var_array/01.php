<?php 
    $value = array(
        'name' => 'Ngo Dinh Canh',
        'age' => 25,
        'email' => 'ngodinhcanh97@gmail.com'
    );
    $filters = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array('min_range' => 0, 'max_range' =>100)
        ),
        'email' => array(
            'filter' => FILTER_VALIDATE_EMAIL
        ),
        );

    $result = filter_var_array($value, $filters);

    echo '<pre>'; print_r($result);echo '</pre>';
    