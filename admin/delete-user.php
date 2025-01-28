<?php
session_start();
include ('../connection.php');
$id = $_REQUEST['id'];
$query = "delete from user where id='$id'";
$result = mysqli_query($con, $query);
if ($result) {
    $_SESSION['message'] = 'Data Deleted Successfully';
    header('Location: view-user.php ');
    exit();

} else {
    $_SESSION['message'] = 'Error: Something went wrong.';
    header('Location: view-user.php ');

    exit();
}

?>