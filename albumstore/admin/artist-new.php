<html>
<head>
<title>New Artist</title>
<link rel="stylesheet" href="css/css/style.css">


</head>
<body>
<h1>Album Store</h1>
<ul class="menu">
 <li><a href="album-list.php">Manage Album</a></li>
 <li><a href="artist-list.php">Manage Artist</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>


<form action="artist-add.php" method="post">
<label for="name">Artist Name</label>
<input type="text" name="name">
<br><br>
<input type="submit" name="insert" value="Add Artist">
</form>
</body>
</html>