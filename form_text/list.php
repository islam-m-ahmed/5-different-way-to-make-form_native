<?php
// echo "hellow "


?>
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
    <div class="table-responsive">
    <table class="my-3 m-auto w-75 table table-dark table-hover ">
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
        <th>delete</th>
        <th>Update</th>

      </tr>
    </thead>
    <?php
        
        $_file = file("text.txt");
//         var_dump($_file);
        // foreach($_file as $data){
            // echo $data;
            // $student = explode(",",$data);
            // foreach($student as $value){
                // echo $value;
            // }
        // } 
    ?>
    <tbody>
        <?php 
        foreach($_file as  $key=>$data){
//	   echo($key);
            $student = explode(",",$data);
        ?>
    <tr>

        <?php  foreach($student as $value){ ?>
        <td><?php echo $value  ?></td>

        <?php } ?>
        
        <td><a href="delete.php?key=<?php echo $key;?>"><button class="btn btn-danger ">Delete</button></td>
        <td><a href="update.php?key=<?php echo $key;?>"><button class="btn btn-primary ">Update</button></td>

    </tr>

        <?php } ?>
    
    </tbody>
  </table>
  </div>
</body>
</html>