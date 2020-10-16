<?php 

include('header.php');
include('auth/auth.php');
include('auth/conn.php');

$name  = $_POST['name'];
$nickname = $_POST['nickname'];
$batch_name = $_POST['batch_name'];
$graduate_year = $_POST['graduate_year'];
$diocese = $_POST['diocese'];
$marital_status = $_POST['marital_status'];
$sibling = $_POST['sibling'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$img_profile = $_FILES['img_profile']['name'];
$tmp = $_FILES['img_profile']['tmp_name'];


if($img_profile){
    move_uploaded_file($tmp, "covers/$img_profile");
}

$sql = "INSERT INTO members (name, nickname, batch_name, graduate_year, diocese, marital_status, sibling, 
contact_no, email, img_profile) 
VALUES ('$name', '$nickname', '$batch_name', '$graduate_year', '$diocese', '$marital_status', '$sibling', 
'$contact_no', '$email', '$img_profile')";

$query = mysqli_query($conn, $sql);

if($query){
    $_SESSION['addmember_msg'] = 'Member has been added!';
    header('location: memberlist.php');
}else{
    $_SESSION['addmember_msg'] = 'Member not added';
}

 
?>





<?php

include('footer.php')

?>