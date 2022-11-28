<?php
session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'users');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from user_data where email = '$email' && username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1){
    echo "Email is Already Registered or Username is Already Taken";
}
else {
    $reg= "insert into user_data(firstname,lastname,username,email,password) values('$firstname','$lastname','$username','$email','$pass')";
    mysqli_query($con, $reg);
    header('location:successful.html');
}
?>