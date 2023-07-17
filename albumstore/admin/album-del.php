<?php


include ("confs/Connection.php");
$id =$_GET['id'];
$stmt=$conn-> prepare("Delete FROM album where id=$id");
$stmt->execute([$id]);
header("location:album-list.php");
?>