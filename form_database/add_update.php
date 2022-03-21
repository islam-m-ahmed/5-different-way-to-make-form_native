<?php  

      $id=$_POST["id"];
      // echo $id;
      // add data from form to dada base
        $conn = new PDO("mysql:host=localhost;dbname=form_iti","root","");
        $fname = $_POST["fname"];
        $lname =  $_POST["lname"];
        $address =  $_POST["address"];
        $countery = $_POST["country"];
        $gender = $_POST["gender"];
        $user_name = $_POST["user_name"];
        $pass = $_POST["password"];
        $conn->query("update  
        users set fname='$fname',lname='$lname',address='$address',countery='$countery',gender='$gender',user_name='$user_name',pass='$pass' 
        where id =$id ");
      
// $connection->query("update student set 
// fname='$fname',
// lname='$lname',
// email='$email',
// address='$address'
// where id =$id
// ");
        header("Location:add.php");
      
    ?>