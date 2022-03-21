<?php
//valdition 
    if(strlen($_POST["email"])<=0 || strlen($_POST["password"])<=0 ){
       header("location:login.php?error=1");
    }else{
        session_start();

    //connect db
    $conn = new PDO("mysql:host=localhost;dbname=form_iti","root","");
    $data = $conn->query("select * from users where email='{$_POST["email"]}' and pass='{$_POST["password"]}'");
    //convert to array with feth();
    $result = $data->fetch();
    if($result){
        $_SESSION["fname"]=$result['fname'];
        $_SESSION["email"]=$result['email'];

        header("location:add.php");
    }else{
        header("location:login.php?error=1");
    }
    }

?>