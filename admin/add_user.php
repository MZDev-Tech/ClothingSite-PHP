<?php
session_start();
include ('../connection.php');

// code to not allow admin to directly access admin panel until they are login

if( !isset($_SESSION['id']) && empty($_SESSION['id'])){
header('Location:../admin-login.php');
exit();

}

//code to check if admin has submit form

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);



    $query = "Insert into user(`name`, `email`,`phone`, `password`) values('$name','$email','$phone','$password')";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION['message'] = 'Data Added Successfully';

        header('Location: view-user.php ');
        exit();

    } else {
        $_SESSION['message'] = 'Error: Something went wrong.';
        header('Location: view-user.php ');

        exit();
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
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
    <?php include ('sidebar-main.php'); ?>


    <!----------------Main Header Section--------------------->
    <section id="main-page">
        <?php include ('admin_header.php'); ?>


        <!----------------Main Page Design--------------------->
        <main id="page-content">
            <div class="page-name">
                <h3>Users</h3>
                <p>Home / Add New</p>
            </div>



            <!-- Category Record Table -->

            <div class="form-records">
                <form method="POST" action="" enctype="multipart/form-data">
                    <h4>Add New User</h4><br>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email ID" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Contact" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="password" placeholder="Password" class="form-control" required>
                    </div>



                    <div class="form-group"><br>
                        <input type="submit" name="submit" class="btn btn-info w-25">
                    </div>
                </form>

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