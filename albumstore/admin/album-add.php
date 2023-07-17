<?php


include ("confs/Connection.php");

$version=$_POST['version'];
$price=$_POST['price'];
$information=$_POST['information'];
$releasedate=$_POST['releasedate'];
$artistid=$_POST['artistid'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];


if ($cover) {
    move_uploaded_file($tmp, "covers/$cover");
    ;
}
$sql= "INSERT INTO album(version, price, information, releasedate, artistid, cover, created_date, modified_date)
       Values('$version','$price','$information','$releasedate', '$artistid', '$cover', now(), now())";

$conn->query($sql);

header("location:album-list.php");

?>