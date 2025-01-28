<!-- code to not allow admin to directly access admin panel until they are login -->
<?php
session_start();

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
  header('Location:../admin-login.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Orders</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- External CSS File Link -->
  <link rel="stylesheet" href="../CSS/style1.css">
  <!-- Font Icons Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <!-- Js code to hide alert message after few seconds -->
  <script>
    $(document).ready(function () {
      setTimeout(function () {
        $('#alertMessage').fadeOut('slow');
      }, 4000);
    });
  </script>
</head>

<body>


  <!-----------SideBar Section------------------->
  <?php include ('sidebar-main.php'); ?>

  <!----------------Main Header Section--------------------->
  <section id="main-page">

    <?php include ('admin_header.php'); ?>



    <!----------------Main Page Design--------------------->
    <main id="page-content">
      <div class="page-name">
        <h3>User Order</h3>
        <p>Home / Orders</p>
      </div>


      <!-- Alert Message -->

      <?php

      if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-warning" id="alertMessage" style="margin:30px;">
          <strong>Orders! </strong>
          <?php echo $_SESSION['message']; ?>
        </div>



        <?php
        unset($_SESSION['message']);
      }
      ?>
      <!-- Products Record Table -->

      <div class="records">
        <div class="record-header">
          <h4>Product Orders</h4>
          <div class="browse-record">
            <input type="text" name="search" placeholder="Search Order">
            <a href="" class="addRecord-btn"><i class="fas fa-caret-down"></i> Add New</a>
          </div>
        </div>

        <div class="table-section">
          <table width="100%">
          <tr>
            <thead>

                <th style="width:220px"><span class="las la-sort"></span>Product</th>
                <th style="width:180px"><span class="las la-sort"></span>User</th>
                <th><span class="las la-sort"></span>Total</th>
                <th><span class="las la-sort"></span>Date</th>
                <th><span class="las la-sort"></span>Status</th>

                <th><span class="las la-sort"></span>Action</th>

            </thead>
            </tr>
            <tbody>
              <tr>
                <td class="product-col">
                  <img src="../Image/s2.jpg" alt="">
                  <div class="product-data">
                    <h5>Woman Fashion</h5>
                    <p>Plain White T-shirt</p>
                  </div>
                </td>


                <td>
                  <div class="contact">
                    <p style="margin:0; font-size:14px; padding-left:8px;">Ayesha</p>
                    <small style="margin:0;">+923345678954</small>
                  </div>

                </td>

            
                <td>RS 8,200/-</td>
                <td>22 Feb, 2024</td>
                <td class="order-status" style="color:rgb(215, 164, 50); font-weight:bold">Pending</td>
                <td>
                  <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="#deleteModel<?php echo $row['id']; ?>" data-toggle="modal"
                    data-target="#deleteModal<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>



            </tbody>
         
  <!----------------Delete Model For Model-------------------->

  <div class="container">

    <!-- Modal -->
    <div class="modal fade" id="deleteModal<?php echo $row['id']; ?> " role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Delete Order</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>Are you sure, you want to delete this record.</p>
            <p class="text-warning"><small>This action cann't be Undo.</small></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger"
              href="delete-order.php?id=<?php echo $row['id']; ?>">Delete</button>
          </div>
        </div>

      </div>
    </div>

  </div>

  </table>
        </div>

        <div class="pagination">
          <div><i class="fa-solid fa-angles-left"></i></div>
          <div><i class="fa-solid fa-chevron-left"></i></div>
          <div>1</div>
          <div>2</div>
          <div><i class="fa-solid fa-chevron-right"></i></div>
          <div><i class="fa-solid fa-angles-right"></i></div>

        </div>
      </div>

    </main>

  </section>


  <!----------------JS Script Tags--------------------->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="sidebar.js"></script>

</body>

</html>