<?php include("../config/db.php");
session_start();
if(!empty($_GET['file'])){
    $file = basename($_GET['file']);
    $path ="../docu/$file";
    if(!empty($file) && file_exists($path)){
        header("cache-control:public");
        header("content-Description:File Transfer");
        header("cache-Disposition:attachment; file=$file");
        header("content-transfer-encoding:binary");




        readfile($path);
        exit;




    }else{
        echo 'this file does not exist';
    }




}









?>