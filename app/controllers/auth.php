<?php
namespace Controller;

class Auth {
    public function post(){
        $email= $_POST['email'];
        $pswd = $_POST['pswd'];
        $user= \Model\User::getuser($email, $pswd);
        if($user){
        $id= $user['id'];
        if($id!=1){
        $_SESSION['uid']=$id;
        $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/home");
    }
    else{
        $_SESSION['uid']=$id;
        $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/ahome");
    }}
    else 
        {
            echo "invalid credentials";
        }
    

}

    
}
