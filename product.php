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

    <?php include_once ('header.php'); ?>

    <!---------------Home Interface--------------->


    <section id="product-interface">
        <h3 class="anim">Product Catalog</h3>
        <p class="anim">Elevate your everyday look with our on-trend casual styles</p>
    </section>





    <!---------------Product Section--------------->

    <section id="products">
        <h2 class="anim">Amazing Collection</h2>
        <!-- <p class="anim">Discover Unique & Trendy Styles of 2024</p> -->

        <div class="filter-buttons anim">
            <div class="buttons active" data-filter="all">All</div>
            <div class="buttons" data-filter="woman">Woman</div>
            <div class="buttons" data-filter="man">Man</div>
            <div class="buttons" data-filter="baby">Kid's Arrival</div>
            <div class="buttons" data-filter="sales">Sales Offers</div>

        </div>

        <div class="product-slider swiper">
            <div class="product-wrapper swiper-wrapper">

                <div class="product-box1 swiper-slide" onclick="window.location.href='product-detail.php'"
                    data-item="woman">
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
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>


                <div class="product-box1 swiper-slide" data-item="woman">
                    <img src="Image/22.jpg" alt="">
                    <div class="product-content">
                        <span>Addidas</span>
                        <h5>Off-White Top</h5>
                        <div class="stars">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>

                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide" data-item="woman">
                    <img src="Image/122.jpg" alt="">
                    <div class="product-content">
                        <span>Addidas</span>
                        <h5>Plain T-Shirt</h5>
                        <div class="stars">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>

                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
    <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide" data-item="woman">
                    <img src="Image/55.jpg" alt="">
                    <div class="product-content">
                        <span>Addidas</span>
                        <h5>Black & White Dress</h5>
                        <div class="stars">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>

                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
    <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide " data-item="baby">
                    <img src="Image/s10.jpg" alt="">
                    <div class="product-content">
                        <span>Addidas</span>
                        <h5>Plain T-Shirt</h5>
                        <div class="stars">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>

                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="product-slider swiper">
            <div class="product-wrapper swiper-wrapper">

                <div class="product-box1 swiper-slide" data-item="man">
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
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>


                <div class="product-box1 swiper-slide" data-item="man">
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
                        <div class="price">
                            <span class="amount">RS 2600/-</span>
                            <span class="cut-price">RS 3400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide" data-item="man">
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
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide" data-item="man">
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
                        <div class="price">
                            <span class="amount">RS 1500/-</span>
                            <span class="cut-price">RS 2300/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide " data-item="man">
                    <img src="Image/s12.jpg" alt="">
                    <div class="product-content">
                        <span>Addidas</span>
                        <h5>Plain Blue T-Shirt</h5>
                        <div class="stars">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>

                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="amount">RS 1900/-</span>
                            <span class="cut-price">RS 2800/</span>
                        </div>                    </div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>




        <div class="product-slider swiper">
            <div class="product-wrapper swiper-wrapper">

                <div class="product-box1 swiper-slide" data-item="sales">
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
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>



                        </div>
                    </div>
                    <div class="off">20% Off</div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>


                <div class="product-box1 swiper-slide" data-item="sales">
                    <img src="Image/u34.jpg" alt="">
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
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>



                        </div>
                    </div>
                    <div class="off">20% Off</div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide" data-item="sales">
                    <img src="Image/s12.jpg" alt="">
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
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>

                        </div>

                    </div>
                    <div class="off">20% Off</div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide" data-item="sales">
                    <img src="Image/kid2.jpg" alt="">
                    <div class="product-content">
                        <span>Addidas</span>
                        <h5>Kid's Wool Coat</h5>
                        <div class="stars">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>

                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>


                        </div>

                    </div>
                    <div class="off">20% Off</div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>

                <div class="product-box1 swiper-slide " data-item="sales">
                    <img src="Image/kid1.jpg" alt="">
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
                        <div class="price">
                            <span class="amount">RS 1600/-</span>
                            <span class="cut-price">RS 2400/</span>
                        </div>

                    </div>
                    <div class="off">20% Off</div>
                    <div class="card-btn">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--------------Swiper Pagination------------------------------->

    <section id="pagination">

        <a href="" class="page-back"><i class="fas fa-long-arrow-alt-left "></i></a>

        <a href="" class="page-back"><i class="fas fa-long-arrow-alt-right "></i></a>
    </section>

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
            <p>Trust FashionHub for honesty and hard work. Explore our curated collection for the latest fashion trends.
            </p>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>
    <script>
        //jquery code for products filter buttons

        $('.filter-buttons .buttons').click(function () {
            $('.filter-buttons .buttons').removeClass('active'); // Remove 'active' class from all category buttons 
            $(this).addClass('active');      // Add 'active' class to the clicked button

            var dataFilter = $(this).attr('data-filter'); // Get the category of the clicked button

            if (dataFilter === 'all') {
        $('.product-slider .product-wrapper .product-box1')
            .addClass('active').removeClass('hide'); // Show all products
    } else {
        $('.product-slider .product-wrapper .product-box1')
            .removeClass('active').addClass('hide') // Hide all products
            .filter(`[data-item="${dataFilter}"]`) // Filter products based on category
            .addClass('active').removeClass('hide'); // Show filtered products
    }
});

    </script>
</body>

</html>