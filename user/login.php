<?php
session_start();
require_once("../config/connection.php");
if(isset($_POST["send"])){
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $sql="SELECT * FROM users WHERE email='$email' AND pass='$pass';";
    $result=mysqli_query($con,$sql);
    if(mysqli_fetch_row($result)>0){

        header("Location: ../index.html");
        exit();
    }
    else{
$_SESSION["status"]="erorr";
header("Location: ../login.php");

    }
}

?>