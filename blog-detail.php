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

    <?php include_once('header.php'); ?>
    <!---------------Home Interface--------------->

    <section id="blog-detail">
        <!-- Main Content Part -->

        <div class="main-content">
            <img src="Image/blog8.jpg" alt="">
            <div class="post-part1">
                <span class="post-type">Health</span>
                <h3 class="post-title">A Comprehensive Guide to Wellness: Nurturing Your Mind, Body, and Spirit</h3>
                <div class="blog-icon">

                    <i class="fas fa-user "><span> Admin</span></i>
                    <i class="fa-regular fa-calendar"><span> Feb 12, 2024</span></i>
                </div>


                <div class="post-content">
                    <p>In the fast-paced modern world, achieving a sense of well-being can sometimes feel like an
                        elusive goal. However, wellness is not just about physical health; it encompasses every aspect
                        of our lives, including mental, emotional, and spiritual well-being. In this comprehensive
                        guide, we'll explore the multifaceted nature of wellness and
                        provide practical tips and strategies to help you cultivate a balanced and fulfilling life.</p>

                    <p>Wellness is a holistic concept that encompasses all dimensions of health, including physical,
                        mental, emotional, social, and spiritual well-being. It's about striving for balance and harmony
                        in every aspect of our lives, nurturing our bodies, minds, and spirits to thrive. By adopting a
                        proactive approach to wellness,
                        we can enhance our quality of life and experience a greater sense of vitality and fulfillment.
                    </p>
                    <p>Physical wellness forms the foundation of overall well-being. It involves taking care of your
                        body through regular exercise, proper nutrition, adequate sleep, and preventive healthcare.
                        Engaging in physical activity not only strengthens muscles and improves cardiovascular health
                        but also boosts mood and reduces stress. Likewise, nourishing
                        your body with wholesome, nutrient-rich foods provides the essential fuel it needs to function
                        optimally.</p>

                    <p>Mental wellness is equally important for maintaining a healthy and balanced life. Practices such
                        as mindfulness, meditation, and deep breathing can help reduce stress, anxiety, and depression
                        while promoting cognitive clarity and emotional resilience. Cultivating positive thinking
                        patterns and engaging in activities
                        that stimulate the mind, such as learning new skills or hobbies, can also contribute to mental
                        well-being.</p>
                </div>
                <section id="pagination">

                    <a href="blog.php" class="page-back"><i class="fas fa-long-arrow-alt-left "></i></a>

                    <a href="" class="page-back"><i class="fas fa-long-arrow-alt-right "></i></a>
                </section>


            </div>
        </div>

        <!-- side bar -->
        <div class="sidebar">
            <div class="popular-post">
                <h3>Trending Posts</h3>
                <div class="post1">
                    <img src="Image/blog8.jpg" alt="">
                    <a href="#">The Ultimate Skincare Guide</a>
                </div>

                <div class="post1">
                    <img src="Image/blog7.jpg" alt="">
                    <a href="#">The Ultimate Skincare Guide</a>
                </div>

                <div class="post1">
                    <img src="Image/blog6.jpg" alt="">
                    <a href="#">The Ultimate Skincare Guide</a>
                </div>

                <div class="post1">
                    <img src="Image/blog2.jpg" alt="">
                    <a href="#">The Ultimate Skincare Guide</a>
                </div>

                <div class="post1">
                    <img src="Image/blog1.jpg" alt="">
                    <a href="#">The Ultimate Skincare Guide</a>
                </div>

                <div class="post1">
                    <img src="Image/blog4.jpg" alt="">
                    <a href="#">The Ultimate Skincare Guide</a>
                </div>
            </div>


            <div class="blog-topics">
                <h3>Topics</h3>
                <ul>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Health</a></li>
                    <li><a href="#">SkinCare</a></li>
                    <li><a href="#">Trends</a></li>
                    <li><a href="#">Personality</a></li>
                    <li><a href="#">Dressing</a></li>
                    <li><a href="#">Tips & Trick</a></li>


                </ul>
            </div>
        </div>

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


</body>

</html>