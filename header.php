<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External CSS File Link -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Font Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- SWiper Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <!---------------Header Navbar--------------->

    <section id="header">
        <div class="logo">
            <!-- <i class="fas fa-shopping-basket"></i> -->
            <a href="">Fashion<span>Hub.</span></a>
        </div>

        <nav class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="blog.php">Our Blogs</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </nav>

        <div class="nav-icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>


        <!---------------Header Search Form--------------->

        <form class="search-form">
            <input type="text" name="search" id="search-field" placeholder="Search Here...">
            <label for="search-field" class="fas fa-search"></label>
        </form>

        <!---------------Header Shopping Cart--------------->
        <div class="shopping_cart">
            <span class="cross-icon" id="cross-btn"><i class="fas fa-times"></i></span>

            <h3>Your Cart</h3>
            <div class="cart-box">
                <img src="Image/shirt1.jpeg" alt="">
                <div class="cart-content">
                    <h4>T-Shirt</h4>
                    <span class="price">RS 1500/-</span>
                    <span class="quantity"><input type="number" name="quantity" value="1"></span>
                </div>
                <i class="fas fa-trash"></i>

            </div>

            <div class="cart-box">
                <img src="Image/shirt2.jpeg" alt="">
                <div class="cart-content">
                    <h4>T-Shirt</h4>
                    <span class="price">RS 1500/-</span>
                    <span class="quantity"><input type="number" name="quantity" value="1"></span>
                </div>
                <i class="fas fa-trash"></i>

            </div>

            <div class="cart-total"><span style="font-weight:600; font-size:18px">total</span> : 3000/-</div>
            <a href="" class="checkout-btn">Check Out</a>
        </div>

        <!---------------Header Login Form--------------->

        <form action="user-login.php" class="login-form" method="POST">
            <h3>Login Now</h3>
            <input type="text" style="text-transform: none;" name="email" placeholder="Email ID..." class="login-field"
                required>
            <input type="text" name="password" style="text-transform: none;" placeholder="Password..."
                class="login-field" required>
            <div class="form-content">
                <p>Forget Your password? <a href="#reset" id="reset-btn">Click Here</a></p>
                <p>Don't have account? <a href="#register" id="create-account">Create one</a></p>
            </div>
            <input type="submit" name="submit" value="Sign IN" class="login-btn main-btn">

        </form>

        <!---------------Header Register Form--------------->
        <div class="register-form" id="register" action="user-register.php">
            <div class="form-box">
                <span class="icon-cross" id="close-btn"><i class="fas fa-times"></i></span>

                <div class="form-part1">
                    <h2>Get Registered</h2>
                    <p>To become part of our community, please sign up using personal information</p>
                </div>

                <div class="form-part2">
                    <h3>Create Account Now</h3>
                    <form action="user-register.php" method="POST">
                        <input type="text" name="name" placeholder="UserName..." class="register-field"
                            style="text-transform: none;" required>
                        <input type="text" name="email" placeholder="Email ID..." class="register-field"
                            style="text-transform: none;" required>
                        <input type="text" name="phone" placeholder="Phone Number..." class="register-field"
                            style="text-transform: none;" required>
                        <input type="text" name="password" placeholder="Password..." class="register-field"
                            style="text-transform: none;" required>
                        <div class="form-content">
                            <p>Already have account? <a href="#" id="login-btn2">Login Now</a></p>
                        </div>
                        <input type="submit" name="submit" value="Sign UP" class="register-btn main-btn">
                    </form>
                </div>

            </div>
        </div>
        <!---------------Header Forget Password Form--------------->
        <form action="" class="forget-form" id="forget" method="POST">
            <h3>Forget Password</h3>
            <p>Enter Registered Email</p>
            <input type="text" name="email" style="text-transform: none;" placeholder="Email ID..."
                class="setPassword-field" required>

            <input type="submit" name="submit" value="Submit" class="forget-btn main-btn mt-4">

        </form>

        <!---------------Header Reset New Password Form--------------->
        <form action="" class="reset-form" id="reset" method="POST">
            <h3>Reset Password</h3>
            <input type="text" name="email" style="text-transform: none;" placeholder="Email ID.." value=""
                class="setPassword-field" required>
            <input type="text" name="password" style="text-transform: none;" placeholder="Enter New Password..."
                class="setPassword-field" required>
            <input type="submit" name="submit" value="Submit" class="reset-btn main-btn mt-4">
        </form>
    </section>




    <!----------------JS Script Tags--------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>
    <script>
       $(document).ready(function () {
   $('#header .navbar li:first-child').addClass('home active');
});

$(document).ready(function(){

    $('#header .navbar li a').on('click',function(event)){
        event.preventDefault();

        let $li = $(this).parent();
        $li.addClass('active');
        $li.siblings().removeClass('active');
        if(($this).is(':first-child')){
            $li.addClass('active');
        }else{
            $('#header .navbar li:first-child').removeClass('active');
        }

    }
});


    </script>
</body>

</html>