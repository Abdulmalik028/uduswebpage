<?php include("../config/db.php");
session_start();
if (isset($_SESSION["email"])){
    header("Location:dashboard.php");


}else{

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email =$_POST['email'];
  $password =$_POST['password'];
  
  $hash_password = sha1('password');

  if(empty($email) && empty($password)){
    echo "<script>
    alert('please enter valid information');</script>";
  }elseif(strlen($password) < 6) {

    echo "<script>
    alert('password not satisfied atleast 6 characters');</script>";

   } else{
    $query = "SELECT * FROM admin_reg WHERE email='$email'&&  password ='$hash_password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 1){
        echo "<script>alert('email or password not correct');</script>";
    } 
    else{
      while ($arr=mysqli_fetch_array($result)) {
         $email = $arr['email'];
         $password =$arr['password'];
         $username=$arr['username'];
          
          
        
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;
          $_SESSION['username'] = $username;

                    
          header("Refresh:0; url = dashboard.php");
      } 


  }
  }

}


  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head.php");?>
     <title>login page</title>
</head>
<body>
    <a href="#" class="btn  btn-outline-success">Back</a>
    <div class="row">
        <div class="col-lg-8">
    
    </div>
    </div>
    <h1 style="color:green;">ADMIN LOGIN PAGE</h1>
    <div class="container w-20 h-70 bg-light mt-2 mb-3" style="border: 2px solid black; border-radius: 5%;" >
        <div class="log">
            <h1>LOGIN</h1>
            <hr>
            <div class="row">
                <div class="col-lg-10">
                    <form class="form-group" method="post">
                    <label for="" ><i class="fa-solid fa-box" ></i> EMAIL</label>
                    <input type="email" name="email" placeholder="enter valid email"  required class="form-control"><label for="" >PASSWORD</label>
                    <input id="password" type="password" name="password" placeholder="password " required class="form-control">
                    <button class="btn btn-outline-secondary mt-2 " type="submit" name="submit">LOGIN</button>
                    <hr style="color:black ;">
                   <p style="color:black ;"> does not have an account?</p>
                    <a href="sign.php" style="text-decoration: none; color: black;" class="btn btn-outline-sucess mb-2">Register now</a>
                    

                </form>




                </div>
            </div>



        </div>




    </div>
    
      
    
</body>
<style>
    body{
        background-color:black;
        
    }
    h1{
        color: black;
        text-align: center;
    }

    #eye{
        position:absolute;
        right: 50.2%;
        cursor:pointer;
        
    }
    label{
        color: green;
        font-weight: 600;
        padding-bottom: 10px;
    }
    .container{
        width: 650px;
        
        padding-bottom: 30px;
        margin-bottom: 20px;
        margin-top: -20px;
    }
    .form-control{
        margin-bottom: 30px;
        
        
    }
    .input-control{
        width: 400px;
        height: 40px;
        border:2px solid white;
        border-radius:10px;
        outline:none;

    }
    .input-control:hover{
        border:2px solid blue;
    }
    marquee{
        color: white;
    }
    

    
    
    







</style>

<script src="off/js/app.js"></script>
<script src="../off/jr/all.min.js"></script>
<script src="../off/js/bootstrap.min.js"></script>
<script src="off/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>
 <?php
}
?>

</html>