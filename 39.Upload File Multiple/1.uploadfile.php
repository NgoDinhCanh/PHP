<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="./2.uploadfile.css">
</head>

<body>
    <div class="content">
        <h1>PHP file upload</h1>
        <form action="3.upload_file.php" method="POST" name="main-form" id="main-form" enctype="multipart/form-data">
            <input type="file" name="file-upload[]" multiple>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>