<?php
include ("confs/Connection.php");
if (isset($_POST['insert'])) {
    $name=$_POST['name'];
    $sql="INSERT INTO artist(name,created_date,modified_date) VALUES('$name', now(), now())";
    $conn->query($sql);
    
    header("location:artist-list.php");
}
?>