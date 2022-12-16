<?php
$username = strtolower(stripslashes($_POST['username'])) ;
$password = stripslashes($_POST['password']);

$username = htmlentities(mysqli_real_escape_string($conn,$_POST['username']) );
$password = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));

if(empty($username) || filter_var($username,FILTER_VALIDATE_INT) || strlen($username)>10){
    $error_username = '<span class="text-danger mx-5">please enter a valid username<span>';
    $error = 1;
}
if(empty($password)){
    $error_password_empty = '<span class="text-danger mx-5">please enter a valid password<span>';
    $error = 1;
}elseif(strlen($password)<8){
    $error_password_bad = '<span class="text-danger mx-5">please enter a strong password<span>';
    $error = 1;
}
else{
    if()
}

?>