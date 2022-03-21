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
  <?php session_start();
   if(!isset($_SESSION['email'])){
      header('location:login.php');
   } 
  
  ?>
    <?php 
     if(isset($_SESSION['fname'])){?>
       <h2 class="my-5 text-center m-auto">Welcome <?php echo $_SESSION['fname']  ?></h2>
   <?php } else { ?>
       <h2 class="my-5 text-center m-auto">your info  ?></h2>
          
   <?php } ?>
    <a  href="form.php" class="m-auto mt-5 mb-1 w-75 d-flex justify-content-around btn btn-primary">add new user</a>
    <table class="mb-5 m-auto w-75 table table-info table-hover table-responsive">
   
    <thead>
      <tr>
        <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>country</th>
        <th>gender</th>
        <th>user_name</th>
        <th>email</th>

        <th>password</th>
        <th>update</th>
        <th>delete</th>

      </tr>
    </thead>
    <?php 
        $conn = new PDO("mysql:host=localhost;dbname=form_iti","root","");

    ##get data from database
       $data = $conn->query("select * from users") ;
      //  var_dump($data) ;
    ##convert object to array by fetch in pdo
      // $arr = $data->fetch();
      ?>
    <tbody>
      <?php while($arr= $data->fetch()){ ?>
      <tr>
        <td><?php echo $arr["id"] ?></td>
        <td><?php echo $arr["fname"] ?></td>
        <td><?php echo $arr["lname"] ?></td>
        <td><?php echo $arr["address"] ?></td>
        <td><?php echo $arr["countery"] ?></td>
        <td><?php echo $arr["gender"] ?></td>
        <td><?php echo $arr["user_name"] ?></td>
        <td><?php echo $arr["email"] ?></td>
        <td><?php echo $arr["pass"] ?></td>
        <td><a href="update.php?id=<?php echo $arr["id"]?>"><button class="btn btn-primary">update</button></td>
        <td><a href="delete.php?id=<?php echo $arr["id"]?>"><button class="btn btn-danger">delete</button></td>
     
      </tr>
      <?php }?>
    </tbody>
  </table>
</body>
</html>