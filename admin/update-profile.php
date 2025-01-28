<?php
session_start();
include ('../connection.php');
// code to not allow admin to directly access admin panel until they are login

if( !isset($_SESSION['id']) && empty($_SESSION['id'])){
    header('Location:../admin-login.php');
    exit();
    
    }
    
    // code to check if admin has submit data
if (isset ($_POST['submit'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email =mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $image = $_FILES['image']['name'];
    if ($image) {
        $images = $image;
    } else {
        $images = $_POST['img'];
    }

    $query = "update admin set name='$name',email='$email',password='$password',image='$images' where id='$id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION['message'] = 'Profile Updated Successfully';

        header('Location: admin-profile.php ');
     exit();
     
 } else {
     $_SESSION['message'] = 'Error: Something went wrong.';
     header('Location: admin-profile.php ');
     
     exit();

}
}

?>