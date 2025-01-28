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

    <?php include_once('header.php');?>
    <!---------------Home Interface--------------->


   <section class="interface">
    
<div class="swiper Swiper-slider" >

    <div class="swiper-wrapper">
      <div class="swiper-slide" style="height:auto;">
        <div class="img-wrap">
        <img src="Image/carousel/cc11.jpg" class="w-100 d-block" alt="img 1"/>
    
        <div class="home-content">
            <h4 data-swiper-parallax="300" >NEW COLLECTION!</h4>
            <h2 data-swiper-parallax="400" >Discover <span>Endless Choices<span></h2>
            <p data-swiper-parallax="500" >Elevate your everyday look with our on-trend casual styles</p>
            <div class="btnn" data-swiper-parallax="600">
            <a href="#" class="btn"  >Shop Now</a>
            <a href="#" class="btn b1" >Contact US</a>
            </div>
        </div>
      </div>
      </div>

      <div class="swiper-slide" style="height:auto;">
      <div class="img-wrap">
        <img src="Image/carousel/blog6.jpg" class="w-100 d-block" alt="img2"/>
        <div class="home-content">
            <h4 data-swiper-parallax="300" >NEW COLLECTION!</h4>
            <h2 data-swiper-parallax="400" >Discover <span>Endless Choices<span></h2>
            <p data-swiper-parallax="500" >Elevate your everyday look with our on-trend casual styles</p>
            <div class="btnn" data-swiper-parallax="600">
            <a href="#" class="btn"  >Shop Now</a>
            <a href="#" class="btn b1" >Contact US</a>
            </div>
        </div>
      </div>
      </div>

      <div class="swiper-slide" style="height:auto;">
      <div class="img-wrap">
        <img src="Image/carousel/hat1.jpg" class="w-100 d-block" alt="img3" />
        <div class="home-content">
            <h4 data-swiper-parallax="300" >NEW COLLECTION!</h4>
            <h2 data-swiper-parallax="400" >Discover <span>Endless Choices<span></h2>
            <p data-swiper-parallax="500" >Elevate your everyday look with our on-trend casual styles</p>
            <div class="btnn" data-swiper-parallax="600">
            <a href="#" class="btn"  >Shop Now</a>
            <a href="#" class="btn b1" >Contact US</a>
            </div>
        </div>
      </div>
      </div>
      
      <div class="swiper-slide" style="height:auto;">
      <div class="img-wrap">
        <img src="Image/carousel/cc6.jpg" class="w-100 d-block" alt="img4"/>
        <div class="home-content">
            <h4 data-swiper-parallax="300" >NEW COLLECTION!</h4>
            <h2 data-swiper-parallax="400" >Discover <span>Endless Choices<span></h2>
            <p data-swiper-parallax="500" >Elevate your everyday look with our on-trend casual styles</p>
            <div class="btnn" data-swiper-parallax="600">
            <a href="#" class="btn"  >Shop Now</a>
            <a href="#" class="btn b1" >Contact US</a>
            </div>
        </div>
      </div>
      </div>

      <div class="swiper-slide" style="height:auto;">
      <div class="img-wrap">
        <img src="Image/carousel/cc12.jpg" class="w-100 d-block" alt="img5"/>

        <div class="home-content">
            <h4 data-swiper-parallax="300" >NEW COLLECTION!</h4>
            <h2 data-swiper-parallax="400" >Discover <span>Endless Choices<span></h2>
            <p data-swiper-parallax="500" >Elevate your everyday look with our on-trend casual styles</p>
            <div class="btnn" data-swiper-parallax="600">
            <a href="#" class="btn ">Shop Now</a>
            <a href="#" class="btn b1" >Contact US</a>
            </div>
        </div>
      </div>
    </div>
    </div>
    
  <!-- swipper Pagination -->
  <div class="swiper-button-next "></div>
    <div class="swiper-button-prev"></div>

</div>

