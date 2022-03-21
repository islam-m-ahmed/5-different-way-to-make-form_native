<?php 
     
    
      ## add data from form to dada base
//         $conn = new PDO("mysql:host=localhost;dbname=form_iti","root","");
//         $fname = $_POST["fname"];
//         $lname =  $_POST["lname"];
//         $address =  $_POST["address"];
//         $countery = $_POST["country"];
//         $gender = $_POST["gender"];
//         $user_name = $_POST["user_name"];
//         $pass = $_POST["password"];
//         $conn->query("insert into 
//         users(fname,lname,address,countery,gender,user_name,pass)
//         values('{$fname}','{$lname}','{$address}','{$countery}','{$gender}','{$user_name}','{$pass}')");
       
// //        header("Location:add.php");
//         if($conn->lastInsertId()){
//             $conn=null;
//            // $connection->close();
//            header("Location:add.php");
        
//         }else{
//             echo "connection error ";
//         }

//''''''''''''''''''''''''''''''''''''''''''''''''''
             // validation is function
            $error_massege = [];
            $fname =ucfirst(validation($_POST["fname"])) ;
            if(strlen($_POST["fname"]) <= 3){
                  $error_massege['fname'] = "first name must be more than 3 char*";
            }
            $lname =  validation($_POST["lname"]);
            if(strlen($_POST["lname"]) <= 3){
            $error_massege['lname'] = "last name must be  more than 3 char*";
            }
            $address =  $_POST["address"];
            if(strlen($_POST["address"]) <= 6){
            $error_massege['address'] = "address  must be more than 6 char*";
            }
            $countery = $_POST["country"];
            if(strlen($_POST["country"]) <= 3){
            $error_massege['country'] = "countery  must be selected*";
            }
            $gender = $_POST["gender"];
            if(strlen($_POST["gender"]) <= 3){
            $error_massege['gender'] = "gender  must be selected*";
            }
            $user_name = $_POST["user_name"];
            if(strlen($_POST["user_name"]) <= 3){
            $error_massege['user_name'] = "first name must be more than 3 char*";
            }
            $email = validation($_POST["email"]);
            if(strlen($_POST["email"]) <= 3){
            $error_massege['email'] = "first name must be more than 3 char*";
            }  
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                  $error_massege['email'] = "email is not correct*";
            }
            $pass = $_POST["password"];
            if(strlen($_POST["password"]) <= 5){
                  $error_massege['password'] = "password must be more than 6 char*";
            }
            //error massage 
            if(count($error_massege)>0){
                
                        session_start();
                        $_SESSION['data'] = $error_massege;
                        // var_dump($_SESSION['data']);
                        // $data = json_encode($error_massege);
                        header("location:form.php?errors=1");
                        
                  
                 
            }else{
            //connection db with pdo
            $conn = new PDO("mysql:host=localhost;dbname=form_iti","root","");
            //////query
            $perper = $conn->prepare("insert into users(fname,lname,address,countery,gender,user_name,email,pass) 
            values(?,?,?,?,?,?,?,?)");
            //execute 
            $perper->execute([$fname,$lname,$address,$countery,$gender,$user_name,$email,$pass]);
            //validation f
            header("location:add.php");
            }
            function validation($data){
                  
                  $data=trim($data);
                  $data=stripslashes($data);
                  $data=htmlspecialchars($data);
                  return $data;
            };
            // header("Location:add.php");
            // if($conn->lastInsertId()){
            //       $conn = null;
            //       // $conn->close();
            //       header("Location:add.php");
            // }
            // else{
            //                   echo "connection error ";
            //             }
    ?>