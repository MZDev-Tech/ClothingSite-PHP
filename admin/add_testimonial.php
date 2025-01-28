<?php
session_start();
include ('../connection.php');

// code to not allow admin to directly access admin panel until they are login

if( !isset($_SESSION['id']) && empty($_SESSION['id'])){
header('Location:../admin-login.php');
exit();

}
// code to check if admin has submit form
if (isset($_POST['submit'])) {

    $user = mysqli_real_escape_string($con, $_POST['user']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $profession = mysqli_real_escape_string($con, $_POST['profession']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $testimonial = mysqli_real_escape_string($con, $_POST['testimonial']);

    $image = $_FILES['image']['name'];

    $query = "Insert into testimonial(`user`, `email`, `profession`,  `position`, `testimonial`, `image`) values('$user','$email','$profession','$position','$testimonial','$image')";
    $result = mysqli_query($con, $query);
    if ($result) {

        $_SESSION['message'] = 'Data Added Successfully';

        header('Location: view-testimonial.php ');
        exit();

    } else {
        $_SESSION['message'] = 'Error: Something went wrong.';
        header('Location: view-testimonial.php ');

        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add testimonial</title>
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
                <h3>Testimonials</h3>
                <p>Home / Add New</p>
            </div>



            <!-- Category Record Table -->

            <div class="form-records">
                <form method="POST" action="" enctype="multipart/form-data">
                    <h4>Add New Testimonial</h4><br>
                    <div class="form-group">
                        <input type="text" name="user" placeholder="Username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <input type="text" name="profession" placeholder="Profession" class="form-control" required>

                    </div>

                    <div class="form-group">
                        <input type="text" name="position" placeholder="Profession Position" class="form-control"
                            required>
                    </div>

                    <div class="form-group">
                        <textarea type="text" name="testimonial" placeholder="Testimonial"
                            class="form-control "></textarea>
                    </div>


                    <div class="form-group">
                        <label style="font-weight:500;">Upload Image</label><br>
                        <input type="file" name="image" class="form-control" required>
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