<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./1.css">
</head>

<body>
    <div class="content">
        <?php
        $group = array("1" => "Admin","2" => "Manager","3" => "Member","4" => "Guest");
        $namefriends = array("1" => "Man","2" => "Giang","3" => "Khoa","4" => "Dat","5" => "Dien");
        $xhtml = "";
        if(!empty($group)){
            $xhtml .= '<select name="group" id="group" style="width:200px">';
            foreach($group as $key => $value){
                if($key == 1) {
                    $xhtml .= ' <option value="'.$key.'" selected = "selected">'.$value.'</option>';

                }else{
                    $xhtml .= ' <option value="'.$key.'">'.$value.'</option>';
                }
            }
            $xhtml .= '</select>';
        }
        echo $xhtml;
        function createCombobox($name,$attributes,$array,$keySelect){
            $xhtml = "";
            if(!empty($array)){
                $xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'.$attributes.'">';
                foreach($array as $key => $value){
                    if($key == $keySelect) {
                        $xhtml .= ' <option value="'.$key.'" selected = "selected">'.$value.'</option>';
                    }else{
                        $xhtml .= ' <option value="'.$key.'">'.$value.'</option>';
                    }
                }
                $xhtml .= '</select>';
            }
            return $xhtml;
        }

        $combobox = createCombobox("namefriends","width:200px",$namefriends,1);
        echo $combobox;
        ?>
    </div>
</body>

</html>