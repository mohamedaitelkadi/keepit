<?php
require (MODELS."/connexion.php");
class user extends connection 
{
    public function user_login($username, $password)
    {
        $query = "SELECT * FROM user WHERE username='$username' && password='$password' ";
        if (mysqli_num_rows(mysqli_query($this->connect(), $query)) > 0) 
        {
            return mysqli_fetch_assoc(mysqli_query($this->connect(), $query));      
        }  
    }

    public function register($firstname,$lastname,$username,$password)
    {   $sql = "SELECT * FROM user WHERE username= '$username' ";
        $req = mysqli_query($this->connect(),$sql);
        if(mysqli_num_rows($req) > 0){
            return 10;
        }
        else{
        $sql = "INSERT INTO user (first_name,last_name,username,password) VALUE('$firstname','$lastname','$username','$password')";
        
        return 1;
        }
        
       
    }

}