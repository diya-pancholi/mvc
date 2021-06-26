<?php
namespace Controller;

class SeeCheckOut 
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            $uid=$_SESSION['uid'];
            echo \View\Loader::make()->render("templates/checkedout.twig", array(
                "books" => \Model\Book::seeCheckOut($uid),
            ));
        }
        else
        {
            header("Location: /");
        }
    }

}