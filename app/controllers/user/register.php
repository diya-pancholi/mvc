<?php
namespace Controller;

class Register 
{
    public function post()
    {
        if (\Controller\Utils::isSetAll($_POST["email"], $_POST["pswd"]))
       { $email= $_POST['email'];
        $pswd = $_POST['pswd'];
       
        $newuser= \Model\User::adduser($email, $pswd);
        $user=\Model\User::getuser($email,$pswd);

        if($user)
        {
            $id= $user['id'];
            $_SESSION['uid']=$id;
           
            header("Location: /home");
        }

        else 
        {
            echo "failed registratrion";
        }
    }
    else
    echo "fill details";
    }
}