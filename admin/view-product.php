<!-- code to not allow admin to directly access admin panel until they are login -->
<?php
session_start();

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header('Location:../admin-login.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External CSS File Link -->
    <link rel="stylesheet" href="../CSS/style1.css">
    <!-- Font Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script>
        //js code to hide alert message after new seconds
        $(document).ready(function () {
            setTimeout(function () {
                $('#alertMessage').fadeOut('slow');
            }, 4000);
        });
    </script>

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
                <h3>All Products</h3>
                <p>Home / Products</p>
            </div>
            <!----------------Alert Message Show here --------------------->

            <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-warning" id="alertMessage" style="margin:30px;">
                <strong>Products! </strong>
                <?php echo $_SESSION['message']; ?>
            </div>
            <?php
            unset($_SESSION['message']);
            }
            ?>

            <!-- Products Record Table -->

            <div class="records">
                <div class="record-header">
                    <h4>Products Details</h4>
                    <div class="browse-record">
                        <input type="text" name="search" placeholder="Search Product">
                        <a href="add_product.php" class="addRecord-btn"><i class="fas fa-caret-down"></i> Add New</a>
                    </div>
                </div>
                <div class="table-section">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th style="width:70px">ID</th>
                                <th style="width:210px"><span class="las la-sort"></span>Product</th>
                                <th ><span class="las la-sort"></span>Category</th>
                                <th><span class="las la-sort"></span>Price</th>
                                <th ><span class="las la-sort"></span>Discount</th>
                                <th ><span class="las la-sort"></span>Description</th>
                                <th ><span class="las la-sort"></span>Action</th>
                        </thead>

                        <?php
                        include ('../connection.php');
                        $query = "select * from product";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td>#
                                        <?php echo $row['id']; ?>.
                                    </td>


                                    <td class="product-col">
                                        <img src="../Image/<?php echo $row['image']; ?>">
                                        <div class="product-data">
                                            <h5><?php echo $row['company']; ?></h5>
                                            <p><?php echo $row['product']; ?></p>
                                        </div>

                                    </td>

                                    <td class="description">
                                        <?php echo $row['category']; ?>
                                    </td>

                                   

                                    <td class="description">
                                        <?php echo $row['discount_price']; ?>
                                    </td>

                                    <td class="description">
                                        <?php echo $row['discount']; ?>
                                    </td>

                                    <td class="description">
                                        <?php echo $row['description']; ?>
                                    </td>

                                    <td class="action">
                                        <a href="#updateModal<?php echo $row['id'];?>" data-toggle="modal" data-target="#updateModal<?php echo $row['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#deleteModal<?php echo $row['id']; ?>" data-toggle="modal"
                                            data-target="#deleteModal<?php echo $row['id']; ?>"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>

                            </tbody>

                            <!----------------Delete Model For Category-------------------->

                            <div class="container">

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Product</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure, you want to delete this record <?php echo $row['id']; ?>.
                                                </p>
                                                <p class="text-warning"><small>This action cann't be Undo.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <a class="btn btn-danger"
                                                    href="delete-product.php?id=<?php echo $row['id']; ?>">Delete</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                               <!----------------Update Model For Category-------------------->



                               <div class="container">
                                <div class="modal fade" id="updateModal<?php echo $row['id']; ?>" role="dialog">
                                    <div class="modal-dialog">


                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Product</h4>
                                                <?php echo $row['id']; ?>
                                                <button type="button" data-dismiss="modal" class="close">&times; </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" enctype="multipart/form-data"
                                                    action="update-product.php">


                                                    <div class="form-group">
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="<?php echo $row['id']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Product</label>
                                                        <input type="text" name="product" class="form-control"
                                                            value="<?php echo $row['product']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Company</label>
                                                        <input type="text" name="company" class="form-control"
                                                            value="<?php echo $row['company']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <input type="text" name="category" class="form-control"
                                                            value="<?php echo $row['category']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Price</label>
                                                        <input type="text" name="price" class="form-control"
                                                            value="<?php echo $row['price']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Final Price</label>
                                                        <input type="text" name="discount_price" class="form-control"
                                                            value="<?php echo $row['discount_price']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Discount</label>
                                                        <input type="text" name="discount" class="form-control"
                                                            value="<?php echo $row['discount']; ?>">
                                                    </div>
                                                    

                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea type="text" name="description" class="form-control"
                                                            value="<?php echo $row['description']; ?>"><?php echo $row['description']; ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <img src="../Image/<?php echo $row['image']; ?>"
                                                            style="width:80px; height:80px; border-radius:5px; border: 3px solid #d5d7da; ">
                                                        <input type="hidden" name="img" class="form-control"
                                                            value="<?php echo $row['image']; ?>">
                                                    </div>



                                                    <div class="form-group">
                                                        <label>Upload Image</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>

                                            </div>
                                            <!------Modal Footer---->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-warning" name="submit">Update</button>

                                            </div>

                                            </form>


                                        </div>
                                    </div>

                                </div>
                            </div>


                        <?php } ?>
                    </table>
                </div>

                <div class="pagination">
                    <div><i class="fa-solid fa-angles-left"></i></div>
                    <div><i class="fa-solid fa-chevron-left"></i></div>
                    <div>1</div>
                    <div>2</div>
                    <div><i class="fa-solid fa-chevron-right"></i></div>
                    <div><i class="fa-solid fa-angles-right"></i></div>

                </div>
            </div>

        </main>

    </section>
    

    <!----------------JS Script Tags--------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="sidebar.js"></script>

</body>

</html>