<?php
session_start();
include('../connection.php');
$id=$_GET['id'];
$query="delete from testimonial where id='$id'";
$result=mysqli_query($con,$query);
if($result){
    $_SESSION['message'] = 'Data Deleted Successfully';

    header('Location: view-testimonial.php ');
 exit();
 
} else {
 $_SESSION['message'] = 'Error: Something went wrong.';
 header('Location: view-testimonial.php ');
 
 exit();
}

?>