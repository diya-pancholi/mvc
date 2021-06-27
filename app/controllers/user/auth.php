<?php
namespace Controller;

class Auth 
{
    public function post()
    {

        session_start();
        if (\Controller\Utils::isSetAll($_POST["email"], $_POST["pswd"]))
        {
        $email= $_POST['email'];
        $pswd = $_POST['pswd'];
        $user= \Model\User::getuser($email, $pswd);
        if($user)
        {
            $id= $user['id'];
            if($id!=1)
            {
                $_SESSION['uid']=$id;
                $_SESSION['role']="student";
                $host  = $_SERVER['HTTP_HOST'];
                header("Location: http://$host/home");
            }
            else
            {
                $_SESSION['uid']=$id;
                $_SESSION['role']="admin";
                $host  = $_SERVER['HTTP_HOST'];
                header("Location: http://$host/ahome");
            }       
        }
        else 
        {
            echo "invalid credentials";
        }
    }
    else 
   { echo "fill details"; }
    }
}
