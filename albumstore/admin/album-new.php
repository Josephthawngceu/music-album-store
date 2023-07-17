<html>
<head>
<title>New Phone</title>
<link rel="stylesheet" href="css/css/style.css">
<style>
form label{
        display:block;
        margin-top:8px;
</style>
</head>
<body>

<h1>New Album</h1>

<ul class="menu">
 <li><a href="album-list.php">Manage Album</a></li>
 <li><a href="artist-list.php">Manage Artist</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<form action="Album-add.php" method="post" enctype="multipart/form-data">

<label for="version">Album Version</label>
<input type="text" name="version">

<label for="price">Price</label>
<input type="text" name="price">

<label for="information">Information</label>
<input type="text" name="information">

<label for="releasedate">Release Date</label>
<input type="text" name="releasedate">



<label for="artist">Artist</label>
<select name="artistid" id="artist">
	<option value="0">-------Choose------</option>
	
	<?php 
	
	include("confs/Connection.php");
	$stmt=$conn->query("SELECT id,name FROM artist");
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) 
	{ ?>
	
	<option value="<?php echo $row['id']?>">
		<?php echo $row['name']?>
	</option>
	
	<?php 
	} ?>
	
</select><br><br>

<label for="cover">Cover</label>
<input type="file" name="cover"><br><br>

<input type="submit" name="insert" value="Add Album">

<a href="album-list.php">Back</a>


</form>
</body></html>