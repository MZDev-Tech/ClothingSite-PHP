<?php
session_start();
include ('connection.php');
if (isset($_POST['submit'])) {
    $admin = mysqli_real_escape_string($con, $_POST['name_email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "select * from admin where (name='$admin' OR email ='$admin') && password='$password'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];

        //Code to store admin data in cookies if admin fill checkbox of (remember_me) 
        if (isset($_POST['remember_me'])) {
            setcookie('name_email', $_POST['name_email'], time() + 60 * 60 * 24);
            setcookie('password', $_POST['password'], time() + 60 * 60 * 24);

        } else {
            setcookie('name_email', '', time() + 60 * 60 * 24);
            setcookie('password', '', time() + 60 * 60 * 24);
        }
        echo "<script>window.location='admin/dashboard.php';alert('Admin Login Successfully...');</script>";

    } else {
        $_SESSION['message1'] = 'Something Went Wrong.';
        header('location:admin-login.php');
        exit();
    }

}

//code to check if cookies is set or(these two named cookies exist then create variable of $name & $pass) than display in in input fields
if(isset($_COOKIE['name_email']) && isset($_COOKIE['password'])){
$cookie_name=$_COOKIE['name_email'];
$cookie_pass=$_COOKIE['password'];

}else{
    $cookie_name="";
    $cookie_pass="";  
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External CSS File Link -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Font Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script>
        // JavaScript code to hide the alert message after 2 to 3 seconds

        setTimeout(function () {
            $('#alert-message').fadeOut('slow');
        }, 4000);

    </script>

</head>

<body class="admin-body">




    <section class="container">
        <div class="admin-login row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">

                    <div class="admin-header">
                        <h4 class="text-center admin-title">Admin Login Panel</h4>
                        <p class="text-center ">Hello there, Sign in and start managing your website</p>
                    </div>


                    <!-- Code to show Error message -->

                    <?php if (isset($_SESSION['message1'])) { ?>
                        <div class="alert alert-warning" id="alert-message" style="margin:20px 16px 0 16px;">
                            <strong>Error! </strong>
                            <?php echo $_SESSION['message1']; ?>
                        </div>
                        <?php
                        unset($_SESSION['message']);
                    }
                    ?>


                    <!-- Form admin login -->

                    <form method="POST" enctype="multipart/form-data">

                        <div class="input-field">
                            <i class="fas fa-user input-icon"></i>
                            <input type="text" name="name_email" class="form-control py-4"
                                placeholder=" Username or E-mail " style="text-transform:none;" value="<?php echo $cookie_name?>" autocomplete="off"
                                required>
                        </div>

                        <div class="input-field">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" name="password" class="form-control py-4" style="text-transform:none;"
                                placeholder="Password" id="password" value="<?php echo $cookie_pass ?>" autocomplete="off" required>
                                <i class="fas fa-eye-slash eye-icon" id="eyeIcon"></i>

                            </div>
                        <input type="checkbox" name="remember_me" class="py-4 ml-2" autocomplete="off"> <span
                            style="font-size:15px;">Remember
                            Me</span>


                        <input type="submit" name="submit" class="submit-btn" value="Sign In">

                    </form>

                </div>
            </div>
        </div>
    </section>

    <!----------------JS Script Tags--------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        let EyeIcon=document.getElementById('eyeIcon');
        let Password=document.getElementById('password');


        EyeIcon.addEventListener('click',function(){
     if(Password.type === "password"){
        Password.type="text";
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');

     }else{
        Password.type="Password";
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');

     }
        });

    </script>

</body>

</html>