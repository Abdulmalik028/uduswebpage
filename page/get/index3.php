<?php
include("config/db.php");
session_start();
if (!isset($_SESSION["email"])) {

    header("Refresh:0; url=index.php");


} else {






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php include("head.php");?>
    
     <title>GEtsolution page</title>
</head>
<body>



    <div class="po">
        <marquee>WELCOME TO GETsolution<i class="fa-solid fa-pen"></i>....Send your questions and get instant result <i class="fa-solid fa-book"></i>,Get answers to all your science subjects such as English,mathematics&further mathematics,physics,chemistry and biology.</marquee>
        
        
        </div>
        <div class="pe">
            <div class="row">
                <div class="col-lg-4">
                    <h1><span>Get</span>solution</h1>
                </div>
                <div class="col-lg-4">
                
                    <nav class="nav-items">
                        <ul>
                            <li><a href="index3.php">HOME</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="logout.php">logout</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="content.php">Content</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4" >
                    
                
                </div>
            </div>
            
            
               




            
            
            
        
        </div>
        <div class="container-fluid w-100 bg-black">
            <div class="container w-100">
                <h3 id="about">About Us</h3>
                <p class="get">Get solution and past question is an educational arena which is targeted to provide necessary solutions to problems regarding all science subject such as physics, chemistry and biology,as well as english language and mathematics.This web page is so well conducted that each subject has a
                     specific tutor who provides solutions to any question pertaining to the subject he/she is given to handle.on this page is also a series of past questions based on the aforementioned subjects which you can download and study at your convenient time. </p>





</div>






        </div>
        <div class="container-fluid w-100  bg-dark"style="margin-top:-20px;">
        <div class="row w-100 ">
            <div class="col-lg-2">
            <h1 id="contact"   style="color:green;">POSTAL ADDRESS</h1>
                <ul>
                <li>Usmanu Danfodio University</li>
                <li>P.M.B 2346,Sokoto</li>
                <li>Sokoto Nigeria</li>
          
 
              </ul>





            </div>
            <div class="col-lg-2">
            <h1 id="contact"   style="color:green;">Email Contacts</h1>
                <ul>
                <li>Vchancellor@udusok.edu.ng</li>
                  <li>register@udusok.edu.ng</li>
                  <li>info@udusok.edu.ng</li>
                  <li>library@udusok.edu.ng</li>
                  <li>pg.inquiries@udusok.edu.ng</li>

 
              </ul>





            </div>
            <div class="col-lg-2">
            <h1 id="contact"   style="color:green">Quick Links</h1>
                <ul>
                
                  <li><a style="font-size:20px ; color: white;" href="#">Matriculation portal</a></li>
                  <li><a style="font-size:20px ; color: white;" href="#">undergraduate</a></li>
                  <li><a style="font-size:20px ; color: white;" href="#">content</a></li>
                  <li><a style="font-size:20px ; color: white;" href="#">History</a></li>
                  <li><a style="font-size:20px ; color: white;" href="../home.php">Feedback</a></li>
                  <li><a style="font-size:20px ; color: white;" href="#">news</a></li>
                  <li><a style="font-size:20px ; color: white;" href="#">Contact</a></li>
                  
 
              </ul>





            </div>
            
            
            







        </div>

        


        </div>
        
        
        
       
        

        <script src="../off/jr/all.min.js"></script>
        <script src="../off/js/bootstrap.min.js"></script>
        <script src="../off/jv/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
         crossorigin="anonymous"></script>
         
         <?php
          }
          ?>
        </body>
        <style>
            body{
    background-color:black;
}
h3{
    text-align:center;
    padding-top:20px;
    font-size:40px;
    padding-top:20%;
    color:darkgoldenrod;
    
}




.you li a{
  text-decoration: none;
}
 .you li a:hover{
  color: black;
}

.img-responsive{
    max-width:100%;
    float:right;
    margin-top:30%;
     
     
}
ul li{
    list-style-type: none;
    color: white;
}
ul li a{
    text-decoration: none;
}


span{
    color: black;
    
}
.get{
    
    text-indent: 30px;
    color:white;

    font-family: Georgia, 'Times New Roman', Times, serif;
    
    font-size:25px;
    padding-bottom:20%;
}




.book{
    width:100%;
    height: 70vh;
    background-color:black;
}

p{
    padding-top: 5%;
    padding-left: 5%;
    font-size: 60px;
}
.form-control{
    width: 220px;
    margin-top: 15px;
    margin-left: 90px;
    border-radius: 15px;
}
.btn{
    float: right;
    height: 40px;
    margin-top: -38px;
    padding-bottom: -20px;
    margin-right: 120px;
    border-radius: 15px;
    
}



nav{
    display: inline

}
nav ul{
    margin-top: 20px;
    margin-left: -15px;
}
nav ul li{
    display: inline;
    padding-right: 35px;
    text-decoration: none;
    
}
nav ul li a{
    text-decoration: none;
    font-size: 16px;
    color: black;
}
nav ul li a:hover{
    color: gold;
}
h1{
    color: gold;
    font-family: Arial, Helvetica, sans-serif;
}
marquee{
    font-size: 25px;
    color: gold;
    font-weight: bold;
}
.pe{
    width: 100%;
    height: 50vh;
    background-image:url('../image/libery.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    

}

.po{
    width: 100%;
    height: 50px;
    background-color: black;
    background-position: fixed;
    background-size: cover;
    background-attachment: fixed;}



        </style>
        
        
        
        
        
        </html>
        
