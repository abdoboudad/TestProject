<?php
    if(isset($_POST['con'])){
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db = 'links';
        $conn = mysqli_connect($host,$user,$pass,$db);
        //$insert = "insert into user_link('link') values(20,'hello') ";
        $url = stripslashes($_POST['link']) ;
        //$url = htmlentities(mysqli_real_escape_string($conn,$_POST['link']));
        $check_url = substr($url,0,24);
        if(empty($_POST['link']) || $check_url!='https://www.youtube.com/'){
            $empty ='<span class="text-danger">link is required</span>';
        }else{
            $insert ="INSERT INTO  `user_link`(`link`) VALUE ('$url')";
            $q = mysqli_query($conn,$insert);
            header('location:http://localhost/test2');
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlphaTub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="index.php" method="POST">
        <div class="container ">
            <center>
                <h1>Share Your Link Now</h1>
                <div class="form-group row">
                   <div class="col-4"></div>
                    <div class="col-sm-4 ">
                        <input type="text" name="link" class="form-control w-50px" placeholder="Enter your url">
                        <?php echo $empty  ?>
                    </div>
                </div>
                </div> 
                <input class="btn btn-success" type="submit" name="con" value="connect" id="">
        </div>        
            </center>
    </form>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>