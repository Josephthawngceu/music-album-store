<html>
<head><title>Artist List</title>

<link rel="stylesheet" href="css/css/style.css">
</head>

<body>
<h1>Artist List</h1>


<ul class="menu">
 <li><a href="album-list.php">Manage Album</a></li>
 <li><a href="artist-list.php">Manage Artist</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>


<?php


include ("confs/Connection.php");
include("confs/authorize.php");
$stmt= $conn->query("Select * FROM artist");

?>
<ul>
<?php
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    

?>
<li title="<?php echo $row['id']?>">
[<a href ="artist-del.php?id=<?php echo $row ['id']?>">Del</a>]
[<a href ="artist-edit.php?id=<?php echo $row ['id']?>">Edit</a>]
<?php echo $row['name']?>

</li>

<?php }?>

</ul>
<a href="artist-new.php" class="new">New Artist</a>
</body>
</html>