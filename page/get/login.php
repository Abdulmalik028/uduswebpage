<?php include("config/db.php");
session_start();
if (isset($_SESSION["email"])){
    header("Location:index3.php");


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
    $query = "SELECT * FROM users WHERE email='$email'&&  password ='$hash_password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 1){
        echo "<script>alert('email or password not correct');</script>";
    } 
    else{
      while ($arr=mysqli_fetch_array($result)) {
         $email = $arr['email'];
         $password =$arr['password'];
          
          
        
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;

                    
          header("Refresh:0; url = index3.php");
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
    <title>Getsolution&pastquestion loginpage</title>
</head>
<body>
    <a href="../home.php" class="btn  btn-outline-success">Back</a>
    <div class="row">
        <div class="col-lg-8">
    <marquee style="font-size:30px ; font-family: Georgia, 'Times New Roman', Times, serif;">THE MOST PEACEFUL UNIVERSITY IN NIGERIA <img src="../image/logo1.jpg" style="width:30px;"></marquee>
    </div>
    </div>
    <h1 style="color:green;">Getsolution<i class="fa-solid fa-pen"></i> & Past Question</h1>
    <div class="container w-20 h-50 bg-dark mt-2">
        <div class="log">
            <h1>LOGIN</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-group" method="post">
                    
                    <label for="" ><i class="fa-solid fa-box" ></i> EMAIL</label>
                    <input type="email" name="email" placeholder="enter your email" required class="form-control">
                    <label for="" > PASSWORD</label>
                    <input type="password" name="password" placeholder="enter your password" required class="form-control">
                    <button class="btn btn-outline-secondary mt-2 " type="submit" name="submit">LOGIN</button>
                    <hr style="color:white ;">
                   <p style="color:white ;"> Dont have an account?</p>
                    <a href="signup.php" style="text-decoration: none; color: white;" class="btn btn-outline-sucess mb-2">Register now</a>
                    





                    </form>




                </div>
            </div>



        </div>




    </div>
    
      
    
</body>
<style>
    body{
        background-color: greenyellow;
        
    }
    h1{
        color: white;
        text-align: center;
    }
    label{
        color: green;
        padding-bottom: 10px;
    }
    .container{
        width: 650px;
        height: 400px;
    }
    .form-control{
        margin-bottom: 10px;
    }
    
    
    







</style>
<script src="../off/jr/all.min.js"></script>
<script src="../off/js/bootstrap.min.js"></script>
<script src="../off/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>
<?php
}
?>
</html>