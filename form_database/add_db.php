<?php  
      ## add data from form to dada base
        $conn = new PDO("mysql:host=localhost;dbname=form_iti","root","");
        $fname = $_POST["fname"];
        $lname =  $_POST["lname"];
        $address =  $_POST["address"];
        $countery = $_POST["country"];
        $gender = $_POST["gender"];
        $user_name = $_POST["user_name"];
        $pass = $_POST["password"];
        $conn->query("insert into 
        users(fname,lname,address,countery,gender,user_name,pass)
        values('{$fname}','{$lname}','{$address}','{$countery}','{$gender}','{$user_name}','{$pass}')");
       
//        header("Location:add.php");
        if($conn->lastInsertId()){
            $conn=null;
           // $connection->close();
           header("Location:add.php");
        
        }else{
            echo "connection error ";
        }
    ?>