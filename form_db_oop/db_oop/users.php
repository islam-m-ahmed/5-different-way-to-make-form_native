<?php
class users{
    private $id;
    private $fname;
    private $lname;
   //  private $email;
   private $address;
   private $countery;
   private $gender;
   private $user_name;
    private $password;
    private $error=[];

    function __set($key,$value){

        $value=trim($value);
        $value=stripslashes($value);
        $value=htmlspecialchars($value);

      if($key=="fname"){
        if(strlen($value)>3){
            $this->$key=$value;
         }else{
            $this->error["fname"]="fname must be more than 3 char";
         }

      }else if($key=="lname"){
         if(strlen($value)>3){
            $this->$key=$value;
         }else{
            $this->error["lname"]="lname must be more than 3 char";
         }
      }else if($key=="address"){
        if(strlen($value)>3){
           $this->$key=$value;
        }else{
           $this->error["address"]="lname must be more than 3 char";
        }
     }
     $this->$key=$value;
      // else if($key=="email"){
      //     if(filter_var($value,FILTER_VALIDATE_EMAIL)){
      //       $this->$key=$value;
      //     }else{
      //         $this->error["email"]="Not Valid Email";

      //     }

       

      // }
    }

    function __get($key){
        return $this->$key;
    }

    function getErrors(){
        return $this->error;
    }

}


?>