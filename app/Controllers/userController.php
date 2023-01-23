<?php
class UserController extends User
{
    public function registerUser()
    {
        $data['msg']="";
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $result = $this->register($firstname,$lastname,$username,$password);
            if($result == 1){
                header("location:http://localhost/user/loginUser");
            }
            else{
                $data['msg']="username already exist";
            }

        }
        
        view::load('register',$data);
    }

    public function loginUser()
    {
        if (isset($_POST["login_submit"])) {
                    
                    
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                   
        
                    $result = $this->user_login($username, $password);
                    if ($result) {
                        $_SESSION['id_user']=$result['id_user'];
                        $_SESSION['first_name']=$result['first_name'];
                        $_SESSION['last_name']=$result['last_name'];
                        header("location:http://localhost/task");
                    }
                }

        view::load('login');
    }
    
}