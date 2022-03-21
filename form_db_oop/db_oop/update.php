<?php
require_once("db.php");
$conn=new db;

$studentData=$conn->getData("*","users"," id = {$_GET['id']}");
$arr=$studentData->fetch();

?>

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
<?php 
 if(!isset($_COOKIE['fname'])){
      header('location:login.php');
   } 
  
  ?>
    <h2 class="text-center py-2 my-5">update your info </h2>
    <div class="w-50 m-auto mb-4  border-2 border  p-4   border-primary"> 
    <form method="POST"  action="user_conteroler.php">
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" value="<?php echo $arr['fname']?>" placeholder="type your first name" class="my-3 form-control">
       </div>
       <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" value="<?php echo $arr['lname']?>" placeholder="type your last name" class="my-3 form-control">
        </div>
       <div class="form-group">
            <label for="address" >Address:</label>
            <textarea name="address"  class="my-3 form-control" cols="30" rows="5" placeholder="type your address"><?php echo $arr['address']?></textarea>
        </div>
        <div class="form-group">
            <label for="country" >Country:</label>
            <!-- <input type="text" value="" name="country" class="my-3 form-control" id="country"> -->
            <select name="country"  class="my-3 form-control" id="country">
                <option value="egypt" <?php if($arr["countery"] == "egypt"){ echo "selected";} ?>>egypt</option>
                <option value="qatar" <?php if($arr["countery"] == "qatar"){ echo "selected";} ?>>qatar</option>
                <option value="libya" <?php if($arr["countery"] == "libya"){ echo "selected";} ?>>libya</option>
                <option value="sdfgh" <?php if($arr["countery"] == "sdfgh"){ echo "selected";} ?>>sdfgh</option>
            </select>
        </div>
        <div class="form-group">
            <label class="my-3" >Gender:</label>
            <!-- <input type="text"> -->
            <label class="mx-4 form-check-label">
                <input type="radio" class="mx-1 form-check-input" <?php if($arr["gender"]== "male"){ echo 'checked="checked"';} ?> 
                value="male" name="gender">Male
            </label>
            <label class="mx-4 form-check-label">
                <input type="radio" class="mx-1 form-check-input"<?php if($arr["gender"]== "female"){ echo 'checked="checked"';} ?>
                value="female" name="gender">female
            </label>
        </div>
        <div class="form-group">
            <label for="user_name">user name:</label>
            <input type="text" value="<?php echo $arr['user_name']?>" name="user_name" placeholder="type your last name" class="my-3 form-control">
        </div>
       <div class="form-group">
            <label for="password" >password:</label>
            <input type="password"value="<?php echo $arr['pass']?>" name="password" placeholder="type your last name" class="my-3 form-control">
           <!-- //important -->
            <input type="hidden" name="id" value="<?php echo $arr["id"]?>"><br>
        </div>

        <button class="btn btn-primary" name="update" type="submit">Save</button>
        <button class="btn btn-danger" type="reset">Reset</button> 

    </form> 
    </div>

</body>
</html>