<?php
session_start();
include ('../connection.php');

// code to not allow admin to directly access admin panel until they are login

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header('Location:../admin-login.php');
    exit();

}

// code to check if admin has submit form

if (isset($_POST['submit'])) {

    $product = mysqli_real_escape_string($con, $_POST['name']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    $price = mysqli_real_escape_string($con, $_POST['price']);

    $discount_price = mysqli_real_escape_string($con, $_POST['discount_price']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $mainImage = $_FILES['image']['name'];
    
    //calculate dicount here
    
    $discount=(($price - $discount_price)/$price)*100;

    $query = "Insert into product(`product`, `category`, `company`, `quantity`, `price`,`discount_price`,`discount`, `description`, `image`) values('$product','$category','$company','$quantity','$price','$discount_price','$discount','$description','$mainImage')";
    $result = mysqli_query($con, $query);


   // Loop through the additional images and insert them into the product_images table
$product_id = mysqli_insert_id($con);
foreach ($_FILES['product_images']['tmp_name'] as $key => $tmp_name) {
    $image = addslashes(file_get_contents($_FILES['product_images']['tmp_name'][$key]));
    $query = "INSERT INTO product_images (product_id, image) VALUES ('$product_id', '$image')";
    mysqli_query($con, $query);
}




    if ($result) {
        $_SESSION['message'] = 'Data Added Successfully';

        header('Location: view-product.php ');
        exit();

    } else {
        $_SESSION['message'] = 'Error: Something went wrong.';
        header('Location: view-product.php ');

        exit();
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External CSS File Link -->
    <link rel="stylesheet" href="../CSS/style1.css">
    <!-- Font Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


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
                        <h3>Products</h3>
                        <p>Home / Add New</p>
                    </div>



                    <!-- Category Record Table -->

                    <div class="form-records">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <h4>Add New Product</h4><br>
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Product Name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="company" placeholder="Company" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <select name="category" class="form-control" required>

                                    <option value="">---Select Category---</option>
                                    <?php
                                    $list = mysqli_query($con, "select * from category");
                                    while ($row = mysqli_fetch_assoc($list)) {
                                        ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" name="quantity" placeholder="Product Quantity In Stock"
                                    class="form-control" required>
                            </div>
                            <div class="row">
                                <div class=" col-md-4 col-lg-4 col-sm-4">

                                    <div class="form-group">
                                        <input type="number" name="price" id="price" placeholder="Product Price" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="form-group">
                                        <input type="number" name="discount_price" id="discount_price" placeholder="Discount Price"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4">

                                    <div class="form-group">
                                        <input type="number"  placeholder="Total Discount"
                                            class="form-control" id="discount" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea type="text" name="description" placeholder="Description"
                                    class="form-control "></textarea>
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                <label style="font-weight:500;">Upload Image</label>
                                <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button type="button" class="btn btn-secondary" 
                                onclick=add_images() style="margin-top:30px">Add More</button>
                            </div>
                            </div>
                            
                            <div id="additional-images" class="row">
                                
                              
                            </div>


                            <div class="form-group"><br>
                                <input type="submit" name="submit" class="btn btn-info w-25">
                            </div>
                        </form>

                    </div>


                </main>

        </section>





        <!----------------JS Script Tags--------------------->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="sidebar.js"></script>
        <script>
            //code to show discount in input field after entering price and discount price
            const PriceInput=document.getElementById('price');
            const discountPriceInput=document.getElementById('discount_price'); 
            const discountInput=document.getElementById('discount');

             PriceInput.addEventListener('input',calculateDiscount);
            discountPriceInput.addEventListener('input',calculateDiscount);

            function calculateDiscount(){
            const price = parseFloat(PriceInput.value);
            const discountPrice = parseFloat(discountPriceInput.value);

            const discount =((price - discountPrice)/price)*100;
            discountInput.value = discount.toFixed(2) + '%';

            }

        //code to add new image input field 


let imageCount = 1;

function add_images() {
    imageCount++;
    const data = "<div class='col-sm-6 col-md-6 mt-2' id='add_image_box" + imageCount + "'>" +
        "<label class='form-control-label'>New Image</label>" +
        "<input type='file' name='product_images[]' class='form-control' required>" +
        "<button type='button' class='btn btn-danger mt-2 w-100' onclick=remove_image('" + imageCount + "')>Remove</button>" +
        "</div>";

    $('#additional-images').append(data);
}

function remove_image(id) {
    $('#add_image_box' + id).remove();
}


        </script>

</body>

</html>