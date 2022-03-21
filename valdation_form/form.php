<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title> php </title>
</head>
<body>
    <h2 class="text-center py-2 my-5">Welcome </h2>
    <div class="w-50 m-auto mb-4  border-2 border  p-4   border-primary"> 
    <form method="POST"  action="add_db.php">
        <div class="form-group mb-2">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" value="<?php /* if(isset($_POST['fname'])){echo $_POST['fname'];if(isset($_GET['errors'])){ echo "asdf";echo $_POST['fname'];}*/ ?>" placeholder="type your first name" class="mt-3 form-control">
        <!-- error massage with session -->
            <?php session_start(); ?>
           
            <?php  if(isset($_GET['errors'])){ 
                 if(isset($_SESSION['data'])){ ?>
              <?php  if(!empty($_SESSION['data']['fname'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['fname'];?> </label>

                
                <?php }  } } ?>

       
        </div>
       <div class="form-group mb-2">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" placeholder="type your last name" class="mt-3 form-control">
            <?php  if(isset($_GET['errors'])){
                 if(isset($_SESSION['data'])){ ?>
            <?php  if(!empty($_SESSION['data']['lname'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['lname'];?> </label>

                <?php }} } ?>
        </div>

       <div class="form-group mb-2">
            <label for="address" >Address:</label>
            <textarea name="address" class="mt-3 form-control" cols="30" rows="5" placeholder="type your address"></textarea>
            <?php  if(isset($_GET['errors'])){
                 if(isset($_SESSION['data'])){ ?>
            <?php  if(!empty($_SESSION['data']['address'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['address'];?> </label>

                <?php }} } ?>
        </div>
        <div class="form-group mb-2">
            <label for="country" >Country:</label>
            <select name="country" class="mt-3 form-control" id="country">
                <option value="egypt">egypt</option>
                <option value="qatar">qatar</option>
                <option value="libya">libya</option>
                <option value="sdfgh">sdfgh</option>
            </select>
            <?php  if(isset($_GET['errors'])){ 
                 if(isset($_SESSION['data'])){ ?>
            <?php  if(!empty($_SESSION['data']['country'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['country'];?> </label>

                <?php  }} } ?>
        </div>
        <div class="form-group mb-2">
            <label class="my-3" >Gender:</label>
            <label class="mx-4 form-check-label">
                <input type="radio" class="mx-1 form-check-input" value="Male" name="gender">Male
            </label>
            <label class="mx-4 form-check-label">
                <input type="radio" class="mx-1 form-check-input" value="female" name="gender">female
            </label>
            <?php  if(isset($_GET['errors'])){ 
                 if(isset($_SESSION['data'])){ ?>
            <?php  if(!empty($_SESSION['data']['gender'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['gender'];?> </label>

                <?php } } }?>
        </div>
        <div class="form-group mb-2">
            <label for="user_name">user name:</label>
            <input type="text" name="user_name" placeholder="type your last name" class="mt-3 form-control">
            <?php  if(isset($_GET['errors'])){ 
                 if(isset($_SESSION['data'])){ ?>
            <?php  if(!empty($_SESSION['data']['user_name'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['user_name'];?> </label>

                <?php }}} ?>
        </div>
        <div class="form-group mb-2">
            <label for="email">email:</label>
            <input type="email" name="email" placeholder="type your email" class="mt-3 form-control">
                <!-- first way -->
            <!-- error massage email -->
            <?php 
            //  if(isset($_GET["errors"])){
                // $data = json_decode($_GET["errors"],true); 
            //  }?>
             <?php 
            //  if(!empty($data['email']) ){ 
                 ?>
            <!-- <label class="text-danger font-weight-bolder  mb-2"><?php //echo $data['email'];?> </label> -->
         <?php // }  ?> 
         <!-- second way -->
         <?php  if(isset($_GET['errors'])){ 
              if(isset($_SESSION['data'])){ ?>
         <?php  if(!empty($_SESSION['data']['email'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['email'];?> </label>

                <?php }} } ?>
        </div>
       <div class="form-group mb-3">
            <label for="password" >password:</label>
            <input type="password" name="password" placeholder="type your last name" class="mt-3 form-control">
            <?php  if(isset($_GET['errors'])){
                 if(isset($_SESSION['data'])){ ?>
            <?php  if(!empty($_SESSION['data']['password'])){ ?>
                    <label class="text-danger font-weight-bolder  mb-2"><?php echo $_SESSION['data']['password'];?> </label>

            <?php } } }  ?>
          
        </div>

        <button class="btn btn-primary" name="submit" type="submit">Save</button>
        <button class="btn btn-danger" type="reset">Reset</button> 

    </form> 
    </div>

</body>
</html>