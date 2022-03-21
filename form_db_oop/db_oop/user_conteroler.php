<?php 
require_once('db.php');
require_once('users.php');

    if(isset($_POST['login'])){
        $conn = new db();
        // $conn = $conn->getconnection();
        // var_dump( $conn);

    $condition="email='{$_POST['email']}' and pass='{$_POST['password']}'";
    
    $data= $conn->getData("*","users",$condition);
    if($data){
        $stdData=$data->fetch();
    
        setcookie("fname",$stdData["fname"]);
        setcookie("lname",$stdData["lname"]);
        header("Location:show.php");

    }else{

    header("Location:login.php?error=1");
    }


    }
    
if(isset($_GET["id"])){
    $conn=new db();
    $conn->deleteData("users"," id ={$_GET['id']}");
    header("Location:show.php");
}


if(isset($_POST["update"])){
  
    $conn =new db();
    //updateRow($tableName,$col,$condition)
    $col="
    fname = '{$_POST["fname"]}',
    lname =  '{$_POST["lname"]}',
    address =  '{$_POST["address"]}',
    countery = '{$_POST["country"]}',
    gender = '{$_POST["gender"]}',
    user_name = '{$_POST["user_name"]}',
    pass = '{$_POST["password"]}'";
   
    $conn->update("users",$col," id = {$_POST['id']}");
    header("Location:show.php");
}
//  echo $_POST["gender"];
if(isset($_POST["add"])){
    $user=new users();
    $user->fname=$_POST['fname'];
    $user->lname=$_POST['lname'];
    // $user->email=$_POST['email'];
    $user->address=$_POST['address'];
    $user->countery=$_POST['country'];
    $user->gender=$_POST["gender"];
    $user->user_name=$_POST['user_name'];
    $user->password=$_POST['password'];
    

if(count($user->getErrors())>0){
        var_dump($user->getErrors());
    // header("localhost:form.php?error=1");


}else{
    $conn=new db();
    // email='$user->email',
   
    $col="
    fname = '{$user->fname}' ,
    lname = '{$user->lname}',
    address= '{$user->address }',
    countery=' $user->countery ',
    gender= '{$user->gender }',
    user_name= '{$user->user_name}',
    pass= '{$user->password }'";
    // echo  $col;
    if($conn->insertRow("users" ,$col)){
        header("Location:show.php");
    }else{
        echo  $col;
        echo "no";
        // header("Location:add.php?error=1");
    }

    }
    
}
?>