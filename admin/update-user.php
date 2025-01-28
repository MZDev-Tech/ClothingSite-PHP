<?php 
session_start();
include('../connection.php');
// code to not allow admin to directly access admin panel until they are login

if( !isset($_SESSION['id']) && empty($_SESSION['id'])){
    header('Location:../admin-login.php');
    exit();
    
    }
    
    // code to check if admin has submit data
if(isset($_POST['submit'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
   
    $query="update user set name='$name', email='$email', phone='$phone', password='$password' where id='$id'";
    $result=mysqli_query($con,$query);
    if($result){
        $_SESSION['message']='Data Update Successfully';
        header('Location: view-user.php');
        exit();
    }else{
        $_SESSION['message']='Error: Something went wrong.';
        header('Location: view-user.php');
        exit();
    }

}
?>

