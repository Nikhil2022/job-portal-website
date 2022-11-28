<?php
session_start();

$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con,'employer_data');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];

$e = "select * from employer_data where email = '$email'";
$result=mysqli_query($con,$e);
$num = mysqli_num_rows($result);
if ($num == 1){
    echo "Email is already registered";
}
else {
    $reg = "insert into employer_data(firstname,lastname,email,password) values ('$firstname','$lastname','$email','$pass')";
    mysqli_query($con,$reg);
    header('location: successful.html');
    
}
?>