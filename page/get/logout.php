'<?php
session_start();
if(isset($_SESSION['email'])){
    session_destroy();
    header('Refresh:0; url=login.php');
    echo"<script>alert('user logged out sucessfuly')</script>";
}



?>