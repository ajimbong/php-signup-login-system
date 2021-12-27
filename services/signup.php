<?php
include 'mysql_conn\conn.php';
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$raw_password = mysqli_real_escape_string($conn,$_POST['password']);

$password = password_hash($raw_password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user(name,email,password) VALUES ('$name', '$email', '$password');";



if(mysqli_query($conn, $sql)){
    header('location: ../index.html');
}{
    echo 'There was an error';
}

mysqli_close($conn);

//echo password_verify('test123', $hassp);
