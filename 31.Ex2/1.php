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
    <?php
        require_once 'function_a.php';
        require_once 'function_b.php';
        $newArr = array();
        foreach ($arrQuestions as $key => $value){
            $newArr[$key]['question'] = $value['question'];
            $newArr[$key]['sentences'] = $arrOptions[$key];
        }
    ?>
    <div class="content">
        <h1>Trắc nghiệm tính cách </h1>
        <form action="result.php" method="POST">
            <?php
        $i =1;
        foreach ($newArr as $key => $value) {
            echo '<div class="question">';
            echo '<p><span>Câu hỏi '.$i.' :</span>'.$value['question'].'</p>';
            echo '<ul>';
            foreach ($value['sentences'] as $keyC => $valueC){
                echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC['point'].'">'.$valueC['option'].'</label></li>';
            }
            echo '</ul>';
            $i++;
        }
        ?>

            <input class="submit" type="submit" value="Kiểm tra" name="submit"></input>

        </form>
    </div>

</body>

</html>