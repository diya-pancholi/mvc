<?php
namespace Controller;

class SeeCheckOut 
{
    public function get() 
    {
        \Controller\Utils::loggedInUser();

            $uid=$_SESSION['uid'];
            echo \View\Loader::make()->render("templates/checkedout.twig", array(
                "books" => \Model\Book::seeCheckOut($uid),
            ));
       
    }

}