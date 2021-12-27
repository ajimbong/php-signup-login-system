<?php 
 include 'mysql_conn\conn.php';
$name = $password = $created_at = '';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$raw_password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email';";

$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
if($data){
    $name = $data[0]['name'];
    $password = $data[0]['password'];
    $created_at = $data[0]['created_at'];

    if(password_verify($raw_password, $password)){
        session_start();
        $_SESSION['name'] = $name;
        header('location: ../grid.php');
    }else{
        echo 'The passwords do not match';
    }
}else{
    echo("There were no matches for your email");
}