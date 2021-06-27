<?php
namespace Controller;

class Auth 
{
    public function post()
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
}

class Login 
{
    public function get() 
    {
        echo \View\Loader::make()->render("templates/login.twig", );
    }

}

class LogOut 
{
    public function get() 
    {
        session_destroy();
        header("Location: /");
    }
}

class Register 
{
    public function post()
    {
        $email= $_POST['email'];
        $pswd = $_POST['pswd'];
        $newuser= \Model\User::adduser($email, $pswd);
        $user=\Model\User::getuser($email,$pswd);

        if($user)
        {
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



class Signup 
{
    public function get() 
    {
        echo \View\Loader::make()->render("templates/register.twig", );
    }

}

