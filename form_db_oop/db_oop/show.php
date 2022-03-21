<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <title>test</title>
</head>
<body> 
    
          
 <?php if(isset($_COOKIE["fname"])){ ?>
            <h2 class="my-5 text-center m-auto"><?php echo "Hello ".$_COOKIE["fname"];  ?></h2>
 <?php }else{ ?>
       <h2 class="my-5 text-center m-auto">your info  ?></h2>
 <?php } ?>
   
    <table class="my-5 m-auto w-75 table table-dark table-hover table-responsive">
    <thead>
      <tr>
        <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>country</th>
        <th>gender</th>
        <th>user_name</th>
        <th>password</th>
        <th>update</th>
        <th>delete</th>

      </tr>
    </thead>
    <tbody>
    <?php require_once("db.php"); 
    //connect
    $conn= new db();
    $data=$conn->getData("*","users",1);
    $arrData=$data->fetchAll();
?>
      <?php foreach($arrData as $arr){ ?>
      <tr>
        <td><?php echo $arr["id"] ?></td>
        <td><?php echo $arr["fname"] ?></td>
        <td><?php echo $arr["lname"] ?></td>
        <td><?php echo $arr["address"] ?></td>
        <td><?php echo $arr["countery"] ?></td>
        <td><?php echo $arr["gender"] ?></td>
        <td><?php echo $arr["user_name"] ?></td>
        <td><?php echo $arr["pass"] ?></td>
        <td><a href="update.php?id=<?php echo $arr["id"]?>"><button class="btn btn-primary">update</button></td>
        <td><a href="user_conteroler.php?id=<?php echo $arr["id"]?>"><button class="btn btn-danger">delete</button></td>
     
      </tr>
      <?php }?>
    </tbody>
  </table>
</body>
</html>