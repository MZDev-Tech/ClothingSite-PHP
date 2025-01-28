<?php
include('connection.php');

// Initialize variables
$valueToSearch = '';
$selected_topic = '';

// Check if search form is submitted
if (isset($_POST['search'])) {
    $valueToSearch = mysqli_real_escape_string($con, $_POST['search']);
}

// Check if topic is selected
if (isset($_GET['topic'])) {
    $selected_topic = mysqli_real_escape_string($con, $_GET['topic']);
}

// Initialize query
$query = "SELECT * FROM blog";

// Apply search or topic filter
if ($valueToSearch) {
    $query .= " WHERE CONCAT(topic,'',title) LIKE '%$valueToSearch%'";
} elseif ($selected_topic) {
    $query .= " WHERE topic='$selected_topic'";
}

// Execute the query for the blog slider
$search_result = filterTable($query);

// Construct query for recent blogs
$recent_query = "SELECT * FROM blog";
if ($valueToSearch || $selected_topic) {
    // Apply filters for search or topic
    if ($valueToSearch) {
        $recent_query .= " WHERE CONCAT(topic) LIKE '%$valueToSearch%'";
    } elseif ($selected_topic) {
        $recent_query .= " WHERE topic='$selected_topic'";
    }
}

// Add order and limit to get recent blogs
$recent_query .= " ORDER BY date DESC LIMIT 3";

// Execute the query for recent blogs
$recent_result = filterTable($recent_query);
$blogs = mysqli_fetch_all($recent_result, MYSQLI_ASSOC);

if (empty($blogs) && ($valueToSearch || $selected_topic)) {
    // If no results found, fetch the most recent blogs
    $query = "SELECT * FROM blog ORDER BY date DESC LIMIT 3";
    $recent_result = filterTable($query);
    $blogs = mysqli_fetch_all($recent_result, MYSQLI_ASSOC);
    $alertMessage = "No blogs found for the search criteria. Showing the most recent blogs.";
}

// Function to connect & execute
function filterTable($query) {
    global $con; 
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $('.alert').fadeOut('slow');
            }, 4000);
        });
    </script>
</head>
<body>

    <?php include_once('header.php'); ?>

    <section id="blog-interface">
        <div class="Article">
            <p class="anim">Get ahead with expert fashion insights on our blog!</p>
            <a href="#recent-blog">Recent Blogs</a>
        </div>
    </section>

    <section id="blog">
        <h3 class="anim">Fashion Trend Updates</h3>


        <div class="blog-slider swiper">
            <div class="blog-wrapper swiper-wrapper">
                <?php 
                include('connection.php');
                $query="select * from blog";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result)):
                ?>
                <div class="swiper-slide blog1">
                    <img src="Image/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" />
                    <div class="blog-icon">
                        <i class="fas fa-user"><span><?php echo htmlspecialchars($row['author']); ?></span></i>
                        <i class="fa-regular fa-calendar"><span><?php echo htmlspecialchars($row['date']); ?></span></i>
                    </div>
                    <div class="blog-content">
                        <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section id="recent-blog">
        <h1>Recent Blogs</h1>
        <?php if (isset($alertMessage)): ?>
        <div class="alert alert-warning m-5 p-4" role="alert">
            <?php echo $alertMessage; ?>
        </div>
        <?php endif; ?>

        <div class="parent-part">
            <div class="post-container">
                <?php while($row=mysqli_fetch_assoc($search_result )): ?>
                <div class="recent-part1">
                    <img src="Image/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" />
                    <div class="part1-content">
                        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                        <i class="fa-regular fa-calendar"><span> <?php echo htmlspecialchars($row['date']); ?></span></i>
                        <p>In a world where beauty trends come and go, one thing remains timeless: healthy, radiant skin.</p>
                        <a href="blog-detail.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn read-btn">Read More</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="recent-part2">
                <div class="search">
                    <h4>Search</h4>
                    <form method="POST">
                        <input type="text" name="search" placeholder="Search Blog Type.." value="<?php echo htmlspecialchars($valueToSearch); ?>">
                    </form>
                </div>

                <div class="blog-topics">
                    <h4>Topics</h4>
                    <ul>
                        <li><a href="?topic=Fashion#recent-blog">Fashion</a></li>
                        <li><a href="?topic=Health#recent-blog">Health</a></li>
                        <li><a href="?topic=Skincare#recent-blog">SkinCare</a></li>
                        <li><a href="?topic=Trends#recent-blog">Recent Trends</a></li>
                        <li><a href="?topic=Personality#recent-blog">Personality</a></li>
                        <li><a href="?topic=Dressing#recent-blog">Dressing</a></li>
                        <li><a href="?topic=Tricks#recent-blog">Tips & Trick</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter">
        <div class="news">
            <h2>Subscribe US</h2>
            <p>You will be notified when something new will be appeared.</p>
        </div>
        <div class="subscribe">
            <input type="text" name="email" placeholder="Email Address">
            <a href="#" class="btn btn-primary">Subscribe</a>
        </div>
    </section>

    <footer>
        <!-- Footer content -->
    </footer>
    <div class="copyright">
        <p>Copyright ©2024 FusionHub, All rights Reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".blog-slider", {
                loop: true,
                spaceBetween: 20,
                autoplay: {
                    delay: 5500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1020: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>
</body>
</html>
