<?php
$con= mysqli_connect("localhost","root","");
if(!$con)
{
    die ("connection failed");
}


mysqli_select_db($con, 'karunart');
$username = $_POST['uname'];
$email = $_POST['email'];
$contact = $_POST['mobile'];
$comment = $_POST['comments'];


$query = "insert into user_info(username, email, contact, comment) values('$username','$email','$contact', '$comment')";
mysqli_query($con,$query);
header('location:index.php');
?>