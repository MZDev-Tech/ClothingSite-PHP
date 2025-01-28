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
    <title>Admin Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External CSS File Link -->
    <link rel="stylesheet" href="../CSS/style1.css">
    <!-- Font Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script>
        //js code to hide alert message after few seconds
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
                <h3>Admin Profile</h3>
                <p>Home / Profile</p>
            </div>

            <!------------------Alert Message--------------- -->
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-warning" id="alertMessage" style="margin:30px;">
                    <strong>Profile! </strong>
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']);
            }
            ?>

            <!---------------Admin Record Table ------------------------->

            <div class="records">
                <div class="record-header">
                    <h4>Profile Details</h4>
                    <div class="browse-record">
                        <a href="" class="addRecord-btn" data-toggle="modal" data-target="#myModal">
                            <i class="fas fa-caret-down"></i> Update Profile</a>
                    </div>
                </div>
                <div class="table-section">
                    <table width="100%">
                        <thead>
                            <tr>

                                <th><span class="las la-sort"></span>Name</th>
                                <th><span class="las la-sort"></span>Authority</th>
                                <th><span class="las la-sort"></span>Image</th>
                                <th><span class="las la-sort"></span>Email</th>
                                <th><span class="las la-sort"></span>Password</th>
                        </thead>
                        </tr>

                        <?php
                        include ('../connection.php');
                        $query = "select * from admin";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>Admin</td>
                                <td><img src="../Image/<?php echo $row['image']; ?>"></td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['password']; ?>
                                </td>
                            </tr>

                        </tbody>
                        <?php } ?>
                    </table>
                </div>


            </div>

        </main>

    </section>


    <!--Admin Profile Updation Model  -->

    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <?php

                        include ('../connection.php');
                        $id = $_SESSION['id'];
                        $query = "select * from admin where id='$id'";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <form method="POST" action="update-profile.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                                </div>

                                <div class="form-group">
                                    <b>Name</b>
                                    <input type="text" name="name" class="form-control" style="text-transform:none;"
                                        value="<?php echo $row['name']; ?>">
                                </div>

                                <div class="form-group">
                                    <b>Email</b>
                                    <input type="text" name="email" class="form-control" style="text-transform:none;"
                                        value="<?php echo $row['email']; ?>">
                                </div>


                                <div class="form-group">
                                    <b>Password</b>
                                    <input type="text" name="password" style="text-transform:none;" class="form-control"
                                        value="<?php echo $row['password']; ?>">
                                </div>


                                <div class="form-group">
                                    <img src="../Image/<?php echo $row['image']; ?>"
                                        style="width:80px; height:80px; border-radius:5px; border: 3px solid #d5d7da; ">
                                    <input type="text" name="img" value="<?php echo $row['image']; ?>"
                                        style="text-transform:none;">
                                </div>



                            <?php } ?>
                            <div class="form-group">
                                <b>Upload Image</b><br>
                                <input type="file" name="image" class="form-control">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-info">Update</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                    </form>


                </div>
            </div>

        </div>


        <!----------------JS Script Tags--------------------->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="sidebar.js"></script>

</body>

</html>