<?php 
        $conn = new PDO("mysql:host=localhost;dbname=form_iti","root","");
                
        $conn->query("delete from users where id={$_GET['id']}");
       
        header("Location:add.php");



?>