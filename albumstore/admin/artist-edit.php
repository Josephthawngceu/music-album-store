<html>
<head>
<title>Edit</title>

<link rel="stylesheet" href="css/css/style.css">
</head>
<body>
<h1>Edit Artist</h1>
<ul class="menu">

 <li><a href="album-list.php">Manage Album</a></li>
 <li><a href="artist-list.php">Manage Artist</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>
<?php 


include ("confs/Connection.php");
$id=$_GET['id'];
$stmt=$conn->prepare("Select * FROM artist WHERE id=$id");
$stmt->execute([$id]);
$row=$stmt->fetch(PDO::FETCH_ASSOC);



?>
<form action="artist-update.php" method="post">
<input type="hidden" name="id" value="<?php  echo $row['id']?>">

<label for = "name">Artist Name</label>
<input type="text" name= "name" value="<?php echo $row['name']?>">

<br><br>
<input type="submit" value="Update Artist">
</form>
</body>
</html>
