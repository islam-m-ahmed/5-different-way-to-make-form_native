<?php
    //open fille 
// $file = fopen("text.txt","w+");
//antor way
// fwrite($file,$_POST['fname'].$_POST['lname']);
$data = @implode(",",$_POST);

// fwrite($file,$data);
file_put_contents("text.txt",$data."\n",FILE_APPEND);//FILE_APPEND
// if(!feof($file)){
//     echo fgets($file,filesize("text.txt"))."<br>";
    
// }
header("location: list.php")
?>
