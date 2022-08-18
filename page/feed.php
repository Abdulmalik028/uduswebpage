<?php
include('../config/db.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $massage =$_POST['massage'];
    if(empty($username) && empty($email)&& empty($massage)){
        echo "<script>
    alert('please enter valid information'); </script>";
   }
   elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
    alert('invalid email format');
    
    </script>";
   }
   else{
    $sql= "INSERT INTO feed(username,email,massage) VALUES('$username','$email','$massage')";
    $result = mysqli_query($con,$sql);
       


    if($result){
        
        echo "<script> alert('post sucessfully')</script>";
        
       }
       echo "POST SUCESSFULLY";
       header("Location:home.php");
       
   }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>