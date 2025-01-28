<!-- code to not allow admin to directly access admin panel until they are login -->
<?php 
if(session_status()===PHP_SESSION_NONE){
session_start();
}

if( !isset($_SESSION['id']) && empty($_SESSION['id'])){
header('Location:../admin-login.php');
exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- External CSS File Link -->
  <link rel="stylesheet" href="../CSS/style1.css">
  <!-- Font Icons Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


</head>

<body>

<section id="sidebar">
  <i class="fas fa-times sidebar-crossbtn" ></i>
    <a href="#" class="brand"><img src="../Image/admin-logo.png" alt="logo"><span class="link-text">Fashion</span><span
        class="link-text li-brand">Hub</span></a>

    <ul class="side-menu">
      <li><a href="dashboard.php" class="active"><i class="las la-home icon" style="font-size:24px;"></i><span
            class="link-text">Dashboard</span></a></li>
      <li class="divider">Main</li>
      <li><a href="view-category.php"><i class="fas fa-stream icon"></i><span class="link-text">Categories</span></a></li>

      <li>
        <a href="view-product.php"> <i class="fab fa-plus icon"></i><span class="link-text">Products <i
              class="fas fa-caret-right arrow-right"></i></span></a>


        <ul class="sub-menu">

          <li><a href="#"> Man Collection</a></li>
          <li><a href="#"> Kid's Colection</a></li>
          <li> <a href="#"> Discount Offers </a></li>
          <li><a href="#">Woman Collection</a></li>
        </ul>
      </li>

      <li class="divider">General</li>
      <li><a href="view-blog.php"><i class="fas fa-book icon"></i><span class="link-text">Blogs</span></a></li>

      <li><a href="view-testimonial.php"><i class="fas fa-star icon"></i><span class="link-text">Testimonial</span></a></li>
      <li><a href="view-user.php"><i class="fas fa-users icon"></i><span class="link-text">Users</span></a></li>

      <li><a href="view-order.php"><i class="fas fa-shopping-cart icon" ></i><span class="link-text">Orders</span></a></li>

      <li><a href="../logout.php" class="logout-btn"><i class="fas fa-right-to-bracket icon"></i><span
            class="link-text">Logout</span></a>
      </li>
    </ul>
  </section>
 <!----------------JS Script Tags--------------------->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script defer src="sidebar.js"></script>
 

</body>

</html>