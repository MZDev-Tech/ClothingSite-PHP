<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    //password_hash() is used to encrypt password using PASSWORD_BCRYPT(crypt_blowfish) algorithmn
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    $query = "insert into user(name,email,phone,password) VALUES('$name','$email','$phone','$password')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>window.location='index.php';alert('Register Successfully');</script>";
    } else {
        echo "<script>window.location='index.php';alert('Invalid Data');</script>";
    }
}

