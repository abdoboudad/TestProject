<?php
include('connection.php');
//get values
if(isset($_POST['submit'])){
    $username = strtolower(stripslashes($_POST['username'])) ;
    $email =strtolower(stripslashes($_POST['email'])) ;
    $password = stripslashes($_POST['password']);

    //security of data base
    $username = htmlentities(mysqli_real_escape_string($conn,$_POST['username']) );
    $email = htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));
    $md5 = md5($password);

    //conditions :
    if(empty($username) || filter_var($username,FILTER_VALIDATE_INT) || strlen($username)>10){
        $error_username = '<span class="text-danger mx-5">please enter a valid username<span>';
        $error = 1;
    }

    if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) || strlen($email)>40){
        $error_email = '<span class="text-danger mx-5">please enter a valid email<span>';
        $error = 1;
    }

    if(empty($password)){
        $error_password_empty = '<span class="text-danger mx-5">please enter a valid password<span>';
        $error = 1;
    }elseif(strlen($password)<8){
        $error_password_bad = '<span class="text-danger mx-5">please enter a strong password<span>';
        $error = 1;
    }
    if(isset($error)){
        include('index.php');
        echo "<script src='js/tojoinwindow.js'></script>";
    }
    else{
        if(!isset($error)){
            $insert ="INSERT INTO  `data_login`(`username`,`email`,`password`,`md5`) VALUES ('$username','$email','$password','$md5')";
            $q = mysqli_query($conn,$insert);
            header('location:home.php');
    }
    }
}


?>