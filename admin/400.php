<?php include("../config/db.php");


if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $email = $_POST['email'];
    $title = $_POST['title'];
    $file =$_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
$path ="../docu/$file";

    if(empty($email) && empty($title) && empty($file)){
        echo "<script>
    alert('please enter valid information');</script>";
 


    }else{

        move_uploaded_file($tmp_name,$path);
        $query = "INSERT INTO past_4( email,title,file) VALUES( '$email','$title','$file')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<script>
            alert('post sucessfully');</script>";
           
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

    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn-outline-green txt-dark"><a href="dashboard.php">BACK</a></button>
<div class="container w-50 bg-dark">
    <div class="row">
        <div class="col-lg-10">
    <form method="post" enctype = "multipart/form-data" class="form-group">
                       <h1>Upload<i class="fa fa-upload"></i> 400lv pastquestion</h1>
                   <label for="" >email</label>
                    <input type="email" name="email" placeholder="email" required class="form-control">
                    <label for="" >title</label>
                    <input type="text" name="title" placeholder="enter the course code"  required class="form-control">
                    <label for="" ><i class="fa-solid fa-box" ></i> File</label>
                    <input type="file" name="file" placeholder="enter the file" id="fileToUpload"  required class="form-control">
                    <button type="submit" name="submit" value="Upload file" class="btn btn-primary txt-light mt-2">Submit</button>






    </form>
</div>
</div>



</div>

    
</body>
<style>
    body{
        background-color:greenyellow;
    }
    label{
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: white;
    }
    h1{
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-align: center;
        color: green;
    }




</style>
<script src="../off/jr/all.min.js"></script>
<script src="../off/js/bootstrap.min.js"></script>
<script src="../off/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>

</html>