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
        $data =file('question.txt') or die("Can't read file");
        $total = 0;
        array_shift($data);
        foreach($data as $key => $value){
            $tmp = explode('|',$value);
            $id = $tmp[0];
            $total = $total + (int)$_POST[$id];
        }
        $data1 = file('result.txt') or die("Can't read file");
        array_shift($data1);
        foreach($data1 as $key => $value){
            $tmp = explode('|',$value);
            $min = $tmp[0];
            $max = $tmp[1];
            $content = $tmp[2];
            if ($total >= $min && $total <= $max){
                $result = $content;
                break;
            }
        }
    ?>
    <div class="content">
        <h1>Kết quả trắc nghiệm tính cách</h1>
        <p><b>Tổ số điểm của bạn là </b><?php echo $total; ?></p>
        <p style='margin-top:10px; text-align:justify'><?php echo $result ?></p>
    </div>

</body>

</html>