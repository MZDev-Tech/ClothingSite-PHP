<?php
session_start();
include('../connection.php');

if(!isset($_SESSION['id']) && !empty($_SESSION['id'])){
header('Location: ../admin-login.php');
exit();
}

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $product=mysqli_real_escape_string($con,$_POST['product']);
    $category=mysqli_real_escape_string($con,$_POST['category']);
    $company=mysqli_real_escape_string($con,$_POST['company']);
    $price=mysqli_real_escape_string($con,$_POST['price']);
    $discount_price=mysqli_real_escape_string($con,$_POST['discount_price']);
    $discount=mysqli_real_escape_string($con,$_POST['discount']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $image=$_FILES['image']['name'];
    if($image){
        $images=$image;
    }else{
        $images=$_POST['img'];
    }

    $query="update product set product='$product', category='$category',company='$company',price='$price',discount_price='$discount_price',discount='$discount',description='$description',image='$images' where id='$id'";
    $result =mysqli_query($con,$query);
    if($result){
        $_SESSION['message']='Data Update Successfully..';
        header('location:view-product.php');
        exit();
    }else{
        $_SESSION['message']='Error: Something Went Wrong...';
        header('location:view-product.php');
        exit();
    }

}
?>