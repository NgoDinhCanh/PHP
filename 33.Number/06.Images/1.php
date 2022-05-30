<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Random</title>
    <link rel="stylesheet" href="./1.css">
</head>

<body>
    <?php
        
    ?>
    <div class="content">
        <h1>Image Random </h1>
        <div class="image">
            <?php
                $number = rand(1,5);
                echo '<image src="image/Travel_'.$number.'.jpg" />'; 
            ?>
            <a href="javascript:f5Page();">Random Image</a>
        </div>
    </div>

</body>
<script type="text/javascript">
function f5Page() {
    window.location.reload();
}
</script>

</html>