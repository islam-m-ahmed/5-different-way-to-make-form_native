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
    <h2 class="my-5 text-center m-auto">your info</h2>
    <table class="my-5 m-auto w-75 table table-info table-hover table-responsive">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>country</th>
        <th>gender</th>
        <th>skills</th>
        <th>user_name</th>
        <th>password</th>
        <th>department</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_POST["fname"] ?></td>
        <td><?php echo $_POST["lname"] ?></td>
        <td><?php echo $_POST["address"] ?></td>
        <td><?php echo $_POST["country"] ?></td>
        <td><?php echo $_POST["gender"] ?></td>
        <td><?php
                if(isset( $_POST['check_list'])){
                $skills = $_POST['check_list'];
                foreach($skills as $i){
                    echo $i."  ";
                } 
                    }
    ?></td>
        <td><?php echo $_POST["user_name"] ?></td>
        <td><?php echo $_POST["password"] ?></td>
        <td><?php echo $_POST["department"] ?></td>
      </tr>
      
    </tbody>
  </table>
</body>
</html>