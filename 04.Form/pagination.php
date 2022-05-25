<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./pagination.scss">
</head>

<body>
    <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">

        <ul class="pagination">
            <li class="pagination-item--wide first">
                <a class="pagination-link--wide first" href="#">Previous</a>
            </li>
            <li class="pagination-item first-number">
                <a class="pagination-link" href="pagination.php?page=1">1</a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link" href="pagination.php?page=2">2</a>
            </li>
            <li class="pagination-item ">
                <a class="pagination-link" href="pagination.php?page=3">3</a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link" href="pagination.php?page=4">4</a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link" href="pagination.php?page=5">5</a>
            </li>
            <li class="pagination-item--wide last">
                <a class="pagination-link--wide last" href="#">Next</a>
            </li>
        </ul>
        <?php
            $page = (isset($_GET["page"])) ? $_GET["page"] : 0;
        ?>
        <p>Ban dang o page <?php echo $page; ?></p>

    </div>

</body>

</html>