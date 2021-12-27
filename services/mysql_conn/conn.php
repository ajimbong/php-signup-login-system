<?php

/* 
DATABASE <login_crud> CREATE IN MYSQL
TABLE <user> CREATED WITH THE FOLLOWING ATTRIBUTES
|___ uid
|___ name
|___ email
|___ password
|___ created_at
*/

$conn = mysqli_connect('localhost', 'root', '', 'login_crud');
if(!$conn){
    echo 'Database connection error: '.mysqli_connect_error();
}