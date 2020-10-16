<?php

include('auth/conn.php');
include('auth/auth.php');

$batch_no = $_POST['batch_no'];

$sql = "INSERT INTO batch (batch_no) VALUES ('$batch_no')";

$query = mysqli_query($conn, $sql);

if($query){
    $_SESSION['addbatch_msg'] = 'Batch has beeen added!';
    header('location: batchlist.php');
}else{
    $_SESSION['addbatch_msg'] = 'Batch not added';
}





?>