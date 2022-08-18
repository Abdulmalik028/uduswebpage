<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head.php");?>
    <title>100lv pastquestion page</title>
</head>
<body>
<button type="button" class="btn btn-outline-green txt-dark"><a href="content.php">BACK</a></button>
<?php include("config/db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php");?>
</head>
<body>
    <div class="main">
    <div class="row">
        <div class="col-lg-12">
        <form class="example"  id="mySearch" onkeyup="myFunction()">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>
</div>

    
        <div class='row' >
    <?php
    
    $sql = "SELECT * FROM past_1 ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($arr=mysqli_fetch_array($result)) {
            $id = $arr['id'];
            $title = $arr['title'];
            $file_name = $arr['file'];
            $date = $arr['date'];
            



           

            echo "
             <div class='col-lg-4 mb-3' >
            <div class='card h-100 mt-5' style= 'border-radius:2%; border:5px dotted white;  background-color:gold;'>
            
            <img src='docu/$file_name' style='max-width: 100%;height: 100px;'>
       
            <div class='p-3'>
            <h3>$title</h3>
                                
          <p>"; echo date('D M j Y, h:i:s', strtotime($date)); echo "</p>

                <button class='btn btn-outline-dark txt-light'><a href='docu/$file_name' download>download </a>
                                </button>
                                
                            </div>
                        </div>
                    </div>

         ";   
        }
    }
    ?>









     
     
                </div>
</div>
                
                




                             
                                
               
            








    


    
</body>
<style>
    body{
        background-color:greenyellow;
    }
    body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 60%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
form.example{
    float: right;
    
}




</style>
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

<script src="../off/jr/all.min.js"></script>
<script src="../off/js/bootstrap.min.js"></script>
<script src="../off/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>


</html>