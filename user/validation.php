<?php
session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'users');
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from user_data where email = '$email' && password = '$pass' && username='$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1){
    $_SESSION['name'] = $username;
    header('location:homepage.php');
}
else {
    header ('location:unsuccessful.html');
    
}
?>