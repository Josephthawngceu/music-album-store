<?php
session_start();
include("confs/Connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql="INSERT INTO orders(name, email, phoneno, address, status, created_date, modified_date) VALUES ('$name','$email','$phone','$address', 0, now(), now())";
$conn->query($sql);
$order_id = $conn->lastInsertId();

foreach($_SESSION['cart'] as $id => $qty) {
    $sql="INSERT INTO order_items(order_id, album_id, qty) VALUES ($order_id,$id,$qty)";
    $conn->query($sql);
}
unset($_SESSION['cart']);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Order Submitted</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Order Submitted</h1>
    <div class="msg">
    Your order has been submitted. We'll deliver the items soon.
    <a href="index.php" class="done">Album Store Home</a>
  </div>
  <div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
  </div>
</body>
</html>

