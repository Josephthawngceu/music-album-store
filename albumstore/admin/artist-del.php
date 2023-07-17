<?php


include ("admin/confs/Connection.php");
$id =$_GET['id'];
$stmt=$conn-> prepare("Delete FROM artist where id=$id");
$stmt->execute([$id]);
header("location:artist-list.php");
?>