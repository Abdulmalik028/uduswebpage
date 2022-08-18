<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('head.php'); ?>
    <title>contactpost</title>
</head>
<body>

  <!--Page content holder-->
      <div class="container">
        <h1>Manage Posts</h1>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped table-hover table-secondary">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>name</th>
                            <th>email</th>
                            <th>massage</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/db.php";
                            $sql = "SELECT * FROM feed";
                            $result = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result) > 0 ){
                                while ($arr=mysqli_fetch_array($result)){
                                    $id =$arr['id'];
                                    $username = $arr['username'];
                                    $email =$arr['email'];
                                    $massage = $arr['massage'];



                                    echo "
                                    <tr>
                                        <td>$id</td>
                                        <td>$username</td>
                                        <td>$email</td> 
                                        <td>$massage</td>
                                        <td><a class='btn btn-danger' href='delete.php?id=$id'>Delete</a></td>
                                    </tr>                                    
                                    ";
                                }
                            }





                        ?>

                    </tbody>





                </table>


            </div>
        </div>

    </div>






    </div>
    







     
</body>
<style>
    body{
        background-color:greenyellow;
    }




</style>
</html>