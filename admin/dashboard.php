
<?php
include("../config/db.php");
session_start();
if (!isset($_SESSION["email"])) {

    header("Refresh:0; url=login.php");


} else{

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
  <link rel="stylesheet" href="../off/css/admin.css">
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <img src="../image/logo1.jpg" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">ADMIN PAGE</h4>
          <p style="color:black ; font-weight:300;" class="font-weight-normal text-muted mb-0 ">Usmanu Danfodio University Sokoto</p>
  
  
  
        </div>
      </div>
      
    </div>
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0" style="color:green ;">Admin Dashboard</p>
    <div class="box w-100  bg-secondary ml-2">
    <h1 style="color:greenyellow;font-family: Georgia, 'Times New Roman',
     Times, serif; text-align: center; text-transform: capitalize;"><?php echo $_SESSION["email"];?></h1>
</div>
    <ul class="nav flex-coluum bg-white mb-0">
      <li class="nav-items">
        <a href="../page/home.php" class="nav-link text-dark bg-light">
          <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>Home</a>


      </li>
      </ul>
      <ul class="nav flex-coluum bg-white mb-0 pt-3">
      <li class="nav-items">
        <a href="#" class="nav-link text-dark bg-light">
          <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>About</a>
        </li>
      </ul>
      <ul class="nav flex-coluum bg-white mb-0 pt-3">
      <li class="nav-items">
        <a href="#" class="nav-link text-dark bg-light">
          <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>Setting</a>


      </li>
      </ul>
      
      <ul class="nav flex-coluum bg-white mb-0 pt-3">

      <li class="nav-items">
        <a href="../page/get/index.php" class="nav-link text-dark bg-light">
          <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>Page</a>


      </li>
      </ul>
      <hr>
      <h2 style="font-size: 15px; padding-left:15px ;padding-top: 10px;color:green;">Action</h2>
      
      <div class="nav flex-coluum bg-white mb-0 pt-3">
        
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " style="color:black ;" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i style="color: blue;" class="fa-solid fa-edit"></i> Post
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li class="nav-items"><a href="#" class="nav-link text-dark bg-light"><i  class="fa fa-book mr-3 text-primary fa-fw"></i>news</a></li>
            <li class="nav-items"><a href="#" class="nav-link text-dark bg-light"><i  class="fa fa-th-large mr-3 text-primary fa-fw"></i>event</a></li>  
</ul>
            

          
        </li>


     </div>
     <div class="nav flex-coluum bg-white mb-0 pt-3">
        
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " style="color:black ;" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i style="color: blue;" class="fa-solid fa-edit"></i> Pastquestion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li class="nav-items"><a href="100.php" class="nav-link text-dark bg-light"><i  class="fa fa-book mr-3 text-primary fa-fw"></i>100lv</a></li>
            <li class="nav-items"><a href="200.php" class="nav-link text-dark bg-light"><i  class="fa fa-book mr-3 text-primary fa-fw"></i>200lv</a></li>
            <li class="nav-items"><a href="300.php" class="nav-link text-dark bg-light"><i  class="fa fa-book mr-3 text-primary fa-fw"></i>300lv</a></li>
            <li class="nav-items"><a href="400.php" class="nav-link text-dark bg-light"><i  class="fa fa-book mr-3 text-primary fa-fw"></i>400lv</a></li>  
</ul>
            

          
        </li>


     </div>
      <div class="nav flex-coluum bg-white mb-0 pt-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " style="color:black ;" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i style="color: blue;" class="fa-solid fa-edit"></i> Manage Post
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li class="nav-items"><a href="#" class="nav-link text-dark bg-light"><i  class="fa fa-book mr-3 text-primary fa-fw"></i>News</a></li>
            <li class="nav-items"><a href="#" class="nav-link text-dark bg-light"><i  class="fa fa-th-large mr-3 text-primary fa-fw"></i>Past Question</a></li>
            <li class="nav-items"><a href="#" class="nav-link text-dark bg-light"><i  class="fa fa-th-large mr-3 text-primary fa-fw"></i>Event</a></li>    
                </ul>
            

          
        </li>
      </div>
      <div class="nav flex-coluum bg-light  mb-0 pt-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " style="color:black ;" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i style="color: blue;" class="fa-solid fa-edit"></i> Manage Users
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li class="nav-items"><a href="feedback.php" class="nav-link text-dark bg-light"><i  class="fa fa-users mr-3 text-primary fa-fw"></i> Feedback</a></li>
            <li class="nav-items"><a href="#" class="nav-link text-dark bg-light"><i  class="fa fa-comment mr-3 text-primary fa-fw"></i>Comment</a></li>
            <li class="nav-items"><a href="#" class="nav-link text-dark bg-light"><i  class="fa fa-th-large mr-3 text-primary fa-fw"></i>Event</a></li>    
      
            </ul>
            

          
        </li>
      </div>
      <hr>

        <ul class="nav flex-coluum bg-white mb-0 pt-3">
          <li class="nav-items">
            <a href="logout.php" class="nav-link text-dark bg-light">
              <i class="fa fa-th-large mr-3 text-primary fa-solid fa-fw"></i>Logout</a>
    
    
          </li>
          </ul>
          
        








    

     
     




  </div>
  <!--End vertical holder-->



  <!--Page content holder-->
  <div class="main w-100 h-100 bg-image-">
    <div class="col-lg-12">
  <div class="page-content p-5" id="content">
    <div class="row">
      <div class="col-lg-8">
     
      <marquee style="font-size:30px ; font-family: Georgia, 'Times New Roman', Times, serif;">THE MOST PEACEFUL UNIVERSITY IN NIGERIA <img src="../image/logo1.jpg" 
        style="width:30px;"></marquee>
        </div>
        </div>
    
    
    <button style="float:right ; margin-right: -50px;" id="sidebarCollapse"  type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
      <i class="fa fa-bars mr-2"></i> MENU
      
    </button>
    </div>

  </div>


  


  
    

    

  </div>
  
   
  <script src="../off/js/main.js"></script>
  <script src="../off/jr/all.min.js"></script>
  <script src="../off/js/bootstrap.min.js"></script>
  <script src="../off/jv/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
   crossorigin="anonymous"></script>
  
  
    
</body>
<script src="../off/js/main.js"></script>

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