<?php
session_start();
include('../connection.php');
// code to not allow admin to directly access admin panel until they are login

if(!isset($_SESSION['id']) && (empty($_SESSION['id']))){
    header('Location:../admin-login.php');
    exit();
}
// code to check if admin has submit data

if(isset($_POST['submit'])){
    $topic=mysqli_real_escape_string($con,$_POST['topic']);
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $author=mysqli_real_escape_string($con,$_POST['author']);
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $image=$_FILES['image']['name'];
    
    $sql = "Insert into blog(`topic`, `title`, `author`,`date`,`description`,`image`) values('$topic','$title','$author','$date','$description','$image')";

    $result=mysqli_query($con,$sql);
    if($result){
        $_SESSION['message']="Data Add successfully";
        header('Location:view-blog.php');
        exit();
    }else{
         $_SESSION['message']='Error! Something Went Wrong..';
         header('Location:view-blog.php');
         exit();
    }


}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External CSS File Link -->
    <link rel="stylesheet" href="../CSS/style1.css">
    <!-- Font Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- CKeditor for Blogs -->
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />

</head>

<body>


    <!-----------SideBar Section------------------->
    <?php include ('sidebar-main.php'); ?>


    <!----------------Main Header Section--------------------->
    <section id="main-page">
        <select?php include ('admin_header.php'); ?>


        <!----------------Main Page Design--------------------->
        <main id="page-content">
            <div class="page-name">
                <h3>Blog</h3>
                <p>Home / Add New</p>
            </div>

 
            <!-- Blog Record Table -->

            <div class="form-records">
                <form method="POST" action="" enctype="multipart/form-data">
                    <h4>Add New Blog</h4><br>

                    <div class="form-group">
                        <select type="text" name="topic"  class="form-control" required >
                            <option>---Select Topic---</option>
                            <option value="Health">Health</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Personality">Personality</option>
                            <option value="Trends">Trends</option>
                            <option value="Skincare">Skincare</option>
                            <option value="Dressing">Dressing</option>
                            <option value="Tricks">Tricks</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="title" placeholder="Blog Title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="author" placeholder="Author Name" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <input type="date" name="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <textarea name="description" id="editor" placeholder="Description" class="form-control"></textarea>
                    </div>


                    <div class="form-group">
                        <label style="font-weight:500;">Upload Image</label><br>
                        <input type="file" name="image" class="form-control" required>
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

    <!-- Ck Editor Js code from offical site -->

    <script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
        }
    }
</script>

<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph
    } from 'ckeditor5';

    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
            toolbar: {
                items: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            }
        } )
        .then( /* ... */ )
        .catch( /* ... */ );
</script>



</body>

</html>