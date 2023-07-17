<?php
session_start();
include("confs/Connection.php");

$username = $_POST['user_name'];
$useremail = $_POST['user_email'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$sql="INSERT INTO contact(user_name, user_email, subject, content) VALUES ('$username','$useremail','$subject','$content')";
$conn->query($sql);
$order_id = $conn->lastInsertId();


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Contact Submitted</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Contact Submitted</h1>
    <div class="msg">
    Your message has been submitted. reply soon.
    <a href="index.php" class="done">Album Store home</a>
  </div>
  <div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
  </div>
</body>
</html>

