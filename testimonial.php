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

 


    <!-- Testimonial Swiper -->
    <section id="testimonial">
        <h2>Testimonials</h2>
        <p>Kinds Words From Our Clients</p>

       
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

            <?php 
        include('connection.php');
        $query="select * from testimonial ";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)):
        ?>
                <div class="swiper-slide">
                    <div class="client-msg">

                        <p> <?php echo $row['testimonial'];?></p>
                    </div>
                    <div class="client-data">
                        <img src="Image/<?php echo $row['image'];?>" alt="">
                        <div class="client-info">
                            <h5><?php echo $row['user'];?></h5>
                            <p><?php echo $row['profession'];?> | <?php echo $row['position'];?></p>
                        </div>
                    </div>
                </div>

                 <?php endwhile; ?>
                
                </div>
               
                <div class="swiper-pagination mt-3"></div>

            </div>

           
        </div>
    </section>


    <script>
        // Initialize Swiper for testimonials
var swiper = new Swiper(".mySwiper", {
    loopFillGroupWithBlank: true,
    slidesPerView: 3,
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // When window width is <= 768px
        280: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        // When window width is <= 992px
        992: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30
        }
        // Add more breakpoints as needed
    }
});

        </script>


    <!----------------JS Script Tags--------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>

</html>