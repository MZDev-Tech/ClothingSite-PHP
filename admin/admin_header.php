<!-- code to not allow admin to directly access admin panel until they are login -->

<?php 
if(session_status()===PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['id']) && empty($_SESSION['id'])){
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

</head>

<body>


    <!----------------Main Header Section--------------------->

    <header id="header-part">
        <div class="dashboard">
            <i class="fas fa-bars toggle-btn"></i>
            <h4>Admin Panel</h4>
        </div>

        <div class="search">
            <form action="">
                <input type="text" name="admin-search" placeholder="Search here">
                <i class="fas fa-search"></i>
            </form>
        </div>

        <?php
        include ('../connection.php');
        $query = "select * from admin where id='1'";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            ?>
        <div class="admin">
            <img src="../Image/<?php echo $row['image']; ?>" alt="Profile Img">
            <div class="profile-data">
                <h5>
                    <?php echo $row['name']; ?>
                </h5>
                <span>Admin</span>
            </div>
            <div id="profile-btn">
                <a href=""> <i class="fas fa-caret-down icon-down"></i> </a>
            </div>

            <?php } ?>
            <div class="profile-dropdown">
                <a href="admin-profile.php" class="profile-link"><i class="las la-user header-icon"></i>Profile</a>
                <a href="../logout.php" class="profile-link"><i class="las la-arrow-circle-right header-icon"></i>Logout</a>
            </div>


        </div>
    </header>


    <!----------------JS Script Tags--------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script defer src="sidebar.js"></script>

</body>

</html>