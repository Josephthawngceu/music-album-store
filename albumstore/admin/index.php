<?php
session_start();

include ("confs/Connection.php");

$cart=0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $qty)
    {
        $cart+=$qty;
    }
    
}
if (isset($_GET['id'])){
    $artistid=$_GET['id'];
    $album=$conn->query("SELECT * FROM album WHERE artistid=$artistid");
    
}
else {
    $album=$conn->query("SELECT * FROM album");

}
$artist=$conn->query("SELECT * FROM artist");
?>

<html>
<head>
<title>J*M Album Store</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<h1>J*M Album Store</h1>
 <ul class="menu">
 <li><a href="home.php">Home</a></li>
 <li><a href="index.php">Album List</a></li>
 <li><a href="aboutus.php">Aboutus</a></li>
 <li><a href="faq.php">FAQ</a></li>
 <li><a href="contact.php">Contactus</a></li>
 </ul>
		
	

<div class="info">
<a href="view-cart.php">
(<?php echo $cart?>) album in your cart
</a>
</div>

<div class="sidebar">
<ul class ="cats">
<li>
<b><a href="index.php">All Album</a></b>
</li>
<?php 
While($row=$artist->fetch(PDO::FETCH_ASSOC))
{
    ?>
    <li>
    <a href="index.php?id=<?php  echo $row['id']?>">
    <?php echo $row['name']?>
    
    </a>
    </li>
    <?php 
}
    ?>
    </ul>
    </div>
    
    <div class="main">
    <ul class="album">
    <?php 
    while ($row=$album->fetch(PDO::FETCH_ASSOC)){
    ?>
    <li>
    <img  src="covers/<?php echo $row['cover']?>" height="100">
    <b>
    <br>
     <a href="album-detail.php?id=<?php echo $row['id']?>">
                <?php echo $row['version'] ?>
         </a>
    
    
    
    </b>
    
    <i>$<?php echo $row['price']?></i>
    <a href="add-to-cart.php?id=<?php echo $row['id']?>" class="add-to-cart">Add to cart</a>
    </li>
    <?php 
    }
    ?>
    
    </ul>
    
    </div>
<div class= "footer">
&copy;<?php echo date("Y")?>.All right reserved.
<a href="Registration.php">HOME</a>


</div>
</body>
</html>