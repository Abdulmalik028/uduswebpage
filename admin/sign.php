<?php include("../config/db.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $hash_password = sha1('password');
    $number = $_POST['number'];
    if(empty($username) && empty($email) &&empty($password) && empty($cpassword) && empty($phonenumber)){
        echo"<script>alert('All field Required')</script>";

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
        alert('invalid email format');
        
        </script>";
       }elseif(!preg_match("/^[a-zA-Z ]*$/",$username)){
        echo "<script>
        alert('only letters and white space allowed');
        
        </script>";
    }

    
       
       elseif(strlen($password) < 6) {

        echo "<script>
        alert('password not satisfied atleast 6 characters');</script>";
    
       }else{
        $query="SELECT * FROM admin_reg WHERE email='$email'";
        $result =mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0) {
            echo "<script>alert('users already exist');</script>";
        }
        else {
         $sql ="INSERT INTO admin_reg(username,email,password,number)VALUES('$username','$email','$hash_password','$number')";
            $result = mysqli_query($con, $sql);
     
            if($result)
            {

                 header("Refresh:0; url = login.php");
                echo "<script> alert('registration sucessfully')</script>";
             
             
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
    <h1 style="color:green;">ADMIN REGISTRATION PAGE</h1>
    <div class="container w-20 h-70 bg-light mt-2 mb-3" style="border: 2px solid black; border-radius: 5%;" >
        <div class="log">
            <h1> REGISTER</h1>
            <hr>
            <div class="row">
                <div class="col-lg-10">
                    <form class="form-group" method="post">
                    <label for="" ><i class="fa-solid fa-user" ></i>    USERNAME</label>
                    <input type="text" name="username" placeholder="enter your name" required class="form-control">
                    <label for="" ><i class="fa-solid fa-box" ></i> EMAIL</label>
                    <input type="email" name="email" placeholder="enter valid email"  required class="form-control">

                    <label for="" >CREATE PASSWORD</label>
                    <input id="password" type="password" name="password" placeholder="password " required class="form-control">
                    
                     <label for="" >CONFIRM PASSWORD</label>
                    <input id="password" type="password" name="cpassword" placeholder="confirm password" required class="form-control"><br>
                    <label for="" >PHONE NUMBER</label>
                    <input id="password" type="number" name="number" placeholder="enter your number" required class="form-control"><br>

                    <button class="btn btn-outline-secondary mt-2 " type="submit" name="submit">Register</button>
                    <hr style="color:black ;">
                   <p style="color:black ;"> Already have an account?</p>
                    <a href="login.php" style="text-decoration: none; color: black;" class="btn btn-outline-sucess mb-2">Login now</a>
                    





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
        margin-bottom: 20px;
        
        
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

</html>