</section>

    <!---------------Feature Section--------------->

    <section id="features">
        <!-- <h2>What Will You Get!</h2>
        <p>Unveil an unparalleled shopping experience</p> -->
        <div class="feature-boxes">
            <div class="fa-box1">
                <i class="fs-5 fa fa-cart-shopping feature-icon"></i>
                <div class="content">
                    <h3>Product Catalog</h3>
                    <div class="feature-list">
                        <li>
                            <span class="list-name">Extensive Product Catalog</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>
                        </li>

                        <li>
                            <span class="list-name">Shop Thousands of Products</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>

                        <li>
                            <span class="list-name">Discover a World of Choices</span>
                            <span class="list-icon-cross"><i class="fas fa-times"></i></span>

                        </li>
                    </div>
                </div>
            </div>

            <div class="fa-box1">

                <i class="fs-5 fa fa-truck-fast feature-icon"></i>
                <div class="content">
                    <h3>Fast Shipping</h3>
                    <div class="feature-list">
                        <li>
                            <span class="list-name"> Swift and Reliable Delivery</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>
                        <li>
                            <span class="list-name">Express Shipping Options</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>

                        <li>
                            <span class="list-name">Get Your Order Fast</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>
                    </div>
                </div>
            </div>


            <div class="fa-box1">
                <i class="fs-5 fa fa-clipboard feature-icon"></i>
                <div class="content">
                    <h3>Deals & Discounts</h3>
                    <div class="feature-list">
                        <li>
                            <span class="list-name"> Exclusive Deals Just for You</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>
                        <li>
                            <span class="list-name">Save Big with Our Discounts</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>

                        <li>
                            <span class="list-name">Unbeatable Prices on Products</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>
                    </div>
                </div>
            </div>


            <div class="fa-box1">
                <i class="fs-5 fa fa-tags feature-icon"></i>
                <div class="content">
                    <h3>Easy Returns</h3>
                    <div class="feature-list">
                        <li>
                            <span class="list-name"> Hassle-Free Returns</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>
                        <li>
                            <span class="list-name">Simple Return Process</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>

                        <li>
                            <span class="list-name">Our Return Policy</span>
                            <span class="list-icon"><i class="fas fa-check"></i></span>

                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!---------------Product Section--------------->

    <section id="products">
        <h2>New Women's Release</h2>
        <p>Summer Collection 2024 With Unique & Trendy Styles</p>
        <div class="product-slider swiper">
            <div class="product-wrapper swiper-wrapper">

            <div class="product-box1 swiper-slide">
                <img src="Image/44.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Ladies Top</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 2000/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>

            <div class="product-box1 swiper-slide">
                <img src="Image/2.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Gray Jacket</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 2400/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>

            <div class="product-box1 swiper-slide">
                <img src="Image/22.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Off-White Plain Top</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 2600/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>

            <div class="product-box1 swiper-slide">
                <img src="Image/122.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Plain Green T-Shirt</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 1600/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>

            <div class="product-box1 swiper-slide">
                <img src="Image/55.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Plain Green T-Shirt</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 1600/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>






        </div>
    </section>

    <!----------------Parallax Banner Section--------------------->

    <section id="banner">
        <div class="banner-content">
            <h5>Don't Miss Out</h5>
            <h1>Latest Discount Offer's <br><span style="font-size:30px; color:white">UP TO 30% OFF</span></h1>
            <a href="#" class="banner-btn">Explore Sales</a>
            
        </div>
    </section>


    <!----------------Products part 2 Section--------------------->


    <section id="products">
        <h2>New Male Collections</h2>
        <p>Summer Collection 2024 With Unique & Trendy Styles</p>

        <div class="product-slider swiper">
            <div class="product-wrapper swiper-wrapper">

            <div class="product-box1 swiper-slide">
                <img src="Image/s4.jpeg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Printed T-shirts</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 2000/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>
            
            <div class="product-box1 swiper-slide">
                <img src="Image/s11.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Denim Jacket</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 2000/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>

            <div class="product-box1 swiper-slide">
                <img src="Image/s5.jpeg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Off-White Plain Shirt</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 2600/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>

            <div class="product-box1 swiper-slide">
                <img src="Image/s7.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Plain White T-Shirt</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 1600/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>

            <div class="product-box1 swiper-slide">
                <img src="Image/s2.jpg" alt="">
                <div class="product-content">
                    <span>Addidas</span>
                    <h5>Plain Green T-Shirt</h5>
                    <div class="stars">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>

                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <h4>RS 1600/-</h4>
                </div>
                               <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>
        </div>

        </div>
    </section>
    <!----------------Small Banner Category Section--------------------->

    <section id="banner2" class="container-fluid">
    <div class="row">

    <?php 
    include("connection.php");
    $query="select * from category";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)):
    
    ?>
        
            <div class="col-md-6 col-lg-6 col-sm-6 col-12 ">
        <div class="banner-box" style="background-image: linear-gradient(rgba(141, 108, 120, 0.447), rgba(85, 22, 74, 0.312)), url('<?php echo 'Image/' . $row['image']; ?>');">
            <h2><?php echo $row['name'];?></h2>
            <span><?php echo $row['detail'];?></span>
            <a href="#" class="b-btn">Explore Now</a>
        </div>
        </div>
       <?php endwhile; ?>
 
    </div>
    </section>


    <!-- Testimonial Swiper -->
    <?php include_once('testimonial.php');?>
    <!----------------Newsletter Section--------------------->
    <section id="newsletter">
        <div class="news">
            <h2>Subscribe US</h2>
            <p>You will be notified when something new will be appeared.</p>
        </div>
        <div class="subscribe">
            <input type="text" name="" placeholder="Email Address">
            <a href="#">Subscribe</a>
        </div>
    </section>

     <!----------------Footer Section--------------------->

    <footer>
        <div class="footer-column">
            <h4>Fashion<span style="color:rgb(207, 107, 124);">Hub</span></h4>
            <p>Trust FashionHub for honesty and hard work. Explore our curated collection for the latest fashion trends.</p>
            <div class="social-links">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="footer-column">
            <h4>Useful Links</h4>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Blogs</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact Us</a></li>
        </div>

        <div class="footer-column">
            <h4>Categories</h4>
            <li><a href="#">Woman Fashion</a></li>
            <li><a href="#">Male Collection</a></li>
            <li><a href="#">Baby Arrivals</a></li>
            <li><a href="#">Sale & Discounts</a></li>
            <li><a href="#">All Products</a></li>

        </div>

        <div class="footer-column">
            <h4>My Account</h4>
            <li><a href="#">Sign UP</a></li>
            <li><a href="#">Sign IN</a></li>
            <li><a href="#">My Order</a></li>
            <li><a href="#">View Cart</a></li>
            <li><a href="#">Take Help</a></li>
        </div>

        <div class="footer-column">
            <h4>Have Question?</h4>

            <div class="address-list">
                <li>
                    <span class="address-icon"><i class="icon fa fa-map marker"></i></span>
                    <span class="address-detail">Lahore, Model Town Block A</span>
                </li>
                <li>
                    <span class="address-icon"><i class="icon fa fa-phone"></i></span>
                    <span class="address-detail">+923345683456</span>
                </li>

                <li>
                    <span class="address-icon"><i class="icon fa fa-paper-plane"></i></span>
                    <span class="address-detail">FashionHub67@gmail.com</span>
                </li>
            </div>
        </div>
        
    </footer>
    <div class="copyright">
            <p>Copyright ©2024 FushionHub, All rights Reserved</p>
        </div>


    <!----------------JS Script Tags--------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="JS/script.js"></script>
    <!-- Swiper Code for carasoul -->
    <script>
 var swiper = new Swiper(".Swiper-slider", {
      spaceBetween: 30,
      loop:true,
      effect: "fade",
      parallax:true,

      autoplay:{
        delay: 4500,
        disableOnInteraction:false,
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      
    });
  </script>
</body>

</html>