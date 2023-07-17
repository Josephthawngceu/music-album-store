<?php

include("confs/Connection.php");

$id=$_POST['id'];
$version=$_POST['version'];
$price=$_POST['price'];
$releasedate=$_POST['releasedate'];
$information=$_POST['information'];
$artistid=$_POST['artistid'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

if($cover)
{
    move_uploaded_file($tmp, "covers/$cover");
    $sql="UPDATE album SET version='$version', price='$price', releasedate='$releasedate', information='$information',
          artistid='$artistid', cover='$cover', modified_date=now() WHERE id=$id";
}

else{
    $sql="UPDATE album SET version='$version', price='$price', releasedate='$releasedate', information='$information',
          artistid='$artistid', cover='$cover', modified_date=now() WHERE id=$id";
}


$conn->query($sql);
header("location: album-list.php");
?>
