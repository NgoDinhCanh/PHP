<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
    <link rel="stylesheet" href="./form.css">
</head>

<body class="align">
    <div class="grid">
        <h1 style="text-align: center">Process</h1>
        <div id="form">
            <?php
                require_once 'function.php';
                $username = $_POST['username'] ;
                $password = md5($_POST['password']);
                if( isset( $_SESSION['flagPermission']) && $_SESSION['flagPermission'] == true){
                    echo '<h3>Welcome: '.$_SESSION['fullName'].' </h3>';
                    echo '<a href="logout.php">Logout</a>';
                }else{
                    if(!checkEmpty($username) && !checkEmpty($password)){
                        //Cach 1 : ko toi uu toc do 
                        // $data = file('user.txt');
                        // $result = array();
                        // foreach($data as $value){
                        //     echo $value = explode('|',$value);
                        //     if($value[0] == $username ) {
                        //         $result = $value;
                        //         break;
                        //     }
                        // }
                        //Cach 2 :
                        $data = parse_ini_file('user.ini');
                        $user = $data[$username];
                        $userdata = explode('|',$user);
                        if($userdata[0] == $username && $userdata[1] == $password) {
                            session_start();
                            $_SESSION['fullName'] = $userdata[2];
                            $_SESSION['flagPermission'] = true;
                            echo '<h3>Welcome: '.$_SESSION['fullName'].' </h3>';
                            echo '<a href="logout.php">Logout</a>';
                        }else{
                            header('Location:form.php');
                        }
                    }else {
                        header('Location:form.php');
                    }
                }
                
            ?>
        </div>
    </div>



</body>

</html>