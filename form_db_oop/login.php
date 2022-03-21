<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->

    <title> php </title>
</head>
<body>
    <h2 class="text-center py-2 my-5 ">Login </h2>
    <div class="w-50 m-auto mb-4  border-2 border  p-4   border-primary"> 
    <form   action="user_conteroler.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"  name="email" placeholder="type your email" class="my-3 form-control">
       </div>
       <div class="form-group">
            <label for="password" >password:</label>
            <input type="password"  name="password" placeholder="type your password" class="my-3 form-control">

        </div>

        <button class="btn btn-primary" type="submit">submit</button>
         

    </form> 
    </div>

</body>
</html>