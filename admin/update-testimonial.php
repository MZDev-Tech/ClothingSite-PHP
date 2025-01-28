<?php
session_start();
include('../connection.php');

if(!isset($_SESSION['id']) && !empty($_SESSION['id'])){
header('Location: ../admin-login.php');
exit();
}

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $user=mysqli_real_escape_string($con,$_POST['user']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $profession=mysqli_real_escape_string($con,$_POST['profession']);
    $position=mysqli_real_escape_string($con,$_POST['position']);
    $testimonial=mysqli_real_escape_string($con,$_POST['testimonial']);
    $image=$_FILES['image']['name'];
    if($image){
        $images=$image;
    }else{
        $images=$_POST['img'];
    }

    $query="update testimonial set user='$user', email='$email',profession='$profession',position='$position',testimonial='$testimonial',image='$images' where id='$id'";
    $result =mysqli_query($con,$query);
    if($result){
        $_SESSION['message']='Data Update Successfully..';
        header('location:view-testimonial.php');
        exit();
    }else{
        $_SESSION['message']='Error: Something Went Wrong...';
        header('location:view-testimonial.php');
        exit();
    }

}
?>