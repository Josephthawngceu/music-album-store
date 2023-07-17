<html>
<head>
<title>Album Detail</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<h1>Album Detail</h1>
<?php 

include ("confs/Connection.php");
$id=$_GET['id'];
$phone=$conn->query("SELECT * FROM album WHERE id=$id");
$row=$phone->fetch(PDO::FETCH_ASSOC);

?>
<div class="detail">
<a href="index.php" class="back">&laquo; Go Back</a>
<img src="covers/<?php echo $row['cover']?>"height="150">

<h2><?php echo $row['version']?></h2>
<b><?php echo $row['information']?></b>
<b><?php echo $row['releasedate']?></b>
<i>$<?php echo $row['price']?></i>,
<a href="add-to-cart.php?id=<?php echo $id ?>" class="add-to-cart">Add to cart</a>
</div>


<div class="footer">
&copy;<?php echo date("Y")?>All right reserved.

</div>
</body>

</html>
