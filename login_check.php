<?php
error_reporting(0);
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'studentproject';


$data = mysqli_connect($host,$user,$password,$db);

if($data===false){
    die('connection error');
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
   $name = $_POST['username'];
   $pass = $_POST['password'];

   $sql = "select * from user where username = '$name' AND password = '$pass'";

   $result = mysqli_query($data,$sql);

   $row= mysqli_fetch_array($result);

if($row["type"]=="student")
{

    $_SESSION['username']=$name;
    $_SESSION['type']="student";
header("location:student.php");
}

elseif($row["type"]=="admin"){

    $_SESSION['username']=$name;
    $_SESSION['type']="admin";

    header("location:admin.php");
}
else{
    $message = "username or password do not match";
    $_SESSION['loginMessage']=$message;
    header("location:login.php");
}


}



?>