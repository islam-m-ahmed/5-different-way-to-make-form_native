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
    <form method="POST"  action="test.php">
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" placeholder="type your first name" class="my-3 form-control">
       </div>
       <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" placeholder="type your last name" class="my-3 form-control">
        </div>
       <div class="form-group">
            <label for="address" >Address:</label>
            <textarea name="address" class="my-3 form-control" cols="30" rows="5" placeholder="type your address"></textarea>
        </div>
        <div class="form-group">
            <label for="country" >Country:</label>
            <select name="country" class="my-3 form-control" id="country">
                <option value="egypt">egypt</option>
                <option value="qatar">qatar</option>
                <option value="libya">libya</option>
                <option value="sdfgh">sdfgh</option>
            </select>
        </div>
        <div class="form-group">
            <label class="my-3" >Gender:</label>
            <label class="mx-4 form-check-label">
                <input type="radio" class="mx-1 form-check-input" value="Male" name="gender">Male
            </label>
            <label class="mx-4 form-check-label">
                <input type="radio" class="mx-1 form-check-input" value="female" name="gender">female
            </label>
        </div>
        <div class="form-group">
            <label class="my-3" >Skills:</label>
            <label class="mx-4 form-check-label">
                <input type="checkbox" class=" mx-1 form-check-input" value="php" name="check_list[]">php
            </label>
            <label class="mx-4 form-check-label">
                <input type="checkbox" class=" mx-1 form-check-input" value="mysql" name="check_list[]">mysql
            </label>
            <label class="mx-4 form-check-label">
                <input type="checkbox" class="mx-1 form-check-input" value="laravel" name="check_list[]">laravel
            </label>
            <label class="mx-4 form-check-label">
                <input type="checkbox" class="mx-1 form-check-input" value="html5" name="check_list[]">html5
            </label>
        </div>
        <div class="form-group">
            <label for="user_name">user name:</label>
            <input type="text" name="user_name" placeholder="type your last name" class="my-3 form-control">
        </div>
       <div class="form-group">
            <label for="password" >password:</label>
            <input type="password" name="password" placeholder="type your last name" class="my-3 form-control">

        </div>
        <div class="form-group">
            <label for="department" >Department:</label>
            <select name="department" class="my-3 form-control" id="country">
                <option value="os">os</option>
                <option value="py">py</option>
                <option value="ai">ai</option>
                <option value="cnn">cnn</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
        <button class="btn btn-danger" type="reset">Reset</button> 

    </form> 
    </div>

</body>
</html>