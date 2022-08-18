<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head.php");?>
    <title>400lv pastquestion page</title>
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

    
        <div class='row'>
    <?php
    $sql = "SELECT * FROM past_4 ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($arr=mysqli_fetch_array($result)) {
            $id = $arr['id'];
            $title = $arr['title'];
            $file = $arr['file'];
            $date = $arr['date'];

            echo "
                    <div class='col-lg-4 mb-3'>
                        <div class='card h-100'>
                            <img src='../docu/$file' style='max-width: 100%;height: 200px;' />
                            <div class='p-3'>
                                <h3>$title</h3>
                                
                                <p>"; echo date('D M j Y, h:i:s', strtotime($date)); echo "</p>
                                <button class='btn btn-outline-dark txt-light'><a download href ='docu/$file'>download</a><i class='fa fa-download'></i></button>
                                
                            </div>
                        </div>
                    </div>

            ";
        }
    }
    ?>
                </div>
            








    


    
</body>
<style>
    body{
        background-color:greenyellow;
    }




</style>
<script src="../off/jr/all.min.js"></script>
<script src="../off/js/bootstrap.min.js"></script>
<script src="../off/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>


</html>