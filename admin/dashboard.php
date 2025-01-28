<!-- code to not allow admin to directly access admin panel until they are login -->
<?php 
session_start();

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
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- External CSS File Link -->
  <link rel="stylesheet" href="../CSS/style1.css">
  <!-- Font Icons Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


</head>

<body>


  <!-----------SideBar Section------------------->
  <?php include('sidebar-main.php');?>
  
  <!----------------Main Header Section--------------------->
  <section id="main-page">

    <?php include('admin_header.php');?>


    <!----------------Main Page Design--------------------->
    <main id="page-content">
      <div class="page-name">
        <h3>Dashboard</h3>
        <p>Home / Dashboard</p>
      </div>


      <div class="card-parent">
        <div class="card-box1">
          <div class="box-value">
            <h5>6,980</h5>
            <i class="las la-user-friends dash-icon"></i>
          </div>

          <div class="card-progress">
            <span>Our Customers</span>
            <div class="progress-tracker">
              <div class="progress first"></div>
            </div>
          </div>
        </div>

        <div class="card-box1">

          <div class="box-value">
            <h5>8,980</h5>
            <i class="las la-shopping-cart dash-icon"></i>

          </div>

          <div class="card-progress">
            <span>Recent Orders</span>
            <div class="progress-tracker">
              <div class="progress second"></div>
            </div>
          </div>
        </div>



        <div class="card-box1">

          <div class="box-value">
            <h5>6,980</h5>
            <i class="las la-envelope dash-icon"></i>
          </div>

          <div class="card-progress">
            <span>Testimonials</span>
            <div class="progress-tracker">
              <div class="progress third"></div>
            </div>
          </div>
        </div>


        <div class="card-box1">

          <div class="box-value">
            <h5>5,980</h5>
            <i class="las la-shopping-bag dash-icon"></i>
          </div>
          <div class="card-progress">
            <span>Total Products</span>
            <div class="progress-tracker">
              <div class="progress fourth"></div>
            </div>
          </div>

        </div>
      </div>


      <!-- Dashboard part2 for recent orders and Users -->

      <div class="dashboard-part2">
        <div class="order-parent">
          <div class="title-part">
            <h4>Recent Orders</h4>
            <a href="#">View All</a>
          </div>
          <div class="dash-table">

          <table width="100%">
            <thead>
              <th style="width:220px">Product</th>

              <th>Customer</th>
              <th>Location</th>
              <th>Order Date</th>
              <th>Status</th>

            </thead>
            <tbody>
              <tr>
                <td class="order-product">
                  <img src="../Image/s2.jpg" alt="">
                  <div class="product-data">
                    <h5>Woman Fashion</h5>
                    <p>Plain White T-shirt</p>
                  </div>
                </td>

                <td>Ayesha</td>
                <td>Lahore</td>
                <td>22 Feb, 2024</td>
                <td><span class="pending-status">Pending</span> </td>

              </tr>

              <tr>
                <td class="order-product">
                  <img src="../Image/mm2.jpg" alt="">
                  <div class="product-data">
                    <h5>Discount Offer</h5>
                    <p>Plain T-shirt</p>
                  </div>
                </td>

                <td>Naila</td>
                <td>Chakwal</td>
                <td>15 Feb, 2024</td>
                <td><span class="delivered-status">Delivered</span> </td>

              </tr>

              <tr>
                <td class="order-product">
                  <img src="../Image/kid1.jpg" alt="">
                  <div class="product-data">
                    <h5>Kid's Arrival</h5>
                    <p>Wool Jacket</p>
                  </div>
                </td>

                <td>Amar Ali</td>
                <td>Sargodha</td>
                <td>16 Feb, 2024</td>
                <td><span class="progress-status">In Progress</span> </td>

              </tr>
            </tbody>
          </table>
          </div>
        </div>


        <div class="user-parent">

          <div class="title-part">
            <h4>New User</h4>
            <a href="view-user.php">View All</a>
          </div>

          <div class="dash-table">
          <table width="100%">
            <thead>
              <th>Image</th>
              <th>User</th>
              <th>Contact</th>

            </thead>
            <tbody>
              <?php 
              include('../connection.php');
              $query="select * from user ";
              $result=mysqli_query($con,$query);
              while($row=mysqli_fetch_assoc($result)):
              ?>
              <tr>
                <td class="img-part">
                  <img src="../Image/user-profile.jpg" alt="">

                </td>
                <td><?php echo  $row['name'];?></td>

                <td class="contact-icons">
                  <a href=""><i class="fa-solid fa-phone"></i></a>
                  <a href=""><i class="fa-solid fa-envelope"></i></a>
                  <a href=""><i class="fa-solid fa-location-dot"></i></a>
                </td>
              </tr>

              <?php endwhile; ?>
            </tbody>
          </table>

        </div>
</div>
      </div>

    </main>

  </section>




  <!----------------JS Script Tags--------------------->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script defer src="sidebar.js"></script>
</body>

</html>