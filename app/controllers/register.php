<?php
namespace Controller;

class Register {
    public function post(){
        $email= $_POST['email'];
        $pswd = $_POST['pswd'];
        $newuser= \Model\User::adduser($email, $pswd);
        $user=\Model\User::getuser($email,$pswd);
        if($user){
        $id= $user['id'];

        $_SESSION['uid']=$id;
        $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/home");
    }
    else 
        {
            echo "failed registratrion";
        }
    

}

    
}
