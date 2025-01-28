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

    <!----------------Single Product detail section--------------------->
    <section id="product_detail">
        <div class="img-gallery">
            <img src="Image/44.jpg"  alt="" id="mainImg">
            <div class="img-box">
                <div class="img-box1">
                    <img src="Image/u34.jpg" alt=""  class="small-img">
                </div>

                <div class="img-box1">
                    <img src="Image/55.jpg" alt=""  class="small-img">
                </div>

                <div class="img-box1">
                    <img src="Image/22.jpg" alt=""  class="small-img">
                </div>

                <div class="img-box1">
                    <img src="Image/122.jpg" alt=""  class="small-img">
                </div>
            </div>
        </div>

        <div class="detail-column">
            <h6>Asthetic / T-shirt</h6>
            <h4>Plain OffWhite T-shirt</h4>
            <h2>Rs 1600/-</h2>
            <select>
                <option>Select Size</option>
                <option value="XL">XL</option>
                <option value="Large">Large</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="XXL">XXL</option>
</select>

<input type="number" value="1" name="" required>
<a href="" class="btn">Add To Cart</a>

<h3>Product Details</h3>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis possimus eligendi molestias. Consectetur dolorem soluta rem laudantium suscipit, cum illum ipsa odit dignissimos 
    voluptas consequatur dicta ducimus molestias tempora iusto.</p>
</div>

    </section>



<section id="products">
        <h2 class="anim">Related Products</h2>
        <p class="anim">Discover Unique & Trendy Styles of 2024</p> 
          
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

            <div class="product-box1 swiper-slide ">
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
                    <h4>RS 1800/-</h4>
                </div>
                    <div class="card-btn">
                <a href="">ADD TO CART</a>
</div>
            </div>
</div>
</div>

</section>

<!--------------Swiper Pagination------------------------------->

    <section id="pagination">
    <a href="" class="page-back">1</a>
    <a href="" class="page-back">2</a>
    <a href="" class="page-back"><i class="fa-solid fa-arrow-right-long"></i></a>
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
   <script >
   //Product Details Section code for img gallery

let MainImage = document.getElementById('mainImg');
let smallImage = document.getElementsByClassName('small-img');

smallImage[0].onclick = () => {
    MainImage.src = smallImage[0].src;
}

smallImage[1].onclick = () => {
    MainImage.src = smallImage[1].src;
}
smallImage[2].onclick = () => {
    MainImage.src = smallImage[2].src;
}
smallImage[3].onclick = () => {
    MainImage.src = smallImage[3].src;
}</script>
</body>

</html>