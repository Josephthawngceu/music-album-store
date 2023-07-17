<?php
include ("confs/Connection.php");


$id=$_POST['id'];
$name=$_POST['name'];

$stmt=$conn->prepare("UPDATE artist SET name='$name' WHERE id=$id");
$stmt->execute([$name,$id]);


header("location:artist-list.php");

?>