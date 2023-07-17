<?php
session_start();
include("confs/Connection.php");
include("confs/authorize.php");
//include_once "databaseConnection.php";
//include_once "design.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $uErr=$pErr="";
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $username=valid($username);
    $password=valid($password);
    if(empty($username))
    {
        $uErr="Username should not be space";
    }
    if(empty($password))
    {
        $pErr="Password should not be space";
    }
    if(!empty($username) && !empty($password))
    {
        $stmt=$conn->prepare("Select id,password from user where username=?");
        //$hash_code = password_hash($password, PASSWORD_BCRYPT);
        $stmt->execute([$username]); // specific uesrname value from form field
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
        //user password/hascode from table
        if(password_verify($password, $row['password']))
        {
            $_SESSION['id']=$row['id'];
            $_SESSION['uname']=$username;
            $_SESSION['isLoggedIn']= true;
            header("location:index.php");
        }
        else $uErr="username or password incorrect";
        
    }
}
function valid($data)
{
    $data=trim($data);//" ayeaye  "--->"ayeaye"
    $data=stripcslashes($data);//remove slashes
    $data=htmlspecialchars($data);//<script>Attacked</script>---->&1t; convert special character<>->&it
    return $data;
}
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
    <body>
    <p style = "color:red; text-align: center;font-size: 30px ;">LOGIN FORM!!!!</p><br><br>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>"method="post">
        <fieldset><legend>If you already have an account, plz log in</legend>
        <span style="color:red"><?php if( isset($uErr)) echo $uErr ?></span><br>
        User Name <input type="text" name="username" placeholder="Enter User Name" autofocus required><br>
        <span style="color:red"><?php if( isset($pErr)) echo $pErr ?></span><br>
        Password  <input type="password" name="password" placeholder="Enter Password"  required><br><br>
        <input type="submit" value="Login">
        </fieldset>
        </form>
        <a href="Registration.php">HOME</a>
    </body>
</html>

