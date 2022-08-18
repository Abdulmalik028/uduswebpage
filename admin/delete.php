<?php
include "../config/db.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM feed WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo header("Refresh:0; url=feedback.php");
        echo "<script>alert('Post deleted successfully')</script>";
    }
    else {
        echo header("Refresh:0; url=feedback.php");
        echo "<script>alert('Unable to delete post')</script>";
    }
}














?>