<?php

include('auth/conn.php');
include('auth/auth.php');

$diocese_name = $_POST['diocese_name'];

$sql = "INSERT INTO diocese (diocese_name) VALUES ('$diocese_name')";

$query = mysqli_query($conn, $sql);

if($query){
    $_SESSION['adddiocese_msg'] = 'Diocese has beeen added!';
    header('location: dioceselist.php');
}else{
    $_SESSION['adddiocese_msg'] = 'Diocese not added';
}




?>