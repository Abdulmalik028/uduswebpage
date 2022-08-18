
<?php
$host = "localhost";
$user = "root";
$password = "";
$db ="project";
$con = mysqli_connect($host,$user,$password,$db);
if(!$con)
{
    die("unable to connect to database: " . mysqli_connect_error());
} else{
    echo "<script>
    //alert('db connected sucessfully');
    
    </script>";
}
?>
