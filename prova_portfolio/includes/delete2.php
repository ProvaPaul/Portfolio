<?php
// Assume this is the beginning of your PHP file
include 'config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
if(!$con){
die ('error in con' . mysqli_error($con));
}

$id=$_GET['id'];
$qry="delete from `projects` where id=$id";
if(mysqli_query($con,$qry)){
    header('location:table2.php');
}
else{
    echo mysqli_error($con);
}
?>