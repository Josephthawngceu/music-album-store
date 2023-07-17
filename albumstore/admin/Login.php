<?php
session_start();
$name=$_POST['name'];
$password=$_POST['password'];

if($name=="admin" and $password=="123")
{
    $_SESSION['auth']=true;
    header("location: album-list.php");
}
else {
    header("location: index1.php");
}
?>
