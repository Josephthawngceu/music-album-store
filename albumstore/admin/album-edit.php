<html>
<head>
<title>Edit Album</title>

<link rel="stylesheet" href="css/css/style.css">

<style>
 form label{
  display:block;
  margin-top:8px;
  
 }
</style>
</head>
<body>
<?php 


include ("confs/Connection.php");

$id=$_GET['id'];
$result=$conn->prepare("SELECT * FROM album WHERE id=$id");
$result->execute(['$id']);
$row=$result->fetch(PDO::FETCH_ASSOC);
?>
<h1>EDIT album</h1>
<ul class="menu">
 <li><a href="album-list.php">Manage Album</a></li>
 <li><a href="artist-list.php">Manage Artist</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>




<form action="album-update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php  echo $row['id']?> ">


<label for="version">Album Version</label>
<input type="text" name="version" id="version" value="<?php echo $row['version']?>">

<label for="price">Price</label>
<input type="text" name="price" id="price" value="<?php echo $row['price']?>">

<label for="releasedate">Release Date</label>
<input type="text" name="releasedate" id="releasedate" value="<?php echo $row['releasedate']?>">

<label for="information">Information</label>
<input type="text" name="information" id="information" value="<?php echo $row['information']?>">


<label for="artist">Artist</label>
<select name="artistid" id="artist">
<option value="0">----choose----</option>

<?php $stmt =$conn->prepare("SELECT id, name FROM artist");
$stmt->execute();
while ($artist=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>


<option value="<?php  echo $artist['id']?>"
<?php if ($artist['id']==$row ['artistid']) echo "selected"?> >

<?php echo $artist['name']?>

</option>
<?php } ?>
</select>
<br><br>
<img src="covers/<?php echo $row['cover']?>" alt="" height ="150">
<label for ="cover">Change cover</label>
<input type="file" name="cover" id="cover">
<br><br>
<input type="submit" value="Update album">
<a href ="album-list.php">Back</a>

</form>
</body>




</html>