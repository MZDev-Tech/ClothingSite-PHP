<?php
session_start();
include('../connection.php');
$id=$_GET['id'];
$query="delete from category where id='$id'";
$result=mysqli_query($con,$query);
if($result){
    $_SESSION['message']='Delete Successfully';
    header('Location: view-category.php');
    exit();
}else{
    $_SESSION['message']='Error: Something Went Wrong';
    header('Location: view-category.php');
    exit();
}

?>