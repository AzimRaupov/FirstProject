<?php
session_start();
require_once("../config/connection.php");
if(isset($_POST["send"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $time=time();
    $date=date("Y-m-d",$time);
    $sql="SELECT * FROM users WHERE email='$email';";
    $result=mysqli_query($con,$sql);
    if(mysqli_fetch_row($result)>0){
        $_SESSION["status"]="eror";
        header("Location: ../registr.php");
        
        exit();
    }
    else{
    $sql="INSERT INTO users(NAME,email,pass,DATE) VALUES('$name','$email','$pass','$date');";
    $result=mysqli_query($con,$sql);
$_SESSION["status"]="ok";
header("Location: ../login.php");
}
}

?>