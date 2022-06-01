<?php 
    $menu = array();
    $menu[] = array('id' => 1, 'name' => 'Home','parents' => 0);
    $menu[] = array('id' => 2, 'name' => 'About','parents' => 0);
    $menu[] = array('id' => 3, 'name' => 'News','parents' => 0);
    $menu[] = array('id' => 4, 'name' => 'Products','parents' => 0);
    $menu[] = array('id' => 5, 'name' => 'Contact','parents' => 0);
    $menu[] = array('id' => 6, 'name' => 'Domestic','parents' => 3);
    $menu[] = array('id' => 7, 'name' => 'International','parents' => 3);
    $menu[] = array('id' => 8, 'name' => 'Lập trình viên','parents' => 6);
    $menu[] = array('id' => 9, 'name' => 'Trí tuệ nhân tạo','parents' => 6);
    $menu[] = array('id' => 9, 'name' => 'Web developer','parents' => 7);
    $menu[] = array('id' => 9, 'name' => 'Data Sicence','parents' => 7);



    echo '<pre>';print_r($menu);echo '</pre>';