<?php

session_start();
$con=mysqli_connect("localhost","root","","karunart");
if(!$con)
{
    die("Connection Failed");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $code = $_POST["pass"];

    $sql ="select *from login where username='".$username."' AND password = '".$code."' ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION["username"] = $username;
        header("location:admin.php");
    }

    else{
        echo "Invalid ";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Admin Login Page</h1>
        <br><br><br><br>
        <div style="background-color:grey; width:500px;">

            <br><br>
            <form action="#" method="POST">
    <div>
        <label for="">Username</label>
        <input type="text" name="username" required>
    </div>
    <br><br>
    <div>
        <label for="">Password</label>
        <input type="password" name="pass" required>

    </div>
    <br><br>
    <div>
        <input type="submit" name="" id="" value="Log in">
    </div>
    </form>
    <br><br>
    </div>
   
    </center>
</body>
</html>
