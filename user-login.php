<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query="select * from user where email ='$email'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){

        $row=mysqli_fetch_array($result);
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];

    

        //password_verify($entered_password, $stored_hashed_password)function is used to match hash password 
        if(password_verify($password,$row['password'])){
           
            echo"<script>window.location='index.php';alert('Login Successfully');</script>";

        }
        else{

        echo"<script>window.location='index.php';alert('Incorrect Password');</script>";
    }
    }
    else{
        echo"<script>window.location='index.php';alert('Incorrect Email or Password');</script>";
    }
}


?>
