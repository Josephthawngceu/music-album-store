<html>
<head><title>Phone List</title>
<link rel="stylesheet" href="css/css/style.css">
</head>
<body>
<h1>Album List</h1>
<ul class="menu">
 <li><a href="album-list.php">Manage Album</a></li>
 <li><a href="artist-list.php">Manage Artist</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>


<?php

include("confs/Connection.php");
include("confs/authorize.php");
$stmt=$conn->query("SELECT album.*,artist.name
                    FROM album LEFT JOIN artist
                    ON album.artistid=artist.id ORDER BY album.created_date DESC");
?>

<ul class="album">
<?php while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) { ?>
<li>
	<img src="covers/<?php echo $row['cover']?>"
		alt="" align="left" height="100">
		<br>
	<b><?php echo $row['version']?></b>
	<i><?php echo $row['price']?></i>
	<b><?php echo $row['information']?></b>
	<div><?php echo $row['releasedate']?></div>
	<div><?php echo $row['name']?></div>
	
	[<a href="album-del.php?id=<?php echo $row['id']?>">Del</a>]
	[<a href="album-edit.php?id=<?php echo $row['id']?>">Edit</a>]
	
	<br><br>
	
	</li>
	<?php } ?>
</ul>

<a href="album-new.php" class="new">New Album</a>
</body>
</html>