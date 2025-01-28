<?php 
include('connection.php');
if(isset($_POST['submit'])){
$email=$_POST['email'];
$query="select * from user where email='$email'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
    echo"<script>window.location='index.php';</script>";

}else{
    echo"<script>window.location='index.php';alert('Invalid Email')</script>";

}
}
?>
