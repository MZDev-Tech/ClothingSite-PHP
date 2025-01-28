<?php
session_start();
include ('../connection.php');
// code to not allow admin to directly access admin panel until they are login

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header('Location:../admin-login.php');
    exit();

}

// code to check if admin has submit data
if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $detail = mysqli_real_escape_string($con, $_POST['detail']);
    $image = $_FILES['image']['name'];
    if ($image) {
        $images = $image;
    } else {
        $images = $_POST['img'];
    }
    $query = "update category set name='$name', detail='$detail', image='$images' where id='$id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION['message'] = 'Data Update Successfully';
        header('Location: view-category.php');
        exit();
    } else {
        $_SESSION['message'] = 'Error: Something went wrong.';
        header('Location: view-category.php');
        exit();
    }

}
?>