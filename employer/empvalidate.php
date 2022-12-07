<?php
session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'employer_data');
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

$s = "select * from employer_data where email = '$email' && password = '$password' && username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1){
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['username'] = $username;
    header('location:employerhome.php');
}
else {
    header ('location:unsuccessful.html');
    
}
?>