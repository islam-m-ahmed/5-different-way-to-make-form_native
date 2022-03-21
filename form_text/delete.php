<?php 

$file = file("text.txt");

if(isset($_GET['key'])){
    $x = $_GET['key'];
    // echo $x ; 
    // var_dump($file);
    unset($file[$x]);
    // var_dump($file);

    // $file1 = file("text.txt");

    $impold = implode(",",$file);
    file_put_contents("text.txt",$impold);//FILE_APPEND

    }
    header("location:list.php");

// 
?>